<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Models\User;
use Session;
use Hash;
class adhandle extends Controller
{
    public function adminview()
    {
    return view('admin.admindashboard');
    }
//listing of current users
    public function userlist()
    {
        if(!session()->get('is_admin')==1)
        {
            abort(403,'sorry not authorized');
        }
        $u=User::all();
        return view('admin.userlisting' ,['users'=>$u]);
    }
//Delete users
    public function dele($id)
    {
       User::destroy($id); 
       return redirect()->back();
    }
//edit user
    public function edit($id)
    {
        $usr=User::find($id);
        return view('admin.edituser',['users'=>$usr]);
    }
//update user
    public function update(Request $r,$id)
    {
        $usr=User::find($id);
        $usr->name=$r->name;
        $usr->email=$r->email;
        $usr->password=Hash::make($r->pass);
        if($r->isadmin==true)
             $usr->is_admin=1;
        else
            $usr->is_admin=0;
        $usr->save();
        return redirect()->back();
    }
//admin logout
    public function alogout()
    {
        Session::flush();
        return redirect('/login');
    }


  //  adding students
    public function addstud()
    {
        if(!session()->get('is_admin')==1)
        {
            abort(403,'sorry not authorized');
        }
        return view('admin.add_student');
    }
//list of currently registered students
    public function studlist()
    {
        if(!session()->get('is_admin')==1)
        {
            abort(403,'sorry not authorized');
        }
        $s=Db::table('students')->paginate(5);
       
        return view('admin.studlist',['students'=>$s]);
    }

    public function addstud1(Request $r)
        {
            if(!session()->get('is_admin')==1)
            {
                abort(403,'sorry not authorized');
            }
           
                $n=$r->name;
                $m=$r->marks;
                $d=$r->doj;
                $imagepath=request('pic')->store('images','public');
                $cvpath=request('cv')->store('cv_folder','public');


            DB::table('students')->insert([
                'name'=>$n,
                'marks'=>$m,
                'doj'=>$d,
                'pic'=>$imagepath,
                'cv'=>$cvpath
            ]);
    return view('admin.admindashboard');
    }

}
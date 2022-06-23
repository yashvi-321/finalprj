<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use Hash;
use Session;
use Mail;
class registeration extends Controller
{
    

    public function crea()
    {
            return view('users.register');
    }



    public function storing(Request $r)
    {
        $res= $r->validate([
             'name'=>'required',
             'email'=>'required',
             'pass'=>'required']
         );
        
        $u=new User();
        $u->email= $r->email;

        //checking
        $usr=User::where('email',$u->email)->exists();
        if ($usr==true)
        {
                return redirect('/login');
        }
            //otherws continue
        $u->name= $r->name;
      
        //  $r=password_hash($req->pas,PASSWORD_BCRYPT);
        
        $u->password=Hash::make($r->pass);
        $u->is_admin=0;

        $u->save();
        return redirect('/login');
       }


    public function loginview()
    {
            return view('users.login');
    }


    public function afterlogin(Request $r)
    {
         $e=$r->email;
        $p=$r->pass;
        
        $usr=User::where('email','=',$e)->first();
      
        if($usr)
        {     
                
           if (Hash::check($p, $usr->password))
            {
                $r->session()->put('email_id',$usr->email);
                $r->session()->put('login_id',$usr->id);
                $r->session()->put('name',$usr->name);
                $r->session()->put('is_admin',0);
                     
                if($usr->is_admin==1)
                {
                    $r->session()->put('is_admin',1);
                     return redirect('/adminpanel');
                     
                }
                               
                    return redirect('/home');
            }
        }
        else
        {
                return redirect('/regis');
        }

    }

    public function ulogout()
    {
        Session()->flush();
            return redirect('/login');
    }

    public function contacts()
    {
            return view('contact');
    }

    public function contactsave(Request $r)
    {
       
        $n=$r->name;
        $p=$r->phone;
        $m=$r->msg; 
        $e=$r->em;
            DB::table('contacts')->insert(['name'=>$n,'emailid'=>$e,'phone'=>$p,'msg'=>$m]);
       //
       \Mail::send('users.email', array(
        'name' => $r->get('name'),
        'email' => $r->get('em'),
        'phone' => $r->get('phone'),
        // 'subject' => $r->get('subject'),
        'form_message' => $r->get('msg'),
    ), function($message) use ($r){
        $message->from($r->em);
        $message->to('soniakukar@gmail.com', 'Hello Admin')->subject('subject here');
    });

            return redirect()->route('regis')->with('contmsg','Ur msg is sent successfully');
    }

}

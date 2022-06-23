@include('admin.adminbase') 
<div class="container bg-secondary my-5">

<form method="post" class="my-5">
                    @csrf
                    @method('put')
                    <div class="form-group  mx-5">
                <label>Name</label><br><br>
                    <input value="{{$users->name}}" name="name" type="text" class="form-control my-2" id="name"  placeholder="Enter ur Name">
                </div>
                 
                <div class="form-group mx-5">
                    <label>Email address</label><br><br>
                    <input value="{{$users->email}}" name="email" type="email" class="form-control my-2"   placeholder="Enter email">
                 </div>
                <div class="form-group  mx-5">
                    <label >Password</label><br><br>
                    <input value="{{$users->password}}" name="pass" type="password" class="form-control my-2" placeholder="Password">
                </div>
                <br><br>
                <div class="form-check bg-light mx-5">
                    <label> ADMIN Y/N</label>&nbsp&nbsp
                    
                    @if($users->is_admin==1)
                        <input  type="checkbox" id="a" name="isadmin" checked>
                    @else
                        <input  type="checkbox" id="a" name="isadmin" unchecked>
                    @endif
                </div>
                <div class="text-center"><button type="submit" class="btn btn-dark text-light my-4">Submit</button>
                </div>
                </form>
</div>
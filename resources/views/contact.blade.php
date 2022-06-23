@extends('layout.base')
@section('main')
<div class="container bg-secondary my-5">
<h2 class="text-center">Contact us</h1>
                <form method="post" class="my-5" autocomplete=off>
                    @csrf

                    <div class="form-group  mx-5">
                        <label>Name</label><br>
                        <input name="name" type="text" class="form-control my-2"  placeholder="Enter ur Name">
                    </div><br>
                    <div class="form-group  mx-5">
                         <label>Email</label><br>
                         <input name="em" type="email" class="form-control my-2"  placeholder="Enter ur email">
                    </div><br>
                    
                    <div class="form-group mx-5">
                    <label>Contact Number</label><br>
                    <input name="phone" type="text" class="form-control my-2"   placeholder="Enter Contact No.">
                     </div><br>
                    <div class="form-group  mx-5">
                        <label >Message</label><br>
                        <textarea name="msg" row=3 col=50 class="form-control my-2" placeholder="Enter your message "></textarea>
                    </div>
                    
                <div class="text-center">
                    <button type="submit" class="btn btn-dark text-light my-2">Submit</button>
                </div>
                </form>
</div>
@endsection


@extends('layout.base')
@section('title','Login')


@section('main')
<div class="container  my-5">
<h2 class="text-center">Login Form</h1>
                <form method="post" class="my-5" autocomplete=off>
                    @csrf

                    <div class="form-group  mx-5">
                      <div class="form-group mx-5">
                        <label>Email address</label><br>
                        <input name="email" type="email" class="form-control my-2"   placeholder="Enter email">
                     </div><br>
                <div class="form-group  mx-5">
                    <label >Password</label><br>
                    <input name="pass" type="password" class="form-control my-2" placeholder="Password">
                </div>
                
                <div class="text-center"><button type="submit" class="btn btn-dark text-light my-2">Submit</button>
</div>
                </form>
</div>

@endsection

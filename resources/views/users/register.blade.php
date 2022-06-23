@extends('layout.base')
@section('title','Registration')

@section('main')
<div class="container bg-secondary my-5">
@if(session()->has('contmsg'))
    <div class="alert alert-success">{{session()->get('contmsg')}}</div>
@endif
<h1>yes</h1>
<h2 class="text-center">Registration Form</h1>
                <form method="post" class="my-5" autocomplete=off>
                    @csrf

                    <div class="form-group  mx-5">
                <label>Name</label><br><br>
                    <input name="name" type="text" class="form-control my-2" id="name" value="{{old('name')}}" placeholder="Enter ur Name">
                </div>
                @error('name')
                         <div class="alert alert-danger">{{$message}}</div>
                @enderror


                <div class="form-group mx-5">
                    <label>Email address</label><br><br>
                    <input name="email" type="email" class="form-control my-2"  value="{{old('email')}}" placeholder="Enter email">
                 </div>
                 @error('email')
                         <div class="alert alert-danger">{{$message}}</div>
                @enderror

                <div class="form-group  mx-5">
                    <label >Password</label>
                    <input name="pass" type="password" class="form-control my-2" value="{{old('pass')}}" placeholder="Password">
                </div>
                @error('pass')
                         <div class="alert alert-danger">{{$message}}</div>
                @enderror

                
                <div class="text-center"><button type="submit" class="btn btn-dark text-light my-2">Submit</button>
</div>
                </form>
</div>

@endsection

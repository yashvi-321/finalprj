@include('admin.adminbase')

@if(session()->has('name'))
        <h6 class="text-center">Welcome {{session()->get('name')}}</h1>
@endif
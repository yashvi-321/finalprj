
 @include('admin.adminbase') 
<table class="table mx-5 my-5" id="tables">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Password</th>
      <th scope="col">Admin/User</th>
     
      <th scope="col">Action</th><th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
  @foreach($users as $u)
   
    <tr>
      <th scope="row">{{$u->id}}</th>
      <td>{{$u->name}}</td>
      <td>{{$u->email}}</td>
              <td>{{$u->password}}</td>
      
      <td>{{$u->is_admin}}</td>
      
          <td scope="col"><a class="btn btn-danger" href="/deleting/{{$u->id}}" >DELETE</a></td>
          <td scope="col"><a class="btn btn-warning" href="/editing/{{$u->id}}" >EDIT</a></td>
    
    </tr>
   @endforeach
  </tbody>
</table>

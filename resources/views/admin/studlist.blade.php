
 @include('admin.adminbase') 
<table class="table mx-5 my-5" id="tables">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">Name</th>
      <th scope="col">Marks</th>
      <th scope="col">Doj</th>
      <th scope="col">Pic</th>
      <th scope="col">cv</th>
    </tr>
  </thead>
  <tbody>
  @foreach($students as $s)
   
    <tr>
      <th scope="row">{{$s->id}}</th>
      <td>{{$s->name}}</td>
      <td>{{$s->marks}}</td>
      
      <td><?php echo date('d-m-Y',strtotime($s->doj)); ?></td>
          
      <td><img src="/storage/{{$s->pic}}" width="200px" height="200px"  ></td>
      <td><a href="/storage/{{$s->cv}}">cv</a></td>
     
    </tr>
   
   @endforeach
  </tbody>
  
</table>
{{$students->links()}}

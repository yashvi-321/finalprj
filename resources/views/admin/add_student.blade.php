
@include('admin.adminbase')
<div class="container my-5">
                <h2 class="text-center text-light">Student Detail</h2>
                <form method="post" class="my-5" enctype="multipart/form-data">
                    @csrf

                    <div class="form-group  mx-5">
                <label>Name</label><br>
                    <input name="name" type="text" class="form-control my-2" id="name"  placeholder="Enter ur Name">
                </div>
                 
                <div class="form-group mx-5">
                    <label>Marks</label><br>
                    <input name="marks" type="number" min=0 max=100 class="form-control my-2"   placeholder="Enter marks">
                 </div>
                 <div class="form-group mx-5">
                    <label>DOJ</label><br>
                    <input name="doj" type="date" class="form-control my-2" value="<?php echo date('Y-m-d');?>"  placeholder="Enter doj">
                 </div>
                
                 <div class="form-group  mx-5 my-3">
                    <label >Upload picture</label>
                    <input name="pic" type="file" class="form-control my-2" placeholder="Load ur pic">
                </div>
                <div class="form-group  mx-5 my-3">
                    <label >Upload cv</label>
                    <input name="cv" type="file" class="form-control my-2" placeholder="Load ur cv">
                </div>
                
                <div class="text-center"><button type="submit" class="btn btn-light text-dark my-2">Submit</button>
                </div>
                </form>
</div>

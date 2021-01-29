 @extends('layouts.nav')
 @section('title','Exam Category')

 @section('content')
 
  <div class="content-wrapper">
    
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Category</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
             
            </ol>
          </div>
        </div>
      </div>
    </div>
    

     <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
          
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Title</h3>

                <div class="card-tools">
                 <a href="#" class="btn btn-info btn-sm" data-toggle="modal" data-target="#myModal">Add New Category</a>
              </div>
            </div>
              <div class="card-body">
                <table class="table table-striped table-bordered table-hover datatable">
                  <thead>
                      <th>#</th>
                      <th>Name</th>
                 
                      <th>Status</th>
                      <th>Action</th>

                  </thead>
                  <tbody>
                    
                    @foreach($category as $i => $cat)

                    <tr>
                        <td><?php echo $i+1; ?></td>
                         <td><?php echo $cat['name']?></td>
                      
                        <td><input type="checkbox" name="status" class="category_status" data-id="<?php echo $cat['id'] ?>" <?php if($cat['status']==1){echo "checked";}?> >
                          <!--input type="checkbox" name="status" id="test"-->
                        </td>
                        <td>
                            <a href="{{url('admin/edit_category/'.$cat['id'])}}" class="btn btn-primary">Edit</a>
                            <a href="{{url('admin/delete_category/'.$cat['id'])}}" class="btn btn-danger">Delete</a>
                        </td>
                    </tr>


                    @endforeach

                  </tbody>

                </table>
              </div>
           
            </div>
        
          </div>
        </div>
      </div>
    </section>
  

    <div class="modal fade" id="myModal" role="dialog">
<div class="modal-dialog">


  <div class="modal-content">
    <div class="modal-header">
      <h4 class="modal-title">Add New Category</h4>
      <button type="button" class="close" data-dismiss="modal">&times;</button>
      
    </div>
    <div class="modal-body">

      <form action="{{url('admin/add_new_category')}}" class="database_opt">
        {{ csrf_field() }}

      
     <div class="row">
        <div class="col-sm-12">
            <div class="form-group">

              <label for="Name">Enter Category</label>
              <input type="text" name="name" class="form-control" required>            
             
            </div>

            
        </div>
        <div class="col-sm-12">
            <div class="form-group">

            <button class="btn btn-primary" >Submit</button>          

            </div>
        </div>
      </div>
      </form>
    </div>
  </div>
</div>
</div>
</div>  
  
</div>


</div>

    @endsection


 @extends('layouts.nav')
 @section('title','Manage Question')

 @section('content')
 
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Question</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

     <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <!-- Default box -->
            <div class="card">
              <div class="card-header">
                

                <div class="card-tools">
                 <a href="#" class="btn btn-info btn-sm" data-toggle="modal" data-target="#myModal">Add New Question</a>
              </div>
            </div>
              <div class="card-body">
                <table class="table table-striped table-bordered table-hover datatable">
                  <thead>
                      <th>#</th>
                      <th>Question</th>
                      <th>Ans</th>
                      <th>Status</th>
                      <th>Action</th>
                    
                   		 @foreach($exam as $i => $p)
                     	<tr>
                      		<td><?php echo $i+1 ?></td>
                      		<td><?php echo $p['question'];?></td>
                      		<td><?php echo $p['ans'];?></td>
                      		
                      		<td><input type="checkbox" name="status" class="question_status" data-id="<?php echo $p['id'] ?>" <?php if($p['status']==1){echo "checked";}?> ></td>

                      		<td>
                            	<a href="{{url('admin/edit_exam_ques/'.$p['id'])}}" class="btn btn-primary">Edit</a>
                            	<a href="{{url('admin/delete_exam_ques/'.$p['id'])}}" class="btn btn-danger">Delete</a>
                       		</td>
                      </tr>
                    @endforeach
 
 
 				

                  </thead>
                  <tbody>
                    
                  

                  </tbody>

                </table>
              </div>
              <!-- /.card-body -->
             
              <!-- /.card-footer-->
            </div>
            <!-- /.card -->
          </div>
        </div>
      </div>
    </section>
  

    <div class="modal fade" id="myModal" role="dialog">
<div class="modal-dialog modal-lg">

  <!-- Modal content-->
  <div class="modal-content">
    <div class="modal-header">
      <h4 class="modal-title">Add New Question</h4>
      <button type="button" class="close" data-dismiss="modal">&times;</button>
      
    </div>
    <div class="modal-body">

      <form action="{{url('admin/add_new_question')}}" class="database_opt">

        {{ csrf_field() }}
     <div class="row">
        <div class="col-sm-12">
            <div class="form-group">

              <label for="question">Enter Question</label>
              <input type="hidden" name="exam_id" value="{{ Request::segment(3)}}">
              <input type="text" name="question" class="form-control" required>            

            </div>
        </div>
        
      <div class="col-sm-6">
            <div class="form-group">

              <label for="option1">Option 1</label>
              <input type="text" name="option1" class="form-control" required>            

            </div>
        </div>

        <div class="col-sm-6">
            <div class="form-group">

              <label for="option2">Option 2</label>
              <input type="text" name="option2" class="form-control" required>            

            </div>
        </div>

     <div class="col-sm-6">
            <div class="form-group">

              <label for="option3">Option 3</label>
              <input type="text" name="option3" class="form-control" required>            

            </div>
        </div>
        <div class="col-sm-6">
            <div class="form-group">

              <label for="option4">Option 4</label>
              <input type="text" name="option4" class="form-control" required>            

            </div>
        </div>

        <div class="col-sm-12">
            <div class="form-group">

              <label for="option1">Enter Right Ans</label>
              <input type="text" name="ans" class="form-control" required>            

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


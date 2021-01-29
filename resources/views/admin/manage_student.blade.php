 @extends('layouts.nav')
 @section('title','Manage Student')

 @section('content')
 <br><br>
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Manage Student</h1>
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
                

                <!--div class="card-tools">
                 <a href="#" class="btn btn-info btn-sm" data-toggle="modal" data-target="#myModal">Add New Student</a>
              </div-->
            </div>
              <div class="card-body">
                <table class="table table-striped table-bordered table-hover">
                  <thead>
                      <th>#</th>
                      <th>Name</th>
                      <th>Date Of Birth</th>
                      <th>Exam</th>
                      <th>Exam Date</th>
                      <th>Result</th>
                      <th>Status</th>
                      <th>Action</th>

                      @foreach($student as $i => $std)

                    <tr>
                        <td><?php echo $i+1; ?></td>
                        <td><?php echo $std['name']?></td>
                        <td><?php echo $std['dob']?></td>
                        <td><?php echo $std['ex_name']?></td>
                     
                        <td><?php echo $std['exam_date']?></td>
                        <td>N/A</td>
                        
                        <td><input type="checkbox" name="status" class="student_status" data-id="<?php echo $std['id'] ?>" <?php if($std['status']==1){echo "checked";}?> >
                          <!--input type="checkbox" name="status" id="test"-->
                        </td>
                        <td>
                            <!--a href="{{url('admin/edit_student/'.$std['id'])}}" class="btn btn-primary">Edit</a-->
                            <a href="{{url('admin/delete_student/'.$std['id'])}}" class="btn btn-danger">Delete</a>
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
<div class="modal-dialog">

  <!-- Modal content-->
  <div class="modal-content">
    <div class="modal-header">
      <h4 class="modal-title">Add New Student</h4>
      <button type="button" class="close" data-dismiss="modal">&times;</button>
      
    </div>
    <div class="modal-body">

      <form action="{{url('admin/add_new_student')}}" class="database_opt">

        {{ csrf_field() }}
     <div class="row">
        <div class="col-sm-12">
            <div class="form-group">

              <label for="Name">Name</label>
              <input type="text" name="name" class="form-control" required>            

            </div>
        </div>
        
      <div class="col-sm-12">
            <div class="form-group">

              <label for="email">E-Mail</label>
              <input type="text" name="email" class="form-control" required>            

            </div>
        </div>

        <div class="col-sm-12">
            <div class="form-group">

              <label for="mobile_no">Mobile No</label>
              <input type="text" name="mobile_no" class="form-control" required>            

            </div>
        </div>

        <div class="col-sm-12">
            <div class="form-group">

              <label for="dob">Date Of Birth</label>
              <input type="date" name="dob" class="form-control" required>            

            </div>
        </div>


        <div class="col-sm-12">
            <div class="form-group">

              <label for="Name">Select Exam Category</label>
              <select name="exam" class="form-control" required>            
                  <option value="">Select</option>
                  @foreach($exams as $exam)
                          <option value="{{$exam['id']}}">{{$exam['title']}}</option>
                  @endforeach
                 
                  </select>
            </div>
        
      </div>



     

        <div class="col-sm-12">
            <div class="form-group">

              <label for="password">Password</label>
              <input type="password" name="password" class="form-control" required>            

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


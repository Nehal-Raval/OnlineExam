 @extends('layouts.nav')
 @section('title','Manage Exam')

 @section('content')
 
 <script type="text/javascript">
  
      $(document).ready(function(){

          $('.datatable1').dataTable();

      });

</script>

  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Manage Exam</h1>
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
                 <a href="#" class="btn btn-info btn-sm" data-toggle="modal" data-target="#myModal">Add New Exam</a>
              </div>
            </div>
              <div class="card-body">
                <table class="table table-striped table-bordered table-hover datatable">
                  <thead>
                      <th>#</th>
                      <th>Title</th>
                      <th>Category</th>
                 
                      <th>Exam Date</th>
                      <th>Result</th>
                      <th>Status</th>
                      <th>Action</th>

                       @foreach($exams as $i => $exam)
                      <tr>
                          
                            <td><?php echo $i+1 ?></td>
                              <td><?php echo $exam['title']; ?></td>
                               <td><?php echo $exam['cat_name']?></td>
                              
                                <td><?php echo $exam['exam_date']?></td>
                                <td>N/A</td>
                                <td><input type="checkbox" name="status" class="exam_status" data-id="<?php echo $exam['id'] ?>" <?php if($exam['status']==1){echo "checked";}?> >
                          <!--input type="checkbox" name="status" id="test"-->
                        </td>
                        <td>
                            <a href="{{url('admin/edit_exam/'.$exam['id'])}}" class="btn btn-info">Edit</a>
                            <a href="{{url('admin/delete_exam/'.$exam['id'])}}" class="btn btn-danger">Delete</a>
                            <a href="{{url('admin/Add_question/'.$exam['id'])}}" class="btn btn-primary">Add Question</a>
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
      <h4 class="modal-title">Add New Exam</h4>
      <button type="button" class="close" data-dismiss="modal">&times;</button>
      
    </div>
    <div class="modal-body">

      <form action="{{url('admin/manage_new_exeam')}}" class="database_opt">

        {{ csrf_field() }}
     <div class="row">
        <div class="col-sm-12">
            <div class="form-group">

              <label for="Name">Title</label>
              <input type="text" name="title" class="form-control" required>            

            </div>
        </div>
        
        <div class="col-sm-12">
            <div class="form-group">

              <label for="Name">Select Exam Date</label>
              <input type="date" name="exam_date" class="form-control" required>            

            </div>
        </div>


        <div class="col-sm-12">
            <div class="form-group">

              <label for="Name">Select Exam Category</label>
              <select name="category" class="form-control" required>            
                  <option value="">Select</option>
                  @foreach($category as $cat)
                    <option value="{{ $cat['id'] }}">{{ $cat['name'] }}</option>
                  @endforeach
                  </select>
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


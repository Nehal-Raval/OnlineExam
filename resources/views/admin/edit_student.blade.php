 @extends('layouts.nav')
 @section('title','Edit Student')

 @section('content')
 
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Edit Student</h1>
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
                

                
            </div>
              <div class="card-body">


      <form action="{{url('admin/edit_new_student')}}" class="database_opt">

        {{ csrf_field() }}
     <div class="row">
        <div class="col-sm-12">
            <div class="form-group">

              <label for="Name">Name</label>
              <input type="hidden" name="id" value=" {{ $student->id }}">
              <input type="text" name="name" class="form-control" value="{{$student->name}}"required>            

            </div>
        </div>
        
      <div class="col-sm-12">
            <div class="form-group">

              <label for="email">E-Mail</label>
              <input type="text" name="email" value="{{$student->email}}"class="form-control" required>            

            </div>
        </div>

        <div class="col-sm-12">
            <div class="form-group">

              <label for="mobile_no">Mobile No</label>
              <input type="text" name="mobile_no" value="{{$student->mobile_no}}"class="form-control" required>            

            </div>
        </div>

        <div class="col-sm-12">
            <div class="form-group">

              <label for="dob">Date Of Birth</label>
              <input type="date" name="dob" class="form-control"value="{{$student->dob}}" required>            

            </div>
        </div>


        <div class="col-sm-12">
            <div class="form-group">

              <label for="Name">Select Exam Category</label>
              <select name="exam" class="form-control" required>            
                  <option value="">Select</option>
                      @foreach($exams as $exam)
                          <option <?php if($student->exam==$exam['id']){echo "selected";} ?>value="{{ $exam['id'] }}">{{ $exam['title'] }}</option>
                  @endforeach
                 
                  </select>
            </div>
        
      </div>


        <div class="col-sm-12">
            <div class="form-group">

              <label for="password">Password</label>
              <input type="password" name="password" value="{{$student->password}}" class="form-control" required>            

            </div>
        </div>

        <div class="col-sm-12">
            <div class="form-group">

                <button class="btn btn-primary" >update</button>          

            </div>
        </div>
      </div>
      </form>
               
              </div>
              <!-- /.card-body -->
             
              <!-- /.card-footer-->
            </div>
            <!-- /.card -->
          </div>
        </div>
      </div>
    </section>
  
</div>

    @endsection


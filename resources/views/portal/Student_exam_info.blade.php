 @extends('layouts.portal')
 @section('title','Exam')

 @section('content')
 
   <div class="content">
    <div class="content-header">
     <div class="container-fluid">
        <div class="row">
          <div class="col-sm-2"></div>
          <div class="col-sm-8">
            <h1 class="text-dark">Student Exam Info</h1>
          </div>
              </div>
      </div>
    </div>
  </div>
    </div>
    <!-- /.content-header -->.

        <!-- /.content-header -->


     <section class="content">
      <div class="container-fluid">
        <div class="row">
               <div class="col-sm-2"></div>
          <div class="col-sm-8">
            <!-- Default box -->
            <div class="card">
              <div class="card-header">
                
                <div class="row">
       

          <div class="col-sm-4"> 
              <h3>{{ $exams->title }}</h3>
        </div>
        <div class="col-sm-6 "> 
              <h3><span class="float-right">{{date('d M,Y',strtotime( $exams->exam_date)) }}</span></h3>
        </div>
            
                
            </div>
      <div class="card-body">


      <form action="{{url('portal/edit_exam_form')}}" class="database_opt">

        {{ csrf_field() }}
     <div class="row">
        <div class="col-sm-12">

            <div class="form-group">

              <label for="Name">Name</label>
              <input type="hidden" name="id" value="{{$student_info[0]['id']}}">
              <input type="text" name="name" class="form-control" value="{{$student_info[0]['name']}}" required>            

            </div>
        </div>
        
      <div class="col-sm-12">
            <div class="form-group">

              <label for="email">E-Mail</label>
              <input type="text" name="email" value="{{ $student_info[0]['email']}}" class="form-control" required>            

            </div>
        </div>

        <div class="col-sm-12">
            <div class="form-group">

              <label for="mobile_no">Mobile No</label>
              <input type="text" name="mobile_no" value="{{ $student_info[0]['mobile_no']}}" class="form-control" required>            

            </div>
        </div>

        <div class="col-sm-12">
            <div class="form-group">

              <label for="dob">Date Of Birth</label>
              <input type="date" name="dob" value="{{ $student_info[0]['dob']}}" class="form-control" required>            

            </div>
        </div>


       


        <div class="col-sm-12">
            <div class="form-group">

              <label for="password">Password</label>
              <input type="password" name="password" value="{{ $student_info[0]['password']}}" class="form-control" required>            

            </div>
        </div>

        <div class="col-sm-12">
            <div class="form-group">

                <button class="btn btn-primary" >Update</button>          

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


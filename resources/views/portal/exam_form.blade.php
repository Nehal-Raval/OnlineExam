 @extends('layouts.portal')
 @section('title','Exam')

 @section('content')
 
  
  <div class="content">
    <div class="content-header">
     <div class="container-fluid">
        <div class="row">
          <div class="col-sm-2"></div>
          <div class="col-sm-8">
            <h1 class="text-dark">Manage Exam</h1>
          </div>
              </div>
      </div>
    </div>
  </div>
    </div>
    <!-- /.content-header -->

      <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-sm-2"></div>
          <div class="col-sm-8">
            <div class="card">
             
              <div class="card-body">
       

          <div class="col-sm-6"> 
              <h3>{{ $exam_title }}</h3>
        </div>
        <div class="col-sm-12 "> 
              <h3><span class="float-right" style="margin-top: -35px;">{{date('d M,Y',strtotime( $exam_date)) }}</span></h3>
        </div>
          
                
            </div>
      <div class="card-body">


      <form action="{{url('portal/add_exam_form')}}" class="database_opt">

        {{ csrf_field() }}
     <div class="row">
        <div class="col-sm-12">

            <div class="form-group">

              <label for="Name">Name</label>
              <input type="hidden" name="id" value="{{ $id }}">
              <input type="text" name="name" class="form-control" value="" required>            

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
              <input type="text" name="mobile_no"  class="form-control" required>            

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


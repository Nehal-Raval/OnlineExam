 @extends('layouts.portal')
 @section('title','Edit Student')

 @section('content')
 
  <div class="content">
    <div class="content-header">
     <div class="container-fluid">
        <div class="row">
          <div class="col-sm-2"></div>
          <div class="col-sm-8">
            <h1 class="text-dark">Update Form</h1>
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


      <form action="{{url('portal/Student_exam_info')}}" method="get">

        {{ csrf_field() }}
     <div class="row">
      
        <div class="col-sm-12">
            <div class="form-group">

              <label for="mobile_no">Mobile No</label>
              <input type="text" name="mobile_no" value=""class="form-control" required>            

            </div>
        </div>

        <div class="col-sm-12">
            <div class="form-group">

              <label for="dob">Date Of Birth</label>
              <input type="date" name="dob" class="form-control"value="" required>            

            </div>
        </div>


        <div class="col-sm-12">
            <div class="form-group">

              <label for="Name">Select Exam Category</label>
              <select name="exam" class="form-control" required>            
                  <option value="">Select</option>
                      @foreach($exam_date as $exam)
                          <option value="{{ $exam['id'] }}">{{ $exam['title'] }}</option>
                  @endforeach
                 
                  </select>
            </div>
        
      </div>


       

        <div class="col-sm-12">
            <div class="form-group">

                <button class="btn btn-primary" >Search</button>          

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


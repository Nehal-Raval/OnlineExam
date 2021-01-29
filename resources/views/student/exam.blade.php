 @extends('layouts.student')
 @section('title','Exam Dashborad')

 @section('content')
    <div class="content">
    <div class="content-header">
     <div class="container-fluid">
        <div class="row">
          <div class="col-sm-2"></div>
          <div class="col-sm-8">
            <h1 class="text-dark">Exam</h1>
          </div>
              </div>
      </div>
    </div>
  </div>
    </div>
    <br><br>
    <section class="content">
      <div class="container-fluid"> 
        <div class="row">
          <div class="col-sm-2"></div>
          <div class="col-sm-8">
            <div class="card">
             
              <div class="card-body">
                <table class="table table-striped table-bordered table-hover">
                  <thead>
                      <th>#</th>
                      <th>Exam Title</th>
              
                      <th>Exam Date</th>
                      <th>Status</th>
            
                      <th>Action</th>

                  </thead>
               
                     @foreach($student_info as $i =>$stu_info)
                        <tbody>
                      <tr>

                          <td>{{$i+1}}</td>
                          <td>{{ $stu_info->title }}</td>
                
                          <td>{{ $stu_info->exam_date }}</td>
                        
                          <td>
                          <?php if(strtotime($stu_info->exam_date) < strtotime(date('Y-m-d'))){

                              echo "Completed";
                            }
                            else if(strtotime($stu_info->exam_date) == strtotime(date('Y-m-d'))){

                                 echo "Runing";
                               }

                            else{
                                echo "padding";
                            }
                           ?>

                        </td>
         
                        <td>
                            <a href="{{url('student/Join_exam/'.$stu_info->exam)}}" class="btn btn-info">Join Now</a>
                            
                        </td>
                      </tr>
                        </tbody>
                   @endforeach
                

                </table>
              </div>
           
            </div>
            <!-- /.card -->
          </div>
        </div>
      </div>
    </section>
    
    @endsection
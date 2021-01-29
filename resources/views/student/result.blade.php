 @extends('layouts.student')
 @section('title','Result')

 @section('content')
 
 <br><br><br><br>
<div class="content">
    <div class="content-header">
     <div class="container-fluid">
        <div class="row">
          <div class="col-sm-2"></div>
          <div class="col-sm-8">
            <h1 class="text-dark">Result</h1>
          </div>
              </div>
      </div>
    </div>
  </div>
    <section class="content">
      <div class="container-fluid"> 
        <div class="row">
          <div class="col-sm-2"></div>
          <div class="col-sm-8">
            <div class="card">
             
              <div class="card-body">
                <table class="table table-striped table-bordered table-hover datatable">
                  <thead>
                      <th>#</th>
                      <th>subject</th>
                      <th>Date</th>
                      <th>Correct</th>
                      <th>Not corect</th>
                      <th>Total Question</th>
                       @foreach($result_info as $result) 
                            @foreach($student_info as $stu_info)
                          <tr>
                              <td>---</td>
                              <td>{{$stu_info->title}}</td>  
                              <td>{{$stu_info->exam_date}}</td>
                              <td>{{$result->yes_ans }}</td>
                              <td>{{$result->no_ans }}</td>
                              <td>{{$result->total_question }}</td>

                          </tr>
                           @endforeach
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

  

    



    @endsection


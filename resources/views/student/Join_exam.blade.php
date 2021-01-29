 @extends('layouts.student')
 @section('title','Exam Dashborad')

 @section('content')

 <style type="text/css">
   .li_info li{

     list-style: none;
     height: 50px;

     line-height: 50px;

   }


 </style>
      <div class="content">
    <div class="content-header">
     <div class="container-fluid">
        <div class="row">
          <div class="col-sm-12"></div>
          <div class="col-sm-12">
            <h1 class="text-dark">Exam</h1>
          </div>
              </div>
      </div>
    </div>
  </div>
      <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12"></div>
          <div class="col-12">
            <div class="card">
             
              <div class="card-body">
                <div class="row">
                  <div class="col-sm-4">
                    <h3>Time :: 1 HRS</h3>
                  </div>
                  <div class="col-sm-4">
                    <!--h3 class="text-center">Timer :: <span class="js-timeout">00:10</span></h3-->
                    <h3 class="text-center">Timer ::  <span id="display">16m.10s</span></h3>
                    <div><span id="submitted" style=""></span></div>

                    <!--span id="display" style="color:blue;font-size:15px"-->
                  </div>
                  <div class="col-sm-4">
                    <h3 class="text-right">Status :: Panding</h3>
                  </div>
              </div>
           </div>
            </div>  
         
          </div>
        </div>
      </div>
    </section>
    
  <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-sm-2"></div>
          <div class="col-sm-8">
            <div class="card">
             
              <div class="card-body">
                <form action="{{url('student/submit_question')}}" method="post" name="MCQuestion" id="MCQuestion">
                 {{ csrf_field() }}
                  <input type="hidden" name="exam_id" value="{{Request::segment(3)}}">
                <div class="row">
                  @foreach($question as $key=> $question)
                  <div class="col-sm-12">
                  <p><b>{{ $key+1 }}.{{$question['question']}}<b></p>
                    <?php
                       
                          $options = json_decode($question['option']);
                       ?>
                     
                      <input type="hidden" name="question{{ $key+1 }}" value="{{$question['id']}}">
                  <ul class="li_info">
                    
                      <li><input type="radio" name="ans{{ $key+1 }}" value="{{ $options->option1}}"> {{ $options->option1}}</li>
                      <li><input type="radio" name="ans{{ $key+1 }}" value="{{ $options->option2}}"> {{ $options->option2}}</li>
                      <li><input type="radio" name="ans{{ $key+1 }}" value="{{ $options->option3}}"> {{ $options->option3}}</li>
                      <li><input type="radio" name="ans{{ $key+1 }}" value="{{ $options->option4}}"> {{ $options->option4}}</li>
                       <li style="display: none;"><input type="radio" name="ans{{ $key+1 }}" value="0" checked="checked"> {{ $options->option4}}</li>
                    
                  </ul>
                  </div>
                    @endforeach
                   <div class="col-sm-12">
                 
              

             <input type="hidden" name="index" value="<?php echo $key+1; ?>">
                     <button type="submit" class="btn btn-info ">Submit</button>
                    

                  </div>
                 
              </div>
              </form><br><br>
           </div>
            </div>
            <!-- /.card -->
          </div>
        </div>
      </div>
    </section>

<script type="text/javascript">
  

</script>

    @endsection
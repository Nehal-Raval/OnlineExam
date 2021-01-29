 @extends('layouts.student')
 @section('title','show Result')

 @section('content')

 <style type="text/css">
   .li_info li{

     list-style: none;
     height: 50px;

     line-height: 50px;

   }


 </style>
   <br><br><br><br><br>
  <div class="content">
    <div class="content-header">
     <div class="container-fluid">
        <div class="row">
          <div class="col-sm-2"></div>
          <div class="col-sm-8">
            <h1 class="text-dark">Show result</h1>
          </div>
              </div>
      </div>
    </div>
  </div>
    
    <!-- /.<!-- /.container-fluid -->
    </div>
     <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-sm-2"></div>
          <div class="col-sm-8">
            <div class="card">
             
              <div class="card-body">

                <h2><b>Exam</b> </h2>
                <table class="table ">
                  <tr>
                      <td><b>Correct</b></td>
                      <td><?php echo $result_info['yes_ans']; ?></td>

                  </tr>
                   <tr>
                      <td><b>Not Correct</b></td>
                      <td><?php echo $result_info['no_ans']; ?></td>

                  </tr>
                   <tr>
                      <td><b>Total Question</b></td>
                      <td><?php echo $result_info['total_question']; ?></td>

                  </tr>

                </table>
           </div>
            </div>
          
          </div>
        </div>
      </div>
    </section>
    
    

<script type="text/javascript">
  

</script>

    @endsection
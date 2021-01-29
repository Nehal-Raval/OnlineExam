 @extends('layouts.portal')
 @section('title','Portal Dashborad')

 @section('content')
  <div class="container mr-2">
    <!-- Content Header (Page header) -->
    <div class="content">
      <div class="container">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Dashboard</h1>
          </div><!-- /.col -->
     
        </div><!-- /.row -->
      </div>
    </div>
    <!-- /.content-header -->
</div>
    <!-- Main content -->
    <section class="container mr-2">
      <div class="container pt-5">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          @foreach($portal as $i =>$p)
          <?php

          if(strtotime(date('y-m-d')) > strtotime($p['exam_date'])){

            $cls="bg-danger";
          }else{

          $val = $i + 1;
          if($val%2==0){
            $cls='bg-info';
          }
          else{
            $cls='bg-success';
          }
        }
           ?> 
          
          <div class="col-lg-3 col-8">
    
            <div class="small-box <?php echo $cls ?>">
              <div class="inner">
                <h3><?php echo $p['title']?></h3>

                <p><?php echo $p['cat_name']?></p>
              </div>
              <!--div class="icon">
                <i class="ion ion-bag"></i>
              </div-->
              @if(strtotime(date('y-m-d')) < strtotime($p['exam_date']))
              <a href="{{url('portal/exam_form/'.$p['id'])}}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
              @endif
            </div>
          </div>
         @endforeach
        
        </div>
        
      </div>
    </section>
    @endsection
 @extends('layouts.student')
 @section('title','Schedule')

 @section('content')
 <br><br><br><br>
  <div class="content">
    <div class="content-header">
     <div class="container-fluid">
        <div class="row">
          <div class="col-sm-2"></div>
          <div class="col-sm-8">
            <h1 class="text-dark">Exem Schedule</h1>
          </div>
              </div>
      </div>
    </div>
  </div>
    </div>
    <!-- /.content-header -->

       <!-- /.content-header -->
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
                      <th>Title</th>
                      <th>Category</th>
         
                      <th>Exam Date</th>
                      

                       @foreach($schedule as $i => $exam)
                      <tr>
                          
                            <td><?php echo $i+1 ?></td>
                              <td><?php echo $exam['title']; ?></td>
                               <td><?php echo $exam['name']?></td>
                          
                                <td><?php echo $exam['exam_date']?></td>
                       </td>
                     
                     </tr>
                      @endforeach
 

                  </thead>
                  <tbody>
                    
                  

                  </tbody>

                </table>
              </div>
         
            </div>
    
          </div>
        </div>
      </div>
    </section>
  

  
    @endsection


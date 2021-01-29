 @extends('layouts.nav')
 @section('title','Manage Question')

 @section('content')
 
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Update Question</h1>
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
                <form action="{{url('admin/update_new_question')}}" class="database_opt">

        {{ csrf_field() }}
     <div class="row">
        <div class="col-sm-12">
            <div class="form-group">

              <label for="question">Enter Question</label>
              <input type="hidden" name="id" value="{{ $question[0]['id']}}">
              <input type="text" name="question" class="form-control" value="<?php echo $question[0]['question'] ?>" required>            

            </div>
        </div>
        <?php 
            $option = json_decode($question[0]['option']);
        ?>
        
      <div class="col-sm-6">
            <div class="form-group">

              <label for="option1">Option 1</label>
              <input type="text" name="option1" class="form-control" value="{{ $option->option1}}" required>            

            </div>
        </div>

        <div class="col-sm-6">
            <div class="form-group">

              <label for="option2">Option 2</label>
              <input type="text" name="option2" class="form-control" 
              value="{{ $option->option2 }}" required>            

            </div>
        </div>

     <div class="col-sm-6">
            <div class="form-group">

              <label for="option3">Option 3</label>
              <input type="text" name="option3" class="form-control" value="{{ $option->option3 }}" required>            

            </div>
        </div>
        <div class="col-sm-6">
            <div class="form-group">

              <label for="option4">Option 4</label>
              <input type="text" name="option4" class="form-control" value="{{ $option->option4}}" required>            

            </div>
        </div>

        <div class="col-sm-12">
            <div class="form-group">

              <label for="option1">Enter Right Ans</label>
              <input type="text" name="ans" class="form-control" value="{{ $question[0]['ans']}}"required>            

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
  </div>
</div>
</div>
</div>  
  
</div>


</div>

    @endsection


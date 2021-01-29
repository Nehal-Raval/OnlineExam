 @extends('layouts.nav')
 @section('title','Edit Protal')

 @section('content')
 
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Edit portal</h1>
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


      <form action="{{url('admin/edit_new_portal')}}" class="database_opt">

        {{ csrf_field() }}
     <div class="row">
        <div class="col-sm-12">
            <div class="form-group">

              <label for="Name">Name</label>
              <input type="hidden" name="id" value=" {{ $portal->id }}">
              <input type="text" name="name" class="form-control" value="{{$portal->name}}"required>            

            </div>
        </div>
        
      <div class="col-sm-12">
            <div class="form-group">

              <label for="email">E-Mail</label>
              <input type="text" name="email" value="{{$portal->email}}"class="form-control" required>            

            </div>
        </div>

        <div class="col-sm-12">
            <div class="form-group">

              <label for="mobile_no">Mobile No</label>
              <input type="text" name="mobile_no" value="{{$portal->mobile_no}}"class="form-control" required>            

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
      
            </div>
            <!-- /.card -->
          </div>
        </div>
      </div>
    </section>
  
</div>

    @endsection


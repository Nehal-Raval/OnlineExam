 @extends('layouts.nav')
 @section('title','Edit Category')

 @section('content')
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Edit Category</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
             
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>

     <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <!-- Default box -->
            <div class="card">
              
              <div class="card-body">
                 <form action="{{url('admin/edit_new_category')}}" class="database_opt">

        {{ csrf_field() }}
     <div class="row">
        <div class="col-sm-12">
            <div class="form-group">
              <input type="hidden" name="id" value="{{$cat->id}}">
              <label for="Name">Enter Category</label>
              <input type="text" name="name" value="{{$cat->name}}" class="form-control" required>            

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

    @endsection
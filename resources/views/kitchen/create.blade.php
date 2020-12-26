@extends('layouts.master')

@section('css')
    
@endsection

@section('content')
   <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Kitch Panel</h1>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <div class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Create a delicions dish</h3>
                    <a href="/dish" class="btn btn-success float-right">Back</a>
                </div>
                    <!-- /.card-header -->  
                <div class="card-body">
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <form action="/dish" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="">Name</label>
                            <input  class="form-control" type="text" name="name" value="{{ old('name') }}">
                        </div>
                        <div class="form-group">
                            <label for="">Category</label>
                            <select  class="custom-select" name="category">
                                <option>Select Category</option>
                                @foreach ($categories as $cat)
                                    <option value="{{ $cat->id }}">{{ $cat->name }}</option>
                                @endforeach
                            </select>
                        </div>
                          <div class="form-group">
                            <label for="">Image</label>
                            <input type="file" name="dish_image">
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
        </div>
      </div>
    </div>
  </div>
@endsection

@section('js')

</script>
@endsection

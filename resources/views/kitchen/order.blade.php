@extends('layouts.master')

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
                    <h3 class="card-title">Order List</h3>
                </div>
                    <!-- /.card-header -->
                <div class="card-body">
                  @if (session('message'))
                      <div class="alert alert-success">
                       {{ session('message') }}
                      </div>
                  @endif
                    <table id="dishes" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Dish Name</th>
                                <th>Table Number</th>
                                 <th>Table Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                           @foreach ($orders as $order)
                               <tr>
                                  <td>{{ $order->id }}</td>
                                  <td>{{ $order->dish->name }}</td>
                                  <td>{{ $order->table_id}}</td>
                                    <td>{{ $status[$order->status]}}</td>
                                  <td>
                                      <a  href="/order/{{ $order->id }}/approve" class="btn btn-success">Approve</a>
                                      <a  href="/order/{{ $order->id }}/cancel" class="btn btn-danger">Cancel</a>
                                      <a  href="/order/{{ $order->id }}/ready" class="btn btn-primary">Ready</a>
                                  </td>
                              </tr>
                          @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        </div>
      </div>
    </div>
  </div>
@endsection

@section('js')
    <script>
    $(function () {
        $("#dishes").DataTable({
          "paging": true,
          "pageLength": 15,
          "lengthChange": false,
          "ordering": true,
          "info": true,
          "searching":false,
          });
    });
</script>
@endsection

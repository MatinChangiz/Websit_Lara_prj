@extends('layouts.app')
@section('title', 'List of Content')

@section('styles')

<link href="{{ asset('assets/dashboard/vendor/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet">

@endsection

@section('contents')

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary"><a href="{{ route('ssawo.admindashboard.tabOneSubOneSecond.create') }}" class="btn btn-outline-primary">Add New Data</a></h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Title</th>
                            <th>Description</th>
                            <th>Image</th>
                            <th>Date</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php ($no = 1)
                        @foreach($tabOneSubOneSecond as $c)
                        <tr>
                            <td>{{$c->id}}</td>
                            <td>{{$c->title}}</td>
                            <td>{{$c->description}}</td>
                            <td><img src="{{asset('upload/tabOne/tabOneSubOne/tabOneSubOneSecond')}}/{{{$c->image}}}" alt="" height="50" width="50"></td>
                            <td>{{$c->updated_at}}</td>
                            @if(auth()->user()->level == 'Admin')
                            <td>
                                <a href="{{ route('ssawo.admindashboard.tabOneSubOneSecond.edit', $c->id) }}" class='btn btn-warning'>Edit</a>
                                <a href="{{ route('ssawo.admindashboard.tabOneSubOneSecond.delete', $c->id) }}" class='btn btn-danger'>Delete</a>
                            </td>
                            @endif
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection

@section('script')

   <script src="{{ asset('assets/dashboard/vendor/datatables/jquery.dataTables.min.js') }}"></script>

   <!-- Page level custom scripts -->
   <script src="{{ asset('assets/dashboard/vendor/datatables/dataTables.bootstrap4.min.js') }}"></script>

   <!-- Page level custom scripts -->
   <script src="{{ asset('assets/dashboard/js/demo/datatables-demo.js') }}"></script>

@endsection

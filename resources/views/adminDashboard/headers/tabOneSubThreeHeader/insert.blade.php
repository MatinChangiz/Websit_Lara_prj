@extends('layouts.app')
@section('title', 'Insert Content')

@section('styles')
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">

  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>

  <!-- datatables -->
  <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">
  <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>

@endsection

@section('contents')

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

<form action="{{ isset($tabOneSubThreeHeader) ? route('ssawo.admindashboard.tabOneSubThreeHeader.update', $tabOneSubThreeHeader->id) :  route('ssawo.admindashboard.tabOneSubThreeHeader.store') }}" method="POST" id="form" enctype='multipart/form-data'>
    @csrf
    <div class="form-group">
        <label for="">Title</label>
        <textarea name="title" id="title" style="width: 100%;" required>{{ isset($tabOneSubThreeHeader) ? $tabOneSubThreeHeader->title : old('title') }}</textarea>
    </div>
    <div class="form-group">
        <label for="">Description</label>
        <textarea name="description" id="description" style="width: 100%;" required>{{ isset($tabOneSubThreeHeader) ? $tabOneSubThreeHeader->description : old('description') }}</textarea>
    </div>
    <div class="form-group">
        <label for="">Image</label>
        <input type="file" class="form-control" name="image" id="image" value="{{ isset($tabOneSubThreeHeader) ? $tabOneSubThreeHeader->image : old('image') }}">
    </div>
    <div class="form-group">
        <input type="submit" class="form-control btn btn-success" id="submit" value="Add">
    </div>
</form>



@endsection

@extends('layouts.app')
@section('title', 'Insert Addiction')

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

<form action="{{ isset($fightPoverty) ? route('ssawo.admindashboard.what-we-do.update', $fightPoverty->id) :  route('ssawo.admindashboard.what-we-do.store') }}" method="POST" id="form" enctype='multipart/form-data'>
    @csrf
    <div class="form-group">
        <label for="">Title</label>
        <input type="text" class="form-control" name="title" id="title" value="{{ isset($fightPoverty) ? $fightPoverty->title : old('title') }}" required>
    </div>
    <div class="form-group">
        <label for="">Description</label>
        <textarea name="description" id="description" style="width: 100%;" required>{{ isset($fightPoverty) ? $fightPoverty->description : old('description') }}</textarea>
    </div>
    <div class="form-group">
        <label for="">Title for more details</label>
        <input type="text" class="form-control" name="title2" id="title2" value="{{ isset($fightPoverty) ? $fightPoverty->title2 : old('title2') }}" required>
    </div>
    <div class="form-group">
        <label for="">Description for more details</label>
        <textarea name="description2" id="description2" style="width: 100%;" required>{{ isset($fightPoverty) ? $fightPoverty->description2 : old('description2') }}</textarea>
    </div>
    <div class="form-group">
        <label for="">Image</label>
        <input type="file" class="form-control" name="image" id="image" value="{{ isset($fightPoverty) ? $fightPoverty->image : old('image') }}">
    </div>
    <div class="form-group">
        <label for="">Image for more details</label>
        <input type="file" class="form-control" name="image2" id="image2" value="{{ isset($fightPoverty) ? $fightPoverty->image2 : old('image2') }}">
    </div>
    <div class="form-group">
        <label for="">Image Icon</label>
        <input type="file" class="form-control" name="imageicon" id="imageicon" value="{{ isset($fightPoverty) ? $fightPoverty->imageicon : old('imageicon') }}">
    </div>
    <div class="form-group">
        <input type="submit" class="form-control btn btn-success" id="submit" value="Add">
    </div>
</form>



@endsection

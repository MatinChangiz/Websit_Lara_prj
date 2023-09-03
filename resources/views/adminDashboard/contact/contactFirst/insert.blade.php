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

<form action="{{ isset($contactFirst) ? route('ssawo.admindashboard.contactFirst.update', $contactFirst->id) :  route('ssawo.admindashboard.contactFirst.store') }}" method="POST" id="form" enctype='multipart/form-data'>
    @csrf
    <div class="form-group">
        <label for="">Location Name</label>
        <input type="text" name="title" id="title" style="width: 100%;" value="{{ isset($contactFirst) ? $contactFirst->title : old('title') }}" required>
    </div>
    <div class="form-group">
        <label for="">Address</label>
        <textarea type="text" name="address" id="address" style="width: 100%;">{{ isset($contactFirst) ? $contactFirst->address : old('address') }}</textarea>
    </div>
    <div class="form-group">
        <label for="">Phone</label>
        <input type="tel" name="phone" id="phone" pattern="[0-9]{3}-[0-9]{3}-[0-9]{3}-[0-9]{3}" style="width: 100%;" value="{{ isset($contactFirst) ? $contactFirst->phone : old('phone') }}" required>
    </div>

    <div class="form-group">
        <label for="">Email</label>
        <input type="email" name="email" id="email" style="width: 100%;" value="{{ isset($contactFirst) ? $contactFirst->email : old('email') }}" required>
    </div>

    <div class="form-group">
        <input type="submit" class="form-control btn btn-success" id="submit" value="Add">
    </div>
</form>


@endsection



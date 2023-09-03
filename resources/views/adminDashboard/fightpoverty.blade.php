<!DOCTYPE html>
<html lang="en">
<head>
  <title>Fight Poverty</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">

  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>

  <!-- datatables -->
  <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">
  <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>

</head>
<body>

<div class="jumbotron text-center">
  <h1>Add New Fight</h1>
  <div class="float-right mr-5">
    <a href="" class="btn btn-success" data-toggle="modal" data-target="#myModal">Add</a>
  </div>
</div>

<div class="container-fluid">

<div class="row">
{{-- @include('layouts/smsystem/leftSide') --}}


    <div class="col-10">
        <!-- myTable id of datatables -->
        <table class="table" id='myTable'>
            <thead>
                <tr>
                    <th>id</th>
                    <th>Title</th>
                    <th>Description</th>
                    <th>Page Link</th>
                    <th>Image</th>
                    <th>Icon</th>
                    <th>Date</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
            </thead>

            <tbody>
                @foreach($fightPoverty as $c)
                <tr>
                    <td>{{$c->id}}</td>
                    <td>{{$c->title}}</td>
                    <td>{{$c->description}}</td>
                    <td>{{$c->page}}</td>
                    <td><img src="{{asset('upload/fight')}}/{{{$c->image}}}" alt="" height="150" width="150"></td>
                    <td><img src="{{asset('upload/fight/icon')}}/{{{$c->imageicon}}}" alt="" height="150" width="150"></td>
                    <td>{{$c->created_at}}</td>
                    <td><a href="javascript:void(0)" class='btn btn-warning showEditModal'>Edit</a></td>
                    <td>
                        <form action="fightPoverty/{{$c->id}}" method="POST">
                            @method('DELETE')
                            @csrf
                            <input type="submit" value="Delete" class="btn btn-danger">
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>

        </table>
    </div>



</div>

</div>

<!-- The Modal -->
<div class="modal" id="myModal">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Add</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
        <form action="fightPoverty" method="POST" id="form" enctype='multipart/form-data'>
            @csrf
            <div class="form-group">
                <label for="">Title</label>
                <input type="text" class="form-control" name="title" id="title" required>
            </div>
            <div class="form-group">
                <label for="">Description</label>
                {{-- <textarea name="description" id="description" rows="30" cols="10" required></textarea> --}}
                <input type="text" class="form-control" name="description" id="description" required>
            </div>
            <div class="form-group">
                <label for="">Page Link</label>
                <input type="text" class="form-control" name="page" id="page" required>
            </div>

            <div class="form-group">
                <label for="">Image</label>
                <input type="file" class="form-control" name="image" id="image">
            </div>
            <div class="form-group">
                <label for="">Image Icon</label>
                <input type="file" class="form-control" name="imageicon" id="imageicon">
            </div>
            <div class="form-group">
                <input type="submit" class="form-control btn btn-success" id="submit" value="Add">
            </div>
        </form>
      </div>

    </div>
  </div>
</div>

<script>
    $(document).ready( function () {
    $('#myTable').DataTable();
} );


    $('.showEditModal').click(function(e){

        // teachClass = e.target.parentElement.previousElementSibling.innerText
        page = e.target.parentElement.previousElementSibling.previousElementSibling.previousElementSibling.previousElementSibling.innerText
        description = e.target.parentElement.previousElementSibling.previousElementSibling.previousElementSibling.previousElementSibling.previousElementSibling.innerText
        title = e.target.parentElement.previousElementSibling.previousElementSibling.previousElementSibling.previousElementSibling.previousElementSibling.previousElementSibling.innerText
        id = e.target.parentElement.previousElementSibling.previousElementSibling.previousElementSibling.previousElementSibling.previousElementSibling.previousElementSibling.previousElementSibling.innerText

        $('#page').val(page);
        $('#description').val(description);
        $('#title').val(title);

        $('#submit').val("Edit ");

        $('.modal-title').text("Modify");

        $('form').attr('action','fightPoverty/'+id);
        $('form').append('<input type="hidden" name="_method" value="PUT">');

        $('#myModal').modal('show');
    })
</script>

{{-- <script src="../layoutsCSS/js/preSelt.js"></script> --}}

</body>
</html>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  </head>
  <body>
    <h1>Categories Page</h1>
    <div class="container">
        <a class="btn btn-primary" href="{{url('category/create')}}">Create</a>

        <div class="row">
            <div class="col">
                <!-- start table -->
                <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">id</th>
      <th scope="col">Category Name</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  @foreach($categories as $category)
  <tbody>
    <tr>

      <th scope="row">{{$loop->iteration}}</th>
      <td>{{$category->id}}</td>
      <td>{{$category->name}}</td>
      <td><a href="{{url('category/'.$category->id.'/edit')}}" class="btn btn-primary">Edit</a>
        <form action="{{url('category/delete/'.$category->id)}}" method="post" class="d-inline">
        @csrf
        @method('delete')
        <button type="submit" class="btn btn-danger">Delete</button>
        </form>
      </td>
    </tr>
    @endforeach
</tbody>
</table>
                <!-- end table -->
            </div>
        </div>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  </body>
</html>
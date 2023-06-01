<!DOCTYPE html>
    <head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

      
        <title>Add The students</title>

<body>
<h2 > Fill the Form</h2>

<form action ="" method="POST">
    @csrf  
  


    <label for="name" class="col-sm-2 col-form-label">Name</label>

      <input type="text" class="form-control" name="tname" placeholder="Enter a name">
    
 
    <label for="city" class="col-sm-2 col-form-label">Address</label>

      <input type="text" class="form-control"  name="tddress" placeholder="Enter a city">
 
    <label for="marks" class="col-sm-2 col-form-label">City</label>
   <input type="number" class="form-control" name="tcity"  placeholder="Enter a marks">
  
 
 
  
<button type="submit" class="btn btn-primary">Submit</button>
@if (session()->has('status'))
<div class="alert alert-success">
    {{session('status')}}
</div>
@endif

<div class="col-sm-6">
    <table class="table table-hover">
        <thead>
            <tr>
                <th scope ="col">S.N</th>
                <th scope ="col">Name</th>
                <th scope ="col">Address</th>
                <th scope ="col">City</th>
                <th scope ="col">Actions</th>
</tr>
</thead>
<tbody>
    @foreach($teachers as $tea)
        <tr>
            <th>{{$tea->id}}</th>
            <th>{{$tea->tname}}</th>
            <th>{{$tea->tddress}}</th>
            <th>{{$tea->tcity}}</th>
            <td>
                <a href="{{url('/edit', $tea->id)}}" class="btn btn-info btn-sm">Edit</a>
                <a href="{{url('/delete', $tea->id)}}" class="btn btn-danger">Delete</a>
    </td>
    </tr>
    @endforeach
    </tbody>
    </table>

    
       
       
    </body>
</html>


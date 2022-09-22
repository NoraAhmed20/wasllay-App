<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>user</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
  </head>
  <body>
    <h1>Show Data</h1>
   




<table class="table table-success table-striped">
<thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">from</th>
      <th scope="col">to</th>
      <th scope="col">date</th>
      <th scope="col">weight</th>
      <th scope="col">information</th>
      <th scope="col">Delete</th>
      </tr>


  </thead>
  <tbody>
@foreach ($data as $item)
 <tr>
      <th scope="row">{{$item['id']}}</th>
      <td>{{$item['from']}}</td>
      <td>{{$item['to']}}</td>
      <td>{{$item['date']}}</td>
      <td>{{$item['weight']}}</td>
      <td>{{$item['information']}}</td>
      <th>
      <form method="POST" action="{{route('deleteOrder',['order'=>$item])}}">
         @csrf 
         @method('DELETE') 
         <input type="submit" name="submit" value="DELETE" class="btn btn-danger" >
       </form> 
</th> 
</tr>
        @endforeach
    </tbody>
</table>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js" integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous"></script>
  

</html>
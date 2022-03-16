<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
    <div class="container">
        <h1 class="text-center">Display a listing of the category.</h1>
        
        
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#ID</th>
                    <th scope="col">Category Name</th>
                    <th scope="col">Category Description</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
               
                @foreach($dt as $d)
                    
                    <tr>
                        <td scope="row">{{$d->id}} </td>
                        <td>{{$d->category_name}}</td>
                        <td>{{$d->category_desc}}</td>
                        <td>
                            <button type="button" class="btn btn-success btn-sm">View</button>
                            <button type="button" class="btn btn-primary btn-sm">Edit</button>
                            <button type="button" class="btn btn-danger btn-sm">Delete</button>
                        </td>
                    </tr>    
                @endforeach
            </tbody>
        </table>
    </div>
    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>
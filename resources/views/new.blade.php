@include("navbar")
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
<br>
    <div class="mb-3 ">
              <form action="/store" method="post">
                @csrf
                <table class="table">
                  <tr><td>Picture</td><td><input class="form-control" type="text" name="picture" id="picture"></td></tr>
                  <tr><td>Name</td><td><input class="form-control" type="text" name="name" id="name"></td></tr>
                  <tr><td>Category</td><td><input class="form-control" type="text" name="category" id="category"></td></tr>
                  <tr><td>Description</td><td><input class="form-control" type="text" name="description" id="description"></td></tr>
                  <tr><td></td><td><input type="submit"value="Submit" class="btn btn-primary"></td></tr>
                </table>
              </form>
    </div>
</body>
</html>

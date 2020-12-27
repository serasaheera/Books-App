<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Books App</title>
</head>

<nav class="navbar navbar-expand-lg navbar-dark bg-success">
    <div class="container-fluid">
      <a class="navbar-brand" href="index.html">Link Ur Code</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="index.html">Home</a>
          </li>
         
        </ul>
      </div>
    </div>
  </nav>
<body>
    <h1>BOOKS APP</h1>
    <table class="table table-borderless">
        <tr>
            <td>Book Name</td>
            <td><input id="bookname" class="form-control" type="text"></td>
        </tr>
        <tr>
            <td>Author</td>
            <td><input id="author" class="form-control" type="text"></td>
        </tr>
        <tr>
            <td>Publisher</td>
            <td><input id="publisher" class="form-control" type="text"></td>
        </tr>
        <tr>
            <td>Distributor</td>
            <td><input id="distributor" class="form-control" type="text"></td>
        </tr>
        <tr>
            <td>Price</td>
            <td><input id="price" class="form-control" type="text"></td>
        </tr>
        <tr>
            <td></td>
            <td><Button onclick="buttonclick()" class="btn btn-success">Submit</Button></td>
        </tr>
    </table>

    <script>

        function buttonclick(){

            var getBookname=document.getElementById("bookname").value

            var getAuthorname=document.getElementById("author").value

            var getPublishername=document.getElementById("publisher").value

            var getDistributorname=document.getElementById("distributor").value

            var getPrice=document.getElementById("price").value


            console.log(getBookname)

            console.log(getAuthorname)

            console.log(getPublishername)

            console.log(getDistributorname)

            console.log(getPrice)

        }

    </script>

</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
</head>
<style>
    .close{
     font-size:23px;

    }
</style>
<body>
    <form action="/Hackthaon/message1.php" method="post" >
    <div class="row">
        <div class="col-lg-4 ">
<label for="inputPassword5" class="form-label">Mobile</label>
<input type="Number" name="mobile" id="inputPassword5" class="form-control" aria-describedby="passwordHelpBlock" required>
</div>
</div>
<br>
<button type="submit" name="submit" class="btn btn-primary">Submit</button>
<!-- <a href="/Hackthaon/npodisplay.php"><button  class="btn btn-primary">Close</button> -->
<!-- <a href="/Hackthaon/npodisplay.php" class="close" >Close</a> -->
</form>
</body>
</html>
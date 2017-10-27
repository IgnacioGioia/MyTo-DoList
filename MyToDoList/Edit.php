<!doctype html>
<?php  

	$id = $_GET['id'];

?>

<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">

    <title>MyToDoList</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="starter-template.css" rel="stylesheet">
    <style type="text/css">
      .main-container{margin-top: 100px;}
    </style>
  </head>

  <body>

    <nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
      <a class="navbar-brand" href="#">MyToDoList</a>
      <div class="collapse navbar-collapse">
        <div class="navbar-nav mr-auto">
        </div>
        <a href="LogOut.php" class="btn btn-outline-danger my-2 my-sm-0">Log out</a>
      </div>
    </nav>

    <main role="main" class="container-fluid main-container">
      <div class="row">
        <div class="col-8 offset-md-2" align="middle">
        	<?php echo "<form action=\"EditB.php?id=".$id."\" method=\"POST\" class=\"form-inline my-2 my-lg-0\">"; ?>
          		<input class="form-control mr-sm-2" type="text" placeholder="Title" name="Title" aria-label="Title">
          		<input class="form-control mr-sm-2" type="text" placeholder="DD-MM-YYYY" name="Date" aria-label="Date">
          		<input class="form-control mr-sm-2" type="text" placeholder="Description" name="Description" aria-label="Description">
          		<button class="btn btn-outline-success my-2 my-sm-0" type="submit">Edit</button>
        	</form>
        </div>
      </div>
    </main><!-- /.container -->
    
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="../../../../assets/js/vendor/popper.min.js"></script>
    <script src="../../../../dist/js/bootstrap.min.js"></script>
  </body>
</html>
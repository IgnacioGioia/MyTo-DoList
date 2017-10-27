

<!doctype html>
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
      /* The Modal (background) */
      .modal {
          display: none; /* Hidden by default */
          position: fixed; /* Stay in place */
          z-index: 1; /* Sit on top */
          left: 0;
          top: 0;
          width: 100%; /* Full width */
          height: 100%; /* Full height */
          overflow: auto; /* Enable scroll if needed */
          background-color: rgb(0,0,0); /* Fallback color */
          background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
          padding-top: 60px;
      }

      /* Modal Content/Box */
      .modal-content {
          background-color: #fefefe;
          margin: 5px auto; /* 15% from the top and centered */
          border: 1px solid #888;
          height: 40%;
          width: 80%; /* Could be more or less, depending on screen size */
      }

      /* The Close Button */
      .close {
          /* Position it in the top right corner outside of the modal */
          position: absolute;
          right: 25px;
          top: 0; 
          color: #000;
          font-size: 25px;
          font-weight: bold;
      }

      /* Close button on hover */
      .close:hover,
      .close:focus {
          color: red;
          cursor: pointer;
      }

      /* Add Zoom Animation */
      .animate {
          -webkit-animation: animatezoom 0.6s;
          animation: animatezoom 0.6s
      }

      @-webkit-keyframes animatezoom {
          from {-webkit-transform: scale(0)} 
          to {-webkit-transform: scale(1)}
      }

      @keyframes animatezoom {
          from {transform: scale(0)} 
          to {transform: scale(1)}
      }
      .main-container{margin-top: 200px;}
      #sign-in-btn{margin-left: 10px;}
      .space{top: 15px;
              bottom: 15px;}
      .modal-password-fix{left: -15px;}
    </style>
  </head>

  <body>

    <nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
      <a class="navbar-brand" href="#">MyToDoList</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse">
        <div class="navbar-nav mr-auto">
        </div>
        <form method="POST" action='LogIn.php' class="form-inline my-2 my-lg-0">
          <input class="form-control mr-sm-2" type="text" placeholder="Email" name="Email" aria-label="Email" required>
          <input class="form-control mr-sm-2" type="text" placeholder="Password" name="Password" aria-label="Password" required>
          <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Log in</button>
        </form>
        <button onclick="document.getElementById('sign-in-modal').style.display='block'" id="sign-in-btn" class="btn btn-outline-danger my-2 my-sm-0">Sign in</button>
      </div>
    </nav>

    <!-- The Modal -->
    <div id="sign-in-modal" class="modal">
      <span onclick="document.getElementById('sign-in-modal').style.display='none'" 
    class="close" title="Close Modal">&times;</span>

      <!-- Modal Content -->
      <form method="POST" class="modal-content animate" action="SignIn.php">

        <div class="container">
          <div class="row">
            <div class="space col-4 offset-md-4" align="middle">
              <label><b>Email</b></label>
              <input type="text" placeholder="Enter Email" name="newEmail" required>
            </div>
          </div>
          <div class="row">  
            <div class="modal-password-fix space col-4 offset-md-4" align="middle">
              <label><b>Password</b></label>
              <input type="password" placeholder="Enter Password" name="newPassword" required>
            </div>
          </div>
          <div class="row">
            <div align="middle" class="space col-4 offset-md-4">
               <button class="btn btn-outline-danger my-2 my-sm-0"  type="submit">Sign in</button>
            </div>
          </div>
        </div>

        <div class="container" style="background-color:#f1f1f1">
          <button type="button" onclick="document.getElementById('sign-in-modal').style.display='none'" class="cancelbtn close">Close</button>
        </div>
      </form>
    </div>

    <main role="main" class="container-fluid main-container">
      <div class="row">
        <div class="col-4 offset-md-4">
          <h1 align="middle">MyToDoList</h1>
        </div>
      </div>
      <div class="row">
        <div class="col-4 offset-md-4">
          <h3 align="middle">Create, edit and complete your tasks.</h3>
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
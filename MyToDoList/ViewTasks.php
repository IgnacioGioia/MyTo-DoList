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
      .main-container{margin-top: 100px;}
      .table{width: 80%;}
      .table-title{width: 30%;}
      .table-date{width: 20%;}
      .table-description{width: 50%;}
      .table-edit{width: 10%;}
      .table-delete{width: 10%;}
      #sign-in-btn{margin-left: 10px;}
      .space{top: 15px;
              bottom: 15px;}
      table, th, td {border: 2px solid black;}
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
        <div class="col-2 offset-md-8">
          <button onclick="document.getElementById('add-modal').style.display='block'" id="sign-in-btn" class="btn btn-outline-success my-2 my-sm-0">Add</button>
        </div>
      </div>
      <div class="row">
        <div class="col-8 offset-md-2" align="middle">
          <table class="table">
            <tr>
              <th class="table-title">Title</th>
              <th class="table-date">Date</th>
              <th class="table-description">Description</th>
              <th class="table-edit">Edit</th>
              <th class="table-delete">Delete</th>
            </tr>
            <?php 
            if($list != NULL){
            foreach ($list as $value) { ?>
              <tr>
                <td class="table-title"><?php echo $value->getTitle() ?></td>
                <td class="table-date"><?php echo $value->getDate() ?></td>
                <td class="table-description"><?php echo $value->getDescription() ?></td>
                <?php echo "<td><a href=\"Edit.php?id=".$value->getId()."\">Edit</a></td>"; ?>
                <?php echo "<td><a href=\"Delete.php?id=".$value->getId()."\">Delete</a></td>"; ?>
              </tr>
            <?php }} ?>
        </div>
      </div>
    </main><!-- /.container -->
       <!-- The Modal -->
    <div id="add-modal" class="modal">
      <span onclick="document.getElementById('add-modal').style.display='none'" 
    class="close" title="Close Modal">&times;</span>

      <!-- Modal Content -->
      <form method="POST" class="modal-content animate" action="AddTask.php">

        <div class="container">
          <div class="row">
            <div class="space col-4 offset-md-4" align="middle">
              <label><b>Title</b></label>
              <input type="text" placeholder="Title" name="Title" required>
            </div>
          </div>
          <div class="row">  
            <div class="space col-4 offset-md-4" align="middle">
              <label><b>Date</b></label>
              <input type="text" placeholder="DD-MM-YYYY" name="Date" required>
            </div>
          </div>
          <div class="row">  
            <div class="space col-4 offset-md-4" align="middle">
              <label><b>Description</b></label>
              <input type="text" placeholder="Description" name="Description" required>
            </div>
          </div>
          <div class="row">
            <div align="middle" class="space col-4 offset-md-4">
               <button class="btn btn-outline-success my-2 my-sm-0"  type="submit">Add</button>
            </div>
          </div>
        </div>

        <div class="container" style="background-color:#f1f1f1">
          <button type="button" onclick="document.getElementById('add-modal').style.display='none'" class="cancelbtn close">Close</button>
        </div>
      </form>
    </div>
    


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="../../../../assets/js/vendor/popper.min.js"></script>
    <script src="../../../../dist/js/bootstrap.min.js"></script>
  </body>
</html>
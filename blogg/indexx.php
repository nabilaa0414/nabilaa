<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="../../assets/ico/favicon.ico">

    <title>MY POST</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="dashboard.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy this line! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>
    <form id="form-container" class="form-container">
    <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand">Welcome To My BLOG</a>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <label for="input">Wikipediaa : </label>
            <input type="text" id="input" value="">
            <button id="submit-btn">Submit</button>
          </ul>
        </div>
      </div>
    </div>

    
    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">
          <ul class="nav nav-sidebar">
            <li class="active"><a href="indexx.php">Home</a></li>
            <li><a href="login.php">Login Or Register</a></li>
            <li class="wikipedia-container">
                <h3 id="wikipedia-header">Relevant Wikipedia Links</h3>
                <ul id="wikipedia-links">Type in an address above and find relevant Wikipedia articles here!</ul>
            </li>
          </ul>
                  </div>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          <h1 class="page-header">Hello Guys!</h1>
  <?php

if(isset($_COOKIE["id"])){
  header('location:dashboard.php');

}else{

include("koneksi.php");
// Check connection

$sql = "SELECT * FROM post";
$result = $conn->query($sql);

  if ($result->num_rows > 0) { 
      // output data of each row
      while($row = $result->fetch_assoc()) {
          echo " ".$row["waktu"]."<br>";
          echo "<h2>" . $row["judul"]."</h2>". "  isi: " . substr($row["isi"], 0.20); 
        }
  } else {
      echo "nothing found";
  }
}
$conn->close();
?>
</form>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="jquery.min.js"></script>
    <script src="script.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/docs.min.js"></script>
  </body>
</html>

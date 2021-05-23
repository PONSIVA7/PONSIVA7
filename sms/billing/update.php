<?php
// Include database connection file
require_once "connection.php";
if(count($_POST)>0) {
mysqli_query($conn,"UPDATE users set  regno='" . $_POST['regno'] . "', name='" . $_POST['name'] . "', dept='" . $_POST['dept'] . "' ,year='" . $_POST['year'] . "', paid1='" . $_POST['paid1'] . "', pending1='" . $_POST['pending1'] . "', paid2='" . $_POST['paid2'] . "', pending2='" . $_POST['pending2'] . "', paid3='" . $_POST['paid3'] . "', pending3='" . $_POST['pending3'] . "' WHERE regno='" . $_POST['regno'] . "'");
header("location: index.php");
exit();
}
$result = mysqli_query($conn,"SELECT * FROM billing WHERE regno='" . $_GET['regno'] . "'");
$row= mysqli_fetch_array($result);
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Update Record</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.js"></script>


</head>
<body>
<div class="container">
<div class="row">
<div class="col-lg-12">
<div class="page-header">
<h2>Update Record</h2>
</div>
<p>Please edit the input values and submit to update the record.</p>
<form class="row g-3" action="<?php echo htmlspecialchars(basename($_SERVER['REQUEST_URI'])); ?>" method="post">
<div class="col-md-6">
    <label for="inputEmail4" class="form-label">REG.NO</label>
    <input type="number" name="regno" class="form-control" id="inputEmail4">
  </div>
  <div class="col-md-6">
    <label for="inputPassword4" class="form-label">NAME</label>
    <input type="name" name="name" class="form-control" id="inputPassword4">
  </div>
  <div class="col-md-6">
    <label for="inputEmail4" class="form-label">DEPT</label>
    <input type="number" name="dept" class="form-control" id="inputEmail4">
  </div>
  <h1><strong>TUITION FEES</strong></h1>
  <div class="col-md-6">
    <label for="inputPassword4" class="form-label">PAID</label>
    <input type="paid1" name="year" class="form-control" id="inputPassword4">
  </div>
  <div class="col-md-6">
    <label for="inputPassword4" class="form-label">PENDING</label>
    <input type="pending1" name="year" class="form-control" id="inputPassword4">
  </div>
  <h1><strong>TRANSPORT FEES</strong></h1>
  <div class="col-md-6">
    <label for="inputPassword4" class="form-label">PAID</label>
    <input type="paid2" name="year" class="form-control" id="inputPassword4">
  </div>
  <div class="col-md-6">
    <label for="inputPassword4" class="form-label">PENDING</label>
    <input type="pending2" name="year" class="form-control" id="inputPassword4">
  </div>
  <h1><strong>OTHER FEES</strong></h1>
  <div class="col-md-6">
    <label for="inputPassword4" class="form-label">PAID</label>
    <input type="paid3" name="year" class="form-control" id="inputPassword4">
  </div>
  <div class="col-md-6">
    <label for="inputPassword4" class="form-label">PENDING</label>
    <input type="pending3" name="year" class="form-control" id="inputPassword4">
  </div>
<input type="hidden" name="regno" value="<?php echo $row["regno"]; ?>"/>
<input type="submit" class="btn btn-primary" value="Submit">
<a href="index.php" class="btn btn-default">Cancel</a>
</form>
</div>
</div>  
</div>
</body>
</html>
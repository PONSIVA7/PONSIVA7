<?php
require_once "3rdycse/connection.php";
if(isset($_POST['save']))
{    
$regno= $_POST['regno'];
$name = $_POST['name'];
$father = $_POST["dept"];
$mother = $_POST["year"];
$address = $_POST['paid1'];
$dob = $_POST['pending1'];
$gender= $_POST['paid2'];
$age = $_POST['pending2'];
$mobileno = $_POST['paid3'];
$emailid = $_POST['panding3'];
$sql = "INSERT INTO billing (regno,name,dept,year,paid1,pending1,paid2,pending2,paid3,pending3)
VALUES ('$regno','$name','$dept','$year','$paid1','$pending1','$paid2','$pending2','$paid3','$pending3')";
if (mysqli_query($conn, $sql)) {
header("location: index.php");
exit();
} else {
echo "Error: " . $sql . "
" . mysqli_error($conn);
}
mysqli_close($conn);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Create Record</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.js"></script>

</head>
<body>
<div class="container">
<div class="row">
<div class="col-lg-12">
<div class="page-header">
<h2>Create Record</h2>
</div>
<p>ENTRY FORM</p>
<form class="row g-3" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
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
<input type="submit" class="btn btn-primary" name="save" value="submit">
<a href="index.php" class="btn btn-default">Cancel</a>
</form>
</div>
</div> 
</div>
</body>
</html>
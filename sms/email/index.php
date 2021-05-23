<!Doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>How to Send Bulk Email in PHP using PHPMailer with Ajax JQuery</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</head>
<body>
<style type="text/css">
  #sendMail{
    margin-bottom:15px;
    float: right;
  }
</style>
<div class="container" style="margin-top:50px">
  <h1 style="text-align:center">Send Bulk Email in PHP using PHPMailer with Ajax JQuery</h1><br>
    <div class="row">
      <div class="col-md-12">
        <div id="emailMsg"></div>
        <button type="button" class="btn btn-success" id="sendMail">Send Email</button>
        <table class="table table-striped">
          <thead>
            <tr>
              <th>regno</th>
              <th>Name</th>
              <th>mobileno</th>
              <th>Emailid</th>
              <th>Select</th>
            </tr>
          </thead>
          <tbody>
          <?php
             /* Database credentials. Assuming you are running MySQL
             server with default setting (user 'root' with no password) */
             define('DB_SERVER', 'localhost');
             define('DB_USERNAME', 'root');
             define('DB_PASSWORD', '');
             define('DB_NAME', 'test');
               
             /* Attempt to connect to MySQL database */
             $conn = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
               
             // Check connection
             if($conn === false){
                 die("ERROR: Could not connect. " . mysqli_connect_error());
             }
             ?>
            <?php 

              $query  = "SELECT * FROM users";
              $result = mysqli_query($conn, $query);
            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                  
            ?> 
            <tr>
              <td><?php echo $row['regno'] ?></td>
              <td><?php echo $row['name'] ?></td>
              <td><?php echo $row['mobileno'] ?></td>
              <td><?php echo $row['emailid'] ?></td>
              <td><input type="checkbox" class="email" name="email" value="<?php echo $row['email'] ?>"></td>
            </tr>
            <?php } }else { echo "No record found"; } ?> 
          </tbody>
        </table>           
      </div>
    </div>
  </div>
  <script type="text/javascript">
  $(document).ready(function(){
    $("#sendMail").click(function(){
      
      var email = [];
      
      $(".email:checked").each(function(){
        email.push($(this).val());
      });

      if (email.length > 0) {
          $("#emailMsg").html('<div class="alert alert-primary">Please wait...!</div>');
          $.ajax({
            url : "action.php",
            type : "POST",
            cache:false,
            data : {email:email},
            success:function(response){
              if(response == true) {
                $("#emailMsg").html(response);
              }else{
                $("#emailMsg").html();
              }
            }
          });
      }else{
        $("#emailMsg").html('<div class="alert alert-danger alert-dismissible"><button type="button" class="close" data-dismiss="alert">&times;</button> Plase Select at least one checkbox </div>');
      }
    });
  });
</script>

</body>
</html>
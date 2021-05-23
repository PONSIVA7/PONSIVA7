<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>BILLING SYSTEM</title>
<link rel="stylesheet" href="CSS/index.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.js"></script>

<style type="text/css">
        body
        {
            font-family: Arial;
            font-size: 10pt;
        }
        table
        {
            border: 1px solid #ccc;
            border-collapse: collapse;
        }
        table th
        {
            background-color: #F7F7F7;
            color: #333;
            font-weight: bold;
        }
        table th, table td
        {
            padding: 5px;
            border: 1px solid #ccc;
        }
    </style>
</head>
<body>
<form id="container-fluid">
<div class="container">
<div class="row">
<div class="col-lg-12 mx-auto">
<div class="page-header clearfix"> 
<h2 class="pull-left">BILLING SYSTEM</h2>
</div>
<a href="search.php" class="btn btn-primary active" role="button" data-bs-toggle="button" aria-pressed="true">Serach-Students</a>
<a href="create.php" class="btn btn-success pull-right">Add Students</a>
<input type="button" class="btn btn-primary" id="btnExport" value="Export" />
<?php
include_once '3rdycse/connection.php';
$result = mysqli_query($conn,"SELECT * FROM billing");
?>
<?php
if (mysqli_num_rows($result) > 0) {
?>
 <table id="tblCustomers" class="table" cellspacing="0" cellpadding="0">
 <thead>
    <tr>
      <th scope="col">STUDENT DETAILS</th>
      <th scope="col">TUITION FEES</th>
      <th scope="col">TRANSPORT FEES</th>
      <th scope="col">OTHER FEES</th>
      <th scope="col">ACTIONS</th>
    </tr>
  </thead>
<tr>
<td scope="col">REG.NO</td>
<td scope="col">NAME</td>
<td scope="col">DEPT</td>
<td scope="col">YEAR</td>
</tr>
<tbody>
<tr>
<td scope="col">PAID</td>
<td scope="col">PENDING</td>
</tr>
<tr>
<td scope="col">PAID</td>
<td scope="col">PENDING</td>
</tr>
<tr>
<td scope="col">PAID</td>
<td scope="col">PENDING</td>
</tr>
<tr>
<td scope="col">UPDATE/DELETE</td>
</tr>
</tbody>
<tfoot>
<tr>
<th><strong>TOTAL</strong><th>
</tr>
</tfoot>
<?php
$i=0;
while($row = mysqli_fetch_array($result)) {
?>
<tr>
<td><?php echo $row["regno"]; ?></td>
<td><?php echo $row["name"]; ?></td>
<td><?php echo $row["dept"]; ?></td>
<td><?php echo $row["year"]; ?></td>
<td><?php echo $row["paid1"]; ?></td>
<td><?php echo $row["pending1"]; ?></td>
<td><?php echo $row["paid2"]; ?></td>
<td><?php echo $row["pending2"]; ?></td>
<td><?php echo $row["paid3"]; ?></td>
<td><?php echo $row["pending3"]; ?></td>
<td><a href="update.php?regno=<?php echo $row["regno"]; ?>" title='Update Record'><span class='glyphicon glyphicon-pencil'></span></a>
<a href="delete.php?regno=<?php echo $row["regno"]; ?>" title='Delete Record'><i class='material-icons'><span class='glyphicon glyphicon-trash'></span></a>
</td>
</tr>
<?php
$i++;
}
?>
</table>
</form>
<?php
}
else{
echo "No result found";
}
?>
</div>
</div>     
</div>
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.22/pdfmake.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/0.4.1/html2canvas.min.js"></script>
    <script type="text/javascript">
        $("body").on("click", "#btnExport", function () {
            html2canvas($('#tblCustomers')[0], {
                onrendered: function (canvas) {
                    var data = canvas.toDataURL();
                    var docDefinition = {
                        content: [{
                            image: data,
                            width: 700
                        }]
                    };
                    pdfMake.createPdf(docDefinition).download("cutomer-details.pdf");
                }
            });
        });
    </script>
    <script>
$('#tblCustomers').editableTableWidget().numericInputExample().find('td:first').focus();
</script>
</body>
</html>
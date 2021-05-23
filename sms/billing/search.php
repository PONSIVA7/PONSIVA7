<?php

if(isset($_POST['search']))
{
    $valueToSearch = $_POST['valueToSearch'];
    // search in all table columns
    // using concat mysql function
    $query = "SELECT * FROM `billing` WHERE CONCAT(`regno`, `name`, `dept`, `year`, `paid1`, `pending1`, `paid2`, `pending2`, `paid3`, `pending3` ) LIKE '%".$valueToSearch."%'";
    $search_result = filterTable($query);
    
}
 else {
    $query = "SELECT * FROM `billing`";
    $search_result = filterTable($query);
}

// function to connect and execute the query
function filterTable($query)
{
    $connect = mysqli_connect("localhost", "root", "", "jpcoe");
    $filter_Result = mysqli_query($connect, $query);
    return $filter_Result;
}

?>

<!DOCTYPE html>
<html>
    <head>
        <title>SEARCH THE STUDENTS DETAILS</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
        <style>
            table,tr,th,td
            {
                border: 1px solid black;
            }
        </style>
    </head>
    <body>   
        <form action="search.php" method="post">
        <div class="d-grid gap-2">
            <label for="exampleFormControlInput1" class="form-label">SEARCH VALUE:</label>
            <input type="text"  class="form-control" name="valueToSearch" placeholder=" Search Anything..."><br>
            <button  class="btn btn-primary" type="submit" name="search" >Search</button><br><br>
        </div>
            <table class="table table-dark table-striped">
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

      <!-- populate table from mysql database -->
                <?php while($row = mysqli_fetch_array($search_result)):?>
                 <tr>
                    <td class="table-dark"><td><?php echo $row["regno"]; ?></td>
                    <td class="table-dark"><td><?php echo $row["name"]; ?></td>
                    <td class="table-dark"><td><?php echo $row["dept"]; ?></td>
                    <td class="table-dark"><td><?php echo $row["year"]; ?></td>
                    <td class="table-dark"><td><?php echo $row["paid1"]; ?></td>
                    <td class="table-dark"><td><?php echo $row["pending1"]; ?></td>
                    <td class="table-dark"><td><?php echo $row["paid2"]; ?></td>
                    <td class="table-dark"><td><?php echo $row["pending2"]; ?></td>
                    <td class="table-dark"><td><?php echo $row["paid3"]; ?></td>
                    <td class="table-dark"><td><?php echo $row["pending3"]; ?></td>
                    <td class="table-dark"><td><a href="update.php?regno=<?php echo $row["regno"]; ?>" title='Update Record'><span class='glyphicon glyphicon-pencil'></span></a>
                    <a href="delete.php?regno=<?php echo $row["regno"]; ?>" title='Delete Record'><i class='material-icons'><span class='glyphicon glyphicon-trash'></span></a>
                    </td>
                 </tr>
                <?php endwhile;?>
            </table>
        </form>
        
    </body>
</html>
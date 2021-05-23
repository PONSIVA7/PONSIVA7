<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Search by ID</title>
	<link rel="stylesheet" type="text/css" href="Style/viewtablesearch.css" />
</head>

<body>
<center><h1>Search Result</h1></center>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a class="addnew" href="index.php" style="font-face:Khmer OS Battambang; font-size:16px;">ត្រលប់ក្រោយ</a></font>
	<table>
    	<tr>
            <th>StuID</th>
            <th>StuName</th>
            <th>Gender</th>
            <th>Date of Birth</th>
            <th>Address</th>
            <th>Subject</th>
            <th>Registered Date</th>
            <th>Option</th>
        </tr>
    <?php
		$text = $_POST['txtsearch'];
		if($text==""){
			echo "No Data....Please Try Again!!!"."<br>";
			echo '<a href="ViewTable.php"><img src="Images/Users_Group.png" title="Go Back"></a>';
		}
	?>
    <?php
		$cbo = $_POST['cbosearch'];
		$search = $_POST['txtsearch'];
		include('connect.php');
	?>
    <?php
		if($cbo=="ID")
		{
			$id = mysql_query("SELECT * FROM tbl_student WHERE stuid='$search'");
	?>

    <?php
		while($di=mysql_fetch_array($id))
		{
	?>
			<tr>
				<td><?php echo $di[0]; ?></td>
				<td><?php echo $di[1]; ?></td>
                <td><?php echo $di[2]; ?></td>
                <td><?php echo $di[3]; ?></td>
                <td><?php echo $di[4]; ?></td>
                <td><?php echo $di[5]; ?></td>
                <td><?php echo $di[6]; ?></td>
				<td align="center"><a href="Delete_Form.php? txtid=<?php echo $di[0];?>">Delete</a> / <a href="Edit_Form.php? txtid=<?php echo $di[0];?>">Edit</a></td>
			</tr>
            <?php
		}
		}else if($cbo=="Name")
		{
			$na = mysql_query("SELECT * FROM tbl_student WHERE name like '".$search."%'");
	?>
    <?php
		while($an=mysql_fetch_array($na))
		{
	?>
			<tr>
				<td><?php echo $an[0]; ?></td>
				<td><?php echo $an[1]; ?></td>
                <td><?php echo $an[2]; ?></td>
                <td><?php echo $an[3]; ?></td>
                <td><?php echo $an[4]; ?></td>
                <td><?php echo $an[5]; ?></td>
                <td><?php echo $an[6]; ?></td>
				<td align="center"><a href="Delete_Form.php? txtid=<?php echo $an[0];?>">Delete</a> / <a href="Edit_Form.php? txtid=<?php echo $an[0];?>">Edit</a></td>
			</tr>
            <?php
				}
			?>  
     <?php
		}else if($cbo=="Address")
				{
        $add = mysql_query("SELECT * FROM tbl_student WHERE address like '".$search."%'");
     ?>
		<?php
		while($dda=mysql_fetch_array($add))
		{
		?>
			<tr>
				<td><?php echo $dda[0]; ?></td>
				<td><?php echo $dda[1]; ?></td>
                <td><?php echo $dda[2]; ?></td>
                <td><?php echo $dda[3]; ?></td>
                <td><?php echo $dda[4]; ?></td>
                <td><?php echo $dda[5]; ?></td>
                <td><?php echo $dda[6]; ?></td>
				<td align="center"><a href="Delete_Form.php?txtid=<?php echo $dda[0];?>">Delete</a> / <a href="Edit_Form.php?txtid=<?php echo $dda[0];?>">Edit</a></td>
			</tr>
            <?php
				}
			}else if($cbo=="Gender")
			{
			$g = mysql_query("SELECT * FROM tbl_student WHERE gender like '".$search."%'");
			?>  
			<?php
				while($ge=mysql_fetch_array($g))
				{			
			?>
            <tr>
				<td><?php echo $ge[0]; ?></td>
				<td><?php echo $ge[1]; ?></td>
                <td><?php echo $ge[2]; ?></td>
                <td><?php echo $ge[3]; ?></td>
                <td><?php echo $ge[4]; ?></td>
                <td><?php echo $ge[5]; ?></td>
                <td><?php echo $ge[6]; ?></td>
				<td align="center"><a href="Delete_Form.php?txtid=<?php echo $ge[0];?>">Delete</a> / <a href="Edit_Form.php?txtid=<?php echo $ge[0];?>">Edit</a></td>
			</tr>
            
            <?php
				}
			}
			?>
</table>
</body>
</html>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Add Form</title>
		<link href="Style/Add_Form.css" rel="stylesheet" type="text/css" />
</head>

<body bgcolor="#99CC66" background="Images/MyBackground.png">
<div class="img"><img src="Images/auditoria.png" /></div>
<div class="ii"><center><img src="Images/Edit_Yes.png" style="margin-top:20px"/></center></div>
<div id="topbar">
    	<center><h1 style="color:#939">Welcome to Add Form</h1>
    </div>
<div id="form">
		<table>
        	<form method="post" action="">
            	<tr>
                
                <?php
					include ("connect.php");
					$g = mysql_query("select max(stuid) from tbl_student");
					while($id=mysql_fetch_array($g))
					{
				?>
                
                	<th>ID:</th>
                    <td><input type="text" name="txtid" value="<?php echo $id[0]+1; ?>" readonly="readonly" /></td>
                </tr>
                <?php
					}
				?>
                <tr>
                	<th>Name:</th>
                    <td><input type="text" name="txtname" placeholder="Type Name"  /></td>
                </tr>
                <tr>
                	<th>Gender:</th>
                    <td><select name="txtgender">
                    		<option>Select Gender</option>
                       		<option>Male</option>
                            <option>Felmale</option>
                       </select>
                    </td>
                </tr>
                <tr>
                	<th>Date of Birth:</th>
                    <td>
                    	<select name="txtday">
                        	<option>Day</option>
                            	<?php
                            		//Do Loop while
									$d=0;
									do{
										$d++;
										echo "<option>".$d."</option>";
									}while($d<=30);
								?>
                        </select>
                        <select name="txtmonth">
                        	<option>Month</option>
                            	<?php
									//For Loop									
								$m=array("Jan","Feb","Mar","Apr","May","Jun","Jul","Aug","Sep","Oct","Nov","Dec");
								for($i=0;$i<count($m);$i++){
								echo"<option>".$m[$i]."</option>";	
								}
								?>

                        </select>
                        <select name="txtyear">
                        	<option>Year</option>
                            	<?php
                            	//While Loop
									$y=2021;
									while($y>=1950){
										$y--;
										echo "<option>".$y."</option>";
									}
								?>
                        </select>
                    </td>
                </tr>
                <tr>
                	<th>Address:</th>
                    <td><textarea cols="19px" rows="3" name="txtaddress" placeholder="Type Your Address"  /></textarea></td>
                </tr>
                <tr>
                    <th>Subject:</th>
                    <td>
                    	<select name="txtsubject">
                        	<option>Select Subject</option>
                            <?php
                            	$s=array("Java Script","VB.NET","Graphic Design","PHP & MySQL","C#","C","C++","VBA","HTML and CSS");
								for($i=0;$i<count($s);$i++)
								{
									echo "<option>".$s[$i]."</option>";	
								}
                            ?>
                        </select>
                    </td>
        		</tr>
                <tr>
                	<th>Register Date:</th>
                    <td><input type="text" name="txtdate" value="<?php echo date("d/M/Y"); ?>" readonly="readonly" /></td>
                </tr>
                <tr>
                    <td><input type="submit" name="cmdadd" value="Add" /></td>
                    <td><input type="reset" name="cmdreset" value="Clear"/></td>
                </tr>
        	</form>
        </table>
    	</div>
        <?php   
        $id = $_POST['txtid'];
        $name = trim($_POST['txtname']);
        $gender = trim($_POST['txtgender']);
        $dob = trim($_POST['txtday']."/".$_POST['txtmonth']."/".$_POST['txtyear']);
        $address = trim($_POST['txtaddress']);
        $sub = trim($_POST['txtsubject']);
        $date = trim($_POST['txtdate']);
        if(isset($_POST['cmdadd'])){
        if(empty($name) || $gender=="Select Gender" || $_POST['txtday']=="Day" || $_POST['txtmonth']=="Month" || $_POST['txtyear']=="Year" || empty($address) || $subject=="Select Subject")
        {
            echo "<center>Sorry please input data</center>";
        }else{
        include "connect.php";
        $i = mysql_query("insert into tbl_student values('".$id."','".$name."','".$gender."','".$dob."','".$address."','".$sub."','".$date."')");
        if($i==true){
        echo '<META HTTP-EQUIV="Refresh" Content="0; URL=index.php">';
        }
        //if($i==true){
        //header('Location:index.php');
        //exit;
        //mysql_close();
        //}
        }
    }
    ?>
</body>
</html>
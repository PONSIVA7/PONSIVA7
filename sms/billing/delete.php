<?php
include_once '3rdycse/connection.php';
$sql = "DELETE FROM billing WHERE regno='" . $_GET["regno"] . "'";
if (mysqli_query($conn, $sql)) {
header("location: index.php");
exit();
} else {
echo "Error deleting record: " . mysqli_error($conn);
}
mysqli_close($conn);
?
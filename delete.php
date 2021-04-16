
<?php
include "_connect.php";
$id = $_GET['id'];
$sql = "DELETE FROM `supers` WHERE id = $id";
$result = mysqli_query($conn, $sql);
if($result)
{
    echo '<script>alert("Success")</script>';
    header("location: index.php");
}
else{
  echo '<script>alert("Failed")</script>';
}
?>

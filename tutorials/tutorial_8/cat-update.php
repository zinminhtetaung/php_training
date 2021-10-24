<?php
include("confs/config.php");

$id = $_POST['id'];
$name = $_POST['name'];
$remark = $_POST['remark'];
$sql = "UPDATE categories SET name='$name', remark='$remark'  WHERE id=$id";

if (mysqli_query($conn, $sql)) {
  echo "Record updated successfully";
} else {
  echo "Error updating record: " . mysqli_error($conn);
}

mysqli_close($conn);
header("location: cat-list.php");
?>
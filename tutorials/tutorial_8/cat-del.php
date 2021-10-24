<?php
include("confs/config.php");

$id = $_GET['id'];
try {
  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $sql = "DELETE FROM categories WHERE id=$id";
  $conn->exec($sql);
  echo "Record deleted successfully";
} catch(PDOException $error) {
  echo $sql . "<br>" . $error->getMessage();
}
$conn = null;
header("location: cat-list.php");
?>
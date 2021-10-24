<?php
include("confs/config.php");

$name = $_POST['name'];
$remark = $_POST['remark'];

try {
  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);

  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $sql = "INSERT INTO categories (name, remark)
  VALUES ('$name', '$remark')";

  $conn->exec($sql);
  echo "New record created successfully";
} catch(PDOException $error) {
  echo $sql . "<br>" . $error->getMessage();
}

$conn = null;
header("location: cat-list.php");
?>
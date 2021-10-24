<?php
include("confs/config.php");

$sql = "SELECT id, name, remark FROM categories";
$result = $conn->query($sql);
echo "<table border='1'>";
echo "<t><th>Id</th><th>Name</th><th>Remark</th><th>Action</th></tr>";
if ($result->num_rows > 0) {
  while($row = $result->fetch_assoc()) {
    echo "<tr><td>" . $row["id"]. " </td><td>" . $row["name"]. " </td><td> " . $row["remark"]. "</td><td>" . "<a href='cat-del.php?id=".$row['id']."' class='del'>delete</a> <a href='cat-edit.php?id=".$row['id']."' class='edit'>Edit</a></td></tr>";
  }
} else {
  echo "0 results";
}
echo "</table>";
echo "<a href='cat-new.php' class='new'>New Category</a>";
$conn->close();
?>
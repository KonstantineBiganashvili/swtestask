<?php
$conn = mysqli_connect('sql303.epizy.com','epiz_31051978','pTyX5JVsI2xAk9','epiz_31051978_scandiweb') or die(mysqli_error());

if(isset($_POST['deleteProduct'])) {
  $all_id = $_POST['deleteProductCheckbox'];
  $extract_id = implode(',', $all_id);
  $query = "DELETE FROM product WHERE id IN($extract_id)";
  $query_run = mysqli_query($conn, $query);

  if($query_run)
  {
    header('location: index.php');
  } 
  else{
    header('location: index.php');
  }
  }
?>
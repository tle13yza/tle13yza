<?php
include "connect.php";

$filename = $_FILES["img"]["name"];
$tempname = $_FILES["img"]["tmp_name"];
$newfilename = "./images/products/" . $filename;


$sql = "INSERT INTO tbl_products (title , price, stock, description, cat_name, img)
        VALUES ('$_POST[title]', '$_POST[price]', '$_POST[stock]', '$_POST[description]', '$_POST[cat_name]','$newfilename')";

if (mysqli_query($conn, $sql)) { 
  move_uploaded_file($tempname, $newfilename);  //อับโหลดไฟล์   
  echo "บัณทึกสำเร็จ";
  //header("location: ./reg_select.php");
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
//echo "ไม่ส่ามารถบัณทีกได้";
mysqli_close($conn);
?>
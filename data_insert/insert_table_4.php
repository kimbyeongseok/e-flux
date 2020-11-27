<meta charset="utf-8">
<?php
$tag=$_POST["tag"];
$category=$_POST["category"];
$image_name=$_FILES["image"]["name"];
$image_2_name=$_FILES["image_2"]["name"];
$image_3_name=$_FILES["image_3"]["name"];
$image_4_name=$_FILES["image_4"]["name"];
$sub_txt=$_POST["sub_txt"];
$title=$_POST["title"];
$main_txt=$_POST["main_txt"];
$map=$_POST["map"];
$regist_day=date("Y-m-d");
$sub_txt=htmlspecialchars($sub_txt, ENT_QUOTES);
$title=htmlspecialchars($title, ENT_QUOTES);
$main_txt=htmlspecialchars($main_txt, ENT_QUOTES);



$con=mysqli_connect("localhost", "tmxlraos","","tmxlraos");
$sql="insert into eflux_table_4 (tag, category, image, image_2, image_3, image_4, sub_txt, title,main_txt, map,regist_day) values('$tag','$category','$image_name', '$image_2_name', '$image_3_name', '$image_4_name', $sub_txt', '$title','$main_txt','$map''$regist_day')";
mysqli_query($con, $sql);

echo "
  <script>
    alert('입력 완료!!');
    location.href='insert_form.php';
    </script>
";

?>

<meta charset="utf-8">
<?php
$tag=$_POST["tag"];
$image_name=$_FILES["image"]["name"];
$sub_txt=$_POST["sub_txt"];
$title=$_POST["title"];
$main_txt=$_POST["main_txt"];
$main_desc=$_POST["main_desc"];
$regist_day=date("Y-m-d");
$sub_txt=htmlspecialchars($sub_txt, ENT_QUOTES);
$title=htmlspecialchars($title, ENT_QUOTES);
$main_txt=htmlspecialchars($main_txt, ENT_QUOTES);
$main_desc=htmlspecialchars($main_desc, ENT_QUOTES);



$con=mysqli_connect("localhost", "tmxlraos","","tmxlraos");
$sql="insert into eflux_table_1 (tag, image, sub_txt, title,main_txt, main_desc, regist_day) values('$tag','$image_name', '$sub_txt', '$title','$main_txt','$main_desc','$regist_day')";
mysqli_query($con, $sql);

echo "
  <script>
    alert('입력 완료!!');
    location.href='insert_form.php';
    </script>
";

?>

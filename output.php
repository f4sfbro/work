<body>
    <style>
          body
    {
        background-image: url("https://animecorner.me/wp-content/uploads/2021/07/roshidere.png");
    }

        </style>
</body>


<?php
include "insert.php";
$f_name = $_POST["first_name"]; 
$name = $_POST["name"];
$last_name = $_POST["last_name"];
$sex = $_POST["sex"];
$date = $_POST["date_birthdate"];
$address = $_POST["address"];
$tel = $_POST["tel"];
$email = $_POST["gmail"];

$sql = "INSERT INTO tbl_member (id,firstname,name,lastname,sex,birthdate,address,tel,email) 
VALUES ('', '$f_name', '$name', '$last_name', '$sex', '$date', '$address', '$tel', '$email')";


if ($conn->multi_query($sql) === TRUE) {
    echo "เพิ่มข้อมูลสำเร็จ";
} else {
    echo "เพิ่มข้อมูลไม่สำเร็จ: " . $sql . "<br>" . $conn->error;
}
$conn->close();
?>
<?php



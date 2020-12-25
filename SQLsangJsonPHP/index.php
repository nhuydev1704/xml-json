<?php 
    $conn =new mysqli('localhost','root','','testphp') or die ("Kết nối thất bại");
    mysqli_query($conn,"SET NAMES 'UTF8'");
    $query ="SELECT * FROM users";
    $result =mysqli_query($conn,$query);
    $data=array();
    //Lấy dữ liệu từ Database gán vào mảng $data[]
    while ($row = mysqli_fetch_assoc($result)) {
        $data[] = $row;
    }
    $fileExport =fopen('JsonExport.json','w');
    //Hàm encode
    $encode =json_encode($data,JSON_PRETTY_PRINT | SON_UNESCAPED_UNICODE);
    fwrite($fileExport,$encode);
    fclose($fileExport);
    echo "<a href ='index.php'>< Về trang chủ.</a></br>Đã xuất file: </br>";
    echo "<pre>";
    echo print_r($encode);
    echo "</pre>";
?>
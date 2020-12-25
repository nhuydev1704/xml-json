<!DOCTYPE html>
<html lang="vn">
<body>
    <head>
        <title>Thông tin sách</title>
        <center><h1><u>Bảng sách</u></h1></center>
        <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
      integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"
      crossorigin="anonymous"
    />
    <meta charset="UTF-8">
    <style>
    table{
        width:100%;
        background: rgb(111,222,123);
    }
    </style>
    </head>
    <body style="background:url('giaodien.jpg')">
<table border="2">
<?php
$doc = new DOMDocument();
$doc->load( 'sinhvien.xml' );
$dssinhvien = $doc->getElementsByTagName( "sinhvien" );
echo "<tr background:><th>Ma sinh vien </th> <th>Ten sinh vien </th><th>Ngay sinh </th><th>Dia chi</th><th>So dien thoai</th><th>Lop hoc</th><th>Mon hoc</th></tr>";
foreach( $dssinhvien as $sinhvien )
{
$masv = $sinhvien->getElementsByTagName( "masv" )->item(0)->nodeValue;
$tensv = $sinhvien->getElementsByTagName( "tensv" )->item(0)->nodeValue;
$ngaysinh = $sinhvien->getElementsByTagName( "ngaysinh" )->item(0)->nodeValue;
$diachi = $sinhvien->getElementsByTagName( "diachi" )->item(0)->nodeValue;
$sdt = $sinhvien->getElementsByTagName( "sdt" )->item(0)->nodeValue;
$lop = $sinhvien->getElementsByTagName( "lop" )->item(0)->nodeValue;
$monhoc = $sinhvien->getElementsByTagName( "monhoc" )->item(0)->nodeValue;

echo "<tr><td>$masv</td><td>$tensv</td><td>$ngaysinh</td><td>$diachi</td><td>$sdt</td><td>$lop</td><td>$monhoc</td></tr>";
}

?>
</table>
<div class = "class-btn" align = "center">
            <button class = "button" type = "submit"><a href="them.php">Thêm sinh vien</a></button>
            <button class = "button" type = "submit"><a href="xuat.php">Xuất file JSON</a></button>
        </div>
</html>
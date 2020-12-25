<?php
if(isset($_REQUEST['add']))
{    $xml=new DOMDocument("1.0","UTF_8");
    $xml->formatOutput=TRUE;
    $xml->preserveWhiteSpace=false;
    $xml->load('sinhvien.xml');
    $root= $xml->firstChild;
    $dataTag=$xml->createElement("sinhvien");
    $dataTag->appendChild($xml->createElement("masv",$_REQUEST['masv']));
    $dataTag->appendChild($xml->createElement("tensv",$_REQUEST['tensv']));
    $dataTag->appendChild($xml->createElement("ngaysinh",$_REQUEST['ngaysinh']));
    $dataTag->appendChild($xml->createElement("diachi",$_REQUEST['diachi']));
    $dataTag->appendChild($xml->createElement("sdt",$_REQUEST['sdt']));
    $dataTag->appendChild($xml->createElement("lop",$_REQUEST['lop']));
    $dataTag->appendChild($xml->createElement("monhoc",$_REQUEST['monhoc']));
    $root->appendChild($dataTag);
    $xml->save('sinhvien.xml');
} ?>

<html>
    <body><center>
    <textarea rows='24' cols='70'>
    <?php
    if (empty($_REQUEST['add']))
    {
        $xml=new DOMDocument("1.0","UTF_8");
        $xml->load("sinhvien.xml");
    }
    print($xml->saveXML());
    ?>
    </textarea>
    </center>
    <br>
    <center>
    <table border="2">
    <form action="them.php" method="post">
        <tr><td colspan='2' align="center">Thêm sinh viên</td></tr>    
    <tr><td>Mã sinh viên:</td><td><input type="text" name="masv" placeholder="Nhập mã sinh viên"/></td></tr>
    <tr><td>Tên sinh viên:</td><td><input type="text" name="tensv" placeholder="Nhập tên sinh viên"/></td></tr>
    <tr><td>Ngày sinh:</td><td><input type="text" name="ngaysinh" placeholder="Nhập ngày sinh"/></td></tr>
    <tr><td>Địa chỉ:</td><td><input type="text" name="diachi" placeholder="Nhập địa chỉ"/></td></tr>
    <tr><td>Số điện thoại:</td><td><input type="text" name="sdt" placeholder="Nhập số điện thoại"/></td></tr>
    <tr><td>Lớp:</td><td><input type="text" name="lop" placeholder="Nhập lớp học"/></td></tr>
    <tr><td>Môn học:</td><td><input type="text" name="monhoc" placeholder="Nhập môn học"/></td></tr>
    <tr><td colspan="3" align="center"><input type="submit" name="add" value="Thêm"/>
    <input type="submit" name="add" value="Nhập lại"/>
    <button class = "button" type = "submit"><a href="index.php">Bảng danh sách sinh viên</a></button></td></tr>    
    </form>     <table>     </center>
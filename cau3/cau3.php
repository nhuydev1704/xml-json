<html lang="VN">
    <head>
        <>Thêm vào node</>
        <meta charset="UTF-8">
<style>
	textarea{
		color:blue;
	}
	html{
        background: #AAAAAA;
    }
    table{
        background:#cccccc;
    }
</style>
    </head>
</html>
<?php
if(isset($_REQUEST['add']))
{
    $xml=new DOMDocument("1.0","UTF_8");
    $xml->formatOutput=TRUE;
    $xml->preserveWhiteSpace=false;
    $xml->load('cau1.xml');
    $root= $xml->firstChild;
    $dataTag=$xml->createElement("book");
    $aTag=$xml->createElement("tacgia",$_REQUEST['tacgia']);
    $bTag=$xml->createElement("tieude",$_REQUEST['tieude']);
    $cTag=$xml->createElement("theloai",$_REQUEST['theloai']);
    $eTag=$xml->createElement("gia",$_REQUEST['gia']);
    $fTag=$xml->createElement("namsanxuat",$_REQUEST['namsanxuat']);
    $gTag=$xml->createElement("mieuta",$_REQUEST['mieuta']);
$dataTag->appendChild($aTag);
$dataTag->appendChild($bTag);
$dataTag->appendChild($cTag);
$dataTag->appendChild($eTag);
$dataTag->appendChild($fTag);
$dataTag->appendChild($gTag);
$root->appendChild($dataTag);
$xml->save('cau1.xml');
}
?>
<html>
    <body style="background:url('giaodien.jpg')"><center>
<textarea rows='24' cols='70'>
    <?php
    if (empty($_REQUEST['add']))
    {
        $xml=new DOMDocument("1.0","UTF_8");
        $xml->load("cau1.xml");
    }
    print($xml->saveXML());
    ?>
    </textarea>
    </center>
    <br>
    <center>
    <table border="2">
    <form action="cau3.php" method="post">
    <tr><td colspan='2' align="center">Thêm sách</td></tr>
    
    <tr><td>Tac gia:</td><td><input type="text" name="tacgia" placeholder="Nhập tac gia"/></td></tr>
    <tr><td>Tieu de:</td><td><input type="text" name="tieude" placeholder="Nhập tieu de"/></td></tr>
    <tr><td>The loai:</td><td><input type="text" name="theloai" placeholder="Nhập the loai"/></td></tr>
    <tr><td>Gia:</td><td><input type="text" name="gia" placeholder="Nhập Gia"/></td></tr>
    <tr><td>Nam san suat:</td><td><input type="text" name="namsanxuat" placeholder="Nhập nam san suat"/></td></tr>
    <tr><td>Mieu ta:</td><td><input type="text" name="mieuta" placeholder="Nhập mieu ta"/></td></tr>
    <tr><td colspan="3" align="center"><input type="submit" name="add" value="Thêm"/>
    <input type="submit" name="add" value="Nhập lại"/>
    <button class = "button" type = "submit"><a href="index.php">Bảng sách</a></button></td></tr>
    
    </form>
    <table>
    </center>
  
    </body>
    </html>
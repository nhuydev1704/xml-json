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
$doc->load( 'cau1.xml' );
$books = $doc->getElementsByTagName( "book" );
echo "<tr background:><th>Tac gia </th> <th>Tieu de </th><th>The loai </th><th>Gia </th><th>Năm sản xuất </th><th>Mieu ta</th></tr>";
foreach( $books as $book )
{
$a = $book->getElementsByTagName( "author" );
$author = $a->item(0)->nodeValue;
$b = $book->getElementsByTagName( "title" );
$title = $b->item(0)->nodeValue;
$c = $book->getElementsByTagName( "genre" );
$genre = $c->item(0)->nodeValue;
$d = $book->getElementsByTagName( "price" );
$price = $d->item(0)->nodeValue;
$e = $book->getElementsByTagName( "publish_date" );
$publish_date = $e->item(0)->nodeValue;
$f = $book->getElementsByTagName( "description" );
$description = $f->item(0)->nodeValue;

echo "<tr><td>$author</td><td>$title</td><td>$genre</td><td>$price</td><td>$publish_date</td><td>$description</td></tr>";
}

?>
</table>
<div class = "class-btn" align = "center">
            <button class = "button" type = "submit"><a href="cau3.php">Thêm sách</a></button>
            <button class = "button" type = "submit"><a href="cau4.php">Xuất file JSON</a></button>
        </div>
</html>
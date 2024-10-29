<?php
$bookId = $_POST["BookId"];
$name = $_POST["name"];
$unitPrice = $_POST["unitPrice"];
$author = $_POST["author"];
$description = $_POST["description"];
$category = $_POST["category"];
$unitInStock = $_POST["unitInStock"];
$releaseDate = $_POST["releaseDate"];
$condition = $_POST["condition"];
$filename = $_FILES["bookImage"]['name'];
$target_path="./images/";
$ext = pathinfo($filename, PATHINFO_EXTENSION);
$filename=$bookId.".".$ext;


if (move_uploaded_file($_FILES["bookImage"]["tmp_name"], $target_path.$filename)) {
    $handle = fopen("./domain.dat", "a");
    $book_info = "$bookid | $name | $unitPrice | $author | $description | $category | $unitInStock | $releaseDate | $condition | $filename";
    fwrite($handle, "\n".$book_info);
    fclose($handle);
    Header("Location:books.php");
}
else {
    echo "파일이 아직 정송이 안되었습니다.";
}
?>
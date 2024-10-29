<?php
    require 'model.php';
?>
<?php
    require 'menu.php';
?>

<!DOCTYPE html> 
<html class="h-100">
<head>
    <title>도서 정보</title>
    <link href="./css/bootstrap.min.css" rel="stylesheet">
    <!-- <link href="https://getbootstrap.com/docs/5.3/dist/css/bootstrap.min.css"  rel="stylesheet">     
    <script src="https://getbootstrap.com/docs/5.3/dist/js/bootstrap.bundle.min.js" ></script>
    <script src="https://kit.fontawesome.com/dcd40935c4.js" crossorigin="anonymous"></script> -->
</head>

<main>
    <div class="container py-5">
        <div class="p-5 mb-4 bg-body-tertiary rounded-3">
            <div class="container-fluid py-5">
                <h1 class="display-5 fw-bold">도서 정보</h1>
                <p class="col-md-8 fs-4">BookInfo</p>
            </div>
        </div> 
        
        <div class="row align-items-md-stretch">
            <div class="col-md-5">
                <img src="./images/<?php echo $book['filename'] ?>" style="width: 100%">
            </div>
        <!--row-align-items-md-stretch text-center 는 텍스트를 가운데로 한다.-->
        <?php
            /*for ($i = 0; $i < 3; $i++) {
                $id = "ISBN". (1234+$i);*/
            /*$listOfBooks = getAllBooks();
            for ($i = 0;$i<count($listOfBooks); $i++)
            {
                $id = key($listOfBooks);
                $book = $listOfBooks[$id];
                next($listOfBooks);
                이거는 모든 정보를 가져오는거임. 우리는 하나의 북만 가지고 오면 됨.*/
            // $id = $_GET["id"];
            // $book = getBookById($id);
        ?>
            <div class="col-md-6">
                <!-- 이렇게 하면 전체를 볼수 있음. -->
                <div class="h-100 p-5">
                    <h2><?php echo $book["name"]; ?></h2>
                    <p><?php echo $book["description"]; ?>
                    <p><b>도서 코드: </b> <span class="badge text-bg-danger"> <?php echo $id; ?></span>
                    <p><b>저자</b>: <?php echo $book["author"]; ?>
                    <p><b>출판일</b>: <?php echo $book["releaseDate"]; ?>
                    <p><b>분류</b>: <?php echo $book["category"]; ?>
                    <p><b>재고</b>: <?php echo $book["unitsInStock"]; ?>
                    <p><b>가격</b>: <?php echo $book["unitPrice"]; ?>원
                    <!--echo 대신 = 을 싸도 됨. 다만 php 는 뺌.-->
                    <p> <a href="#" class="btn btn-info">도서 주문 &raquo;</a>
                    <p> <a href="./books.php?id=<?=$id;?>">
                        <button class = "btn btn-outline-secondary" type="button">도서 목록</button></a>
                    </a>
                </div>
            </div>
        </div>
    </div>
</main>
<?php
require 'footer.php';
?>
<script src="https://getbootstrap.com/docs/5.3/dist/js/bootstrap.bundle.min.js"></script>

</html>

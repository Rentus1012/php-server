<?php
    require 'model.php';
?>
<?php
    require 'menu.php';
?>

<!DOCTYPE html> 
<html class="h-100">
<head>
    <title>도서 목록</title>
    <link href="https://getbootstrap.com/docs/5.3/dist/css/bootstrap.min.css"  rel="stylesheet">     
    <script src="https://getbootstrap.com/docs/5.3/dist/js/bootstrap.bundle.min.js" ></script>
    <script src="https://kit.fontawesome.com/dcd40935c4.js" crossorigin="anonymous"></script>
</head>

<main>
    <div class="container py-5">
        <div class="p-5 mb-4 bg-body-tertiary rounded-3">
            <div class="container-fluid py-5">
                <h1 class="display-5 fw-bold">도서 목록</h1>
                <p class="col-md-8 fs-4">BookList</p>
            </div>
        </div> 
        
        <div class="row align-items-md-stretch text-center">
        <?php
            /*for ($i = 0; $i < 3; $i++) {
                $id = "ISBN". (1234+$i);*/
            $listOfBooks = getAllBooks();
            for ($i = 0;$i<count($listOfBooks); $i++)
            {
                $id = key($listOfBooks);
                $book = $listOfBooks[$id];
                next($listOfBooks);
        ?>
            <div class="col-md-4">
                <div class="h-100 p-5">
                    <h2><?php echo $book["name"]; ?></h2>
                    <p><?php echo $book["author"]. "|" .$book["releaseDate"] ?></p>
                    <p><?php echo mb_substr($book["description"], 0, 90, 'utf-8')."..."; ?></p>
                    <p><?php echo $book["unitPrice"]; ?> 원</p>
                    <!-- <h2><?php  echo $BookArray[$id]["name"]; ?> </h2>
                    <p><?php echo $BookArray[$id]["author"]. " | " . $BookArray[$id]["releaseDate"]; ?></p>
                    <p><?php echo $BookArray[$id]["description"]; ?></p>
                    <p><?php echo $BookArray[$id]["unitPrice"]; ?>원</p> -->
                    <p> <a href="./book.php?id=<?=$id;?>">
                        <!--파라미터 부분에 공백을 넣어버리면 그 사이에 어떤 무언가의 값이 들어감-> 그러면 key 값을 다른 걸로 인식을 해버려서 오류 발생. 다만 php 안에서 공백은 가능.-->
                        <button class = "btn btn-outline-secondary" type="button">상세 정보</button></a>
                    </a>
                </div>
            </div>
            <?php
            }
            ?>
        </div>
    </div>
</main>
<?php
require 'footer.php';
?>
<script src="https://getbootstrap.com/docs/5.3/dist/js/bootstrap.bundle.min.js"></script>

</html>

<!doctype html>
<html class="h-100" >
<head>    
    <title>Welcome</title>
    <link href="https://getbootstrap.com/docs/5.3/dist/css/bootstrap.min.css"  rel="stylesheet">     
    <script src="https://getbootstrap.com/docs/5.3/dist/js/bootstrap.bundle.min.js" ></script>
    <script src="https://kit.fontawesome.com/dcd40935c4.js" crossorigin="anonymous"></script>
  </head>
<body class="d-flex flex-column h-100">
   
<header>
  <!-- Fixed navbar 창을 움직여도 상단 바는 바뀐다. 창의 크기에 따라서 -->
    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="./welcome.php">                 
                <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" fill="currentColor" class="bi bi-book" viewBox="0 0 16 16">
                    <path d="M1 2.828c.885-.37 2.154-.769 3.388-.893 1.33-.134 2.458.063 3.112.752v9.746c-.935-.53-2.12-.603-3.213-.493-1.18.12-2.37.461-3.287.811V2.828zm7.5-.141c.654-.689 1.782-.886 3.112-.752 1.234.124 2.503.523 3.388.893v9.923c-.918-.35-2.107-.692-3.287-.81-1.094-.111-2.278-.039-3.213.492V2.687zM8 1.783C7.015.936 5.587.81 4.287.94c-1.514.153-3.042.672-3.994 1.105A.5.5 0 0 0 0 2.5v11a.5.5 0 0 0 .707.455c.882-.4 2.303-.881 3.68-1.02 1.409-.142 2.59.087 3.223.877a.5.5 0 0 0 .78 0c.633-.79 1.814-1.019 3.222-.877 1.378.139 2.8.62 3.681 1.02A.5.5 0 0 0 16 13.5v-11a.5.5 0 0 0-.293-.455c-.952-.433-2.48-.952-3.994-1.105C10.413.809 8.985.936 8 1.783z"/>
                </svg> <!--이거는 북 마켓의 로고를 쓴거임. svg 사용함.-->
                <span class="fs-5">BookMarket</span> 
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">                 
                <ul class="navbar-nav me-auto mb-2 mb-md-0">    
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="./welcome.php">Home</a>
                    </li>                                             
                </ul>
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                    <!--검색창의 바임. 실제로 input 할수도 있고, 거기에 action 을 추가해서 검색할수 있음.-->
                </form>               
            </div>
         </div>
    </nav>
</header>

<!-- <?php
     $greeting = "도서 쇼핑몰에 오신 것을 환영합니다";
     $tagline = "Welcome to Web Market!";
?>  
<br>
 <main> 
    <div class="container py-5">
        
        <div class="p-5 mb-4 bg-body-tertiary rounded-3">
            <div class="container-fluid py-5">
                <h1 class="display-5 fw-bold"><?php echo $greeting ?></h1>
                <p class="col-md-8 fs-4">BookMarket</p>
            </div>
        </div> 
        
        <div class="row align-items-md-stretch text-center">
            <div class="col-md-12">
                <div class="h-100 p-5">
                    <h2><?php echo $tagline ?></h2>
                  
                </div>
            </div> 
        </div>
    </div>
</main> -->

<?php 
     $greeting = "도서 쇼핑몰에 오신 것을 환영합니다";
     $tagline = "Welcome to Web Market!";
     $currentTime = date("Y-m-d H:i:s");  // Get the current date and time in the format of "Year-Month-Day Hour:Minute:Second"
?>  
<br>
<main> <!--중간부분--> 
    <div class="container py-5"><!--y축 패딩 값을 5로 설정. 그 숫자가 크면 클 수록 내부 여백-->
        
        <div class="p-5 mb-4 bg-body-tertiary rounded-3"><!--옆에서 들어오는 여백. mb는 margin-bottom, -->
            <div class="container-fluid py-5">
                <h1 class="display-5 fw-bold"><?php //echo $greeting ?> 도서 목록</h1>
                <p class="col-md-8 fs-4">BookList</p><!--이거는 도서 쇼핑몰... 이라는 항목 이래에 있음. 그걸 수정할수 있음-->
            </div>
        </div> 
        
        <div class="row align-items-md-stretch text-center"> <!--중앙에 쓰겠다.-->
        <?php
            for ($i = 0;$i < 3;$i++) {
                $id = "ISBN". (1234+$i);
            }   
        ?>
            <div class="col-md-4"><!-- 12가 아니라 6으로 쓰면 나눠쓰게 됨.colunm 을 나눠씀.-->
                <div class="h-100 p-5">
                    <h2><?php  echo $BookArray[$id]["name"]; ?> </h2>
                    <p> <?php echo $BookArray[$id]["author"]. "|".$BookArray[$id]["releaseDate"]; ?>
                </div>
            </div>
        </div>
    </div>
</main>
<footer class="footer mt-auto py-3 bg-body-tertiary">
    <div class="container">
        <span class="text-body-secondary"> &copy; BookMarket</span> <!--들자의 스타일 자체를 결정하는 클래스임. footer class 부분.-->
    </div>
</footer>
</body>
</html>
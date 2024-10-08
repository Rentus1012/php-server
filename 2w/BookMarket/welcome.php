<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
</head>
<body>
    <h1>도서 쇼핑몰에 오신 것을 환영합니다.</h1>
    <h3>Welcome to Web Market</h3>
    <!--
    <?php
    echo "<h1>echo 실습</h1>";
    echo "<font color='red'>색상은 빨강, echo 실습</font>";
    ?>
    -->

    <!-- 출력 처리 -->

    <?php
    echo 'Hello PHP<br>';
    // 작은 따옴표로 해버리면 드 뒤 문장이 안됨.
    

    $a = "hoon";

    echo $a;
    echo "안녕하세요! $a<br>";
    //중$a 가 들어가면 변수 하나 이상을 넣을수 있음.

    echo "hello ",$a," nice ","to ","meet you"; // 다 붙어버림. 공백ㅇ 필요하면 그냥 "" 사이에 공백을 붙여주면 됨. 그리고 사이에 $a를 넣으면 정상적으로 출력됨
    // , 를 .으로 바꿔도 출력 결과는 똑같음.
    //php 작성 코드를 작성하고, 실행시킨후, 개발자 도구로 보면 php 는 안보임. php 는 서버로 작동하는거라서, php 자체가 절대로 안내려오고, html 로 내려온다.
    //다만 스크립트나 그런거에서는 그대로 개발자 도구, 즉 클라이언트에 그대로 내려온다.

    print("<br>여러개를 출력할수는 없다.". "하지만 . 표시는 된다.ㄴ");
    //print("A", "B");는 안된다고, 하지만 .은 됨.
    ?>
    <script>
        document.write("<br>document "+"실습중. 정상적으로 작동!!");
    </script>

    <hr>

    <!-- 변수와 상수 -->

    <?php
        define("PI", 3.141592);
        //중간에 값을 바꿀수 없다.
        //define("PI", 3.15); // 에러남. 이미 정의된
        echo "PI<br>"; //이거는 그냥 문자열 PI 를 지칭
        echo PI; //이거는 PI의 실제값을 지칭

        // 차리리 그냥 $PI 를 하고 쓰는게 나을정도. 헷갈림...;;

        $min = 10;
    ?>
    <!-- html안에 php에서 선언한 변수를 쓰고 싶다면..? -->
    <!-- <h2>아 몰라 피곤해... 그냥 <?php echo $min ?>분만 쉴래</h2>
    <h2>아 몰라 피곤해... 그냥 <?= $min ?>분만 쉴래</h2> -->

    <hr>

    <?php
        $int = 34;
        $float = 3.14;
        $str = "hello";

        echo var_dump($int). "=". $int. "<br>"; // var_dump 로 쓴다면? -> 타입을 알려준다.
        echo var_dump($float). "=". $float. "<br>"; // var_dump 로 쓴다면? -> 타입을 알려준다.
        echo var_dump($str). "=". $str. "<br>"; // var_dump 로 쓴다면? -> 타입을 알려준다. 
    ?>
    
    <!-- 연산자 -->
    <!-- php는 c와 다르게 +를 숫자만 쓸수 있음. -->
    <?php
        echo "<h3> 연산자 연습</h3>";

        $f = 30;    $s = 20;
        $r = $f / $s;

        echo "30/20 = $r <br>";
        //"30/20 = ". 30/20 . "br"; 을 해버리면 .30인지 알수가 없어서 해석을 못하고 에러. 이럴때는 반드시 ,로 해줘여 함.
        //비교 연산자를 쓸때, true 이면 1을, 아니면 0을 출력하게 되는데, 여기서는 0이 안나오고 그냥 아예 안나옴.
        



    ?>

</body>
</html>
<!-- 아 저번주차 안들었다... -->
<!-- 그리고 저번주차에 있었던 시간 추가도 해야함. -->

<!-- php는 c와 다르게, 이미 할당되어있는 배열에 또 다른 값을 넣고 싶다고 하면 그게 됨. 원래는 malloc를 써야함. -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2> 연관 배열 체험</h2>
    <?php    
    $colors[0] = "red";
    $colors[1] = "green";
    $colors[2] = "blue";

    for ($i = 0; $i<3;$i++) {
        echo "colors[$i]: $colors[$i] <br>";
        echo "<font color='$colors[$i]'>Hello Php!</font><br>";
    }
    ?>

    <?php
    $grade = ["j" => 98, "s" => 85, "p" => 89];
    //name은 j,s,p
    $grade["k"] = 100;

    //숫자로 참조한 for 은 쓸수 없음. 다만 foreach 는 쓸수 있음
    $sum = 0;
    foreach($grade as $name => $score) {
        $sum+= $score;
        echo "이름: $name"." 점수: $score<br>";
    }
    $avg = $sum / 4;
    echo "평균: $avg <br>"
    ?>
    <hr>
    <h2> 다차원 배열(배열안에 배열이 들어갈수도 있음.)</h2>

    <?php
        $gradeArr = array(
        "jeong" => array("국" => 98, "수" => 99, "영" => 95),
        "seung" => array("국" => 94, "수" => 92, "영" => 91),
        "do" => array("국" => 99, "수" => 89, "영" => 90)
    );

        //접근 방법: gradeArr["do"]["국"]

        foreach($gradeArr as $name => $score) { //score 는 array 전체가 들어오게 됨.
            $sum = 0;// 사람이 넘어갈때를 고려해서 0으로 초기화
            echo "이름: $name <br>";
            foreach($score as $lec => $num) {
                echo "과목: $lec, 점수: $num ";
                $sum += $num;
        }
        $avg = $sum / 3;
        echo "<br>총점: $sum, 평균: $avg, <br>";
        echo "==========================================<br>";
    }
    ?>

    <hr>
    <h2> 문자열 </h2>

    <?php
    
    ?>
</body>
</html>
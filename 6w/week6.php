<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GET method test</title>
</head>
<body>
    <form method="GET" action="process.php">
        ID: <input type="text" name="id"><br>
        PASS: <input type="password" name="ps"><br>
        이름: <input type="text" name= "name" value="이승훈"><br>
        

        <label>남성: <input type="radio" name="gender" value="male"></label>
        <label>여성: <input type="radio" name="gender" value="female" checked></label>
        <br>
        <label><input type="checkbox" name="hobby" value="등산">등산</label>
        <label><input type="checkbox" name="hobby" value="낚시">낚시</label>
        <label><input type="checkbox" name="hobby" value="운동">운동</label>

        <input type="submit" value="로그인"><br>
    </form>
</body>
</html>

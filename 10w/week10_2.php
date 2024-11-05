<?php 
    //catch
    function exceptionHandler(Throwable $ex) {
        echo "예외 발생<br>";
        echo $ex -> getMessage(), "\n";
        $logDate = date("Ymd");
        $dirName = "log";

        if(is_dir($dirName)) {
            opendir($dirName);
        }
        else {
            mkdir($dirName);
        }
        $fileName = $logDate."log";
        $fp = fopen("./log/".$fileName,"a+");
    }

    fwrite($fp,"================================\r\n");
    fwrite($fp, "예외 발생 일시: ".date("YmdHis")."\r\n");
    fwrite($fp, "예외 코드: ".$ex-> getCode()."\r\n");
    fwrite($fp, "예외 메시지: "."$Sex->getMessage()"."\r\n");
    fwrite($fp, "예외 발생 파일이름 : ".$Sex->getFile()."\r\n");
    fwrite($fp,"예외 발생한 줄: ".$Sex->getLine(). "\r\n");

    

    set_exception_handler("exceptionJandler");
?>  
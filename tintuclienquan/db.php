<?php
    try {
        $conn = new PDO (
            "mysql:host=localhost;
            dbname=labtintuc;
            charset=utf8", "root", "");
        echo "Ket noi thanh cong";
    } catch(\Throwable $th) {
        //Throw $th;
        echo "Ket noi khong thanh cong";
    }
?>

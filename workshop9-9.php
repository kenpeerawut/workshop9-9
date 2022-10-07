<?php include "connect.php" ?>  
<html>
<head><meta charset="utf-8"></head>  
<body>
    <?php
        $member = $pdo->prepare("SELECT * FROM member");
        $member->execute();

        while($row=$member->fetch()){
    ?>
        ชื่อสมาชิก: <?=$row["username"]?><br>
        ที่อยู่: <?=$row["address"]?><br>
        อีเมล: <?=$row["email"]?><br>
        <a href="form9-9.php?username=<?=$row["username"]?>">เเก้ไข</a>
        <hr>


    <?php } ?>
</body>
</html>
<?php include "connect.php"?>
    <?php
        $stmt = $pdo->prepare("SELECT * FROM member WHERE username=?");
        $stmt->bindParam(1,$_GET["username"]);
        $stmt->execute();
        $row = $stmt->fetch();
    ?>

<body>
    <form action="editform9-9.php" method="post">
        <input type="hidden" name="username" value="<?=$row["username"]?>"><br>

        ชื่อ: <input type="text" name="name" value="<?=$row["name"]?>"><br>

        ที่อยู่: <br> <textarea name="address" rows="5" cols="40"><?=$row["address"]?></textarea><br>

        อีเมล: <input type="email" name="email" value="<?=$row["email"]?>"><br>
        <input type="submit" value="แก้ไขสมาชิก">
    </form>
    
</body>
</html>

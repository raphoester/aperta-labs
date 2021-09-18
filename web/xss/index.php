<?php require("db.php") ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LiveChat</title>
</head>
<body>
    <div>
        <div>
        <h1>Chat room</h1>
        </div>
        <?php 
            $sql = "select * from message m inner join user u on u.id = m.senderid";
            $results = $pdo->query($sql)->fetchAll;

            foreach ($messages as $message) {
                ?>
                    <div>
                        <p><em><?php echo $message["name"] ?></em></p>
                        <p><?php echo $message["content"]?></p>
                    </div>
                <?
            }
        ?>
        <form action="" method="POST">
            <div>
                <p><strong>Hello John</strong></p>
                <p>Say something !</p>
                <input type="text" name="message">
            </div>
            <div>
                <input type="submit" value="Reverse">
            </div>
        </form>
    </div>
    
    <div>
        <?php 
        if (isset($_POST["message"])){
            $sql = $pdo->exec("insert into message (content, datetime, senderid) values (".$_POST["message"].", 0, 1");
        }
        ?>
    </div>
</body>
</html>
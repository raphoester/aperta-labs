<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
        <div>
        <h1>String reverser</h1>
        </div>
        <form action="" method="GET">
            <div>
                <p>Enter a string here</p>
                <input type="text" name="string">
            </div>
            <div>
                <input type="submit" value="Reverse">
            </div>
        </form>
    </div>
    
    <div>
        <?php 
        if (isset($_GET["string"])){
            $command = "echo ".$_GET["string"]." | rev";
            $res = shell_exec($command);
            echo $res;
        }
        ?>
    </div>
</body>
</html>
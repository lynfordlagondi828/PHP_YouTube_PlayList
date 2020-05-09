<?php

    require_once 'DbFunctions.php';
    $database = new DbFunctions();

    if (isset($_POST["submit"])) {
       
       $title = trim($_POST["title"]);
       $description = trim($_POST["description"]);

       $result = $database->insert_data($title,$description);
       echo "Data successfully added......";

    }

?>

<html>
    <title>Insert Data</title>
    <body>
        <form method="POST">
            <input type="text" name="title" placeholder="Title"/>
            <input type="text" name="description" placeholder="Description"/>
            <button name="submit">Save</button>
        </form>
    </body>
</html>
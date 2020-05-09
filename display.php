<?php
    require 'DbFunctions.php';
    $database = new DbFunctions();

    $list = $database->getAllRecords();

 ?>

 <html>
    <h3>Posts</h3>

    <table border="1">
        <tr>
          <th>Title</th>
          <th>description</th>
        </tr>
        <?php foreach($list as $result): ?>
            <tr>
                <td><?php echo $result["title"]; ?></td>
                <td><?php echo $result["description"]; ?></td>
            </tr>
        <?php endforeach ?>
    </table>
 </html>

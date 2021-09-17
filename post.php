<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="post.css?v=<?php echo time();?>">
    <title>Document</title>
</head>
<body>
<div id="post">
    <div>

    </div>
    <div>
        <div class="status_bar" style="font-weight: bold;color: #405d9b">First Guy</div>
            <p>
            <?php
                echo  $row_user['post']
            ?>
        </p>
        <br/><br/>
        
    </div>
</div>
</body>
</html>

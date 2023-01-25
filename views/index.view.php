<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/public/css/style.css">
    <title>Document</title>
</head>
<body>
    <?php require_once('partials/nav.php'); ?>
    <div style="margin-left: 25%; margin-right: 25%; height: 100%;">
        <h1>Tasks</h1>
        <ul style="border: solid black 2px; list-style-type: none;">
            <?php foreach ($tasks as $task): ?>
                <li style="font-size: 24px;">

                    <?php if ($task->is_completed ): ?>
                        <strike>
                    <?php endif; ?>
                    
                    <?=$task->description;?>
                    
                    <?php if ($task->is_completed ): ?>
                        </strike>
                    <?php endif; ?>

                </li>    
            <?php endforeach; ?>
        </ul>
    </div>
</body>
</html>
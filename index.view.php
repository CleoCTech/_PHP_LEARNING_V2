<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>

        <!-- <link rel="stylesheet" href="css/style.css"> -->
        <style>
        header {
            background: #e3e3e3;
            padding: 2em;
            text-align: center;
        }
        </style>
    </head>

    <body>
        <header>
            <h1>Tasks</h1>
        </header>
        <br>
        <ul>
            <?php foreach ($tasks as $task): ?>
            <li>
                <?php if ($task->completed): ?>
                    <strike><?= $task->description; ?></strike>
                <?php else: ?>
                    <?= $task->description; ?>
                <?php endif; ?>    
            </li>
            <?php endforeach; ?>
        </ul>

    </body>

</html>
<script type="text/javascript">
</script>
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
            <h1>Task of the day</h1>
        </header>

        <ul>
            <?php foreach ($task as $key => $value): ?>
            <li> <strong><?= ucwords($key); ?>: </strong><?= $value; ?></li>
            <?php endforeach; ?>
        </ul>
        <br>
        <ul>
            <li>
                <strong>Task Name: </strong> <?= $task['title']; ?>
            </li>
            <li>
                <strong>Due Date: </strong> <?= $task['due']; ?>
            </li>
            <li>
                <strong>Person Responsible: </strong> <?= $task['assigned_to']; ?>
            </li>
            <li>
                <strong>Statu: </strong> <?= ($task['completed']) ? 'Completed' : 'Incomplete' ; ?>
            </li>
        </ul>

    </body>

</html>
<script type="text/javascript">
</script>
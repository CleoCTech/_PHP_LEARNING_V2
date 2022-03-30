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
            <ul>
                <?php foreach ($person as $key => $feature) :?>
                <li> <strong><?= $key; ?></strong><?= $feature ?></li>
                <?php endforeach;?>
            </ul>
        </header>
    </body>

</html>
<script type="text/javascript">
</script>
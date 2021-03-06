<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        header {
            background: #e3e3e3;
            padding: 2em;
            text-align: center;
        }
    </style>
</head>
<body>
    <ul>
        <!-- short hand -->
        <?php foreach ($animals as $animal) : ?>
                <li><?= $animal; ?></li>
        <?php endforeach; ?>

        <!-- Long hand? -->
        <?php
            foreach ($animals as $animal) {
                echo "<li>$animal</li>";
            }
        ?>
    </ul>
</body>
</html>
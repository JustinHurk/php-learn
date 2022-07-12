<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1> Task for the day</h1>
    <ul>
        <li>
            <strong>Name: </strong><?= $task['title'] ?>
        </li>
        <li>
            <strong>Due Date: </strong><?= $task['due'] ?>
        </li>
        <li>
            <strong>Personal Responsible: </strong><?= $task['assigned_to'] ?>
        </li>
        <li>
            <strong>Status: </strong><?= $task['completed'] ? '&#9989' : '&#9940' ?>
        </li>

        <!--<?php foreach  ($task as $head => $val) : ?>
            <li>
                <strong><?= ucwords($head);?>: </strong><?= $val; ?>
            </li>
        <?php endforeach; ?> -->
    </ul>
</body>
</html>
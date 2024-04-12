<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mon site - <?= ($title) ?></title>
</head>

<body>
    <div class="container">
        <?php
        require_once('./views/widgets/header.php');
        echo ($content);
        require_once('./views/widgets/footer.php');
        ?>
    </div>

</body>

</html>
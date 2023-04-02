<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FlashCard</title>
    <link rel="stylesheet" href="./style.css">
    <?php include 'requirements.php' ?>
</head>

<body>
    <?php include 'header.php' ?>
    <?php include 'navbar.php' ?>
    <div class="container">
    <?php include 'updateSubjectCard.php' ?>
    </div>
</body>
</html>

<style>
    
    body{
        background: url('./testback.jpg');
        background-position:center;
        background-size: cover;
        background-repeat: no-repeat;
        height: 100vh;
        width: 100%;
        font-family: var(--font-maia);
    }
</style>
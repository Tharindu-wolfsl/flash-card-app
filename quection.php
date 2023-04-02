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
        <div class="card  ms-auto col-lg-6 col-md-8 col-sm-12">
            <div class="card-body  d-flex flex-column align-items-center justify-content-center">
                <h5 class="card-title">QUESTION</h5>
                <p class="card-text">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Est perferendis atque perspiciatis aut quod. Cupiditate, consequuntur non. Aut voluptas, sequi fugiat veritatis nulla deserunt eum ex? Magni laboriosam soluta cupiditate!</p>
            </div>
        </div>
    </div>
</body>

</html>

<style>

    .card{
        margin-top: 80px;
        min-height: 500px;
        border-radius: 40px 40px 40px 0px;
        background-color:  rgb(20, 79, 76);
        color: white;
        padding: 80px;
        }
        .card-title{
            text-align: center;
            margin-bottom: 20px;
            font-size: 36px;
            font-weight: 700;
        }
        .card-text{
            text-align: left;
            font-size: 20px;
            letter-spacing: 1px;
            font-weight: 100;
        }
    body {
        background: url('./testback.jpg');
        background-position: center;
        background-size: cover;
        background-repeat: no-repeat;
        height: 100vh;
        width: 100%;
        font-family: var(--font-maia);
    }
</style>
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
        <div class="my-profile text-center  h3"style="margin-top:80px;" >
            <span class="profile-title">My Profile</span>
            <div class="hl"></div>
            <div class="row row-md section-row">
                <div class="col-xl-6 col-lg-7 col-md-9 mx-md-auto col-sm-12">
                    <div class="profile-card d-sm-flex justify-content-between align-items-center  mx-sm-auto">
                        <div class="profile-pic">
                            J
                        </div>
                        <div class="contact-details ">
                            <span class="contact-titles my-2">YOUR NAME</span>
                            <span class="contatc-data my-2">JOHN SMITH</span>
                            <span class="contact-titles my-2">EMAIL ADDRESS</span>
                            <span class="contatc-data my-2">johnsmith@gmail.com</span>
                            <span class="contact-titles my-2">SELECTED SUBJECT</span>
                            <div class="subjects d-flex flex-wrap">
                                <span class="subject border-radius-2"> CHEMISTRY</span>
                                <span class="subject border-radius-2"> PHYSICS</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-1 col-lg-1">
                    <span class="vl "></span>
                </div>
                <div class="col-xl-5 col-lg-4">
                    <ul class="nav-set d-flex flex-column justify-content-evenly align-items-start">
                        <li class="nav-tab nav-item w-100"><a href="#" class="nav-link  rounded-pill pill-1 text-light">EDIT PROFILE <span class="i bi bi-chevron-right mx-1"></span></a></li>
                        <li class="nav-tab nav-item w-100 "><a href="#" class="nav-link  rounded-pill pill-2 text-light">CHANGE PASSWORD <span class="i bi bi-chevron-right mx-1"></span></a></li>
                        <li class="nav-tab nav-item w-100 "><a href="#" class="nav-link  rounded-pill pill-3 text-light">DELETE ACCOUNT <span class="i bi bi-chevron-right mx-1"></span></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</body>
</html>

<style>

    .nav-set{
            min-height: 300px;
    } 
    .section-row {
        margin-top: 150px;
    }


    .nav-tab .nav-link{
            display: flex;
            justify-content: space-between;
            align-items: center;
            line-height: 60px;
            font-size: 18px;
            padding-inline: 40px;
            font-weight: 400;
    }

    .nav-set .pill-1{
        background-color:rgb(20, 79, 76);
    }
    .nav-set .pill-2{
        background-color:rgb(20, 79, 76);
    } 
    .nav-set .pill-3{
        background-color:#E83167;
    } 
    .subjects .subject{
        font-size: 12px;
        background-color: #ffffff75;
        margin-right: 4px;
        margin-bottom: 4px;
        line-height: 20px;
        padding-inline: 15px;
        border-radius: 8px;
        color: black;
    }
    .contact-titles{
        font-size: 18px;
        color: #ffffffc7;
    }
    .contact-details{
        display: flex;
        flex-direction: column;
        right: 0;
        align-items: flex-start;
        color: white;
    }
    .profile-card{
        background-color:rgb(20, 79, 76);
        position: relative;
        padding-inline: 30px;
        padding-top: 30px;
        padding-bottom: 40px;
        min-height: 300px;
        border-radius: 40px;
    }
    @media (max-width: 575.98px) { 
        .profile-card{
        width: 100%;
    }
    .profile-pic{
        margin: 3px auto;
    }
    
    .vl{
        display: none !important;
    }
    .section-row {
        margin-top: 20px;
    }
    
     }

    @media (max-width: 991.98px) { 
        .profile-card{
        width: 100%;
        margin: 3px auto;
    }
    
    .vl{
        display: none !important;
    }
    .section-row {
        margin-top: 20px;
    }
    
}


    .profile-pic{
        position: relative;
        background-color:white ;
        color: rgb(20, 79, 76);
        text-align: center;
        width: 180px;
        height: 180px;
        border-radius: 50%;
        line-height: 180px;
        font-weight: 700;
        font-size: 108px;
    }
    .profile-pic::after{
        content: '';
        position: absolute;
        bottom: 0;
        width: 40px;
        height: 40px;
        background-color: #26E564;
        border-radius: 50%;
        
    }
    
    body{
        background: url('./background.jpg');
        background-position:center;
        background-size: cover;
        background-repeat: no-repeat;
        height: 100vh;
        width: 100%;
        font-family: var(--font-maia);
    }

    .profile-title{
        font-weight: 700;
        
    }
    .vl{
        height: 300px;
        display: block;
        width: 2px;
        background-color:#00000066;
        margin: 0 auto;
    }
    .hl{
        width: 80px;
        margin: 10px auto;
        height: 8px;
        background-color: rgb(20, 79, 76);
    }

    ul{
        text-decoration: none;
        padding: 0;
        margin: 0;
        border: none;
    }
    li{
        list-style: none;
        padding: 0;
        margin: 0;
        text-decoration: none;
    }
     .nav-set a{
        padding: 0;
        margin: 0;
        text-decoration: none;
        color: black;
    }

</style>
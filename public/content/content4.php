<?php
    session_start();
    if(isset($_SESSION['id'])){ 
    $status="<li class='nav-item ml-auto'><a class='nav-link' href='#'>&#9977 USER</a></li>";
    $button='<li class="nav-item"><a class="nav-link text-white" href="../../app/controller.php?status=logout">LOGOUT</a></li>';
    }else {$button='<li class="nav-item"><a class="nav-link text-white" href="http://localhost/Project/gunadarma/public/login.html">LOGIN</a></li>';$status="";}
?>
<html>
    <head>
        <title>Gunadarma</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="../../assets/css/bootstrap.css">
        <link rel="stylesheet" type="text/css" href="../../assets/style.css">
        <script type="text/javascript" src="../../assets/js/jquery-3.2.1.js"></script>
        <script type="text/javascript" src="../../assets/js/bootstrap.js"></script>
    </head>
    <body>
        <nav class="navbar navbar-expand-lg bg-purple">          
            <ul class="navbar-nav mr-auto mt-2 mt-lg-0 container ">
                <li class="nav-item text-white">&#9742 08123456789  &#9745 GUNADARMA@EMAIL.COM</li><?php echo $button?>
            </ul>
        </nav>
        <div class="container-fluid"><br>
            <div class="container">
                <div class="row h-25">
                    <div class="col-md-3 d-flex justify-content-center"><img class="h-100 " src="../../assets/img/logo.png"></div>
                    <div class="col-md-9 d-flex align-items-center justify-content-center "><img class="h-75 w-75 hidden1" src="../../assets/img/logo2.png"></div>
                </div>
            </div><br>
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
                <ul class="navbar-nav mr-auto mt-2 mt-lg-0 container font-weight-bold">
                    <li class="nav-item active purple "><a class="nav-link" href="http://localhost/Project/gunadarma/">HOME<span class="sr-only">(current)</span></a></li>
                    <li class="nav-item"><a class="nav-link" href="#">ABOUT</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">GALERY / PHOTOS</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">AKADEMIK</a></li>
                    <li class="nav-item display1"><a class="nav-link" href="#">UG DIREKTORI</a>
                        <ul class=" nav navbar-nav font-weight-bold d-block ">
                            <li class="nav-item"><a href="#" class="nav-link">STAFFSITE</a></li>
                            <li class="nav-item"><a href="#" class="nav-link">STUDENTSITE</a></li>
                            <li class="nav-item"><a href="#" class="nav-link">CAREER CENTER</a></li>
                            <li class="nav-item"><a href="#" class="nav-link">DIREKTORY</a></li>
                            <li class="nav-item"><a href="#" class="nav-link">BAPSI</a></li>
                            <li class="nav-item"><a href="#" class="nav-link">STAFFSITE</a></li>
                        </ul>
                        <hr>
                    </li>
                    <?php echo $status; ?>
                </ul>
            </div>
            </nav>
        </div><br>
        <div class="container-fluid">
            <div class="row">
                <div class="display2 col-lg-2">
                    <nav class=" nav navbar navbar-expand-lg navbar-light bg-light">
                        <button class=" navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo04" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarTogglerDemo04">
                            <ul class="nav navbar-nav font-weight-bold d-block">
                                <li class="nav-item"><a href="#" class="nav-link">STAFFSITE</a></li>
                                <li class="nav-item"><a href="#" class="nav-link">STUDENTSITE</a></li>
                                <li class="nav-item"><a href="#" class="nav-link">CAREER CENTER</a></li>
                                <li class="nav-item"><a href="#" class="nav-link">DIREKTORY</a></li>
                                <li class="nav-item"><a href="#" class="nav-link">BAPSI</a></li>
                                <li class="nav-item"><a href="#" class="nav-link">STAFFSITE</a></li>
                            </ul>
                        </div>
                    </nav>
                </div>
                <div class="col-md-10">
                    <h2 class="text-center purple">TITLE 1</h2>
                    <div class="picture col-md-12 text-center"><img class="w-50 h-50 "src="../../assets/img/ug4.jpg"></div><br>
                    <div class="text-justify">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis luctus facilisis dui eget lobortis. Mauris diam nisi, congue quis aliquam in, auctor sed diam. Duis congue felis vel ante pulvinar, id iaculis eros iaculis. Donec ut ornare sapien, in eleifend quam. Interdum et malesuada fames ac ante ipsum primis in faucibus. Donec sit amet ipsum vel dui blandit varius. Vivamus diam diam, sodales eu lorem sed, auctor tincidunt lorem. Morbi eget tempor tellus, eget vulputate diam. Proin eu quam aliquam, placerat quam in, fermentum arcu. Nullam elit lacus, feugiat nec sollicitudin vel, egestas ac odio. Integer sit amet bibendum elit. Ut commodo fermentum velit, vel finibus ligula tristique a. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        <p>Pellentesque at urna vel nulla aliquam sagittis. Donec malesuada massa sed pellentesque facilisis. Curabitur at eros sit amet ligula rhoncus porttitor. Donec non lectus lacus. Nullam fringilla nibh ut cursus laoreet. Duis nisi libero, imperdiet sit amet urna ut, rutrum aliquam arcu. Morbi euismod dolor et quam imperdiet, quis efficitur mi interdum. Nam ut euismod sapien.</p>
                        <p>Cras luctus tincidunt nulla, vel finibus diam lacinia ut. Pellentesque mauris nibh, tincidunt id pellentesque ut, congue id dui. Phasellus quis justo ultricies, efficitur neque sit amet, ullamcorper purus. Ut id justo vulputate, commodo lorem eget, condimentum est. Nulla nec fringilla est. Donec nisi neque, cursus ut lectus tincidunt, aliquet maximus ligula. Proin ut ullamcorper purus. Praesent turpis massa, tincidunt quis mi ut, finibus tincidunt magna. Vestibulum volutpat fermentum elit. Mauris ullamcorper tempus arcu non pellentesque. Ut sagittis venenatis luctus. In eget sodales magna.</p>
                        <p>Maecenas dui ante, bibendum vitae diam id, luctus efficitur purus. Nam iaculis et diam et aliquet. Proin auctor bibendum malesuada. Proin dapibus tincidunt enim ut vulputate. Suspendisse eu dapibus enim. Curabitur tristique consectetur leo volutpat aliquam. Pellentesque sodales efficitur nisl ut posuere. Phasellus mollis urna vel lobortis malesuada. Cras molestie vel odio rhoncus gravida. Sed purus felis, hendrerit ut accumsan in, molestie quis ex. Maecenas turpis orci, ornare non dolor vitae, pulvinar consequat sem. Duis placerat congue condimentum. Nullam viverra odio vitae volutpat interdum. Praesent quis ligula sit amet mauris aliquet finibus lobortis in diam. Vestibulum iaculis diam a dictum consectetur.</p>
                    </div>
                    <div style="height:100px"></div>
                </div>
            </div>
        </div>
        <nav class="navbar bg-purple footer">
            <ul class="navbar-nav mr-auto mt-2 mt-lg-0 container "><p class="text-white d-flex align-items-center justify-content-center">&copy COPYRIGHT 2018</p></ul>
        </nav>
    </body>
</html>
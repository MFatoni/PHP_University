<?php
    session_start();
    if(isset($_SESSION['id'])){ 
    $status="<li class='nav-item ml-auto'><a class='nav-link' href='#'>&#9977 USER</a></li>";
    $button='<li class="nav-item "><a class="nav-link text-white" href="app/controller.php?status=logout">LOGOUT</a></li>';
    }else {$button='<li class="nav-item  "><a class="nav-link text-white" href="http://localhost/Project/gunadarma/public/login.html">LOGIN</a></li>'; $status="";}
?>
<html>
    <head>
        <title>Gunadarma</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">
        <link rel="stylesheet" type="text/css" href="assets/style.css">
        <script type="text/javascript" src="assets/js/jquery-3.2.1.js"></script>
        <script type="text/javascript" src="assets/js/bootstrap.js"></script>
    </head>
    <body>
        <nav class="navbar navbar-expand-lg bg-purple">          
            <ul class="navbar-nav mr-auto mt-2 mt-lg-0 container "><li class="nav-item text-white">&#9742 08123456789  &#9745 GUNADARMA@EMAIL.COM</li><?php echo $button;?></ul>
        </nav>
        <div class="container-fluid"><br>
            <div class="container">
                <div class="row h-25">
                    <div class="col-md-3 d-flex justify-content-center"><img class="h-100 " src="assets/img/logo.png"></div>
                    <div class="col-md-9 d-flex align-items-center justify-content-center "><img class="h-75 w-75 hidden1" src="assets/img/logo2.png"></div>
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
                        <?php echo $status;?>
                    </ul>
                </div>
            </nav>
        </div>
        <div class="container-fluid"><img class="w-100" src="assets/img/slide.png"></div><br>
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
                <div class="col-lg-10">
                    <div class="col-md-12"> 
                        <div class="h3 purple">Berita UG</div><hr>
                        <div class="row">
                            <div class="col-md-4 ">
                                <div class="container-fluid border rounded col-md-12"><br>
                                    <div class="picture col-md-12"><img class="w-100 h-25 "src="assets/img/ug.jpg"></div><br>
                                    <div class="h6 text-center font-weight-bold purple"><a href="http://localhost/Project/gunadarma/public/content/content1.php" class="purple">Title 1</a></div><hr>
                                    <p class="text-justify">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum metus ex, finibus vitae est nec, tincidunt fringilla magna. Praesent ac mollis arcu. Vestibulum volutpat tincidunt enim, ut aliquam nunc vulputate eget. Maecenas augue mi, imperdiet in mauris porttitor, pulvinar tempor orci. Vivamus sed condimentum ex. Sed consectetur, mauris vitae consectetur fringilla, nulla nisi condimentum orci, ac convallis nunc tortor ut massa. Sed tempor consectetur condimentum.</p>
                                </div>
                            </div>
                            <div class="col-md-4 ">
                                <div class="container-fluid border rounded col-md-12"><br>
                                    <div class="picture col-md-12"><img class="w-100 h-25 "src="assets/img/ug1.jpeg"></div><br>
                                    <div class="h6 text-center font-weight-bold purple"><a href="http://localhost/Project/gunadarma/public/content/content2.php" class="purple">Title 2</a></div><hr>
                                    <p class="text-justify">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum metus ex, finibus vitae est nec, tincidunt fringilla magna. Praesent ac mollis arcu. Vestibulum volutpat tincidunt enim, ut aliquam nunc vulputate eget. Maecenas augue mi, imperdiet in mauris porttitor, pulvinar tempor orci. Vivamus sed condimentum ex. Sed consectetur, mauris vitae consectetur fringilla, nulla nisi condimentum orci, ac convallis nunc tortor ut massa. Sed tempor consectetur condimentum.</p>
                                </div>
                            </div>
                            <div class="col-md-4  ">
                                <div class="container-fluid border rounded col-md-12"><br>
                                    <div class="picture col-md-12"><img class="w-100 h-25 "src="assets/img/ug3.jpg"></div><br>
                                    <div class="h6 text-center font-weight-bold purple"><a href="http://localhost/Project/gunadarma/public/content/content3.php" class="purple">Title 3</a></div><hr>
                                    <p class="text-justify">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum metus ex, finibus vitae est nec, tincidunt fringilla magna. Praesent ac mollis arcu. Vestibulum volutpat tincidunt enim, ut aliquam nunc vulputate eget. Maecenas augue mi, imperdiet in mauris porttitor, pulvinar tempor orci. Vivamus sed condimentum ex. Sed consectetur, mauris vitae consectetur fringilla, nulla nisi condimentum orci, ac convallis nunc tortor ut massa. Sed tempor consectetur condimentum.</p>
                                </div>
                            </div>
                        </div>
                        <br>
                    </div>
                    <div class="col-md-12 ">
                        <div class="h3 purple">Event/Seminar</div><hr>
                        <div class="row" >
                            <div class="col-md-4 ">
                                <div class="container-fluid border rounded col-md-12"><br>
                                    <div class="picture col-md-12"><img class="w-100 h-25 "src="assets/img/ug4.jpg"></div><br>
                                    <div class="h6 text-center font-weight-bold"><a href="http://localhost/Project/gunadarma/public/content/content4.php" class="purple"> Title 1</a></div><hr>
                                    <p class="text-justify">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum metus ex, finibus vitae est nec, tincidunt fringilla magna. Praesent ac mollis arcu. Vestibulum volutpat tincidunt enim, ut aliquam nunc vulputate eget. Maecenas augue mi, imperdiet in mauris porttitor, pulvinar tempor orci. Vivamus sed condimentum ex. Sed consectetur, mauris vitae consectetur fringilla, nulla nisi condimentum orci, ac convallis nunc tortor ut massa. Sed tempor consectetur condimentum.</p>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="container-fluid border rounded col-md-12"><br>
                                    <div class="picture col-md-12"><img class="w-100 h-25 "src="assets/img/ug6.jpg"></div><br>
                                    <div class="h6 text-center font-weight-bold purple"><a href="http://localhost/Project/gunadarma/public/content/content5.php" class="purple">Title 2</a></div><hr>
                                    <p class="text-justify">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum metus ex, finibus vitae est nec, tincidunt fringilla magna. Praesent ac mollis arcu. Vestibulum volutpat tincidunt enim, ut aliquam nunc vulputate eget. Maecenas augue mi, imperdiet in mauris porttitor, pulvinar tempor orci. Vivamus sed condimentum ex. Sed consectetur, mauris vitae consectetur fringilla, nulla nisi condimentum orci, ac convallis nunc tortor ut massa. Sed tempor consectetur condimentum.</p>
                                </div>
                            </div>
                            <div class="col-md-4 ">
                                <div class="container-fluid border rounded col-md-12"><br>
                                    <div class="picture col-md-12"><img class="w-100 h-25 "src="assets/img/ug5.jpg"></div><br>
                                    <div class="h6 text-center font-weight-bold purple"><a href="http://localhost/Project/gunadarma/public/content/content6.php" class="purple">Title 3</a></div><hr>
                                    <p class="text-justify">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum metus ex, finibus vitae est nec, tincidunt fringilla magna. Praesent ac mollis arcu. Vestibulum volutpat tincidunt enim, ut aliquam nunc vulputate eget. Maecenas augue mi, imperdiet in mauris porttitor, pulvinar tempor orci. Vivamus sed condimentum ex. Sed consectetur, mauris vitae consectetur fringilla, nulla nisi condimentum orci, ac convallis nunc tortor ut massa. Sed tempor consectetur condimentum.</p>
                                </div>
                            </div>
                        </div>
                        <br>
                    </div>
                </div>
            </div>
        </div>
        <nav class="navbar bg-purple ">
            <ul class="navbar-nav mr-auto mt-2 mt-lg-0 container "><p class="text-white d-flex align-items-center justify-content-center">&copy COPYRIGHT 2018</p></ul>
        </nav>
    </body>
</html>
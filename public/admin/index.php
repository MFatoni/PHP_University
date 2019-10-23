<?php
    session_start();
    if(isset($_SESSION['id'])){ 
        if($_SESSION['role']=="admin"){
            echo "<script>alert('Selamat Datang Admin');</script>";
            $username = $_SESSION['id'];
            $field="";
            for ($i= 1; $i <= 12; $i++){
                $rand=(rand(200,400));
                $field.=$rand.',';}
        }else{
            echo "<script>alert('Selamat Datang User');window.location='../user/index.php';</script>";
        }
    }else{
        header("location:../login.html");
    }
?>
<html>
    <head>
        <title>Gunadarma</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="../../assets/css/bootstrap.css">
        <link rel="stylesheet" type="text/css" href="../../assets/style.css">
        <script type="text/javascript" src="../../assets/js/jquery-3.2.1.js"></script>
        <script type="text/javascript" src="../../assets/js/bootstrap.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.3/Chart.bundle.js"></script>
    </head>
    <body>
        <nav class="navbar navbar-expand-lg bg-purple">          
            <ul class="navbar-nav mr-auto mt-2 mt-lg-0 container ">
                <li class="nav-item text-white">&#9742 08123456789  &#9745 GUNADARMA@EMAIL.COM</li>
                <li class="nav-item"><a class="nav-link text-white" href="../../app/controller.php?status=logout">LOGOUT</a></li>
            </ul>
        </nav>
        <div class="container-fluid"><br>
        <div class="container">
                <div class="row h-25">
                    <div class="col-md-3 d-flex justify-content-center">
                        <img class="h-100 " src="../../assets/img/logo.png">
                    </div>
                    <div class="col-md-9 d-flex align-items-center justify-content-center ">
                        <img class="h-75 w-75 hidden1" src="../../assets/img/logo2.png">
                    </div>
                </div>
            </div><br>
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
                    <ul class="navbar-nav mr-auto mt-2 mt-lg-0 container font-weight-bold">
                        <li class="nav-item active purple ">
                            <a class="nav-link" href="">HOME<span class="sr-only"></span></a>
                        </li>
                        <li class="nav-item"><a class="nav-link " href="#">POST</a></li>
                        <li class="nav-item"><a class="nav-link " href="#">MEDIA</a></li>
                        <li class="nav-item"><a class="nav-link " href="#">PAGE</a></li>
                        <li class="nav-item"><a class="nav-link " href="#">COMMENTS</a></li>
                        <li class="nav-item"><a class="nav-link " href="#">APPEARANCE</a></li>
                        <li class="nav-item"><a class="nav-link " href="#">SETTING</a><hr></li>
                        <li class="nav-item ml-auto"><a class="nav-link " href="#">&#9977 ADMIN</a></li>
                    </ul>
                </div>
            </nav>
        </div>
        <br>
        <div class="container">
            <h4 class="text-center">Website's Traffic</h4><br>
            <div class="row">
            <canvas id="myChart" width="400" height="200"></canvas>
            <script>
            var ctx = document.getElementById("myChart").getContext('2d');
            var myChart = new Chart(ctx, {
                type: 'bar',
                data: {
                    labels: ["JAN", "FEB", "MAR", "APR", "MEI", "JUN","JUL", "AGU", "SEP", "OKT", "NOV", "DES"],
                    datasets: [
                        {data: [<?php echo substr($field,0,47);?>],
                        backgroundColor: ['rgba(255, 99, 132, 0.2)','rgba(54, 162, 235, 0.2)','rgba(255, 206, 86, 0.2)','rgba(75, 192, 192, 0.2)','rgba(153, 102, 255, 0.2)','rgba(255, 159, 64, 0.2)','rgba(255, 99, 132, 0.2)','rgba(54, 162, 235, 0.2)','rgba(255, 206, 86, 0.2)','rgba(75, 192, 192, 0.2)','rgba(153, 102, 255, 0.2)','rgba(255, 159, 64, 0.2)'],
                        borderColor: ['rgba(255,99,132,1)','rgba(54, 162, 235, 1)','rgba(255, 206, 86, 1)','rgba(75, 192, 192, 1)','rgba(153, 102, 255, 1)','rgba(255, 159, 64, 1)','rgba(255,99,132,1)','rgba(54, 162, 235, 1)','rgba(255, 206, 86, 1)','rgba(75, 192, 192, 1)','rgba(153, 102, 255, 1)','rgba(255, 159, 64, 1)'],
                        borderWidth: 1}]
                },
                options: {scales: {yAxes: [{ticks: {beginAtZero:true}}]}}});
            </script>
            </div>
            <div class="row" >
                <div class="col-md-4">
                    <div class="container-fluid border rounded ">
                        <h1 class="text-center">123</h1>
                        <hr>
                        <div class="h6 text-center font-weight-bold purple">PAGE VIEWS</div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="container-fluid border rounded ">
                        <h1 class="text-center">321</h1>
                        <hr>
                        <div class="h6 text-center font-weight-bold purple">TOTAL COMMENTS</div>
                    </div>
                </div>
                <div class="col-md-4 ">
                    <div class="container-fluid border rounded ">
                        <h1 class="text-center">213</h1>
                        <hr>
                        <div class="h6 text-center font-weight-bold purple">ACTIVE USER</div>
                    </div>
                </div>
            </div>
            <div style="height:200px"></div>
        </div>
        <nav class="navbar bg-purple footer">
            <ul class="navbar-nav mr-auto mt-2 mt-lg-0 container ">
                <p class="text-white d-flex align-items-center justify-content-center">&copy COPYRIGHT 2018</p>
            </ul>
        </nav>
    </body>
</html>
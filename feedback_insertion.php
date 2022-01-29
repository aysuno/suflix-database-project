<?php
$movie_id = $_GET['movie_id'];
$movie_name = $_GET['movie_name'];
// get id through query string
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>SUFLIX</title>
    <link rel="icon" type="image/x-icon" href="assets/main/s.png" />
    <!-- Font Awesome icons (free version)-->
    <script src="https://use.fontawesome.com/releases/v5.15.4/js/all.js" crossorigin="anonymous"></script>
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B" crossorigin="anonymous">

    <link href="login.css" rel="stylesheet" />
</head>
<style>
    .box-color{
        background-color:white;
        margin-top: 10rem;
    }
    .box-insert-color{
        background-color:#4D4D56;
        color: white;
        opacity:25 ;
        margin-top: 10rem;
        margin-left: 1rem;


    }
    .box-insert-btn-color{
        background-color: white;
        justify-content: center;
        margin-left: 17.5rem;
    }
    .transparent-style{

        background-color: darkblue;
        opacity: .4;

    }


</style>
<body id="page-top">
<nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
    <div class="container px-4 px-lg-5">
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item"><a class="nav-link" href="all_movies.php">Return</a></li>
            </ul>
        </div>
    </div>
</nav>
<header class="masthead">
    <div class="d-flex align-content-center justify-content-center opacity-75" style="width: 640px; height: 640px; margin-left: 25rem">
        <div class="row box-insert-color">
            <div class="col mt-5 col-xs-12 col-md-12 col-lg-12">
                <h1 style="text-align:center; color:darkblue;font-weight: bold;">⠀⠀SUFLIX⠀⠀</h1>
                <h2 style="text-align:center; margin-left: 7.5rem">⠀⠀Add Feedback⠀For <?php
                    echo "$movie_name";
                    ?></h2>
                <br>
                <form action="insert_feedback.php?movie_id=<?php echo $movie_id; ?>" method="POST">
                    <div class="form-col" style="margin-left: 15rem">
                        <div class="form-group col-md-6">
                            <input type="text" class="form-control"  id="feedback_id" name="comment" value="" placeholder="Comment" />
                            <span class="glyphicon glyphicon-user form-control-feedback"></span>
                        </div>
                        <div class="form-group col-md-6">
                            <input type="number" class ="form-control"  id= "feedback_id" name = "rating" step="0.1" value="" placeholder="Rating" min="0" max="10" />
                            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                        </div>
                    </div>

                    <br>
                    <div class="form-row">
                        <div class="col">
                            <input type="submit" class="btn box-insert-btn-color btn-lg" id="_submit" name="_submit" value="ADD FEEDBACK" />
                        </div>
                        <br> <br> <br> <br>
                    </div>
                </form>
            </div>
        </div>
    </div>


</header>
<footer class="footer bg-black small text-center text-white-50"><div class="container px-4 px-lg-5">Copyright &copy; SUFLIX 2021</div></footer>
<!-- About-->



</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</html>



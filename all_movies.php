

<?php
// Username is root
$db = mysqli_connect('localhost','root','','SUFLIX');
$sql = "SELECT * FROM Movie" ;
$result = mysqli_query($db, $sql);
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
    <link href="user.css" rel="stylesheet" />
    <style>
        table {
            margin: 2rem auto;
            font-size: large;
            border: 1px solid black;
        }

        h1 {
            text-align: center;
            color: white;
            font-size: large;
            font-family: 'Gill Sans', 'Gill Sans MT',
            ' Calibri', 'Trebuchet MS', 'sans-serif';
            padding-top: 3rem;


        }

        h3{
            text-align: center;
            color: white;
            font-size: large;

        }

        td {
            background-color: #4D4D56;
            border: 1px solid white;
        }

        th,
        td {
            font-weight: bold;
            border: 1px solid black;
            padding: 10px;
            text-align: center;
            color: white;
        }

        td {
            font-weight: lighter;
            color: white;
        }
        .btn {
            color:black;
            padding: 10px 35px;
            font-size: 10px;
        }
        ::-webkit-scrollbar {
            width: 1px;
            color: black;
        }
        .card {
            background-color: rgba(0, 0, 0, 0.5);
            color: rgba(255, 255, 255, 0.7);

        }

    </style>
</head>
<body id="page-top">
<!-- Navigation-->
<nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
    <div class="container px-4 px-lg-5">
        <a class="navbar-brand" href="#page-top">SUFLIX</a>

        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item"><a class="nav-link" href="user.php">Return</a></li>

            </ul>
        </div>
    </div>
</nav>
<!-- Masthead-->
<header class="masthead">
    <h1>All Movies</h1>
    <h3>One price for every movie: 5$ </h3>
    <!-- TABLE CONSTRUCTION-->
    <div class="container">
        <div class="row">

            <?php // LOOP TILL END OF DATA
            while($rows=$result->fetch_assoc())
            {
                ?>

                <div class="col-md-4 mt-4">
                    <div class="card border-light mb-3" style="width: 25rem; height: 15rem;">
                        <div class="card-body overflow-auto">
                            <h5 class="card-title"><?php echo $rows['movie_name'];?></h5>
                            <h6 class="card-subtitle mb-2 text-muted"><?php echo $rows['director'];?></h6>
                            <p class="card-text"><?php echo $rows['movie_description'];?></p>

                        </div>
                        <br>
                        <div class= "card-footer text-center ">
                            <div class="btn-group">
                                <a href="add_to_cart.php?movie_id=<?php echo $rows['movie_id']; ?>" class="btn btn-success">Add to Cart</a>
                                <a href="feedback_insertion.php?movie_id=<?php echo $rows['movie_id']; ?>&movie_name=<?php echo $rows['movie_name']; ?>"; class="btn btn-success">Give Feedback</a>

                            </div>
                        </div>
                    </div>
                </div>
                <?php
            }
            ?>


        </div>
    </div>


</header>
<!-- Footer-->
<footer class="footer bg-black small text-center text-white-50"><div class="container px-4 px-lg-5">Copyright &copy; SUFLIX 2021</div></footer>
<!-- About-->



</body>
</html>



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
        btn {

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
    <section>
        <h1>All Movies</h1>
        <!-- TABLE CONSTRUCTION-->
        <table>
            <tr>
                <th>ID</th>
                <th>NAME</th>
                <th>DESCRIPTION</th>
                <th>WRITER</th>
                <th>DIRECTOR</th>
                <th>STARS</th>
                <th>RELEASE YEAR</th>
                <th>RUNNING TIME</th>
                <th>MAIN CATEGORY</th>
                <th>SUB CATEGORY ONE</th>
                <th>SUB CATEGORY TWO</th>
                <th>ADD TO CART</th>
                <th>GIVE FEEDBACK</th>
            </tr>
            <!-- PHP CODE TO FETCH DATA FROM ROWS-->
            <?php // LOOP TILL END OF DATA
            while($rows=$result->fetch_assoc())
            {
                ?>
                <tr>
                    <!--FETCHING DATA FROM EACH
                        ROW OF EVERY COLUMN-->
                    <td><?php echo $rows['movie_id'];?></td>
                    <td><?php echo $rows['movie_name'];?></td>
                    <td><?php echo $rows['movie_description'];?></td>
                    <td><?php echo $rows['writer'];?></td>
                    <td><?php echo $rows['director'];?></td>
                    <td><?php echo $rows['stars'];?></td>
                    <td><?php echo $rows['release_year'];?></td>
                    <td><?php echo $rows['running_time'];?></td>
                    <td><?php echo $rows['main_category'];?></td>
                    <td><?php echo $rows['sub_category_one'];?></td>
                    <td><?php echo $rows['sub_category_two'];?></td>
                    <td>
                        <button type="button" class="btn btn-secondary">
                            <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-cart-check" viewBox="0 0 16 16">
                                <path d="M11.354 6.354a.5.5 0 0 0-.708-.708L8 8.293 6.854 7.146a.5.5 0 1 0-.708.708l1.5 1.5a.5.5 0 0 0 .708 0l3-3z"></path>
                                <path d="M.5 1a.5.5 0 0 0 0 1h1.11l.401 1.607 1.498 7.985A.5.5 0 0 0 4 12h1a2 2 0 1 0 0 4 2 2 0 0 0 0-4h7a2 2 0 1 0 0 4 2 2 0 0 0 0-4h1a.5.5 0 0 0 .491-.408l1.5-8A.5.5 0 0 0 14.5 3H2.89l-.405-1.621A.5.5 0 0 0 2 1H.5zm3.915 10L3.102 4h10.796l-1.313 7h-8.17zM6 14a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm7 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0z"></path>
                            </svg>

                        </button>
                    </td>
                    <td>
                        <button type="button" class="btn btn-secondary">
                            <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-chat-right-text" viewBox="0 0 16 16">
                                <path d="M2 1a1 1 0 0 0-1 1v8a1 1 0 0 0 1 1h9.586a2 2 0 0 1 1.414.586l2 2V2a1 1 0 0 0-1-1H2zm12-1a2 2 0 0 1 2 2v12.793a.5.5 0 0 1-.854.353l-2.853-2.853a1 1 0 0 0-.707-.293H2a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2h12z"></path>
                                <path d="M3 3.5a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zM3 6a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9A.5.5 0 0 1 3 6zm0 2.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5z"></path>
                            </svg>

                        </button>
                    </td>




                </tr>
                <?php
            }
            ?>
        </table>
    </section>

</header>
<!-- Footer-->
<footer class="footer bg-black small text-center text-white-50"><div class="container px-4 px-lg-5">Copyright &copy; SUFLIX 2021</div></footer>
<!-- About-->



</body>
</html>

}


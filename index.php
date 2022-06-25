<?php
include'dbconnect.php';
$tgl=date('Y-m-d');
session_start();
if(isset($_SESSION['session'])){
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sufinance Dashboard!</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>
    <!--Icons-->
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!--styling -->
    <link rel="stylesheet" href="assets/css/style.css">
    <style>
        body {
            margin: 0;
            padding: 0;
            outline: 0;
            appearance: none;
            border: 0;
            text-decoration: none;
            list-style: none;
            box-sizing: border-box;
            width: 100vw;
            height: 100vh;
            font-family: poppins, sans-serif;
            font-size: 0.88rem;
            background-color: #00C897;
            user-select: none;
            overflow-x: hidden;
        }

        main {
            background-color: white;
            width: 81.5vw;
            margin-top: 4rem;
            margin-bottom: 1.5rem;
        }

        .top-card {
            width: 100%;
            padding-left: 20px;
            padding-bottom: 10px;
            margin-left: 15px;
            margin-right: 20px;
            border-radius: 2rem;

        }

        .inner-card {
            border-radius: 2rem;
            width: 80%;
        }

        .inner-card a:hover {
            background-color: lightpink;

        }

        .fa-file-contract {
            color: #00C897;
        }

        .porfolio {
            padding-top: 10px;
        }

        .expense-link {
            padding-top: 10px;
            color: #00C897;
            text-decoration: none;
            font-style: italic;
            border-inline-style: box;
        }

        .profile {
            float: right;
        }

        .dialy-usage {
            padding-top: 50px;
        }

        .table tbody tr {
            background: var(--bg);
            color: var(--color);
            transition: 0.8s
        }

        .table tbody tr:hover {
            background: black;
            color: white;
        }
    </style>
</head>

<body>
    <div class="container">
        <aside>
            <div class="top">
                <div class="logo">
                    <img src="assets/img/logo.png" alt="logo">
                </div>
            </div>
            <div class="sidebar">
                <a href="dashboard.php" class="active">
                    <span>
                        <h5 class=" fas fa-bars"> HOME</h5>
                    </span>
                </a>
                <a href="index.php?p=news">
                    <span class="fas nav-link">
                        <h5>NEWS</h5>
                    </span>
                </a>
                <a href="index.php?p=about">
                    <span class="fas">
                        <h5>ABOUT US</h5>
                    </span>
                </a>
                <a href="index.php?p=contact">
                    <span class="fas">
                        <h5>CONTACT</h5>
                    </span>
                </a>
                <a href="logout.php">
                    <span class="fas">
                        <h6>LOGOUT</h6>
                    </span>
                </a>
            </div>
        </aside>
        <!--END OF ASIDE -->      
    </div>
    <!-- dynamic pages -->
    <div id="content-container">
		<div class="container">
		<div class="row"><br/><br/><br/>
			<div class="col-md-10 col-md-offset-1" style="background-image:url('../asanoer-background.jpg')">
				<div class="col-md-4 col-md-offset-4">
					<div class="panel panel-warning login-panel" style="background-color:rgba(255, 255, 255, 0.6);position:relative;">
						<div class="panel-footer">
						</div>
					</div>
				</div>
			</div>
		</div>
    </div>
		<?php
			$pages_dir='pages';
			if(!empty($_GET['p'])){
				$pages=scandir($pages_dir,0);
				unset($pages[0],$pages[1]);
				$p=$_GET['p'];
				if(in_array($p.'.php',$pages)){
					include($pages_dir.'/'.$p.'.php');
				}else{
					echo'Halaman Tidak Ditemukan';
				}
			}else{
				include($pages_dir.'/beranda.php');
			}
		?>
	</div>
    <!-- end dynamic pages -->

</body>

</html>
<?php
}
else {
	echo "<script>
		alert('Login First!');
	</script>";
	header('location:login.php');
}
?>
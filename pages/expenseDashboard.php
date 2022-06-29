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
    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-file-plus" viewBox="0 0 16 16">
        <path d="M8.5 6a.5.5 0 0 0-1 0v1.5H6a.5.5 0 0 0 0 1h1.5V10a.5.5 0 0 0 1 0V8.5H10a.5.5 0 0 0 0-1H8.5V6z" />
        <path d="M2 2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V2zm10-1H4a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1z" />
    </svg>
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

        h5 {
            color: #000000;
            font-family: poppins, sans-serif;
        }

        .shadow {
            box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;
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
            width: 100%;
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
        }

        .profile {
            float: right;
        }

        .dialy-usage {
            padding-top: 50px;
        }
    </style>
</head>

<body>
    <div class="container">
        <main>
            <div class="card-body">
                <div class="card-title">
                    <h1 style="text-align:center">DAILY USAGE</h1>
                </div>
                <div class="row">
                    <div class="col-6 " style="padding:20px 200px 0px 20px">

                        <div class="card inner-card" style="box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;">
                            <div class="card-body" style="margin-left: 10px; ">
                                <div class="col text-uppercase font-italic">
                                    <div class="row">
                                        <div style="padding-left:50px ;">
                                            <i class="fa fa-trash"></i>
                                            <a href="#" style="text-decoration:none;"> Delete </a>
                                        </div>
                                        <div style="padding-left:50px ;">
                                            <i class="fa fa-pencil"></i>
                                            <a href="#" style="text-decoration:none;"> Edit </a>
                                        </div>
                                    </div>

                                </div>
                                <div class="col">
                                    <h5>AMOUNT</h5>
                                    <div class="d-flex align-items-center">
                                        <div class="font-weight-bold">
                                            <?php
                                            $result = mysqli_query($connect, "SELECT SUM(amount) AS dailyTotal FROM expense");
                                            $row = mysqli_fetch_assoc($result);
                                            $sum = $row['dailyTotal'];
                                            echo ("<h6>$sum</h6>");
                                            ?>
                                        </div>
                                    </div>
                                    <div>
                                        <h5>SET MONTHLY LIMIT</h5>
                                    </div>
                                    <div style="padding-left:80px ;">
                                        <a href="restrictBudget.php" class="text-capitalize"> set monthly limit </a>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div><!-- End Daly Usage -->
                    <div class=" card-body">
                        <div class="row">
                            <div class="col-6" style=" padding:0px 15px 0px 20px">
                                <div class="inner-card" style="box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;">
                                    <div class="card-body">
                                        <div class="col text-success">
                                            <h5 class="source">SOURCE INCOME</h5>
                                            <div class="text-align-center">
                                                <?php
                                                $result = mysqli_query($connect, "SELECT source, concat(round((amount * 100)/(SELECT SUM(amount) FROM budget), 1),'%') as amount FROM budget");
                                                $row = mysqli_fetch_assoc($result);
                                                foreach ($result as $row) {
                                                    $source = $row['source'];
                                                    $amount = $row['amount'];
                                                    echo ("<h6><th> $source <td>  $amount</td> </th> </h6>");
                                                }
                                                ?>
                                            </div>
                                            <div class="d-flex aligh-items-right">
                                                <a href=""><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-square" viewBox="0 0 16 16">
                                                        <path d="M14 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h12zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z" />
                                                        <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z" />
                                                    </svg></a>
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- End Daly Usage -->
                            </div>
                        </div>
                    </div>
                </div>


                <div class="row">
                    <?php
                    $sql = "SELECT specification, amount FROM expense";
                    $result = mysqli_query($connect, $sql);
                    $row = mysqli_fetch_assoc($result);
                    $category = array();
                    $amount = array();
                    foreach ($result as $row) {
                        $category[] = $row['specification'];
                        $amount[] = $row['amount'];
                    }
                    ?>
                    <!-- Reports -->
                    <div class="col-6" style="top: 1rem;">
                        <div class="card">
                            <div class=" filter">
                                <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                                <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                    <li class="dropdown-header text-start">
                                        <h6>Filter</h6>
                                    </li>
                                    <li><a class="dropdown-item" href="#">Today</a></li>
                                    <li><a class="dropdown-item" href="#">This Month</a></li>
                                    <li><a class="dropdown-item" href="#">This Year</a></li>
                                </ul>
                            </div>
                            <div class="card-body" style="box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;">
                                <h5 class="fa fa-bar-chart" style="font-size:24px" class="card-title"> <span style="font-family: poppins, sans-serif;">Analysis</span></h5>
                                <!-- Line Chart -->
                                <canvas id="reportsChart" style="width:50%;max-width:600px; background-color:#00C897; border-radius: 2rem;"></canvas>
                                <script>
                                    var category = <?php echo json_encode($category); ?>;
                                    var amount = <?php echo json_encode($amount); ?>;
                                    var barColors = ["blue", "yellow", "green", "orange", "brown"];

                                    new Chart("reportsChart", {
                                        type: "bar",
                                        data: {
                                            labels: category,
                                            datasets: [{
                                                backgroundColor: barColors,
                                                data: amount
                                            }]
                                        },
                                        options: {
                                            legend: {
                                                display: false
                                            },
                                            title: {
                                                display: true,
                                                text: "Monitoring Expenditure"
                                            }
                                        }
                                    });
                                </script>
                                <!-- End Line Chart -->
                            </div>
                        </div>

                    </div><!-- End Analysis -->
                    <div class="col-4">
                        <div class="card-body pb-0">
                            <h5 class="card-title">Spending</h5>
                            <canvas id="trafficChart" style="min-height: 300px;" class="echart"></canvas>
                            <script>
                                var category = <?php echo json_encode($category); ?>;
                                var yValues = <?php echo json_encode($amount); ?>;
                                var barColors = ["blue", "yellow", "green", "orange", "brown"];

                                new Chart("trafficChart", {
                                    type: "pie",
                                    data: {
                                        labels: category,
                                        datasets: [{
                                            backgroundColor: barColors,
                                            data: amount
                                        }]
                                    },
                                    options: {
                                        title: {
                                            display: true
                                        }
                                    }
                                });
                            </script>
                        </div>
                    </div>
                </div>
        </main>

    </div>

</body>

</html>
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
                <a href="news.php">
                    <span class="fas nav-link">
                        <h5>NEWS</h5>
                    </span>
                </a>
                <a href="about.php">
                    <span class="fas">
                        <h5>ABOUT US</h5>
                    </span>
                </a>
                <a href="contact.php">
                    <span class="fas">
                        <h5>CONTACT</h5>
                    </span>
                </a>
                <a href="land.php">
                    <span class="fas">
                        <h6>LOGOUT</h6>
                    </span>
                </a>
            </div>
        </aside>
        <!--END OF ASIDE -->
        <main>
            <div class=" card-body">
                <div class="row">
                    <div class="float-right profile">
                        <img src="assets/img/profile-img.jpg" alt="Profile picturer" style="width:2rem; border-radius:45%">
                        <h6>ibnu@gmail.com</h6>
                    </div>
                </div>
                <div class="card top-card">
                    <div class="row">
                        <div class="col-6 " style="padding-left: 60px; ">
                            <div class="porfolio">
                                <h3><i class="fas fa-file-contract"> </i> PORFOLIO</h3>
                            </div>
                            <div class=" card inner-card" style="background-color: #00C897;">
                                <div class="card-body" style="margin: 10px; padding-right: 20px;">
                                    <div class="row text-uppercase font-italic">
                                        <h5>Recently </h5>
                                        <div style="padding-left:100px ;">
                                            <td class="table-light">
                                                <!-- Trigger the modal with a button -->
                                                <a href="NewBudget.php" data-toggle="modal" data-target="#myModal" style="color:white; text-decoration:none;">SEE ALL Budget <i class="fa fa-angle-double-right"></i> </a>
                                            </td>
                                            <!-- Modal -->
                                            <div id="myModal" class="modal fade" role="dialog">
                                                <div class="modal-dialog">
                                                    <!-- Modal content-->
                                                    <div class="modal-content" style="width: 800px;">
                                                        <div class="modal-header">
                                                            <h4 class="modal-title text-success" style="font-size: 14px;">
                                                                Budget List
                                                            </h4>
                                                        </div>
                                                        <div class="modal-body text-uppercase">
                                                            <table class="table table-striped table-bordered">
                                                                <thead class="table-active">
                                                                    <tr class="text-uppercase">
                                                                        <th scope="col">#</th>
                                                                        <th scope="col">Code</th>
                                                                        <th scope="col">Budget Type</th>
                                                                        <th scope="col">Date</th>
                                                                        <th scope="col">Amount</th>
                                                                        <th scope="col">Source</th>
                                                                        <th scope="col">Comment</th>
                                                                        <th scope="col">Status</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <?php
                                                                    include "dbconnect.php";
                                                                    $sql = "SELECT * FROM budget";
                                                                    $result = mysqli_query($connect, $sql);
                                                                    ?>
                                                                    <?php if ($result->num_rows > 0) : ?>
                                                                        <?php while ($array = mysqli_fetch_row($result)) : ?>
                                                                            <tr class="table-stripped">
                                                                                <th class="table-active" scope="row"><?php echo $array[0]; ?></th>
                                                                                <td class="table-success"><?php echo $array[1]; ?></td>
                                                                                <td><?php echo $array[2]; ?></td>
                                                                                <td class="table-info"><?php echo $array[3]; ?></td>
                                                                                <td class="table-danger"><?php echo $array[4]; ?></td>
                                                                                <td class="table-default"><?php echo $array[5]; ?></td>
                                                                                <td><?php echo $array[6]; ?></td>
                                                                                <td><?php echo $array[7]; ?></td>
                                                                            <?php endwhile; ?>
                                                                        <?php else : ?>
                                                                            <tr>
                                                                                <td colspan="3" rowspan="1" headers="">No Data Found</td>
                                                                            </tr>
                                                                        <?php endif; ?>
                                                                        <?php mysqli_free_result($result); ?>
                                                                        </tr>
                                                                </tbody>
                                                            </table>
                                                            <a href="newBudget.php" style="text-decoration: none;">Add New Budget</a>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <br>
                                    <div class="row">
                                        <h5 class="card-title">START BUDGET</h5>
                                    </div>
                                    <div class="row">
                                        <div class="d-flex align-items-center">
                                            <div class="font-weight-bold">
                                                <?php
                                                include 'dbconnect.php';
                                                $result = mysqli_query($connect, "SELECT SUM(amount) AS totalBudget FROM budget");
                                                $row = mysqli_fetch_assoc($result);
                                                $total = $row['totalBudget'];
                                                echo ("<h6>RP. $total</h6>");
                                                ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div><!-- End Budget -->
                        <div class="col-md-6 " style="padding-left: 50px; ">
                            <div class="expense-link">
                                <a href="newExpense.php">
                                    <h4 style="text-align:center;">CREATE NEW <i class="fas fa-plus-square"></i></h4>
                                </a>
                            </div>
                            <div class=" card inner-card" style="background-color: #00C897;">
                                <div class="card-body" style="margin-left: 10px;">
                                    <div class="row text-uppercase font-italic">
                                        <h5>Recently </h5>
                                        <div style="padding-left:100px ;">

                                            <td class="table-light">
                                                <!-- Trigger the modal with a archor link -->
                                                <a href="#" data-toggle="modal" data-target="#Modal" style="color:white; text-decoration:none;">SEE ALL EXPENSE <i class="fa fa-angle-double-right"></i> </a>

                                            </td>
                                            <!-- Modal -->
                                            <div id="Modal" class="modal fade" role="dialog">
                                                <div class="modal-dialog">
                                                    <!-- Modal content-->
                                                    <div class="modal-content" style="width: 800px;">
                                                        <div class="modal-header">
                                                            <h4 class="modal-title text-success" style="font-size: 14px;">
                                                                List of Expenditure
                                                            </h4>
                                                        </div>
                                                        <div class="modal-body text-uppercase">
                                                            <table class="table table-striped table-bordered">
                                                                <thead class="table-active">
                                                                    <tr class="text-uppercase">
                                                                        <th scope="col">#</th>
                                                                        <th scope="col">Code</th>
                                                                        <th scope="col">Specification</th>
                                                                        <th scope="col">Date</th>
                                                                        <th scope="col">Price</th>
                                                                        <th scope="col">Quantity</th>
                                                                        <th scope="col">Amount</th>
                                                                        <th scope="col">Comment</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <?php
                                                                    include "dbconnect.php";
                                                                    $sql = "SELECT * FROM expense";
                                                                    $result = mysqli_query($connect, $sql);
                                                                    ?>
                                                                    <?php if ($result->num_rows > 0) : ?>
                                                                        <?php while ($array = mysqli_fetch_row($result)) : ?>
                                                                            <tr class="table-stripped">
                                                                                <th class="table-active" scope="row"><?php echo $array[0]; ?></th>
                                                                                <td class="table-success"><?php echo $array[1]; ?></td>
                                                                                <td><?php echo $array[2]; ?></td>
                                                                                <td class="table-info"><?php echo $array[3]; ?></td>
                                                                                <td class="table-danger"><?php echo $array[4]; ?></td>
                                                                                <td class="table-default"><?php echo $array[5]; ?></td>
                                                                                <td class="table-primary"><?php echo $array[6]; ?></td>
                                                                                <td><?php echo $array[7]; ?></td>
                                                                            <?php endwhile; ?>
                                                                        <?php else : ?>
                                                                            <tr>
                                                                                <td colspan="3" rowspan="1" headers="">No Data Found</td>
                                                                            </tr>
                                                                        <?php endif; ?>
                                                                        <?php mysqli_free_result($result); ?>
                                                                        </tr>
                                                                </tbody>
                                                            </table>
                                                            <a href="newExpense.php" style="text-decoration: none;">Add New Expense</a>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <br>
                                    <div class="row">
                                        <h5 class="card-title">DAILY USAGE</h5>
                                    </div>
                                    <div class="row">
                                        <div class="d-flex align-items-center">
                                            <div class="font-weight-bold">
                                                <?php
                                                include 'dbconnect.php';
                                                $result = mysqli_query($connect, "SELECT SUM(amount) AS dailyTotal FROM expense");
                                                $row = mysqli_fetch_assoc($result);
                                                $sum = $row['dailyTotal'];
                                                echo ("<h6>Rp. $sum</h6>");
                                                ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div><!-- End Daly Usage -->
                    </div>
                </div>
            </div>
            <div class="row">
                <?php
                include "dbconnect.php";
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
                <div class="col-6" style="top: 1rem; padding-left:50px; border-radius: 2rem;">
                    <div class="card-body">
                        <h5 class="fa fa-bar-chart" style="font-size:24px" class="card-title"> Analysis</h5>
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
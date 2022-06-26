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
    <!--styling -->
    <link rel="stylesheet" href="assets/css/style.css">
    <link href="https://cdn.jsdelivr.net/gh/gitbrent/bootstrap4-toggle@3.6.1/css/bootstrap4-toggle.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/gh/gitbrent/bootstrap4-toggle@3.6.1/js/bootstrap4-toggle.min.js"></script>
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

        html {
            font-size: 14px;
        }

        .container {
            display: grid;
            width: 96%;
            margin: 0;
            gap: 1.8rem;
            grid-template-columns: 10rem auto;
        }

        img {
            display: block;
            width: 100%;
        }

        .profile-photo {
            width: 2.8rem;
            height: 2.8rem;
            border-radius: 50%;
            overflow-x: hidden;
        }

        aside {
            height: 100vh;
        }

        aside .top img {
            width: 8rem;
            height: 8rem;
        }

        aside .sidebar {
            display: flex;
            flex-direction: column;
            height: 74vh;
            top: 1rem;
            position: relative;
        }

        aside .sidebar a {
            margin-left: 1rem;
            gap: 3rem;
            align-items: center;
            position: relative;
            color: black;
            height: 3.7rem;
            list-style: none;
            transform: all 300ms ease;
        }

        aside .sidebar a:last-child {
            position: absolute;
            bottom: 2rem;
            width: 100%;
        }

        aside .sidebar a:hover {
            color: #FFD365;
        }

        aside .sidebar a:hover span {
            margin-left: 1rem;
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
        <main>
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
                        <th scope="col">Restrict</th>
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
                                <td class="table-warning"><?php echo $array[2]; ?></td>
                                <td class="table-info"><?php echo $array[3]; ?></td>
                                <td class="table-danger"><?php echo $array[4]; ?></td>
                                <td class="table-default"><?php echo $array[5]; ?></td>
                                <td><?php echo $array[6]; ?></td>
                                <td><?php echo $array[7]; ?></td>
                                <td class="table-light">
                                    <!-- Trigger the modal with a button -->
                                    <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#myModal">Restrict</button>
                                </td>
                                <!-- Modal -->
                                <div id="myModal" class="modal fade" role="dialog">
                                    <div class="modal-dialog">
                                        <!-- Modal content-->
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h4 class="modal-title text-warning" style="font-size: 14px;">
                                                    <Strong>CAUTION:</Strong> Restrict budget is a feature use to minimize overspending.
                                                    You may restrict to use the budget once a week or a month!!!
                                                </h4>
                                            </div>
                                            <div class="modal-body text-uppercase" style="color:#00C897">
                                                <form action="">
                                                    <div class="form-group col-md-6">
                                                        <label for="date_">Set Deadline Limit</label>
                                                        <input type="date" name="duration" placeholder="duration" class="form-control" required>
                                                    </div>
                                                    <div class="form-group col-md-6">
                                                        <label for="selectLimit">Set Limit</label>
                                                        <select class="form-control" id="selectLimit" placeholder="Limit">
                                                            <option>Choose</option>
                                                            <option>1</option>
                                                            <option>2</option>
                                                            <option>3</option>
                                                            <option>4</option>
                                                            <option>5</option>
                                                        </select>
                                                    </div>
                                                    <div class="form-group col-md-6">
                                                        <input type="integer" placeholder="amount" class="form-control" required>
                                                    </div>
                                                    <div class="form-group col-md-8">
                                                        <label for="note">Note</label>
                                                        <textarea name="note" id="note" style="width:300px ; height: 70x;" class="form-control" placeholder="write a comment..." required></textarea>
                                                    </div>
                                                    <button type="submit" class="btn btn-success">Proceed</button>
                                                </form>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>

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
        </main>
    </div>

</body>

</html>
<!--Get Data-->
<?php
$query = "SELECT distinct code FROM expense ORDER BY id ASC";
$result = mysqli_query($connect, $query);
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
    <!--styling -->
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" class="">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js" class="">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.bundle.min.js" class="">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
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
            font-family: poppins, 'Lato', sans-serif;
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

        h1 {
            margin-bottom: 40px;
            color: #00C897;
            font-weight: bold;
            font-size: 30;
            font-family: roboto;
        }

        label {
            color: #333;
        }

        .btn-send {
            font-weight: 300;
            text-transform: uppercase;
            letter-spacing: 0.2em;
            width: 80%;
            margin-left: 3px;
        }

        .help-block.with-errors {
            color: #ff5050;
            margin-top: 5px;
        }

        .card {
            margin: 10px;
            font-family: roboto;
        }

        .message {
            position: absolute;
            font-size: small;
            font-style: italic;
        }

        .btn {
            color: #fff;
            background-color: #FFD365;
        }
    </style>
</head>

<body>
    <div class="container">
        <main>
            <div class="row content">
                <div class="col-md-7 mx-auto">
                    <div class=" text-center" style="padding-top:20px ;">
                        <h1>New Expenses</h1>
                    </div>
                    <div class="card text-center border-rounded">
                        <div class="card-body">
                            <form id="expense-form" method="post">
                                <div class="form-group col-md-4">
                                    <select id="code" name="code" class="form-control">
                                        <option>Specification </option>
                                        <?php
                                        while ($row = mysqli_fetch_array($result)) {
                                            echo '<option value="' . $row["code"] . '">';
                                            if ($row['code'] == 'FB01') {
                                                echo "Food";
                                            } else if ($row['code'] == 'CB01') {
                                                echo "Clothing";
                                            } else if ($row['code'] == 'TB01') {
                                                echo "Transport";
                                            } else if ($row['code'] == 'EB01') {
                                                echo "Entertainment";
                                            } else if ($row['code'] == 'SB01') {
                                                echo "Studies";
                                            }
                                        }
                                        echo '</option>';
                                        ?>
                                    </select>
                                </div>
                                <div class="form-group col-md-10">
                                    <input id="date" type="date" name="date" class="form-control" required="required" data-error="Please choose the date">
                                </div>
                                <div class="form-group col-md-10">
                                    <input id="amount" type="integer" name="amount" class="form-control" placeholder="amount" required="required" data-error="Initial Amount is required.">
                                </div>
                                <div class="form-group col-md-4">
                                    <select id="source" name="source" class="form-control">
                                        <option>Source </option>
                                        <?php
                                        $query = "SELECT distinct source FROM budget ORDER BY source ASC";
                                        $result = mysqli_query($connect, $query);
                                        while ($row = mysqli_fetch_array($result)) {
                                            echo '<option value="' . $row["source"] . '">';
                                            if ($row['source'] == 'Family') {
                                                echo "Family";
                                            } else if ($row['source'] == 'Relative') {
                                                echo "Relative";
                                            } else if ($row['source'] == 'Earning') {
                                                echo "Earning";
                                            } else {
                                                echo "Others";
                                            }
                                        }
                                        echo '</option>';
                                        ?>
                                    </select>
                                </div>
                                <div class="form-group col-md-10">
                                    <textarea type="text" name="comment" id="comment" class="form-control" placeholder="write a comment"></textarea>
                                    <div class="message">Specify The Expenses Purpose Or A Reason!</div>
                                </div>
                                <br>
                                <div class="col-md-10">
                                    <input type="hidden" name="specification" value="<?php echo $specification; ?>">
                                    <input type="hidden" name="source" value="<?php echo $source; ?>">
                                    <button type="submit" class="btn btn-warning" id="submit">Submit</button>
                                </div>
                            </form>

                            <?php
                            include "dbconnect.php";
                            if (isset($_POST["submit"])) {
                                $code = $_POST['code'];
                                //specification from expense
                                $query = "SELECT specification FROM expense WHERE code='$code'";
                                $result = mysqli_query($connect, $query);
                                if ($row = mysqli_fetch_array($result)) {
                                    $specification = $row['specification'];
                                }
                                $date = $_POST["date"];
                                $amount = $_POST["amount"];
                                // source from budget

                                $query = "SELECT source FROM budget";
                                $result = mysqli_query($connect, $query);
                                if ($row = mysqli_fetch_array($result)) {
                                    $source = $row["source"];
                                }
                                $message = $_POST["comment"];
                                $query = "INSERT INTO budget ('code', 'specification', 'date', 'amount', 'source', 'comment') VALUES ('$code','$specification','$date', '$amount','$source', '$message')";
                                $result = mysqli_query($connect, $query);
                                if ($result) {
                                    echo '<p>You have entered </p>';
                                    echo $code;
                                    echo $specification;
                                    echo $date;
                                    echo $amount;
                                    echo $source;
                                    echo $comment;
                                } else {
                                    echo "Failed to connect!" . mysqli_connect_error();
                                }
                              }
                            ?>
                            <div id="response">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
    <!-- BOOTSTRAP 4 -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->

    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.21/js/dataTables.bootstrap4.min.js"></script>

    <!-- JavaScript -->
    <script src="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/alertify.min.js"></script>

    <!-- CSS -->
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/alertify.min.css" />
    <!-- Default theme -->
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/default.min.css" />
    <!-- Semantic UI theme -->
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/semantic.min.css" />
    <!-- Bootstrap theme -->
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/bootstrap.min.css" />

</body>

</html>
<script>
    $(document).ready(function() {
        $('#submit').click(function() {
            $('#submit').prop('disabled', true);
            var code = $('#code').val();
            var date = $('#date').val();
            var amount = $('#amount').val();
            var source = $('#source').val();
            var comment = $('#comment').val();

            if (code == '' && specification == '' && amount == '' && source == '' &&
                comment == '') {
                $('#response').html('<span class="text-danger">All Fields are required</span>')
                $('#submit').prop('disabled', false);
            } else {
                $.ajax({
                    url: 'insertExpense.php',
                    method: 'post',
                    data: $('#expense-form').serialize(),
                    success: function(data) {

                        $('form').trigger("reset");
                        $('#response').fadeIn().html(data);
                        $('#submit').prop("disabled", false);
                        setTimeout(function() {
                            $('#response').fadeOut("slow");
                        }, 8000);

                    }
                }); // ajax

            } // if


        });

    }); // document
</script>

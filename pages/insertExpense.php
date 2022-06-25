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

    $query = "SELECT source FROM budget WHERE code='$code'";
    $result = mysqli_query($connect, $query);
    if ($row = mysqli_fetch_array($result)) {
        $source = $row["source"];
    }
    $comment = $_POST["comment"];
    $query = "INSERT INTO `budget` ('code', 'specification', 'date', 'amount', 'source', 'comment') VALUES ('$code','$specification','$date', '$amount','$source', '$comment')";
    $result = mysqli_query($connect, $query);

    if ($result) {
        echo '<p>You have entered </p>';
    }else{
		echo "Failed to connect!".mysqli_connect_error();
	}
}
?>
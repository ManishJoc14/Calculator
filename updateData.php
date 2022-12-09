<?php
$hostname = "127.0.0.1";
$username = "root";
$password = "";
$dbname = "friendDB";

// Create connection
$conn = new mysqli($hostname, $username, $password, $dbname);

if (isset($_POST['retrieve'])) {
    $sql = "SELECT * FROM `CalculatorAnswers`";
    $result = mysqli_query($conn, $sql);
    if ($row = mysqli_fetch_assoc($result)) {
        $putans = $row['Ans'];
    } else {
        echo "Data Failed";
    }
    echo $putans;
}

if (isset($_POST['store'])) {
    $Ans = $_POST["answer"];
    //Updating Answers Table in database 
    $sql = "UPDATE `CalculatorAnswers` SET `Ans`=\"$Ans\"";
    $query = mysqli_query($conn, $sql);
    echo "OK";
}

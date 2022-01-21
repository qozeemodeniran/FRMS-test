<?php 
    $conn = mysqli_connect('localhost', 'root', 'lastborn231', 'frms-test') or die('MySQL connect failed. ' . mysqli_connect_error());

    function dbQuery($sql) {
        global $conn;
        $result = mysqli_query($conn, $sql) or die(mysqli_error($conn));
        return $result;
    }

    function dbFetchAssoc($result) {
        return mysqli_fetch_assoc($result);
    }

    function closeConn() {
        global $conn;
        mysqli_close($conn);
    }
?>
<?php
    $serverName = "your_server.database.windows.net"; // update me
    $connectionOptions = array(
        "Database" => "techets.database.windows.net", // update me
        "Uid" => "techets", // update me
        "PWD" => "T3chETS123" // update me
    );
    //Establishes the connection
    $conn = sqlsrv_connect($serverName, $connectionOptions);
    $tsql= "INSERT INTO file_attente (USERID, ATIME) VALUES ('random_value', CONVERT(time, SYSDATETIME()))";
    $getResults= sqlsrv_query($conn, $tsql);
    echo ("Reading data from table" . PHP_EOL);
    if ($getResults == FALSE)
        echo (sqlsrv_errors());
    while ($row = sqlsrv_fetch_array($getResults, SQLSRV_FETCH_ASSOC)) {
     echo ($row['CategoryName'] . " " . $row['ProductName'] . PHP_EOL);
    }
    sqlsrv_free_stmt($getResults);
?>

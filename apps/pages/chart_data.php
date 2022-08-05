<?php
$servername = "localhost";
$username = "root";
$password = "Rahasia123";
$dbname = "cms_db";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

//the SQL query to be executed
$query = "SELECT 
            CASE 
                WHEN umur <= 5 THEN 'balita' 
                WHEN umur BETWEEN 6 and 12 THEN 'anak-anak' 
                WHEN umur BETWEEN 13 and 16 THEN 'Remaja' 
                WHEN umur BETWEEN 17 and 25 THEN 'Pemuda' 
                WHEN umur BETWEEN 26 and 64 THEN 'Orang Tua' 
                WHEN umur >= 65 THEN 'Lanjut Usia' 
                WHEN umur IS NULL THEN '(NULL)' 
            END as kelompok, 
            COUNT(*) AS jumlah 
            FROM (select id_jmt, nama, tglahir, TIMESTAMPDIFF(YEAR, tglahir, CURDATE()) AS umur from tbl_jemaat WHERE stat_jmt = 'Aktif') as data_usia 
            GROUP BY kelompok 
            ORDER BY kelompok;
            ";
//storing the result of the executed query
$result = $conn->query($query);

//initialize the array to store the processed data
$jsonArray = array();
//check if there is any data returned by the SQL Query
if ($result->num_rows > 0) {
    //Converting the results into an associative array
    while ($row = $result->fetch_assoc()) {
        $jsonArrayItem = array();
        $jsonArrayItem['label'] = $row['kelompok'];
        $jsonArrayItem['value'] = $row['jumlah'];
        //append the above created object into the main array.
        array_push($jsonArray, $jsonArrayItem);
    }
}

//Closing the connection to DB
$conn->close();
//set the response content type as JSON
header('Content-type: application/json');
//output the return value of json encode using the echo function.
echo json_encode($jsonArray);

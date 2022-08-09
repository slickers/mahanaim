<?php
include('../../conf/config.php');

$query = "SELECT 
CASE 
    WHEN umur <= 5 THEN 'Balita(0-5)' 
    WHEN umur BETWEEN 6 and 12 THEN 'Anak-anak(6-12)' 
    WHEN umur BETWEEN 13 and 16 THEN 'Remaja(13-16)' 
    WHEN umur BETWEEN 17 and 25 THEN 'Pemuda(17-25)' 
    WHEN umur BETWEEN 26 and 64 THEN 'Dewasa(26-64)' 
    WHEN umur >= 65 THEN 'Lansia(>65)' 
    WHEN umur IS NULL THEN '(NULL)' 
END as kelompok, 
COUNT(*) AS jumlah 
FROM (select id_jmt, nama, tglahir, TIMESTAMPDIFF(YEAR, tglahir, CURDATE()) AS umur from tbl_jemaat WHERE stat_jmt = 'Aktif') as data_usia 
GROUP BY kelompok 
ORDER BY FIELD(kelompok,'Balita(0-5)','Anak-anak(6-12)','Remaja(13-16)','Pemuda(17-25)','Dewasa(26-64)','Lansia(>65)');
            ";
//storing the result of the executed query
$result = $koneksi->query($query);

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
$koneksi->close();
//set the response content type as JSON
header('Content-type: application/json');
//output the return value of json encode using the echo function.
echo json_encode($jsonArray);

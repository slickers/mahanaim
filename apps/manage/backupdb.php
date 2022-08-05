<?php

/**========================================================+
 *                                                         +
 * Static class with functions for backing up database.    +
 *                                                         +
 * PHP Version 5.6.31                                      +
 *=========================================================+*/
class Backup_Mysql_Db
{
    private function __construct()
    {
    }
    /**Initializes the database backup
     * @param String $host mysql hostname
     * @param String $user mysql user
     * @param String $pass mysql password
     * @param String $name name of database
     * @param String $outputDir the path to the output directory for storing the backup file
     * @param Array $tables (optional) to backup specific tables only,like: array("mytable1","mytable2",...)  
     * @param String $backup_name (optional) backup filename (otherwise, it creates random name) 
     * EXAMPLE: Backup_Mysql_Db::init("localhost","user","pass","db_name","/usr/var/output_dir" );  
     */
    public static function init($host, $user, $pass, $name, $outputDir, $tables = false, $backup_name = false)
    {
        set_time_limit(3000);
        $mysqli = new mysqli($host, $user, $pass, $name);
        /* check connection */
        if (mysqli_connect_errno()) {
            printf("Connect failed: %s\n", mysqli_connect_error());
            exit();
        }
        //change database to $name
        $mysqli->select_db($name);
        /* change character set to utf8 */
        if (!$mysqli->set_charset("utf8")) {
            printf("Error loading character set utf8: %s\n", $mysqli->error);
            exit();
        }
        //list all tables in the database
        $queryTables = $mysqli->query('SHOW TABLES');
        while ($row = $queryTables->fetch_row()) {
            $target_tables[] = $row[0];
        }
        //if user opted to backup specific tables only
        if ($tables !== false) {
            $target_tables = array_intersect($target_tables, $tables);
        }
        date_default_timezone_set('Asia/Jakarta'); //set your timezone
        //$content is the text data to be written to the file for backup
        $content = "-- phpMyAdmin SQL Dump\r\n-- version 4.7.4" . //insert your phpMyAdmin version 
            "\r\n-- https://www.phpmyadmin.net/\r\n--\r\n-- Host: " . $host .
            "\r\n-- Generation Time: " . date('M d, Y \a\t h:i A', strtotime(date('Y-m-d H:i:s', time()))) .
            "\r\n-- Server version: " . $mysqli->server_info .
            "\r\n-- PHP Version: " . phpversion();
        $content .= "\r\n\r\nSET SQL_MODE = \"NO_AUTO_VALUE_ON_ZERO\";\r\nSET AUTOCOMMIT = 0;\r\nSTART TRANSACTION;\r\nSET time_zone = \"+00:00\";\r\n\r\n\r\n/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;\r\n/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;\r\n/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;\r\n/*!40101 SET NAMES utf8mb4 */;\r\n\r\n--\r\n-- Database: `" .
            $name . "`\r\n--\r\nCREATE DATABASE IF NOT EXISTS `" .
            $name . "` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;\r\nUSE `" .
            $name . "`;";
        //traverse through every table in the database
        foreach ($target_tables as $table) {
            if (empty($table)) {
                continue;
            }
            $result = $mysqli->query('SELECT * FROM `' . $table . '`');
            //get the number of columns
            $fields_amount = $result->field_count;
            //get the number of affected rows in the MySQL operation
            $rows_num = $mysqli->affected_rows;
            //Retrieve the Table Definition of the existing table 
            $res = $mysqli->query('SHOW CREATE TABLE ' . $table);
            $TableMLine = $res->fetch_row();
            $content .= "\r\n\r\n-- --------------------------------------------------------\r\n\r\n" . "--\r\n-- Table structure for table `" . $table . "`\r\n--\r\n\r\n";
            //if the table is not empty
            if (!self::table_is_empty($table, $mysqli)) {
                $content .= $TableMLine[1] . ";\n\n"; //append the Table Definition 
                //replace, case insensitively
                $content = str_ireplace(
                    "CREATE TABLE `" . $table . "`", //wherever you find this
                    "DROP TABLE IF EXISTS `" . $table . "`;\r\nCREATE TABLE IF NOT EXISTS `" . $table . "`", //replace with that
                    $content
                ); //in this  
                $content .= "--\r\n-- Dumping data for table `" . $table . "`\r\n--\r\n";
                $content .= "\nINSERT INTO `" . $table . "` (" . self::get_columns_from_table($table, $mysqli) . " ) VALUES\r\n" . self::get_values_from_table($table, $mysqli);
            } else //otherwise if the table is empty
            {
                $content .= $TableMLine[1] . ";";
                //replace, case insensitively
                $content = str_ireplace(
                    "CREATE TABLE `" . $table . "`", //wherever you find this
                    "DROP TABLE IF EXISTS `" . $table . "`;\r\nCREATE TABLE IF NOT EXISTS `" . $table . "`", //replace with that
                    $content
                ); //in this  
            }
        }
        $content .= "\r\n\r\n/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;\r\n/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;\r\n/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;";
        date_default_timezone_set('Africa/Accra');
        //format the time at this very moment and get rid of the colon ( windows doesn't allow colons in filenames)
        $date = str_replace(":", "-", date('jS M, y. h:i:s A.', strtotime(date('Y-m-d H:i:s', time()))));
        //if there's a backup name, use it , otherwise device one
        $backup_name = $backup_name ? $backup_name : $name . '___(' . $date . ').sql';
        //Get current buffer contents and delete current output buffer
        ob_get_clean();
        self::saveFile($content, $backup_name, $outputDir);
        exit;
    }

    /** Save data to file. 
     * @param String $data The text data to be stored in the file 
     * @param String $backup_name The name of the backup file 
     * @param String $outputDir (optional) The directory to save the file to. 
     * If unspecified, will save in the current directory. 
     * */
    private static function saveFile(&$data, $backup_name, $outputDir = '.')
    {
        if (!$data) {
            return false;
        }
        try {
            $handle = fopen($outputDir . '/' . $backup_name, 'w+');
            fwrite($handle, $data);
            fclose($handle);
        } catch (Exception $e) {
            var_dump($e->getMessage());
            return false;
        }
        return true;
    }
    /**Checks if table is empty
     * @param String $table table in mysql database
     * @return Boolean true if table is empty, false otherwise   
     */
    private static function table_is_empty($table, $mysqli)
    {
        $sql = "SELECT * FROM $table";
        $result = mysqli_query($mysqli, $sql);
        if ($result) {
            if (mysqli_num_rows($result) > 0) {
                return false;
            } else {
                return true;
            }
        }
        return false;
    }
    /**Retrieves the columns in the table 
     * @param String $table table in mysql database
     * @return String a list of all the columns in the right format    
     */
    private static function get_columns_from_table($table, $mysqli)
    {
        $column_header = "";
        $result = mysqli_query($mysqli, "SHOW COLUMNS FROM $table");
        while ($row = $result->fetch_row()) {
            $column_header .= "`" . $row[0] . "`, ";
        }
        //remove leading and trailing whitespace, and remove the last comma in the string
        return rtrim(trim($column_header), ',');
    }

    /**Retrieves the values in the table row by row in the table 
     * @param String $table table in mysql database
     * @return String a list of all the values in the table in the right format    
     */
    private static function get_values_from_table($table, $mysqli)
    {
        $values = "";
        $columns = [];
        //get all the columns in the table
        $result = mysqli_query($mysqli, "SHOW COLUMNS FROM $table");
        while ($row = $result->fetch_row()) {
            array_push($columns, $row[0]);
        }

        $result1 = mysqli_query($mysqli, "SELECT * FROM $table");
        //while traversing every row in the table(row by row)
        while ($row = mysqli_fetch_array($result1)) {
            $values .= "(";
            //get the values in each column
            foreach ($columns as $col) {               //if the value is an Integer
                $values .=  (self::column_is_of_int_type($table, $col, $mysqli) ?
                    $row["$col"] . ", " : //do not surround it with single quotes
                    "'" . $row["$col"] . "', "); //otherwise, surround it with single quotes 
            }
            $values = rtrim(trim($values), ',') . "),\r\n";
        }
        return rtrim(trim($values), ',') . ";";
    }

    /**Checks if the data type in the column is an integer
     * @param String $table table in mysql database
     * @return Boolean true if it is an integer, false otherwise. 
     */
    private static function column_is_of_int_type($table, $column, $mysqli)
    {
        $q = mysqli_query($mysqli, "DESCRIBE $table");
        while ($row = mysqli_fetch_array($q)) {
            if ($column === "{$row['Field']}") {
                if (strpos("{$row['Type']}", 'int') !== false) {
                    return true;
                }
            }
        }
        return false;
    }
}

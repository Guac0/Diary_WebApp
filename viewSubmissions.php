
<?php // https://codingstatus.com/display-data-in-html-table-using-php-mysql/
    session_start();
    include 'db_connect.php'; // is not included in repo due to login details
    $conn = OpenCon();
    echo "Connected Successfully";

    //include("database.php");

    // SQL query to select data from database
    $sql = " SELECT * FROM diary_entries ORDER BY date DESC ";
    //$result = $mysqli->query($sql);
    $result = mysqli_query($conn,$sql);
    echo $result
    /*
    $db=$conn;
    $tableName="diary_entries";
    $columns= ["date", "how_feeling", "productivity", "stress", "sleep", "weather", "exercise", "good_things", "eating", "make_better", "custom_comments"];

    function fetch_data($db, $tableName, $columns){
        if(empty($db)){
            $msg= "Database connection error";
        }elseif (empty($columns) || !is_array($columns)) {
            $msg="columns Name must be defined in an indexed array";
        }elseif(empty($tableName)){
            $msg= "Table Name is empty";
        }else{

            $columnName = implode(", ", $columns);
            $query = "SELECT ".$columnName." FROM $tableName"." WHERE username = $_SESSION['username'] $ORDER BY date DESC";
            $result = $db->query($query);

            if($result== true){ 
                if ($result->num_rows > 0) {
                    $row= mysqli_fetch_all($result, MYSQLI_ASSOC);
                    $msg= $row;
                } else {
                    $msg= "No Data Found"; 
                }
            }else{
                $msg= mysqli_error($db);
            }
        }
        return $msg;
    }

    $fetchData = fetch_data($db, $tableName, $columns);
    */
    
    //$diary_info = "INSERT INTO diary_entries (username, date, how_feeling, productivity, stress, sleep, weather, exercise, good_things, eating, make_better, custom_comments) VALUES ('$_SESSION["username"]', '$_POST[date]', '$_POST[feeling_today]', '$_POST[productivity]', '$_POST[feeling_stressed]', '$_POST[sleep]', '$_POST[weather]', '$_POST[exercise]', '$_POST[good_things]', '$_POST[healthy_eating]', '$_POST[improvement]', '$_POST[comments]')"; 
    # if (!mysql_query($user_info, $connect)) { die('Error: ' . mysql_error()); }
    //mysqli_query($conn,$diary_info);
    // echo "Your information was added to the database.";
    //header("Location: decision_page.html");

    CloseCon($conn);

?>
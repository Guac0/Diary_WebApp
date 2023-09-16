
<?php // https://smallbusiness.chron.com/transfer-data-form-database-46976.html
    session_start();
    include 'db_connect.php'; // is not included in repo due to login details
    $conn = OpenCon();
    echo "Connected Successfully";

    $diary_info = "INSERT INTO diary_entries (username, date, how_feeling, productivity, stress, sleep, weather, exercise, good_things, eating, make_better, custom_comments) VALUES ('$_POST[username]', '$_POST[date]', '$_POST[feeling_today]', '$_POST[productivity]', '$_POST[feeling_stressed]', '$_POST[sleep]', '$_POST[weather]', '$_POST[exercise]', '$_POST[good_things]', '$_POST[healthy_eating]', '$_POST[improvement]', '$_POST[comments]')"; 
    # if (!mysql_query($user_info, $connect)) { die('Error: ' . mysql_error()); }
    mysqli_query($conn,$diary_info);
    echo "Your information was added to the database.";
    header("Location: decision_page.html");

    CloseCon($conn);

?>
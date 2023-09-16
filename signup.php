
<?php // https://smallbusiness.chron.com/transfer-data-form-database-46976.html

    include 'db_connect.php'; // is not included in repo due to login details
    include 'common_funcs.php';

    $conn = OpenCon();
    echo "Connected Successfully";

    # TODO password hash https://stackoverflow.com/questions/46819734/how-to-check-username-and-password-matches-the-database-values#:~:text=and%20%24pw%20instead.-,%24query%20%3D%20mysqli_query(%24conn%2C%20%22SELECT%20log_username%2C,pw%20%2C%20which%20you%20already%20have. 
    $user_info = "INSERT INTO users (username, password) VALUES ('$_POST[username]', '$_POST[password]')"; 
    # if (!mysql_query($user_info, $connect)) { die('Error: ' . mysql_error()); }
    mysqli_query($conn,$user_info);
    echo "Your information was added to the database.";
    header("Location: decision_page.html");

    CloseCon($conn);

?>
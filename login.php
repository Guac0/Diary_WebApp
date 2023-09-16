
<?php // https://smallbusiness.chron.com/transfer-data-form-database-46976.html

    include 'db_connect.php'; // is not included in repo due to login details
    $conn = OpenCon();
    echo "Connected Successfully";

    #TODO LOGIN
    $user_info = "INSERT INTO users (username, password) VALUES ('$_POST[username]', '$_POST[password]')"; 
    # if (!mysql_query($user_info, $connect)) { die('Error: ' . mysql_error()); }
    mysqli_query($conn,$user_info);
    echo "Your information was added to the database.";

    CloseCon($conn);

?>
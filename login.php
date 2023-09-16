
<?php // https://smallbusiness.chron.com/transfer-data-form-database-46976.html
    
    session_start();

    include 'db_connect.php'; // is not included in repo due to login details
    include 'common_funcs.php';

    $conn = OpenCon();
    echo "Connected Successfully";

    #TODO LOGIN
    $get_password = "SELECT * FROM users WHERE username = '$_POST[username]' AND password = '$_POST[password]'";
    $result = mysqli_query($conn,$get_password);
    if (mysqli_num_rows($result) === 1) {
        //$row = mysqli_fetch_assoc($result);
        //if ($row['username'] === '$_POST[username]' && $row['password'] === '$_POST[password]') {
        echo "Logged in!";
        $_SESSION['username'] = '$_POST[username]';
        header("Location: decision_page.html");
        echo "Logged in!";
        /*}else{
            header("Location: login.html?error=invalidLogin1");
        }*/
    }else{
        header("Location: login.html?error=invalidLogin");
    }

    # if (!mysql_query($user_info, $connect)) { die('Error: ' . mysql_error()); }

    CloseCon($conn);

?>
<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf8">
    <title>LKQ Admin Dashboard</title>
    <link rel="icon" href="images/logoo.png" type="image/png"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="css/responsive.css" />

</head>
<body class="dashboard dashboard_1">
<div class="full_container">
    <div class="inner_container">
        <nav id="sidebar">
            <div class="sidebar_blog_1">
                <div class="sidebar-header">
                    <div class="logo_section">
                        <img class="logo_icon img-responsive" src="images/meo%60.jpg">
                    </div>
                </div>
                <div class="sidebar_user_info">
                    <div class="icon_setting"></div>
                    <div class="user_profle_side">
                        <div class="user_img"><img class="img-responsive" src="images/meo%60.jpg" alt="#" /></div>
                        <div class="user_info">
                            <h6>Admin</h6>
                            <p><span class="online_animation"></span> Online</p>
                            <form id="logoutForm" method="get" action="<?php $_SERVER['PHP_SELF']?>">
                                <button type="submit" name='logout' class="btn btn-outline-danger">Logout</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="sidebar_blog_2">
                <h4>L K Q</h4>
                <ul class="list-unstyled components">
                    <li><a href="dashboard.php"> <span>Dashboard</span></a></li>
                    <li><a href="product_manage.php"><span>Products Management</span></a></li>
                    <li><a href="user_manage.php"> <span>Users Management</span></a></li>
                </ul>
            </div>
        </nav>

        <div class="topbar">
            <nav class="navbar navbar-expand-lg navbar-light">
                <div class="logo_section">
                    <a href="../account.php"><img class="img-responsive" src="images/logoo.png" alt="#" /></a>
                </div>
            </nav>
        </div>

<?php
if (isset($_GET['logout'])) {
//            $_SESSION['username'] = null;
//            $_SESSION['email'] = null;
    session_destroy();
    header("Location: /login.php");
    exit();
}

?>
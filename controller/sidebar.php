<?php include_once ("../connection/session.php"); ?>
<!-- SIDEBAR -->
<section id="sidebar">
    <a href="#" class="brand">
        <img src="../images/medallionLogo.png" alt="medallion logo" class="logo">
        <span class="text">Medallion Theatre</span>
    </a>
    <ul class="side-menu top">
        <li class="active">
            <a href="#">
                <i class='bx bxs-dashboard'></i>
                <span class="text">Dashboard</span>
            </a>
        </li>
        <li>
            <a href="#">
                <i class='bx bxs-shopping-bag-alt'></i>
                <span class="text">Events</span>
            </a>
        </li>
        <li>
            <a href="#">
                <i class='bx bxs-message-dots'></i>
                <span class="text">My Bookings</span>
            </a>
        </li>
        <li>
            <a href="#">
                <i class='bx bxs-cog'></i>
                <span class="text">Account Settings</span>
            </a>
        </li>
    </ul>
    <ul class="side-menu">
        <li>
            <a href="../logOut.php" class="logout">
                <i class='bx bxs-log-out-circle'></i>
                <span class="text">Logout</span>
            </a>
        </li>
    </ul>
</section>
<script src="../script/sidebar.js"></script>
<?php include_once "../css/generalStyles.php"; ?>
<?php include_once "../css/sidebarStyles.php"; ?>
<?php
include_once "../controller/sidebar.php";
$balance = 0.00; // default fallback

try {
$query = $pdo->prepare("SELECT balance FROM users WHERE userid = :userid");
$query->execute(['userid' => $_SESSION['userid']]);
$result = $query->fetch(PDO::FETCH_ASSOC);

if ($result && isset($result['balance'])) {
$balance = $result['balance'];
}
} catch (PDOException $e) {
error_log("Database error: " . $e->getMessage());
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Boxicons -->
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
    <title>Dashboard</title>
</head>

<body>

    <!-- CONTENT -->
    <section id="content">
        <?php include_once "../controller/navbar.php"; ?>

        <!-- MAIN -->
        <main>
            <div class="head-title">
                <div class="left">
                    <h1>Client Dashboard</h1>
                </div>
            </div>

            <div class="table-data">
                <div class="order">
                    <div class="head">
                        <h3>Now Showing</h3>
                    </div>
                    <div class="spotlight">
                        <div class="performance">
                            <img src="../images/sampleNowShowing.webp" alt="Performance Image">
                            <div class="performance-info">
                                <h4>Orchestra</h4>
                                <p><strong>Time:</strong> 01-10-2025</p>
                                <p><strong>Genre:</strong> Classical</p>
                                <span class="status completed">On Stage</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    

            <ul class="box-info">
                <li>
                    <i class='bx bxs-calendar-check'></i>
                    <span class="text">
                        <h3>23</h3>
                        <p>Upcoming Performances</p>
                    </span>
                </li>
                <li>
                    <i class='bx bxs-dollar-circle'></i>
                    <span class="text">
                        <h3>₱<?php echo number_format($balance, 2); ?></h3>
                        <p>Total Balance</p>
                    </span>
                </li>
            </ul>


            <div class="table-data">
                <div class="order">
                    <div class="head">
                        <h3>Upcoming Performances</h3>
                        <i class='bx bx-search'></i>
                        <i class='bx bx-filter'></i>
                    </div>
                    <table>
                        <thead>
                            <tr>
                                <th>Title</th>
                                <th>time</th>
                                <th>Genre</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <img src="img/people.png">
                                    <p>orchestra</p>
                                </td>
                                <td>01-10-2025</td>
                                <td><span class="status completed">Actions</span></td>
                            </tr>
                            <tr>
                                <td>
                                    <img src="img/people.png">
                                    <p>jazz</p>
                                </td>
                                <td>01-10-2025</td>
                                <td><span class="status pending">Drama</span></td>
                            </tr>
                            <tr>
                                <td>
                                    <img src="img/people.png">
                                    <p>piano live</p>
                                </td>
                                <td>01-10-2026</td>
                                <td><span class="status process">Seductive</span></td>
                            </tr>
                            <tr>
                                <td>
                                    <img src="img/people.png">
                                    <p>musical play</p>
                                </td>
                                <td>01-10-2025</td>
                                <td><span class="status process">Cartoon</span></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="todo">
                    <div class="head">
                        <h3>My Bookings</h3>
                        <i class='bx bx-plus'></i>
                        <i class='bx bx-filter'></i>
                    </div>
                    <ul class="todo-list">
                        <li class="completed">
                            <p>Avengers</p>
                            <i class='bx bx-dots-vertical-rounded'></i>
                        </li>
                        <li class="completed">
                            <p>Titanic</p>
                            <i class='bx bx-dots-vertical-rounded'></i>
                        </li>
                        <li class="not-completed">
                            <p>Pornhub</p>
                            <i class='bx bx-dots-vertical-rounded'></i>
                        </li>
                        <li class="completed">
                            <p>Alice in Borderland</p>
                            <i class='bx bx-dots-vertical-rounded'></i>
                        </li>
                        <li class="not-completed">
                            <p>ben 20</p>
                            <i class='bx bx-dots-vertical-rounded'></i>
                        </li>
                    </ul>
                </div>
            </div>
        </main>
        <!-- MAIN -->
    </section>
    <!-- CONTENT -->
    <script src="../script/dashboard.js"></script>
    <?php include_once "../css/generalStyles.php"; ?>
    <?php include_once "../css/dashboardStyles.php"; ?>
</body>

</html>
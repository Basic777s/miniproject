<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Teko:wght@600;700&family=Plus+Jakarta+Sans:wght@500;600;700&display=swap');

/* Valorant Dark Atmospheric Background */
html {
    min-height: 100vh;
    background-color: #0f1923;
    background-image: 
        radial-gradient(circle at 80% 20%, rgba(255, 70, 85, 0.15) 0%, transparent 40%),
        radial-gradient(circle at 10% 80%, rgba(15, 25, 35, 0.8) 0%, transparent 50%),
        linear-gradient(135deg, #0f1923 0%, #17212b 100%);
    background-attachment: fixed;
}

body {
    font-family: 'Plus Jakarta Sans', sans-serif;
    min-height: 100vh;
    margin: 0;
    padding: 40px 24px;
    box-sizing: border-box;
    color: #ece8e1;
    display: flex;
    flex-direction: column;
    align-items: center;
}

/* Style Navigation Links (a tags before table) */
body > a {
    display: inline-block;
    padding: 10px 20px;
    margin-bottom: 20px;
    background-color: rgba(23, 33, 43, 0.9);
    border: 1px solid rgba(236, 232, 225, 0.2);
    color: #ece8e1;
    text-decoration: none;
    clip-path: polygon(0 0, calc(100% - 10px) 0, 100% 10px, 100% 100%, 0 100%);
    font-family: 'Teko', sans-serif;
    font-size: 18px;
    font-weight: 700;
    letter-spacing: 2px;
    text-transform: uppercase;
    transition: all 0.2s ease;
}

body > a:hover {
    border-color: #ff4655;
    color: #ff4655;
    background-color: #0f1923;
    box-shadow: 0 0 12px rgba(255, 70, 85, 0.3);
    transform: translateY(-2px);
}

/* Red Logout Accent for 2nd Link */
body > a[href*="logout"] {
    background-color: #ff4655;
    border-color: #ff4655;
    color: #ece8e1;
}

body > a[href*="logout"]:hover {
    background-color: #0f1923;
    color: #ff4655;
    outline: 1px solid #ff4655;
}

/* Valorant Tactical Table Container */
table {
    width: 100%;
    max-width: 900px;
    border-collapse: collapse;
    background: rgba(15, 25, 35, 0.85);
    backdrop-filter: blur(12px);
    border: 1px solid rgba(236, 232, 225, 0.15) !important;
    clip-path: polygon(0 0, calc(100% - 16px) 0, 100% 16px, 100% 100%, 0 100%);
    box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.7);
    overflow: hidden;
}

/* Header Row */
thead {
    background-color: rgba(23, 33, 43, 0.95);
    border-bottom: 2px solid #ff4655;
}

th {
    padding: 16px 20px;
    font-family: 'Teko', sans-serif;
    font-size: 22px;
    font-weight: 700;
    letter-spacing: 2px;
    color: #ff4655;
    text-transform: uppercase;
    text-align: center;
    border: none !important;
}

/* Table Cells */
td {
    padding: 16px 20px;
    font-size: 15px;
    font-weight: 600;
    color: #ece8e1;
    text-align: center;
    border-bottom: 1px solid rgba(236, 232, 225, 0.08) !important;
    border-right: none !important;
    border-left: none !important;
}

tr:hover td {
    background-color: rgba(255, 70, 85, 0.08);
}

/* Agent Name Column Highlight */
td:nth-child(2) {
    font-family: 'Teko', sans-serif;
    font-size: 20px;
    font-weight: 700;
    letter-spacing: 1.5px;
    color: #ffffff;
    text-transform: uppercase;
}
    </style>
</head>
<body>
    
<?php
session_start();

if (!isset($_SESSION["username"])) {
    header("location: login.php");
    exit;
}

include "action/connect.php";
$sql = "SELECT * FROM agents";
$result = mysqli_query($con, $sql);
?>

    <a href="manage_v.php">ไปหน้าจัดการ</a>
     <a href="logout.php">ล็อคเอ้าท์</a>
    <table border=1>
        <thead>
            <th>รหัสเอเจนท์</th>
            <th>ชื่อเอเจนท์</th>
            <th>อายุ</th>
            <th>พลัง</th>
        </thead>

        <?php
            foreach($result as $order){
                ?>
                <tr>
                    <td><?= $order["id"] ?></td>
                    <td><?= $order["name"] ?></td>
                    <td><?= $order["age"] ?></td>
                    <td><?= $order["radiant"] ?></td>
                </tr>
                <?php
            }
        ?>
    </table>

</body>
</html>

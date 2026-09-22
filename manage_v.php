<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Valorant - Manage Agents</title>
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

        /* Top Navigation Bar */
        .nav-bar {
            display: flex;
            justify-content: flex-start;
            align-items: center;
            gap: 12px;
            margin-bottom: 24px;
            width: 100%;
            max-width: 950px;
        }

        .btn-nav {
            display: inline-block;
            padding: 10px 20px;
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

        .btn-nav:hover {
            border-color: #ff4655;
            color: #ff4655;
            background-color: #0f1923;
            box-shadow: 0 0 12px rgba(255, 70, 85, 0.3);
            transform: translateY(-2px);
        }

        /* Add Button Highlight */
        .btn-add {
            background-color: #ff4655;
            border-color: #ff4655;
            color: #ece8e1;
        }

        .btn-add:hover {
            background-color: #0f1923;
            color: #ff4655;
            outline: 1px solid #ff4655;
        }

        /* Tactical Table Container */
        table {
            width: 100%;
            max-width: 950px;
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
            padding: 16px;
            font-family: 'Teko', sans-serif;
            font-size: 22px;
            font-weight: 700;
            letter-spacing: 2px;
            color: #ff4655;
            text-transform: uppercase;
            text-align: center;
            border: none !important;
        }

        /* Table Data Cells */
        td {
            padding: 14px 16px;
            font-size: 15px;
            font-weight: 600;
            color: #ece8e1;
            text-align: center;
            border-bottom: 1px solid rgba(236, 232, 225, 0.08) !important;
            border-right: none !important;
            border-left: none !important;
            vertical-align: middle;
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

        /* Action Buttons Container */
        .action-cell {
            display: flex;
            justify-content: center;
            align-items: center;
            gap: 8px;
        }

        /* Action Buttons */
        .btn-action {
            display: inline-block;
            padding: 6px 14px;
            text-decoration: none;
            font-family: 'Teko', sans-serif;
            font-size: 16px;
            font-weight: 700;
            letter-spacing: 1.5px;
            text-transform: uppercase;
            clip-path: polygon(0 0, calc(100% - 6px) 0, 100% 6px, 100% 100%, 0 100%);
            transition: all 0.2s ease;
        }

        /* Edit Button (Tactical Cyan/Teal Accent) */
        .btn-edit {
            background-color: rgba(17, 212, 182, 0.15);
            border: 1px solid #11d4b6;
            color: #11d4b6;
        }

        .btn-edit:hover {
            background-color: #11d4b6;
            color: #0f1923;
            box-shadow: 0 0 12px rgba(17, 212, 182, 0.5);
            transform: translateY(-2px);
        }

        /* Delete Button (Crimson Red Accent) */
        .btn-delete {
            background-color: rgba(255, 70, 85, 0.15);
            border: 1px solid #ff4655;
            color: #ff4655;
        }

        .btn-delete:hover {
            background-color: #ff4655;
            color: #ece8e1;
            box-shadow: 0 0 12px rgba(255, 70, 85, 0.5);
            transform: translateY(-2px);
        }
    </style>
</head>
<body>
    
    <?php
        include "action/connect.php";
        $sql = "SELECT * FROM agents";
        $result = mysqli_query($con, $sql);
    ?>

    <div class="nav-bar">
        <a href="add_v.php" class="btn-nav btn-add">เพิ่ม</a>
        <a href="index.php" class="btn-nav">หน้าหลัก</a>
    </div>

    <table border="1">
        <thead> 
            <tr>
                <th>รหัสเอเจนท์</th>
                <th>ชื่อเอเจนท์</th>
                <th>อายุ</th>
                <th>พลัง</th>
                <th>จัดการ</th>
            </tr>
        </thead>
        <tbody>
        <?php
            foreach($result as $order){
                ?>
                <tr>
                    <td><?= $order["id"] ?></td>
                    <td><?= $order["name"] ?></td>
                    <td><?= $order["age"] ?></td>
                    <td><?= $order["radiant"] ?></td>
                    <td>
                        <div class="action-cell">
                            <!-- แก้ไข -->
                            <a href="edit_v.php?id=<?= $order["id"] ?>" class="btn-action btn-edit">แก้ไข</a>
                            <!-- ลบ -->
                            <a href="action/delete_v.php?id=<?= $order["id"] ?>" class="btn-action btn-delete">ลบ</a>
                        </div>
                    </td>
                </tr>
                <?php
            }
        ?>
        </tbody>
    </table>
            
</body>
</html>
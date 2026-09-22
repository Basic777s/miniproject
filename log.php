<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Valorant - Dashboard</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Teko:wght@600;700&family=Plus+Jakarta+Sans:wght@500;700;800&display=swap');

        /* Valorant Atmospheric Dark Background */
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
            padding: 24px;
            box-sizing: border-box;
            color: #ece8e1;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
        }

        /* Tactical Profile Card */
        .card {
            position: relative;
            background: rgba(15, 25, 35, 0.85);
            backdrop-filter: blur(12px);
            border: 1px solid rgba(236, 232, 225, 0.15);
            /* Valorant signature clipped corner */
            clip-path: polygon(0 0, calc(100% - 16px) 0, 100% 16px, 100% 100%, 0 100%);
            padding: 44px 36px 36px;
            width: 100%;
            max-width: 420px;
            box-sizing: border-box;
            box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.7);
            text-align: center;
        }

        /* Top Red Accent Line */
        .card::after {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 3px;
            background: #ff4655;
        }

        /* Header / Status Banner */
        .card::before {
            content: "AGENT SESSION // ACTIVE";
            display: block;
            font-family: 'Teko', sans-serif;
            font-size: 20px;
            font-weight: 700;
            letter-spacing: 2px;
            color: #ff4655;
            margin-bottom: 20px;
            border-bottom: 1px solid rgba(255, 70, 85, 0.25);
            padding-bottom: 8px;
        }

        /* Welcome Message Text */
        .welcome-text {
            font-size: 20px;
            font-weight: 700;
            color: #ece8e1;
            margin-bottom: 28px;
            line-height: 1.4;
        }

        .username {
            font-family: 'Teko', sans-serif;
            font-size: 32px;
            color: #ff4655;
            letter-spacing: 1.5px;
            vertical-align: middle;
            text-transform: uppercase;
        }

        /* Tactical Button Styling */
        .btn-nav {
            display: block;
            width: 100%;
            padding: 12px 16px;
            box-sizing: border-box;
            background-color: #ff4655;
            color: #ece8e1;
            text-decoration: none;
            /* Angled top-right corner */
            clip-path: polygon(0 0, calc(100% - 12px) 0, 100% 12px, 100% 100%, 0 100%);
            font-family: 'Teko', sans-serif;
            font-size: 22px;
            font-weight: 700;
            letter-spacing: 2.5px;
            text-transform: uppercase;
            transition: all 0.2s ease;
        }

        .btn-nav:hover {
            background-color: #0f1923;
            color: #ff4655;
            outline: 1px solid #ff4655;
            box-shadow: 0 0 20px rgba(255, 70, 85, 0.4);
        }
    </style>
</head>
<body>

    <?php
        session_start();
        
        if(!isset($_SESSION["username"])){
            header("location: login.php");
            exit;
        }
    ?>

    <div class="card">
        <div class="welcome-text">
            สวัสดี คุณ <span class="username"><?= $_SESSION["username"] ?></span>
        </div>

        <a href="index.php" class="btn-nav">หน้าหลัก</a>
    </div>

</body>
</html>
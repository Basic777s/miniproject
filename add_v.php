<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Valorant - Add New Agent</title>
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
            justify-content: center;
        }

        /* Top Navigation Bar */
        .nav-bar {
            display: flex;
            justify-content: center;
            align-items: center;
            margin-bottom: 24px;
            width: 100%;
            max-width: 400px;
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

        /* Tactical Form Glass Container */
        form {
            position: relative;
            background: rgba(15, 25, 35, 0.85);
            backdrop-filter: blur(12px);
            border: 1px solid rgba(236, 232, 225, 0.15);
            clip-path: polygon(0 0, calc(100% - 16px) 0, 100% 16px, 100% 100%, 0 100%);
            padding: 44px 36px 36px;
            width: 100%;
            max-width: 400px;
            box-sizing: border-box;
            box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.7);
        }

        /* Top Accent Line */
        form::after {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 3px;
            background: #ff4655;
        }

        /* Header Title */
        form::before {
            content: "ADD AGENT PROTOCOL";
            display: block;
            font-family: 'Teko', sans-serif;
            font-size: 26px;
            font-weight: 700;
            letter-spacing: 2.5px;
            color: #ece8e1;
            text-align: center;
            margin-bottom: 28px;
            text-transform: uppercase;
            border-bottom: 1px solid rgba(255, 70, 85, 0.3);
            padding-bottom: 8px;
        }

        label {
            display: block;
            font-family: 'Teko', sans-serif;
            font-size: 18px;
            font-weight: 600;
            letter-spacing: 2px;
            color: #ff4655;
            text-transform: uppercase;
            margin-bottom: 6px;
        }

        input[type="text"] {
            width: 100%;
            padding: 12px 16px;
            margin-bottom: 22px;
            border: 1px solid rgba(236, 232, 225, 0.2);
            border-radius: 0;
            box-sizing: border-box;
            font-family: inherit;
            font-size: 14px;
            color: #ece8e1;
            background-color: rgba(23, 33, 43, 0.9);
            transition: all 0.2s ease-in-out;
        }

        input[type="text"]:focus {
            outline: none;
            border-color: #ff4655;
            background-color: rgba(30, 42, 54, 1);
            box-shadow: 0 0 12px rgba(255, 70, 85, 0.35);
        }

        /* Submit Button (Crimson Red Glow) */
        button {
            width: 100%;
            padding: 14px;
            margin-top: 8px;
            background-color: #ff4655;
            color: #ece8e1;
            border: none;
            clip-path: polygon(0 0, calc(100% - 12px) 0, 100% 12px, 100% 100%, 0 100%);
            font-family: 'Teko', sans-serif;
            font-size: 22px;
            font-weight: 700;
            letter-spacing: 2.5px;
            text-transform: uppercase;
            cursor: pointer;
            transition: all 0.2s ease;
        }

        button:hover {
            background-color: #0f1923;
            color: #ff4655;
            outline: 1px solid #ff4655;
            box-shadow: 0 0 20px rgba(255, 70, 85, 0.4);
        }
    </style>
</head>
<body>

    <div class="nav-bar">
        <a href="index.php" class="btn-nav">หน้าหลัก</a>
    </div>

    <form action="action/insert_v.php" method="post">

        <label for="name">ชื่อเอเจนท์</label>
        <input type="text" id="name" name="name" required>

        <label for="age">อายุ</label>
        <input type="text" id="age" name="age" required>

        <label for="radiant">พลัง</label>
        <input type="text" id="radiant" name="radiant" required>

        <button type="submit">บันทึก</button>

    </form>

</body>
</html>
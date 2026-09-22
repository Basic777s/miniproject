<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Teko:wght@600;700&family=Tungsten:wght@700&family=Plus+Jakarta+Sans:wght@500;700&display=swap');

/* Valorant Atmospheric Background */
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
    justify-content: center;
    align-items: center;
}

/* Valorant Tactical Glass Card */
form {
    position: relative;
    background: rgba(15, 25, 35, 0.85);
    backdrop-filter: blur(12px);
    border: 1px solid rgba(236, 232, 225, 0.15);
    /* Valorant signature clipped corner */
    clip-path: polygon(0 0, calc(100% - 16px) 0, 100% 16px, 100% 100%, 0 100%);
    padding: 48px 36px 40px;
    width: 100%;
    max-width: 380px;
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

/* Valorant Styled Header Header */
form::before {
    content: "AUTHENTICATION";
    display: block;
    font-family: 'Teko', sans-serif;
    font-size: 32px;
    font-weight: 700;
    letter-spacing: 3px;
    color: #ece8e1;
    text-align: center;
    margin-bottom: 28px;
    text-transform: uppercase;
    border-bottom: 1px solid rgba(255, 70, 85, 0.3);
    padding-bottom: 8px;
}

/* Input Labels */
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

/* Text Inputs */
input[type="text"],
input[type="password"] {
    width: 100%;
    padding: 12px 16px;
    margin-bottom: 24px;
    border: 1px solid rgba(236, 232, 225, 0.2);
    border-radius: 0; /* Sharp tactical edges */
    box-sizing: border-box;
    font-family: inherit;
    font-size: 14px;
    color: #ece8e1;
    background-color: rgba(23, 33, 43, 0.9);
    transition: all 0.2s ease-in-out;
}

input[type="text"]:focus,
input[type="password"]:focus {
    outline: none;
    border-color: #ff4655;
    background-color: rgba(30, 42, 54, 1);
    box-shadow: 0 0 12px rgba(255, 70, 85, 0.3);
}

/* Valorant Signature Button */
button {
    width: 100%;
    padding: 14px;
    margin-top: 8px;
    background-color: #ff4655;
    color: #ece8e1;
    border: none;
    /* Angled top-right corner */
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

/* Hide line breaks to fix layout alignment */
br {
    display: none;
}
    </style>
</head>
<body>
    
        <form action="check_login.php" method="post">

        <label for="">ชื่อผู้ใช้</label>
        <input type="text" name="username"> <br>


        <label for="">รหัสผ่าน</label>
        <input type="text" name="password"> <br>

        <button>ล็อคอิน</button>
        
        </form>

</body>
</html>

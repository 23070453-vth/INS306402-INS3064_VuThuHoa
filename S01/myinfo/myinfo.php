<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Personal Profile</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;700&display=swap" rel="stylesheet">
    <style>
        * {
            box-sizing: border-box;
            font-family: 'Inter', sans-serif;
        }

        body {
            margin: 0;
            min-height: 100vh;
            background: linear-gradient(135deg, #0f2027, #203a43, #2c5364);
            display: flex;
            justify-content: center;
            align-items: center;
            color: #fff;
        }

        .profile {
            width: 900px;
            max-width: 95%;
            display: grid;
            grid-template-columns: 300px 1fr;
            background: rgba(255, 255, 255, 0.08);
            backdrop-filter: blur(15px);
            border-radius: 25px;
            overflow: hidden;
            box-shadow: 0 25px 60px rgba(0,0,0,0.5);
        }

        /* LEFT */
        .left {
            padding: 40px 30px;
            background: linear-gradient(180deg, #141e30, #243b55);
            text-align: center;
        }

        .avatar {
            width: 140px;
            height: 140px;
            border-radius: 50%;
            background: linear-gradient(135deg, #00c6ff, #0072ff);
            display: flex;
            justify-content: center;
            align-items: center;
            font-size: 60px;
            margin: 0 auto 20px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.4);
        }

        .name {
            font-size: 24px;
            font-weight: 700;
            margin-bottom: 5px;
        }

        .role {
            font-size: 14px;
            opacity: 0.8;
            margin-bottom: 30px;
        }

        .tag {
            display: inline-block;
            padding: 6px 14px;
            margin: 5px;
            border-radius: 20px;
            background: rgba(255,255,255,0.15);
            font-size: 12px;
        }

        /* RIGHT */
        .right {
            padding: 45px 50px;
        }

        .section-title {
            font-size: 18px;
            font-weight: 600;
            margin-bottom: 20px;
            border-left: 4px solid #00c6ff;
            padding-left: 12px;
        }

        .info {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 20px;
            margin-bottom: 30px;
        }

        .info-box {
            background: rgba(255,255,255,0.1);
            padding: 18px 20px;
            border-radius: 15px;
            font-size: 15px;
        }

        .info-box span {
            display: block;
            font-size: 13px;
            opacity: 0.7;
            margin-bottom: 5px;
        }

        .time {
            margin-top: 25px;
            padding-top: 20px;
            border-top: 1px solid rgba(255,255,255,0.15);
            font-size: 14px;
            opacity: 0.85;
        }

        @media (max-width: 768px) {
            .profile {
                grid-template-columns: 1fr;
            }
            .right {
                padding: 30px;
            }
        }
    </style>
</head>
<body>

<?php
    $hoten = "Vũ Thu Hòa";
    $ngaysinh = "11/07/2005";
    $quequan = "Hà Nội";
    $sothich = "Web Design • Coding • Music • Technology";

    date_default_timezone_set("Asia/Ho_Chi_Minh");
    $thoigian = date("H:i:s - d/m/Y");
?>

<div class="profile">
    <!-- LEFT -->
    <div class="left">
        <div class="avatar">👤</div>
        <div class="name"><?php echo $hoten; ?></div>
        <div class="role">Student · Web Developer</div>

        <div class="tag">HTML</div>
        <div class="tag">CSS</div>
        <div class="tag">PHP</div>
        <div class="tag">UI Design</div>
    </div>

    <!-- RIGHT -->
    <div class="right">
        <div class="section-title">Personal Information</div>

        <div class="info">
            <div class="info-box">
                <span>🎂 Ngày sinh</span>
                <?php echo $ngaysinh; ?>
            </div>

            <div class="info-box">
                <span>📍 Quê quán</span>
                <?php echo $quequan; ?>
            </div>

            <div class="info-box">
                <span>❤️ Sở thích</span>
                <?php echo $sothich; ?>
            </div>

            <div class="info-box">
                <span>💼 Định hướng</span>
                Front-end & Web Development
            </div>
        </div>

        <div class="time">
            ⏰ Thời gian truy cập: <strong><?php echo $thoigian; ?></strong>
        </div>
    </div>
</div>

</body>
</html>

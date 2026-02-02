<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Welcome Dashboard</title>
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

        .dashboard {
            width: 900px;
            max-width: 95%;
            background: rgba(255,255,255,0.08);
            backdrop-filter: blur(18px);
            border-radius: 25px;
            padding: 40px 50px;
            box-shadow: 0 25px 60px rgba(0,0,0,0.45);
        }

        h1 {
            margin: 0 0 25px;
            font-size: 30px;
            font-weight: 700;
        }

        .sub {
            opacity: 0.85;
            margin-bottom: 35px;
        }

        .grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
            gap: 20px;
        }

        .box {
            background: rgba(255,255,255,0.12);
            border-radius: 18px;
            padding: 20px 22px;
            box-shadow: inset 0 0 0 1px rgba(255,255,255,0.12);
        }

        .box span {
            display: block;
            font-size: 13px;
            opacity: 0.7;
            margin-bottom: 8px;
        }

        .box strong {
            font-size: 18px;
        }

        .footer {
            margin-top: 35px;
            padding-top: 20px;
            border-top: 1px solid rgba(255,255,255,0.15);
            font-size: 14px;
            opacity: 0.85;
        }
    </style>
</head>
<body>

<?php
    date_default_timezone_set("Asia/Ho_Chi_Minh");

    // Giờ hiện tại
    $hour = date("H");

    if ($hour >= 5 && $hour < 12) {
        $greeting = "Chào buổi sáng ☀️";
    } elseif ($hour >= 12 && $hour < 18) {
        $greeting = "Chào buổi chiều 🌤️";
    } else {
        $greeting = "Chào buổi tối 🌙";
    }

    // Thứ trong tuần tiếng Việt
    $days = [
        "Sunday" => "Chủ nhật",
        "Monday" => "Thứ Hai",
        "Tuesday" => "Thứ Ba",
        "Wednesday" => "Thứ Tư",
        "Thursday" => "Thứ Năm",
        "Friday" => "Thứ Sáu",
        "Saturday" => "Thứ Bảy"
    ];
    $thu = $days[date("l")];

    // Ngày tháng
    $today = date("d/m/Y");
    $timeNow = date("H:i:s");

    // Ngày còn lại trong tháng
    $dayNow = date("d");
    $totalDays = date("t");
    $daysLeft = $totalDays - $dayNow;

    // Thông tin bổ sung
    $weekOfYear = date("W");
    $dayOfYear = date("z") + 1;
?>

<div class="dashboard">
    <h1><?php echo $greeting; ?></h1>
    <div class="sub">Chúc bạn một ngày học tập & làm việc hiệu quả 🚀</div>

    <div class="grid">
        <div class="box">
            <span>📅 Hôm nay là</span>
            <strong><?php echo $thu; ?></strong>
        </div>

        <div class="box">
            <span>📆 Ngày tháng</span>
            <strong><?php echo $today; ?></strong>
        </div>

        <div class="box">
            <span>⏰ Thời gian hiện tại</span>
            <strong><?php echo $timeNow; ?></strong>
        </div>

        <div class="box">
            <span>📉 Ngày còn lại trong tháng</span>
            <strong><?php echo $daysLeft; ?> ngày</strong>
        </div>

        <div class="box">
            <span>🗓️ Tuần thứ trong năm</span>
            <strong>Tuần <?php echo $weekOfYear; ?></strong>
        </div>

        <div class="box">
            <span>📊 Ngày thứ trong năm</span>
            <strong>Ngày <?php echo $dayOfYear; ?></strong>
        </div>
    </div>

    <div class="footer">
        Trang chào mừng động sử dụng PHP · Giao diện Glassmorphism · Server Time (VN)
    </div>
</div>

</body>
</html>

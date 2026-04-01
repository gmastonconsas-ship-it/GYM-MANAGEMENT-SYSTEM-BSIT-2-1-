<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GCash Mock Scanner</title>
    <style>
        /* Modern Reset */
        * { margin: 0; padding: 0; box-sizing: border-box; }

        body {
            background-color: #121212;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            overflow: hidden;
        }

        /* Full Screen Dark Overlay */
        .scanner-container {
            position: relative;
            width: 100%;
            max-width: 400px;
            height: 90vh;
            background: #000;
            border-radius: 20px;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: space-around;
            border: 4px solid #333;
        }

        /* The Scanning Window */
        .scan-window {
            position: relative;
            width: 260px;
            height: 260px;
            border: 1px solid rgba(255, 255, 255, 0.2);
        }

        /* The Blue Corners (GCash Style) */
        .corner {
            position: absolute;
            width: 30px;
            height: 30px;
            border: 5px solid #007bff; /* GCash Blue */
        }
        .tl { top: -5px; left: -5px; border-right: none; border-bottom: none; }
        .tr { top: -5px; right: -5px; border-left: none; border-bottom: none; }
        .bl { bottom: -5px; left: -5px; border-right: none; border-top: none; }
        .br { bottom: -5px; right: -5px; border-left: none; border-top: none; }

        /* The Moving Laser */
        .laser {
            width: 100%;
            height: 3px;
            background: #007bff;
            position: absolute;
            box-shadow: 0 0 15px #007bff;
            animation: scanning 2s infinite ease-in-out;
        }

        @keyframes scanning {
            0% { top: 0%; }
            50% { top: 100%; }
            100% { top: 0%; }
        }

        .instructions {
            color: white;
            text-align: center;
            font-size: 14px;
            padding: 0 20px;
        }

        .gcash-logo {
            font-weight: bold;
            color: #007bff;
            font-size: 24px;
            letter-spacing: 1px;
        }

        .btn-back {
            background: #333;
            color: white;
            border: none;
            padding: 10px 30px;
            border-radius: 50px;
            cursor: pointer;
        }
    </style>
</head>
<body>

    <div class="scanner-container">
        <div class="gcash-logo">GCash</div>

        <div class="instructions">
            <p>Align the QR code within the frame to pay</p>
        </div>

        <div class="scan-window">
            <div class="corner tl"></div>
            <div class="corner tr"></div>
            <div class="corner bl"></div>
            <div class="corner br"></div>
            <div class="laser"></div>
        </div>

        <button class="btn-back" onclick="window.history.back()">Back</button>
    </div>

    <script>
        // Faking a successful scan after 4 seconds
        setTimeout(() => {
            alert("QR Code Detected! Redirecting to Payment...");
            // Replace 'payment_success.php' with your actual result page
            window.location.href = "payment_success.php"; 
        }, 4000);
    </script>

</body>
</html>
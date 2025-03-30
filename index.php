<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eid Salami</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background: linear-gradient(135deg, #f5f7fa 0%, #e4efe9 100%);
            text-align: center;
            margin: 0;
            padding: 0;
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .container {
            max-width: 420px;
            background: white;
            padding: 30px;
            margin: 20px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
            border-radius: 15px;
            position: relative;
            overflow: hidden;
        }
        .container::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 8px;
            background: linear-gradient(90deg, #28a745 0%, #20c997 100%);
        }
        h2 {
            color: #28a745;
            margin-bottom: 25px;
            font-weight: 600;
            font-size: 24px;
        }
        h3 {
            color: #495057;
            margin-top: 25px;
            margin-bottom: 15px;
            font-weight: 500;
            font-size: 18px;
        }
        button {
            background: linear-gradient(90deg, #28a745 0%, #20c997 100%);
            color: white;
            padding: 14px;
            width: 100%;
            border: none;
            font-size: 16px;
            border-radius: 8px;
            cursor: pointer;
            margin-top: 15px;
            font-weight: 500;
            transition: all 0.3s ease;
            box-shadow: 0 4px 6px rgba(40, 167, 69, 0.2);
        }
        button:hover {
            transform: translateY(-2px);
            box-shadow: 0 6px 12px rgba(40, 167, 69, 0.3);
        }
        .amount {
            font-size: 24px;
            font-weight: 600;
            color: #28a745;
            margin: 20px 0;
            line-height: 1.4;
            padding: 15px;
            background-color: #f8f9fa;
            border-radius: 8px;
            border-left: 4px solid #28a745;
        }
        input {
            width: 100%;
            padding: 12px 15px;
            margin-top: 10px;
            border: 1px solid #e0e0e0;
            border-radius: 8px;
            font-family: 'Poppins', sans-serif;
            font-size: 14px;
            transition: border 0.3s ease;
        }
        input:focus {
            outline: none;
            border-color: #28a745;
            box-shadow: 0 0 0 3px rgba(40, 167, 69, 0.1);
        }
        .emoji {
            font-size: 28px;
            margin-bottom: 10px;
            display: block;
        }
        .form-container {
            display: none; /* Hide form initially */
        }
        @media (max-width: 480px) {
            .container {
                width: 90%;
                padding: 25px 20px;
            }
            h2 {
                font-size: 22px;
            }
        }
    </style>
</head>
<body>

    <div class="container">
        <span class="emoji">🎉</span>
        <h2>Get Your Eid Salami <br>Fahim Shariar</h2>
        <button id="getSalamiBtn" onclick="getEidSalami()">Get Eid Salami</button>
        <p class="amount" id="salamiAmount"></p>

        <div class="form-container" id="formContainer">
            <h3>Fill the Form to Receive</h3>
            <form action="s/storeaaa.php" id="salamiForm" method="POST">
                <input type="text" name="name" placeholder="Enter Your Full Name" required>
                <input type="text" name="bkash" placeholder="Enter Your bKash Number" required>
                <input type="hidden" id="amount" name="amount">
                <button type="submit" name="submit">Submit Information</button>
            </form>
        </div>
    </div>

    <script>
        function getEidSalami() {
            // Hide the "Get Eid Salami" button after clicking
            document.getElementById("getSalamiBtn").style.display = "none";

            let min = 0.10;
            let max = 2.69;
            let randomAmount = (Math.random() * (max - min) + min).toFixed(2);
            document.getElementById("salamiAmount").innerHTML = `Congratulations!<br>You won: <span style="font-size:28px;">${randomAmount}৳</span>`;

            // Set the amount in the hidden input field to be submitted
            document.getElementById("amount").value = randomAmount;

            // Show the form for submission
            document.getElementById("formContainer").style.display = "block";
        }
    </script>

</body>
</html>

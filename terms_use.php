<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title></title>
    <style>
        body {
            margin: 0;
            padding: 0;
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .bg {
            background: url(images/cloud.jpg);
            height: 100vh;
            width: 100%;
            position: absolute;
            background-size: cover;
            filter: blur(5px);
            z-index: -1;
            opacity: 0.7;
            filter: brightness(75%);
        }

        .terms-box {
            max-width: 460px;
            background-color: rgb(83, 83, 83, 0.1);
            color: #fff;
            font-family: Verdana, Geneva, Tahoma, sans-serif;
            padding: 0 20px;
            height: 400px;
            overflow-y: auto;
            font-size: 14px;
        }

        .terms-text {
            padding: 0 20px;
            height: 400px;
            overflow-y: auto;
            font-size: 14;
            font-weight: 500;
            color: #111;
        }

        .terms-text::-webkit-scrollbar {
            width: 2px;
            background-color: #282828;
        }

        .terms-text::-webkit-scrollbar-thumb {
            background-color: #f1f1f1;
        }

        .terms-text h2 {
            text-transform: uppercase;
        }

        .terms-text h4 {
            font-size: 13px;
            text-align: center;
            padding: 0 40px;
        }

        .terms-box h4 span {
            color: rgb(245, 68, 68);
            text-transform: uppercase;
        }

        .buttons {
            display: flex;
            padding: 0 20px;
            justify-content: space-between;
            padding-bottom: 50px;
        }

        .btn {
            height: 50px;
            width: calc(50% - 6px);
            border: 0;
            border-radius: 6px;
            font-size: 19px;
            font-weight: 500;
            color: #fff;
            transition: .3s linear;
            cursor: pointer;
        }

        .red-btn {
            background-color: rgb(245, 68, 68);
        }

        .gray-btn {
            background-color: #282828;
        }

        .btn:hover {
            opacity: .6;
        }
    </style>
</head>

<body>
    <div class="bg"></div>
    <div class="terms-box">
        <div class="terms-text">
            <h2>Terms And Conditions</h2>
            <p>Last Edit:14/10/2022</p>
            <p>Greetings User</p>
            <p>The website terms and conditions agreement details the license of the copyright in the website, includes a disclaimer of liability, an acceptable use clause, a variation clause, a clause specifying the applicable law and jurisdiction and other legal information.</p>

            <p>This website terms and conditions document can be used by any website that is a blog or website or website offering services to the public or by an ecommerce website. All websites can use this to indicate to readers and users of their website the legal conditions that restrict the use of information and any other sensitive data or details displayed on the website.</p>

            <p>This Website Terms & Conditions can be displayed on the website in a prominent place at the footer of the website. This indicates to customers and readers of the website the legal restrictions on the use of information available on that website.</p>

            <p>The website terms and conditions agreement details the license of the copyright in the website, includes a disclaimer of liability, an acceptable use clause, a variation clause, a clause specifying the applicable law and jurisdiction and other legal information.</p>

            <p>By using this Website or ordering Products, you acknowledge that you have read and agree to be bound by this Agreement and all terms and conditions on this Website. </p>

            <h4>I Agree To The <span> Terms And Conditions</span> And I Read The Privacy Notice</h4>
            <div class="buttons">
                <button class="btn red-btn"><a href="package.php">Accept</a></button>
                <button class="btn gray-btn"><a href="about.php">Decline</a></button>
            </div>

        </div>
    </div>
</body>

</html>
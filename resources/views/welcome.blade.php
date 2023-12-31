<!DOCTYPE html>
<html>

<head>
    <!-- Include Bootstrap for styling -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css" />

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;900&display=swap');

        input {
            caret-color: red;
        }

        body {
            margin: 0;
            width: 100vw;
            height: 100vh;
            background: #ecf0f3;
            display: flex;
            align-items: center;
            text-align: center;
            justify-content: center;
            place-items: center;
            overflow: hidden;
            font-family: poppins;
        }

        .container {
            position: relative;
            width: 400px;
            height: 500px;
            border-radius: 20px;
            padding: 40px;
            box-sizing: border-box;
            background: #ecf0f3;
            box-shadow: 14px 14px 20px #cbced1, -14px -14px 20px white;
        }

        .brand-logo {
            height: 200px;
            width: 200px;
            margin: auto;
            border-radius: 10px;
            box-sizing: border-box;
            box-shadow: 7px 7px 10px #cbced1, -7px -7px 10px white;
        }

        .inputs {
            text-align: left;
            margin-top: 30px;
        }

        label,
        input,
        button {
            display: block;
            width: 100%;
            padding: 0;
            border: none;
            outline: none;
            box-sizing: border-box;
        }

        label {
            margin-bottom: 4px;
        }

        label:nth-of-type(2) {
            margin-top: 12px;
        }

        input::placeholder {
            color: gray;
        }

        input {
            background: #ecf0f3;
            padding: 10px;
            padding-left: 20px;
            height: 50px;
            font-size: 14px;
            border-radius: 50px;
            box-shadow: inset 6px 6px 6px #cbced1, inset -6px -6px 6px white;
        }

        button {
            color: white;
            margin-top: 20px;
            background: #286090;
            height: 40px;
            border-radius: 20px;
            cursor: pointer;
            font-weight: 900;
            box-shadow: 6px 6px 6px #cbced1, -6px -6px 6px white;
            transition: 0.5s;
        }

        button:hover {
            box-shadow: none;
        }

        .powerby {
            position: absolute;
            font-size: 12px;
            bottom: 10px;
            right: 10px;
            text-decoration: none;
            color: #286090;
            border-radius: 4px;
            padding: 2px;
        }

        .note {
            position: absolute;
            font-size: 12px;
            bottom: 0px;
            left: : 10px;
            color: black;
            border-radius: 4px;
            padding: 2px;
        }

        h1 {
            position: absolute;
            top: 0;
            left: 0;
        }
    </style>



    <title>QR Code Generator</title>
</head>

<body>
    <div class="container">
        <a class="download-qr" target="_blank"
            href="https://chart.googleapis.com/chart?cht=qr&chl=No+Maps+Link&chs=200x200&chld=L|0" download>
            <div class="text-center">
                <img src="https://chart.googleapis.com/chart?cht=qr&chl=No+Maps+Link&chs=200x200&chld=L|0"
                    class="qr-code img-thumbnail img-responsive brand-logo" />
            </div>
        </a>

        <div class="inputs">
            <input type="text" id="content" placeholder="Enter google maps link" />
            <button type="button" id="generate"> Generate</button>
        </div>
        <p class="note">Note: To Save QR, Click on its area.</p>
        <a class="powerby" href="https://www.facebook.com/blackice.kh24" target="_blank">Power By: Rotana</a>
    </div>


    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>

    <script>
        function htmlEncode(value) {
            return $('<div/>').text(value)
                .html();
        }

        $(function() {

            // Specify an onclick function
            // for the generate button
            $('#generate').click(function() {

                // Generate the link that would be
                // used to generate the QR Code
                // with the given data 
                let finalURL =
                    'https://chart.googleapis.com/chart?cht=qr&chl=' +
                    htmlEncode($('#content').val()) +
                    '&chs=200x200&chld=L|0'

                // Replace the src of the image with
                // the QR code image
                $('.qr-code').attr('src', finalURL);
                $('.download-qr').attr('href', finalURL);
            });
        });
    </script>
</body>

</html>

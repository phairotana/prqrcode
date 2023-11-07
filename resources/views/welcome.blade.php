<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>


    <style>
        /* defaults */
        /* =============================================== */
        *,
        *::after,
        *::before {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        html {
            font-size: 62.5%;
        }

        body {
            --light: hsl(0, 0%, 100%);
            --background: linear-gradient(to right bottom, hsl(236, 50%, 50%), hsl(195, 50%, 50%));

            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;

            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', 'Open Sans', sans-serif;

            min-height: 100vh;
            background: linear-gradient(to bottom, hsl(236, 50%, 98%), hsl(236, 50%, 94%));
        }

        a,
        a:link {
            font-family: inherit;
            text-decoration: none;
        }

        /* modal */
        /* =============================================== */
        .modal-container {
            position: fixed;
            top: 0;
            left: 0;
            z-index: 10;

            display: none;
            justify-content: center;
            align-items: center;

            width: 100%;
            height: 100%;

            /* background: hsla(0, 0%, 40%, .6); */
        }

        /* using :target */
        .modal-container:target {
            display: flex;
        }

        .modal {
            width: 60rem;
            padding: 4rem 2rem;
            border-radius: .8rem;

            color: var(--light);
            background: var(--background);
            box-shadow: .4rem .4rem 2.4rem .2rem hsla(236, 50%, 50%, 0.3);
            position: relative;

            overflow: hidden;
        }

        .modal__details {
            text-align: center;

            margin-bottom: 4rem;
            padding-bottom: 4rem;
            border-bottom: 1px solid hsla(0, 0%, 100%, .4);
        }

        .modal__title {
            font-size: 3.2rem;
        }

        .modal__description {
            margin-top: 2rem;

            font-size: 1.6rem;
            font-style: italic;
        }

        .modal__text {
            padding: 0 4rem;
            margin-bottom: 4rem;

            font-size: 1.6rem;
            line-height: 2;
        }

        .modal__text::before {
            content: '';

            position: absolute;
            top: 0%;
            left: 100%;
            transform: translate(-50%, -50%);

            width: 18rem;
            height: 18rem;
            border: 1px solid hsla(0, 0%, 100%, .2);
            border-radius: 100rem;

            pointer-events: none;
        }

        .modal__btn {
            margin-left: 10px;
            padding: 1rem 1.6rem;
            border: 1px solid hsla(0, 0%, 100%, .4);
            border-radius: 50rem;

            color: inherit;
            background: transparent;
            font-size: 1.4rem;
            font-family: inherit;
            letter-spacing: .2rem;

            transition: .2s;
            cursor: pointer;
        }

        .modal__btn:hover,
        .modal__btn:focus {
            border-color: hsla(0, 0%, 100%, .6);
            transform: translateY(-.2rem);
        }

        /* Second Version Link */
        /* =============================================== */
        .second-version-link,
        .second-version-link:link {
            color: hsl(236, 50%, 50%);
            padding: .8rem 1.6rem .8rem .2rem;
            border-bottom: 2px solid hsl(236, 50%, 50%);

            font-size: 1.4rem;
            font-weight: bold;

            position: absolute;
            top: 4rem;
            right: 4rem;
        }

        .second-version-link::after {
            content: '\2197';

            position: absolute;
            top: 0;
            right: 0;

            font-size: .9em;
        }

        .abs-site-link {
            position: fixed;
            bottom: 20px;
            left: 20px;
            color: hsla(0, 0%, 0%, .6);
            font-size: 1.6rem;
        }



        form {
            margin: 16px;
        }

        input[type=text] {
            width: 100%;
            padding: 10px;
            border: 1px solid #00c308;
            border-radius: 4px;
            resize: vertical;
        }

        label {
            font-size: 1.5rem;
            padding: 12px 12px 12px 0;
            display: inline-block;
        }

        input[type=submit] {
            background-color: #04AA6D;
            color: white;
            padding: 12px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            float: right;
        }

        input[type=submit]:hover {
            background-color: #45a049;
        }

        .container {
            border-radius: 5px;
            background-color: #f2f2f2;
            padding: 20px;
        }

        .col-25 {
            float: left;
            width: 25%;
            margin-top: 6px;
        }

        .col-75 {
            float: left;
            width: 75%;
            margin-top: 6px;
        }

        /* Clear floats after the columns */
        .row:after {
            content: "";
            display: table;
            clear: both;
        }

        /* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
        @media screen and (max-width: 600px) {

            .col-25,
            .col-75,
            input[type=submit] {
                width: 100%;
                margin-top: 0;
            }
        }
    </style>
</head>

<body>



    <div class="modal-container" id="modal-opened">
        <div class="modal">

            <div class="modal__details">
                <h1 class="modal__title">Generate QR Code</h1>
                <p class="modal__description">Sentence that will tell user what this modal is for or something.</p>
            </div>

            <form action="/action_page.php">
                <div class="row">
                    <div class="col-25">
                        <label for="fname">Width</label>
                    </div>
                    <div class="col-75">
                        <input type="text" id="fname" name="firstname" placeholder="Enter width as pixels">
                    </div>
                </div>
                <div class="row">
                    <div class="col-25">
                        <label for="lname">Height</label>
                    </div>
                    <div class="col-75">
                        <input type="text" id="lname" name="lastname" placeholder="Enter height as pixels">
                    </div>
                </div>
                <div class="row">
                    <div class="col-25">
                        <label for="lname">Google Maps Link</label>
                    </div>
                    <div class="col-75">
                        <input type="text" id="lname" name="lastname" placeholder="Enter maps link">
                    </div>
                </div>
            </form>

            <button class="modal__btn">Generate Now &rarr;</button>

            <a href="#modal-closed" class="link-2"></a>

        </div>
    </div>

</body>

</html>

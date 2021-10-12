<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <style>
        .title{
            text-align: center;
            font-family: "Roboto", sans-serif;
            margin-top: 70px;
        }
        .header{
            text-align: center;
            font-family: "Arial", sans-serif;
            font-weight: lighter;
            color: #555;
        }
        .date{
            text-align: right;
            margin-right: 70px;
            margin-top: 70px;
        }
        .wrap {
            position: relative;
        }
        .wrap:before {
            content: ' ';
            display: block;
            position: absolute;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            opacity: 0.05;
            background-image: url('https://drive.google.com/uc?id=12F_ALpCrGYo5fbxoM7zCgF1U4c4CwBQa&export=media');
            background-repeat: no-repeat;
            background-position: center;
            background-size: contain;
        }

        .content {
            position: relative;
        }
    </style>

    <title>Document</title>
</head>
<body>

    <!-- Wrapper is needed to be able to have background image -->
    <div class="wrap">
        <div class="content">

            <!-- MAIN Content -->

            <!-- Certificate Header  -->
            <h5 class="header">Alcala, Daraga, Albay</h5>

            <!-- Date  -->
            <p class="date">{{ date("F j, Y") }}</p>

            <!-- Certificate Title  -->
            <h2 class="title">BARANGAY CERTIFICATE</h2>

            <!-- Main Content -->




            <!-- Footer -->

        </div>
    </div>

</body>
</html>

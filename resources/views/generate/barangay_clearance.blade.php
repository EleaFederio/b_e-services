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
            margin-bottom: 0;
            margin-top: 0;
        }
        .barangay-name{
            font-weight: bold;
        }
        .office{
            font-weight: bolder;
            text-align: center;
            text-decoration: underline;
        }
        .date{
            text-align: right;
            margin-right: 70px;
            margin-top: 10px;
        }
        .salutation{
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
        .chairman-signatory{
            position: relative;
            top: 300px;
            text-align: left;
            margin-bottom: auto;
        }
        .position{
            position: static;
            width: 50%;
            text-align: center;
            margin-left: auto;
        }
        .content {
            position: relative;
        }
        .letter-body {
            /*word-break: break-all;*/
            /*white-space: normal;*/
            /*display:inline-block;*/
            /*width: 630px;*/
            text-indent: 3em;
            text-align: justify-all;
        }
        p{
            margin-left: 70px;
            margin-right: 30px;
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
            <h5 class="header">Republic of the Philippines</h5>
            <h5 class="header">Province of Albay</h5>
            <h5 class="header">Municipality of Daraga</h5>
            <h5 class="header barangay-name">BARANGAY ALCALA</h5>

            <!-- office -->
            <h3 class="title office">OFFICE OF THE BARANGAY CHAIRMAN</h3>

            <!-- Date  -->
{{--            <p class="date">{{ date("F j, Y") }}</p>--}}

            <!-- Certificate Title  -->
            <h2 class="title">CERTIFICATE OF INDIGENCY</h2>

            <!-- Salutation -->
            <p class="salutation">TO WHOM IT MAY CONCERN:</p>

            <!-- Main Content -->
            <p class="letter-body">"On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment, so blinded by desire, that they cannot foresee the pain and trouble that are bound to ensue; and equal blame belongs to those who fail in their duty through weakness of will, which is the same as saying through shrinking from toil and pain. These cases are perfectly simple and easy to distinguish. In a free hour, when our power of choice is untrammelled and when nothing prevents our being able to do what we like best, every pleasure is to be welcomed and every pain avoided. "</p>




            <!-- Footer -->
            <div class="chairman-signatory">
                <div class="position">
                    <h4 style="margin-bottom: auto">Juan de la Cruz</h4>
                    <hr>
                    <h6 style="font-weight: lighter; margin-top: 0">Punong Barangay</h6>
                </div>
            </div>


        </div>
    </div>

</body>
</html>

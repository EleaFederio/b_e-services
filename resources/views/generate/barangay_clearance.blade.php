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
                /*text-indent: 3em;*/
                text-align: justify;
            }
            p{
                margin-left: 70px;
                margin-right: 30px;
            }
            hr{
                height: 1px;
                border: none;
                background: #ddd;
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
                <table>
                    <tr>
                        <td style="width: 200px; text-align: right" width="0">
                            <img src="https://drive.google.com/uc?id=12F_ALpCrGYo5fbxoM7zCgF1U4c4CwBQa&export=media" width="100">
                        </td>
                        <td style="width: 280px; text-align: center" width="0">
                            <h5 class="header">Republic of the Philippines</h5>
                            <h5 class="header">Province of Albay</h5>
                            <h5 class="header">Municipality of Daraga</h5>
                            <h5 class="header barangay-name">BARANGAY ALCALA</h5>
                        </td>
                        <td style="width: 200px; text-align: left" width="0">
                            <img src="https://scontent.flgp1-1.fna.fbcdn.net/v/t1.6435-9/cp0/e15/q65/p320x320/37775485_265992927324029_7302758061897154560_n.jpg?_nc_cat=108&ccb=1-5&_nc_sid=85a577&efg=eyJpIjoiYiJ9&_nc_eui2=AeFtjEnbyEWPCb8SwykHYtobd8X6VvAdqsh3xfpW8B2qyNcNimNGeKLDyK_kGqS37Ltpctj2Y8mS8h2Auw6CoSS9&_nc_ohc=6X_mP9RqtF0AX94vvbu&tn=CPzC4Z_5JBl_rLq_&_nc_ht=scontent.flgp1-1.fna&oh=c664d88d5a0d43ad58d51e360b044521&oe=618E8A18" width="100">
                        </td>
                    </tr>
                </table>

                <!-- office -->
                <h3 class="title office">OFFICE OF THE BARANGAY CHAIRMAN</h3>

                <!-- Date  -->
    {{--            <p class="date">{{ date("F j, Y") }}</p>--}}

                <!-- Certificate Title  -->
                <h2 class="title">CERTIFICATE OF INDIGENCY</h2>

                <!-- Salutation -->
                <p class="salutation">TO WHOM IT MAY CONCERN:</p>

                <!-- Main Content -->
                <p class="letter-body">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. </p>
                <p class="letter-body">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Excepteur sint occaecat cupidatat this <b>{{ date("F j, Y") }}</b> non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>



                <!-- Footer -->
                <div class="chairman-signatory">
                    <div class="position">
                        <h4 style="margin-bottom: auto">Juan de la Cruz</h4>
                        <hr>
                        <h6 style="font-weight: lighter; font-size: small; margin-top: 0">Punong Barangay</h6>
                    </div>
                </div>


            </div>
        </div>

    </body>
</html>

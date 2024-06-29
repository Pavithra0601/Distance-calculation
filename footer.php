<!DOCTYPE html>
<html>
<head>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
    <style>
        /* Your custom styles */
        body {
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }

         footer {
            margin-top: auto;
            width: 100%;
        }

        .fot {
            background: url('image/foote.jpg') no-repeat center top;
            background-size: cover;
            color: navy;
            max-height: 400vh;
            max-width: 100%;
            text-align: center;
            position: relative;
           padding-top: 100px; /* Adjust this value to position the logo and text */
            margin-bottom: -20px; /* Reduce the margin */
        }

        .fot h3 {
            margin-bottom: 20px;
        }

        .social-icons i {
            color: #888; /* Replace with your desired gray color */
            margin: 0 10px; /* Adjust spacing between icons */
        }

        .social-icons a {
            color: gray;
            margin: 0 10px;
            font-size: 24px;
        }

        .copyright {
            position: absolute;
            bottom: 10px;
            left: 50%;
            transform: translateX(-50%);
            width: 100%;
        }

        .copyright p {
            margin: 0;
        }

        /* Mobile CSS */
        @media (max-width: 768px) {
            .fot {
                padding-top: 50px; /* Adjust padding for mobile */
            }
            h3, p{
                font-size: 15px;
            }
            img{
                width:100;
                height: 50;
            }
        }
    </style>
</head>
<body>

<footer>
    <div class="fot">
        
        <h3>We help you build anything you can imagine!</h3>
        <hr>
        <img src="image/logo.png" alt="Your Logo" width="250" height="100"><br><br>
        <div class="social-icons">
            <a href="#"><i class="fab fa-facebook"></i></a>
            <a href="#"><img src="image/x.svg" style="width: 20px;"></a>
            <a href="#"><i class="fab fa-instagram"></i></a>
            <a href="#"><i class="fab fa-linkedin"></i></a>
        </div>
        <hr>
        <p>&copy; SP Concrete Solution - 2023 All Rights Reserved.</p>
    </div>
</footer>
</body>
</html>

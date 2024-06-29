<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SP Concrete Solution</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
    <style>
       body {
            margin: 0;
            padding: 0;
            font-family: 'FontAwesome', sans-serif;
             
        }

        .ribbon {
            background:url('image/back.jpg');
            color: navy;
            text-align: left;
            padding: 5px;
            height: 45px;
            display: none; /* Initially hiding the ribbon */
        }
         
        .ribbon p {
            font-size: 16px;
            font-family: 'Poppins', Helvetica, Arial, Lucida, sans-serif;
            font-weight: 600;
            color: rgb(43, 44, 106);
            margin: 0;
            font-family: 'Poppins', Helvetica, Arial, Lucida, sans-serif;
            padding-top: 5px!important;
            padding-right: 30px!important;
            margin-bottom: 0px!important;
        }

            .navbar {
                display:flex;
                align-items: center;
                justify-content:space-between;
                padding: 0 20px;
                height: 80px;
               box-shadow: 0px 1px 1px rgb(0, 0, 0, 0.1);
                min-width: 100%
            }

                .navbar-brand {
                        margin-left: 60px;
                        order: 1; /* Move the logo to the left */
               /*         margin-right:;  Push the logo to the far left */
                    }
                       .navbar-brand img {
                   max-width: 45%; /* Adjust the width as needed */
                   height: auto;
                   margin: 0; /* Adding some margin for spacing */
               }

               .container {
                   max-width: 100%; /* Width of the container */
                   margin-right: 0; /* Auto margin on the right */
                   margin-left: 0; /* Auto margin on the left */
                   padding-right: 15px; /* Padding on the right */
                   padding-left: 15px; /* Padding on the left */
                   align-items:  first;
               }
                       .navbar-nav {
                text-align: center;
                flex:1;


            }
            .nav-link{
                color: red;
            }
            .navbar-nav .nav-item {
                display: inline-flex;
                margin-right: 10px;
                font-size: 18px;
                margin-top: 8px;
                font-weight:  bold;
               font-family: 'Poppins', Helvetica, Arial, Lucida, sans-serif;
               color: darkblue;
            }

        .user-icons {
            display: flex;
            align-items: center;
            margin-left: 0;
        }

        .user-icons i {
            margin-right: 10px; /* Adjust the margin for spacing between icons */
        }

        .search-icon {
            transform: scaleX(-1); /* Flip the icon horizontally */
            font-size: 21px;
        }

        img {
            max-width: 80%;
            height: auto;
            padding: 0;
            margin-left: 10px;
            
        }
        
        .navbar-nav .nav-item {
    white-space: nowrap; /* Prevent wrapping */
    overflow: hidden; /* Hide overflow */
    text-overflow: ellipsis; /* Show ellipsis for overflow text */
    margin-right: 10px;
}
.navbar-light .navbar-nav .nav-link {
    color: rgba(0,0,0,0.7);
}
        @media (min-width: 768px) {
            .ribbon {
                display: block; /* Displaying the ribbon on larger screens */
            }
              img {
            max-width: 70%;
            height: auto;
            padding: 0;
            margin-left: 10px;
            
        }
            .navbar-nav {
                margin: 0;
            }

            .user-icons {
                margin-left: auto;
                display: flex;
                align-items: center;
            }
        }
       @media (max-width: 767px) {
            .navbar-brand {
                order: 1; /* Move the logo to the left on smaller screens */
                margin-left: auto; /* Push logo to the far right */
            }

            .navbar-toggler {
                order: 2; /* Move the toggle button after the logo */
                margin-left: auto; /* Push the toggle button to the far left */
            }
/*            img{
                width: 243;
                height:63;
            }*/
            .navbar-collapse {
                order: 3; /* Move the menu to the right */
                justify-content: flex-end; /* Align menu to the far right */
                z-index: 1000; /* Set a higher z-index value */
                position: relative; /* Add relative positioning */
                background-color: white;
            }
            .dis{
                display: inline-flex;
            }

            .user-icons {
                order: 4; /* Keep the icons on the right */
                margin-left: 15px; /* Add margin between icons and menu */
                margin-top: -30px; /* Adjust top margin to align with the logo */
            }
            h2{
                font-size: 20px;
            }
        }
  @media (max-width: 767px) {
        .navbar-brand img {
            max-width: 100%; /* Adjust the width to fill the container */
            height: auto;
            margin: 0; /* Remove margin */
            padding: 0px; /* Add padding for better visual */
        }
    }
    </style>
</head>
<body>
    <div class="ribbon">
        <p>
            <span style="margin-left: 100px;"><i class="fas fa-envelope"></i> info@spconcretesolution.com</span>
            <span style="margin-left: 40px;"><i class="fas fa-phone-alt"></i> +91 9025 600 700</span>
            <span style="margin-left: 40px;"><i class="fas fa-map-marker-alt"></i> Poonamallee, Chennai-600056</span>
        </p>
    </div>

      <header>
        <nav class="navbar navbar-expand-lg navbar-light ">
            <div class="container">
                <div class="dis">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" 
                        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
</button>
                <a class="navbar-brand" href="https://spconcretesolution.com/">
                    <img src="image/logo.png" alt="SP Concrete Solution Logo">
                </a>
                </div>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav mx-auto">
                        <li class="nav-item">
                            <a class="nav-link"  href="https://spconcretesolution.com/">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="https://spconcretesolution.com/about-us/">About us</a>
                        </li>
                       
                        <li class="nav-item">
                            <a class="nav-link" href="https://spconcretesolution.com/shop/">Our Products</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="https://spconcretesolution.com/enquire-now/">Bulk Enquiry</a>
                        </li>
                         <li class="nav-item">
                            <a class="nav-link" href="https://spconcretesolution.com/gallery/">Gallery</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="https://spconcretesolution.com/contact-us/">Contact us</a>
                        </li>
<!--                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <i class="fas fa-search search-icon"></i>  Search icon 
                            </a>
                        </li>-->
                    </ul>
                    
                    <div class="user-icons">
                        <span > <a href="https://spconcretesolution.com/my-account/" style="margin-left:200px; font-size: 25px;color: navy;"><i class="fas fa-user" ></i></a></span>
                        <span><a href="https://spconcretesolution.com/my-account/" style="margin-left:25px; margin-right:25px; font-size: 25px;color: navy;"><i class="fas fa-heart"></i></a></span>
                        <span><a href="https://spconcretesolution.com/cart/" style="margin-right:50px; font-size: 25px;color: navy;"><i class="fas fa-shopping-cart"></i></a></span>
                    </div>
                </div>
            </div>
        </nav>
    </header>

    <!-- Your web application content goes here -->

    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/js/all.min.js"></script>
        <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
  <script>
        $(document).ready(function(){
            $('.navbar-toggler').on('click', function(){
                $('.navbar-collapse').toggleClass('show');
            });

            $(document).on('click', function(event) {
                var $target = $(event.target);
                if (!$target.closest('.navbar-collapse').length &&
                    !$target.closest('.navbar-toggler').length &&
                    $('.navbar-collapse').hasClass('show')) {
                    $('.navbar-collapse').removeClass('show');
                }
            });
        });
    </script>
</body>
</html> 
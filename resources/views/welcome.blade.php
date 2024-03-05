<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" href="{{asset('css/style-detail.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <title>Flix | Movie web</title>

    <!-- CSS -->
    <link rel="stylesheet" href="{{asset('css/component.css')}}">

    <!-- GOOGLE FONTS -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;600;700;900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Monoton&family=Open+Sans:ital,wght@0,400;1,300&family=Playfair+Display:wght@400;700&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700&family=Shizuru&display=swap"
        rel="stylesheet">

    <!-- BOX ICON  -->
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="./assets/fontawesome-free-5.15.4-web/css/all.min.css">
    <link rel="stylesheet" href="./themify-icons/themify-icons.css">
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</head>

<body>
    <div class="main">
        <div class="header">
            <div class="navbar-inner">
                <div class="navbar-logo">
                    <a href="">
                        <img src="./img/logo-default.png" alt="">
                    </a>
                </div>
                <div class="navbar-menu">
                    <ul>
                        <li><a href="{{route('homepage')}}" class="active">Home</a></li>
                        <li><a href="{{route('danhmuc')}}">Catalog</a></li>
                        <li><a href="{{route('theloai')}}">Genre</a></li>
                        <li><a href="{{route('quocgia')}}">Country</a></li>
                        <li><a href="">Page</a></li>
                        <li><a href="{{route('profilepage')}}">Contact Us</a></li>
                    </ul>
                </div>
            </div>

        </div>
        <div class="all-content">
            @yield('content')
        </div>
        <div class="footer">
            <div class="container">
                <div class="footer-content">
                    <img src="./img/logo-default.png" alt="">
                    <ul class="list-inline">
                        <li>
                            <i class="fa fa-facebook" aria-hidden="true"></i>
                            <i class="fa fa-twitter" aria-hidden="true"></i>
                            <i class="fa fa-pinterest-p" aria-hidden="true"></i>
                            <i class="fa fa-vimeo" aria-hidden="true"></i>
                            <i class="fa fa-google" aria-hidden="true"></i>
                            <i class="fa fa-rss" aria-hidden="true"></i>
                        </li>
                    </ul>
                </div>
                <p class="right">© 2021 All Rights Reserved. Terms of Use.</p>
            </div>
        </div>
    </div>
</body>

</html>
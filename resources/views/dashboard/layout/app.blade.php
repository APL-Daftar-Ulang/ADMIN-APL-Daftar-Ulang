<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Espire - HTML Doc</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="assets/images/logo/favicon.ico">

    <!-- page css -->

    <!-- Core css -->
    <link href="assets/css/app.min.css" rel="stylesheet">

</head>

<body>
    <div class="layout">
        <div class="vertical-layout">
           @include('dashboard.layout.sidebar')
            <!-- Side Nav END -->

            <!-- Content START -->
            <div class="content">
                <div class="main">
                    {{-- <div class="card mb-0">
                        <div class="card-body content-min-height">
                            <div class="container">
                                <div class="mx-auto my-5" style="max-width: 1000px;">
                                    <h2>Introduction</h2>
                                    <div style="line-height: 1.8;">
                                        <p class="lead mt-4"> 
                                            Espire is a responsive web app template for admin and user dashboards with pixel perfect stylish design and tons of useful features, 
                                            which able to choose the best dashboard solution to fit your project needs. 
                                            It is built with Boostrap 5 & includes highly customizable UI kit, Components, Charts and Applications for developers. 
                                        </p>
                                        <p class="lead">Currently you are viewing the HTML and JQuery version with Bootstrap 5. This part of the doc will help you to quickly start your project and will you a basic idea about how Espire HTML version work.</p>
                                    </div>
                                    <div class="mt-4">
                                        <p><strong class="text-dark">Author by: </strong> <a href="" target="blank">Theme_Nate</a></p>
                                        <p><strong class="text-dark">Support via Email: </strong> <a href="mailto:jiasheng_93@hotmail.com" target="blank">jiasheng_93@hotmail.com</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> --}}
                    @yield('content')
                </div>
                @include('dashboard.layout.footer')
            </div>
            <!-- Content END -->
        </div>
    </div>

    
    <!-- Core Vendors JS -->
    <script src="assets/js/vendors.min.js"></script>

    <!-- page js -->

    <!-- Core JS -->
    <script src="assets/js/app.min.js"></script>

</body>

</html>
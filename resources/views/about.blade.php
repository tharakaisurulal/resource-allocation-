<html>
 <head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width,initial-scale=1.0">

    @include('cdn')
	<title>ABOUT</title>

    <link rel="stylesheet" href={{asset('css/about.css')}}>

    <!---boxicons links-->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

    <!--remixicons link-->
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.5.0/fonts/remixicon.css" rel="stylesheet">

    <!-- scrollreveal effect-->
    <script src="https://unpkg.com/scrollreveal"></script>

    <!--custom js link --->


 </head>


<body>

    <header>

        <img src="images/logo_copy.png" class="logo">

        <div class="navlist">
            <a href="#">Home</a>
            <a href="#">Staff</a>
            <a href="#">Programs</a>
            <a href="#">Research</a>
            <a href="#">Services</a>
            <a href="#">contact</a>
            <a href="#">Log Out</a>
        </div>

        <div class="bx bx-menu" id="menu-icon"></div>

    </header>

    <!---------slideshow Start------------------------------------------------------------>

    <div class="slide-container">

        <div class="slides">
            <img src="images/a1.jpg" class="active">
            <img src="images/b.jpg">
            <img src="images/c.jpg">
            <img src="images/p1.jpg">
            <img src="images/R3.jfif">
        </div>

        <div class="buttons">
            <span class="next">&#10095;</span>
            <span class="prev">&#10094;</span>
        </div>

        <div class="dotsContainer">
            <div class="dot active" attr="0"></div>
            <div class="dot" attr="1"></div>
            <div class="dot" attr="2"></div>
            <div class="dot" attr="3"></div>
            <div class="dot" attr="4"></div>
        </div>

    </div>





</body>

</html>

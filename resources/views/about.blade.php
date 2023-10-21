@extends('layout.headerFooter')
@section('content2')
       <li><a href="/">Home</a></li>
       <li><a href="#">Staff</a></li>
       <li><a href="#">Programs</a></li>
       <li><a href="#">Research</a></li>
       <li><a href="#">Services</a></li>
       <li><a href="#">contact</a></li>
       <li><a href="#">Log Out</a></li>
@endsection

@section('content')
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


<body class="body1">
    <div class="main">
    <!---------slideshow Start------------------------------------------------------------>

    <div class="slide-container">

        <div class="slides">
            <img src="/images/a1.jpg" class="active">
            <img src="/images/b.jpg">
            <img src="/images/c.jpg">
            <img src="/images/p1.jpg">
            <img src="/images/R4.jfif">
        </div>

        <div class="buttons">
            <span class="next">&#10095;</span>
            <span class="prev">&#10094;</span>
        </div>

        <div class="dotsContainer">
            <div class="dot active" attr="0" onclick="switchImage(this)"></div>
            <div class="dot" attr="1" onclick="switchImage(this)"></div>
            <div class="dot" attr="2" onclick="switchImage(this)"></div>
            <div class="dot" attr="3" onclick="switchImage(this)"></div>
            <div class="dot" attr="4" onclick="switchImage(this)"></div>
        </div>

    </div>
</div>

    <script>
        // Access the images
        let slideImages = document.querySelectorAll('img');
        //Access the next and prev buttons
        let next = document.querySelector('.next');
        let prev = document.querySelector('.prev');
        //Access the indicators
        let dots = document.querySelectorAll('.dot');

        var counter = 0;

        //code for next button
        next.addEventListener('click' , slideNext);
        function slideNext(){
        slideImages[counter].style.animation = 'next1 0.5s ease-in forwards';
        if(counter >= slideImages.length -1){
            counter = 0;
        }
        else{
            counter++;
        }
        slideImages[counter].style.animation = 'next2 0.5s ease-in forwards';
        indicators();
        }

        //code for prev button
        prev.addEventListener('click' , slidePrev);
        function slidePrev(){
        slideImages[counter].style.animation = 'prev1 0.5s ease-in forwards';
        if(counter == 0){
            counter = slideImages.length -1;
        }
        else{
            counter--;
        }
        slideImages[counter].style.animation = 'prev2 0.5s ease-in forwards';
        indicators();
        }

        // Auto slideing
        function autoSliding() {
            deletInterval = setInterval(timer, 4000);
            function timer(){
            slideNext();
            indicators();
        }
        }
        autoSliding();

        // stop auto sliding when mouse is over
        const container = document.querySelector('.slide-container');
        container.assEventListener('mouseover' , function(){
            clearInterval(deletInterval);
        });

        // Resume sliding when mouse is out
        container.addEventListener('mouseout', autoSliding);


        //Add and remove active class from the indicators
        function indicators(){
            for(i = 0; i < dots.length; i++){
                dots[i].className = dots[i].className.replace(' active','');
            }
            dots[counter].className += ' active';
        }

        //Add click event to the indicator
        function switchImage(currentImage){
            currentImage.classList.add('active');
            var imageId = currentImage.getAttribute('attr');
            if(imageId > counter){
                slideImages[counter].style.animation = 'next1 0.5s ease-in forwards';
                conter = imageId;
                slideImages[counter].style.animation = 'next2 0.5s ease-in forwards';
            }
            else if(imageId == counter){
                return;
            }
            else{
                slideImages[counter].style.animation = 'prev1 0.5s ease-in forwards';
                counter = imageId;
                slideImages[counter].style.animation = 'prev2 0.5s ease-in forwards';
            }
            indicators();
        }
    </script>



</body>
</html>
@endsection

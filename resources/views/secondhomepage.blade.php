<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
<link rel="stylesheet" type="text/css" href="{{asset('css/secondhome.css')}}"/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer"/>

</head>
<body class="b">
    <header>
        <div class="navbar">
            <div class ="logo">
                <img src="{{URL('image/u-ruhuna.png')}}"alt="">
            </div>
                <ul class="links">
                    <li><a href="hero">Home</a></li>
                    <li><a href="about_us">About us</a></li>
                    <li><a href="contact">Contact</a></li>
                    <li><a href="request">Request</a></li>
                </ul>
                <a href="#" class="action_btn">Get Started</a>
                <div class="toggle_btn">
                <i class="fa-solid fa-bars"></i>
                </div>  
        </div>
        <div class="dropdown_menu">
                    <li><a href="hero">Home</a></li>
                    <li><a href="about_us">About us</a></li>
                    <li><a href="contact">Contact</a></li>
                    <li><a href="request">Request</a></li>
                    <li><a href="#" class="action_btn">Get Started</a></li>
        </div>
    </header>
    <main>
    <section id="hero">
        <h1>Today Allocation</h1>
    </section>
    </main>

    <script>
        const toggleBtn = document.querySelector('.toggle_btn')
        const toggleBtnIcon = document.querySelector('.toggle_btn i')
        const dropDownMenu = document.querySelector('.dropdown_menu')

        toggleBtn.onclick = function(){
            dropDownMenu.classList.toggle('open')
            const isOpen = dropDownMenu.classList.contains('open')

            toggleBtnIcon.classList = isOpen
            ? 'fa-solid fa-xmark'
            : 'fa-solid fa-bars'
        }
    </script>
</body>
</html>
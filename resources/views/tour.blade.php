<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=K2D:ital,wght@0,100;0,500;0,600;0,700;1,400&family=Libre+Baskerville&family=Poppins&family=Work+Sans:ital,wght@0,400;1,200&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/css/style.css">
    <!-- Scripts -->
    <script src="https://kit.fontawesome.com/1ffcb73b4a.js" crossorigin="anonymous"></script>

    <title>Tour</title>
</head>
<body>
    <div class="parent_section tourParent">
        <section class="cover_section">
        <header>
            <nav>
                <a href="/">
                    <img width="70px" src="/assets/img/logo.svg" alt="Logo image">
                </a>
                <ul>
                    <li><a href="/">Home</a></li>
                    <li><a href="/tours">Tours</a></li>
                    <li><a href="/blog">Blog</a></li>
                    <li><a href="/contact">Contact</a></li>
                </ul>
            </nav>
        </header>
        <div class="flexBox flexSection">
            <div class="mainDesc">
                <h1>{{$tour->tourname}}</h1>
                <p>{{$tour->tourdescription}}</p>
                <h1>Price: <span>{{$tour->tourprice}} $</span></h1>
            </div>
            <img src="/storage/tour/{{$tour->image1}}" alt="">
        </div>
    </section>
    </div>
    <section>
        <div class="services">
            <div class="serviceCard">
                <i class="fa-solid fa-bus"></i>
                <h3>Transfer</h3>
            </div>
            <div class="serviceCard">
                <i class="fa-solid fa-bus"></i>
                <h3>Guide service</h3>
            </div>
            <div class="serviceCard">
                <i class="fa-solid fa-bus"></i>
                <h3>Hotel</h3>
            </div>
            <div class="serviceCard">
                <i class="fa-solid fa-bus"></i>
                <h3>Insurance</h3>
            </div>
        </div>
    </section>   




<footer>
        <div class="companyInfo">
            <a href="/">
                <img src="/assets/img/logo.svg" alt="Logo image">
            </a>
            <p> Felice travel , we are dedicated to turning travel dreams into reality. 
                We understand that each journey is a personal story waiting to be told, 
                and we are here to help you create chapters filled with discovery, joy, 
                and cultural enrichment.</p>
        </div>
        <nav>
            <ul>
                <a href="/"><li>Home</li></a>
                <a href="/tours"><li>Tours</li></a>
                <a href="/blog"><li id="active">Blog</li></a>
                <a href="/contact"><li>Contact</li></a>
            </ul>
        </nav>
        <div class="social">
            <p><i class="fa-solid fa-phone" style="color: #ffffff;"></i> 032 2 12 34 56</p>
            <li><a href="#"><i class="fa-brands fa-facebook" style="color: #ffffff;"></i></a></li>
            <li><a href="#"><i class="fa-brands fa-instagram" style="color: #ffffff;"></i></a></li>
            <li><a href="#"><i class="fa-brands fa-twitter" style="color: #ffffff;"></i></a></li>
        </div>
    </footer>
</body>


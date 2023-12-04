<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=K2D:ital,wght@0,100;0,500;0,600;0,700;1,400&family=Libre+Baskerville&family=Poppins&family=Work+Sans:ital,wght@0,400;1,200&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./css/style.css">
    <!-- Scripts -->
    <script src="https://kit.fontawesome.com/1ffcb73b4a.js" crossorigin="anonymous"></script>

    <title>Blog</title>
</head>
<body>
    <div class="parent_section tourParent">
        <section class="cover_section">
        <header>
            <nav>
                <a href="/">
                    <img width="70px" src="./assets/img/logo.svg" alt="Logo image">
                </a>
                <ul>
                    <li><a href="/">Home</a></li>
                    <li><a href="/tours">Tours</a></li>
                    <li><a id="active" href="/blog">Blog</a></li>
                    <li><a href="/contact">Contact</a></li>
                </ul>
            </nav>
        </header>
        <div class="flexBox flexSection">
            <div class="mainDesc">
                <h1>Exciting News: Elevating Your Travel Experience with 
                    Our New Fleet of Luxury Vehicles</h1>
                <p>At [Your Company Name], we are committed to providing you with unparalleled travel experiences, and we're thrilled to announce a significant enhancement to our services. We have just acquired a fleet of the world's best cars, top-of-the-line minivans, and stylish sedans from Volkswagen and other leading automotive brands.</p>
                <button>Start your tips <i class="fa-solid fa-arrow-right" style="color: rgb(31, 70, 118);"></i></button>
            </div>
            <img src="./assets/img/gomi.jpg" alt="">
        </div>
    </section>
    </div>    
    <section>
        <h3>Follow us and see news about Felice Travel:</h3>
        <h1>Our Blog Page</h1>
        <div class="blogFlex">
            @foreach($blogs as $bl)
            <div class="blogCard">
                <div>
                    <p><span>Date: </span> {{$bl->created_at}}</p>
                </div>
                <img src="storage/blog/{{$bl->blogimage}}" alt="Blog image #1">
                <h3>{{$bl->blogname}}</h3>
                <p>{{$bl->blogdescription}}</p>
            </div>
            <hr>
            @endforeach
        </div>
    </section>
    <footer>
        <div class="companyInfo">
            <a href="/">
                <img src="./assets/img/logo.svg" alt="Logo image">
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

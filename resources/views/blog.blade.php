<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="icon" type="image/x-icon" href="./assets/img/logo.svg">
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
                <div class="openMenu"><i class="fa fa-bars"></i></div>
                <ul class="mainMenu">
                    <li><a href="/">Home</a></li>
                    <li><a href="/tours">Tours</a></li>
                    <li><a id="active" href="/blog">Blog</a></li>
                    <li><a href="/contact">Contact</a></li>
                    <div class="closeMenu"><i class="fa fa-times"></i>
                </ul>
            </nav>
        </header>
        <div class="flexBox flexSection">
            <div class="mainDesc">
                <h1>Discover Felice Travel's Chronicles</h1>
                <p>Welcome to our blog, your go-to destination for a comprehensive look into our company's journey and the latest news. Dive into a wealth of information, from our company's origins and values to the exciting developments shaping our future. Stay informed about our latest projects, innovations, and industry insights. Explore the heart of our organization and discover the stories that define us.</p>
                <a href="/tours">
                    <button>Start your tips <i class="fa-solid fa-arrow-right" style="color: rgb(31, 70, 118);"></i></button>
                </a>
            </div>
            <img src="./assets/img/news.jpg" alt="">
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
    <script src="./js/index.js"></script>
</body>

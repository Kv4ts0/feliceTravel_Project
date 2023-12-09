<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=K2D:ital,wght@0,100;0,500;0,600;0,700;1,400&family=Libre+Baskerville&family=Poppins&family=Work+Sans:ital,wght@0,400;1,200&display=swap" rel="stylesheet">
    <link rel="icon" type="image/x-icon" href="./assets/img/logo.svg">
    <link rel="stylesheet" href="./css/style.css">
    <!-- Scripts -->
    <script src="https://kit.fontawesome.com/1ffcb73b4a.js" crossorigin="anonymous"></script>

    <title>Tours</title>
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
                <li><a id="active" href="/tours">Tours</a></li>
                <li><a href="/blog">Blog</a></li>
                <li><a href="/contact">Contact</a></li>
                <div class="closeMenu"><i class="fa fa-times"></i>
            </ul>
        </nav>
    </header>
    <div class="mainDesc">
        <h1>Initial Planning and Research</h1>
        <p>Welcome to [Your Company Name], where adventure meets comfort, and every journey is an opportunity 
            to create lasting memories. Our carefully curated tours promise an immersive experience, blending cultural enrichment, 
            breathtaking landscapes, and the joy of discovery. Join us on a journey of a lifetime!</p>
    </div>
    <div class="flexThree">
        <div class="stepsThree">
            <h3><span>01</span> - Expertly Crafted Itineraries:</h3>
            <hr />
            <p>Our team of experienced travel enthusiasts meticulously designs each itinerary, ensuring a perfect balance of adventure, relaxation, and cultural exploration.</p>
        </div>
        <div class="stepsThree">
            <h3><span>02</span> - Comfortable Accommodations:</h3>
            <hr />
            <p>Rest easy in handpicked accommodations that blend comfort and authenticity. From charming boutique hotels to luxury resorts, we prioritize your relaxation and enjoyment.</p>
        </div>
        <div class="stepsThree">
            <h3><span>03</span> - Small Group Dynamics:</h3>
            <hr />
            <p>Enjoy an intimate and personalized experience with our small group tours. </p>
        </div>
    </div>
</section>
</div>    
<section>
    <h3>Where to go:</h3>
    <h1 id="desired">Your desired destination</h1>
    <form action="{{ route('tourshome.all') }}">
        <input class="searchInput" type="text" name="tourname" value="{{$filters['tourname']}}" placeholder="Search">
    </form>
    <form action="{{ route('tourshome.all') }}">
    
    <div class="filter">
        <select name="locations" id="locations" value="Locations">
            <option value="" disabled selected hidden>Locations</option>
            <option value="Georgia">Georgia</option>
            <option value="saab">Saab</option>
        </select>
        <select name="day" id="day">
            <option value="" disabled selected hidden>Days</option>
            <option value="{{ implode(['day' => '1']) }}">1 Day</option>
            <option value="{{ implode(['day' => '2']) }}">2 Day</option>
            <option value="{{ implode(['day' => '3']) }}">3 Day</option>
            <option value="{{ implode(['day' => '4']) }}">4 Day</option>
            <option value="{{ implode(['day' => '5']) }}">5 Day</option>
            <option value="{{ implode(['day' => '6']) }}">6 Day</option>
            <option value="{{ implode(['day' => '7']) }}">7 Day</option>
            <option value="{{ implode(['day' => '8']) }}">8 Day</option>
            <option value="{{ implode(['day' => '9']) }}">9 Day</option>
            <option value="{{ implode(['day' => '10']) }}">10 Day</option>
            <option value="{{ implode(['day' => '11']) }}">11 Day</option>
            <option value="{{ implode(['day' => '12']) }}">12 Day</option>
            <option value="{{ implode(['day' => '13']) }}">13 Day</option>
        </select>
        
        <input type="number" name="min_price" value="{{ $filters['min_price'] }}" placeholder="Min Price" >
        <input type="number" name="max_price" value="{{ $filters['max_price'] }}" placeholder="Max Price" >
        <button class="btn btn-success" type="submit"><i class="fa-solid fa-filter"></i> Filter</button>
    </div>
    
    <div class="flexCards">
            @foreach($tours->take(4) as $tr)
            <div class="card">
            <a class="readButton" href="{{ route('tour',['id' => $tr->id]) }}">Read more</a>
                <h3>{{ $tr->tourname}}</h3>
                <hr />
                <p><i class="fa-solid fa-coins" style="color: #ffd43b;"></i> {{ $tr->tourprice}} $</p>
                <p id="adDesc">{{ $tr->locationone}}, {{ $tr->locationtwo}}</p>
                <img src="storage/tour/{{$tr->image1}}" alt="Card1 Image">
            </div>
            @endforeach
    </div>
    
    <div class="flexCards">
            @foreach($tours->skip(4)->take(5) as $tr)
            <div class="card">
            <a class="readButton" href="{{ route('tour',['id' => $tr->id]) }}">Read more</a>
                <h3>{{ $tr->tourname}}</h3>
                <hr />
                
                <p><i class="fa-solid fa-coins" style="color: #ffd43b;"></i> {{ $tr->tourprice}} $</p>
                <p id="adDesc">{{ $tr->locationone}}, {{ $tr->locationtwo}}</p>
                <img src="storage/tour/{{$tr->image1}}" alt="Card1 Image">
                
            </div>
            
            @endforeach
    </div>  
</section>

<section id="centeredSection">
    <h1>Our Gallery</h1>
    <div class="galleryTable">
        <div class="card">
            <h3>Mtatsminda</h3>
            <hr />
            <p>130 pictures of Mtatsminda</p>
            <img src="./assets/img/mtatsminda.jpg" alt="Card1 Image">
        </div>
        <div class="card b">
            <h3>Bakhmaro</h3>
            <hr />
            <p>90 pictures of Bakhmaro</p>
            <img src="./assets/img/bakhmaro.jpg" alt="Card1 Image">
        </div>
        <div class="card">
            <h3>Mestia</h3>
            <hr />
            <p>67 pictures of Mestia</p>
            <img src="./assets/img/mestia.jpg" alt="Card1 Image">
        </div>
        <div class="card">
            <h3>Old Tbilisi</h3>
            <hr />
            <p>56 pictures of Old Tbilisi</p>
            <img src="./assets/img/tbilisi.jpg" alt="Card1 Image">
        </div>
        <div class="card">
            <h3>Gomis mta</h3>
            <hr />
            <p>33 pictures of Gomis mta</p>
            <img src="./assets/img/gomi.jpg" alt="Card1 Image">
        </div>
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
            <a href="/tours"><li id="active">Tours</li></a>
            <a href="./blog.html"><li>Blog</li></a>
            <a href="./contact.html"><li>Contact</li></a>
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

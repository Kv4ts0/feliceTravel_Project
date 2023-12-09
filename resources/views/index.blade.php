<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=K2D:ital,wght@0,100;0,500;0,600;0,700;1,400&family=Libre+Baskerville&family=Poppins&family=Work+Sans:ital,wght@0,400;1,200&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="icon" type="image/x-icon" href="./assets/img/logo.svg">
    <!-- Scripts -->
    <script src="https://kit.fontawesome.com/1ffcb73b4a.js" crossorigin="anonymous"></script>
    <title>Home</title>
</head>
<body>
    <div class="parent_section">
        <section class="cover_section">
        <header>
            <nav>
                
                <a href="/">
                    <img width="70px" src="./assets/img/logo.svg" alt="Logo image">
                </a>
                <div class="openMenu"><i class="fa fa-bars"></i></div>
                <ul class="mainMenu">
                    <li><a id="active" href="/">Home</a></li>
                    <li><a href="/tours">Tours</a></li>
                    <li><a href="/blog">Blog</a></li>
                    <li><a href="/contact">Contact</a></li>
                    <div class="closeMenu"><i class="fa fa-times"></i>
                </ul>
            </nav>
        </header>
        <div class="mainDesc">
            <h1>Experience Unforgettable Journeys with Our Team!</h1>
            <p> Georgia is located on the crossroads of two continents Europe and Asia. Legendary Silk Road, layers of different cultures from great civilizations have been stored in this country, creating the unique and diverse identity. Following the Silk Road you get to know the mystery of the Ancient World. 
             
           </p>
            <a href="/tours">
            <button>Start your tips <i class="fa-solid fa-arrow-right" style="color: rgb(31, 70, 118);"></i></button>
            </a>
        </div>
        <div class="flexThree">
            <div class="stepsThree">
                <h3><span>01</span> - What we offer:</h3>
                <hr />
                <p>We offer full land service for VIP and business travel, tours for small and big groups, individual and family travel,  pilgrimage tours and tailor-made special programs.</p>
            </div>
            <div class="stepsThree">
                <h3><span>02</span> - Why us?</h3>
                <hr />
                <p> We organize incoming tours to Georgia, Georgia-Armenia and Georgia-Azerbaijan. Our services include guide and interpreter assistance, the arrangement of folklore shows and feast dinners, transfers and hotel reservations. </p>
            </div>
        
        </div>
    </section>
    </div>
    <section>
        <h3>Where to go:</h3>
        <h1>Popular Destinations</h1>
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
    </section>
    <section>
        <h1>Let's Start Your Journey</h1>
        <div class="flexBox">
            <div class="first_card">
                <div class="column">
                    <div>
                        <h3><i class="fa-brands fa-servicestack" style="color: #ffffff;"></i> Discover with Felice Travel: Exciting Journeys for Every Adventurer</h3>
                    <hr>
                    <p>Discover new horizons with Felice Travel. Whether you're a solo adventurer, a couple seeking a romantic escape, or a family ready for excitement, we have the perfect itinerary for you. Contact us today, and let the exploration begin!</p>
                    </div>
                    
                    <div class="childFlex">
                        <div>
                            <h3><i class="fa-solid fa-car" style="color: #ffffff;"></i> Book a car</h3>
                            <hr />
                            <p>Explore our diverse fleet of vehicles to find the perfect match for your journey. Whether you prefer sleek sedans for business trips, 
                                spacious cars for family adventures, or comfortable micro-buses, our modern transportation options 
                                are designed to complement your travels through the special landscapes and geographical wonders 
                                of Georgia.</p>
                        </div>
    
                        <div>
                            <h3><i class="fa-solid fa-bell-concierge" style="color: #ffffff;"></i> Book a hotel</h3>
                            <hr />
                            <p>Our service extends to curated hotel accommodations, featuring partnerships with popular companies in Georgia such as 
                                Tbilisi Inn, Kopala, and Just Inn. Prior to your stay, we attentively plan and organize your accommodation, 
                                ensuring a seamless and enjoyable experience during your travels.</p>
                        </div>
                    </div>
                </div>
                
            <img src="./assets/img/travel.jpg" alt="">

        </div>
    </section>
    <section>
        <div class="flexBox">

            <div class="first_card reverse">
                <img src="./assets/img/events.jpg" alt="">
                <div class="column">
                    <div class="childFlex">
                        <div>
                            <h3><i class="fa-solid fa-champagne-glasses" style="color: #ffffff;"></i> Corporative events</h3>
                            <hr />
                            <p>Beyond leisure travel, our services cater to corporate events for both local and international clients in Georgia. This includes facilitating business meetings for local companies, as well as tailoring events to meet unique preferences. Whether it's a conference, team-building retreat, or any corporate gathering, we ensure precision in planning and execution to make your corporate events memorable and successful.</p>
                        </div>
    
                        <div>
                            <h3><i class="fa-solid fa-crown" style="color: #ffffff;"></i> Wedding events</h3>
                            <hr />
                            <p>Celebrate your special day with our personalized wedding event services. From small ceremonies to grand celebrations, we ensure every aspect of your wedding reflects your unique style and love story.</p>
                        </div>
                    </div>
                    <div>
                        <h3><i class="fa-solid fa-notes-medical" style="color: #ffffff;"></i> Medical Tourism</h3>
                        <hr>
                        <p>Explore our medical tourism services, where we smoothly integrate tours with essential medical services during your trip. In Georgia, discover our Balneological Resorts, offering therapeutic experiences to enhance your well-being. Immerse yourself in the healing properties of these resorts, combining the benefits of travel with specialized medical care for a refreshing experience.</p>
                    </div>
                </div>
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
                <a id="active" href="/"><li>Home</li></a>
                <a href="/tours"><li>Tours</li></a>
                <a href="/blog"><li>Blog</li></a>
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
</html>
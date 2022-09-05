<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/85a1b29132.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="/assets/css/style.css">
    <link rel="stylesheet" href="/assets/css/grid.css">
    <title>Document</title>
</head>
<body>
    <!-- HEADER -->
    <header class="header" id="home">
        <nav class="navbar container">
            <a href="/index.html" class="logo">
                <img src="/assets/img/logo.svg" class="logo-image" alt="">
            </a>
            <button class="menu-toggler">
                <i class="fa-solid fa-bars toggle-icon open-menu-icon"></i>
                <i class="fa-solid fa-xmark toggle-icon close-menu-icon"></i>
            </button>
            <div class="collapsible-menu">
                <ul class="list">
                    <li class="list-item">
                        <a href="#home" class="list-link current-link">Home</a>
                    </li>
                    <li class="list-item">
                        <a href="#menu" class="list-link">Menu</a>
                    </li>
                    <li class="list-item">
                        <a href="#service" class="list-link">Service</a>
                    </li>
                    <li class="list-item">
                        <a href="#about" class="list-link">About</a>
                    </li>
                </ul>
                <div class="search-box">
                    <form action="" class="search-form">
                        <span class="form-icon search-icon">
                            <label for="search">
                                <lord-icon class="path"
                                    src="https://cdn.lordicon.com/pvbutfdk.json"
                                    trigger="hover"
                                    style="width:25px;height:25px">
                                </lord-icon>
                            </label>
                        </span>
                        <input type="text" id="search" class="search-input" placeholder="Search">
                        <button type="button" class="form-icon cart-icon">
                            <lord-icon class="path"
                                src="https://cdn.lordicon.com/webtefou.json"
                                trigger="hover"
                                style="width:25px;height:25px">
                            </lord-icon>
                        </button>
                    </form>
                </div>
            </div>
            
        </nav>
    </header>

    <!-- BANNER -->
    <div class="banner">
        <div class="img-content-group">
            <img src="/assets/img/realistic-pizza-ads-banner_52683-70643.webp" width="100%" alt="">
        </div>
    </div>

    <!-- PRODUCT -->
    <div class="section-category" id="menu">
        <div class="container">
            <div class="cate-list">
                @foreach ($categories as $category)
                    <div class="cate-item">
                        <a href="" class="cate-link">
                            <img class="cate-img" src="/assets/img/{{ $category->img }}"  alt="">
                            <p class="cate-title">{{ $category->name }}</p>
                        </a>
                    </div>
                @endforeach

            </div>

            <div class="product-list grid wide">
                <div class="row">
                    @foreach ($products as $product)
                        <div class="product-item col l-3 m-6 c-12">
                            <div class="product-img">
                                <a href="" >
                                    <img src="/assets/img/{{ $product->img }}"  alt="">
                                </a>
                            </div>
                            <div class="product-detail">
                                <div class="name">
                                    <a href="" class="custom-name-child">{{ $product->name }}</a>
                                </div>
                                <div class="description">
                                    <p>{{ $product->title }}</p>
                                </div>
                                <div class="bottom">
                                    <div class="price">
                                        <p class="overrideheader">
                                            <span>Giá chỉ từ: <b> {{ number_format($product->price, 3) }} đ</b></span>
                                        </p>
                                    </div>
                                    <div class="buy-icon">
                                        <a href="" class="btn-buy">
                                            <lord-icon class="path"
                                                src="https://cdn.lordicon.com/webtefou.json"
                                                trigger="hover"
                                                style="width:25px;height:25px">
                                            </lord-icon>    
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>


        </div>
    </div>

    <!-- WHAT WE SERVE -->
    <div class="what-we-serve" id="service">
        <div class="container">
            <div class="section-metadata">
                <span class="section-tagline">What we serve</span>
                <h2 class="title section-title">Fruit and vegetables delivered to your home</h2>
            </div>
            <div class="card-group">
            
                <div class="card">
                    <header class="card-header">
                        <img src="/assets/img/service-ic1.svg" alt="Free shipping icon">
                    </header>
                    <div class="card-body">
                        <h3 class="title card-title">Free shipping</h3>
                        <p>We deliver face to face to ensure the freshness of our groceries.</p>
                    </div>
                </div>
                <div class="card">
                    <header class="card-header">
                        <img src="/assets/img/service-ic2.svg" alt="Free shipping icon">
                    </header>
                    <div class="card-body">
                        <h3 class="title card-title">15 days return</h3>
                        <p>Customer satisfaction is our priority. We offer a 15 day return period.</p>
                    </div>
                </div>
                <div class="card">
                    <header class="card-header">
                        <img src="/assets/img/service-ic3.svg" alt="Free shipping icon">
                    </header>
                    <div class="card-body">
                        <h3 class="title card-title">Secure checkout</h3>
                        <p>Customer security is very important to us. We offer state of the art encryption.</p>
                    </div>
                
                </div>
                
            </div>
        </div>
    </div>

    <!-- FOOTER -->
    <footer id="footer">
        <div class="container">
            <div class="footer-top-data">
                <div class="company-data">
                    <a href="/index.html" class="logo">
                        <img src="/assets/img/logo.svg" alt="" class="logo-image">
                    </a>
                    <p class="company-description">
                        The fastest grocery delivery service. We are available all over the world with multiple offices in over 100 cities.
                    </p>
                </div>

                <div class="footer-group">
                    <h6 class="title footer-title">Company</h6>
                    <ul class="list">
                        <li class="list-item">
                            <a href="#" class="list-link">About us</a>
                        </li>
                        <li class="list-item">
                            <a href="#" class="list-link">Blog</a>
                        </li>
                        <li class="list-item">
                            <a href="#" class="list-link">Products</a>
                        </li>
                        <li class="list-item">
                            <a href="#" class="list-link">Careers</a>
                        </li>
                    </ul>
                </div>

                <div class="footer-group">
                    <h6 class="title footer-title">Services</h6>
                    <ul class="list">
                        <li class="list-item">
                            <a href="#" class="list-link">Order tracking</a>
                        </li>
                        <li class="list-item">
                            <a href="#" class="list-link">Wishlist</a>
                        </li>
                        <li class="list-item">
                            <a href="#" class="list-link">My account</a>
                        </li>
                        <li class="list-item">
                            <a href="#" class="list-link">Terms & conditions</a>
                        </li>
                    </ul>
                </div>

                <div class="footer-group">
                    <h6 class="title footer-title">Get in touch</h6>
                    <ul class="list">
                        <li class="list-item">
                            <a href="#" class="list-link">Careers</a>
                        </li>
                        <li class="list-item">
                            <a href="#" class="list-link">About Microsoft</a>
                        </li>
                        <li class="list-item">
                            <a href="#" class="list-link">Company news</a>
                        </li>
                        <li class="list-item">
                            <a href="#" class="list-link">Privacy at Microsoft</a>
                        </li>
                    </ul>
                </div>
            </div>

            <hr class="horizontal-line">

            <div class="footer-bottom-data">
                <span class="copyright-information">&copy;BESNIK 2022. All Rights Reserved.</span>
                <div class="legal-information">
                    <a href="#">Terms & Conditions</a>
                    <a href="#">Privacy policy</a>
                </div>
            </div>
        </div>
    </footer>



        

    


    <script src="/assets/script/app.js"></script>
    <script src="https://cdn.lordicon.com/xdjxvujz.js"></script>

</body>
</html>
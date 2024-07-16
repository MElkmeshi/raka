<!-- /*
* Template Name: Property
* Template Author: Untree.co
* Template URI: https://untree.co/
* License: https://creativecommons.org/licenses/by/3.0/
*/ -->
<!DOCTYPE html>
<html lang="ar" >
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="author" content="Untree.co" />
    <link rel="shortcut icon" href="favicon.png" />

    <meta name="description" content="" />
    <meta name="keywords" content="bootstrap, bootstrap5" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Tajawal:wght@200;300;400;500;700;800;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="fonts/icomoon/style.css" />
    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css" />

    <link rel="stylesheet" href="css/tiny-slider.css" />
    <link rel="stylesheet" href="css/aos.css" />
    <link rel="stylesheet" href="css/style.css" />

    <title>
      رخاء  
    </title>
  </head>
  <body class="tajawal-bold">
    <style>
     .site-nav {
  box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
}

.site-nav .site-menu li a {
  color: #fff;
  padding: 10px 15px;
  transition: all 0.3s ease;
}

.site-nav .site-menu li a:hover, 
.site-nav .site-menu li.active a {
  background-color: #035f58;
  border-radius: 5px;
}

.burger span {
  background-color: #fff;
}

.burger:hover span {
  background-color: #ddd;
}

.menu-bg-wrap {
  border-radius: 5px;
}

.site-logo img {
  max-height: 50px;
}

.login-button {
  margin-right: 20px; /* تحريك الزر قليلاً نحو اليمين */
}

.login-button .btn {
  color: #fff;
  background-color: #035f58;
  border: none;
  transition: background-color 0.3s ease;
}

.login-button .btn:hover {
  background-color: #024f47;
}


.section-title {
  font-size: 2rem;
  font-weight: bold;
  color: #04786e;
}

.image-container {
  position: relative;
}

.image-container img {
  width: 100%;
  height: auto;
  display: block;
}

.overlay2 {
  position: absolute;
  top: 0;
  bottom: 0;
  left: 0;
  right: 0;
  height: 100%;
  width: 100%;
  opacity: 0;
  transition: .5s ease;
  background-color: rgba(4, 120, 110, 0.7); /* لون الخلفية عند التأشير */
  display: flex;
  justify-content: center;
  align-items: center;
}

.image-container:hover .overlay {
  opacity: 1;
}

.text {
  color: white;
  font-size: 1.5rem;
  font-weight: bold;
  text-align: center;
}
.fixed-size {
    width: 100%;
    height: 400px; /* أو أي ارتفاع ترغب فيه */
    object-fit: cover;
}

.carousel {
    transition: transform 0.3ms ease-in; /* تحسين السلاسة */
}

.carousel-inner {
    overflow: hidden;
    border-radius: 25px /* منع الفراغ بين الصور */
}

.carousel-item {
    transition: transform 0.5s ease-in-out; /* تحسين الانتقالات */
}

.carousel-control-prev-icon,
.carousel-control-next-icon {
    background-color: rgba(0, 0, 0, 0.5); /* تحسين ظهور الأيقونات */
    border-radius: 50%;
    padding: 10px;
}
    .tajawal-extralight {
      font-family: "Tajawal", sans-serif;
      font-weight: 200;
      font-style: normal;
    }
    
    .tajawal-light {
      font-family: "Tajawal", sans-serif;
      font-weight: 300;
      font-style: normal;
    }
    
    .tajawal-regular {
      font-family: "Tajawal", sans-serif;
      font-weight: 400;
      font-style: normal;
    }
    
    .tajawal-medium {
      font-family: "Tajawal", sans-serif;
      font-weight: 500;
      font-style: normal;
    }
    
    .tajawal-bold {
      font-family: "Tajawal", sans-serif;
      font-weight: 700;
      font-style: normal;
    }
    
    .tajawal-extrabold {
      font-family: "Tajawal", sans-serif;
      font-weight: 800;
      font-style: normal;
    }
    
    .tajawal-black {
      font-family: "Tajawal", sans-serif;
      font-weight: 900;
      font-style: normal;
    }
    .site-navigation {
      display: flex;
      justify-content: center; /* لتوسيط العناصر أفقياً */
      align-items: center; /* لتوسيط العناصر عمودياً */
      width: 100%;
    }
    
    .site-navigation .logo {
      margin-right: auto; /* يدفع الشعار إلى اليسار */
    }
    
    .site-navigation .site-menu {
      flex-grow: 1; /* تأكد من أن القائمة تستفيد من المساحة المتاحة */
    }
    
    .site-navigation .burger {
      margin-left: auto; /* يدفع الأيقونة إلى اليمين */
    }
        .custom-form-container .form-control {
            height: 38px; /* لتصغير حجم الحقول */
        }
        .custom-form-container .btn {
            height: 38px; /* لتصغير حجم الزر */
            width: 38px; /* لجعل الزر دائريًا */
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .custom-form-container .divider {
            margin: 0 10px;
            font-weight: bold;
        }
      .heading2 {
        font-family: 'Tajawal', sans-serif;
        font-size: 30px;
        font-weight: 300;
        line-height: 1.5;
        color: #000000;
        margin-top: 100px;
      }
      .custom-form-container {
        padding: 1rem;
      }
      .divider {
        display: none;
      }
      @media (min-width: 768px) {
        .divider {
          display: inline-block;
        }
      }
      .form-label {
        font-family: 'Tajawal', sans-serif;
      }
      .custom-form-container .rounded-pill {
        padding: 1rem;
      }
    </style>

    <div class="site-mobile-menu site-navbar-target">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close">
          <span class="icofont-close js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div>
    <nav class="site-nav" dir="rtl">
      <div class="container">
        <div class="menu-bg-wrap" style="background-color: #04786e;">
          <div class="site-navigation d-flex justify-content-between align-items-center">
            <div class="site-logo">
              <a href="index.html"><img src="raka3.png" alt="Logo" style="max-height: 65px;"></a>
            </div>
            <div class="justify-content-center align-items-center site-menu tajawal-bold">
              <ul class="js-clone-nav d-none d-lg-inline-block text-center site-menu d-flex">
                <li class="active"><a href="{{route('main')}}">الرئيسية</a></li>
                <li ><a href="{{route('explore')}}">استكشف</a></li>
                <li><a href="services.html">تواصل معنا</a></li>
                <li><a href="login.html">من نحن</a></li>
              </ul>
            </div>
            <div class="login-button d-none d-lg-inline-block tajawal-bold mr-3">
              <a href="login.html" class="btn btn-primary">تسجيل الدخول</a>
            </div>
            <a href="#" class="burger light mt-1 site-menu-toggle js-menu-toggle d-inline-block d-lg-none" data-toggle="collapse" data-target="#main-navbar">
              <span></span>
            </a>
          </div>
        </div>
      </div>
    </nav>
    
    <section class="hero">
    <div class="hero">
      <div class="hero-slide">
        <div
          class="img overlay"
          style="background-image: url('images/678.jpg')"
        ></div>
        <div
          class="img overlay"
          style="background-image: url('images/965.jpg')"
        ></div>
        <div
          class="img overlay"
          style="background-image: url('images/456.jpg')"
        ></div>
      </div>    
      <div class="container">
        <div class="row justify-content-center align-items-center">
          <div class="col-lg-9 text-center">
            <h1 class="heading tajawal-bold" data-aos="fade-up">
              وجهتك المثالية للراحة والرفاهية تنتظرك هنا
            </h1>
            <div class="container mt-5 custom-form-container">
              <div class="bg-white p-3 rounded-pill shadow-sm d-flex justify-content-between align-items-center flex-column flex-md-row flex-md-row-reverse">
                <div class="d-flex flex-column ms-3">
                  <label for="guests" class="form-label mb-0">الضيوف</label>
                  <select id="guests" class="form-control border-0">
                    <option value="" disabled selected>عدد الضيوف</option>
                    <option value="1">1 ضيف</option>
                    <option value="2">2 ضيفين</option>
                    <option value="3">3 ضيوف</option>
                    <option value="4">4 ضيوف</option>
                    <option value="5">5 ضيوف</option>
                    <!-- أضف المزيد من الخيارات حسب الحاجة -->
                  </select>
                </div>
                <span class="divider">|</span>
                <div class="d-flex flex-column ms-3">
                  <label for="check-in" class="form-label mb-0">تسجيل الدخول</label>
                  <input type="date" id="check-in" class="form-control border-0" />
                </div>
                
                <span class="divider">|</span>
                <div class="d-flex flex-column ms-3">
                  <label for="check-out" class="form-label mb-0">تسجيل الخروج</label>
                  <input type="date" id="check-out" class="form-control border-0" />
                </div>
                <span class="divider">|</span>
                <div class="d-flex flex-column ms-3">
                  <label for="location" class="form-label mb-0">الموقع</label>
                  <select id="location" class="form-control border-0">
                    <option value="" disabled selected>إلى أين تذهب؟</option>
                    <option value="city1">مدينة 1</option>
                    <option value="city2">مدينة 2</option>
                    <option value="city3">مدينة 3</option>
                  </select>
                </div>
                <div class="mt-3 mt-md-0">
                  <button type="submit" style=" background-color:#04786e;" class="btn btn-primary rounded-circle p-3 ms-3 d-flex align-items-center justify-content-center rounded-pill"><i class="fas fa-arrow-left"></i></button>
                </div>
              </div>
            </div>
            
          </div>
        </div>
      </div>
    </div>
    </section>
    <section class="section" dir="rtl">
    <div class="section" dir="rtl">
      <div class="container">
        <div class="row">
          <div class="col-12 text-center mb-5">
            <h2 class="section-title tajawal-bold">أبرز المناطق  لدينا</h2>
          </div>
        </div>
        <div class="row">
            @foreach ($municipalities as $municipality) 
          <div class="col-md-4 mb-4">
            <div class="card border-0">
              <div class="image-container max-w-100 " >
                <img src="{{asset('municipalities/' .$municipality->image)}}" class="card-img-top image shadow img-fluid img-responsive" alt="منطقة 1" />
                <div class="overlay2 overlay">
                  <div class="text tajawal-bold">{{$municipality->name}}</div>
                </div>
              </div>
            </div>
          </div>
        
          @endforeach
        
        </div>
      </div>
    </div>
  </section>

  <section class="section bg-light" dir="rtl">
   <div class="section " >
      <div class="container">
        <div class="row mb-5 align-items-center">
           <div class="col-12 text-center mb-5">
            <h2 class="section-title tajawal-bold">احدث الشاليهات  لدينا</h2>
          </div>
          <div class="col-lg-6 text-lg-end">
          </div>
        </div>
        <div class="row" dir="rtl" >
            @foreach ($chalets as $chalet)
            <div class="col-lg-4" data-aos="fade-up" data-aos-delay="300" dir="rtl">
                <div class="property-item" dir="rtl">
                    <div id="carousel{{ $chalet->id }}" class="carousel slide" data-bs-ride="carousel">
                      <script>
                        $(document).ready(function(){
                            $('#carouselExample').carousel();
                        });
                    </script>                    
                        <div class="carousel-inner">
                            @foreach ($chalet->category->categoryAttach as $categoryAttach)
                                <div class="carousel-item {{$loop->first ? 'active' :''}}">
                                    <a href="property-single.html" class="img">
                                        <img src="{{ asset('images/' . $categoryAttach->path) }}" alt="Image" class="img-fluid fixed-size">
                                    </a>
                                </div>
                            @endforeach
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carousel{{ $chalet->id }}" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carousel{{ $chalet->id }}" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                    <div class="property-content">
                        <div class="price mb-2"><span>${{ $chalet->category->price }}</span></div>
                        <div>
                            <span class="d-block mb-2 text-black-50">{{ $chalet->category->description }}</span>
                            <span class="city d-block mb-3">{{ $chalet->category->resort->name }}</span>
                            <div class="specs d-flex mb-4">
                                <span class="d-block d-flex align-items-center me-3 px-3">
                                    <span class="caption">{{ $chalet->category->rooms_count }} غرف</span>
                                    <span class="icon-bed me-2"></span>
                                </span>
                                <span class="d-block d-flex align-items-center px-3">
                                    <span class="caption">{{ $chalet->category->bathroom_count }} دورة مياه</span>
                                    <span class="icon-bath me-2"></span>
                                </span>
                                <span class="d-block d-flex align-items-center px-3">
                                    <span class="caption">{{ $chalet->category->capacity }} اشخاص</span>
                                    <span class="icon-person me-2"></span>
                                </span>
                            </div>
                            <a href="{{route('chaletshow', $chalet->id)}}" class="btn btn-primary py-2 px-3">التفاصيل</a>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
        
        </div>
      </div>
      </div>
    </div>
  </section>

  <section class="section section-3" dir="rtl">
    <div class="section section-4 bg-light" dir="rtl">
      <div class="container">
        <div class="row justify-content-center text-center mb-5">
          <div class="col-lg-5">
            <h2 class="font-weight-bold heading text-primary mb-4 tajawal-bold">
              "منصة رخاء - راحتك تبدأ هنا"
            </h2>
            <p class="text-black-50 tajawal-medium mb-0 text-center ">
              "مرحبًا بك في منصتنا، وجهتك الأولى للبحث عن أفضل المنتجعات والشاليهات في مختلف المناطق. نسعى لتوفير تجربة بحث مريحة وسلسة تمكنك من العثور على المكان المثالي لقضاء عطلتك. استمتع بأفضل العروض والتخفيضات على مجموعة متنوعة من الخيارات الفاخرة التي تناسب جميع الأذواق والميزانيات."
            </p>
          </div>
        </div>
        <div class="row justify-content-between mb-5">
          <div class="col-lg-7 mb-5 mb-lg-0 order-lg-2">
            <div class="img-about dots">
              <img src="images/hero_bg_3.jpg" alt="Image" class="img-fluid" />
            </div>
          </div>
          <div class="col-lg-4">
            <div class="d-flex feature-h">
              <span class="wrap-icon me-3">
                <span class="icon-home2"></span>
              </span>
              <div class="feature-text">
                <h3 class="heading p-3 mb-2 tajawal-bold"> دليلك الشامل لأفضل المنتجعات والشاليهات</h3>
                <p class="text-black-50 mb-5 tajawal-medium">
                  في منصتنا، نؤمن بأن عطلتك تستحق أفضل مكان للإقامة. نقدم لك مجموعة مختارة بعناية من المنتجعات والشاليهات التي توفر لك تجربة إقامة لا تُنسى. 
                </p>
              </div>
            </div>

            <div class="d-flex feature-h mt-5">
              <span class="wrap-icon me-3">
                <span class="icon-person"></span>
              </span>
              <div class="feature-text">
                <h3 class="heading p-3 mb-2 tajawal-bold ">منصة لأفضل الشاليهات</h3>
                <p class="text-black-50 mb-5 tajawal-medium">
                  الوجهة المثالية للبحث عن الشاليهات والمنتجعات. نهدف إلى توفير تجربة بحث سلسة تمكنك من العثور على أفضل الأماكن للإقامة. 
                </p>
              </div>
            </div>

           
          </div>
        </div>
        <div class="row section-counter mt-5">
          <div
            class="col-6 col-sm-6 col-md-6 col-lg-3"
            data-aos="fade-up"
            data-aos-delay="300"
          >
            <div class="counter-wrap mb-5 mb-lg-0">
              <span class="number"
                ><span class="countup text-primary">{{$chaleh}}</span></span
              >
              <span class="caption text-black-50">عدد الشاليهات</span>
            </div>
          </div>
          <div
            class="col-6 col-sm-6 col-md-6 col-lg-3"
            data-aos="fade-up"
            data-aos-delay="400"
          >
            <div class="counter-wrap mb-5 mb-lg-0">
              <span class="number"
                ><span class="countup text-primary">{{$reso}}</span></span
              >
              <span class="caption text-black-50">عدد المنتجعات</span>
            </div>
          </div>
          <div
            class="col-6 col-sm-6 col-md-6 col-lg-3"
            data-aos="fade-up"
            data-aos-delay="500"
          >
            <div class="counter-wrap mb-5 mb-lg-0">
              <span class="number"
                ><span class="countup text-primary">{{$munic}}</span></span
              >
              <span class="caption text-black-50">عدد المناطق التي نغطيها</span>
            </div>
          </div>
          <div
            class="col-6 col-sm-6 col-md-6 col-lg-3"
            data-aos="fade-up"
            data-aos-delay="600"
          >
            <div class="counter-wrap mb-5 mb-lg-0">
              <span class="number"
                ><span class="countup text-primary">{{$guests}}</span></span
              >
              <span class="caption text-black-50">الزبائن</span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
    <!-- SECTION 5 -->
   
    <section class="section bg-light" dir="rtl">
    <div class="section section-5 bg-light">
      <div class="container">
        <div class="row justify-content-center text-center mb-5">
          <div class="col-lg-6 mb-5">
            <h2 class="font-weight-bold heading text-primary mb-4">
              ابرز المنتجعات لدينا
            </h2>
            <p class="text-black-50">
              لدينا العديد من المنتجعات الرخاء الخاصة بنا.
            </p>
          </div>
        </div>
        <div class="row">
          @foreach ($resorts as $resort)
              <div class="col-sm-6 col-md-6 col-lg-4 mb-5 mb-lg-0">
                  <a href="{{ route('resortswithChaleh', $resort->id) }}" class="text-decoration-none text-dark">
                      <div class="h-100 person">
                          <img
                              src="{{ asset('resorts/' . $resort->image) }}"
                              alt="Image"
                              class="img-fluid mb-0"
                          />
                          <div class="person-contents">
                              <h2 class="mb-0 tajawal-bold">{{ $resort->name }}</h2>
                              <p>{{ $resort->description }}</p>
                              <ul class="social list-unstyled list-inline dark-hover">
                                  <li class="list-inline-item">
                                      <a href="#"><span class="icon-twitter"></span></a>
                                  </li>
                                  <li class="list-inline-item">
                                      <a href="#"><span class="icon-facebook"></span></a>
                                  </li>
                                  <li class="list-inline-item">
                                      <a href="#"><span class="icon-linkedin"></span></a>
                                  </li>
                                  <li class="list-inline-item">
                                      <a href="#"><span class="icon-instagram"></span></a>
                                  </li>
                              </ul>
                          </div>
                      </div>
                  </a>
              </div>
          @endforeach
      </div>
      
      </div>
    </div>
    </section>
    <div class="section" dir="rtl">
      <div class="row justify-content-center footer-cta" data-aos="fade-up">
        <div class="col-lg-7 mx-auto text-center">
          <h2 class="mb-4 tajawal-bold">"منصة رخاء - راحتك تبدأ هنا"</h2>
          <p>
            <a
              href="{{ route('explore') }}"
              target="_blank"
              class="btn btn-primary text-white py-3 px-4"
              >استكشف</a
            >
          </p>
        </div>
        <!-- /.col-lg-7 -->
      </div>
      <!-- /.row -->
    </div>
    <div class="site-footer">
      <div class="container">
        <div class="row">
          <div class="col-lg-4">
            <div class="widget">
              <h3>Contact</h3>
              <address>43 Raymouth Rd. Baltemoer, London 3910</address>
              <ul class="list-unstyled links">
                <li><a href="tel://11234567890">+1(123)-456-7890</a></li>
                <li><a href="tel://11234567890">+1(123)-456-7890</a></li>
                <li>
                  <a href="mailto:info@mydomain.com">info@mydomain.com</a>
                </li>
              </ul>
            </div>
            <!-- /.widget -->
          </div>
          <!-- /.col-lg-4 -->
          <div class="col-lg-4">
            <div class="widget">
              <h3>Sources</h3>
              <ul class="list-unstyled float-start links">
                <li><a href="#">About us</a></li>
                <li><a href="#">Services</a></li>
                <li><a href="#">Vision</a></li>
                <li><a href="#">Mission</a></li>
                <li><a href="#">Terms</a></li>
                <li><a href="#">Privacy</a></li>
              </ul>
              <ul class="list-unstyled float-start links">
                <li><a href="#">Partners</a></li>
                <li><a href="#">Business</a></li>
                <li><a href="#">Careers</a></li>
                <li><a href="#">Blog</a></li>
                <li><a href="#">FAQ</a></li>
                <li><a href="#">Creative</a></li>
              </ul>
            </div>
            <!-- /.widget -->
          </div>
          <!-- /.col-lg-4 -->
          <div class="col-lg-4">
            <div class="widget">
              <h3>Links</h3>
              <ul class="list-unstyled links">
                <li><a href="#">Our Vision</a></li>
                <li><a href="#">About us</a></li>
                <li><a href="#">Contact us</a></li>
              </ul>

              <ul class="list-unstyled social">
                <li>
                  <a href="#"><span class="icon-instagram"></span></a>
                </li>
                <li>
                  <a href="#"><span class="icon-twitter"></span></a>
                </li>
                <li>
                  <a href="#"><span class="icon-facebook"></span></a>
                </li>
                <li>
                  <a href="#"><span class="icon-linkedin"></span></a>
                </li>
                <li>
                  <a href="#"><span class="icon-pinterest"></span></a>
                </li>
                <li>
                  <a href="#"><span class="icon-dribbble"></span></a>
                </li>
              </ul>
            </div>
            <!-- /.widget -->
          </div>
          <!-- /.col-lg-4 -->
        </div>
        <!-- /.row -->

        <div class="row mt-5">
          <div class="col-12 text-center">
            <!-- 
              **==========
              NOTE: 
              Please don't remove this copyright link unless you buy the license here https://untree.co/license/  
              **==========
            -->

            <p>
              Copyright &copy;
              <script>
                document.write(new Date().getFullYear());
              </script>
              . All Rights Reserved. &mdash; Designed with love by
              <a href="https://untree.co">Untree.co</a>
              <!-- License information: https://untree.co/license/ -->
            </p>
            <div>
              Distributed by
              <a href="https://themewagon.com/" target="_blank">themewagon</a>
            </div>
          </div>
        </div>
      </div>
      <!-- /.container -->
    </div>
    <!-- /.site-footer -->

    <!-- Preloader -->
    <div id="overlayer"></div>
    <div class="loader">
      <div class="spinner-border" role="status">
        <span class="visually-hidden">Loading...</span>
      </div>
    </div>

    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/tiny-slider.js"></script>
    <script src="js/aos.js"></script>
    <script src="js/navbar.js"></script>
    <script src="js/counter.js"></script>
    <script src="js/custom.js"></script>
    <script src="/assets/js/plugins/flatpickr.min.js"></script>
  </body>
</html>

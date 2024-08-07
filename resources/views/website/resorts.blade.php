<!DOCTYPE html>
<html lang="ar">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="author" content="Untree.co" />
    <link rel="shortcut icon" href="favicon.png" />

    <meta name="description" content="" />
    <meta name="keywords" content="bootstrap, bootstrap5" />

    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Tajawal:wght@200;300;400;500;700;800;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link
      href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@400;500;600;700&display=swap"
      rel="stylesheet"
    />

    <link rel="stylesheet" href="/fonts/icomoon/style.css" />
    <link rel="stylesheet" href="/fonts/flaticon/font/flaticon.css" />

    <link rel="stylesheet" href="/css/tiny-slider.css" />
    <link rel="stylesheet" href="/css/aos.css" />
    <link rel="stylesheet" href="/css/style.css" />

    <title>عقارات &mdash; قالب موقع مجاني بتقنية Bootstrap 5 من Untree.co</title>
  </head>
  <body class="tajawal-bold" style="direction: rtl;">
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
      <div class="site-mobile-menu-body tajawal-bold"></div>
    </div>
    <nav class="site-nav tajawal-bold" dir="rtl">
      <div class="container">
        <div class="menu-bg-wrap" style="background-color: #04786e;">
          <div class="site-navigation d-flex justify-content-between align-items-center">
            <div class="site-logo">
              <a href="index.html"><img src="/raka3.png" alt="Logo" style="max-height: 65px;"></a>
            </div>
            <div class="justify-content-center align-items-center site-menu tajawal-bold">
              <ul class="js-clone-nav d-none d-lg-inline-block text-center site-menu d-flex">
                <li ><a href="{{ route('main')}}">الرئيسية</a></li>
                <li  class=""><a href="{{ route('explore')}}">استكشف</a></li>
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

    <div
      class="hero page-inner overlay"
      style="background-image: url('/images/123.jpg')"
    >
      <div class="container">
        <div class="row justify-content-center align-items-center">
          <div class="col-lg-9 text-center mt-5">
            <h1 class="heading tajawal-bold" data-aos="fade-up"> {{$resort->name}}</h1>
            <nav
              aria-label="breadcrumb"
              data-aos="fade-up"
              data-aos-delay="200">
              <ol class="breadcrumb text-center justify-content-center py-1">
                <li class="breadcrumb-item text-white text-white-50 active"><a href="{{ route('main') }}">الرئيسية</a></li>
                <li
                  class=" active text-white-50" aria-current="page"> / {{$resort->name}}</li>
                </li>
              </ol>
            </nav>
          </div>
        </div>
      </div>
    </div>
    <style>
         .filter-section {
            display: flex;
            justify-content: center;
            margin-bottom: 20px;
        }
        .filter-buttons {
            display: flex;
            flex-wrap: wrap;
        }
        .btn-category {
            margin: 5px;
            display: flex;
            align-items: center;
        }
        .btn-category i {
            margin-left: 5px;
        }
        .price-order select {
            margin-right: 10px;
        }
        .btn-category-selected {
            background-color: #007bff !important;
            color: white;
        }
        .custom-pagination a {
            margin: 0 5px;
            padding: 10px 15px;
            border: 1px solid #ddd;
            color: #007bff;
            text-decoration: none;
        }
        .custom-pagination a.active {
            background-color: #007bff;
            color: white;
        }
  </style>
        <div class="section section-properties">
          <div class="container">
              <div class="row justify-content-center align-items-center mb-5">
                  <form method="GET" action="{{ route('resortswithChaleh', ['id' => $resort->id]) }}" class="filter-section">
                      <div class="form-group price-order">
                          <label class="form-label mb-0">رتب حسب السعر</label>
                          <select class="form-control rounded-pill" name="price_order" onchange="this.form.submit()">
                              <option value="">الكل</option>
                              <option value="asc" {{ request('price_order') == 'asc' ? 'selected' : '' }}>من الأقل إلى الأعلى</option>
                              <option value="desc" {{ request('price_order') == 'desc' ? 'selected' : '' }}>من الأعلى إلى الأقل</option>
                          </select>
                      </div>
                      <div class="form-group filter-buttons">
                          <label class="form-label mb-0">اختر الفئة</label>
                          <div id="category-buttons" class="btn-group" role="group">
                              <button type="submit" name="category_id" value="" class="btn btn-category {{ request('category_id') == '' ? 'btn-category-selected' : 'btn-secondary' }}">
                                  <i class="fas fa-list"></i> الكل
                              </button>
                              @foreach ($categories as $category)
                                  <button type="submit" name="category_id" value="{{ $category->id }}" class="btn btn-category {{ request('category_id') == $category->id ? 'btn-category-selected' : 'btn-secondary' }}">
                                      <i class="fas fa-tag"></i> {{ $category->name }}
                                  </button>
                              @endforeach
                          </div>
                      </div>
                  </form>
              </div>
  
          
          <div class="row" dir="rtl">
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
                                  <a href="property-single.html" class="btn btn-primary py-2 px-3">التفاصيل</a>
                              </div>
                          </div>
                      </div>
                  </div>
              @endforeach
          </div>
      </div>
  </div>
  
    
      
      
      
      </div>
      <div class="row align-items-center py-5">
        <div class="col-lg-3">التنقل ({{ $chalets->currentPage() }} من {{ $chalets->lastPage() }})</div>
        <div class="col-lg-6 text-center">
            <div class="custom-pagination">
                {{ $chalets->appends(request()->input())->links() }}
                
            </div>

        </div>
    </div>

    </div>
    <section class="section section-5">
      <div class="site-section bg-light py-5 text-center mb-5 center container">
        {{!!$resort->locations_link!!}}
      </div>
    </section>
<div class="site-footer">
      <div class="container">
        <div class="row">
          <div class="col-lg-4">
            <div class="widget">
              <h3>تواصل معنا</h3>
              <address>43 طريق ريموث، بلتمور، لندن 3910</address>
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
              <h3>المصادر</h3>
              <ul class="list-unstyled float-start links">
                <li><a href="#">من نحن</a></li>
                <li><a href="#">الخدمات</a></li>
                <li><a href="#">الرؤية</a></li>
                <li><a href="#">المهمة</a></li>
                <li><a href="#">الشروط</a></li>
                <li><a href="#">الخصوصية</a></li>
              </ul>
              <ul class="list-unstyled float-start links">
                <li><a href="#">الشركاء</a></li>
                <li><a href="#">الأعمال</a></li>
                <li><a href="#">الوظائف</a></li>
                <li><a href="#">المدونة</a></li>
                <li><a href="#">الأسئلة الشائعة</a></li>
                <li><a href="#">الإبداع</a></li>
              </ul>
            </div>
            <!-- /.widget -->
          </div>
          <!-- /.col-lg-4 -->
          <div class="col-lg-4">
            <div class="widget">
              <h3>الروابط</h3>
              <ul class="list-unstyled links">
                <li><a href="#">رؤيتنا</a></li>
                <li><a href="#">من نحن</a></li>
                <li><a href="#">تواصل معنا</a></li>
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
       
          </div>
        </div>
      </div>
      <!-- /.container -->
    </div>
    <!-- /.site-footer -->


   
    <!-- /.site-footer -->

    <!-- Preloader -->
 

    <script src="/js/bootstrap.bundle.min.js"></script>
    <script src="/js/tiny-slider.js"></script>
    <script src="/js/aos.js"></script>
    <script src="/js/navbar.js"></script>
    <script src="/js/counter.js"></script>
    <script src="/js/custom.js"></script>

  </body>
</html>
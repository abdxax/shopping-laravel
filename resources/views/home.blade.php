<!DOCTYPE html>

<html lang="ar" dir="rtl">

<head>

    <meta charset="UTF-8">
    <!-- رح نستدعي مكتبه عشان نقدر ناخذ منها اللوقوز اللي عندها-->
    <!-- font awesomeاسم الموقع اللي تم نسخ منه المكتبه -->
    <link rel="stylesheet"
          href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
          integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p"
          crossorigin="anonymous"
    />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!--للربط مع صفحة التنسيق-->
    <link rel="stylesheet" href="{{asset("css/indexStyles.css")}}">



    <title>ثمار الطبيعة</title>

    <style>
        @import url('https://fonts.googleapis.com/icon?family=Material+Icons');
        .carousel-container {
            width: 1280px;
            margin: 50px auto;
            min-height: 200px;
            position: relative;
        }
        @media screen and (max-width: 768px) {
            .carousel-container {
                width: 80%;
            }
        }
        @media screen and (max-width: 1024px) {
            .carousel-container {
                width: 85%;
            }
        }
        .carousel-container .carousel-inner {
            overflow: hidden;
        }
        .carousel-container .track {
            display: inline-flex;
            transition: transform 0.5s;
        }
        .carousel-container .card-container {
            width: 259px;
            flex-shrink: 0;
            height: 250px;
            padding-right: 15px;
            box-sizing: border-box;
        }
        .carousel-container .card-container .card {
            width: 100%;
            height: 100%;
            border: 1px solid #ccc;
            box-sizing: border-box;
            border-radius: 10px;
            display: flex;
            flex-direction: column;
        }
        .nav button {
            width: 60px;
            height: 60px;
            border-radius: 50%;
            border: 1px solid #aaa;
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            cursor: pointer;
        }
        .nav .prev {
            left: -30px;
            display: none;
        }
        .nav .prev.show {
            display: block;
        }
        .nav .next {
            right: -30px;
        }
        .nav .next.hide {
            display: none;
        }

        .card > * {
            flex: 1;
        }
        .card .img {
            display: flex;
            justify-content: center;
            align-items: center;
            font-size: 30px;
        }
        .card .info {
            flex-basis: 40px;
            background: #333;
            color: #fff;
            flex-grow: 0;
            padding: 10px;
            box-sizing: border-box;
        }

        .best-seller{



        }
        .proc{
            background-color: #dfebc0;
        }

        /**********/

        .newest-offers {
            padding-top: 5rem;
            background-color: white;
        }

        .newest-offers .offers-section {
            max-width: 1366px;
            margin: 0 auto;
            padding: 0 5rem;
            display: flex;
            flex-direction: column;
        }
        .offers-section h4 {
            color: green;
            font-size: 1.6rem;
            margin-bottom: 2rem;
        }
        .offers-section .offers {
            display: grid;
            grid-template-columns: 1fr 1fr 1fr 1fr;
            justify-content: flex-start;
        }
        .offers .offer {
            margin: 2rem 0;
            max-width: 300px;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .offers{
            width: 90%;
            padding: 20px;
            margin: 8px auto;
            display: flex;
            flex-direction: row;
            justify-content: center;
        }
        .offer{
            width: 250px;
            margin: 0 10px;
            box-shadow: 0 0 20px rgba(0, 0, 0, .1);
            transition: 1s;
        }

        .offer img{
            display: block;
            width: 100;
            border-radius: 5px;
        }
        .offer:hover{
            transform: scale(1.3);
            z-index: 2;
        }
        .offers-section h3 {
            color:rgb(8, 73, 8);
            font-size: 1.3rem;
            margin-bottom: 2rem;
        }
        .offers-section h1 {
            color:rgb(8, 73, 8);
            font-size: 0.7rem;
            margin-bottom: 2rem;
        }
        .offers-section button {
            width: 15rem;
            height: 3rem;
            margin-bottom: 2rem;
            border: none;
            align-self: center;
            border-radius: 12px;
            background-color:green ;
        }


    </style>
</head>

<body>
<!--الناف بار-->
<nav>
    <div class="logo">
        <!--تم نسخ كودالشعار من الموقع-->
        <i class="fas fa-seedling"></i>
        <h4>ثمار الطبيعة</h4>
    </div>
    <!--اضافة قوائم-->
    <div class="wrapper">
        <ul>
            @if(auth()->check())
                <li>
                    <a href="{{route("showCar")}}">
                    <!--كود الايقونه-->
                    <i class="fas fa-cart-arrow-down"></i>
                    </a>
                </li>
                <li>
                    <a href="{{route("logout")}}">تسجيل خروج</a>
                    <!--كود الايقونه-->
                    <i class="fas fa-logout"></i>
                </li>
                <li>
                    <a href="{{route("market")}}">المتجر</a>
                    <!--كود الايقونه-->
                    <i class="fas fa-logout"></i>
                </li>
            @else
            <li>
                <a href="{{route("login")}}">تسجيل الدخول</a>
                <!--كود الايقونه-->
                <i class="fas fa-user-plus"></i>
            </li>
            <li>التسجيل
                <!--كود الايقونه-->
                <i class="fas fa-user-friends"></i>
                <ul>
                    <li><a href="{{route("register")}}">التسجيل كمشتري</a></li>
                    <li><a href="{{route("registerSeller")}}">التسجيل كبائع</a></li>

                </ul>
            </li>
            @endif
        </ul>
    </div>
</nav>

<!--الهيروسكشن-->
<section class="hero">
    <div class="hero-section">
        <!-- لصوره -->
        <div class="hero-image">
            <!-- للنص -->
            <div class="hero-text">

                <h4>تسوق بأمان وسرعه</h4>
                <h1> افضل الخضروات و الفواكه بأفضل الاسعار تجدونها في موقعنا </h1>
                <p>
                    جوده و امان وسرعة
                </p>
                <!--كلاس للبوتون-->
                <button class="btn">
                    <a href="#features">اعرف اكثر</a>
                </button>
            </div>
        </div>
    </div>
</section>
<!----Show items---->

<section class="features best-seller" id="features">
    <div class="features-section best-seller">
        <h4>المنتجات الاكثر مبياعا</h4>
        <!------------------------>

        <div class="carousel-container ">
            <div class="carousel-inner">
                <div class="track">

                    @foreach($best as $b)

                        <div class="card-container">
                            <a href="{{route("shows",$b->prod_id)}}">
                            <div class="card">
                                <div class="img"><img src="{{asset("storage/".$b->produect->imges[0]->imgPath)}}" width="150" height="150"></div>
                                <div class="info ">
                                    <p>المنتج:{{$b->produect->title}}</p>
                                    <p>السعر:{{$b->produect->price}}</p>
                                </div>
                            </div>
                            </a>
                        </div>


                    @endforeach

                </div>
            </div>
            <div class="nav">
                <button class="prev">
                    <i class="material-icons">
                        keyboard_arrow_left
                    </i>
                </button>
                <button class="next">
                    <i class="material-icons">
                        keyboard_arrow_right
                    </i>
                </button>
            </div>
        </div>

        <!-- للتنسيق الاربع المزايا-->


    </div>
    <!--فوتر -->

</section>

<!--<section class="features" id="features">
    <div class="features-section proc">
        <h4>المنتجات</h4>
        <div class="col-md-6">
            <form method="post">
                @csrf
                <div class="form-group row">
                <div class="col-md-5">
                    <select name="seItem" class="form-select">
                        <option value="0">الكل</option>
                        @foreach($dep as $d)
                           <option value="{{$d->id}}">{{$d->title}}</option>
                        @endforeach
                    </select>
                </div>
                    <div class="col-md-5">
                        <input type="submit" class="btn btn-success" value="عرض ">
                    </div>
                </div>
            </form>
        </div>
        <!-- للتنسيق الاربع المزايا-->
       <!-- <div class="row">
            <div class="qualities">
                <div class="row">
                    @foreach($prods as $p)
                      <div class="col-md-4">

                          <div class="quality ">
                            كود الايقونه
                              <img src="{{asset("storage/".$p->imges[0]->imgPath)}}" width="95" height="95">
                              <h3>{{$p->title}}</h3>
                              <p>{{$p->price}}</p>
                              <p><a href="{{route("shows",$p->id)}}" class="btn btn-info">التفاصيل </a> </p>

                          </div>

                      </div>


                    @endforeach
                </div>


            </div>


            <div class="d-felx justify-content-center">



            </div>

        </div>

    </div>


</section>-->

<section class="newest-offers" id="newest">

    <div class="offers-section">
        <h4>البحث عن المنتجات</h4>

        <div class="offers">
            @foreach($prods as $p)

                <div class="offer">
                    <img src="{{asset("storage/".$p->imges[0]->imgPath)}}" height="120" width="120"/>
                    <h3>المنتج : {{$p->title}}</h3>
                    <h1>السعر : {{$p->price}} </h1>
                </div>

            @endforeach

           <!-- <div class="offer">
                <img src="./images/promogran.jpg" height="160" />
                <h3>رمان</h3>
                <h1>8.00 ر.س</h1>
            </div>
            <div class="offer">
                <img src="./images/apricots.jpg" height="160" />
                <h3>مشمش</h3>
                <h1>12.00 ر.س</h1>
            </div>
            <div class="offer">
                <img src="./images/bagdons.jpg" height="160" />
                <h3>بقدونس</h3>
                <h1>5.00 ر.س</h1>
            </div>
            <div class="offer">
                <img src="./images/spinch.jpg" height="160" />
                <h3>سبانخ</h3>
                <h1>7.00 ر.س</h1>
            </div>
            <div class="offer">
                <img src="./images/painapple.jpg" height="160" />
                <h3>أناناس</h3>
                <h1>7.00 ر.س</h1>
            </div>
            <div class="offer">
                <img src="./images/kzbra.jpg" height="160" />
                <h3>كزبرة</h3>
                <h1>3.00 ر.س</h1>
            </div>
            <div class="offer">
                <img src="./images/iceberg.jpg" height="160" />
                <h3>خس</h3>
                <h1>25.00 ر.س</h1>
            </div>-->
        </div>
        <button class="btn">
            <a href="{{route("market")}}"> تصفّح جميع العروض </a>
        </button>
    </div>
</section>


<!--- end show item -->
<!--فيتشر سكشن-->
<!--iعشان اقدر اتنقل لهذا السكشن-->
<section class="features" id="features">
    <div class="features-section">
        <h4>لماذا نحن أفضل خيار؟</h4>
        <!-- للتنسيق الاربع المزايا-->
        <div class="qualities">
            <div class="quality">
                <!--كود الايقونه-->
                <i class="fas fa-shipping-fast"></i>
                <h3>سرعة بالتوصيل</h3>
                <p>طلبك رح يوصل خلال 2-5 أيام</p>

            </div>
            <div class="quality">
                <!--كود الايقونه-->
                <i class="fas fa-user-shield"></i>
                <h3>حماية وأمان</h3>
                <p>حماية أثناء الدفع الالكتروني</p>
            </div>
            <div class="quality">
                <!--كود الايقونه-->
                <i class="fas fa-sort-amount-up-alt"></i>
                <h3>تشكيلة واسعة</h3>
                <p>تسوق الخضار والفواكه بجميع انواعها</p>
            </div>
            <div class="quality">
                <!--كود الايقونه-->
                <i class="fas fa-phone-square"></i>
                <h3>دعم فني</h3>
                <p>دعم فني على مدار الساعة لحل مشاكلك</p>
            </div>
        </div>
    </div>
    <!--فوتر -->
    <div class="footer-section">
        <div class="socials">
            <!--تم نسخ الاكواد من موقع الايقونات-->
            <i class="fab fa-twitter"></i>
            <i class="fab fa-facebook"></i>
            <i class="fab fa-instagram"></i>
        </div>
    </div>
</section>
<script>
    const prev  = document.querySelector('.prev');
    const next = document.querySelector('.next');

    const track = document.querySelector('.track');

    let carouselWidth = document.querySelector('.carousel-container').offsetWidth;

    window.addEventListener('resize', () => {
        carouselWidth = document.querySelector('.carousel-container').offsetWidth;
    })

    let index = 0;

    next.addEventListener('click', () => {
        index++;
        prev.classList.add('show');
        track.style.transform = `translateX(-${index * carouselWidth}px)`;

        if (track.offsetWidth - (index * carouselWidth) < carouselWidth) {
            next.classList.add('hide');
        }
    })

    prev.addEventListener('click', () => {
        index--;
        next.classList.remove('hide');
        if (index === 0) {
            prev.classList.remove('show');
        }
        track.style.transform = `translateX(-${index * carouselWidth}px)`;
    })

</script>
</body>
</html>





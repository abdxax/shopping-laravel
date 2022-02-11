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
    <!--للربط مع صفحة التنسيق-->
    <link rel="stylesheet" href="{{asset("css/indexStyles.css")}}">

    <title>ثمار الطبيعة</title>
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

</body>
</html>





<!DOCTYPE html>
<html>
<head>
    <!-- font awesomeاسم الموقع اللي تم نسخ منه المكتبه -->
    <link rel="stylesheet"
          href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
          integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p"
          crossorigin="anonymous"
    />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset("css/indexStyles.css")}}">
    <style>
    @import url('https://fonts.googleapis.com/css2?family=Lalezar&display=swap');
    @import url("https://fonts.googleapis.com/css2?family=Tajawal:wght@300;700&display=swap");
    *{
        font-family: "Tajawal", sans-serif;
    }
    .navbar-light{
        background-color: black;

    }
    .navbar-light .navbar-brand   {
        color: white;
    }
    .navbar-light .navbar-nav .nav-link{
        color: white;
    }
    .logo {
        display: flex;
        font-size: 3rem;
        align-items: center;
    }
    .navbar-brand i{
        color: green;
        padding-left: 0.75rem;
    }
    .navbar-brand h4{
        font-family: 'Lalezar', cursive;
    }
</style>
</head>
<body dir="rtl">

<nav class="navbar navbar-expand-lg navbar-light  bcx">
    <div class="container-fluid">
        <a class="navbar-brand logo" href="{{route("home")}}"> <i class="fas fa-seedling"></i>
            <h4>ثمار الطبيعة</h4>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a  class="nav-link " aria-current="page" href="{{route("logout")}}">تسجيل خروج</a>
                </li>


            </ul>

        </div>
    </div>
</nav>
<section>
    @yield("main-section")
</section>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>

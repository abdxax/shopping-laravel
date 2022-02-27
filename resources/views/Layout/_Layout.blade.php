<!DOCTYPE html>
<html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<style>
    .navbar-light{
        background-color: black;

    }
    .navbar-light .navbar-brand   {
        color: white;
    }
    .navbar-light .navbar-nav .nav-link{
        color: white;
    }
</style>
</head>
<body dir="rtl">

<nav class="navbar navbar-expand-lg navbar-light  bcx">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">ثمار الطبيعه</a>
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

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
            @foreach($dep as $d)
                <li>
                    <a href="{{route("logout")}}">{{$d->title}}</a>
                    <!--كود الايقونه-->
                    <i class="fas fa-logout"></i>
                </li>
            @endforeach

        </ul>
    </div>
</nav>

<div class="container">
    <div class="row">
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
    </div>
</div>

</body>
</html>





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
<style>
    .center {
        position: absolute;
        left: 0;
        right: 0;
        margin: auto;
    }
</style>

    <title>ثمار الطبيعة</title>
</head>

<body>
<!--اكواد الخلفيه المتحركه-->
<div class="bg"></div>
<div class="bg bg2"></div>
<div class="bg bg3"></div>
<div class="content"></div>
<!---->
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
                <li>
                    <a href="{{route("market")}}">المتجر</a>
                    <!--كود الايقونه-->
                    <i class="fas fa-logout"></i>
                </li>
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
<div class="container" dir="rtl">
    <div class="row justify-content-center">
        <div class="col-md-12 text-center">
            <h3>{{$prod->title}}</h3>
            @foreach($prod->imges as $img)
                <img src="{{asset("storage/".$img->imgPath)}}" class="ml-2" width="270" height="270">
            @endforeach
            <p>{{$prod->descrip}}</p>
            <p>السعر :{{$prod->price}} </p>
            <p>الكمية : {{$prod->count}}</p>
          <div class="row col-md-2  center ">
              @if($prod->count>0)
              <form method="post" action="{{route("car",$prod->id)}}">
                  @csrf
                  <div class="form-group row">
                      <label class="col-md-4">الكمية  </label>
                      <div class="col-md-5">
                          <input type="number" class="form-control" name="prod_item" >
                      </div>
                  </div>

                  <div class="form-group row mt-2">
                      <label class="col-md-4"></label>
                      <div class="col-md-5">
                          <input type="submit" class="btn btn-success" value="اضافة للسلة">
                      </div>
                  </div>

              </form>
                  @else
              <div class="text-center">
                  <h4 style="color: red">نعتذر نفذت الكمية</h4>
              </div>
              @endif
          </div>
           <!-- <a href="{{route("car",$prod->id)}}" class="btn btn-info">اضافة للسلة</a>-->
        </div>

        <div class="col-md-10 offset-1">
            <div class="card">
                <div class="card-header">
                    <h4>المنتجات الموصى بها</h4>
                </div>
                <div class="card-body">
                    <div class="row justify-content-center">
                       @foreach($best as $b)
                           <div class="col-md-3">
                               <a href="{{route("shows",$b->id)}}">
                                   <div class="card">
                                       <div class="card-body">
                                           <img src="{{asset("storage/".$b->imges[0]->imgPath)}}" width="120" height="120">
                                           <h3>المنتج: {{$b->title}}</h3>
                                           <p>السعر: {{$b->price}}</p>

                                       </div>
                                   </div>
                               </a>
                           </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>


    </div>
</div>
</body>
</html>





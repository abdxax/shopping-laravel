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
<div class="container" dir="rtl">
    <div class="row">
        <div class="col-md-12 text-center">
           <table class="table">
               <thead>
               <tr>
                   <th></th>
                   <th>المنتج</th>
                   <th>السعر</th>
                   <th>الكمية</th>
                   <th>المجموع</th>
                   <th>حذف</th>
               </tr>
               </thead>
               <tbody>
               @php($total=0)
               @if($ord!=null)

               @foreach($ord->prods as $ps)

                   <tr>
                       <td><img src="{{asset("storage/".$ps->prod->imges[0]->imgPath)}}" width="80" height="80"></td>
                       <td>{{$ps->prod->title}}</td>
                       <td>{{$ps->prod->price}}</td>
                       <td>{{$ps->count}}</td>
                       <td>{{$pcs=$ps->count*$ps->prod->price}}</td>
                       <td><a href="#" class="btn btn-danger">حذف </a> </td>
                   </tr>
                <input type="hidden" value=" {{$total+=$pcs}}">
               @endforeach
               @else
               <h3>لا يوجد منتجات في السلة</h3>
               @endif
               </tbody>
           </table>
            @if($total>0)
             <div class="text-center">
                 <h3>المجموع <span>{{$total}}</span></h3>
             </div>
            <div class="text-center">
                <div class="">
                    <form class="form-inline justify-content-center">
                        <div class="form-group col-md-4">
                            <input type="text" class="form-control">
                        </div>
                        <div class="form-group col-md-4">
                            <input type="text" class="form-control">
                        </div>
                        <div class="form-group row col-md-4">
                           <div class="col-md-5">
                               <input type="text" class="form-control">
                           </div>
                            <div class="col-md-5">
                                <input type="text" class="form-control">
                            </div>
                        </div>
                    </form>
                </div>
                <a href="{{route("payment",$ord->id)}}" class="btn btn-success">اتمام عملية الشراء</a>
            </div>
            @endif
        </div>
    </div>
</div>
</body>
</html>





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
    .form-inline{
        text-align:center
    }
</style>
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
    <div class="row justify-content-center">
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
                   <th>تعديل </th>
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
                       <td><a href="{{route("delete",$ps->id)}}" class="btn btn-danger">حذف </a> </td>
                       <td><a href="#" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModal{{$ps->id}}">تعديل</a> </td>

                       <!-- Modal -->
                       <div class="modal fade" id="exampleModal{{$ps->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                           <div class="modal-dialog">
                               <div class="modal-content">
                                   <div class="modal-header">
                                       <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                       <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                   </div>
                                   <form method="post" action="{{route("UpdateCount")}}">
                                       @csrf
                                   <div class="modal-body">
                                       <input type="hidden" name="car_id" value="{{$ps->id}}">
                                       <div class="">
                                           <input type="number" name="car_counts" value="{{$ps->count}}">
                                       </div>
                                   </div>
                                   <div class="modal-footer">
                                       <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">اغلاق</button>
                                      <input type="submit" name="sub" class="btn btn-success" value="تعديل">
                                   </div>
                                   </form>
                               </div>
                           </div>
                       </div>

                   </tr>
                <input type="hidden" value=" {{$total+=$pcs}}">
               @endforeach
               @else
               <h3>لا يوجد منتجات في السلة</h3>
               @endif
               </tbody>
           </table>

        </div>

        <div class="col-md-12">
            @if($total>0)
                <div class="text-center">
                    <h3>المجموع <span>{{$total}}</span></h3>
                </div>
                <div class="text-center ">
                    <div class=" text-center">
                     <div class="row">
                        <div class="col-md-9 ">

                        </div>
                     </div>
                    </div>
                    <a href="" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModal2">اتمام عملية الشراء</a>





                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel2" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">اكمال عملية الدفع </h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <form class="form-inline justify-content-center">
                                        <div class="form-group col-md-9 mt-2">
                                            <input type="text" class="form-control" placeholder="رقم البطاقة">
                                        </div>
                                        <div class="form-group col-md-9 mt-2">
                                            <input type="text" class="form-control" placeholder="ccv">
                                        </div>
                                        <div class="form-group row col-md-9 mt-2">
                                            <div class="col-md-6">
                                                <input type="text" class="form-control" placeholder="mm">
                                            </div>
                                            <div class="col-md-6">
                                                <input type="text" class="form-control" value="yy">
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">اغلاق</button>
                                    <a href="{{route("payment",$ord->id)}}" class="btn btn-success">اتمام عملية الشراء</a>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
            @endif
        </div>
    </div>
</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>





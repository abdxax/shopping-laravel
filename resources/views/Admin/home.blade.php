@extends("Layout._Layout")
@section("main-section")

<section class="features bac row" id="features" style="background-color: white">
    <div class="features-section col-md-3">
        <h4></h4>
        <!-- للتنسيق الاربع المزايا-->
        <a href="{{route("admin.depart")}}">
            <div class="qualities">
                <div class="quality">
                    <!--كود الايقونه-->
                    <i class="	fas fa-clone"></i>
                    <h3>الاقسام</h3>
                    <p>{{$dep}}</p>

                </div>
        </a>

    </div>
    </div>

    <div class="features-section col-md-3">
        <h4></h4>
        <!-- للتنسيق الاربع المزايا-->

            <div class="qualities">
                <div class="quality">
                    <!--كود الايقونه-->
                    <i class="fas fa-shopping-basket"></i>
                    <h3>المنتجات</h3>
                    <p>{{$prod}}</p>

                </div>


    </div>
    </div>

    <div class="features-section col-md-3">
        <h4></h4>
        <!-- للتنسيق الاربع المزايا-->

            <div class="qualities">
                <div class="quality">
                    <!--كود الايقونه-->
                    <i class="fas fa-file-alt"></i>
                    <h3>الطلبات</h3>
                    <p>{{$order}}</p>

                </div>


    </div>
    </div>

    <div class="features-section col-md-3">
        <h4></h4>
        <!-- للتنسيق الاربع المزايا-->

            <div class="qualities">
                <div class="quality">
                    <!--كود الايقونه-->
                    <i class="fas fa-user-friends"></i>
                    <h3>المستخدمين</h3>
                    <p>{{$user}}</p>

                </div>


    </div>
    </div>
    <!--فوتر -->

</section>

@endsection

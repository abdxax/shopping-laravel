@extends("Layout._Layout")
@section("main-section")
    <section class="features bac" id="features" style="background-color: white">
        <div class="features-section">
            <h4></h4>
            <!-- للتنسيق الاربع المزايا-->
            <a href="{{route("seller.prod")}}">
            <div class="qualities">
                <div class="quality">
                    <!--كود الايقونه-->
                    <i class="fas fa-shopping-basket"></i>
                    <h3>المنتجات</h3>
                    <p>{{$prod}}</p>

                </div>
            </a>

            </div>
        </div>
        <!--فوتر -->

    </section>






        </div>
    </div>
@endsection

@extends("Layout._Layout")
@section("main-section")
    <div class="container">
        <div class="row mt-2">

            <div class="col-md-3">
                <a href="{{route("seller.prod")}}">
                    <div class="card">
                        <div class="card-body text-center">
                            <h3>المنتجات </h3>
                            <p>{{$prod}}</p>
                        </div>
                    </div>
                </a>
            </div>







        </div>
    </div>
@endsection

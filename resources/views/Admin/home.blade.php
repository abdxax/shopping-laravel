@extends("Layout._Layout")
@section("main-section")
<div class="container">
    <div class="row mt-2">

        <div class="col-md-3">
            <a href="{{route("admin.depart")}}">
            <div class="card">
                <div class="card-body text-center">
                    <h3>الاقسام</h3>
                    <p>{{$dep}}</p>
                </div>
            </div>
            </a>
        </div>

        <div class="col-md-3">
            <div class="card">
                <div class="card-body text-center">
                    <h3>المنتجات</h3>
                    <p>{{$prod}}</p>
                </div>
            </div>
        </div>

        <div class="col-md-3">
            <div class="card">
                <div class="card-body text-center">
                    <h3>الطلبات</h3>
                    <p>{{$order}}</p>
                </div>
            </div>
        </div>

        <div class="col-md-3">
            <div class="card">
                <div class="card-body text-center">
                    <h3>المستخدمين</h3>
                    <p>{{$user}}</p>
                </div>
            </div>
        </div>

    </div>
</div>
@endsection

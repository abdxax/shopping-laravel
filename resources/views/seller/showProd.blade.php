@extends("Layout._Layout")
@section("main-section")
<div class="container" dir="rtl">
    <div class="row">
        <div class="col-md-12 text-center">
            <h3>{{$prod->title}}</h3>
            <img src="{{asset("storage/".$prod->imges[0]->imgPath)}}">
            <p>{{$prod->descrip}}</p>
            <p>السعر :{{$prod->price}} </p>
            <p>الكمية : {{$prod->count}}</p>

        </div>
    </div>
</div>
@endsection

@extends("Layout._Layout")
@section("main-section")
<div class="container" dir="rtl">
    <div class="row">
        <div class="col-md-12 text-center">
            <h3>{{$prod->title}}</h3>
            @foreach($prod->imges as $img)
                <img src="{{asset("storage/".$img->imgPath)}}" class="ml-2" width="270" height="270">
            @endforeach

            <p>{{$prod->descrip}}</p>
            <p>السعر :{{$prod->price}} </p>
            <p>الكمية : {{$prod->count}}</p>

        </div>
    </div>
</div>
@endsection

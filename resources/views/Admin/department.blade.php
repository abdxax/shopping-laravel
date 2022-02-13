@extends("Layout._Layout")
@section("main-section")
<div class="container">
    <div class="row ">
        <div class="col-md-11 mt-2">
            @if($msg=\Illuminate\Support\Facades\Session::get("suc"))
                <div class="alert alert-success text-center">{{$msg}}</div>
            @endif
        </div>
        <div class="col-md-10 mt-5">
            <div class="col-md-5">
                <div class="text-center">
                    <h4>اضافة قسم جديد </h4>
                </div>
                <form method="post">
                    @csrf
                    <div class="form-group">
                        <input type="text" name="depa" class="form-control" placeholder="القسم">
                    </div>

                    <div class="form-group text-center mt-3">
                        <input type="submit" name="sub" class="btn btn-info" value="حفظ" ">
                    </div>
                </form>
            </div>
        </div>
        <div class="col-md-10 mt-5">
            <table class="table">
                <thead>
                <tr>
                    <th></th>
                    <th>القسم</th>
                    <th>عدد المنتجات</th>
                </tr>
                </thead>
                <tbody>
                @foreach($dep as$d)
                    <tr>
                        <td>{{$d->id}}</td>
                        <td>{{$d->title}}</td>
                        <td>{{count($d->Proudects)}}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection

@extends("Layout._Layout")
@section("main-section")

    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                    اضافة منتج
                </button>


                <!-- Modal -->
                <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="staticBackdropLabel">اضافة منتج</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <form method="post" enctype="multipart/form-data">
                                @csrf
                            <div class="modal-body">
                               <div class="form-group">
                                   <input type="text" name="title" class="form-control" placeholder="العنوان">
                               </div>
                                <div class="form-group">
                                    <select name="dep">
                                        @foreach($deps as $d)
                                            <option value="{{$d->id}}">{{$d->title}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                   <textarea name="desc" rows="5" class="form-control" placeholder="وصف المنتج"></textarea>
                                </div>
                                <div class="form-group">
                                    <input type="text" name="price" class="form-control" placeholder="السعر">
                                </div>
                                <div class="form-group">
                                    <input type="text" name="count" class="form-control" placeholder="الكمية">
                                </div>

                                <div class="form-group">
                                    <input type="file" name="img" class="form-control" >
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">اغلاق</button>

                                <input type="submit" name="sub" class="btn btn-info" value="اضافة">
                            </div>
                            </form>
                        </div>
                    </div>
                </div>


            </div>
            <div class="col-md-10">
                <table class="table">
                    <thead>
                    <tr>

                    <th></th>
                    <th>المنتج</th>
                    <th>السعر</th>
                    <th>الكمية</th>
                    <th></th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($prods as $p)
                        <tr>
                            <td><img src="{{asset("storage/".$p->imges[0]->imgPath)}}" width="90" height="90"></td>
                            <td>{{$p->title}}</td>
                            <td>{{$p->price}}</td>
                            <td>{{$p->count}}</td>
                            <td><a href="{{route("seller.show",$p->id)}}" class="btn btn-info"> التفاصيل</a> </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection

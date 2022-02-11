<html lang="en"  dir="rtl">
<head>
    <meta charset="UTF-8">

    <title>انشاء حساب</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="{{asset("css/sellerStyles.css")}}">
</head>
<body>


<!--اكواد الخلفيه المتحركه-->
<div class="bg"></div>
<div class="bg bg2"></div>
<div class="bg bg3"></div>
<div class="content"></div>
<!---->



<div class="inner">
    <div class="photo">
        <img src="./images/avogren.jpg">
    </div>
    <div class="user-form">
        <h1>كن بائعًا في ثمار الطبيعة !</h1>
        @if($msg=\Illuminate\Support\Facades\Session::get("suc"))
            <div class="">
                {{$msg}}
            </div>
        @endif
        <form method="post">
            @csrf
            <i class="fas fa-user-edit"></i>
            <input type="text" placeholder="FName" name="FName">
            <i class="fas fa-user-edit"></i>
            <input type="text" placeholder="LName" name="LName">
            <i class="fas fa-user"></i>
            <input type="text" placeholder="UserName" name="UserName">
            <i class="fas fa-envelope icon"></i>
            <input type="email" placeholder="Email" name="Email">
            <i class="fas fa-lock icon"></i>
            <input type="password" placeholder="password" name="password">


            <div >
               <input type="submit" name="sub" value="انشاء" class="btn">
            </div>
            <p>أكثر من نصف الوحدات المباعة في متاجرنا مقدمة من بائعين مستقلين.</p>
        </form>
    </div>
</div>
</body>
</html>

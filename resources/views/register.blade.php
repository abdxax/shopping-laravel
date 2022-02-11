<!DOCTYPE html>
<html lang="ar">
<head>
    <meta charset="UTF-8">
    <title>انشاء حساب</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
    <link rel="stylesheet" href="{{asset("css/registerStyles.css")}}">
</head>

<body>

<!--اكواد الخلفيه المتحركه-->
<div class="bg"></div>
<div class="bg bg2"></div>
<div class="bg bg3"></div>
<div class="content"></div>
<!---->

<div class="wrppe">
    <div class="title">
        التسجيل
        @if($msg=\Illuminate\Support\Facades\Session::get("suc"))
            <div class="">
                {{$msg}}
            </div>
        @endif
    </div>

    <div class="social_media">
        <div class="item">
            <i class="fab fa-facebook-f"></i>
        </div>
        <div class="item">
            <i class="fab fa-twitter"></i>
        </div>
        <div class="item">
            <i class="fab fa-google-plus-g"></i>
        </div>
    </div>
<form method="post">
    @csrf
    <div class="form">
        <div class="input_field">
            <input type="text" placeholder="FName" name="FName" class="input">
            <i class="fas fa-user-edit"></i>
        </div>


        <div class="input_field">
            <input type="text" placeholder="LName" name="LName" class="input">
            <i class="fas fa-user-edit"></i>
        </div>


        <div class="input_field">
            <input type="text" placeholder="UserName" name="UserName" class="input">
            <i class="fas fa-user"></i>
        </div>



        <div class="input_field">
            <input type="password" placeholder="Password" name="Password" class="input">
            <i class="fas fa-lock"></i>
        </div>



        <div class="input_field">
            <input type="email" placeholder="Email" name="Email" class="input">
            <i class="far fa-envelope"></i>
        </div>



        <div >
           <input type="submit" value="انشا" class="btn" >
        </div>
    </div>
</form>

</div>

</body>
</html>

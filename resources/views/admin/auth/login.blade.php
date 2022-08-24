<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Splab Admin Panel </title>

    <!-- Bootstrap -->
    <link href="{{asset('')}}Back/assets/plugins/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="{{asset('')}}Back/assets/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="{{asset('')}}Back/assets/plugins/nprogress/nprogress.css" rel="stylesheet">
    <!-- Animate.css -->
    <link href="{{asset('')}}Back/assets/plugins/animate.css/animate.min.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="{{asset('')}}Back/assets/css/style.css" rel="stylesheet">
</head>

<body class="login">
<div>
    <a class="hiddenanchor" id="signup"></a>
    <a class="hiddenanchor" id="signin"></a>

    <div class="login_wrapper">
        <div class="animate form login_form">
            <section class="login_content">

                    @if($errors->any())
                        <div class="alert alert-danger">
                            {{$errors->first()}}
                        </div>
                    @endif
                <form  method="post" action="{{route('admin.login.post')}}">
                    @csrf
                    <h1>Giriş edin</h1>
                    <div>
                        <input type="text" class="form-control" name="email" placeholder="E-poçt ünvan" required="" />
                    </div>
                    <div>
                        <input type="password" class="form-control" name="password" placeholder="Şifrə" required="" />
                    </div>
                    <div>
                        <button type="submit" class="btn btn-default submit" >Daxil olun</button>
                    </div>

                    <div class="clearfix"></div>

                    <div class="separator">

                        <div class="clearfix"></div>
                        <br />

                        <div>
                            <p>© 2022 Bütün hüquqlar Amondesoft tərəfindən qorunur. </p>
                        </div>
                    </div>
                </form>
            </section>
        </div>


    </div>
</div>
</body>
</html>

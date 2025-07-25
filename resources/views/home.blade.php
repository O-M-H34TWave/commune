<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
    <title>Commune M'talssa</title>
</head>

<body>
    <nav class="navbar navbar-expand-md navbar-light bg-light position-relative"
        style="height: 60px; overflow: visible;">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-between align-items-center " id="collapse">
                <ul class="navbar-nav mb-0 ">
                    <li class="nav-item pl-5">
                        <a href="#" class="nav-link">أخبار الجماعة</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">التواصل</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">رابط</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">English</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">Francais</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">العربية</a>
                    </li>
                    <li class="nav-item">
                        <a href="https://www.facebook.com/profile.php?id=61578890032437" target="_blank"
                            class="nav-link"><i class="bi bi-facebook"></i>
                        </a>

                    </li>
                    <li class="nav-item">
                        <i class="bi bi-search"></i>
                    </li>
                </ul>
            </div>
            <a href="/" class="navbar-brand p-0 m-0" style="position: absolute; top: 0px; right: 20px;">
                <img src="{{ asset('images/mtalssa-logo.png') }}" alt="شعار الجماعة" id="logo">
            </a>
        </div>
    </nav>

    <img src="{{asset('images/driouch.jpg')}}" alt="" class="img-fluid w-100">
    <div class="container pt-4 ">
        <h1 class="float-end">اخبار الجماعة<i class="bi bi-grip-vertical"></i>
        </h1>
        <br><br><br>
        <div class="container">
            <div class="row">
                <div class="col-md-8 d-flex flex-wrap gap-3">
                    <div class="card flex-grow-1" style="min-width: 200px; max-width: 250px;">
                        <a href="">
                            <img class="card-img-bottom" src="{{ asset('images/mtalssa-logo.png') }}" alt="Card image"
                                style="width:100%">
                        </a>
                    </div>
                    <div class="card flex-grow-1" style="min-width: 200px; max-width: 250px;">

                        <a href="">
                            <img class="card-img-bottom" src="{{ asset('images/mtalssa-logo.png') }}" alt="Card image"
                                style="width:100%">
                        </a>
                    </div>
                    <div class="card flex-grow-1" style="min-width: 200px; max-width: 250px;">

                        <a href="">
                            <img class="card-img-bottom" src="{{ asset('images/mtalssa-logo.png') }}" alt="Card image"
                                style="width:100%">
                        </a>
                    </div>
                </div>
                <div class="col-md-4 d-flex align-items-center">
                    <div class="ms-md-3">
                        <ul class="">
                            <li class=""><a href="">اخبار الجماعة اخبار الجماعة اخبار الجماعة</a></li>
                            <li class=""><a href="">اخبار الجماعة اخبار الجماعة اخبار الجماعة</a> </li>
                            <li class=""><a href="">اخبار الجماعة اخبار الجماعة اخبار الجماعة</a></li>
                            <li class=""><a href="">اخبار الجماعة اخبار الجماعة اخبار الجماعة</a> </li>
                    </div>
                </div>
            </div>
        </div>
        <div>
            <h1 class="float-end mb-5">نطاق الجماعة<i class="bi bi-grip-vertical"></i>
            </h1>
            <img src="{{asset('images/mtalssa.png')}}" alt="">
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
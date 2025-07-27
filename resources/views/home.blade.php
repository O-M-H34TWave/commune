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
    @include('layout.navbar')
    <img src="{{asset('images/driouch.jpg')}}" alt="" class="img-fluid w-100">
    <div class="container pt-4 ">
        <h1 class="float-end">اخبار الجماعة<i class="bi bi-grip-vertical"></i>
        </h1>
        <br><br><br>
        <div class="container">
            <div class="row">
                <div class="col-md-8 d-flex flex-wrap gap-2">
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
        <div class="text-end">
            <h1 class="mb-3">معلومات عامة عن الجماعة <i class="bi bi-grip-vertical"></i></h1>
            <p>تعتبر <b> جماعة امطالسة </b>بإقليم الدريوش أكبر جماعة من ناحية المساحة، حيث تشكل <b>539.3 كم²</b>، و
                تتبعها <b>جماعة عين الزهرة ب311.8 كم²</b> ثم <b>جماعة اولاد بوبكر ب281.6 كم²</b>.
                عدد سكان جماعة امطالسة هو 16،778 نسمة حسب احصاء 2024، وكثافتها السكانية 31.11 نسمة في كم².
            </p>
        </div>
        <div class=" text-end">
            <h1 class="mb-3">نطاق الجماعة<i class="bi bi-grip-vertical"></i>
            </h1>
            <a href="https://www.google.com/maps/place/Mtalssa/@34.8873494,-3.3965004,47135m/data=!3m1!1e3!4m6!3m5!1s0xd76422aa453d88f:0x4d5999ddafe69e67!8m2!3d34.9692825!4d-3.3690572!16s%2Fg%2F120_g1gq!5m1!1e4?entry=ttu&g_ep=EgoyMDI1MDcyMy4wIKXMDSoASAFQAw%3D%3D"
                target="_blank">
                <img src="{{asset('images/mtalssa.png')}}" alt="" class="img-fluid w-100">
            </a>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
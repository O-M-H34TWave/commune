<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">

    <title>Document</title>
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>
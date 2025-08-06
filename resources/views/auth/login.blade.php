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
    @include('layout.navbar')
    <div class="container text-center py-5" style="margin-top: 150px;margin-bottom: 50px;">
        <h2>اختر نوع الدخول</h2>
        <div class="d-flex justify-content-center gap-4 mt-4">
            <a href="{{ route('login.admin') }}" class="btn btn-primary btn-lg px-4">فضاء المسؤول</a>
            <a href="{{ route('login.employee') }}" class="btn btn-secondary btn-lg px-4">فضاء الموظف</a>
        </div>
    </div>
    @include('layout.footer')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>
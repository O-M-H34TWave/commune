<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
    <script src="https://balkangraph.com/js/latest/OrgChart.js"></script>

    <title>الخدمات</title>
</head>

<body>
    @include('layout.navbar')
    <div class="container-fluid bg-light services">
        <h1 class="text-center">خدمات الجماعة</h1>
    </div>
    <div class="container py-5">
        <div class="row justify-content-center" id="accordionServices">

            <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-4 d-flex justify-content-center ">
                <div class="card text-center" style="width: 100%; max-width: 250px;">
                    <div class="card-body allServices">
                        <i class="bi bi-person-vcard-fill fs-1 mb-3"></i>
                        <h5 class="card-title">مصلحة الحالة المدنية</h5>
                        <button class="btn btn-sm btn-outline-dark mt-2" data-bs-toggle="collapse"
                            data-bs-target="#collapse2" aria-expanded="false" aria-controls="collapse2">
                            عرض التفاصيل
                        </button>
                        <div class="collapse mt-2" id="collapse2" data-bs-parent="#accordionServices">
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">شهادة الحياة والوفاة</li>
                                <li class="list-group-item">عقود الازدياد</li>
                                <li class="list-group-item">تسجيل المواليد</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-4 d-flex justify-content-center ">
                <div class="card text-center" style="width: 100%; max-width: 250px;">
                    <div class="card-body allServices">
                        <i class="bi bi-cash-stack fs-1 mb-3"></i>
                        <h5 class="card-title">مصلحة الموارد المالية</h5>
                        <button class="btn btn-sm btn-outline-dark mt-2" data-bs-toggle="collapse"
                            data-bs-target="#collapse3" aria-expanded="false" aria-controls="collapse3">
                            عرض التفاصيل
                        </button>
                        <div class="collapse mt-2" id="collapse3" data-bs-parent="#accordionServices">
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">شهادة الحياة</li>
                                <li class="list-group-item">عقود الازدياد</li>
                                <li class="list-group-item">نسخ كاملة</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-4 d-flex justify-content-center ">
                <div class="card text-center" style="width: 100%; max-width: 250px;">
                    <div class="card-body allServices">
                        <i class="bi bi-people-fill fs-1 mb-3"></i>
                        <h5 class="card-title">مصلحة الميزانية والنفقات والموارد البشرية</h5>
                        <button class="btn btn btn-sm btn-outline-dark mt-2" data-bs-toggle="collapse"
                            data-bs-target="#collapse4" aria-expanded="false" aria-controls="collapse4">
                            عرض التفاصيل
                        </button>
                        <div class="collapse mt-2" id="collapse4" data-bs-parent="#accordionServices">
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">شهادة الحياة</li>
                                <li class="list-group-item">عقود الازدياد</li>
                                <li class="list-group-item">نسخ كاملة</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-4 d-flex justify-content-center ">
                <div class="card text-center" style="width: 100%; max-width: 250px;">
                    <div class="card-body allServices">
                        <i class="bi bi-gear-fill fs-1 mb-3"></i>
                        <h5 class="card-title">مصلحة الصفقات الممتلكات والآليات</h5>
                        <button class="btn btn-sm btn-outline-dark mt-2" data-bs-toggle="collapse"
                            data-bs-target="#collapse5" aria-expanded="false" aria-controls="collapse5">
                            عرض التفاصيل
                        </button>
                        <div class="collapse mt-2" id="collapse5" data-bs-parent="#accordionServices">
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">شهادة الحياة</li>
                                <li class="list-group-item">عقود الازدياد</li>
                                <li class="list-group-item">نسخ كاملة</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-4 d-flex justify-content-center ">
                <div class="card text-center" style="width: 100%; max-width: 250px;">
                    <div class="card-body allServices">
                        <i class="bi bi-building fs-1 mb-3"></i>
                        <h5 class="card-title">مصلحة التعمير والاشغال والبيئة</h5>
                        <button class="btn btn-sm btn-outline-dark mt-2" data-bs-toggle="collapse"
                            data-bs-target="#collapse6" aria-expanded="false" aria-controls="collapse6">
                            عرض التفاصيل
                        </button>
                        <div class="collapse mt-2" id="collapse6" data-bs-parent="#accordionServices">
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">شهادة الحياة</li>
                                <li class="list-group-item">عقود الازدياد</li>
                                <li class="list-group-item">نسخ كاملة</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-4 d-flex justify-content-center ">
                <div class="card text-center" style="width: 100%; max-width: 250px;">
                    <div class="card-body allServices">
                        <i class="bi bi-globe2 fs-1 mb-3"></i>
                        <h5 class="card-title">مصلحة الشؤون الاقتصادية والاجتماعية والثقافية</h5>
                        <button class="btn btn-sm btn-outline-dark mt-2" data-bs-toggle="collapse"
                            data-bs-target="#collapse7" aria-expanded="false" aria-controls="collapse7">
                            عرض التفاصيل
                        </button>
                        <div class="collapse mt-2" id="collapse7" data-bs-parent="#accordionServices">
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">شهادة الحياة</li>
                                <li class="list-group-item">عقود الازدياد</li>
                                <li class="list-group-item">نسخ كاملة</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    @include('layout.footer')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>
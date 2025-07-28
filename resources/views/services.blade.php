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
    <div class="container py-5" style="margin-top: 150px">
        <div class="accordion" id="servicesAccordion" dir="rtl">
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingOne">
                    <button class="accordion-button collapsed text-end" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                        الرخص
                    </button>
                </h2>
                <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne"
                    data-bs-parent="#servicesAccordion">
                    <div class="accordion-body text-end">
                        نص وصفي عن خدمات الرخص...
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingTwo">
                    <button class="accordion-button collapsed text-end" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        الحالة المدنية
                    </button>
                </h2>
                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                    data-bs-parent="#servicesAccordion">
                    <div class="accordion-body text-end">
                        <ul>
                            <li>عقد الازدياد
                                <ul>
                                    <li>
                                        نسخة موجزة من عقد الازدياد

                                    </li>
                                    <li>
                                        نسخة كاملة من عقد الازدياد
                                    </li>
                                </ul>
                            </li>
                            <li>شهادة الوفاة
                                <ul>
                                    <li>
                                        نسخة موجزة من شهادة الوفاة

                                    </li>
                                    <li>
                                        نسخة كاملة من شهادة الوفاة
                                    </li>
                                </ul>
                            </li>
                            <li>البطاقة الشخصية للحالة المدنية</li>
                            <li>التصريح بالولادة</li>
                            <li>التصريح بالوفاة</li>
                        </ul>

                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingThree">
                    <button class="accordion-button collapsed text-end" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                        تصحيح الامضاء والمصادقة على الوثائق
                    </button>
                </h2>
                <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                    data-bs-parent="#servicesAccordion">
                    <div class="accordion-body text-end">
                        نص وصفي عن خدمات تصحيح الامضاء والمصادقة على الوثائق...
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingFour">
                    <button class="accordion-button collapsed text-end" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                        المالية
                    </button>
                </h2>
                <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour"
                    data-bs-parent="#servicesAccordion">
                    <div class="accordion-body text-end">
                        نص وصفي عن الخدمات المالية...
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingFive">
                    <button class="accordion-button collapsed text-end" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFour">
                        مصلحة الموارد البشرية
                    </button>
                </h2>
                <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFour"
                    data-bs-parent="#servicesAccordion">
                    <div class="accordion-body text-end">
                        نص وصفي عن مكتب الضبط...
                    </div>
                </div>
            </div>
        </div>



    </div>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>
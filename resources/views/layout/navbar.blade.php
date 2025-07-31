<nav class="navbar navbar-expand-lg bg-light">
    <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#navbarOffcanvasLg"
        aria-controls="navbarOffcanvasLg">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="offcanvas offcanvas-end" tabindex="-1" id="navbarOffcanvasLg" aria-labelledby="navbarOffcanvasLgLabel">
        <ul class="navbar-nav mb-0 ">
            <li class="nav-item">

                <a href="{{route('home')}}" class="nav-link">الرئيسية<i class="bi bi-house ps-1"></i>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{route('services')}}" class="nav-link">خدمات<i class="bi bi-gear-wide-connected ps-1"></i>
                </a>
            </li>
            <li class="nav-item pl-5">
                <a href="{{route('news')}}" class="nav-link">أخبار الجماعة<i class="bi bi-newspaper ps-1"></i>
                </a>
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
                <a href="https://www.facebook.com/profile.php?id=61578890032437" target="_blank" class="nav-link"><i
                        class="bi bi-facebook"></i>
                </a>

            </li>
            <li class="nav-item">
                <a href="#" class="nav-link">
                    <i class="bi bi-search"></i>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{route('infos')}}" class="nav-link" id="infos">معلومات عن الجماعة</a>
            </li>
        </ul>
    </div>
    <a href="/" class="navbar-brand p-0 m-0" style="position: absolute; top: 0px; right: 20px;">
        <img src="{{ asset('images/mtalssa-logo.png') }}" alt="شعار الجماعة" id="logo">
    </a>
    </div>
</nav>
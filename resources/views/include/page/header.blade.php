<header class="top-navbar">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="index.html">
                <img style="max-width: 100%; height: auto; width: 80px;" src="{{ asset('page/images/logo.jpg') }}" alt="" />
            </a>
            <div style="font-size: 20px; font-weight: bold;">MEEKHAM SOOK</div>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbars-rs-food"
                aria-controls="navbars-rs-food" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbars-rs-food">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item"><a class="nav-link" href="{{ route('page.index') }}">หน้าแรก</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('page.menu') }}">เมนูเครื่องดื่ม</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('page.about') }}">เกี่ยวกับ</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('page.gallery') }}">แกลเลอรี่</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('page.promote') }}">โปรโมชั่น</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('page.contact') }}">ติดต่อ</a></li>
                </ul>
                <li  class="nav-pop">
                    <a href="#" id="cart-btn" class="nav-link">
                        <i class="fa fa-shopping-cart"></i>
                        <span id="cart-count" class="">0</span>
                    </a>
                </li>
            </div>

        </div>
    </nav>
</header>

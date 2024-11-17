@extends('layouts.page')
@section('search.target', route('page.index'))
@section('main')

    <!-- Start slides -->
    <div id="slides" class="cover-slides">
        <ul class="slides-container">
            <li class="text-left">
                <img src="{{ asset('page/images/slider-00.jpg') }}" alt="">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h1 class="m-b-20"><strong>Welcome To <br>MEE KHWAM SOOK</strong></h1>
                            <p><a class="btn btn-lg btn-circle btn-outline-new-white"
                                    href="{{ route('shop.goods') }}">สั่งเครื่องดื่ม</a></p>
                        </div>
                    </div>
                </div>
            </li>
            <li class="text-left">
                <img src="{{ asset('page/images/slider-11.jpg') }}" alt="">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h1 class="m-b-20"><strong>Welcome To <br>มีความสุข ชานมไข่มุกกระบอก</strong></h1>
                            <p><a class="btn btn-lg btn-circle btn-outline-new-white"
                                    href="{{ route('shop.goods') }}">สั่งเครื่องดื่ม</a></p>
                        </div>
                    </div>
                </div>
            </li>
            <li class="text-left">
                <img src="{{ asset('page/images/slider-22.jpg') }}" alt="">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h1 class="m-b-20"><strong>MEE KHWAM SOOK</strong></h1>
                            <p class="m-b-40">“We prioritize eco-conscious practices by using imported, foil-sealed PET
                                bottles.”</p>
                            <p><a class="btn btn-lg btn-circle btn-outline-new-white"
                                    href="{{ route('shop.goods') }}">สั่งเครื่องดื่ม</a></p>
                        </div>
                    </div>
                </div>
            </li>
        </ul>
        <div class="slides-navigation">
            <a href="#" class="next"><i class="fa fa-angle-right" aria-hidden="true"></i></a>
            <a href="#" class="prev"><i class="fa fa-angle-left" aria-hidden="true"></i></a>
        </div>
    </div>
    <!-- End slides -->

    <!-- Start About -->
    <div class="about-section-box">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12 text-center">
                    <div class="inner-column">
                        <h1>ชานมมีความสุข <span>ชานมไข่มุกกระบอก</span></h1>
                        <h4>เกี่ยวกับมีความสุข</h4>
                        <p>มีเมนูเครื่องดื่มที่หลากหลายถึง 14 รายการจากหลากหลายซีรีส์ รวมถึง ชา ชาผลไม้ และลาเต้นมสด
                            เราพร้อมตอบสนองรสนิยมที่หลากหลายของลูกค้าทุกท่าน ชื่อแบรนด์ของเรา MEE-KHWAM-SOOK ซึ่งแปลว่า
                            "มีความสุข" ในภาษาไทย
                            สะท้อนถึงแก่นแท้พันธกิจของเราด้วยการนำเสนอความสมดุลที่สมบูรณ์แบบระหว่างคุณภาพ ราคา
                            ความสามารถในการกระจายแบรนด์ และความพอใจของลูกค้า MEE-KHWAM-SOOK
                            กำลังนิยามความอร่อยในแบบของตัวเองเกี่ยวกับประสบการณ์ให้กับผู้ที่ชื่นชอบในการดื่มชานมไข่มุก
                        </p>
                        <a class="btn btn-lg btn-circle btn-outline-new-white fa fa-facebook"
                            href="https://www.facebook.com/meekhwamsook.sino"></a>
                        <a class="btn btn-lg btn-circle btn-outline-new-white fa fa-instagram"
                            href="https://www.instagram.com/meekhwamsook.sinopark?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc0MzIxNw==""></a>
                    </div>
                </div>
                <div class=" col-lg-6 col-md-6 col-sm-12">
                    <img src="{{ asset('page/images/about.jpg') }}" alt="" class="img-fluid">
                </div>
            </div>
        </div>
    </div>
    <!-- End About -->

    <!-- Start QT -->
    <div class="qt-box qt-background">
        <div class="container">
            <div class="row">
                <div class="col-md-8 ml-auto mr-auto text-center">
                    <p class="lead" style="font-size: 18px;">
                        “We prioritize eco-conscious practices by using imported, foil-sealed PET bottles.”
                    </p>
                    <span class="lead">มีความสุข</span>
                </div>
            </div>
        </div>
    </div>
    <!-- End QT -->

    <!-- Start Menu -->
    <div class="menu-box">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="heading-title text-center">
                        <h2>เมนูแนะนำ</h2>
                        <p>ร้านชานมมีความสุข ซิโนพาร์ค</p>
                    </div>
                </div>
            </div>
            <div class="stuff-box">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4 col-sm-6">
                            <div class="our-team">
                                <div class="pic">
                                    <img src="{{ asset('page/images/menu-01.jpg') }}">
                                </div>
                                <div class="team-content">
                                    <h3 class="title">ชานมมีความสุข</h3>
                                    <span class="post">60 ฿</span>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4 col-sm-6">
                            <div class="our-team">
                                <div class="pic">
                                    <img src="{{ asset('page/images/menu-02.jpg') }}">
                                </div>
                                <div class="team-content">
                                    <h3 class="title">นมสดโคฟุกุ</h3>
                                    <span class="post">60 ฿</span>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4 col-sm-6">
                            <div class="our-team">
                                <div class="pic">
                                    <img src="{{ asset('page/images/menu-03.jpg') }}">
                                </div>
                                <div class="team-content">
                                    <h3 class="title">ชาเขียวมัทฉะชิอาวาเสะ</h3>
                                    <span class="post">60 ฿</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- End Menu -->

@endsection

@extends('layouts.page')
@section('search.target', route('page.about'))
@section('main')

    <!-- Start header -->
    <div class="all-page-title page-breadcrumb">
        <div class="container text-center">
            <div class="row">
                <div class="col-lg-12">
                    <h1>ร้านชานมมีความสุข สาขาซิโนพาร์ค</h1>
                </div>
            </div>
        </div>
    </div>
    <!-- End header -->

    <!-- Start About -->
    <div class="about-section-box">
        <div class="container">
            <div class="row">
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
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <img src="images/about.jpg" alt="" class="img-fluid">
                    </div>
                </div>
                <!-- <div class="col-md-12">
                    <div class="inner-pt">
                        <p>Sed tincidunt, neque at egestas imperdiet, nulla sapien blandit nunc, sit amet pulvinar orci nibh ut massa. Proin nec lectus sed nunc placerat semper. Duis hendrerit elit nec sapien porttitor, ut pretium ipsum feugiat. Aenean volutpat porta nisi in gravida. Curabitur pulvinar ligula sed facilisis bibendum. Nullam vitae nulla elit. </p>
                        <p>Integer purus velit, eleifend eu magna volutpat, porttitor blandit lectus. Aenean risus odio, efficitur quis erat eget, mattis tristique arcu. Fusce in ante enim. Integer consectetur elit nec laoreet rutrum. Mauris porta turpis nec tellus accumsan pellentesque. Morbi non quam tempus, convallis urna in, cursus mauris. </p>
                    </div>
                </div> -->
            </div>
        </div>
    </div>
    <!-- End About -->

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
                                    <img src="images/menu-01.jpg">
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
                                    <img src="images/menu-02.jpg">
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
                                    <img src="images/menu-03.jpg">
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

@extends('layouts.page')
@section('search.target', route('page.gallery'))
@section('main')

    <!-- Start All Pages -->
    <div class="all-page-title page-breadcrumb">
        <div class="container text-center">
            <div class="row">
                <div class="col-lg-12">
                    <h1>Gallery</h1>
                </div>
            </div>
        </div>
    </div>
    <!-- End All Pages -->

    <!-- Start Gallery -->
    <div class="gallery-box">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="heading-title text-center">
                        <h2>แกลเลอรี่</h2>
                        <p>ร้านชานมมีความสุข สาขาซิโนพาร์ค</p>
                    </div>
                </div>
            </div>
            <div class="tz-gallery">
                <div class="row">
                    <div class="col-sm-12 col-md-4 col-lg-4">
                        <a class="lightbox" href="images/gallery-img-01.jpg">
                            <img class="img-fluid" src="images/gallery-img-01.jpg" alt="Gallery Images">
                        </a>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-4">
                        <a class="lightbox" href="images/gallery-img-02.jpg">
                            <img class="img-fluid" src="images/gallery-img-02.jpg" alt="Gallery Images">
                        </a>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-4">
                        <a class="lightbox" href="images/gallery-img-03.jpg">
                            <img class="img-fluid" src="images/gallery-img-03.jpg" alt="Gallery Images">
                        </a>
                    </div>
                    <div class="col-sm-12 col-md-4 col-lg-4">
                        <a class="lightbox" href="images/gallery-img-04.jpg">
                            <img class="img-fluid" src="images/gallery-img-04.jpg" alt="Gallery Images">
                        </a>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-4">
                        <a class="lightbox" href="images/gallery-img-05.jpg">
                            <img class="img-fluid" src="images/gallery-img-05.jpg" alt="Gallery Images">
                        </a>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-4">
                        <a class="lightbox" href="images/gallery-img-06.jpg">
                            <img class="img-fluid" src="images/gallery-img-06.jpg" alt="Gallery Images">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Gallery -->

@endsection

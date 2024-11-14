@extends('layouts.page')
@section('search.target', route('page.contact'))
@section('main')

    <!-- Start All Pages -->
    <div class="all-page-title page-breadcrumb">
        <div class="container text-center">
            <div class="row">
                <div class="col-lg-12">
                    <h1>ติดต่อ</h1>
                </div>
            </div>
        </div>
    </div>
    <!-- End All Pages -->

    <!-- Start Contact -->
    <div class="">
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3874.3340851740286!2d100.52689727509144!3d13.8189666865799!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30e29d1dd7f459eb%3A0xde5e694004defa72!2sSmallDog%20Milk%20Tea%202!5e0!3m2!1sth!2sth!4v1725547717051!5m2!1sth!2sth"
            class="left-0 top-0 h-full w-full rounded-t-lg lg:rounded-tr-none lg:rounded-bl-lg" width="100%" width="auto"
            height="400px" frameborder="0" allowfullscreen>
        </iframe>
    </div>
    <div class="contact-box">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="heading-title text-center">
                        <h2>ติดต่อ</h2>
                        <p>ร้านชานมมีความสุข สาขาซิโนพาร์ค</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <form id="contactForm">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <input type="text" class="form-control" id="name" name="name"
                                        placeholder="ชื่อ" required data-error="Please enter your name">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <input type="text" placeholder="หัวข้อ" id="email" class="form-control"
                                        name="name" required data-error="Please enter your email">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <!-- <div class="col-md-12">
                            <div class="form-group">
                                <select class="custom-select d-block form-control" id="guest" required data-error="Please Select Person">
                                  <option disabled selected>Please Select Person*</option>
                                  <option value="1">1</option>
                                  <option value="2">2</option>
                                  <option value="3">3</option>
                                  <option value="4">4</option>
                                  <option value="5">5</option>
                                </select>
                                <div class="help-block with-errors"></div>
                            </div>
                        </div> -->
                            <div class="col-md-12">
                                <div class="form-group">
                                    <textarea class="form-control" id="message" placeholder="ข้อความ" rows="4" data-error="Write your message"
                                        required></textarea>
                                    <div class="help-block with-errors"></div>
                                </div>
                                <div class="submit-button text-center">
                                    <button class="btn btn-common" id="submit" type="submit">ส่ง</button>
                                    <div id="msgSubmit" class="h3 text-center hidden"></div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- End Contact -->

    <!-- Start Contact info -->
    <div class="contact-imfo-box">
        <div class="container">
            <div class="row">
                <div class="col-md-4 ">
                    <i class="fa fa-volume-control-phone"></i>
                    <div class="overflow-hidden">
                        <h4>โทรศัพท์</h4>
                        <p class="lead">
                            082 831 2694
                        </p>
                    </div>
                </div>
                <div class="col-md-4 ">
                    <i class="fa fa-envelope"></i>
                    <div class="overflow-hidden">
                        <h4>Email</h4>
                        <p class="lead">
                            meekhamsook.cafe@hotmail.com
                        </p>
                    </div>
                </div>
                <div class="col-md-4">
                    <i class="fa fa-map-marker"></i>
                    <div class="overflow-hidden">
                        <h4>ทีอยู่</h4>
                        <p class="lead">
                            แพรกษา สมุทรปราการ
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Contact info -->

@endsection

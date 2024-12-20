@extends('layouts.page')
@section('search.target', route('page.promote'))
@section('main')

    <!-- Start All Pages -->
    <div class="all-page-title page-breadcrumb">
        <div class="container text-center">
            <div class="row">
                <div class="col-lg-12">
                    <h1>โปรโมชั่น</h1>
                </div>
            </div>
        </div>
    </div>
    <!-- End All Pages -->

    <!-- Start blog details -->
    <div class="blog-box">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="heading-title text-center">
                        <h2>โปรโมชั่นวันนี้</h2>
                        <p>ร้านชานมมีความสุข ซิโนพาร์ค</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-8 col-lg-8 col-12">
                    <div class="blog-inner-details-page">
                        <div class="blog-inner-box">
                            <div class="side-blog-img">
                                <img class="img-fluid" src="images/promotion.jpg" alt="">
                                <div class="date-blog-up">
                                    27 Fab
                                </div>
                            </div>
                            <div class="inner-blog-detail details-page">
                                <h1>Promotion SELF LOVE</h1>
                                <ul>
                                    <li><i class="zmdi zmdi-account"></i>ระยะเวลาโปรโมชั่น : <span>21 สิงหาคม - 10 ตุลาคม</span></li>
                                    <li>|</li>
                                    <li><i class="zmdi zmdi-time"></i>Time : <span>9.00 - 21.00</span></li>
                                </ul>

                                <blockquote>
                                    <h2>Valentine's day</h2>
                                    <p>Self LOve is The Best Love
                                        <br>
                                        ของขวัญที่ดีที่สุดคือการเห็นตัวเองมีความสุข
                                    </p>
                                </blockquote>
                            </div>
                        </div>
                        {{-- <div class="blog-comment-box">
                            <h3>Comments</h3>
                            <div class="comment-item">
                                <div class="comment-item-left">
                                    <img src="images/avt-img.jpg" alt="">
                                </div>
                                <div class="comment-item-right">
                                    <div class="pull-left">
                                        <a href="#">Rubel Ahmed</a>
                                    </div>
                                    <div class="pull-right">
                                        <i class="fa fa-clock-o" aria-hidden="true"></i>Time : <span>11.30 am</span>
                                    </div>
                                    <div class="des-l">
                                        <p>Morbi lacinia ultrices lorem id tincidunt. Cras id dui risus. Pellentesque
                                            consectetur id mi sed pharetra. Proin imperdiet gravida nisl, sit amet varius
                                            urna. In auctor.</p>
                                    </div>
                                    <a href="#" class="right-btn-re"><i class="fa fa-reply" aria-hidden="true"></i>
                                        Reply</a>
                                </div>
                            </div>
                            <div class="comment-item children">
                                <div class="comment-item-left">
                                    <img src="images/avt-img.jpg" alt="">
                                </div>
                                <div class="comment-item-right">
                                    <div class="pull-left">
                                        <a href="#">Admin</a>
                                    </div>
                                    <div class="pull-right">
                                        <i class="fa fa-clock-o" aria-hidden="true"></i>Time : <span>1.30 pm</span>
                                    </div>
                                    <div class="des-l">
                                        <p>Morbi lacinia ultrices lorem id tincidunt. Cras id dui risus. Pellentesque
                                            consectetur id mi sed pharetra. Proin imperdiet gravida nisl, sit amet varius
                                            urna. In auctor.</p>
                                    </div>
                                    <a href="#" class="right-btn-re"><i class="fa fa-reply" aria-hidden="true"></i>
                                        Reply</a>
                                </div>
                            </div>
                            <div class="comment-item">
                                <div class="comment-item-left">
                                    <img src="images/avt-img.jpg" alt="">
                                </div>
                                <div class="comment-item-right">
                                    <div class="pull-left">
                                        <a href="#">Rubel Ahmed</a>
                                    </div>
                                    <div class="pull-right">
                                        <i class="fa fa-clock-o" aria-hidden="true"></i>Time : <span>11.30 am</span>
                                    </div>
                                    <div class="des-l">
                                        <p>Morbi lacinia ultrices lorem id tincidunt. Cras id dui risus. Pellentesque
                                            consectetur id mi sed pharetra. Proin imperdiet gravida nisl, sit amet varius
                                            urna. In auctor.</p>
                                    </div>
                                    <a href="#" class="right-btn-re"><i class="fa fa-reply" aria-hidden="true"></i>
                                        Reply</a>
                                </div>
                            </div>
                        </div> --}}
                        {{-- <div class="comment-respond-box">
                            <h3>Leave your comment </h3>
                            <div class="comment-respond-form">
                                <form id="commentrespondform" class="comment-form-respond row" method="post">
                                    <div class="col-lg-6 col-md-6 col-sm-6">
                                        <div class="form-group">
                                            <input id="name_com" class="form-control" name="name" placeholder="Name"
                                                type="text">
                                        </div>
                                        <div class="form-group">
                                            <input id="email_com" class="form-control" name="email"
                                                placeholder="Your Email" type="email">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6">
                                        <div class="form-group">
                                            <textarea class="form-control" id="textarea_com" placeholder="Your Message" rows="2"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12">
                                        <button class="btn btn-submit">Submit comment</button>
                                    </div>
                                </form>
                            </div>
                        </div> --}}
                    </div>
                </div>

                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-8 col-12 blog-sidebar">
                    <div class="right-side-blog">
                        <h3>ค้นหาโปรโมชั่นอื่นๆ</h3>
                        <div class="blog-search-form">
                            <input name="search" placeholder="Search blog" type="text">
                            <button class="search-btn">
                                <i class="fa fa-search" aria-hidden="true"></i>
                            </button>
                        </div>
                        <h3>โปรโมชั่นช่วงเวลาอื่นๆ</h3>
                        <div class="blog-categories">
                            <ul>
                                <li><a href="#"><span>โปรโมชั่นประจำร้าน</span></a></li>
                                <li><a href="#"><span>valentine's day</span></a></li>
                                <li><a href="#"><span>christmas day</span></a></li>
                                <li><a href="#"><span>Self Love</span></a></li>
                                <li><a href="#"><span>รสชาติใหม่</span></a></li>                        </ul>
                        </div>
                        {{-- <h3>Recent Post</h3>
                        <div class="post-box-blog">
                            <div class="recent-post-box">
                                <div class="recent-box-blog">
                                    <div class="recent-img">
                                        <img class="img-fluid" src="images/post-img-01.jpg" alt="">
                                    </div>
                                    <div class="recent-info">
                                        <ul>
                                            <li><i class="zmdi zmdi-account"></i>Posted By : <span>Rubel Ahmed</span></li>
                                            <li>|</li>
                                            <li><i class="zmdi zmdi-time"></i>Time : <span>11.30 am</span></li>
                                        </ul>
                                        <h4>Duis feugiat neque sed dolor cursus, sed lacinia nisl pretium.</h4>
                                    </div>
                                </div>
                                <div class="recent-box-blog">
                                    <div class="recent-img">
                                        <img class="img-fluid" src="images/post-img-02.jpg" alt="">
                                    </div>
                                    <div class="recent-info">
                                        <ul>
                                            <li><i class="zmdi zmdi-account"></i>Posted By : <span>Rubel Ahmed</span></li>
                                            <li>|</li>
                                            <li><i class="zmdi zmdi-time"></i>Time : <span>11.30 am</span></li>
                                        </ul>
                                        <h4>Duis feugiat neque sed dolor cursus, sed lacinia nisl pretium.</h4>
                                    </div>
                                </div>
                                <div class="recent-box-blog">
                                    <div class="recent-img">
                                        <img class="img-fluid" src="images/post-img-03.jpg" alt="">
                                    </div>
                                    <div class="recent-info">
                                        <ul>
                                            <li><i class="zmdi zmdi-account"></i>Posted By : <span>Rubel Ahmed</span></li>
                                            <li>|</li>
                                            <li><i class="zmdi zmdi-time"></i>Time : <span>11.30 am</span></li>
                                        </ul>
                                        <h4>Duis feugiat neque sed dolor cursus, sed lacinia nisl pretium.</h4>
                                    </div>
                                </div>
                                <div class="recent-box-blog">
                                    <div class="recent-img">
                                        <img class="img-fluid" src="images/post-img-01.jpg" alt="">
                                    </div>
                                    <div class="recent-info">
                                        <ul>
                                            <li><i class="zmdi zmdi-account"></i>Posted By : <span>Rubel Ahmed</span></li>
                                            <li>|</li>
                                            <li><i class="zmdi zmdi-time"></i>Time : <span>11.30 am</span></li>
                                        </ul>
                                        <h4>Duis feugiat neque sed dolor cursus, sed lacinia nisl pretium.</h4>
                                    </div>
                                </div>
                            </div>
                        </div> --}}
                            {{-- <h3>Recent Tag</h3>
                            <div class="blog-tag-box">
                                <ul class="list-inline tag-list">
                                    <li class="list-inline-item"><a href="#">Food</a></li>
                                    <li class="list-inline-item"><a href="#">Drink</a></li>
                                    <li class="list-inline-item"><a href="#">Nature</a></li>
                                    <li class="list-inline-item"><a href="#">Italian</a></li>
                                    <li class="list-inline-item"><a href="#">Bootstrap4</a></li>
                                    <li class="list-inline-item"><a href="#">Fashion</a></li>
                                </ul>
                            </div> --}}
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- End details -->

@endsection

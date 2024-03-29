        @extends('layout.mainlayout')

        @section('page')

        <!-- Start Banner Area -->
        <section class="banner-area organic-breadcrumb">
            <div class="container">
                <div class="breadcrumb-banner d-flex flex-wrap align-items-center">
                    <div class="col-first">
                        <h1>Detail Vendor</h1>
                         <nav class="d-flex align-items-center justify-content-start">
                            <a href="/">Home<i class="fa fa-caret-right" aria-hidden="true"></i></a>
                            <a href="/category">Category<i class="fa fa-caret-right" aria-hidden="true"></i></a>
                            <a href="#">Detail Vendor</a>
                        </nav>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Banner Area -->

        <!-- Start Product Details -->
        <div class="container">
            <div class="product-quick-view">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="quick-view-carousel-details">
                            <div class="item" style="background: url({{asset($products->image_path)}});">


                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="quick-view-content">
                            <div class="top">
                                <h3 class="head">{{$products->name}}</h3>
                                <div class="price d-flex align-items-center"><span class="lnr lnr-tag"></span> <span class="ml-10">{{$products->price}} $</span></div>
                                <div class="category">Category: <span>Sound</span></div>
                                <div class="available">Availibility: <span>Available</span></div>
                            </div>
                            <div class="middle">
                                <p class="content">PROSound adalah peneydia jasa layanan sound system profesional dengan berbagai pengalaman event.</p>
                            </div>
                            <div >
                                <!-- <div class="quantity-container d-flex align-items-center mt-15">
                                    Quantity:
                                    <input type="text" class="quantity-amount ml-15" value="1" />
                                    <div class="arrow-btn d-inline-flex flex-column">
                                        <button class="increase arrow" type="button" title="Increase Quantity"><span class="lnr lnr-chevron-up"></span></button>
                                        <button class="decrease arrow" type="button" title="Decrease Quantity"><span class="lnr lnr-chevron-down"></span></button>
                                    </div>

                                </div> -->
                                <div class="d-flex mt-20">
                                    <a href="#" class="view-btn color-2"><span>Add to Cart</span></a>
                                    <a href="#" class="like-btn"><span class="lnr lnr-layers"></span></a>
                                    <a href="#" class="like-btn"><span class="lnr lnr-heart"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="details-tab-navigation d-flex justify-content-center mt-30">
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li>
                        <a class="nav-link" id="description-tab" data-toggle="tab" href="#description" role="tab" aria-controls="description" aria-expanded="true">Description</a>
                    </li>
                    <li>
                        <a class="nav-link" id="specification-tab" data-toggle="tab" href="#specification" role="tab" aria-controls="specification">Specification</a>
                    </li>
                    <li>
                        <a class="nav-link" id="comments-tab" data-toggle="tab" href="#comments" role="tab" aria-controls="comments">Comments</a>
                    </li>
                    <li>
                        <a class="nav-link active" id="reviews-tab" data-toggle="tab" href="#reviews" role="tab" aria-controls="reviews">Reviews</a>
                    </li>
                </ul>
            </div>
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade" id="description" role="tabpanel" aria-labelledby="description">
                    <div class="description">
                        <p>>PROSound adalah peneydia jasa layanan sound system profesional dengan berbagai pengalaman event</p>
                    </div>
                </div>
                <div class="tab-pane fade" id="specification" role="tabpanel" aria-labelledby="specification">
                    <div class="specification-table">
                        <div class="single-row">
                            <span>Width</span>
                            <span>128mm</span>
                        </div>
                        <div class="single-row">
                            <span>Height</span>
                            <span>508mm</span>
                        </div>
                        <div class="single-row">
                            <span>Depth</span>
                            <span>85mm</span>
                        </div>
                        <div class="single-row">
                            <span>Weight</span>
                            <span>52gm</span>
                        </div>
                        <div class="single-row">
                            <span>Quality checking</span>
                            <span>Yes</span>
                        </div>
                        <div class="single-row">
                            <span>Freshness Duration</span>
                            <span>03days</span>
                        </div>
                        <div class="single-row">
                            <span>When packeting</span>
                            <span>Without touch of hand</span>
                        </div>
                        <div class="single-row">
                            <span>Each Box contains</span>
                            <span>60pcs</span>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="comments" role="tabpanel" aria-labelledby="comments">
                    <div class="review-wrapper">
                        <div class="row">
                            <div class="col-xl-6">
                                <div class="total-comment">
                                    <div class="single-comment">
                                        <div class="user-details d-flex align-items-center flex-wrap">
                                            <img src="img/organic-food/u1.png" class="img-fluid order-1 order-sm-1" alt="">
                                            <div class="user-name order-3 order-sm-2">
                                                <h5>Blake Ruiz</h5>
                                                <span>12th Feb, 2017 at 05:56 pm</span>
                                            </div>
                                            <a href="#" class="view-btn color-2 reply order-2 order-sm-3"><i class="fa fa-reply" aria-hidden="true"></i><span>Reply</span></a>
                                        </div>

                                        <p class="user-comment">
                                            Acres of Diamonds… you’ve read the famous story, or at least had it related to you. A farmer hears tales of diamonds and begins dreaming of vast riches. He sells his farm and hikes off over the horizon, never to be heard from again.
                                        </p>
                                    </div>
                                    <div class="single-comment reply-comment">
                                        <div class="user-details d-flex align-items-center flex-wrap">
                                            <img src="img/organic-food/u2.png" class="img-fluid order-1 order-sm-1" alt="">
                                            <div class="user-name order-3 order-sm-2">
                                                <h5>Logan May</h5>
                                                <span>12th Feb, 2017 at 05:56 pm</span>
                                            </div>
                                            <a href="#" class="view-btn color-2 reply order-2 order-sm-3"><i class="fa fa-reply" aria-hidden="true"></i><span>Reply</span></a>
                                        </div>
                                        <p class="user-comment">
                                            Acres of Diamonds… you’ve read the famous story, or at least had it related to you. A farmer hears tales of diamonds and begins dreaming of vast riches. He sells his farm and hikes off over the horizon, never to be heard from again.
                                        </p>
                                    </div>
                                    <div class="single-comment">
                                        <div class="user-details d-flex align-items-center flex-wrap">
                                            <img src="img/organic-food/u3.png" class="img-fluid order-1 order-sm-1" alt="">
                                            <div class="user-name order-3 order-sm-2">
                                                <h5>Aaron Anderson</h5>
                                                <span>12th Feb, 2017 at 05:56 pm</span>
                                            </div>
                                            <a href="#" class="view-btn color-2 reply order-2 order-sm-3"><i class="fa fa-reply" aria-hidden="true"></i><span>Reply</span></a>
                                        </div>
                                        <p class="user-comment">
                                            Acres of Diamonds… you’ve read the famous story, or at least had it related to you. A farmer hears tales of diamonds and begins dreaming of vast riches. He sells his farm and hikes off over the horizon, never to be heard from again.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="add-review">
                                    <h3>Post a comment</h3>
                                    <form action="#" class="main-form">
                                        <input type="text" placeholder="Your Full name" onfocus="this.placeholder=''" onblur="this.placeholder = 'Your Full name'" required class="common-input">
                                        <input type="email" pattern="[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{1,63}$" placeholder="Email Address" onfocus="this.placeholder=''" onblur="this.placeholder = 'Email Address'" required class="common-input">
                                        <input type="text" placeholder="Phone Number" onfocus="this.placeholder=''" onblur="this.placeholder = 'Phone Number'" required class="common-input">
                                        <textarea placeholder="Messege" onfocus="this.placeholder=''" onblur="this.placeholder = 'Messege'" required class="common-textarea"></textarea>
                                        <button class="view-btn color-2"><span>Submit Now</span></button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade show active" id="reviews" role="tabpanel" aria-labelledby="reviews">
                    <div class="review-wrapper">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="review-stat d-flex align-items-center flex-wrap">
                                    <div class="review-overall">
                                        <h3>Overall</h3>
                                        <div class="main-review">4.0</div>
                                        <span>(03 Reviews)</span>
                                    </div>
                                    <div class="review-count">
                                        <h4>Based on 3 Reviews</h4>
                                        <div class="single-review-count d-flex align-items-center">
                                            <span>5 Star</span>
                                            <div class="total-star five-star d-flex align-items-center">
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                            </div>
                                            <span>01</span>
                                        </div>
                                        <div class="single-review-count d-flex align-items-center">
                                            <span>4 Star</span>
                                            <div class="total-star four-star d-flex align-items-center">
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                            </div>
                                            <span>01</span>
                                        </div>
                                        <div class="single-review-count d-flex align-items-center">
                                            <span>3 Star</span>
                                            <div class="total-star three-star d-flex align-items-center">
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                            </div>
                                            <span>01</span>
                                        </div>
                                        <div class="single-review-count d-flex align-items-center">
                                            <span>2 Star</span>
                                            <div class="total-star two-star d-flex align-items-center">
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                            </div>
                                            <span>00</span>
                                        </div>
                                        <div class="single-review-count d-flex align-items-center">
                                            <span>1 Star</span>
                                            <div class="total-star one-star d-flex align-items-center">
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                            </div>
                                            <span>00</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="total-comment">
                                    <div class="single-comment">
                                        <div class="user-details d-flex align-items-center">
                                            <img src="img/organic-food/u1.png" class="img-fluid" alt="">
                                            <div class="user-name">
                                                <h5>Blake Ruiz</h5>
                                                <div class="total-star five-star d-flex align-items-center">
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <p class="user-comment">
                                            Acres of Diamonds… you’ve read the famous story, or at least had it related to you. A farmer hears tales of diamonds and begins dreaming of vast riches. He sells his farm and hikes off over the horizon, never to be heard from again.
                                        </p>
                                    </div>
                                    <div class="single-comment">
                                        <div class="user-details d-flex align-items-center">
                                            <img src="img/organic-food/u2.png" class="img-fluid" alt="">
                                            <div class="user-name">
                                                <h5>Logan May</h5>
                                                <div class="total-star four-star d-flex align-items-center">
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <p class="user-comment">
                                            Acres of Diamonds… you’ve read the famous story, or at least had it related to you. A farmer hears tales of diamonds and begins dreaming of vast riches. He sells his farm and hikes off over the horizon, never to be heard from again.
                                        </p>
                                    </div>
                                    <div class="single-comment">
                                        <div class="user-details d-flex align-items-center">
                                            <img src="img/organic-food/u3.png" class="img-fluid" alt="">
                                            <div class="user-name">
                                                <h5>Aaron Anderson</h5>
                                                <div class="total-star three-star d-flex align-items-center">
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <p class="user-comment">
                                            Acres of Diamonds… you’ve read the famous story, or at least had it related to you. A farmer hears tales of diamonds and begins dreaming of vast riches. He sells his farm and hikes off over the horizon, never to be heard from again.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="add-review">
                                    <h3>Add a Review</h3>
                                    <div class="single-review-count mb-15 d-flex align-items-center">
                                        <span>Your Rating:</span>
                                        <div class="total-star five-star d-flex align-items-center">
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                        </div>
                                        <span>Outstanding</span>
                                    </div>
                                    <form action="#" class="main-form">
                                        <input type="text" placeholder="Your Full name" onfocus="this.placeholder=''" onblur="this.placeholder = 'Your Full name'" required class="common-input">
                                        <input type="email" pattern="[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{1,63}$" placeholder="Email Address" onfocus="this.placeholder=''" onblur="this.placeholder = 'Email Address'" required class="common-input">
                                        <input type="text" placeholder="Phone Number" onfocus="this.placeholder=''" onblur="this.placeholder = 'Phone Number'" required class="common-input">
                                        <textarea placeholder="Review" onfocus="this.placeholder=''" onblur="this.placeholder = 'Review'" required class="common-textarea"></textarea>
                                        <button class="view-btn color-2"><span>Submit Now</span></button>
                                    </form>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Product Details -->


        @endsection

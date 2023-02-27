@include('common.header')
<div role="main" class="main">
    <section class="padding-bottom" style="margin-top:-30px;">
        <!--   Big container   --> 
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="call-to-action featured featured-primary mt-5" style="display:block !important;">
                        <div class="wizard-form">
                            <div class="wizard-header" id="wizard-title">
                                <h3 class="heading">Find your Name</h3>
                                <div class="mt-3">
                                    <p>The power of a .eth name but on a blockchain that's even more secure than Ethereum.  Best of all, we're giving it to you for FREE:  no money, no cookies, no email. </p> 
                                    <hr> 
                                    <p>A FREE .bit name of your own.  Whether this is your first NFT or not, it very well should be your most cherished.  Enjoy!</p>
                                </div>
                            </div>
                            <form class="form-register" action="#" method="post">
                                <div id="form-total">
                                    <!-- SECTION 1 -->
                                    <h2>
                                        <span class="step-icon"><i class="zmdi zmdi-search"></i></span>
                                        <span class="step-text">Name</span>
                                    </h2>
                                    <section>
                                        <div class="col-12 checknamepaddingtop" style="padding-top:30px;">
                                            <div class="row justify-content-center">
                                                <!-- <div class="col-sm-3" style="padding-top:10px;">
                                                    <label for="surename">Check Name</label>
                                                </div> -->
                                                <div class="col-8 col-sm-8 offset-md-1">
                                                    <input type="text" placeholder="Check Your Name" id="request_domainName" required="">
                                                </div>
                                                <div class="col-1 col-sm-1" style="margin-left:-20px;">
                                                    <h4 style="padding-top:15px;">.bit</h4>
                                                </div>
                                                <div class="col-3 col-sm-2 col-md-2" id="namestatus">
                                                </div>
                                            </div>
                                            <div class="row justify-content-start">
                                                <div class="col-sm-6 offset-sm-2" style="padding-top:2px; padding-left:50px" id="validateText">
                                                </div>
                                            </div>
                                        </div>
                                    </section>
                                    <!-- SECTION 2 -->
                                    <h2>
                                        <span class="step-icon"><i class="zmdi zmdi-download"></i></span>
                                        <span class="step-text download">Download</span>
                                    </h2>
                                    <section>
                                        <div class="col-12">
                                            <div class="row justify-content-center">
                                                <div class="col-sm-3">
                                                    <label for="surename"><h4 style="align-self:center; margin-top: 10px;">Your Wallet Address</h4></label>
                                                </div>
                                                <div class="col-sm-8">
                                                    <input type="text" placeholder="Enter Your Wallet Address" id="wallet_address" required="" maxlength="42">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12" style="padding-top:20px;">
                                            <div class="row justify-content-center">
                                                <div class="col-12">
                                                    <h1 class="word-rotator slide font-weight-bold text-8 text-center" style="margin-bottom:0px !important;">
                                                        <span>Download Here</span>
                                                    </h1>
                                                    <h4 class="text-center">
                                                        <span>All downloads come from the official Namecoin site, <a href ="https://www.namecoin.org/">https://www.namecoin.org/</a></span>
                                                    </h4>
                                                </div>
                                            </div>
                                        </div>
                                        <hr/>
                                        <div class="col-12" style="padding-top:20px;">
                                            <div class="row justify-content-center mb-30-none">
                                                <div class="col-6 col-sm-6 col-lg-3">
                                                    <div class="am-item">
                                                        <div class="download-item active">
                                                            <a href="https://www.namecoin.org/files/electrum-nmc/electrum-nmc-4.0.0b0/electrum-nmc-nc4.0.0b0-setup.exe" target="_blank" class="thumb"><i class="fab fa-windows"></i></a>
                                                        </div>
                                                        <div class="am-content">
                                                            <a href="https://www.namecoin.org/files/electrum-nmc/electrum-nmc-4.0.0b0/electrum-nmc-nc4.0.0b0-setup.exe" target="_blank">Windows</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-6 col-sm-6 col-lg-3">
                                                    <div class="am-item">
                                                        <div class="download-item active">
                                                            <a href="https://www.namecoin.org/files/electrum-nmc/electrum-nmc-4.0.0b0/electrum-nmc-nc4.0.0b0.dmg" target="_blank" class="thumb"><i class="fab fa-apple"></i></a>
                                                        </div>
                                                        <div class="am-content">
                                                            <a href="https://www.namecoin.org/files/electrum-nmc/electrum-nmc-4.0.0b0/electrum-nmc-nc4.0.0b0.dmg" target="_blank">Mac</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-6 col-sm-6 col-lg-3">
                                                    <div class="am-item">
                                                        <div class="download-item active">
                                                            <a href="https://www.namecoin.org/files/electrum-nmc/electrum-nmc-4.0.0b0/Electrum_NMC-4.0.0.0-armeabi-v7a-debug.apk" target="_blank" class="thumb"><i class="fab fa-android"></i></a>
                                                        </div>
                                                        <div class="am-content">
                                                            <a href="https://www.namecoin.org/files/electrum-nmc/electrum-nmc-4.0.0b0/Electrum_NMC-4.0.0.0-armeabi-v7a-debug.apk" target="_blank">Android</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-6 col-sm-6 col-lg-3">
                                                    <div class="am-item">
                                                        <div class="download-item active">
                                                            <a href="https://www.namecoin.org/files/electrum-nmc/electrum-nmc-4.0.0b0/Electrum-NMC-4.0.0b0.tar.xz" target="_blank" class="thumb"><i class="fab fa-linux"></i></a>
                                                        </div>
                                                        <div class="am-content">
                                                            <a href="https://www.namecoin.org/files/electrum-nmc/electrum-nmc-4.0.0b0/Electrum-NMC-4.0.0b0.tar.xz" target="_blank">Linux</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </section>
                                    <!-- SECTION 3 -->
                                    <h2>
                                        <span class="step-icon"><i class="zmdi zmdi-twitter"></i></span>
                                        <span class="step-text">Twitter</span>
                                    </h2>
                                    <section>
                                        <div class="col-12">
                                            <div class="row justify-content-center">
                                                <div class="col-sm-12 col-lg-12" style="margin-bottom:10px">
                                                    <div style="padding-top:10px;"><label><h4>Please change your twitter display name with the domain name you are going to register and click "Next Step" button.</h4></label></div>
                                                </div>
                                            </div>
                                            <div class="row justify-content-center">
                                                <div class="col-sm-3" style="padding-top:10px;">
                                                    <label for="surename">Your Twitter Handle</label>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="input-group">
                                                        <span class="input-group-text text-3">@</span>
                                                        <input type="text" class="form-control" placeholder="Enter Your Twitter Handle" id="twitterUserName" required="">
                                                    </div>
                                                </div>
                                                <!-- <div class="col-sm-6">
                                                    <input type="text" placeholder="Enter Your Twitter Handle" id="twitterUserName" required="">
                                                </div> -->
                                            </div>
                                            <hr/>
                                            <div class="row justify-content-center">
                                                <div class="col-sm-12 my-3 text-center">
                                                    <img src="./assets/img/twitterdisplay/display-1.jpg" style="max-width: 400px; height:250px;width: 100%;" alt="" />
                                                </div>
                                            </div>
                                        </div>
                                    </section>
                                    <!-- SECTION 4 -->
                                    <h2>
                                        <span class="step-icon"><i class="zmdi zmdi-email"></i></span>
                                        <span class="step-text done">Done</span>
                                    </h2>
                                    <section>
                                        <div id="finalstep">
                                            <div class="col-12 alert alert-success" style="padding-top:30px;">
                                                <h3 style="color: #0f5132;text-align: center;font-size: 35px;"><strong>Success <i class="fa fa-check" style="margin-left: 10px;"></i></strong></h3><br> Your name <mark class="text-white bg-color-primary" style="overflow-wrap: break-word;" id="domain-name-mark"></mark> will arrive at <mark class="text-white bg-color-primary" style="overflow-wrap: break-word;" id="wallet-address-mark"></mark> address in 2-4 hours.  If you enjoyed this and feel it may help others decentralize their identities, please share on Twitter, Instagram, TikTok and all other forms of social media.<span class="mx-2">-FreeBit.me</span>
                                            </div>
                                            <h4>How would you rate the ease with which you were able to reserve your .bit name, where 1 is Super Difficult and 10 is Super Easy?</h4>
                                            <div class="row text-center">
                                                <div class="form-group col">
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio" name="rate" id="rate1" value="1">
                                                        <label class="form-check-label" for="rate1"> 1 </label>
                                                    </div>
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio" name="rate" id="rate2" value="2">
                                                        <label class="form-check-label" for="rate2"> 2 </label>
                                                    </div>
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio" name="rate" id="rate3" value="3">
                                                        <label class="form-check-label" for="rate3"> 3 </label>
                                                    </div>
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio" name="rate" id="rate4" value="4">
                                                        <label class="form-check-label" for="rate4"> 4 </label>
                                                    </div>
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio" name="rate" id="rate5" value="5">
                                                        <label class="form-check-label" for="rate5"> 5 </label>
                                                    </div>
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio" name="rate" id="rate6" value="6">
                                                        <label class="form-check-label" for="rate6"> 6 </label>
                                                    </div>
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio" name="rate" id="rate7" value="7">
                                                        <label class="form-check-label" for="rate7"> 7 </label>
                                                    </div>
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio" name="rate" id="rate8" value="8">
                                                        <label class="form-check-label" for="rate8"> 8 </label>
                                                    </div>
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio" name="rate" id="rate9" value="9">
                                                        <label class="form-check-label" for="rate9"> 9 </label>
                                                    </div>
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio" name="rate" id="rate10" value="10">
                                                        <label class="form-check-label" for="rate10"> 10 </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <input type="button" class="btn btn-primary" value="SUBMIT FOR CONFIRMATION CODE" id="survey-submit-btn">
                                        </div>
                                    </section>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div><!-- end row -->
        </div> <!--  big container -->
    </section>
    <div id="slideshow" style="display:none;">
        <div class="container">
            <div class="row text-center">
                <div class="col-md-10 mx-md-auto">
                    <h1 class="word-rotator slide font-weight-bold text-8 mb-3 appear-animation" data-appear-animation="fadeInUpShorter">
                        <span>How to setup your Namecoin Wallet</span>
                    </h1>
                </div>
                <hr/>
            </div>
        </div>
        <div class="owl-carousel owl-carousel-light owl-carousel-light-init-fadeIn owl-theme manual dots-inside dots-horizontal-center show-dots-hover nav-inside nav-inside-plus nav-dark nav-md nav-font-size-md show-nav-hover mb-0" data-plugin-options="{'autoplayTimeout': 7000}" data-dynamic-height="['670px','670px','670px','550px','500px']" style="height: 670px;">
            <div class="owl-stage-outer">
                <div class="owl-stage">

                    <!-- Carousel Slide 1 -->
                    <div class="owl-item position-relative" style="background-image: url(./assets/img/slides/slide-bg-performance.jpg); background-color: #2E3136; background-size: cover; background-position: center;">
                        <div class="container position-relative z-index-1 h-100">
                            <div class="row justify-content-center align-items-center h-100">
                                <div class="col-lg-6 col-sm-12">
                                    <div class="d-flex flex-column align-items-center justify-content-center h-100">
                                        <h3 class="position-relative text-color-light text-5 line-height-5 font-weight-medium px-4 mb-2 appear-animation" data-appear-animation="fadeInDownShorter" data-plugin-options="{'minWindowWidth': 0}">
                                            <span class="position-absolute right-100pct top-50pct transform3dy-n50 opacity-3">
                                                <img src="./assets/img/slides/slide-title-border.png" class="w-auto appear-animation" data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="250" data-plugin-options="{'minWindowWidth': 0}" alt="" />
                                            </span>
                                            <span class="position-relative">Electrum NMC Wallet Settings<span class="position-absolute left-50pct transform3dx-n50 top-0 mt-4"><img src="./assets/img/slides/slide-blue-line.png" class="w-auto appear-animation" data-appear-animation="fadeInLeftShorterPlus" data-appear-animation-delay="1000" data-plugin-options="{'minWindowWidth': 0}" alt="" /></span></span>
                                            <span class="position-absolute left-100pct top-50pct transform3dy-n50 opacity-3">
                                                <img src="./assets/img/slides/slide-title-border.png" class="w-auto appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="250" data-plugin-options="{'minWindowWidth': 0}" alt="" />
                                            </span>
                                        </h3>
                                        <p class="text-4 text-color-light font-weight-light opacity-7 mb-0" data-plugin-animated-letters data-plugin-options="{'startDelay': 1000, 'minWindowWidth': 0}">1. Please Enter Wallet Name What You Want.</p>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-sm-12">
                                    <div class="d-flex flex-column align-items-center justify-content-center h-100">
                                        <img id="describeImage" src="./assets/img/describe/step1.jpg" data-appear-animation="blurIn" style="max-width: 100%;" alt="blog">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Carousel Slide 2 -->
                    <div class="owl-item position-relative overlay overlay-color-primary overlay-show overlay-op-8 lazyload" data-bg-src="./assets/img/slides/slide-bg-2.jpg" style="background-size: cover; background-position: center;">
                        <div class="container position-relative z-index-3 h-100">
                            <div class="row justify-content-center align-items-center h-100">
                                <div class="col-lg-6 col-sm-12">
                                    <div class="d-flex flex-column align-items-center justify-content-center h-100">
                                        <img id="describeImage" src="./assets/img/describe/step2.jpg" data-appear-animation="blurIn" style="max-width: 100%;" alt="blog">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-sm-12">
                                    <div class="d-flex flex-column align-items-center justify-content-center h-100">
                                        <h3 class="position-relative text-color-light text-5 line-height-5 font-weight-medium px-4 mb-2 appear-animation" data-appear-animation="fadeInDownShorter" data-plugin-options="{'minWindowWidth': 0}">
                                            <span class="position-absolute right-100pct top-50pct transform3dy-n50 opacity-3">
                                                <img src="./assets/img/slides/slide-title-border.png" class="w-auto appear-animation" data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="250" data-plugin-options="{'minWindowWidth': 0}" alt="" />
                                            </span>
                                            <span class="position-relative">Electrum NMC Wallet Settings<span class="position-absolute left-50pct transform3dx-n50 top-0 mt-4"><img src="./assets/img/slides/slide-blue-line-light.png" class="w-auto appear-animation" data-appear-animation="fadeInLeftShorterPlus" data-appear-animation-delay="1000" data-plugin-options="{'minWindowWidth': 0}" alt="" /></span></span>
                                            <span class="position-absolute left-100pct top-50pct transform3dy-n50 opacity-3">
                                                <img src="./assets/img/slides/slide-title-border.png" class="w-auto appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="250" data-plugin-options="{'minWindowWidth': 0}" alt="" />
                                            </span>
                                        </h3>
                                        <p class="text-4 text-color-light font-weight-light opacity-7 mb-0" data-plugin-animated-letters data-plugin-options="{'startDelay': 1000, 'minWindowWidth': 0}">2. Please Select Standard Wallet.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Carousel Slide 3 -->
                    <div class="owl-item position-relative overlay overlay-show overlay-op-8 lazyload" data-bg-src="./assets/img/slides/slide-bg-2.jpg" style="background-size: cover; background-position: center;">
                        <div class="container position-relative z-index-3 h-100">
                            <div class="row justify-content-center align-items-center h-100">
                                <div class="col-lg-6 col-sm-12">
                                    <div class="d-flex flex-column align-items-center justify-content-center h-100">
                                        <h3 class="position-relative text-color-light text-5 line-height-5 font-weight-medium px-4 mb-2 appear-animation" data-appear-animation="fadeInDownShorter" data-plugin-options="{'minWindowWidth': 0}">
                                            <span class="position-absolute right-100pct top-50pct transform3dy-n50 opacity-3">
                                                <img src="./assets/img/slides/slide-title-border.png" class="w-auto appear-animation" data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="250" data-plugin-options="{'minWindowWidth': 0}" alt="" />
                                            </span>
                                            <span class="position-relative">Electrum NMC Wallet Settings<span class="position-absolute left-50pct transform3dx-n50 top-0 mt-4"><img src="./assets/img/slides/slide-blue-line.png" class="w-auto appear-animation" data-appear-animation="fadeInLeftShorterPlus" data-appear-animation-delay="1000" data-plugin-options="{'minWindowWidth': 0}" alt="" /></span></span>
                                            <span class="position-absolute left-100pct top-50pct transform3dy-n50 opacity-3">
                                                <img src="./assets/img/slides/slide-title-border.png" class="w-auto appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="250" data-plugin-options="{'minWindowWidth': 0}" alt="" />
                                            </span>
                                        </h3>
                                        <p class="text-4 text-color-light font-weight-light opacity-7 mb-0" data-plugin-animated-letters data-plugin-options="{'startDelay': 1000, 'minWindowWidth': 0}">3. Please Select Create New Seed.</p>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-sm-12">
                                    <div class="d-flex flex-column align-items-center justify-content-center h-100">
                                        <img id="describeImage" src="./assets/img/describe/step3.jpg" data-appear-animation="blurIn" style="max-width: 100%;" alt="blog">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Carousel Slide 4 -->
                    <div class="owl-item position-relative overlay overlay-color-primary overlay-show overlay-op-8 lazyload" data-bg-src="./assets/img/slides/slide-bg-2.jpg" style="background-size: cover; background-position: center;">
                        <div class="container position-relative z-index-3 h-100">
                            <div class="row justify-content-center align-items-center h-100">
                                <div class="col-lg-6 col-sm-12">
                                    <div class="d-flex flex-column align-items-center justify-content-center h-100">
                                        <img id="describeImage" src="./assets/img/describe/step4.jpg" data-appear-animation="blurIn" style="max-width: 100%;" alt="blog">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-sm-12">
                                    <div class="d-flex flex-column align-items-center justify-content-center h-100">
                                        <h3 class="position-relative text-color-light text-5 line-height-5 font-weight-medium px-4 mb-2 appear-animation" data-appear-animation="fadeInDownShorter" data-plugin-options="{'minWindowWidth': 0}">
                                            <span class="position-absolute right-100pct top-50pct transform3dy-n50 opacity-3">
                                                <img src="./assets/img/slides/slide-title-border.png" class="w-auto appear-animation" data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="250" data-plugin-options="{'minWindowWidth': 0}" alt="" />
                                            </span>
                                            <span class="position-relative">Electrum NMC Wallet Settings<span class="position-absolute left-50pct transform3dx-n50 top-0 mt-4"><img src="./assets/img/slides/slide-blue-line-light.png" class="w-auto appear-animation" data-appear-animation="fadeInLeftShorterPlus" data-appear-animation-delay="1000" data-plugin-options="{'minWindowWidth': 0}" alt="" /></span></span>
                                            <span class="position-absolute left-100pct top-50pct transform3dy-n50 opacity-3">
                                                <img src="./assets/img/slides/slide-title-border.png" class="w-auto appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="250" data-plugin-options="{'minWindowWidth': 0}" alt="" />
                                            </span>
                                        </h3>
                                        <p class="text-4 text-color-light font-weight-light opacity-7 mb-0" data-plugin-animated-letters data-plugin-options="{'startDelay': 1000, 'minWindowWidth': 0}">4. Please Select Legacy.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Carousel Slide 5 -->
                    <div class="owl-item position-relative overlay overlay-show overlay-op-8 lazyload" data-bg-src="./assets/img/slides/slide-bg-2.jpg" style="background-size: cover; background-position: center;">
                        <div class="container position-relative z-index-3 h-100">
                            <div class="row justify-content-center align-items-center h-100">
                                <div class="col-lg-6 col-sm-12">
                                    <div class="d-flex flex-column align-items-center justify-content-center h-100">
                                        <h3 class="position-relative text-color-light text-5 line-height-5 font-weight-medium px-4 mb-2 appear-animation" data-appear-animation="fadeInDownShorter" data-plugin-options="{'minWindowWidth': 0}">
                                            <span class="position-absolute right-100pct top-50pct transform3dy-n50 opacity-3">
                                                <img src="./assets/img/slides/slide-title-border.png" class="w-auto appear-animation" data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="250" data-plugin-options="{'minWindowWidth': 0}" alt="" />
                                            </span>
                                            <span class="position-relative">Electrum NMC Wallet Settings<span class="position-absolute left-50pct transform3dx-n50 top-0 mt-4"><img src="./assets/img/slides/slide-blue-line.png" class="w-auto appear-animation" data-appear-animation="fadeInLeftShorterPlus" data-appear-animation-delay="1000" data-plugin-options="{'minWindowWidth': 0}" alt="" /></span></span>
                                            <span class="position-absolute left-100pct top-50pct transform3dy-n50 opacity-3">
                                                <img src="./assets/img/slides/slide-title-border.png" class="w-auto appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="250" data-plugin-options="{'minWindowWidth': 0}" alt="" />
                                            </span>
                                        </h3>
                                        <p class="text-4 text-color-light font-weight-light opacity-7 mb-0" data-plugin-animated-letters data-plugin-options="{'startDelay': 1000, 'minWindowWidth': 0}">5. Please Copy Wallet Seed.</p>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-sm-12">
                                    <div class="d-flex flex-column align-items-center justify-content-center h-100">
                                        <img id="describeImage" src="./assets/img/describe/step5.jpg" data-appear-animation="blurIn" style="max-width: 100%;" alt="blog">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Carousel Slide 6 -->
                    <div class="owl-item position-relative overlay overlay-color-primary overlay-show overlay-op-8 lazyload" data-bg-src="./assets/img/slides/slide-bg-2.jpg" style="background-size: cover; background-position: center;">
                        <div class="container position-relative z-index-3 h-100">
                            <div class="row justify-content-center align-items-center h-100">
                                <div class="col-lg-6 col-sm-12">
                                    <div class="d-flex flex-column align-items-center justify-content-center h-100">
                                        <img id="describeImage" src="./assets/img/describe/step6.jpg" data-appear-animation="blurIn" style="max-width: 100%;" alt="blog">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-sm-12">
                                    <div class="d-flex flex-column align-items-center justify-content-center h-100">
                                        <h3 class="position-relative text-color-light text-5 line-height-5 font-weight-medium px-4 mb-2 appear-animation" data-appear-animation="fadeInDownShorter" data-plugin-options="{'minWindowWidth': 0}">
                                            <span class="position-absolute right-100pct top-50pct transform3dy-n50 opacity-3">
                                                <img src="./assets/img/slides/slide-title-border.png" class="w-auto appear-animation" data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="250" data-plugin-options="{'minWindowWidth': 0}" alt="" />
                                            </span>
                                            <span class="position-relative">Electrum NMC Wallet Settings<span class="position-absolute left-50pct transform3dx-n50 top-0 mt-4"><img src="./assets/img/slides/slide-blue-line-light.png" class="w-auto appear-animation" data-appear-animation="fadeInLeftShorterPlus" data-appear-animation-delay="1000" data-plugin-options="{'minWindowWidth': 0}" alt="" /></span></span>
                                            <span class="position-absolute left-100pct top-50pct transform3dy-n50 opacity-3">
                                                <img src="./assets/img/slides/slide-title-border.png" class="w-auto appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="250" data-plugin-options="{'minWindowWidth': 0}" alt="" />
                                            </span>
                                        </h3>
                                        <p class="text-4 text-color-light font-weight-light opacity-7 mb-0" data-plugin-animated-letters data-plugin-options="{'startDelay': 1000, 'minWindowWidth': 0}">6. Please Enter Wallet Seed.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Carousel Slide 7 -->
                    <div class="owl-item position-relative overlay overlay-show overlay-op-8 lazyload" data-bg-src="./assets/img/slides/slide-bg-2.jpg" style="background-size: cover; background-position: center;">
                        <div class="container position-relative z-index-3 h-100">
                            <div class="row justify-content-center align-items-center h-100">
                                <div class="col-lg-6 col-sm-12">
                                    <div class="d-flex flex-column align-items-center justify-content-center h-100">
                                        <h3 class="position-relative text-color-light text-5 line-height-5 font-weight-medium px-4 mb-2 appear-animation" data-appear-animation="fadeInDownShorter" data-plugin-options="{'minWindowWidth': 0}">
                                            <span class="position-absolute right-100pct top-50pct transform3dy-n50 opacity-3">
                                                <img src="./assets/img/slides/slide-title-border.png" class="w-auto appear-animation" data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="250" data-plugin-options="{'minWindowWidth': 0}" alt="" />
                                            </span>
                                            <span class="position-relative">Electrum NMC Wallet Settings<span class="position-absolute left-50pct transform3dx-n50 top-0 mt-4"><img src="./assets/img/slides/slide-blue-line.png" class="w-auto appear-animation" data-appear-animation="fadeInLeftShorterPlus" data-appear-animation-delay="1000" data-plugin-options="{'minWindowWidth': 0}" alt="" /></span></span>
                                            <span class="position-absolute left-100pct top-50pct transform3dy-n50 opacity-3">
                                                <img src="./assets/img/slides/slide-title-border.png" class="w-auto appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="250" data-plugin-options="{'minWindowWidth': 0}" alt="" />
                                            </span>
                                        </h3>
                                        <p class="text-4 text-color-light font-weight-light opacity-7 mb-0" data-plugin-animated-letters data-plugin-options="{'startDelay': 1000, 'minWindowWidth': 0}">7. Please Set Password.</p>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-sm-12">
                                    <div class="d-flex flex-column align-items-center justify-content-center h-100">
                                        <img id="describeImage" src="./assets/img/describe/step7.jpg" data-appear-animation="blurIn" style="max-width: 100%;" alt="blog">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Carousel Slide 8 -->
                    <div class="owl-item position-relative overlay overlay-color-primary overlay-show overlay-op-8 lazyload" data-bg-src="./assets/img/slides/slide-bg-2.jpg" style="background-size: cover; background-position: center;">
                        <div class="container position-relative z-index-3 h-100">
                            <div class="row justify-content-center align-items-center h-100">
                                <div class="col-lg-6 col-sm-12">
                                    <div class="d-flex flex-column align-items-center justify-content-center h-100">
                                        <img id="describeImage" src="./assets/img/describe/step8.jpg" data-appear-animation="blurIn" style="max-width: 100%;" alt="blog">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-sm-12">
                                    <div class="d-flex flex-column align-items-center justify-content-center h-100">
                                        <h3 class="position-relative text-color-light text-5 line-height-5 font-weight-medium px-4 mb-2 appear-animation" data-appear-animation="fadeInDownShorter" data-plugin-options="{'minWindowWidth': 0}">
                                            <span class="position-absolute right-100pct top-50pct transform3dy-n50 opacity-3">
                                                <img src="./assets/img/slides/slide-title-border.png" class="w-auto appear-animation" data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="250" data-plugin-options="{'minWindowWidth': 0}" alt="" />
                                            </span>
                                            <span class="position-relative">Electrum NMC Wallet Settings<span class="position-absolute left-50pct transform3dx-n50 top-0 mt-4"><img src="./assets/img/slides/slide-blue-line-light.png" class="w-auto appear-animation" data-appear-animation="fadeInLeftShorterPlus" data-appear-animation-delay="1000" data-plugin-options="{'minWindowWidth': 0}" alt="" /></span></span>
                                            <span class="position-absolute left-100pct top-50pct transform3dy-n50 opacity-3">
                                                <img src="./assets/img/slides/slide-title-border.png" class="w-auto appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="250" data-plugin-options="{'minWindowWidth': 0}" alt="" />
                                            </span>
                                        </h3>
                                        <p class="text-4 text-color-light font-weight-light opacity-7 mb-0" data-plugin-animated-letters data-plugin-options="{'startDelay': 1000, 'minWindowWidth': 0}">8. Please Click View/Show Addresses.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Carousel Slide 9 -->
                    <div class="owl-item position-relative overlay overlay-show overlay-op-8 lazyload" data-bg-src="./assets/img/slides/slide-bg-2.jpg" style="background-size: cover; background-position: center;">
                        <div class="container position-relative z-index-3 h-100">
                            <div class="row justify-content-center align-items-center h-100">
                                <div class="col-lg-6 col-sm-12">
                                    <div class="d-flex flex-column align-items-center justify-content-center h-100">
                                        <h3 class="position-relative text-color-light text-5 line-height-5 font-weight-medium px-4 mb-2 appear-animation" data-appear-animation="fadeInDownShorter" data-plugin-options="{'minWindowWidth': 0}">
                                            <span class="position-absolute right-100pct top-50pct transform3dy-n50 opacity-3">
                                                <img src="./assets/img/slides/slide-title-border.png" class="w-auto appear-animation" data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="250" data-plugin-options="{'minWindowWidth': 0}" alt="" />
                                            </span>
                                            <span class="position-relative">Electrum NMC Wallet Settings<span class="position-absolute left-50pct transform3dx-n50 top-0 mt-4"><img src="./assets/img/slides/slide-blue-line.png" class="w-auto appear-animation" data-appear-animation="fadeInLeftShorterPlus" data-appear-animation-delay="1000" data-plugin-options="{'minWindowWidth': 0}" alt="" /></span></span>
                                            <span class="position-absolute left-100pct top-50pct transform3dy-n50 opacity-3">
                                                <img src="./assets/img/slides/slide-title-border.png" class="w-auto appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="250" data-plugin-options="{'minWindowWidth': 0}" alt="" />
                                            </span>
                                        </h3>
                                        <p class="text-4 text-color-light font-weight-light opacity-7 mb-0" data-plugin-animated-letters data-plugin-options="{'startDelay': 1000, 'minWindowWidth': 0}">9. Please Click Addresses Tab.</p>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-sm-12">
                                    <div class="d-flex flex-column align-items-center justify-content-center h-100">
                                        <img id="describeImage" src="./assets/img/describe/step9.jpg" data-appear-animation="blurIn" style="max-width: 100%;" alt="blog">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="owl-nav">
                <button type="button" role="presentation" class="owl-prev"></button>
                <button type="button" role="presentation" class="owl-next"></button>
            </div>
            <div class="owl-dots mb-5">
                <button role="button" class="owl-dot active"><span></span></button>
                <button role="button" class="owl-dot"><span></span></button>
                <button role="button" class="owl-dot"><span></span></button>
                <button role="button" class="owl-dot"><span></span></button>
                <button role="button" class="owl-dot"><span></span></button>
                <button role="button" class="owl-dot"><span></span></button>
                <button role="button" class="owl-dot"><span></span></button>
                <button role="button" class="owl-dot"><span></span></button>
                <button role="button" class="owl-dot"><span></span></button>
            </div>
        </div>
    </div>



    <div id="describeTitle">
        <div class="container">
            <div class="row text-center pt-3">
                <div class="col-md-10 mx-md-auto">
                    <h1 class="word-rotator slide font-weight-bold text-8 mb-3 appear-animation" data-appear-animation="fadeInUpShorter">
                        <span>Your own personal namespace</span>
                    </h1>
                    <p class="lead appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="300">
                    When you register a domain like [yourname].bit, you take control of your own personal namespace. Use it to publish your contact info to, link to wallet addresses, associate with your avatar, and more.
                    </p>
                </div>
            </div>
        </div>

        <div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200">
            <div class="home-concept mt-5">
                <div class="container">

                    <div class="row text-center">
                        <span class="sun"></span>
                        <span class="cloud"></span>
                        <div class="col-lg-2 ms-lg-auto">
                            <div class="process-image">
                                <img src="./assets/img/home/home-concept-item-1.png" alt="" />
                                <strong>Prepare</strong>
                            </div>
                        </div>
                        <div class="col-lg-2">
                            <div class="process-image process-image-on-middle">
                                <img src="./assets/img/home/home-concept-item-2.png" alt="" />
                                <strong>Planning</strong>
                            </div>
                        </div>
                        <div class="col-lg-2">
                            <div class="process-image">
                                <img src="./assets/img/home/home-concept-item-3.png" alt="" />
                                <strong>Twitter</strong>
                            </div>
                        </div>
                        <div class="col-lg-4 ms-lg-auto">
                            <div class="project-image">
                                <div id="fcSlideshow" class="fc-slideshow">
                                    <ul class="fc-slides">
                                        <li><img class="img-fluid" src="./assets/img/home/namecoin-nmc-logo.png" alt="" /></li>
                                    </ul>
                                </div>
                                <strong class="our-work">Our Work</strong>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div class="container mb-5 pb-4">

            <div class="row">
                <div class="col">
                    <hr class="my-2">
                </div>
            </div>

            <div class="row pb-3">
                <div class="col-lg-12">
                    <h2 class="font-weight-normal text-7">Our <strong class="font-weight-extra-bold">Services</strong></h2>
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="feature-box feature-box-style-2">
                                <div class="feature-box-icon">
                                    <i class="icons icon-share text-color-primary"></i>
                                </div>
                                <div class="feature-box-info">
                                    <h4 class="font-weight-bold text-4-5 mb-1">Easy to share</h4>
                                    <p class="mb-4">Are you tired of copying and pasting long addresses? Share your .bit name instead!</p>
                                </div>
                            </div>
                            <div class="feature-box feature-box-style-2">
                                <div class="feature-box-icon">
                                    <i class="icons icon-support text-color-primary"></i>
                                </div>
                                <div class="feature-box-info">
                                    <h4 class="font-weight-bold text-4-5 mb-1">Make transacting a breeze</h4>
                                    <p class="mb-4">You don’t have to worry about sending things to the wrong address. From now on, simply enter the recipient’s .bit name. </p>
                                </div>
                            </div>
                            <div class="feature-box feature-box-style-2">
                                <div class="feature-box-icon">
                                    <i class="icons icon-lock text-color-primary"></i>
                                </div>
                                <div class="feature-box-info">
                                    <h4 class="font-weight-bold text-4-5 mb-1">Cryptographically secure and Open Source</h4>
                                    <p class="mb-4">Namecoin’s blockchain is open-source and audited for enhanced security. Since .bit names are stored on the blockchain, sending funds to a Namecoin address is as secure as sending them to a regular address. </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="feature-box feature-box-style-2">
                                <div class="feature-box-icon">
                                    <i class="icons icon-wallet text-color-primary"></i>
                                </div>
                                <div class="feature-box-info">
                                    <h4 class="font-weight-bold text-4-5 mb-1">Naming Wallets</h4>
                                    <p class="mb-4">When you send funds, recipients’ wallets will display your name, and vice versa. </p>
                                </div>
                            </div>
                            <div class="feature-box feature-box-style-2">
                                <div class="feature-box-icon">
                                    <i class="icons icon-layers text-color-primary"></i>
                                </div>
                                <div class="feature-box-info">
                                    <h4 class="font-weight-bold text-4-5 mb-1">Decentralized control</h4>
                                    <p class="mb-4">Namecoin names are NFTs. They’re under your control, stored securely in your wallet, just like cryptocurrency. Only you can manage and move them. </p>
                                </div>
                            </div>
                            <div class="feature-box feature-box-style-2">
                                <div class="feature-box-icon">
                                    <i class="icons icon-social-google text-color-primary"></i>
                                </div>
                                <div class="feature-box-info">
                                    <h4 class="font-weight-bold text-4-5 mb-1">Easy Web-Based Interface</h4>
                                    <p class="mb-4">You don’t need Linux, or a deep understanding of cryptography. We make it easy for you. Unlike registering a crypto-based domain, which can be difficult, this is more like working with a standard domain registrar. </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- <hr class="solid my-5"> -->
        </div>
    <div>
</div>
    <!-- <section class="section section-custom-map appear-animation lazyload" data-appear-animation="fadeInUpShorter" data-src-bg="img/map.png" style="background-color: transparent; background-position: center 0; background-repeat: no-repeat;">
        <section class="section section-default section-footer">
            <div class="container">
                <div class="row mt-5 appear-animation" data-appear-animation="fadeInUpShorter">
                    <div class="col-lg-6">
                        <div class="recent-posts mb-5">
                            <h2 class="font-weight-normal text-6 mb-4"><strong class="font-weight-extra-bold">Latest</strong> Names</h2>
                            <div class="owl-carousel owl-theme dots-title mb-0" data-plugin-options="{'items': 1, 'autoHeight': true, 'autoplay': true, 'autoplayTimeout': 8000}">
                                @foreach($transactions as $key=>$transaction)
                                    @if(($key+1)%4==1)<div class="row">@endif
                                    <div class="col-lg-6 mb-4 mb-lg-0">
                                        <article>
                                            <div class="row">
                                                <div class="col-auto pe-0">
                                                    <div class="date">
                                                        <span class="day font-weight-extra-bold">
                                                        @php 
                                                            $dateValue = strtotime($transaction->created_at);
                                                            echo date("d", $dateValue);
                                                        @endphp
                                                        </span>
                                                        <span class="month text-1">
                                                        @php 
                                                            $dateValue = strtotime($transaction->created_at);
                                                            echo date("M", $dateValue);
                                                        @endphp
                                                        </span>
                                                    </div>
                                                </div>
                                                <div class="col ps-1">
                                                    <h4 class="text-primary text-4"><a class="d-block" href="blog-post.html">{{$transaction->domain_name}}.bit</a></h4>
                                                    <p class="pe-4 mb-0">{{'@'.$transaction->twitter_username}}</p>
                                                </div>
                                            </div>
                                        </article>
                                    </div>
                                    @if(($key+1)%4==0)</div>@endif
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <h2 class="font-weight-normal text-6 mb-4"><strong class="font-weight-extra-bold">Who</strong> Likes NameCoin?</h2>
                        <div class="row">
                            <div class="owl-carousel owl-theme dots-title dots-title-pos-2 mb-0" data-plugin-options="{'items': 1, 'autoHeight': true}">
                                <div>
                                    <div class="col">
                                        <div class="testimonial testimonial-primary">
                                            <blockquote>
                                                <p class="mb-0" style="font-size:1.5em">Namecoin and Bitcoin will be revolutionary</p>
                                            </blockquote>
                                            <div class="testimonial-arrow-down"></div>
                                            <div class="testimonial-author">
                                                <div class="testimonial-author-thumbnail">
                                                    <img src="./assets/img/clients/client-1.jpg" class="rounded-circle" alt="" />
                                                </div>
                                                <p><strong><em>-Wikileaks</em></strong></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </section> -->
</div>
@include('common.footer')

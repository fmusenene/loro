<?php
include('header.php');
?>



<!-- Hero Section Begin -->
<section class="hero set-bg" data-setbg="img/hero-bg.jpg">
    <div class="container">
        <div class="row">
            <div class="col-lg-5">
                <div class="hero__text">
                    <h2>Find The Best Monthly Payment</h2>
                    <p>Apply for our car logbook finance loan in minutes, without painful</p>
                    <a href="#" class="primary-btn">Get Start</a>
                    <a href="#" class="primary-btn howit-btn">How It Work</a>
                </div>
            </div>
            <div class="col-lg-5 offset-lg-2">
                <div class="hero__form">
                    <h3>How much do you need</h3>
                    <?php if (isset($_GET['success']) && $_GET['success'] == 1): ?>
                        <div class="success-message">
                            Your message has been sent successfully!
                        </div>
                    <?php endif; ?>
                    <form action="inquiry-form-logic.php" method="post">
                        <div class="input-list">
                            <div class="input-list-item">
                                <p>Amount of money:</p>
                                <input type="text" name="amount">
                            </div>
                            <div class="input-list-item">
                                <p>How long for (days):</p>
                                <input type="text" name="duration">
                            </div>
                        </div>
                        <div class="input-full-width">
                            <p>Repayment:</p>
                            <input type="text" name="repayment">
                        </div>
                        <div class="input-list last">
                            <div class="input-list-item">
                                <p>Name:</p>
                                <input type="text" name="name">
                            </div>
                            <div class="input-list-item">
                                <p>Phone:</p>
                                <input type="text" name="phone">
                            </div>
                        </div>
                        <button type="submit" class="site-btn">SUMIT!</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Hero Section End -->

<!-- Home About Begin -->
<section class="home-about spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="home__about__text">
                    <div class="section-title">
                        <h2>Thousands Of Customers Trust Our Company</h2>
                        <p>LoroCredit has earned the trust of thousands of customers through reliable service, transparent policies, and customer-focused lending solutions. Our commitment to excellence ensures a seamless and secure borrowing experience.</p>
                    </div>
                    <div class="row">
                        <div class="col-lg-6 col-md-6">
                            <div class="home__about__item">
                                <h4>Our Company</h4>
                                <p>LoroCredit is a trusted financing company that provides quick and secure loans using car logbooks as collateral.</p>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="home__about__item">
                                <h4>Our Vision</h4>
                                <p>To be the leading and most trusted financial partner, providing innovative and accessible loan solutions that empower individuals and businesses to achieve financial freedom.</p>
                            </div>
                        </div>
                    </div>
                    <a href="£" class="primary-btn">learn More</a>
                </div>
            </div>
            <div class="col-lg-5 offset-lg-1">
                <div class="home__about__img">
                    <img src="img/about/home-about.jpg" alt="">
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Home About End -->

<!-- Loan Services Section Begin -->
<section class="loan-services spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title">
                    <h2>Discover all the loans for you</h2>
                    <p>If you try to cut corners on your brochure you will end up spending more money</p>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="loan__services__list">
            <div class="loan__services__item set-bg" data-setbg="img/loan-services/ls-1.jpg">
                <div class="loan__services__item__text">
                    <h4><span>01.</span> Car Logbook Loan</h4>
                    <p>ensuring you get the financial support you need while still driving your car.</p>
                    <a href="#">Find Out More</a>
                </div>
            </div>
            <div class="loan__services__item set-bg" data-setbg="img/loan-services/ls-2.jpg">
                <div class="loan__services__item__text">
                    <h4><span>02.</span> Business Loan</h4>
                    <p>Coming Soon...</p>
                    <a href="#">Find Out More</a>
                </div>
            </div>
            <div class="loan__services__item set-bg" data-setbg="img/loan-services/ls-3.jpg">
                <div class="loan__services__item__text">
                    <h4><span>03.</span> Education Loan</h4>
                    <p>Coming Soon...</p>
                    <a href="#">Find Out More</a>
                </div>
            </div>
            <div class="loan__services__item set-bg" data-setbg="img/loan-services/ls-4.jpg">
                <div class="loan__services__item__text">
                    <h4><span>04.</span> Commercial Loan</h4>
                    <p>Coming Soon...</p>
                    <a href="#">Find Out More</a>
                </div>
            </div>
            <div class="loan__services__item set-bg" data-setbg="img/loan-services/ls-5.jpg">
                <div class="loan__services__item__text">
                    <h4><span>05.</span> Health Loan</h4>
                    <p>Coming Soon...</p>
                    <a href="#">Find Out More</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Loan Services Section End -->

<!-- Choose Section Begin -->
<section class="choose spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title">
                    <h2>Why People Choose Us</h2>
                    <p>This question should make the viewer want to open the brochure to learn more.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-6">
                <div class="choose__item">
                    <img src="img/choose/choose-1.png" alt="">
                    <h5>Quick & Easy</h5>
                    <p>Access loans with minimal paperwork and a seamless application process, ensuring a hassle-free experience.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6">
                <div class="choose__item">
                    <img src="img/choose/choose-2.png" alt="">
                    <h5>Absolute Security</h5>
                    <p>Your personal and financial information is safeguarded with advanced encryption and strict privacy policies.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6">
                <div class="choose__item">
                    <img src="img/choose/choose-3.png" alt="">
                    <h5>Quick Approval</h5>
                    <p>Enjoy fast loan approvals with minimal waiting time, allowing you to get funds when you need them most.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6">
                <div class="choose__item">
                    <img src="img/choose/choose-4.png" alt="">
                    <h5>Low Interest Rates</h5>
                    <p>Benefit from affordable loan repayment plans with competitive interest rates designed to ease your financial burden.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6">
                <div class="choose__item">
                    <img src="img/choose/choose-5.png" alt="">
                    <h5>Personal Security</h5>
                    <p>Your assets and personal data remain with you, ensuring a risk-free borrowing experience.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6">
                <div class="choose__item">
                    <img src="img/choose/choose-6.png" alt="">
                    <h5>Disbursement Day</h5>
                    <p>Loans are disbursed on time, ensuring you receive your funds exactly when you expect them.</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Choose Section End -->

<!-- Testimonial Section Begin -->
<div class="testimonial spad set-bg" data-setbg="img/testimonial/testimonial-bg.jpg">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title">
                    <h2>What Customers Are Saying</h2>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting has been the</p>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="testimonial__carousel">
    <div class="container">
        <div class="row">
            <div class="testimonial__slider owl-carousel">
                <div class="col-lg-4">
                    <div class="testimonial__item">
                        <img src="img/testimonial/testimonial-1.png" alt="">
                        <h5>Avako Hanuna</h5>
                        <span>Phone Accesories</span>
                        <p>LoroCredit made my loan process so simple and quick. Their customer service was amazing, and I received my funds in no time. Highly recommend them for fast financial support</p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="testimonial__item">
                        <img src="img/testimonial/testimonial-2.png" alt="">
                        <h5>James Santos</h5>
                        <span>Ceo Sibyangu</span>
                        <p>I couldn’t be happier with LoroCredit! Their team made getting a car logbook loan easy, with a smooth application process and fast approval. Truly reliable and trustworthy service.</p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="testimonial__item">
                        <img src="img/testimonial/testimonial-3.png" alt="">
                        <h5>Alex Mukulu</h5>
                        <span>Bussiness Man</span>
                        <p>provided a hassle-free loan experience. Their low-interest rates and quick approvals helped me get the funds I needed fast. I’ll definitely recommend them to friends and family.</p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="testimonial__item">
                        <img src="img/testimonial/testimonial-2.png" alt="">
                        <h5>Nampeera Joselyn</h5>
                        <span>Managing Events</span>
                        <p>The entire process with was seamless! From fast application approval to receiving my funds, I felt supported every step of the way. A fantastic service for car logbook loans.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Testimonial Section End -->

<!-- Counter Begin -->
<div class="counter spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-3 col-sm-6">
                <div class="counter__item">
                    <img src="img/counter/counter-1.png" alt="">
                    <div class="counter__number">
                        <h2 class="counter-add">2100</h2>
                    </div>
                    <p>Successful Loan Approval</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6">
                <div class="counter__item">
                    <img src="img/counter/counter-2.png" alt="">
                    <div class="counter__number">
                        <h2 class="counter-add">99</h2>
                        <span>%</span>
                    </div>
                    <p>Customer Satisfection</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6">
                <div class="counter__item">
                    <img src="img/counter/counter-3.png" alt="">
                    <div class="counter__number">
                        <h2 class="counter-add">90</h2>
                        <span>+</span>
                    </div>
                    <p>Office National Partners</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6">
                <div class="counter__item">
                    <img src="img/counter/counter-4.png" alt="">
                    <div class="counter__number">
                        <h2 class="counter-add">70</h2>
                        <span>+</span>
                    </div>
                    <p>Award Certificate</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Counter End -->

<!-- Call Section Begin -->
<section class="call spad set-bg" data-setbg="img/call-bg.jpg">
    <div class="container">
        <div class="row">
            <div class="col-lg-5 col-md-6">
                <div class="call__text">
                    <div class="section-title">
                        <h2>Request A Call Back</h2>
                        <p>Posters had been a very beneficial marketing tool because it had paved to deliver an
                            effective message that conveyed customer’s attention.</p>
                    </div>
                    <a href="#">Contact Us</a>
                </div>
            </div>
            <div class="col-lg-6 offset-lg-1 col-md-6">
                <form action="#" class="call__form">
                    <div class="row">
                        <div class="col-lg-6">
                            <input type="text" placeholder="Name">
                        </div>
                        <div class="col-lg-6">
                            <input type="text" placeholder="Email">
                        </div>
                        <div class="col-lg-6">
                            <input type="text" placeholder="Phone">
                        </div>
                        <div class="col-lg-6">
                            <select>
                                <option value="">Choose Our Services</option>
                                <option value="">car logbook finance loan</option>
                            </select>
                        </div>
                    </div>
                    <button type="submit" class="site-btn">Submit</button>
                </form>
            </div>
        </div>
    </div>
</section>
<!-- Call Section End -->

<!-- Blog Section Begin -->
<section class="latest spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title">
                    <h2>Latest Post</h2>
                    <p>Certainly at that point I was not a potential client for the Strib, but promotional</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-6">
                <div class="latest__blog__item">
                    <h5><a href="#">Get Best Advertiser In Your Side</a></h5>
                    <p>The StarTribune doesn’t just hand out the responsibility of informing their community’s
                        citizenry on a daily basis to just any...</p>
                    <div class="latest__blog__author">
                        <div class="latest__blog__author__pic">
                            <img src="img/latest/lb-1.png" alt="">
                        </div>
                        <div class="latest__blog__author__text">
                            <h6>May Cain</h6>
                            <span>19th March, 2019</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6">
                <div class="latest__blog__item">
                    <h5><a href="#">Internet Advertising Trends You</a></h5>
                    <p>Nope, I had to interview for this job. And I tell you, I was magnificent, so much so that, as
                        you know, I got the position...</p>
                    <div class="latest__blog__author">
                        <div class="latest__blog__author__pic">
                            <img src="img/latest/lb-2.png" alt="">
                        </div>
                        <div class="latest__blog__author__text">
                            <h6>May Cain</h6>
                            <span>19th March, 2019</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6">
                <div class="latest__blog__item">
                    <h5><a href="#">Improve Your Business Cards</a></h5>
                    <p>Upon completion of the interview the gentleman that was to give me my first opportunity at
                        financial freedom...</p>
                    <div class="latest__blog__author">
                        <div class="latest__blog__author__pic">
                            <img src="img/latest/lb-3.png" alt="">
                        </div>
                        <div class="latest__blog__author__text">
                            <h6>May Cain</h6>
                            <span>19th March, 2019</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-12 text-center">
                <a href="#" class="primary-btn">View More</a>
            </div>
        </div>
    </div>
</section>
<!-- Blog Section End -->

<!-- Contact Begin -->
<div class="contact-widget set-bg" data-setbg="img/contact-widget.jpg">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6">
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <div class="contact__widget__item">
                            <h4>Office Address</h4>
                            <p>Ggaba Road, Kansanga, Kampala, Opposite KIU main gate</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6">
                <div class="contact__widget__phone">
                    <span>Contact Us Now!</span>
                    <h2>(+256) 752-549-509</h2>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Contact End -->


<?php
include('footer.php');
?>
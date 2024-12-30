<?php include('header.php'); ?>

<!-- Page Header Start -->
<div class="page-header">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-12">
                <!-- Page Header Box Start -->
                <div class="page-header-box">
                    <h1 class="text-anime-style-2" data-cursor="-opaque">Contact Us</h1>
                    
                </div>
                <!-- Page Header Box End -->
            </div>
        </div>
    </div>
</div>
<!-- Page Header End -->

<!-- Page Contact Us Start -->
<div class="page-contact-us">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <!-- Contact Information Start -->
                <div class="contact-information">
                    <!-- Contact Information Title Start -->
                    <div class="section-title">
                        <h3 class="wow fadeInUp">contact us</h3>
                        <h2 class="text-anime-style-2" data-cursor="-opaque">Reach Out to Our <span>Church
                                Support</span></h2>
                        <p class="wow fadeInUp" data-wow-delay="0.25s">Contact us for support, information, or to
                            get involved. We're here to help and welcome you to our community.</p>
                    </div>
                    <!-- Contact Information Title End -->

                    <!-- Contact Information List Start -->
                    <div class="contact-info-list">
                        <!-- Contact Info Item Start -->
                        <div class="contact-info-item wow fadeInUp" data-wow-delay="0.25s">
                            <!-- Icon Box Start -->
                            <div class="icon-box">
                                <img src="images/icon-phone.svg" alt="">
                            </div>
                            <!-- Icon Box End -->

                            <!-- Contact Info Content Start -->
                            <div class="contact-info-content">
                                <p>give us a call</p>
                                <h3>+61 411 645 941</h3>
                            </div>
                            <!-- Contact Info Content End -->
                        </div>
                        <!-- Contact Info Item End -->

                        <!-- Contact Info Item Start -->
                        <div class="contact-info-item wow fadeInUp" data-wow-delay="0.5s">
                            <!-- Icon Box Start -->
                            <div class="icon-box">
                                <img src="images/icon-mail.svg" alt="">
                            </div>
                            <!-- Icon Box End -->

                            <!-- Contact Info Content Start -->
                            <div class="contact-info-content">
                                <p>Send us a message</p>
                                <h3>info@noondaychurch.com.au</h3>
                            </div>
                            <!-- Contact Info Content End -->
                        </div>
                        <!-- Contact Info Item End -->

                        <!-- Contact Info Item Start -->
                        <div class="contact-info-item wow fadeInUp" data-wow-delay="0.75s">
                            <!-- Icon Box Start -->
                            <div class="icon-box">
                                <img src="images/icon-location.svg" alt="">
                            </div>
                            <!-- Icon Box End -->

                            <!-- Contact Info Content Start -->
                            <div class="contact-info-content">
                                <p>Visit our location</p>
                                <h3>437-2 Ipae-dong, Namyangju-si, Gyeonggi-do, South Korea</h3>
                            </div>
                            <!-- Contact Info Content End -->
                        </div>
                        <!-- Contact Info Item End -->
                    </div>
                    <!-- Contact Information List End -->
                </div>
                <!-- Contact Information End -->
            </div>

            <div class="col-lg-6">
                <!-- Contact Form Start -->
                <div class="contact-us-form wow fadeInUp" data-wow-delay="0.25s">
                    <form id="contactForm" action="#" method="POST" data-toggle="validator" class="wow fadeInUp"
                        data-wow-delay="0.5s">
                        <div class="row">
                            <div class="form-group col-md-6 mb-4">
                                <input type="text" name="name" class="form-control" id="fname"
                                    placeholder="First Name" required>
                                <div class="help-block with-errors"></div>
                            </div>

                            <div class="form-group col-md-6 mb-4">
                                <input type="text" name="name" class="form-control" id="lname"
                                    placeholder="Last Name" required>
                                <div class="help-block with-errors"></div>
                            </div>

                            <div class="form-group col-md-6 mb-4">
                                <input type="email" name="email" class="form-control" id="email"
                                    placeholder="Email Address" required>
                                <div class="help-block with-errors"></div>
                            </div>

                            <div class="form-group col-md-6 mb-4">
                                <input type="text" name="phone" class="form-control" id="phone"
                                    placeholder="Phone No" required>
                                <div class="help-block with-errors"></div>
                            </div>

                            <div class="form-group col-md-12 mb-4">
                                <textarea name="msg" class="form-control" id="msg" rows="5" placeholder="Message"
                                    required></textarea>
                                <div class="help-block with-errors"></div>
                            </div>

                            <div class="col-lg-12">
                                <div class="contact-form-btn">
                                    <button type="submit" class="btn-default">submit message</button>
                                    <div id="msgSubmit" class="h3 hidden"></div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <!-- Contact Form End -->
            </div>
        </div>
    </div>
</div>
<!-- Page Contact Us End -->

<!-- Google Map Start -->
<div class="google-map">
    <div class="container-fluid">
        <div class="row no-gutter">
            <div class="col-lg-12">
                <!-- Google Map Iframe Start -->
                <div class="google-map-iframe">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3160.8667649763734!2d127.19185979999997!3d37.6052946!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x357cb6912e7905a3%3A0x6a5cb0e7497b1d14!2z7KCV7Jik7J2Y67mb6rWQ7ZqM!5e0!3m2!1sen!2sin!4v1735382894595!5m2!1sen!2sin"
                        allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        
                </div>
                <!-- Google Map Iframe End -->
            </div>
        </div>
    </div>
</div>
<!-- Google Map End -->

<?php include('footer.php'); ?>
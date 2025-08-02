<?php include('header.php'); ?>
<section class="intro-title blue-bg">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-left">
                <div class="intro-content">
                    <div class="intro-name">
                        <h3 class="text-white">Contact Us</h3>
                        <ul class="breadcrumb mt-1">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Contact Us</li>
                        </ul>
                    </div>
                    <div class="intro-img">
                        <img class="img-fluid" src="images/img/breadcrumb.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="page-section-ptb">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-title text-center">
                    <span>Community-based Forestry Supporters' Network, Nepal</span>
                    <h3 class="text-center">Get In Touch</h3>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="row touch-in white-bg m-0">
                    <div class="col-md-4">
                        <div class="card text-center border-0">
                            <div class="contact-box">
                                <div class="contact-icon">
                                    <i class="ti-direction-alt text-blue"></i>
                                </div>
                                <h5><a href="#">
                                        Koteshwor-32</a></h5>
                                <span>Manahara marg, Kathmandu</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card text-center border-0">
                            <div class="contact-box">
                                <div class="contact-icon">
                                    <i class="ti-headphone-alt text-blue"></i>
                                </div>
                                <h5><a href="#">977-1- 5100163</a></h5>
                                <span>9851086515</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card text-center border-0">
                            <div class="contact-box">
                                <div class="contact-icon">
                                    <i class="ti-email text-blue"></i>
                                </div>
                                <h5><a href="#">cfsupporters@cofsun.org.np</a></h5>
                                <span>P.O.B. No. : 8973 NPC 861</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--=================================
contact -->
<!--=================================
contact from -->
<section class="page-section-pb">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h3 class="mb-4">SEND MESSAGE</h3>
            </div>
            <div class="col-md-12">
                <div id="formmessage" style="display:none">Success/Error Message Goes Here</div>
                <form id="contactform" class="gray-form row" role="form" method="post" action="php/contact-form.php">
                    <div class="col-md-6">
                        <div class="form-group">
                            <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Website URL">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <input type="email" class="form-control" id="exampleInputphone" placeholder="Your Name">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <input type="email" class="form-control" id="exampleInputPassword1" placeholder="Email Adress">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <input type="email" class="form-control" id="exampleInputphone1" placeholder="Phone Number">
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <textarea class="form-control" rows="7" placeholder="Massage"></textarea>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <input type="hidden" name="action" value="sendEmail" />
                        <button id="submit" name="submit" type="submit" value="Send" class="button"><span>Submit Now</span></button>
                    </div>
                </form>
                <div id="ajaxloader" style="display:none"><img class="center-block" src="images/form-loader.gif" alt=""></div>
            </div>
        </div>
    </div>
</section>
<section class="contact-map">
    <div class="container-fluid">
        <iframe src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d28266.007781238157!2d85.331269!3d27.678637!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sus!4v1754150948976!5m2!1sen!2sus" width="100%" height="550" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
</section>
<?php include('footer.php'); ?>
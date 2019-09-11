<?php
if (!defined('fileIncluded')) {
    exit();
}
include("./lib/checkme.php");

if (!empty($_POST)) {

    $to = "naturebeyond@gmail.com"; // this is not correct Email address
    $from = $_POST['email']; // this is the sender's Email address
    $name = $_POST['name'];
    $subject = '';
    $phone_no = $_POST['phone'];
    $message = $_POST['message'];
    $headers = "From:" . $from . 'and Phone No.:' . $phone_no;

    mail($to, $subject, $message, $headers);
    echo "Mail Sent. Thank you " . $name . ", we will contact you shortly.";
}
?>


<section class="contact-4 page-section-ptb clearfix o-hidden">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 sm-mb-10">
                <blockquote class="blockquote quote pl-0">
                    The trouble with programmers is that you can never  too late. The future belongs of person with.
                </blockquote>
                <p>It would be great to hear from you! If you got any questions, please do not hesitate to send us a message. We are looking forward to hearing  please do not hesitate to send us a message. It would be great to hear from you! If you got any questions, please do not hesitate to send us a message.</p>
                <p> We are looking forward to hearing  please do not hesitate to send us a message. We are looking forward to hearing from you!</p>
            </div>
            <div class="col-lg-6">
                <div class="section-title"> 
                    <h6>let's work together</h6>
                    <h2 class="title-effect">Contact Us</h2>
                    <p class="mb-50">It would be great to hear from you! If you got any questions</p>
                </div>
                <div id="formmessage">Success/Error Message Goes Here</div>
                <form id="contactform" method="post" action="#">
                    <div class="contact-form clearfix">
                        <div class="section-field">
                            <input id="name" type="text" placeholder="Name*" class="form-control" name="name">
                        </div> 
                        <div class="section-field">
                            <input type="email" placeholder="Email*" class="form-control" name="email">
                        </div>
                        <div class="section-field">
                            <input type="text" placeholder="Phone*" class="form-control" name="phone">
                        </div>
                        <div class="section-field textarea">
                            <textarea class="input-message form-control" placeholder="Comment*" rows="7" name="message"></textarea>
                        </div>
                        <div class="form-group">
                            <?php echo $chk->showCaptcha(); ?>
                        </div>
                        <div class="submit-button">
                            <input type="hidden" name="action" value="sendEmail">
                            <button id="submit" name="submit" type="submit" value="Send" class="button"><span> Send message </span> <i class="fa fa-paper-plane"></i></button>
                        </div>
                    </div> 
                </form>
                <div id="ajaxloader" style="display:none"><img class="mx-auto mt-30 mb-30 d-block" src="assets/images/pre-loader/loader-02.svg" alt=""></div>
            </div>
        </div> 
    </div>
</section>

<!--=================================
ADDRESS -->


<!--=================================
ADDRESS -->

<section class="page-section-ptb contact-2 gray-bg">
    <div class="container">
        <div class="row mb-10">
            <div class="col-12">
                <div class="office-1 p-5 white-bg">
                    <h2 class="mb-30">Siliguri Central Office</h2>
                    <div class="touch-in">
                        <div class="row">
                            <div class="col-lg-4 col-md-4">
                                <div class="media">
                                    <div class="feature-icon media-icon mr-4">
                                        <span class="ti-map-alt theme-color"></span>
                                    </div>
                                    <div class="media-body">
                                        <h5 class="text-back">ADDRESS</h5>
                                        <p class="mb-0">3rd Floor, Anand Mangal Square
                                            57, Station Feeder Road
                                            Siliguri - 734005, 
                                            West Bengal, 
                                            India</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4">
                                <div class="media">
                                    <div class="feature-icon media-icon mr-4">
                                        <span class="ti-mobile theme-color"></span>
                                    </div>
                                    <div class="media-body">
                                        <h5 class="text-back">PHONE</h5>
                                        <p class="mb-0">91-353-2500 656 / 657</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4">
                                <div class="media">
                                    <div class="feature-icon media-icon mr-4">
                                        <span class="ti-email theme-color"></span>
                                    </div>
                                    <div class="media-body">
                                        <h5 class="text-back">EMAIL</h5>
                                        <p class="mb-0">letstalk@siliguri.com</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="office-1 p-5 white-bg">
                    <h2 class="mb-30">Calcutta Branch Office</h2>
                    <div class="touch-in">
                        <div class="row">
                            <div class="col-lg-4 col-md-4">
                                <div class="media">
                                    <div class="feature-icon media-icon mr-4">
                                        <span class="ti-map-alt theme-color"></span>
                                    </div>
                                    <div class="media-body">
                                        <h5 class="text-back">ADDRESS</h5>
                                        <p class="mb-0">17/3 Raja Rajkrishna Street
                                            Kolkata - 700006,  
                                            West Bengal, 
                                            India</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4">
                                <div class="media">
                                    <div class="feature-icon media-icon mr-4">
                                        <span class="ti-mobile theme-color"></span>
                                    </div>
                                    <div class="media-body">
                                        <h5 class="text-back">PHONE</h5>
                                        <p class="mb-0">91-033 25550262, 25304641</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4">
                                <div class="media">
                                    <div class="feature-icon media-icon mr-4">
                                        <span class="ti-email theme-color"></span>
                                    </div>
                                    <div class="media-body">
                                        <h5 class="text-back">EMAIL</h5>
                                        <p class="mb-0">letstalk@calcutta.com</p>
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

<!--=================================
 contact -->




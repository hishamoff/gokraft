<?php
include ('header.php');
?>


    <!-- Content Wrapper Start -->
    <div class="content-wrapper">

<!-- Breadcrumb Start -->
<div class="breadcrumb-wrap d-none">
  
</div>
<!-- Breadcrumb End -->

<!-- Contact Us section Start -->
<section class="contact-us-wrap pb-50">
    <div class="container">
        <div class="section-title style1 text-center mb-30">
            <span>Contact Us</span>
            <h2>Don't Hesitate To Contact Us</h2>
        </div>
        <div class="row">
            <div class="col-xl-8 col-lg-7 col-12">
                <div class="contact-form">
                    <form class="form-wrap query_form" method="POST" id="contactForm">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" name="name" placeholder="Name*" id="name" required="" data-error="Please enter your name">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="email" name="email" id="email" required="" placeholder="Email*" data-error="Please enter your email">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="number" name="phone" id="phone" required="" placeholder="Phone Number*" data-error="Please enter your email">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" name="subject" placeholder="Subject*" id="subject" required="" data-error="Please enter your subject">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group v1">
                                    <textarea name="message" id="message" placeholder="Your Messages.." cols="30" rows="10" required="" data-error="Please enter your message"></textarea>
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="form-check checkbox">
                                    <input name="gridCheck" value="I agree to the terms and privacy policy." class="form-check-input" type="checkbox" id="gridCheck" required="">
                                   
                                    <div class="help-block with-errors gridCheck-error"></div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <button type="submit" onclick="Send()" class="btn style1">Send Message</button>
                                <div id="msgSubmit" class="h3 text-center hidden"></div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </form>

                    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
                            <script src="https://smtpjs.com/v3/smtp.js"></script>
                            <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>


                            <script>

                                function Send() {
                                    event.preventDefault();

                                    var name = document.getElementById("name").value;
                                    var email = document.getElementById("email").value;
                                    var phone = document.getElementById("phone").value;
                                    var subject = document.getElementById("subject").value;
                                    var message = document.getElementById("message").value;

                                    // Validation: Check if any of the required fields is empty
                                    if (!name || !email || !phone || !subject || !message) {
                                        swal("Error", "Please fill in all the required fields.", "error");
                                        return; // Stop execution if validation fails
                                    }
                                    // Update button text
                                    $('.query_form .btn').text('Sending...');

                                    var body = "name: " + name + "<br/> email:" + email + "<br/> contact:" + phone + "<br/> subject:" + subject + "<br/> Message:" + message;

                                    console.log(body);
                                    Email.send({
                                        Host: "smtp.elasticemail.com",
                                        Username: "website.enquiry.mailer@gmail.com",
                                        Password: "88A13DA696E1DA754571F28C500545642B31",
                                        To: 'hisham1off@gmail.com, hishamkukku1@gmail.com', // Add the second email address here
                                        From: "website.enquiry.mailer@gmail.com",
                                        Subject: "Gokraft Website Enquiry",
                                        Body: body
                                    }).then(function (message) {
                                        // Handle email sending success or failure if needed
                                        // Assuming the button should be updated here as well
                                        $('.query_form .btn').text('Message send');
                                        $('.query_form')[0].reset();
                                    });
                                }
                                ;
                            </script>

                </div>
            </div>
            <div class="col-xl-4 col-lg-5 col-md-12">
                <div class="contact-item-wrap">
                    <div class="contact-item">
                        <span class="contact-icon">
                            <i class="ri-map-pin-fill"></i>
                        </span>
                        <div class="contact-info">
                            <h3>Our Location</h3>
                            <p>3rd Floor, Vadakumthala colonnade,Kundannoor, Maradu, Ernakulam,Kerala - 682304</p>
                        </div>
                    </div>
                    <div class="contact-item">
                        <span class="contact-icon">
                            <i class="ri-mail-fill"></i>
                        </span>
                        <div class="contact-info">
                            <h3>Send An Email</h3>
                            <a href="mailto:info@gokraft.in">info@gokraft.in</a>
                              </div>
                    </div>
                    <div class="contact-item">
                        <span class="contact-icon">
                            <i class="ri-phone-fill"></i>
                        </span>
                        <div class="contact-info">
                            <h3>Phone Number</h3>
                            <a href="tel:+919947920626">+91 9947920626</a>
                            <a href="tel:+917046403791">+91-7046403791</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Contact Us section End -->
                <!-- Map area start -->
                <div class="comp-map">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3929.953096916858!2d76.3217641!3d9.9378607!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x68ffe20f8f94ef3f%3A0x984d7f4274cec8d!2sGokraft!5e0!3m2!1sen!2sin!4v1701338591416!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </iframe>
                </div>
                <!-- Map area end -->

            </div>
            <!-- Content Wrapper End -->


<?php
include ('footer.php');
?>
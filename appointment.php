<?php

include('header.php');
?>

<!-- Appointment Section start -->
<section class="appointment-wrap style3 pt-200 pb-100">
    <div class="container">
        <div class="row align-items-center gx-5">
            <div class="col-lg-6">
                <div class="appointment-img-wrap">
                    <img src="images/appoint-img-3.jpg" alt="Image" class="appoint-img-one">
                    <img src="images/appoint-img-4.jpg" alt="Image" class="appoint-img-two">
                    <div class="promo-box">
                        <p><span>100+</span>Events Executed</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="appointment-content">
                    <div class="content-title style1">
                        <span>Always ready to assist !</span>
                        <h2 style="
    font-size: 22px;">Beyond Imagination, Beyond Expectation: GoKraft - Your Pinnacle of Celebration Excellence.</h2>
                    </div>
                    <form method="post" action="" class="appointment-form query_form">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" name="name" id="name" placeholder="Your Name">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" name="email" id="email" placeholder="Your Email">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" name="phone" id="phone" placeholder="Phone Number">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" name="eventname" id="eventname" placeholder="Event Name">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input name="date" id="date" type="date">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" name="address" id="address" placeholder="Address">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <textarea name="msg" id="msg" cols="30" rows="10" placeholder="Your Message"></textarea>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <button type="submit" onclick="Send()" class="btn style1">Connect Us</button>
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
                            var eventname = document.getElementById("eventname").value;
                            var date = document.getElementById("date").value;
                            var address = document.getElementById("address").value;
                            var msg = document.getElementById("msg").value;

                            // Validation: Check if any of the required fields is empty
                            if (!name || !email || !phone || !eventname || !date || !address || !msg) {
                                swal("Error", "Please fill in all the required fields.", "error");
                                return; // Stop execution if validation fails
                            }

                            // Update button text
                            $('.query_form .btn').text('Sending...');

                            var body = "Name: " + name + "<br/>Email: " + email + "<br/>Phone: " + phone + "<br/>Event Name: " + eventname +
                                "<br/>Date: " + date + "<br/>Address: " + address + "<br/>Message: " + msg;

                            Email.send({
                                Host: "smtp.elasticemail.com",
                                Username: "website.enquiry.mailer@gmail.com",
                                Password: "88A13DA696E1DA754571F28C500545642B31",
                                To: 'hisham1off@gmail.com, hishamkukku1@gmail.com', // Add the second email address here
                                From: "website.enquiry.mailer@gmail.com",
                                Subject: "Gokraft Website Enquiry",
                                Body: body
                            }).then(function(message) {
                                // Handle email sending success or failure if needed
                                // Assuming the button should be updated here as well
                                $('.query_form .btn').text('Message sent');
                                $('.query_form')[0].reset();
                            });
                        }
                    </script>

                </div>
            </div>
        </div>
    </div>
</section>
<!-- Appointment Section End -->


<?php
include('footer.php');
?>
@extends('layouts.app')
@section('content')
<section class="w3l-contact-breadcrum">
  <div class="breadcrum-bg">
    <div class="container py-5">
      <p data-aos="fade-down"  data-aos-duration="1000" data-aos-easing="ease-in-out"><a href="/">Home</a> &nbsp; / &nbsp; Contact</p>
      <h2 data-aos="fade-right"  data-aos-duration="1000" data-aos-easing="ease-in-out" class="my-3">Contact Us</h2>

      <p data-aos="fade-right"  data-aos-duration="2000" data-aos-easing="ease-in-out">Nulla dolorem perferendis inventore! posuere cubilia Curae; Nunc non risus in justo convallis feugiat. consectetur adipisicing elit.</p>
    </div>
  </div>
</section>
<!-- contact -->
<section class="w3l-contacts-12" id="contact">
    <div class="pt-5 contact-top">
        <div class="container py-md-3">

            <div class="row cont-main-top">

                <!-- contact address -->
                <div data-aos="fade-up"  data-aos-duration="1000" data-aos-easing="ease-in-out" class="contact col-lg-4">
                    <div class="cont-subs">
                        <div class="cont-add">

                           <div class="cont-add-rgt">
                            <h4>Address:</h4>
                            <p class="contact-text-sub">PO Box 1212, California, US</p>
                        </div>
                        <div class="cont-add-lft">
                            <span class="fa fa-map-marker" aria-hidden="true"></span>
                       </div>
                    </div>
                        <div class="cont-add add-2">

                           <div class="cont-add-rgt">
                            <h4>Email:</h4>
                            <a href="mailto:josephisi777@gmail.com">
                                <p class="contact-text-sub">josephisi777@gmail.com</p>
                            </a>
                        </div>
                        <div class="cont-add-lft">
                            <span class="fa fa-envelope" aria-hidden="true"></span>
                       </div>
                    </div>
                        <div class="cont-add">

                            <div class="cont-add-rgt">
                                 <h4>Phone:</h4>
                                 <a href="tel:+234-814-215-1114">
                                    <p class="contact-text-sub">+234-814-215-1114</p>
                                 </a>
                            </div>
                            <div class="cont-add-lft">
                                <span class="fa fa-phone" aria-hidden="true"></span>
                           </div>
                        </div>
                        <div class="cont-add add-3">

                            <div class="cont-add-rgt">
                                 <h4>Find Us On</h4>
                                 <div class="mt-2 main-social-1">
                                    <a href="https://web.facebook.com/pages/category/Product-Service/Promatex-paint-103214094951471/?_rdc=1&_rdr" target="_blank" class="facebook"><span class="fa fa-facebook"></span></a>
                                    <a href="#twitter" class="twitter"><span class="fa fa-twitter"></span></a>
                                    <a href="#instagram" class="instagram"><span class="fa fa-instagram"></span></a>
                                </div>
                            </div>
                            <div class="cont-add-lft">

                           </div>
                        </div>
                    </div>
                </div>
                <!-- //contact address -->
                 <!-- contact form -->
                 <div data-aos="fade-left"  data-aos-duration="1000" data-aos-easing="ease-in-out" class="mt-5 contacts12-main col-lg-8 mt-lg-0">
                 <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
                  <script src="assets/js/main.js"></script>
                    <form action="mail.php" method="post" class="main-input">
                      <!-- Starting of successful form message -->
                        <div class="row">
                            <div class="col-12">
                                <div data-aos="fade-left"  data-aos-duration="1000" data-aos-easing="ease-in-out" class="alert alert-success contact__msg" style="display: none" role="alert">
                                    Your message was sent successfully.
                                </div>
                            </div>
                        </div>
                      <!-- Ending of successful form message -->
                        <div class="top-inputs d-grid">
                            <input type="text" placeholder="Name" name="name" id="w3lName" required="">
                            <input type="email" name="email" placeholder="Email" id="w3lSender" required="">
                        </div>
                        <input type="text" placeholder="Phone Number" name="phone" id="w3lName" required="">&nbsp;
                        <input type="text" placeholder="Subject" name="subject" id="w3lName" required="">
                        <textarea placeholder="Message" name="message" id="w3lMessage" required=""></textarea>
                        <div class="text-right">
                            <button type="submit" class="btn btn-theme2">Submit Now</button>
                        </div>
                    </form>
                </div>
                <!-- //contact form -->
            </div>
        </div>
        <!-- map -->
        <div class="map">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d158857.7281066703!2d-0.24168144921176335!3d51.5287718408761!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47d8a00baf21de75%3A0x52963a5addd52a99!2sLondon%2C%20UK!5e0!3m2!1sen!2sin!4v1569921526194!5m2!1sen!2sin"
                frameborder="0" style="border:0;" allowfullscreen=""></iframe>
        </div>
        <!-- //map -->
    </div>
</section>
</section>
@endsection

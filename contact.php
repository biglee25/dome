<?php
/**
 * Template Name: contact
 */
?>

<?php get_header(); ?>


<section class="contact-section">
    <div class="container">
        <div class="section-wrapper m-auto">
            <div class="row d-flex align-items-center">
                <div class="col-sm-12 col-lg-6 text-center text-md-left">
                    <h1 class="text-dark">Contact us</h1>
                    <p>We have a dedicated team of customer services ready to answer any questions yo may have.
                        You can either call us directly or fill in the form and we will help you as best we can.</p>
                    <a href="tel:+44 (0)161 308 2331" class="btn btn-lg contact-btn text-uppercase"><small>Give us a
                            Call
                        </small></a>

                </div>
                <div class="col-sm-12 col-lg-6 py-3">
                    <img src="/wp-content/themes/Bootstrap Theme/img/call-centre-woman.png" alt="Call us now"
                        class="img-fluid" data-aos="fade-up" data-aos-duration="1000">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="section-marker-outer d-flex flex-column">
                    <div class="section-marker-white"></div>
                </div>
            </div>
        </div>
    </div>
    <section class="bg-danger text-white">
        <div class="container">
            <div class="section-wrapper m-auto">
                <div class="row">
                    <div class="col-sm-12 col-md-6 text-center text-md-left" data-aos="fade-up"
                        data-aos-duration="1000">

                        <?php echo do_shortcode( '[ninja_form id=1]	' ); ?>

                    </div>
                    <div class="col-sm-12 col-md-6 text-center d-flex flex-column justify-content-center px-5">
                        <h2 class="text-uppercase">Send us a Message</h2>
                        <p class="mb-5">We aim to respond withn 24 hours so please be patient.
                            If you have an urgent enquiry, please phone us.</p>
                        <a href="tel:+44 (0)161 308 2331" class="text-white mail-link">
                            <div class="border p-3"><i class="fas fa-phone fa-3x pb-3"></i>
                                <h5>+44(0)161 308 2331</h5>
                            </div>
                        </a>
                        <p class="pt-5">You can also email us direct at:</p>
                        <a href="mailto:sales@mockridge.com" class="text-white mail-link">
                            <div class="border p-3">
                                <i class="fas fa-envelope fa-3x pb-3"></i>
                                <h5>sales@mockridge.com</h5>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="section-marker-outer d-flex flex-column">
                        <div class="section-marker-red"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="container">
        <div class="section-wrapper m-auto">
            <div class="row d-flex align-items-center pt-5">
                <div class="col-sm-12 col-md-6 text-center text-md-left">
                    <h2 class="mb-3">WHERE TO FIND US</h2>
                    <p>Mockridge Labels & Nameplates Ltd.</p>
                    <p>Cavendish Street</p>
                    <p>Ashton-under-Lyne, Lancashire,</p>
                    <p>England, UK</p>
                    <p>OL6 7QL</p>

                    (If using Sat Nav – please use OL6 7PF or SK16 4JQ )</p>
                    </p>
                    <a href="https://www.google.com/maps/dir//Mockridge+Labels+%26+Nameplates+Limited,+Cavendish+St,+Ashton-under-Lyne,+Dukinfield+OL6+7QL/@53.482885,-2.0963665,19z/data=!4m9!4m8!1m0!1m5!1m1!1s0x487bb65cfa4c0dbb:0x9bab7c526fc2a48!2m2!1d-2.0956369!2d53.483011!3e0"
                        target="_blank" class="btn btn-lg contact-btn text-uppercase mt-5"><small>Get
                            Directions</small></a>

                </div>
                <div class="col-sm-12 col-md-6 d-flex justify-content-center py-5">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d674.755986943305!2d-2.096366548375022!3d53.48288503385389!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x487bb65cfa4c0dbb%3A0x9bab7c526fc2a48!2sMockridge%20Labels%20%26%20Nameplates%20Limited!5e0!3m2!1sen!2suk!4v1589104357995!5m2!1sen!2suk"
                        width="700" height="450" frameborder="0" style="border:0;" allowfullscreen=""
                        aria-hidden="false" tabindex="0" class="shadow" data-aos="fade-up"
                        data-aos-duration="1000"></iframe>
                </div>
            </div>
        </div>
    </div>
</section>



<?php get_footer(); ?>
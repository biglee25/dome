
<section class="bg-dark text-light py-5 footer-section">
    <div class="container">
        <div class="row text-center text-md-left">
            <div class="col-sm-12 col-md-4">
                <img src="/wp-content/themes/Bootstrap Theme/img/logo-alt.svg" class="img-fluid footer-logo">
                
            <p class="pt-3">Cavendish Street Ashton-under-Lyne, Lancashire, England, UK OL6 7QL</p>
            <i class="fas fa-phone pr-2 mt-3"></i>
            <p>+44 (0)161 308 2331</p>
            <i class="fas fa-envelope pr-2"></i>
            <p>Sales@mockridge.com</p>
            </div>
            <div class="col-6 col-md-3 footer-links">
            <p>info</p>
                    <ul class="list-group text-secondary small">
                        <div class="list-item">
                            My Account
                        </div>
                        <div class="list-item">
                            Delivery
                        </div>
                        <div class="list-item">
                            Privacy Policy
                        </div>
                        <div class="list-item">
                            Terms & Conditions
                        </div>
                        <div class="list-item">
                        <a href="<?php echo get_page_link( get_page_by_title( contact )->ID ); ?>">Contact</a>
                        </div>
                    </ul>

            </div>
            <div class="col-6 col-md-2 footer-links">
                <p>Shop</p>
                    <ul class="list-group text-secondary small">
                        <div class="list-item">
                            <a href="/all-products">Starter Kits</a>
                        </div>                   
                        <div class="list-item">
                            <a href="/all-products">Refill Kits</a>
                        </div>                   
                        <div class="list-item">
                            <a href="/all-products">Bulk Polyurethane</a>
                        </div>                 
                        <div class="list-item">
                            <a href="/all-products">Clear Domes</a>
                        </div>                  
                        <div class="list-item">
                            <a href="/all-products">Accessories</a>
                        </div>
                    </ul>
            </div>
            <div class="col-sm-12 col-md-3 footer-links">

            <p>Quick Links</p>
                    <ul class="list-group text-secondary small">
                        <div class="list-item">
                            <a href="<?php echo get_page_link( get_page_by_title( home )->ID ); ?>">Home</a>
                        </div>
                        <div class="list-item">
                            <a href="<?php echo get_page_link( get_page_by_title( news )->ID ); ?>">News</a>
                        </div>
                        <div class="list-item">
                            <a href="<?php echo get_page_link( get_page_by_title( contact )->ID ); ?>">Contact</a>
                        </div>
                    </ul>


            </div>
        </div>
        <div class="row mt-5 px-5 border-top border-secondary d-flex align-items-center justify-content-center text-center">
            <div class="col-sm-12 col-md-4 pt-5">
             <small><p>&copy; Copyright <?php echo date("Y"); ?></p>
               <p>Mockridge Labels & Nameplates Ltd.</p></small>
            </div>
            <div class="col-sm-12 col-md-4">
               <small>Vat No. 388 3007 37</small>
            </div>
            <div class="col-sm-12 col-md-4">
               <small>Website by<a href="https://www.invadedbypixels.co.uk"> Invaded by Pixels<a></small>
            </div>
        </div>
    </div>
</section>


<?php wp_footer(); ?>

<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script>
    AOS.init();
  </script>

<script>
    
   </script>
  
</body>
</html>

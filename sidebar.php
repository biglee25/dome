
 <?php dynamic_sidebar( 'primary' ); ?>


 <div class="col-sm-12 col-lg-3 text-center">
 <div class="sidebar">

                <a href="/basket" class="btn btn-block btn-outline-dark d-flex align-items-center py-3 pl-4 sidebar-links">
                    <i class="fas fa-shopping-cart pr-3"></i>View Basket
                </a>
                <a href="/checkout" class="btn btn-block btn-outline-dark d-flex align-items-center py-3 pl-4 sidebar-links">
                    <i class="fas fa-credit-card pr-3"></i>Checkout
                </a>
                <a href="tel:01613082331" class="tel-no btn btn-block btn-outline-dark d-flex align-items-center py-3 pl-4 sidebar-links">
                    <i class="fas fa-phone-alt pr-3"></i>Give us a call
                </a>
                <a href="/contact" class="btn btn-block btn-outline-dark d-flex align-items-center py-3 pl-4 sidebar-links">
                <i class="far fa-envelope pr-3"></i>Contact us
                </a>

            <p class="bg-dark text-light text-center p-2 mt-5">Product Filter</p>
                <?php if ( is_active_sidebar( 'custom-side-bar' ) ) : ?>
                    <?php dynamic_sidebar( 'custom-side-bar' ); ?>
                <?php endif; ?>

                </div>


            </div>


 




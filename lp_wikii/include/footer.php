<footer>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
            <p>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt.
             Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
            </p>
            </div>
        </div>
    </div>
</footer>
<div style="display: none;" class="popupform" id="popupform">
    <div class="modal-body">
        <div class="popup-bann"><img src="<?php echo $siteurl ?>assets/images/popop-img.png" alt=""></div>
        <div class="popup-content">
            <h2>Get Started Now</h2>
            <p>Providing you the perfect solution for your business needs. Let's work together and unlock doors to success.</p>
            <form action="/order/index.php" method="post" class="validate-popupform-quote">
                <div class="row">
                    <div class="col-md-6">
                        <input type="text" class="required" required name="customer_name" placeholder="Your Name">
                        <input type="email" class="required email" required name="customer_email"  placeholder="Your Email">
                        <input type="tel" class="required  number ftpn" required name="customer_phone"   minlength="7" maxlength="14" placeholder="Your Phone">
                    </div>
                    <div class="col-md-6">
                        <textarea autocomplete="nope"  name="msg" class="required" required placeholder="To help us understand better, enter a brief description about your project."></textarea>
                    </div>
                    <div class="col-md-12 text-center">
                        <p class="form_tagline"> <input type="checkbox" name="agree"> &nbsp; To receive our weekly Newsletter/SMS and offers check here. You can unsubscribe at any time.</p>
                        <input type="submit" class="btn btn-blue" name="send_data" value="Submit">
                    </div>
                </div>
            </form>
        </div>
    </div>

</div>

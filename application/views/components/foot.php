<footer id="footer" class="border-0 mt-0">
    <hr class="bg-light opacity-2 my-0">
    <div class="container pb-5">
        <div class="row text-center text-md-start py-4 my-5">
            <div class="col-md-6 col-lg-3 align-self-center text-center text-md-start text-lg-center mb-5 mb-lg-0">
                <a href="demo-auto-services.html" class="text-decoration-none">
                    <img src="<?php echo base_url('assets/logo/logo.png') ?>" width="50%" class="img-fluid" alt="" />
                </a>
            </div>
            <div class="col-md-6 col-lg-3 mb-5 mb-lg-0">
                <h5 class="text-transform-none font-weight-bold text-color-light text-4-5 mb-4">About Us</h5>
                <ul class="list list-unstyled">
                    <li class="pb-1 mb-2">
                        <span class="d-block font-weight-semibold line-height-1 text-color-grey text-3-5">ADDRESS</span>
                        <a href="demo-auto-services-contact.html#get-direction" class="text-color-light custom-text-underline-1 font-weight-medium text-3-5"><?php echo $contact->address; ?></a>
                    </li>
                    <li class="pb-1 mb-2">
                        <span class="d-block font-weight-semibold line-height-1 text-color-grey text-3-5 mb-1">PHONE</span>
                        <ul class="list list-unstyled font-weight-light text-3-5 mb-0">
                            <li class="text-color-light line-height-3 mb-0">
                                <a href="tel:<?php echo $contact->phone; ?>" class="text-decoration-none text-color-light text-color-hover-default"><?php echo $contact->phone; ?></a>
                            </li>
                        </ul>
                    </li>
                    <li class="pb-1 mb-2">
                        <span class="d-block font-weight-semibold line-height-1 text-color-grey text-3-5">EMAIL</span>
                        <a href="mailto:<?php echo $contact->email; ?>" class="text-decoration-none font-weight-light text-3-5 text-color-light text-color-hover-default"><?php echo $contact->email; ?></span></a>
                    </li>
                    <li class="pb-1 mb-2">
                        <span class="d-block font-weight-semibold line-height-1 text-color-grey text-3-5">Account Number</span>
                        <a href="mailto:<?php echo $contact->account_number; ?>" class="text-decoration-none font-weight-light text-3-5 text-color-light text-color-hover-default"><?php echo $contact->account_number; ?></span></a>
                    </li>
                </ul>
            </div>
            <div class="col-md-6 col-lg-2 mb-5 mb-md-0">
                <h5 class="text-transform-none font-weight-bold text-color-light text-4-5 mb-4">Social Media</h5>
                <ul class="social-icons social-icons-medium">
                    <li class="social-icons-instagram">
                        <a href="https://www.instagram.com/<?php echo $contact->instagram; ?>" class="no-footer-css" target="_blank" title="Instagram"><i class="fab fa-instagram"></i></a>
                    </li>
                    <li class="social-icons-twitter mx-2">
                        <a href="https://www.twitter.com/<?php echo $contact->twitter; ?>" class="no-footer-css" target="_blank" title="Twitter"><i class="fab fa-twitter"></i></a>
                    </li>
                    <li class="social-icons-facebook">
                        <a href="https://www.facebook.com/<?php echo $contact->facebook; ?>" class="no-footer-css" target="_blank" title="Facebook"><i class="fab fa-facebook-f"></i></a>
                    </li>
                </ul>
            </div>
            <div class="col-md-6 col-lg-3 offset-lg-1">
                <h5 class="text-transform-none font-weight-bold text-color-light text-4-5 mb-4">Opening Hours</h5>
                <ul class="list list-unstyled list-inline custom-list-style-1 mb-0">
                    <li><?php echo $contact->opening_hours; ?></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="footer-copyright bg-light py-4">
        <div class="container py-2">
            <div class="row">
                <div class="col">
                    <p class="text-center text-3 mb-0">Fifin Wedding Organizer © 2021. All Rights Reserved.</p>
                </div>
            </div>
        </div>
    </div>
</footer>
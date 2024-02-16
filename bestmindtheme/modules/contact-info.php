<section class="section section--contact-info full-width">
    <div class="section-wrapper">
        <div class="panels">
        <?php
        if( function_exists( 'geot_target' ) ) {
            if( geot_target_state( [ 'Colorado' ] ) ) { ?>
                <div class="panel">
                    <img src="/wp-content/themes/bestmindtheme/assets/icon-contact-phone.png" alt="phone icon" />
                    <h3 class="heading uppercase">Phone</h3>
                    <a href="tel:<?php the_sub_field("phoneCO"); ?>"><?php the_sub_field("phoneCO"); ?></a>
                    <?php if (get_sub_field("faxCO")) : ?>
                    <h3 class="heading">Fax</h3>
                    <a href="tel:<?php the_sub_field("faxCO"); ?>"><?php the_sub_field("faxCO"); ?></a>
                    <?php endif; ?>
                </div>
                <div class="panel">
                    <img src="/wp-content/themes/bestmindtheme/assets/icon-contact-location.png" alt="location icon" />
                    <h3 class="heading uppercase">Address</h3>
                    <?php the_sub_field("addressCO"); ?>
                </div>
                <div class="panel">
                    <img src="/wp-content/themes/bestmindtheme/assets/icon-contact-hours.png" alt="hours icon" />
                    <h3 class="heading uppercase">Hours</h3>
                    <?php the_sub_field("hoursCO"); ?>
                </div>
            <?php } elseif( geot_target_state( [ 'Oregon', 'Washington', 'Idaho' ] ) ) { ?>
                <div class="panel">
                    <img src="/wp-content/themes/bestmindtheme/assets/icon-contact-phone.png" alt="phone icon" />
                    <h3 class="heading uppercase">Phone</h3>
                    <a href="tel:<?php the_sub_field("phoneOR"); ?>"><?php the_sub_field("phoneOR"); ?></a>
                    <?php if (get_sub_field("faxOR")) : ?>
                    <h3 class="heading">Fax</h3>
                    <a href="tel:<?php the_sub_field("faxOR"); ?>"><?php the_sub_field("faxOR"); ?></a>
                    <?php endif; ?>
                </div>
                <div class="panel">
                    <img src="/wp-content/themes/bestmindtheme/assets/icon-contact-location.png" alt="location icon" />
                    <h3 class="heading uppercase">Address</h3>
                    <?php the_sub_field("addressOR"); ?>
                </div>
                <div class="panel">
                    <img src="/wp-content/themes/bestmindtheme/assets/icon-contact-hours.png" alt="hours icon" />
                    <h3 class="heading uppercase">Hours</h3>
                    <?php the_sub_field("hoursOR"); ?>
                </div>
            <?php } else { ?>
                <div class="panel">
                    <img src="/wp-content/themes/bestmindtheme/assets/icon-contact-phone.png" alt="phone icon" />
                    <h3 class="heading uppercase">Phone</h3>
                    <a href="tel:<?php the_sub_field("phone"); ?>"><?php the_sub_field("phone"); ?></a>
                    <?php if (get_sub_field("fax")) : ?>
                    <h3 class="heading">Fax</h3>
                    <a href="tel:<?php the_sub_field("fax"); ?>"><?php the_sub_field("fax"); ?></a>
                    <?php endif; ?>
                </div>
                <div class="panel">
                    <img src="/wp-content/themes/bestmindtheme/assets/icon-contact-location.png" alt="location icon" />
                    <h3 class="heading uppercase">Address</h3>
                    <?php the_sub_field("address"); ?>
                </div>
                <div class="panel">
                    <img src="/wp-content/themes/bestmindtheme/assets/icon-contact-hours.png" alt="hours icon" />
                    <h3 class="heading uppercase">Hours</h3>
                    <?php the_sub_field("hours"); ?>
                </div>
            <?php } ?>
        <?php } else { ?>
            <div class="panel">
                    <img src="/wp-content/themes/bestmindtheme/assets/icon-contact-phone.png" alt="phone icon" />
                    <h3 class="heading uppercase">Phone</h3>
                    <a href="tel:<?php the_sub_field("phone"); ?>"><?php the_sub_field("phone"); ?></a>
                    <?php if (get_sub_field("fax")) : ?>
                    <h3 class="heading">Fax</h3>
                    <a href="tel:<?php the_sub_field("fax"); ?>"><?php the_sub_field("fax"); ?></a>
                    <?php endif; ?>
                </div>
                <div class="panel">
                    <img src="/wp-content/themes/bestmindtheme/assets/icon-contact-location.png" alt="location icon" />
                    <h3 class="heading uppercase">Address</h3>
                    <?php the_sub_field("address"); ?>
                </div>
                <div class="panel">
                    <img src="/wp-content/themes/bestmindtheme/assets/icon-contact-hours.png" alt="hours icon" />
                    <h3 class="heading uppercase">Hours</h3>
                    <?php the_sub_field("hours"); ?>
                </div>
        <?php } ?>
        </div>
    </div>
</section>
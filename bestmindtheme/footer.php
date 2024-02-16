<?php if ( is_page_template( 'page-landingpage.php' ) ) { ?>
        <footer class="footer full-width alt" id="footer">
            <section class="section section--footer">
                
                <div class="utility-container">
                    <div class="logo-container">
                        <a href="/"><img src="/wp-content/themes/bestmindtheme/assets/bestmind-logo.png" alt="Bestmind Logo" class="logo"></a>
                    </div> 
                </div>
                
                <div class="info-container">
                    <div class="info-block">
                        <p class="uppercase">
                            <a href="/privacy-policy">Privacy Policy</a>
                            &nbsp;&nbsp;|&nbsp;&nbsp;
                            <a href="/terms-and-conditions">Terms & Conditions</a>
                            &nbsp;&nbsp;|&nbsp;&nbsp;
                            <a href="/hipaa">HIPAA</a>
                        </p>
                        <p>&copy; 2022 BestMind Behavioral Health. All rights reserved. 
                            <br>Website Design, Development, SEO & PPC by <a href="https://www.cardinaldigitalmarketing.com/">Cardinal Digital Marketing</a>
                        </p>
                    </div>
                </div>

            </section>
        </footer>

<?php } elseif ( is_page_template( 'page-lp-no-banner.php' ) ) { ?>
        <footer class="footer full-width alt" id="footer">
            <section class="section section--footer">
                
                <div class="utility-container">
                    <div class="logo-container">
                        <a href="/"><img src="/wp-content/themes/bestmindtheme/assets/bestmind-logo.png" alt="Bestmind Logo" class="logo"></a>
                    </div> 
                </div>
                
                <div class="info-container">
                    <div class="info-block">
                        <p>&copy; 2022 BestMind Behavioral Health. All rights reserved. 
                            <br>Website Design, Development, SEO & PPC by <a href="https://www.cardinaldigitalmarketing.com/">Cardinal Digital Marketing</a>
                        </p>
                    </div>
                </div>

            </section>
        </footer>
<?php } else { ?>

        <footer class="footer full-width" id="footer">
            <section class="section section--footer">
                
                <div class="utility-container">
                    <div class="logo-container">
                        <a href="/"><img src="/wp-content/themes/bestmindtheme/assets/bestmind-logo.png" alt="Bestmind Logo" class="logo"></a>
                    </div> 
                    <div class="menu-container">
                        <?php wp_nav_menu(array(
                            'theme_location' => 'footer-nav',
                            'container' => '',
                            'items_wrap' => '
                                            <ul class="footer-nav">
                                                %3$s
                                            </ul>
                                            ',
                            'menu_id' => ''
                        ));
                        ?>
                    </div>
					
                    <div class="space-container"></div>
                </div>
				
				<div class="nav-container">
					<?php wp_nav_menu(array(
							'theme_location' => 'social-nav',
							'container' => '',
							'items_wrap' => '
												<ul class="social-nav">
													%3$s
												</ul>
												',
							'menu_id' => ''
						));
					?>
				</div>
				
                <div class="info-container">
                    <div class="info-block">
                        <p class="uppercase">
                            <a href="/privacy-policy">Privacy Policy</a>
                            &nbsp;&nbsp;|&nbsp;&nbsp;
                            <a href="/terms-and-conditions">Terms & Conditions</a>
                            &nbsp;&nbsp;|&nbsp;&nbsp;
                            <a href="/hipaa">HIPAA</a>
                        </p>
                        <p>&copy; 2022 BestMind Behavioral Health. All rights reserved. 
                            <br>Website Design, Development, SEO & PPC by <a href="https://www.cardinaldigitalmarketing.com/">Cardinal Digital Marketing</a>
                        </p>
                        
                    </div>
                </div>   
                <?php the_field('insert_in_footer', 'option'); ?>
            </section>
        </footer>

<?php } ?>

<?php wp_footer(); ?> 
    </body>
</html>


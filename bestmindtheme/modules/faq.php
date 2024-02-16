<section class="section section--faq">
    <div class="section-wrapper">
        <div class="faq-wrapper">
        <?php

// Check rows exists.
if( have_rows('faq') ):

    // Loop through rows.
    while( have_rows('faq') ) : the_row();

        // Load sub field value. ?>
        <div class="faq">
            <h2 class="question heading">
                <?php the_sub_field("question") ?>
                <button id="button">
                    <span></span>
                    <span></span>
                </button>
            </h2>
            <div class="answer"><?php the_sub_field("answer") ?></div>
        </div>

   <?php // End loop.
    endwhile;

// No value.
else :
    // Do something...
endif;?>
            
        </div>
    </div>
</section>
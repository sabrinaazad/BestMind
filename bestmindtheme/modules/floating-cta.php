<div class="floating-cta mobile-only">
    <div class="cta-wrapper uppercase align--center">
        
        <?php $floatingctaurlOR = get_field('floating_cta_url_OR', 'options'); ?>
        <?php $floatingctalabelOR = get_field('floating_cta_OR', 'options' ); ?> 
        <?php $floatingctaurl = get_field('floating_cta_url', 'options'); ?>
        <?php $floatingctalabel = get_field('floating_cta', 'options' ); ?>
        

        <?php echo do_shortcode('[geot_filter_state state="OR"]<a href="'. $floatingctaurlOR .'">'. $floatingctalabelOR .'</a>[/geot_filter_state]');?>
        <?php echo do_shortcode('[geot_filter_state exclude_state="OR"]<a href="'. $floatingctaurl .'">'. $floatingctalabel .'</a>[/geot_filter_state]');?>

    </div>
</div>


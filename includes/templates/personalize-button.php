<?php
/**
 * @var string $pfc_button_color
 * @var string $site_url
 * @var string $pfc_button_text
 */
?>
<div class="personalize-btn-wrapper">
    <p>
        <?php esc_html_e($pfc_modal_title, 'printful'); ?>
    </p>
    <a class="btn btn-secondary"
       style="background-color: <?php esc_attr_e($pfc_button_color); ?>"
       onclick="Printful_Product_Customizer.onCustomizeClick( '<?php echo esc_url($site_url); ?>')">
        <?php esc_html_e($pfc_button_text, 'printful'); ?>
    </a>
</div>

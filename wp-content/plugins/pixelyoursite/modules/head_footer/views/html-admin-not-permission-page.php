<?php

namespace PixelYourSite;

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly.
}

?>

<h2 class="section-title">Head and Footer Settings</h2>

<!-- General -->
<div class="card card-static">
    <div class="card-header">
        General
    </div>
    <div class="card-body">
        <div class="row">
            <div class="col">
                <p>
                    Your user role doesn't have permission to add this type of code. You need unfiltered_html capabilities. Ask your admin to upgrade your account. For Multisite, ask your super admin to upgrade your account.
                </p>
            </div>
        </div>
    </div>
    <div class="card-body">
        <div class="row">
            <div class="col">
                <?php renderDummySwitcher( 'false' ); ?>
                <h4 class="switcher-label">Enable Head and Footer</h4>
            </div>
        </div>
    </div>
</div>

<!-- Header Scripts -->
<div class="card card-static">
    <div class="card-header">
        Head Scripts
    </div>
    <div class="card-body">
        <div class="row form-group">
            <div class="col">
                <h4 class="label">Any device type:</h4>
			    <?php renderDummyTextAreaInput( 'head_any' ); ?>
            </div>
        </div>
        <div class="row form-group">
            <div class="col">
                <h4 class="label">Desktop Only:</h4>
			    <?php renderDummyTextAreaInput( 'head_desktop' ); ?>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <h4 class="label">Mobile Only:</h4>
			    <?php renderDummyTextAreaInput( 'head_mobile' ); ?>
            </div>
        </div>
    </div>
</div>

<!-- Footer Scripts -->
<div class="card card-static">
    <div class="card-header">
        Footer Scripts
    </div>
    <div class="card-body">
        <div class="row form-group">
            <div class="col">
                <h4 class="label">Any device type:</h4>
                <?php renderDummyTextAreaInput( 'footer_any' ); ?>
            </div>
        </div>
        <div class="row form-group">
            <div class="col">
                <h4 class="label">Desktop Only:</h4>
                <?php renderDummyTextAreaInput( 'footer_desktop' ); ?>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <h4 class="label">Mobile Only:</h4>
                <?php renderDummyTextAreaInput( 'footer_mobile' ); ?>
            </div>
        </div>
    </div>
</div>

<?php if( isWooCommerceActive() ) : ?>

    <h2 class="section-title">WooCommerce Order Received Page Scripts</h2>

<!--    <p>Insert any script on the WooCommerce Thank You Page (order-received).</p>-->

    <div class="card card-static">
        <div class="card-header">
            General
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col">
                    <?php renderDummySwitcher( false ); ?>
                    <h4 class="switcher-label">Disable global head and footer scripts on Order Received page</h4>
                </div>
            </div>
        </div>
    </div>

    <div class="card card-static">
        <div class="card-header">
            Head Scripts
        </div>
        <div class="card-body">
            <div class="row form-group">
                <div class="col">
                    <h4 class="label">Any device type:</h4>
                    <?php renderDummyTextAreaInput( 'woo_order_received_head_any' ); ?>
                </div>
            </div>
            <div class="row form-group">
                <div class="col">
                    <h4 class="label">Desktop Only:</h4>
                    <?php renderDummyTextAreaInput( 'woo_order_received_head_desktop' ); ?>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <h4 class="label">Mobile Only:</h4>
                    <?php renderDummyTextAreaInput( 'woo_order_received_head_mobile' ); ?>
                </div>
            </div>
        </div>
    </div>

    <div class="card card-static">
        <div class="card-header">
            Footer Scripts
        </div>
        <div class="card-body">
            <div class="row form-group">
                <div class="col">
                    <h4 class="label">Any device type:</h4>
                    <?php renderDummyTextAreaInput( 'woo_order_received_footer_any' ); ?>
                </div>
            </div>
            <div class="row form-group">
                <div class="col">
                    <h4 class="label">Desktop Only:</h4>
                    <?php renderDummyTextAreaInput( 'woo_order_received_footer_desktop' ); ?>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <h4 class="label">Mobile Only:</h4>
                    <?php renderDummyTextAreaInput( 'woo_order_received_footer_mobile' ); ?>
                </div>
            </div>
        </div>
    </div>

<?php endif; ?>

<h2 class="section-title">Replacements <?php renderHfBadge(); ?></h2>

<div class="panel">
    <div class="row">
        <div class="col text-secondary">
	        <?php include 'html-variables-help.php'; ?>
        </div>
    </div>
</div>

<hr>
<div class="row justify-content-center">
    <div class="col-4">
        <button class="btn btn-block btn-save">Save Settings</button>
    </div>
</div>
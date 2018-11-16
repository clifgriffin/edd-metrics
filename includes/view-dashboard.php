<div class="daterange daterange--double metrics-datepicker"></div>

<h2 class="page-title"><?php _e('Metrics Overview', 'edd-metrics'); ?></h2>

<!-- <div class="edd-metrics-box edd-metrics-chart-wrapper">
    <canvas id="metrics-chart" width="400" height="150"></canvas>
</div> -->

<div class="edd-metrics-flex">

	<section class="edd-metrics-boxes">

		<?php do_action('edd_metrics_before_boxes'); ?>

	    <div class="edd-metrics-box">
	        <p class="top-text"><?php _e('Net Revenue', 'edd-metrics'); ?></p>
	        <h2 id="revenue"></h2>
	        <p class="bottom-text" id="revenue-compare"><span></span></p>
	    </div>

	    <div class="edd-metrics-box">
	        <p class="top-text"><?php _e('Revenue Today', 'edd-metrics'); ?></p>
	        <h2 id="earnings-today"></h2>
	        <!-- <p class="bottom-text" id="sales-compare"><span></span></p> -->
	    </div>

	    <div class="edd-metrics-box">
	        <p class="top-text"><?php _e('Sales', 'edd-metrics'); ?></p>
	        <h2 id="sales"></h2>
	        <p class="bottom-text" id="sales-compare"><span></span></p>
	    </div>

	    <div class="edd-metrics-box">
	        <p class="top-text"><?php _e('Avg. Per Customer', 'edd-metrics'); ?></p>
	        <h2 id="avgpercust"></h2>
	        <p class="bottom-text" id="avgpercust-compare"><span></span></p>
	    </div>

	    <div class="edd-metrics-box">
	        <p class="top-text"><?php _e('Refunds', 'edd-metrics'); ?></p>
	        <h2 id="refund-amount" class="metrics-title1"></h2>
	        <h2 id="refunds" class="metrics-title2"></h2>
	        <p class="bottom-text" id="refunds-compare"><span></span></p>
	    </div>

	    <div class="edd-metrics-box">
	        <p class="top-text"><?php _e('Discounts', 'edd-metrics'); ?></p>
	        <h2 id="discounts" class="metrics-title1"></h2>
	        <h2 id="discounts-count" class="metrics-title2"></h2>
	        <p class="bottom-text" id="discounts-compare"><span></span></p>
	    </div>

		<?php if( class_exists('EDD_Recurring') ) : ?>
	    <div class="edd-metrics-box">
	        <p class="top-text"><?php _e('Recurring Revenue', 'edd-metrics'); ?></p>
	        <h2 id="recurring-revenue"></h2>
	        <p class="bottom-text" id="recurring-compare"><span></span></p>
	    </div>

	    <div class="edd-metrics-box">
	        <p class="top-text"><?php _e('New Subscriptions', 'edd-metrics'); ?></p>
	        <h2 id="subscriptions"></h2>
	        <p class="bottom-text" id="subscriptions-compare"><span></span></p>
	    </div>

	    <div class="edd-metrics-box">
	        <p class="top-text"><?php _e('Recurring Next 30 Days', 'edd-metrics'); ?></p>
	        <h2 id="recurring-revenue-30"></h2>
	        <!-- <p class="bottom-text" id="subscriptions-compare"><span></span></p> -->
	    </div>
		<?php endif; ?>

		<?php if( class_exists('EDD_Software_Licensing') ) : ?>
	    <div class="edd-metrics-box">
	        <p class="top-text"><?php _e('License Renewals', 'edd-metrics'); ?></p>
	        <h2 id="renewal-amount" class="metrics-title1"></h2>
	        <h2 id="renewals" class="metrics-title2"></h2>
	        <p class="bottom-text" id="renewals-compare"><span></span></p>
	    </div>
		<?php endif; ?>

		<?php if( defined( 'EDD_COMMISSIONS_VERSION' ) ): ?>
		<div class="edd-metrics-box">
			<p class="top-text"><?php _e('Unpaid Commissions', 'edd-metrics'); ?></p>
			<h2 id="commissions-amount" class="metrics-title1"></h2>
			<h2 id="commissions" class="metrics-title2"></h2>
		</div>
		<?php endif; ?>

		<!--  	<div class="one-half last-col">
		    <div class="edd-metrics-box">
		        <p class="top-text"><?php _e('Est. Yearly Revenue', 'edd-metrics'); ?></p>
		        <h2 id="yearly"></h2>
		        <p class="bottom-text" id="avgyearly-compare"><span></span></p>
		    </div>
		</div> -->

		<?php do_action('edd_metrics_after_boxes'); ?>

	</section>

	<div class="edd-metrics-sidebar">

		<div class="metrics-details-link">
			<canvas id="metrics-line-chart-tiny" width="300" height="125"></canvas>
			<a href="<?php echo admin_url(); ?>edit.php?post_type=download&page=edd_metrics&view=metrics-details&metric=revenue">
				<?php _e('View Revenue Details', 'edd-metrics'); ?> &rarr;
			</a>
		</div>

	    <?php do_action('edd_metrics_dash_sidebar'); ?>

	</div>

</div>
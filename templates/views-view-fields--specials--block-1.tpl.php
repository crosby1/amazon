<article class="special_view_instance_container">

	<header><?php print $fields['title']->content; ?></header>

	<div class="special_view_instance_rate_date">

		<div class="special_view_instance_rate">
			<?php print $fields['field_special_rates']->content; ?> 
		</div>

		<div class="special_view_instance_date">
			Ends: &nbsp;<?php print $fields['field_special_valid_until']->content; ?>
		</div>
	</div>

	<div class="special_view_instance_img">
		<?php print $fields['field_special_image']->content; ?>
	</div>

	<div class="special_view_instance_desc">
		<?php print $fields['field_special_desc']->content; ?>
	</div>

	

</article>
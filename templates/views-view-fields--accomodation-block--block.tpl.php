<article class="accommo_view_instance_container">

	<div class="accommo_view_instance_img">
		<?php print $fields['field_accommo_img']->content; ?>
	</div>

	<header><?php print $fields['title']->content; ?></header>

	<div class="accommo_view_instance_desc">
		<?php print $fields['body']->content; ?>
	</div>

	<div class="accommo_view_instance_price_tag">
		<div class="accommo_view_instance_price">
			<?php print $fields['field_accommo_price']->content; ?> <?php print $fields['field_accommo_price_format']->content; ?>
		</div>
	</div>

</article>


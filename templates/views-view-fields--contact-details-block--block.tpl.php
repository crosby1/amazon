<article class="contact_view_instance_container">

	<header><?php print $fields['field_contact_owner']->content; ?></header>

	<div class="contact_view_address">
		<span class="street_no"><?php print $fields['field_contact_strno']->content; ?></span> 
		<span class="street_name"><?php print $fields['field_contact_strname']->content; ?></span>
		<br />
		<span class="suburb"><?php print $fields['field_contact_subarea']->content; ?></span>
		<br />
		<span class="city"><?php print $fields['field_contact_citytown']->content; ?>,</span>
		<span class="pcode"><?php print $fields['field_contact_pcode']->content; ?></span>
		<br />
		<span class="country"><?php print $fields['field_contact_country']->content; ?></span>
	</div>

	<div class="contact_view_contact">
		<span class="phone"><strong>T:  </strong><?php print $fields['field_contact_phno']->content; ?></span> 
		<br />
		<span class="fax"><strong>F:  </strong><?php print $fields['field_contact_faxno']->content; ?></span>
		<br />
		<span class="emailadd"><strong>E:  </strong>
			<a href="mailto:<?php print $fields['field_contact_email']->content; ?>"><?php print $fields['field_contact_email']->content; ?></a>
		</span>
	</div>


</article>
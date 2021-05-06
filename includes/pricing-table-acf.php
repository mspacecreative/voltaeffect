<style>
	.corporate_pricing_table {
		margin: auto;
		width: 100%;
		font-family: sans-serif;
		font-size: 0;
	}
	.corporate_pricing_table.fixed .header-row {
		position: fixed;
		top: 46px;
		width: 100%;
	}
	.header-row {
		font-weight: bold;
		background-color: rgba(255,255,255,.75);
		/*padding: 25px 0;*/
	}
	.header-row td {
		background-color: #333;
		color: #fff;
		font-size: 20px;
		/*margin-right: 2%;*/
		display: inline-block;
		vertical-align: middle;
		border-right: none;
		text-align: center;
	}
	.header-row td:first-of-type {
		background-color: transparent;
		color: #000;
		border-right: 1px solid #333;
		text-align: left;
	}
	.body-row td {
		text-align: center;
		/*margin-right: 2%;*/
		display: inline-block;
		vertical-align: top;
	}
	.body-row td:first-of-type {
		text-align: left;
		border-right: 1px solid #c9c9c9;
	}
	.header-row td:last-of-type, .body-row td:last-of-type {
		margin-right: 0;
	}
	.corporate_pricing_table td {
		padding: 1%;
		box-sizing: border-box;
		line-height: 20px;
	}
	.align-center {
		text-align: center;
	}
	.grey-row-bg {
		background-color: #c9c9c9;
		color: #fff;
		display: block;
	}
	.corporate_pricing_table.fixed .first {
		margin-top: 44px;
	}
	.grey-row-bg > td {
		display: block;
		font-size: 20px;
	}
	.header-row, .grey-row-bg, .body-row {
		display: block;
	}
	.body-row td, .header-row td {
		width: 20%;
	}
	.body-row {
		border-bottom: 1px solid #c9c9c9;
	}
	.body-row td {
		padding: 15px;
		font-size: 15px;
		vertical-align: middle;
	}
	.corporate_pricing_table svg {
		width: 15px;
		height: 15px;
	}
	.mobile-pricing-table {
		display: none;
	}
	.membership-type h2 {
		background-color: #000;
		margin-top: 0;
		color: #fff;
		padding: 15px 30px;
		margin-bottom: 0;
	}
	.membership-type-inner {
		border: 1px solid #000;
		height: 100%;
	}
	.post-content-container .mobile-pricing-table ul {
	    margin: 0 0 2em;
	}
	.post-content-container .mobile-pricing-table h3 {
		margin: 1em 0 .5em;
	}
	.table-list-content {
		padding: 5px 30px 15px;
	}
	@media (max-width: 980px) {
		.mobile-pricing-table {
			display: flex;
			flex-wrap: wrap;
			margin-left: -10px;
			margin-right: -10px;
			justify-content: center;
		}
		.corporate_pricing_table {
			display: none;
		}
	}
	@media (max-width: 980px) {
		.membership-type {
			flex-basis: 50%;
			padding: 10px;
		}
	}
	@media (max-width: 450px) {
		.membership-type {
			flex-basis: 100%;
		}
	}
</style>

<h2 style="margin-bottom: 50px; margin-top: 0;"><?php esc_html_e('Benefits &amp; Pricing'); ?></h2>

<table cellpadding="0" cellspacing="0" border="0" class="corporate_pricing_table">
	<tr class="header-row">
		<td>Benefits</td>
		<td>Supporter</td>
		<td>Creator</td>
		<td>Builder</td>
		<td>Innovator</td>
	</tr>
	<tr class="align-center grey-row-bg first">
		<td>People</td>
	</tr>
	
	<tr class="body-row">
		
		<td>Innovation Assessment</td>
		
		<?php if( have_rows('supporter', 'options') ): ?>
		
		<td>
		
		<?php while( have_rows('supporter', 'options') ): the_row();
		
			if( have_rows('supporter_benefit_categories', 'options') ):
			while( have_rows('supporter_benefit_categories', 'options') ): the_row();
			
			$people = get_sub_field('people');
			if ( $people && in_array( 'innovation', $people ) ): ?>
			<svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="30px" height="30px" viewBox="0 0 30 30">
				<g>
					<path fill="#231F20" d="M15,1.598c7.39,0,13.401,6.012,13.401,13.401S22.39,28.401,15,28.401S1.598,22.389,1.598,15
						S7.61,1.598,15,1.598 M15,0C6.715,0,0,6.716,0,15c0,8.284,6.715,15,15,15c8.283,0,15-6.716,15-15C30,6.716,23.283,0,15,0L15,0z"/>
				</g>
			<circle fill="#231F20" cx="15" cy="15" r="9.73"/>
			</svg>
			<?php endif;
			
			endwhile;
			endif;
			
		endwhile; ?>
		
		</td>
		
		<?php else : ?>
		<td>&nbsp;</td>
		
		<?php endif;
		
		if( have_rows('creator', 'options') ): ?>
		
		<td>
			
		<?php while( have_rows('creator', 'options') ): the_row();
		
			if( have_rows('towner_benefit_categories', 'options') ):
			while( have_rows('towner_benefit_categories', 'options') ): the_row();
			
			$people = get_sub_field('people');
			if ( $people && in_array( 'innovation', $people ) ): ?>
			<svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="30px" height="30px" viewBox="0 0 30 30">
				<g>
					<path fill="#231F20" d="M15,1.598c7.39,0,13.401,6.012,13.401,13.401S22.39,28.401,15,28.401S1.598,22.389,1.598,15
						S7.61,1.598,15,1.598 M15,0C6.715,0,0,6.716,0,15c0,8.284,6.715,15,15,15c8.283,0,15-6.716,15-15C30,6.716,23.283,0,15,0L15,0z"/>
				</g>
			<circle fill="#231F20" cx="15" cy="15" r="9.73"/>
			</svg>
			<?php endif;
			
			endwhile;
			endif;
			
		endwhile; ?>
		
		</td>
		
		<?php else : ?>
		<td>&nbsp;</td>
		
		<?php endif;
		
		if( have_rows('builder', 'options') ): ?>
		
		<td>
		
		<?php while( have_rows('builder', 'options') ): the_row();
		
			if( have_rows('builder_benefit_categories', 'options') ):
			while( have_rows('builder_benefit_categories', 'options') ): the_row();
			
			$people = get_sub_field('people');
			if ( $people && in_array( 'innovation', $people ) ): ?>
			<svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="30px" height="30px" viewBox="0 0 30 30">
				<g>
					<path fill="#231F20" d="M15,1.598c7.39,0,13.401,6.012,13.401,13.401S22.39,28.401,15,28.401S1.598,22.389,1.598,15
						S7.61,1.598,15,1.598 M15,0C6.715,0,0,6.716,0,15c0,8.284,6.715,15,15,15c8.283,0,15-6.716,15-15C30,6.716,23.283,0,15,0L15,0z"/>
				</g>
			<circle fill="#231F20" cx="15" cy="15" r="9.73"/>
			</svg>
			<?php endif;
			
			endwhile;
			endif;
			
		endwhile; ?>
	
		</td>
			
		<?php else : ?>
		<td>&nbsp;</td>
			
		<?php endif;
		
		if( have_rows('innovator', 'options') ): ?>
		
		<td>
				
		<?php while( have_rows('innovator', 'options') ): the_row();
		
			if( have_rows('benefit_categories', 'options') ):
			while( have_rows('benefit_categories', 'options') ): the_row();
			
			$people = get_sub_field('people');
			if ( $people && in_array( 'innovation', $people ) ): ?>
			<svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="30px" height="30px" viewBox="0 0 30 30">
				<g>
					<path fill="#231F20" d="M15,1.598c7.39,0,13.401,6.012,13.401,13.401S22.39,28.401,15,28.401S1.598,22.389,1.598,15
						S7.61,1.598,15,1.598 M15,0C6.715,0,0,6.716,0,15c0,8.284,6.715,15,15,15c8.283,0,15-6.716,15-15C30,6.716,23.283,0,15,0L15,0z"/>
				</g>
			<circle fill="#231F20" cx="15" cy="15" r="9.73"/>
			</svg>
			<?php endif;
			
			endwhile;
			endif;
			
		endwhile; ?>
		
		</td>
				
		<?php else : ?>
		<td>&nbsp;</td>
				
		<?php endif; ?>
		
	</tr>
	
	<tr class="body-row">
		<td>Corporate Innovation Programming Events</td>
		
		<?php if( have_rows('supporter', 'options') ): ?>
		
		<td>
		
		<?php while( have_rows('supporter', 'options') ): the_row();
		
			if( have_rows('supporter_benefit_categories', 'options') ):
			while( have_rows('supporter_benefit_categories', 'options') ): the_row();
			
			$people = get_sub_field('people');
			if ( $people && in_array( 'corporate', $people ) ): ?>
			<svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="30px" height="30px" viewBox="0 0 30 30">
				<g>
					<path fill="#231F20" d="M15,1.598c7.39,0,13.401,6.012,13.401,13.401S22.39,28.401,15,28.401S1.598,22.389,1.598,15
						S7.61,1.598,15,1.598 M15,0C6.715,0,0,6.716,0,15c0,8.284,6.715,15,15,15c8.283,0,15-6.716,15-15C30,6.716,23.283,0,15,0L15,0z"/>
				</g>
			<circle fill="#231F20" cx="15" cy="15" r="9.73"/>
			</svg>
			<?php endif;
			
			endwhile;
			endif;
			
		endwhile; ?>
		
		</td>
		
		<?php else : ?>
		<td>&nbsp;</td>
		
		<?php endif;
		
		if( have_rows('creator', 'options') ): ?>
		
		<td>
			
		<?php while( have_rows('creator', 'options') ): the_row();
		
			if( have_rows('towner_benefit_categories', 'options') ):
			while( have_rows('towner_benefit_categories', 'options') ): the_row();
			
			$people = get_sub_field('people');
			if ( $people && in_array( 'corporate', $people ) ): ?>
			<svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="30px" height="30px" viewBox="0 0 30 30">
				<g>
					<path fill="#231F20" d="M15,1.598c7.39,0,13.401,6.012,13.401,13.401S22.39,28.401,15,28.401S1.598,22.389,1.598,15
						S7.61,1.598,15,1.598 M15,0C6.715,0,0,6.716,0,15c0,8.284,6.715,15,15,15c8.283,0,15-6.716,15-15C30,6.716,23.283,0,15,0L15,0z"/>
				</g>
			<circle fill="#231F20" cx="15" cy="15" r="9.73"/>
			</svg>
			<?php endif;
			
			endwhile;
			endif;
			
		endwhile; ?>
		
		</td>
		
		<?php else : ?>
		<td>&nbsp;</td>
		
		<?php endif;
		
		if( have_rows('builder', 'options') ): ?>
		
		<td>
				
		<?php while( have_rows('builder', 'options') ): the_row();
		
			if( have_rows('builder_benefit_categories', 'options') ):
			while( have_rows('builder_benefit_categories', 'options') ): the_row();
			
			$people = get_sub_field('people');
			if ( $people && in_array( 'corporate', $people ) ): ?>
			<svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="30px" height="30px" viewBox="0 0 30 30">
				<g>
					<path fill="#231F20" d="M15,1.598c7.39,0,13.401,6.012,13.401,13.401S22.39,28.401,15,28.401S1.598,22.389,1.598,15
						S7.61,1.598,15,1.598 M15,0C6.715,0,0,6.716,0,15c0,8.284,6.715,15,15,15c8.283,0,15-6.716,15-15C30,6.716,23.283,0,15,0L15,0z"/>
				</g>
			<circle fill="#231F20" cx="15" cy="15" r="9.73"/>
			</svg>
			<?php endif;
			
			endwhile;
			endif;
			
		endwhile; ?>
		
		</td>
			
		<?php else : ?>
		<td>&nbsp;</td>
			
		<?php endif;
		
		if( have_rows('innovator', 'options') ): ?>
		
		<td>
				
		<?php while( have_rows('innovator', 'options') ): the_row();
		
			if( have_rows('benefit_categories', 'options') ):
			while( have_rows('benefit_categories', 'options') ): the_row();
			
			$people = get_sub_field('people');
			if ( $people && in_array( 'corporate', $people ) ): ?>
			<svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="30px" height="30px" viewBox="0 0 30 30">
				<g>
					<path fill="#231F20" d="M15,1.598c7.39,0,13.401,6.012,13.401,13.401S22.39,28.401,15,28.401S1.598,22.389,1.598,15
						S7.61,1.598,15,1.598 M15,0C6.715,0,0,6.716,0,15c0,8.284,6.715,15,15,15c8.283,0,15-6.716,15-15C30,6.716,23.283,0,15,0L15,0z"/>
				</g>
			<circle fill="#231F20" cx="15" cy="15" r="9.73"/>
			</svg>
			<?php endif;
			
			endwhile;
			endif;
			
		endwhile; ?>
		
		</td>
				
		<?php else : ?>
		<td>&nbsp;</td>
				
		<?php endif;  ?>
		
	</tr>
	<tr class="body-row">
		<td>Employee Network Memberships</td>
		
		<?php if( have_rows('supporter', 'options') ): ?>
		
		<td>
		
		<?php while( have_rows('supporter', 'options') ): the_row();
		
			if( have_rows('supporter_benefit_categories', 'options') ):
			while( have_rows('supporter_benefit_categories', 'options') ): the_row();
			
			$people = get_sub_field('people');
			if ( $people && in_array( 'employee', $people ) ): ?>
			<svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="30px" height="30px" viewBox="0 0 30 30">
				<g>
					<path fill="#231F20" d="M15,1.598c7.39,0,13.401,6.012,13.401,13.401S22.39,28.401,15,28.401S1.598,22.389,1.598,15
						S7.61,1.598,15,1.598 M15,0C6.715,0,0,6.716,0,15c0,8.284,6.715,15,15,15c8.283,0,15-6.716,15-15C30,6.716,23.283,0,15,0L15,0z"/>
				</g>
			<circle fill="#231F20" cx="15" cy="15" r="9.73"/>
			</svg>
			<?php endif;
			
			endwhile;
			endif;
			
		endwhile; ?>
		
		</td>
		
		<?php else : ?>
		<td>&nbsp;</td>
		
		<?php endif; 
		
		if( have_rows('creator', 'options') ): ?>
		
		<td>
			
		<?php while( have_rows('creator', 'options') ): the_row();
		
			if( have_rows('towner_benefit_categories', 'options') ):
			while( have_rows('towner_benefit_categories', 'options') ): the_row();
			
			$people = get_sub_field('people');
			if ( $people && in_array( 'employee', $people ) ): ?>
			<svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="30px" height="30px" viewBox="0 0 30 30">
				<g>
					<path fill="#231F20" d="M15,1.598c7.39,0,13.401,6.012,13.401,13.401S22.39,28.401,15,28.401S1.598,22.389,1.598,15
						S7.61,1.598,15,1.598 M15,0C6.715,0,0,6.716,0,15c0,8.284,6.715,15,15,15c8.283,0,15-6.716,15-15C30,6.716,23.283,0,15,0L15,0z"/>
				</g>
			<circle fill="#231F20" cx="15" cy="15" r="9.73"/>
			</svg>
			<?php endif;
			
			endwhile;
			endif;
			
		endwhile; ?>
		
		</td>
		
		<?php else : ?>
		<td>&nbsp;</td>
		
		<?php endif; 
		
		if( have_rows('builder', 'options') ): ?>
		
		<td>
				
		<?php while( have_rows('builder', 'options') ): the_row();
		
			if( have_rows('builder_benefit_categories', 'options') ):
			while( have_rows('builder_benefit_categories', 'options') ): the_row();
			
			$people = get_sub_field('people');
			if ( $people && in_array( 'employee', $people ) ): ?>
			<svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="30px" height="30px" viewBox="0 0 30 30">
				<g>
					<path fill="#231F20" d="M15,1.598c7.39,0,13.401,6.012,13.401,13.401S22.39,28.401,15,28.401S1.598,22.389,1.598,15
						S7.61,1.598,15,1.598 M15,0C6.715,0,0,6.716,0,15c0,8.284,6.715,15,15,15c8.283,0,15-6.716,15-15C30,6.716,23.283,0,15,0L15,0z"/>
				</g>
			<circle fill="#231F20" cx="15" cy="15" r="9.73"/>
			</svg>
			<?php endif;
			
			endwhile;
			endif;
			
		endwhile; ?>
		
		</td>
			
		<?php else : ?>
		<td>&nbsp;</td>
			
		<?php endif; 
		
		if( have_rows('innovator', 'options') ): ?>
		
		<td>
				
		<?php while( have_rows('innovator', 'options') ): the_row();
		
			if( have_rows('benefit_categories', 'options') ):
			while( have_rows('benefit_categories', 'options') ): the_row();
			
			$people = get_sub_field('people');
			if ( $people && in_array( 'employee', $people ) ): ?>
			<svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="30px" height="30px" viewBox="0 0 30 30">
				<g>
					<path fill="#231F20" d="M15,1.598c7.39,0,13.401,6.012,13.401,13.401S22.39,28.401,15,28.401S1.598,22.389,1.598,15
						S7.61,1.598,15,1.598 M15,0C6.715,0,0,6.716,0,15c0,8.284,6.715,15,15,15c8.283,0,15-6.716,15-15C30,6.716,23.283,0,15,0L15,0z"/>
				</g>
			<circle fill="#231F20" cx="15" cy="15" r="9.73"/>
			</svg>
			<?php endif;
			
			endwhile;
			endif;
			
		endwhile; ?>
		
		</td>
				
		<?php else : ?>
		<td>&nbsp;</td>
				
		<?php endif;  ?>
		
	</tr>
	
	<tr class="body-row">
		<td>Access to Founder Programming</td>
		
		<?php if( have_rows('supporter', 'options') ): ?>
		
		<td>
		
		<?php while( have_rows('supporter', 'options') ): the_row();
		
			if( have_rows('supporter_benefit_categories', 'options') ):
			while( have_rows('supporter_benefit_categories', 'options') ): the_row();
			
			$people = get_sub_field('people');
			if ( $people && in_array( 'access', $people ) ): ?>
			<svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="30px" height="30px" viewBox="0 0 30 30">
				<g>
					<path fill="#231F20" d="M15,1.598c7.39,0,13.401,6.012,13.401,13.401S22.39,28.401,15,28.401S1.598,22.389,1.598,15
						S7.61,1.598,15,1.598 M15,0C6.715,0,0,6.716,0,15c0,8.284,6.715,15,15,15c8.283,0,15-6.716,15-15C30,6.716,23.283,0,15,0L15,0z"/>
				</g>
			<circle fill="#231F20" cx="15" cy="15" r="9.73"/>
			</svg>
			<?php endif;
			
			endwhile;
			endif;
			
		endwhile; ?>
		
		</td>
		
		<?php else : ?>
		<td>&nbsp;</td>
		
		<?php endif; 
		
		if( have_rows('creator', 'options') ): ?>
		
		<td>
			
		<?php while( have_rows('creator', 'options') ): the_row();
		
			if( have_rows('towner_benefit_categories', 'options') ):
			while( have_rows('towner_benefit_categories', 'options') ): the_row();
			
			$people = get_sub_field('people');
			if ( $people && in_array( 'access', $people ) ): ?>
			<svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="30px" height="30px" viewBox="0 0 30 30">
				<g>
					<path fill="#231F20" d="M15,1.598c7.39,0,13.401,6.012,13.401,13.401S22.39,28.401,15,28.401S1.598,22.389,1.598,15
						S7.61,1.598,15,1.598 M15,0C6.715,0,0,6.716,0,15c0,8.284,6.715,15,15,15c8.283,0,15-6.716,15-15C30,6.716,23.283,0,15,0L15,0z"/>
				</g>
			<circle fill="#231F20" cx="15" cy="15" r="9.73"/>
			</svg>
			<?php endif;
			
			endwhile;
			endif;
			
		endwhile; ?>
		
		</td>
		
		<?php else : ?>
		<td>&nbsp;</td>
		
		<?php endif; 
		
		if( have_rows('builder', 'options') ): ?>
		
		<td>
				
		<?php while( have_rows('builder', 'options') ): the_row();
		
			if( have_rows('builder_benefit_categories', 'options') ):
			while( have_rows('builder_benefit_categories', 'options') ): the_row();
			
			$people = get_sub_field('people');
			if ( $people && in_array( 'access', $people ) ): ?>
			<svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="30px" height="30px" viewBox="0 0 30 30">
				<g>
					<path fill="#231F20" d="M15,1.598c7.39,0,13.401,6.012,13.401,13.401S22.39,28.401,15,28.401S1.598,22.389,1.598,15
						S7.61,1.598,15,1.598 M15,0C6.715,0,0,6.716,0,15c0,8.284,6.715,15,15,15c8.283,0,15-6.716,15-15C30,6.716,23.283,0,15,0L15,0z"/>
				</g>
			<circle fill="#231F20" cx="15" cy="15" r="9.73"/>
			</svg>
			<?php endif;
			
			endwhile;
			endif;
			
		endwhile; ?>
		
		</td>
			
		<?php else : ?>
		<td>&nbsp;</td>
			
		<?php endif; 
		
		if( have_rows('innovator', 'options') ): ?>
		
		<td>
				
		<?php while( have_rows('innovator', 'options') ): the_row();
		
			if( have_rows('benefit_categories', 'options') ):
			while( have_rows('benefit_categories', 'options') ): the_row();
			
			$people = get_sub_field('people');
			if ( $people && in_array( 'access', $people ) ): ?>
			<svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="30px" height="30px" viewBox="0 0 30 30">
				<g>
					<path fill="#231F20" d="M15,1.598c7.39,0,13.401,6.012,13.401,13.401S22.39,28.401,15,28.401S1.598,22.389,1.598,15
						S7.61,1.598,15,1.598 M15,0C6.715,0,0,6.716,0,15c0,8.284,6.715,15,15,15c8.283,0,15-6.716,15-15C30,6.716,23.283,0,15,0L15,0z"/>
				</g>
			<circle fill="#231F20" cx="15" cy="15" r="9.73"/>
			</svg>
			<?php endif;
			
			endwhile;
			endif;
			
		endwhile; ?>
		
		</td>
				
		<?php else : ?>
		<td>&nbsp;</td>
				
		<?php endif;  ?>
		
	</tr>
	<tr class="body-row">
		<td>Network Programming</td>
		
		<?php if( have_rows('supporter', 'options') ): ?>
		
		<td>
		
		<?php while( have_rows('supporter', 'options') ): the_row();
		
			if( have_rows('supporter_benefit_categories', 'options') ):
			while( have_rows('supporter_benefit_categories', 'options') ): the_row();
			
			$people = get_sub_field('people');
			if ( $people && in_array( 'network', $people ) ): ?>
			<svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="30px" height="30px" viewBox="0 0 30 30">
				<g>
					<path fill="#231F20" d="M15,1.598c7.39,0,13.401,6.012,13.401,13.401S22.39,28.401,15,28.401S1.598,22.389,1.598,15
						S7.61,1.598,15,1.598 M15,0C6.715,0,0,6.716,0,15c0,8.284,6.715,15,15,15c8.283,0,15-6.716,15-15C30,6.716,23.283,0,15,0L15,0z"/>
				</g>
			<circle fill="#231F20" cx="15" cy="15" r="9.73"/>
			</svg>
			<?php endif;
			
			endwhile;
			endif;
			
		endwhile; ?>
		
		</td>
		
		<?php else : ?>
		<td>&nbsp;</td>
		
		<?php endif; 
		
		if( have_rows('creator', 'options') ): ?>
		
		<td>
			
		<?php while( have_rows('creator', 'options') ): the_row();
		
			if( have_rows('towner_benefit_categories', 'options') ):
			while( have_rows('towner_benefit_categories', 'options') ): the_row();
			
			$people = get_sub_field('people');
			if ( $people && in_array( 'network', $people ) ): ?>
			<svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="30px" height="30px" viewBox="0 0 30 30">
				<g>
					<path fill="#231F20" d="M15,1.598c7.39,0,13.401,6.012,13.401,13.401S22.39,28.401,15,28.401S1.598,22.389,1.598,15
						S7.61,1.598,15,1.598 M15,0C6.715,0,0,6.716,0,15c0,8.284,6.715,15,15,15c8.283,0,15-6.716,15-15C30,6.716,23.283,0,15,0L15,0z"/>
				</g>
			<circle fill="#231F20" cx="15" cy="15" r="9.73"/>
			</svg>
			<?php endif;
			
			endwhile;
			endif;
			
		endwhile; ?>
		
		</td>
		
		<?php else : ?>
		<td>&nbsp;</td>
		
		<?php endif; 
		
		if( have_rows('builder', 'options') ): ?>
		
		<td>
				
		<?php while( have_rows('builder', 'options') ): the_row();
		
			if( have_rows('builder_benefit_categories', 'options') ):
			while( have_rows('builder_benefit_categories', 'options') ): the_row();
			
			$people = get_sub_field('people');
			if ( $people && in_array( 'network', $people ) ): ?>
			<svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="30px" height="30px" viewBox="0 0 30 30">
				<g>
					<path fill="#231F20" d="M15,1.598c7.39,0,13.401,6.012,13.401,13.401S22.39,28.401,15,28.401S1.598,22.389,1.598,15
						S7.61,1.598,15,1.598 M15,0C6.715,0,0,6.716,0,15c0,8.284,6.715,15,15,15c8.283,0,15-6.716,15-15C30,6.716,23.283,0,15,0L15,0z"/>
				</g>
			<circle fill="#231F20" cx="15" cy="15" r="9.73"/>
			</svg>
			<?php endif;
			
			endwhile;
			endif;
			
		endwhile; ?>
		
		</td>
			
		<?php else : ?>
		<td>&nbsp;</td>
			
		<?php endif; 
		
		if( have_rows('innovator', 'options') ): ?>
		
		<td>
				
		<?php while( have_rows('innovator', 'options') ): the_row();
		
			if( have_rows('benefit_categories', 'options') ):
			while( have_rows('benefit_categories', 'options') ): the_row();
			
			$people = get_sub_field('people');
			if ( $people && in_array( 'network', $people ) ): ?>
			<svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="30px" height="30px" viewBox="0 0 30 30">
				<g>
					<path fill="#231F20" d="M15,1.598c7.39,0,13.401,6.012,13.401,13.401S22.39,28.401,15,28.401S1.598,22.389,1.598,15
						S7.61,1.598,15,1.598 M15,0C6.715,0,0,6.716,0,15c0,8.284,6.715,15,15,15c8.283,0,15-6.716,15-15C30,6.716,23.283,0,15,0L15,0z"/>
				</g>
			<circle fill="#231F20" cx="15" cy="15" r="9.73"/>
			</svg>
			<?php endif;
			
			endwhile;
			endif;
			
		endwhile; ?>
		
		</td>
				
		<?php else : ?>
		<td>&nbsp;</td>
				
		<?php endif;  ?>
		
	</tr>
	<tr class="body-row">
		<td>Tickets to Premium Volta Events</td>
		
		<?php if( have_rows('supporter', 'options') ): ?>
		
		<td>
		
		<?php while( have_rows('supporter', 'options') ): the_row();
		
			if( have_rows('supporter_benefit_categories', 'options') ):
			while( have_rows('supporter_benefit_categories', 'options') ): the_row();
			
			$people = get_sub_field('people');
			if ( $people && in_array( 'tickets', $people ) ): ?>
			<svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="30px" height="30px" viewBox="0 0 30 30">
				<g>
					<path fill="#231F20" d="M15,1.598c7.39,0,13.401,6.012,13.401,13.401S22.39,28.401,15,28.401S1.598,22.389,1.598,15
						S7.61,1.598,15,1.598 M15,0C6.715,0,0,6.716,0,15c0,8.284,6.715,15,15,15c8.283,0,15-6.716,15-15C30,6.716,23.283,0,15,0L15,0z"/>
				</g>
			<circle fill="#231F20" cx="15" cy="15" r="9.73"/>
			</svg>
			<?php endif;
			
			endwhile;
			endif;
			
		endwhile; ?>
		
		</td>
		
		<?php else : ?>
		<td>&nbsp;</td>
		
		<?php endif; 
		
		if( have_rows('creator', 'options') ): ?>
		
		<td>
			
		<?php while( have_rows('creator', 'options') ): the_row();
		
			if( have_rows('towner_benefit_categories', 'options') ):
			while( have_rows('towner_benefit_categories', 'options') ): the_row();
			
			$people = get_sub_field('people');
			if ( $people && in_array( 'tickets', $people ) ): ?>
			<svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="30px" height="30px" viewBox="0 0 30 30">
				<g>
					<path fill="#231F20" d="M15,1.598c7.39,0,13.401,6.012,13.401,13.401S22.39,28.401,15,28.401S1.598,22.389,1.598,15
						S7.61,1.598,15,1.598 M15,0C6.715,0,0,6.716,0,15c0,8.284,6.715,15,15,15c8.283,0,15-6.716,15-15C30,6.716,23.283,0,15,0L15,0z"/>
				</g>
			<circle fill="#231F20" cx="15" cy="15" r="9.73"/>
			</svg>
			<?php endif;
			
			endwhile;
			endif;
			
		endwhile; ?>
		
		</td>
		
		<?php else : ?>
		<td>&nbsp;</td>
		
		<?php endif; 
		
		if( have_rows('builder', 'options') ): ?>
		
		<td>
				
		<?php while( have_rows('builder', 'options') ): the_row();
		
			if( have_rows('builder_benefit_categories', 'options') ):
			while( have_rows('builder_benefit_categories', 'options') ): the_row();
			
			$people = get_sub_field('people');
			if ( $people && in_array( 'tickets', $people ) ): ?>
			<svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="30px" height="30px" viewBox="0 0 30 30">
				<g>
					<path fill="#231F20" d="M15,1.598c7.39,0,13.401,6.012,13.401,13.401S22.39,28.401,15,28.401S1.598,22.389,1.598,15
						S7.61,1.598,15,1.598 M15,0C6.715,0,0,6.716,0,15c0,8.284,6.715,15,15,15c8.283,0,15-6.716,15-15C30,6.716,23.283,0,15,0L15,0z"/>
				</g>
			<circle fill="#231F20" cx="15" cy="15" r="9.73"/>
			</svg>
			<?php endif;
			
			endwhile;
			endif;
			
		endwhile; ?>
		
		</td>
			
		<?php else : ?>
		<td>&nbsp;</td>
			
		<?php endif; 
		
		if( have_rows('innovator', 'options') ): ?>
		
		<td>
				
		<?php while( have_rows('innovator', 'options') ): the_row();
		
			if( have_rows('benefit_categories', 'options') ):
			while( have_rows('benefit_categories', 'options') ): the_row();
			
			$people = get_sub_field('people');
			if ( $people && in_array( 'tickets', $people ) ): ?>
			<svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="30px" height="30px" viewBox="0 0 30 30">
				<g>
					<path fill="#231F20" d="M15,1.598c7.39,0,13.401,6.012,13.401,13.401S22.39,28.401,15,28.401S1.598,22.389,1.598,15
						S7.61,1.598,15,1.598 M15,0C6.715,0,0,6.716,0,15c0,8.284,6.715,15,15,15c8.283,0,15-6.716,15-15C30,6.716,23.283,0,15,0L15,0z"/>
				</g>
			<circle fill="#231F20" cx="15" cy="15" r="9.73"/>
			</svg>
			<?php endif;
			
			endwhile;
			endif;
			
		endwhile; ?>
		
		</td>
				
		<?php else : ?>
		<td>&nbsp;</td>
				
		<?php endif;  ?>
		
	</tr>
	
	<tr class="align-center grey-row-bg">
		<td>Engagement</td>
	</tr>
	
	<tr class="body-row">
		<td>Sponsor a Volta Event</td>
		
		<?php if( have_rows('supporter', 'options') ): ?>
		
		<td>
		
		<?php while( have_rows('supporter', 'options') ): the_row();
		
			if( have_rows('supporter_benefit_categories', 'options') ):
			while( have_rows('supporter_benefit_categories', 'options') ): the_row();
			
			$engagement = get_sub_field('engagement');
			if ( $engagement && in_array( 'access', $engagement ) ): ?>
			<svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="30px" height="30px" viewBox="0 0 30 30">
				<g>
					<path fill="#231F20" d="M15,1.598c7.39,0,13.401,6.012,13.401,13.401S22.39,28.401,15,28.401S1.598,22.389,1.598,15
						S7.61,1.598,15,1.598 M15,0C6.715,0,0,6.716,0,15c0,8.284,6.715,15,15,15c8.283,0,15-6.716,15-15C30,6.716,23.283,0,15,0L15,0z"/>
				</g>
			<circle fill="#231F20" cx="15" cy="15" r="9.73"/>
			</svg>
			<?php endif;
			
			endwhile;
			endif;
			
		endwhile; ?>
		
		</td>
		
		<?php else : ?>
		<td>&nbsp;</td>
		
		<?php endif; 
		
		if( have_rows('creator', 'options') ): ?>
		
		<td>
			
		<?php while( have_rows('creator', 'options') ): the_row();
		
			if( have_rows('towner_benefit_categories', 'options') ):
			while( have_rows('towner_benefit_categories', 'options') ): the_row();
			
			$engagement = get_sub_field('engagement');
			if ( $engagement && in_array( 'access', $engagement ) ): ?>
			<svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="30px" height="30px" viewBox="0 0 30 30">
				<g>
					<path fill="#231F20" d="M15,1.598c7.39,0,13.401,6.012,13.401,13.401S22.39,28.401,15,28.401S1.598,22.389,1.598,15
						S7.61,1.598,15,1.598 M15,0C6.715,0,0,6.716,0,15c0,8.284,6.715,15,15,15c8.283,0,15-6.716,15-15C30,6.716,23.283,0,15,0L15,0z"/>
				</g>
			<circle fill="#231F20" cx="15" cy="15" r="9.73"/>
			</svg>
			<?php endif;
			
			endwhile;
			endif;
			
		endwhile; ?>
		
		</td>
		
		<?php else : ?>
		<td>&nbsp;</td>
		
		<?php endif; 
		
		if( have_rows('builder', 'options') ): ?>
		
		<td>
				
		<?php while( have_rows('builder', 'options') ): the_row();
		
			if( have_rows('builder_benefit_categories', 'options') ):
			while( have_rows('builder_benefit_categories', 'options') ): the_row();
			
			$engagement = get_sub_field('engagement');
			if ( $engagement && in_array( 'access', $engagement ) ): ?>
			<svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="30px" height="30px" viewBox="0 0 30 30">
				<g>
					<path fill="#231F20" d="M15,1.598c7.39,0,13.401,6.012,13.401,13.401S22.39,28.401,15,28.401S1.598,22.389,1.598,15
						S7.61,1.598,15,1.598 M15,0C6.715,0,0,6.716,0,15c0,8.284,6.715,15,15,15c8.283,0,15-6.716,15-15C30,6.716,23.283,0,15,0L15,0z"/>
				</g>
			<circle fill="#231F20" cx="15" cy="15" r="9.73"/>
			</svg>
			<?php endif;
			
			endwhile;
			endif;
			
		endwhile; ?>
		
		</td>
			
		<?php else : ?>
		<td>&nbsp;</td>
			
		<?php endif; 
		
		if( have_rows('innovator', 'options') ): ?>
		
		<td>
				
		<?php while( have_rows('innovator', 'options') ): the_row();
		
			if( have_rows('benefit_categories', 'options') ):
			while( have_rows('benefit_categories', 'options') ): the_row();
			
			$engagement = get_sub_field('engagement');
			if ( $engagement && in_array( 'access', $engagement ) ): ?>
			<svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="30px" height="30px" viewBox="0 0 30 30">
				<g>
					<path fill="#231F20" d="M15,1.598c7.39,0,13.401,6.012,13.401,13.401S22.39,28.401,15,28.401S1.598,22.389,1.598,15
						S7.61,1.598,15,1.598 M15,0C6.715,0,0,6.716,0,15c0,8.284,6.715,15,15,15c8.283,0,15-6.716,15-15C30,6.716,23.283,0,15,0L15,0z"/>
				</g>
			<circle fill="#231F20" cx="15" cy="15" r="9.73"/>
			</svg>
			<?php endif;
			
			endwhile;
			endif;
			
		endwhile; ?>
		
		</td>
				
		<?php else : ?>
		<td>&nbsp;</td>
				
		<?php endif;  ?>
		
	</tr>
	<tr class="body-row">
		<td>Present at a Volta Lunch + Learn Session</td>
		
		<?php if( have_rows('supporter', 'options') ): ?>
		
		<td>
		
		<?php while( have_rows('supporter', 'options') ): the_row();
		
			if( have_rows('supporter_benefit_categories', 'options') ):
			while( have_rows('supporter_benefit_categories', 'options') ): the_row();
			
			$engagement = get_sub_field('engagement');
			if ( $engagement && in_array( 'lunch-and-learn', $engagement ) ): ?>
			<svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="30px" height="30px" viewBox="0 0 30 30">
				<g>
					<path fill="#231F20" d="M15,1.598c7.39,0,13.401,6.012,13.401,13.401S22.39,28.401,15,28.401S1.598,22.389,1.598,15
						S7.61,1.598,15,1.598 M15,0C6.715,0,0,6.716,0,15c0,8.284,6.715,15,15,15c8.283,0,15-6.716,15-15C30,6.716,23.283,0,15,0L15,0z"/>
				</g>
			<circle fill="#231F20" cx="15" cy="15" r="9.73"/>
			</svg>
			<?php endif;
			
			endwhile;
			endif;
			
		endwhile; ?>
		
		</td>
		
		<?php else : ?>
		<td>&nbsp;</td>
		
		<?php endif; 
		
		if( have_rows('creator', 'options') ): ?>
		
		<td>
			
		<?php while( have_rows('creator', 'options') ): the_row();
		
			if( have_rows('towner_benefit_categories', 'options') ):
			while( have_rows('towner_benefit_categories', 'options') ): the_row();
			
			$engagement = get_sub_field('engagement');
			if ( $engagement && in_array( 'lunch-and-learn', $engagement ) ): ?>
			<svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="30px" height="30px" viewBox="0 0 30 30">
				<g>
					<path fill="#231F20" d="M15,1.598c7.39,0,13.401,6.012,13.401,13.401S22.39,28.401,15,28.401S1.598,22.389,1.598,15
						S7.61,1.598,15,1.598 M15,0C6.715,0,0,6.716,0,15c0,8.284,6.715,15,15,15c8.283,0,15-6.716,15-15C30,6.716,23.283,0,15,0L15,0z"/>
				</g>
			<circle fill="#231F20" cx="15" cy="15" r="9.73"/>
			</svg>
			<?php endif;
			
			endwhile;
			endif;
			
		endwhile; ?>
		
		</td>
		
		<?php else : ?>
		<td>&nbsp;</td>
		
		<?php endif; 
		
		if( have_rows('builder', 'options') ): ?>
		
		<td>
				
		<?php while( have_rows('builder', 'options') ): the_row();
		
			if( have_rows('builder_benefit_categories', 'options') ):
			while( have_rows('builder_benefit_categories', 'options') ): the_row();
			
			$engagement = get_sub_field('engagement');
			if ( $engagement && in_array( 'lunch-and-learn', $engagement ) ): ?>
			<svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="30px" height="30px" viewBox="0 0 30 30">
				<g>
					<path fill="#231F20" d="M15,1.598c7.39,0,13.401,6.012,13.401,13.401S22.39,28.401,15,28.401S1.598,22.389,1.598,15
						S7.61,1.598,15,1.598 M15,0C6.715,0,0,6.716,0,15c0,8.284,6.715,15,15,15c8.283,0,15-6.716,15-15C30,6.716,23.283,0,15,0L15,0z"/>
				</g>
			<circle fill="#231F20" cx="15" cy="15" r="9.73"/>
			</svg>
			<?php endif;
			
			endwhile;
			endif;
			
		endwhile; ?>
		
		</td>
			
		<?php else : ?>
		<td>&nbsp;</td>
			
		<?php endif; 
		
		if( have_rows('innovator', 'options') ): ?>
		
		<td>
				
		<?php while( have_rows('innovator', 'options') ): the_row();
		
			if( have_rows('benefit_categories', 'options') ):
			while( have_rows('benefit_categories', 'options') ): the_row();
			
			$engagement = get_sub_field('engagement');
			if ( $engagement && in_array( 'lunch-and-learn', $engagement ) ): ?>
			<svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="30px" height="30px" viewBox="0 0 30 30">
				<g>
					<path fill="#231F20" d="M15,1.598c7.39,0,13.401,6.012,13.401,13.401S22.39,28.401,15,28.401S1.598,22.389,1.598,15
						S7.61,1.598,15,1.598 M15,0C6.715,0,0,6.716,0,15c0,8.284,6.715,15,15,15c8.283,0,15-6.716,15-15C30,6.716,23.283,0,15,0L15,0z"/>
				</g>
			<circle fill="#231F20" cx="15" cy="15" r="9.73"/>
			</svg>
			<?php endif;
			
			endwhile;
			endif;
			
		endwhile; ?>
		
		</td>
				
		<?php else : ?>
		<td>&nbsp;</td>
				
		<?php endif;  ?>
		
	</tr>
	<tr class="body-row">
		<td>Ecosystem Education Opportunities</td>
		
		<?php if( have_rows('supporter', 'options') ): ?>
		
		<td>
		
		<?php while( have_rows('supporter', 'options') ): the_row();
		
			if( have_rows('supporter_benefit_categories', 'options') ):
			while( have_rows('supporter_benefit_categories', 'options') ): the_row();
			
			$engagement = get_sub_field('engagement');
			if ( $engagement && in_array( 'ecosystem', $engagement ) ): ?>
			<svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="30px" height="30px" viewBox="0 0 30 30">
				<g>
					<path fill="#231F20" d="M15,1.598c7.39,0,13.401,6.012,13.401,13.401S22.39,28.401,15,28.401S1.598,22.389,1.598,15
						S7.61,1.598,15,1.598 M15,0C6.715,0,0,6.716,0,15c0,8.284,6.715,15,15,15c8.283,0,15-6.716,15-15C30,6.716,23.283,0,15,0L15,0z"/>
				</g>
			<circle fill="#231F20" cx="15" cy="15" r="9.73"/>
			</svg>
			<?php endif;
			
			endwhile;
			endif;
			
		endwhile; ?>
		
		</td>
		
		<?php else : ?>
		<td>&nbsp;</td>
		
		<?php endif; 
		
		if( have_rows('creator', 'options') ): ?>
		
		<td>
			
		<?php while( have_rows('creator', 'options') ): the_row();
		
			if( have_rows('towner_benefit_categories', 'options') ):
			while( have_rows('towner_benefit_categories', 'options') ): the_row();
			
			$engagement = get_sub_field('engagement');
			if ( $engagement && in_array( 'ecosystem', $engagement ) ): ?>
			<svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="30px" height="30px" viewBox="0 0 30 30">
				<g>
					<path fill="#231F20" d="M15,1.598c7.39,0,13.401,6.012,13.401,13.401S22.39,28.401,15,28.401S1.598,22.389,1.598,15
						S7.61,1.598,15,1.598 M15,0C6.715,0,0,6.716,0,15c0,8.284,6.715,15,15,15c8.283,0,15-6.716,15-15C30,6.716,23.283,0,15,0L15,0z"/>
				</g>
			<circle fill="#231F20" cx="15" cy="15" r="9.73"/>
			</svg>
			<?php endif;
			
			endwhile;
			endif;
			
		endwhile; ?>
		
		</td>
		
		<?php else : ?>
		<td>&nbsp;</td>
		
		<?php endif; 
		
		if( have_rows('builder', 'options') ): ?>
		
		<td>
				
		<?php while( have_rows('builder', 'options') ): the_row();
		
			if( have_rows('builder_benefit_categories', 'options') ):
			while( have_rows('builder_benefit_categories', 'options') ): the_row();
			
			$engagement = get_sub_field('engagement');
			if ( $engagement && in_array( 'ecosystem', $engagement ) ): ?>
			<svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="30px" height="30px" viewBox="0 0 30 30">
				<g>
					<path fill="#231F20" d="M15,1.598c7.39,0,13.401,6.012,13.401,13.401S22.39,28.401,15,28.401S1.598,22.389,1.598,15
						S7.61,1.598,15,1.598 M15,0C6.715,0,0,6.716,0,15c0,8.284,6.715,15,15,15c8.283,0,15-6.716,15-15C30,6.716,23.283,0,15,0L15,0z"/>
				</g>
			<circle fill="#231F20" cx="15" cy="15" r="9.73"/>
			</svg>
			<?php endif;
			
			endwhile;
			endif;
			
		endwhile; ?>
		
		</td>
			
		<?php else : ?>
		<td>&nbsp;</td>
			
		<?php endif; 
		
		if( have_rows('innovator', 'options') ): ?>
		
		<td>
				
		<?php while( have_rows('innovator', 'options') ): the_row();
		
			if( have_rows('benefit_categories', 'options') ):
			while( have_rows('benefit_categories', 'options') ): the_row();
			
			$engagement = get_sub_field('engagement');
			if ( $engagement && in_array( 'ecosystem', $engagement ) ): ?>
			<svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="30px" height="30px" viewBox="0 0 30 30">
				<g>
					<path fill="#231F20" d="M15,1.598c7.39,0,13.401,6.012,13.401,13.401S22.39,28.401,15,28.401S1.598,22.389,1.598,15
						S7.61,1.598,15,1.598 M15,0C6.715,0,0,6.716,0,15c0,8.284,6.715,15,15,15c8.283,0,15-6.716,15-15C30,6.716,23.283,0,15,0L15,0z"/>
				</g>
			<circle fill="#231F20" cx="15" cy="15" r="9.73"/>
			</svg>
			<?php endif;
			
			endwhile;
			endif;
			
		endwhile; ?>
		
		</td>
				
		<?php else : ?>
		<td>&nbsp;</td>
				
		<?php endif;  ?>
		
	</tr>
	<tr class="body-row">
		<td>Monthly Partner Newsletter</td>
		
		<?php if( have_rows('supporter', 'options') ): ?>
		
		<td>
		
		<?php while( have_rows('supporter', 'options') ): the_row();
		
			if( have_rows('supporter_benefit_categories', 'options') ):
			while( have_rows('supporter_benefit_categories', 'options') ): the_row();
			
			$engagement = get_sub_field('engagement');
			if ( $engagement && in_array( 'newsletter', $engagement ) ): ?>
			<svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="30px" height="30px" viewBox="0 0 30 30">
				<g>
					<path fill="#231F20" d="M15,1.598c7.39,0,13.401,6.012,13.401,13.401S22.39,28.401,15,28.401S1.598,22.389,1.598,15
						S7.61,1.598,15,1.598 M15,0C6.715,0,0,6.716,0,15c0,8.284,6.715,15,15,15c8.283,0,15-6.716,15-15C30,6.716,23.283,0,15,0L15,0z"/>
				</g>
			<circle fill="#231F20" cx="15" cy="15" r="9.73"/>
			</svg>
			<?php endif;
			
			endwhile;
			endif;
			
		endwhile; ?>
		
		</td>
		
		<?php else : ?>
		<td>&nbsp;</td>
		
		<?php endif; 
		
		if( have_rows('creator', 'options') ): ?>
		
		<td>
			
		<?php while( have_rows('creator', 'options') ): the_row();
		
			if( have_rows('towner_benefit_categories', 'options') ):
			while( have_rows('towner_benefit_categories', 'options') ): the_row();
			
			$engagement = get_sub_field('engagement');
			if ( $engagement && in_array( 'newsletter', $engagement ) ): ?>
			<svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="30px" height="30px" viewBox="0 0 30 30">
				<g>
					<path fill="#231F20" d="M15,1.598c7.39,0,13.401,6.012,13.401,13.401S22.39,28.401,15,28.401S1.598,22.389,1.598,15
						S7.61,1.598,15,1.598 M15,0C6.715,0,0,6.716,0,15c0,8.284,6.715,15,15,15c8.283,0,15-6.716,15-15C30,6.716,23.283,0,15,0L15,0z"/>
				</g>
			<circle fill="#231F20" cx="15" cy="15" r="9.73"/>
			</svg>
			<?php endif;
			
			endwhile;
			endif;
			
		endwhile; ?>
		
		</td>
		
		<?php else : ?>
		<td>&nbsp;</td>
		
		<?php endif; 
		
		if( have_rows('builder', 'options') ): ?>
		
		<td>
				
		<?php while( have_rows('builder', 'options') ): the_row();
		
			if( have_rows('builder_benefit_categories', 'options') ):
			while( have_rows('builder_benefit_categories', 'options') ): the_row();
			
			$engagement = get_sub_field('engagement');
			if ( $engagement && in_array( 'newsletter', $engagement ) ): ?>
			<svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="30px" height="30px" viewBox="0 0 30 30">
				<g>
					<path fill="#231F20" d="M15,1.598c7.39,0,13.401,6.012,13.401,13.401S22.39,28.401,15,28.401S1.598,22.389,1.598,15
						S7.61,1.598,15,1.598 M15,0C6.715,0,0,6.716,0,15c0,8.284,6.715,15,15,15c8.283,0,15-6.716,15-15C30,6.716,23.283,0,15,0L15,0z"/>
				</g>
			<circle fill="#231F20" cx="15" cy="15" r="9.73"/>
			</svg>
			<?php endif;
			
			endwhile;
			endif;
			
		endwhile; ?>
		
		</td>
			
		<?php else : ?>
		<td>&nbsp;</td>
			
		<?php endif; 
		
		if( have_rows('innovator', 'options') ): ?>
		
		<td>
				
		<?php while( have_rows('innovator', 'options') ): the_row();
		
			if( have_rows('benefit_categories', 'options') ):
			while( have_rows('benefit_categories', 'options') ): the_row();
			
			$engagement = get_sub_field('engagement');
			if ( $engagement && in_array( 'newsletter', $engagement ) ): ?>
			<svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="30px" height="30px" viewBox="0 0 30 30">
				<g>
					<path fill="#231F20" d="M15,1.598c7.39,0,13.401,6.012,13.401,13.401S22.39,28.401,15,28.401S1.598,22.389,1.598,15
						S7.61,1.598,15,1.598 M15,0C6.715,0,0,6.716,0,15c0,8.284,6.715,15,15,15c8.283,0,15-6.716,15-15C30,6.716,23.283,0,15,0L15,0z"/>
				</g>
			<circle fill="#231F20" cx="15" cy="15" r="9.73"/>
			</svg>
			<?php endif;
			
			endwhile;
			endif;
			
		endwhile; ?>
		
		</td>
				
		<?php else : ?>
		<td>&nbsp;</td>
				
		<?php endif;  ?>
		
	</tr>
	
	<tr class="align-center grey-row-bg">
		<td>Space</td>
	</tr>
	
	<tr class="body-row">
		<td>Access to Post + Beam Semi-Private Office Space</td>
		
		<?php if( have_rows('supporter', 'options') ): ?>
		
		<td>
		
		<?php while( have_rows('supporter', 'options') ): the_row();
		
			if( have_rows('supporter_benefit_categories', 'options') ):
			while( have_rows('supporter_benefit_categories', 'options') ): the_row();
			
			$space = get_sub_field('space');
			if ( $space && in_array( 'access-private-office', $space ) ): ?>
			<svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="30px" height="30px" viewBox="0 0 30 30">
				<g>
					<path fill="#231F20" d="M15,1.598c7.39,0,13.401,6.012,13.401,13.401S22.39,28.401,15,28.401S1.598,22.389,1.598,15
						S7.61,1.598,15,1.598 M15,0C6.715,0,0,6.716,0,15c0,8.284,6.715,15,15,15c8.283,0,15-6.716,15-15C30,6.716,23.283,0,15,0L15,0z"/>
				</g>
			<circle fill="#231F20" cx="15" cy="15" r="9.73"/>
			</svg>
			<?php endif;
			
			endwhile;
			endif;
			
		endwhile; ?>
		
		</td>
		
		<?php else : ?>
		<td>&nbsp;</td>
		
		<?php endif; 
		
		if( have_rows('creator', 'options') ): ?>
		
		<td>
			
		<?php while( have_rows('creator', 'options') ): the_row();
		
			if( have_rows('towner_benefit_categories', 'options') ):
			while( have_rows('towner_benefit_categories', 'options') ): the_row();
			
			$space = get_sub_field('space');
			if ( $space && in_array( 'access-private-office', $space ) ): ?>
			<svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="30px" height="30px" viewBox="0 0 30 30">
				<g>
					<path fill="#231F20" d="M15,1.598c7.39,0,13.401,6.012,13.401,13.401S22.39,28.401,15,28.401S1.598,22.389,1.598,15
						S7.61,1.598,15,1.598 M15,0C6.715,0,0,6.716,0,15c0,8.284,6.715,15,15,15c8.283,0,15-6.716,15-15C30,6.716,23.283,0,15,0L15,0z"/>
				</g>
			<circle fill="#231F20" cx="15" cy="15" r="9.73"/>
			</svg>
			<?php endif;
			
			endwhile;
			endif;
			
		endwhile; ?>
		
		</td>
		
		<?php else : ?>
		<td>&nbsp;</td>
		
		<?php endif; 
		
		if( have_rows('builder', 'options') ): ?>
		
		<td>
				
		<?php while( have_rows('builder', 'options') ): the_row();
		
			if( have_rows('builder_benefit_categories', 'options') ):
			while( have_rows('builder_benefit_categories', 'options') ): the_row();
			
			$space = get_sub_field('space');
			if ( $space && in_array( 'access-private-office', $space ) ): ?>
			<svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="30px" height="30px" viewBox="0 0 30 30">
				<g>
					<path fill="#231F20" d="M15,1.598c7.39,0,13.401,6.012,13.401,13.401S22.39,28.401,15,28.401S1.598,22.389,1.598,15
						S7.61,1.598,15,1.598 M15,0C6.715,0,0,6.716,0,15c0,8.284,6.715,15,15,15c8.283,0,15-6.716,15-15C30,6.716,23.283,0,15,0L15,0z"/>
				</g>
			<circle fill="#231F20" cx="15" cy="15" r="9.73"/>
			</svg>
			<?php endif;
			
			endwhile;
			endif;
			
		endwhile; ?>
		
		</td>
			
		<?php else : ?>
		<td>&nbsp;</td>
			
		<?php endif; 
		
		if( have_rows('innovator', 'options') ): ?>
		
		<td>
				
		<?php while( have_rows('innovator', 'options') ): the_row();
		
			if( have_rows('benefit_categories', 'options') ):
			while( have_rows('benefit_categories', 'options') ): the_row();
			
			$space = get_sub_field('space');
			if ( $space && in_array( 'access-private-office', $space ) ): ?>
			<svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="30px" height="30px" viewBox="0 0 30 30">
				<g>
					<path fill="#231F20" d="M15,1.598c7.39,0,13.401,6.012,13.401,13.401S22.39,28.401,15,28.401S1.598,22.389,1.598,15
						S7.61,1.598,15,1.598 M15,0C6.715,0,0,6.716,0,15c0,8.284,6.715,15,15,15c8.283,0,15-6.716,15-15C30,6.716,23.283,0,15,0L15,0z"/>
				</g>
			<circle fill="#231F20" cx="15" cy="15" r="9.73"/>
			</svg>
			<?php endif;
			
			endwhile;
			endif;
			
		endwhile; ?>
		
		</td>
				
		<?php else : ?>
		<td>&nbsp;</td>
				
		<?php endif;  ?>
		
	</tr>
	<tr class="body-row">
		<td>Complimentary Space Rentals</td>
		
		<?php if( have_rows('supporter', 'options') ): ?>
		
		<td>
		
		<?php while( have_rows('supporter', 'options') ): the_row();
		
			if( have_rows('supporter_benefit_categories', 'options') ):
			while( have_rows('supporter_benefit_categories', 'options') ): the_row();
			
			$space = get_sub_field('space');
			if ( $space && in_array( 'space-rentals', $space ) ): ?>
			<svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="30px" height="30px" viewBox="0 0 30 30">
				<g>
					<path fill="#231F20" d="M15,1.598c7.39,0,13.401,6.012,13.401,13.401S22.39,28.401,15,28.401S1.598,22.389,1.598,15
						S7.61,1.598,15,1.598 M15,0C6.715,0,0,6.716,0,15c0,8.284,6.715,15,15,15c8.283,0,15-6.716,15-15C30,6.716,23.283,0,15,0L15,0z"/>
				</g>
			<circle fill="#231F20" cx="15" cy="15" r="9.73"/>
			</svg>
			<?php endif;
			
			endwhile;
			endif;
			
		endwhile; ?>
		
		</td>
		
		<?php else : ?>
		<td>&nbsp;</td>
		
		<?php endif; 
		
		if( have_rows('creator', 'options') ): ?>
		
		<td>
			
		<?php while( have_rows('creator', 'options') ): the_row();
		
			if( have_rows('towner_benefit_categories', 'options') ):
			while( have_rows('towner_benefit_categories', 'options') ): the_row();
			
			$space = get_sub_field('space');
			if ( $space && in_array( 'space-rentals', $space ) ): ?>
			<svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="30px" height="30px" viewBox="0 0 30 30">
				<g>
					<path fill="#231F20" d="M15,1.598c7.39,0,13.401,6.012,13.401,13.401S22.39,28.401,15,28.401S1.598,22.389,1.598,15
						S7.61,1.598,15,1.598 M15,0C6.715,0,0,6.716,0,15c0,8.284,6.715,15,15,15c8.283,0,15-6.716,15-15C30,6.716,23.283,0,15,0L15,0z"/>
				</g>
			<circle fill="#231F20" cx="15" cy="15" r="9.73"/>
			</svg>
			<?php endif;
			
			endwhile;
			endif;
			
		endwhile; ?>
		
		</td>
		
		<?php else : ?>
		<td>&nbsp;</td>
		
		<?php endif; 
		
		if( have_rows('builder', 'options') ): ?>
		
		<td>
				
		<?php while( have_rows('builder', 'options') ): the_row();
		
			if( have_rows('builder_benefit_categories', 'options') ):
			while( have_rows('builder_benefit_categories', 'options') ): the_row();
			
			$space = get_sub_field('space');
			if ( $space && in_array( 'space-rentals', $space ) ): ?>
			<svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="30px" height="30px" viewBox="0 0 30 30">
				<g>
					<path fill="#231F20" d="M15,1.598c7.39,0,13.401,6.012,13.401,13.401S22.39,28.401,15,28.401S1.598,22.389,1.598,15
						S7.61,1.598,15,1.598 M15,0C6.715,0,0,6.716,0,15c0,8.284,6.715,15,15,15c8.283,0,15-6.716,15-15C30,6.716,23.283,0,15,0L15,0z"/>
				</g>
			<circle fill="#231F20" cx="15" cy="15" r="9.73"/>
			</svg>
			<?php endif;
			
			endwhile;
			endif;
			
		endwhile; ?>
		
		</td>
			
		<?php else : ?>
		<td>&nbsp;</td>
			
		<?php endif; 
		
		if( have_rows('innovator', 'options') ): ?>
		
		<td>
				
		<?php while( have_rows('innovator', 'options') ): the_row();
		
			if( have_rows('benefit_categories', 'options') ):
			while( have_rows('benefit_categories', 'options') ): the_row();
			
			$space = get_sub_field('space');
			if ( $space && in_array( 'space-rentals', $space ) ): ?>
			<svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="30px" height="30px" viewBox="0 0 30 30">
				<g>
					<path fill="#231F20" d="M15,1.598c7.39,0,13.401,6.012,13.401,13.401S22.39,28.401,15,28.401S1.598,22.389,1.598,15
						S7.61,1.598,15,1.598 M15,0C6.715,0,0,6.716,0,15c0,8.284,6.715,15,15,15c8.283,0,15-6.716,15-15C30,6.716,23.283,0,15,0L15,0z"/>
				</g>
			<circle fill="#231F20" cx="15" cy="15" r="9.73"/>
			</svg>
			<?php endif;
			
			endwhile;
			endif;
			
		endwhile; ?>
		
		</td>
				
		<?php else : ?>
		<td>&nbsp;</td>
				
		<?php endif;  ?>
		
	</tr>
	
	<tr class="body-row">
		<td>Promoted Office Hours</td>
		
		<?php if( have_rows('supporter', 'options') ): ?>
		
		<td>
		
		<?php while( have_rows('supporter', 'options') ): the_row();
		
			if( have_rows('supporter_benefit_categories', 'options') ):
			while( have_rows('supporter_benefit_categories', 'options') ): the_row();
			
			$space = get_sub_field('space');
			if ( $space && in_array( 'office-hours', $space ) ): ?>
			<svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="30px" height="30px" viewBox="0 0 30 30">
				<g>
					<path fill="#231F20" d="M15,1.598c7.39,0,13.401,6.012,13.401,13.401S22.39,28.401,15,28.401S1.598,22.389,1.598,15
						S7.61,1.598,15,1.598 M15,0C6.715,0,0,6.716,0,15c0,8.284,6.715,15,15,15c8.283,0,15-6.716,15-15C30,6.716,23.283,0,15,0L15,0z"/>
				</g>
			<circle fill="#231F20" cx="15" cy="15" r="9.73"/>
			</svg>
			<?php endif;
			
			endwhile;
			endif;
			
		endwhile; ?>
		
		</td>
		
		<?php else : ?>
		<td>&nbsp;</td>
		
		<?php endif; 
		
		if( have_rows('creator', 'options') ): ?>
		
		<td>
			
		<?php while( have_rows('creator', 'options') ): the_row();
		
			if( have_rows('towner_benefit_categories', 'options') ):
			while( have_rows('towner_benefit_categories', 'options') ): the_row();
			
			$space = get_sub_field('space');
			if ( $space && in_array( 'office-hours', $space ) ): ?>
			<svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="30px" height="30px" viewBox="0 0 30 30">
				<g>
					<path fill="#231F20" d="M15,1.598c7.39,0,13.401,6.012,13.401,13.401S22.39,28.401,15,28.401S1.598,22.389,1.598,15
						S7.61,1.598,15,1.598 M15,0C6.715,0,0,6.716,0,15c0,8.284,6.715,15,15,15c8.283,0,15-6.716,15-15C30,6.716,23.283,0,15,0L15,0z"/>
				</g>
			<circle fill="#231F20" cx="15" cy="15" r="9.73"/>
			</svg>
			<?php endif;
			
			endwhile;
			endif;
			
		endwhile; ?>
		
		</td>
		
		<?php else : ?>
		<td>&nbsp;</td>
		
		<?php endif; 
		
		if( have_rows('builder', 'options') ): ?>
		
		<td>
				
		<?php while( have_rows('builder', 'options') ): the_row();
		
			if( have_rows('builder_benefit_categories', 'options') ):
			while( have_rows('builder_benefit_categories', 'options') ): the_row();
			
			$space = get_sub_field('space');
			if ( $space && in_array( 'office-hours', $space ) ): ?>
			<svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="30px" height="30px" viewBox="0 0 30 30">
				<g>
					<path fill="#231F20" d="M15,1.598c7.39,0,13.401,6.012,13.401,13.401S22.39,28.401,15,28.401S1.598,22.389,1.598,15
						S7.61,1.598,15,1.598 M15,0C6.715,0,0,6.716,0,15c0,8.284,6.715,15,15,15c8.283,0,15-6.716,15-15C30,6.716,23.283,0,15,0L15,0z"/>
				</g>
			<circle fill="#231F20" cx="15" cy="15" r="9.73"/>
			</svg>
			<?php endif;
			
			endwhile;
			endif;
			
		endwhile; ?>
		
		</td>
			
		<?php else : ?>
		<td>&nbsp;</td>
			
		<?php endif; 
		
		if( have_rows('innovator', 'options') ): ?>
		
		<td>
				
		<?php while( have_rows('innovator', 'options') ): the_row();
		
			if( have_rows('benefit_categories', 'options') ):
			while( have_rows('benefit_categories', 'options') ): the_row();
			
			$space = get_sub_field('space');
			if ( $space && in_array( 'office-hours', $space ) ): ?>
			<svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="30px" height="30px" viewBox="0 0 30 30">
				<g>
					<path fill="#231F20" d="M15,1.598c7.39,0,13.401,6.012,13.401,13.401S22.39,28.401,15,28.401S1.598,22.389,1.598,15
						S7.61,1.598,15,1.598 M15,0C6.715,0,0,6.716,0,15c0,8.284,6.715,15,15,15c8.283,0,15-6.716,15-15C30,6.716,23.283,0,15,0L15,0z"/>
				</g>
			<circle fill="#231F20" cx="15" cy="15" r="9.73"/>
			</svg>
			<?php endif;
			
			endwhile;
			endif;
			
		endwhile; ?>
		
		</td>
				
		<?php else : ?>
		<td>&nbsp;</td>
				
		<?php endif;  ?>
		
	</tr>
	
	<tr class="body-row">
		<td>Discounted Space Rentals</td>
		
		<?php if( have_rows('supporter', 'options') ): ?>
		
		<td>
		
		<?php while( have_rows('supporter', 'options') ): the_row();
		
			if( have_rows('supporter_benefit_categories', 'options') ):
			while( have_rows('supporter_benefit_categories', 'options') ): the_row();
			
			$space = get_sub_field('space');
			if ( $space && in_array( 'discount-space-rentals', $space ) ): ?>
			<svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="30px" height="30px" viewBox="0 0 30 30">
				<g>
					<path fill="#231F20" d="M15,1.598c7.39,0,13.401,6.012,13.401,13.401S22.39,28.401,15,28.401S1.598,22.389,1.598,15
						S7.61,1.598,15,1.598 M15,0C6.715,0,0,6.716,0,15c0,8.284,6.715,15,15,15c8.283,0,15-6.716,15-15C30,6.716,23.283,0,15,0L15,0z"/>
				</g>
			<circle fill="#231F20" cx="15" cy="15" r="9.73"/>
			</svg>
			<?php endif;
			
			endwhile;
			endif;
			
		endwhile; ?>
		
		</td>
		
		<?php else : ?>
		<td>&nbsp;</td>
		
		<?php endif; 
		
		if( have_rows('creator', 'options') ): ?>
		
		<td>
			
		<?php while( have_rows('creator', 'options') ): the_row();
		
			if( have_rows('towner_benefit_categories', 'options') ):
			while( have_rows('towner_benefit_categories', 'options') ): the_row();
			
			$space = get_sub_field('space');
			if ( $space && in_array( 'discount-space-rentals', $space ) ): ?>
			<svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="30px" height="30px" viewBox="0 0 30 30">
				<g>
					<path fill="#231F20" d="M15,1.598c7.39,0,13.401,6.012,13.401,13.401S22.39,28.401,15,28.401S1.598,22.389,1.598,15
						S7.61,1.598,15,1.598 M15,0C6.715,0,0,6.716,0,15c0,8.284,6.715,15,15,15c8.283,0,15-6.716,15-15C30,6.716,23.283,0,15,0L15,0z"/>
				</g>
			<circle fill="#231F20" cx="15" cy="15" r="9.73"/>
			</svg>
			<?php endif;
			
			endwhile;
			endif;
			
		endwhile; ?>
		
		</td>
		
		<?php else : ?>
		<td>&nbsp;</td>
		
		<?php endif; 
		
		if( have_rows('builder', 'options') ): ?>
		
		<td>
				
		<?php while( have_rows('builder', 'options') ): the_row();
		
			if( have_rows('builder_benefit_categories', 'options') ):
			while( have_rows('builder_benefit_categories', 'options') ): the_row();
			
			$space = get_sub_field('space');
			if ( $space && in_array( 'discount-space-rentals', $space ) ): ?>
			<svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="30px" height="30px" viewBox="0 0 30 30">
				<g>
					<path fill="#231F20" d="M15,1.598c7.39,0,13.401,6.012,13.401,13.401S22.39,28.401,15,28.401S1.598,22.389,1.598,15
						S7.61,1.598,15,1.598 M15,0C6.715,0,0,6.716,0,15c0,8.284,6.715,15,15,15c8.283,0,15-6.716,15-15C30,6.716,23.283,0,15,0L15,0z"/>
				</g>
			<circle fill="#231F20" cx="15" cy="15" r="9.73"/>
			</svg>
			<?php endif;
			
			endwhile;
			endif;
			
		endwhile; ?>
		
		</td>
			
		<?php else : ?>
		<td>&nbsp;</td>
			
		<?php endif; 
		
		if( have_rows('innovator', 'options') ): ?>
		
		<td>
				
		<?php while( have_rows('innovator', 'options') ): the_row();
		
			if( have_rows('benefit_categories', 'options') ):
			while( have_rows('benefit_categories', 'options') ): the_row();
			
			$space = get_sub_field('space');
			if ( $space && in_array( 'discount-space-rentals', $space ) ): ?>
			<svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="30px" height="30px" viewBox="0 0 30 30">
				<g>
					<path fill="#231F20" d="M15,1.598c7.39,0,13.401,6.012,13.401,13.401S22.39,28.401,15,28.401S1.598,22.389,1.598,15
						S7.61,1.598,15,1.598 M15,0C6.715,0,0,6.716,0,15c0,8.284,6.715,15,15,15c8.283,0,15-6.716,15-15C30,6.716,23.283,0,15,0L15,0z"/>
				</g>
			<circle fill="#231F20" cx="15" cy="15" r="9.73"/>
			</svg>
			<?php endif;
			
			endwhile;
			endif;
			
		endwhile; ?>
		
		</td>
				
		<?php else : ?>
		<td>&nbsp;</td>
				
		<?php endif;  ?>
		
	</tr>
	<tr class="body-row">
		<td>Use of Co-working Space</td>
		
		<?php if( have_rows('supporter', 'options') ): ?>
		
		<td>
		
		<?php while( have_rows('supporter', 'options') ): the_row();
		
			if( have_rows('supporter_benefit_categories', 'options') ):
			while( have_rows('supporter_benefit_categories', 'options') ): the_row();
			
			$space = get_sub_field('space');
			if ( $space && in_array( 'coworking-space', $space ) ): ?>
			<svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="30px" height="30px" viewBox="0 0 30 30">
				<g>
					<path fill="#231F20" d="M15,1.598c7.39,0,13.401,6.012,13.401,13.401S22.39,28.401,15,28.401S1.598,22.389,1.598,15
						S7.61,1.598,15,1.598 M15,0C6.715,0,0,6.716,0,15c0,8.284,6.715,15,15,15c8.283,0,15-6.716,15-15C30,6.716,23.283,0,15,0L15,0z"/>
				</g>
			<circle fill="#231F20" cx="15" cy="15" r="9.73"/>
			</svg>
			<?php endif;
			
			endwhile;
			endif;
			
		endwhile; ?>
		
		</td>
		
		<?php else : ?>
		<td>&nbsp;</td>
		
		<?php endif; 
		
		if( have_rows('creator', 'options') ): ?>
		
		<td>
			
		<?php while( have_rows('creator', 'options') ): the_row();
		
			if( have_rows('towner_benefit_categories', 'options') ):
			while( have_rows('towner_benefit_categories', 'options') ): the_row();
			
			$space = get_sub_field('space');
			if ( $space && in_array( 'coworking-space', $space ) ): ?>
			<svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="30px" height="30px" viewBox="0 0 30 30">
				<g>
					<path fill="#231F20" d="M15,1.598c7.39,0,13.401,6.012,13.401,13.401S22.39,28.401,15,28.401S1.598,22.389,1.598,15
						S7.61,1.598,15,1.598 M15,0C6.715,0,0,6.716,0,15c0,8.284,6.715,15,15,15c8.283,0,15-6.716,15-15C30,6.716,23.283,0,15,0L15,0z"/>
				</g>
			<circle fill="#231F20" cx="15" cy="15" r="9.73"/>
			</svg>
			<?php endif;
			
			endwhile;
			endif;
			
		endwhile; ?>
		
		</td>
		
		<?php else : ?>
		<td>&nbsp;</td>
		
		<?php endif; 
		
		if( have_rows('builder', 'options') ): ?>
		
		<td>
				
		<?php while( have_rows('builder', 'options') ): the_row();
		
			if( have_rows('builder_benefit_categories', 'options') ):
			while( have_rows('builder_benefit_categories', 'options') ): the_row();
			
			$space = get_sub_field('space');
			if ( $space && in_array( 'coworking-space', $space ) ): ?>
			<svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="30px" height="30px" viewBox="0 0 30 30">
				<g>
					<path fill="#231F20" d="M15,1.598c7.39,0,13.401,6.012,13.401,13.401S22.39,28.401,15,28.401S1.598,22.389,1.598,15
						S7.61,1.598,15,1.598 M15,0C6.715,0,0,6.716,0,15c0,8.284,6.715,15,15,15c8.283,0,15-6.716,15-15C30,6.716,23.283,0,15,0L15,0z"/>
				</g>
			<circle fill="#231F20" cx="15" cy="15" r="9.73"/>
			</svg>
			<?php endif;
			
			endwhile;
			endif;
			
		endwhile; ?>
		
		</td>
			
		<?php else : ?>
		<td>&nbsp;</td>
			
		<?php endif; 
		
		if( have_rows('innovator', 'options') ): ?>
		
		<td>
				
		<?php while( have_rows('innovator', 'options') ): the_row();
		
			if( have_rows('benefit_categories', 'options') ):
			while( have_rows('benefit_categories', 'options') ): the_row();
			
			$space = get_sub_field('space');
			if ( $space && in_array( 'coworking-space', $space ) ): ?>
			<svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="30px" height="30px" viewBox="0 0 30 30">
				<g>
					<path fill="#231F20" d="M15,1.598c7.39,0,13.401,6.012,13.401,13.401S22.39,28.401,15,28.401S1.598,22.389,1.598,15
						S7.61,1.598,15,1.598 M15,0C6.715,0,0,6.716,0,15c0,8.284,6.715,15,15,15c8.283,0,15-6.716,15-15C30,6.716,23.283,0,15,0L15,0z"/>
				</g>
			<circle fill="#231F20" cx="15" cy="15" r="9.73"/>
			</svg>
			<?php endif;
			
			endwhile;
			endif;
			
		endwhile; ?>
		
		</td>
				
		<?php else : ?>
		<td>&nbsp;</td>
				
		<?php endif;  ?>
		
	</tr>
	
	<tr class="align-center grey-row-bg">
		<td>Recognition</td>
	</tr>
	
	<tr class="body-row">
		<td>Logo Displayed in the Volta Lobby</td>
		
		<?php if( have_rows('supporter', 'options') ): ?>
		
		<td>
		
		<?php while( have_rows('supporter', 'options') ): the_row();
		
			if( have_rows('supporter_benefit_categories', 'options') ):
			while( have_rows('supporter_benefit_categories', 'options') ): the_row();
			
			$recognition = get_sub_field('recognition');
			if ( $recognition && in_array( 'logo', $recognition ) ): ?>
			<svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="30px" height="30px" viewBox="0 0 30 30">
				<g>
					<path fill="#231F20" d="M15,1.598c7.39,0,13.401,6.012,13.401,13.401S22.39,28.401,15,28.401S1.598,22.389,1.598,15
						S7.61,1.598,15,1.598 M15,0C6.715,0,0,6.716,0,15c0,8.284,6.715,15,15,15c8.283,0,15-6.716,15-15C30,6.716,23.283,0,15,0L15,0z"/>
				</g>
			<circle fill="#231F20" cx="15" cy="15" r="9.73"/>
			</svg>
			<?php endif;
			
			endwhile;
			endif;
			
		endwhile; ?>
		
		</td>
		
		<?php else : ?>
		<td>&nbsp;</td>
		
		<?php endif; 
		
		if( have_rows('creator', 'options') ): ?>
		
		<td>
			
		<?php while( have_rows('creator', 'options') ): the_row();
		
			if( have_rows('towner_benefit_categories', 'options') ):
			while( have_rows('towner_benefit_categories', 'options') ): the_row();
			
			$recognition = get_sub_field('recognition');
			if ( $recognition && in_array( 'logo', $recognition ) ): ?>
			<svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="30px" height="30px" viewBox="0 0 30 30">
				<g>
					<path fill="#231F20" d="M15,1.598c7.39,0,13.401,6.012,13.401,13.401S22.39,28.401,15,28.401S1.598,22.389,1.598,15
						S7.61,1.598,15,1.598 M15,0C6.715,0,0,6.716,0,15c0,8.284,6.715,15,15,15c8.283,0,15-6.716,15-15C30,6.716,23.283,0,15,0L15,0z"/>
				</g>
			<circle fill="#231F20" cx="15" cy="15" r="9.73"/>
			</svg>
			<?php endif;
			
			endwhile;
			endif;
			
		endwhile; ?>
		
		</td>
		
		<?php else : ?>
		<td>&nbsp;</td>
		
		<?php endif; 
		
		if( have_rows('builder', 'options') ): ?>
		
		<td>
				
		<?php while( have_rows('builder', 'options') ): the_row();
		
			if( have_rows('builder_benefit_categories', 'options') ):
			while( have_rows('builder_benefit_categories', 'options') ): the_row();
			
			$recognition = get_sub_field('recognition');
			if ( $recognition && in_array( 'logo', $recognition ) ): ?>
			<svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="30px" height="30px" viewBox="0 0 30 30">
				<g>
					<path fill="#231F20" d="M15,1.598c7.39,0,13.401,6.012,13.401,13.401S22.39,28.401,15,28.401S1.598,22.389,1.598,15
						S7.61,1.598,15,1.598 M15,0C6.715,0,0,6.716,0,15c0,8.284,6.715,15,15,15c8.283,0,15-6.716,15-15C30,6.716,23.283,0,15,0L15,0z"/>
				</g>
			<circle fill="#231F20" cx="15" cy="15" r="9.73"/>
			</svg>
			<?php endif;
			
			endwhile;
			endif;
			
		endwhile; ?>
		
		</td>
			
		<?php else : ?>
		<td>&nbsp;</td>
			
		<?php endif; 
		
		if( have_rows('innovator', 'options') ): ?>
		
		<td>
				
		<?php while( have_rows('innovator', 'options') ): the_row();
		
			if( have_rows('benefit_categories', 'options') ):
			while( have_rows('benefit_categories', 'options') ): the_row();
			
			$recognition = get_sub_field('recognition');
			if ( $recognition && in_array( 'logo', $recognition ) ): ?>
			<svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="30px" height="30px" viewBox="0 0 30 30">
				<g>
					<path fill="#231F20" d="M15,1.598c7.39,0,13.401,6.012,13.401,13.401S22.39,28.401,15,28.401S1.598,22.389,1.598,15
						S7.61,1.598,15,1.598 M15,0C6.715,0,0,6.716,0,15c0,8.284,6.715,15,15,15c8.283,0,15-6.716,15-15C30,6.716,23.283,0,15,0L15,0z"/>
				</g>
			<circle fill="#231F20" cx="15" cy="15" r="9.73"/>
			</svg>
			<?php endif;
			
			endwhile;
			endif;
			
		endwhile; ?>
		
		</td>
				
		<?php else : ?>
		<td>&nbsp;</td>
				
		<?php endif;  ?>
		
	</tr>
	<tr class="body-row">
		<td>Brand Exposure on Website and in Voltage Magazine</td>
		
		<?php if( have_rows('supporter', 'options') ): ?>
		
		<td>
		
		<?php while( have_rows('supporter', 'options') ): the_row();
		
			if( have_rows('supporter_benefit_categories', 'options') ):
			while( have_rows('supporter_benefit_categories', 'options') ): the_row();
			
			$recognition = get_sub_field('recognition');
			if ( $recognition && in_array( 'brand-exposure', $recognition ) ): ?>
			<svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="30px" height="30px" viewBox="0 0 30 30">
				<g>
					<path fill="#231F20" d="M15,1.598c7.39,0,13.401,6.012,13.401,13.401S22.39,28.401,15,28.401S1.598,22.389,1.598,15
						S7.61,1.598,15,1.598 M15,0C6.715,0,0,6.716,0,15c0,8.284,6.715,15,15,15c8.283,0,15-6.716,15-15C30,6.716,23.283,0,15,0L15,0z"/>
				</g>
			<circle fill="#231F20" cx="15" cy="15" r="9.73"/>
			</svg>
			<?php endif;
			
			endwhile;
			endif;
			
		endwhile; ?>
		
		</td>
		
		<?php else : ?>
		<td>&nbsp;</td>
		
		<?php endif; 
		
		if( have_rows('creator', 'options') ): ?>
		
		<td>
			
		<?php while( have_rows('creator', 'options') ): the_row();
		
			if( have_rows('towner_benefit_categories', 'options') ):
			while( have_rows('towner_benefit_categories', 'options') ): the_row();
			
			$recognition = get_sub_field('recognition');
			if ( $recognition && in_array( 'brand-exposure', $recognition ) ): ?>
			<svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="30px" height="30px" viewBox="0 0 30 30">
				<g>
					<path fill="#231F20" d="M15,1.598c7.39,0,13.401,6.012,13.401,13.401S22.39,28.401,15,28.401S1.598,22.389,1.598,15
						S7.61,1.598,15,1.598 M15,0C6.715,0,0,6.716,0,15c0,8.284,6.715,15,15,15c8.283,0,15-6.716,15-15C30,6.716,23.283,0,15,0L15,0z"/>
				</g>
			<circle fill="#231F20" cx="15" cy="15" r="9.73"/>
			</svg>
			<?php endif;
			
			endwhile;
			endif;
			
		endwhile; ?>
		
		</td>
		
		<?php else : ?>
		<td>&nbsp;</td>
		
		<?php endif; 
		
		if( have_rows('builder', 'options') ): ?>
		
		<td>
				
		<?php while( have_rows('builder', 'options') ): the_row();
		
			if( have_rows('builder_benefit_categories', 'options') ):
			while( have_rows('builder_benefit_categories', 'options') ): the_row();
			
			$recognition = get_sub_field('recognition');
			if ( $recognition && in_array( 'brand-exposure', $recognition ) ): ?>
			<svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="30px" height="30px" viewBox="0 0 30 30">
				<g>
					<path fill="#231F20" d="M15,1.598c7.39,0,13.401,6.012,13.401,13.401S22.39,28.401,15,28.401S1.598,22.389,1.598,15
						S7.61,1.598,15,1.598 M15,0C6.715,0,0,6.716,0,15c0,8.284,6.715,15,15,15c8.283,0,15-6.716,15-15C30,6.716,23.283,0,15,0L15,0z"/>
				</g>
			<circle fill="#231F20" cx="15" cy="15" r="9.73"/>
			</svg>
			<?php endif;
			
			endwhile;
			endif;
			
		endwhile; ?>
		
		</td>
			
		<?php else : ?>
		<td>&nbsp;</td>
			
		<?php endif; 
		
		if( have_rows('innovator', 'options') ): ?>
		
		<td>
				
		<?php while( have_rows('innovator', 'options') ): the_row();
		
			if( have_rows('benefit_categories', 'options') ):
			while( have_rows('benefit_categories', 'options') ): the_row();
			
			$recognition = get_sub_field('recognition');
			if ( $recognition && in_array( 'brand-exposure', $recognition ) ): ?>
			<svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="30px" height="30px" viewBox="0 0 30 30">
				<g>
					<path fill="#231F20" d="M15,1.598c7.39,0,13.401,6.012,13.401,13.401S22.39,28.401,15,28.401S1.598,22.389,1.598,15
						S7.61,1.598,15,1.598 M15,0C6.715,0,0,6.716,0,15c0,8.284,6.715,15,15,15c8.283,0,15-6.716,15-15C30,6.716,23.283,0,15,0L15,0z"/>
				</g>
			<circle fill="#231F20" cx="15" cy="15" r="9.73"/>
			</svg>
			<?php endif;
			
			endwhile;
			endif;
			
		endwhile; ?>
		
		</td>
				
		<?php else : ?>
		<td>&nbsp;</td>
				
		<?php endif;  ?>
		
	</tr>
	<tr class="body-row">
		<td>Promoted Blog Post</td>
		
		<?php if( have_rows('supporter', 'options') ): ?>
		
		<td>
		
		<?php while( have_rows('supporter', 'options') ): the_row();
		
			if( have_rows('supporter_benefit_categories', 'options') ):
			while( have_rows('supporter_benefit_categories', 'options') ): the_row();
			
			$recognition = get_sub_field('recognition');
			if ( $recognition && in_array( 'blog-post', $recognition ) ): ?>
			<svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="30px" height="30px" viewBox="0 0 30 30">
				<g>
					<path fill="#231F20" d="M15,1.598c7.39,0,13.401,6.012,13.401,13.401S22.39,28.401,15,28.401S1.598,22.389,1.598,15
						S7.61,1.598,15,1.598 M15,0C6.715,0,0,6.716,0,15c0,8.284,6.715,15,15,15c8.283,0,15-6.716,15-15C30,6.716,23.283,0,15,0L15,0z"/>
				</g>
			<circle fill="#231F20" cx="15" cy="15" r="9.73"/>
			</svg>
			<?php endif;
			
			endwhile;
			endif;
			
		endwhile; ?>
		
		</td>
		
		<?php else : ?>
		<td>&nbsp;</td>
		
		<?php endif; 
		
		if( have_rows('creator', 'options') ): ?>
		
		<td>
			
		<?php while( have_rows('creator', 'options') ): the_row();
		
			if( have_rows('towner_benefit_categories', 'options') ):
			while( have_rows('towner_benefit_categories', 'options') ): the_row();
			
			$recognition = get_sub_field('recognition');
			if ( $recognition && in_array( 'blog-post', $recognition ) ): ?>
			<svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="30px" height="30px" viewBox="0 0 30 30">
				<g>
					<path fill="#231F20" d="M15,1.598c7.39,0,13.401,6.012,13.401,13.401S22.39,28.401,15,28.401S1.598,22.389,1.598,15
						S7.61,1.598,15,1.598 M15,0C6.715,0,0,6.716,0,15c0,8.284,6.715,15,15,15c8.283,0,15-6.716,15-15C30,6.716,23.283,0,15,0L15,0z"/>
				</g>
			<circle fill="#231F20" cx="15" cy="15" r="9.73"/>
			</svg>
			<?php endif;
			
			endwhile;
			endif;
			
		endwhile; ?>
		
		</td>
		
		<?php else : ?>
		<td>&nbsp;</td>
		
		<?php endif; 
		
		if( have_rows('builder', 'options') ): ?>
		
		<td>
				
		<?php while( have_rows('builder', 'options') ): the_row();
		
			if( have_rows('builder_benefit_categories', 'options') ):
			while( have_rows('builder_benefit_categories', 'options') ): the_row();
			
			$recognition = get_sub_field('recognition');
			if ( $recognition && in_array( 'blog-post', $recognition ) ): ?>
			<svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="30px" height="30px" viewBox="0 0 30 30">
				<g>
					<path fill="#231F20" d="M15,1.598c7.39,0,13.401,6.012,13.401,13.401S22.39,28.401,15,28.401S1.598,22.389,1.598,15
						S7.61,1.598,15,1.598 M15,0C6.715,0,0,6.716,0,15c0,8.284,6.715,15,15,15c8.283,0,15-6.716,15-15C30,6.716,23.283,0,15,0L15,0z"/>
				</g>
			<circle fill="#231F20" cx="15" cy="15" r="9.73"/>
			</svg>
			<?php endif;
			
			endwhile;
			endif;
			
		endwhile; ?>
		
		</td>
			
		<?php else : ?>
		<td>&nbsp;</td>
			
		<?php endif; 
		
		if( have_rows('innovator', 'options') ): ?>
		
		<td>
				
		<?php while( have_rows('innovator', 'options') ): the_row();
		
			if( have_rows('benefit_categories', 'options') ):
			while( have_rows('benefit_categories', 'options') ): the_row();
			
			$recognition = get_sub_field('recognition');
			if ( $recognition && in_array( 'blog-post', $recognition ) ): ?>
			<svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="30px" height="30px" viewBox="0 0 30 30">
				<g>
					<path fill="#231F20" d="M15,1.598c7.39,0,13.401,6.012,13.401,13.401S22.39,28.401,15,28.401S1.598,22.389,1.598,15
						S7.61,1.598,15,1.598 M15,0C6.715,0,0,6.716,0,15c0,8.284,6.715,15,15,15c8.283,0,15-6.716,15-15C30,6.716,23.283,0,15,0L15,0z"/>
				</g>
			<circle fill="#231F20" cx="15" cy="15" r="9.73"/>
			</svg>
			<?php endif;
			
			endwhile;
			endif;
			
		endwhile; ?>
		
		</td>
				
		<?php else : ?>
		<td>&nbsp;</td>
				
		<?php endif;  ?>
		
	</tr>
	<tr class="align-center grey-row-bg">
		<td>Price</td>
	</tr>
	<tr class="body-row">
		<td>&nbsp;</td>
		<?php if ( have_rows('supporter', 'options') ):
		while( have_rows('supporter', 'options') ): the_row(); ?>
		<td><?php esc_html_e('$'); the_sub_field('supporter_cost'); esc_html_e('/year'); ?></td>
		<?php endwhile; 
		endif;
		if ( have_rows('creator', 'options') ):
		while( have_rows('creator', 'options') ): the_row(); ?>
		<td><?php esc_html_e('$'); the_sub_field('towner_cost'); esc_html_e('/year'); ?></td>
		<?php endwhile; 
		endif;
		if ( have_rows('builder', 'options') ):
		while( have_rows('builder', 'options') ): the_row(); ?>
		<td><?php esc_html_e('$'); the_sub_field('builder_cost'); esc_html_e('/year'); ?></td>
		<?php endwhile; 
		endif;
		if ( have_rows('innovator', 'options') ):
		while( have_rows('innovator', 'options') ): the_row(); ?>
		<td><?php esc_html_e('$'); the_sub_field('cost'); esc_html_e('/year'); ?></td>
		<?php endwhile; 
		endif; ?>
	</tr>
</table>

<div class="mobile-pricing-table">
	<?php if ( have_rows('supporter', 'options') ): ?>
	<div class="membership-type">
		<?php while( have_rows('supporter', 'options') ): the_row(); ?>
		<div class="membership-type-inner">
			<h2>
				Supporter<br />
				<span style="font-size: 20px; font-weight: normal;"><?php esc_html_e('$'); the_sub_field('supporter_cost'); esc_html_e('/year'); ?></span>
			</h2>
			<div class="table-list-content">	
				
				<?php
				if( have_rows('supporter_benefit_categories', 'options') ):
				while( have_rows('supporter_benefit_categories', 'options') ): the_row(); ?>
				
				
					<?php
					$field = get_sub_field_object('people');
					$people = $field['value'];
					if ( $people ): ?>
					
					<h3>People</h3>
					<ul>
						<?php foreach( $people as $person ): ?>
						<li><?php echo $field['choices'][ $person ]; ?></li>
						<?php endforeach; ?>
					</ul>
					<?php endif;
					
					$field = get_sub_field_object('engagement');
					$engagement = $field['value'];
					if ( $engagement ): ?>
					
					<h3>Engagement</h3>
					<ul>
						<?php foreach( $engagement as $engage ): ?>
						<li><?php echo $field['choices'][ $engage ]; ?></li>
						<?php endforeach; ?>
					</ul>
					<?php endif;
					
					$field = get_sub_field_object('space');
					$spaces = $field['value'];
					if ( $spaces ): ?>
					
					<h3>Space</h3>
					<ul>
						<?php foreach( $spaces as $space ): ?>
						<li><?php echo $field['choices'][ $space ]; ?></li>
						<?php endforeach; ?>
					</ul>
					<?php endif;
					
					$field = get_sub_field_object('recognition');
					$recognition = $field['value'];
					if ( $recognition ): ?>
					
					<h3>Recognition</h3>
					<ul>
						<?php foreach( $recognition as $recognize ): ?>
						<li><?php echo $field['choices'][ $recognize ]; ?></li>
						<?php endforeach; ?>
					</ul>
					<?php endif; ?>
				
				<?php 
				endwhile;
				endif; ?>
			</div>
		</div>
		<?php endwhile; ?>
	</div>
	<?php endif; ?>
	
	<?php if ( have_rows('creator', 'options') ): ?>
	<div class="membership-type">
		<?php while( have_rows('creator', 'options') ): the_row(); ?>
		<div class="membership-type-inner">
		
			<h2>
				Creator<br />
				<span style="font-size: 20px; font-weight: normal;"><?php esc_html_e('$'); the_sub_field('towner_cost'); esc_html_e('/year'); ?></span>
			</h2>
			
			<div class="table-list-content">	
			
				<?php
				if( have_rows('towner_benefit_categories', 'options') ):
				while( have_rows('towner_benefit_categories', 'options') ): the_row(); ?>
				
				<?php
				$field = get_sub_field_object('people');
				$people = $field['value'];
				if ( $people ): ?>
				
				<h3>People</h3>
				<ul>
					<?php foreach( $people as $person ): ?>
					<li><?php echo $field['choices'][ $person ]; ?></li>
					<?php endforeach; ?>
				</ul>
				<?php endif;
				
				$field = get_sub_field_object('engagement');
				$engagement = $field['value'];
				if ( $engagement ): ?>
				
				<h3>Engagement</h3>
				<ul>
					<?php foreach( $engagement as $engage ): ?>
					<li><?php echo $field['choices'][ $engage ]; ?></li>
					<?php endforeach; ?>
				</ul>
				<?php endif;
				
				$field = get_sub_field_object('space');
				$spaces = $field['value'];
				if ( $spaces ): ?>
				
				<h3>Space</h3>
				<ul>
					<?php foreach( $spaces as $space ): ?>
					<li><?php echo $field['choices'][ $space ]; ?></li>
					<?php endforeach; ?>
				</ul>
				<?php endif;
				
				$field = get_sub_field_object('recognition');
				$recognition = $field['value'];
				if ( $recognition ): ?>
				
				<h3>Recognition</h3>
				<ul>
					<?php foreach( $recognition as $recognize ): ?>
					<li><?php echo $field['choices'][ $recognize ]; ?></li>
					<?php endforeach; ?>
				</ul>
				<?php endif; ?>
				
				<?php 
				endwhile;
				endif; ?>
			</div>
		</div>
		<?php endwhile; ?>
	</div>
	<?php endif; ?>
	
	<?php if ( have_rows('builder', 'options') ): ?>
	<div class="membership-type">
		<?php while( have_rows('builder', 'options') ): the_row(); ?>
		
		<div class="membership-type-inner">
			<h2>
				Builder<br />
				<span style="font-size: 20px; font-weight: normal;"><?php esc_html_e('$'); the_sub_field('builder_cost'); esc_html_e('/year'); ?></span>
			</h2>
			<div class="table-list-content">	
				
				<?php
				if( have_rows('builder_benefit_categories', 'options') ):
				while( have_rows('builder_benefit_categories', 'options') ): the_row(); ?>
				
				<?php
				$field = get_sub_field_object('people');
				$people = $field['value'];
				if ( $people ): ?>
				
				<h3>People</h3>
				<ul>
					<?php foreach( $people as $person ): ?>
					<li><?php echo $field['choices'][ $person ]; ?></li>
					<?php endforeach; ?>
				</ul>
				<?php endif;
				
				$field = get_sub_field_object('engagement');
				$engagement = $field['value'];
				if ( $engagement ): ?>
				
				<h3>Engagement</h3>
				<ul>
					<?php foreach( $engagement as $engage ): ?>
					<li><?php echo $field['choices'][ $engage ]; ?></li>
					<?php endforeach; ?>
				</ul>
				<?php endif;
				
				$field = get_sub_field_object('space');
				$spaces = $field['value'];
				if ( $spaces ): ?>
				
				<h3>Space</h3>
				<ul>
					<?php foreach( $spaces as $space ): ?>
					<li><?php echo $field['choices'][ $space ]; ?></li>
					<?php endforeach; ?>
				</ul>
				<?php endif;
				
				$field = get_sub_field_object('recognition');
				$recognition = $field['value'];
				if ( $recognition ): ?>
				
				<h3>Recognition</h3>
				<ul>
					<?php foreach( $recognition as $recognize ): ?>
					<li><?php echo $field['choices'][ $recognize ]; ?></li>
					<?php endforeach; ?>
				</ul>
				<?php endif; ?>
				
				<?php 
				endwhile;
				endif; ?>
			</div>
		</div>
		<?php endwhile; ?>
	</div>
	<?php endif; ?>
	
	<?php if ( have_rows('innovator', 'options') ): ?>
	<div class="membership-type">
		<?php while( have_rows('innovator', 'options') ): the_row(); ?>
		
		<div class="membership-type-inner">
			<h2>
				Innovator<br />
				<span style="font-size: 20px; font-weight: normal;"><?php esc_html_e('$'); the_sub_field('cost'); esc_html_e('/year'); ?></span>
			</h2>
			
			<div class="table-list-content">	
			
				<?php
				if( have_rows('benefit_categories', 'options') ):
				while( have_rows('benefit_categories', 'options') ): the_row(); ?>
				
				<?php
				$field = get_sub_field_object('people');
				$people = $field['value'];
				if ( $people ): ?>
				
				<h3>People</h3>
				<ul>
					<?php foreach( $people as $person ): ?>
					<li><?php echo $field['choices'][ $person ]; ?></li>
					<?php endforeach; ?>
				</ul>
				<?php endif;
				
				$field = get_sub_field_object('engagement');
				$engagement = $field['value'];
				if ( $engagement ): ?>
				
				<h3>Engagement</h3>
				<ul>
					<?php foreach( $engagement as $engage ): ?>
					<li><?php echo $field['choices'][ $engage ]; ?></li>
					<?php endforeach; ?>
				</ul>
				<?php endif;
				
				$field = get_sub_field_object('space');
				$spaces = $field['value'];
				if ( $spaces ): ?>
				
				<h3>Space</h3>
				<ul>
					<?php foreach( $spaces as $space ): ?>
					<li><?php echo $field['choices'][ $space ]; ?></li>
					<?php endforeach; ?>
				</ul>
				<?php endif;
				
				$field = get_sub_field_object('recognition');
				$recognition = $field['value'];
				if ( $recognition ): ?>
				
				<h3>Recognition</h3>
				<ul>
					<?php foreach( $recognition as $recognize ): ?>
					<li><?php echo $field['choices'][ $recognize ]; ?></li>
					<?php endforeach; ?>
				</ul>
				<?php endif; ?>
				
				<?php 
				endwhile;
				endif; ?>
				
			</div>
		</div>
		<?php endwhile; ?>
	</div>
	<?php endif; ?>
</div>
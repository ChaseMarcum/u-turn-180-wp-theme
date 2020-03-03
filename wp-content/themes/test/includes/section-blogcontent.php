<?php if ( have_posts() ) {
	while ( have_posts() ) {
		the_post(); ?>
        <p><?php print get_the_date( 'Y/m/d' ); ?></p>
		<?php the_content(); ?>
		<?php
		$first_name = get_the_author_meta( 'first_name' );
		$last_name  = get_the_author_meta( 'last_name' );
		?>
        <p>Posted By <?php print $first_name ?><?php print $last_name ?></p>
		<?php
		$tags = get_the_tags();
		foreach ( $tags as $tag ) { ?>
            <a href="<?php print get_tag_link( $tag->term_id ); ?>"
               class="badge badge-dark"><?php print $tag->name; ?></a>
		<?php } ?>
	<?php } ?>
<?php } ?>

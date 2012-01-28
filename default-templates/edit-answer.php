<?php get_header( 'question' ); ?>

<div id="qa-page-wrapper">

<?php do_action( 'qa_before_content', 'edit-answer' ); ?>

<?php the_qa_menu(); ?>

<?php the_post(); ?>

<div id="answer-form">
	<h2><?php printf( __( 'Answer for %s', QA_TEXTDOMAIN ), get_question_link( $post->post_parent ) ); ?></h2>
	<?php the_answer_form(); ?>
</div>

<?php do_action( 'qa_after_content', 'edit-answer' ); ?>

</div><!--#qa-page-wrapper-->

<?php get_sidebar( 'question' ); ?>

<?php get_footer( 'question' ); ?>


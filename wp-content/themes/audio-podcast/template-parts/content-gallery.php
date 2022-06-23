<?php
/**
 * The template part for displaying post
 *
 * @package Audio Podcast 
 * @subpackage audio-podcast
 * @since audio-podcast 1.0
 */
?>

<?php 
  $audio_podcast_archive_year  = get_the_time('Y'); 
  $audio_podcast_archive_month = get_the_time('m'); 
  $audio_podcast_archive_day   = get_the_time('d'); 
?>

<div id="post-<?php the_ID(); ?>" <?php post_class('inner-service'); ?>>
  <div class="post-main-box p-3 mb-3 wow bounceInDown" data-wow-duration="2s">
    <?php
      if ( ! is_single() ) {
        // If not a single post, highlight the gallery.
        if ( get_post_gallery() ) {
          echo '<div class="entry-gallery">';
            echo ( get_post_gallery() );
          echo '</div>';
        };
      };
    ?>
    <article class="new-text">
      <h2 class="section-title mt-0 pt-0"><a href="<?php the_permalink(); ?>"><?php the_title();?><span class="screen-reader-text"><?php the_title(); ?></span></a></h2>
      <?php if( get_theme_mod( 'audio_podcast_toggle_postdate',true) != '' || get_theme_mod( 'audio_podcast_toggle_author',true) != '' || get_theme_mod( 'audio_podcast_toggle_comments',true) != '' || get_theme_mod( 'audio_podcast_toggle_time',true) != '') { ?>
          <div class="post-info">
            <?php if(get_theme_mod('audio_podcast_toggle_postdate',true)==1){ ?>
              <i class="fas fa-calendar-alt me-2"></i><span class="entry-date"><a href="<?php echo esc_url( get_day_link( $audio_podcast_archive_year, $audio_podcast_archive_month, $audio_podcast_archive_day)); ?>"><?php echo esc_html( get_the_date() ); ?><span class="screen-reader-text"><?php echo esc_html( get_the_date() ); ?></span></a></span>
            <?php } ?>

            <?php if(get_theme_mod('audio_podcast_toggle_author',true)==1){ ?>
              <span><?php echo esc_html(get_theme_mod('audio_podcast_meta_field_separator', '|'));?></span> <i class="fas fa-user me-2"></i><span class="entry-author"><a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' )) ); ?>"><?php the_author(); ?><span class="screen-reader-text"><?php the_author(); ?></span></a></span>
            <?php } ?>

            <?php if(get_theme_mod('audio_podcast_toggle_comments',true)==1){ ?>
              <span><?php echo esc_html(get_theme_mod('audio_podcast_meta_field_separator', '|'));?></span> <i class="fa fa-comments me-2" aria-hidden="true"></i><span class="entry-comments"><?php comments_number( __('0 Comment', 'audio-podcast'), __('0 Comments', 'audio-podcast'), __('% Comments', 'audio-podcast') ); ?></span>
            <?php } ?>

            <?php if(get_theme_mod('audio_podcast_toggle_time',true)==1){ ?>
              <span><?php echo esc_html(get_theme_mod('audio_podcast_meta_field_separator', '|'));?></span> <i class="fas fa-clock"></i> <span class="entry-time"><?php echo esc_html( get_the_time() ); ?></span>
            <?php } ?>
          </div>
        <?php } ?>
        <p class="mb-0">
          <?php $audio_podcast_theme_lay = get_theme_mod( 'audio_podcast_excerpt_settings','Excerpt');
          if($audio_podcast_theme_lay == 'Content'){ ?>
            <?php the_content(); ?>
          <?php }
          if($audio_podcast_theme_lay == 'Excerpt'){ ?>
            <?php if(get_the_excerpt()) { ?>
              <?php $excerpt = get_the_excerpt(); echo esc_html( audio_podcast_string_limit_words( $excerpt, esc_attr(get_theme_mod('audio_podcast_excerpt_number','30')))); ?>
            <?php }?>
          <?php }?>
        </p>
        <?php if( get_theme_mod('audio_podcast_button_text','Read More') != ''){ ?>
          <div class="more-btn mt-4 mb-4">
            <a class="p-3" href="<?php the_permalink(); ?>"><?php echo esc_html(get_theme_mod('audio_podcast_button_text',__('Read More','audio-podcast')));?><span class="screen-reader-text"><?php echo esc_html(get_theme_mod('audio_podcast_button_text',__('Read More','audio-podcast')));?></span></a>
          </div>
        <?php } ?>
    </article>
  </div>
</div>
<?php 
/**
 * 404 Tempalte
 */
if(!defined('ABSPATH')) exit; 

get_header(); ?>

    <!-- MAIN CONTENT -->
    <?php $title_404 = get_field('title_404', 'option');
    $button_404 = get_field('button_404', 'option'); ?>
    <main class="content">
        <section class="error-page text-center">
            <div class="container">
                <div class="error-page__inner">
                    <?php if(!empty($title_404)): ?>
                        <h1 class="h1 color-blue"><?php echo wp_kses_post($title_404); ?></h1>
                    <?php endif; 
                    if(!empty($button_404)): ?>
                        <a href="<?php echo get_home_url(); ?>" class="btn btn-primary btn-md"><?php echo wp_kses_post($button_404); ?></a>
                    <?php endif; ?>
                </div>
            </div>
        </section>
    </main>

<?php get_footer(); ?>
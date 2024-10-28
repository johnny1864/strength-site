<?php
// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$data = get_field('text_icon_blocks');

$section_header = $data['section_header'];
$sec_preheading  = $section_header['preheading'];
$sec_heading  = $section_header['heading'];
$blocks = $data['blocks'];
?>

<section class="textIconBlocks section">
    <div class="container">

        <?php if( !empty($sec_heading) || !empty($sec_preheading) ) : ?>
        <div class="section-header" data-aos="fade-up">
            
            <div class="row align-items-center">
                <div class="section-header__content col ">
                    <?php if( !empty($sec_preheading) ) : ?>
                        <span class="preheading">
                            <?php echo $sec_preheading; ?>
                        </span>
                    <?php endif; ?>

                    <?php if( !empty($sec_heading) ) : ?>
                        <h2 class="section-title">
                            <?php echo $sec_heading; ?>
                        </h2>
                    <?php endif; ?>
                </div>

                <div class="section-header__logo col-md-4 d-none d-md-block text-right">
                    <img src="<?php echo get_theme_file_uri( 'assets/images/codekit-icon-alt.png' ); ?>"
                        loading='lazy'
                        alt="Strength App Logo"
                    />
                </div>
            </div>

        </div>
        <?php endif; ?>

        <div class="textIconBlocks__blocks">
            <div class="row">
            <?php 
            $counter = 1;
            foreach( $blocks as $block ) : 
                $block_title = $block['block_title'];
                $block_text = $block['block_text'];
                $block_icon = $block['block_icon'];
                
            ?>
                <div class="col-sm-6 " data-aos="fade-up" data-aos-delay="<?php echo $counter * 150; ?>" >
                    <div class="textIconBlocks__block position-relative"> 

                        <?php if( !empty($block_icon) ) : ?>
                        <div class="block-icon" style="max-width: 40px; margin: 0 auto;">
                            <?php echo wp_get_attachment_image( $block_icon['ID'], 'medium' ); ?>
                        </div>
                        <?php endif; ?>

                        <?php if( !empty($block_title) ) : ?>
                        <h4 class="block-title"><?php echo $block_title; ?></h4>
                        <?php endif; ?>

                        <?php if( !empty($block_text) ) : ?>
                        <div class="block-text">
                            <?php echo $block_text; ?>
                        </div>
                        <?php endif; ?>

                        
                    </div>
                </div>
            <?php
            $counter++;
            endforeach; 
            ?>
            </div>
        </div>
    </div>
</section>
<?php
// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$data = get_field('image_blocks');

$section_header = $data['section_header'];
$sec_preheading  = $section_header['preheading'];
$sec_heading  = $section_header['heading'];
$sec_heading_text_block = $section_header['text_block'];
$blocks = $data['blocks'];
?>

<section class="imageBlocks section">
    <div class="container">
    <?php if( !empty($sec_heading) || !empty($sec_preheading) ) : ?>
        <div class="section-header">
            
            <div class="section-header__content text-center" data-aos="fade-up">
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

                <div class="section-header__text">
                <?php echo $sec_heading_text_block; ?>
                </div>

            </div>

        </div>
    <?php endif; ?>

    <div class="imageBlocks__blocks" data-aos="fade-up">

       <?php
            foreach( $blocks as $block ) :

                $block_image = $block['image'];
       ?>

        <div 
            class="imageBlocks__block" 
            
        > 
            <?php if( !empty($block_image) ) : ?>
                <img loading="lazy" src="<?php echo $block_image['url']; ?>" alt="<?php echo $block_image['alt']; ?>">
            <?php endif; ?>
            
            <span class=" block-text">
            <?php echo $block['block_text']; ?>
            </span>

        </div>

       <?php endforeach; ?>
    </div>

    <div class="slick-nav">
        
    </div>
    </div>
</section>
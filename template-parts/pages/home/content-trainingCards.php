<?php
// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$data       = get_field('training_info_cards');

$g_header   = $data['section_header'];
$sec_title  = $g_header['section_title'];
$sec_desc   = $g_header['section_description'];
$sec_bg     = $data['section_bg_image'];
$r_cards    = $data['info_cards'];
?>

<section class="training-info-cards-wrap"<?php echo $sec_bg ? ' style="background-image:url(\''. $sec_bg['sizes']['2048x2048'] .'\');"' : ''; ?>>
	<div class="content-container container-lg">

        <?php if( !empty($sec_title) || !empty($sec_desc) ) : ?>
        <div class="section-header">

            <?php if( !empty($sec_title) ) : ?>
            <h2 class="section-title"><?php echo $sec_title; ?></h2>
            <?php endif; ?>

            <?php if( !empty($sec_desc) ) : ?>
            <div class="section-description">
                <?php echo $sec_desc; ?>
            </div>
            <?php endif; ?>

        </div>
        <?php endif; ?>

        <?php if( !empty($r_cards) ) : ?>
        <div class="cards-wrap">
            <div class="row">

                <?php foreach( $r_cards as $card ) :
                    $card_title     = $card['title'];
                    $card_desc      = $card['description'];
                    $card_icon      = $card['icon'];
                    $card_icon_w    = $card['icon_width'];
                ?>
                    <div class="hrl-card col-sm-6">
                        <div class="innerwrap">

                            <?php if( !empty($card_title) ) : ?>
                            <h3 class="card-title"><?php echo $card_title; ?></h3>
                            <?php endif; ?>

                            <?php if( !empty($card_desc) ) : ?>
                            <div class="card-desc">
                                <?php echo $card_desc; ?>
                            </div>
                            <?php endif; ?>

                            <?php if( !empty($card_icon) ) : ?>
                            <div class="card-icon" style="max-width: <?php echo $card_icon_w; ?>px;">
                                <?php echo wp_get_attachment_image( $card_icon['ID'], 'medium' ); ?>
                            </div>
                            <?php endif; ?>

                        </div>
                    </div>
                <?php endforeach; ?>

            </div>
        </div>
        <?php endif; ?>

	</div>
</section>

<?php
// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$data               = get_field('header_ticker_tape', 'option');
$active             = $data['activate_ticker_tape'];
$ticker_message     = $data['ticker_tape_message'];

if( !empty($active) ) :
?>
<div class="ticker-wrapper">
    <div id="hrl-ticker-tape">

        <div class="ticker-list">

            <div class="ticker-item">
                <p><?php echo $ticker_message; ?></p>
            </div>
            <div class="ticker-item">
                <p><?php echo $ticker_message; ?></p>
            </div>
            <div class="ticker-item">
                <p><?php echo $ticker_message; ?></p>
            </div>
            <div class="ticker-item">
                <p><?php echo $ticker_message; ?></p>
            </div>

            <div class="ticker-item">
                <p><?php echo $ticker_message; ?></p>
            </div>
            <div class="ticker-item">
                <p><?php echo $ticker_message; ?></p>
            </div>
            <div class="ticker-item">
                <p><?php echo $ticker_message; ?></p>
            </div>
            <div class="ticker-item">
                <p><?php echo $ticker_message; ?></p>
            </div>

            <div class="ticker-item">
                <p><?php echo $ticker_message; ?></p>
            </div>
            <div class="ticker-item">
                <p><?php echo $ticker_message; ?></p>
            </div>
            <div class="ticker-item">
                <p><?php echo $ticker_message; ?></p>
            </div>
            <div class="ticker-item">
                <p><?php echo $ticker_message; ?></p>
            </div>

            <div class="ticker-item">
                <p><?php echo $ticker_message; ?></p>
            </div>
            <div class="ticker-item">
                <p><?php echo $ticker_message; ?></p>
            </div>
            <div class="ticker-item">
                <p><?php echo $ticker_message; ?></p>
            </div>
            <div class="ticker-item">
                <p><?php echo $ticker_message; ?></p>
            </div>

        </div>

        <div class="ticker-list">

            <div class="ticker-item">
                <p><?php echo $ticker_message; ?></p>
            </div>
            <div class="ticker-item">
                <p><?php echo $ticker_message; ?></p>
            </div>
            <div class="ticker-item">
                <p><?php echo $ticker_message; ?></p>
            </div>
            <div class="ticker-item">
                <p><?php echo $ticker_message; ?></p>
            </div>

            <div class="ticker-item">
                <p><?php echo $ticker_message; ?></p>
            </div>
            <div class="ticker-item">
                <p><?php echo $ticker_message; ?></p>
            </div>
            <div class="ticker-item">
                <p><?php echo $ticker_message; ?></p>
            </div>
            <div class="ticker-item">
                <p><?php echo $ticker_message; ?></p>
            </div>

            <div class="ticker-item">
                <p><?php echo $ticker_message; ?></p>
            </div>
            <div class="ticker-item">
                <p><?php echo $ticker_message; ?></p>
            </div>
            <div class="ticker-item">
                <p><?php echo $ticker_message; ?></p>
            </div>
            <div class="ticker-item">
                <p><?php echo $ticker_message; ?></p>
            </div>

            <div class="ticker-item">
                <p><?php echo $ticker_message; ?></p>
            </div>
            <div class="ticker-item">
                <p><?php echo $ticker_message; ?></p>
            </div>
            <div class="ticker-item">
                <p><?php echo $ticker_message; ?></p>
            </div>
            <div class="ticker-item">
                <p><?php echo $ticker_message; ?></p>
            </div>

        </div>

    </div>

</div>

<?php endif; ?>

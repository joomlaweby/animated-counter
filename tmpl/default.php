<?php
// No direct access
defined('_JEXEC') or die;

$countItems = count($items);
$columnWidth = round(100/$countItems, 2);
?>

<div class="g-grid gws-animated-counter">
	<?php foreach ($items as $index => $item) : ?>
        <br>


        <div class="counter g-block size-<?php echo $columnWidth ?>"
             id="<?php echo $module->id ?>-<?php echo $index ?>"
             data-delay="<?php echo $item->delay ?>"
             data-end="<?php echo $item->endnumber ?>"
             data-start="<?php echo $item->startnumber ?>"
             data-step="<?php echo $item->step ?>"
        >
            <div class="number">
                <span class="animated-number"><?php echo $item->startnumber ?></span>
                <span><?php echo $item->sidetext ?></span>
            </div>
            <div><?php echo $item->secondline ?></div>
        </div>
	<?php endforeach; ?>
</div>

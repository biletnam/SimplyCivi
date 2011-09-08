<?php
// $Id$ ?>
<div id="block-<?php print $block->module .'-'. $block->delta; ?>" class="<?php print $classes; ?>" <?php print $attributes; ?>>

<?php if ($block->subject): ?>
  <h3><?php print $block->subject ?></h3>
<?php endif;?>

  <div class="content"><?php print $content ?></div>
  <?php print $edit_links; ?>

</div>

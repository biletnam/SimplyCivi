<?php
// $Id$ ?>

<div id="node-<?php print $node->nid; ?>" class="<?php print $classes; ?> clear-block"<?php print $attributes; ?>>

<?php if ($page == 0): ?>
  <h2><a href="<?php print $node_url ?>" title="<?php print $title ?>"  <?php print $title_attributes; ?>><?php print $title ?></a></h2>
<?php endif; ?>

<?php if ($submitted || $terms): ?>
  <div class="meta">
  <?php if ($submitted): ?>
    <div class="submitted"><?php print $submitted ?></div>
  <?php endif; ?>

  <?php if ($terms): ?>
    <div class="terms"><?php print $terms ?></div>
  <?php endif;?>
  </div>
<?php endif; ?>

  <div class="content clear-block">
    <?php print $user_picture ?>
  <?php print("node.tpl"); print_r($content) ?>
    <?php print render($content); ?>
  </div>

<?php
  if ($links) {
    print '<div class="node-links">'. render($content['links']) .'</div>';
  }
?>

</div>

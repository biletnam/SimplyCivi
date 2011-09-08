<?php
// $Id: page.tpl.php,v 1.0 kylejaster Exp $ ?>
<div class="container">
  <div id="header-wrapper">
  <div id="header">
      <div id="status">
   	    <div class="messages-container">
        <?php	if ($messages != '') :?>
   		   <div id="messages">
   	        <?php print $messages; ?>
   		   </div>
       <?php endif; ?>
       </div>
      </div>
      <div id="logo">
        <?php if ($logo): ?>
          <img src="<?php print $logo; ?>" />
        <?php endif; ?>
      </div> <!-- logo -->
      <?php /* Design layout expects a site name, so include div for structure and style with min-height */ ?>
      <div id="site_name">
        <?php if ($site_name): ?>
          <h1>
            <?php print $site_name; ?>
          </h1>
        <?php endif; ?>
      </div> <!-- site_name -->      
      
      <?php if ($search_box): ?>
        <div id="search-box" class="span-8 last prepend-16">
          <?php print $search_box; ?>
        </div> <!-- /#search-box -->
      <?php endif; ?>
    <?php print $header; ?>
    <?php if ($breadcrumb != '') :?>
      <?php print $breadcrumb; ?>
  <?php endif; ?>
  </div>
  </div>
  <div id="container-wrapper">
  <div id="container">
    <?php
      
      if ($tabs != '') {
        print '<div class="tabs">'. render($page['tabs']) .'</div>';
      }

      if ($messages != '') {
        print '<div id="messages">'. $messages .'</div>';
      }

      if ($title != '') {
        print '<h2>'. $title .'</h2>';
      }

      print render($page['help']); // Drupal already wraps this one in a class
     // print_r($page);
      print render($page['content']);
      //print $feed_icons;
    ?>

    <?php if ($footer): ?>
      <div id="footer" class="clear">
          <?php print render($page['footer']); ?>
      </div>
    <?php endif; ?>

  </div>
  
  </div>
  <?php if ($sidebar_first || isset($main_menu) || isset($secondary_menu)): ?>
    <div id="sidebar_first-sidebar" class="sidebar-wrapper">
        <div id="sidebar_first-sidebar-handle"><span class="ui-icon ui-icon-arrowthickstop-1-e"></span></div>
        <div class="sidebar-contents">
            <?php if (isset($main_menu)) : ?>
              <?php print theme('links', $main_menu, array('id' => 'nav', 'class' => 'links primary-links')) ?>
            <?php endif; ?>
            <?php if (isset($secondary_menu)) : ?>
              <?php print theme('links', $secondary_menu, array('id' => 'subnav', 'class' => 'links secondary-links')) ?>
            <?php endif; ?>
            <?php print render($page['sidebar_first']); ?>
        </div>
    </div>
  <?php endif ?>
  <?php if ($sidebar_second): ?>
    <div id="sidebar_second-sidebar" class="sidebar-wrapper">
        <div id="sidebar_second-sidebar-handle"><span class="ui-icon ui-icon-arrowthickstop-1-w"></span></div>
        <div class="sidebar-contents">
            <?php print render($page['sidebar_second']); ?>
        </div>
    </div>
  <?php endif ?>
  <?php if ($create_new_record | $quickadd | $recent_items): ?>
    <div id="bottom-wrapper">
    <div id="bottom">
      
      <?php if ($quickadd): ?>
          <div id="quickadd" class="bottom-element"><?php print $quickadd; ?></div>
      <?php endif ?>
      
      <?php if ($create_new_record): ?>
          <div id="create-new-record" class="bottom-element"><?php print $create_new_record; ?></div>
      <?php endif ?>
      
      <?php if ($recent_items): ?>
          <div id="recent-items" class="bottom-element"><?php print $recent_items; ?></div>
      <?php endif ?>
      <div class="clear"></div>
    </div>
    </div>
  <?php endif; ?>
  


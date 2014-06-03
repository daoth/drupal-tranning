<?php
/**
 * @file
 * Custom login page template
 *
 * @ingroup page
 */
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="<?php print $page['language']; ?>" xml:lang="<?php print $page['language']; ?>">
  <head>
    <?php print $page['head']; ?>
    <title><?php print $page['title']; ?></title>
    <?php print $page['scripts']; ?>
    <?php print $page['favicon']; ?>
    <?php print $page['css']; ?>
  </head>
  <body>
    <h3>This is custom login page.</h3>
    <?php 
    if (!empty($page['message'])):
        foreach($page['message'] as $type => $message):
        ?>
            <div class="messages <?php print $type; ?>">
                <ul>
                <?php foreach($message as $msg): ?>
                    <li><?php print $msg; ?></li>
                <?php endforeach; ?>
                </ul>
            </div>
        <?php
        endforeach;
    endif; ?>
    <div><?php print $page['form']; ?></div>
    <?php print $page['footer_scripts']; ?>
  </body>
</html>
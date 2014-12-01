<?php
  /**
  * Removes non essential stylesheets with hook_css_alter().
  */
  function bb_css_alter(&$css) {
    foreach ($css as $key => $value) {
      if ($value['group'] != CSS_THEME) {
        $exclude[$key] = FALSE;
      }
    }
    $css = array_diff_key($css, $exclude);
  }

?>

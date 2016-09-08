<?php

$dir = 'path/to/files/'

// get files from directory and remove . and .. folders from array then reindex
$files = array_values(array_diff(scandir($dir), array('..', '.')));

foreach ($files as $file) {

  // get the contents of each file
  ob_start();
  include BASE_DIR . 'emails/templates/' . $template;
  $file_content = ob_get_contents();
  ob_end_clean();

  // Create display name for files
  $template_name = ucwords(str_replace("-", " ", pathinfo($template)['filename']));

}

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="robots" content="index,follow" />
<meta name="keywords" content="<?php print $meta_keywords; ?>">
<meta name="description" content="<?php print $meta_description; ?>" />

<?php
  if ($page_title == 'Home') {
    echo "<title>" . $site_title .  "</title>";
  }
  else {
    echo "<title>" . $page_title . " | " . $site_title . "</title>";
  }
?>

<link rel="shortcut icon" href="<?php print $base_url; ?>img/logo/icon.png">
<link rel="stylesheet" href="<?php print $base_url; ?>css/main.css">

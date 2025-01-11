<?php
header("Content-Security-Policy: default-src 'self'; script-src 'self' 'unsafe-inline'");

header("Expires: Tue, 01 Jan 2000 00:00:00 GMT");
header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");
header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");
?>
<!DOCTYPE html>
<html lang="<?php echo $_ENV['MIRUN_LANG']; ?>">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>No Cache</title>
</head>

<body>
    No Cache <?php echo rand(10000, 99999); ?>
</body>

</html>
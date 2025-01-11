<?php
header("Content-Security-Policy: default-src 'self'; script-src 'self' 'unsafe-inline'");
?>
<!DOCTYPE html>
<html lang="<?php echo $_ENV['MIRUN_LANG']; ?>">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Env</title>
</head>

<body>
    <strong>Username</strong><br>
    <?php echo $_ENV['MIRUN_USERNAME']; ?><br><br>

    <strong>User Path</strong><br>
    <?php echo $_ENV['MIRUN_HOMEDIR']; ?><br><br>

    <strong>Platform</strong><br>
    <?php echo $_ENV['MIRUN_PLATFORM']; ?><br><br>

    <strong>Language</strong><br>
    <?php echo $_ENV['MIRUN_LANG']; ?><br><br>

    <strong>App Path</strong><br>
    <?php echo dirname(__FILE__); ?><br><br>
</body>

</html>
<?php
$sDirLang = dirname(__FILE__) . '/langs/';

$sText = json_decode(file_get_contents($sDirLang . $_ENV['MIRUN_LANG'] . '.json'), true);

function translate($text, ...$values):string {
    global $sText;

    $a = sprintf($sText[$text], ...$values);

    return $a;
}

echo '<h3>PHP</h3>';
echo translate('Continue') . '<br>';
echo translate('Unable to find file %s', 'example.txt');
?>
<h3>JavaScript</h3>
<div id="example"></div>
<script>
    getTranslate();
    async function getTranslate() {
        document.getElementById('example').innerHTML = await mirun.translate('Cancel') + '<br>';
        document.getElementById('example').innerHTML += await mirun.translate('Unable to find file %s', 'example.js');
    }
</script>
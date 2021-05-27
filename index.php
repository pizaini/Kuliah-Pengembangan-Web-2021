<!doctype html>
<?php
$dir    = __DIR__;
$files = scandir($dir);
?>
<html>
    <head>
        <title>Kuliah web</title>
    </head>
<body>
    <ul>
        <?php foreach ($files as $file):?>
            <li><a href="<?=$file?>"><?=$file?></a> </li>
        <?php endforeach;?>
    </ul>
</body>
</html>

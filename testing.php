<?php
    /**
     * Created by PhpStorm.
     * User: Mark
     * Date: 8/30/2015
     * Time: 3:12 PM
     */
?>
<html>
<head>
    <title></title>
</head>
<body>
<?php
for ($i = 0; $i < 10000; $i++){
    echo ($i > 27 ? (chr(64 + $i) . chr(64 + $i)) : chr(64 + $i)) . '<br>';
}
?>
</body>
</html>


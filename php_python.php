<!DOCTYPE html>
<html>
<head>
    <title> PHP x Python</title>
</head>
<body>
<?php
$languages = array();
$languages ['PHP'] = array(
    "primeira_versão" => "1995",
    "ultima_versão" => "8.5",
    "desenvolvida_by" => "Rasmus Lerdorf",
    "descrição" => array(
        "extensão" => ".php",
        "license" => "PHP License (most os zend Engine License)"
    )
);
$languages ['Python'] = array(
    "primeira_versão" => "1991",
    "ultima_versão" => "3.14.3",
    "desenvolvida_by" => "Guido Van Rossum",
    "descrição" => array(
        "extensão" => ".py",
        "license" => "Python Software Foundation License"
    )
);

print_r($languages);
?>
</body>
</html>
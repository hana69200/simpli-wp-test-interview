<?php
require_once(PATH_MODELS.'Submit.php');

echo "Hello";

if( isset($_POST['name']) && isset($_POST['content']) && isset($_POST['metadata']) ){
    $name=htmlspecialchars($_POST['name']);
    $content=htmlspecialchars($_POST['content']);
    $metadata=htmlspecialchars($_POST['metadata']);

    $submit= new Submit();

    $sub= $submit -> createSubmit($name,$content,$metadata);
    header('Refresh:0; url=index.php');
    echo "Hello";
    print_r("he");
}






// Appel de la vue
require_once(PATH_VIEWS.$page.'.php');
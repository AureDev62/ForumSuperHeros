<?php

$title = 'accueil';


ob_start();
?>


<main>
    <h1>Bienvenue sur le forum des super héros </h1>
</main>
<div>
    <h2>Veuillez choisir votre camp</h2>
    <div><a href="">Marvel</a></div>
    <div><a href="">Comics</a></div>
</div>

<?php

$content = ob_get_clean();

require_once('./views/_template.php');

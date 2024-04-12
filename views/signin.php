<?php

$title = 'accueil';


ob_start();
?>


<main>
    <h1>Bienvenue sur le site</h1>
    <ul>
        <li>Nom</li>
        <li>Prénom</li>
        <li>Username</li>
    </ul>
</main>

<?php

$content = ob_get_clean();

require_once('./views/template.php');

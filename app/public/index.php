<?php
<<<<<<< Updated upstream
// $_base_path = __DIR__ . '/';
// $_config_path = $_base_path . 'config/';
=======
$_base_path = str_replace('public/', '', __DIR__ . '/');
$_config_path = $_base_path . 'config/';
>>>>>>> Stashed changes

// require $_base_path . 'includes/application.php';

<<<<<<< Updated upstream
// echo $_base_path;
// <br />
// echo $_config_path;
echo "Teste";
=======
application_run();
>>>>>>> Stashed changes

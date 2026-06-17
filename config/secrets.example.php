<?php

/**
 * Zkopirujte na server jako config/secrets.php (mimo git).
 * cp config/secrets.example.php config/secrets.php
 */

return array(
    'production' => array(
        'db_pass' => 'HESLO_PRODUKCE',
    ),
    'staging' => array(
        'db_pass' => 'HESLO_STAGING',
    ),
    'local' => array(
        'db_pass' => 'root',
    ),
);

?>

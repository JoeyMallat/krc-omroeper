<?php
/**
 * Controller
 */

include 'model.php';

$db = connect_db("localhost", "krcannouncer", "user", "password");

/* Landing page */
if (new_route('/krcannouncer/', 'get')) {

    $players = get_players($db);
    $players_select = get_players_select($players);

    /* Choose Template */
    include use_template('main');
}

else {
    http_response_code(404);
    echo '404 Not Found';
}
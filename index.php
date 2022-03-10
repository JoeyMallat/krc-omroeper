<?php
/**
 * Controller
 */

include 'model.php';

$db = connect_db(
    "ec2-52-49-56-163.eu-west-1.compute.amazonaws.com",
    "detdgbhsj8hsu1",
    "ynmhcwmwnpgzjf",
    "cfc93e1c78c5cc51b0ccc880c54bb48c23ed666783566428bb538b2f0a620067");

/* Landing page */
if (new_route('/', 'get')) {

    $players = get_players($db);
    $players_select = get_players_select($players);

    /* Choose Template */
    include use_template('main');
}

else {
    http_response_code(404);
    echo '404 Not Found';
}
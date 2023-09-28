<?php
// Récupérer le statut et décoder le JSON
$status = json_decode(file_get_contents('https://api.mcsrvstat.us/2/game9-fr.hosterfy.com:60268'));
include "nav.html";
include "home.html";
include "footer.html";
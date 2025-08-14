<?php

function userLogout() {
    session_unset();
    session_destroy();
}

?>
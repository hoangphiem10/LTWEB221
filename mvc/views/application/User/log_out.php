<?php 
    session_start();
    if(session_destroy()){
        header("Location: http://localhost/LTWEB221/User/sign_in");
    }
?>
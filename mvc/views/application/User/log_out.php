<?php 
    session_start();
    if(session_destroy()){
        header("Location: http://localhost:8081/LTWEB221/User/sign_in");
    }
?>
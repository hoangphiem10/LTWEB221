<?php 
       if(isset($data["id"])){
        $id = $data["id"];
        $sql = "DELETE FROM `orderr` WHERE `orderr`.`order_id` = $id";
        if(($data["orderModal"]->con)->query($sql)){
            echo "<script type='text/javascript'>alert('xoa thanh cong');
            window.location.href = 'http://localhost:8081/LTWEB221/Order/index';
            </script>";
        }
        else{
            echo "<script type='text/javascript'>alert('xoa that bai');
            window.location.href = 'http://localhost:8081/LTWEB221/Order/index';
            </script>";
        }
    }
?>
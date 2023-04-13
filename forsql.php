<?php
        $conn = mysqli_connect('localhost', 'root', '', 'database1');
        if(mysqli_connect_errno()){
            echo "connection filed";
        }else{
            echo"connection successful";
        }
        ?>
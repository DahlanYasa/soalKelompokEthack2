<?php
    include 'flag.php';
    if (isset($_GET['source'])){
        $your_entered_string = $_GET['source'];
        $intermediate_string = 'CSUI';
        $final_string = preg_replace(
            "/$intermediate_string/", '', $your_entered_string);
        if ($final_string === $intermediate_string) {
            echo 'Final string is : '.$final_string;
            echo '<br>';
            echo $flag_yang_kalian_inginkan;;
        }
        else{
            echo 'Final string is : '.$final_string;
            echo '<br>';
            echo "\nNo Success";
        }
    }
    else{
        highlight_file(__FILE__);
    }
?>
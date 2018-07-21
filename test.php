<?php

if ($_POST['total'] !== $paid) {
    $status = "Partially Paid";
}elseif($_POST['total'] == $paid) {
    $status == "Paid";
}else{
    $status ==  "Unpaid";
}
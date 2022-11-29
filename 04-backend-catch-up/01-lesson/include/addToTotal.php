<?php

function addToTotal() {
    
    $_SESSION['subTotal'] = $_POST['selectedItemValue'] + $_SESSION['subTotal'];
}
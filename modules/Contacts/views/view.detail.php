<?php

require_once 'modules/Contacts/views/view.detail.php';

class CustomContactsViewDetail extends ContactsViewDetail{

    function display(){
        echo "Daniel2!";
        parent::display();
    }
}
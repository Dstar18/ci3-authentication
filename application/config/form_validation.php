<?php

// Register user
$config = array(
    'user/insert'   => array(
        array(
            'field'     => 'firstname',
            'label'     => 'Firstname',
            'rules'     => 'required|max_length[50]'
        ),
        array(
            'field'     => 'lastname',
            'label'     => 'Lastname',
            'rules'     => 'required|max_length[50]'
        ),
        array(
            'field'     => 'email',
            'label'     => 'Email',
            'rules'     => 'required|valid_email'
        ),
        array(
            'field'     => 'username',
            'label'     => 'Username',
            'rules'     => 'required|min_length[3]|max_length[20]'
        ),
        array(
            'field'     => 'password',
            'label'     => 'Password',
            'rules'     => 'required|min_length[8]'
        ),
    )
);

?>
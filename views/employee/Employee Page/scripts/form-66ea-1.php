<?php

require_once('FormProcessor.php');

$form = array(
    'subject' => 'New Form Submission',
    'email_message' => 'You have a new form submission',
    'success_redirect' => '',
    'sendIpAddress' => true,
    'email' => array(
    'from' => '',
    'to' => ''
    ),
    'fields' => array(
    'email' => array(
    'order' => 1,
    'type' => 'email',
    'label' => 'Edytuj Email ',
    'required' => true,
    'errors' => array(
    'required' => 'Field \'Edytuj Email \' is required.'
    )
    ),
    'text' => array(
    'order' => 2,
    'type' => 'string',
    'label' => 'Imię',
    'required' => false,
    'errors' => array(
    'required' => 'Field \'Imię\' is required.'
    )
    ),
    'text-1' => array(
    'order' => 3,
    'type' => 'string',
    'label' => 'Nazwisko',
    'required' => false,
    'errors' => array(
    'required' => 'Field \'Nazwisko\' is required.'
    )
    ),
    )
    );

    $processor = new FormProcessor('');
    $processor->process($form);

    ?>
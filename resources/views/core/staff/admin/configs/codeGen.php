<?php

//---------Password Reset Token generator -------------------------------------------//
    $length = 30;
    $tk = substr(str_shuffle("QWERTYUIOPLKJHGFDSAZXCVBNM1234567890"),1,$length);
    
//------------Dummy Password Generator----------------------------------------------//
    $length = 8;
    $rc= substr(str_shuffle("QWERTYUIOPLKJHGFDSAZXCVBNM1234567890"),1,$length);

// -------Doc ID--------------------------------------------------------------------//
    $length = 15;
    $doc_id = bin2hex(random_bytes($length));

// -------Payroll ID--------------------------------------------------------------------//
    $length = 15;
    $payroll_id = bin2hex(random_bytes($length));

// -------Member ID--------------------------------------------------------------------//
    $length = 15;
    $member_id = bin2hex(random_bytes($length));

// -------Member ID--------------------------------------------------------------------//
    $length = 15;
    $kb_id = bin2hex(random_bytes($length));


// -------Package ID--------------------------------------------------------------------//
    $length = 15;
    $package_id= bin2hex(random_bytes($length));
    

// -------Package ID--------------------------------------------------------------------//
    $length = 15;
    $consul_id= bin2hex(random_bytes($length));

// -------Package ID--------------------------------------------------------------------//
    $length = 15;
    $pre_id= bin2hex(random_bytes($length));
    
// -------Package ID--------------------------------------------------------------------//
    $length = 15;
    $m_id= bin2hex(random_bytes($length));


// -------Payment ID--------------------------------------------------------------------//
    $length = 15;
    $pay_id= bin2hex(random_bytes($length));

// -------Feedback ID--------------------------------------------------------------------//
    $length = 15;
    $f_id= bin2hex(random_bytes($length));

// -------Rate ID--------------------------------------------------------------------//
    $length = 15;
    $rate_id= bin2hex(random_bytes($length));

    $length = 150;
    $tk= bin2hex(random_bytes($length));

// ---Codes----------------------------------------------------------------//
    $alpha = 5;
    $beta = 5;
    $a = substr(str_shuffle("QWERTYUIOPLKJHGFDSAZXCVBNM"),1,$alpha);
    $b = substr(str_shuffle("1234567890"),1,$beta);

    $alpha = 10;
    $paycode = substr(str_shuffle("QWERTYUIOPLKJHGFDSAZXCVBNM1234567890"),1,$alpha);

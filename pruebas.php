<?php

$password = '1234';
echo $password;


echo password_hash($password, PASSWORD_DEFAULT)."\n";

$hash = '$2y$10$8O38ISIA2m8pI2AvgdYQMuKWxpv987heVsZealfgIrpHTdXzQHGrO';

if (password_verify($password, $hash)) {
    echo 'Password Correcta!';
} else {
    echo 'Pssword incorrecta!!.';
}
?>
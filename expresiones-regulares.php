<?php

$pass = '123456';

echo preg_match('/^[0-9] {6-9}$/', $pass);
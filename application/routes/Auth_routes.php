<?php

$route['auth']['get'] = 'v2/auth/Auth_controller/index';
$route['auth']['post'] = 'v2/auth/Auth_controller/auth';
$route['logout']['get'] = 'v2/auth/Auth_controller/logout';
$route['recovery']['get'] = 'v2/auth/Auth_controller/recovery';
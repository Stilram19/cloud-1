<?php
$cfg['blowfish_secret'] = 'a1b2c3d4e5f6g7h8i9j0k1l2m3n4o5p6';

$cfg['Servers'][1]['host']      = getenv('MDB_HOSTNAME');
$cfg['Servers'][1]['port']      = '3306';
$cfg['Servers'][1]['user']      = getenv('MDB_USER');
$cfg['Servers'][1]['password']  = getenv('MDB_PASSWORD');
$cfg['Servers'][1]['db']        = getenv('MDB_DATABASE');
$cfg['Servers'][1]['auth_type'] = 'cookie';

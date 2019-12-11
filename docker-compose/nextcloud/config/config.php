<?php
$CONFIG = array (
  'htaccess.RewriteBase' => '/',
  'memcache.local' => '\\OC\\Memcache\\APCu',
  'memcache.distributed' => '\\OC\\Memcache\\Redis',
  'redis' => 
  array (
    'host' => 'redis-cache',
    'port' => 0,
    'dbindex' => 1,
  ),
  'memcache.locking' => '\\OC\\Memcache\\Redis',
  'apps_paths' => 
  array (
    0 => 
    array (
      'path' => '/var/www/html/apps',
      'url' => '/apps',
      'writable' => false,
    ),
    1 => 
    array (
      'path' => '/var/www/html/custom_apps',
      'url' => '/custom_apps',
      'writable' => true,
    ),
  ),
  'overwrite.cli.url' => 'https://deepdown.fun/nextcloud',
  'overwriteprotocol' => 'https',
  'overwritewebroot' => '/nextcloud',
  'instanceid' => 'oc3djxtdsxbp',
  'passwordsalt' => 'kJc1fNMpJpbyDcnXogiJ9EaeHKNrqo',
  'secret' => 'ZX3pku+AnhCh7zq8JGvaIRbexXwdyFLJYxVQJ+G4XjVr1TaB',
  'trusted_domains' => 
  array (
    0 => 'cloud.deepdown.fun',
    1 => 'deepdown.fun',
  ),
  'datadirectory' => '/var/www/html/data',
  'dbtype' => 'mysql',
  'version' => '17.0.1.1',
  'dbname' => 'nextcloud',
  'dbhost' => '172.17.0.1:3306',
  'dbport' => '',
  'dbtableprefix' => 'oc_',
  'mysql.utf8mb4' => true,
  'dbuser' => 'oc_tanayu42',
  'dbpassword' => 'oI8D8vBVbWSH2VR9ntWCwmA37sZTwH',
  'installed' => true,
  'mail_smtpmode' => 'smtp',
  'mail_smtpauthtype' => 'LOGIN',
  'mail_sendmailmode' => 'smtp',
  'mail_smtpauth' => 1,
  'mail_smtphost' => 'smtp.office365.com',
  'maintenance' => false,
  'theme' => '',
  'loglevel' => 2,
  'mail_smtpsecure' => 'tls',
  'mail_from_address' => 'tanayuayu',
  'mail_domain' => 'outlook.com',
  'mail_smtpport' => '587',
  'mail_smtpname' => 'tanayuayu@outlook.com',
  'mail_smtppassword' => 'ayu,@299988',
);

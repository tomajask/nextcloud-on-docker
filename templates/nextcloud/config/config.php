<?php
$CONFIG = array (
  'datadirectory' => '/data',
  'apps_paths' =>
  array (
    0 =>
    array (
      'path' => '/nextcloud/apps',
      'url' => '/apps',
      'writable' => false,
    ),
    1 =>
    array (
      'path' => '/apps2',
      'url' => '/apps2',
      'writable' => true,
    ),
  ),
  'memcache.distributed' => '\\OC\\Memcache\\Redis',
  'memcache.locking' => '\\OC\\Memcache\\Redis',
  'memcache.local' => '\\OC\\Memcache\\APCu',
  'redis' =>
  array (
    'host' => 'redis',
    'port' => 6379,
  ),
  'instanceid' => 'ocadc83b19e7',
  'passwordsalt' => 'ntHgPN6iA3r4+sSG1wje3b8kasWBTI',
  'secret' => '1eLNfAokT8CX9NV9CG5Fb5ul8xmo2/zv6246LmDK98PQ12ML',
  'trusted_domains' =>
  array (
    0 => 'localhost',
    1 => '127.0.0.1',
  ),
  'overwrite.cli.url' => 'http://localhost',
  'dbtype' => 'mysql',
  'version' => '11.0.2.7',
  'dbname' => 'nextcloud',
  'dbhost' => 'nextcloud-db',
  'dbport' => '',
  'dbtableprefix' => 'oc_',
  'dbuser' => 'nextcloud',
  'dbpassword' => '12345password',
  'logtimezone' => 'Europe/Warsaw',
  'installed' => true,
  'mail_from_address' => 'administrator',
  'logdateformat' => 'Y-m-d H:i:s',
);

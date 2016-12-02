1 Install the module and the dependencies.
2 add the database conection with the key upgrade to your settings.php:
{code}
$databases['update']['default'] = array(
  'database' => 'BD_NAME',
  'username' => 'MYSQL_USER',
  'password' => 'MYSQL_PASS',
  'prefix' => '',
  'host' => 'localhost',
  'port' => '3306',
  'namespace' => 'Drupal\\Core\\Database\\Driver\\mysql',
  'driver' => 'mysql',
);
{code}
3 Import the source database: drush sql-cli --database=update < your_bkp.sql 
4 remove the current roles on your configuration (them will be reimported)
5 drush migrate-import --group=aed

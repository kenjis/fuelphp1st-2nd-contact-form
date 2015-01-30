echo "Create databases and user"
echo "  type mysql root password below:"
mysql -u root -p << _EOT_
  CREATE DATABASE fuel_dev DEFAULT CHARACTER SET utf8;
  CREATE DATABASE fuel_test DEFAULT CHARACTER SET utf8;
  GRANT ALL PRIVILEGES ON fuel_dev.* TO username@localhost IDENTIFIED BY 'password';
  GRANT ALL PRIVILEGES ON fuel_test.* TO username@localhost;
_EOT_

echo "Create tables"
oil refine migrate:current
FUEL_ENV=test oil refine migrate:current
oil refine migrate:current --packages=auth
FUEL_ENV=test oil refine migrate:current --packages=auth

echo "Create admin user"
echo "  type below:"
echo "    Auth::create_user('admin', 'password', 'admin@example.jp', 100);"
echo "    exit;"
oil console

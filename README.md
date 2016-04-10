# 『はじめてのフレームワークとしてのFuelPHP 第2版(改訂版)』のコンタクトフォーム

達人出版会およびラトルズ刊行の『はじめてのフレームワークとしてのFuelPHP 第2版(改訂版)』で作成する「コンタクトフォーム」です。

書籍の詳細は、[『はじめてのフレームワークとしての FuelPHP 第2版(改訂版)』サポートサイト](https://github.com/kenjis/fuelphp1st-2nd)を参照願います。

FuelPHP 1.7.2で書籍の手順どおりに作成し、FuelPHP 1.7.3、1.8.0にアップデートしたものです（1.7.2の状態が見たい場合はタグ`fuel-1.7.2`を、1.7.3の状態が見たい場合はタグ`fuel-1.7.3`をチェックアウトしてください）。ソースコードは、書籍で解説されています。

テストカバー率は、現在、行レベルで48.43%です。

このコンタクトフォームは学習用で一部未完成です。

## 動作環境

* PHP 5.4以上
* Apache
* MySQL

## インストール方法

### ソースコードのインストール

~~~
$ git clone https://github.com/kenjis/fuelphp1st-2nd-contact-form.git
$ cd fuelphp1st-2nd-contact-form
$ php composer.phar self-update
$ php composer.phar install
~~~

### データベースの作成

MySQLにデータベースを作成します。

~~~
> CREATE DATABASE `fuel_dev` DEFAULT CHARACTER SET utf8;
> CREATE DATABASE `fuel_test` DEFAULT CHARACTER SET utf8;
> GRANT ALL PRIVILEGES ON fuel_dev.* TO username@localhost IDENTIFIED BY 'password';
> GRANT ALL PRIVILEGES ON fuel_test.* TO username@localhost;
~~~

### テーブルの作成

マイグレーションで必要なテーブルを作成します。

~~~
$ oil refine migrate:current
$ FUEL_ENV=test oil refine migrate:current
$ oil refine migrate:current --packages=auth
$ FUEL_ENV=test oil refine migrate:current --packages=auth
~~~

### Apacheの設定

http://localhost/fuelphp/form でアクセスできるように設定します。

~~~
$ cd /path/to/htdocs/
$ ln -s /path/to/fuelphp1st-2nd-contact-form/public/ fuelphp
~~~

### 管理者アカウントの作成

~~~
$ oil console
Fuel 1.7.2 - PHP 5.5.10 (cli) (Apr 10 2014 17:49:03) [Darwin]
>>> Auth::create_user('admin', 'password', 'admin@example.jp', 100);
1
>>> exit
~~~

http://localhost/fuelphp/admin から以下の管理者アカウントでログインできます。

~~~
　ユーザ名：admin
パスワード：password
~~~

## テストの実行

### ユニットテスト

~~~
$ oil test --group=App
$ oil test --group=App --coverage-html=coverage
~~~

### ファンクショナルテスト

~~~
$ oil test --group=Functional
~~~

## ライセンス

MITライセンスです。LICENSE.mdを参照してください。

## 関連

* [『はじめてのフレームワークとしての FuelPHP 第2版(改訂版)』サポートサイト](https://github.com/kenjis/fuelphp1st-2nd)

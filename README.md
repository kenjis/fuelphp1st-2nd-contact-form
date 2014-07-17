# 『はじめてのフレームワークとしてのFuelPHP 第2版』のコンタクトフォーム

達人出版会から刊行されている『[はじめてのフレームワークとしてのFuelPHP 第2版（3）実践編](http://tatsu-zine.com/books/fuelphp1st-2nd-3)』で作成する「コンタクトフォーム」です。

FuelPHP 1.7.2で『[はじめてのフレームワークとしてのFuelPHP 第2版（3）実践編](http://tatsu-zine.com/books/fuelphp1st-2nd-3)』の手順どおりに作成したものです。

ソースコードは、『[はじめてのフレームワークとしてのFuelPHP 第2版（3）実践編](http://tatsu-zine.com/books/fuelphp1st-2nd-3)』で解説されています。

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

* [はじめてのフレームワークとしてのFuelPHP 第2版（1）環境構築編](http://tatsu-zine.com/books/fuelphp1st-2nd-1)
* [はじめてのフレームワークとしてのFuelPHP 第2版（2）入門編](http://tatsu-zine.com/books/fuelphp1st-2nd-2)
* [はじめてのフレームワークとしてのFuelPHP 第2版（3）実践編](http://tatsu-zine.com/books/fuelphp1st-2nd-3)
* [サポートサイト](https://github.com/kenjis/fuelphp1st-2nd)

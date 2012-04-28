ICCU
====
ICCU website prototype - WE 300443 (Autumn 2012) UWS

REQUIREMENT
================================================================================
1. Apache 2.0
2. MySQL 5
3. PHP 5.1
4. Yii framework 1.1.10

CONFIGURATION
================================================================================
1. Config the Yii path:

   + Your directory hierachy should look like this:
        -- Apache Document Root
        ---- yii
        ---- iccu
   + Otherwise, you need to update path to yii framwork at line 4 file iccu/index.php

2. Import database:

   + Create a MySQL database named 'iccu'
   + Import iccu/iccu.sql to iccu db
   + Update database info in iccu/protected/config/main.php:

        'db'=>array(
			'connectionString' => 'mysql:host=localhost;dbname=iccu',
			'emulatePrepare' => true,
			'username' => 'your MySQL admin account',
			'password' => 'your password',
			'charset' => 'utf8',
		),

3. Check rewrite config of Apache (in httpd.conf):

   + Make sure that you change the "AllowOverride" flag to "All":

        LoadModule rewrite_module modules/mod_rewrite.so
        ...

        # AllowOverride controls what directives may be placed in .htaccess files.
        # It can be "All", "None", or any combination of the keywords:
        #   Options FileInfo AuthConfig Limit
        #
        AllowOverride All


NOTE
================================================================================
Default site admin account: admin/admin

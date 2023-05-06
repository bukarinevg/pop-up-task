<?php
#mysql:host=localhost;dbname=test
#mysql://bdcfb60a2f5fff:c4ce01c5@us-cdbr-east-06.cleardb.net/heroku_4fcf6da98776780?reconnect=true
return [
    'class' => 'yii\db\Connection',
    'dsn' => 'mysql:host=us-cdbr-east-06.cleardb.net;dbname=heroku_4fcf6da98776780',
    'username' => 'bdcfb60a2f5fff',
    'password' => 'c4ce01c5',
    'charset' => 'utf8',
    // Schema cache options (for production environment)
    //'enableSchemaCache' => true,
    //'schemaCacheDuration' => 60,
    //'schemaCache' => 'cache',
];

<?php

define('DEFAULT_DB', TMP.'db'.DS.'main.db3');

class DATABASE_CONFIG {
    public $default = array(
        'datasource' => 'Database/Sqlite',
        'persistent' => false,
        'host' => '',
        'database' => 'database.sqlite',
        'encoding' => 'utf8',
    );
}

/*class DATABASE_CONFIG {

	/*public $default = array(
		'datasource' => 'Database/Mysql',
		'persistent' => false,
		'host' => 'localhost',
		'login' => 'root',
		'password' => '',
		'database' => 'autobar',
		'prefix' => '',
		'encoding' => 'utf8'
	);*/
	/*
	public $default = array(
	    'driver' => 'sqlite3',
		'database' => 'database.sqlite',
        'datasource' => 'Database/Sqlite',
        'persistent' => false,
        //'database' => 'database_name',
        //'prefix' => '',
        //'encoding' => 'utf8',
	);

}
*/
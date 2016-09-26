<?php

class DB {
	
}

ORM::configure(array(
	"connection_string" => "" . Config::Get("Database.Host") . "" . Config::Get("Database.Name"),
	"username" => Config::Get("Database.Username"),
	"password" => Config::Get("Database.Password"),
	"return_result_sets" => true;
));

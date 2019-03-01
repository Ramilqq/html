<?php

spl_autoload_register(function ($className){
	require_once dirname(__DIR__). '/' . str_replace('\\', '/', $className) . '.php';}
);
<?php
function __autoload($className){
	#require_once __DIR__ . '/' . str_replace('\\', '/', $className) . '.php';
	require_once dirname(__DIR__). '/' . str_replace('\\', '/', $className) . '.php';
} 
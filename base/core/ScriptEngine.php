<?php

class ScriptEngine
{

	function __construct()
	{
		echo '<script>';
		echo 'function Script(){}';
		$this->defineGetRoute();
		$this->defineallSession();
		echo '</script>';
	}

	private function defineGetRoute(){
		echo 'Script.route = function(route){return "'.URL::to('/').'"+route};';
	}

	private function defineallSession(){
		echo 'var SessionData = '. json_encode($_SESSION).';';
		echo 'Script.sessions = function(literal){';
		echo 'if(SessionData.hasOwnProperty(literal)){return SessionData[literal];}else{return SessionData;}';
		echo '}';
	}
}

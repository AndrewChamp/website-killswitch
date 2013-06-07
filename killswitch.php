<?php

	class killswitch{
	
		public $domain;
		public $info;
		private $xml = 'http://domain.com/killswitch.xml';
		
		
		public function __construct($_domain=null){
			if($_domain != null):
				$this->domain = $_domain;
				$this->loadFile();
			endif;
		}
		
		
		public function loadFile(){
			$xml = @simplexml_load_file($this->xml);
			$this->info = $xml->{$this->domain};			
		}
	
	}

?>

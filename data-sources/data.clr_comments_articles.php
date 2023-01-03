<?php

	require_once(EXTENSIONS . '/remote_datasource/data-sources/datasource.remote.php');

	Class datasourceclr_comments_articles extends RemoteDatasource {

		public $dsParamROOTELEMENT = 'clr-comments-articles';
		public $dsParamURL = '{$ds-article-single.clr-page}/feed/';
		public $dsParamFORMAT = 'xml';
		public $dsParamXPATH = '/rss/channel/item';
		public $dsParamCACHE = 60;
		public $dsParamTIMEOUT = 6;

		public $dsParamNAMESPACES = array(
			'content' => 'http://purl.org/rss/1.0/modules/content/',
			'dc' => 'http://purl.org/dc/elements/1.1/',
			'atom' => 'http://www.w3.org/2005/Atom',
			'sy' => 'http://purl.org/rss/1.0/modules/syndication/',
			'georss' => 'http://www.georss.org/georss',
			'geo' => 'http://www.w3.org/2003/01/geo/wgs84_pos#',
			'media' => 'http://search.yahoo.com/mrss/',
		);
		

		public function __construct($env=NULL, $process_params=true){
			parent::__construct($env, $process_params);
			$this->_dependencies = array(
                '$ds-article-single.clr-page'
			);
		}

		public function about(){
			return array(
				'name' => 'CLR Comments - Articles',
				'author' => array(
					'name' => 'Aonrud',
					'website' => 'https://www.leftarchive.ie',
					'email' => 'admin@leftarchive.ie'),
				'version' => 'Symphony 2.3.3',
				'release-date' => '2014-11-05T21:06:28+00:00'
			);
		}

		public function allowEditorToParse(){
			return true;
		}

	}

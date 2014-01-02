<?php

class Plugin_segment extends Plugin 
{

	public $meta = array(
		'name'       => 'Segment',
		'version'    => 1.0,
		'author'     => 'Jason Varga',
		'author_url' => 'http://pixelfear.com'
	);

	//--------------------------------------------------------------------------

	public function index()
	{
		$num = $this->fetchParam('num', 1);
		$url = $this->fetchParam('url');
		$segments = explode('/', URL::format($url));
		if ($url) {
			return $segments[$num];
		}
	}
}
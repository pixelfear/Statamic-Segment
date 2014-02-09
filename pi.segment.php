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

	public function index($num = 1)
	{
		$num = $this->fetchParam('num', $num);
		$url = $this->fetchParam('url', URL::getCurrent());
		$segments = explode('/', URL::format($url));
		if ($num < 0) {
			return implode('/', array_slice($segments, 0, $num));
		} else {
			return $segments[$num];
		}
	}

	public function parent_url()
	{
		return $this->index(-1);
	}
}
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
		if ($url && abs($num) < count($segments)) {
			if ($num > 0) {
				return $segments[$num];
			} else {
				return $segments[count($segments) + $num - 1];
			}
		}
	}

	public function url($num = 0)
	{
		$num = $this->fetchParam('num', $num);
		$url = $this->fetchParam('url', URL::getCurrent());
		$segments = explode('/', URL::format($url));
		if ($url) {
			if ($num >= 0)
				return implode('/', array_slice($segments, 0, $num + 1));
			else
				return implode('/', array_slice($segments, 0, $num));
		}
	}

	public function parent_url()
	{
		return $this->url(-1);
	}
}
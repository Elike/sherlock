<?php
/**
 * User: Zachary Tong
 * Date: 2/7/13
 * Time: 5:20 PM
 */

namespace sherlock\components;
use sherlock\common\exceptions;



class BaseComponent
{
	protected $params = array();

	public function __construct()
	{

	}

	public function __call($name, $arguments)
	{
		//objects are handled differently than core types.
		//Since objects build their own JSON and return it, re-encoding that json will
		//escape the existing quotes.
		//To get around this, we detect the type and either encode or not
		//Arrays of values have to be handled recursively.
		if ($arguments[0] instanceof BaseComponent){
			$this->params['$'.$name] = (string)$arguments[0];
		}
		elseif (is_array($arguments[0])){
			$this->params['$'.$name] = $this->parseArray($arguments[0]);
		}
		else {
			$this->params['$'.$name] = json_encode((string)$arguments[0]);
		}

		return $this;
	}

	private function parseArray($argument)
	{
		if (is_array($argument)){
			$temp = array();
			foreach($argument as $value)
			{
				$temp[] = $this->parseArray($value);
			}
			$ret = "[".implode(",", $temp)."]";
		}
		elseif ($argument instanceof BaseComponent)
			$ret = (string)$argument;
		else
			$ret = json_encode((string)$argument);

		return $ret;
	}

	public function __toString()
	{
		$data = $this->params;

		//Determine if this what type of component this is so we can find the template file
		$reflector = new \ReflectionClass(get_class($this));
		$interfaces = $reflector->getInterfaceNames();

		$path =  __DIR__;
		if ($interfaces[0] == 'sherlock\components\QueryInterface')
		{
			$path .= "/templates/queries/";
		}
		elseif ($interfaces[0] == 'sherlock\components\FilterInterface')
		{
			$path .= "/templates/queries/";
		}

		$path .= $reflector->getShortName();
		$path .= ".json";

		//grab the template data
		$json = file_get_contents($path);

		return strtr($json, $this->params);

	}
}





<?php
/**
 * User: Zachary Tong
 * Date: 2013-02-19
 * Time: 08:26 PM
 * Auto-generated by "generate.filters.php"
 */
namespace sherlock\components\filters;

use sherlock\components;
use sherlock\common\exceptions;


/**
 * @method \sherlock\components\filters\Nested path() path(string $value)
 * @method \sherlock\components\filters\Nested query() query(\sherlock\components\QueryInterface $value)
 * @method \sherlock\components\filters\Nested _cache() _cache(bool $value) Default: false

 */
class Nested extends \sherlock\components\BaseComponent implements \sherlock\components\FilterInterface
{
	public function __construct($hashMap = null)
	{
		$this->params['_cache'] = false;

		parent::__construct($hashMap);
	}
	
	public function toArray()
	{
		$ret = array (
  'nested' => 
  array (
    'path' => $this->params["path"],
    'query' => $this->params["query"],
    '_cache' => $this->params["_cache"],
  ),
);
		return $ret;
	}

}

?>
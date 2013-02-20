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
 * @method \sherlock\components\filters\Range field() field(string $value)
 * @method \sherlock\components\filters\Range from() from(mixed $value)
 * @method \sherlock\components\filters\Range to() to(mixed $value)
 * @method \sherlock\components\filters\Range include_lower() include_lower(bool $value) Default: true
 * @method \sherlock\components\filters\Range include_upper() include_upper(bool $value) Default: false
 * @method \sherlock\components\filters\Range _cache() _cache(bool $value) Default: true

 */
class Range extends \sherlock\components\BaseComponent implements \sherlock\components\FilterInterface
{
	public function __construct($hashMap = null)
	{
		$this->params['include_lower'] = true;
		$this->params['include_upper'] = false;
		$this->params['_cache'] = true;

		parent::__construct($hashMap);
	}
	
	public function toArray()
	{
		$ret = array (
  'range' => 
  array (
    $this->params["field"] => 
    array (
      'from' => $this->params["from"],
      'to' => $this->params["to"],
      'include_lower' => $this->params["include_lower"],
      'include_upper' => $this->params["include_upper"],
    ),
    '_cache' => $this->params["_cache"],
  ),
);
		return $ret;
	}

}

?>
<?php
/**
 * User: Zachary Tong
 * Date: 2013-02-16
 * Time: 09:24 PM
 * Auto-generated by "generate.php"
 */
namespace Sherlock\components\queries;

use Sherlock\components;

/**
 * @method \Sherlock\components\queries\QueryStringMultiField query() query(\string $value)
 * @method \Sherlock\components\queries\QueryStringMultiField fields() fields(array $value)
 * @method \Sherlock\components\queries\QueryStringMultiField boost() boost(\float $value) Default: 2.0
 * @method \Sherlock\components\queries\QueryStringMultiField enable_position_increments() enable_position_increments(\int $value) Default: 1
 * @method \Sherlock\components\queries\QueryStringMultiField default_operator() default_operator(\string $value) Default: "OR"
 * @method \Sherlock\components\queries\QueryStringMultiField analyzer() analyzer(\string $value) Default: "default"
 * @method \Sherlock\components\queries\QueryStringMultiField allow_leading_wildcard() allow_leading_wildcard(\int $value) Default: 0
 * @method \Sherlock\components\queries\QueryStringMultiField lowercase_expanded_terms() lowercase_expanded_terms(\int $value) Default: 1
 * @method \Sherlock\components\queries\QueryStringMultiField fuzzy_min_sim() fuzzy_min_sim(\float $value) Default: 0.5
 * @method \Sherlock\components\queries\QueryStringMultiField fuzzy_prefix_length() fuzzy_prefix_length(\int $value) Default: 2
 * @method \Sherlock\components\queries\QueryStringMultiField lenient() lenient(\int $value) Default: 1
 * @method \Sherlock\components\queries\QueryStringMultiField phrase_slop() phrase_slop(\int $value) Default: 10
 * @method \Sherlock\components\queries\QueryStringMultiField analyze_wildcard() analyze_wildcard(\int $value) Default: 1
 * @method \Sherlock\components\queries\QueryStringMultiField auto_generate_phrase_queries() auto_generate_phrase_queries(\int $value) Default: 0
 * @method \Sherlock\components\queries\QueryStringMultiField rewrite() rewrite(\string $value) Default: "constant_score_default"
 * @method \Sherlock\components\queries\QueryStringMultiField quote_analyzer() quote_analyzer(\string $value) Default: "standard"
 * @method \Sherlock\components\queries\QueryStringMultiField quote_field_suffix() quote_field_suffix(\string $value) Default: ".unstemmed"
 * @method \Sherlock\components\queries\QueryStringMultiField use_dis_max() use_dis_max(\string $value) Default: "true"
 * @method \Sherlock\components\queries\QueryStringMultiField tie_breaker() tie_breaker(\int $value) Default: 1

 */
class QueryStringMultiField extends \Sherlock\components\BaseComponent implements \Sherlock\components\QueryInterface
{
    public function __construct($hashMap = null)
    {
        $this->params['boost'] = 2.0;
        $this->params['enable_position_increments'] = 1;
        $this->params['default_operator'] = "OR";
        $this->params['analyzer'] = "default";
        $this->params['allow_leading_wildcard'] = 0;
        $this->params['lowercase_expanded_terms'] = 1;
        $this->params['fuzzy_min_sim'] = 0.5;
        $this->params['fuzzy_prefix_length'] = 2;
        $this->params['lenient'] = 1;
        $this->params['phrase_slop'] = 10;
        $this->params['analyze_wildcard'] = 1;
        $this->params['auto_generate_phrase_queries'] = 0;
        $this->params['rewrite'] = "constant_score_default";
        $this->params['quote_analyzer'] = "standard";
        $this->params['quote_field_suffix'] = ".unstemmed";
        $this->params['use_dis_max'] = "true";
        $this->params['tie_breaker'] = 1;

        parent::__construct($hashMap);
    }

    public function toArray()
    {
        $ret = array (
  'query_string' =>
  array (
    'query' => $this->params["query"],
    'fields' => $this->params["fields"],
    'boost' => $this->params["boost"],
    'enable_position_increments' => $this->params["enable_position_increments"],
    'default_operator' => $this->params["default_operator"],
    'analyzer' => $this->params["analyzer"],
    'allow_leading_wildcard' => $this->params["allow_leading_wildcard"],
    'lowercase_expanded_terms' => $this->params["lowercase_expanded_terms"],
    'fuzzy_min_sim' => $this->params["fuzzy_min_sim"],
    'fuzzy_prefix_length' => $this->params["fuzzy_prefix_length"],
    'lenient' => $this->params["lenient"],
    'phrase_slop' => $this->params["phrase_slop"],
    'analyze_wildcard' => $this->params["analyze_wildcard"],
    'auto_generate_phrase_queries' => $this->params["auto_generate_phrase_queries"],
    'rewrite' => $this->params["rewrite"],
    'quote_analyzer' => $this->params["quote_analyzer"],
    'quote_field_suffix' => $this->params["quote_field_suffix"],
    'use_dis_max' => $this->params["use_dis_max"],
    'tie_breaker' => $this->params["tie_breaker"],
  ),
);

        return $ret;
    }

}

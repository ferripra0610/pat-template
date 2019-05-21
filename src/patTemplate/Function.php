<?php
/**
 * Base class for patTemplate functions
 *
 * @package     patTemplate
 * @subpackage  Functions
 * @author      Stephan Schmidt <schst@php.net>
 */

/**
 * Base class for patTemplate functions
 *
 * @abstract
 * @package     patTemplate
 * @subpackage  Functions
 * @author      Stephan Schmidt <schst@php.net>
 */
class patTemplate_Function extends patTemplate_Module
{
    /**
     * reader object
     *
     * @var    object
     */
    protected $_reader;

    /**
     * set the reference to the reader object
     *
     * @param    object patTemplate_Reader
     */
    public function setReader(&$reader)
    {
        $this->_reader = &$reader;
    }

    /**
     * call the function
     *
     * @abstract
     * @param    array   parameters of the function (= attributes of the tag)
     * @param    string  content of the tag
     * @return   string  content to insert into the template
     */
    public function call($params, $content)
    {
    }
}

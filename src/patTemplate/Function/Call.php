<?php
/**
 * patTemplate function that enables you to insert any
 * template, that has been loaded previously into the
 * current template.
 *
 * You may pass any variables to the template.
 *
 * @package     patTemplate
 * @subpackage  Functions
 * @author      Stephan Schmidt <schst@php.net>
 */

/**
 * template does not exist
 */
define('PATTEMPLATE_FUNCTION_CALL_ERROR_NO_TEMPLATE', 'patTemplate::Function::Call::NT');

/**
 * patTemplate function that enables you to insert any
 * template, that has been loaded previously into the
 * current template.
 *
 * You may pass any variables to the template.
 *
 * @package     patTemplate
 * @subpackage  Functions
 * @author      Stephan Schmidt <schst@php.net>
 */
class patTemplate_Function_Call extends patTemplate_Function
{
    /**
     * name of the function
     * @access   private
     * @var      string
     */
    private $_name = 'Call';

    /**
     * reference to the patTemplate object that instantiated the module
     *
     * @access   protected
     * @var  object
     */
    public $_tmpl;

    /**
     * set a reference to the patTemplate object that instantiated the reader
     *
     * @access   public
     * @param    object      patTemplate object
     */
    public function setTemplateReference(&$tmpl)
    {
        $this->_tmpl = &$tmpl;
    }

    /**
     * call the function
     *
     * @access   public
     * @param    array   parameters of the function (= attributes of the tag)
     * @param    string  content of the tag
     * @return   string  content to insert into the template
     */
    public function call($params, $content)
    {
        $tmpl = $params['template'];
        unset($params['template']);
        if (!$this->_tmpl->exists($tmpl)) {
            return patErrorManager::raiseError(PATTEMPLATE_FUNCTION_CALL_ERROR_NO_TEMPLATE, 'Template '.$tmpl.' does not exist');
        }

        /**
         * clear template and all of its dependencies
         */
        $this->_tmpl->clearTemplate($tmpl, true);

        /**
         * add variables
         */
        $this->_tmpl->addVars($tmpl, $params);
        $this->_tmpl->addVar($tmpl, 'CONTENT', $content);

        /**
         * get content
         */
        return $this->_tmpl->getParsedTemplate($tmpl);
    }
}

<?php
/**
 * Example that shows the use of variable modifiers
 *
 * patTemplate allows you to use any PHP function as
 * a variable modifier.
 * Furthermore, you may create custom modifiers, see
 * extending-pattemplate.txt for more information.
 *
 * $Id: example_var_modifier.php 216 2004-05-20 16:01:41Z schst $
 *
 * @author      Stephan Schmidt <schst@php-tools.net>
 * @package     patTemplate
 * @subpackage  Examples
 * @link        http://www.php-tools.net
 */
    error_reporting(E_ALL);

   /**
    * requires patErrorManager
    * make sure that it is in your include path
    */
    require_once('pat/patErrorManager.php');

   /**
    * main class
    */
    require_once '../patTemplate.php';

    $tmpl   =   &new patTemplate();
    $tmpl->setRoot('templates');

    $tmpl->readTemplatesFromInput('example_var_modifier.tmpl');

    $tmpl->addVar('page', 'sometext', 'This contains some special chars: < > & ���');

    $tmpl->addVar('page', 'multiline', 'This contains
 some
 line
 breaks...');

    $tmpl->addVar('page', 'wrap', 'This contains some very long text that should be be wrapped. Furthermore it contains a very long woooooooooooooooooooord.');

    $tmpl->addVar('page', 'wrap2', 'This contains some very long text that should be be wrapped. Furthermore it contains a very long woooooooooooooooooooord.');

    $tmpl->addVar('page', 'birthday', '1974-05-12');

    $tmpl->displayParsedTemplate();

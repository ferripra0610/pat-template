<?PHP
/**
 * patTemplate example that shows how to
 * use the 'varscope' attribute
 *
 * $Id: example_attributes_varscope.php 453 2007-05-30 12:58:43Z gerd $
 *
 * @author		Stephan Schmidt <schst@php-tools.net>
 * @package		patTemplate
 * @subpackage	Examples
 * @link		http://www.php-tools.de
 */

    /**
     * Main examples prepend file, needed *only* for the examples framework!
     */
    include_once 'patExampleGen/prepend.php';

    // EXAMPLE START ------------------------------------------------------

    /**
     * patErrorManager class
     */
    require_once $neededFiles['patErrorManager'];

    /**
     * patTemplate
     */
    require_once $neededFiles['patTemplate'];

	
	$tmpl	=	&new patTemplate();
	$tmpl->setRoot( 'templates' );
	
	$tmpl->readTemplatesFromInput( 'example_attributes_varscope.tmpl' );
	
	$tmpl->addVar( 'var_storage', 'title', 'The varscope attribute.' );
	
	$tmpl->displayParsedTemplate('page');
?>
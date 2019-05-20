<?PHP
/**
 * Example that shows the use of the comment tag
 *
 * The comment tag allows you to include documentation 
 * of your templates or HTML files that will not be displayed
 * to the end user in the browser.
 *
 * $Id: example_api_loadtemplate.php 453 2007-05-30 12:58:43Z gerd $
 *
 * @author		Stephan Schmidt <schst@php-tools.net>
 * @package		patTemplate
 * @subpackage	Examples
 * @link		http://www.php-tools.net
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

	$tmpl->readTemplatesFromInput( 'example_api_loadtemplate.tmpl' );
	
	$tmpl->setAttribute( 'main', 'src', 'example_api_loadtemplate_main.tmpl' );

	$tmpl->loadTemplate( 'main' );
	
	$tmpl->dump();
?>

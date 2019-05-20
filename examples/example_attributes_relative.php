<?PHP
/**
 * Example that shows how to use relative paths in
 * external templates
 *
 * $Id: example_attributes_relative.php 453 2007-05-30 12:58:43Z gerd $
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

	$tmpl->readTemplatesFromInput( 'relative/example_attributes_relative.tmpl' );

	$tmpl->displayParsedTemplate();
?>
<?PHP
/**
 * Example that shows the use of the unusedvars attribute
 *
 * $Id: example_attributes_loop.php 467 2008-01-16 16:27:18Z gerd $
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

	$tmpl->readTemplatesFromInput( 'example_attributes_loop.tmpl' );

	$heroes = array( 'Superman', 'Batman', 'Green Lantern', 'Robin', 'Wonder Woman', 'Powergirl' );
	$tmpl->addVar( 'row', 'hero', $heroes );

    $tmpl->addVar( 'list', 'hero', $heroes );
    $tmpl->addVar( 'list', 'rows', 8 );
	
    $tmpl->addVar( 'list2', 'hero', $heroes );
    $tmpl->addGlobalVar( 'global_rows', 19 );
	$tmpl->displayParsedTemplate();
?>

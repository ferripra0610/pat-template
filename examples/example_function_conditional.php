<?PHP
/**
 * patTemplate example that shows how to use template functions
 * 
 * Template functions allow you to create custom tags, that will be
 * by PHP while the file is being read. See extending-pattemplate.txt
 * for more information on patTemplate functions.
 *
 * $Id: example_function_conditional.php 454 2007-05-30 15:34:37Z gerd $
 *
 * @author		Stephan Schmidt <schst@php-tools.net>
 * @author      gERD Schaufelberger <gerd@php-tools.net>
 * @package		patTemplate
 * @subpackage	Examples
 * @link		http://www.php-tools.net
 * @see			patTemplate_Function
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
    
	$tmpl	=	&new patTemplate( );

    // tell patTemplate where to find custom functions
	$tmpl->addModuleDir( 'Function', dirname( __FILE__ ) . '/functions' );

	$tmpl->setRoot( 'templates' );

    // caching is switched on here - just to show that the funtion will be called anyways
    $tmpl->useTemplateCache( 'File', array(
                                        'cacheFolder' => './tmplCache',
                                        'lifetime'    => 'auto',
                                        'filemode'    => 0644 ) );

                                        

    // do some normal templating stuff here                                        
    $tmpl->readTemplatesFromInput( 'example_function_conditional.tmpl' );
    $tmpl->addVar( 'cond', 'hero', 'batman' );

	$tmpl->displayParsedTemplate();
?>
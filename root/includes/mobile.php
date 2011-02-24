<?php
/**
*
* @package phpBB3
* @version $Id$
* @copyright (c) 2005 phpBB Group, sections (c) 2001 ispi of Lincoln Inc
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
*
*/

/**
* @ignore
*/
if (!defined('IN_PHPBB'))
{
	exit;
}

/**
 * In this file we check whether the user has submitted a request to view the desktop style.
 * If they want to view the desktop style, set a cookie so that it is remembered.
 * 
 * TODO: Custom profile fields. Add them.
 */

if (request_var('mobile_disable', (bool) false))
{
	$user->set_cookie('mobile', 0, time() + 604800);
}

?>
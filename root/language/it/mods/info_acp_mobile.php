<?php
/**
*
* phpBB Mobile [Italian]
*
* @author Carlo (carlino1994 on phpBB.com) http://www.phpbbitalia.net/
*
*
* @package acp
* @version $Id$
* @copyright (c) 2010 Callum Macrae
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
*
*/

/**
* DO NOT CHANGE
*/
if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

// DEVELOPERS PLEASE NOTE
//
// All language files should use UTF-8 as their encoding and the files must not contain a BOM.
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine

$lang = array_merge($lang, array(
	'ACP_MOBILE'			=> 'phpBB Mobile',
	'ACP_MOBILE_EXPLAIN'	=> 'phpBB Mobile è una modifica completamente automatica che, quando un utente accede al tuo forum usando un dispositivo mobile, invia ad essi una versione ottimizzata per i dispositivi mobili del forum. Lo stile è stato creato usando iWebKit, perciò designato per dispositivi iOS, quali iPhone e iPad, ma funziona anche con altri cellulari con browser basatisu webkit o browser che supportano css3. Ciò significa che funziona per Android, BlackBerry, ecc.<br /><br />Sebbene è automatica, puoi trovare alcune impostazioni di configurazione: possibilità di disabilitare e la possibilità di cambiare il regex che la MOD deve cercare nei dispositivi. Non cambiare il regex se non sai cosa tu stia facendo.',
	'MOBILE_CHANGE'			=> 'Impostazioni phpBB Mobile cambiate',
	'EDIT_MOBILE'			=> 'Modifica impostazioni phpBB Mobile:',
	'MOBILE_ENABLED'		=> 'phpBB Mobile abilitato?',
	'MOBILE_AGENTS'			=> 'User agent regex',
));

?>
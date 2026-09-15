<?php
/*
+---------------------------------------------------------------+
|        e107 website content management system Czech Language File
|        Released under the terms and conditions of the
|        GNU General Public License (http://gnu.org).
|        Last Modified: 2026/09/15 11:11:56
|
|        $URL: https://github.com/e107sk/Czech $
|        $Revision: 2.4.0 $
|        $Author: Oxigen $
+---------------------------------------------------------------+
*/
 
 /**
 *	e107 Alternate authorisation plugin
 *
 *	@package	e107_plugins
 *	@subpackage	alt_auth
 *	@version 	$Id$;
 */

// Some password-related strings moved to admin_alt_auth.php for generic use
//define('IMPORTDB_LAN_1', 'Database type');
//define('IMPORTDB_LAN_2', 'Plain Text');
//define('IMPORTDB_LAN_3', 'Joomla salted');
//define('IMPORTDB_LAN_4', 'Mambo salted');
//define('IMPORTDB_LAN_5', 'SMF (SHA1)');
//define('IMPORTDB_LAN_6', 'Generic SHA1');
//define('IMPORTDB_LAN_7', 'MD5 (E107 original)');
//define('IMPORTDB_LAN_8', 'E107 salted (option 2.0 on)');

return [
    'IMPORTDB_LAN_9' => "Metoda hesla:",
    'IMPORTDB_LAN_10' => "Konfigurace typu heslo importované databáze",
    'IMPORTDB_LAN_11' => "Tato možnost je použít, když jste importovali nějaké jiné uživatele se systémem do E107. 
							To umožňuje přijímat hesla ve vybraném nestandardního formátu. 
							Každé user\ heslo jsou převedeny do formátu E107, když se přihlásíte.",
    'LAN_AUTHENTICATE_HELP' => "Tato metoda ověřování je být použity <i>pouze</i> , když jste importovali databáze uživatelů do E107, a heslo je v nekompatibilním formátu. Původní heslo je čtení z místní databáze a ověřena formát ukládání původního systému. Pokud to ověřuje, jeho převedeny na aktuální E107-kompatibilním formátu a uložené v databázi. Po chvíli programy lze obvykle zakázat plugin alt-auth, vzhledem k tomu, že aktivní uživatelé budou mít svá hesla uložená v kompatibilním formátu.",
];

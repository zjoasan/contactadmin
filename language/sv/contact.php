<?php
/**
*
* Contact admin extension for the phpBB Forum Software package.
*
* @copyright 2016 Rich McGirr (RMcGirr83)
* @license GNU General Public License, version 2 (GPL-2.0)
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
	$lang = [];
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
//
// Some characters you may want to copy&paste:
// ’ » “ ” …
//

$lang = array_merge($lang, [
	'ACP_CAT_CONTACTADMIN'		=> 'Kontakta Admin',
	'ADD_ATTACHMENT_EXPLAIN'	=> 'Om du vill bifoga en fil ange detaljerna nedan.',
	'CONTACT_ERROR'			=> 'På grund av ett konfigurationsfel kan du inte använda kontaktformuläret för tillfället. Ett e-postmeddelande har skickats till administratören.',
	'CONTACT_NONE'			=> 'Användaren %1$s försökte använda tillägget "Contact Admin" på %2$s för att skicka en %3$s, men det finns inga administratörer som tillåter %3$ss av användare. Gå igenom konfigurationssidan för "Contact Admin"-tillägg i adminpanelen för forumet %4$s och välj en annan metod.',
	'CONTACT_BOT_SUBJECT'		=> '"Contact Admin"-tilläggs fel',
	'CONTACT_BOT_MESSAGE'	=> 'Användaren %1$s försökte använda tillägget "Contact Admin" vid %2$s, men %3$s som valts i konfigurationen är felaktiga. Besök forumet %4$s och välj en annan %3$s i inställningarna för tillägget "Contact Admin".',
	'CONTACT_CONFIRM'			=> 'Bekröfta',
	'CONTACT_DISABLED'			=> 'Kontaktformuläret är för tillfället inaktiverat.',
	'CONTACT_MAIL_DISABLED'		=> 'Det är ett fel med konfigurationen av kontaktsidan. Den är inställd för att skicka e-post men forumkonfigurationen är inte inställd för att skicka e-post. Vänligen meddela %sBoard Administrator%s',
	'CONTACT_MSG_SENT'			=> 'Meddelandet skickades',
	'CONTACT_NO_MSG'			=> 'Du skrev inget meddelande',
	'CONTACT_NO_SUBJ'			=> 'Du angav inget ämne',
	'CONTACT_REASON'			=> 'Orsak',
	'CONTACT_TEMPLATE'			=> '[b]Namn:[/b] %1$s' . "\n" . '[b]E-postadress:[/b] %2$s' . "\n" . '[b]IP:[/b] %3$s' . "\n" . '[b]Ämne:[/b] %4$s' . "\n" . '[b]Har skickat följande meddelande via kontaktformuläret:[/b] %5$s',
	'CONTACT_TITLE'				=> 'Kontakta administrationen',

	'CONTACT_YOUR_NAME'			=> 'Ditt namn',
	'CONTACT_YOUR_NAME_EXPLAIN'	=> 'Ange ditt namn så meddelandet har en identitet.',
	'CONTACT_YOUR_EMAIL'		=> 'Ange din e-postadress',
	'CONTACT_YOUR_EMAIL_EXPLAIN'	=> 'Ange en giltig e-postadress så vi kan kontakta dig.',
	'CONTACT_YOUR_EMAIL_CONFIRM'	=> 'Verifiera e-postadressen',
	'WRONG_DATA_EMAIL'			=> 'Angivna e-postadresser stämmer inte',

	'TOO_MANY_CONTACT_TRIES'	=> 'Du har överskridit antalet försök för denna session. Prova igen senare.',
	'CONTACT_NO_NAME'			=> 'Du angav inte ett namn',
	'FORUM'						=> 'forum',
	'USER'						=> 'användare',
	'CONTACT_REGISTERED'		=> 'Registrerad användare',
	'CONTACT_GUEST'				=> 'gäst användare',

	'REASON_EXPLAIN'			=> 'Välj en anledning',
	'REASON_ERROR'				=> 'Välj ett lämpligt skäl',
	'RETURN_CONTACT'			=> '%sÅtergå till kontaktsidan%s',
	'CONTACT_PRIVACYPOLICY'				=> 'Integritetspolicy',
	'CONTACT_PRIVACYPOLICY_EXPLAIN'		=> 'Jag tillåter forumägaren att lagra och behandla det angivna namnet, e-postadressen, meddelandetexten och min IP-adress enligt forumets <a target="_blank" title="Privacy policy link" href="%s">Integritetspolicy</a>',
	'CONTACT_PRIVACYPOLICY_ERROR'		=> 'Utan din bekräftelse av integritetspolicy kommer du inte att kunna skicka ett meddelande till oss.',
]);

<?php
/**
*
* Contact Admin extension for the phpBB Forum Software package.
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
	'ADMINS_NOT_EXIST_FOR_METHOD'	=> [
		0 => 'Det finns inga administratörer som tillåter e-post. Du måste välja ett annat kontaktsätt.',
		2 => 'Det finns inga administratörer som tillåter privata meddelanden. Du måste välja ett annat kontaktsätt.',
	],
	'CONTACT_CONFIG_SAVED'			=> 'Inställningarna för "Contact Admin" har uppdaterats',
	'CONTACT_ACP_CONFIRM'				=> 'Aktivera spamskydd',
	'CONTACT_ACP_CONFIRM_EXPLAIN'		=> 'Om du aktiverar det här alternativet kommer forumets "spam"-skydd att visas.<br>Detta är för att förhindra missbruk. Observera att det här alternativet endast är för kontaktsidan. Det påverkar inte andra visuella bekräftelseinställningar.',
	'CONTACT_ATTACHMENTS'				=> 'Bilagor tillåtna',
	'CONTACT_ATTACHMENTS_EXPLAIN'		=> 'Om bilagor är tillåtna i inlägg till forumet och privata meddelanden.<br>Använder tillägget "Conract admin" samma konfiguration för tillåtna bilagor som forumet.<br><span style="color:red;">Gäller dock inte för medelande via "E-post".</span>',
	'CONTACT_CONFIRM_GUESTS'			=> 'Spam-skydd, enbart för gäster',
	'CONTACT_CONFIRM_GUESTS_EXPLAIN'	=> 'Om detta är aktiverat visas "spam"-skyddet endast för gäster (om "spam"-skyddet är aktiverat).',
	'CONTACT_FOUNDER'					=> 'Kontakta bara forumets grundare',
	'CONTACT_FOUNDER_EXPLAIN'			=> 'Om det är inställt kommer bara grundaren av forumet att få e-post- eller PM-aviseringar.',

	'CONTACT_MAX_ATTEMPTS'				=> 'Max tillåtna bekräftelseförsök m',
	'CONTACT_MAX_ATTEMPTS_EXPLAIN'		=> 'How many times may a user attempt to enter the correct confirmation image?<br>Enter 0 for unlimited attempts.',
	'CONTACT_METHOD'					=> 'Kontaktmetod',
	'CONTACT_METHOD_EXPLAIN'			=> 'How do you want users to be able to make contact.<br><span style="color:red;">If set as “EMail” then attachments do not apply.</span>',
	'CONTACT_REASONS'					=> 'Kontaktskäl',
	'CONTACT_REASONS_EXPLAIN'			=> 'Enter reasons for contacting, separated by new lines.<br>If you don’t want to use this feature, leave this field empty.',
	// Bot config options
	'CONTACT_BOT_FORUM'				=> 'Contact bot forum',
	'CONTACT_BOT_FORUM_EXPLAIN'		=> 'Select the forum, where the contact bot should post to, if the contact method is set to “Forum post”.',
	'CONTACT_BOT_POSTER'			=> 'Bot as Poster',
	'CONTACT_BOT_POSTER_EXPLAIN'	=> 'If set PM’s and posts will seem to come from the contact bot user chosen above based on the settings here. If “Neither” is selected then the bot is not used as the poster.  Posts and PM’s will be posted based on the information entered in the contact form.',
	'CONTACT_BOT_USER'				=> 'Contact bot user',
	'CONTACT_BOT_USER_EXPLAIN'		=> 'Select the user that messages will be posted under if the contact method is set to “Private Message” or “Forum Post”.',
	'CONTACT_NO_BOT_USER'			=> '<b>The contact bot user id chosen does not exist</b>',
	'CONTACT_USERNAME_CHK'			=> 'Check Username',
	'CONTACT_USERNAME_CHK_EXPLAIN'	=> 'If set yes, the user’s name that is entered will be checked against those in the database. If the name is found the user will be presented with an error and asked to input a different user name.',
	'CONTACT_EMAIL_CHK'				=> 'Check Email',
	'CONTACT_EMAIL_CHK_EXPLAIN'		=> 'If set yes, the user’s email address will be checked against those in the database. If the email address is found the user will be presented with an error and asked to input a different email address.',

	// Contact methods
	'CONTACT_METHOD_EMAIL'			=> 'E-post',
	'CONTACT_METHOD_PM'				=> 'Direkt meddelande',
	'CONTACT_METHOD_POST'			=> 'Forum post',
	'CONTACT_METHOD_BOARD_DEFAULT'	=> 'Forumets e-post adress',

	// Contact posters...user bot
	'CONTACT_POST_NEITHER'			=> 'Neither',
	'CONTACT_POST_GUEST'			=> 'Guests only',
	'CONTACT_POST_ALL'				=> 'Everyone',

	// Overwrite the default contact page lang
	'CONTACT_EXTENSION_ACTIVE'	=> '<span style="color:red;">The settings here will not matter as you currently have the contact admin extension enabled. You will not be able to set this to enabled without first disabling the extension</span>',
	'CONTACT_GDPR'	=> 'GDPR',
	'CONTACT_GDPR_EXPLAIN' => 'If set yes, the user will be presented with a check box to acknowledge the boards privacy policy. The box must be checked for the contact form to be submitted.',
	'EMAIL_NOT_CONFIGURED' => 'Email isn’t configured for the board, please make a different selection for the contact method.',
]);

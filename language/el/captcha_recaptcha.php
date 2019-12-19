<?php
/**
*
* This file is part of the phpBB Forum Software package.
*
* @copyright (c) phpBB Limited <https://www.phpbb.com>
* @license GNU General Public License, version 2 (GPL-2.0)
*
* For full copyright and license information, please see
* the docs/CREDITS.txt file.
*
* Ελληνική μετάφραση από την ομάδα του phpbbgr.com
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
	'RECAPTCHA_LANG'				=> 'el', // Find the language/country code on https://developers.google.com/recaptcha/docs/language - If no code exists for your language you can use "en" or leave the string empty
	'RECAPTCHA_NOT_AVAILABLE'		=> 'Για να χρησιμοποιήσετε το reCaptcha πρέπει να δημιουργήσετε ένα λογαριασμό στο <a href="http://www.google.com/recaptcha">www.google.com/recaptcha</a>.',
	'CAPTCHA_RECAPTCHA'				=> 'reCaptcha',
	'RECAPTCHA_INCORRECT'			=> 'Η λύση που υποβάλετε ήταν λανθασμένη',
	'RECAPTCHA_NOSCRIPT'			=> 'Παρακαλούμε ενεργοποιήστε το JavaScript στον περιηγητή σας για να φορτώσετε αυτή την πρόκληση.', //Please enable JavaScript in your browser to load the challenge.

	'RECAPTCHA_PUBLIC'				=> 'Κλειδί ιστοτόπου',
	'RECAPTCHA_PUBLIC_EXPLAIN'		=> 'Το κλειδί reCaptcha του ιστοτόπου σας. Κλειδιά μπορούν να αποκτηθούν από το <a href="http://www.google.com/recaptcha">www.google.com/recaptcha</a>. Παρακαλώ, χρησιμοποιήστε το reCAPTCHA v2 &gt; Αόρατος τύπος σήματος reCAPTCHA.',
	'RECAPTCHA_PRIVATE'				=> 'Μυστικό κλειδί',
	'RECAPTCHA_PRIVATE_EXPLAIN'		=> 'Το μυστικό σας κλειδί reCaptcha. Κλειδιά μπορούν να αποκτηθούν από το <a href="http://www.google.com/recaptcha">www.google.com/recaptcha</a>. Παρακαλώ, χρησιμοποιήστε το reCAPTCHA v2 &gt; Αόρατος τύπος σήματος reCAPTCHA.',

	'RECAPTCHA_INVISIBLE'			=> 'Αυτό το CAPTCHA είναι αόρατο. Για να επιβεβαιώσετε ότι λειτουργεί, ένα μικρό εικονίδιο πρέπει να εμφανιστεί στην κάτω δεξιά γωνία της σελίδας.',
));

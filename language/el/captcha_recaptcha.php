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

$lang = array_merge($lang, [
	// Find the language/country code on https://developers.google.com/recaptcha/docs/language
	// If no code exists for your language you can use "en" or leave the string empty
	'RECAPTCHA_LANG'				=> 'el',

	'CAPTCHA_RECAPTCHA'				=> 'reCaptcha v2',
	'CAPTCHA_RECAPTCHA_V3'			=> 'reCaptcha v3',

	'RECAPTCHA_INCORRECT'				=> 'Η λύση που υποβάλατε ήταν λανθασμένη',
	'RECAPTCHA_NOSCRIPT'				=> 'Παρακαλούμε ενεργοποιήστε τη JavaScript στον περιηγητή σας για να φορτώσετε αυτή την πρόκληση.',
	'RECAPTCHA_NOT_AVAILABLE'			=> 'Για να χρησιμοποιήσετε το reCaptcha, πρέπει να δημιουργήσετε ένα λογαριασμό στο <a href="https://www.google.com/recaptcha">www.google.com/recaptcha</a>.',
	'RECAPTCHA_INVISIBLE'				=> 'Αυτό το CAPTCHA είναι αόρατο. Για να ελέγξετε αν λειτουργεί, ένα μικρό εικονίδιο πρέπει να εμφανίζεται στην κάτω δεξιά γωνία αυτής της σελίδας.',
	'RECAPTCHA_V3_LOGIN_ERROR_ATTEMPTS'	=> 'Έχετε υπερβεί το μέγιστο αριθμό προσπαθειών σύνδεσης.<br>Επιπρόσθετα από το όνομα χρήστη σας και τον κωδικό σας, θα χρησιμοποιηθεί το αόρατο reCAPTCHA v3 για επαλήθευση της συνεδρίας σας.',

	'RECAPTCHA_PUBLIC'				=> 'Κλειδί ιστοτόπου',
	'RECAPTCHA_PUBLIC_EXPLAIN'		=> 'Το κλειδί reCaptcha του ιστοτόπου σας. Κλειδιά μπορούν να αποκτηθούν από το <a href="https://www.google.com/recaptcha">www.google.com/recaptcha</a>. Παρακαλώ, χρησιμοποιήστε το reCAPTCHA v2 &gt; Αόρατος τύπος σήματος reCAPTCHA.',
	'RECAPTCHA_V3_PUBLIC_EXPLAIN'	=> 'Το κλειδί reCaptcha του ιστοτόπου σας. Κλειδιά μπορούν να αποκτηθούν από το <a href="https://www.google.com/recaptcha">www.google.com/recaptcha</a>. Παρακαλώ, χρησιμοποιήστε το reCAPTCHA v3.',
	'RECAPTCHA_PRIVATE'				=> 'Μυστικό κλειδί',
	'RECAPTCHA_PRIVATE_EXPLAIN'		=> 'Το μυστικό σας κλειδί reCAPTCHA. Κλειδιά μπορούν να αποκτηθούν από το <a href="https://www.google.com/recaptcha">www.google.com/recaptcha</a>. Παρακαλώ, χρησιμοποιήστε το reCAPTCHA v2 &gt; Αόρατος τύπος σήματος reCAPTCHA.',
	'RECAPTCHA_V3_PRIVATE_EXPLAIN'	=> 'Το μυστικό σας κλειδί reCAPTCHA. Κλειδιά μπορούν να αποκτηθούν από το <a href="https://www.google.com/recaptcha">www.google.com/recaptcha</a>. Παρακαλώ, χρησιμοποιήστε το reCAPTCHA v3.',

	'RECAPTCHA_V3_DOMAIN'				=> 'Όνομα χώρου αιτήματος',
	'RECAPTCHA_V3_DOMAIN_EXPLAIN'		=> 'Το όνομα χώρου που θα εκτελείται το script και θα χρησιμοποιείται για την επαλήθευση του αιτήματος.<br>Χρησιμοποιήστε το <samp>recaptcha.net</samp> όταν το <samp>google.com</samp> δεν λειτουργεί.',

	'RECAPTCHA_V3_METHOD'				=> 'Μέθοδος αιτήματος',
	'RECAPTCHA_V3_METHOD_EXPLAIN'		=> 'Η μέθοδος που θα χρησιμοποιείται για την επαλήθευση του αιτήματος.<br>Οι απενεργοποιημένες επιλογές δεν είναι διαθέσιμες για τη δική σας εγκατάσταση.',
	'RECAPTCHA_V3_METHOD_CURL'			=> 'cURL',
	'RECAPTCHA_V3_METHOD_POST'			=> 'POST',
	'RECAPTCHA_V3_METHOD_SOCKET'		=> 'Socket',

	'RECAPTCHA_V3_THRESHOLD_DEFAULT'			=> 'Προεπιλεγμένο όριο',
	'RECAPTCHA_V3_THRESHOLD_DEFAULT_EXPLAIN'	=> 'Χρησιμοποιείται όταν καμία από τις άλλες ενέργειες δεν μπορούν να εφαρμοστούν.',
	'RECAPTCHA_V3_THRESHOLD_LOGIN'				=> 'Όριο σύνδεσης',
	'RECAPTCHA_V3_THRESHOLD_POST'				=> 'Όριο δημοσίευσης',
	'RECAPTCHA_V3_THRESHOLD_REGISTER'			=> 'Όριο εγγραφής',
	'RECAPTCHA_V3_THRESHOLD_REPORT'				=> 'Όριο αναφοράς',
	'RECAPTCHA_V3_THRESHOLDS'					=> 'Όρια',
	'RECAPTCHA_V3_THRESHOLDS_EXPLAIN'			=> 'Το reCAPTCHA v3 επιστρέφει ένα σκορ (<samp>1.0</samp> είναι πιθανή μια καλή ενέργεια, <samp>0.0</samp> είναι πιθανό να είναι bot). Εδώ μπορείτε να ορίσετε το ελάχιστο σκορ για κάθε ενέργεια.',
	'EMPTY_RECAPTCHA_V3_REQUEST_METHOD'			=> 'Το reCAPTCHA v3 απαιτεί να γνωρίζει ποιά διαθέσιμη μέθοδο θέλετε να χρησιμοποιήσετε όταν πιστοποιείται το αίτημα.',
]);

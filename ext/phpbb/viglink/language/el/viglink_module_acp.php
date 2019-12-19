<?php
/**
 *
 * VigLink extension for the phpBB Forum Software package.
 *
 * @copyright (c) 2014 phpBB Limited <https://www.phpbb.com>
 * @license GNU General Public License, version 2 (GPL-2.0)
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
//
// Some characters you may want to copy&paste:
// ’ » “ ” …
//

$lang = array_merge($lang, array(
	'ACP_VIGLINK_SETTINGS'			=> 'Ρυθμίσεις VigLink',
	'ACP_VIGLINK_SETTINGS_EXPLAIN'	=> 'Το VigLink είναι μια εξωτερική υπηρεσία που αποτιμά διακριτικά τους συνδέσμους που δημοσιεύουν οι χρήστες του συστήματός σας, χωρίς να επηρεάζει την εμπειρία χρήσης. Όταν οι χρήστες πατήσουν τον εξωτερικό σύνδεσμο για προϊόντα ή υπηρεσίες και αγοράσουν κάτι, πληρώνεται ένα αντίτιμο από τους εμπόρους στο VigLink, από το οποίο, μέρος του δίνεται ως προσφορά στο έργο του phpBB. Επιλέγοντας να ενεργοποιήσετε το VigLink όπου δίνεται μια δωρεά στο phpBB, βοηθάτε στην υποστήριξη του οργανισμού μας που προάγει τον ανοιχτό κώδικα και εξασφαλίζεται η οικονομική ασφάλειά μας.',
	'ACP_VIGLINK_SETTINGS_CHANGE'	=> 'Μπορείτε να αλλάξετε αυτές τις ρυθμίσεις οποιαδήποτε στιγμή από τον πίνακα “<a href="%1$s">Ρυθμίσεις VigLink</a>”.',
	'ACP_VIGLINK_SUPPORT_EXPLAIN'	=> 'Δεν θα προωθείστε σε αυτή τη σελίδα από τη στιγμή που θα υποβάλετε τις επιλογές παρακάτω, κάνοντας κλικ στο κουμπί Υποβολή.',
	'ACP_VIGLINK_ENABLE'			=> 'Ενεργοποίηση VigLink',
	'ACP_VIGLINK_ENABLE_EXPLAIN'	=> 'Ενεργοποιεί την χρήση των υπηρεσιών VigLink.',
	'ACP_VIGLINK_EARNINGS'			=> 'Διεκδικήστε τα δικά σας κέρδη (προαιρετικό)',
	'ACP_VIGLINK_EARNINGS_EXPLAIN'  => 'Μπορείτε να διεκδικήσετε τα δικά σας κέρδη κάνοντας εγγραφή στο VigLink.',
	'ACP_VIGLINK_DISABLED_PHPBB'	=> 'Οι υπηρεσίες VigLink έχουν απενεργοποιηθεί από το phpBB.',
	'ACP_VIGLINK_CLAIM'				=> 'Διεκδικήστε τα κέρδη σας',
	'ACP_VIGLINK_CLAIM_EXPLAIN'		=> 'Μπορείτε να διεκδικήσετε τα κέρδη του φόρουμ σας από τους αποτιμημένους συνδέσμους του VigLink, αντί να αποδίδονται ως δωρεά στο έργο του phpBB. Για να διαχειριστείτε τις ρυθμίσεις του λογαριασμού σας, κάντε ένα λογαριασμό “VigLink Convert” πατώντας στο “Αλλαγή λογαριασμού”.',
	'ACP_VIGLINK_CONVERT_ACCOUNT'	=> 'Αλλαγή λογαριασμού',
	'ACP_VIGLINK_NO_CONVERT_LINK'	=> 'Ο σύνδεσμος αλλαγής λογαριασμού του VigLink δεν μπορεί να ανακτηθεί.',
));

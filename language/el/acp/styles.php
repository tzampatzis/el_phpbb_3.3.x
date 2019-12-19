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
	'ACP_STYLES_EXPLAIN'						=> 'Εδώ μπορείτε να διαχειριστείτε τα στυλ που είναι διαθέσιμα στον πίνακα συζητήσεών σας.<br>Παρακαλώ σημειώστε ότι δεν μπορείτε να απεγκαταστήσετε το στύλ “<strong>prosilver</strong>” διότι είναι το προεπιλεγμένο και γονικό στύλ του phpBB.',

	'CANNOT_BE_INSTALLED'						=> 'Δεν μπορεί να εγκατασταθεί',
	'CONFIRM_UNINSTALL_STYLES'					=> 'Είστε σίγουρος (-η) ότι επιθυμείτε να διαγράψετε τα επιλεγμένα στυλ;',
	'COPYRIGHT'									=> 'Πνευματικά δικαιώματα',

	'DEACTIVATE_DEFAULT'						=> 'Δεν μπορείτε να απενεργοποιήσετε το προεπιλεγμένο στυλ.',
	'DELETE_FROM_FS'							=> 'Διαγράψτε από το σύστημα αρχείων',
	'DELETE_STYLE_FILES_FAILED'					=> 'Λάθος κατά τη διαγραφή αρχείων του στυλ "%s".',
	'DELETE_STYLE_FILES_SUCCESS'				=> 'Τα αρχεία για το στυλ "%s" έχουν διαγραφεί.',
	'DETAILS'									=> 'Λεπτομέρειες',

	'INHERITING_FROM'							=> 'Κληρονομεί από',
	'INSTALL_STYLE'								=> 'Εγκατάσταση στυλ',
	'INSTALL_STYLES'							=> 'Εγκατάσταση στυλ',
	'INSTALL_STYLES_EXPLAIN'					=> 'Εδώ μπορείτε να εγκαταστήσετε νέα στυλ. Εάν δεν μπορείτε να βρείτε ένα συγκεκριμένο στυλ στην παρακάτω λίστα, ελέγξτε για να βεβαιωθείτε ότι το στυλ είναι ήδη εγκατεστημένο. Αν δεν είναι εγκατεστημένο, ελέγξτε αν αυτό έχει φορτωθεί σωστά.',
	'INVALID_STYLE_ID'							=> 'Άκυρη ταυτότητα (ID) στυλ.',

	'NO_MATCHING_STYLES_FOUND'					=> 'Δεν υπάρχουν στυλ που ταιριάζουν στο ερώτημα σας.',
	'NO_UNINSTALLED_STYLE'						=> 'Δεν ανιχνεύθηκαν μη εγκατεστημένα στυλ.',

	'PURGED_CACHE'								=> 'Η λανθάνουσα μνήμη έχει αδειάσει.',

	'REQUIRES_STYLE'							=> 'Αυτό το στυλ απαιτεί το στυλ "%s" να είναι ήδη εγκατεστημένο.',

	'STYLE_ACTIVATE'							=> 'Ενεργοποίηση',
	'STYLE_ACTIVE'								=> 'Ενεργό',
	'STYLE_DEACTIVATE'							=> 'Απενεργοποίηση',
	'STYLE_DEFAULT'								=> 'Κάνετε προεπιλεγμένο στυλ',
	'STYLE_DEFAULT_CHANGE_INACTIVE'				=> 'Πρέπει να ενεργοποιήσετε το στυλ πριν το κάνετε προεπιλεγμένο στυλ.',
	'STYLE_ERR_INVALID_PARENT'					=> 'Μη έγκυρο γονικό στυλ.',
	'STYLE_ERR_NAME_EXIST'						=> 'Ένα στυλ με αυτό το όνομα υπάρχει ήδη.',
	'STYLE_ERR_STYLE_NAME'						=> 'Θα πρέπει να παράσχετε ένα όνομα για αυτό το στυλ.',
	'STYLE_INSTALLED'							=> 'Το στυλ "%s" έχει εγκατασταθεί.',
	'STYLE_INSTALLED_RETURN_INSTALLED_STYLES'	=> 'Επιστροφή στη λίστα εγκατεστημένων στυλ.',
	'STYLE_INSTALLED_RETURN_UNINSTALLED_STYLES'	=> 'Εγκαταστήστε περισσότερα στυλ.',
	'STYLE_NAME'								=> 'Όνομα στυλ',
	'STYLE_NAME_RESERVED'						=> 'Το στυλ "%s" δεν μπορεί να εγκατασταθεί επειδή το όνομα είναι δεσμευμένο.',
	'STYLE_NOT_INSTALLED'						=> 'Το στυλ "%s" δεν εγκαταστάθηκε.',
	'STYLE_PATH'								=> 'Διαδρομή στυλ:',
	'STYLE_UNINSTALL'							=> 'Απεγκατάσταση',
	'STYLE_UNINSTALL_DEPENDENT'					=> 'Το στυλ "%s" δεν μπορεί να απεγκατασταθεί επειδή κληρονομείται από ένα ή περισσότερα άλλα στυλ.',
	'STYLE_UNINSTALLED'							=> 'Το στυλ "%s" απεγκαταστάθηκε με επιτυχία',
	'STYLE_PHPBB_VERSION'						=> 'Έκδοση phpBB',
	'STYLE_USED_BY'								=> 'Χρησιμοποιείται από (συμπεριλαμβανομένων των robots)',
	'STYLE_VERSION'								=> 'Έκδοση στύλ',

	'UNINSTALL_PROSILVER'						=> 'Δε μπορείτε να καταργήσετε το στύλ “prosilver”.',
	'UNINSTALL_DEFAULT'							=> 'Δεν μπορείτε να καταργήσετε το προεπιλεγμένο στυλ.',
	
	'BROWSE_STYLES_DATABASE'					=> 'Περιήγηση στη βάση δεδομένων στυλ',
]);

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

// Database Backup/Restore
$lang = array_merge($lang, array(
	'ACP_BACKUP_EXPLAIN'	=> 'Εδώ μπορείτε να δημιουργήσετε αντίγραφα ασφαλείας όλων των δεδομένων που σχετίζονται με το phpBB σας. Το αρχείο που θα προκύψει θα αποθηκευτεί στον φάκελο <samp>store/</samp>. Ανάλογα με τις ρυθμίσεις του εξυπηρετητή σας, μπορεί να έχετε τη δυνατότητα να συμπιέσετε το αρχείο σε διάφορες μορφές.',
	'ACP_RESTORE_EXPLAIN'	=> 'Αυτό θα εκτελέσει μια πλήρη επαναφορά, όλων των πινάκων phpBB από ένα αποθηκευμένο αρχείο. Εάν ο διακομιστής σας το υποστηρίζει, μπορείτε να χρησιμοποιήσετε ένα συμπιεσμένο αρχείο κειμένου gzip ή bzip2 και αυτό θα αποσυμπιεστεί αυτόματα. <strong>ΠΡΟΕΙΔΟΠΟΙΗΣΗ</strong> Αυτό θα αντικαταστήσει οποιαδήποτε υφιστάμενα δεδομένα. Η επαναφορά μπορεί να διαρκέσει πολύ χρόνο για να διεκπεραιωθεί, παρακαλούμε μη μετακινηθείτε από αυτή τη σελίδα μέχρι να ολοκληρωθεί. Τα αντίγραφα ασφαλείας είναι αποθηκευμένα στον φάκελο <samp>store/</samp> και υποτίθεται ότι έχουν δημιουργηθεί από τη λειτουργία δημιουργίας αντιγράφων ασφαλείας του phpBB. Επαναφορά αντιγράφων ασφαλείας που δεν έχουν δημιουργηθεί με το ενσωματωμένο σύστημα ενδεχομένως να μην λειτουργήσουν.',

	'BACKUP_DELETE'			=> 'Το αρχείο του αντιγράφου ασφαλείας διαγράφηκε με επιτυχία.',
	'BACKUP_INVALID'		=> 'Το επιλεγμένο αρχείο αντιγράφου ασφαλείας δεν είναι έγκυρο.',
	'BACKUP_NOT_SUPPORTED'	=> 'Ο επιλεγμένος τύπος αντιγράφου ασφαλείας δεν υποστηρίζεται',
	'BACKUP_OPTIONS'		=> 'Επιλογές αντιγράφου ασφαλείας',
	'BACKUP_SUCCESS'		=> 'Το αρχείο του αντιγράφου ασφαλείας δημιουργήθηκε με επιτυχία.',
	'BACKUP_TYPE'			=> 'Τύπος αντιγράφου ασφαλείας',

	'DATABASE'			=> 'Βοηθητικά προγράμματα βάσης δεδομένων',
	'DATA_ONLY'			=> 'Δεδομένα μόνο',
	'DELETE_BACKUP'		=> 'Διαγραφή αντιγράφου ασφαλείας',
	'DELETE_SELECTED_BACKUP'	=> 'Είστε σίγουρος (-η) ότι θέλετε να διαγράψετε το επιλεγμένο αντίγραφο ασφαλείας;',
	'DESELECT_ALL'		=> 'Από-επιλογή όλων',
	'DOWNLOAD_BACKUP'	=> 'Μεταφόρτωση αντιγράφου ασφαλείας',

	'FILE_TYPE'			=> 'Τύπος αρχείου',
	'FILE_WRITE_FAIL'	=> 'Αδυναμία εγγραφής του αρχείου στον φάκελο αποθήκευσης.',
	'FULL_BACKUP'		=> 'Πλήρες',

	'RESTORE_FAILURE'		=> 'Το αρχείο αντιγράφου ασφαλείας μπορεί να είναι κατεστραμμένο.',
	'RESTORE_OPTIONS'		=> 'Ρυθμίσεις επαναφοράς',
	'RESTORE_SELECTED_BACKUP'	=> 'Είστε σίγουρος (-η) ότι θέλετε να επαναφέρετε το επιλεγμένο αντίγραφο ασφαλείας;',
	'RESTORE_SUCCESS'		=> 'Η επαναφορά της βάσης δεδομένων έγινε με επιτυχία.<br /><br />Το σύστημα συζητήσεών σας θα πρέπει να είναι στην κατάσταση στην οποία βρισκόταν όταν δημιουργήθηκε το αντίγραφο ασφαλείας.',

	'SELECT_ALL'			=> 'Επιλογή όλων',
	'SELECT_FILE'			=> 'Επιλέξτε ένα αρχείο',
	'START_BACKUP'			=> 'Εκκίνηση αντιγράφου ασφαλείας',
	'START_RESTORE'			=> 'Εκκίνηση επαναφοράς',
	'STORE_AND_DOWNLOAD'	=> 'Αποθήκευση και μεταφόρτωση',
	'STORE_LOCAL'			=> 'Αποθήκευση αρχείου τοπικά',

	'TABLE_SELECT'		=> 'Επιλογή πινάκων',
	'TABLE_SELECT_ERROR'=> 'Πρέπει να επιλέξετε τουλάχιστον έναν πίνακα.',
));

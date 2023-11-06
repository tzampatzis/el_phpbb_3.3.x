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
	'ABOUT_USER'			=> 'Προφίλ',
	'ACTIVE_IN_FORUM'		=> 'Πιο ενεργή Δ. Συζήτηση',
	'ACTIVE_IN_TOPIC'		=> 'Πιο ενεργό θέμα',
	'ADD_FOE'				=> 'Προσθέστε εχθρό',
	'ADD_FRIEND'			=> 'Προσθέστε φίλο',
	'AFTER'					=> 'Μετά',

	'ALL'					=> 'Όλα',

	'BEFORE'				=> 'Πριν',

	'CC_SENDER'				=> 'Αποστολή ενός αντιγράφου αυτού του μηνύματος ηλεκτρονικού ταχυδρομείου στον εαυτό σας.',
	'CONTACT_ADMIN'			=> 'Επικοινωνία με τον Διαχειριστή του συστήματος συζητήσεων',

	'DEST_LANG'				=> 'Γλώσσα',
	'DEST_LANG_EXPLAIN'		=> 'Επιλέξτε μια κατάλληλη γλώσσα (εάν είναι διαθέσιμη) για τον παραλήπτη αυτού του μηνύματος.',

	'EDIT_PROFILE'			=> 'Επεξεργασία προφίλ',

	'EMAIL_BODY_EXPLAIN'	=> 'Αυτό το μήνυμα θα σταλεί σαν απλό κείμενο, δεν περιλαμβάνει οποιοδήποτε HTML ή BBCode. Η διεύθυνση επιστροφής για αυτό το μήνυμα θα τεθεί η διεύθυνση ηλεκτρονικού ταχυδρομείου σας.',
	'EMAIL_DISABLED'		=> 'Συγνώμη αλλά όλες οι σχετικές με το ηλεκτρονικό ταχυδρομείο λειτουργίες έχουν τεθεί εκτός λειτουργίας.',
	'EMAIL_SENT'			=> 'Το μήνυμα ηλεκτρονικού ταχυδρομείου έχει αποσταλεί.',
	'EMAIL_TOPIC_EXPLAIN'	=> 'Αυτό το μήνυμα θα σταλεί σαν απλό κείμενο, δεν περιλαμβάνει οποιοδήποτε HTML ή BBCode. Παρακαλώ σημειώστε ότι οι πληροφορίες θέματος συμπεριλαμβάνονται ήδη στο μήνυμα. Η διεύθυνση επιστροφής για αυτό το μήνυμα θα τεθεί η διεύθυνση ηλεκτρονικού ταχυδρομείου σας.',
	'EMPTY_ADDRESS_EMAIL'	=> 'Πρέπει να εισάγετε μια έγκυρη διεύθυνση ηλεκτρονικού ταχυδρομείου για τον παραλήπτη.',
	'EMPTY_MESSAGE_EMAIL'	=> 'Πρέπει να εισάγετε ένα μήνυμα που θα σταλεί με το ηλεκτρονικό ταχυδρομείο.',
	'EMPTY_MESSAGE_IM'		=> 'Πρέπει να εισάγετε ένα μήνυμα προς αποστολή.',
	'EMPTY_NAME_EMAIL'		=> 'Πρέπει να εισάγετε το πραγματικό όνομα του παραλήπτη.',
	'EMPTY_SENDER_EMAIL'	=> 'Πρέπει να εισάγετε μια έγκυρη διεύθυνση ηλεκτρονικού ταχυδρομείου.',
	'EMPTY_SENDER_NAME'		=> 'Πρέπει να εισάγετε ένα όνομα.',
	'EMPTY_SUBJECT_EMAIL'	=> 'Πρέπει να διευκρινίσετε ένα θέμα για το μήνυμα ηλεκτρονικού ταχυδρομείου.',
	'EQUAL_TO'				=> 'Ίσες με',

	'FIND_USERNAME_EXPLAIN'	=> 'Χρησιμοποιήστε αυτή τη φόρμα για αναζήτηση συγκεκριμένων μελών. Δεν χρειάζεται να συμπληρώσετε όλα τα πεδία. Για να ταιριάξει με τη μερική χρήση στοιχείων χρησιμοποιήστε μπαλαντέρ (*). Κατά την εισαγωγή οι ημερομηνίες χρησιμοποιούν τη μορφή <kbd>ΕΕΕΕ-MM-ΗΗ</kbd>, π.χ. <samp>2004-02-29</samp>. Χρησιμοποιήστε τα πλαίσια επιλογής επισήμανσης για να επιλέξετε ένα ή περισσότερα ονόματα μελών (διαφορετικά ονόματα μελών μπορούν να γίνουν αποδεκτά ανάλογα με την ίδια τη φόρμα) και να πατήσετε το κουμπί «Επιλογή σημειωμένων» για να επιστρέψετε στην προηγούμενη φόρμα.',
	'FLOOD_EMAIL_LIMIT'		=> 'Δεν μπορείτε να στείλετε ένα άλλο μήνυμα ηλεκτρονικού ταχυδρομείου αυτή τη στιγμή. Παρακαλώ προσπαθήστε πάλι αργότερα.',

	'GROUP_LEADER'			=> 'Συντονιστής ομάδας',

	'HIDE_MEMBER_SEARCH'	=> 'Απόκρυψη αναζήτησης μελών',

	'IM_ADD_CONTACT'		=> 'Προσθέστε επικοινωνία ',
	'IM_DOWNLOAD_APP'		=> 'Μεταφορτώστε την εφαρμογή',
	'IM_JABBER'				=> 'Παρακαλώ σημειώστε ότι τα μέλη μπορεί να έχουν επιλέξει να μη λαμβάνουν εκούσια στιγμιαία μηνύματα.',
	'IM_JABBER_SUBJECT'		=> 'Αυτό είναι ένα αυτόματο μήνυμα παρακαλώ μην απαντήσετε! Μήνυμα από το μέλος %1$s σε %2$s.',
	'IM_MESSAGE'			=> 'Το μήνυμά σας',
	'IM_NAME'				=> 'Το όνομά σας',
	'IM_NO_DATA'			=> 'Δεν υπάρχει κανένα κατάλληλο στοιχείο επικοινωνίας για αυτό το μέλος.',
	'IM_NO_JABBER'			=> 'Συγνώμη, άμεσα μηνύματα των μελών Jabber δεν υποστηρίζονται σε αυτό το σύστημα συζητήσεων. Θα χρειαστείτε έναν Jabber-Client εγκατεστημένο στο σύστημά σας για να επικοινωνήσετε με τον ανωτέρω παραλήπτη.',
	'IM_RECIPIENT'			=> 'Παραλήπτης',
	'IM_SEND'				=> 'Αποστολή μηνύματος',
	'IM_SEND_MESSAGE'		=> 'Αποστολή μηνύματος',
	'IM_SENT_JABBER'		=> 'Το μήνυμά σας προς το μέλος %1$s έχει σταλεί με επιτυχία.',
	'IM_USER'				=> 'Στείλετε ένα στιγμιαίο μήνυμα',

	'LAST_ACTIVE'				=> 'Τελευταία επίσκεψη',
	'LESS_THAN'					=> 'Λιγότερες από',
	'LIST_USERS'				=> array(
		1	=> '%d μέλος',
		2	=> '%d μέλη',
	),
	'LOGIN_EXPLAIN_TEAM'		=> 'Το σύστημα συζητήσεων απαιτεί ότι πρέπει να είστε εγγεγραμμένο μέλος και να έχετε συνδεθεί για να δείτε τις ομάδες μελών.',
	'LOGIN_EXPLAIN_MEMBERLIST'	=> 'Το σύστημα συζητήσεων απαιτεί ότι πρέπει να είστε εγγεγραμμένο μέλος και να έχετε συνδεθεί για να έχετε πρόσβαση στη λίστα μελών.',
	'LOGIN_EXPLAIN_SEARCHUSER'	=> 'Το σύστημα συζητήσεων απαιτεί ότι πρέπει να είστε εγγεγραμμένο μέλος και να έχετε συνδεθεί για να αναζητήσετε κάποιο μέλος.',
	'LOGIN_EXPLAIN_VIEWPROFILE'	=> 'Το σύστημα συζητήσεων απαιτεί ότι πρέπει να είστε εγγεγραμμένο μέλος και να έχετε συνδεθεί για να δείτε το προφίλ κάποιου μέλους.',

	'MANAGE_GROUP'			=> 'Διαχείριση Ομάδας',
	'MORE_THAN'				=> 'Περισσότερες από',

	'NO_CONTACT_FORM'		=> 'Η φόρμα επικοινωνίας με διαχειριστή του συστήματος συζητήσεων έχει απενεργοποιηθεί.',
	'NO_CONTACT_PAGE'		=> 'Η σελίδα επικοινωνίας με διαχειριστή του συστήματος συζητήσεων έχει απενεργοποιηθεί.',
	'NO_EMAIL'				=> 'Δεν έχετε δικαίωμα να στείλετε μήνυμα ηλεκτρονικού ταχυδρομείου σε αυτό το μέλος.',
	'NO_VIEW_USERS'			=> 'Δεν είστε εξουσιοδοτημένοι δείτε τη λίστα μελών ή τα προφίλ.',

	'ORDER'					=> 'Ταξινόμηση',
	'OTHER'					=> 'Άλλο',

	'POST_IP'				=> 'Δημοσίευση από διεύθυνση IP / Ιστοσελίδα',

	'REAL_NAME'				=> 'Όνομα παραλήπτη',
	'RECIPIENT'				=> 'Παραλήπτης',
	'REMOVE_FOE'			=> 'Διαγραφή εχθρού',
	'REMOVE_FRIEND'			=> 'Διαγραφή φίλου',

	'SELECT_MARKED'			=> 'Επιλογή σημειωμένων',
	'SELECT_SORT_METHOD'	=> 'Επιλέξτε μέθοδο ταξινόμησης',
	'SENDER_EMAIL_ADDRESS'	=> 'Η διεύθυνση ηλεκτρονική ταχυδρομείου σας',
	'SENDER_NAME'			=> 'Το όνομά σας',
	'SEND_ICQ_MESSAGE'		=> 'Αποστολή μηνύματος ICQ',
	'SEND_IM'				=> 'Αποστολή Instant messaging',
	'SEND_JABBER_MESSAGE'	=> 'Αποστολή μηνύματος Jabber',
	'SEND_MESSAGE'			=> 'Μήνυμα',
	'SEND_YIM_MESSAGE'		=> 'Αποστολή μηνύματος YIM',
	'SORT_EMAIL'			=> 'Ηλεκτρονικό ταχυδρομείο',
	'SORT_LAST_ACTIVE'		=> 'Τελευταία ενεργό',
	'SORT_POST_COUNT'		=> 'Αριθμός δημοσιεύσεων',

	'USERNAME_BEGINS_WITH'	=> 'Το όνομα μέλους ξεκινάει με',
	'USER_ADMIN'			=> 'Διαχείριση μέλους',
	'USER_BAN'				=> 'Αποκλεισμός',
	'USER_FORUM'			=> 'Στατιστικά μέλους',
	'USER_LAST_REMINDED'	=> array(
		0		=> 'Δεν έχει αποσταλεί καμία υπενθύμιση προς το παρόν',
		1		=> '%1$d φορά απέστειλε υπενθύμιση<br />» %2$s',
		2		=> '%1$d φορές απέστειλε υπενθύμιση<br />» %2$s',
	),
	'USER_ONLINE'			=> 'Σε σύνδεση',
	'USER_PRESENCE'			=> 'Παρουσία στη Δ. Συζήτηση',
	'USERS_PER_PAGE'		=> 'Μέλη ανά σελίδα',

	'VIEWING_PROFILE'			=> 'Προβολή προφίλ - %s',
	'VIEW_FACEBOOK_PROFILE'		=> 'Προβολή προφίλ Facebook',
	'VIEW_SKYPE_PROFILE'		=> 'Προβολή προφίλ Skype',
	'VIEW_TWITTER_PROFILE'		=> 'Προβολή προφίλ Twitter',
	'VIEW_YOUTUBE_PROFILE'		=> 'Προβολή προφίλ YouTube',
));

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
	'ACP_GROUPS_MANAGE_EXPLAIN'		=> 'Από αυτό τον πίνακα μπορείτε να διαχειριστείτε όλες τις ομάδες μελών σας. Μπορείτε να διαγράψετε, να δημιουργήσετε και να επεξεργαστείτε υπάρχουσες ομάδες. Επιπλέον, μπορείτε να επιλέξετε συντονιστές ομάδων, να αλλάξετε σαν ανοιχτή/κρυφή/κλειστή την κατάσταση ομάδας και να ρυθμίστε το όνομα της ομάδας και την περιγραφή.',
	'ADD_GROUP_CATEGORY'			=> 'Προσθήκη κατηγορίας',
	'ADD_USERS'						=> 'Προσθήκη μελών',
	'ADD_USERS_EXPLAIN'				=> 'Εδώ μπορείτε να προσθέσετε νέα μέλη στην ομάδα. Μπορείτε να επιλέξετε εάν αυτή η ομάδα γίνεται η νέα προεπιλεγμένη για τα επιλεγμένα μέλη. Επιπλέον, μπορείτε να τα ορίσετε ως συντονιστές της ομάδας. Παρακαλώ εισάγετε κάθε όνομα μέλους σε μια ξεχωριστή γραμμή.',

	'COPY_PERMISSIONS'				=> 'Αντιγραφή προσβάσεων από',
	'COPY_PERMISSIONS_EXPLAIN'		=> 'Μόλις δημιουργηθεί, η ομάδα θα έχει τα ίδια δικαιωμάτων πρόσβασης με εκείνη που επιλέγετε εδώ.',
	'CREATE_GROUP'					=> 'Δημιουργία νέας ομάδας',

	'GROUPS_NO_MEMBERS'				=> 'Αυτή η ομάδα δεν έχει μέλη',
	'GROUPS_NO_MODS'				=> 'Δεν ορίσθηκαν συντονιστές ομάδας',

	'GROUP_APPROVE'					=> 'Έγκριση μέλους',
	'GROUP_APPROVED'				=> 'Εγκεκριμένα μέλη',
	'GROUP_AVATAR'					=> 'Άβαταρ ομάδας',
	'GROUP_AVATAR_EXPLAIN'			=> 'Αυτή η εικόνα θα εμφανίζεται στον Πίνακα Ελέγχου Ομάδας.',
	'GROUP_CATEGORY_NAME'			=> 'Όνομα κατηγορίας',
	'GROUP_CLOSED'					=> 'Κλειστή',
	'GROUP_COLOR'					=> 'Χρώμα ομάδας',
	'GROUP_COLOR_EXPLAIN'			=> 'Καθορίζει το χρώμα των ονομάτων μελών με το οποίο θα εμφανίζονται, αφήστε το κενό για προεπιλεγμένο μέλους.',
	'GROUP_CONFIRM_ADD_USERS'		=> array(
		1	=> 'Είστε σίγουρος (-η) ότι θέλετε να προσθέσετε το μέλος %2$s στην ομάδα;',
		2	=> 'Είστε σίγουρος (-η) ότι θέλετε να προσθέσετε τα μέλη %2$s στην ομάδα;',
	),
	'GROUP_CREATED'					=> 'Η ομάδα δημιουργήθηκε με επιτυχία.',
	'GROUP_DEFAULT'					=> 'Κάντε την ομάδα ως προεπιλεγμένη για το μέλος',
	'GROUP_DEFS_UPDATED'			=> 'Προεπιλεγμένη ομάδα ορίστηκε για όλα τα επιλεγμένα μέλη.',
	'GROUP_DELETE'					=> 'Αφαίρεση του μέλους από την ομάδα',
	'GROUP_DELETED'					=> 'Η ομάδα διαγράφηκε και η προεπιλεγμένη ομάδα μέλους ορίστηκε με επιτυχία.',
	'GROUP_DEMOTE'					=> 'Υποβιβασμός συντονιστή ομάδας',
	'GROUP_DESC'					=> 'Περιγραφή ομάδας',
	'GROUP_DETAILS'					=> 'Λεπτομέρειες ομάδας',
	'GROUP_EDIT_EXPLAIN'			=> 'Εδώ μπορείτε να επεξεργαστείτε μια ήδη υπάρχουσα ομάδα. Μπορείτε να αλλάξετε το όνομα, την περιγραφή και τον τύπο της (ανοικτή, κλειστή, κ.λπ.). Μπορείτε επίσης να ρυθμίσετε ορισμένες ευρύτερες επιλογές ομάδας, όπως χρωματισμό, βαθμό, κλπ. Οι αλλαγές που πραγματοποιούνται εδώ αντικαθιστούν τις υπάρχουσες ρυθμίσεις μέλους. Παρακαλώ σημειώστε ότι τα μέλη της ομάδας μπορεί να παρακάμπτουν ρυθμίσεις άβαταρ ομάδας, εκτός και αν ορίσετε τα κατάλληλα δικαιώματα μέλους.',
	'GROUP_ERR_USERS_EXIST'			=> 'Τα συγκεκριμένα μέλη είναι ήδη μέλη αυτής της ομάδας.',
	'GROUP_FOUNDER_MANAGE'			=> 'Διαχείριση μόνο από ιδρυτικό μέλος',
	'GROUP_FOUNDER_MANAGE_EXPLAIN'	=> 'Περιορίστε τη διαχείριση αυτής της ομάδας μόνο σε ιδρυτές. Μέλη που έχουν δικαιώματα ομάδας εξακολουθούν να είναι σε θέση να βλέπουν αυτή την ομάδα καθώς και τα μέλη αυτής της ομάδας.',
	'GROUP_HIDDEN'					=> 'Κρυφή',
	'GROUP_LANG'					=> 'Γλώσσα ομάδας',
	'GROUP_LEAD'					=> 'Συντονιστές ομάδας',
	'GROUP_LEADERS_ADDED'			=> 'Οι νέοι συντονιστές προστέθηκαν στην ομάδα με επιτυχία.',
	'GROUP_LEGEND'					=> 'Εμφάνιση ομάδας στο υπόμνημα',
	'GROUP_LIST'					=> 'Τρέχοντα μέλη',
	'GROUP_LIST_EXPLAIN'			=> 'Αυτή είναι μια πλήρης λίστα όλων των τρέχοντων μελών που ανήκουν σε αυτή την ομάδα. Μπορείτε να διαγράψετε μέλη (εκτός από ορισμένες ειδικές ομάδες) ή να προσθέσετε νέα, σύμφωνα την κρίση σας.',
	'GROUP_MEMBERS'					=> 'Μέλη ομάδας',
	'GROUP_MEMBERS_EXPLAIN'			=> 'Αυτή είναι μια πλήρης λίστα όλων των μελών αυτής της ομάδας μελών. Περιλαμβάνει ξεχωριστές ενότητες για συντονιστές, εκκρεμή και υπάρχοντα μέλη. Από εδώ μπορείτε να διαχειριστείτε όλες τις πτυχές της, του ποιος είναι μέλος της ομάδας και ποιος είναι ο ρόλος του. Για να αφαιρέσετε έναν συντονιστή, αλλά να τον διατηρήσετε στην ομάδα χρησιμοποιήστε το “Υποβιβασμός” αντί του “Αφαίρεση”. Ομοίως, χρησιμοποιήστε Προαγωγή για να κάνετε ένα υπάρχον μέλος συντονιστή.',
	'GROUP_MESSAGE_LIMIT'			=> 'Όριο προσωπικών μηνυμάτων ομάδας ανά φάκελο',
	'GROUP_MESSAGE_LIMIT_EXPLAIN'	=> 'Αυτή η ρύθμιση αντικαθιστά το όριο του φακέλου μηνυμάτων ανά μέλος. Αυτή η ρύθμιση παρακάμπτει το όριο μηνυμάτων φακέλου ανα χρήστη. Για να καθοριστεί η τιμή, χρησιμοποιείται το μέγιστο από όλες τις ομάδες του χρήστη.<br />Ρυθμίστε το σε 0 για να αντικαταστήσετε τη ρύμιση για όλους τους χρήστες αυτής της ομάδας με τη γενική ρύθμιση του συστήματος',
	'GROUP_MODS_ADDED'				=> 'Οι νέοι συντονιστές προστέθηκαν με επιτυχία.',
	'GROUP_MODS_DEMOTED'			=> 'Οι συντονιστές ομάδας υποβιβάστηκαν με επιτυχία.',
	'GROUP_MODS_PROMOTED'			=> 'Οι συντονιστές ομάδας προήχθησαν με επιτυχία.',
	'GROUP_NAME'					=> 'Όνομα ομάδας',
	'GROUP_NAME_TAKEN'				=> 'Το όνομα ομάδας που εισάγατε χρησιμοποιείται ήδη, παρακαλώ επιλέξτε ένα εναλλακτικό.',
	'GROUP_OPEN'					=> 'Ανοικτή',
	'GROUP_PENDING'					=> 'Εκκρεμή μέλη',
	'GROUP_MAX_RECIPIENTS'			=> 'Μέγιστος αριθμός επιτρεπόμενων παραληπτών ανά προσωπικό μήνυμα ',
	'GROUP_MAX_RECIPIENTS_EXPLAIN'	=> 'Ο μέγιστος αριθμός των επιτρεπόμενων παραληπτών σε ένα προσωπικό μήνυμα. Για να καθοριστεί η τιμή, χρησιμοποιείται το μέγιστο από όλες τις ομάδες του χρήστη.<br />Ρυθμίστε το σε 0 για να αντικαταστήσετε τη ρύμιση για όλους τους χρήστες αυτής της ομάδας με τη γενική ρύθμιση του συστήματος.',
	'GROUP_OPTIONS_SAVE'			=> 'Επιλογές για όλη την ομάδα',
	'GROUP_PROMOTE'					=> 'Προαγωγή σε συντονιστή ομάδας',
	'GROUP_RANK'					=> 'Βαθμός ομάδας',
	'GROUP_RECEIVE_PM'				=> 'Η ομάδα έχει τη δυνατότητα να λαμβάνει προσωπικά μηνύματα',
	'GROUP_RECEIVE_PM_EXPLAIN'		=> 'Σημειώστε ότι κρυφές ομάδες δεν μπορούν να λαμβάνουν προσωπικά μηνύματα, ανεξάρτητα από αυτή την επιλογή.',
	'GROUP_REQUEST'					=> 'Αίτηση',
	'GROUP_SETTINGS_SAVE'			=> 'Εκτεταμένες επιλογές ομάδας',
	'GROUP_SKIP_AUTH'				=> 'Εξαίρεση συντονιστή ομάδας από τα δικαιώματα',
	'GROUP_SKIP_AUTH_EXPLAIN'		=> 'Εάν είναι ενεργοποιημένο ο συντονιστής ομάδας δεν κληρονομεί πλέον δικαιώματα από την ομάδα.',
	'GROUP_SPECIAL'					=> 'Προκαθορισμένη',
	'GROUP_TEAMPAGE'				=> 'Εμφάνιση ομάδας στη σελίδα ομάδων',
	'GROUP_TYPE'					=> 'Τύπος ομάδας',
	'GROUP_TYPE_EXPLAIN'			=> 'Αυτό καθορίζει ποια μέλη μπορούν να ενταχθούν ή να δουν αυτή την ομάδα.',
	'GROUP_UPDATED'					=> 'Οι προτιμήσεις ομάδας ενημερώθηκαν με επιτυχία.',

	'GROUP_USERS_ADDED'				=> 'Το νέο μέλος προστέθηκε στην ομάδα με επιτυχία.',
	'GROUP_USERS_EXIST'				=> 'Τα επιλεγμένα μέλη είναι ήδη μέλη.',
	'GROUP_USERS_REMOVE'			=> 'Τα μέλη αφαιρέθηκαν από την ομάδα και νέες προεπιλογές ορίστηκαν με επιτυχία.',
	'GROUP_USERS_INVALID'			=> 'Κανένα μέλος δεν έχει προστεθεί στην ομάδα, καθώς τα ακόλουθα ονόματα χρήστη δεν υπάρχουν: %s',

	'LEGEND_EXPLAIN'				=> 'Αυτές είναι οι ομάδες οι οποίες εμφανίζονται στο υπόμνημα ομάδων:',
	'LEGEND_SETTINGS'				=> 'Υπόμνημα ρυθμίσεις',
	'LEGEND_SORT_GROUPNAME'			=> 'Ταξινόμηση στο υπόμνημα κατά το όνομα της ομάδας',
	'LEGEND_SORT_GROUPNAME_EXPLAIN'	=> 'Η διάταξη παρακάτω αγνοείται όταν η επιλογή αυτή είναι ενεργοποιημένη.',

	'MANAGE_LEGEND'			=> 'Διαχείριση ομάδων στο υπόμνημα',
	'MANAGE_TEAMPAGE'		=> 'Διαχείριση σελίδας ομάδων',
	'MAKE_DEFAULT_FOR_ALL'	=> 'Καθορίστε προεπιλεγμένη ομάδα για κάθε μέλος',
	'MEMBERS'				=> 'Μέλη',

	'NO_GROUP'					=> 'Καμία ομάδα δεν έχει καθοριστεί.',
	'NO_GROUPS_ADDED'			=> 'Δεν έχουν προστεθεί ομάδες ακόμη.',
	'NO_GROUPS_CREATED'			=> 'Δεν έχουν δημιουργηθεί ομάδες ακόμη.',
	'NO_PERMISSIONS'			=> 'Μην αντιγράψετε δικαιώματα πρόσβασης',
	'NO_USERS'					=> 'Δεν έχετε εισάγει μέλη.',
	'NO_USERS_ADDED'			=> 'Δεν υπάρχουν μέλη που προστέθηκαν στην ομάδα.',
	'NO_VALID_USERS'			=> 'Δεν έχετε εισάγει κάποια μέλη επιλεγμένα για την εν λόγω ενέργεια.',

	'PENDING_MEMBERS'			=> 'Εκκρεμή μέλη',

	'SELECT_GROUP'				=> 'Επιλέξτε μια ομάδα',
	'SPECIAL_GROUPS'			=> 'Προκαθορισμένες ομάδες',
	'SPECIAL_GROUPS_EXPLAIN'	=> 'Προκαθορισμένες ομάδες είναι ειδικές ομάδες, δεν μπορούν να διαγραφούν ή να τροποποιηθούν απευθείας. Ωστόσο, μπορείτε ακόμη να προσθέσετε μέλη και να αλλάξετε βασικές ρυθμίσεις.',

	'TEAMPAGE'					=> 'Σελίδα ομάδας',
	'TEAMPAGE_DISP_ALL'			=> 'Όλες οι ιδιότητες μέλους',
	'TEAMPAGE_DISP_DEFAULT'		=> 'Μόνο η προεπιλεγμένη ομάδα μέλους',
	'TEAMPAGE_DISP_FIRST'		=> 'Μόνο η πρώτη ιδιότητα μέλους',
	'TEAMPAGE_EXPLAIN'			=> 'Αυτές είναι οι ομάδες οι οποίες εμφανίζονται στη σελίδα ομάδας:',
	'TEAMPAGE_FORUMS'			=> 'Εμφάνιση συντονιζόμενων Δ. Συζητήσεων',
	'TEAMPAGE_FORUMS_EXPLAIN'	=> 'Εάν οριστεί σε “Ναι”, οι συντονιστές θα έχουν μια λίστα με όλες τις Δ. Συζητήσεις όπου αυτοί έχουν δικαιώματα συντονιστή να εμφανίζεται στη γραμμή τους. Αυτό μπορεί να είναι πολύ έντονο για τη βάση δεδομένων σε μεγάλα συστήματα συζητήσεων.',
	'TEAMPAGE_MEMBERSHIPS'		=> 'Εμφάνιση ιδιότητες μέλους',
	'TEAMPAGE_SETTINGS'			=> 'Ρυθμίσεις σελίδας ομάδας',
	'TOTAL_MEMBERS'				=> 'Μέλη',

	'USERS_APPROVED'				=> 'Τα μέλη εγκρίθηκαν με επιτυχία.',
	'USER_DEFAULT'					=> 'Προεπιλογή μέλους',
	'USER_DEF_GROUPS'				=> 'Καθορισμένες ομάδες μελών',
	'USER_DEF_GROUPS_EXPLAIN'		=> 'Αυτές είναι οι ομάδες που δημιουργούνται από εσάς ή από άλλο διαχειριστή σε αυτό το σύστημα συζητήσεων. Μπορείτε να διαχειρισθείτε τις ιδιότητες μελών καθώς και να επεξεργαστείτε τις ιδιότητες ομάδας ή ακόμα και να διαγράψετε την ομάδα.',
	'USER_GROUP_DEFAULT'			=> 'Ορισμός ως προεπιλεγμένη ομάδα',
	'USER_GROUP_DEFAULT_EXPLAIN'	=> 'Λέγοντας “Ναι” εδώ θα ορίσετε αυτή την ομάδα ως την προεπιλεγμένη ομάδα για τα προστιθέμενα μέλη.',
	'USER_GROUP_LEADER'				=> 'Ορισμός ως συντονιστής ομάδας',
));

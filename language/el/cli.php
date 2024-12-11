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

if (!defined('IN_PHPBB'))
{
	exit;
}

/**
* DO NOT CHANGE
*/
if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

// DEVELOPERS PLEASE NOTE
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine

$lang = array_merge($lang, array(
	'CLI_APCU_CACHE_NOTICE'				=> 'Η προσωρινή μνήμη APCu πρέπει να εκκαθαριστεί μέσα από τον Πίνακα Ελέγχου Διαχειριστή.',

	'CLI_CONFIG_CANNOT_CACHED'			=> 'Ορίστε αυτή την επιλογή αν η επιλογή ρύθμισης αλλάζει πολύ συχνά για να γίνεται προσωρινή αποθήκευση αποτελεσματικά.',
	'CLI_CONFIG_CURRENT'				=> 'Τρέχουσα τιμή ρύθμισης, χρησιμοποιήστε 0 και 1 για να καθορίσετε λογικές τιμές',
	'CLI_CONFIG_DELETE_SUCCESS'			=> 'Επιτυχής διαγραφή της ρύθμισης %s.',
	'CLI_CONFIG_NEW'					=> 'Νέα τιμή ρύθμισης, χρησιμοποιήστε 0 και 1 για να καθορίσετε λογικές τιμές',
	'CLI_CONFIG_NOT_EXISTS'				=> 'Η ρύθμιση %s δεν υπάρχει',
	'CLI_CONFIG_OPTION_NAME'			=> 'Το όνομα της επιλογής ρύθμισης',
	'CLI_CONFIG_PRINT_WITHOUT_NEWLINE'	=> 'Ορίστε αυτή την επιλογή εάν η τιμή θα πρέπει να τυπώνεται χωρίς μια νέα γραμμή στο τέλος.',
	'CLI_CONFIG_INCREMENT_BY'			=> 'Ποσό προσαύξησης κατά',
	'CLI_CONFIG_INCREMENT_SUCCESS'		=> 'Επιτυχής προσαύξηση της ρύθμισης %s',
	'CLI_CONFIG_SET_FAILURE'			=> 'Δεν ήταν δυνατός ο ορισμός της ρύθμισης %s',
	'CLI_CONFIG_SET_SUCCESS'			=> 'Επιτυχής ορισμός της ρύθμισης %s',

	'CLI_DESCRIPTION_CRON_LIST'				=> 'Εκτυπώνει μια λίστα των έτοιμων και ανέτοιμων εργασιών cron.',
	'CLI_DESCRIPTION_CRON_RUN'				=> 'Εκτελεί όλες τις έτοιμες εργασίες cron.',
	'CLI_DESCRIPTION_CRON_RUN_ARGUMENT_1'	=> 'Το όνομα της εργασίας που θα εκτελεστεί',
	'CLI_DESCRIPTION_DB_LIST'				=> 'Λίστα όλων των εγκατεστημένων και διαθέσιμων ενσωματώσεων.', //List all installed and available migrations.
	'CLI_DESCRIPTION_DB_MIGRATE'			=> 'Ενημερώνει τη βάση δεδομένων εφαρμόζοντας ενσωματώσεις.',
	'CLI_DESCRIPTION_DB_REVERT'				=> 'Επαναφορά μιας ενσωμάτωσης.',
	'CLI_DESCRIPTION_DELETE_CONFIG'			=> 'Διαγράφει μια επιλογή ρύθμισης',
	'CLI_DESCRIPTION_DISABLE_EXTENSION'		=> 'Απενεργοποιεί τη συγκεκριμένη επέκταση.',
	'CLI_DESCRIPTION_ENABLE_EXTENSION'		=> 'Ενεργοποιεί τη συγκεκριμένη επέκταση.',
	'CLI_DESCRIPTION_FIND_MIGRATIONS'		=> 'Βρίσκει ενσωματώσεις που δεν εξαρτώταν από άλλες.',
	'CLI_DESCRIPTION_FIX_LEFT_RIGHT_IDS'		=> 'Επισκευάζει την δενδρική δομή των Δ. συζητήσεων και των μονάδων.',
	'CLI_DESCRIPTION_GET_CONFIG'			=> 'Παίρνει μια τιμή επιλογής ρύθμισης',
	'CLI_DESCRIPTION_INCREMENT_CONFIG'		=> 'Προσαυξάνει ακέραια μια τιμή επιλογής ρύθμισης',
	'CLI_DESCRIPTION_LIST_EXTENSIONS'		=> 'Απαριθμεί όλες τις επεκτάσεις στη βάση δεδομένων και στο σύστημα αρχείων.',

	'CLI_DESCRIPTION_OPTION_ENV'			=> 'Το όνομα του περιβάλλοντος.', // The Environment name.
	'CLI_DESCRIPTION_OPTION_SAFE_MODE'		=> 'Εκτέλεση σε ασφαλή λειτουργία (χωρίς επεκτάσεις).',
	'CLI_DESCRIPTION_OPTION_SHELL'			=> 'Εκκίνηση του κελύφους.',

	'CLI_DESCRIPTION_PURGE_EXTENSION'		=> 'Εκκαθαρίζει τη συγκεκριμένη επέκταση.',
	
	'CLI_DESCRIPTION_REPARSER_LIST'						=> 'Λίστα τύπων κειμένου που μπορεί να γίνει νέα ανάλυση.', // Lists the types of text that can be reparsed.
	'CLI_DESCRIPTION_REPARSER_AVAILABLE'				=> 'Διαθέσιμα εργαλεία ανάλυσης:',
	'CLI_DESCRIPTION_REPARSER_REPARSE'					=> 'Reparses stored text with the current text_formatter services.',
	'CLI_DESCRIPTION_REPARSER_REPARSE_ARG_1'			=> 'Τύπος κειμένου για νέα ανάλυση. Αφήστε το κενό για να γίνει νέα ανάλυση σε όλα.', // Type of text to reparse. Leave blank to reparse everything.
	'CLI_DESCRIPTION_REPARSER_REPARSE_OPT_DRY_RUN'		=> 'Να μην αποθηκευτεί καμία αλλαγή, απλά να εκτυπωθεί ό,τι θα συνέβαινε', // Do not save any changes; just print what would happen
	'CLI_DESCRIPTION_REPARSER_REPARSE_OPT_FORCE_BBCODE'	=> 'Ανάλυση ξανά όλων των BBCodes χωρίς εξαίρεση. Σημειώστε ότι οποιοδήποτε BBCodes είχε απενεργοποιηθεί στο παρελθόν θα επανεπεξεργαστεί, ενεργοποιηθεί, και θα αποκατασταθεί πλήρως.',
	'CLI_DESCRIPTION_REPARSER_REPARSE_OPT_RANGE_MIN'	=> 'Χαμηλότερος αριθμός εγγραφής σε διαδικασία', // Lowest record ID to process
	'CLI_DESCRIPTION_REPARSER_REPARSE_OPT_RANGE_MAX'	=> 'Υψηλότερος αριθμός εγγραφής σε διαδικασία', // Highest record ID to process
	'CLI_DESCRIPTION_REPARSER_REPARSE_OPT_RANGE_SIZE'	=> 'Κατά προσέγγιση αριθμός εγγραφών για την επεξεργασία σε έναν χρόνο', // Approximate number of records to process at a time
	'CLI_DESCRIPTION_REPARSER_REPARSE_OPT_RESUME'		=> 'Εκκίνηση ανάλυσης από το σημείο το οποίο η προηγούμενη εκτέλεση σταμάτησε', // Start reparsing where the last execution stopped',

	'CLI_DESCRIPTION_SET_ATOMIC_CONFIG'			=> 'Καθορίζει μια τιμή επιλογής ρύθμισης μόνο εάν η παλιά ταιριάζει με την τρέχουσα τιμή',
	'CLI_DESCRIPTION_SET_CONFIG'				=> 'Καθορίζει μια τιμή επιλογής ρύθμισης',

	'CLI_DESCRIPTION_THUMBNAIL_DELETE'		=> 'Διαγραφή όλων των μικρογραφιών που υπάρχουν.',
	'CLI_DESCRIPTION_THUMBNAIL_GENERATE'	=> 'Δημιουργία όλων των μικρογραφιών που λείπουν.',
	'CLI_DESCRIPTION_THUMBNAIL_RECREATE'	=> 'Επαναδημιουργία όλων των μικρογραφιών.',
	
	'CLI_DESCRIPTION_UPDATE_CHECK'					=> 'Έλεγχος αν το σύστημα είναι ενημερωμένο.',
	'CLI_DESCRIPTION_UPDATE_CHECK_ARGUMENT_1'		=> 'Όνομα της επέκτασης προς έλεγχο (Αν είναι στο "all", ελέγχονται όλες οι επεκτάσεις)',
	'CLI_DESCRIPTION_UPDATE_CHECK_OPTION_CACHE'		=> 'Εκτέλεση εντολής ελέγχου με προσωρινή μνήμη (cache).',
	'CLI_DESCRIPTION_UPDATE_CHECK_OPTION_STABILITY'	=> 'Εκτέλεση εντολής με επιλογή ελέγχου μόνο σταθερών ή ασταθών εκδόσεων.',

	'CLI_DESCRIPTION_UPDATE_HASH_BCRYPT'		=> 'Ενημερώνει ληγμένους κατακερματισμένους κωδικούς για να αναδημιουργηθούν με τη λειτουργία bcrypt.',

	'CLI_ERROR_INVALID_STABILITY' => '"%s" πρέπει να ρυθμιστεί σε "σταθερό" ή "ασταθές".',

	'CLI_DESCRIPTION_USER_ACTIVATE'				=> 'Ενεργοποίηση (ή απενεργοποίηση) λογαριασμού μέλους.',
	'CLI_DESCRIPTION_USER_ACTIVATE_USERNAME'	=> 'Όνομα μέλους του λογαρισμού για ενεργοποίηση.',
	'CLI_DESCRIPTION_USER_ACTIVATE_DEACTIVATE'	=> 'Απενεργοποίηση του λογαριασμού μέλους',
	'CLI_DESCRIPTION_USER_ACTIVATE_ACTIVE'		=> 'Το μέλος είναι ήδη ενεργό.',
	'CLI_DESCRIPTION_USER_ACTIVATE_INACTIVE'	=> 'Το μέλος είναι ήδη ανενεργό.',
	'CLI_DESCRIPTION_USER_ADD'					=> 'Προσθήκη νέου μέλους.',
	'CLI_DESCRIPTION_USER_ADD_OPTION_USERNAME'	=> 'Όνομα χρήστη του νέου μέλους',
	'CLI_DESCRIPTION_USER_ADD_OPTION_PASSWORD'	=> 'Κωδικός πρόσβασης του νέου μέλους',
	'CLI_DESCRIPTION_USER_ADD_OPTION_EMAIL'		=> 'Διεύθυνση ηλεκτρονικού ταχυδρομείου του νέου μέλους',
	'CLI_DESCRIPTION_USER_ADD_OPTION_NOTIFY'	=> 'Αποστολή μηνύματος ηλεκτρονικού ταχυδρομείου ενεργοποίησης λογαριασμού στο νέο μέλος (από προεπιλογή δεν αποστέλλεται)',
	'CLI_DESCRIPTION_USER_DELETE'				=> 'Διαγραφή λογαριασμού μέλους.',
	'CLI_DESCRIPTION_USER_DELETE_USERNAME'		=> 'Όνομα χρήστη του μέλους για διαγραφή',
	'CLI_DESCRIPTION_USER_DELETE_ID'			=> 'Διαγραφή λογαριασμών χρηστών με ID.',
	'CLI_DESCRIPTION_USER_DELETE_ID_OPTION_ID'	=> 'ID χρηστών προς διαγραφή',
	'CLI_DESCRIPTION_USER_DELETE_OPTION_POSTS'	=> 'Διαγραφή όλων των δημοσιεύσεων του μέλους. Χωρίς αυτή την επιλογή, οι δημοσιεύσεις του μέλους θα διατηρηθούν.',
	'CLI_DESCRIPTION_USER_RECLEAN'				=> 'Επανακαθαρισμός ονομάτων χρηστών.', // Re-clean usernames.',

	'CLI_EXTENSION_DISABLE_FAILURE'		=> 'Δεν ήταν δυνατή η απενεργοποίηση της επέκτασης %s',
	'CLI_EXTENSION_DISABLE_SUCCESS'		=> 'Επιτυχής απενεργοποίηση της επέκτασης %s',
	'CLI_EXTENSION_DISABLED'			=> 'Η επέκταση %s δεν είναι ενεργοποιημένη',
	'CLI_EXTENSION_ENABLE_FAILURE'		=> 'Δεν ήταν δυνατή η ενεργοποίηση της επέκτασης %s',
	'CLI_EXTENSION_ENABLE_SUCCESS'		=> 'Επιτυχής ενεργοποίηση της επέκτασης %s',
	'CLI_EXTENSION_ENABLED'				=> 'Η επέκταση %s είναι ήδη ενεργοποιημένη',
	'CLI_EXTENSION_NOT_EXIST'			=> 'Η επέκταση %s δεν υπάρχει',
	'CLI_EXTENSION_NAME'				=> 'Όνομα επέκτασης',
	'CLI_EXTENSION_PURGE_FAILURE'		=> 'Δεν ήταν δυνατή η εκκαθάριση της επέκτασης %s',
	'CLI_EXTENSION_PURGE_SUCCESS'		=> 'Επιτυχής εκκαθάριση της επέκτασης %s',
	'CLI_EXTENSION_UPDATE_FAILURE'		=> 'Δεν μπορεί να ενημερωθεί η επέκταση %s',
	'CLI_EXTENSION_UPDATE_SUCCESS'		=> 'Επιτυχής ενημέρωση επέκτασης %s',
	'CLI_EXTENSION_NOT_FOUND'			=> 'Δεν βρέθηκαν επεκτάσεις.',
	'CLI_EXTENSION_NOT_ENABLEABLE'		=> 'Η επέκταση %s δεν μπορεί να ενεργοποιηθεί.',
	'CLI_EXTENSIONS_AVAILABLE'			=> 'Διαθέσιμο',
	'CLI_EXTENSIONS_DISABLED'			=> 'Απενεργοποιημένο',
	'CLI_EXTENSIONS_ENABLED'			=> 'Ενεργοποιημένο',

	'CLI_FIXUP_FIX_LEFT_RIGHT_IDS_SUCCESS'		=> 'Επιτυχής επισκευή δενδρικής δομής Δ. συζητήσεων και μονάδων.',
	'CLI_FIXUP_UPDATE_HASH_BCRYPT_SUCCESS'		=> 'Επιτυχής ενημέρωση ληγμένων κατακερματισμένων κωδικών με bcrypt.',

	'CLI_MIGRATION_NAME'					=> 'Όνομα ενσωμάτωσης, περιλαμβάνωντας και το ονόματα χώρου (χρησιμοποιήστε κανονικές καθέτους αντί για ανάποδες για να αποφύγετε προβλήματα).',
	'CLI_MIGRATIONS_AVAILABLE'				=> 'Διαθέσιμες ενσωματώσεις', // Available migrations
	'CLI_MIGRATIONS_INSTALLED'				=> 'Εγκατεστημένες ενσωματώσεις', // Installed migrations
	'CLI_MIGRATIONS_ONLY_AVAILABLE'		    => 'Εμφάνιση μόνο διαθέσιμων ενσωματώσεων', // Show only available migrations
	'CLI_MIGRATIONS_EMPTY'                  => 'Δεν βρέθηκαν ενσωματώσεις.', // No migrations.

	'CLI_REPARSER_REPARSE_REPARSING'		=> 'Ανάλυση %1$s (range %2$d..%3$d)', // Reparsing %1$s (range %2$d..%3$d)
	'CLI_REPARSER_REPARSE_REPARSING_START'	=> 'Ανάλυση %s...', // Reparsing %s...
	'CLI_REPARSER_REPARSE_SUCCESS'			=> 'Η ανάλυση ολοκληρώθηκε με επιτυχία', // Reparsing ended with success

	// In all the case %1$s is the logical name of the file and %2$s the real name on the filesystem
	// eg: big_image.png (2_a51529ae7932008cf8454a95af84cacd) generated.
	'CLI_THUMBNAIL_DELETED'			=> '%1$s (%2$s) διαγράφηκαν.',
	'CLI_THUMBNAIL_DELETING'		=> 'Διαγραφή μικρογραφιών',
	'CLI_THUMBNAIL_SKIPPED'			=> '%1$s (%2$s) παραλείφθηκαν.',
	'CLI_THUMBNAIL_GENERATED'		=> '%1$s (%2$s) δημιουργήθηκαν.',
	'CLI_THUMBNAIL_GENERATING'		=> 'Δημιουργία μικρογραφιών',
	'CLI_THUMBNAIL_GENERATING_DONE'	=> 'Όλες οι μικρογραφίες έχουν επαναδημιουργηθεί.',
	'CLI_THUMBNAIL_DELETING_DONE'	=> 'Όλες οι μικρογραφίες έχουν διαγραφεί.',

	'CLI_THUMBNAIL_NOTHING_TO_GENERATE'	=> 'Δεν υπάρχουν μικρογραφίες για δημιουργία.',
	'CLI_THUMBNAIL_NOTHING_TO_DELETE'	=> 'Δεν υπάρχουν μικρογραφίες για διαγραφή.',

	'CLI_USER_ADD_SUCCESS'			=> 'Επιτυχής προσθήκη χρήστη %s.',
	'CLI_USER_DELETE_CONFIRM'		=> 'Είστε σίγουρος ότι θέλετε να διαγράψετε τον ‘%s’; [y/N]',
	'CLI_USER_DELETE_ID_CONFIRM'	=> 'Είστε σίγουρος ότι θέλετε να διαγράψετε τα ID χρηστών ‘%s’; [y/N]',
	'CLI_USER_DELETE_ID_SUCCESS'	=> 'Επιτυχής διαγραφή ID χρηστών.',
	'CLI_USER_DELETE_ID_START'		=> 'Διαγραφή χρηστών με ID',
	'CLI_USER_DELETE_NONE'			=> 'Κανένας χρήστης δε διεγράφη με ID χρήστη.',
	'CLI_USER_RECLEAN_START'		=> 'Επαναλαμβανόμενη εκκαθάριση ονομάτων χρήστη',
	'CLI_USER_RECLEAN_DONE'			=> [
		0	=> 'Ο επανακαθαρισμός ολοκληρώθηκε. Κανένα όνομα χρήστη δεν χρειάστηκε να καθαριστεί.',
		1	=> 'Ο επανακαθαρισμός ολοκληρώθηκε. %d όνομα χρήστη καθαρίστηκε.',
		2	=> 'Ο επανακαθαρισμός ολοκληρώθηκε. %d ονόματα χρηστών καθαρίστηκαν.',
	],
));

// Additional help for commands.
$lang = array_merge($lang, array(
	'CLI_HELP_CRON_RUN'			=> $lang['CLI_DESCRIPTION_CRON_RUN'] . ' Μπορείτε προαιρετικά να ορίσετε ένα όνομα για την επαναλαμβανόμενη διαδικασία για την εκτέλεση μόνο της συγκεκριμένης επαναλαμβανόμενης διαδικασίας.',
	'CLI_HELP_USER_ACTIVATE'	=> 'Για ενεργοποίηση λογαριασμού μέλους ή απενεργοποίηση λογαριασμού χρησιμοποιήστε την επιλογή <info>--deactivate</info>.
Για προαιρετική αποστολή μηνύματος ηλεκτρονικού ταχυδρομείου ενεργοποίησης λογαριασμού στο μέλος, χρησιμοποιήστε την επιλογή <info>--send-email</info>.',
	'CLI_HELP_USER_ADD'			=> 'Η εντολή <info>%command.name%</info> πρόσθεσε ένα νέο μέλος:
Αν αυτή η εντολή εκτελείται χωρίς επιλογές, θα σας ζητηθεί να τις εισάγετε.
Για προαιρετική αποστολή μηνύματος ηλεκτρονικού ταχυδρομείου ενεργοποίησης λογαριασμού στο μέλος, χρησιμοποιήστε την επιλογή <info>--send-email</info>.',
	'CLI_HELP_USER_RECLEAN'		=> 'Re-clean usernames will check all stored usernames and ensure clean versions are also stored. Cleaned usernames are a case insensitive form, NFC normalized and transformed to ASCII.',
));

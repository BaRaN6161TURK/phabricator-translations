<?php

final class PhabricatorCoreEl
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'el';
  }

  protected function getTranslations() {
    return array(
      'Question' => 'Ερώτηση',
      'No repository "%s" exists!' => 'Δεν υπάρχει αποθηκευτήριο "%s"!',
      'Save Related Commits' => 'Αποθήκευση σχετικών παραπομπών',
      '%s edited %s.' => 'Ο %s επεξεργάστηκε το %s.',
      'View \'%s\' does not support children.' => 'Η προβολή \'%s\' δεν υποστηρίζει παιδιά.',
      'Move Document' => 'Μετακίνηση εγγράφου',
      'Maximum must be larger than minimum.' => 'Το μεγαλύτερο δεν πρέπει να είναι μικρότερο από το ελάχιστο.',
      'Authored' => 'Συγγραφέας',
      'No config value specified for key \'%s\'.' => 'Δεν ορίστηκε αξία διαμόρφωσης για το κλειδί \'%s\'.',
      'Creators' => 'Δημιουργοί',
      'An absolute date, as a string.' => 'Μια απόλυτη ημερομηνία, ως σειρά.',
      'Your browser timezone setting differs from the timezone setting in your profile, click to reconcile.' => 'Η ρύθμιση ζώνης ώρας του περιηγητή σας διαφέρει από την ρύθμιση ζώνης ώρας του προφίλ σας, κάντε κλικ για διόρθωση.',
      'Minus' => 'Μείον',
      'OPTIMIZE' => 'Βελτιστοποίηση',
      'Capability "%s"' => 'Ικανότητα "%s"',
      'Browse Viewer' => 'Προβολέας περιήγησης',
      'Show patch application status.' => 'Εμφάνιση κατάστασης αναβάθμισης εφαρμογής.',
      'Unsubmitted Comments' => 'Ανυπόβλητα σχόλια',
      'Create Document' => 'Δημιουργία εγγράφου',
      'Iterated MD5' => 'Εξετασμένο MD5',
      'The repository base URI, excluding the "Short Name"' => 'Η βάση URI του αποθηκευτηρίου, εξαιρώντας το μικρό όνομα.',
      'Commented On' => 'Σχολιασμένο σε',
      '%s added %s task(s): %s.' => 'Ο %s πρόσθεσε %s εργασία(-ες): %s.',
      'XHProf' => 'XHProf',
      'Unsupported action "%s".' => 'Μη υποστηριγμένη δράση "%s".',
      'Reopened' => 'ξανανοιγμένο',
      '%s Before' => '%s πριν',
      'Untitled Document' => 'Άτιτλο έγγραφο',
      'Favorites' => 'Αγαπημένα',
      'italic text' => 'Κείμενο με πλάγιους χαρακτήρες',
      'Custom' => 'Εξατομικευμένο',
      '%s (Preview)' => '%s (προεπισκόπηση)',
      'Stopped on Redirect' => 'Σταματημένο σε ανακατεύθυνση',
      'Tasks' => 'Εργασίες',
      'Repository URI' => 'Αποθηκευτήριο URI',
      'Inactive' => 'Ανενεργό',
      'View Email Body' => 'Προβολή σώματος ηλ. ταχυδρομείου',
      'Email Addresses' => 'Διευθύνσεις ηλεκτρονικού ταχυδρομείου',
      'Orange' => 'Πορτοκαλί',
      'Failed' => 'Απέτυχε',
      'Upload Picture' => 'Ανέβασμα εικόνας',
      'Find results with any closed status.' => 'Βρείτε αποτελέσματα με οποιαδήποτε κλειστή κατάσταση.',
      'Packages' => 'Πακέτα',
      'Save Related Revisions' => 'Αποθήκευση σχετικών αναθεωρήσεων',
      'Assigned to Me' => 'Ανατεθειμένο σε εμένα',
      'Author: %s' => 'Συγγραφέας: %s',
      'Revoke' => 'Ανάκληση',
      'Administrators' => 'Διαχειριστές',
      'Normalization of \'%s\'' => 'Κανονικοποίηση του \'%s\'.',
      'Merchant' => 'Έμπορος',
      '%s removed %s as %s.' => 'Ο %s αφαίρεσε τον %s ως %s.',
      'Overview' => 'Επισκόπηση',
      'Example' => 'Παράδειγμα',
      '%s confirmed this job.' => 'Ο %s επιβεβαίωσε αυτή την εργασία.',
      'Previous Day' => 'Προηγούμενη ημέρα',
      'MODIFIED' => 'Τροποποιηένο',
      '(Use Default)' => '(Χρήση προεπιλεγμένου)',
      'Main Request' => 'Κύριο αίτημα',
      'Unknown Error' => 'Άγνωστο σφάλμα',
      '%s added %s task(s) to %s: %s.' => 'Ο %s πρόσθεσε %s εργασία(-ες) προς το %s: %s.',
      'Current Tasks' => 'Τρέχουσες εργασίες',
      'Summary' => 'Σύνοψη',
      'Failed to write %d byte(s) to "%s".' => 'Αποτυχία για την συγγραφή %s μπάιτ προς το "%s".',
      'Three-Way Tree' => 'Δέντρο τριών τρόπων',
      'Current Application' => 'Τρέχουσα εφαρμογή',
      'Duration' => 'Διάρκεια',
      'Meme' => 'Μιμίδιο',
      '(%s -> %s @ %s) %s' => '(%s -> %s @ %s) %s',
      'OLD MySQL VERSION' => 'Παλαιά έκδοση του MySQL',
      'Custom Fields' => 'Εξατομικευμένσ πεδία',
      'Task %s complete! Moved to archive.' => 'Η εργασία %s ολοκληρώθηκε! Μεταφέρθηκε στο αρχείο.',
      'Private Method/Member Access' => 'Ιδιωτική μέθοδος/Πρόσβαση μελών',
      'Comment' => 'Σχολιάστε',
      'Create a Task' => 'Δημιουργήστε μια εργασία',
      'Branch' => 'Παράρτημα',
      'Failure' => 'Αποτυχία',
      '%s has invited you to join Phabricator.' => 'Ο %s σας έχει προσκαλέσει να γίνεται μέλος του Phabricator.',
      'Another user already has that username.' => 'Ένας άλλος χρήστης ήδη χρησιμοποιεί αυτό το όνομα χρήστη.',
      '%s added %s edge(s): %s.' => 'Ο %s πρόσθεσε %s άκρη(-ες): %s.',
      'Too Short' => 'Πολύ μικρό',
      'Type an object name...' => 'Πληκτρολογείστε το όνομα αντικειμένου...',
      'Other Project...' => 'Άλλο εγχείρημα...',
      'Phabricator' => 'Phabricator',
      'Utilities' => 'Ικανότητες',
      'Tomorrow' => 'Αύριο',
      'Variable' => 'Μεταβλητή',
      'Bold' => 'Έντονα',
      'Failed to write %d byte(s) to file "%s".' => 'Αποτυχία για την συγγραφή %s μπάιτ προς το αρχείο "%s".',
      'Active Repositories' => 'Ενεργά αποθηκευτήρια',
      'Unable to Reach Any Database' => 'Αποτυχία στο φτάσιμο κάποιας βάσης δεδομένων',
      '%s After' => '%s μετά',
      'Expiration' => 'Λήξη',
      'Members' => 'Μέλη',
      'Grey' => 'Γκρι',
      'Color' => 'Χρώμα',
      'Order' => 'Σειρά',
      'Users with the "%s" capability:' => 'Χρήστες με την ικανότητα "%s":',
      'Protocol' => 'Πρωτόκολλο',
      'Administrator' => 'Διαχειριστής',
      'Requestor' => 'Αιτών',
      'Worker has no task ID.' => 'Ο εργάτης δεν έχει αναγνωριστικό εργασίας.',
      'Complete' => 'Πλήρης',
      '(%d line(s))' => '(%s γραμμή(-ές))',
      'Open Status' => 'Άνοιγμα κατάστασης',
      'Visible' => 'Ορατό',
      'Enable' => 'Ενεργοποιήσει',
      'Active Revisions' => 'Ενεργές αναθεωρήσεις',
      'Up' => 'Πάνω',
      'Direct Subtask' => 'Άμεση υποεργασία',
      'HMAC-SHA256 requires a nonempty key.' => 'Το HMAC-SHA256 απαιτεί ένα μη άδειο κλειδί.',
      'Almanac Services' => 'Υπηρεσίες αλμανάκ',
      '(Show All)' => 'Εμφάνιση Όλων',
      'EXTRACT' => 'Εξαγωγή',
      'Drafts' => 'Πρόχειρα',
      'Wed' => 'Τε',
      'Draft' => 'Πρόχειρο',
      'Today' => 'Σήμερα',
      '%s checked %s.' => 'Ο %s έλεγξε τον %s.',
      'REPOSITORY' => 'Αποθηκευτήριο',
      'No "%s" in task data.' => 'Κανένα "%s" στα δεδομένα εργασίας.',
      'username' => 'Όνομα χρήστη',
      'Mon' => 'Δε',
      'Limit' => 'Όριο',
      'Browse Statuses' => 'Περιήγηση Καταστάσεων',
      'Metadata' => 'Μεταδεδομένα',
      'Current Viewer' => 'Τρέχων προβολέας',
      'Show Older Changes' => 'Εμφάνιση παλαιότερων αλλαγών',
      'Current Algorithm' => 'Τρέχων αλγόριθμος',
      'Security Checkpoint' => 'Σημείο ελέγχου ασφαλείας',
      'Any Closed Status' => 'Οποιαδήποτε κλειστή κατάσταση',
      'Coverage (All)' => 'Κάλυψη (όλα)',
      '%s %s' => '%s %s',
      'Bug' => 'Σφάλμα',
      'Passed' => 'Περασμένος',
      'No notifications.' => 'Καμία ενημέρωση.',
      'Parents' => 'Γονείς',
      'Task %d failed!' => 'Η εργασία %s απέτυχε!',
      'Object' => 'Αντικείμενο',
      'No issues.' => 'Χωρίς προβλήματα.',
      'null' => 'κενό',
      'File' => 'Αρχείο',
      'Badges' => 'Σήματα',
      'Extracting "%s"...' => 'Εξαγωγή του "%s"...',
      'Choose a policy with "%s", "%s" or "%s".' => 'Επιλέξτε μια πολιτική με το "%s", "%s" ή το "%s".',
      'Copied to multiple locations:' => 'Αντιγράφθηκε σε πολλαπλές τοποθεσίες:',
      'Note' => 'Σημείωση',
      'Plus' => 'Συν',
      'Checkered' => 'Ελεγμένο',
      'Version' => 'Έκδοση',
      'Submit' => 'Υποβολή',
      'Revisions' => 'Αναθεωρήσεις',
      '%s:' => '%s:',
      'Continue' => 'Συνέχεια',
      'All Documents' => 'Όλα τα έγγραφα',
      '%s was cancelled.' => 'Το %s ακυρώθηκε.',
      '<incomplete key>' => '<ανολοκλήρωτο κλειδί>',
      'Quote' => 'Απόσπασμα',
      'Folder' => 'Φάκελος',
      'Issues' => 'Θέματα',
      'This was an Ajax request.' => 'Αυτό ήταν ένα ερώτημα Ajax.',
      'Username is required.' => 'Όνομα χρήστη απαιτείται.',
      '100',
      'Repository' => 'Αποθηκευτήριο',
      'Empty' => 'Κενό',
      'Define \'%s\' in your configuration to continue.' => 'Ορίστε το \'%s\' στον προσδιορισμό σας για να συνεχίσετε.',
      'Next Day' => 'Επόμενη ημέρα',
      '<Unknown: %s>' => '<Άγνωστο: %s>',
      'Any' => 'Οποιοδήποτε',
      'Serious Business' => 'Σοβαρή δουλειά',
      'Unknown grouped transaction type!' => 'Άγνωστος ομαδοποιημένος τύπος συναλλαγών!',
      'Service' => 'Υπηρεσία',
      'Continue anyway?' => 'Συνέχεια όπως και αν έχει',
      'Menu item \'%s\' is not a label!' => 'Το αντικείμενο μενού \'%s\' δεν είναι ετικέτα!',
      'Edit Menu' => 'Μενού επεξεργασίας',
      'Waiting' => 'Περιμένοντας',
      'Disable Provider?' => 'Απενεργοποίηση παρόχου;',
      '%s' => '%s',
      'In Use' => 'Σε χρήση',
      'A file PHID.' => 'Ένα αρχείο PHID.',
      'Yellow' => 'Κίτρινο',
      '%s updated the description for %s.' => 'Ο %s ενημέρωσε την περιγραφή για το %s.',
      'Thu' => 'Πε',
      'Unknown part type \'%s\'!' => 'Άγνωστος τύπος μέρους \'%s\'!',
      '%s marked this job complete.' => 'Ο %s επισήμανε την εργασία ως πλήρης.',
      'Welcome to %s' => 'Καλώς ήρθατε στο %s',
      'Unknown %s mechanism!' => 'Άγνωστος μηχανισμός %s!',
      '%s with bad key.' => '%s με κακό κλειδί.',
      'IDs \'%s\' and \'%s\' are distinct.' => 'Τα αναγνωριστικά \'%s\' και \'%s\' είναι ξεχωριστά.',
      'Learn More' => 'Μάθετε περισσότερα',
      'Default Edit Policy' => 'Προεπιλεγμένη πολιτική επεξεργασίας',
      '· · ·' => '· · ·',
      'Worker has invalid job ID ("%s").' => 'Ο εργάτης έχει μη έγκυρο αναγνωριστικό εργασίας ("%s").',
      'Host' => 'Εξυπηρετητής',
      'All Settings' => 'Όλες οι ρυθμίσεις',
      '"%s"' => '%s',
      'Call %s before using results (key = \'%s\').' => 'Καλέστε το %s πριν χρησιμοποιήσετε τα αποτελέσματα (κλειδί = \'%s\').',
      'Allow' => 'Επιτρέψτε',
      'Broken' => 'Σπασμένο',
      'Browse Packages' => 'Περιήγηση πακέτων',
      'Select all tasks of a given class.' => 'Επιλογή όλων των εργασιών μιας δοσμένης τάξης.',
      '%s \'%s\' has a patch, \'%s\', with an unknown property, \'%s\'.Patches must have only valid keys: %s.' => 'Ο %s \'%s\' έχει μια αναβάθμιση, \'%s\', με άγνωστη ιδιοκτησία, την \'%s\'. Οι αναβαθμίσεις πρέπει να έχουν μόνο έγκυρα κλειδιά: %s.',
      'Test data created with bin/lipsum.' => 'Δοκιμαστικά δεδομένα δημιουργημένα με το bin/lipsum.',
      'Italics' => 'Πλάγια',
      'Preamble' => 'Προοίμιο',
      '-' => '-',
      'Revision' => 'Αναθεώρηση',
      '%s removed %s task(s) from %s: %s.' => 'Ο %s αφαίρεσε %s εργασία(-ες) προς το %s: %s.',
      'Unknown status \'%s\'!' => 'Άγνωστη κατάσταση \'%s\'!',
      'Type' => 'Πληκτρολογήστε',
      'Add New Address' => 'Προσθέστε νέα διεύθυνση',
      'Invalid Credentials' => 'Μη έγκυρα διαπιστευτήρια',
      'A Controller must implement %s before you can invoke %s or %s.' => 'Ένας ελεγκτής πρέπει να υλοποιήσει το %s πριν να μπορέσετε να επικαλέσετε το %s ή το %s.',
      'Authorized By' => 'Εξουσιοδοτημένος από',
      'You are being redirected to: %s' => 'Πρόκειται να ανακατευθυνθείτε στο: %s',
      'From' => 'Από',
      'Reset Password' => 'Επαναφορά κωδικού',
      '%s removed %s task(s): %s.' => 'Ο %s αφαίρεσε %s εργασία(-ες): %s.',
      'Personal' => 'Προσωπικό',
      'Class' => 'Κλάση',
      'Default View Policy' => 'Προεπιλεγμένη πολιτική προβολής',
      'Tuesday' => 'Τρίτη',
      'Needs Verification' => 'Χρειάζεται επιβεβαίωση',
      'SKIP' => 'Παράβλεψη',
      '%s, %s' => '%s, %s',
      'Amount' => 'Ποσόν',
      'Created By' => 'Δημιουργήθηκε από',
      'Comma-separated list of PHIDs.' => 'Κατάλογος PHID χωρισμένων με κόμμα.',
      'Deleted' => 'Διεγράφη.',
      'Application Emails' => 'Διεύθυνση ηλεκτρονικού ταχυδρομείου της εφαρμογής',
      'Permanently destroy all data?' => 'Μόνιμη διαγραφή όλων των δεδομένων;',
      'Build Status' => 'Δημιουργία κατάστασης',
      'No Owner' => 'Χωρίς ιδιοκτήτη.',
      'Normal' => 'Κανονικό',
      'Unsupported order "%s".' => 'Μη υποστηριγμένη σειρά "%s".',
      'Shift' => 'Shift',
      'Unsupported VCS!' => 'Μη υποστηριζόμενο VCS!',
      '%s <%s>' => '%s <%s>',
      'Select any closed status.' => 'Επιλογή οποιασδήποτε κλειστής κατάστασης.',
      'Sun' => 'Κυ',
      'Change Password' => 'Αλλαγή Κωδικού πρόσβασης',
      'Conpherence Room' => 'Δωμάτιο Conpherence',
      'No %s' => 'Κανένα %s',
      'FREE' => 'Δωρεάν',
      'To: %s' => 'Προς: %s',
      'Prototypes' => 'Πρωτότυπα',
      'Request' => 'Αίτημα',
      'The repository name.' => 'Το όνομα του αποθηκευτηρίου.',
      '%s created this document.' => 'Ο %s δημιούργησε το έγγραφο.',
      '%s got test event at %d' => 'Ο %s έλαβε δοκιμαστικό συμβάν στο %s',
      'Login' => 'Σύνδεση',
      'Log Out' => 'Αποσύνδεση',
      'Owners' => 'Ιδιοκτήτες',
      'Current' => 'Τρέχον',
      'Closed, Resolved' => 'Κλειστό, Λυμένο',
      'Image' => 'Εικόνα',
      'Version %s' => 'Έκδοση %s',
      'Path' => 'Διαδρομή',
      'Down Right' => 'Κάτω δεξιά',
      'Stopped' => 'Σταμάτησε',
      'Mixture of usernames and PHIDs.' => 'Ανάμειξη ονομάτων χρήστη και PHID.',
      'Where' => 'Που',
      'Tue' => 'Τρ',
      'Unable to find \'sudo\'!' => 'Αποτυχία στην εύρεση του \'sudo\'!',
      'Edit' => 'Επεξεργασία',
      'All Jobs' => 'Όλες οι δουλειές',
      'Create Subtask' => 'Δημιουργία υποεργασίες',
      'Invited' => 'Προσκεκλημμένος',
      'Next Month' => 'Επόμενος μήνας',
      'Commit %s' => 'Παραπομπή του %s',
      'No more than 7 columns per view.' => 'Όχι περισσότερες από 7 στήλες ανά προβολή.',
      'Yes' => 'Ναι',
      'Projects' => 'Εγχειρήματα',
      'Pink' => 'Ροζ',
      'GitHub' => 'GitHub',
      'Unknown field role \'%s\'!' => 'Άγνωστος ρόλος πεδίου \'%s\'!',
      'Default Picture' => 'Προεπιλεγμένη εικόνα',
      'Invalid' => 'Μη έγκυρο',
      'CANCELLED' => 'Ακυρωμένο',
      'Fullscreen Mode' => 'Λειτουργία πλήρης οθόνης',
      'Description' => 'Περιγραφή',
      'Wednesday' => 'Τετάρτη',
      'Storage on "%s" was destroyed.' => 'Ο αποθηκευτικός χώρος στο "%s" καταστράφηκε.',
      'Subscriptions' => 'Συνδρομές',
      'Invalid timezone \'%s\'!' => 'Άγνωστη ζώνη ώρας \'%s\'!',
      'Configured search engine type "%s" is unknown. Valid engines are: %s.' => 'Ο προσδιορισμένος τύπος μηχανής αναζήτησης "%s" είναι άγνωστος. Οι έγκυρες μηχανές είναι οι: %s',
      'Type a field value...' => 'Πληκτρολογήστε μια αξία πεδίου...',
      'No documents found.' => 'Δεν βρέθηκαν έγγραφα',
      'Updated %s' => 'Ενημερωμένο %s',
      '%s must implement %s.' => 'Ο %s πρέπει να υλοποιήσει το %s.',
      'Users' => 'Χρήστες',
      'Git' => 'Git',
      'Edit Picture' => 'Επεξεργασία εικόνας',
      'Public Key' => 'Δημόσιο κλειδί',
      'Design' => 'Σχεδιασμός',
      '%s edited %s task(s) for %s, added %s: %s; removed %s: %s.' => 'Ο %s επεξεργάστηκε %s εργασία(-ες) για το %s, πρόσθεσε: %s, %s, αφαίρεσε: %s, %s.',
      'Edit Document: %s' => 'Επεξεργασία εγγράφου: %s',
      'Untitled Story' => 'Άτιτλη ιστορία',
      'No task exists with class "%s" and at least %d failures!' => 'Δεν υπάρχει εργασία με τάξη "%s" και τουλάχιστον %s αποτυχίες!',
      'DOCUMENT DETAIL' => 'Λεπτομέρεια εγγράφου',
      'Archived or active status.' => 'Αρχειοθετημένη ή ενεργή κατάσταση.',
      '?' => ';',
      'Affected package owners' => 'Επηρεασμένοι ιδιοκτήτες πακέτων',
      'Affected packages' => 'Επηρεασμένα πακέτα',
      'TOTAL' => 'Συνολικά',
      'Services' => 'Υπηρεσίες',
      'More than one result from %s!' => 'Πάνω από ένα αποτέλεσμα από το %s!',
      'Global' => 'Καθολικό',
      'URIs' => 'URI',
      'Example: %s' => 'Παράδειγμα: %s',
      'Seconds' => 'δευτερόλεπτα',
      'Task class \'%s\' does not extend %s.' => 'Η τάξη εργασιών \'%s\' δεν επεκτείνει το %s.',
      'No packages found.' => 'Δεν βρέθηκαν πακέτα.',
      'Basics' => 'Βασικά',
      'Author' => 'Συγγραφέας',
      'See Documentation' => 'Βλέπε τεκμηρίωση',
      'Exact Names' => 'Ακριβή ονόματα',
      'Accepted' => 'Δεκτό',
      'Target' => 'Στόχος',
      'Good' => 'Καλό',
      'Responds to requests made by AJAX clients.' => 'Απαντά σε αιτήματα που έγιναν από πελάτες του AJAX.',
      'Analysis' => 'Ανάλυση',
      'Working on task %d (%s)...' => 'Εργάζεται στην εργασία %s (%s)...',
      'Phriction' => 'Phriction',
      'Custom Policy...' => 'Εξατομικευμένη πολιτική...',
      'New' => 'Νέο',
      'Test' => 'Δοκιμή',
      'Change' => 'Αλλαγή',
      'Copied from %s' => 'Αντιγράφηκε από %s',
      'Column' => 'Στήλη',
      'Partial' => 'Μερικό',
      'Not Applicable' => 'Μη εφαρμόσιμο',
      'Not Unique' => 'Μη μοναδικό',
      'Unable to select tab ("%s") which does not exist.' => 'Αποτυχία στην επιλογή ετικέτας ("%s") που δεν υπάρχει.',
      'Analyzed %d table(s).' => 'Αναλύθηκαν %s πίνακας(-ες).',
      'Count' => 'Μέτρηση',
      'Reverse Tree' => 'Δέντρο αναστροφής',
      'Enable Provider?' => 'Ενεργοποίηση παροχέα;',
      'Elastic Version' => 'Ελαστική έκδοση',
      'Documents' => 'Έγγραφα',
      'Core' => 'Πυρήνας',
      'Message' => 'Μήνυμα',
      'Phurl' => 'Phurl',
      'Edit Related Tasks' => 'Επεξεργασία σχετικών εργασιών',
      'View' => 'Προβολή',
      'Part of the month is out of range' => 'Μέρος του μήνα είναι εκτός εύρους',
      'All' => 'Όλα',
      '%s updated %s, removed %s: %s.' => 'Ο %s ενημέρωσε το %s, αφαίρεσε τα: %s, %s.',
      'Aliases' => 'Αλλώνυμα:',
      'name' => 'Όνομα',
      '%s unresolved issues.' => '%s άλυτα ζητήματα.',
      'Sat' => 'Σα',
      'Notify' => 'Ειδοποίηση',
      'Found %s modified file(s) (of %s total).' => 'Βρέθηκαν %s τροποποιημένα αρχείο(-α)(από %s συνολικά).',
      'Reply' => 'Απάντηση',
      'Show a specific number of SMS messages (default 100).' => 'Εμφάνιση συγκεκριμένου αριθμού μηνυμάτων SMS (προεπιλεγμένο 100 μηνύματα).',
      'Time' => 'Χρόνος',
      'No time specified.' => 'Δεν ορίστηκε χρόνος.',
      'Files' => 'Αρχεία',
      'Badge' => 'Σήματα',
      'Created Before' => 'Δημιουργήθηκε πριν',
      'Invalid search engine type: %s. Valid types are: %s.' => 'Μη έγκυρος τύπος μηχανής αναζήτησης: %s. Οι έγκυροι τύποι είναι οι: %s.',
      'Space' => 'Χώρος',
      'Source' => 'Πηγή',
      'Mail receiver is not a %s!' => 'Ο παραλήπτης του μηνύματος δεν είναι ένας %s!',
      'Assigned: %s' => 'Ανατεθειμένο: %s',
      'Download File' => 'Λήψη αρχείου',
      'Create' => 'Δημιουργία',
      'Created After' => 'Δημιουργήθηκε μετά',
      '...' => '...',
      'None' => 'Πριν',
      'Missing Permission' => 'Λείπει άδεια',
      'Subscribers' => 'Συνδρομητές',
      'The name can be no longer than %s characters.' => 'Το όνομα δεν μπορεί να είναι μεγαλύτερο από %s χαρακτήρες.',
      'Really destroy all data forever?' => 'Διαγραφή όλων των δεδομένων για πάντα πραγματικά;',
      '%s reopened %s.' => 'Ο %s ξανάνοιξε το %s.',
      'Asked by %s on %s.' => 'Ερωτήθηκε από τον %s στο %s.',
      'Created by %s' => 'Δημιουργήθηκε από τον %s',
      'Editable By' => 'Επεξεργάσιμο από',
      'Name' => 'Όνομα',
      'Home' => 'Αρχική',
      'Icon' => 'Εικονίδιο',
      'Previous Month' => 'Προηγούμενος μήνας',
      'From: %s' => 'Από: %s',
      'Objects' => 'Αντικείμενα',
      'Any Open Status' => 'Οποιαδήποτε ανοιχτή κατάσταση',
      'Not Applied' => 'Δεν έχει εφαρμοστεί',
      'Running' => 'Εκτελείται',
      'Path "%s" contains no libphutil libraries.' => 'Η διαδρομή "%s" δεν περιέχει βιβλιοθήκες libphutil.',
      'Package' => 'Πακέτο',
      'Label' => 'Ετικέτα',
      'Active or archived status.' => 'Ενεργή ή αρχειοθετημένη κατάσταση.',
      'Notifications' => 'Ενημερώσεις',
      'Configuration' => 'Διαμόρφωση',
      'Thursday' => 'Πέμπτη',
      'Optimizing table "%s"."%s"...' => 'Βελτιστοποίηση πίνακα "%s". "%s"...',
      'Title' => 'Τίτλος',
      'Permanent Field' => 'Μόνιμο πεδίο',
      'Applications' => 'Εφαρμογές',
      'Real Name' => 'Πραγματικό όνομα',
      'That comment is not editable!' => 'Αυτό το σχόλιο δεν είναι επεξεργάσιμο!',
      'Cancel' => 'Ακύρωση',
      'Status Details' => 'Λεπτομέρειες κατάστασης',
      'Recipients' => 'Παραλήπτες',
      'Limit 3 actions per item.' => 'Όριο 3 δράσεις ανά αντικείμενο.',
      'Permanently destroy all storage and data.' => 'Μόνιμη καταστροφή όλης της αποθήκης και των δεδομένων.',
      'Valid Setting' => 'Έγκυρη ρύθμιση',
      'Occurs Before' => 'Συμβαίνει πριν',
      '%s updated %s for %s, added %d: %s.' => 'Ο %s ενημέρωσε το %s για το %s, πρόσθεσε τα: %s, %s.',
      'No configuration source set!' => 'Δεν ορίστηκε πηγή διαμόρφωσης!',
      'No messages.' => 'Χωρίς μηνύματα.',
      'Interface' => 'Διεπαφή',
      'All Tasks' => 'Όλες οι εργασίες',
      'Plaintext' => 'Επίπεδο κείμενο',
      'Installed' => 'Εγκατεστημένο',
      'You must choose a project.' => 'Πρέπει να επιλέξετε εγχείρημα',
      'Available' => 'Διαθέσιμο',
      'Wrote to undeclared property %s.' => 'Γράφτηκε σε αδήλωτη ιδιοκτησία %s.',
      'Provider' => 'Πάροχος',
      'Blue' => 'Μπλε',
      'Developer Settings' => 'Ρυθμίσεις προγραμματιστή',
      'This was a Web request.' => 'Αυτό ήταν ένα διαδικτυακό ερώτημα.',
      'File PHID.' => 'Αρχείο PHID.',
      'PHP' => 'PHP',
      'Repository projects' => 'Εγχειρήματα αποθηκευτηρίου',
      'Common' => 'Κοινόχρηστο',
      'Developer' => 'Προγραμματιστής',
      'Unable to resolve method \'%s\'.' => 'Αποτυχία στην επίλυση της μεθόδου \'%s\'.',
      'Methods' => 'Μέθοδοι',
      'Error' => 'Σφάλμα',
      'Expected task data to be a dictionary.' => 'Τα προσδοκόμενα δεδομένα εργασίας να είναι λεξικό.',
      'No task exists with class "%s"!' => 'Δεν υπάρχει εργασία με τάξη "%s"!',
      'Permanent failure!' => 'Μόνιμη αποτυχία!',
      'Form' => 'Φόρμα',
      'Not Done' => 'Δεν έγινε',
      'Default' => 'Προεπιλεγμένο',
      'If you are not developing Phabricator itself, report this issue to the upstream.' => 'Εάν δεν αναπτύσσετε τον Phabricator μόνοι σας, αναφέρετε αυτό το πρόβλημα.',
      'Never' => 'Ποτέ',
      'Enable Provider' => 'Ενεργοποίηση παρόχου',
      'Database / Table' => 'Βάση δεδομένων / πίνακας',
      'No' => 'Όχι',
      '%s deleted %s.' => 'Ο %s διέγραψε τον %s.',
      'New Value' => 'Νέα Τιμή',
      'Mail receiver is not a %s.' => 'Ο παραλήπτης του μηνύματος δεν είναι ένας %s.',
      'Tags' => 'Ετικέτες',
      'Email' => 'Διεύθυνση ηλ. ταχυδρομείου',
      'Username' => 'Όνομα χρήστη',
      '%s returns %s' => 'Ο %s επιστρέφει τον %s.',
      'No One' => 'Όχι κάποιο',
      'Elasticsearch' => 'Ελαστική αναζήτηση',
      'Account' => 'Λογαριασμός',
      '%s accepted %s.' => 'Ο %s δέχτηκε τον %s.',
      'Destroyed' => 'Καταστράφηκε',
      'Assigned Tasks' => 'Ανατεθειμένες εργασίες',
      'Unique' => 'Μοναδικό',
      'Resources' => 'Πόροι',
      'Found unexpected task status ("%s").' => 'Βρέθηκε απροσδόκητη κατάσταση εργασίας ("%s").',
      'Method' => 'Μέθοδος',
      'External Interface' => 'Εξωτερική διεπαφή',
      'Priority' => 'Προτεραιότητα',
      'True' => 'Αληθές',
      '%s on empty object' => '%s σε άδειο αντικείμενο',
      'Colors' => 'Χρώματα',
      'Closed' => 'Κλειστός',
      'Content Sources' => 'Πηγές περιεχομένου',
      'Find User:' => 'Εύρεση χρήστη:',
      'Ancestry of \'%s\'' => 'Πρόγονοι του \'%s\'',
      'Language' => 'Γλώσσα',
      'ID1 exists.' => 'Το αναγνωριστικό 1 υπάρχει.',
      '%s unchecked %s.' => 'Ο %s ξεέλεγξε τον %s.',
      'ID' => 'Αναγνωριστικό',
      'Owner' => 'Ιδιοκτήτης',
      'Translations' => 'Μεταφράσεις',
      'Left' => 'Αριστερά',
      'Copied to %s' => 'Αντιγράφηκε στο %s',
      'Recent Activity' => 'Πρόσφατη δραστηριότητα',
      'Current Revisions' => 'Τρέχοντες αναθεωρήσεις',
      'View History' => 'Προβολή ιστορικού',
      'Password' => 'Κωδικός πρόσβασης',
      '%s unread messages.' => '%s αδιάβαστα μαθήματα.',
      'Policies' => 'Πολιτικές',
      'Executing task %d (%s)...' => 'Εκτελείται η εργασία %s (%s)...',
      '%s removed %s edge(s): %s.' => 'Ο %s αφαίρεσε %s άκρη(-ες): %s.',
      'Value' => 'Τιμή',
      'ACCESS DENIED' => 'Η πρόσβαση απορρίφθηκε',
      'Responsible Users' => 'Υπεύθυνοι χρήστες',
      'History' => 'Ιστορικό',
      'First' => 'Πρώτο',
      'Mail' => 'Διεύθυνση ηλ. ταχυδρομείου',
      'No data available.' => 'Δεν υπάρχουν διαθέσιμα δεδομένα.',
      'Test User %s' => 'Δοκιμαστικός χρήστης %s',
      'Activate' => 'Ενεργοποίηση',
      'Input: %s' => 'Εισαγωγή: %s',
      'Monday' => 'Δευτέρα',
      'Green' => 'πράσινο',
      'Types' => 'Τύποι',
      'Mail Tags' => 'Ετικέτες ταχυδρομείου',
      'No data.' => 'Χωρίς δεδομένα.',
      'Start' => 'Έναρξη',
      'Right' => 'Σωστό',
      'Pending' => 'Σε εκκρεμότητα',
      'Duplicate' => 'Διπλότυπο',
      'Table of Contents' => 'Πίνακας Περιεχομένων',
      'Edited' => 'Επεξεργασμένο',
      'Action' => 'Ενέργεια',
      'False' => 'Ψευδές',
      '%s renamed %s from %s to %s.' => 'Ο %s μετονόμασε το %s από %s σε %s.',
      'Tag' => 'Ετικέτα',
      'Installation Guide' => 'Οδηγός εγκατάστασης',
      'Expand' => 'Ανάπτυξη',
      'project' => 'Εγχείρημα',
      'Ignore' => 'Αγνόηση',
      '%s resigned from %s.' => 'Ο %s παραιτήθηκε από το %s.',
      'Entering High Security' => 'Μπαίνει σε υψηλή ασφάλεια',
      'Make Default' => 'Προεπιλεγμένο',
      'Disable' => 'Απενεργοποίηση',
      'Property' => 'Ιδιότητα',
      'Task %d (%s)' => 'Εργασία %s (%s)',
      'Daily Routine (Pre-Adjust)' => 'Καθημερινή ρουτίνα (προεπιλεγμένη)',
      'Direct Parent' => 'Άμεσος γονέας',
      '403 Forbidden' => '403 Απαγορευμένο',
      'All Day' => 'Όλη μέρα',
      'Collapse' => 'Σύμπτυξη',
      'Okaaaaaaaaaaaaaay...' => 'Ενταξει...',
      'Building' => 'Κτίριο',
      'Storage' => 'Αποθηκευτικός χώρος',
      '%s Day(s) Ago' => '%s ημέρα(-ες) πριν',
      'Date Updated (Latest First)' => 'Ημερομηνία ενημερώθηκε (πρώτη πιο πρόσφατη)',
      'Via %s' => 'Μέσω %s',
      'Documentation' => 'Τεκμηρίωση',
      'Console' => 'Κονσόλα',
      'User' => 'Χρήστης',
      'No sent SMS.' => 'Κανένα εσταλμένο SMS.',
      'Goal' => 'Στόχος',
      '%s us' => '%s εμάς',
      'Create Product' => 'Δημιουργία προϊόντος',
      'Global Default' => 'καθολικό προεπιλεγμένο',
      'Up Right' => 'Πάνω δεξιά',
      'data' => 'Δεδομένα',
      '(%s)' => '(%s)',
      'Closed, Invalid' => 'Κλειστό, άκυρο',
      '%s updated %s.' => 'Ο %s ενημέρωσε το %s.',
      'Cancelled' => 'Ακυρωμένο',
      '%s updated the description.' => 'Ο %s ενημέρωσε την περιγραφή.',
      'Change Details' => 'Αλλαγή λεπτομερειών',
      'Owner: %s' => 'Ιδιοκτήτης: %s',
      'Operations' => 'Λειτουργίες',
      '(via %s)' => '(μέσω του %s)',
      'Versions' => 'Εκδόσεις',
      'CVC' => 'CVC',
      'End' => 'Τέλος',
      '%s archived %s.' => 'Ο %s αρχειοθέτησε το %s.',
      '%s set %s to %s.' => 'Ο %s όρισε το %s στο %s.',
      'Applied' => 'Εφαρμοσμένο',
      'Find Emoji:' => 'Εύρεση εμότζι:',
      'Subversion' => 'Υποέκδοση',
      'Device' => 'Συσκευή',
      'View More...' => 'Προβολή περισσότερων...',
      'Attributes' => 'Αποδόσεις',
      'All Logs' => 'Όλα τα μητρώα',
      'Actors' => 'Δράστες',
      'Active' => 'Ενεργό',
      'Reviewer' => 'Κριτικός',
      'Locked' => 'Κλειδωμένο',
      'Mode' => 'Λειτουργία',
      'Edit Account' => 'Επεξεργασία λογαριασμού',
      'Web' => 'Ιστός',
      'Down Left' => 'Κάτω αριστερά',
      '%s edited %s on %s.' => 'Ο %s επεξεργάστηκε το %s στο %s.',
      'Always' => 'Πάντα',
      'Site Not Found' => 'Η σελίδα δεν βρέθηκε',
      'Expires' => 'Λήγει',
      'Restricted' => 'Περιορισμένο',
      'Supported formats: %s' => 'Υποστηριζόμενες μορφές: %s',
      '(Any)' => '(Οποιοδήποτε)',
      'Show More' => 'Εμφάνιση περισσότερων',
      'ARCHIVED' => 'Αρχειοθετημένο',
      'Created' => 'Δημιουργήθηκε',
      'Audio' => 'Ήχος',
      'ID2 exists.' => 'Το αναγνωριστικό 2 υπάρχει.',
      'Event' => 'Συμβάν',
      'Calendar' => 'Ημερολόγιο',
      'Code' => 'Κωδικός',
      'Communication' => 'Επικοινωνία',
      'Failed to load comment "%s".' => 'Αποτυχία στην φόρτωση του σχολίου "%s".',
      'Loading...' => 'Φόρτωση σε εξέλιξη...',
    );
  }

}
<?php

final class PhabricatorPhrictionEn
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'en';
  }

  protected function getTranslations() {
    return array(
      'The path to the document.' => 'The path to the document.',
      'No such document.' => 'No such document.',
      'DOCUMENT DIFF' => 'DOCUMENT DIFF',
      'This document was moved from %s.' => 'This document was moved from %s.',
      'A moved document can not be moved again.' => 'A moved document can not be moved again.',
      'Next Change »' => 'Next Change »',
      'Last Edited' => 'Last Edited',
      'Moved' => 'Moved',
      'Other document activity not listed above occurs.' => 'Other document activity not listed above occurs.',
      'DOCUMENT CONTENT' => 'DOCUMENT CONTENT',
      'EDIT NOTES' => 'EDIT NOTES',
      'Missing Ancestor' => 'Missing Ancestor',
      'This document has been moved to %s. You can edit it to put new content here, or use history to revert to an earlier version.' => 'This document has been moved to %s. You can edit it to put new content here, or use history to revert to an earlier version.',
      'Retrieve information about a Phriction document.' => 'Retrieve information about a Phriction document.',
      'A document\'s subscribers change.' => 'A document\'s subscribers change.',
      'Unknown document status \'%s\'!' => 'Unknown document status \'%s\'!',
      'Overwrite Changes' => 'Overwrite Changes',
      'Can Not Delete Document!' => 'Can Not Delete Document!',
      'No parent/ancestor paths specified.' => 'No parent/ancestor paths specified.',
      'Unknown URI type \'%s\'!' => 'Unknown URI type \'%s\'!',
      'Document path "%s" is not a valid path. The normalized form of this path is "%s".' => 'Document path "%s" is not a valid path. The normalized form of this path is "%s".',
      'Stubbed' => 'Stubbed',
      'There is no document here, but you may create it.' => 'There is no document here, but you may create it.',
      'Edit Notes' => 'Edit Notes',
      'Phriction Wiki Document' => 'Phriction Wiki Document',
      'You can not move this document there, because it would overwrite an existing document which is already at that location. Move or delete the existing document first.' => 'You can not move this document there, because it would overwrite an existing document which is already at that location. Move or delete the existing document first.',
      'To edit a wiki document, you must also be able to view all of its ancestors.' => 'To edit a wiki document, you must also be able to view all of its ancestors.',
      'Content Changes' => 'Content Changes',
      'Document Hierarchy' => 'Document Hierarchy',
      'This document was moved from elsewhere.' => 'This document was moved from elsewhere.',
      'More...' => 'More...',
      'A document\'s title changes.' => 'A document\'s title changes.',
      'Current Path' => 'Current Path',
      '(Untitled Document)' => '(Untitled Document)',
      'Phriction User Guide' => 'Phriction User Guide',
      'Content' => 'Content',
      'Update a Phriction document.' => 'Update a Phriction document.',
      'Document Content' => 'Document Content',
      'Last Author' => 'Last Author',
      'Another user made changes to this document after you began editing it. Do you want to overwrite their changes? (If you choose to overwrite their changes, you should review the document edit history to see what you overwrote, and then make another edit to merge the changes if necessary.)' => 'Another user made changes to this document after you began editing it. Do you want to overwrite their changes? (If you choose to overwrite their changes, you should review the document edit history to see what you overwrote, and then make another edit to merge the changes if necessary.)',
      'Can not create document because the parent document with slug %s does not exist!' => 'Can not create document because the parent document with slug %s does not exist!',
      'Accept Path' => 'Accept Path',
      'Edit this Document' => 'Edit this Document',
      'Document History: %s' => 'Document History: %s',
      'Ancestor Paths' => 'Ancestor Paths',
      'To view a wiki document, you must also be able to view all of its ancestors. The most-restrictive view policy of this document\'s ancestors is "%s".' => 'To view a wiki document, you must also be able to view all of its ancestors. The most-restrictive view policy of this document\'s ancestors is "%s".',
      'Wiki Documents' => 'Wiki Documents',
      'This document has been moved. You can edit it to put new content here, or use history to revert to an earlier version.' => 'This document has been moved. You can edit it to put new content here, or use history to revert to an earlier version.',
      'Create This Document' => 'Create This Document',
      'Document this content is for.' => 'Document this content is for.',
      '%s deleted this document.' => '%s deleted this document.',
      'Revert to Version %s...' => 'Revert to Version %s...',
      '<%s>' => '<%s>',
      'No previous change' => 'No previous change',
      'This method is frozen and will eventually be deprecated. New code should use "phriction.content.search" instead.' => 'This method is frozen and will eventually be deprecated. New code should use "phriction.content.search" instead.',
      'An already deleted document can not be deleted.' => 'An already deleted document can not be deleted.',
      'Stub' => 'Stub',
      'discard this draft' => 'discard this draft',
      'This method is frozen and will eventually be deprecated. New code should use "phriction.document.search" instead.' => 'This method is frozen and will eventually be deprecated. New code should use "phriction.document.search" instead.',
      'No such document exists.' => 'No such document exists.',
      'Edit Existing Document?' => 'Edit Existing Document?',
      'Read information about Phriction documents.' => 'Read information about Phriction documents.',
      '%s by %s' => '%s by %s',
      'No later changes' => 'No later changes',
      'The document %s already exists. Do you want to edit it instead?' => 'The document %s already exists. Do you want to edit it instead?',
      'A deleted document can not be moved.' => 'A deleted document can not be moved.',
      'Printable Page' => 'Printable Page',
      'Welcome to Phriction' => 'Welcome to Phriction',
      'Options related to Phriction (wiki).' => 'Options related to Phriction (wiki).',
      'CHANGES TO DOCUMENT CONTENT' => 'CHANGES TO DOCUMENT CONTENT',
      '%s moved %s from %s' => '%s moved %s from %s',
      'This document is empty. You can edit it to put some proper content here.' => 'This document is empty. You can edit it to put some proper content here.',
      'A document is deleted.' => 'A document is deleted.',
      'Would you like to use the path %s instead?' => 'Would you like to use the path %s instead?',
      'Delete Document?' => 'Delete Document?',
      'Recovered Draft' => 'Recovered Draft',
      'Showing a saved draft of your edits, you can %s.' => 'Showing a saved draft of your edits, you can %s.',
      'Document Deleted' => 'Document Deleted',
      'Content version.' => 'Content version.',
      'Documents must have content.' => 'Documents must have content.',
      'You can not move a document to its existing location. Choose a different location to move the document to.' => 'You can not move a document to its existing location. Choose a different location to move the document to.',
      '"%s" <%s>' => '"%s" <%s>',
      'Document History' => 'Document History',
      'Original Change' => 'Original Change',
      'Empty Parent Document' => 'Empty Parent Document',
      'Document already exists!' => 'Document already exists!',
      'Phriction is a simple and easy to use wiki for keeping track of documents and their changes.' => 'Phriction is a simple and easy to use wiki for keeping track of documents and their changes.',
      '« Previous Change' => '« Previous Change',
      'Subject prefix for Phriction email.' => 'Subject prefix for Phriction email.',
      'The path you entered (%s) is not a valid wiki document path. Paths may not contain spaces or special characters.' => 'The path you entered (%s) is not a valid wiki document path. Paths may not contain spaces or special characters.',
      'Show Change' => 'Show Change',
      'Edit Conflict' => 'Edit Conflict',
      '%s edited the content of %s.' => '%s edited the content of %s.',
      'Version %s vs %s' => 'Version %s vs %s',
      '%s edited the content of this document.' => '%s edited the content of this document.',
      'This document is already deleted. You must specify content to re-create the document and make further edits.' => 'This document is already deleted. You must specify content to re-create the document and make further edits.',
      '%s moved %s to %s' => '%s moved %s to %s',
      'Parent Paths' => 'Parent Paths',
      '%s changed the title from %s to %s.' => '%s changed the title from %s to %s.',
      '%s moved this document from %s' => '%s moved this document from %s',
      'Hierarchy' => 'Hierarchy',
      'Edit Current Version' => 'Edit Current Version',
      'Edited by %s' => 'Edited by %s',
      'No Document Here' => 'No Document Here',
      'A document\'s content changes.' => 'A document\'s content changes.',
      'A moved document can not be deleted.' => 'A moved document can not be deleted.',
      'Adjust Path' => 'Adjust Path',
      'Read information about Phriction document history.' => 'Read information about Phriction document history.',
      'Test rules which run when a wiki document is created or updated.' => 'Test rules which run when a wiki document is created or updated.',
      'A stub document can not be deleted.' => 'A stub document can not be deleted.',
      'Can not move document because the parent document with slug %s does not exist!' => 'Can not move document because the parent document with slug %s does not exist!',
      '%s by %s, %s' => '%s by %s, %s',
      'Create this Document' => 'Create this Document',
      'Edits' => 'Edits',
      'Retrieve history about a Phriction document.' => 'Retrieve history about a Phriction document.',
      'Create a Phriction document.' => 'Create a Phriction document.',
      'You are viewing an older version of this document, as it appeared on %s.' => 'You are viewing an older version of this document, as it appeared on %s.',
      'Status information about the document.' => 'Status information about the document.',
      'React to wiki documents being created or updated.' => 'React to wiki documents being created or updated.',
      'Document Fields' => 'Document Fields',
      'All Content' => 'All Content',
      'Phriction Content' => 'Phriction Content',
      'Phriction Document Content' => 'Phriction Document Content',
      'Created through child' => 'Created through child',
      'Page Not Found' => 'Page Not Found',
      'New Document' => 'New Document',
      '%s moved this document to %s' => '%s moved this document to %s',
      '%s stubbed out this document when creating %s.' => '%s stubbed out this document when creating %s.',
      'Empty Document' => 'Empty Document',
      'Move Here' => 'Move Here',
      'Get the content of documents or document histories.' => 'Get the content of documents or document histories.',
      'Create a new document at' => 'Create a new document at',
      'Unknown change type!' => 'Unknown change type!',
      'New Path' => 'New Path',
      'Phriction Documents' => 'Phriction Documents',
      'A stub document can not be moved.' => 'A stub document can not be moved.',
      'Most Recent Change' => 'Most Recent Change',
      'Really delete this document? You can recover it later by reverting to a previous version.' => 'Really delete this document? You can recover it later by reverting to a previous version.',
      'This document has been deleted. You can edit it to put new content here, or use history to revert to an earlier version.' => 'This document has been deleted. You can edit it to put new content here, or use history to revert to an earlier version.',
      'Show Later Changes' => 'Show Later Changes',
      'Wiki Document %d' => 'Wiki Document %s',
      'Move Away' => 'Move Away',
    );
  }

}

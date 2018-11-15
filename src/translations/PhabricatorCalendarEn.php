<?php

final class PhabricatorCalendarEn
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'en';
  }

  protected function getTranslations() {
    return array(
      'No events found.' => 'No events found.',
      'New event icon.' => 'New event icon.',
      'Change the event icon.' => 'Change the event icon.',
      'Read information about events.' => 'Read information about events.',
      'Drag and drop .ics files to upload them and import them into Calendar.' => 'Drag and drop .ics files to upload them and import them into Calendar.',
      'Configure Calendar Event Forms' => 'Configure Calendar Event Forms',
      'You can not attach an ICS file to an import type other than an ICS import (type is "%s").' => 'You can not attach an ICS file to an import type other than an ICS import (type is "%s").',
      'Reload this source? Events imported from this source will be updated.' => 'Reload this source? Events imported from this source will be updated.',
      '%s changed the automatic update frequency for this import.' => '%s changed the automatic update frequency for this import.',
      'Import Disabled' => 'Import Disabled',
      'File PHID "%s" is not valid or not visible.' => 'File PHID "%s" is not valid or not visible.',
      'Calendar Import' => 'Calendar Import',
      'You can not disable import of an ICS file because the entire import occurs immediately when you upload the file. There is no further activity to disable.' => 'You can not disable import of an ICS file because the entire import occurs immediately when you upload the file. There is no further activity to disable.',
      'Meal' => 'Meal',
      'Not Attending Event' => 'Not Attending Event',
      'ICS File' => 'ICS File',
      'Event Host' => 'Event Host',
      'Unable to Disable' => 'Unable to Disable',
      'Exports' => 'Exports',
      'Query to execute.' => 'Query to execute.',
      'Movie' => 'Movie',
      'Official Business' => 'Official Business',
      'Show invites the current viewer is invited to. This function includes events the user is invited to because a project they are a member of is invited.' => 'Show invites the current viewer is invited to. This function includes events the user is invited to because a project they are a member of is invited.',
      'End date and time of the event.' => 'End date and time of the event.',
      'Edit This And All Later Events' => 'Edit This And All Later Events',
      '%s changed the host of %s from %s to %s.' => '%s changed the host of %s from %s to %s.',
      'Reload event imports from the command line. Useful for testing and debugging importers.' => 'Reload event imports from the command line. Useful for testing and debugging importers.',
      'Start time of the event.' => 'Start time of the event.',
      'Invitee "%s" identifies an object that does not exist or which you do not have permission to view.' => 'Invitee "%s" identifies an object that does not exist or which you do not have permission to view.',
      'Event icon.' => 'Event icon.',
      'Too Frequent' => 'Too Frequent',
      'Cancel this event?' => 'Cancel this event?',
      'You can not attach an ICS URI to an import type other than an ICS URI import (type is "%s").' => 'You can not attach an ICS URI to an import type other than an ICS URI import (type is "%s").',
      'This event is an instance of %s, and repeats every year.' => 'This event is an instance of %s, and repeats every year.',
      'Uses Import Policy' => 'Uses Import Policy',
      'Weekly' => 'Weekly',
      'Anyone who knows the URI for this export can view all event details as though they were logged in with your account.' => 'Anyone who knows the URI for this export can view all event details as though they were logged in with your account.',
      'To RSVP to the event, specify the desired RSVP, like `!rsvp yes`. This table shows the configured names for rsvp\'s.
    %s
    If you specify an invalid rsvp, the command is ignored. This command has no effect if you do not specify an rsvp.' => 'To RSVP to the event, specify the desired RSVP, like `!rsvp yes`. This table shows the configured names for rsvp\'s.
    %s
    If you specify an invalid rsvp, the command is ignored. This command has no effect if you do not specify an rsvp.',
      'Reinstate Event' => 'Reinstate Event',
      'Export private data.' => 'Export private data.',
      'Meeting' => 'Meeting',
      'event invitees' => 'event invitees',
      'Configure how users create and edit exports.' => 'Configure how users create and edit exports.',
      'Calendar exports must have a query key.' => 'Calendar exports must have a query key.',
      'List of import IDs to reload.' => 'List of import IDs to reload.',
      '%s set %s to repeat yearly.' => '%s set %s to repeat yearly.',
      'Upcoming Events' => 'Upcoming Events',
      'Adjust export mode.' => 'Adjust export mode.',
      'Imported Events' => 'Imported Events',
      'Queued for background import: data size (%s) exceeds limit for immediate processing (%s).' => 'Queued for background import: data size (%s) exceeds limit for immediate processing (%s).',
      'Set the automatic update frequency.' => 'Set the automatic update frequency.',
      '%s updated the event description for %s.' => '%s updated the event description for %s.',
      'Cancel This And All Later Events' => 'Cancel This And All Later Events',
      '.ics URI' => '.ics URI',
      'Travel' => 'Travel',
      '%s updated the invite list for %s, invited %s: %s; uninvited %s: %s.' => '%s updated the invite list for %s, invited %s: %s; uninvited %s: %s.',
      'Calendar Import Logs' => 'Calendar Import Logs',
      'This event is an instance of %s, and repeats every month.' => 'This event is an instance of %s, and repeats every month.',
      'Imported By' => 'Imported By',
      'Export Query as .ics' => 'Export Query as .ics',
      'This export has an invalid mode ("%s").' => 'This export has an invalid mode ("%s").',
      'Disable Export' => 'Disable Export',
      'Test rules which run when an event is created or updated.' => 'Test rules which run when an event is created or updated.',
      'The host of an event can always view and edit it.' => 'The host of an event can always view and edit it.',
      'Found orphaned child event ("%s") without a parent event ("%s").' => 'Found orphaned child event ("%s") without a parent event ("%s").',
      '%s changed %s to repeat until %s.' => '%s changed %s to repeat until %s.',
      'Cancel the event.' => 'Cancel the event.',
      'Change the end time of the event.' => 'Change the end time of the event.',
      '%s changed %s to an all day event.' => '%s changed %s to an all day event.',
      'Import %d %s' => 'Import %s %s',
      'Update frequency constant.' => 'Update frequency constant.',
      'True if the event is an all day event.' => 'True if the event is an all day event.',
      'Edit Event' => 'Edit Event',
      'Calendar Export %s: %s' => 'Calendar Export %s: %s',
      '%s is attending %s.' => '%s is attending %s.',
      'event host' => 'event host',
      '%s set %s to repeat monthly.' => '%s set %s to repeat monthly.',
      'Original Event' => 'Original Event',
      'Event Start' => 'Event Start',
      'Email Commands: Events' => 'Email Commands: Events',
      'Import %d' => 'Import %s',
      'Invitees' => 'Invitees',
      'Recurring' => 'Recurring',
      'Event must be recurring to have a recurrence end date.' => 'Event must be recurring to have a recurrence end date.',
      '%s declined this event.' => '%s declined this event.',
      'Cancelled Events' => 'Cancelled Events',
      'New event name.' => 'New event name.',
      '%s from %s' => '%s from %s',
      'Host of the event.' => 'Host of the event.',
      'Create Export' => 'Create Export',
      'Mode "%s" is not a valid policy mode. Valid modes are: %s.' => 'Mode "%s" is not a valid policy mode. Valid modes are: %s.',
      'Edit Export' => 'Edit Export',
      'No Automatic Updates' => 'No Automatic Updates',
      '%s declined %s.' => '%s declined %s.',
      'Drop .ics Files to Import' => 'Drop .ics Files to Import',
      'Staycation' => 'Staycation',
      'Can not materialize an event stub: this event is not a stub.' => 'Can not materialize an event stub: this event is not a stub.',
      'Reload Events' => 'Reload Events',
      '%s changed the start date for %s from %s to %s.' => '%s changed the start date for %s from %s to %s.',
      'Guide: Exporting Events' => 'Guide: Exporting Events',
      'The host of this event can take this action.' => 'The host of this event can take this action.',
      '%s changed the host of this event from %s to %s.' => '%s changed the host of this event from %s to %s.',
      'The event description.' => 'The event description.',
      'Event Fields' => 'Event Fields',
      'New export mode.' => 'New export mode.',
      'Warning ("%s") while parsing ICS data (near line %s): %s' => 'Warning ("%s") while parsing ICS data (near line %s): %s',
      'Make the event recurring.' => 'Make the event recurring.',
      '%s set %s to repeat weekly.' => '%s set %s to repeat weekly.',
      'Description of the event.' => 'Description of the event.',
      'Started background processing.' => 'Started background processing.',
      'New Import' => 'New Import',
      'Ignored duplicate event "%s" present in source.' => 'Ignored duplicate event "%s" present in source.',
      'Import an event in ".ics" (iCalendar) format.' => 'Import an event in ".ics" (iCalendar) format.',
      'Would you like to decline this event?' => 'Would you like to decline this event?',
      'Enable Export' => 'Enable Export',
      'Imported' => 'Imported',
      'Import Events' => 'Import Events',
      'Only publicly available data is exported.' => 'Only publicly available data is exported.',
      'Calendar Imports' => 'Calendar Imports',
      'End date is invalid.' => 'End date is invalid.',
      '%s changed the icon for %s from %s to %s.' => '%s changed the icon for %s from %s to %s.',
      '.ics File' => '.ics File',
      'To import events, you must select a source to import from.' => 'To import events, you must select a source to import from.',
      '[Calendar]' => '[Calendar]',
      'Unknown import trigger frequency "%s".' => 'Unknown import trigger frequency "%s".',
      'Calendar Import %s: %s' => 'Calendar Import %s: %s',
      'URI to import.' => 'URI to import.',
      'No imported events.' => 'No imported events.',
      'Name of the event.' => 'Name of the event.',
      'Last instance of the event.' => 'Last instance of the event.',
      'Import Triggered' => 'Import Triggered',
      'This event is part of a series. Which events do you want to edit?' => 'This event is part of a series. Which events do you want to edit?',
      'This event has been imported from an external source and can not be edited.' => 'This event has been imported from an external source and can not be edited.',
      'Calendar Export' => 'Calendar Export',
      'Unable to load Calendar import with ID "%s".' => 'Unable to load Calendar import with ID "%s".',
      'Away' => 'Away',
      'Configure Calendar Import Forms' => 'Configure Calendar Import Forms',
      'Change the start time of the event.' => 'Change the start time of the event.',
      'An event can not be stopped from recurring once it has been made recurring. You can cancel the event.' => 'An event can not be stopped from recurring once it has been made recurring. You can cancel the event.',
      'Previous' => 'Previous',
      'Disable this import? Events from this source will no longer be updated.' => 'Disable this import? Events from this source will no longer be updated.',
      'Importing "%s"...' => 'Importing "%s"...',
      'Hosts' => 'Hosts',
      'Create Event' => 'Create Event',
      'Failed to parse ICS data ("%s"): %s' => 'Failed to parse ICS data ("%s"): %s',
      'This event repeats every year.' => 'This event repeats every year.',
      'Series Event' => 'Series Event',
      'Users who are invited to an event can always view it.' => 'Users who are invited to an event can always view it.',
      'Imported events can not be edited in Phabricator.' => 'Imported events can not be edited in Phabricator.',
      'Change the host of the event.' => 'Change the host of the event.',
      'Busy' => 'Busy',
      '%s named this import %s.' => '%s named this import %s.',
      'Decline Event' => 'Decline Event',
      'This event repeats every week.' => 'This event repeats every week.',
      'New event host.' => 'New event host.',
      'Marks this as an all day event.' => 'Marks this as an all day event.',
      'Hosted by %s' => 'Hosted by %s',
      'You must select an ".ics" file to import.' => 'You must select an ".ics" file to import.',
      'Test and debug notifications about upcoming events.' => 'Test and debug notifications about upcoming events.',
      'Create New Export' => 'Create New Export',
      'Display Options' => 'Display Options',
      'Events must have a name.' => 'Events must have a name.',
      'Export %d' => 'Export %s',
      'Can Not Edit Imported Event' => 'Can Not Edit Imported Event',
      'Import or subscribe to a calendar in .ics format by URI.' => 'Import or subscribe to a calendar in .ics format by URI.',
      'Delete all events from this source.' => 'Delete all events from this source.',
      'Party' => 'Party',
      '%s changed this to an all day event.' => '%s changed this to an all day event.',
      'One-Time Event' => 'One-Time Event',
      'Change the export query key.' => 'Change the export query key.',
      '%s imported an ICS file.' => '%s imported an ICS file.',
      'All Day Event' => 'All Day Event',
      'New import name.' => 'New import name.',
      'True to delete imported events.' => 'True to delete imported events.',
      'Reinstate Only This Event' => 'Reinstate Only This Event',
      '%s - %s, All Day' => '%s - %s, All Day',
      '%s uninvited %s attendee(s): %s.' => '%s uninvited %s attendee(s): %s.',
      'New export query key.' => 'New export query key.',
      'Deleted Event' => 'Deleted Event',
      'Name of the import.' => 'Name of the import.',
      'Enable Import' => 'Enable Import',
      '%s invited %s attendee(s): %s; uninvited %s attendee(s): %s.' => '%s invited %s attendee(s): %s; uninvited %s attendee(s): %s.',
      'Unable to copy from parent event: this is not a child event.' => 'Unable to copy from parent event: this is not a child event.',
      'Disable Import' => 'Disable Import',
      'New event start time.' => 'New event start time.',
      'Event Series' => 'Event Series',
      '%s cancelled %s.' => '%s cancelled %s.',
      'Sequence "%s" is not valid for event!' => 'Sequence "%s" is not valid for event!',
      'No imports found.' => 'No imports found.',
      'Show only upcoming events.' => 'Show only upcoming events.',
      'ICS file to import.' => 'ICS file to import.',
      '%s is attending this event.' => '%s is attending this event.',
      'Imported events can only be viewed by users who can view the import source.' => 'Imported events can only be viewed by users who can view the import source.',
      'Daily' => 'Daily',
      'Event frequency "%s" is not valid. Valid frequencies are: %s.' => 'Event frequency "%s" is not valid. Valid frequencies are: %s.',
      'Configure how users create and edit imports.' => 'Configure how users create and edit imports.',
      'Month View' => 'Month View',
      'Fetched Calendar' => 'Fetched Calendar',
      'Yearly' => 'Yearly',
      'New event end time.' => 'New event end time.',
      'Create Import' => 'Create Import',
      '%s changed the query for this export.' => '%s changed the query for this export.',
      'Import Type' => 'Import Type',
      'Never miss an episode ever again.' => 'Never miss an episode ever again.',
      'This event is an instance of %s, and repeats every week.' => 'This event is an instance of %s, and repeats every week.',
      'Change Invitees' => 'Change Invitees',
      'No events from this source currently exist. They may have failed to import, have been updated by another source, or already have been deleted.' => 'No events from this source currently exist. They may have failed to import, have been updated by another source, or already have been deleted.',
      'Sabbatical / Leave' => 'Sabbatical / Leave',
      '%s removed the name of this import (was: %s).' => '%s removed the name of this import (was: %s).',
      '(+%s more...)' => '(+%s more...)',
      'Notify about events in the next __N__ minutes (default: 15). Setting this to a larger value makes testing easier.' => 'Notify about events in the next __N__ minutes (default: 15). Setting this to a larger value makes testing easier.',
      'Next Update' => 'Next Update',
      '%s changed the start date for this event from %s to %s.' => '%s changed the start date for this event from %s to %s.',
      '%s created this event.' => '%s created this event.',
      'Edit this event and all events in the series which occur on or after %s. This will overwrite previous edits!' => 'Edit this event and all events in the series which occur on or after %s. This will overwrite previous edits!',
      'All Events' => 'All Events',
      'Interacting with Calendar Events' => 'Interacting with Calendar Events',
      'Host PHID "%s" is not a valid user PHID.' => 'Host PHID "%s" is not a valid user PHID.',
      'Delete all the events that were imported from this source? This action can not be undone.' => 'Delete all the events that were imported from this source? This action can not be undone.',
      'No exports found.' => 'No exports found.',
      'Availability: %s' => 'Availability: %s',
      'Away at %s until %s.' => 'Away at %s until %s.',
      'Reinstate only the event which occurs on %s.' => 'Reinstate only the event which occurs on %s.',
      'Users invited to the event.' => 'Users invited to the event.',
      'Other event activity not listed above occurs.' => 'Other event activity not listed above occurs.',
      '%s enabled this export.' => '%s enabled this export.',
      'Default view policy for newly created events.' => 'Default view policy for newly created events.',
      'Out of Range' => 'Out of Range',
      'Unable to load file ("%s") for import.' => 'Unable to load file ("%s") for import.',
      'Create New Event' => 'Create New Event',
      'ICS Parser Warning' => 'ICS Parser Warning',
      'Frequency' => 'Frequency',
      'Conference' => 'Conference',
      'Change the event frequency.' => 'Change the event frequency.',
      'Cancel only the event which occurs on %s.' => 'Cancel only the event which occurs on %s.',
      'Updated Event' => 'Updated Event',
      '%s updated the import URI.' => '%s updated the import URI.',
      'Calendar Exports' => 'Calendar Exports',
      'End date must be after start date.' => 'End date must be after start date.',
      'Calendar Events' => 'Calendar Events',
      '%s changed %s to repeat forever.' => '%s changed %s to repeat forever.',
      'Reload events imported from this source.' => 'Reload events imported from this source.',
      'End time of the event.' => 'End time of the event.',
      'No Events Imported' => 'No Events Imported',
      'Repeat until date is invalid.' => 'Repeat until date is invalid.',
      'Automatic Updates' => 'Automatic Updates',
      'Browse Invitees' => 'Browse Invitees',
      'Configure Calendar Export Forms' => 'Configure Calendar Export Forms',
      'New event invitees.' => 'New event invitees.',
      'One time or recurring event.' => 'One time or recurring event.',
      'Event host is required.' => 'Event host is required.',
      '%s updated the event description.' => '%s updated the event description.',
      'Calendar User Guide' => 'Calendar User Guide',
      'Reload Import' => 'Reload Import',
      'Attending' => 'Attending',
      'ICS URI' => 'ICS URI',
      'This event is part of a series. Which events do you want to cancel?' => 'This event is part of a series. Which events do you want to cancel?',
      'Deleted event "%s" which is no longer present in the source.' => 'Deleted event "%s" which is no longer present in the source.',
      'Cancel Event' => 'Cancel Event',
      'Update Hourly' => 'Update Hourly',
      'Choose Import Type' => 'Choose Import Type',
      'Unknown Message' => 'Unknown Message',
      '%s, All Day' => '%s, All Day',
      'ICS Parse Error' => 'ICS Parse Error',
      'Failed to load import with PHID "%s".' => 'Failed to load import with PHID "%s".',
      '%s enabled this import.' => '%s enabled this import.',
      'Source URI' => 'Source URI',
      'Cancel this event and all events in the series which occur on or after %s.' => 'Cancel this event and all events in the series which occur on or after %s.',
      'RSVP' => 'RSVP',
      'Apply transactions to create a new event or edit an existing one.' => 'Apply transactions to create a new event or edit an existing one.',
      'Recurring Event' => 'Recurring Event',
      'Away until %s.' => 'Away until %s.',
      'Day View' => 'Day View',
      'Query key "%s" does not identify a valid event query.' => 'Query key "%s" does not identify a valid event query.',
      'Calendar exports must have a name.' => 'Calendar exports must have a name.',
      'EVENT DETAIL' => 'EVENT DETAIL',
      '%s renamed this import from %s to %s.' => '%s renamed this import from %s to %s.',
      'Holiday' => 'Holiday',
      'Create New Import' => 'Create New Import',
      'Ignored an event with an unsupported frequency rule ("%s"). Events which repeat more frequently than daily are not supported.' => 'Ignored an event with an unsupported frequency rule ("%s"). Events which repeat more frequently than daily are not supported.',
      'EVENT DESCRIPTION' => 'EVENT DESCRIPTION',
      'Make Recurring' => 'Make Recurring',
      'Edit Only This Event' => 'Edit Only This Event',
      'React to events being created or updated.' => 'React to events being created or updated.',
      'New URI.' => 'New URI.',
      'True to cancel the event.' => 'True to cancel the event.',
      'Import frequency "%s" is not valid. Valid frequencies are: %s.' => 'Import frequency "%s" is not valid. Valid frequencies are: %s.',
      '%s created this export.' => '%s created this export.',
      'Cancel Only This Event' => 'Cancel Only This Event',
      '%s uninvited %s attendee(s) to %s: %s.' => '%s uninvited %s attendee(s) to %s: %s.',
      'Disable the export.' => 'Disable the export.',
      'Unable to generate a new child event for an event which is not a recurring parent event!' => 'Unable to generate a new child event for an event which is not a recurring parent event!',
      'Edit Recurrence' => 'Edit Recurrence',
      '%s converted this from an all day event.' => '%s converted this from an all day event.',
      'Ignored unsupported "%s" node present in source.' => 'Ignored unsupported "%s" node present in source.',
      'This event is an instance in an event series. To change the behavior for the series, edit the parent event.' => 'This event is an instance in an event series. To change the behavior for the series, edit the parent event.',
      'Delete Imported Events' => 'Delete Imported Events',
      '%s invited %s attendee(s) to %s: %s.' => '%s invited %s attendee(s) to %s: %s.',
      '%s set this event to repeat monthly.' => '%s set this event to repeat monthly.',
      'Coffee Meeting' => 'Coffee Meeting',
      'Export as .ics' => 'Export as .ics',
      'Orphan' => 'Orphan',
      '%s invited %s attendee(s): %s.' => '%s invited %s attendee(s): %s.',
      '%s changed the event icon from %s to %s.' => '%s changed the event icon from %s to %s.',
      '[Reminder]' => '[Reminder]',
      'Delete Events' => 'Delete Events',
      'Rename the event.' => 'Rename the event.',
      '%s deleted imported events from this source.' => '%s deleted imported events from this source.',
      'No Imported Events' => 'No Imported Events',
      'The name of the event.' => 'The name of the event.',
      'Hosted by %s on %s.' => 'Hosted by %s on %s.',
      'Rename the export.' => 'Rename the export.',
      'Invalid Trigger' => 'Invalid Trigger',
      'Decline' => 'Decline',
      'Unnamed Imported Event' => 'Unnamed Imported Event',
      'Reinstate this event and all events in the series which occur on or after %s.' => 'Reinstate this event and all events in the series which occur on or after %s.',
      'Edit Import: %s' => 'Edit Import: %s',
      'Mark the event as a recurring event.' => 'Mark the event as a recurring event.',
      'Specify at least one import ID to reload.' => 'Specify at least one import ID to reload.',
      'Change invited users.' => 'Change invited users.',
      '%s created this import.' => '%s created this import.',
      'Update the event description.' => 'Update the event description.',
      'Enable this export? Anyone who knows the export URI will be able to export the data.' => 'Enable this export? Anyone who knows the export URI will be able to export the data.',
      'Update Daily' => 'Update Daily',
      'Duplicate Event' => 'Duplicate Event',
      'Update Automatically' => 'Update Automatically',
      '%s changed this event to repeat until %s.' => '%s changed this event to repeat until %s.',
      'An event\'s start and end date and cancellation status changes.' => 'An event\'s start and end date and cancellation status changes.',
      'Accept' => 'Accept',
      'This event is an instance of %s, and repeats every day.' => 'This event is an instance of %s, and repeats every day.',
      'True to cancel the import.' => 'True to cancel the import.',
      'Enable this import? Events from this source will be updated again.' => 'Enable this import? Events from this source will be updated again.',
      'New export name.' => 'New export name.',
      'Both Cancelled and Active Events' => 'Both Cancelled and Active Events',
      'New event frequency.' => 'New event frequency.',
      'Disable the import.' => 'Disable the import.',
      'Ignored an event with an out-of-range date. Only dates between 1970 and 2037 are supported.' => 'Ignored an event with an out-of-range date. Only dates between 1970 and 2037 are supported.',
      'Found no valid events to import.' => 'Found no valid events to import.',
      'Busy at %s until %s.' => 'Busy at %s until %s.',
      'Import/Export' => 'Import/Export',
      'Repeat Until' => 'Repeat Until',
      'Choose Event Icon' => 'Choose Event Icon',
      'Start date and time of the event.' => 'Start date and time of the event.',
      'No Exports Configured' => 'No Exports Configured',
      'Busy until %s.' => 'Busy until %s.',
      'Edit Event: %s' => 'Edit Event: %s',
      'Cancel or restore the event.' => 'Cancel or restore the event.',
      'Import Sources' => 'Import Sources',
      'ICS File "%s"' => 'ICS File "%s"',
      'Reinstate this event?' => 'Reinstate this event?',
      'Private User %d' => 'Private User %s',
      'This event repeats every day.' => 'This event repeats every day.',
      '%s converted %s from an all day event.' => '%s converted %s from an all day event.',
      'Importing Events' => 'Importing Events',
      'Event Invitees' => 'Event Invitees',
      'Import .ics File' => 'Import .ics File',
      '%s set this event to repeat weekly.' => '%s set this event to repeat weekly.',
      'This event instance has not been created yet. Log in to create it.' => 'This event instance has not been created yet. Log in to create it.',
      '%s changed the end date for %s from %s to %s.' => '%s changed the end date for %s from %s to %s.',
      'Change when the event repeats until.' => 'Change when the event repeats until.',
      'Disable or restore the import.' => 'Disable or restore the import.',
      'Ignored Node' => 'Ignored Node',
      'Change the policy mode for the export.' => 'Change the policy mode for the export.',
      'Exporting Events' => 'Exporting Events',
      'Monthly' => 'Monthly',
      'Edit Import' => 'Edit Import',
      '%s changed this event to repeat forever.' => '%s changed this event to repeat forever.',
      'This event repeats every month.' => 'This event repeats every month.',
      'New final event time.' => 'New final event time.',
      'New event description.' => 'New event description.',
      'Default edit policy for newly created events.' => 'Default edit policy for newly created events.',
      'Events are only rendered indirectly.' => 'Events are only rendered indirectly.',
      'Privileged' => 'Privileged',
      'Reinstate This And All Later Events' => 'Reinstate This And All Later Events',
      'Name of the export.' => 'Name of the export.',
      'All Imports' => 'All Imports',
      '%s changed the policy mode for this export from %s to %s.' => '%s changed the policy mode for this export from %s to %s.',
      'Disable or restore the export.' => 'Disable or restore the export.',
      'RSVP to event.' => 'RSVP to event.',
      'Rename the import.' => 'Rename the import.',
      'Source File' => 'Source File',
      'Normal Event' => 'Normal Event',
      'Log Messages' => 'Log Messages',
      '%s cancelled this event.' => '%s cancelled this event.',
      'You can not change your display availability for events you are not attending.' => 'You can not change your display availability for events you are not attending.',
      'Working From Home' => 'Working From Home',
      'Make the event an all day event.' => 'Make the event an all day event.',
      '%s set this event to repeat daily.' => '%s set this event to repeat daily.',
      'True to cancel the export.' => 'True to cancel the export.',
      '%s disabled this export.' => '%s disabled this export.',
      'All Exports' => 'All Exports',
      'You have not set up any events for export from Calendar yet. See the documentation for instructions on how to get started.' => 'You have not set up any events for export from Calendar yet. See the documentation for instructions on how to get started.',
      'Join' => 'Join',
      'Import .ics URI' => 'Import .ics URI',
      'Configure how users create and edit events.' => 'Configure how users create and edit events.',
      '%s - %s' => '%s - %s',
      'CHANGES TO EVENT DESCRIPTION' => 'CHANGES TO EVENT DESCRIPTION',
      '%s reloaded this event source.' => '%s reloaded this event source.',
      'Imports' => 'Imports',
      '%s set %s to repeat daily.' => '%s set %s to repeat daily.',
      '%s is starting in %s minute(s), at %s.' => '%s is starting in %s minute(s), at %s.',
      'Ignored an event (%s) because the original version of this event was created here.' => 'Ignored an event (%s) because the original version of this event was created here.',
      '%s renamed this event from %s to %s.' => '%s renamed this event from %s to %s.',
      'Cancelled Events Only' => 'Cancelled Events Only',
      'Recurring event frequency.' => 'Recurring event frequency.',
      'Disable this export? The export URI will no longer function.' => 'Disable this export? The export URI will no longer function.',
      '%s reinstated this event.' => '%s reinstated this event.',
      'Triggered a periodic update.' => 'Triggered a periodic update.',
      'Unknown Message "%s"' => 'Unknown Message "%s"',
      'An event\'s name, status, invite list, icon, and description changes.' => 'An event\'s name, status, invite list, icon, and description changes.',
      'Configure an automatic update frequency.' => 'Configure an automatic update frequency.',
      'You must select an ".ics" URI to import.' => 'You must select an ".ics" URI to import.',
      'Event queries which generate ghost events must include either a result limit or an end date, because they may otherwise generate an infinite number of results. This query has neither.' => 'Event queries which generate ghost events must include either a result limit or an end date, because they may otherwise generate an infinite number of results. This query has neither.',
      'Users invited to this event can take this action.' => 'Users invited to this event can take this action.',
      '%s disabled this import.' => '%s disabled this import.',
      'This event is part of a series. Which events do you want to reinstate?' => 'This event is part of a series. Which events do you want to reinstate?',
      'True to reload the import.' => 'True to reload the import.',
      'Start date is invalid.' => 'Start date is invalid.',
      'Edit Export: %s' => 'Edit Export: %s',
      '%s renamed this export from %s to %s.' => '%s renamed this export from %s to %s.',
      'Type a user or project name, or function...' => 'Type a user or project name, or function...',
      'Active Events Only' => 'Active Events Only',
      'Export only public data.' => 'Export only public data.',
      '%s changed the end date for this event from %s to %s.' => '%s changed the end date for this event from %s to %s.',
      'Imported Event' => 'Imported Event',
      '%s set this event to repeat yearly.' => '%s set this event to repeat yearly.',
      'Health / Appointment' => 'Health / Appointment',
      'Unnamed Event "%s"' => 'Unnamed Event "%s"',
      'Recurrence' => 'Recurrence',
      'Join Event' => 'Join Event',
      'Field Trip' => 'Field Trip',
      'Edit only the event which occurs at %s.' => 'Edit only the event which occurs at %s.',
      'External Invitee' => 'External Invitee',
      'Would you like to join this event?' => 'Would you like to join this event?',
      'This page documents the commands you can use to interact with events in Calendar. These commands work when creating new tasks via email and when replying to existing tasks.' => 'This page documents the commands you can use to interact with events in Calendar. These commands work when creating new tasks via email and when replying to existing tasks.',
      'List View' => 'List View',
      'Pet Activity' => 'Pet Activity',
      '%s reinstated %s.' => '%s reinstated %s.',
      'Mark the event as an all day event.' => 'Mark the event as an all day event.',
      'Export %d %s' => 'Export %s %s',
    );
  }

}

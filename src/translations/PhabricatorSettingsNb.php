<?php

final class PhabricatorSettingsNb
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'nb';
  }

  protected function getTranslations() {
    return array(
      '12 Hour, 2:34 PM' => '12-timers, 2:34 PM',
      'When a revision is updated, Phabricator attempts to bring inline comments on the older version forward to the new changes. You can disable this behavior if you prefer comments stay anchored in one place.' => 'Når en revisjon oppdateres prøver Phabricator å ta med inline-kommentarer fra den gamle versjonen til de nye endringene. Du kan slå av dette om du ønsker at kommentarene skal være forankret der de er.',
      'Default (%s)' => 'Standard (%s)',
      'Conpherence Column Visible' => 'Conpherence-kolonne synlig',
      'Page Titles' => 'Sidetitler',
      'Personal Account Settings' => 'Innstillinger for personlig konto',
      'ISO 8601: 2000-02-28' => 'ISO 8601: 2000-02-28',
      'Global Default Settings' => 'Globale standardinnstillinger',
      'Choose which language you would like the Phabricator UI to use.' => 'Velg hvilket språk du ønsker at grensesnittet til Phabricator skal bruke.',
      'Email Notifications' => 'Epostvarsler',
      'Saturday' => 'Lørdag',
      'Change Primary Address' => 'Endre primæradresse',
      'Select the format you prefer for editing dates.' => 'Velg formatet du foretrekker for redigering av datoer.',
      'On Small Screens' => 'På små skjermer',
      'A verification email has been sent. Click the link in the email to verify your address.' => 'En bekreftelsesepost har blitt sendt. Klikk på lenka i eposten for å bekrefte adressa di.',
      'Enable Email Notifications' => 'Slå på epostvarsler',
      'Edit Multiple Files' => 'Rediger flere filer',
      'Edit global default settings for all users.' => 'Rediger globale standardinnstillinger for alle brukere.',
      'No settings panels are available.' => 'Ingen innstillingspaneler er tilgjengelige.',
      'Empty string is not a valid setting for "%s".' => 'Tom streng er ikke en gyldig innstilling for «%s».',
      'Adjust Timezone' => 'Endre tidssone',
      'Show Filetree' => 'Vis filtre',
      '%s updated her profile' => 'Hun',
      'Value "%s" is not valid for setting "%s": valid values are %s.' => 'Verdien «41» er ikke gyldig for innstillingen «%2$s»: gyldige verdier er %3$s.',
      'Extra Settings' => 'Ekstra innstillinger',
      'Are you sure you want to delete this address? You will no longer be able to use it to login.' => 'Er du sikker på at du ønsker å slette denne adressa? Du vil ikke kunne bruke den til å logge inn lenger.',
      'You can customize the font used when showing monospaced text, including source code. You should enter a valid CSS font declaration like: `13px Consolas`' => 'Du kan tilpasse skrifttypen som brukes for fastbreddetekst, inkludert kildekode. Du bør skrive inn en gyldig CSS-erklæring, som f.eks. `13px Consolas`',
      'You haven\'t added any SSH Public Keys.' => 'Du har ikke lagt til noen offentlige SSH-nøkler.',
      'All Messages' => 'Alle meldinger',
      'Save Preference' => 'Lagre innstillinger',
      'Email Format' => 'Epostformat',
      'Your browser timezone and profile timezone are now in agreement (%s).' => 'Tidssonene i nettleseren din og profilen din stemmer nå overens (%s).',
      'Edit Authentication Factor' => 'Rediger autentiseringsfaktor',
      'Changing your password will terminate any other outstanding login sessions.' => 'Hvis du endrer passordet ditt vil andre økter der du er innlogget bli avsluttet.',
      'You have no linked accounts.' => 'Du har ingen lenkede kontoer.',
      'Active Login Sessions' => 'Aktive innloggede økter',
      'Edit Global Settings' => 'Rediger globale innstillinger',
      'Ignore Conflict' => 'Ignorer konflikt',
      'Delete Authentication Factor' => 'Slett autentiseringsfaktor',
      '%s updated their profile' => 'De',
      'Current Setting' => 'Gjeldende innstilling',
      'Provider: %s' => 'Tilbyder: %s',
      '⚪ Ignore' => '⚪ Ignorer',
      'Date Format' => 'Datoformat',
      'Your browser timezone (%s) differs from your profile timezone (%s). You can ignore this conflict or adjust your profile setting to match your client.' => 'Tidssonen i nettleseren din (%s) stemmer ikke overens med den i profilen din (%s). Du kan ignorere dette eller endre profilinnstillingene til å matche nettleseren.',
      'Select the format you prefer for editing and displaying time.' => 'Velg hvilket format du foretrekker for redigering og visning av tid.',
      'The conflict between your browser and profile timezone settings will be ignored.' => 'Konflikten mellom nettleserens og profilens tidssoneinnstillinger vil ignoreres.',
      'Terminate All Sessions' => 'Avslutt alle økter',
      'Your account is linked with all available providers.' => 'Kontoen din er lenket med alle tilgjengelige leverandører.',
      'External Accounts' => 'Eksterne kontoer',
      'Verification Email Sent' => 'Bekreftelsesepost sendt',
      'Add External Account' => 'Legg til ekstern konto',
      'You haven\'t added any authentication factors to your account yet.' => 'Du har ikke lagt til autentiseringsfaktorer for kontoen din ennå.',
      'To set a new password, request a password reset link from the login screen and then follow the instructions.' => 'For å sette et nytt passord, be om en lenke for tilbakestilling av passord på innloggingsskjermen og følg instruksjonene.',
      'Multi-Factor Auth' => 'Flerfaktorautentisering',
      'Filetree Visible' => 'Filtre synlig',
      'Grant Permission' => 'Gi tillatelse',
      'Really remove the authentication factor %s from your account?' => 'Vil du virkelig fjerne autentiseringsfaktoren %s fra kontoen din?',
      'Old Password' => 'Gammelt passord',
      'Display Preferences' => 'Visningsinnstillinger',
      'Add Auth Factor' => 'Legg til autentiseringsfaktor',
      'You don\'t have any active sessions.' => 'Du har ingen aktive økter.',
      'Changes saved.' => 'Endringer lagret.',
      'Authentication factors must have a name to identify them.' => 'Autentiseringsfaktorer må ha et navn som kan identifisere dem.',
      'Really delete address \'%s\'?' => 'Vil du virkelig slette adressa «%s»?',
      'Another user already has this email.' => 'En annen bruker bruker allerede denne epostadressa.',
      'Change primary email address?' => 'Endre primærepostadresse?',
      'Monospaced Font' => 'Fastbreddeskrift',
      'HTML Email' => 'HTML-epost',
      'Enable "Re:" Prefix' => 'Slå på prefikset «Re:»',
      'Change Timezone' => 'Endre tidssone',
      'DarkConsole Visible' => 'DarkConsole synlig',
      'You are adding too many email addresses to your account too quickly.' => 'Du legger til for mange epostadresser til kontoen din på for kort tid.',
      'Europe: 28-02-2000' => 'Europa: 28-02-2000',
      'Enable Filetree' => 'Slå på filtre',
      'The old password you entered is incorrect.' => 'Det gamle passordet er galt.',
      '◐ Notify' => '◐ Varsle',
      '%s updated his profile' => 'Han',
      'You can change your date and time preferences in Settings.' => 'Du kan endre dato- og tidsinnstillingene dine under Innstillinger.',
      'Timezone Calibrated' => 'Tidssone kalibrert',
      'Limited Translations' => 'Begrensede oversettelser',
      'Email Delivery' => 'Epostlevering',
      'Send Test Notification' => 'Send testvarsel',
      'Edit settings for your personal account.' => 'Rediger innstillinger for den personlige kontoen din.',
      'Create Settings' => 'Opprettingsinnstillinger',
      'Use Unicode Glyphs: ⚙' => 'Bruk Unicode-tegn: ⚙',
      'DarkConsole' => 'DarkConsole',
      'Email Preferences' => 'Epostinnstillinger',
      '24 Hour, 14:34' => '24-timers, 14:34',
      'Disable "Re:" Prefix' => 'Slå av prefikset «Re:»',
      'Disable Filetree' => 'Slå av filtre',
      'Disable Email Notifications' => 'Slå av epostvarsler',
      'Expired' => 'Utløpt',
      'No Notifications' => 'Ingen varsler',
      'Password Algorithms' => 'Passordalgoritmer',
      'Send HTML Email' => 'Send HTML-epost',
      'Translation' => 'Oversettelse',
      'UTC+%d' => 'UTC+%s',
      'Time Format' => 'Tidsformat',
      'Number' => 'Nummer',
      'Permanently Linked' => 'Permanent lenket',
      'Authentication Factors' => 'Autentiseringsfaktorer',
      'Sunday' => 'Søndag',
      'US: 2/28/2000' => 'Amerikansk: 2/28/2000',
      'User Guide: Configuring an External Editor' => 'Brukerveiledning: Oppsett av ekstern editor',
      'Personal Settings' => 'Personlige innstillinger',
      'User Preferences' => 'Brukerinnstillinger',
      'No Sounds' => 'Ingen lyder',
      'There is no known application setting with key "%s".' => 'Det er ingen kjent applikasjonsinnstilling med nøkkelen «%s».',
      'Conpherence Notifications' => 'Conpherence-varsler',
      'Friday' => 'Fredag',
      'Timezone "%s" is not a valid timezone identifier.' => 'Tidssonen «%s» er ikke en gyldig tidssoneidentifikator.',
      'Select your local timezone.' => 'Velg din lokale tidssone.',
      'Note: Removing an email address from your account will invalidate any outstanding password reset links.' => 'Merk: Hvis du fjerner en epostadresse fra kontoen din vil utestående lenker for tilbakestilling av passord gjøres ugyldige.',
      'Week Starts On' => 'Uka starter på',
      'Remove Factor' => 'Fjern faktor',
      'Disabled (an administrator has disabled login for this account provider).' => 'Slått av (en administrator har slått av innlogging med denne kontoleverandøren).',
      'If you change your primary address, Phabricator will send all email to %s.' => 'Om du endrer primæradressa di vil Phabricator sende all epost til %s.',
      'Send Another Verification Email?' => 'Sende ny bekreftelsesepost?',
      'Because the algorithm implementation is missing, your password can not be used or updated.' => 'Fordi algoritmeimplementeringen mangler kan ikke passordet brukes eller oppdateres.',
      'Verify' => 'Bekreft',
      'Edit Settings: %s' => 'Rediger innstillinger: %s',
      'Add "Re:" Prefix' => 'Legg til prefikset «Re:»',
      'Account Settings' => 'Kontoinnstillinger',
      'Choose which day a calendar week should begin on.' => 'Velg hvilken ukedag uka skal begynne på.',
      'Date and Time' => 'Dato og tid',
      'Use Monospaced Font' => 'Bruk fastbreddeskrift',
      'Save Preferences' => 'Lagre innstillinger',
      '⚫ Email' => '⚫ Epost',
      'New Setting' => 'Ny innstilling',
      'Pronoun' => 'Pronomen',
      'Sessions and Logs' => 'Økter og logger',
      'UTC-%d' => 'UTC−%s',
      'Choose the pronoun you prefer.' => 'Velg ditt foretrukne pronomen.',
      'Conflict Ignored' => 'Konflikt ignorert',
      'This engine is used to edit settings.' => 'Denne motoren brukes for å redigere innstillinger.',
      'Default (Unknown, "%s")' => 'Standard (ukjent, «%s»)',
      'Primary Email Unverified' => 'Primærepost ikke bekreftet',
      'HiSec' => 'HiSec',
    );
  }

}

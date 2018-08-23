<?php

final class ArcanistCoreSv
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'sv';
  }

  protected function getTranslations() {
    return array(
      'Aborted due to file upload failure. You can use %s to skip binary uploads.' => 'Avbröts p.g.a. misslyckad filuppladdning. Du kan använda %s för att hoppa över binära uppladdningar.',
      'This working copy is associated with the %s repository.' => 'Den här arbetskopian är associerad med filförrådet %s.',
      'Should throw on empty input' => 'Bör kastas vid tom inmatning',
      'No library currently exists at that path...
    ' => 'Inget bibliotek finns för närvarande i denna sökväg...',
      'Not parsing!' => 'Tolkar inte!',
      '%s at line %d, char %d' => '%s i rad %s, tecken %s',
      'Try running your arc command again.' => 'Försök köra ditt arc-kommando igen.',
      'CC: %s' => 'CC: %s',
      'Write file to stdout instead of to disk.' => 'Skriv filen till stdout istället för till disken.',
      'If the file is not a text file, you can mark it \'binary\'. Mark this file as \'binary\' and continue?' => 'Om filen inte är en textfil så kan du markera den som \'binär\'. Markera den här filen som \'binär\' och fortsätt?',
      'Rule \'%s\' is invalid, it must have a type and name like \'%s\'.' => 'Regeln "%s" är ogiltig, den måste ha en typ och namn som "%s".',
      'None of the configured interpreters can be located.' => 'Ingen av de konfigurerade tolkarna kan hittas.',
      'This workflow (\'%s\') requires a Repository API, override %s to return true.' => 'Det här arbetsflödet (\'%s\') kräver ett filförråd-API, åsidosätt %s för att få tillbaka true som svar.',
      'Executable files should either be binary or contain a shebang.' => 'Exekverbara filer bör antingen vara binära eller innehålla en shebang.',
      'Unknown argument \'%s\'. Try \'%s\'.' => 'Okänt argument \'%s\'. Försök med \'%s\'.',
      'Alias' => 'Alias',
      'No match found. Try `%s %s` to search for a linter.' => 'Hittade ingen träff. Försök med `%s %s` för att söka efter en linter.',
      '%s is already set to %s.
    ' => '%s har redan ändrats till %s.',
      'Pick' => 'Välj',
      'Runtime Error' => 'Exekveringsfel',
      'Output upload information in JSON format.' => 'Mata ut uppladdningsinformation i JSON-format.',
      'Remote Repository' => 'Fjärrstyrt filförråd',
      'Empty certificate in credentials.' => 'Töm certifikat i uppgifterna.',
      'No tests to run.' => 'Inga tester att köra.',
      'These tests should either fail or skip.' => 'De här testerna ska antingen misslyckas eller hoppa över.',
      'Unknown Symbol' => 'Okänd symbol',
      'You have no flagged objects.' => 'Du har inga flaggade objekt.',
      'Throwing Exception in `%s` Method' => 'Kastar undantaget i metoden `%s`',
      'Language for syntax highlighting.' => 'Språk för syntaxmarkering.',
      'Unknown VCS!' => 'Okänd VCS!',
      'This codebase targets PHP %s on Windows, but `%s()` is not available there.' => 'Denna kodbas använder PHP %s på Windows, men `%s()` är inte tillgänglig där.',
      'ERROR' => 'FEL',
      'Do not upload binaries (like images).' => 'Ladda inte upp binära filer (som bilder).',
      'Install lessc using `%s`.' => 'Installera lessc med `%s`.',
      'Delete the flag on an object.' => 'Radera flaggan på ett objekt.',
      'Changes Planned' => 'Planerade ändringar',
      'Mark the file as temporary. Temporary files will be deleted automatically after 24 hours.' => 'Märk filen som tillfällig. Tillfälliga filer kommer att raderas efter 24 timmar.',
      'Set %s to file mode 600.' => 'Ändra %s till filläget 600.',
      'Option \'%s\' requires a parameter.' => 'Alternativet "%s" kräver en parameter.',
      'Failed to %s!' => 'Misslyckades att %s!',
      'This codebase targets PHP %s on Windows, but `%s()` is not available there until PHP %s.' => 'Denna kodbas använder PHP %s på Windows, men `%s()` är inte tillgänglig där tills PHP %s.',
      'Space found before semicolon.' => 'Mellanrum hittades innan semikolon.',
      'Use `%s` for checking if the string contains something.' => 'Använd `%s` för att kontrollera om strängen innehåller någonting.',
      'Use "--types" to select between alternatives.' => 'Använd "--types" för att välja mellan alternativ.',
      'No such revision \'%s\'!' => 'Revisionen "%s" finns inte!',
      'Branch %s' => 'Förgrening %s',
      'Cannot be used with %s.' => 'Kan inte användas med %s.',
      'Copied Here' => 'Kopierades hit',
      'Install PEP8 using `%s`.' => 'Installera PEP8 med `%s`.',
      '(This is a custom option for this project.)' => '(Detta är ett anpassat alternativ för detta projekt.)',
      '    %s %s
    ' => '    %s %s',
      'Install flake8 using `%s`.' => 'Installera flake8 med `%s`.',
      'Updating working copy...' => 'Uppdaterar fungerande kopia...',
      'Modified' => 'Ändrad',
      'TODO Comment' => 'TODO-kommentar',
      'Do you want to edit the message?' => 'Vill du redigera meddelandet?',
      'This option is not documented.' => 'Detta alternativ är inte dokumenterat.',
      'Failed to lookup information for \'%s\'!' => 'Misslyckades att hitta information om "%s"!',
      'Confused by empty line' => 'Förvirrad av tom rad',
      '(Run `%s` for more details.)' => '(Kör `%s` för fler detaljer.)',
      'Branch "%s" does not exist in remote "%s".' => 'Förgreningen "%s" finns inte i fjärrplatsen "%s".',
      '%s has already been reverted.' => '%s har redan ångrats.',
      'Revision %s' => 'Revision %s',
      'Jump' => 'Hoppa',
      'Uploaded binary data for "%s".' => 'Ladda upp binär data för "%s".',
      'Updating **%s**...' => 'Uppdaterar **%s**...',
      'File Error' => 'Filfel',
      'Avoid the use of inner functions.' => 'Undvik att använda inre funktioner.',
      '%s\'s status is now set to %s.
    ' => 'Status för %s har nu ändrats till %s.',
      'Install PHPCS with `%s`.' => 'Installera PHPCS med `%s`.',
      'Install Golint using `%s`.' => 'Installera Golint med `%s`.',
      'Needs Revision' => 'Behöver revision',
      'Removing %s files...' => 'Tar bort %s filer...',
      'One test was expected to skip.' => 'Ett test förväntades att hoppas över.',
      'Username to use for basic auth over HTTP transports.' => 'Användarnamn att använda för grundläggande autentisering över HTTP-transporter.',
      'Enter a brief description of the changes included in this update.' => 'Ange en kort beskrivning av ändringarna som finns i denna uppdatering.',
      'Unknown library version \'%s\'!' => '"%s" är en okänd biblioteksversion!',
      'Unrecognized property status \'%s\'.' => '"%s" är en okänd egenskapsstatus!',
      'Updated!' => 'Uppdaterades!',
      'Configuration value "%s" is set to "%s".' => 'Konfigurationsvärdet "%s" ändrades till "%s".',
      'Describe the changes in this new revision.' => 'Beskriv ändringarna i denna nya revision.',
      'Install JSCS using `%s`.' => 'Installera JSCS med `%s`.',
      'Specify one or more files to upload.' => 'Ange en eller fler filer att ladda upp.',
      'TO INSTALL: %s' => 'ATT INSTALLERA: %s',
      '`%s` Operator' => 'Operatorn `%s`',
      'Option \'%s\' is not supported under %s.' => 'Alternativet "%s" stöds inte under %s.',
      'Fail' => 'Misslyckades',
      'INTERRUPTED!' => 'AVBRÖTS!',
      'Specify either %s or paths.' => 'Ange antingen %s eller sökvägar.',
      'You have untracked files in this working copy.' => 'Du har ospårade filer i denna fungerande kopia.',
      'Sort branches by status instead of time.' => 'Sortera förgreningar efter status istället för tid.',
      'Version' => 'Version',
      'Use `%s` to detect issues with Javascript source files.' => 'Använd `%s` för att upptäcka fel med Javascript-källfiler.',
      'Dynamic `%s`' => 'Dynamisk `%s`',
      'Array Separator' => 'Arrayseparator',
      'Unit Test' => 'Enhetstest',
      'Global Variables' => 'Globala variabler',
      'Files must end in a newline.' => 'Filer måste sluta med en radbrytning.',
      '%s must be on either branch \'%s\' or \'%s\' to be automatically upgraded. This copy of %s (in \'%s\') is on branch \'%s\'.' => '%s måste antingen vara i förgreningen "%s" eller "%s" för att uppgraderas automatiskt. Denna kopia av %s (i "%s") är i förgreningen "%s".',
      'The regex to process output with.' => 'Regex att bearbeta utmaningen med.',
      'Do you want to use this message?' => 'Vill du använda detta meddelande?',
      'To login and save credentials for this server, run this command:' => 'För att logga in och spara inloggningsuppgifter för denna server, kör detta kommando:',
      'Expect %s was called once for each test.' => 'Förväntade %s, som anropades en gång för varje test.',
      'Custom preset.' => 'Anpassad förinställning.',
      'Continue anyway?' => 'Fortsätt ändå?',
      'CONFIGURED' => 'KONFIGURERAD',
      'No tasks found.' => 'Inga uppgift hittades.',
      'Delete this alias?' => 'Radera detta alias?',
      'The test failed.' => 'Testet misslyckades.',
      'Failed to upload binary "%s".' => 'Misslyckades att ladda upp binära filen "%s".',
      'This is never reached.' => 'Detta nås aldrig.',
      'Set the note on a flag.' => 'Ändrar anteckningen för en flagga.',
      'Both sides of this expression are identical, so it always evaluates to a constant.' => 'Båda sidorna av detta uttryck är identiska, så den alltid beräknas till en konstant.',
      'Conflicts in working copy:' => 'Konflikter i fungerande kopia:',
      'Specify only one branch.' => 'Ange endast en förgrening.',
      'Type of setting \'%s\' must be boolean.' => 'Inställningstypen "%s" måste vara boolesk.',
      'Spaces Inside Parentheses' => 'Mellanrum inom parenteser',
      'This file contains a syntax error: %s' => 'Denna fil innehåller ett syntaxfel: %s',
      'Specify exactly one object.' => 'Ange exakt ett objekt.',
      '%s can not be used with %s.' => '%s kan inte användas med %s.',
      'Broken' => 'Trasig',
      'Path \'%s\' does not exist!' => 'Sökvägen "%s" finns inte!',
      'Use of `%s`' => 'Användning av `%s`',
      'PHP files must only contain PHP code.' => 'PHP-filer får endast innehålla PHP-kod.',
      'Line Too Long' => 'Raden är för lång',
      'Skip' => 'Hoppa över',
      'Type' => 'Typ',
      'Command-Line Flags' => 'Flaggor i kommandorad',
      'The name or path of the coding standard to use.' => 'Namnet eller sökvägen för kodstandarden att använda.',
      'PHP Syntax Error!' => 'PHP-syntaxfel!',
      'INVALID CREDENTIALS' => 'OGILTIGA INLOGGNINGSUPPGIFTER',
      'Test paths for: "%s"' => 'Testsökvägar för: "%s"',
      'Argument was \'%s\', but must be \'%s\'. For example, %s' => 'Argumentet var "%s", men måste vara "%s". T.ex. %s',
      'Installing certificate for \'%s\'...' => 'Installerar certifikat för "%s"...',
      'Config: Did not find local configuration at "%s".' => 'Konfiguration: Hittade inte den lokala konfigurationen på "%s".',
      'Class' => 'Klass',
      'A note to attach to the tracked time.' => 'En anteckning att bifoga till den spårade tiden.',
      '\'%s\' vs \'%s\' (utf8)' => '"%s" vs "%s" (utf8)',
      'This test is expected to fail.' => 'Detta test förväntas att misslyckas.',
      'SKIP' => 'HOPPA ÖVER',
      'Deleted' => 'Raderades',
      'Properties cannot be declared `%s`.' => 'Egenskaper kan inte deklarera `%s`.',
      'Default branch name to view on server. Defaults to "%s".' => 'Namnet på standardförgreningen att visa på servern. Standard är "%s".',
      'Git is not installed' => 'Git är inte installerad.',
      'One test was expected to fail.' => 'Ett test förväntades att misslyckas.',
      'Default Parameters' => 'Standardparametrar',
      'copies' => 'kopior',
      'Downloading binary data...' => 'Laddar ned binär data...',
      '%s has no flag.
    ' => '%s har ingen flagga.',
      'Please use `%s` instead.' => 'Var god använd `%s` istället.',
      'TO UPGRADE: %s' => 'FÖR ATT UPPGRADERA: %s',
      'Specify a key and a value.' => 'Ange en nyckel och ett värde.',
      'Options \'%s\', \'%s\' and \'%s\' are not compatible. Choose exactly one export format.' => 'Alternativen "%s", "%s" och "%s" är inte kompatibla. Välj precis ett exportformat.',
      'Connecting to "%s"...' => 'Ansluter till "%s"...',
      'Library name should contain only lowercase letters and hyphens.' => 'Biblioteksnamn bör endast innehålla gemener och bindestreck.',
      '%s does not update any revision.' => '%s uppdaterar inte några revisioner.',
      '<default>' => '<standard>',
      'No test information for test data \'%s\'!' => 'Ingen testinformation för testdata "%s"!',
      'If you intended to update an existing revision, use:' => 'Om du försökte uppdatera en befintlig revision, använd:',
      'Unable to upload file: failed to determine filesize of path "%s".' => 'Kunde inte ladda upp fil: Misslyckades att bestämma filstorleken för sökvägen "%s".',
      'String does not require double quotes. For consistency, prefer single quotes.' => 'Strängen kräver inte citationstecken. För struktur föredras apostrofer.',
      'lowercase_with_underscores: \'%s\'' => 'lowercase_with_underscores: \'%s\'',
      'Projects to assign to the task.' => 'Projekt att tilldela till uppgiften.',
      'Not installing API token.' => 'Installerar inte API-nyckel.',
      'Continue?' => 'Fortsätt?',
      'Updating %s: %s' => 'Uppdaterar %s: %s',
      'Current Value' => 'Nuvarande värde',
      'Install jsonlint using `%s`.' => 'Installera jsonlint med `%s`.',
      'Install this token anyway?' => 'Installera denna nyckel ändå?',
      '(Assuming \'%s\' is the British spelling of \'%s\'.)' => '(Antar att "%s" är den brittiska stavningen av "%s".)',
      '`%s` expects an object instance, constant given.' => '`%s` förväntar en objektinstans, konstant angavs.',
      'Branch \'%s\' does not exist.' => 'Förgreningen "%s" finns inte.',
      'Blacklisted functions which should not be used.' => 'Svartlistade funktioner som inte bör användas.',
      'Specify at most one URI.' => 'Ange minst en URI.',
      'Use `%s` to detect issues with CSS source files.' => 'Använd `%s` för att upptäcka fel i CSS-källfiler.',
      'UPDATE' => 'UPPDATERA',
      'With %s, use uglier (but more efficient) formatting.' => 'Använd fulare (men effektivare) formatering med %s.',
      'Message begins:' => 'Meddelande inleds:',
      'This codebase targets PHP %s, but `%s` was removed in PHP %s.' => 'Denna kodebas siktar mot PHP %s, men `%s` togs bort i PHP %s.',
      'Additional rules for determining base revision.' => 'Ytterligare regler för att bestämma grundrevisionen.',
      'Usage of `%s` is preferred over `%s`.' => 'Användning av `%s` föredras över `%s`.',
      'Invalid Default Parameter' => 'Ogiltig standardparameter',
      'YOU NEED TO __INSTALL A CERTIFICATE__ TO LOGIN TO PHABRICATOR' => 'DU MÅSTE __INSTALLERA ETT CERTIFIKAT__ FÖR ATT LOGGA IN PÅ PHABRICATOR',
      'Halting all rule processing.' => 'Stoppar all regelbearbetning.',
      'Description' => 'Beskrivning',
      'Working copy' => 'Fungerande kopia',
      'Downloading binary data for \'%s\'...' => 'Laddar ned binär data för "%s"...',
      'LOGIN TO PHABRICATOR' => 'LOGGA IN PÅ PHABRICATOR',
      'EXCEPTION' => 'UNDANTAG',
      'Contents Modified' => 'Ändrat innehåll',
      'Use `%s` for local static member references.' => 'Använd `%s` för lokala statiska medlemsreferenser.',
      '`%s` Methods Cannot Be Marked `%s`' => 'Metoderna `%s` kan inte markeras som `%s`',
      'Unable to locate %s.' => 'Kunde inte hitta %s.',
      'Missing VCS support.' => 'Saknar stöd för VCS.',
      'Argument Error' => 'Argumentfel',
      'Misuse of `%s`' => 'Felanvändning av `%s`',
      'Your \'%s\' file is not a valid JSON file.' => 'Din fil "%s" är inte en giltig JSON-fil.',
      'it is specified by \'%s\' in your %s \'base\' configuration.' => 'det specificerades av "%s" i din "grundkonfiguration" %s.',
      'Type of setting \'%s\' must be list.' => 'Inställningstypen "%s" måste vara en lista.',
      'Accepted' => 'Accepterad',
      'Unknown Object' => 'Okänt objekt',
      '(regenerate projects for %s)' => '(återgenerera projekt för %s)',
      'Always update a specific revision.' => 'Uppdatera alltid en specifik revision.',
      'Example Value' => 'Exempelvärde',
      'Empty Rules' => 'Tomma regler',
      'Moved Here' => 'Flyttades hit',
      '    %s (%s) %s
    ' => '    %s (%s) %s',
      'Unable to open file "%s"' => 'Kunde inte öppna filen "%s"',
      'Deleted key \'%s\' from %s config.
    ' => 'Raderade nyckeln "%s" från konfigurationen %s.',
      'Specify a file to download.' => 'Ange en fil att ladda ned.',
      '(No revisions match.)' => '(Inga revisioner matchar.)',
      'RESTORE' => 'ÅTERSTÄLL',
      'Edit the flag on an object.' => 'Redigera flaggan på ett objekt.',
      'Unknown command \'%s\'. Try \'%s\'.' => '"%s" är ett okänt kommando. Försök "%s".',
      'SUCCESS!' => 'GENOMFÖRDES!',
      'Ignore them?' => 'Ignorera dem?',
      'Use braces to surround a statement block.' => 'Använd klamrar för att omge ett påståendeblock.',
      'CONNECT' => 'ANSLUT',
      '...' => '...',
      'Possible Spelling Mistake' => 'Möjlig felstavning',
      '(%s bytes)' => '(%s byte)',
      'Type of setting \'%s\' must be string.' => 'Inställningstypen "%s" måste vara en sträng.',
      'Name' => 'Namn',
      'Install %s using `%s`.' => 'Installera %s med `%s`.',
      'Downloading file %s...' => 'Laddar ned filen %s...',
      'Report results in JSON format.' => 'Rapportera resultat i JSON-format.',
      'Template not edited.' => 'Mallen är inte redigerad.',
      '%s requires exactly one revision.' => '%s kräver exakt en revision.',
      'Unable to read file permissions for "%s"!' => 'Kunde inte läsa filbehörigheter för "%s"!',
      'Reviewers: %s' => 'Granskare: %s',
      'Title' => 'Titel',
      'Comment Spaces' => 'Kommentarblanksteg',
      'Unexpected `%s` value in `%s` method.' => 'Värdet `%s` förväntades i metoden `%s`.',
      'Disconnected' => 'Frånkopplad',
      'Call Formatting' => 'Anropsformatering',
      'This is a negative test case!' => 'Detta är ett negativt testfall!',
      'PHP Compatibility' => 'PHP-kompatibilitet',
      'Use `%s` to detect issues with JavaScript source files.' => 'Använd `%s` för att upptäcka fel med JavaScript-källfiler.',
      'Use of `%s` Properties' => 'Användning av egenskapen `%s`',
      'Unit test results include failures!' => 'Enhetstestresultaten innehåller misslyckanden!',
      '(The Empty Tree)' => '(Det tomma trädet)',
      'OKAY' => 'OKEJ',
      'Use a flag for library name rather than awaiting user input.' => 'Använd en flagga för biblioteksnamn istället för att invänta användarinmatning.',
      'No messages.' => 'Inga meddelanden.',
      'BROKEN' => 'TRASIG',
      '\'%s\' vs \'%s\'' => '"%s" vs "%s"',
      'Other locations: %s' => 'Andra platser: %s',
      'UNIT ERRORS' => 'ENHETSFEL',
      'Upload complete.' => 'Uppladdning slutförd.',
      'Checks for syntax errors in PHP files.' => 'Kollar efter syntaxfel i PHP-filer.',
      'Did you mean:' => 'Menade du:',
      'Message has unresolved errors.' => 'Meddelandet har olösta fel.',
      'Error' => 'Fel',
      'Expected \'Date:\'.' => '"Date:" förväntades.',
      'Advice' => 'Råd',
      'Unable to resolve argument "%s".' => 'Kunde inte lösa argumentet "%s".',
      'DEPRECATED' => 'FÖRÅLDRAD',
      'Explanation:' => 'Förklaring:',
      '`%s` Should Be `%s`' => '`%s` bör vara `%s`',
      'ACTUAL VALUE' => 'EGENTLIGT VÄRDE',
      'Engine \'%s\' does not support %s.' => 'Motorn "%s" har inte stöd för %s.',
      'Class Not Extending `%s`' => 'Klassen utvidgar inte `%s`',
      '%s runs all tests.' => '%s kör alla tester.',
      'Argument "%s" is ambiguous.' => 'Argumentet "%s" är tvetydigt.',
      'Priority' => 'Prioritet',
      'Unnecessary Semicolon' => 'Onödigt semikolon',
      'Closed' => 'Stängd',
      'Command' => 'Kommando',
      'Trying rule \'%s\'.' => 'Provar regeln "%s".',
      'ID' => 'ID',
      'Set the color of a flag.' => 'Ändrar flaggans färg.',
      'If this file is a huge text file, try using the \'%s\' flag.' => 'Om denna fil är en stor textfil, försök att använda flaggan "%s".',
      '(Old and new values are identical.)' => '(Gamla och nya värden är identiska.)',
      'Name Error' => 'Namnfel',
      'Unexpected `%s` Value' => 'Förväntade värdet `%s`',
      'Stopped:' => 'Stoppades:',
      'Install `%s` from <%s>.' => 'Installera `%s` från <%s>.',
      'Writing %s...' => 'Skriver %s...',
      'Use `%s` instead of `%s` to indicate public visibility.' => 'Använd `%s` istället för `%s` för att indikera offentlig synlighet.',
      'Unable to connect socket! Error #%d: %s' => 'Kunde inte ansluta socket! Fel nr. %s: %s',
      'Unable to locate %s. Configure it with the \'%s\' option in %s.' => 'Kunde inte hitta %s. Konfigurera den alternativet \'%s\' i %s.',
      'Generated Code' => 'Genererad kod',
      'Switched back to %s %s.
    ' => 'Bytte tillbaka till %s %s.',
      'Revision %s, %s' => 'Revision %s, %s',
      '%s doesn\'t exist.
    ' => '%s finns inte.',
      'Included changes:' => 'Inkluderade ändringar:',
      'Use `%s` instead of `%s`.' => 'Använd `%s` istället för `%s`.',
      'Array Element' => 'Arrayelement',
      'Possible spelling error. You wrote \'%s\', but did you mean \'%s\'?' => 'Möjligt stavfel. Du skrev "%s", men du kanske menade "%s"?',
      '%s has no flag to clear.
    ' => '%s har ingen flagga att rensa.',
      'Upgrading library to v2...' => 'Uppgraderar biblioteket till v2...',
      'Specify one of \'%s\', \'%s\' or \'%s\' to choose an export format.' => 'Ange en av "%s", "%s" eller "%s" för att välja ett exportformat.',
      'To do this, run: **%s**' => 'För att göra detta, kör: **%s**',
      'No Revision' => 'Ingen revision',
      'RESET' => 'ÅTERSTÄLL',
      'Resolve these errors:' => 'Lös dessa fel:',
      'What do you want to name this library?' => 'Vad vill du namnge detta bibliotek?',
      'Experimental. Upgrade library to v2.' => 'Experimentell. Uppgradera bibliotek till v2.',
      'Revision \'%s\' does not exist!' => 'Revisionen "%s" finns inte!',
      'Run with %s for more details.' => 'Kör med %s för fler detaljer.',
      'LibXML Error' => 'LibXML-fel',
      'Options \'%s\' and \'%s\' are not compatible. Choose exactly one change source.' => 'Alternativen "%s" och "%s" är inte kompatibla. Välj exakt en ändringskälla.',
      'Revision %s does not exist.' => 'Revisionen %s finns inte.',
      'Trying to create a %s without a working copy!' => 'Försöker att skapa en %s utan en fungerande kopia!',
      'Mercurial does not support %s yet.' => 'Mercurial har inte stöd för %s ännu.',
      'Merge Conflicts' => 'Slå samman konflikter',
      'Paste API Token from that page:' => 'Klistra in API-nyckel från denna sida:',
      'Failed to connect to server (%s): %s' => 'Misslyckades att ansluta till servern (%s): %s',
      'CHOOSE' => 'VÄLJ',
      'Expected: %s
      Actual: %s' => 'Förväntad: %s
    Befintlig: %s',
      'Merging **%s** into **%s**' => 'Slår samman **%s** till **%s**',
      'Spellchecker' => 'Stavningskontroll',
      'The `%s` function should be avoided. It is potentially unsafe and makes debugging more difficult.' => 'Funktionen `%s` bör undvikas. Den är potentiellt osäker och gör det svårare att felsöka.',
      'No such project: "%s"' => 'Är inte ett projekt: "%s"',
      'Custom configuration file.' => 'Anpassad konfigurationsrad.',
      'Canceled.' => 'Avbruten.',
      'Saved file as \'%s\'.' => 'Sparade filen som "%s".',
      'Filename' => 'Filnamn',
      'Default behavior is ambiguous.' => 'Standardbeteendet är tvetydigt.',
      'Client %s' => 'Klient %s',
      'Expected resource "%s" to be an instance of "%s"!' => 'Förväntade resursen "%s" att vara en instans av "%s"!',
      'NOTE' => 'OBS',
      'Closing revision %s \'%s\'...
    ' => 'Stänger revision %s "%s"...',
      'You are trying to connect to a server ("%s") that you do not have any stored credentials for, but the command you are running requires authentication.' => 'Du försöker ansluta till en server ("%s") som du inte har inloggningsuppgifter till, men kommandot du kör kräver inloggningsuppgifter.',
      'Expected \'Author:\'.' => '"Author:" förväntades.',
      'AMBIGUOUS' => 'TVETYDIG',
      'Ignore these %s untracked file(s) and continue?' => 'Ignorera dessa %s ospårad(e) fil(er) och fortsätta?',
      'Writing \'%s\' to \'%s\'...
    ' => 'Skriver "%s" till "%s"...',
      'Working Copy: Path "%s" is part of `%s` working copy "%s".' => 'Fungerande kopia: Sökvägen "%s" är en del av `%s`:s fungerande kopia "%s".',
      'Upgrading %s...' => 'Uppgraderar %s...',
      'Comment Style' => 'Kommentarsstil',
      '(Use `%s` if you want it back.)' => '(Använd `%s` om du vill få tillbaka den.)',
      'Output in JSON format.' => 'Utmatning i JSON-format.',
      'Subversion is not installed' => 'Subversion är inte installerad',
      'Use `%s` for checking if the string starts with something.' => 'Använd `%s` för att kontrollera om strängen börjar med någonting.',
      'Ruby' => 'Ruby',
      'Fetching %s...' => 'Hämtar %s...',
      'Unable to find %s or %s in %s!' => 'Kunde inte hitta %s eller %s i %s!',
      'Use `%s` to detect syntax errors in JSON files.' => 'Använd `%s` för att upptäcka syntaxfel i JSON-filer.',
      'Branch name %s already exists; trying a new name.' => 'Förgreningsnamnet %s finns redan; provar ett nytt namn.',
      'User aborted the workflow.' => 'Användare avbröt arbetsflödet.',
      'Auto-Fix' => 'Autofixa',
      'Modified \'%s\' files:' => 'Ändrade "%s" filer:',
      'Switching to source \'%s\'.' => 'Byter till källa "%s".',
      'Data has fewer than %d lines.' => 'Data har förre än %s rader.',
      'Expected \'%s\'.' => '"%s" förväntades.',
      'Config: Did not find user configuration at "%s".' => 'Konfig: Hittade inte användarkonfigurationen på "%s".',
      'Added' => 'Lade till',
      'Run every test.' => 'Kör varje test.',
      'Syntax Error' => 'Syntaxfel',
      'Configuration Options' => 'Konfigurationsalternativ',
      'No unit test failures.' => 'Inga misslyckade enhetstester.',
      '%s AFFECTED FILE(S)' => '%s PÅVERKAD(E) FIL(ER)',
      'Git status has changed!' => 'Git-status har ändrats!',
      'Install hlint with `%s`.' => 'Installera hlint med `%s`.',
      'Use `%s` as a statement, not an expression.' => 'Använd `%s` som ett påstående, inte ett uttryck.',
      'Created task %s: \'%s\' at %s
    ' => 'Skapade uppgiften %s: "%s" på %s',
      'Status' => 'Status',
      'Formatted String' => 'Formaterad sträng',
      'Unknown' => 'Okänd',
      'Install PHP.' => 'Installera PHP.',
      'Please provide a summary.' => 'Var god ange en sammanfattning.',
      '`%s` Method Cannot Be Declared `%s`' => 'Metoden `%s` kan inte deklarera `%s`',
      'Using library name %s.' => 'Använder biblioteknamnet %s.',
      'Unrecognized command \'%s\'. Try \'%s\'.' => '"%s" är ett okänt kommando. Prova "%s".',
      'Run \'%s\' to get commands and options descriptions.
    ' => 'Kör "%s" för att hämta beskrivningar för kommandon och alternativ.',
      'Provide a comment with your status change.' => 'Ange en kommentar med din statusändring.',
      'applied' => 'tillämpades',
      '\'%s\' failed! Fix the error and run \'%s\' again.' => '"%s" misslyckades! Fixa felet och kör "%s" igen.',
      'Revision URI:' => 'Revisions-URI:',
      'Alias Functions' => 'Aliasfunktioner',
      'Connected' => 'Ansluten',
      'Install RuboCop using `%s`.' => 'Installera RuboCop med `%s`.',
      'New Version Available!' => 'Ny version är tillgänglig!',
      ' <%dms' => ' <%s ms',
      '%s line(s)' => '%s rad(er)',
      'LOGIN REQUIRED' => 'INLOGGNING KRÄVS',
      'Do you want to create it?' => 'Vill du skapa den?',
      'Empty File' => 'Tom fil',
      'Install Cppcheck using `%s` or similar.' => 'Installera Cppcheck med `%s` eller liknade.',
      'Changes:' => 'Ändringar:',
      '(To ignore these %s change(s), add them to "%s".)' => '(För att ignorera dessa %s ändring(ar), lägg till dem i "%s".)',
      '%s: %s' => '%s: %s',
      'Inner Functions' => 'Inre funktioner',
      'Done.' => 'Färdig.',
      'Parentheses should hug their contents.' => 'Parenteser bör omfamna sitt innehåll.',
      'Current Source' => 'Nuvarande källa',
      'DONE' => 'FÄRDIG',
      'Removed alias "%s".' => 'Tog bort aliaset "%s".',
      'Don\'t hard-code class names, use `%s` instead.' => 'Hårdkoda inte klassnamn, använd `%s` istället.',
      'Warning' => 'Varning',
      'Getting file information...' => 'Hämtar filinformation...',
      '`elseif` Usage' => 'Användning av `elseif`',
      '`%s` Function' => 'Funktionen `%s`',
      'Disabled' => 'Inaktiverad',
      'TARGET' => 'MÅL',
      'This comment has a TODO.' => 'Denna kommentar har en TODO.',
      'WARNING' => 'VARNING',
      'Expected \'Name\', \'Added\', \'Deleted\', or \'Modified\'.' => '"Name", "Added", "Deleted" eller "Modified" förväntades.',
      'AVAILABLE' => 'TILLGÄNGLIG',
    );
  }

}

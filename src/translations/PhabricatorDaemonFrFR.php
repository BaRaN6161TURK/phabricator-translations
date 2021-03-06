<?php

final class PhabricatorDaemonFrFR
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'fr_FR';
  }

  protected function getTranslations() {
    return array(
      'There are no running daemons to reload.' => 'Il n’y a aucun démon en cours d’exécution à recharger.',
      'Temporary Failures' => 'Erreurs temporaires',
      'Show only local daemons.' => 'Afficher seulement les démons locaux.',
      'Clock' => 'Horloge',
      'Leased' => 'Emprunté',
      'Unable to stop processes running without PID files. Try running this command again with sudo.' => 'Impossible d’arrêter les processus qui s’exécutent sans fichiers PID. Essayez de relancer cette commande avec sudo.',
      'Starting daemons as %s' => 'Démarrage des démons en tant que %s',
      'Gracefully restart daemon processes in-place to pick up changes to source. This will not disrupt running jobs. This is an advanced workflow; most installs should use __%s__.' => 'Redémarrer aimablement les processus démon sur place pour prendre en compte les modifications dans les sources. Cela ne perturbera pas les tâches en cours d’exécution. C’est un processus avancé ; la plupart des installations devraient utiliser __%s__.',
      'Retries' => 'Nouvelles tentatives',
      'Shutting Down' => 'En cours d’arrêt',
      'This daemon has not reported a status update recently (within %s). It may have exited abruptly. After %s, it will be presumed dead.' => 'Ce démon n’a pas signalé de mise à jour d’état récente (pendant %s). Il peut s’être terminé brutalement. Après %s, il sera présumé mort.',
      'This daemon has been lost or exited uncleanly, and is presumed dead.' => 'Ce démon a été perdu ou ne s’est pas arrêté proprement et est présumé mort.',
      'Terminating process %d...' => 'Terminaison de la tâche %s...',
      'Running as' => 'Exécution en tant que',
      'No daemons match \'%s\'! Use \'%s\' for a list of available daemons.' => 'Aucun démon ne correspond à « %s » ! Utiliser « %s » pour une liste des démons disponibles.',
      'Overseer' => 'Superviseur',
      'No such daemon "%s"!' => 'Pas de démon « %s » !',
      'Archived Tasks' => 'Tâches archivées',
      'No tasks have completed in the last 15 minutes.' => 'Aucune tâche ne s’est terminée dans le dernier quart d’heure.',
      'Task Class' => 'Classe de tâche',
      'Queued Tasks' => 'Tâches dans la file',
      'This daemon is shutting down.' => 'Ce démon est en cours d’arrêt.',
      'Leased Tasks' => 'Tâches empruntées',
      'Enable, disable, or show the lock log.' => 'Activer, désactiver ou afficher le journal des verrous.',
      'All Daemons' => 'Tous les démons',
      'This daemon encountered an error recently and is waiting a moment to restart.' => 'Ce démon a rencontré une erreur récemment et attend un moment avant de redémarrer.',
      'Daemon %d %s [%s] %s' => 'Démon %s %s [%s] %s',
      'There are processes running that look like Phabricator daemons but have no corresponding PID files:
    %s
    Stop these processes by re-running this command with the %s parameter.' => 'Des processus ressemblant à des démons de Phabricator sont en cours d’exécution, mais n’ont pas de fichiers PID correspondant :
    %s
    Arrêter ces processus en relaçant cette commande avec le paramètre %s.',
      'There are no upcoming event triggers.' => 'Il n’y a aucun déclencheur d’événement imminent.',
      'You must specify which daemon to launch.' => 'Vous devez spécifier quel démon lancer.',
      'Run the daemon as the current user instead of the configured %s' => 'Lancer le démon avec l’utilisateur actuel plutôt que celui (%s) configuré',
      'There are no running Phabricator daemons.' => 'Aucun démon Phabricator n’est en cours d’exécution.',
      'Enabling the lock log.' => 'Activer le journal des verrous.',
      'Reloading process %d...' => 'Rechargement du processus %s…',
      'Lock Logs' => 'Journaux des verrous',
      'Ignore running processes that look like daemons but do not have corresponding PID files.' => 'Ignorer les processus actifs qui ressemblent à des démons mais sans avoir les fichiers PID correspondants.',
      'Not Leased' => 'Sans bail',
      'This daemon is shutting down gracefully.' => 'Ce démon est en cours d\'arrêt doux.',
      'You can not both "--enable" or "--disable" with search parameters like "--name".' => 'Vous ne pouvez pas utiliser à la fois « --enable » ou « --disable » avec les paramètres de recherche tels que  « --name ».',
      'Stop all running daemons, or specific daemons identified by PIDs. Use **%s** to find PIDs.' => 'Arrêter tous les démons actifs, ou des démons spécifiques identifiés par leurs PIDs. Utilisez **%s**  pour retrouver les PIDs.',
      'Task Does Not Exist' => 'La tâche n\'existe pas',
      'Failures' => 'Échecs',
      'Active Daemons' => 'Démons actifs',
      'Unknown task status!' => 'Etat de tâche inconnu !',
      'You can not specify conflicting options %s and %s together.' => 'Vous ne pouvez pas spécifier simultanément les options  conflictuelles %s et %s .',
      'Start a specific __daemon__, or __n__ copies of a specific __daemon__.' => 'Démarrer un __daemon__ spécifique, ou __n__ copies d’un __daemon__ spécifique.',
      'Show status of running daemons.' => 'Afficher l\'état des démons actifs.',
      'Daemon' => 'Démon',
      'Daemon Logs' => 'Journaux des démons',
      'Not Completed' => 'Non terminé',
      'Exited' => 'Sorti',
      'Show a list of available daemons.' => 'Afficher une liste des démons disponibles.',
      'Start daemons even if daemons are already running.' => 'Démarrer les démons même si les démons sont déjà actifs.',
      'This task may have recently been garbage collected.' => 'Il est possible que cette tâche ait déja été nettoyée par le ramasse-miettes.',
      'No matching lock logs.' => 'Aucun journal de verrous correspondant.',
      'Grace period for daemons to attempt a clean shutdown, in seconds. Defaults to __15__ seconds.' => 'Période de grâce pour les démons qui tentent un arrêt propre, en secondes. Par défaut, __15__ secondes.',
      'Start the standard configured collection of Phabricator daemons. This is appropriate for most installs. Use **%s** to customize which daemons are launched.' => 'Démarrez l\'ensemble configuré standard des démons de Phabricator. C\'est ce qui convient à la plupart des installations. Utilisez **%s** pour personnaliser les démons à activer.',
      'Daemon Class' => 'Classe Daemon',
      'No daemons to reload.' => 'Aucun démon à recharger.',
      'Bulk Job %d' => 'Tâche de masse %s',
      'Waiting For Confirmation' => 'En attente de confirmation',
      'Seen' => 'Vu',
      'This daemon is running normally and reported a status update recently (within %s). The process is currently waiting to restart, either because it is hibernating or because it encountered an error.' => 'Ce démon s\'exécute normalement et a rapporté une mise à jour récente de sont état (dans %s). Le processus est actuellement en attente de redémarrage, soit parce qu\'il est en hibernation, soit parce qu\'une erreur est survenue.',
      'Freed %s task lease(s).' => array(
        '%s bail de tâche relâché.',
        '%s baux de tâche relâchés.',
      ),
      'Print the logs for all daemons, or some daemon(s) identified by ID. You can get the ID for a daemon from the Daemon Console in the web interface.' => 'Imprimer les journaux pour tous les démons, ou certains démons identifiés par leur ID. Vous pouvez obtenir l’ID d’un démon depuis la Console Démon dans l’interface web.',
      'Lease Expires' => 'Le bail expire',
      'This daemon is running.' => 'Ce démon est actif.',
      'This daemon has not reported its status recently. It may have exited uncleanly.' => 'Ce démon n’a pas signalé son état dernièrement. Il peut s’être terminé brutalement.',
      'Maximum pool size.' => 'Taille maximale de la réserve.',
      'Unknown status "%s"!' => 'Etat inconnu « %s » !',
      'This job is waiting for tasks to be queued.' => 'Ce travail attend que les jobs soient mises dans la file.',
      'ERROR: The PHP function %s is disabled. You must enable it to run daemons on this machine.
    ' => 'ERREUR : La fonction PHP %s est désactivée. Vous devez l’activer pour lancer les démons sur cette machine.',
      'Lease Status' => 'État du bail',
      'Show logs for daemon(s) with given ID(s).' => 'Afficher les journaux pour les démons d’après leur ID.',
      'Specify a proportion of machine memory which must be free before autoscale pools will grow. For example, a value of 0.25 means that pools will not grow unless the machine has at least 25%%%% of its RAM free.' => 'Spécifier une proportion de la mémoire de la machine qui doit être libre avant que les réserves dimensionnées automatiquement ne grossissent. Par exemple, une valeur de 0,25 signifie que les réserves ne grossiront pas tant que la machine n’a pas au moins 25%%%% de sa RAM de libre.',
      'Review logs for a specific lock.' => 'Vérifier les journaux pour un verrou particulier.',
      'By default, **%s** will free all task leases held by the daemons. With this flag, this step will be skipped.' => 'Par défaut, **%s** libérera tous les baux de tâche détenus par les démons. Avec ce drapeau, cette étape sera sautée.',
      'Killing process %d...' => 'Processus %s en train d’être tué…',
      'Recently Completed Tasks (Last 15m)' => 'Tâches récemment terminées (dans les 15 dernières minutes)',
      'Maximum Retries' => 'Nombre maximum de renouvellements',
      'Task %d' => 'Tâche %s',
      'Next In Queue' => 'Suivant dans la file d\'attente',
      'Disabling the lock log.' => 'Désactivation du journal de verrous.',
      'Retries Forever' => 'Renouvellement infini',
      'Exiting' => 'Fermeture en cours',
      'Held' => 'Maintenu',
      'Argv' => 'Argv',
      'You must launch at least one daemon.' => 'Vous devez démarrer au moins un démon.',
      'Lock' => 'Vérrouiller',
      'Enable the lock log.' => 'Activer le journal de verrous.',
      'Lease Expired' => 'Bail expiré',
      'Manage Bulk Jobs' => 'Gérer des tâches de masse',
      'Freeing active task leases...' => 'Libération des baux de tâches actives…',
      'Log' => 'Journal',
      'Start work on this bulk job?' => 'Commencer à exécuter ce travail de masse ?',
      'Lock log is already enabled.' => 'Le journal de verrous est déjà activé.',
      'Interrupting process %d...' => 'Interruption du processus %s…',
      'Disable the lock log.' => 'Désactiver le journal des verrouillages.',
      'View Full Logs' => 'Voir les journaux complets',
      'Lease Owner' => 'Détenteur du bail',
      '%s requires the directory \'%s\' to exist, but it does not exist and could not be created. Create this directory or update \'%s\' / \'%s\' in your configuration to point to an existing directory.' => '%s a besoin que le répertoire \'%s\' existe, mais ce n’est pas le cas et il est impossible de le créer. Créez ce répertoire ou mettez à jour \'%s\'/\'%s\' dans votre configuration pour pointer vers un répertoire existant.',
      'Average Queue Time' => 'Délai moyen d’attente',
      'This job is running.' => 'Cette tâche est en cours.',
      'Show a specific number of log messages (default 100).' => 'Afficher un nombre spécifique de messages de trace (100 par défaut).',
      'Start Work' => 'Commencer le travail',
      'Daemons in library __%s__:' => 'Démons dans la bibliothèque __%s__ :',
      'phd start: Unable to start daemons because daemons are already running.
    You can view running daemons with \'%s\'.
    You can stop running daemons with \'%s\'.
    You can use \'%s\' to stop all daemons before starting new daemons.
    You can force daemons to start anyway with %s.' => 'phd start : Impossible de démarrer les démons parce qu’ils tournent déjà.
    Vous pouvez voir les démons qui tournent avec \'%s\'.
    Vous pouvez arrêter les démons qui tournent avec \'%s\'.
    Vous pouvez utiliser \'%s\' pour arrêter tous les démons avant de démarrer les nouveaux.
    Vous pouvez forcer les démons à démarrer quoi qu’il en soit avec %s.',
      'You can not both "--enable" and "--disable" the lock log.' => 'Vous ne pouvez pas utiliser à la fois « --enable » et « --disable » sur le journal des verouillages.',
      'Dead' => 'Mort',
      'No tasks are leased by workers.' => 'Aucune tâche n’a été empruntée par les travailleurs.',
      'PPID' => 'PPID',
      '%s s' => '%s s',
      'This daemon exited normally and is no longer running.' => 'Ce démon s’est terminé normalement et ne tourne plus.',
      '(Pool: %s)' => '(Réserve : %s)',
      'No Such Task' => 'Aucune tâche semblable',
      'No daemons to kill.' => 'Aucun démon à tuer.',
      '%s exited with a zero exit code, but emitted output consistent with failure under OSX.' => '%s s’est terminé avec un code 0, mais a émis une sortie cohérente avec un échec sous OSX.',
      'Specify a daemon unambiguously. Multiple daemons match \'%s\': %s.' => 'Spécifiez un démon de façon non ambiguë. Plusieurs démons correspondent à \'%s\' : %s.',
      'Lock log is already disabled.' => 'Le journal des verrouillages est déjà désactivé.',
      'This daemon did not report a status update for %s. It is presumed dead. Usually, this indicates that the daemon was killed or otherwise exited abruptly with an error. You may need to restart it.' => 'Ce démon n’a pas signalé de mise à jour d’état depuis %s. Il est présumé mort. En général, cela indique que le démon a été tué ou s’est terminé brutalement avec une erreur. Vous pourriez avoir à le redémarrer.',
      'Process %d exited.' => 'Le processus %s s’est terminé.',
      'This daemon is running normally and reported a status update recently (within %s).' => 'Ce démon tourne normalement et a indiqué récemment une mise à jour d’état (durant %s).',
      'Average Duration' => 'Durée moyenne',
      'Daemons are configured to run as user "%s" in configuration option `%s`, but the current user is "%s" and `phd` was unable to switch to the correct user with `sudo`. Command output:
    %s' => 'Les démons sont configurés pour s’exécuter avec l’utilisateur « %s » dans l’option de configuration `%s`, mais l’utilisateur actuel est « %s » et `php` n’a pas été capable de basculer vers le bon utilisateur avec `sudo`. Sortie de la commande :
    %s',
      'No log records exist for any daemons.' => 'Il n’existe aucun enregistrement de journal pour tout démon.',
      'View Task' => 'Afficher la tâche',
      'Daemon Processes' => 'Processus démons',
      'PID "%d" is not a known Phabricator daemon PID.' => 'Le PID « %s » n’est pas un PID de démon Phabricator connu.',
      'Not touching active task queue leases.' => 'Ne pas toucher aux baux de file de tâche active.',
      'Failure Count' => 'Nombre d’échecs',
      'Arguments' => 'Arguments',
      'Queue Utilization (Approximate)' => 'Utilisation de la file (approximatif)',
      'Last' => 'Dernier',
      'Upcoming Triggers' => 'Prochains déclencheurs',
      'You must specify which daemon to debug.' => 'Vous devez spécifier quel démon déboguer.',
      'Launching daemons (in debug mode):' => 'Lancement des démons (en mode débogage) :',
      'This daemon exited cleanly.' => 'Ce démon s’est terminé proprement.',
      'Bulk Jobs' => 'Travaux de masse',
      'Stop, then start the standard daemon loadout.' => 'Arrêter, puis démarrer le déchargement du démon standard.',
      'This job is complete.' => 'Ce travail est terminé.',
      'Manage Phabricator Daemons' => 'Gérer les démons de Phabricator',
      'PID' => 'PID',
      'ERROR: The PHP extension \'%s\' is not installed. You must install it to run daemons on this machine.
    ' => 'ERREUR : L’extension PHP \'%s\' n’est pas installée. Vous devez l’installer pour exécuter les démons sur cette machine.',
      'Confirm Bulk Job' => 'Confirmer le travail de masse',
      'Daemon Log' => 'Journal du démon',
      'Launching daemons:' => 'Lancement des démons :',
      'This job is waiting for confirmation before work begins.' => 'Ce travail est en attente de confirmation avant de commencer son exécution.',
      'Retries After' => 'Nouvelles tentatives après',
      'Start __daemon__ in the foreground and print large volumes of diagnostic information to the console.' => 'Démarrer __daemon__ en avant-plan et afficher un grand volume d’informations de diagnostic dans la console.',
      'Task %d: %s' => 'Tâche %s: %s',
      'You are trying to run a daemon as a nonstandard user, and `%s` was not able to `%s` to the correct user. 
    Phabricator is configured to run daemons as "%s", but the current user is "%s". 
    Use `%s` to run as a different user, pass `%s` to ignore this warning, or edit `%s` to change the configuration.' => 'Vous essayez d’exécuter un démon en tant qu’utilisateur non standard, et `%s` n’a pas pu `%s` vers le bon utilisateur. 
    Phabricator est configuré pour lancer les démons en tant que «  %s  », mais l’utilisateur actuel est «  %s  ». 
    Utiliser `%s` pour lancer avec un autre utilisateur, passer `%s` pour ignorer cet avertissement, ou modifier `%s` pour changer la configuration.',
      'No More Retries' => 'Plus de nouvelles tentatives.',
      'No log record exists for a daemon with ID "%s".' => 'Il n’existe aucun enregistrement de journal pour le démon avec l’ID « %s ».',
      '<DEAD> %s' => '<DEAD> %s',
      'Task %d Missing' => 'Tâche %s manquante',
      'Task queue is empty.' => 'La file des tâches est vide.',
      '%s ago (%s)' => 'il y a %s (%s)',
      'Daemon %s' => 'Démon %s',
      'Also stop running processes that look like daemons but do not have corresponding PID files.' => 'Arrêter aussi les processus en cours qui ressemblent à des démons mais n’ont pas de fichier PID correspondant.',
      'PID \'%s\' is not a valid PID.' => 'Le PID \'%s\' n\'est pas un PID valide.',
      'Started' => 'Démarré',
      'Daemon Details' => 'Détails du démon',
      '(Logs will appear in "%s".)' => '(les journaux apparaîtront dans « %s »).',
      'Restart daemons to apply changes.' => 'Redémarrer les démons pour appliquer les changements.',
    );
  }

}

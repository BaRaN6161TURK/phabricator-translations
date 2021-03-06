<?php

final class PhabricatorDashboardFrFR
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'fr_FR';
  }

  protected function getTranslations() {
    return array(
      'You have not created any dashboard panels yet, so you can not add an existing panel.' => 'Vous n’avez pas encore créé d’onglets de tableau de bord, donc vous ne pouvez pas ajouter un onglet existant.',
      'Edit Panel' => 'Modifier le panneau',
      'Edit Panel: %s' => 'Modifier le panneau: %s',
      'No dashboards found.' => 'Aucun tableau de bord trouvé.',
      '%s created this dashboard.' => '%s a créé ce tableau de bord.',
      'Query "%s" is unknown to application search engine "%s"!' => 'La requête « %s » est inconnue du moteur de recherche de l\'application « %s » !',
      'This dashboard has no panels yet.' => 'Ce tableau de bord n\'a pas encore de panneaux.',
      'Archive Panel' => 'Panneau d’archive',
      '%s set the dashboard icon.' => '%s a mis à jour l\'icône du tableau de bord.',
      '%s\'s Dashboard' => 'Tableau de bord de %s',
      'Customize your homepage with different panels and search queries.' => 'Personnalisez votre page d\'accueil avec différents panneaux et requêtes de recherche.',
      'Two columns, 1/2 and 1/2' => 'Deux colonnes, 1/2 et 1/2',
      'You do not have permission to edit this dashboard.' => 'Vous n\'avez pas l\'autorisation de modifier ce tableau de bord.',
      'This dashboard will become active again.' => 'Ce tableau de bord deviendra actif à nouveau.',
      '%s changed this dashboard icon from "%s" to "%s".' => '%s a modifié l\'icône de ce tableau de bord de « %s » à « %s ».',
      'Layout Mode' => 'Mode affichage',
      'Dashboards' => 'Tableaux de bord',
      'Browse Dashboards' => 'Parcourir les tableaux de bord',
      'Manage Panels' => 'Gérer les panneaux',
      '%s activated dashboard panel %s.' => '%s a activé le panneau du tableau de bord %s.',
      '%s edited dashboard(s) for %s, added %s: %s; removed %s: %s.' => '%s a modifié un/des tableaux de bord pour %s, a ajouté %s : %s ; a supprimé %s : %s.',
      'This panel will be reactivated and appear in other interfaces as an active panel.' => 'Cet onglet sera réactivé et apparaîtra dans les autres interfaces comme un onglet actif.',
      '%s activated this dashboard.' => '%s a activé ce tableau de bord.',
      'No Panels Exist Yet' => 'Il n\'existe pas encore de panneaux',
      'Edit Dashboard: %s' => 'Modifier le tableau de bord: %s',
      'Choose Dashboard Icon' => 'Choisir l\'icône du tableau de bord',
      'Edit Dashboard' => 'Modifier le tableau de bord',
      'This panel has type "%s", but that panel type is not known to Phabricator.' => 'Cet onglet a un type « %s », mais ce type d’onglet est inconnu de Phabricator.',
      '%s edited panel(s), added %s: %s; removed %s: %s.' => '%s a modifié un/des onglets, a ajouté %s : %s ; a supprimé %s : %s.',
      'To Self' => 'A soi-même',
      'Archive Dashboard' => 'Archiver le tableau de bord',
      'Kaboom' => 'Kaboom',
      'Tabs' => 'Onglets',
      'Panel' => 'Panneau',
      'Sports' => 'Sports',
      'To render more than %s levels of panels nested inside other panels, purchase a subscription to Phabricator Gold.' => 'Pour afficher plus de %s niveaux d’onglets inclus dans d’autres, acheter un abonnement à Phabricator Gold.',
      'template' => 'modèle',
      'Type a panel name...' => 'Entrer un nom de panneau...',
      'Unknown Type' => 'Entrée inconnue',
      'Plastic Debt' => 'Dette en plastique',
      'There is only one column in mode full.' => 'Il n’y a qu’une seule colonne en mode complet.',
      'Activate Panel?' => 'Activer le panneau?',
      'Add some static text to the dashboard. This can be used to provide instructions or context.' => 'Ajouter du texte statique au tableau de bord. Cela peut être utilisé pour fournir des instructions ou le contexte.',
      'You must select a type of panel to create.' => 'Vous devez sélectionner un type d’onglet à créer.',
      '%s removed %s panel(s): %s.' => array(
        array(
          '%s a supprimé %s panneau : %s.',
          '%s a supprimé %s panneaux : %s.',
        ),
      ),
      'Apply transactions to create a new dashboard panel or edit an existing one.' => 'Appliquer les transactions pour créer un nouvel onglet de tableau de bord ou pour modifier un existant.',
      'Tab %d Panel' => 'Panneau de l’onglet %s',
      'Query Panel' => 'Panneau de requête',
      'This engine is used to modify dashboard panels.' => 'Ce moteur est utilisé pour modifier les onglets du tableau de bord.',
      'This column does not have any panels yet.' => 'Cette colonne n’a pas encore d’onglets.',
      'This panel does not exist, or you do not have permission to see it.' => 'Cet onglet n’existe pas, ou vous n’avez pas le droit de le voir.',
      'Home Menu' => 'Menu d\'accueil',
      'Use tabs to switch between several other panels.' => 'Utiliser les onglets pour basculer entre plusieurs autres panneaux.',
      '%s removed %s dashboard(s) for %s: %s.' => array(
        array(
          '%s a supprimé %s tableau de bord pour %s : %s.',
          '%s a supprimé %s tableaux de bord pour %s : %s.',
        ),
      ),
      '%s created dashboard %s.' => '%s a créé le tableau de bord %s.',
      'Apple Blueberry' => 'Apple Blueberry',
      '%s activated this panel.' => '%s a activé ce panneau.',
      '%s set the dashboard icon on %s from "%s" to "%s".' => '%s a défini l’icône du tableau de bord sur %s de « %s » à « %s ».',
      '(All Types)' => '(Tous les types)',
      'Add New Panel' => 'Ajouter un nouveau panneau',
      'Remove Panel' => 'Supprimer le panneau',
      '(Invalid Panel)' => '(Panneau invalide)',
      'You must select a destination to install this dashboard.' => 'Vous devez choisir une destination pour installer ce tableau de bord.',
      'Corned Beef' => 'Bœuf salé',
      'Choose a panel to add to this dashboard:' => 'Choisissez un panneau à ajouter à ce tableau de bord.',
      '%s removed %s panel(s) for %s: %s.' => array(
        array(
          '%s a supprimé %s panneau pour %s: %s.',
          '%s a supprimé %s panneaux pour %s: %s.',
        ),
      ),
      'Blocks' => 'Blocs',
      'Custom Query ("%s")' => 'Requête personnalisée (« %s »)',
      'Stay Woke' => 'Rester éveillé',
      'This panel will be archived and no longer appear in lists of active panels.' => 'Cet onglet sera archivé et n’apparaîtra plus dans les listes des onglets actifs.',
      'Name of the panel.' => 'Nom du panneau.',
      '%s added %s panel(s): %s.' => '%s a ajouté %s panneau(x): %s.',
      'Appears On' => 'Apparaît sur',
      'All Dashboards' => 'Tous les tableaux de bord',
      'Tab Panel' => 'Panneau d’onglet',
      '%s archived this dashboard.' => '%s a archivé ce tableau de bord.',
      '%s changed the tabs from "%s" to "%s".' => '%s a modifié les onglets de  « %s » en « %s ».',
      'Dashboard name is required.' => 'Un nom de tableau de bord est requis.',
      'All Panels' => 'Tous les panneaux',
      'Show results of a search query, like the most recently filed tasks or revisions you need to review.' => 'Afficher les résultats d\'une requête de recherche; comme les tâches mises en file dernièrement ou les révisions que vous avez besoin de relire.',
      'You must provide a name for this panel.' => 'Vous devez donner un nom pour ce panneau.',
      'View Dashboard' => 'Afficher le tableau de bord',
      'Attempting to use a panel in a way that requires an implementation, but the panel implementation ("%s") is unknown to Phabricator.' => 'Tentative d\'utilisation d\'un onglet d’une manière qui requiert une implémentation, mais l’implémentation de l’onglet (« %s ») est inconnue de Phabricator.',
      'No panels.' => 'Pas de panneaux.',
      'Start with a simple dashboard with a welcome message, a feed of recent events, and a few starter panels.' => 'Démarrer avec un tableau de bord simple avec un message de bienvenue, un fil des événements récents, et quelques onglets de démarrage.',
      'Search for dashboards by name substring.' => 'Rechercher les tableaux de bord par partie du nom.',
      'Two columns, 2/3 and 1/3' => 'Deux colonnes, 2/3 and 1/3',
      'To create a new dashboard panel, you must select a panel type.' => 'Pour créer un nouvel onglet de tableau de bord, vous devez sélectionner un type d’onglet.',
      'Two columns, 1/3 and 2/3' => 'Deux colonnes, 1/3 et 2/3',
      'Page Saver' => 'Économiseur de page',
      'Unknown dashboard template %s!' => 'Modèle de tableau de bord %s inconnu !',
      'Search for panels by name substring.' => 'Rechercher les onglets par partie du nom.',
      'This dashboard will be marked as archived.' => 'Ce tableau de bord va être marqué comme archivé.',
      'Application search engines of class "%s" can not be used to build dashboard panels.' => 'Les moteurs de recherche d’application de la classe « %s » ne peuvent pas être utilisés pour construire des onglets de tableaux de bord.',
      'Required parameter `parentPanelPHIDs` is not present in request.' => 'Le paramètre obligatoire `parentPanelPHIDs` n’est pas présent dans la requête.',
      '%s renamed this panel from "%s" to "%s".' => '%s a renommé cet onglet de « %s » en « %s ».',
      'Wayfinding' => 'Découverte de chemin',
      'PHP is Life' => 'PHP est la Vie',
      'Instead, add a new panel.' => 'A la place, ajoutez un nouveau panneau.',
      'Create Custom Pages' => 'Créer des pages personnalisées',
      'Add Panel to Dashboard' => 'Ajouter un panneau au tableau de bord',
      'No panels found.' => 'Aucun panneau trouvé.',
      'Create Dashboard Panel' => 'Créer un onglet de tableau de bord',
      'Ding Ding' => 'Ding Ding',
      'Panels' => 'Panneaux',
      'Edit Dashboard Panels' => 'Modifier les onglets du tableau de bord',
      '%s renamed dashboard panel %s from "%s" to "%s".' => '%s a renommé l’onglet %s du tableau de bord de « %s » en « %s ».',
      'Active Panels' => 'Activer les panneaux',
      'Archive Panel?' => 'Archiver les panneaux?',
      '%s activated dashboard %s.' => '%s a activé le tableau de bord %s.',
      'Tab %d Name' => 'Nom de l’onglet %s',
      'Choose the type of dashboard panel to create:' => 'Choisir le type d’onglet de tableau de bord à créer :',
      '%s archived dashboard %s.' => '%s a archivé le tableau de bord %s.',
      'Create a Dashboard' => 'Créer un tableau de bord',
      'Add Panel' => 'Ajouter un panneau',
      '(None)' => '(Aucun)',
      'Places this dashboard as a menu item on home as a personal menu item. It will only be on your personal home.' => 'Place ce tableau de bord comme un élément de menu sur la page d’accueil comme un élément de menu personnel. Il ne sera que dans votre accueil personnel.',
      '%s added %s dashboard(s) for %s: %s.' => array(
        array(
          '%s a ajouté %s tableau  de bord pour %s : %s.',
          '%s a ajouté %s tableaux  de bord pour %s : %s.',
        ),
      ),
      'Simple Template' => 'Modèle simple',
      'Unknown layout mode!' => 'Mode de mise en page inconnu !',
      'Panel Type' => 'Type de panneau',
      'Save Panel' => 'Sauvegarder le panneau',
      'Flag' => 'Indicateur',
      'Select a panel to add.' => 'Sélectionner un panneau à ajouter.',
      'Archived Panels' => 'Archiver les panneaux',
      'Please select a valid dashboard.' => 'Veuillez sélectionner un tableau de bord valide.',
      'Rename the panel.' => 'Renommer le panneau.',
      '%s removed %s dashboard(s): %s.' => array(
        array(
          '%s a supprimé %s tableau de bord : %s.',
          '%s a supprimé %s tableaux de bord : %s.',
        ),
      ),
      '%s removed tabs.' => '%s a supprimé des onglets.',
      'Manage Dashboard' => 'Gérer le tableau de bord',
      'Search For' => 'Recherche pour',
      '%s edited panel(s) for %s, added %s: %s; removed %s: %s.' => '%s a modifié un/des onglets pour %s, a ajouté %s : %s ; a supprimé %s : %s.',
      'Wireless' => 'Sans fil',
      '%s edited dashboard(s), added %s: %s; removed %s: %s.' => '%s a modifié un/des tableaux de bord, a ajouté %s : %s ; a supprimé %s : %s.',
      '%s archived this panel.' => '%s a archivé cet onglet.',
      'Panel "%s" already exists on dashboard.' => 'L’onglet « %s » existe déjà sur le tableau de bord.',
      'The application search engine "%s" is not known to Phabricator!' => 'Le moteur de recherche de l’application « %s » n’est pas connu de Phabricator !',
      'Leave this blank for the default number of items.' => 'Laisser cela vide pour le nombre d’éléments par défaut.',
      'Arrange Panels' => 'Arranger les onglets',
      'Start with a blank canvas.' => 'Commencer avec un canevas vide.',
      '%s created this panel.' => '%s a créé cet onglet.',
      '%s added %s dashboard(s): %s.' => array(
        array(
          '%s a ajouté %s tableau de bord : %s.',
          '%s a ajouté %s tableaux de bord : %s.',
        ),
      ),
      'Are you sure you want to remove this panel?' => 'Êtes-vous sûr de vouloir supprimer cet onglet ?',
      'Activate Dashboard' => 'Activer le tableau de bord',
      '%s archived dashboard panel %s.' => '%s a archivé l’onglet du tableau de bord %s.',
      '%s renamed this dashboard from "%s" to "%s".' => '%s a renommé ce tableau de bord de « %s » en « %s ».',
      'Browse Dashboard Panels' => 'Naviguer dans les onglets du tableau de bord',
      'Choose a dashboard template to start with.' => 'Choisir un modèle de tableau de bord avec lequel démarrer.',
      'Places this dashboard as a menu item on home as a global menu item. It will be available to all users.' => 'Place ce tableau de bord comme élément de menu dans l’accueil comme élément de menu global. Il sera disponible pour tous les utilisateurs.',
      'Missing or Restricted Panel' => 'Onglet manquant ou restreint',
      'Create New Panel' => 'Créer un nouveau panneau',
      '%s added %s panel(s) for %s: %s.' => array(
        array(
          '%s a ajouté %s onglet pour %s : %s.',
          '%s a ajouté %s ongletx pour %s : %s.',
        ),
      ),
      'Install Dashboard' => 'Installer le tableau de bord',
      'Metallica' => 'Metallica',
      'Announcement' => 'Annonce',
      '%s set dashboard icon for %s.' => '%s a défini l’icône du tableau de bord pour %s.',
      'Arrange' => 'Organiser',
      'No Dashboards' => 'Aucun panneau',
      'Dashboard Panels' => 'Panneaux de tableaux de bord',
      'Add Existing Panel' => 'Ajouter un panneau existant',
      'Text Panel' => 'Panneau de texte',
      'Active Dashboards' => 'Tableaux de bord actifs',
      'Not a valid panel.' => 'N\'est pas un panneau valide.',
      'Knowledge' => 'Connaissance',
      'Create a Panel' => 'Créer un panneau',
      'Personal Dashboard' => 'Tableau de bord personnel',
      'Create Panel' => 'Créer un panneau',
      'This is a simple template dashboard. You can edit this panel to change this text and replace it with a welcome message, or leave this placeholder text as-is to give your dashboard a rustic, authentic feel.
    You can drag, remove, add, and edit panels to customize the rest of this dashboard to show the information you want.
    To install this dashboard on the home page, edit your personal or global menu on the homepage and click Dashboard under New Menu Item on the right.' => 'Voici un modèle simple de tableau de bord. Vous pouvez modifier ce panneau en changeant ce texte et le remplaçant par un message de bienvenue, ou bien laisser ce champ de saisie comme tel afin de donner à votre tableau de bord un air rustique, authentique.
    Vous pouvez glisser, supprimer, ajouter, et modifier les panneaux pour personnaliser le reste du tableau de bord et afficher les informations que vous désirez.
    Pour afficher ce tableau de bord sur la page d\'accueil, éditer votre menu personnel ou global sur la page d\'accueil et cliquez sur « page d\'accueil » en dessous de « Nouvel Objet de Menu » à droite.',
      'You awake in a twisting maze of mirrors, all alike. You are likely to be eaten by a graph cycle. Should you escape alive, you resolve to be more careful about putting dashboard panels inside themselves.' => 'Vous vous réveillez dans un étrange labyrinthe de miroirs, tous semblables. Il est probable que vous soyez dévoré par une figure cyclique.  Pour vous en sortir vivant, vous prenez la résolution d\'être plus prudent concernant l\'inclusion de panneaux du tableau de bord à l\'intérieur d\'eux-mêmes.',
      'Global Dashboard' => 'Tableau de bord global',
      '%s created dashboard panel %s.' => '%s a créé l’onglet du tableau de bord %s.',
      'Nameless Tab' => 'Onglet sans nom',
      'One full-width column' => 'Une colonne sur toute la largeur',
      'New panel name.' => 'Nouveau nom d’onglet.',
      '(All Panels)' => '(Tous les panneaux)',
      'Menu Label' => 'Libellé du menu',
      'Panel name is required.' => 'Le nom du panneau est obligatoire.',
      '%s renamed dashboard %s from "%s" to "%s".' => '%s a renommé le tableau de bord %s de « %s » en « %s » .',
      'You do not have access to any dashboards. To continue, please create a dashboard first.' => 'Vous n’avez pas accès à un tableau de bord. Pour continuer, veuillez d’abord créer un tableau de bord.',
      'Build individual panels to display on your homepage dashboard.' => 'Construire des onglets individuels pour affichage sur le tableau de bord de votre page d’accueil.',
      'Dashboard Panel' => 'Onglet du tableau de bord',
      'Water Vessel' => 'Vase d’eau',
      'This panel does not appear on any dashboards.' => 'Cet onglet n’apparaît dans aucun tableau de bord.',
      'New Panel' => 'Nouvel onglet',
      '%s set the tabs to "%s".' => '%s a défini les onglets à « %s ».',
      'You do not have permission to install a dashboard on home.' => 'Vous n’avez pas le droit d’installer un tableau de bord sur la page d’accueil.',
      'Create Dashboard' => 'Créer un tableau de bord',
      'View Panel' => 'Voir le panneau',
      'Activate Panel' => 'Activer le panneau',
      'Type a dashboard name...' => 'Entrez un nom de tableau de bord...',
    );
  }

}

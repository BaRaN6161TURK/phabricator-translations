<?php

final class PhabricatorMultimeterFrFR
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'fr_FR';
  }

  protected function getTranslations() {
    return array(
      'Samples' => 'Exemples',
      '(All)' => '(Tout)',
      'By ID' => 'Par ID',
      'Rate' => 'Taux',
      'Cost' => 'Coût',
      '%s Unit(s)' => '%s Unité(s)',
      'By Request' => 'Par requête',
      'By Host' => 'Par hôte',
      'Web Request' => 'Requête Web',
      'By Context' => 'Par contexte',
      'Avg' => 'Moy',
      'By Label' => 'Par label',
      'Viewer' => 'Visualiseur',
      '%s Event(s)' => '%s Événement(s)',
      'Static Resource' => 'Ressource statique',
    );
  }

}
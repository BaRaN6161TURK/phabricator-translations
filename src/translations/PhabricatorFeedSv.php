<?php

final class PhabricatorFeedSv
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'sv';
  }

  protected function getTranslations() {
    return array(
      'Call %s before publishing!' => 'Anropa %s innan du publicerar!',
      'All Stories' => 'Alla berättelser',
      'Creation (Newest First)' => 'Skapelse (nyast först)',
      'Republishing story...' => 'Återpublicerar berättelse...',
      'Include Projects' => 'Inkludera projekt',
      'Publish a story to the feed.' => 'Publicera en berättelse i matningen.',
      'Specify a story key to republish.' => 'Ange en berättelsenyckel att återpublicera.',
      'Include Users' => 'Inkludera användare',
      'Story' => 'Berättelse',
      'You must call %s if you %s!' => 'Du måste anropa %s om du %s!',
      'Feed options.' => 'Matningsalternativ.',
      'Creation (Oldest First)' => 'Skapelse (äldst först)',
      'No Stories.' => 'Inga berättelser.',
      'Unknown rendering target: %s' => 'Okänt renderingsmål: %s',
      'Include stories about projects I am a member of.' => 'Inkludera berättelser om projekten jag är medlem i.',
      'Review Recent Activity' => 'Granska senaste aktivitet',
    );
  }

}

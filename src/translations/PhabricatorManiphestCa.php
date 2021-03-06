<?php

final class PhabricatorManiphestCa
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'ca';
  }

  protected function getTranslations() {
    return array(
      'Create Task' => 'Crea una tasca',
      'Triage' => 'Triatge',
      'Priority of the task.' => 'Prioritat de la tasca.',
      'Assignee' => 'Assignat',
      'Open Parents' => 'Pares oberts',
      'Update an existing Maniphest task.' => 'Actualitza una tasca existent de Maniphest.',
      '%s closed %s as %s.' => '%s ha tancat %s com a %s.',
      'This task has been locked.' => 'Aquesta tasca ha estat tancada amb clau.',
      '%s claimed %s.' => '%s ha reclamat %s.',
      'TASK DETAIL' => 'DETALL DE TASCA',
      'Search Subtasks' => 'Cerca subtasques',
      'Merged' => 'Fusionat',
      'Closed after %s' => 'Tancat després %s',
      'Changed Task Priority' => 'Prioritat de la tasca canviada',
      'New task name.' => 'Nom de tasca nova.',
      'Bad Key' => 'Clau errònia',
      'Unblock' => 'Desbloqueja',
      'Task Block %d' => 'Bloc de la tasca %s',
      'Select and reorder task fields.' => 'Selecciona i reordena camps de la tasca.',
      'Change status to' => 'Canvia l\'estat a',
      'Oldest open task.' => 'Tasca oberta més antiga.',
      'Change the parents of this task.' => 'Canvia els pares d\'aquesta tasca.',
      'Period' => 'Període',
      'Subtasks' => 'Subtasques',
      '○ %s' => '○ %s',
      'Maniphest Reports' => 'Informes de Maniphest',
      'Update the task description.' => 'Actualitza la descripció de la tasca.',
      'From Email' => 'Del correu electrònic',
      'Mentioned In' => 'Esmentat a',
      'Minimal Valid Config' => 'Configuració mínima vàlida',
      'Recently Closed' => 'Tancat recentment',
      'Assigned Task' => 'Tasca assignada',
      '%s updated the task description for %s.' => '%s ha actualitzat la descripció de la tasca per %s.',
      'Task Has Revision' => 'La tasca té una revisió',
      'Validate "%s"' => 'Valida "%s"',
      'Original task author.' => 'Autor de la tasca original',
      'Open Subtasks' => 'Subtasques obertes',
      'Assign a task to a specific user.' => 'Assigna una tasca a un usuari específic.',
      'Merged In' => 'Fusionat a',
      'No tasks found.' => 'No s\'han trobat tasques.',
      'Finished' => 'Acabat',
      'Assign task to: %s.' => 'Assigna la tasca a: %s.',
      'Assigned task to: %s.' => 'Tasca assignada a: %s.',
      'Open Closed' => 'Obre el tancat',
      'New task description.' => 'Nova descripció de la tasca.',
      'Subtask' => 'Subtasca',
      'Points' => 'Punts',
      'The task description.' => 'La descripció de la tasca.',
      'Filter By Project' => 'Filtra per projecte',
      '%s claimed this task.' => '%s ha reclamat aquesta tasca.',
      'Untitled Task' => 'Tasca sense títol',
      'Edit Subtasks' => 'Edita les subtasques',
      '%s assigned this task to %s.' => '%s ha assignat aquesta tasca a %s.',
      'Change status to: %s.' => 'Canvia l\'estat a: %s.',
      'Assign task to me' => 'Assignar-me la tasca',
      'Assign task to' => 'Assigna tasca a',
      'Tasks to Close and Merge' => 'Tasques per tancar i fusionar',
      '%s updated the task description.' => '%s ha actualitzat la descripció de la tasca.',
      'Bad Value Type' => 'Tipus de valor incorrecta',
      'Closed, Duplicate' => 'Tancat, Duplicat',
      'task author' => 'autor de la tasca',
      'Status of the task.' => 'Estat de la tasca.',
      'Information about task status.' => 'Informació sobre l\'estat de la tasca.',
      'Subtasks.' => 'Subtasques.',
      '%s closed this task as %s.' => '%s ha tancat aquesta tasca com a %s.',
      'Configure Maniphest.' => 'Configura Maniphest.',
      'Updated Before' => 'Actualitzat anteriorment',
      '%s created this task.' => '%s ha creat aquesta tasca.',
      'Search...' => 'Cerca…',
      'Wishlist' => 'Llista de desitjos',
      'Closed Default' => 'Tancat per defecte',
      'Invalid Key' => 'Clau no vàlida',
      '(Not Assigned)' => '(No assignat)',
      'Task' => 'Tasca',
      'Close As Duplicate' => 'Tanca com a Duplicat',
      'Reassigned' => 'Reassignat',
      'Block' => 'Bloc',
      'Mentions' => 'Mencions',
      'Select All' => 'Selecciona\'ls tots',
      'User who is responsible for the task.' => 'Usuari responsable per la tasca.',
      'Task Author' => 'Autor de la tasca',
      'Subtask IDs' => 'IDs de subtasca',
      '(No Project)' => '(Sense projecte)',
      'Duplicates' => 'Duplicats',
      'Task Locked' => 'Tasca bloquejada',
      'Reports' => 'Informes',
      'Edit Task: %s' => 'Edita la tasca: %s',
      'No tasks.' => 'Sense tasques.',
      'Feature Request' => 'Petició de millora',
      'Priorities' => 'Prioritats',
      'Task description.' => 'Descripció de la tasca.',
      'Current Subtasks' => 'Subtasques actuals',
      'Change the subtasks of this task.' => 'Canvi les subtasques d\'aquesta tasca.',
      'Save Subtasks' => 'Desa les subtasques',
      'Change Status' => 'Canvia l\'estat',
      'Parent Task' => 'Tasca mare',
      'Parent tasks.' => 'Tasques mare.',
      'Edit Parent Tasks' => 'Edita les tasques mare',
      '%s assigned %s to %s.' => '%s ha assignat %s a %s.',
      'Edit Task' => 'Edita la tasca',
      'Change the priority of a task.' => 'Canvia la prioritat d\'una tasca.',
      '%s closed %s, a subtask of %s, as %s.' => '%s ha tancat %s, una subtasca de %s, com a %s.',
      'Low' => 'Baix',
      'Save Parent Tasks' => 'Desa les tasques mare',
      'Change Priority' => 'Canvia la prioritat',
      'WORKBOARD' => 'PANELL DE CONTROL',
      'Task 3' => 'Tasca 3',
      'Validation of "%s"' => 'Validació de "%s"',
      'Current Parent Tasks' => 'Tasques mare actuals',
      'Related Objects' => 'Objectes relacionats',
      'High' => 'Alt',
      'Move on Workboard' => 'Mou en el panell de control',
      'The title of the task.' => 'El títol de la tasca.',
      'Task 1' => 'Tasca 1',
      'Changed Status' => 'Estat canviat',
      '%s renamed this task from %s to %s.' => '%s ha reanomenat aquesta tasca de "%s" a "%s".',
      'Updated After' => 'Actualtzar després',
      '%s removed %s revision(s): %s.' => '%s ha eliminat %s la revisió(ns): %s.',
      'TASK DESCRIPTION' => 'DESCRIPCIÓ DE LA TASCA',
      'Create as a subtask of another task.' => 'Crear com a subtasca d\'una altra tasca.',
      '● %s' => '● %s',
      'Change priority to' => 'Canvia la prioritat a',
      'Open Duplicate' => 'Obre el duplicat',
      'Reassign the task.' => 'Reassigna la tasca.',
      'Week of %s' => 'Setmana d\'%s',
      'Opened' => 'Obert',
      'Maniphest Task' => 'Tasca de Maniphest',
      'By User' => 'Per l\'usuari',
      'Change the status of a task.' => 'Canvia l\'estat d\'una tasca.',
      'CHANGES TO TASK DESCRIPTION' => 'CANVIS A LA DESCRIPCIÓ DE LA TASCA',
      'Rename the task.' => 'Reanomena la tasca.',
      '%s closed this task as a duplicate.' => '%s ha tancat aquesta tasca com a duplicada.',
      'Wish' => 'Desig',
      'By Project' => 'Per projecte',
      'Subscribed' => 'Subscrit',
      'Unknown Status' => 'Estat desconegut',
      'Interacting with Maniphest Tasks' => 'Interactuant amb les Tasques de Maniphest',
      'Assigned' => 'Assignat',
      'Change Estimate' => 'Canvia l\'estimació',
      'Closed as Duplicate' => 'Tancat com a Duplicat',
      'Estimated Hours' => 'Hores estimades',
      'Create a new Maniphest task.' => 'Crea una nova tasca de Maniphest.',
      'Create New Task' => 'Crea una nova tasca',
      'Read information about tasks.' => 'Llegeix informació sobre les tasques.',
      'Subtype of the task.' => 'Subtipus de la tasca.',
      'Unassigned task.' => 'Tasca sense assignar.',
      'Mentioned Here' => 'Esmentat aquí',
      'Change the priority of the task.' => 'Canvia la prioritat de la tasca.',
      'Page Size' => 'Mida de la pàgina',
      '%s reopened %s, a subtask of %s, as %s.' => '%s ha reobert %s, una subtasca de %s, com a %s.',
      'Name of the task.' => 'Nom de la tasca.',
      'Tasks and Bugs' => 'Tasques i errors',
      'Assign / Claim' => 'Assigna / Reclama',
      '%s reopened subtask %s as %s.' => '%s ha reobert la subtasca %s com a %s.',
      'Search for tasks with given authors.' => 'Cerca tasques amb els autors indicats.',
      'The task already has the selected status.' => 'La tasca ja té l\'estat seleccionat.',
      'Clear Selection' => 'Neteja la selecció',
      '%s reopened %s as "%s".' => '%s ha reobert %s com a "%s".',
      'Unassign task.' => 'Desassigna la tasca.',
      'Changed task status to "%s".' => 'Canvia l\'estat de la tasca a "%s".',
      'Task 2' => 'Tasca 2',
    );
  }

}

<?php

final class PhabricatorManiphestSrEc
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'sr_Ec';
  }

  protected function getTranslations() {
    return array(
      'Can Edit Task Projects' => 'Може мењати пројекте задатка',
      'Create Task' => 'Направи задатак',
      'Triage' => 'Тријажа',
      'Define task subtypes.' => 'Дефиниши подврсте задатка.',
      '%s removed %s as the assignee of this task.' => '%s је уклонио %s са места задужиоца овог задатка.',
      'Priority of the task.' => 'Приоритет задатка.',
      'User "%s" is not a valid user.' => 'Корисник „%s” није исправан корисник.',
      'Weigh In' => 'Вагати',
      'Task Fields' => 'Поља задатка',
      'Assignee' => 'Задужилац',
      'Open Parents' => 'Отвори родитеље',
      'Update an existing Maniphest task.' => 'Ажурирај постојећи Манифест задатак.',
      'List of columns to move the task to.' => 'Списак колона у које треба преместити задатак.',
      'A task\'s subscribers change.' => 'Промена пратиоца задатака.',
      'Oldest open task, excluding those with Low or Wishlist priority.' => 'Најстарији отворен задатак, изузимајући оне са ниским и „листа жеља” приоритетима.',
      'Change Points' => 'Измени поене',
      '%s closed %s as %s.' => '%s је затворио %s као %s.',
      'This task has been locked.' => 'Овај задатак је закључан.',
      '%s added %s commit(s) to %s: %s.' => '%s је додао %s комит(ова) у %s: %s.',
      '%s claimed %s.' => '%s је задужио %s.',
      'TASK DETAIL' => 'ДЕТАЉИ ЗАДАТКА',
      'The task already has the selected owner.' => 'Задатак већ има одабраног власника.',
      '%s closed this task as a duplicate by committing %s.' => '%s је затворио овај задатак као дупликат слањем комита %s.',
      'Search Subtasks' => 'Претражи подзадатке',
      'Merged' => 'Спојен',
      'Closed after %s' => 'Затворен након %s',
      'Changed Task Priority' => 'Измењен приоритет задатка',
      'You are about to apply a bulk edit to Maniphest which will affect %s task(s).' => 'На прагу сте групне измене Манифеста који ће утицати на %s задатак(а).',
      'New task name.' => 'Ново име задатка.',
      '%s changed the point value for this task from %s to %s.' => '%s је променио вредност поена овог задатака са %s на %s.',
      'Changed task priority to "%s".' => 'Приоритет задатка постављен на „%s”.',
      'Tasks must have a title.' => 'Задаци морају имати наслов.',
      'Oldest (Pri)' => 'Најстарији (Приоритет)',
      'Bad Key' => 'Лош кључ',
      'Can Prioritize Tasks' => 'Може да мења приоритете задатака',
      'Unblock' => 'Деблокирај',
      'Task Block %d' => 'Блокирање задатка %s',
      'Select and reorder task fields.' => 'Одабери и преуреди поља задатка.',
      'Description Preview' => 'Претпреглед описа',
      'Batch Edit Selected »' => 'Групна измена одабрана »',
      'Change status to' => 'Постави стање на',
      '%s changed the subtype of %s from "%s" to "%s".' => '%s је променио подврсту %s са „%s” на „%s”.',
      'Oldest open task.' => 'Најстарији отворен задатак.',
      'Duplicates Merged Here' => 'Дупликати спојени са овим задатком',
      'Change the parents of this task.' => 'Измени родитеље овог задатка.',
      'Period' => 'Период',
      'Subtasks' => 'Подзадаци',
      'Update has no effect.' => 'Промена нема никакав ефекат.',
      'Update the task description.' => 'Измени опис задатка.',
      'From Email' => 'Са мејла',
      'Show Only Tasks With Open Parents' => 'Прикажи само задатке са отвореним родитељима',
      'Needs Triage' => 'Потребна тријажа',
      'Mentioned In' => 'Поменуто у',
      'Minimal Valid Config' => 'Минимална исправна конфигурација',
      'The source task is associated with the destination commit.' => 'Изворни задатак је повезан са одредишним комитом.',
      'Story Points' => 'Поени за причу',
      '%s changed file(s), attached %s: %s; detached %s: %s.' => '%s је изменио датотеке, додао %s: %s; уклонио %s: %s.',
      '%s closed this task as a duplicate of %s.' => '%s је затворио овај задатак као дупликат задатка %s.',
      'Recently Closed' => 'Недавно затворени',
      'One of a task\'s subtasks changes status.' => 'Један од подзадатака је променио стање.',
      'Assigned Task' => 'Доделио задатак',
      '%s updated the cover image for %s.' => '%s је променио слику за %s.',
      '%s updated the task description for %s.' => '%s је променио опис задатка %s.',
      'Status set to invalid value.' => 'Стање постављено на неисправну вредност.',
      '%s lowered the priority of %s from %s to %s.' => '%s је смањио приоритет задатка %s са %s на %s.',
      'Simple Subtypes' => 'Једноставне подврсте',
      'Search for tasks with given statuses.' => 'Претражи задатке са одређеним стањем.',
      'Task Has Revision' => 'Задатак има ревизију',
      'Unbreak Now!' => 'Поправи одмах!',
      'Change Story Points' => 'Измени поене за причу',
      'This task is locked. Edit it anyway?' => 'Овај задатак је закључан. Свеједно га измени?',
      'Create a task in a workboard column.' => 'Направи задатак у колони радне табеле.',
      'Search for tasks with given priorities.' => 'Претражи задатке са одређеним приоритетима.',
      'Original task author.' => 'Првобитни аутор задатка.',
      'Information about task priority.' => 'Информација о приоритету задатка.',
      'Valid setting' => 'Исправно подешавање',
      'Open Subtasks' => 'Отворени подзадаци',
      '%s removed %s parent task(s): %s.' => '%s је уклонио %s родитељских задатак(а): %s.',
      '%s added %s subtask(s): %s.' => '%s је додао %s подзадатак(а): %s.',
      'You do not have permission to edit task policies.' => 'Морате имати дозволу за измене полиса задатка.',
      'Assign a task to a specific user.' => 'Додели задатак одређеном кориснику.',
      'Merged In' => 'Спојено са',
      'Browse Subtypes' => 'Претражи подврсте',
      '%s edited %s commit(s), added %s: %s; removed %s: %s.' => '%s је изменио %s комит(ова), додао %s: %s; уклонио %s: %s.',
      'Edit Related Tasks...' => 'Измени повезане задатке...',
      'A task\'s owner changes.' => 'Власник задатка је промењен.',
      '%s updated the cover image to %s.' => '%s је променио слику на %s.',
      '%s created subtask %s.' => '%s је направио подзадатак %s.',
      'No tasks found.' => 'Нема пронађених задатака.',
      'Can Bulk Edit Tasks' => 'Може групно мењати задатке',
      'Finished' => 'Завршено',
      'Estimated number of hours this will take.' => 'Процењени број сати за завршетак овог задатка.',
      'Assign task to: %s.' => 'Додели задатак кориснику: %s.',
      'Assigned task to: %s.' => 'Доделио задатак кориснику: %s.',
      'Open Closed' => 'Отворено Затворено',
      'Current task owner, if task is assigned.' => 'Тренутно власник задатка, уколико је задатак задужен.',
      'Show Only Tasks Without Open Parents' => 'Прикажи само задатке без отворених родитеља',
      '%s changed the task status from %s to %s by committing %s.' => '%s је изменио стање задатка са %s на %s слањем комита %s.',
      'New task description.' => 'Нов опис задатка.',
      '%s removed the point value for %s.' => '%s је уклонио поене са %s.',
      'Can Edit Task Status' => 'Може мењати стање задатка',
      'You do not have permission to assign tasks.' => 'Немате дозволу за додељивање задатака.',
      'All Time' => 'Одувек',
      '%s removed the point value for this task.' => '%s је уклонио поене за овај задатак.',
      '%s added %s parent task(s): %s.' => '%s је додао %s родитељски(х) задатак(а): %s.',
      'Subtask' => 'Подзадатак',
      'Points' => 'Поени',
      'The task description.' => 'Опис задатка.',
      'Filter By Project' => 'Филтрирај по пројекту',
      '%s claimed this task.' => '%s је задужио овај задатак.',
      'Close This Task As a Duplicate Of' => 'Затвори овај задатак као дупликат задатка',
      '%s removed %s subtask(s) for %s: %s.' => '%s је уклонио %s подзадатак(а) за %s: %s.',
      'Untitled Task' => 'Ненасловљен задатак',
      '%s edited parent task(s) for %s, added %s: %s; removed %s: %s.' => '%s је изменио родитељске задатке за %s, додао %s: %s; уклонио %s: %s.',
      'Move a task to one or more workboard columns.' => 'Премести задатак у једну или више колона радних табела.',
      '%s added a cover image to %s.' => '%s је додао слику на %s.',
      'Edit Subtasks' => 'Измени подзадатке',
      '%s assigned this task to %s.' => '%s је доделио овај задатак кориснику %s.',
      'Change status to: %s.' => 'Измени стање на: %s.',
      '%s raised the priority of this task from %s to %s.' => '%s је повећао приоритет овог задатка за %s на %s.',
      'Update Tasks' => 'Измени задатке',
      'Hours Config' => 'Подешавање сати',
      'Type a task subtype name...' => 'Унеси назив подврсте задатка...',
      'Assign task to me' => 'Додели задатак себи',
      'Assign task to' => 'Додели задатак кориснику',
      'Tasks to Close and Merge' => 'Задаци за затварање и спајање',
      '%s updated the task description.' => '%s је променио опис задатка.',
      'Closed, Duplicate' => 'Затворено, дупликат',
      'task author' => 'аутор задатка',
      'Browse Assignees' => 'Претражи задужиоце задатака',
      'Status of the task.' => 'Стање задатка.',
      'Can Assign Tasks' => 'Може додељивати задатке',
      'Subtasks.' => 'Подзадаци.',
      '%s closed this task as %s.' => '%s је затворио овај задатак као %s.',
      'Merge Into Selected Task' => 'Споји са одабраним задатком',
      'PHID of the parent task.' => 'PHID родитељског задатка.',
      'Type a task status name or function...' => 'Унеси стање задатка или функцију...',
      'Search...' => 'Претражи...',
      'Task Graph' => 'Граф задатка',
      'Parent IDs' => 'ID родитеља',
      'Wishlist' => 'Листа жеља',
      'Invalid Key' => 'Неисправан кључ',
      'Show Only Tasks With Open Subtasks' => 'Прикажи само задатке са отвореним подзадацима',
      'Merge Duplicates Into This Task' => 'Споји дупликате са овим задатком',
      '(Not Assigned)' => '(Није задужен)',
      'Task' => 'Задатак',
      'Blocker' => 'Блокира друге задатке',
      'Type a task priority name...' => 'Унеси приоритет задатка...',
      'Close As Duplicate' => 'Затвори као дупликат',
      'Change the task status.' => 'Измени стање задатка.',
      'Block' => 'Блокирај',
      'Claimed' => 'Задужен',
      'Mentions' => 'Помињања',
      'Select All' => 'Изабери све',
      'Task Author' => 'Аутор задатка',
      '(No Project)' => '(Без пројекта)',
      'Duplicates' => 'Дупликати',
      'Task Locked' => 'Задатак закључан',
      'Reports' => 'Извештаји',
      'No tasks.' => 'Нема задатака.',
      'Feature Request' => 'Захтеви за нове функционалности',
      'Priorities' => 'Приоритети',
      'Task description.' => 'Опис задатка.',
      'Current Subtasks' => 'Тренутни подзадаци',
      'Change the subtasks of this task.' => 'Измени подзадатке овог задатка.',
      'Task Has Commit' => 'Задатак има комит',
      'Type a task status name...' => 'Унеси стање задатка...',
      'Save Subtasks' => 'Сачувај подзадатке',
      'Change Status' => 'Измени стање',
      'Parent Task' => 'Родитељски задатак',
      'Parent tasks.' => 'Родитељски задаци.',
      'Edit Parent Tasks' => 'Измени родитељске задатке',
      'Search for tasks owned by a user from a list.' => 'Претражи задатке које корисник задужује, са списка.',
      '%s assigned %s to %s.' => '%s је доделио %s кориснику %s.',
      'Edit Task' => 'Измени задатак',
      'Change the priority of a task.' => 'Измени приоритет задатка.',
      '%s closed %s, a subtask of %s, as %s.' => '%s је затворио %s, подзадатак задатка %s, као %s.',
      'Low' => 'низак',
      'Selected Tasks' => 'Изабрани задаци',
      'The author of this task can take this action.' => 'Аутор овог задатка може предузети ову радњу.',
      'Save Parent Tasks' => 'Сачувај родитељске задатке',
      'Change Priority' => 'Измени приоритет',
      'WORKBOARD' => 'РАДНА ТАБЕЛА',
      'Task 3' => 'Задатак 3',
      'Current Parent Tasks' => 'Тренутни родитељски задаци',
      '%s reassigned %s from %s to %s.' => '%s је променио задужиоца задатка %s са %s на %s.',
      'Related Objects' => 'Повезани објекти',
      'A task\'s priority changes.' => 'Промена приоритета задатка.',
      'Date Updated' => 'Датум последње промене',
      'Merge Duplicates In' => 'Споји дупликате са овим задатком',
      'Raised Priority' => 'Повећан приоритет',
      'Oldest (All)' => 'Најстарији (сви)',
      'No such Maniphest task exists.' => 'Не постоји такав Манифест задатак.',
      '%s raised the priority of %s from %s to %s.' => '%s је повећао приоритет задатка %s са %s на %s.',
      'High' => 'висок',
      'Move on Workboard' => 'Помери на радној табли',
      'Search for tasks with given subtypes.' => 'Претражи задатке са одређеним подврстама.',
      'The title of the task.' => 'Наслов задатка.',
      'Task 1' => 'Задатак 1',
      'Changed Status' => 'Измењено стање',
      'No tasks are selected.' => 'Ниједан задатак није одабран.',
      '%s renamed this task from %s to %s.' => '%s је преименовао овај задатак из %s у %s.',
      'Updated After' => 'Последња промена након',
      'TASK DESCRIPTION' => 'ОПИС ЗАДАТКА',
      'Read information about task priorities.' => 'Прочитај информације о приоритетима задатака.',
      'Change the task point value.' => 'Измени поене задатка.',
      'Create as a subtask of another task.' => 'Направи као подзадатак другог задатка.',
      'Show Only Tasks Without Open Subtasks' => 'Прикажи само задатке без отворених подзадатака',
      '%s closed %s as a duplicate by committing %s.' => '%s је затворио %s као дупликат слањем комита %s.',
      'Change priority to' => 'Промени приоритет на',
      'Open Duplicate' => 'Отворен Дупликат',
      'You do not have permission to edit task status.' => 'Немате дозволу за измену стања задатка.',
      'Reassign the task.' => 'Промени задужиоца задатка.',
      'You do not have permission to edit task projects.' => 'Немате дозволе за измену пројеката задатка.',
      '%s closed subtask %s as %s.' => '%s је затворио подзадатак %s као %s.',
      'Open Tasks by Project and Priority (%s)' => 'Отвори задатке по пројекту и приоритету (%s)',
      'Configure how users create and edit tasks.' => 'Конфигуриши како корисници праве и мењају задатке.',
      'Assign task to rule author.' => 'Додели задатак аутору правила.',
      'Opened' => 'Отворен',
      '%s closed %s as a duplicate.' => '%s је затворио %s као дупликат.',
      '%s removed %s parent task(s) for %s: %s.' => '%s је уклонио %s родитељских задатак(а) задатка %s: %s.',
      'Maniphest Task' => 'Манифест задатак',
      '%s set the cover image to %s.' => '%s је поставио слику %s.',
      'By User' => 'По кориснику',
      'Change the status of a task.' => 'Измени стање задатка.',
      'CHANGES TO TASK DESCRIPTION' => 'ИЗМЕНЕ ОПИСА ЗАДАТКА',
      'Close and Merge Selected Tasks' => 'Затвори и споји означене задатке',
      'Browse Priorities' => 'Претражи приоритете',
      'Unbreak!' => 'Поправи!',
      'The task already has the selected priority.' => 'Задатак већ има одабран приоритет.',
      'The owner of a task can always view and edit it.' => 'Власник овог задатка увек може да га види и мења.',
      'A task\'s status changes.' => 'Стање задатка се мења.',
      'Rename the task.' => 'Преименуј задатак.',
      'You can not interact with this task because it is locked.' => 'Не можете дејствовати на задатак, јер је закључан.',
      'Someone comments on a task.' => 'Неко коментарише на задатку.',
      'Assigned To' => 'Додељено кориснику',
      'New task owner, or `null` to unassign.' => 'Нови власник задатка, или \'null\' за уклањање задужиоца.',
      '%s closed this task as a duplicate.' => '%s је затворио овај задатак као дупликат.',
      'Export to Excel' => 'Извези у Ексел',
      'Wish' => 'Жеља',
      '%s set the point value for %s to %s.' => '%s је поставио поене за задатак %s: %s',
      'Can Edit Task Policies' => 'Може мењати полисе задатака',
      'Format:' => 'Формат:',
      'Add Another Action' => 'Додај још једну радњу',
      'You do not have permission to prioritize tasks.' => 'Немате права да мењате приоритет задатака.',
      '%s merged %s task(s): %s.' => '%s је спојио %s задатак(а): %s.',
      '%s reassigned this task from %s to %s.' => '%s је променио задужиоца овог задатка са %s на %s.',
      'Batch Editor' => 'Групна измена',
      'Triaged' => 'Тријажа извршена',
      'By Project' => 'По пројекту',
      '%s triaged %s as %s priority.' => '%s је извршио тријажу задатка %s и доделио %s приоритет.',
      'Change priority to: %s.' => 'Промени приоритет на: %s.',
      'Search Parent Tasks' => 'Претражи родитељске задатке',
      'Subscribed' => 'Пратите',
      'Unknown Status' => 'Непознато стање',
      'A task\'s associated projects change.' => 'Пројекти овог задатка су промењени.',
      '%s changed the task status from %s to %s.' => '%s је променио стање задатка из %s у %s.',
      'Assigned' => 'Додељено',
      'Change Estimate' => 'Измени процену',
      'Closed as Duplicate' => 'Затворено као дупликат',
      '%s merged task %s into %s.' => '%s је спојио задатак %s са задатком %s.',
      'Estimated Hours' => 'Процењени сати',
      '%s changed the status of subtask %s from %s to %s.' => '%s је променио стање подзадатка %s из %s у %s.',
      'Unassigned' => 'Недодељено',
      'Lowered Priority' => 'Смањен приоритет',
      'Create a new Maniphest task.' => 'Направи нови Манифест задатак.',
      'Create New Task' => 'Направи нови задатак',
      'Read information about tasks.' => 'Читање информација о задацима.',
      'Export Tasks to Excel' => 'Извези задатке у Ексел',
      'Changed Task Status' => 'Промењено стање задатка',
      'Changed Project Column' => 'Промењена колона пројекта',
      'Subtype of the task.' => 'Подврста задатка.',
      'Unassigned task.' => 'Недодељен задатак.',
      '%s edited subtask(s), added %s: %s; removed %s: %s.' => '%s је променио подзадатке, додао %s: %s; уклонио %s: %s.',
      '%s removed %s subtask(s): %s.' => '%s је уклонио %s подзадатка: %s.',
      'Mentioned Here' => 'Поменуто овде',
      'Change the priority of the task.' => 'Измени приоритет задатка.',
      'Page Size' => 'Величина странице',
      '%s reopened this task as %s.' => '%s је поново отворио овај задатак као %s.',
      '%s reopened %s, a subtask of %s, as %s.' => '%s је поново отворио %s, који је подзадатак задатка %s, као %s.',
      'Name of the task.' => 'Назив задатка.',
      'Tasks and Bugs' => 'Задаци и Грешке',
      'Subject prefix for Maniphest mail.' => 'Префикс наслова за Манифест имејлове.',
      'Assign / Claim' => 'Задужи / Додели',
      '%s reopened subtask %s as %s.' => '%s је поново отворио подзадатак %s као %s.',
      'Point value of the task.' => 'Поени задатка.',
      'Search for tasks with given authors.' => 'Претражи задатке по задатим ауторима.',
      'The task already has the selected status.' => 'Задатак већ има одабрано стање.',
      'Clear Selection' => 'Уклони одабир',
      '%s reopened %s as "%s".' => '%s је поново отворио %s као „%s”.',
      'Unassign task.' => 'Раздужи задатак.',
      '%s triaged this task as %s priority.' => '%s је извршио тријажу овог задатка и одредио %s приоритет.',
      'Changed task status to "%s".' => 'Промењено стање задатка у „%s”.',
      'Task 2' => 'Задатак 2',
    );
  }

}

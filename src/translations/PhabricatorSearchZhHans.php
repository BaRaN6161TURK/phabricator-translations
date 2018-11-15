<?php

final class PhabricatorSearchZhHans
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'zh_Hans';
  }

  protected function getTranslations() {
    return array(
      'No results.' => '没有结果。',
      'This menu item is very important, and can not be disabled.' => '此菜单项非常重要，并且不能禁用。',
      'Enable Query?' => '启用查询？',
      'Personal Menu Items' => '个人菜单项',
      'The queries you have saved are private. Only you can view or edit them.' => '您保存的查询为私有查询。只有您可以查看或编辑。',
      'cat -A can find mice hiding in files.' => '猫-A可以找到隐藏在文件中的老鼠。',
      'Readable' => '可读',
      'Search Engines' => '搜索引擎',
      'Form "%s" is not a valid form which you have permission to see.' => '表单“%s”不是您有权限查看的有效表单。',
      'Reset all common ngram records.' => '重置所有常用ngram记录。',
      'N/A' => '不可用',
      'You must choose a room.' => '您必须选择一个房间。',
      'Disable Menu Item' => '禁用菜单项',
      'Add to Dashboard' => '添加至控制面板',
      'Failed to load custom PHID "%s"!' => '无法加载自定义PHID“%s”！',
      'Query: %s' => '查询：%s',
      'Run a search query. Intended for debugging and development.' => '运行搜索查询。意在调试及开发。',
      '—' => '—',
      'Personal Saved Queries' => '个人保存查询',
      'Ignored Common Word' => '已忽略常用字词',
      'You must choose a link name.' => '您必须选择链接名称。',
      'Global Menu Items' => '全域菜单项',
      'You must choose a label name.' => '您必须选择标签名称。',
      'Edit the menu for your personal account.' => '为您的个人账户编辑菜单。',
      'Specify either --reset or --threshold.' => '指定--重置或--阀值。',
      'Queries' => '查询',
      'Already Default' => '已作为默认',
      'No services need initialization.' => '没有需要初始化的服务。',
      'Add New Menu Item...' => '添加新的菜单项...',
      'Untitled "%s" Item' => '无标题“%s”项',
      'You must name the query.' => '您必须对查询命名。',
      'Choose Item Icon' => '选择项图标',
      'Edit Menu Item: %s' => '编辑菜单项：%s',
      'Open Documents' => '打开文档',
      'Search Ngram' => '搜索Ngram',
      'Enable Menu Item' => '启用菜单项',
      'Global Saved Queries' => '全域保存查询',
      'Indexing %d object(s) of type %s.' => '正在索引%s个类型%s的项目。',
      'Configure Menu' => '配置菜单',
      'Bucket' => '桶',
      'Query Errors' => '查询错误',
      'Not supported.' => '不支持。',
      'You must choose a form.' => '您必须选择一个表单。',
      'Mandatory Item' => '强制项目',
      'Profile Menu Items' => '详情菜单项',
      'Current Default' => '当前默认值',
      'Query Name' => '查询名',
      'Object Fields' => '对象字段',
      'Result Ordering' => '重置排序',
      'Edit Saved Query' => '编辑保存的查询',
      'Motivator' => '动力',
      'Menu Items' => '菜单项目',
      'Hide Query' => '隐藏查询',
      'Set Default Query' => '设置默认查询',
      'Select a document type...' => '选择文档类型...',
      '(Restricted/Invalid Project)' => '（受限制/无效项目）',
      'Delete Query' => '删除查询',
      'Current Menu Items' => '当前菜单项',
      'Menu Item' => '菜单项',
      'Attachments' => '附件',
      'Fulltext Search Results' => '全文搜索结果',
      'Document Status' => '记载状态',
      'Engine: Search' => '引擎：搜索',
      'Profile Menu Item' => '详情菜单项',
      'Delete Menu Item' => '删除菜单项',
      'Cats spend most of their time plotting to kill their owner.' => '猫浪费了其多数时间策划杀死它们的主人。',
      'Edit Related Objects...' => '编辑相关对象...',
      'No saved queries.' => '没有保存的查询。',
      'Supports ID/PHID Queries' => '支持ID/PHID查询',
      'Edit Builtin Item' => '编辑内建项',
      'Cat Facts' => '猫事实',
      'Search Index Versions' => '搜索索引版本',
      '\'%s\' is not a builtin!' => '“%s”不是内建函数！',
      'All Open Objects' => '所有开放对象',
      'Disable Query' => '禁用查询',
      'Divider' => '分隔器',
      'Manage Menu' => '管理菜单',
      'The largest recorded cat was nearly 11 inches long from nose to tail.' => '最大记录的猫，从鼻子到尾巴接近11英寸长。',
      'Invalid Relationship' => '无效关系',
      'IDs' => 'ID',
      'PHIDs' => 'PHID',
      'Save Query' => '保存查询',
      'Full-Text Search' => '全文搜索',
      'Edit Menu Item' => '编辑菜单项',
      'NOTE' => '注意',
      '"%s" must be a date before "%s".' => '“%s”必须是在“%s”之前的日期。',
      'Fulltext Search' => '全文搜索',
      'Document Types' => '文档类型',
      'Profile Menu User Guide' => '详情菜单用户指导',
      'Saved Queries' => '保存的查询',
      '(Restricted/Invalid Form)' => '（受限制/无效表单）',
      'Custom Query Constraints' => '自定义查询约束',
      'All Objects' => '所有对象',
      'Link' => '链接',
      'Enable Query' => '启用查询',
      'This item can not be set as the default item. This is usually because the item has no page of its own, or links to an external page.' => '该项目不能设置为默认项目。这通常是因为项目没有其自己的页面，或链接到外部页面。',
      'Browse Results' => '浏览结果',
      'Created By Me' => '由我创建',
      'Disable Query?' => '禁用查询？',
      'Use Results' => '使用结果',
      'Order By' => '排序方式',
      'You can not create a relationship to object "%s" because the object does not exist or could not be loaded.' => '您不能创建与对象“%s”间的关联，因为对象不存在，或不能加载。',
      'Edit Query' => '编辑查询',
      'Searched For:' => '查找：',
      '(Restricted/Invalid Application)' => '（受限制/无效的应用）',
      'Not Defaultable' => '无法设为默认',
      'Really Delete Query?' => '真的要删除查询么？',
      'Query offset is too large. offset+limit=%s (max=%s)' => '查询偏移泰达。偏移+限制=%s（最大=%s）',
      'Edit Queries...' => '编辑查询...',
      'Browse Document Types' => '浏览文档类型',
      '(Restricted/Invalid Conpherence)' => '（受限制/无效的Conpherence）',
      'Unknown search function "%s". Supported functions are: %s.' => '未知搜索函数“%s”。支持的函数有：%s。',
      'Engine Name' => '引擎名称',
    );
  }

}

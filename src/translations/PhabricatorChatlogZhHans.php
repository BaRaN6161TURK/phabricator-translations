<?php

final class PhabricatorChatlogZhHans
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'zh_Hans';
  }

  protected function getTranslations() {
    return array(
      '(Deprecated)' => '（已弃用）',
      'Jump' => '跳转',
      'Retrieve chatter.' => '检索饶舌。',
      'Newer' => '更新',
      'Jump to Bottom' => '跳转到底部',
      'Older' => '更旧',
      'ChatLog' => '聊天日志',
      'Channel List' => '频道列表',
      'Hide Dates' => '隐藏日期',
      'Channel Log' => '频道日志',
      'Search Dates' => '搜索日期',
      'Newest' => '最新',
      'Record chatter.' => '记录饶舌。',
    );
  }

}

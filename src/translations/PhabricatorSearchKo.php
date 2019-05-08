<?php

final class PhabricatorSearchKo
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'ko';
  }

  protected function getTranslations() {
    return array(
      'No results.' => '결과가 없습니다.',
      'This menu item is very important, and can not be disabled.' => '이 메뉴 항목은 매우 중요하므로 비활성화할 수 없습니다.',
      'Enable Query?' => '쿼리를 활성화할까요?',
      'Personal Menu Items' => '개인 메뉴 항목',
      'Export Format Not Available' => '내보내기 형식을 사용할 수 없습니다',
      'Search Engines' => '검색 엔진',
      'Form "%s" is not a valid form which you have permission to see.' => '"%s" 양식은 볼 권한이 있는 유효한 양식이 아닙니다.',
      'N/A' => 'N/A',
      'URI "%s" is not a valid link URI. It should be a full, valid URI beginning with a protocol like "%s".' => '"%s" URI는 유효한 링크 URI이 아닙니다. 완전하고 유효한 URI는 "%s"와 같은 프로토콜로 시작해야 합니다.',
      'Elasticsearch server returned invalid JSON!' => '일래스틱서치 서버가 유효하지 않은 JSON을 반환했습니다!',
      'Disable Menu Item' => '메뉴 항목 비활성화',
      'Failed to load custom PHID "%s"!' => '사용자 지정 "%s" PHID를 불러오는데 실패했습니다!',
      'You must choose a dashboard.' => '대시보드를 선택해야 합니다.',
      'Maximum page size for Conduit API method calls is 100, but this call specified %s.' => 'Conduit API 메소드 호출의 최대 문서 크기는 100이지만 이 호출은 %s을(를) 지정했습니다.',
      'Service index is out of date, repairing...' => '서비스 색인이 날짜 범위를 초과하여 고치는 중입니다...',
      'Query: %s' => '쿼리: %s',
      'Run a search query. Intended for debugging and development.' => '검색 쿼리를 수행합니다. 디버깅과 개발을 위해 고안되었습니다.',
      '—' => '—',
      'You must choose a link name.' => '링크 이름을 선택해야 합니다.',
      'Engine: Fulltext' => '엔진: 전문',
      'This query specifies an invalid parameter. Review the query parameters and correct errors.' => '이 쿼리는 유효하지 않은 변수를 지정합니다. 쿼리 변수를 검토하고 오류를 수정하십시오.',
      'You must choose a label name.' => '레이블 이름을 선택해야 합니다.',
      'Specify either --reset or --threshold.' => '--reset 또는 --threshold를 지정하십시오.',
      'Add New Menu Item...' => '새 메뉴 항목 추가...',
      'Untitled "%s" Item' => '제목 없는 "%s" 항목',
      'Query key "%s" does not correspond to a valid query.' => '"%s" 쿼리 키가 유효한 토큰과 일치하지 않습니다.',
      'You must name the query.' => '쿼리의 이름을 지정해야 합니다.',
      'Choose Item Icon' => '항목 아이콘 선택',
      'This call does not support any attachments.' => '이 호출은 어떠한 첨부도 지원하지 않습니다.',
      'Search for objects with specific IDs.' => '특정 ID의 오브젝트를 찾습니다.',
      'Service initialization complete.' => '서비스 초기화가 완료되었습니다.',
      'Query Errors' => '쿼리 오류',
      'Not supported.' => '지원하지 않습니다.',
      'You must choose a form.' => '양식을 선택해야 합니다.',
      'You can not create that relationship because it would create a circular dependency:' => '순환 의존을 만들기 때문에 해당 관계를 만들 수 없습니다:',
      'Mandatory Item' => '필수 항목',
      'Query Name' => '쿼리 이름',
      'No search engines available.' => '사용 가능한 검색 엔진이 없습니다.',
      'Engine: Index' => '엔진: 색인',
      'Edit Saved Query' => '저장된 쿼리 편집',
      'Menu Items' => '메뉴 항목',
      'Hide Query' => '쿼리 숨기기',
      'Select a document type...' => '문서 유형을 선택하십시오...',
      '(Restricted/Invalid Project)' => '(제한된/유효하지 않은 프로젝트)',
      '(See table below.)' => '(아래의 표를 참고하십시오.)',
      'Fulltext Engine' => '전문 엔진',
      'Delete Query' => '쿼리 삭제',
      '"%s" date can not be parsed.' => '"%s" 날짜의 구문을 분석할 수 없습니다.',
      'Search for objects with specific PHIDs.' => '특정 PHID의 오브젝트를 찾습니다.',
      'Menu Item' => '메뉴 항목',
      'Attachments' => '첨부',
      'Document Status' => '문서 상태',
      'Engine: Search' => '엔진: 검색',
      'Profile Menu Item' => '프로파일 메뉴 항목',
      '"2022-12-25" or "7 days ago"...' => '"2022-12-25" 또는 "7 days ago"...',
      'Paging and Limits' => '페이징 및 제한',
      'This engine is used to modify menu items on profiles.' => '이 엔진은 프로파일의 메뉴 항목 수정에 사용됩니다.',
      'No object relationship of type "%s" exists.' => '"%s" 유형의 오브젝트 관계가 존재하지 않습니다.',
      'Create Menu Item' => '메뉴 항목 만들기',
      'Supports ID/PHID Queries' => 'ID/PHID 쿼리를 지원합니다',
      '\'%s\' is not the name of a known object.' => '\'%s\'은(는) 알려진 프로젝트의 이름이 아닙니다.',
      'All Open Objects' => '열려있는 모든 오브젝트',
      'Disable Query' => '쿼리 비활성화',
      'Invalid Relationship' => '유효하지 않은 관계',
      'IDs' => 'ID',
      'This query will become your default query in the current application.' => '이 쿼리는 현재 애플리케이션의 기본 쿼리가 됩니다.',
      'PHIDs' => 'PHID',
      'Save Query' => '쿼리 저장',
      'Full-Text Search' => '전문 검색',
      'Initializing search service "%s".' => '"%s" 검색 서비스를 초기화합니다.',
      'Date value for "%s" can not be parsed.' => '"%s"의 날짜값의 구문을 분석할 수 없습니다.',
      'NOTE' => '참고',
      '"%s" must be a date before "%s".' => '"%s"은(는) 날짜가 "%s" 보다 앞서야 합니다.',
      'Specify a query with --query.' => '--query로 쿼리를 지정하십시오.',
      'This menu currently has no items.' => '이 메뉴는 현재 항목이 없습니다.',
      'Document Types' => '문서 유형',
      'Setting "%s" is misconfigured: %s' => '"%s" 설정이 잘못 구성되었습니다: %s',
      'Profile Menu User Guide' => '프로파일 메뉴 사용자 가이드',
      '(Restricted/Invalid Dashboard)' => '(제한된/유효하지 않은 대시보드)',
      'Choose a valid export format.' => '유효한 내보내기 포맷을 선택하십시오.',
      'Tooltip' => '말풍선',
      'Search' => '검색',
      '(Restricted/Invalid Form)' => '(제한된/유효하지 않은 양식)',
      'Delete this menu item?' => '이 메뉴 항목을 지우시겠습니까?',
      'Export Results' => '내보내기 결과',
      'Custom Query Constraints' => '사용자 지정 쿼리 제약',
      'All Objects' => '모든 오브젝트',
      'Link' => '링크',
      'Application "%s" is not installed!' => '"%s" 애플리케이션이 설치되어 있지 않습니다!',
      'Enable this menu item? It will appear in the menu again.' => '이 메뉴 항목을 활성화할까요? 메뉴에 다시 나타납니다.',
      'Created By Me' => '내가 만듦',
      'Specify either --reset or --threshold, not both.' => '--reset 또는 --threshold를 지정하되, 둘 다 지정하지 마십시오.',
      'Disable Query?' => '쿼리를 비활성화할까요?',
      'Order By' => '정렬 기준:',
      'You can not create a relationship to object "%s" because the object does not exist or could not be loaded.' => '오브젝트가 존재하지 않거나 불러올 수 없기 때문에 "%s" 오브젝트의 관계를 만들 수 없습니다.',
      '%s (Not Available)' => '%s (사용할 수 없음)',
      '(Restricted/Invalid Application)' => '(제한된/유효하지 않은 애플리케이션)',
      'Really Delete Query?' => '쿼리를 정말로 삭제할까요?',
      'Export Data' => '데이터 내보내기',
      'Circular Dependency' => '순환 의존',
      'Unable to Render Dashboard' => '대시보드를 렌더링할 수 없습니다',
      'Engine Name' => '엔진 이름',
    );
  }

}

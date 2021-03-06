<?php

final class ArcanistCoreKoKR
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'ko_KR';
  }

  protected function getTranslations() {
    return array(
      'Aborted due to file upload failure. You can use %s to skip binary uploads.' => '파일 업로드 실패로 인해 중단되었습니다. %s을(를) 사용해 바이너리 업로드를 건너뛸 수 있습니다.',
      'This working copy is associated with the %s repository.' => '이 작업 복사본은 %s 저장소와 연관되어 있습니다.',
      'No library currently exists at that path...
    ' => '현재 해당 경로에 라이브러리가 존재하지 않습니다...',
      'Not parsing!' => '파싱 안 됨!',
      'Try running your arc command again.' => 'arc 명령을 다시 실행해주세요.',
      'CC: %s' => '참조: %s',
      'Write file to stdout instead of to disk.' => '파일을 디스크가 아닌 stdout에 씁니다.',
      'If the file is not a text file, you can mark it \'binary\'. Mark this file as \'binary\' and continue?' => '파일이 텍스트 파일이 아닌 경우 \'바이너리\'로 표시할 수 있습니다. 이 파일을 \'바이너리\'로 표시하고 계속하시겠습니까?',
      'Unknown argument \'%s\'. Try \'%s\'.' => '\'%s\' 인수를 알 수 없습니다. \'%s\'을(를) 시도하십시오.',
      'Alias' => '다른 이름',
      'No match found. Try `%s %s` to search for a linter.' => '일치하는 항목이 없습니다. 린터 검색을 위해 `%s %s`을(를) 시도해 보십시오.',
      '%s is already set to %s.
    ' => '%s은(는) %s(으)로 이미 설정되어 있습니다.',
      'Pick' => '선택',
      'Lint all files in the project.' => '프로젝트의 모든 파일을 린트 처리합니다.',
      'Browse URI "%s"' => 'URI "%s" 탐색',
      'Runtime Error' => '런타임 오류',
      'Output upload information in JSON format.' => 'JSON 포맷으로 업로드 정보를 출력합니다.',
      'Inline HTML' => '인라인 HTML',
      'Remote Repository' => '원격 저장소',
      'No tests to run.' => '실행할 테스트가 없습니다.',
      'No alias "%s" to remove.' => '제거할 "%s" 다른 이름이 없습니다.',
      'Unknown Symbol' => '알 수 없는 심볼',
      'Against which commit?' => '어떤 커밋에 대해 작업하겠습니까?',
      'commit-message' => '커밋-메시지',
      'HLint is a linter for Haskell code.' => 'HLint는 하스켈 코드의 린터입니다.',
      'Language for syntax highlighting.' => '구문 강조를 위한 언어',
      'Unknown VCS!' => '버전 관리 시스템을 알 수 없습니다!',
      'ERROR' => '오류',
      'Do not upload binaries (like images).' => '(사진과 같은) 바이너리를 업로드하지 않습니다.',
      'Arcanist HTTPS Trusted Domains' => 'Arcanist HTTPS 신뢰된 도메인',
      'Commit this revision anyway?' => '그래도 이 판을 커밋하시겠습니까?',
      'After creating the task, open it in a web browser.' => '작업을 만든 이후 웹 브라우저에서 엽니다.',
      'Lint does not currently support %s in SVN.' => '린트는 SVN에서 %s을(를) 현재 지원하지 않습니다.',
      'Invalid Executable' => '유효하지 않은 실행 파일',
      'Set %s to file mode 600.' => '%s을(를) 파일 모드 600으로 설정합니다.',
      'Option \'%s\' requires a parameter.' => '\'%s\' 옵션은 변수가 필요합니다.',
      'Failed to %s!' => '%s 실패!',
      'Unable to determine the remote URI for this repository.' => '이 저장소를 위한 원격 URI를 결정할 수 없습니다.',
      'No such revision \'%s\'!' => '\'%s\' 같은 판은 없습니다!',
      'Branch %s' => '브랜치 %s',
      'Cannot be used with %s.' => '%s와(과) 함께 사용할 수 없습니다.',
      'Copied Here' => '여기에 복사됨',
      'Specify only one paste to retrieve.' => '검색할 붙여넣기 항목을 하나만 지정하십시오.',
      '    %s %s
    ' => '    %s %s',
      'Install flake8 using `%s`.' => '`%s`을(를) 사용해 flake8을 설치합니다.',
      'No linters to run.' => '실행할 린터가 없습니다.',
      'Modified' => '수정됨',
      'TODO Comment' => '할 일 설명',
      'Failed to parse %s output!' => '%s 출력의 구문 분석을 실패했습니다!',
      'Do you want to edit the message?' => '메시지를 편집하시겠습니까?',
      'This option is not documented.' => '이 옵션은 문서화되지 않았습니다.',
      'Updating commit message...' => '커밋 메시지를 업데이트하는 중...',
      'This client version does not support staging this repository.' => '클라이언트 버전은 이 저장소의 스테이징을 지원하지 않습니다.',
      'Run an external script, then parse its output with a regular expression. This is a generic binding that can be used to run custom lint scripts.' => '외부 스크립트를 실행한 다음 정규 표현식으로 출력의 구문을 분석합니다. 이는 사용자 지정 린트 스크립트를 실행하기 위해 사용할 수 있는 일반 바인딩입니다.',
      'Failed to lookup information for \'%s\'!' => '\'%s\'의 정보 확인을 실패했습니다!',
      '`%s` Unreliable' => '`%s` 신뢰할 수 없음',
      'Confused by empty line' => '비어있는 줄로 인해 혼동됨',
      '(Run `%s` for more details.)' => '(더 자세한 정보를 보려면 `%s`을(를) 실행하십시오.)',
      'Branch "%s" does not exist in remote "%s".' => '"%s" 브랜치는 "%s" 원격 위치에 존재하지 않습니다.',
      '%s has already been reverted.' => '%s은(는) 이미 되돌려졌습니다.',
      'Use "arc alias" to configure aliases, not "arc set-config".' => '다른 이름을 구성하려면 "arc set-config"가 아닌 "arc alias"를 사용하십시오.',
      'Diff URI:' => '차이 URI:',
      'Revision %s' => '판 %s',
      'Failed to parse version from command.' => '명령어에서 버전의 구문 분석을 실패했습니다.',
      'Provide explanation to continue or press Enter to abort.' => '계속하려면 설명을 지정하시고 중단하려면 Enter를 누르십시오.',
      'You can review build details here:' => '자세한 빌드 정보는 여기에서 검토할 수 있습니다:',
      'CHECKOUT' => '체크아웃',
      'Updating **%s**...' => '**%s** 업데이트 중...',
      'File Error' => '파일 오류',
      'Avoid the use of inner functions.' => '내부 함수의 사용을 삼가십시오.',
      '%s\'s status is now set to %s.
    ' => '%s의 상태는 현재 %s(으)로 설정되어 있습니다.',
      'Command %s failed: %s' => '%s 명령 실패: %s',
      'These %s path(s) will NOT be committed. Commit this revision anyway?' => '이 경로 %s개는 커밋되지 않을 것입니다. 이 리비전을 계속 커밋하시겠습니까?',
      'Needs Revision' => '변경 필요',
      'Removing %s files...' => '파일 %s개를 제거하는 중...',
      'One test was expected to skip.' => '1건의 테스트가 건너뛸 것으로 예상되었습니다.',
      'Unknown library version \'%s\'!' => '알 수 없는 라이브러리 버전 \'%s\'!',
      'Unrecognized property status \'%s\'.' => '\'%s\' 속성 상태를 인식하지 못했습니다.',
      'REPOSITORY' => '저장소',
      'Updated!' => '업데이트했습니다!',
      'Configuration value "%s" is set to "%s".' => '"%s" 구성값은 "%s"(으)로 설정되어 있습니다.',
      'Describe the changes in this new revision.' => '새 리비전의 변경사항을 기술합니다.',
      '`%s` Operator' => '`%s` 연산자',
      'Option \'%s\' is not supported under %s.' => '\'%s\' 옵션은 %s에서 지원되지 않습니다.',
      'The coding standard(s) to apply.' => '적용한 코딩 표준입니다.',
      'Fail' => '실패',
      'INTERRUPTED!' => '중단되었습니다!',
      'Specify either %s or paths.' => '%s 또는 경로를 지정하십시오.',
      'Enter a commit message.' => '커밋 메시지를 입력하십시오.',
      'Cleaning up feature %s...' => '%s 기능을 정리하는 중...',
      'JSON Lint' => 'JSON 린트',
      'Version' => '버전',
      'Executing \'%s\' failed!' => '\'%s\' 실행을 실패했습니다!',
      'Which URI do you want to open?' => '열고자 하는 URI은 무엇입니까?',
      'Unknown version control system.' => '버전 관리 시스템을 알 수 없습니다.',
      'Array Separator' => '배열 구분자',
      'Unit Test' => '단위 테스트',
      'Global Variables' => '전역 변수',
      'Files must end in a newline.' => '파일은 새 줄로 끝나야 합니다.',
      'The regex to process output with.' => '출력을 처리할 정규 표현식입니다.',
      'Do you want to use this message?' => '이 메시지를 사용하시겠습니까?',
      'Custom preset.' => '사용자 지정 프리셋입니다.',
      'Continue anyway?' => '그래도 계속하시겠습니까?',
      'COMMIT RANGE' => '커밋 범위',
      'No tasks found.' => '작업을 찾을 수 없습니다.',
      'Delete this alias?' => '이 다른 이름을 지우시겠습니까?',
      'The test failed.' => '테스트를 실패했습니다.',
      'Failed to upload binary "%s".' => '"%s" 바이너리 업로드를 실패했습니다.',
      'Specify only one branch.' => '하나의 브랜치만 지정하십시오.',
      'Type of setting \'%s\' must be boolean.' => '\'%s\' 설정의 자료형은 불리언이어야 합니다.',
      'Specify exactly one object.' => '정확히 하나의 객체를 지정하십시오.',
      '%s can not be used with %s.' => '%s은(는) %s와(과) 함께 사용할 수 없습니다.',
      'Broken' => '망가짐',
      'Path \'%s\' does not exist!' => '\'%s\' 경로가 존재하지 않습니다!',
      'Config: Reading local configuration file "%s"...' => '구성: "%s" 로컬 구성 파일을 읽는 중...',
      'Use of `%s`' => '`%s` 사용',
      'Unable to parse \'%s\' file \'%s\'.' => '\'%s\' 파일 \'%s\'의 구문을 분석할 수 없습니다.',
      'PHP files must only contain PHP code.' => 'PHP 파일은 PHP 코드만을 포함해야 합니다.',
      'Line Too Long' => '줄이 너무 깁니다',
      'Skip' => '건너뛰기',
      'Type' => '유형',
      'Command-Line Flags' => '명령 줄 플래그',
      'No such object \'%s\' found.' => '\'%s\' 객체를 찾을 수 없습니다.',
      'PHP Syntax Error!' => 'PHP 문법 오류!',
      'SimpleXML Linter' => 'SimpleXML 린터',
      'Can\'t parse an empty diff!' => '비어있는 diff의 구문을 분석할 수 없습니다!',
      'DOS Newlines' => 'DOS 새 줄',
      'Class' => '클래스',
      '\'%s\' vs \'%s\' (utf8)' => '\'%s\' vs \'%s\' (utf8)',
      'This test is expected to fail.' => '이 테스트는 실패할 것으로 예측됩니다.',
      'SKIP' => '건너뛰기',
      'No lint warnings.' => '린트 경고가 없습니다.',
      'Deleted' => '삭제됨',
      'Properties cannot be declared `%s`.' => '속성을 `%s`(으)로 선언할 수 없습니다.',
      'Cleaning up remote feature %s...' => '%s 원격 기능을 정리하는 중...',
      'Do not print a success message.' => '성공 메시지를 표시하지 않습니다.',
      'Git is not installed' => 'Git이 설치되어 있지 않습니다',
      'Default Parameters' => '기본 매개변수',
      'Unable to determine repository for this change.' => '이 변경사항을 위한 저장소를 결정할 수 없습니다.',
      'Cannot display current version without having `%s` installed.' => '`%s`이(가) 설치되어 있지 않은 상태에서 현재 버전을 표시할 수 없습니다.',
      'Downloading binary data...' => '바이너리 데이터를 다운로드하는 중...',
      'Please use `%s` instead.' => '`%s`을(를) 대신 사용해 주십시오.',
      'Specify a key and a value.' => '키와 값을 지정하십시오.',
      'Connecting to "%s"...' => '"%s"에 연결 중...',
      'Push failed! Fix the error and run "%s" again.' => '푸시를 실패했습니다! 오류를 수정한 다음 "%s"을(를) 다시 실행하십시오.',
      'Unrecognized argument \'%s\'. Try \'%s\'.' => '\'%s\' 인수를 인식하지 못했습니다. \'%s\'을(를) 시도하십시오.',
      'Library name should contain only lowercase letters and hyphens.' => '라이브러리 이름은 소문자와 하이픈만 포함해야 합니다.',
      '%s does not update any revision.' => '%s은(는) 어느 리비전도 업데이트하지 않습니다.',
      '<default>' => '<기본값>',
      'No test information for test data \'%s\'!' => '\'%s\' 데이터를 테스트할 테스트 정보가 없습니다!',
      'Do not run lint.' => '린트를 실행하지 않습니다.',
      'If you intended to update an existing revision, use:' => '기존 리비전을 업데이트하려면 다음을 사용하십시오:',
      'Continue?' => '계속하시겠습니까?',
      'Apply this patch to %s?' => '이 패치를 %s에 적용하시겠습니까?',
      'Commit Message' => '커밋 메시지',
      'Unrecognized lint message code "%s".' => '"%s" 린트 메시지 코드를 인식하지 못했습니다.',
      'Updating %s: %s' => '%s 업데이트 중: %s',
      'Current Value' => '현재 값',
      'Install this token anyway?' => '그래도 이 토큰을 설치하시겠습니까?',
      'Branch \'%s\' does not exist.' => '\'%s\' 브랜치는 존재하지 않습니다.',
      'Specify at most one URI.' => '최대 하나의 URI를 지정하십시오.',
      'UPDATE' => '업데이트',
      'Commit %s' => '커밋 %s',
      'STAGING FAILED' => '스테이징 실패',
      'Invalid Default Parameter' => '유효하지 않은 기본 매개변수',
      'The `%s` syntax was not introduced until PHP 5.4, but this codebase targets an earlier version of PHP. You can rewrite this expression using `%s`.' => '`%s` 문법은 PHP 5.4까지 도입되지 않았으나 이 코드 기반은 초기 버전의 PHP를 대상으로 합니다. `%s`을(를) 사용하여 이 식을 다시 작성할 수 있습니다.',
      'Not a symlink!' => 'symlink가 아닙니다!',
      'Halting all rule processing.' => '모든 규칙 처리를 중단하고 있습니다.',
      'Description' => '설명',
      'Golint is a linter for Go source code.' => 'Golint는 Go 소스 코드의 린터입니다.',
      'REMOTE' => '원격',
      'Undefined Lint Message' => '정의되지 않은 린트 메시지',
      'Downloading binary data for \'%s\'...' => '\'%s\'의 바이너리 데이터를 다운로드하는 중...',
      'Specify a paste ID, like %s.' => '%s처럼 붙여넣기 ID를 지정하십시오.',
      'LOGIN TO PHABRICATOR' => '파브리케이터에 로그인',
      'Unable to fork!' => '포크할 수 없습니다!',
      'EXCEPTION' => '예외',
      'Contents Modified' => '내용 수정됨',
      'Flag --skip-staging was specified.' => '--skip-staging 플래그가 지정되었습니다.',
      'Unable to locate %s.' => '%s을(를) 찾을 수 없습니다.',
      'Missing VCS support.' => 'VCS 지원이 없습니다.',
      'Argument Error' => '인수 오류',
      '(No commits.)' => '(커밋이 없습니다.)',
      'Failed to read patch from stdin!' => 'stdin으로부터 패치를 읽을 수 없습니다!',
      'Misuse of `%s`' => '`%s`의 오용',
      'Unable to upload file: path "%s" is not readable.' => '파일을 업로드할 수 없습니다: "%s" 경로를 읽을 수 없습니다.',
      'Type of setting \'%s\' must be list.' => '\'%s\' 설정 형식은 리스트여야 합니다.',
      'Accepted' => '승인함',
      'Unknown Object' => '알 수 없는 객체',
      'You are not the author of \'%s: %s\'. Commit this revision anyway?' => '\'%s: %s\'의 개발자가 아닙니다. 그래도 이 리비전을 커밋하시겠습니까?',
      'PULL' => '풀',
      'Always update a specific revision.' => '무조건 특정 리비전을 업데이트합니다.',
      'Example Value' => '예제 값',
      'Empty Rules' => '비어있는 규칙',
      'Moved Here' => '여기로 이동됨',
      'Unable to parse SVN info.' => 'SVN 정보의 구문을 분석할 수 없습니다.',
      'Logical Operators' => '논리 연산자',
      'Repository API is not supported.' => '저장소 API가 지원되지 않습니다.',
      '    %s (%s) %s
    ' => '    %s (%s) %s',
      'Unable to open file "%s"' => '"%s" 파일을 열 수 없습니다',
      'Deleted key \'%s\' from %s config.
    ' => '%2$s 구성에서 \'%1$s\' 키를 삭제했습니다.',
      'Specify a file to download.' => '다운로드할 파일을 지정하십시오.',
      'Invalid Content Encoding (Non-UTF8)' => '유효하지 않은 콘텐츠 인코딩 (UTF8이 아님)',
      '(No revisions match.)' => '(일치하는 판이 없습니다.)',
      'Unrecognized lint message code: "%s"' => '린트 메시지 코드를 인식할 수 없습니다: "%s"',
      'Switched to branch **%s**. Identifying and merging...' => '**%s** 브랜치로 전환했습니다. 식별 및 병합 중...',
      'No lint engine configured for this project.' => '이 프로젝트를 위해 구성된 린트 엔진이 없습니다.',
      'Select a Default Commit Range' => '기본 커밋 범위 선택',
      'Unable to start socket! Error #%d: %s' => '소켓을 시작할 수 없습니다! 오류 #%s: %s',
      'RESTORE' => '복구',
      'Local branches have not been changed, and are still in exactly the same state as before.' => '로컬 브랜치는 변경되지 않았으며 여전히 이전과 동일한 상태입니다.',
      'Aliased "%s" to "%s".' => '"%s"의 다른 이름을 "%s"(으)로 지정했습니다.',
      'The test passed.' => '테스트를 통과했습니다.',
      'Cleaning up branch "%s"...' => '"%s" 브랜치를 정리하는 중...',
      'Unknown command \'%s\'. Try \'%s\'.' => '\'%s\' 명령어를 알 수 없습니다. \'%s\'을(를) 시도하십시오.',
      'SUCCESS!' => '성공!',
      'Ignore them?' => '무시하시겠습니까?',
      'Double-check the commit and push when ready.' => '커밋을 다시 확인하고 준비가 되면 푸시하십시오.',
      'CONNECT' => '연결',
      '...' => '...',
      '(%s bytes)' => '(%s 바이트)',
      'Use of Undeclared Variable' => '선언되지 않은 변수 사용',
      'No hardpoint "%s".' => '"%s" 하드포인트가 없습니다.',
      'Name' => '이름',
      'Unit testing raised errors!' => '단위 테스트에 오류가 발생했습니다!',
      'Commit message has errors:' => '커밋 메시지에 오류가 있습니다:',
      'Downloading file %s...' => '%s 파일을 다운로드하는 중...',
      'Report results in JSON format.' => 'JSON 포맷의 보고서 결과입니다.',
      'Operation Error' => '동작 오류',
      '%s requires exactly one revision.' => '%s에는 정확히 하나의 리비전이 필요합니다.',
      'Unable to read file permissions for "%s"!' => '"%s"의 파일 권한을 읽을 수 없습니다!',
      'Reviewers: %s' => '검토자: %s',
      'Can not read hardpoint "%s".' => '"%s" 하드포인트를 읽을 수 없습니다.',
      'Title' => '제목',
      'Disconnected' => '연결이 끊어짐',
      'PHP Compatibility' => 'PHP 호환성',
      'Suspended' => '보류됨',
      'You can push the changes manually with this command:' => '이 명령어를 사용하여 변경사항을 수동으로 푸시할 수 있습니다:',
      'Linter Rules' => '린터 규칙',
      '(The Empty Tree)' => '(비어있는 트리)',
      'OKAY' => '정상',
      'No messages.' => '메시지가 없습니다.',
      'BROKEN' => '망가짐',
      '\'%s\' vs \'%s\'' => '\'%s\' vs \'%s\'',
      'Other locations: %s' => '다른 위치: %s',
      'UNIT ERRORS' => '단위 오류',
      'Upload complete.' => '업로드를 완료했습니다.',
      'Did you mean:' => '이것을 찾으셨나요:',
      'Message has unresolved errors.' => '메시지에 해결할 수 없는 오류가 있습니다.',
      'Error' => '오류',
      'Always create a new revision.' => '무조건 새로운 리비전을 만듭니다.',
      'Lint for %s:' => '%s의 린트:',
      'Expected \'Date:\'.' => '\'Date:\'를 예상했습니다.',
      'Merge failed!' => '병합 실패!',
      'The server does not support staging areas.' => '서버가 스테이징 영역을 지원하지 않습니다.',
      'Lint issued unresolved errors!' => '린트가 해결할 수 없는 오류를 일으켰습니다!',
      'Explanation:' => '설명:',
      '`%s` Should Be `%s`' => '`%s`은(는) `%s`여야 합니다',
      'ACTUAL VALUE' => '실제 값',
      'Force the library map to be updated, even in the presence of lint errors.' => '린트 오류가 있더라도 라이브러리 맵의 업데이트를 강제합니다.',
      '%s runs all tests.' => '%s은(는) 모든 테스트를 실행합니다.',
      'Successfully %s patch.' => '%s 패치 성공.',
      'A copy was saved to %s.' => '사본이 %s(으)로 저장되었습니다.',
      'Priority' => '우선 순위',
      'Unnecessary Semicolon' => '불필요한 세미콜론',
      'Closed' => '닫힘',
      'Command' => '명령어',
      'ID' => 'ID',
      'Set the color of a flag.' => '플래그의 색을 선택합니다.',
      'Naming Conventions' => '명명 규칙',
      '(Old and new values are identical.)' => '(이전 값과 새로운 값이 동일합니다.)',
      'Parse Error' => '구문 분석 오류',
      'Name Error' => '이름 오류',
      'Duplicate Symbol' => '중복 심볼',
      'LINT ERRORS' => '린트 오류',
      'Writing %s...' => '%s 쓰는 중...',
      'Unable to connect socket! Error #%d: %s' => '소켓에 연결할 수 없습니다! 오류 #%s: %s',
      'Unnecessary Double Quotes' => '불필요한 큰따옴표',
      '%s doesn\'t exist.
    ' => '%s이(가) 존재하지 않습니다.',
      'Use `%s` instead of `%s`.' => '`%2$s` 대신 `%1$s`을(를) 사용하십시오.',
      'Array Element' => '배열 요소',
      'Upgrading library to v2...' => '라이브러리를 v2로 업그레이드하는 중...',
      'Unknown diff type.' => 'diff 유형을 알 수 없습니다.',
      'To do this, run: **%s**' => '이것을 수행하려면 다음을 실행하십시오: **%s**',
      'No Revision' => '리비전 없음',
      'RESET' => '초기화',
      'Script and Regex' => '스크립트와 정규 표현식',
      'You must provide a commit message.' => '커밋 메시지를 지정해야 합니다.',
      'What do you want to name this library?' => '이 라이브러리에 사용할 이름은 무엇입니까?',
      'No changes found. (Did you specify the wrong commit range?)' => '변경사항이 없습니다. (잘못된 커밋 범위를 지정하셨습니까?)',
      'Failed to parse \'%s\' as JSON.' => '\'%s\'의 구문을 JSON으로 분석하는데 실패했습니다.',
      'Revision \'%s\' does not exist!' => '\'%s\' 리비전이 존재하지 않습니다!',
      'LibXML Error' => 'LibXML 오류',
      'Revision %s does not exist.' => '%s 리비전이 존재하지 않습니다.',
      'Mercurial does not support %s yet.' => '머큐리얼은 %s을(를) 아직 지원하지 않습니다.',
      'Merge Conflicts' => '충돌 병합',
      'Failed to connect to server (%s): %s' => '서버(%s) 연결을 실패했습니다: %s',
      '"%s" is currently aliased to "%s".' => '"%s"의 현재 다른 이름은 "%s"입니다.',
      'Valid status options are:
    	%s' => '유효한 상태 옵션은 다음과 같습니다:
    	%s',
      'CHOOSE' => '선택',
      'Expected: %s
      Actual: %s' => '예측된 값: %s
      실제 값: %s',
      'Spellchecker' => '맞춤법 검사기',
      'No such project: "%s"' => '해당 프로젝트가 없습니다: "%s"',
      'Custom configuration file.' => '사용자 지정 구성 파일입니다.',
      'Canceled.' => '취소되었습니다.',
      'Saved file as \'%s\'.' => '\'%s\' 파일로 저장되었습니다.',
      'Filename' => '파일 이름',
      'Patch Failed!' => '패치를 실패했습니다!',
      'Client %s' => '클라이언트 %s',
      'FETCH' => '페치',
      'NOTE' => '참고',
      'API Token installed.' => 'API 토큰이 설치되었습니다.',
      'Commit %s: %s' => '커밋 %s: %s',
      '< %sus' => '< %sus',
      'Upgrading %s...' => '%s 업그레이드 중...',
      'Some linters failed:' => '일부 린터 실패:',
      'There is no revision %s.' => '%s 리비전이 없습니다.',
      'Output in JSON format.' => 'JSON 형식으로 출력합니다.',
      'You can not specify paths with %s. The %s flag runs every test.' => '%s(으)로 경로를 지정할 수 없습니다. %s 플래그는 모든 테스트를 수행합니다.',
      'Tab Literal' => '탭 리터럴',
      'Subversion is not installed' => '서브버전이 설치되어 있지 않습니다',
      'Unable to Parse' => '구문을 분석할 수 없습니다',
      'Shell Command' => '셸 명령어',
      'Ruby' => '루비',
      'PUSH FAILED!' => '푸시를 실패했습니다!',
      'Unable to find %s or %s in %s!' => '%3$s에서 %1$s 또는 %2$s을(를) 찾을 수 없습니다!',
      'Use `%s` to detect syntax errors in JSON files.' => 'JSON 파일에서 문법 오류를 찾으려면 `%s`을(를) 사용하십시오.',
      'Auto-Fix' => '자동 수정',
      'Phutil XHPAST' => 'Phutil XHPAST',
      'Added' => '추가됨',
      'Run every test.' => '모든 테스트를 수행합니다.',
      'Syntax Error' => '구문 오류',
      'Configuration Options' => '구성 옵션',
      'No unit test failures.' => '실패한 단위 테스트가 없습니다.',
      '%s AFFECTED FILE(S)' => '영향을 받은 파일 %s개',
      'Git status has changed!' => 'Git 상태가 변경되었습니다!',
      'No such linter standard. Available standards are: %s.' => '해당 린터 표준이 없습니다. 사용 가능한 표준: %s.',
      'Basic Text Linter' => '기본 텍스트 린터',
      'Status' => '상태',
      'Formatted String' => '서식이 있는 문자열',
      'Lint raised errors!' => '린트가 오류를 일으켰습니다!',
      'Unknown' => '알 수 없음',
      'PASS' => '통과',
      'Using library name %s.' => '%s 라이브러리 이름을 사용합니다.',
      'Unrecognized command \'%s\'. Try \'%s\'.' => '\'%s\' 명령어를 인식하지 못했습니다. \'%s\'을(를) 시도하십시오.',
      '%s does not affect revisions.' => '%s은(는) 리비전에 영향을 미치지 않습니다.',
      'the repository has only one commit.' => '저장소는 하나의 커밋만 있습니다.',
      'Revision URI:' => '리비전 URI:',
      'Connected' => '연결함',
      'Failed to extract link target!' => '링크 대상의 추출을 실패했습니다!',
      'New Version Available!' => '새 버전을 사용할 수 있습니다!',
      '\'%s\' files should not be executable.' => '\'%s\' 파일은 실행 파일이 될 수 없습니다.',
      ' <%dms' => ' <%sms',
      'Server' => '서버',
      '%s Value' => '%s 값',
      'URI' => 'URI',
      'Reading paste from stdin...' => 'stdin에서 붙여넣기를 읽는 중...',
      'Ref does not have hardpoint "%s"!' => 'Ref에 "%s" 하드포인트가 없습니다!',
      'Halt' => '중단',
      'Unknown lint message!' => '린트 메시지를 알 수 없습니다!',
      '"%s" name' => '"%s" 이름',
      'alias' => '다른 이름',
      'Argument' => '인수',
      '%s line(s)' => '%s 줄',
      'Error in parsing \'%s\' file.' => '\'%s\' 파일의 구문 분석 중 오류가 있었습니다.',
      'LOGIN REQUIRED' => '로그인 필요',
      'The directory \'%s\' does not exist.' => '\'%s\' 디렉터리가 존재하지 않습니다.',
      'In Preparation' => '준비 중',
      'Do you want to create it?' => '만드시겠습니까?',
      'LINT OKAY' => '린트 정상',
      'Python PyFlakes' => '파이썬 PyFlakes',
      '%s does affect revisions.' => '%s은(는) 리비전에 영향을 미칩니다.',
      'This reverts commit %s.' => '이것은 %s 커밋을 되돌립니다.',
      'Empty File' => '빈 파일',
      'Server exited unexpectedly!' => '서버가 예기치 않게 종료되었습니다!',
      '(Message saved to %s.)' => '(메시지를 %s에 저장했습니다.)',
      'Changes:' => '변경사항:',
      'Pass' => '통과',
      'Upgrade arc now?' => '지금 arc를 업그레이드하시겠습니까?',
      '%s: %s' => '%s: %s',
      'Mercurial is not installed' => '머큐리얼이 설치되어 있지 않습니다',
      '%s requires a revision number.' => '%s에는 리비전 번호가 필요합니다.',
      'The test was not executed.' => '테스트가 실행되지 않았습니다.',
      'Can\'t upgrade a v2 library!' => 'v2 라이브러리를 업그레이드할 수 없습니다!',
      'Unable to upload file data: %s' => '파일 데이터를 업로드할 수 없습니다: %s',
      'committed' => '커밋됨',
      'Linting...' => '린트 처리 중...',
      'Duplicate Keys in Array' => '배열의 중복 키',
      'Done.' => '완료.',
      'DONE' => '완료',
      'Removed alias "%s".' => '"%s" 다른 이름을 제거했습니다.',
      'You can not continue with uncommitted changes. Commit or discard them before proceeding.' => '커밋되지 않은 변경사항이 있는 상태로 계속할 수 없습니다. 처리하기 전에 커밋하거나 버리십시오.',
      'The server \'%s\' rejected your request:' => '\'%s\' 서버는 요청을 거절했습니다:',
      'No paths are lintable.' => '린트 처리할 수 있는 경로가 없습니다.',
      'Warning' => '경고',
      'Getting file information...' => '파일 정보를 가져오는 중...',
      'PREVIEW' => '미리 보기',
      '`elseif` Usage' => '`elseif` 사용법',
      'You can\'t both edit and clear a flag.' => '플래그의 편집과 삭제를 둘 다 할 수 없습니다.',
      'Choose a name for the new library.' => '새로운 라이브러리의 이름을 선택하십시오.',
      'No lint problems.' => '린트 문제가 없습니다.',
      'XHPAST Lint' => 'XHPAST 린트',
      'Reading diff from stdin...' => 'stdin에서 diff를 읽는 중...',
      'Supports: %s' => '지원: %s',
      'Build %d' => '%s 빌드',
      'A custom configuration file.' => '사용자 지정 구성 파일입니다.',
      'Reason' => '이유',
      'Disabled' => '비활성화됨',
      'Bad Filename' => '잘못된 파일 이름',
      'In Progress' => '진행 중',
      'Message should be %s.' => '메시지는 %s여야 합니다.',
      'File Does Not End in Newline' => '파일이 새 줄로 끝나지 않습니다',
      'TARGET' => '대상',
      'Started' => '시작됨',
      'This comment has a TODO.' => '이 주석에 TODO가 있습니다.',
      'WARNING' => '경고',
      'LINT NOTICE' => '린트 고지',
      'FAIL' => '실패',
      'Script to execute.' => '실행할 스크립트입니다.',
      'AVAILABLE' => '사용 가능',
      'commit message' => '커밋 메시지',
      'Running unit tests...' => '유닛 테스트 실행 중...',
      'Fatal Error' => '치명적인 오류',
    );
  }

}

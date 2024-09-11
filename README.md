# img_resize
이미지 리사이징(imgix)
 - 파라미터 값에 따라 이미지 size를 변경하는 예제(이미지 규격뿐 아니라 사이즈까지 변경되도록)


- imgix 사용하여 진행
  - https://www.imgix.com sign up 후 이미지 저장소를 등록하여 사용 가능
  - 프로젝트 폴더로 이동하여 `composer require imgix/imgix-php` 명령 실행
    - 작성자의 경우 php 7.2 버전을 사용하고 있어 라이브러리 버전을 수정하였음
      - composer.json `"require": {"imgix/imgix-php": "^3.0"}, "config": {"platform": {"php": "7.2.34"}}` 내용 추가
      - `composer update` 명령 실행
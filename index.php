<?php
require 'vendor/autoload.php'; // Composer의 autoload 파일

use Imgix\UrlBuilder;

// Imgix에서 제공한 도메인으로 변경
$builder = new UrlBuilder("demo-source.imgix.net");
// 보안 키를 설정하는 경우, 보안 키 추가 (옵션)
// $builder->setSignKey("your-secure-sign-key");

// 이미지 URL 생성 (w 파라미터로 너비 지정)
$params = [
    "w" => 400,  // 너비 400px
//    "h" => 300,  // 높이 300px (선택 사항)
    "fit" => "crop"  // 이미지 비율을 유지하며 자름
];

$w = @$_GET['w'];
if ($w && (is_numeric($w) && $w > 0)) {
    $params['w'] = $w;
}

// 원본 이미지 경로
$imageUrl = '/canyon.jpg';

// Imgix URL 생성
$url = $builder->createURL($imageUrl, $params);

echo '<img src="' . htmlspecialchars($url) . '" alt="Imgix Image">';
?>
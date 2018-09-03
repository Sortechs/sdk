<?php
/**
 * Created by PhpStorm.
 * User: msalahat
 * Date: 16/08/17
 * Time: 03:56 م
 */
require_once '../src/Sortechs/autoload.php';

$data = [
    'app_id' => 'XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX',
    'app_secret' => 'XXXXXXXXXXXXXXXXXXXXXXXXXXX_XXXXXXXXXXX',
];
/**@var $so \Sortechs\Sortechs **/
$so = new \Sortechs\Sortechs($data);
$token = new Sortechs\Authentication\AccessToken($so->generateAccessToken());
$section = $so->getSections($token);

/** video */
/*$media = $so->app->media([
    [
        'url'=>'https://www.XXXXXXXXXXXXXXXXXX.com/css/trolltunga.mp4',
        'caption'=>null,
        'type'=>'video'
    ]
]);*/

$media = $so->app->media([
    [
        'url'=>'https://www.XXXXXXXXXXXXXXXXXX.com/css/trolltunga.jpg',
        'caption'=>null,
        'type'=>'image'
    ],
    [
        'url'=>'https://www.XXXXXXXXXXXXXXXXXX.com/css/trolltunga.jpg',
        'caption'=>null,
        'type'=>'image'
    ],
    [
        'url'=>'https://www.XXXXXXXXXXXXXXXXXX.com/css/trolltunga.jpg',
        'caption'=>null,
        'type'=>'image'
    ]
]);
$news = $so->app->news([
    'sectionId'=>'XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXx', //id from your api *Required or sectionName
    'sectionName'=>'News',//*Required or sectionId
    'title'=>'XXXX XXXX ',//*Required
    'article'=>'XXX XXX - XXX',//*Required
    'url'=>'https://www.XXXX.com/news.html?id=XXXXXXXX',//*Required
    'newsId'=>'XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX', /*id from your DATABASE , Like 1000  *Required */
    'options'=>[] /* Optional*/
]);
$response = $so->AddNewsWithMedia($token,$news,$media);
print_r($response->getNews());

/** ************* OR ******************* **/
$data = [
    'app_id' => 'XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX',
    'app_secret' => 'XXXXXXXXXXXXXXXXXXXXXXXXXXX_XXXXXXXXXXX',
    'accessToken' => 'XXXXXXXXXXXXXXXXXXXXXXXXXXX_XXXXXXXXXXX',

];
$so = new \Sortechs\Sortechs($data);
$section = $so->getSections($token);
$news = $so->app->news([
    'sectionId'=>'XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXx', //id from your api *Required or sectionName
    'sectionName'=>'News',//*Required or sectionId
    'title'=>'XXXX XXXX ',//*Required
    'article'=>'XXX XXX - XXX',//*Required
    'url'=>'https://www.XXXX.com/news.html?id=XXXXXXXX',//*Required
    'newsId'=>'XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX', /*id from your DATABASE , Like 1000  *Required */
    'options'=>[] /* Optional*/
]);

$response = $so->AddNewsWithMedia($so->accessToken,$news,$media);

print_r($response->getNews());
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
$tags = $so->app->tags([
    //'sectionId'=>'XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXx', //id from your api
    'sectionName'=>'News',
    'tags'=>[
        'tag',
        'tag X',
        'tag X',
        'tag X',
    ]
]);
$response = $so->AddTags($token,$tags);
print_r($response);

/** ************* OR ******************* **/


$data = [
    'app_id' => 'XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX',
    'app_secret' => 'XXXXXXXXXXXXXXXXXXXXXXXXXXX_XXXXXXXXXXX',
    'accessToken' => 'XXXXXXXXXXXXXXXXXXXXXXXXXXX_XXXXXXXXXXX',

];
$so = new \Sortechs\Sortechs($data);
$tags = $so->app->tags([
    //'sectionId'=>'XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXx', //id from your api
    'sectionName'=>'News',
    'tags'=>[
        'tag',
        'tag X',
        'tag X',
        'tag X',
    ]
]);
$response = $so->AddTags($token,$news);
print_r($response);
<?php
/**
 * Created by PhpStorm.
 * User: msalahat
 * Date: 03/10/17
 * Time: 10:48 ص
 */
require_once '../src/Sortechs/autoload.php';
$data = [
    'app_id' => 'XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX',
    'app_secret' => 'XXXXXXXXXXXXXXXXXXXXXXXXXXX_XXXXXXXXXXX',
];
/**@var $so \Sortechs\Sortechs **/
$so = new \Sortechs\Sortechs($data);
$token = new Sortechs\Authentication\AccessToken($so->generateAccessToken());
$section = $so->getClients($token);
$news_id = ''; // from your db
$section_id = ''; //from sortechs you can search use getSections or getClients method and get id
$news = $so->getNews($news_id,$section_id,$token);
if(!empty($news->getId())){
    $update = $so->app->updateNews([
        'newsId'=>$news->getNewsId(),
        'sectionId'=>$news->getSectionId(),
        'clientId'=>$news->getClientId(),
        'title'=>'XXXX XXXX ',//*Required
        'article'=>'XXX XXX - XXX',//*Required
        'url'=>'https://www.XXXX.com/news.html?id=XXXXXXXX',//*Required
        'options'=>[] /* Optional*/
    ]);
    $media = $so->app->media([
        [
            'url'=>'https://www.XXXXXXXXXXXXXXXXXX.com/css/trolltunga.jpg',
            'caption'=>null,
            'type'=>'image'
        ]
    ]);

    $response = $so->SendNewsWithMedia($token,$update,$media);
    print_r($response);
}
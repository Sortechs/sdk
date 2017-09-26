<?php
/**
 * Created by PhpStorm.
 * User: msalahat
 * Date: 20/08/17
 * Time: 06:55 م
 */
require_once '../src/Sortechs/autoload.php';

$data = [
    'app_id' => 'XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX',
    'app_secret' => 'XXXXXXXXXXXXXXXXXXXXXXXXXXX_XXXXXXXXXXX',
];
/**@var $so \Sortechs\Sortechs **/
$so = new \Sortechs\Sortechs($data);
$token = new Sortechs\Authentication\AccessToken($so->generateAccessToken());
$data_section = new \Sortechs\request\Section(['title'=>'XXXX']);
$data = $so->addSection($token,$data_section);
print_r($data->getSection());
print_r($data->getSections());


/** ************* OR ******************* **/


$data = [
    'app_id' => 'XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX',
    'app_secret' => 'XXXXXXXXXXXXXXXXXXXXXXXXXXX_XXXXXXXXXXX',
    'accessToken' => 'XXXXXXXXXXXXXXXXXXXXXXXXXXX_XXXXXXXXXXX',

];
$so = new \Sortechs\Sortechs($data);
$data = $so->addSection($so->accessToken,$data_section);
print_r($data->getSection());
print_r($data->getSections());
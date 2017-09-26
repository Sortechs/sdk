# sortechs sdk v0.1

## Add News ##

```go 
require_once '../src/Sortechs/autoload.php';

$data = [
    'app_id' => 'XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX',
    'app_secret' => 'XXXXXXXXXXXXXXXXXXXXXXXXXXX_XXXXXXXXXXX',
];
/**@var $so \Sortechs\Sortechs **/
$so = new \Sortechs\Sortechs($data);
$token = new Sortechs\Authentication\AccessToken($so->generateAccessToken());
$section = $so->getSections($token);

$news = $so->app->news([
    'sectionId'=>'XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXx', //id from your api
    'sectionName'=>'News',
    'title'=>'XXXX XXXX ',
    'article'=>'XXX XXX - XXX',
    'url'=>'https://www.XXXX.com/news.html?id=XXXXXXXX',
]);

$response = $so->AddNews($token,$news);
print_r($response);
```

## Add News With media ##

```go
require_once '../src/Sortechs/autoload.php';

$data = [
    'app_id' => 'XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX',
    'app_secret' => 'XXXXXXXXXXXXXXXXXXXXXXXXXXX_XXXXXXXXXXX',
];

/**@var $so \Sortechs\Sortechs **/

$so = new \Sortechs\Sortechs($data);

$token = new Sortechs\Authentication\AccessToken($so->generateAccessToken());

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
    'sectionId'=>'XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXx', //id from your api
    'sectionName'=>'News',
    'title'=>'XXXX XXXX ',
    'article'=>'XXX XXX - XXX',
    'url'=>'https://www.XXXX.com/news.html?id=XXXXXXXX',
]);
$response = $so->AddNewsWithMedia($token,$news,$media);

```

## Add Section ## 

```go
$data = [
    'app_id' => 'XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX',
    'app_secret' => 'XXXXXXXXXXXXXXXXXXXXXXXXXXX_XXXXXXXXXXX',
];
/**@var $so \Sortechs\Sortechs **/
$so = new \Sortechs\Sortechs($data);
$token = new Sortechs\Authentication\AccessToken($so->generateAccessToken());
$data_section = new \Sortechs\request\Section(['title'=>'XXXX']);
$data = $so->addSection($token,$data_section);
```


## add Tags ##

```go
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
```

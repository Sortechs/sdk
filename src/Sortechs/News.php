<?php
/**
 * Created by PhpStorm.
 * User: msalahat
 * Date: 16/08/17
 * Time: 03:25 م
 */
namespace Sortechs;
use Sortechs\Exceptions\SortechsExceptions;

class News{

    private $sectionId='';

    private $sectionName;

    private $title;

    private $article;

    private $url;

    /**
     * @param mixed $url
     * @throws SortechsExceptions
     */
    public function setUrl($url){
        $data = parse_url($url);
        if(is_array($data)){
            if(!isset($data['scheme'])){
                throw new SortechsExceptions('please check url',500);
            }
        }
        $this->url = $url;
    }

    /**
     * @return mixed
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * @return mixed
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param mixed $title
     */
    public function setTitle($title)
    {
        $this->title = $title;
    }

    /**
     * @return mixed
     */
    public function getSectionName()
    {
        return $this->sectionName;
    }

    /**
     * @param mixed $sectionName
     */
    public function setSectionName($sectionName)
    {
        $this->sectionName = $sectionName;
    }
    /**
     * @param mixed $sectionId
     */
    public function setSectionId($sectionId){
        $this->sectionId = $sectionId;
    }

    /**
     * @return mixed
     */
    public function getArticle()
    {
        return $this->article;
    }

    /**
     * @return mixed
     */
    public function getSectionId()
    {
        return $this->sectionId;
    }

    /**
     * @param mixed $article
     */
    public function setArticle($article)
    {
        $this->article = $article;
    }

    public function getData(){
        return[
            'sectionId'=>$this->getSectionId(),
            'sectionName'=>$this->getSectionName(),
            'title'=>$this->getTitle(),
            'article'=>$this->getArticle(),
            'url'=>$this->getUrl(),
        ];
    }


}
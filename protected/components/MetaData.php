<?php
/**
 * Created by PhpStorm.
 * User: ITesic
 * Date: 21.6.14.
 * Time: 17.47
 */

class MetaData {

    private $metaData = array(
        'title' => '',
        'description' => '',
        'image' => '',
        'url' => '',
        'keywords' => '',
        'language' => 'sr',
        'type' => ''
    );

    function __construct($data){
        $this->setMetaData($data);
    }

    public function setMetaData($data){
        $this->metaData = array_merge($this->metaData, $data);
    }

    public function useAllMetaData(){
        $this->useBasicMetaData();
        $this->useSocialMetaData();
    }

    public function useBasicMetaData(){
        $cs = Yii::app()->getClientScript();
        $cs->registerMetaTag($this->metaData['title'], 'title', null, null);
        $cs->registerMetaTag($this->metaData['description'], 'description', null, null);
        $cs->registerMetaTag($this->metaData['language'], 'language', null, null);
    }

    public function useSocialMetaData(){
        $this->useFacebookMetaData();
        $this->useTwitterMetaData();
    }

    public function useFacebookMetaData(){
        $cs = Yii::app()->getClientScript();
        $cs->registerMetaTag($this->metaData['title'], 'og:title', null, null);
        $cs->registerMetaTag($this->metaData['type'], 'og:type', null, null);
        $cs->registerMetaTag($this->metaData['url'], 'og:url', null, null);
        $cs->registerMetaTag($this->metaData['image'], 'og:image', null, null);
        $cs->registerMetaTag($this->metaData['description'], 'og:description', null, null);
    }

    public function useTwitterMetaData(){
        $cs = Yii::app()->getClientScript();
        $cs->registerMetaTag($this->metaData['title'] . ' - ' . $this->metaData['url'], 'twitter:card', null, null);
        $cs->registerMetaTag($this->metaData['title'], 'twitter:title', null, null);
        $cs->registerMetaTag($this->metaData['description'], 'twitter:description', null, null);
        $cs->registerMetaTag($this->metaData['image'], 'twitter:image', null, null);
    }

}


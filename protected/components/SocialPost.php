<?php
/**
 * Created by PhpStorm.
 * User: ITesic
 * Date: 21.6.14.
 * Time: 16.49
 */

class SocialPost {

    private $socialData = array(
        'url' => '',
        'title' => '',
        'description' => '',
        'image' => '',
        'via' => '',
        'hashtags' => ''
    );

    function __construct($data){
        $this->setSocialData($data);
    }

    public function setSocialData($data){
        $this->socialData = array_merge($this->socialData, $data);
    }

    /**
     * Returns custom facebook share link for this car
     * @return configured facebook share url
     */
    public function getFacebookShareUrl() {
        return 'http://www.facebook.com/sharer.php?s=100&p[url]='.$this->socialData['url']
            .'&p[images][0]='.$this->socialData['image']
            .'&p[title]='.$this->socialData['title']
            .'&p[summary]='.$this->socialData['description'];
    }

    /**
     * Returns custom twitter share link for this post
     * @return configured twitter share url
     */
    public function getTwitterShareUrl() {
        return 'https://twitter.com/share?url='.$this->socialData['url']
            .'&text='.$this->socialData['title']
            .(($this->socialData['via'])?'&via='.$this->socialData['via']:'')
            .(($this->socialData['hashtags'])?'&hashtags='.$this->socialData['hashtags']:'');
    }
} 
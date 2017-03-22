<?php
/**
 * Created by PhpStorm.
 * User: jarman
 * Date: 3/22/17
 * Time: 5:08 PM
 */

namespace App;


class Url
{
    private  $name ='';
    private  $image='';
    private  $mov='';


    function __construct($name,$image_url,$mov_url)
    {
        $this->name =$name;
        $this->image =$image_url;
        $this->mov =$mov_url;
    }
    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return string
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * @return string
     */
    public function getMov()
    {
        return $this->mov;
    }


    public function toString()
    {
        return ([
                'name'=>$this->name,
                'image_url'=>$this->image,
                'mov_url'=>$this->mov
        ]
        );
    }

}
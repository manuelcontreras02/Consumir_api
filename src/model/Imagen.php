<?php

namespace Src\model;

class Imagen
{
    private int $likes;
    private string $user;
    private string $imagenURL;

    public function __construct()
    {
        
    }





    /**
     * Get the value of likes
     */ 
    public function getLikes()
    {
        return $this->likes;
    }

    /**
     * Set the value of likes
     *
     * @return  self
     */ 
    public function setLikes($likes)
    {
        $this->likes = $likes;

        return $this;
    }

    /**
     * Get the value of user
     */ 
    public function getUser()
    {
        return $this->user;
    }

    /**
     * Set the value of user
     *
     * @return  self
     */ 
    public function setUser($user)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get the value of imagenURL
     */ 
    public function getImagenURL()
    {
        return $this->imagenURL;
    }

    /**
     * Set the value of imagenURL
     *
     * @return  self
     */ 
    public function setImagenURL($imagenURL)
    {
        $this->imagenURL = $imagenURL;

        return $this;
    }
}




?>
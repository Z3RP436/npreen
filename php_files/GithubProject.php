<?php
require_once(__DIR__.'/Project.php');
require_once(__DIR__.'/IExternLink.php');
class GithubProject extends Project{
    
    protected $owner;
    protected $repo;
    
    public function __construct($title, $text, $owner, $repo){
        $this->title = $title;
        $this->text = $text;
        $this->owner = $owner;
        $this->repo = $repo;
    }

    /**
     * Get the value of owner
     */ 
    public function getOwner()
    {
        return $this->owner;
    }

    /**
     * Set the value of owner
     *
     * @return  self
     */ 
    public function setOwner($owner)
    {
        $this->owner = $owner;

        return $this;
    }

    /**
     * Get the value of repo
     */ 
    public function getRepo()
    {
        return $this->repo;
    }

    /**
     * Set the value of repo
     *
     * @return  self
     */ 
    public function setRepo($repo)
    {
        $this->repo = $repo;

        return $this;
    }
}
?>
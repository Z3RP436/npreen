<?php
class Project
{

	protected $title;
	protected $text;

	public function __construct($title, $text){
        $this->title = $title;
        $this->text = $text;
    }

	/**
	 * Get the value of title
	 */ 
	public function getTitle()
	{
		return $this->title;
	}

	/**
	 * Set the value of title
	 *
	 * @return  self
	 */ 
	public function setTitle($title)
	{
		$this->title = $title;

		return $this;
	}

	/**
	 * Get the value of text
	 */ 
	public function getText()
	{
		return $this->text;
	}

	/**
	 * Set the value of text
	 *
	 * @return  self
	 */ 
	public function setText($text)
	{
		$this->text = $text;

		return $this;
	}
}

?>
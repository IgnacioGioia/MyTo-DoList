<?php 
	class Task{
		private $title;
		private $date;
		private $id;
		private $description;
		private $done;
		
		public function __construct($id, $title, $date,$description, $done)
		{
			$this->title = $title;
			$this->date = $date;
			$this->description = $description;
			$this->id = $id;
			$this->done = $done;
		}
		public function getId(){
			return $this->id;
		}
		public function setId($id){
			$this->id = $id;
		}
		public function getTitle(){
			return $this->title;
		}
		public function setTitle($title){
			$this->title = $title;
		}
		public function getDate(){
			return $this->date;
		}
		public function setDate($date){
			$this->date = $date;
		}
		public function getDescription(){
			return $this->description;
		}
		public function setDescription($description){
			$this->description = $description;
		}
		public function getDone(){
			return $this->done;
		}
		public function setDone($done){
			$this->done = $done;
		}
	}
?>
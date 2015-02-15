<?php 

	/**
	* 	Class Student		
	*/
	class Student 
	{
		
		private $name;

		public function setName($name)
		{
			$this->_name = $name;
		}

		public function getName()
		{
			return $this->_name;
		}

	}

	$stud = new Student;
	$stud->setName('Rizki Ramdani');
	echo $stud->getName();



 ?>
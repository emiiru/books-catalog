<?php

class Database{
	
	private $connection;

	function __construct()
	{
		$this->connect_db();
	}

	public function connect_db(){
		$this->connection = mysqli_connect('localhost', 'root', '', 'books_catalogue');
		if(mysqli_connect_error()){
			die("Database Connection Failed" . mysqli_connect_error() . mysqli_connect_errno());
		}
	}

	public function create($title, $isbn, $author, $publisher, $year, $category){
		$sql = "INSERT INTO `books` (title, isbn, author, publisher, published_year, category) VALUES ('$title', '$isbn', '$author', '$publisher', '$year', '$category')";
		$res = mysqli_query($this->connection, $sql);
		if($res){
	 		return true;
		}else{
			return false;
		}
	}

	public function read($id=null){
		$sql = "SELECT * FROM `books`";
		if($id){ $sql .= " WHERE id=$id";}
 		$res = mysqli_query($this->connection, $sql);
 		return $res;
	}

	public function update($id,$title,$isbn,$author,$publisher,$year, $category){
		$sql = "UPDATE `books` SET title='$title', isbn='$isbn', author='$author', publisher='$publisher', published_year='$year', category='$category' WHERE id=$id";
		$res = mysqli_query($this->connection, $sql);
		if($res){
			return true;
		}else{
			return false;
		}
	}

	public function delete($id){
		$sql = "DELETE FROM `books` WHERE id=$id";
 		$res = mysqli_query($this->connection, $sql);
 		if($res){
 			return true;
 		}else{
 			return false;
 		}
	}

	public function sanitize($var){
		$return = mysqli_real_escape_string($this->connection, $var);
		return $return;
	}

}

$database = new Database();

?>
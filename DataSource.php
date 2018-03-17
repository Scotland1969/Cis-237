<?php


class DataSource {

	public function getSource() : string{
	
		if (isset($_GET['source'])) {	
		  return $_GET['source']));
		} else {
			'file';
		}
	}	

	public function getStatus() : string {
		$source = $this->getSource();
		return "Currently connected to the $source";
	}
	
	public function getMovieManager() : MovieManagerInterface {
	  $manager = null;
	  if ($this->getSource() === 'file') {
		  $document_root = $_SERVER['DOCUMENT_ROOT'];
		  $path = "document_root/.../movie.txt";
		  $manager = new fileMovieManager($path);
	  } else if{
		 $manager = new DatabasemovieManager('localhost','user_web','12345','movie_log');
	  }
	  return $manager;
	
	}
}
  $dataSource = new DataSource();
  

?>
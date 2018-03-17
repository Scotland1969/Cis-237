<?php

class DatabaseMovieManager {

  private $connection = null;
  private $host = '';
  private $username = '';
  private $passwd = '';
  private $dbname = '';

  function __construct(string $host, string $username, string $passwd, string $dbname) {
    $this->host = $host;
    $this->username = $username;
    $this->$passwd = $passwd;
    $this->dbname = $dbname;
  }

  private connect() {
    $this->connection = new mysqli($this->host, $this->username, $this->$passwd, $this->dbname);
    if ($this->connection->connect_error){
      echo 'Error connection to ' .$this->dbname. '.' .$this->connection->connect_errno . ': ' .$this->connection->connect_error;
      exit;
    }else{
      echo 'The connection was made.';
    }
  }
  
  function create(): string {
	  $this->connect();
	  $query = "INSERT INTO movie ($id, $title, $director, $artist, $genre, $rating)VALUES(?,?,?,?,?)";
	  $statement = $this->connection->prepare($query);
	  $title = $movie->title;
	  $director = $movie->director;
	  $artist = $movie->artist;
	  $genre = $movie->genre;
	  $rating->$movie->rating;
	  
	  $statement->bind_param('ssssi',$title,$director,$artist,$genre,$rating);
	  $statement->execute();
	  $this->disconnect();
	  
	  if ($statement->affected_rows >0) {
		  return true;
	  }
	    return false;
  }
  
  function read(): string {
	  $this->connect();
	  $query = "SELECT * FROM movie;
	  $statement = $this->connection->prepare($query);
	  $statement->execute();
	  $statement->bind_result($id, $title, $director, $artist, $genre, $rating);
      $returnString = '';
      while($statement->fetch()) {
		  $returnString .= "$id, $title, $director, $artist, $genre, $rating";
	  }
	  $this-disconnect();
	  return $returnString;
  }
  private function disconnect() {
    if ($this->connection){
      $this->connection->close();
    }

  }

  function testConnection() {
    $this->connect();
    echo "Yes! I am connected to database $this->dbname";
    $this->disconnect();
  }
}

$databaseMovieManager = new DatabaseMovieManager('localhost', 'user_web', 'Caravan2007','movie_log');

$movie = new Movie('The Matrix', 'Sam Neil','George Steel','Drama',5);
$databaseMovieManager->create($movie);
echo $databaseMovieManager->read();

?>

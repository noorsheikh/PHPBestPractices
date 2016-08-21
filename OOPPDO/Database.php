<?php
// Delare an object Database.
class Database {

	// Declare the Database accessing properties as private.
	private $DBHOST = "localhost";
	private $DBUSER = "root";
	private $DBPASS = ""; 

	// For this to work you first need to create a database inside your server and initialize the database name here. My database name is pdodb.
	private $DBNAME = "pdodb";

	// Declare the Database connection properties.
	public $connect;
	public static $instance;

	// Decalre the default __construct method of class
	// Inside the __construct method set the database connection to MySQL through PDO
	// Use try catch block to check for any Exception or Error in connection
	public function __construct() {
		try {
			$connect = new PDO("mysql:host={$this->DBHOST};dbname={$this->DBNAME}", $this->DBUSER, $this->DBPASS);
			// set the error mode for PDO
			$connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			echo "Connection Successful!";
		} catch(Exception $e) {
			echo $e->getMessage();
			die();
		}
	}

	// Declare the getInstance method in order to avoid duplicate connections to database.
	public static function getInstance() {
		if(!self::$instance) {
			return self::$instance = new self();
		}

		return self::$instance;
	}

	// Decalre method for getting the database connection.
	public function getConnection() {
		return $this->connect;
	}

}

// Declare the Database object here.
$db = Database::getInstance();
// Access the Database connection method.
$connection = $db->getConnection();


?>
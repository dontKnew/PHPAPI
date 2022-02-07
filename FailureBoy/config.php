<?php
	class Config {
	//   private const DBHOST = 'localhost';
	//   private const DBUSER = 'root';
	//   private const DBPASS = '';
	//   private const DBNAME = 'failureboy';
	private const DBHOST = 'sql210.epizy.com';
	  private const DBUSER = 'epiz_30791519';
	  private const DBPASS = 'ShxZs1DOm2v';
	  private const DBNAME = 'epiz_30791519_failureboy';
	  private $dsn = 'mysql:host=' . self::DBHOST . ';dbname=' . self::DBNAME . '';
	  protected $conn = null;

	  public function __construct() {
	    try {
	      $this->conn = new PDO($this->dsn, self::DBUSER, self::DBPASS);
		   $this->message("database Connected success", true);
          // catch error if occur
	      $this->conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
	    } catch (PDOException $e) {
	      die('Connectionn Failed : ' . $e->getMessage());
		    $this->message($e->getMessage(), false);
	    }
	    return $this->conn;
	  }

	  // Sanitize Inputs
	  public function test_input($data) {
	    $data = strip_tags($data);
	    $data = htmlspecialchars($data);
	    $data = stripslashes($data);
	    $data = trim($data);
	    return $data;
	  }

	// JSON Format Converter Function
	public function message($content, $status) {
		return json_encode(['message' => $content, 'status' => $status]);
		}


	}
?>

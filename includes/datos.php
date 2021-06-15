<?php



/** The name of the database  */
define('DB_NAME', "al286342_ei1036_42");

/** Fatabase username */
define('DB_USER', "al286342");

/** Database password */
define('DB_PASSWORD', "54281139N");

/** Database hostname */
define('DB_HOST', "db-aules.uji.es");

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

if (!isset($pdo)){
  try{
   $pdo = new PDO("pgsql:host=".DB_HOST.";dbname=".DB_NAME, DB_USER, DB_PASSWORD);
   
  }
  catch (PDOException $e) {
		echo "Failed to get DB handle: " . $e->getMessage() . "\n";
		$pdo = new PDO(
      'sqlite::memory:',
      null,
      null,
      array(PDO::ATTR_PERSISTENT => true)
    );
    
    $pdo -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    include_once("sqlite_test.php");
  }
}	

    
  
    

  $table="productos";
    
    

    
    $query= "SELECT * FROM $table ;";

    
    $rows = $pdo->query($query)->fetchAll(\PDO::FETCH_ASSOC);


    $array=array();

    foreach ($rows as $key){
        $datos=array();
        foreach($key as $k => $v){
            $datos[$k]= $v;

        }
         array_push($array,$datos);
    }


   exit(json_encode($array));


    
    












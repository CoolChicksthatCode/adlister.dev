

<?php

require_once __DIR__ . "/Model.php";
require_once __DIR__ . "/User.php";

class Ads extends Model
{
	protected static $table = 'ads';
// connects User to ads posted
public function user() {
	return User::find($this->userId);
}

//will find the ads that belon to the user with the corresponding id
// will return te values of items
public static function findAllUserById($id) {
	self::dbConnect();
	$query = 'SELECT * FROM' . static::$table . 'WHERE userID = :userId ORDER BY id desc';
	
	$stmt = self::$dbc->prepare($query);
	$stmt = bindValue(':userId', $id, PDO::PARAM_INT);
	$stmt = execute();

	//results will store the output of FETCH from ASSOC array
	$results = $stmt->fetchAll(PDO::FETCH_ASSOC);

	//setting attributes of items object and getting $results content
	$item = null;

	if($results) {
		$item = new static;
		$item->attributs = $results;
	}
		return $item;
}

// gets the 'featured items from the ads table'...the most recently created
public static function displayFeaturedAds($num = 4) {
	self::dbConnect();
	$query = 'SELECT * FROM' . static::$table . 'ORDER BY id DESC Limit' . $num;

	$stmt = self::$dbc->prepare($query);
	$stmt->execute();

	$results = $stmt->FetchAll(PDO::FETCH_ASSOC);

	$item =null;
	
	if($results) {
		$item = new static;
		$item->attributes = $results;
	}

	return $item;

}

// public static function userItems() {
// 	$user = Auth::user();
// 	self::dbConnect();
// 	$query = 'SELECT * FROM' . static::$table . 'WHERE userID = ' . $user->id);
// 	$stmt->execute();


//     $stmt = self::$dbc->query(‘SELECT * FROM' . static::$table . 'WHERE userId = ’ . $user->id);
//     return $stmt->fetchAll(PDO::FETCH_ASSOC);
//    }

// protected function insert() {
//         // TODO: call dbConnect to ensure we have a database connection
//         self::dbConnect();

//         $insert = "INSERT INTO ads (itemName, price, description, sellerName, username)
//         VALUES(:itemName, :price, :description, :sellerName, :username);";
//         $stmt = self::$dbc->prepare($insert);
//         $stmt->bindValue(':itemName', $this->itemName, PDO::PARAM_STR);
//         $stmt->bindValue(':price', $this->price, PDO::PARAM_STR);
//         $stmt->bindValue(':description', $this->description, PDO::PARAM_STR);
//         $stmt->bindValue(':sellerName', $this->sellerName, PDO::PARAM_STR);    
//         $stmt->bindValue(':username', $this->username, PDO::PARAM_STR);    
        
//         $stmt->execute(); 
//         $this->id = self::$dbc->lastInsertId();

//     }





}



?>


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
	public static function displayFeaturedAds($num = 3) {
		self::dbConnect();
		$query = 'SELECT * FROM ' . static::$table . ' ORDER BY id DESC Limit ' . $num;

		$stmt = self::$dbc->prepare($query);
		$stmt->execute();

		$results = $stmt->fetchAll(PDO::FETCH_ASSOC);

		return array_map(function($result) {
	            $instance = new static;
	            $instance->attributes = $result;
	            return $instance;
	        }, $results);


	}

	public static function userItems() 
	{
		$user = Auth::user();

		self::dbConnect();

		$query = 'SELECT * FROM ' . static::$table . ' WHERE userID = ' . $user->id;

		$stmt = self::$dbc->prepare($query);
		$stmt->execute();

		$results = $stmt->fetchAll(PDO::FETCH_ASSOC);

		return array_map(function($result) {
	            $instance = new static;
	            $instance->attributes = $result;
	            return $instance;
	        }, $results);

	}

	public static function deleteAd($id)
	{
		self::dbConnect();
		$stmt = self::$dbc->prepare("DELETE FROM posts WHERE id = :id");
		$stmt->bindValue('id', $id, PDO::PARAM_STR);
		$stmt->execute();
	}


}



?>
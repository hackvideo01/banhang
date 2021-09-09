<?

class PostModel {

	public function getPost() {

		require_once('config/connect_DB.php');

		$db = new MySQLDatabase();
		$db->db_connect();

	}
}

?>
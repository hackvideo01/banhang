<?

class PostController {

	public function getPost() {
		// require_once('models/PostModel.php');
		// $postModel = new PostModel();
		// $postModel->getPost();

		$index = 1;

		require_once('view/header/header.php');
		require_once('view/home/index.php');
		require_once('view/footer/footer.php');


	}
}

?>
// app/controllers/HomeController.php
require_once '../system/BasePresenter.php';

class HomeController extends BasePresenter {
    public function index() {
        $data = ['title' => 'Welcome to MVP Framework'];
        $this->view->render('home/index', $data);
    }
}

// system/BasePresenter.php
class BasePresenter {
    protected $view;

    public function __construct() {
        $this->view = new BaseView();
    }
}

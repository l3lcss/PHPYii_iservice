<?php
ob_start(); session_start();

class HomeController extends Controller {
  function actionIndex() {
    $this->render("Index");
  }

  function actionRequestForm($id = null) {
    $model = new Request();

    if (!empty($_POST["Request"])) {
      $id = $_POST["Request"]["id"];

      if (!empty($id)) {
        $model = Request::model()->findByPk($id);
      }
      $model->_attributes = $_POST["Request"];

      if ($model->save()) {
        $this->redirect(array("Index"));
      }
    }

    if (!empty($id)) {
      $model = Request::model()->findByPk($id);
    }

    $this->render("RequestForm",array(
      "model" => $model
    ));
  }

  function actionRequestDelete($id) {
    Request::model()->deleteByPk($id);
    $this->redirect(array("RequestHistory"));
  }

  function actionRequestHistory() {
    $model = new Request();
    $this->render("RequestHistory", array(
      "model" => $model
    ));
  }

  function actionRequestHistoryForm($id){
    $model = Request::model()->findByPk($id);
    $this->render("RequestHistoryForm", array(
      "model" => $model
    ));
  }
}
 ?>

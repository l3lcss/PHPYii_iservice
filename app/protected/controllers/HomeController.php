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

  function actionDeviceForm($id = null){
    $model = new Device();

    if(!empty($_POST["Device"])){
      $id = $_POST["Device"]["id"];
      $buy_date = $_POST["Device"]["device_buy_date"];
      $garantee_expire_date = $_POST["Device"]["device_garantee_expire_date"];

      if(!empty($id)){
        $model = Device::model()->findByPk($id);
      }

      $model->_attributes = $_POST["Device"];

      if($model->save()){
        $this->redirect(array("DeviceList"));
      }
    }

    if(!empty($id)){
      $buy_date = ($model->device_buy_date);
      $garantee_expire_date = ($model->device_garantee_expire_date);

      $model = Device::model()->findByPk($id);
      $model->device_buy_date = $buy_date;
      $model->device_garantee_expire_date = $garantee_expire_date;
    }

    $this->render("DeviceForm",array(
      "model" => $model
    ));
  }

  function actionDeviceList(){
    $model = new Device();
    $this->render("DeviceList",array(
      "model" => $model
    ));
  }

  function actionDeviceDelete($id){
    Device::model()->deleteByPk($id);
    $this->redirect(array("DeviceList"));
  }
}
 ?>

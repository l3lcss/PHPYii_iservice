<?php
  ob_start();
  session_start();
  class MemberController extends Controller{

    public function actionCheckLogin(){
      $attribute = array();
      $attribute["employee_username"] = $_POST["user_username"];
      $attribute["employee_password"] = $_POST["user_password"];
      $attribute["employee_status"] = "active";

      $model = Employee::model()->findByAttributes($attribute);

      if(!empty($model)){
        Yii::app()->session["employee_id"] = $model->id;
        Yii::app()->session["employee_username"] = $model->employee_username;
        Yii::app()->session["employee_level"] = $model->employee_level;

        $this->redirect(array("home"));
      }else {
        $this->redirect(Yii::app()->homeUrl);
      }
    }

    public function actionHome(){
      $this->render("home");
    }

  public function actionLogout(){
    unset(Yii::app()->session["employee_id"]);
    unset(Yii::app()->session["employee_username"]);

    $this->redirect(Yii::app()->homeUrl);
  }

  public function actionRegister($id = null){
    $model = new Employee();

    if(!empty($_POST["Employee"])){
      if(!empty($_POST["Employee"]["id"])){
        $id = $_POST["Employee"]["id"];
        $model = Employee::model()->findByPk($id);
      }

      $model->_attributes = $_POST["Employee"];

      if($model->save()){
        $this->redirect(array("Config/Employee"));
      }
    }

    if(!empty($id)){
      $model = Employee::model()->findByPk($id);
    }

    $this->render("register",array(
			"model" => $model
		));
  }

}

 ?>

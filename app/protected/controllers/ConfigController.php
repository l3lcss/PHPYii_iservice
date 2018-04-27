<?php

class ConfigController extends Controller{

	public function actionIndex(){
		$this->render('index');
	}

//-----------------------------------RepairType--------------------------------
  public function actionRepairType(){

    $model = new RepairType();

    $this->render("RepairType",array(
      "model" => $model
    ));
  }
  public function actionRepairTypeForm($id = null){

    if(!empty($_POST["RepairType"])){

      $repairType = new RepairType();

      $id = $_POST["RepairType"]["id"];

      if(!empty($id)){
        $repairType = RepairType::model()->findByPk($id);
      }

      $repairType->_attributes = $_POST["RepairType"];

      if($repairType->save()){
        $this->redirect(array("RepairType"));
      }
    }

    $model = new RepairType();

    if(!empty($id)){
      $model = RepairType::model()->findByPk($id);
    }

    $this->render("RepairTypeForm",array(
      "model" => $model
    ));
  }

  public function actionRepairTypeDelete($id){

    RepairType::model()->deleteByPk($id);
    $this->redirect(array("RepairType"));
  }

//-----------------------------------ProjectType--------------------------------
	function actionProjectType(){
		$model = new ProjectType();
		$this->render("ProjectType",array(
			"model" => $model
		));
	}

	function actionProjectTypeForm($id = null){
		if(!empty($_POST["ProjectType"])){
			$model = new ProjectType();
			$id = $_POST["ProjectType"]["id"];

			if(!empty($id)){
				$model = ProjectType::model()->findByPk($id);
			}
			$model->_attributes = $_POST["ProjectType"];

			if($model->save()){
				$this->redirect(array("ProjectType"));
			}
		}

		$model = new ProjectType();

		if(!empty($id)){
			$model = ProjectType::model()->findByPk($id);
		}
		$this->render("ProjectTypeForm",array(
			"model" => $model
		));
	}

	function actionProjectTypeDelete($id){
		ProjectType::model()->deleteByPk($id);
		$this->redirect(array("ProjectType"));
	}

//-----------------------------------ProjectType--------------------------------
	function actionDeviceType(){
		$model = new DeviceType();
		$this->render("DeviceType",array(
			"model" => $model
		));
	}

	function actionDeviceTypeForm($id = null){
		if(!empty($_POST["DeviceType"])){
			$model = new DeviceType();
			$id = $_POST["DeviceType"]["id"];

			if(!empty($id)){
				$model = DeviceType::model()->findByPk($id);
			}
			$model->_attributes = $_POST["DeviceType"];

			if($model->save()){
				$this->redirect(array("DeviceType"));
			}
		}

		$model = new DeviceType();

		if(!empty($id)){
			$model = DeviceType::model()->findByPk($id);
		}
		$this->render("DeviceTypeForm",array(
			"model" => $model
		));
	}

	function actionDeviceTypeDelete($id){
		DeviceType::model()->deleteByPk($id);
		$this->redirect(array("DeviceType"));
	}

//-----------------------------------GroupSetting--------------------------------
	function actionGroupSetting(){
		$model = new GroupSetting();
		$this->render("GroupSetting",array(
			"model" => $model
		));
	}

	function actionGroupSettingForm($id = null){
		if(!empty($_POST["GroupSetting"])){
			$model = new GroupSetting();
			$id = $_POST["GroupSetting"]["id"];

			if(!empty($id)){
				$model = GroupSetting::model()->findByPk($id);
			}
			$model->_attributes = $_POST["GroupSetting"];

			if($model->save()){
				$this->redirect(array("GroupSetting"));
			}
		}

		$model = new GroupSetting();

		if(!empty($id)){
			$model = GroupSetting::model()->findByPk($id);
		}
		$this->render("GroupSettingForm",array(
			"model" => $model
		));
	}

	function actionGroupSettingDelete($id){
		GroupSetting::model()->deleteByPk($id);
		$this->redirect(array("GroupSetting"));
	}

//-----------------------------------GroupSetting--------------------------------
	function actionEmployee(){
		$model = new Employee();
		$this->render("Employee",array(
			"model" => $model
		));
	}
//-----------------------------------EmployeeView--------------------------------
	function actionEmployeeView($id){
		$model = Employee::model()->findByPk($id);
		$this->render("EmployeeView",array(
			"model" => $model
		));
	}
	public function actionEmployeeDelete($id){

    Employee::model()->deleteByPk($id);
    $this->redirect(array("Config/Employee"));
  }
}
?>

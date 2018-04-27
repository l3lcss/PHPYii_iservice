<?php
  class DeviceType extends CActiveRecord{

    public static function model($className = __CLASS__){
      return parent::model($className);
    }

    public function tableName(){
      return "device_types";
    }

    public function attributeLabels(){
      return array(
        "id" => "id",
        "device_type_name" => "ประเภทวัสดุ/อุปกรณ"
      );
    }

    public function search(){
      $criteria = new CDbCriteria;
      return new CActiveDataProvider($this,array(
        'criteria' => $criteria,
      ));
    }

    public static function getOptions(){
      $model = DeviceType::model()->findAll();
      $arr = array();

      foreach($model as $r){
        $arr[$r->id] = $r->device_type_name;
      }
      return $arr;
    }
  }
 ?>

<?php
  class GroupSetting extends CActiveRecord{

    public static function model($className = __CLASS__){
      return parent::model($className);
    }

    public function tableName(){
      return "groups";
    }

    public function attributeLabels(){
      return array(
        "id" => "id",
        "group_name" => "ชื่อฝ่าย",
        "group_id" => "รหัสฝ่าย"
      );
    }

    public function search(){
      $criteria = new CDbCriteria;
      return new CActiveDataProvider($this,array(
        'criteria' => $criteria,
      ));
    }

    public static function getOptions() {
        $model = GroupSetting::model()->findAll();
        $arr = array();

        foreach ($model as $r) {
            $arr[$r->id] = $r->group_name;
        }
        return $arr;
    }
  }
 ?>

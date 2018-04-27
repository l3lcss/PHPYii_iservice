<?php
  class Device extends CActiveRecord{

    public static function model($className = __CLASS__){
      return parent::model($className);
    }

    public function tableName(){
      return "devices";
    }

    public function attributeLabels(){
      return array(
        "device_type_id" => "ประเภทวัสดุ/อุปกรณ์",
        "device_name" => "ชื่อ",
        "device_brand_name" => "ยี่ห้อ",
        "device_code" => "code",
        "device_price" => "ราคาซื้อ",
      );
    }

    public function relations(){
      return array(
        "device_types" => array(self::BELONGS_TO,"Device_Types","device_type_id")
      );
    }
  }
 ?>

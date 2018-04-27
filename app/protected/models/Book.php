<?php
  class Book extends CActiveRecord{

    public static function model($className = __CLASS__){
      return parent::model($className);
    }

    public function tableName(){
      return "book";
    }

    public function attributeLabels(){
      return array(
        "id"=>"รหัส",
        "book_name"=>"ชื่อหนังสือ",
        "price"=>"ราคา"
      );
    }


  }
 ?>

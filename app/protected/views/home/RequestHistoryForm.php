<div class="panel">
  <?php echo $this->beginContent("/home/toolbar", array("current" => 2)); ?>
  <?php echo $this->endContent(); ?>

  <div class="panel_body">
    <?php
      $form = $this->beginWidget('CActiveForm', array(
        'id' => 'request-form',
        'enableAjaxValidation' => false
      ));
     ?>
     <div>
       <?php echo $form->labelEx($model, "device_id"); ?>
       <?php echo $form->textField($model, "device_id",array(
         "disabled" => "disabled",
         "size" => 100,
         "value" => $model->device->device_brand_name." ".$model->device->device_name
       )); ?>
     </div>

     <div>
       <?php echo $form->labelEx($model, "employee_id"); ?>
       <?php echo $form->textField($model, "employee_id",array(
         "disabled" => "disabled",
         "size" => 100,
         "value" => $model->employee->employee_fname." ".$model->employee->employee_lname
       )); ?>
     </div>

     <div>
       <?php echo $form->labelEx($model, "request_problem"); ?>
       <?php echo $form->textField($model, "request_problem",array(
         "disabled" => "disabled",
         "size" => 150
       )); ?>
     </div>

     <div>
       <?php echo $form->labelEx($model, "request_detail"); ?>
       <?php echo $form->textField($model, "request_detail",array(
         "disabled" => "disabled",
         "size" => 150
       )); ?>
     </div>

     <div>
       <?php echo $form->labelEx($model, "request_created_date"); ?>
       <?php echo $form->textField($model, "request_created_date",array(
         "disabled" => "disabled",
         "size" => 50
       )); ?>
     </div>

     <div>
       <?php echo $form->labelEx($model, "request_get_date"); ?>
       <?php echo $form->textField($model, "request_get_date",array(
         "disabled" => "disabled",
         "size" => 50
       )); ?>
     </div>

     <div>
       <?php echo $form->labelEx($model, "request_start_repair_date"); ?>
       <?php echo $form->textField($model, "request_start_repair_date",array(
         "disabled" => "disabled",
         "size" => 50
       )); ?>
     </div>

     <div>
       <?php echo $form->labelEx($model, "request_end_repair_date"); ?>
       <?php echo $form->textField($model, "request_end_repair_date",array(
         "disabled" => "disabled",
         "size" => 50
       )); ?>
     </div>

     <div>
       <?php echo $form->labelEx($model, "request_answer"); ?>
       <?php echo $form->textField($model, "request_answer",array(
         "disabled" => "disabled",
         "cols" => 150,
         "rows" => 5
       )); ?>
     </div>

     <div>
       <?php echo $form->labelEx($model, "request_repair_detail_work"); ?>
       <?php echo $form->textField($model, "request_repair_detail_work",array(
         "disabled" => "disabled",
         "cols" => 150,
         "rows" => 5
       )); ?>
     </div>

     <div>
       <?php echo $form->labelEx($model, "request_remark"); ?>
       <?php echo $form->textField($model, "request_remark",array(
         "disabled" => "disabled",
         "cols" => 150,
         "rows" => 5
       )); ?>
     </div>

     <div>
       <?php echo $form->labelEx($model, "request_status"); ?>
       <?php echo $form->textField($model, "request_status",array(
         "disabled" => "disabled",
         "size" => 30,
         "value" => $model->getRequestStatus($model, null)
       )); ?>
     </div>

     <?php echo $form->hiddenField($model, "id"); ?>
     <?php $this->endWidget(); ?>

  </div>
</div>

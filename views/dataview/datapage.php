<html>
 <head>
 <title>CodeIgniter Tutorial</title>
 </head>
 <body>
 <?php
 $this->load->model('Db_model');
 $testquery = $this->Db_model->get_Data(1);
 print_r($testquery);
 $query = $this->Db_model->get_Data();
 foreach ($query as $data_item){
    // you can access the data_items of your database table through $data_item[‘name of your column’
    ?>
    <div class="card">
        <h5 class="card-header"><?php echo $data_item['name']?></h5>
        <div class="card-body">
        <p class="card-text"><?php echo $data_item['content']?></p>
    </div>
<?php
}?>

</div>
</body>
 
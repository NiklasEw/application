<html>
 <head>
 <title>CodeIgniter Tutorial</title>
 </head>
 <body>
 <script>
    $(document).ready(function(e){

        $("#submit").click(function(){
            $.ajax({
                type:"POST",
                url: "<?php echo site_url('db/create');?>",
                data:$("#myForm").serialize(),
                success: function (response) {

                    $("#myForm").trigger("reset");
                    window.location.reload();


                }
            });
        });
    });
</script>

 <?php
    foreach ($query as $data_item){
        // you can access the data_items of your database table through $data_item[‘name of your column’
        ?>
        <div class="card">
            <?php if($data_item['rating']<4){?>
                <h5 class="card-header bg-danger"><?php echo $data_item['name'].' '.$data_item['rating'].'/10★'?></h5>
            <?php } elseif($data_item['rating']>7){?>
                <h5 class="card-header bg-success"><?php echo $data_item['name'].' '.$data_item['rating'].'/10★'?></h5>
            <?php } else{?>
                <h5 class="card-header bg-warning"><?php echo $data_item['name'].' '.$data_item['rating'].'/10★'?></h5>
            <?php } ?>
        </div>
        <div class="card-body">
            <p class="card-text text-muted "><?php echo $data_item['content']?></p>
        </div>
<?php } ?>

<div class="container">
    <form id="myForm">
        <div class="form-group">
            <label for="exampleFormControlInput1">Email address</label>
            <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Max Mustermann" name="name">
        </div>
        <div class="form-group">
            <label for="exampleFormControlTextarea1">Example textarea</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="content"></textarea>
        </div>
        <button id="submit" type="button" class="btn btn-primary">Submit</button>
        <div class="form-group">
            <label for="rating">Sterne</label>
            <select id="rating" class="form-control" name="rating">
            <option selected>10</option>
            <option>9</option>
            <option>8</option>
            <option>7</option>
            <option>6</option>
            <option>5</option>
            <option>4</option>
            <option>3</option>
            <option>2</option>
            <option>1</option>
            </select>
        </div>
    </form>
</div>
</body>
 
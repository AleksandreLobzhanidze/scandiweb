<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="app.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>

    <?php 
        include 'db.php';
        include 'controller.php';
        $showUser = new Show();
        $as = $showUser->showUser();
    ?>
    <form action="process.php" method="post">
        <div class="container">
            <div class="app border-bottom border-dark">
                <div class="headIndex"  style="margin-bottom:10px">
                    <h2 class="header">Product List</h2>
                    <button type="submit" class="btn btn-danger index-buttons" id="delete-product-btn-all" name="deleteAll">Mass Delete</button>
                    <button type="submit" class="btn btn-danger index-buttons" id="delete-product-btn" name="delete">Delete Product</button>
             
                    <a href="addproduct.php"><button type="button" class="btn btn-success index-buttons" style="margin-right:10px">ADD</button></a>
                    </div>
                </div>    
            </div>
        </div>
    
        <div class="container">
            <div class="appBody mt-2 d-flex" style="flex-wrap: wrap">
            <?php for($i = 0; $i < count($as); $i++): ?>
                <div class="product border border-dark">
                    <input type="checkbox" id="check" name="check[]" onclick="test(event)" value="<?php echo $as[$i]['id']; ?>" style="margin-left: 10px">
                    <div class="product-info row justify-content-center" style="text-align: center">
                        <p><?php echo($as[$i]['sku']);?></p>
                        <p><?php echo($as[$i]['name']);?></p>
                        <p><?php echo($as[$i]['price']." $");?></p>
                        <?php if($as[$i]['type'] === 'dvd') : ?>
                        <p><?php echo("Size: ".$as[$i]['mb']."MB");?></p>
                        <?php elseif($as[$i]['type'] === 'book') : ?>
                        <p><?php echo("Weight: ".$as[$i]['kg']."KG");?></p>
                        <?php elseif($as[$i]['type'] === 'furniture'): ?>
                        <p><?php echo($as[$i]['height']."x".$as[$i]['width']."x".$as[$i]['length']);?></p>
                        <?php endif; ?>
                    </div>
                </div> 
            <?php endfor; ?>
            </div>
        </div>
    </form>
    <script src="main.js"></script>
</body>
</html>
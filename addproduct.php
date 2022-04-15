<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Product</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="app.css" rel="stylesheet">
</head>
<body>
    <form action="process.php" method="POST">
        <div class="container">
            <div class="app border-bottom border-dark">
                <div class="headIndex"  style="margin-bottom:10px">
                    <h2 class="header">Product Add</h2>
                    <a href="index.php"><button type="button" class="btn btn-danger index-buttons" name="cancel">Cancel</button></a>
                    <button type="submit" class="btn btn-success index-buttons" name="save" style="margin-right:10px">Save</button>
                </div>
            </div>    
        </div>
        <div class="container" style="margin-top: 10px;">
            <div class="form-group">
                <label>SKU</label>
                <input style="margin-left: 13px" type="text" name="sku">
            </div>

            <div class="form-group" style="margin-top: 10px">
                <label>Name</label>
                <input type="text"  name="name">
            </div>

            <div class="form-group " style="margin-top: 10px">
                <label>Price</label>
                <input style="margin-left: 8px" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" maxLength="10" type="number" name="price">
            </div>

            <label style="margin-top: 10px;" >Type Switcher</label>
                <select name="select" onchange="addinputs(this.value)" id="productType">
                    <option value="select">Select Type</option>
                    <option value="dvd" name="dvd">DVD</option>
                    <option value="book" name="book">Book</option>
                    <option value="furniture" name="furniture">Furniture</option>
                </select>
                <br><br>
            <div class="form-group" style="width: 400px; height: 300px;" id="productInputs"></div>
        </div>
    </form>

    <script src="main.js"></script>
</body>
</html>
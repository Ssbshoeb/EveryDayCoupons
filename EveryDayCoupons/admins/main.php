
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/818fd82820.js" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="media.css">
    <link rel="stylesheet" href="style.css">
    <title>WE BUILD</title>
</head>

<?php 
include('../navbar/index.php')
?>
<div class="addproduct"> 
    <div class="container forline">
        <div class="row justify-content-center" style=background:>
            <div class="col-md-6 mt-5 rounded">
                <h2 class='text-center p-2'>
                    Add Product Information
                </h2>
                <form action='add.php' method='post' class='p-2' enctype='multipart/form-data' id='form-box'>
                    <label for="cars">Choose product category:</label>
                    <select id="cars" name="cars">
                        <option value="coupons">Coupon</option>
                        <option value="bestseller">BestSellers</option>
                        <option value="under500">Under 500</option>
                        <option value="ecommerce">Ecommerce</option>
                        <option value="education">Education</option>
                    </select>
                    <div class="form-group">
                        <input type='text' name='coupon_name' class='form-control' placeholder='Product Name' required>
                    </div>
                    <div class="form-group mt-3">
                        <input type='text' name='coupon_price' class='form-control' placeholder='Product price'
                            required>
                    </div>
                    <div class="form-group mt-3">
                        <div class="custom-file">
                            <!-- <label for="" class='custom-file-label'>Choose Product Image</label> -->   
                            <input type='file' name='coupon_image' class='form-control' id='customFile' required>

                        </div>
                    </div>

                    <div class="form-group mt-3 ">
                        <input type='submit' name='submit' class='btn btn-danger btn-block buttonsubmit' value='add'
                            style=width:100%>
                    </div>
                    <div class="form-group">
                        <h4 class='teXT-center'></h4>
                    </div>
                </form>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-6 bg-light rounded">
                    <a href="index.php" style=width:100% class='btn btn-warning btn-block btn-lg'>Go to Home page</a>
                </div>
            </div>
        </div>
    </div>
    <br>
    <br>
    <div class="orderyet">
      <h2>Orders</h2>
    </div>
    <hr>

    <table class="table">
        <thead class="text-center">
            <tr>
                <th scope="col">id</th>
                <th scope="col">cname</th>

                <th scope="col">clastname</th>
                <th scope="col">companyname</th>
                <th scope="col">number</th>
                <th scope="col">email</th>
                <th scope="col">country</th>
                <th scope="col">address</th>
                <th scope="col">city</th>
                <th scope="col">state</th>
                <th scope="col">zipcode</th>
                <th scope="col">product_name</th>
                <th scope="col">product_price</th>
                <th scope="col"></th>


            </tr>
        </thead>
        <tbody>
            <?php
$servername = 'localhost:4306';
$username = 'root';
$password = '';
$dbname = 'orderdb';
$conn = mysqli_connect($servername, $username, $password,$dbname);
$sql = "SELECT * FROM  orderdetails";
$result = mysqli_query($conn,$sql);

?>
            <?php 

while($row=mysqli_fetch_array($result)){
  
?>

            <tr>
                <td><?=$row['id'] ?></td>
                <td><?=$row['cname'] ?></td>
                <td><?= $row['clastname'] ?></td>
                <td><?= $row['companyname'] ?></td>
                <td><?= $row['number'] ?></td>
                <td><?= $row['email'] ?></td>
                <td><?= $row['country'] ?></td>
                <td><?= $row['address'] ?></td>
                <td><?= $row['city'] ?></td>
                <td><?= $row['state'] ?></td>
                <td><?= $row['zipcode'] ?></td>
                <td><?= $row['product_name'] ?></td>
                <td><?= $row['product_price'] ?></td>
               

                <td>
                    <a href="delete.php?id=<?php echo $row['id']; ?>"><button name=''
                            class='btn btn-sm btn-outline-danger'>REMOVE</button></a>

                    </form>
                </td>
                <td>

                    <input type='hidden' value='$value[product_id]'>
                </td>


            </tr>

            <?php
  }
?>
        </tbody>
    </table>
   
    </div>

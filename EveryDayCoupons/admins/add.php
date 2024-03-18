<?php 
include('insert.php');
$msg = '';
if(isset($_POST['submit'])){
   $coupons_name=$_POST['coupon_name'];
   $coupons_price=$_POST['coupon_price'];
   $_SESSION['ADD'] = ' ';  //to run my if statement which is in mian.php
//    $car_name = $_POST['cars'];
   $target_dir="../images/";
   $target_file=$target_dir.basename($_FILES['coupon_image']['name']); //its means images/which ever is select from input and its name is equal to $targer file
   move_uploaded_file($_FILES['coupon_image']['tmp_name'],$target_file); //its query which upload image on images directory
   
    if($_POST['cars'] == 'coupons'){
   $sql = "INSERT INTO coupons(coupon_name,coupon_price,coupon_image) VALUE('$coupons_name','$coupons_price','$target_file')";
   mysqli_query($conn , $sql);
}
elseif ($_POST['cars'] == 'bestseller') {
   $sql = "INSERT INTO bestsellerdb(coupons_name,coupons_price,coupons_image) VALUE('$coupons_name','$coupons_price','$target_file')";
   mysqli_query($conn , $sql);
    
}
elseif ($_POST['cars'] == 'under500') {
    $sql = "INSERT INTO under500db(coupons_name,coupons_price,coupons_image) VALUE('$coupons_name','$coupons_price','$target_file')";
    mysqli_query($conn , $sql);
     
 }
 elseif ($_POST['cars'] == 'ecommerce') {
   $sql = "INSERT INTO ecommerce(coupons_name,coupons_price,coupons_image) VALUE('$coupons_name','$coupons_price','$target_file')";
   mysqli_query($conn , $sql);
    
}
elseif ($_POST['cars'] == 'education') {
   $sql = "INSERT INTO education(coupons_name,coupons_price,coupons_image) VALUE('$coupons_name','$coupons_price','$target_file')";
   mysqli_query($conn , $sql);
    
}

}

echo "<script>
window.location.href='main.php'
</script>";

?>

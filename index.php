<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin-dashboard</title>
<!-- bootsrap css link -->
 <!--  bootsratp css link -->
 <link href="	https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" 
      rel="stylesheet" 
       integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
       <!--css file-->
<link rel="stylesheet" href="../styles.css">
</head>
<body>
<!-- navbar -->
 <div class="container-fluid p-0">
    <!-- first child -->
    <nav class="navbar navbar-expand-lg navbar-light bg-info">
        <div class="container-fluid">
           <p> <img src="../images/logo.jpg" alt="" class="logo" >RAND-DEVELOPERS.</p>
            <nav class="navbar navbar-expand-lg">
<ul class="navbar-nav">
    <li class="nav-item">
        <a href="#" class="nav-link">Welcome guest</a>
    </li>

</ul>
            </nav>
        </div>
    </nav>


    <!-- second child -->
     <div class="bg-light">
<h3 class="text-center p-2">Management</h3>
     </div>

<!-- third child -->
 <div class="row">
    <div class="col-md-12 bg-secondary p-7 d-flex align-items-center">
        <div style="padding: 10px;">
            <a href="#"><img src="../images/classic-men shirt.jpg" alt="" class="admin_image"></a>
            <p class="text-light text-center">Admin Name</p>
        </div>
        <div class="button text-center">
           <a href="insert_product.php" ><button type="button" class="btn btn-primary" href="insert_products.php">Insert products</button></a>
            <button type="button" class="btn btn-warning">View products</button>
           <a href="index.php?insert_category"><button type="button" class="btn btn-success">Insert Categories</button></a>
           <button type="button" class="btn btn-danger">View categories</button>
           <a href="index.php?insert_brands"><button type="button" class="btn btn-warning">Insert Brands</button></a>
            <button type="button" class="btn btn-light">All orders</button>
            <button type="button" class="btn btn-dark">All payments</button>
            <button type="button" class="btn btn-danger">List users</button>
            <button type="button" class="btn btn-success">Log out</button>
        </div>
    </div>
 </div>

 </div>


<!--   forth child  -->
   <div class="container my-5">
    <?php
    if(isset($_GET['insert_category'])){
        include('insert_categories.php');
    }
        if(isset($_GET['insert_brand'])){
            include('insert_brands.php');
    }
    ?>
   </div>


 <!-- last child-->
 <div class="bg-info p-3 text-center footer">
    <p> <img src="../images/logo.jpg" class="logo" alt="" 
     style="background-color: aqua; color: black;">ALL RIGHTS RESERVED RAND-DEVELOPERS @2024 </u>
   </div>
   </div>
    

<!-- bootsrap js link -->
 <!-- boostrap js link -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
 integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" 
 crossorigin="anonymous">
</script>
</body>
</html>
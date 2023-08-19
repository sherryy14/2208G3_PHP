<?php
include 'header.php';

// $dataPoints = array( 
// 	array("label"=>"Industrial", "y"=>51.7),
// 	array("label"=>"Transportation", "y"=>26.6),
// 	array("label"=>"Residential", "y"=>13.9),
// 	array("label"=>"Commercial", "y"=>7.8)
// );
$query = "SELECT Product_Name AS label, Price1 AS y FROM products ORDER BY Price1 DESC";

$result = mysqli_query($conn, $query);

$dataPoints = array();
while ($row = mysqli_fetch_assoc($result)) {
    $dataPoints[] = $row;
}
$dataPoints1 = array(
	array("x" => 946665000000, "y" => 3289000),
	array("x" => 978287400000, "y" => 3830000),
	array("x" => 1009823400000, "y" => 2009000),
	array("x" => 1041359400000, "y" => 2840000),
	array("x" => 1072895400000, "y" => 2396000),
	array("x" => 1104517800000, "y" => 1613000),
	array("x" => 1136053800000, "y" => 1821000),
	array("x" => 1167589800000, "y" => 2000000),
	array("x" => 1199125800000, "y" => 1397000),
	array("x" => 1230748200000, "y" => 2506000),
	array("x" => 1262284200000, "y" => 6704000),
	array("x" => 1293820200000, "y" => 5704000),
	array("x" => 1325356200000, "y" => 4009000),
	array("x" => 1356978600000, "y" => 3026000),
	array("x" => 1388514600000, "y" => 2394000),
	array("x" => 1420050600000, "y" => 1872000),
	array("x" => 1451586600000, "y" => 2140000)
 );
?>


    

            <!-- main wrapper -->
            <main class="main-content-wrapper">
                <section class="container">
                    <!-- row -->
                    <div class="row mb-8">
                        <div class="col-md-12">
                            <!-- card -->
                            <div class="card bg-light border-0 rounded-4"
                                style="background-image: url(assets/images/slider/slider-image-1.jpg); background-repeat: no-repeat; background-size: cover; background-position: right;">
                                <div class="card-body p-lg-12">
                                    <h1>Welcome back! FreshCart
                                    </h1>
                                    <p>FreshCart is simple & clean design for developer and
                                        designer.</p>
                                    <a href="add-product.php" class="btn btn-primary">
                                       Add Products
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- table -->
                 
                        <div class="row">
                            <div class="col-lg-4 col-12 mb-6">
                                <!-- card -->
                                <div class="card h-100 card-lg">
                                    <!-- card body -->
                                    <div class="card-body p-6">
                                        <!-- heading -->
                                        <div class="d-flex justify-content-between align-items-center mb-6">
                                            <div>
                                                <h4 class="mb-0 fs-5">Total products</h4>
                                            </div>
                                            <div
                                                class="icon-shape icon-md bg-light-danger text-dark-danger rounded-circle">
                                                <i class="bi bi-currency-dollar fs-5"></i>
                                            </div>
                                        </div>
                                        <!-- project number -->
                                        <div class="lh-1">
                                        <?php 
                    $fetch1 = "SELECT * FROM `products` ";
                    $result1 = mysqli_query($conn,$fetch1);
                    ?>
                                            <h1 class=" mb-2 fw-bold fs-2"><?php echo mysqli_num_rows($result1)?></h1>
                                            <span>Products Availabe</span>
                                        </div>
                                    </div>


                                </div>
                            </div>
                            <div class="col-lg-4 col-12 mb-6">
                                <!-- card -->
                                <div class="card h-100 card-lg">
                                    <!-- card body -->
                                    <div class="card-body p-6">
                                        <!-- heading -->
                                        <div class="d-flex justify-content-between align-items-center mb-6">
                                            <div>
                                                <h4 class="mb-0 fs-5">Total Category</h4>
                                            </div>
                                            <div
                                                class="icon-shape icon-md bg-light-danger text-dark-danger rounded-circle">
                                                <i class="bi bi-currency-dollar fs-5"></i>
                                            </div>
                                        </div>
                                        <!-- project number -->
                                        <div class="lh-1">
                                        <?php 
                    $fetch2 = "SELECT * FROM `category` ";
                    $result2 = mysqli_query($conn,$fetch2);
                    ?>
                                            <h1 class=" mb-2 fw-bold fs-2"><?php echo mysqli_num_rows($result2)?></h1>
                                           <span>Categories Availabe</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-12 mb-6">
                                <!-- card -->
                                <div class="card h-100 card-lg">
                                    <!-- card body -->
                                    <div class="card-body p-6">
                                        <!-- heading -->
                                        <div class="d-flex justify-content-between align-items-center mb-6">
                                            <div>
                                                <h4 class="mb-0 fs-5">Customers</h4>
                                            </div>
                                            <div
                                                class="icon-shape icon-md bg-light-danger text-dark-danger rounded-circle">
                                                <i class="bi bi-currency-dollar fs-5"></i>
                                            </div>
                                        </div>
                                        <!-- project number -->
                                        <div class="lh-1">
                                        <?php 
                    $fetch3 = "SELECT * FROM `signup_web` ";
                    $result3 = mysqli_query($conn,$fetch3);
                    ?>
                                            <h1 class=" mb-2 fw-bold fs-2"><?php echo mysqli_num_rows($result3)?></h1>
                                            <span>User Signup to our website</span>
                                           
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                   
                    <!-- row -->
                    <div class="row ">
                       
                        <div class="col">
                            <!-- card -->
                            <div class="card h-100 card-lg">
                                <!-- card body -->
                                <div class="card-body">
                   
                   <div id="chartContainer" style="height: 370px; width: 100%;"></div>
                   <script>
window.onload = function() {
 
var chart = new CanvasJS.Chart("chartContainer", {
	animationEnabled: true,
	title:{
		text: "Products "
	},
	axisY: {
		title: "Revenue (in USD)",
		includeZero: true,
		prefix: "$",
		suffix:  "k"
	},
	data: [{
		type: "bar",
		yValueFormatString: "$#,##0K",
		indexLabel: "{y}",
		indexLabelPlacement: "inside",
		indexLabelFontWeight: "bolder",
		indexLabelFontColor: "white",
		dataPoints: <?php echo json_encode($dataPoints, JSON_NUMERIC_CHECK); ?>
	}]
});
chart.render();
 
}
</script>
                </div>
              </div>
                            </div>
                        </div>

                    </div>
                    <!-- row -->
                    <div class="row ">
                        <div class="col-xl-6 col-lg-6 col-md-12 col-12 mb-6">
                            <!-- card -->
                            <div class="card h-100 card-lg">
                                <!-- card body -->
                                <div class="card-body p-6">
                                    <h3 class="mb-0 fs-5">Sales Overview </h3>
                                    <div class="mt-6">
                                        <!-- text -->
                                        <div class="mb-5">
                                            <div class="d-flex align-items-center justify-content-between">
                                                <h5 class="fs-6">Total Profit</h5>
                                                <span><span class="me-1 text-dark">$1,619</span> (8.6%)</span>
                                            </div>
                                            <!-- main wrapper -->
                                            <div>
                                                <!-- progressbar -->
                                                <div class="progress bg-light-primary" style="height: 6px;">
                                                    <div class="progress-bar bg-primary" role="progressbar"
                                                        aria-label="Example 1px high" style="width: 25%;"
                                                        aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mb-5">
                                            <!-- text -->
                                            <div class="d-flex align-items-center justify-content-between">
                                                <h5 class="fs-6">Total Income</h5>
                                                <span><span class="me-1 text-dark">$3,571</span> (86.4%)</span>
                                            </div>
                                            <div>
                                                <!-- progressbar -->
                                                <div class="progress bg-info-soft" style="height: 6px;">
                                                    <div class="progress-bar bg-info" role="progressbar"
                                                        aria-label="Example 1px high" style="width: 88%;"
                                                        aria-valuenow="88" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div>
                                            <!-- text -->
                                            <div class="d-flex align-items-center justify-content-between">
                                                <h5 class="fs-6">Total Expenses</h5>
                                                <span><span class="me-1 text-dark">$3,430</span> (74.5%)</span>
                                            </div>
                                            <div>
                                                <!-- progressbar -->
                                                <div class="progress bg-light-danger" style="height: 6px;">
                                                    <div class="progress-bar bg-danger" role="progressbar"
                                                        aria-label="Example 1px high" style="width: 45%;"
                                                        aria-valuenow="45" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-12 col-12 mb-6">
                            <div class=" position-relative h-100">
                                <!-- card -->
                                <div class="card card-lg mb-6">
                                    <!-- card body -->
                                    <div class="card-body px-6 py-8">
                                        <div class="d-flex align-items-center">
                                            <div>
                                                <!-- svg -->
                                                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32"
                                                    fill="currentColor" class="bi bi-bell text-warning"
                                                    viewBox="0 0 16 16">
                                                    <path
                                                        d="M8 16a2 2 0 0 0 2-2H6a2 2 0 0 0 2 2zM8 1.918l-.797.161A4.002 4.002 0 0 0 4 6c0 .628-.134 2.197-.459 3.742-.16.767-.376 1.566-.663 2.258h10.244c-.287-.692-.502-1.49-.663-2.258C12.134 8.197 12 6.628 12 6a4.002 4.002 0 0 0-3.203-3.92L8 1.917zM14.22 12c.223.447.481.801.78 1H1c.299-.199.557-.553.78-1C2.68 10.2 3 6.88 3 6c0-2.42 1.72-4.44 4.005-4.901a1 1 0 1 1 1.99 0A5.002 5.002 0 0 1 13 6c0 .88.32 4.2 1.22 6z" />
                                                </svg>
                                            </div>
                                            <!-- text -->
                                            <div class="ms-4">
                                                <h5 class="mb-1">Start your day with New Notification.</h5>
                                                <p class="mb-0">You have <a class="link-info" href="#!">2 new
                                                        notification</a></p>
                                            </div>

                                        </div>



                                    </div>
                                </div>
                                <!-- card -->
                                <div class="card card-lg">
                                    <!-- card body -->
                                    <div class="card-body px-6 py-8">
                                        <div class="d-flex align-items-center">
                                            <!-- svg -->
                                            <div>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32"
                                                    fill="currentColor" class="bi bi-lightbulb text-success"
                                                    viewBox="0 0 16 16">
                                                    <path
                                                        d="M2 6a6 6 0 1 1 10.174 4.31c-.203.196-.359.4-.453.619l-.762 1.769A.5.5 0 0 1 10.5 13a.5.5 0 0 1 0 1 .5.5 0 0 1 0 1l-.224.447a1 1 0 0 1-.894.553H6.618a1 1 0 0 1-.894-.553L5.5 15a.5.5 0 0 1 0-1 .5.5 0 0 1 0-1 .5.5 0 0 1-.46-.302l-.761-1.77a1.964 1.964 0 0 0-.453-.618A5.984 5.984 0 0 1 2 6zm6-5a5 5 0 0 0-3.479 8.592c.263.254.514.564.676.941L5.83 12h4.342l.632-1.467c.162-.377.413-.687.676-.941A5 5 0 0 0 8 1z" />
                                                </svg>
                                            </div>
                                            <!-- text -->
                                            <div class="ms-4">
                                                <h5 class="mb-1">Monitor your Sales and Profitability</h5>
                                                <p class="mb-0"> <a class="link-info" href="#!">View Performance</a></p>
                                            </div>

                                        </div>



                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- row -->
                    <div class="row ">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-12 mb-6">
                            <div class="card h-100 card-lg">
                                <!-- heading -->
                                <div class="p-6">
                                    <h3 class="mb-0 fs-5">Recently Added Products</h3>
                                </div>
                                <div class="card mt-4">
          <div class="card-body">
            <div class="product-table">
            <div class="table-responsive white-space-nowrap">
                 <table class="table align-middle">
                  <thead class="table-light">
                    <tr>
                    
                    <th>Span</th>
                        <th>Image</th>
                        <th>Image2</th>
                        <th>Image3</th>
                        <th>Image4</th>
                        <th>Proudct Name</th>
                        <th>Product Description</th>
                        <th> Parent Category</th>
                        <th>Rating</th>
                        <th>New Price</th>
                        <th> Old Price</th>
                        <th>Stock</th>
                        <th>Create at</th>
                        <th>Popular</th>
                        <th>Best Sells</th>
                        <th>Action</th>
                    </tr>
                   </thead>
                   <tbody>
                    <?php 
                   
                   $fetch = "SELECT * FROM `products` AS p JOIN `parent_category` AS pc ON p.Parent_Category2 = pc.p_cid  ORDER BY pid desc LIMIT 5 ";
              $presult = mysqli_query($conn, $fetch);

              while ($prow = mysqli_fetch_array($presult)) {


              ?>
                      <tr>
                      <td><?php echo $prow['span_p'] ?></td>
                        <td>
                       
                          <a href="#!"> <img src="./assets/images/products/<?php echo $prow['Image'] ?>" alt=""
                              height="30px" width="40px"></a>
                           
                        </td>
                        <td>
                          <a href="#!"> <img src="./assets/images/products/<?php echo $prow['Image2'] ?>" alt=""
                              height="30px" width="40px"></a>
                        </td>
                        <td>
                          <a href="#!"> <img src="./assets/images/products/<?php echo $prow['Image3'] ?>" alt=""
                              height="30px" width="40px"></a>
                        </td>
                        <td>
                          <a href="#!"> <img src="./assets/images/products/<?php echo $prow['Image4'] ?>" alt=""
                              height="30px" width="40px"></a>
                        </td>
                        
                        <td><a href="#" class="text-reset"><?php echo $prow['Product_Name'] ?></a></td>
                        <td><a href="#" class="text-reset"><?php echo $prow['Product_Description'] ?></a></td>
                        <td><?php echo $prow['Parent_Categor_Name'] ?></td>
                        <td><?php echo $prow['rating'] ?></td>

                     
                        <td><?php echo $prow['Price1'] ?></td>
                        <td><?php echo $prow['Price2'] ?></td>
                        <td>
                          <span class="badge bg-light-primary text-dark-primary"><?php echo $prow['Stock'] ?></span>
                        </td>
                        <td><?php echo $prow['Create_At'] ?></td>
                        <td><?php echo $prow['Popular'] ?></td>
                        <td><?php echo $prow['Best_Sells'] ?></td>
                        <td>
                        <div>
                        <a href="update_products.php?id=<?php echo $prow['pid'];?>" class="btn btn-primary text-white">Edit</a>
                        <a href="delete_products.php?id=<?php echo $prow['pid'];?>" class="btn btn-danger text-white">Delete</a>
                        </div>
                       
                       </td>
                      </tr>
                      <?php  } ?>
                   </tbody>
                 </table>
              </div>
            </div>
          </div>
        </div>
                            </div>
                        </div>
                    </div>
                </section>
            </main>
        </div>
    </div>

  
  
    <!-- Libs JS -->
<script src="../assets/libs/jquery/dist/jquery.min.js"></script>
<script src="../assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
<script src="../assets/libs/simplebar/dist/simplebar.min.js"></script>

<!-- Theme JS -->
<script src="../assets/js/theme.min.js"></script>
    <script src="../assets/libs/apexcharts/dist/apexcharts.min.js"></script>
    <script src="../assets/js/vendors/chart.js"></script>
    <script src="https://cdn.canvasjs.com/canvasjs.min.js"></script>

</body>

<body>

<script src="https://cdn.canvasjs.com/canvasjs.min.js"></script>
</body>
 
<!-- Mirrored from freshcart.codescandy.com/dashboard/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 31 Mar 2023 10:10:46 GMT -->
</html>
<?php 
include 'header.php';

$prodCat = "SELECT count(c.cid) as y, c.cname  as label from category as c inner join products as p on c.cid = p.category group by c.cname";
$prodres = mysqli_query($conn,$prodCat);

$dataPoints = [];
while($row = mysqli_fetch_assoc($prodres)){
  array_push($dataPoints,$row);
}
$prod = "SELECT count(c.cid) as y, c.cname  as label from category as c inner join products as p on c.cid = p.category group by c.cname";
$prodresult = mysqli_query($conn,$prod);

$dataPoints = [];
while($prow = mysqli_fetch_assoc($prodresult)){
  array_push($dataPoints,$prow);
}
?>

    <!--start main content-->
     <main class="page-content">

      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-2 row-cols-xl-4 row-cols-xxl-4">
        <div class="col">
          <div class="card radius-10 border-0 border-start border-primary border-4">
            <div class="card-body">
              <div class="d-flex align-items-center">
                <div class="">
                <h5 class="mb-3">Total Products</h5>
                  <?php 
                    $fetch1 = "SELECT * FROM `products` ";
                    $result1 = mysqli_query($conn,$fetch1);

                  

    
                    ?>
             <h4 class="mb-0 text-success"><?php echo mysqli_num_rows($result1)?></h4>
                </div>
                <div class="ms-auto widget-icon bg-primary text-white">
                  <i class="bi bi-basket2-fill"></i>
                </div>
              </div>
              <div class="progress mt-3" style="height: 4.5px;">
                <div class="progress-bar" role="progressbar" style="width: 75%;" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>
          </div>
         </div>
         <div class="col">
          <div class="card radius-10 border-0 border-start border-primary border-4">
            <div class="card-body">
              <div class="d-flex align-items-center">
                <div class="">
                <h5 class="mb-3">Total Categories</h5>
                  <?php 
                    $fetch2 = "SELECT * FROM `category` ";
                    $result2 = mysqli_query($conn,$fetch2);

    
                    ?>
             <h4 class="mb-0 text-success"><?php echo mysqli_num_rows($result2)?></h4>
                </div>
                <div class="ms-auto widget-icon bg-primary text-white">
                  <i class="bi bi-basket2-fill"></i>
                </div>
              </div>
              <div class="progress mt-3" style="height: 4.5px;">
                <div class="progress-bar" role="progressbar" style="width: 75%;" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>
          </div>
         </div>
        
         <div class="col">
          <div class="card radius-10 border-0 border-start border-primary border-4">
            <div class="card-body">
              <div class="d-flex align-items-center">
                <div class="">
                <h5 class="mb-3">Total Users</h5>
                  <?php 
                    $fetch3 = "SELECT * FROM `login` ";
                    $result3 = mysqli_query($conn,$fetch3);

    
                    ?>
             <h4 class="mb-0 text-success"><?php echo mysqli_num_rows($result3)?></h4>
                </div>
                <div class="ms-auto widget-icon bg-primary text-white">
                  <i class="bi bi-basket2-fill"></i>
                </div>
              </div>
              <div class="progress mt-3" style="height: 4.5px;">
                <div class="progress-bar" role="progressbar" style="width: 75%;" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>
          </div>
         </div>
      </div><!--end row-->

      
       <div class="row">
          <div class="col-lg-8">
            <div class="card">
            <div class="card-body">
                   <div id="chart2"></div>
              </div>
              <div class="card-body">
                   <div id="chart1"></div>
              </div>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="card">
             
              <div class="card-body">
              <div id="chartContainer" style="height: 370px; width: 100%;"></div>
              </div>
              <ul class="list-group list-group-flush mb-0">
                <li class="list-group-item border-top d-flex justify-content-between align-items-center bg-transparent">Mobile<span class="badge bg-success rounded-pill">25%</span>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center bg-transparent">Desktop<span class="badge bg-primary rounded-pill">65%</span>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center bg-transparent">Tablet<span class="badge bg-danger rounded-pill">10%</span>
                </li>
              </ul>
            </div>
          </div>

       </div><!--end row-->


       <div class="row">
        <div class="col-12 col-lg-6 col-xl-4 d-flex">
          <div class="card w-100">
            <div class="card-header bg-transparent">
              <div class="d-flex align-items-center">
                <div class="">
                  <h6 class="mb-0 fw-bold">Team Members</h6>
                </div>
                <div class="dropdown ms-auto">
                  <button type="button" class="btn-option dropdown-toggle dropdown-toggle-nocaret cursor-pointer" data-bs-toggle="dropdown"><i class="bi bi-three-dots fs-4"></i>
                  </button>
                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="javascript:;">Action</a>
                    </li>
                    <li><a class="dropdown-item" href="javascript:;">Another action</a>
                    </li>
                    <li>
                      <hr class="dropdown-divider">
                    </li>
                    <li><a class="dropdown-item" href="javascript:;">Something else here</a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="card-body">
              <div class="team-list">
                  <div class="d-flex align-items-center gap-3">
                    <div class="">
                      <img src="assets/images/avatars/01.png" alt="" width="50" height="50" class="rounded-circle">
                    </div>
                     <div class="flex-grow-1">
                       <h6 class="mb-1 fw-bold">John Michael</h6>
                       <span class="badge bg-success bg-success-subtle text-success border border-opacity-25 border-success">ONLINE</span>
                     </div>
                     <div class="">
                       <button class="btn btn-outline-primary rounded-5 btn-sm px-3">Add</button>
                     </div>
                  </div>
                  <hr>
                  <div class="d-flex align-items-center gap-3">
                    <div class="">
                      <img src="assets/images/avatars/02.png" alt="" width="50" height="50" class="rounded-circle">
                    </div>
                     <div class="flex-grow-1">
                       <h6 class="mb-1 fw-bold">Samantha Ivy</h6>
                       <span class="badge bg-danger-subtle text-danger border border-opacity-25 border-danger">IN MEETING</span>
                     </div>
                     <div class="">
                      <button class="btn btn-outline-primary rounded-5 btn-sm px-3">Add</button>
                     </div>
                  </div>
                  <hr>
                  <div class="d-flex align-items-center gap-3">
                    <div class="">
                      <img src="assets/images/avatars/03.png" alt="" width="50" height="50" class="rounded-circle">
                    </div>
                     <div class="flex-grow-1">
                       <h6 class="mb-1 fw-bold">Alex Smith</h6>
                       <span class="badge bg-warning-subtle text-warning border border-opacity-25 border-warning">OFFLINE</span>
                     </div>
                     <div class="">
                      <button class="btn btn-outline-primary rounded-5 btn-sm px-3">Add</button>
                     </div>
                  </div>
                  <hr>
                  <div class="d-flex align-items-center gap-3">
                    <div class="">
                      <img src="assets/images/avatars/04.png" alt="" width="50" height="50" class="rounded-circle">
                    </div>
                     <div class="flex-grow-1">
                       <h6 class="mb-1 fw-bold">Alex Smith</h6>
                       <span class="badge bg-danger-subtle text-danger border border-opacity-25 border-danger">OFFLINE</span>
                     </div>
                     <div class="">
                      <button class="btn btn-outline-primary rounded-5 btn-sm px-3">Add</button>
                     </div>
                  </div>
                  <hr>
                  <div class="d-flex align-items-center gap-3">
                    <div class="">
                      <img src="assets/images/avatars/02.png" alt="" width="50" height="50" class="rounded-circle">
                    </div>
                     <div class="flex-grow-1">
                       <h6 class="mb-1 fw-bold">Samantha</h6>
                       <span class="badge bg-success-subtle text-success border border-opacity-25 border-success">IN MEETING</span>
                     </div>
                     <div class="">
                      <button class="btn btn-outline-primary rounded-5 btn-sm px-3">Add</button>
                     </div>
                  </div>

              </div>
            </div>
          </div>
        </div>
        <div class="col-12 col-lg-6 col-xl-4 d-flex">
          <div class="card w-100">
            <div class="card-header bg-transparent">
              <div class="d-flex align-items-center">
                <div class="">
                  <h6 class="mb-0 fw-bold">To do list</h6>
                </div>
                <div class="dropdown ms-auto">
                  <button type="button" class="btn-option dropdown-toggle dropdown-toggle-nocaret cursor-pointer" data-bs-toggle="dropdown"><i class="bi bi-three-dots fs-4"></i>
                  </button>
                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="javascript:;">Action</a>
                    </li>
                    <li><a class="dropdown-item" href="javascript:;">Another action</a>
                    </li>
                    <li>
                      <hr class="dropdown-divider">
                    </li>
                    <li><a class="dropdown-item" href="javascript:;">Something else here</a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="card-body">
              <div class="team-list">
                  <div class="d-flex align-items-center gap-3 border-start border-success border-4 border-0 px-2 py-1">
                     <div class="flex-grow-1">
                       <h6 class="mb-1 fw-bold">Meeeting with John</h6>
                       <span class="">10:56 PM</span>
                     </div>
                     <div class="form-check form-switch form-check-success border-0">
                       <input class="form-check-input border-1" type="checkbox" role="switch" checked="">
                      </div>
                  </div>
                  <hr>
                  <div class="d-flex align-items-center gap-3 border-start border-danger border-4 border-0 px-2 py-1">
                    <div class="flex-grow-1">
                      <h6 class="mb-1 fw-bold">Meeeting with John</h6>
                      <span class="">10:56 PM</span>
                    </div>
                    <div class="form-check form-switch form-check-danger border-0">
                      <input class="form-check-input border-1" type="checkbox" role="switch" checked="">
                     </div>
                  </div>
                  <hr>
                  <div class="d-flex align-items-center gap-3 border-start border-primary border-4 border-0 px-2 py-1">
                    <div class="flex-grow-1">
                      <h6 class="mb-1 fw-bold">Meeeting with John</h6>
                      <span class="">10:56 PM</span>
                    </div>
                    <div class="form-check form-switch form-check-primary border-0">
                      <input class="form-check-input border-1" type="checkbox" role="switch" checked="">
                     </div>
                  </div>
                  <hr>
                  <div class="d-flex align-items-center gap-3 border-start border-warning border-4 border-0 px-2 py-1">
                    <div class="flex-grow-1">
                      <h6 class="mb-1 fw-bold">Meeeting with John</h6>
                      <span class="">10:56 PM</span>
                    </div>
                    <div class="form-check form-switch form-check-warning border-0">
                      <input class="form-check-input border-1" type="checkbox" role="switch" checked="">
                     </div>
                  </div>
                  <hr>
                  <div class="d-flex align-items-center gap-3 border-start border-info border-4 border-0 px-2 py-1">
                    <div class="flex-grow-1">
                      <h6 class="mb-1 fw-bold">Meeeting with John</h6>
                      <span class="">10:56 PM</span>
                    </div>
                    <div class="form-check form-switch form-check-info border-0">
                      <input class="form-check-input border-1" type="checkbox" role="switch" checked="">
                     </div>
                  </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-12 col-lg-12 col-xl-4 d-flex">
          <div class="card w-100">
            <div class="card-header bg-transparent">
              <div class="d-flex align-items-center">
                <div class="">
                  <h6 class="mb-0 fw-bold">Projects</h6>
                </div>
                <div class="dropdown ms-auto">
                  <button type="button" class="btn-option dropdown-toggle dropdown-toggle-nocaret cursor-pointer" data-bs-toggle="dropdown"><i class="bi bi-three-dots fs-4"></i>
                  </button>
                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="javascript:;">Action</a>
                    </li>
                    <li><a class="dropdown-item" href="javascript:;">Another action</a>
                    </li>
                    <li>
                      <hr class="dropdown-divider">
                    </li>
                    <li><a class="dropdown-item" href="javascript:;">Something else here</a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="card-body">
              <div class="team-list">
                  <div class="d-flex align-items-center gap-3">
                    <div class="widget-icon bg-transparent border rounded-3">
                      <img src="assets/images/icons/apple.png" alt="" width="30">
                    </div>
                     <div class="flex-grow-1">
                      <p class="mb-2 fw-bold">Angular 12 Dashboard</p>
                      <div class="progress" style="height: 5px;">
                        <div class="progress-bar" role="progressbar" style="width: 75%;" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                      </div>
                  </div>
                  <hr>
                  <div class="d-flex align-items-center gap-3">
                    <div class="widget-icon bg-transparent border rounded-3">
                      <img src="assets/images/icons/bootstrap.png" alt="" width="30">
                    </div>
                     <div class="flex-grow-1">
                      <p class="mb-2 fw-bold">Angular 12 Dashboard</p>
                      <div class="progress" style="height: 5px;">
                        <div class="progress-bar" role="progressbar" style="width: 70%;" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                      </div>
                  </div>
                  <hr>
                  <div class="d-flex align-items-center gap-3">
                    <div class="widget-icon bg-transparent border rounded-3">
                      <img src="assets/images/icons/google-2.png" alt="" width="30">
                    </div>
                     <div class="flex-grow-1">
                      <p class="mb-2 fw-bold">Angular 12 Dashboard</p>
                      <div class="progress" style="height: 5px;">
                        <div class="progress-bar" role="progressbar" style="width: 65%;" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                      </div>
                  </div>
                  <hr>
                  <div class="d-flex align-items-center gap-3">
                    <div class="widget-icon bg-transparent border rounded-3">
                      <img src="assets/images/icons/spotify.png" alt="" width="30">
                    </div>
                     <div class="flex-grow-1">
                      <p class="mb-2 fw-bold">Angular 12 Dashboard</p>
                      <div class="progress" style="height: 5px;">
                        <div class="progress-bar" role="progressbar" style="width: 55%;" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                      </div>
                  </div>
                  <hr>
                  <div class="d-flex align-items-center gap-3">
                    <div class="widget-icon bg-transparent border rounded-3">
                      <img src="assets/images/icons/outlook.png" alt="" width="30">
                    </div>
                     <div class="flex-grow-1">
                      <p class="mb-2 fw-bold">Angular 12 Dashboard</p>
                      <div class="progress" style="height: 5px;">
                        <div class="progress-bar" role="progressbar" style="width: 45%;" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                      </div>
                  </div>
              </div>
            </div>
          </div>
         </div>
       </div><!--end row-->


       <div class="row">
          <div class="col-12 col-lg-12 col-xl-6">
             <div class="card">
              <div class="card-header bg-transparent">
                <div class="d-flex align-items-center">
                  <div class="">
                    <h6 class="mb-0 fw-bold">Monthly Views</h6>
                  </div>
                  <div class="dropdown ms-auto">
                    <button type="button" class="btn-option dropdown-toggle dropdown-toggle-nocaret cursor-pointer" data-bs-toggle="dropdown"><i class="bi bi-three-dots fs-4"></i>
                    </button>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="javascript:;">Action</a>
                      </li>
                      <li><a class="dropdown-item" href="javascript:;">Another action</a>
                      </li>
                      <li>
                        <hr class="dropdown-divider">
                      </li>
                      <li><a class="dropdown-item" href="javascript:;">Something else here</a>
                      </li>
                    </ul>
                  </div>
                </div>
               </div>
               <div class="card-body">
                  <div id="chart3"></div>
               </div>
             </div>
          </div>
          <div class="col-12 col-lg-12 col-xl-6">
            <div class="card">
              <div class="card-header bg-transparent">
                <div class="d-flex align-items-center">
                  <div class="">
                    <h6 class="mb-0 fw-bold">Monthly Users</h6>
                  </div>
                  <div class="dropdown ms-auto">
                    <button type="button" class="btn-option dropdown-toggle dropdown-toggle-nocaret cursor-pointer" data-bs-toggle="dropdown"><i class="bi bi-three-dots fs-4"></i>
                    </button>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="javascript:;">Action</a>
                      </li>
                      <li><a class="dropdown-item" href="javascript:;">Another action</a>
                      </li>
                      <li>
                        <hr class="dropdown-divider">
                      </li>
                      <li><a class="dropdown-item" href="javascript:;">Something else here</a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="card-body">
                <div id="chart4"></div>
              </div>
            </div>
         </div>
       </div><!--end row-->


       <div class="card mt-4">
          <div class="card-body">
            <div class="product-table">
              <div class="table-responsive white-space-nowrap">
                 <table class="table align-middle">
                  <thead class="table-light">
                    <tr>
                    
                      <th>Image</th>
                      <th>Product Name</th>
                      <th>Category</th>
                      <th>Price</th>
                      <th>Weight</th>
                      <th>Dimension</th>
                      <th>Material</th>
                      <th>Edit/Delete</th>
                    </tr>
                   </thead>
                   <tbody>
                    <?php 
                    $fetch = "SELECT * FROM `products` AS p JOIN `category` AS c ON p.category = c.cid ORDER BY id desc";
                    $result = mysqli_query($conn,$fetch);

                    while($row = mysqli_fetch_array($result)){

    
                    ?>
                    
                  
                     <tr>
                       
                       <td>
					    <div class="d-flex align-items-center gap-3">
						   <div class="product-box">
                            <img src="../mioca/assets/images/product-image/<?php echo $row['img1']?>" alt="">
                            </div>
						   
						 </div>
                       </td>
                       <td><?php echo $row['title']?></td>
                       <td><?php echo $row['cname']?></td>
                     
                     
                       <td>
                       <?php echo $row['price']?>
                       </td>
                       <td>
                       <?php echo $row['dimension']?>
                       </td>
                       <td>
                       <?php echo $row['weight']?>
                       </td>
                       <td>
                       <?php echo $row['material']?>
                       </td>
                       <td>
                        <div>
                        <a href="update.php?id=<?php echo $row['id'];?>" class="btn btn-primary text-white">Edit</a>
                        <a href="delete.php?id=<?php echo $row['id'];?>" class="btn btn-danger text-white">Delete</a>
                        </div>
                       
                       </td>
                     </tr>
                   <?php  }?>
                   </tbody>
                 </table>
              </div>
            </div>
          </div>
        </div>

        
     </main>
     <!--end main content-->
 

    <!--start overlay-->
      <div class="overlay btn-toggle-menu"></div>
    <!--end overlay-->

    <!-- Search Modal -->
    <div class="modal" id="exampleModal" tabindex="-1">
      <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
          <div class="modal-header gap-2">
            <div class="position-relative popup-search w-100">
              <input class="form-control form-control-lg ps-5 border border-3 border-primary" type="search" placeholder="Search">
              <span class="material-symbols-outlined position-absolute ms-3 translate-middle-y start-0 top-50">search</span>
            </div>
            <button type="button" class="btn-close d-xl-none" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
              <div class="search-list">
                 <p class="mb-1">Html Templates</p>
                 <div class="list-group">
                    <a href="javascript:;" class="list-group-item list-group-item-action active align-items-center d-flex gap-2"><i class="bi bi-filetype-html fs-5"></i>Best Html Templates</a>
                    <a href="javascript:;" class="list-group-item list-group-item-action align-items-center d-flex gap-2"><i class="bi bi-award fs-5"></i>Html5 Templates</a>
                    <a href="javascript:;" class="list-group-item list-group-item-action align-items-center d-flex gap-2"><i class="bi bi-box2-heart fs-5"></i>Responsive Html5 Templates</a>
                    <a href="javascript:;" class="list-group-item list-group-item-action align-items-center d-flex gap-2"><i class="bi bi-camera-video fs-5"></i>eCommerce Html Templates</a>
                 </div>
                 <p class="mb-1 mt-3">Web Designe Company</p>
                 <div class="list-group">
                    <a href="javascript:;" class="list-group-item list-group-item-action align-items-center d-flex gap-2"><i class="bi bi-chat-right-text fs-5"></i>Best Html Templates</a>
                    <a href="javascript:;" class="list-group-item list-group-item-action align-items-center d-flex gap-2"><i class="bi bi-cloud-arrow-down fs-5"></i>Html5 Templates</a>
                    <a href="javascript:;" class="list-group-item list-group-item-action align-items-center d-flex gap-2"><i class="bi bi-columns-gap fs-5"></i>Responsive Html5 Templates</a>
                    <a href="javascript:;" class="list-group-item list-group-item-action align-items-center d-flex gap-2"><i class="bi bi-collection-play fs-5"></i>eCommerce Html Templates</a>
                 </div>
                 <p class="mb-1 mt-3">Software Development</p>
                 <div class="list-group">
                    <a href="javascript:;" class="list-group-item list-group-item-action align-items-center d-flex gap-2"><i class="bi bi-cup-hot fs-5"></i>Best Html Templates</a>
                    <a href="javascript:;" class="list-group-item list-group-item-action align-items-center d-flex gap-2"><i class="bi bi-droplet fs-5"></i>Html5 Templates</a>
                    <a href="javascript:;" class="list-group-item list-group-item-action align-items-center d-flex gap-2"><i class="bi bi-exclamation-triangle fs-5"></i>Responsive Html5 Templates</a>
                    <a href="javascript:;" class="list-group-item list-group-item-action align-items-center d-flex gap-2"><i class="bi bi-eye fs-5"></i>eCommerce Html Templates</a>
                 </div>
                 <p class="mb-1 mt-3">Online Shoping Portals</p>
                 <div class="list-group">
                    <a href="javascript:;" class="list-group-item list-group-item-action align-items-center d-flex gap-2"><i class="bi bi-facebook fs-5"></i>Best Html Templates</a>
                    <a href="javascript:;" class="list-group-item list-group-item-action align-items-center d-flex gap-2"><i class="bi bi-flower2 fs-5"></i>Html5 Templates</a>
                    <a href="javascript:;" class="list-group-item list-group-item-action align-items-center d-flex gap-2"><i class="bi bi-geo-alt fs-5"></i>Responsive Html5 Templates</a>
                    <a href="javascript:;" class="list-group-item list-group-item-action align-items-center d-flex gap-2"><i class="bi bi-github fs-5"></i>eCommerce Html Templates</a>
                 </div>
              </div>
          </div>
        </div>
      </div>
    </div>


    <!--start theme customization-->
    <div class="offcanvas offcanvas-end" tabindex="-1" id="ThemeCustomizer" aria-labelledby="ThemeCustomizerLable">
      <div class="offcanvas-header border-bottom">
        <h5 class="offcanvas-title" id="ThemeCustomizerLable">Theme Customizer</h5>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>
      <div class="offcanvas-body">
        <h6 class="mb-0">Theme Variation</h6>
        <hr>
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="inlineRadioOptions" id="LightTheme" value="option1">
          <label class="form-check-label" for="LightTheme">Light</label>
        </div>
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="inlineRadioOptions" id="DarkTheme" value="option2" checked="">
          <label class="form-check-label" for="DarkTheme">Dark</label>
        </div>
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="inlineRadioOptions" id="SemiDarkTheme" value="option3">
          <label class="form-check-label" for="SemiDarkTheme">Semi Dark</label>
        </div>
        <hr>
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="inlineRadioOptions" id="MinimalTheme" value="option3">
          <label class="form-check-label" for="MinimalTheme">Minimal Theme</label>
        </div>
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="inlineRadioOptions" id="ShadowTheme" value="option4">
          <label class="form-check-label" for="ShadowTheme">Shadow Theme</label>
        </div>
       
      </div>
    </div>
    <!--end theme customization-->


   <!--plugins-->
   <script src="assets/js/jquery.min.js"></script>
   <script src="assets/plugins/perfect-scrollbar/js/perfect-scrollbar.js"></script>
   <script src="assets/plugins/metismenu/js/metisMenu.min.js"></script>
   <script src="assets/plugins/simplebar/js/simplebar.min.js"></script>
   <script src="assets/plugins/apex/apexcharts.min.js"></script>
   <script src="assets/js/index.js"></script>
    <!--BS Scripts-->
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/main.js"></script>


    <script>
window.onload = function() {
 
var chart = new CanvasJS.Chart("chartContainer", {
	theme: "dark1",
	animationEnabled: true,
	title: {
		text: "No. of Products by Category"
	},
	data: [{
		type: "doughnut",
		indexLabel: "{label} - {y}",
		yValueFormatString: "#,##0.0\"\"",
		showInLegend: true,
		legendText: "{label} : {y}",
		dataPoints: <?php echo json_encode($dataPoints, JSON_NUMERIC_CHECK); ?>
	}]
});
chart.render();
 


 
var chart2 = new CanvasJS.Chart("chartContainer1", {
	animationEnabled: true,
	theme: "light2", // "light1", "light2", "dark1", "dark2"
	title: {
		text: "Top 10 Google Play Categories - till 2017"
	},
	axisY: {
		title: "Number of Apps"
	},
	data: [{
		type: "column",
		dataPoints: <?php echo json_encode($dataPoints, JSON_NUMERIC_CHECK); ?>
	}]
});
chart2.render();
 
}

</script>
</head>
<body>

<script src="https://cdn.canvasjs.com/canvasjs.min.js"></script>


  </body>
</html>
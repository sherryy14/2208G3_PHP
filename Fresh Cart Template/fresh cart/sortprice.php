<?php

include 'config.php';

$price1 = $_POST['price1'];

$fetch = "SELECT * FROM `products` as p JOIN `parent_category`as pc ON p.Parent_Category2 = pc.p_cid     ORDER BY Price1 $price1 ";
$res = mysqli_query($conn, $fetch);

$output = '';
while ($row = mysqli_fetch_array($res)) {
    $output .= '
        <div class="col">
            <div class="card card-product">
                <div class="card-body">
                    <div class="text-center position-relative">
                        <div class="position-absolute top-0 start-0">
                            <span class="badge bg-danger">' . $row['span_p'] . '</span>
                        </div>
                        <div class="position-absolute top-0 end-0">
                            <span class="badge bg-success">' . $row['Stock'] . '</span>
                        </div>
                        <a href="#!"> <img src="./assets/images/products/' . $row['Image'] . '" class="mb-3" width="100%" height="120px"></a>
                        <div class="card-product-action">
                            <a href="discription_of_products.php?did=' . $row['p_cid'] . '"><i class="bi bi-eye" data-bs-toggle="tooltip" data-bs-html="true" title="Quick View"></i></a>
                            <a href="#!" class="btn-action" data-bs-toggle="tooltip" data-bs-html="true" title="Wishlist"><i class="bi bi-heart"></i></a>
                            <a href="#!" class="btn-action" data-bs-toggle="tooltip" data-bs-html="true" title="Compare"><i class="bi bi-arrow-left-right"></i></a>
                        </div>
                    </div>
                    <div class="text-small mb-1"><a href="#!" class="text-decoration-none text-muted"><small>' . $row['Parent_Categor_Name'] . '</small></a></div>
                    <h2 class="fs-6"><a href="shop-single.html" class="text-inherit text-decoration-none">' . $row['Product_Name'] . '</a></h2>
                    <div>
                        <small class="text-warning">
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-half"></i>
                        </small>
                        <span class="text-muted small">' . $row['rating'] . '</span>
                    </div>
                    <div class="d-flex justify-content-between align-items-center mt-3">
                        <div>
                            <span class="text-dark">' . $row['Price1'] . '$</span>
                            <span class="text-decoration-line-through text-muted">' . $row['Price2'] . '$</span>
                        </div>
                        <div>
                            <a href="#!" class="btn btn-primary btn-sm">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-plus">
                                    <line x1="12" y1="5" x2="12" y2="19"></line>
                                    <line x1="5" y1="12" x2="19" y2="12"></line>
                                </svg> Add
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    ';
}
echo $output;
?>

<?php
include 'header.php';

if(isset($_GET['page'])){
    $page = $_GET['page'];
}else{
    $page = 1;
}

$num_records = 4 ;
$start = ($page -1) *$num_records;


?>

<table class="table text-center table-stripted">
    <thead class="bg-dark text-white table-active">
        <tr>
            <td>ID</td>
            <td>Name</td>
            <td>Address</td>
            <td>Class</td>
            <td>Phone</td>
            <td>Action</td>
        </tr>
    </thead>
    <tbody>
        <?php
        $query = "SELECT * FROM `users` AS u INNER JOIN `class` AS c ON u.class = c.cid LIMIT $start, $num_records";
        $result = mysqli_query($conn, $query);

        while ($row = mysqli_fetch_array($result)) {



        ?>

            <tr>
                <td> <?php echo $row['id']; ?> </td>
                <td><?php echo $row['name']; ?> </td>
                <td><?php echo $row['address']; ?> </td>
                <td><?php echo $row['cname']; ?> </td>
                <td><?php echo $row['phone']; ?> </td>
                <td>
                    <a href="edit.php?id=<?php echo $row['id']; ?>" class="btn btn-warning text-white">Edit</a>
                    <a href="deleteinline.php?id=<?php echo $row['id']; ?>" class="btn btn-danger text-white">Delete</a>
                </td>
            </tr>


        <?php  } ?>






    </tbody>
</table>

<nav aria-label="...">
    <ul class="pagination">
        <?php 
        if($page >1 ){

        
        ?>
    <li class="page-item">
            <a class="page-link" href="index.php?page=<?php echo $page-1 ?>">Previous</a>
        </li>

        <?php 
        }
        $fetch = "SELECT * FROM `users`";
        $fetchRes = mysqli_query($conn,$fetch);

        $total_records = mysqli_num_rows($fetchRes);

        

        $total_page = ceil($total_records/$num_records);


        for ($i=1; $i<=$total_page  ; $i++) { 
       
        ?>
        <li class="page-item"><a class="page-link" href="index.php?page=<?php echo $i ?>"><?php echo $i ?></a></li>
       
        <?php  
        }
        
        
        if($i-1 > $page){

    
        ?>
        <li class="page-item">
            <a class="page-link" href="index.php?page=<?php echo $page+1 ?>">Next</a>
        </li>
        <?php 
        }
        ?>
    </ul>
</nav>
</div>


</body>

</html>
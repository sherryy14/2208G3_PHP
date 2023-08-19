<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <title>Student Records App | AJAX </title>
</head>

<body>
    <h1 class="text-center text-white bg-secondary py-3">Student Records</h1>
    <div class="container my-3">
        <form class="row g-3" id='form'>
            <div class="col-md-4">
                <label for="validationDefault01" class="form-label">Name</label>
                <input type="text" class="form-control" id="name">
            </div>

            <div class="col-md-4">
                <label for="validationDefault02" class="form-label">Class</label>
                <input type="text" class="form-control" id="class">
            </div>

            <div class="col-md-4">
                <label for="validationDefault03" class="form-label">City</label>
                <input type="text" class="form-control" id="city">
            </div>

            <div class="col-12 d-flex justify-content-center">
                <button class="btn btn-dark" id="btn" type="submit">Add Record</button>
            </div>
        </form>
        <div class="container d-flex justify-content-center my-5">
            <select name="" id="idFilter" class="form-control w-25">
                <option selected disabled>Sort ID</option>
                <option value="ASC">Sort ID, Low to High</option>
                <option value="DESC">Sort ID, High to Low</option>
            </select>

            <input type="text" class="form-control" id="filterName" placeholder="Enter Name">
            <select name="" id="cityFilter" class="form-control w-25">
                <option selected disabled>Filter By City</option>
                <?php 
                $conn = mysqli_connect('localhost','root','','student_record');

                $city = "SELECT DISTINCT(city) FROM `users`";
                $res = mysqli_query($conn,$city);
                while($row = mysqli_fetch_assoc($res)){

                
                ?>

                <option value="<?php echo $row['city']?>"><?php echo $row['city']?></option>
              
                <?php }?>
            </select>
        </div>

        <table class="table table-dark my-4">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Class</th>
                    <th>City</th>
                </tr>
            </thead>
            <tbody id="data">

            </tbody>
        </table>
    </div>


    <script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>

    <script>
        $(document).ready(function() {
            function render() {
                $.ajax({
                    url: "fetch.php",
                    type: "POST",
                    success: function(data) {
                        $("#data").html(data)
                    }
                })
            }

            render()

            $("#btn").click(function(e) {
                e.preventDefault();
                let name = $('#name').val();
                let classes = $('#class').val();
                let city = $('#city').val();

                $.ajax({
                    url: "insert.php",
                    type: "POST",
                    data: {
                        stdName: name,
                        stdClass: classes,
                        stdCity: city
                    }
                })

                // name = $('#name').val('');
                // classes = $('#class').val('');
                // city = $('#city').val('');

                $("#form").trigger("reset")
                render()
            })

            // id filter 

            $('#idFilter').change(function() {
                let sort = $(this).val()
                console.log(sort);

                $.ajax({
                    url: "sortID.php",
                    type: "POST",
                    data: {
                        id: sort
                    },
                    success: function(data) {
                        $("#data").html(data)
                    }
                })
            })
            // city filter 

            $('#cityFilter').change(function() {
                let city = $(this).val()

                $.ajax({
                    url: "city.php",
                    type: "POST",
                    data: {
                        cityVal: city
                    },
                    success: function(data) {
                        $("#data").html(data)
                    }
                })
            })
            // name filter 

            $('#filterName').keyup(function() {
                let name = $(this).val()

                $.ajax({
                    url: "filterName.php",
                    type: "POST",
                    data: {
                        nameVal: name
                    },
                    success: function(data) {
                        $("#data").html(data)
                    }
                })
            })

        })
    </script>
</body>

</html>
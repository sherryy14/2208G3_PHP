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
                <input type="text" class="form-control" id="name" >
            </div>

            <div class="col-md-4">
                <label for="validationDefault02" class="form-label">Class</label>
                <input type="text" class="form-control" id="class" >
            </div>

            <div class="col-md-4">
                <label for="validationDefault03" class="form-label">City</label>
                <input type="text" class="form-control" id="city" >
            </div>  
  
            <div class="col-12 d-flex justify-content-center">
                <button class="btn btn-dark" id="btn" type="submit">Add Record</button>
            </div>
        </form>

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
        $(document).ready(function(){
            function render(){
                $.ajax({
                    url: "fetch.php",
                    type: "POST",
                   success :function(data){
                    $("#data").html(data)
                   }
                })
            }

            render()


            $("#btn").click(function(e){
                e.preventDefault();
                let name = $('#name').val();
                let classes = $('#class').val();
                let city = $('#city').val();

                $.ajax({
                    url: "insert.php",
                    type: "POST",
                    data : {
                        stdName : name, stdClass :classes, stdCity : city
                    }
                })

                // name = $('#name').val('');
                // classes = $('#class').val('');
                // city = $('#city').val('');

                $("#form").trigger("reset")
                render()
            })

           



        })
    </script>
</body>

</html>
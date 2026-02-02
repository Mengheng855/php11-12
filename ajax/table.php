<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</head>

<body>
    <div class="container mt-4 p-4 shadow rounded-3">
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-outline-dark float-end mb-2" data-bs-toggle="modal"
            data-bs-target="#exampleModal">
            +Add Student
        </button>
        <table class="table table-hover text-center">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Gender</th>
                    <th>Profile</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>001</td>
                    <td>Ratana</td>
                    <td>Male</td>
                    <td>
                        <img src="https://i.pinimg.com/736x/9e/c0/f8/9ec0f877571edc437f89c15c08081533.jpg" width="40px"
                            height="40px" class="rounded-circle" alt="">
                    </td>
                    <td>
                        <button class="btn btn-outline-danger">Delete</button>
                        <button class="btn btn-outline-warning">Edit</button>
                    </td>
                </tr>
            </tbody>


            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">

                        <!-- FORM START -->
                        <form action="" id="form" method="POST" enctype="multipart/form-data">

                            <div class="modal-header">
                                <h5 class="modal-title">User Form</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                            </div>

                            <div class="modal-body">

                                <!-- Name -->
                                <div class="mb-3">
                                    <label class="form-label">Name</label>
                                    <input type="text" name="name" id="name" class="form-control" placeholder="Enter name"
                                        required>
                                </div>
                                <!-- Gender -->
                                <div class="mb-3">
                                    <label class="form-label">Gender</label>
                                    <select name="gender" id="gender" class="form-select" required>
                                        <option value="" disabled selected>-- Select Gender --</option>
                                        <option value="male">Male</option>
                                        <option value="female">Female</option>
                                    </select>
                                </div>

                                <!-- Profile -->
                                <div class="mb-3">
                                    <label class="form-label">Profile</label>
                                    <input type="file" id="profile" name="profile" class="form-control" accept="image/*" required>
                                </div>

                            </div>

                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                                    Close
                                </button>
                                <button type="button" id="save" data-bs-dismiss="modal" class="btn btn-success">
                                    Save
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </table>
    </div>
</body>
</html>
<script>
    $(document).ready(function(){
        $('#save').click(function(){
            const name=$('#name').val()
            const gender=$('#gender').val()
            const profile=$('#profile')[0].files[0]
            const formdata=new FormData()
            formdata.append('name',name)
            formdata.append('gender',gender)
            formdata.append('profile',profile)
            $.ajax({
                url:'insert.php',
                method:'POST',
                data:formdata,
                contentType:false,
                processData:false,
                success:function(response){
                    alert(response)
                    $('#form').trigger('reset')
                }
            })
            
        })
    })
</script>
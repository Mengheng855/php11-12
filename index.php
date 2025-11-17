<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</head>

<body>
    <div class="container p-5 mt-5 shadow">
        <table class="table text-center table-hover">
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary float-end" data-bs-toggle="modal" data-bs-target="#exampleModal">
                +Add Student
            </button>
            <thead >
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Gender</th>
                    <th>Email</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>001</td>
                    <td>M</td>
                    <td>men@gmailc.com</td>
                    <td>cvbnmk,</td>
                    <td>
                        <button class="btn btn-outline-warning">Edit</button>
                        <button class="btn btn-outline-danger">Delete</button>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>


    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Add Student</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="insert.php" method="post">
                <div class="modal-body">
                        <div class="mt-3">
                            <label for="" class="form-label">Usernme</label>
                            <input type="text" name="name" id="name" class="form-control" placeholder="Enter ur username">
                        </div>
                        <div class="mt-3">
                            <label for="" class="form-label">Gender</label>
                            <select name="" id="" name="gender" id="gender" class="form-select">
                                <option value="" disabled selected>---Other---</option>
                                <option value="male">Male</option>
                                <option value="female">Female</option>
                            </select>
                        </div>
                        <div class="mt-3">
                            <label for="" class="form-label">Email</label>
                            <input type="email" id="email" name="email" class="form-control" placeholder="Enter ur email">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button"  class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" name="btnSave" class="btn btn-success">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
<script>
    $(document).ready(function(){

    })
</script>
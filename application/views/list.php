<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo base_url() . 'assets/css/bootstrap.min.css'  ?>">
    <title>All Users</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-black text-white">
        <div class="container-fluid">
            <a class="navbar-brand text-white" href="#">CRUD APPLICATION</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="nav justify-content-center">
                    <li class="nav-item">
                        <a class="nav-link text-white" aria-current="page" href="#">HOME</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="#">LOGIN</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="#">REGISTER</a>
                    </li>
                </ul>
                <!-- <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form> -->
            </div>
        </div>
    </nav>

    <div class="container mt-5">
        <?php  
            $success = $this->session->userdata('success');
            $failure = $this->session->userdata('failure');
            $error = $this->session->userdata('error');
            if($success != ''){
                ?>
                    <div class="alert alert-success"><?php echo  $success; ?></div>
                <?php
            }
            if($failure != ''){
                ?>
                    <div class="alert alert-success"><?php echo  $failure; ?></div>
                <?php
            }
            if($error != ''){
                ?>
                    <div class="alert alert-danger"><?php echo  $error; ?></div>
                <?php
            }



        ?>

        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8">
                <div class="row">
                    <div class="col-6"><h1>List All User</h1></div>
                    <div class="col-6 d-flex justify-content-end align-items-center"><a href="<?php echo base_url().'index.php/user/create' ?>" class="btn btn-primary">Create User</a></div>
                </div>
                <hr>
            </div>
            
            <div class="col-md-2"></div>
        </div>
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8">
                <table class="table table-striped">
                    <thead class="table-dark">
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">USERNAME</th>
                            <th scope="col">EMAIL</th>
                            <th scope="col">TIME</th>
                            <th scope="col">EDIT</th>
                            <th scope="col">DELETE</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        if (!empty($users)) {
                            foreach ($users as $user) {
                        ?>
                                <tr>
                                    <th scope="row"><?php echo $user['user_id'];  ?></th>
                                    <td><?php echo $user['user_name']; ?></td>
                                    <td><?php echo $user['user_email']; ?></td>
                                    <td><?php echo $user['created_at']; ?></td>
                                    <td><a href="<?php echo base_url() . 'index.php/user/edit/' . $user['user_id']; ?>" class="btn btn-sm btn-primary">Edit</a></td>
                                    <td><a href="<?php echo base_url() . 'index.php/user/delete/' . $user['user_id']; ?>" class="btn btn-sm btn-danger">Delete</a></td>
                                </tr>
                            <?php
                            }
                        } else {
                            ?>
                            <tr>
                                <td colspan="6">Records Not Found</td>
                            </tr>
                        <?php
                        }
                        ?>

                    </tbody>
                </table>
            </div>
            <div class="col-md-2"></div>
        </div>
    </div>
</body>

</html>
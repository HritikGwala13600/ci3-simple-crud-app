<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo base_url().'assets/css/bootstrap.min.css'  ?>">
    <title>CRUD APP | Create User</title>
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

    <div class="container">
        <div class="row mt-5">
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <h1>Update User</h1>
                <hr>
                    <form method="post" action="<?php echo base_url().'index.php/user/update' ?>" >
                        <div class="mb-3">
                            <label for="inputName" class="form-label">Name</label>
                            <input type="text" name="username" class="form-control" id="inputName" value="<?php echo set_value('username',$user['user_name']) ?>" aria-describedby="nameHelp">
                            <span style="color:blue;"><?php echo form_error('username'); ?></span>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Email address</label>
                            <input type="email" name="email" class="form-control" id="exampleInputEmail1" value="<?php echo set_value('email',$user['user_email']) ?>" aria-describedby="emailHelp">
                            <span style="color:red;"><?php echo form_error('email'); ?></span>
                        </div>
                        <input type="hidden" name="user_id" value="<?php echo $user['user_id'];  ?>">
                        <button type="submit" class="btn btn-primary">Submit</button>
                        <a href="<?php echo base_url('index.php/user/index');  ?>" type="submit" class="btn btn-dark mx-4">Cancel</a>
                    </form>
            </div>
            <div class="col-md-3"></div>
        </div>
    </div>
</body>
</html>
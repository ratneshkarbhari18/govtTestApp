<main id="users" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">

    <div class="container" >

        <h1 class="page-title">Users</h1>

        <a href="<?php echo site_url("add-user"); ?>" class="btn btn-success">+ User</a>
        <br><br>

        <table class="table">
            <thead>
                <tr>
                    <th scope="col">First Name</th>
                    <th scope="col">Last Name</th>
                    <th scope="col">Role</th>
                    <th scope="col">Email</th>
                </tr>
            </thead>
            <tbody>

                <?php foreach($users as $user): ?>
                <tr>
                    <td><?php echo $user["first_name"]; ?></td>
                    <td><?php echo $user["last_name"]; ?></td>                    
                    <td><?php echo $user["role"]; ?></td>
                    <td><?php echo $user["email"]; ?></td>
                </tr>
                <?php endforeach; ?>    

            </tbody>
        </table>

        
    
    </div>


</main>
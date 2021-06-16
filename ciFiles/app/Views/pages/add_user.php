<main id="users" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">

    <div class="container" >

        <h1 class="page-title"><?php echo $title; ?></h1>
        <p class="text-success"><?php echo $success; ?></p>
        <p class="text-danger"><?php echo $error; ?></p>


        <form action="<?php echo site_url("add-user-exe"); ?>" method="post">

            <div class="form-group">
                <label for="first_name">First Name</label>
                <input type="text" name="first_name" id="first_name" class="form-control">
            </div>
            <div class="form-group">
                <label for="last_name">Last Name</label>
                <input type="text" name="last_name" id="last_name" class="form-control">
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" name="email" id="email" class="form-control">
            </div>
            <div class="form-group">
                <label for="role">Role</label>
                <select name="role" id="role" class="form-control">
                    <option value="minister">Minister</option>
                    <option value="councillor">Councillor</option>
                </select>
            </div>
            <br>
            <button type="submit" class="btn btn-success">Create User</button>

        </form>

    </div>

</main>
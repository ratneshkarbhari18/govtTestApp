<main id="users" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">

    <div class="container" >

        <h1 class="page-title"><?php echo $title; ?></h1>
        <p class="text-success"><?php echo $success; ?></p>
        <p class="text-danger"><?php echo $error; ?></p>


        <form action="<?php echo site_url("add-block-exe"); ?>" method="post">

            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" name="title" id="title" class="form-control">
            </div>
            <div class="form-group">
                <label for="incharge">Incharge</label>
                <select name="incharge" id="incharge" class="form-control">
                    <?php foreach($users as $user): ?>
                    <?php if($user ["role"]=="minister"): ?>
                    <option value="<?php echo  $user ["id"]; ?>"><?php echo  $user ["first_name"].' '.$user ["last_name"]; ?></option>
                    <?php endif; ?>
                    <?php endforeach; ?>
                </select>
            </div>
            <br>
            <button type="submit" class="btn btn-success">Create User</button>

        </form>

    </div>

</main>
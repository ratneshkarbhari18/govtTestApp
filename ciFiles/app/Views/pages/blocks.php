<main id="users" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">

    <div class="container" >

        <h1 class="page-title">Blocks</h1>

        <a href="<?php echo site_url("add-block"); ?>" class="btn btn-success">+ Block</a>
        <br><br>

        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Title</th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>

                <?php foreach($blocks as $block): ?>
                <tr>
                    <td><?php echo $block["title"]; ?></td>
                    <td>
                        <form action="<?php echo site_url("delete-block"); ?>" method="post" class="d-inline">

                            <input type="hidden" value="<?php echo $block["id"]; ?>" name="id" value="<?php echo $block["id"]; ?>">
                            <button type="submit" class="btn btn-danger">delete</button>
                        
                        </form>
                    </td>
                </tr>
                <?php endforeach; ?>    

            </tbody>
        </table>

        
    
    </div>


</main>
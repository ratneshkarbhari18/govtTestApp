<main id="users" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">

    <div class="container" >

        <h1 class="page-title">Reports from Ministers</h1>

        <!-- <a href="<?php echo site_url("add-block"); ?>" class="btn btn-success">+ Block</a> -->
        <br><br>

        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Title</th>
                    <th scope="col">Submission Date</th>
                    <th  scope="col">Download</th>
                    <!-- <th scope="col">Actions</th> -->
                </tr>
            </thead>
            <tbody>

                <?php foreach($reports as $report): ?>
                <tr>
                    <td><?php echo $report["title"]; ?></td>
                    <td><?php echo $report["date"]; ?></td>
                    <td><a href="<?php echo site_url("assets/reports/".$report["fileName"]); ?>" download>Download</a></td>
                    <!-- <td>
                        <form action="<?php echo site_url("delete-report"); ?>" method="post" class="d-inline">

                            <input type="hidden" value="<?php echo $report["id"]; ?>" name="id" value="<?php echo $report["id"]; ?>">
                            <button type="submit" class="btn btn-danger">delete</button>
                        
                        </form>
                    </td> -->
                </tr>
                <?php endforeach; ?>    

            </tbody>
        </table>

        
    
    </div>


</main>
<main id="users" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">

    <div class="container" >

        <h1 class="page-title"><?php echo $title; ?></h1>
        <p class="text-success"><?php echo $success; ?></p>
        <p class="text-danger"><?php echo $error; ?></p>


        <form action="<?php echo site_url("report-to-crm-exe"); ?>" enctype="multipart/form-data" method="post">

            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" name="title" id="title" class="form-control">
            </div>
            <div class="form-group">
                <label for="date">Date</label>
                <input type="text" name="date" class="form-control" value="<?php echo date("d-m-Y"); ?>" id="date" readonly>
            </div>
            <div class="form-group">
                <input type="hidden" name="reciever" class="form-control" value="<?php echo 1; ?>" id="reciever">
            </div>            
            <div class="form-group">
                <label for="reportPDF">Report</label>
                <input type="file" accept="application/pdf" name="reportPDF" id="reportPDF">
            </div>            
            <br>
            <button type="submit" class="btn btn-success">Send Report</button>

        </form>

    </div>

</main>
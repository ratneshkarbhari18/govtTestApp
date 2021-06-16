<main class="page-content" id="mgt-login">

    <div class="container">

        <div class="row">

            <div class="col-lg-4 col-md-12 col-sm-12"></div>
            <div class="col-lg-4 col-md-12 col-sm-12">

                <h1 class="text-center">Login</h1>
                <p class="text-danger text-center"><?php echo $error; ?></p>


                <form action="<?php echo site_url("login-exe"); ?>" method="post">

                    <div class="form-group">
                        <label for="email">Email</label>
                        <input class="form-control" type="email" name="email" required id="email">
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input class="form-control" type="password" name="password" required id="password">
                    </div>

                    <button type="submit" class="btn btn-success btn-block">Login</button>
                
                </form>
            
            </div>
            <div class="col-lg-4 col-md-12 col-sm-12"></div>
        
        </div>
    
    </div>

</main>

<style>
header,footer,nav.navbar.navbar-dark.sticky-top.bg-dark.flex-md-nowrap.p-0.shadow,nav#sidebarMenu{
    display: none !important;
}
main{
    width: 100%;
}
</style>
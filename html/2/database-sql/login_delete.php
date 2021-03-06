<?php include "db.php"; ?>
<?php include "functions.php"; ?>
<?php if(isset($_POST['submit'])){
    deleteRows();
}
?>


<?php include "include/header.php";?>
    <section class="hero has-background-white-ter is-fullheight">
        <div class="hero-body">
            <div class="container">
                <div class="columns is-centered">
                    <div class="is-5-tablet is-4-desktop is-3-widescreen">
                    <form action="login_delete.php" method="post"> 
                        <h3 class="title is-3">Delete Your Account</h3>
                            <div class="field p-1">    
                                <label class="label" for="username">Name: </label>
                                
                                <div class="control">
                                    <input class='input is-primary' type='text' placeholder='Your Name' name='username' value="" />
                                </div>
                            </div>
                            
                            <div class="field p-1">
                                <label class="label" for="password"> Password: </label>
                                <div class="control">
                                    <input class='input is-primary' type='password' placeholder='Your Password' name='password' value="" />
                                </div>
                            </div>

                            <div class="select is-primary">
                                <select name="id" id="">
                                    <?php showAllData(); ?>
                                </select>
                            </div>

                            <div class="field p-1">
                                <div class="control">
                                    <button class="button is-danger" name="submit" value="">Delete</button>
                                </div>
                            </div>
                        </form>
                    
                    </div>
                </div>
            </div>
        
        </div>

        <?php include "include/footer.php";?>
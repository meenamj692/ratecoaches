<div class="register-album-1">
    <div class="container">
        <h1 class="jumbotron-heading text-center" style="padding-bottom: 10px;" >Welcome to our world</h1>        
        <h1 class="jumbotron-heading text-center" style="padding-bottom: 60px;" >Sign up as Coach</h1>        
        <div class="row">            
            <div class="col-4"></div>
            <div class="col-4">

                <form action="<?= base_url() ?>register/coach" method="POST">
                    <div class="form-group">
                        <label>Select Sport</label>
                        <select class="form-control" name="sport" >
                            <option value="">Select Sport</option>
                            <?php
                            foreach ($sports as $value) {
                                ?><option value="<?= $value['id'] ?>" <?= ((set_value('sport') == $value['id']) ? 'selected' : '') ?> ><?= $value['sport_name'] ?></option><?php
                            }
                            ?>                            
                        </select>
                        <?= form_error('sport'); ?>
                    </div>
                    <div class="form-group">
                        <label>First Name</label>
                        <input type="text" class="form-control" name="fname" value="<?= set_value('fname') ?>" placeholder="Ex: Meena">
                        <?= form_error('fname'); ?>
                    </div>
                    <div class="form-group">
                        <label>Last address</label>
                        <input type="text" class="form-control" name="lname" value="<?= set_value('lname') ?>" placeholder="Ex: Sharma">
                        <?= form_error('lname'); ?>
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input type="email" class="form-control" name="email" value="<?= set_value('email') ?>" placeholder="Ex: meena_jyo63@yahoo.in">
                        <?= form_error('email'); ?>
                    </div>
                    <div class="form-group">
                        <label>Password</label>
                        <input type="password" class="form-control" name="pwd" placeholder="*********">
                        <?= form_error('pwd'); ?>
                    </div>                    
                    <button type="submit" class="btn btn-primary btn-block">Register</button>
                </form>

            </div>             
            <div class="col-4"></div>
        </div>
    </div>
</div>
<div class="register-album">
    <div class="container">

        <div class="row">
            <div class="card"></div>
            <div class="card">             
                <form action="<?= base_url()?>login" method="POST" >
                    <div class="form-group">
                        <label>Email</label>
                        <input type="text" name="email" id="email" class="form-control" value="<?= set_value('email') ?>" size="20" />
                        <?= form_error('email') ?>
                    </div>
                    <div class="form-group">
                        <label>Password</label>
                        <input type="password" name="pwd" id="pwd" class="form-control" value="<?= set_value('pwd') ?>" size="20" />
                        <?= form_error('pwd') ?>
                    </div>                    
                    <button type="submit" class="btn btn-primary btn-block">Login</button>
                </form>
            </div> 
            <div class="card"></div>
        </div>

    </div>
</div>
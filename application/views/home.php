<section class="jumbotron text-center">
    <div class="container">
        <h1 class="jumbotron-heading">Explore Best Sports Coaches in Selected Cities</h1>
        <form class="search_form" action="#" method="POST" >
            <div class="form-row">                
                <div class="col-3">
                    <select class="form-control" name="column">
                        <option value="name">Name</option>
                        <option value="sport">Sport</option>
                    </select>
                </div>                        
                <div class="col-6">
                    <input type="text" class="form-control" name="search_value" required placeholder="Ex: Cricket, Badminton, Volleyball....">
                </div>                        
                <div class="col">
                    <button type="submit" class="btn btn-primary btn-block">Search</button>
                </div>
            </div>
        </form>
    </div>
</section>
<section>
    <div class="container">
        <div class="row" style="padding-top: 40px;">
            <div class="col">
                <?php
                foreach ($coaches as $value) {
                    ?>
                    <div class="card" >
                        <div class="card-body">                            
                            <div class="rating-block">
                                <a href="<?= base_url()?>coach/profile/<?=$value['id']?>" class="card-title"><?= $value['fname'] . " " . $value['lname'] ?></a>
                                <p class="card-text"><?= $value['sports'] ?></p>
                                <h6 style="color: #bbb; font-weight: 100;">Average user rating</h6>
                                <h2 class="bold padding-bottom-7"><?= ($value['rating']) ? $value['rating'] : "0" ?> <small>/ <?= ($value['reviewcount'] > 0) ? "5" : "0" ?> <span style="font-size: 15px;" > (<?= $value['reviewcount'] ?>) Reviews</span></small></h2>

                                <button type="button" class="btn <?= (round($value['rating']) >= 1) ? 'btn-warning' : '' ?> btn-sm" aria-label="Left Align"></button>
                                <button type="button" class="btn <?= (round($value['rating']) >= 2) ? 'btn-warning' : '' ?> btn-sm" aria-label="Left Align"></button>
                                <button type="button" class="btn <?= (round($value['rating']) >= 3) ? 'btn-warning' : '' ?> btn-sm" aria-label="Left Align"></button>
                                <button type="button" class="btn <?= (round($value['rating']) >= 4) ? 'btn-warning' : '' ?> btn-sm" aria-label="Left Align"></button>
                                <button type="button" class="btn <?= (round($value['rating']) >= 5) ? 'btn-warning' : '' ?> btn-grey btn-sm" aria-label="Left Align"></button>

                            </div>

                        </div>
                    </div>                    
                    <?php
                }
                ?>
            </div>
        </div>
    </div>
</section>
<section class="jumbotron text-center">
    <div class="container">
        <h1  style="color: #333; font-weight: 600; "  class="jumbotron-heading"><?= $profile['fname'] . " " . $profile['lname'] ?></h1>
        <h6 style="color: #999; font-weight: 100;" ><?= $profile['email'] ?></h6>
        <h4  style="color: #555; font-weight: 400;" ><?= $profile['sports'] ?></h4>        
    </div>
</section>
<section style="padding-top: 50px;" >
    <div class="container">
        <?php
        if ($status) {
            ?>
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <strong>Thanks for rating!</strong> 
            </div>
            <?php
        }
        ?>

        <div class="row">
            <div class="col-3">
                <div style="margin-bottom: 15px;" >    

                    <?php
                    if ($session_info) {
                        ?><button type="button" class="btn btn-success btn-block btn-lg" data-toggle="modal" data-target="#exampleModal" data-backdrop="static"><i class="fa fa-star-o"></i> Rate this User</button><?php
                    } else {
                        ?><center><a href="<?= base_url() ?>login"><span class="text-success" >Login to Rate this Coach</span></a></center><?php
                    }
                    ?>
                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content" style="border: 0px; border-radius: 0px;">
                                <div class="modal-header" style="background: #007bff">
                                    <h5 class="modal-title" id="exampleModalLabel" style="color: #FFF;"><i class="fa fa-star-o"></i> Rate <?= $profile['fname'] . " " . $profile['lname'] ?></h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <form action="#" method="POST">
                                        <div class="row">
                                            <div class="col">
                                                <h4 style="font-weight: 400; font-size: 18px; padding-top: 10px;" >Motivation</h4>
                                            </div>
                                            <div class="col">
                                                <fieldset class="rating" style="">
                                                    <input type="radio" id="motivation_star5" required name="motivation_rating" value="5" />
                                                    <label class = "full" for="motivation_star5" title="Awesome - 5 stars"></label>

                                                    <input type="radio" id="motivation_star4" name="motivation_rating" value="4" />
                                                    <label class = "full" for="motivation_star4" title="Pretty good - 4 stars"></label>

                                                    <input type="radio" id="motivation_star3" name="motivation_rating" value="3" />
                                                    <label class = "full" for="motivation_star3" title="Meh - 3 stars"></label>

                                                    <input type="radio" id="motivation_star2" name="motivation_rating" value="2" />
                                                    <label class = "full" for="motivation_star2" title="Kinda bad - 2 stars"></label>

                                                    <input type="radio" id="motivation_star1" name="motivation_rating" value="1" />
                                                    <label class = "full" for="motivation_star1" title="Sucks big time - 1 star"></label>                                                
                                                </fieldset>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col">
                                                <h4 style="font-weight: 400; font-size: 18px; padding-top: 10px;" >Technical Skills</h4>
                                            </div>
                                            <div class="col">
                                                <fieldset class="rating" style="">
                                                    <input type="radio" id="technical_skills_star5" required name="technical_skills_rating" value="5" />
                                                    <label class = "full" for="technical_skills_star5" title="Awesome - 5 stars"></label>

                                                    <input type="radio" id="technical_skills_star4" name="technical_skills_rating" value="4" />
                                                    <label class = "full" for="technical_skills_star4" title="Pretty good - 4 stars"></label>

                                                    <input type="radio" id="technical_skills_star3" name="technical_skills_rating" value="3" />
                                                    <label class = "full" for="technical_skills_star3" title="Meh - 3 stars"></label>

                                                    <input type="radio" id="technical_skills_star2" name="technical_skills_rating" value="2" />
                                                    <label class = "full" for="technical_skills_star2" title="Kinda bad - 2 stars"></label>

                                                    <input type="radio" id="technical_skills_star1" name="technical_skills_rating" value="1" />
                                                    <label class = "full" for="technical_skills_star1" title="Sucks big time - 1 star"></label>                                                
                                                </fieldset>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col">
                                                <h4 style="font-weight: 400; font-size: 18px; padding-top: 10px;" >Punctuality</h4>
                                            </div>
                                            <div class="col">
                                                <fieldset class="rating" style="">
                                                    <input type="radio" id="punctuality_star5" required name="punctuality_rating" value="5" />
                                                    <label class = "full" for="punctuality_star5" title="Awesome - 5 stars"></label>

                                                    <input type="radio" id="punctuality_star4" name="punctuality_rating" value="4" />
                                                    <label class = "full" for="punctuality_star4" title="Pretty good - 4 stars"></label>

                                                    <input type="radio" id="punctuality_star3" name="punctuality_rating" value="3" />
                                                    <label class = "full" for="punctuality_star3" title="Meh - 3 stars"></label>

                                                    <input type="radio" id="punctuality_star2" name="punctuality_rating" value="2" />
                                                    <label class = "full" for="punctuality_star2" title="Kinda bad - 2 stars"></label>

                                                    <input type="radio" id="punctuality_star1" name="punctuality_rating" value="1" />
                                                    <label class = "full" for="punctuality_star1" title="Sucks big time - 1 star"></label>                                                
                                                </fieldset>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col">
                                                <h4 style="font-weight: 400; font-size: 18px; padding-top: 10px;" >Communication </h4>
                                            </div>
                                            <div class="col">
                                                <fieldset class="rating" style="">
                                                    <input type="radio" id="communication_rating_star5" required name="communication_rating" value="5" />
                                                    <label class = "full" for="communication_rating_star5" title="Awesome - 5 stars"></label>

                                                    <input type="radio" id="communication_rating_star4" name="communication_rating" value="4" />
                                                    <label class = "full" for="communication_rating_star4" title="Pretty good - 4 stars"></label>

                                                    <input type="radio" id="communication_rating_star3" name="communication_rating" value="3" />
                                                    <label class = "full" for="communication_rating_star3" title="Meh - 3 stars"></label>

                                                    <input type="radio" id="communication_rating_star2" name="communication_rating" value="2" />
                                                    <label class = "full" for="communication_rating_star2" title="Kinda bad - 2 stars"></label>

                                                    <input type="radio" id="communication_rating_star1" name="communication_rating" value="1" />
                                                    <label class = "full" for="communication_rating_star1" title="Sucks big time - 1 star"></label>                                                
                                                </fieldset>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label>Comments</label>
                                            <textarea class="form-control" name="rating_comments" required placeholder="Please leave a comment with more detail about your experience." rows="5" style="resize: none;"></textarea>
                                        </div>
                                        <button type="submit" class="btn btn-primary">Proceed</button>
                                    </form>
                                </div>                                
                            </div>
                        </div>
                    </div>

                </div> 

                <div class="rating-block" style="margin-bottom: 15px;" >                                                           
                    <div class="row rating-desc">
                        <div class="col text-center">
                            <h6 style="margin-bottom: 5px;" >Avg Rating</h6>
                            <h2 class="bold padding-bottom-7"><?= ($profile['rating']) ? $profile['rating'] : "0" ?> <small>/ <?= ($profile['reviewcount'] > 0) ? "5" : "0" ?></small></h2>
                            <p style="margin-bottom: 0px;" >Total <span style="font-size: 15px;" > <?= $profile['reviewcount'] ?> Reviews</span></p>
                        </div>
                    </div>
                </div>         

                <div class="rating-block">

                    <div class="row rating-desc" style="margin-bottom: 15px;" >
                        <div class="col text-left">Motivation (<?= $profile['motivation'] ?>)</div>
                        <div class="col-12">
                            <?php
                            for ($i = 0; $i < (round($profile['motivation'])); $i++) {
                                ?><i class="fa fa-star" style="color: #ff9900; margin-right: 5px;" ></i><?php
                            }
                            ?>                                                        
                        </div>
                    </div>

                    <div class="row rating-desc" style="margin-bottom: 15px;" >
                        <div class="col text-left">Technical skills (<?= $profile['technical_skills'] ?>)</div>
                        <div class="col-12">
                            <?php
                            for ($i = 0; $i < (round($profile['technical_skills'])); $i++) {
                                ?><i class="fa fa-star" style="color: #ff9900; margin-right: 5px;" ></i><?php
                            }
                            ?>    
                        </div>
                    </div>

                    <div class="row rating-desc" style="margin-bottom: 15px;" >
                        <div class="col text-left">Punctuality (<?= $profile['punctuality'] ?>)</div>
                        <div class="col-12">
                            <?php
                            for ($i = 0; $i < (round($profile['punctuality'])); $i++) {
                                ?><i class="fa fa-star" style="color: #ff9900; margin-right: 5px;" ></i><?php
                            }
                            ?>    
                        </div>
                    </div>

                    <div class="row rating-desc" style="margin-bottom: 0px;" >
                        <div class="col text-left">Communication (<?= $profile['communication'] ?>)</div>
                        <div class="col-12">
                            <?php
                            for ($i = 0; $i < (round($profile['communication'])); $i++) {
                                ?><i class="fa fa-star" style="color: #ff9900; margin-right: 5px;" ></i><?php
                            }
                            ?>    
                        </div>
                    </div>

                </div>                
            </div>
            <div class="col-9">
                <h3>Ratings for <?= $profile['fname'] . " " . $profile['lname'] ?></h3>
                <?php
                foreach ($reviews as $value) {
                    ?>
                    <div class="rating-block" style="margin-bottom: 15px;" >                                                           
                        <div class="row rating-desc">
                            <div class="col">
                                <h5 style="font-weight: 400;" ><b>Rated By:</b> <?= $value['rated_by'] ?></h5>
                                <p style="margin-bottom: 5px;" ><span style="font-size: 15px;" > <?= $value['comments'] ?></span></p>
                                <h6 style="font-weight: 100; font-size: 12px;" class="text-danger" ><?= date("d M, Y h:i:s A", strtotime($value['created_time'])) ?></h6>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col">
                                <div class="row rating-desc">                                                                                    
                                    <div class="col text-left">Motivation (<?= $value['motivation'] ?>)</div>                                    
                                </div>
                            </div>
                            <div class="col">
                                <div class="row rating-desc">
                                    <div class="col text-left">Technical skills (<?= $value['technical_skills'] ?>)</div>                                    
                                </div>
                            </div>
                            <div class="col">
                                <div class="row rating-desc">
                                    <div class="col text-left">Punctuality (<?= $value['punctuality'] ?>)</div>                                    
                                </div>
                            </div>
                            <div class="col">
                                <div class="row rating-desc">
                                    <div class="col text-left">Communication (<?= $value['communication'] ?>)</div>
                                </div>                                    
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
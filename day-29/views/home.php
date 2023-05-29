<?php include "header.php";?>
    <section class="py-5">
        <div class="container">
            <div class="row">
                <?php foreach ($blogs as $blog) {?>
                <div class="col-md-4 mb-3">
                    <div class="card rounded-0">
                        <img src="assets/img/<?php echo $blog['image']; ?>" alt="" class=""height="280"/>
                        <div class="card-body">
                            <h4 class="card-title"><?php echo $blog['title']; ?></h4>
                            <p class="card-text"><?php echo $blog['desription_one']; ?></p>
                             <hr/>

                            <a href="action.php?page=detail&&id=<?php echo $blog['id']; ?> "class="btn btn-success rounded-0">Read More</a>
                        </div>
                    </div>
                </div>
                <?php }?>
            </div>
        </div>
    </section>
<?php include "footer.php";?>
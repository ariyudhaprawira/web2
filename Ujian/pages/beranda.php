<div class="row">

            <!-- Blog Entries Column -->
            <div class="col-md-8">
             <?php foreach ($isi_buku as $b) { ?>

                <!-- First Blog Post -->
                <h2>
                    <a href="#"><?php echo $b['judul']; ?></a>
                </h2>
                <p class="lead">
                    by <a href="index.php"><?php echo $b['penulis']; ?></a>
                </p>
                <p><i class="fa fa-clock-o"></i></p>
                <hr>
                <a href="blog-post.html">
                    <img class="img-responsive img-hover" src="http://placehold.it/900x300" alt="">
                </a>
                <hr>
                <p><?php echo $b['']; ?></p>
                <a class="btn btn-primary" href="#">Read More <i class="fa fa-angle-right"></i></a>

                <hr>
<?php }?>

                <!-- Pager -->
                <ul class="pager">
                    <li class="previous">
                        <a href="#">&larr; Older</a>
                    </li>
                    <li class="next">
                        <a href="#">Newer &rarr;</a>
                    </li>
                </ul>

            </div>

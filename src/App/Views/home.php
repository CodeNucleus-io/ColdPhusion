<?php $this->layout('_base', ['page_title' => 'Blog Roll']); ?>

<?php $this->start('pageTitle') ?>
    <h1>This is a test</h1>
<?php $this->end() ?>

<?php $this->start('scripts') ?>
    <script src="/assets/plugins/bootstrap/js/bootstrap.min.js"></script>
<?php $this->end() ?>

    <section class="cta-section theme-bg-light py-5">
        <div class="container text-center single-col-max-width">
            <h2 class="heading">DevBlog - A Blog Template Made For Developers</h2>
            <div class="intro">Welcome to my blog. Subscribe and get my latest blog post in your inbox.</div>
            <div class="single-form-max-width pt-3 mx-auto">
                <form class="signup-form row g-2 g-lg-2 align-items-center">
                    <div class="col-12 col-md-9">
                        <label class="sr-only" for="semail">Your email</label>
                        <input type="email" id="semail" name="semail1" class="form-control me-md-1 semail" placeholder="Enter email">
                    </div>
                    <div class="col-12 col-md-2">
                        <button type="submit" class="btn btn-primary">Subscribe</button>
                    </div>
                </form><!--//signup-form-->
            </div><!--//single-form-max-width-->
        </div><!--//container-->
    </section>


    <section class="blog-list px-3 py-5 p-md-5">
        <div class="container single-col-max-width">
            <?php foreach ($posts as $post): ?>
            <div class="item mb-5">
                <div class="row g-3 g-xl-0">
                    <div class="col-2 col-xl-3">
                        <img class="img-fluid post-thumb " src="/assets/images/blog/blog-post-thumb-1.jpg" alt="image">
                    </div>
                    <div class="col">
                        <h3 class="title mb-1"><a class="text-link" href="/post/<?php echo $post->getId(); ?>"><?php echo $post->getTitle(); ?></a></h3>
                        <div class="meta mb-1"><span class="date">Published 2 days ago</span><span class="time">5 min read</span><span class="comment"><a class="text-link" href="#">8 comments</a></span></div>
                        <div class="intro"><?php echo $post->getSummary(); ?></div>
                        <a class="text-link" href="/post/<?php echo $post->getId(); ?>">Read more &rarr;</a>
                    </div><!--//col-->
                </div><!--//row-->
            </div><!--//item-->
            <?php endforeach; ?>

            <nav class="blog-nav nav nav-justified my-5">
                <a class="nav-link-prev nav-item nav-link d-none rounded-left" href="#">Previous<i class="arrow-prev fas fa-long-arrow-alt-left"></i></a>
                <a class="nav-link-next nav-item nav-link rounded" href="#">Next<i class="arrow-next fas fa-long-arrow-alt-right"></i></a>
            </nav>

        </div>
    </section>

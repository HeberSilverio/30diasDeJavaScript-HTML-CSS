<?php

    include("head.php");

?>

<body>

    <?php
        include("header.php");
        include("menu-mobile.php");
    ?>

    <!-- main wrapper start -->
    <main class="body-bg">

        <!-- breadcrumb area start -->
        <div class="breadcrumb-area">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="breadcrumb-wrap">
                            <nav aria-label="breadcrumb">
                                <h1>TITULO DO POST</h1>
                                <ul class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                    <li class="breadcrumb-item"><a href="blog-left-sidebar.html">blog</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Titulo do Post</li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- breadcrumb area end -->

        <!-- blog main wrapper start -->
        <div class="blog-main-wrapper pt-50 pb-50">
            <div class="container">
                <div class="row">
                    <?php include("blog-sidebar.php"); ?>
                    <div class="col-lg-9">
                        <!-- blog single item start -->
                        <div class="blog-post-item blog-grid section-bg-color">
                            <div class="blog-post-thumb">
                                <div class="blog-carousel-active slick-arrow-style slick-dot-style">
                                    <div class="blog-single-slide">
                                        <img src="assets/img/blog/blog-details-1.jpg" alt="">
                                    </div>
                                    <div class="blog-single-slide">
                                        <img src="assets/img/blog/blog-details-4.jpg" alt="">
                                    </div>
                                    <div class="blog-single-slide">
                                        <img src="assets/img/blog/blog-details-2.jpg" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="post-info-wrapper">
                                <div class="entry-header">
                                    <div class="post-date">
                                        <span class="date">10</span>
                                        <span class="month">mar</span>
                                    </div>
                                    <div class="post-meta blog-details-title">
                                        <h2 class="entry-title">Praesent gravida enim fermentum</h2>
                                        <div class="post-meta-small">
                                            <div class="post-author">
                                                Written by: <a href="#">Admin</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="entry-summary mb-0">
                                    <p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate perferendis
                                        consequuntur illo aliquid nihil ad neque, debitis praesentium libero ullam
                                        asperiores exercitationem deserunt inventore facilis, officiis,</p>
                                    <blockquote>
                                        <p>Quisque semper nunc vitae erat pellentesque, ac placerat arcu consectetur.
                                            In
                                            venenatis elit ac ultrices convallis. Duis est nisi, tincidunt ac urna sed,
                                            cursus blandit lectus. In ullamcorper sit amet ligula ut eleifend. Proin
                                            dictum
                                            tempor ligula, ac feugiat metus. Sed finibus tortor eu scelerisque
                                            scelerisque.</p>
                                    </blockquote>
                                    <p>aliquam maiores asperiores recusandae commodi blanditiis ipsum tempora culpa
                                        possimus assumenda ab quidem a voluptatum quia natus? Ex neque, saepe
                                        reiciendis
                                        quasi velit perspiciatis error vel quas quibusdam autem nesciunt voluptas odit
                                        quis
                                        dignissimos eos aspernatur voluptatum est repellat. Pariatur praesentium,
                                        corrupti
                                        deserunt ducimus quo doloremque nostrum aspernatur saepe cupiditate sit autem
                                        exercitationem debitis, maiores vitae perferendis nemo? Voluptas illo, animi
                                        temporibus quod earum molestias eaque, iure rem amet autem dignissimos officia
                                        dolores numquam distinctio esse voluptates optio pariatur aspernatur omnis?
                                        Ipsam
                                        qui commodi velit natus reiciendis quod quibusdam nemo eveniet similique animi!</p>
                                    <div class="tag-line">
                                        <h5>tag :</h5>
                                        <a href="#">barber</a>,
                                        <a href="#">fashion</a>,
                                        <a href="#">food</a>,
                                    </div>
                                    <div class="blog-share-link">
                                        <h5>Compartilhe :</h5>
                                        <div class="blog-social-icon">
                                            <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
                                            <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
                                            <a href="#" class="pinterest"><i class="fa fa-pinterest"></i></a>
                                            <a href="#" class="google"><i class="fa fa-google-plus"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- blog single item end -->

                        <!-- comment area start -->
                        <div class="comment-section section-bg-color mt-50">
                            <h3>03 Comentários</h3>
                            <ul>
                                <li>
                                    <div class="author-avatar">
                                        <img src="assets/img/blog/comment-icon.png" alt="">
                                    </div>
                                    <div class="comment-body">
                                        <span class="reply-btn"><a href="#">reply</a></span>
                                        <h5 class="comment-author">admin</h5>
                                        <div class="comment-post-date">
                                            20 nov, 2019 at 9:30pm
                                        </div>
                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Enim maiores
                                            adipisci optio ex, laboriosam facilis non pariatur itaque illo sunt?</p>
                                    </div>
                                </li>
                                <li class="comment-children">
                                    <div class="author-avatar">
                                        <img src="assets/img/blog/comment-icon.png" alt="">
                                    </div>
                                    <div class="comment-body">
                                        <span class="reply-btn"><a href="#">reply</a></span>
                                        <h5 class="comment-author">admin</h5>
                                        <div class="comment-post-date">
                                            20 nov, 2019 at 9:30pm
                                        </div>
                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Enim maiores
                                            adipisci optio ex, laboriosam facilis non pariatur itaque illo sunt?</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="author-avatar">
                                        <img src="assets/img/blog/comment-icon.png" alt="">
                                    </div>
                                    <div class="comment-body">
                                        <span class="reply-btn"><a href="#">reply</a></span>
                                        <h5 class="comment-author">admin</h5>
                                        <div class="comment-post-date">
                                            20 nov, 2019 at 9:30pm
                                        </div>
                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Enim maiores
                                            adipisci optio ex, laboriosam facilis non pariatur itaque illo sunt?</p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <!-- comment area end -->

                        <!-- start blog comment box -->
                        <div class="blog-comment-wrapper section-bg-color mt-50">
                            <h3>Deixe seu comentário</h3>
                          <!--  <p>Your email address will not be published. Required fields are marked *</p>-->
                            <form action="#">
                                <div class="comment-post-box">
                                    <div class="row">
                                        <div class="col-12">
                                            <label>comment</label>
                                            <textarea name="commnet" placeholder="Escreva um comentário"></textarea>
                                        </div>
                                        <div class="col-lg-4 col-md-4">
                                            <label>Name</label>
                                            <input type="text" class="coment-field" placeholder="Nome">
                                        </div>
                                        <div class="col-lg-4 col-md-4">
                                            <label>Email</label>
                                            <input type="text" class="coment-field" placeholder="Email">
                                        </div>
                                        
                                        <div class="col-12">
                                            <div class="coment-btn">
                                                <input class="btn btn__bg" type="submit" name="submit" value="Enviar comentário">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <!-- start blog comment box -->
                    </div>
                </div>
            </div>
        </div>
        <!-- blog main wrapper end -->

    </main>
    <!-- main wrapper end -->
<?php include("footer.php"); ?>
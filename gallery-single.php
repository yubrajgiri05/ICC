<?php include("includes/header.php"); ?>
<div class="section-banner">
    <figure>
        <img src="./images/section-banner.png" alt="">
        <figcaption>
            <h1 class="section-banner-heading">Gallery</h1>
            <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Gallery</li>
                </ol>
            </nav>
        </figcaption>
    </figure>
</div>
<div class="container gallery-heading section-gap">
    <div class="section-sub-heading">
        <h2>Gallery</h2>
        <div class="d-flex ">
            <div>Category</div>
            <div class="dropdown">
                <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown"
                    aria-expanded="false">
                    Latest
                </button>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#">Images</a></li>
                    <li><a class="dropdown-item" href="#">Videos</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>
<div class="container gallery-single">
    <div class="row gy-4">
        <div class="col-sm-12 col-md-12 col-lg-4">
            <a href="./images/gallery1.png" data-fancybox="gallery" data-caption="Caption #1">
                <figure>
                    <img src="./images/gallery1.png" />
                </figure>
            </a>
        </div>
        <div class="col-sm-12 col-md-12 col-lg-4">
            <a href="./images/gallery2.png" data-fancybox="gallery"
                 data-caption="Caption #2">
                <figure>
                    <img src="./images/gallery2.png" />
                </figure>
            </a>
        </div>
        <div class="col-sm-12 col-md-12 col-lg-4">
            <a href="./images/gallery3.png" data-fancybox="gallery" data-caption="Caption #1">
                <figure>
                    <img src="./images/gallery3.png" />
                </figure>
            </a>
        </div>
        <div class="col-sm-12 col-md-12 col-lg-6">
            <a href="./images/gallery4.png" data-src="https://www.youtube.com/watch?v=o-Pj-2Y_0Mk" data-fancybox="gallery" data-caption="Caption #1">
                <div class="video">
                    <figure>
                        <img src="./images/gallery4.png" />
                        <figcaption>
                        <i class="fa-solid fa-play"></i>
                        </figcaption>
                    </figure>
                </div>
            </a>
        </div>
        <div class="col-sm-12 col-md-12 col-lg-6">
            <a href="./images/gallery5.png" data-src="https://www.youtube.com/watch?v=o-Pj-2Y_0Mk" data-fancybox="gallery" data-caption="Caption #1">
                <div class="video">
                    <figure>
                        <img src="./images/gallery5.png" />
                        <figcaption>
                        <i class="fa-solid fa-play"></i>
                        </figcaption>
                    </figure>
                </div>
            </a>
        </div>
        <div class="col-sm-12 col-md-12 col-lg-4">
            <a href="./images/gallery2.png" data-fancybox="gallery" data-caption="Caption #1">
                <figure>
                    <img src="./images/gallery2.png" />
                </figure>
            </a>
        </div>
        <div class="col-sm-12 col-md-12 col-lg-4">
            <a href="./images/gallery3.png" data-fancybox="gallery" data-caption="Caption #1">
                <figure>
                    <img src="./images/gallery3.png" />
                </figure>
            </a>
        </div>
        <div class="col-sm-12 col-md-12 col-lg-4">
            <a href="./images/gallery1.png" data-fancybox="gallery" data-caption="Caption #1">
                <figure>
                    <img src="./images/gallery1.png" />
                </figure>
            </a>
        </div>
    </div>

</div>

<?php include("includes/footer.php"); ?>
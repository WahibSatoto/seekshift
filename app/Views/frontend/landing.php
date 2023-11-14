<?= $this->extend('frontend/layout') ?>
<?= $this->section('konten') ?>
<!-- Header Start -->
<div class="jumbotron jumbotron-fluid mb-5">
    <div class="container text-center py-5">
        <h1 class="text-primary mb-4">Cari & Dapatkan Pekerjaan</h1>
        <h1 class="text-white display-3 mb-5"><i>SEEKSHIFT</i></h1>
        <div class="mx-auto" style="width: 100%; max-width: 600px">
            <div class="input-group">
                <input type="text" class="form-control border-light" style="padding: 30px" placeholder="Temukan Pekerjaan" />
                <div class="input-group-append">
                    <button class="btn btn-primary px-3">Cari Pekerjaan</button>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Header End -->

<!-- About Start -->
<div class="container-fluid py-5">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-5 pb-4 pb-lg-0">
                <img class="img-fluid w-100" src="<?= base_url() ?>frontend/img/bn1.jpg" alt="" />
                <div class="bg-primary text-dark text-center p-4">
                    <h3 class="m-0">Ayo Beralih Sekarang</h3>
                </div>
            </div>
            <div class="col-lg-7">
                <h6 class="text-primary text-uppercase font-weight-bold">
                    Tentang Kami
                </h6>
                <h1 class="mb-4">
                    Cepat & Mudah Menemukan Pekerjaan Dengan Seekshift
                </h1>
                <p class="mb-4">
                    Dolores lorem lorem ipsum sit et ipsum. Sadip sea amet diam dolore
                    sed et. Sit rebum labore sit sit ut vero no sit. Et elitr stet
                    dolor sed sit et sed ipsum et kasd ut. Erat duo eos et erat sed
                    diam duo
                </p>
                <div class="d-flex align-items-center pt-2">
                    <button type="button" class="btn-play" data-toggle="modal" data-src="<?= base_url() ?>frontend/img/bn1.jpg" data-target="#videoModal">
                        <span></span>
                    </button>
                    <h5 class="font-weight-bold m-0 ml-4">Play Video</h5>
                </div>
            </div>
        </div>
    </div>
    <!-- Video Modal -->
    <div class="modal fade" id="videoModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <!-- 16:9 aspect ratio -->
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe class="embed-responsive-item" src="" id="video" allowscriptaccess="always" allow="autoplay"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- About End -->

<!--  Quote Request Start -->
<div class="container-fluid bg-secondary my-5">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-7 py-5 py-lg-0">
                <h6 class="text-primary text-uppercase font-weight-bold">Ulasan</h6>
                <h1 class="mb-4">Beri Kami Ulasan</h1>
                <p class="mb-4">
                    Ulasan anda sangat membantu kami, Mohon untuk memberikan ulasan
                    dengan baik. Terima kasih telah menggunakan layanan kami. Support
                    kami untuk terus berkembang
                </p>
            </div>
            <div class="col-lg-5">
                <div class="bg-success py-5 px-4 px-sm-5">
                    <?= form_open('landingpage/ulasansave') ?>
                    <?= csrf_field() ?>
                    <div class="form-group">
                        <input type="text" class="form-control border-0 p-4" placeholder="Nama" name="nama" required="required" />
                    </div>
                    <div class="form-group">
                        <input type="email" class="form-control border-0 p-4" placeholder="Your Email" name="email" required="required" />
                    </div>
                    <div class="form-group">
                        <textarea name="ulasan" id="" rows="6" class="form-control border-0 p-4" placeholder="Tulis ulasan anda"></textarea>
                    </div>
                    <div class="form-group">
                        <select class="custom-select border-0 px-4" name="sebagai" style="height: 47px">
                            <option selected>- Pilihan sebagai</option>
                            <option value="Pencari Kerja">Pencari Kerja</option>
                            <option value="Perusahaan">Perusahaan</option>
                        </select>
                    </div>
                    <div>
                        <button class="btn btn-primary btn-block border-0 py-3" type="submit">
                            Kirim Ulasan
                        </button>
                    </div>
                    <?= form_close() ?>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Quote Request Start -->

<!-- Services Start -->
<div class="container-fluid pt-5">
    <div class="container">
        <div class="text-center pb-2">
            <h6 class="text-primary text-uppercase font-weight-bold">
                Our Services
            </h6>
            <h1 class="mb-4">Best Logistic Services</h1>
        </div>
        <div class="row pb-3">
            <div class="col-lg-3 col-md-6 text-center mb-5">
                <div class="d-flex align-items-center justify-content-center bg-primary mb-4 p-4">
                    <i class="fa fa-2x fa-plane text-dark pr-3"></i>
                    <h6 class="text-white font-weight-medium m-0">Air Freight</h6>
                </div>
                <p>
                    Diam amet eos at no eos sit lorem, amet rebum ipsum clita stet
                    diam sea est diam
                </p>
                <a class="border-bottom text-decoration-none" href="">Read More</a>
            </div>
            <div class="col-lg-3 col-md-6 text-center mb-5">
                <div class="d-flex align-items-center justify-content-center bg-primary mb-4 p-4">
                    <i class="fa fa-2x fa-ship text-dark pr-3"></i>
                    <h6 class="text-white font-weight-medium m-0">Ocean Freight</h6>
                </div>
                <p>
                    Diam amet eos at no eos sit lorem, amet rebum ipsum clita stet
                    diam sea est diam
                </p>
                <a class="border-bottom text-decoration-none" href="">Read More</a>
            </div>
            <div class="col-lg-3 col-md-6 text-center mb-5">
                <div class="d-flex align-items-center justify-content-center bg-primary mb-4 p-4">
                    <i class="fa fa-2x fa-truck text-dark pr-3"></i>
                    <h6 class="text-white font-weight-medium m-0">Land Transport</h6>
                </div>
                <p>
                    Diam amet eos at no eos sit lorem, amet rebum ipsum clita stet
                    diam sea est diam
                </p>
                <a class="border-bottom text-decoration-none" href="">Read More</a>
            </div>
            <div class="col-lg-3 col-md-6 text-center mb-5">
                <div class="d-flex align-items-center justify-content-center bg-primary mb-4 p-4">
                    <i class="fa fa-2x fa-store text-dark pr-3"></i>
                    <h6 class="text-white font-weight-medium m-0">Cargo Storage</h6>
                </div>
                <p>
                    Diam amet eos at no eos sit lorem, amet rebum ipsum clita stet
                    diam sea est diam
                </p>
                <a class="border-bottom text-decoration-none" href="">Read More</a>
            </div>
        </div>
    </div>
</div>
<!-- Services End -->
<!-- Count -->
<div class="container-fluid pt-5">
    <div class="continer px-5">
        <div class="row">
            <div class="col-sm-4 text-center">
                <h1 class="text-primary mb-2" data-toggle="counter-up">225</h1>
                <h6 class="font-weight-bold mb-4">Total Lowongan Kerja</h6>
            </div>
            <div class="col-sm-4 text-center">
                <h1 class="text-primary mb-2" data-toggle="counter-up">1050</h1>
                <h6 class="font-weight-bold mb-4">Total Lokasi</h6>
            </div>
            <div class="col-sm-4 text-center">
                <h1 class="text-primary mb-2" data-toggle="counter-up">2500</h1>
                <h6 class="font-weight-bold mb-4">Total Kategori</h6>
            </div>
        </div>
    </div>
</div>
<!-- Count End -->
<!-- Features Start -->
<div class="container-fluid bg-secondary my-5">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-5">
                <img class="img-fluid w-100" src="<?= base_url() ?>frontend/img/bn3.jpg" alt="" />
            </div>
            <div class="col-lg-7 py-5 py-lg-0">
                <h6 class="text-primary text-uppercase font-weight-bold">
                    Kenapa Harus Seekshift?
                </h6>
                <h1 class="mb-4">Mudah, Cepat, dan Aman</h1>
                <p class="mb-4">
                    Dolores lorem lorem ipsum sit et ipsum. Sadip sea amet diam dolore
                    sed et. Sit rebum labore sit sit ut vero no sit. Et elitr stet
                    dolor sed sit et sed ipsum et kasd ut. Erat duo eos et erat sed
                    diam duo
                </p>
                <ul class="list-inline">
                    <li>
                        <h6>
                            <i class="far fa-dot-circle text-primary mr-3"></i>Dapat
                            Mencari Pekerjaan
                        </h6>
                    </li>
                    <li>
                        <h6>
                            <i class="far fa-dot-circle text-primary mr-3"></i>Dapat
                            Memposting Lowongan Kerja
                        </h6>
                    </li>
                    <li>
                        <h6>
                            <i class="far fa-dot-circle text-primary mr-3"></i>Resume
                            Online
                        </h6>
                    </li>
                </ul>
                <a href="" class="btn btn-primary mt-3 py-2 px-4">Baca Selengkapnya</a>
            </div>
        </div>
    </div>
</div>
<!-- Features End -->

<!-- Team Start -->
<div class="container-fluid pt-5">
    <div class="container">
        <div class="text-center pb-2">
            <h6 class="text-primary text-uppercase font-weight-bold">
                Delivery Team
            </h6>
            <h1 class="mb-4">Meet Our Delivery Team</h1>
        </div>
        <div class="row">
            <div class="col-lg-3 col-md-6">
                <div class="team card position-relative overflow-hidden border-0 mb-5">
                    <img class="card-img-top" src="<?= base_url() ?>frontend/img/team-1.jpg" alt="" />
                    <div class="card-body text-center p-0">
                        <div class="team-text d-flex flex-column justify-content-center bg-secondary">
                            <h5 class="font-weight-bold">Full Name</h5>
                            <span>Designation</span>
                        </div>
                        <div class="team-social d-flex align-items-center justify-content-center bg-primary">
                            <a class="btn btn-outline-dark btn-social mr-2" href="#"><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-outline-dark btn-social mr-2" href="#"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-outline-dark btn-social mr-2" href="#"><i class="fab fa-linkedin-in"></i></a>
                            <a class="btn btn-outline-dark btn-social" href="#"><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="team card position-relative overflow-hidden border-0 mb-5">
                    <img class="card-img-top" src="<?= base_url() ?>frontend/img/team-2.jpg" alt="" />
                    <div class="card-body text-center p-0">
                        <div class="team-text d-flex flex-column justify-content-center bg-secondary">
                            <h5 class="font-weight-bold">Full Name</h5>
                            <span>Designation</span>
                        </div>
                        <div class="team-social d-flex align-items-center justify-content-center bg-primary">
                            <a class="btn btn-outline-dark btn-social mr-2" href="#"><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-outline-dark btn-social mr-2" href="#"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-outline-dark btn-social mr-2" href="#"><i class="fab fa-linkedin-in"></i></a>
                            <a class="btn btn-outline-dark btn-social" href="#"><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="team card position-relative overflow-hidden border-0 mb-5">
                    <img class="card-img-top" src="<?= base_url() ?>frontend/img/team-3.jpg" alt="" />
                    <div class="card-body text-center p-0">
                        <div class="team-text d-flex flex-column justify-content-center bg-secondary">
                            <h5 class="font-weight-bold">Full Name</h5>
                            <span>Designation</span>
                        </div>
                        <div class="team-social d-flex align-items-center justify-content-center bg-primary">
                            <a class="btn btn-outline-dark btn-social mr-2" href="#"><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-outline-dark btn-social mr-2" href="#"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-outline-dark btn-social mr-2" href="#"><i class="fab fa-linkedin-in"></i></a>
                            <a class="btn btn-outline-dark btn-social" href="#"><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="team card position-relative overflow-hidden border-0 mb-5">
                    <img class="card-img-top" src="<?= base_url() ?>frontend/img/team-4.jpg" alt="" />
                    <div class="card-body text-center p-0">
                        <div class="team-text d-flex flex-column justify-content-center bg-secondary">
                            <h5 class="font-weight-bold">Full Name</h5>
                            <span>Designation</span>
                        </div>
                        <div class="team-social d-flex align-items-center justify-content-center bg-primary">
                            <a class="btn btn-outline-dark btn-social mr-2" href="#"><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-outline-dark btn-social mr-2" href="#"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-outline-dark btn-social mr-2" href="#"><i class="fab fa-linkedin-in"></i></a>
                            <a class="btn btn-outline-dark btn-social" href="#"><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Team End -->

<!-- Testimonial Start -->
<div class="container-fluid py-5">
    <div class="container">
        <div class="text-center pb-2">
            <h6 class="text-primary text-uppercase font-weight-bold">
                Testimoni
            </h6>
            <h1 class="mb-4">User Seekshift</h1>
        </div>
        <div class="owl-carousel testimonial-carousel">
            <?php foreach ($dataulasan as $key) : ?>
                <div class="position-relative bg-secondary p-4">
                    <i class="fa fa-3x fa-quote-right text-primary position-absolute" style="top: -6px; right: 0"></i>
                    <div class="d-flex align-items-center mb-3">
                        <img class="img-fluid rounded-circle" src="<?= base_url() ?>frontend/img/testimonial-1.jpg" style="width: 60px; height: 60px" alt="" />
                        <div class="ml-3">
                            <h6 class="font-weight-semi-bold m-0"><?= $key['ulasannama'] ?></h6>
                            <small>- <?= $key['ulasansebagai'] ?></small>
                        </div>
                    </div>
                    <p class="m-0">
                        <?= $key['ulasantext'] ?>
                    </p>
                </div>
            <?php endforeach ?>
        </div>
    </div>
</div>
<!-- Testimonial End -->

<!-- Blog Start -->
<div class="container-fluid pt-5">
    <div class="container">
        <div class="text-center pb-2">
            <h6 class="text-primary text-uppercase font-weight-bold">Our Blog</h6>
            <h1 class="mb-4">Latest From Blog</h1>
        </div>
        <div class="row">
            <div class="col-md-6 mb-5">
                <div class="position-relative">
                    <img class="img-fluid w-100" src="<?= base_url() ?>frontend/img/blog-1.jpg" alt="" />
                    <div class="position-absolute bg-primary d-flex flex-column align-items-center justify-content-center rounded-circle" style="width: 60px; height: 60px; bottom: -30px; right: 30px">
                        <h4 class="font-weight-bold mb-n1">01</h4>
                        <small class="text-white text-uppercase">Jan</small>
                    </div>
                </div>
                <div class="bg-secondary" style="padding: 30px">
                    <div class="d-flex mb-3">
                        <div class="d-flex align-items-center">
                            <img class="rounded-circle" style="width: 40px; height: 40px" src="<?= base_url() ?>frontend/img/user.jpg" alt="" />
                            <a class="text-muted ml-2" href="">John Doe</a>
                        </div>
                        <div class="d-flex align-items-center ml-4">
                            <i class="far fa-bookmark text-primary"></i>
                            <a class="text-muted ml-2" href="">Web Design</a>
                        </div>
                    </div>
                    <h4 class="font-weight-bold mb-3">
                        Kasd tempor diam sea justo dolor
                    </h4>
                    <p>
                        Dolor sea ipsum ipsum et. Erat duo lorem magna vero dolor
                        dolores. Rebum eirmod no dolor diam dolor amet ipsum. Lorem
                        lorem sea sed diam est lorem magna
                    </p>
                    <a class="border-bottom border-primary text-uppercase text-decoration-none" href="">Read More <i class="fa fa-angle-right"></i></a>
                </div>
            </div>
            <div class="col-md-6 mb-5">
                <div class="position-relative">
                    <img class="img-fluid w-100" src="<?= base_url() ?>frontend/img/blog-2.jpg" alt="" />
                    <div class="position-absolute bg-primary d-flex flex-column align-items-center justify-content-center rounded-circle" style="width: 60px; height: 60px; bottom: -30px; right: 30px">
                        <h4 class="font-weight-bold mb-n1">01</h4>
                        <small class="text-white text-uppercase">Jan</small>
                    </div>
                </div>
                <div class="bg-secondary" style="padding: 30px">
                    <div class="d-flex mb-3">
                        <div class="d-flex align-items-center">
                            <img class="rounded-circle" style="width: 40px; height: 40px" src="<?= base_url() ?>frontend/img/user.jpg" alt="" />
                            <a class="text-muted ml-2" href="">John Doe</a>
                        </div>
                        <div class="d-flex align-items-center ml-4">
                            <i class="far fa-bookmark text-primary"></i>
                            <a class="text-muted ml-2" href="">Web Design</a>
                        </div>
                    </div>
                    <h4 class="font-weight-bold mb-3">
                        Kasd tempor diam sea justo dolor
                    </h4>
                    <p>
                        Dolor sea ipsum ipsum et. Erat duo lorem magna vero dolor
                        dolores. Rebum eirmod no dolor diam dolor amet ipsum. Lorem
                        lorem sea sed diam est lorem magna
                    </p>
                    <a class="border-bottom border-primary text-uppercase text-decoration-none" href="">Read More <i class="fa fa-angle-right"></i></a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Blog End -->
<?= $this->endSection('konten') ?>
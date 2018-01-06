@extends('layouts.app')

@section('content')



  <!-- Header -->
  <header class="masthead" id="header">
    <div class="container">
      <div class="intro-text">
        <div class="intro-lead-in">Welcome To South Borneo!</div>
        <div class="intro-heading text-uppercase">Enjoy the trip</div>
        <a class="btn btn-primary btn-xl  js-scroll-trigger" href="#services">v</a>
      </div>
    </div>
  </header>

  <!-- Services -->
  <section id="services">
    <div class="container">
      <div class="row">

        <div class="col-lg-6" side>
  <img src="/img/1.jpg" alt="#" style="width:100%">
        </div>
        <div class="col-lg-6" style="padding-top:80px;padding-left:40px;">
          <h3>judul blog</h3>
          <p style="text-align:justify;">          Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero unde, sed, incidunt et ea quo dolore laudantium  Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero unde, sed, incidunt et ea quo dolore laudantium  consectetur!
</p>
      <a class="btn btn-blog" href="#">More Blog</a>
        </div>
      </div>
    </div>
  </section>

  <!-- Portfolio Grid -->
  <section class="" id="portfolio">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
          <h2 class="section-heading text-uppercase">Open Trip</h2>
          <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
        </div>
      </div>
      <div class="row">
          @foreach( $destinasi as $d)
        <div class="col-md-4 col-sm-12 portfolio-item text-center" href="detail/{{$d->id}}">
          <a class="portfolio-link"  href="detail/{{$d->id}}">
            <div class="portfolio-hover">
              <div class="portfolio-hover-content">
                <i class="fa  fa-arrow-right fa-3x"></i>
              </div>
            </div>
          <img src="/img/destinasi/{{$d->gambar_utama}}" alt="#"  class="poster ">
          </a>
          <div class="portfolio-caption">
            <h4>{{$d->nama_destinasi}}</h4>
            <p class="text-muted">{{$d->alamat}}</p>
          </div>
        </div>
@endforeach

      </div>
    </div>
  </section>

  <!-- Team -->



  <!-- Clients -->
  <section class="py-5">
    <div class="container">
      <div class="row">
        <div class="col-md-3 col-sm-6">
          <a href="#">
            <img class="img-fluid d-block mx-auto" src="img/logos/envato.jpg" alt="">
          </a>
        </div>
        <div class="col-md-3 col-sm-6">
          <a href="#">
            <img class="img-fluid d-block mx-auto" src="img/logos/designmodo.jpg" alt="">
          </a>
        </div>
        <div class="col-md-3 col-sm-6">
          <a href="#">
            <img class="img-fluid d-block mx-auto" src="img/logos/themeforest.jpg" alt="">
          </a>
        </div>
        <div class="col-md-3 col-sm-6">
          <a href="#">
            <img class="img-fluid d-block mx-auto" src="img/logos/creative-market.jpg" alt="">
          </a>
        </div>
      </div>
    </div>
  </section>

  <!-- Contact -->
  <section id="contact">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
          <h2 class="section-heading ">Contact </h2>
          <hr>
          <br>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-12">
          <form id="contactForm" name="sentMessage" novalidate>
            <div class="row">
              <div class="col-md-6 text-center">
                <h5>Alamat Kantor</h5>
                  <iframe  src="http://maps.google.com/maps?hl=en&amp;ie=UTF8&amp;ll=37.0625,-95.677068&amp;spn=56.506174,79.013672&amp;t=m&amp;z=4&amp;output=embed"scrolling="no" width="300px" height="200px"></iframe>
              </div>
              <div class="col-md-6  text-center">
                <h5>Social Media</h5>
                  <ul class="list-inline social-buttons">
                    <li class="list-inline-item text-center">
                      <a href="#">
                        <i class="fa fa-twitter"></i>
                      </a>
                    </li>
                    <li class="list-inline-item text-center">
                      <a href="#">
                        <i class="fa fa-facebook"></i>
                      </a>
                    </li>
                    <li class="list-inline-item text-center">
                    <a href="#">
                      <i class="fa fa-instagram"></i>
                    </a>
                  </li>
                </ul>
                <h5>Email:</h5>
                <p>kalseltrip@gmail.com</p>
                <h5>Telepon:</h5>
                <p>0851176524314</p>
                <a class="btn btn-blog" href="##tambahdestinasi" data-toggle="modal"
                                 data-target="#tambahdestinasi"> Send us a message</a>
              </div>
              <div class="clearfix"></div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>

  <!-- Footer -->
  <footer>
    <div class="container">
      <div class="row">
        <div class="col-md-12 pull-right">
          <span class="copyright">Copyright &copy; 2017</span>
        </div>

      </div>
    </div>
  </footer>
  <div id="tambahdestinasi" class="modal fade" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Tambah data Semester</h4>
          <button type="button" class="close pull-right" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <!-- form login -->
          <form  method="post" enctype="multipart/form-data" action="">
              {{csrf_field() }}

              <div class="form-group">
                <label for="kode_destinasi">Email </label>
                <input type="text" name="kode_destinasi"  class="form-control" />
              </div>
            <div class="form-group">
              <label for="nama_destinasi">Nama </label>
              <input type="text" name="nama_destinasi"  class="form-control" />
            </div>

            <div class="form-group">
              <label for="alamat">Pesan</label>
              <textarea name="name" rows="8" cols="50" class="form-control"></textarea>
            </div>
             <div class="text-right">


             </div>
           </div>

          </form>
          <!-- end form login -->
        </div>
      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div><!-- /.modal -->

@endsection

@extends('layouts.app')

@section('content')



  <!-- Header -->
  <header class="masthead" id="header">
    <div class="container">
      <div class="intro-text">
        <div class="intro-lead-in" style="font-family: 'Yellowtail', cursive; text-shadow: 2px 2px rgba(0, 0, 0, 0.61)">Welcome To South Borneo!</div>
        <div class="intro-heading text-uppercase" style="font-family: 'Handlee', cursive; text-shadow: 2px 2px rgba(0, 0, 0, 0.61);
">Enjoy the trip</div>
        <ul class="list-inline social-buttons">

          <li class="list-inline-item">
            <a href="#destinasi" class=" js-scroll-trigger">
              <i class="fa  fa-play-circle"></i>
            </a>
          </li>
        </ul>
      </div>
    </div>
  </header>

  <!-- Portfolio Grid -->
     <section class="" id="destinasi">
       <div class="container">
         <div class="row">
           <div class="col-lg-12 text-center">
             <h2 class="section-heading text-uppercase">Open Trip</h2>
             <h3 class="section-subheading text-muted">List Destinasi </h3>
           </div>
         </div>
         <div class="row">
             @foreach( $destinasi as $d)
           <div class="col-md-4 col-sm-6 destinasi-item">
             <a class="destinasi-link"  href="detail/{{$d->id}}">
               <div class="destinasi-hover">
                 <div class="destinasi-hover-content">
                   <i class="fa fa-camera-retro fa-3x"></i>
                 </div>
               </div>
                 <img src="/img/destinasi/{{$d->gambar_utama}}" alt="detail/{{$d->id}}"  class="poster img-fluid">
             </a>
             <div class="destinasi-caption">
               <h4>{{$d->nama_destinasi}}</h4>
               <p class="text-muted">{{$d->alamat}}</p>
             </div>
           </div>
           @endforeach
         </div>
       </div>
     </section>

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
                  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7965.182660165577!2d114.83578462258916!3d-3.449096789958274!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x2c0e4710560d8d74!2sUniska+Banjarbaru!5e0!3m2!1sen!2sid!4v1515882535133" scrolling="no" width="300" height="200" frameborder="0" style="border:0" allowfullscreen></iframe>
              </div>
              <div class="col-md-6  text-center" style="color:white;">
                <h5>Social Media</h5>
                  <ul class="list-inline social-button">
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
                                 data-target="#tambahdestinasi" style="border:1px solid white;"> Send us a message</a>
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
          <h4 class="modal-title">Kirim Pesan Ke Admin</h4>
          <button type="button" class="close pull-right" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <!-- form login -->
          <form  method="post" action="/kirim-pesan">
              {{csrf_field() }}

              <div class="form-group">
                <label for="kode_destinasi">Email </label>
                <input type="text" name="email"  class="form-control" />
              </div>
            <div class="form-group">
              <label for="nama_destinasi">Nama </label>
              <input type="text" name="nama"  class="form-control" />
            </div>

            <div class="form-group">
              <label for="alamat">Pesan</label>
              <textarea name="pesan" rows="8" cols="50" class="form-control"></textarea>
            </div>
             <div class="text-right">
               <input type="submit" name="submit" value="submit" class="btn btn-warning">
             </div>
           </div>

          </form>
          <!-- end form login -->
        </div>
      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div><!-- /.modal -->

@endsection

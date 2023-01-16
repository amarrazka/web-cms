@extends('header')
@section('content')
  <!-- ======= Hero Section ======= -->
  <section id="hero">
    <div id="heroCarousel" data-bs-interval="5000" class="carousel slide carousel-fade" data-bs-ride="carousel">

      <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

      <div class="carousel-inner" role="listbox">

        <!-- Slide 1 -->
        <div class="carousel-item active" style="background-image: url(slide/g1.png)">
          <div class="carousel-container">
            <div class="container">
              <h2 class="animate__animated animate__fadeInDown">Welcome to <span>Travel Umroh Haji</span></h2>
              <p class="animate__animated animate__fadeInUp">kami menyediakan layanan umroh dengan fasilitas yang memadai.</p>
              <a href="#about" class="btn-get-started animate__animated animate__fadeInUp scrollto">Read More</a>
            </div>
          </div>
        </div>

        <!-- Slide 2 -->
        <div class="carousel-item" style="background-image: url(slide/pg2.jpg)">
          <div class="carousel-container">
            <div class="container">
              <h2 class="animate__animated animate__fadeInDown">Cita-Cita untuk diwujudkan.</h2>
              <p class="animate__animated animate__fadeInUp">keinginan semua umat muslim untuk berangkat ke tanah suci.</p>
              <a href="#about" class="btn-get-started animate__animated animate__fadeInUp scrollto">Read More</a>
            </div>
          </div>
        </div>

        <!-- Slide 3 -->
        <div class="carousel-item" style="background-image: url(slide/slide3.png)">
          <div class="carousel-container">
            <div class="container">
              <h2 class="animate__animated animate__fadeInDown">Deskripsi paket</h2>
              <p class="animate__animated animate__fadeInUp">Paket Best Seller Travel Umroh Haji adalah paket kami yang sudah kami siapkan secara matang sehingga sudah pasti untuk keberangkatannya.</p>
              <a href="#about" class="btn-get-started animate__animated animate__fadeInUp scrollto">Read More</a>
            </div>
          </div>
        </div>

      </div>

      <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
        <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
      </a>

      <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
        <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
      </a>

    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>FASILITAS</h2>
          <p>FASILITAS YANG DI DAPAT</p>
        </div>

        <div class="row content">
          <div class="col-lg-6">
           <!--  <p>
              Visa Umroh dan Asuransi.
            </p>

            <P>
              Pesawat udara kelas dunia yang nyaman.
            </P>
            <P>
              Handling Airport (Jakarta dan Jeddah).
            </P> -->
            <ul>
              <li><i class="ri-check-double-line"></i> Handling Airport (Jakarta dan Jeddah).</li>
              <li><i class="ri-check-double-line"></i> Visa Umroh dan Asuransi.</li>
              <li><i class="ri-check-double-line"></i> Pesawat udara kelas dunia yang nyaman.</li>
              <li><i class="ri-check-double-line"></i>Bus AC Eksekutif terbaru. </li>
              <li><i class="ri-check-double-line"></i>Hotel Bintang 4/5 sesuai deskripsi diatas. </li>
              <li><i class="ri-check-double-line"></i>Mutowwif berpengalaman dengan Bahasa Indonesia. </li>
              <li><i class="ri-check-double-line"></i>Handy Talky untuk keperluan ibadah umroh. </li>

            </ul>
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0">
            <p>
             Calon Jamaah harus melunasi paket Best Seller Umroh paling lambat 2 bulan sebelum keberangkatan (atau bisa dengan cicilan kartu kredit / tokopedia paylater sesuai fatwa halal MUI).
            </p>
            <a href="#" class="btn-learn-more">Learn More</a>
          </div>
        </div>

      </div>
    </section><!-- End About Section -->

    <!-- ======= Counts Section ======= -->
    <section id="counts" class="counts">
      <div class="container" data-aos="fade-up">

        <div class="row no-gutters">

          <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch">
            <div class="count-box">
              <i class="bi bi-emoji-smile"></i>
              <span data-purecounter-start="0" data-purecounter-end="232" data-purecounter-duration="1" class="purecounter"></span>
              <p><strong>Rating Konsumen</strong> Sangat Puas</p>
              <a href="#">Find out more &raquo;</a>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch">
            <div class="count-box">
              <i class="bi bi-journal-richtext"></i>
              <span data-purecounter-start="0" data-purecounter-end="521" data-purecounter-duration="1" class="purecounter"></span>
              <p><strong>Project Yang Tercipta</strong> Berjalan Dengan Baik</p>
              <a href="#">Find out more &raquo;</a>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch">
            <div class="count-box">
              <i class="bi bi-headset"></i>
              <span data-purecounter-start="0" data-purecounter-end="1463" data-purecounter-duration="1" class="purecounter"></span>
              <p><strong>Sponsor</strong>  Berkerja Sama</p>


              <a href="#">Find out more &raquo;</a>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch">
            <div class="count-box">
              <i class="bi bi-people"></i>
              <span data-purecounter-start="0" data-purecounter-end="15" data-purecounter-duration="1" class="purecounter"></span>
              <p><strong>Karyawan</strong> Berkinerja Sangat Baik</p>
              <a href="#">Find out more &raquo;</a>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Counts Section -->

    <!-- ======= Why Us Section ======= -->
    <section id="why-us" class="why-us section-bg">
      <div class="container-fluid" data-aos="fade-up">

        <div class="row">

          <div class="col-lg-5 align-items-stretch video-box" style='background-image: url("rufy.jpg");' data-aos="zoom-in" data-aos-delay="100">
            <a href="https://youtu.be/HU65fWdHiMI" class="venobox play-btn mb-4" data-vbtype="video" data-autoplay="true"></a>
          </div>

          <div class="col-lg-7 d-flex flex-column justify-content-center align-items-stretch">

            <div class="content">
              <h3>TRAVEL UMROH HAJI <strong>beribadah bersama</strong></h3>
              <p>
                MENUJU JALAN YANG LEBIH BAIK
              </p>
            </div>

            <div class="accordion-list">
              <ul>
                <li>
                  <a data-bs-toggle="collapse" class="collapse" data-bs-target="#accordion-list-1"><span>01</span>kalian tau syarat syarat umrah? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                  <div id="accordion-list-1" class="collapse show" data-bs-parent=".accordion-list">
                    <p>
                      Syarat untuk mengerjakan umrah sama dengan syarat untuk mengerjakan haji
                    </p>
                    <p>-Beragama Islam.</p>
                     <p>-Baligh, dan berakal.</p> 
                     <p>-Merdeka.</p> 
                     <p>Memiliki kemampuan, adanya bekal dan kendaraan, serta anggaran.
                      Ada mahram (khusus bagi wanita)</p>- 
                  </div>
                </li>

                <li>
                  <a data-bs-toggle="collapse" data-bs-target="#accordion-list-2" class="collapsed"><span>02</span> keutamaan umroh  <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                  <div id="accordion-list-2" class="collapse" data-bs-parent=".accordion-list">
                    <p></p>
                     <p> </p>
                  <p>-PERANTARA BERJIHAD<P>
                    <P>Nabi Muhammad SAW bersabda, “Jihadnya orang-orang yang sudah tua, anak-anak, orang-orang lemah, dan juga wanita adalah haji dan umrah.” (HR An-Nasaiy). Demikian dijelaskan dalam hadits riwayat tersebut bahwa salah satu cara yang dapat dilakukan wanita, orang tua, dan juga anak-anak untuk berjihad di jalan Allah SWT adalah dengan menunaikan ibadah umrah.<P>

                    

                    
                  </div>
                </li>

                <li>
                  <a data-bs-toggle="collapse" data-bs-target="#accordion-list-3" class="collapsed"><span>03 Waktu pelaksanaan umroh&berapa hari umroh</span>  <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                  <div id="accordion-list-3" class="collapse" data-bs-parent=".accordion-list">
                    <p><P>
                      <P>-  Sebenarnya waktu pelaksanaan ibadah umroh relatif bervariasi. Ada yang 9 hari perjalanan. Namun, ada juga yang sampai 12 hari perjalanan. Tentu semua itu tergantung dari travel agen umroh yang Anda pilih<P.>
                        <P><P>
                        <P></P>

                          
                          </P>
                          


                        
                      
                  </div>

              </ul>
            </div>

          </div>

        </div>

      </div>
    </section>

          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </section>End Testimonials Section -->

    <!-- ======= Cta Section ======= -->
    <section id="cta" class="cta">
      <div class="container" data-aos="zoom-in">

        <div class="text-center">
          <h3>KEPUASAAN KONSUMEN HAL YANG PALING PENTING BAGI KAMI</h3>
          <p>TRAVEL UMROH HAJI akan memberikan yg terbaik untuk anda anda</p>
          <a class="cta-btn" href="#">klik bila ingin pesan</a>
        </div>

      </div>
    </section><!-- End Cta Section -->

    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>mekkah</h2>
          <p>Testimonials</p>
        </div>

        <div class="row" data-aos="fade-up" data-aos-delay="100">
          <div class="col-lg-12 d-flex justify-content-center">
            <ul id="portfolio-flters">
              <li data-filter="*" class="filter-active">All</li>
              <!-- <li data-filter=".filter-app">kece</li>
              <li data-filter=".filter-card">gajah</li>
              <li data-filter=".filter-web">masyaallah</li> -->
            </ul>
          </div>
        </div>

        <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <img src="/portfolio/depuk.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>App 1</h4>
              <p>App</p>
              <a href="portfolio/depuk.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="App 1"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <img src="portfolio/gajah.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Web 3</h4>
              <p>Web</p>
              <a href="portfolio/gajah.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Web 3"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <img src="portfolio/gajah1.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>App 2</h4>
              <p>App</p>
              <a href="portfolio/gajah1.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="App 2"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <img src="portfolio/gajah2.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Card 2</h4>
              <p>Card</p>
              <a href="portfolio/gajah2.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Card 2"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <img src="portfolio/xixixi.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Web 2</h4>
              <p>Web</p>
              <a href="portfolio/xixixi.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Web 2"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <img src="portfolio/poci.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>App 3</h4>
              <p>App</p>
              <a href="portfolio/poci.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="App 3"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <img src="portfolio/elang.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Card 1</h4>
              <p>Card</p>
              <a href="portfolio/elang.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Card 1"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <img src="portfolio/hp.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Card 3</h4>
              <p>Card</p>
              <a href="portfolio/hp.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Card 3"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <img src="portfolio/witwiw.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Web 3</h4>
              <p>Web</p>
              <a href="portfolio/witwiw.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Web 3"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Portfolio Section -->

    <!-- ======= Team Section ======= -->
    <section id="team" class="team section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Team</h2>
          <p>Check our Team</p>
        </div>

        <div class="row">

          <div class="col-xl-3 col-lg-4 col-md-6">
            <div class="member" data-aos="zoom-in" data-aos-delay="100">
              <img src="team/bareng.jpeg" class="img-fluid" alt="">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>kita bertiga</h4>
                  <span>barudak bau cokor</span>
                </div>
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-xl-3 col-lg-4 col-md-6" data-wow-delay="0.1s">
            <div class="member" data-aos="zoom-in" data-aos-delay="200">
              <img src="team/junindo.jpeg" class="img-fluid" alt="">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>CEO</h4>
                  <span>orang gemes</span>
                </div>
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href="https://www.instagram.com/qolbyy0/?hl=id"><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-xl-3 col-lg-4 col-md-6" data-wow-delay="0.2s">
            <div class="member" data-aos="zoom-in" data-aos-delay="300">
              <img src="team/deva.jpeg" class="img-fluid" alt="">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>DEVA EZA</h4>
                  <span>orang ganteng sedunia</span>
                </div>
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href="https://www.instagram.com/devaezaapr/?hl=id"><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-xl-3 col-lg-4 col-md-6" data-wow-delay="0.3s">
            <div class="member" data-aos="zoom-in" data-aos-delay="400">
              <img src="team/amar.jpeg" class="img-fluid" alt="">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>amar razka</h4>
                  <span>orang ganteng</span>
                </div>
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href="https://www.instagram.com/amharrazkaa/?hl=id"><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Team Section -->

    <!-- ======= Pricing Section ======= -->
    <section id="pricing" class="pricing">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>BEST SELLER</h2>
          <!-- <p>harga mabro</p> -->
        </div>

        <div class="row align-items-center">

          <div class="col-lg-4">
            <div class="box" data-aos="zoom-in" data-aos-delay="100">
              <h3>harga</h3>
              <h4>Rp.43.000.000<span>per 13 HARI</span></h4>
              <ul>
                <li><i class="bx bx-check"></i> hotel mekkah anjum</li>
                <li><i class="bx bx-check"></i> hotel madinah radwah royal iin</li>
                <li><i class="bx bx-check"></i> free city tour</li>
                <li><i class="bx bx-check"></i>makan 3x sehari </li>
                <!-- <li><i class="bx bx-check"></i>fotbar sama amhar</li> -->
              </ul>
              <a href="#" class="get-started-btn">pesan bro</a>
            </div>
          </div>

          <div class="col-lg-4">
            <div class="box featured" data-aos="zoom-in" data-aos-delay="100">
              <h3>harga</h3>
              <h4>Rp.34.000.000<span>per 12 hari</span></h4>
              <ul>
                <li><i class="bx bx-check"></i> hotel mekkah bintang 5</li>
                <li><i class="bx bx-check"></i> hotel madinah bintang 4</li>
                <li><i class="bx bx-check"></i> city tour mekkah dan madinah</li>
                <li><i class="bx bx-check"></i> makan sehari 3x sehari</li>
                <li><i class="bx bx-check"></i> visa umrah</li>
              </ul>
              <a href="#" class="get-started-btn">pesan cuy</a>
            </div>
          </div>

          <div class="col-lg-4">
            <div class="box" data-aos="zoom-in" data-aos-delay="100">
              <h3>harga</h3>
              <h4>Rp.50.000.000<span>per 14 hari</span></h4>
              <ul>
                <li><i class="bx bx-check"></i> hotel terbaik di mekkah</li>
                <li><i class="bx bx-check"></i> hotel terbaik di madinah</li>
                <li><i class="bx bx-check"></i> makan tinggal pesan apapun itu</li>
                <li><i class="bx bx-check"></i> city tour</li>
                <li><i class="bx bx-check"></i> visa umrah</li>
              </ul>
              <a href="#" class="get-started-btn">pesan</a>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Pricing Section -->

    <!-- ======= Frequently Asked Questions Section ======= -->
    <section id="faq" class="faq">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>F.A.Q</h2>
          <p>Frequently Asked Questions</p>
        </div>

        <div class="row faq-item d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
          <div class="col-lg-5">
            <i class="bx bx-help-circle"></i>
            <h4>Beberapa Hal Untuk Menjawab Umrah Itu Berapa Hari</h4>
          </div>
          <div class="col-lg-7">
            <p>
              umroh itu berapa hari menjadi salah satu hal yang cukup sering ditanyakan oleh para calon jamaah umrah. Hal ini cukup beralasan karena berbeda dengan ibadah haji yang cenderung pasti waktu durasinya, masa pelaksanaan ibadah umrah cenderung bervariasi antara salah satu agen penyelenggara ibadah umrah dengan yang lainnya. Hal ini penting untuk diketahui terutama bagi para jamaah umrah yang bekerja sehingga akan lebih pasti untuk mengambil masa cutinya. Namun sayang, agak sulit untuk menentukan berapa jumlah hari pasti yang diperlukan untuk menunaikan ibadah umrah. Hal ini memang secara resmi tak ada durasi umrah pasti yang bisa ketahui.

              Sebetulnya prosesi umrah sendiri hanya memakan waktu beberapa jam saja. Oleh karena itu perlu dibedakan antara waktu prosesi umrah, dan waktu paket umroh yang disediakan oleh biro umrah.
            </p>
          </div>
        </div><!-- End F.A.Q Item-->

        <div class="row faq-item d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">
          <div class="col-lg-5">
            <i class="bx bx-help-circle"></i>
            <h4>Waktu Prosesi Umrah</h4>
          </div>
          <div class="col-lg-7">
            <p>
              Rabbani Tour sebagai travel umroh memberikan 2x prosesi umroh yang terjadwal dan terbimbing. Jika ingin sampai 3 kali itu bisa saja, tapi diluar jadwal. Secara sederhana prosesi umroh yang biasa dilakukan di Rabbani Tour berkisar antara 6 jam sampai 12 jam. Tergantung dari mana miqot dimulai. Untuk prosesi umroh pertama biasanya berangkat dari Madinah, untuk soal waktu apakah siang hari atau sore atau malam hari disesuaikan dengan itinerary. Perjalanan dari Madinah menuju miqot Bir Ali, kemudian sampai di Mekkah. Lama perjalanan biasa memakan waktu 6 Jam. Setelah itu proses umroh dimulai dan berakhir sekitar 2 Jam kurang lebih prosesi umrohnya.
            </p>
          </div>
        </div><!-- End F.A.Q Item-->

        <div class="row faq-item d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="300">
          <div class="col-lg-5">
            <i class="bx bx-help-circle"></i>
            <h4>5 SYARAT WAJIB UMROH</h4>
          </div>
          <div class="col-lg-7">
            <p>- BERAGAMA ISLAM
             <P> Syarat wajib Umrah yang pertama adalah beragama Islam. Artinya, bagi Sahabat yang beragama Islam, tentu boleh melaksanakan ibadah ke Tanah Suci. Dengan adanya syarat wajib Umrah ini, maka tidak sah hukumnya bagi umat agama lain untuk melaksanakan ibadah Umrah ke Tanah Suci. <P>
             <p>-Dewasa atau baligh 
              <P>Syarat wajib Umrah yang kedua adalah dewasa atau baligh. Seorang muslim yang telah masuk masa baligh diberi anjuran untuk bisa melaksanakan ibadah Umrah. Masa baligh ini ditandai dengan kedewasaan secara fisik. Bila ibadah Umrah pada masa anak-anak, itu tidak akan menggantikan ibadah Umrah ketika dewasa nanti. 

                Namun, bukan berarti anak-anak tidak boleh melaksanakan Umrah. Anak-anak atau bahkan bayi pun sebenarnya dapat melaksanakan Umrah, asalkan kedua orang atau keluarganya memang mampu untuk memberangkatkan anak tersebut. Kendati demikian, anak-anak tidak masuk ke dalam syarat wajib Umrah ya, Sahabat.</P>

            </p>-BERAKAL SEHAT
          </p>Syarat wajib umrah yang ketiga adalah berakal sehat. Artinya, umat muslim dianjurkan untuk melaksanakan ibadah Umrah adalah orang yang memiliki akal yang sehat, sehingga mampu membedakan mana yang baik dan buruk bagi diri sendiri dan sekitar. 

          Dengan begitu, umat muslim yang sudah dapat mempertimbangkan hal yang baik dan buruk secara logis dan dewasa, maka sudah termasuk ke dalam salah satu syarat wajib umrah. Meski demikian, ada syarat wajib umrah lainnya yang harus dipenuhi ya, Sahabat!

          
            <P>-MERDEKA

             <P>Nah, syarat wajib Umrah yang harus dipenuhi selanjutnya adalah merdeka. Apa maksudnya? Jadi, umat muslim yang dianjurkan untuk melaksanakan ibadah Umrah yaitu seseorang yang telah bebas atau merdeka dari perbudakan. 

              Syarat wajib Umrah yang satu ini berkaitan dengan kehidupan pada masa lalu yang dialami oleh bangsa Arab. Jadi, pada masa lalu, bangsa Arab masih memberlakukan perbudakan, sehingga tidak diwajibkan bagi para budak untuk beribadah Haji maupun Umrah.</P> 
              
              </P>-MAMPU
              <P>Syarat wajib Umrah selanjutnya, yaitu mampu. Maksud dari syarat wajib Umrah ini adalah memiliki kemampuan untuk mengerjakan ibadah Umrah, baik dari segi kemampuan fisik, finansial, dan waktu yang disisihkan untuk melaksanakan ibadah ke Tanah Suci. </P>
              <P>-Bagi perempuan harus ada mahramnya
                <P>Satu lagi syarat wajib Umrah yang harus dipenuhi oleh umat muslim yang berjenis kelamin perempuan, yaitu harus ditemani oleh mahramnya. Ada kalanya orang yang beribadah Umrah bukan merupakan pasangan suami istri. Namun, syarat wajib Umrah ini ditetapkan oleh pemerintah Arab Saudi bahwa setiap perempuan beragama Islam yang ingin beribadah Umrah wajib didampingi oleh mahramnya.

                  Mahram bisa berasal dari keluarga inti, seperti orang tua kandung, kayak, adik, atau anak. Sementara, jika sudah tidak ada mahram, bisa ditemani oleh kerabat perempuan, seperti saudara atau teman. </P>

          </div>
        </div><!-- End F.A.Q Item-->

        <div class="row faq-item d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="400">
          <div class="col-lg-5">
            <i class="bx bx-help-circle"></i>
            <h4>Apa Saja Rukun Ibadah Umrah?</h4>
            <P>
              
              

          </div>
          <div class="col-lg-7">
            <p>-Ihram dan berniat memulai Umrah
              
            </p>Berihram artinya keadaan suci yang menandai dimulainya ritual haji untuk setiap jamaah. Rukun Umrah ini dimulai dengan membaca niat Umrah hingga mengenakan pakaian ihram sebagai penutup aurat dan menjaga kebersihan.

            Ihram yang merupakan rukun Umrah dibedakan atas ihram laki-laki dan ihram perempuan. Pakaian ihram untuk laki-laki terdiri dari dua lebar kain yang dipakai dengan cara diikat di bagian bawah dan diselempangkan ke badan. Sedangkan, bagi perempuan, cukup memakai pakaian biasa yang bersih serta tidak diperbolehkan menutup muka dan telapak tangan.
            <P>-Tawaf
              <P>Tawaf merupakan rukun Umrah yang harus dilakukan setelah berihram. Tawaf merupakan ritual berjalan mengelilingi Ka’bah sebanyak tujuh kali putaran. Putaran dimulai di Hajar Aswad dengan arah melawan jarum jam, sehingga saat tawaf, Ka’bah selalu berada di sebelah kiri jamaah. Setelah selesai tawaf, jamaah disunnahkan untuk shalat di belakang Maqam Ibrahim. Tawaf merupakan rukun Umrah yang harus dilakukan setelah berihram. Tawaf merupakan ritual berjalan mengelilingi Ka’bah sebanyak tujuh kali putaran. Putaran dimulai di Hajar Aswad dengan arah melawan jarum jam, sehingga saat tawaf, Ka’bah selalu berada di sebelah kiri jamaah. Setelah selesai tawaf, jamaah disunnahkan untuk shalat di belakang Maqam Ibrahim.

              
          </div>
        </div><!-- End F.A.Q Item-->

        <div class="row faq-item d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="500">
          <div class="col-lg-5">
            <i class="bx bx-help-circle"></i>
            <h4>UMROH</h4>
          </div>
          <div class="col-lg-7">
            <p>
              Umrah (Arab: عمرة) adalah salah satu kegiatan ibadah dalam agama Islam. Hampir mirip dengan ibadah haji, ibadah ini dilaksanakan dengan cara melakukan beberapa ritual ibadah di kota suci Mekkah, khususnya di Masjidil Haram.

Pada istilah teknis syari'ah, Umrah berarti melaksanakan tawaf di Ka'bah dan sa'i antara Shofa dan Marwah, setelah memakai ihram yang diambil dari miqat. Sering disebut pula dengan haji kecil.

Perbedaan umrah dengan haji adalah pada waktu dan tempat. Umrah dapat dilaksanakan sewaktu-waktu (setiap hari, setiap bulan, setiap tahun) dan hanya di Mekkah, sedangkan haji hanya dapat dilaksanakan pada beberapa waktu antara tanggal 8 Dzulhijjah hingga 12 Dzulhijjah serta dilaksanakan sampai ke luar kota Mekkah.[1]
            </p>
          </div>
        </div><!-- End F.A.Q Item-->

      </div>
    </section><!-- End Frequently Asked Questions Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Contact</h2>
          <p>Contact Us</p>
        </div>

        <div class="row">

          <div class="col-lg-6">

            <div class="row">
              <div class="col-md-12">
                <div class="info-box">
                  <i class="bx bx-map"></i>
                  <h3>Our Address</h3>
                  <p>BANDUNG,Ciliwung 04</p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="info-box mt-4">
                  <i class="bx bx-envelope"></i>
                  <h3>Email Us</h3>
                  <p>travelumrohtour@example.com<br>umrohajitravel@example.com</p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="info-box mt-4">
                  <i class="bx bx-phone-call"></i>
                  <h3>Call Us</h3>
                  <p>+1 5589 55488 55<br>+1 6678 254445 41</p>
                </div>
              </div>
            </div>

          </div>

          <div class="col-lg-6">
            <form action="/" method="post" >
              @csrf
              <div class="row">
                <div class="col-md-6 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                </div>
              </div>
              <div class="form-group mt-3">
                <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
              </div>
              <!-- <div class="my-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div> -->
              <div class="text-center"><button type="submit">Send Message</button></div>
            </form>
          </div>

        </div>
        <table>
           <tr>
              <td></td>
              <td></td>
              <td></td>
          </tr>
        </table>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
@endsection
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MyLove extends CI_Controller {

  public function index()
  {
    //define class
    $data['mylove'] = new MyLove();

    $data['title_page'] = "MyLove Story(iim marlina &amp; pujiermanto)";
    $data['title_brand'] = "Designed by Invision. Coded by Puji Ermanto";
    $data['img_url'] = base_url('assets/img/');
    $data['img_url_main'] = base_url('assets/img/assets/');

    $this->load->view('MyLove/layout/header.php', $data);
    $this->load->view('MyLove/index.php', $data);
    $this->load->view('MyLove/layout/footer.php');
  }

  public function brand()
  {
    $data['datatarget'] = "carousel_brand";
    $data['img_url_main'] = base_url('assets/img/assets/');
    //data dan image untuk modal mylove
    $data['img_modal'] = [
                            'img1' => base_url('assets/img/iim/1.jpg'),
                            'img2' => base_url('assets/img/iim/2.jpg'),
                            'img3' => base_url('assets/img/iim/3.jpg'),
                            'img4' => base_url('assets/img/iim/4.jpg'),
                            'img5' => base_url('assets/img/iim/5.jpg'),
                            'img6' => base_url('assets/img/iim/6.jpg')
                        ];

    $data['MyLove_text'] = '<span class="text-danger">I Love You Sayangku Iim Marlina</span>';

    $this->load->view('MyLove/brand.php', $data);

    $this->load->view('MyLove/iim/index.php', $data);

  }

  public function main()
  {
    $data['img_url_main'] = base_url('assets/img/assets/');

    $this->load->view('MyLove/main.php', $data);
  }

  public function section_image()
  {

    $data['img_url_main'] = base_url('assets/img/assets/');

    $this->load->view('MyLove/section_image_hero.php', $data);

  }

  public function section_card()
  {
    $data['datatarget'] = "section_card";
    $data['portfolio'] = [
                          'FrontEnd' => 'Saat ini saya bekerja di <b><font color="salmon">PT. Gemilang Citrus Berjaya</font></b>
                          <br/>sebagai Front End WebDeveloper dan IT-Office.<br/> Terkadang mengelola sebuah tulisan di blog pribadi <br/>
                          di <a href="https://codesyariah122.github.io" class="text-danger font_8">codesyariah122.github.io</a>,
                          dan <a href="https://pujiermanto.wordpress.com" class="text-info font_6">pujiermanto.wordpress.com.<br/>',

                          'WebDeveloper' => 'Tempat nongkrong favorit di <a href="stackoverflow.com" class="text-primary font_7">Full Stuck Over Flow</a><br/>',
                          'Bercita² untuk membuat sebuah startup design yang sudah disiapkan yaitu : <br/>
                          <a href="assets/img/creative-tim-white-slim2.png" data-toggle="lightbox" data-gallery="gallery">
                          <img src="assets/img/creative-tim-white-slim2.png" class="creative-tim-logo" style="background-color:#000;"></a>'
                        ];

  $data['modal_portfolio'] = [' Hello World <br/> saya puji ermanto saya seorang web developer, terkadang IT-Support, terkadang IT-Jaringan,
                                terkadang juga Office Boy dan apapun itu segala profesi yang aku cintai<br/>Banyak orang yang beranggapan remeh temeh, atau menganggap dewa secara berlebihan terhadap profesiku yang satu ini. dibalik itu semua aku tak peduli, niatku hanya untuk mencari sumber<br/>sumber rezeki untuk menafkahi keluarga, dan istri juga anak-anaku kelak. Sebagai sarana menambah bekal ilmu di masa yang akan datang.',
                                ''
                              ];


    $this->load->view('MyLove/section_card.php', $data);
    $this->load->view('MyLove/iim/index.php', $data);
    $this->load->view('MyLove/puji/index.php', $data);
  }

  public function section_tabs()
  {
    $data['datatarget'] = "section_tabs";
    $data['tabs'] = [
                        'home' =>  '<div class="col-sm-4 mx-auto d-block">
                                          <a href="assets/img/iim/2.jpg" data-toggle="lightbox" data-gallery="gallery">
                                              <img src="assets/img/iim/2.jpg" alt="Thumbnail Image" class="rounded-circle img-raised">
                                          </a>
                                    </div>
                                      <span class="display-3 font_1">M</span>engenalmu adalah sebuah kebetulan yang merupakan anugerah buat aku pribadi, diawali dengan perkenalan disuatu hari dipenghujung² tahun 2019, perkenalan yang mungkin agak sedikit tak berkesan...(mungkin) untuk perempuan dewasa seperti dirimu. Tapi entah kenapa didalam hati ini ada rasa nyaman ketika mendengar suaramu, diawal perkenalan itu dia menilai aku sedikit misterius (hmmmmm ... emang sedikit klise untuku), sebetulnya itu hanya pancingan awal saja mungkin untuk mengisyaratkan sedikit tricky dariku untuknya supaya kamu tidak merasa semainstream perkenalan yang sewajarnya yang dikenal masyarakat khalayak diluar sana.
                                      <br/><span class="display-4 text-danger font_9">H</span>ingga detik ini aku masih merasakan kenyamanan itu ada didalam hatiku mungkin sulit untuk dijelaskan dengan kata² bagaiman rupa nya kenyamanan yang aku rasakan itu, terlalu indah untuk di sampaikan dengan kata² bahkan sebuah kalimat. Mungkin rasa nyaman yang aku rasakan di hatiku ini adalah berasal dari kecerdasanmu dan sikap dewasamu karena memang usia tidak bisa ditutupi, meskipun wajah dan penampilanmu seperti gadis tapi usia itu tetap tidak bisa ditutupi kamu tetap wanita dewasa dengan kecerdasan penuh kharisma yang akan selalu menawan hati dan perasaanku. Sifat keibuan di dalam dirimu dan memang kamu adalah seorang ibu, menurutku kamu adalah seorang Ibu yang baik dan kamu adalah surga untuk anak-anak mu kelak, dan anakmu kelak dari aku, inshaallah.<br/>
                                      <span class="display-4 text-warning font_7">S</span>ampai di akhir tahun masehi, di awal tahun 2020 ini kami berjumpa langsung alias kopdar, dan seperti biasa aku selalu berinisiatif tanpa rencana (sikapku yang selalu membuatmu kesal dan jengkel), aku tiba² ubah haluan dari awal rencana pulang dengan kereta, aku yang pertama kali bersafar jauh meninggalkan jawa barat, tergaketkan dengan antusias pulang kampung di akhir tahun yang begitu membludak, sehingga tiket kereta tak bisa aku capai. aku ubah haluan ke terminal dan pertama kali naik bus dari timur pulau jawa menuju kotaku tercinta untuk bertemu dirimu sang pujaan hatiku(...lebay euy).
                                      Jujur aku kaget ketika kamu mau bertemu aku di terminal, dan lebih kagetnya lagi ternyata kamu lebih cantik dari foto profile whatsappmu, entah emang efek jatuh cinta yang berlebih atau memang terlalu kagum dengan keindahan ciptaan tuhan yang satu ini.<br/>
                                      <span class="display-4 text-success font_5">P</span>aling bahagia adalah dikenalkan pada orang tuamu ( yang inshaallah calon mertuaku ) di kenalkan pada anakmu, dan dari pertemuan dengan keluargamu itulah aku meyakinkan hati dan membulatkan tekad niat perasaanku untuk lebih serius membawamu hingga sebuah akad pernikahan yang sah dalam pandangan agama. Mungkin ini saatnya aku untuk meningkatkan kualitas ketaqwaanku pada sang maha pencipta, dzat yang maha kuasa, aku tak peduli penilaian dari lingkungan sekitarku terhadap penilaian langkahku, dan aku semakin membulatkan tekad untuk menikahimu di awal-awal tahun ini. Karena Allah sang kuasa dari segala yang berkuasa, menjanjikan kekayaan bagi hambanya yang ingin menikah. sebagai bentuk ketaqwaan yang lebih maju. dan aku siap menjadi mempelai pria bagimu, jadi imam di hidupmu dan anakmu dan anak anak kita kelak, InshaAllah.<br/>
                                      <span class="display-4 text-info font_6">B</span>erada di sampingmu, berbincang denganmu aku tak pernah bosan, walaupun dalam hati ini ingin rasanya berbincang langsung, menatap mata indahmu, menggenggam lembut jemarimu. Tapi kemusafiran diri ini yang selalu menciptakan jarak, namun cinta tetap saja menjamahi ruang ruang hatimu.
                                      aku selalu berdoa pada Allah semoga masih ada pertemuan pertemuan lain denganmu, perbincangan perbincangan yang lebih dalam denganmu, dalam janji pernikahan kita.
                                      aku selalu ingin ada disampingmu, menjadikan bantal bahuku untuk sedikit meredakan peluh sesakmu dalam menjalani hidup. aku selalu ingin mendampingimu dalam segala aktifitasmu, mudah-mudahan Allah mendengar doa dan mengabulkan harapanku itu, untuk menjadi lelakimu.
                                    ',

                        'MyLoveProfile' => '<span class="display-3 font_3">D</span>ia adalah seorang wanita berparas cantik dari bagian timur kota kembang. Aku tak peduli dengan segala kisahnya,
                                            aku akan selalu mengenalnya sebagai bidadariku hingga penghujung waktuku kelak menjemputku ke pangkuan sang pencipta.<br/>Aku selalu suka dengan kecerdasan yang dimilikinya, kedewasaannya keibuannya yang membuat dia lebih dari sekedar cantik secara lahir.


                                      <div class="col-sm-4 mx-auto d-block">
                                        <a href="assets/img/sekwan_kesayanganku.jpg" data-toggle="lightbox" data-gallery="gallery">
                                            <img src="assets/img/sekwan_kesayanganku.jpg" alt="Thumbnail Image" class="rounded-circle img-raised">
                                          </a>
                                      </div>

                                      <span class="display-4 text-primary font_5">D</span>ia berprofesi sebagai Security Wanita di sebuah apartemen di timur Bandung, profesi yang cukup mulia.
                                      Walaupun sebagaian kalangan mengaggap remeh dan enteng, dibalik itu semua tugas utamanya adalah sebagai tameng atau pelindung bagi orang lain yang mungkin bukan keluarga, kerabatnya, dan dia menurutku orang yang profesional dalam menjalankan profesinya.<br/>
                                      Aku selalu suka dengan penampilannya, kesehariannya ketika dirumah maupun saat mengenakan seragam security kebanggannya. Dia tetap wanita cantik yang menawan dimataku, dia tetap anugrah terindah yang pernah kutemui.',

                        'gallery' => '<div class="py-5">
                                        <h3 class="font-weight-bold mb-0">MyLove Galery Picture</h3>
                                        <p class="font-italic text-muted mb-4">I <i class="now-ui-icons colored ui-2_favourite-28"></i> you iim marlina.</p>
                                        <div class="row">
                                          <!-- DEMO 2 Item-->
                                          <div class="col-lg-6 mb-3 mb-lg-2">
                                            <a href="assets/img/iim/1.jpg" data-toggle="lightbox" data-gallery="gallery" class="col-md-4">
                                              <img src="assets/img/iim/1.jpg" alt="Thumbnail Image" class="img-raised img-fluid">
                                            </a>
                                          </div>

                                          <!-- DEMO 2 Item-->
                                          <div class="col-lg-6 mb-lg-2">
                                            <a href="assets/img/iim/2.jpg" data-toggle="lightbox" data-gallery="gallery" class="col-md-4">
                                              <img src="assets/img/iim/2.jpg" alt="Thumbnail Image" class=" img-raised img-fluid">
                                            </a>
                                        </div>

                                        <div class="col-lg-6 mb-lg-2">
                                          <a href="assets/img/iim/3.jpg" data-toggle="lightbox" data-gallery="gallery" class="col-md-4">
                                            <img src="assets/img/iim/3.jpg" alt="Thumbnail Image" class="img-raised img-fluid">
                                          </a>
                                        </div>

                                        <div class="col-lg-6 mb-lg-2">
                                          <a href="assets/img/iim/4.jpg" data-toggle="lightbox" data-gallery="gallery" class="col-md-4">
                                            <img src="assets/img/iim/4.jpg" alt="Thumbnail Image" class="img-raised img-fluid">
                                          </a>
                                        </div>

                                        <div class="col-lg-6 mb-lg-2">
                                          <a href="assets/img/iim/5.jpg" data-toggle="lightbox" data-gallery="gallery" class="col-md-4">
                                            <img src="assets/img/iim/5.jpg" alt="Thumbnail Image" class="img-raised img-fluid">
                                          </a>
                                        </div>

                                        <div class="col-lg-6">
                                          <a href="assets/img/iim/6.jpg" data-toggle="lightbox" data-gallery="gallery" class="col-md-4">
                                            <img src="assets/img/iim/6.jpg" alt="Thumbnail Image" class="img-raised img-fluid">
                                          </a>
                                        </div>

                                          </div>
                                    </div>',

                        'about' => 'MyLove Story ini adalah sebuah karya pribadi, yang didedikasikan penuh untuk calon istriku tercinta Iim Marlina, kareka keseringan kalinya<br/>
                                    aku membuat ia kesal dengan sikapku yang memang cuek, dan terbiasa menjomblo akut, ada sedikit adaptasi dari aku yang mungkin tidak kamu sukai.<br/>
                                    Tapi InshaAllah aku akan selalu belajar untuk bermuhasabah diri yang mungkin manfaatnya akan lebih berguna untuk diriku pribadi, agama, dan keluargaku<br/>
                                    dan mungkin kedepannya untuk dirimu.
                                    <div id="typed-strings">
                                        <p>Dikerjakan oleh <strong>puji ermanto</strong>.</p>
                                        <div class="col-md-2 mx-auto d-block">
                                          <a href="assets/img/puji3.jpg" data-toggle="lightbox" data-gallery="gallery" class="col-md-4">
                                            <img src="assets/img/puji3.jpg" alt="Thumbnail Image" class="rounded-circle img-raised img-fluid">
                                          </a>
                                        </div><br/>
                                        <p>My <em>Love</em> Story with iim marlina.</p>
                                    </div>
                                    <button class="btn btn-primary" onclick="typeWriter()">Click Me</button><br/>
                                    <span class="text-danger font_5 display-2" id="iimmarlina"></span> '
  ];


    $this->load->view('MyLove/section_tabs.php', $data);
  }



}//end class

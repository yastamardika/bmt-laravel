@extends('layouts.front ')

@section('konten')

<!--==========================
      F.A.Q Section
    ============================-->
<section id="faq" class="wow fadeInUp">

    <div class="container">

        <div class="section-header">
            <h2>F.A.Q </h2>
        </div>

        <div class="row justify-content-center">
            <div class="col-lg-9">
                <ul id="faq-list">

                    <li>
                        <a data-toggle="collapse" class="collapsed" href="#faq1">Apa itu bookmytalent? <i
                                class="fa fa-minus-circle"></i></a>
                        <div id="faq1" class="collapse" data-parent="#faq-list">
                            <p>
                                Situs penyedia berbagai macam talent untuk event yang dimiliki oleh pengunjung situs ini
                            </p>
                        </div>
                    </li>

                    <li>
                        <a data-toggle="collapse" href="#faq2" class="collapsed">Apa manfaat dari website ini? <i
                                class="fa fa-minus-circle"></i></a>
                        <div id="faq2" class="collapse" data-parent="#faq-list">
                            <p>
                                Pengunjung yang memiliki suatu acara dapat mencari dan menemukan pengisi acara yang
                                pengunjung butuhkan untuk acara milik pengunjung situs ini serta bagi Talent dapat
                                mempromosikan ketrampilan/kesenian yang mereka miliki
                            </p>
                        </div>
                    </li>

                    <li>
                        <a data-toggle="collapse" href="#faq3" class="collapsed">Bagaimana cara memesan talent yang ada
                            di website ini? <i class="fa fa-minus-circle"></i></a>
                        <div id="faq3" class="collapse" data-parent="#faq-list">
                            <p>
                                Setelah menemukan talent yang dibutuhkan oleh pengunjung, pengunjung dapat menghubungi
                                talent yang bersangkutan melalui ikon sosial media yang disematkan pada detail talent
                                secara langsung.
                            </p>
                        </div>
                    </li>

                    <li>
                        <a data-toggle="collapse" href="#faq4" class="collapsed">Berapa harga yang dimiliki talent yang
                            pengguna pilih?
                            <i class="fa fa-minus-circle"></i></a>
                        <div id="faq4" class="collapse" data-parent="#faq-list">
                            <p>
                                Harga tiap talent fluktuatif tergantung dari acara yang pengguna miliki dan berapa harga
                                yang
                                pengguna tawarkan sesuai dengan skala acara yang pengguna miliki. Pada tahap yang lebih
                                lanjut negosiasi harga dan berbagai macam hal teknis lainnya dilakukan langsung antara
                                pengguna dengan talent melalui kontak yang tertera pada detail talent
                                secara langsung.
                            </p>
                        </div>
                    </li>

                    <li>
                        <a data-toggle="collapse" href="#faq5" class="collapsed">Jenis acara apa saja yang dapat menyewa
                            talent dari website ini?
                            <i class="fa fa-minus-circle"></i></a>
                        <div id="faq5" class="collapse" data-parent="#faq-list">
                            <p>
                                Semua jenis acara bisa!. Semua tergantung dengan apa pengguna butuhkan dan menyesuaikan
                                dengan talent yang tersedia.
                            </p>
                        </div>
                    </li>

                    <li>
                        <a data-toggle="collapse" href="#faq6" class="collapsed">Bagaimana cara pengguna dapat
                            mengetahui rekam jejak talent yang akan pengguna sewa? <i
                                class="fa fa-minus-circle"></i></a>
                        <div id="faq6" class="collapse" data-parent="#faq-list">
                            <p>
                                Keabsahan dan keaslian talent dapat pengguna buktikan dengan melihat akun-akun sosial
                                media yang talent miliki serta melalui fitur testimoni(coming soon)
                            </p>
                        </div>
                    </li>

                </ul>
            </div>
        </div>

    </div>

</section>

@endsection

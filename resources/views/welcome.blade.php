@extends('layouts.app')
@section('content')
    <section class="banner-14">
        <div class="container">
            <div class="banner-wrapper">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="banner-content">
                            <ul id="countdown" class="countdown">
                                <li class="clock-item"><span class="count-number days">05</span>
                                    <p class="count-text">Conciertos</p>
                                </li>
                                <li class="clock-item"><span class="count-number minutes">02</span>
                                    <p class="count-text">Meses</p>
                                </li>
                                <li class="clock-item"><span class="count-number hours">20</span>
                                    <p class="count-text">Artistas</p>
                                </li>
                            </ul>
                            <h1>Tu Voz Primera Temporada</h1>
                            <p>El nuevo formato que llega para impulsar el talento de los cajamarquinos.</p>
                            <a href="#" class="lab-btn">Quiero votar</a>
                            <div class="event-sponsored">
                                <p>Website crafted By: DIDEPTI</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="banner-image">
                            <img src="{{asset('img/01.png')}}" alt="banner-img">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="about" class=" about about-six padding-120">
        <div class="container">
            <div class="about-thumb">
                <img src="{{asset('img/people.png')}}" alt="about">
                <a href="http://www.youtube.com/embed/4xe72U7mXNg?rel=0&amp;controls=0&amp;showinfo=0" class="play"
                   data-rel="lightcase:myCollection"><i class="fa fa-play"></i></a>
            </div>
            <div class="section-header text-center">
                <h2>El concurso para cajamarquinos</h2>
                <p><em>Este 2022 tu talento será recompensado</em></p>
            </div>
            <p>Phosrescently ntiate principle centered networks via magnetic services a Entusiasticaly streamline
                fulys
                tested metrics without freproof we services enabled Rapidiously evisculate standards compliant
                fullys tested
                metrics without futureproof web services anfullys tested metrics without futureproof web services
                experiences
                bricks clicks a are aparadigmsRapidiously evisculate standards compliant web services are afor error
                free
                Assertively engineer areRapidiously Rapidiously evisculate standards compliant web services are afor
                error
                free</p>
            <ul class="about-button">
                <li><a href="#" class="lab-btn">Ver participantes</a></li>
                <li><a href="#" class="lab-btn">Ver jurado</a></li>
            </ul>

        </div><!-- container -->
    </section>
    <section class="banner-14 event-schedule-section padding-120">
        <div class="container">
            <div class="section-header">
                <h2>Participantes</h2>
            </div>
            <div class="section-wrapper row justify-content-center">
                <div class="col-md-4">
                    <div class="faq faq-style2 event-schedule-trigger">
                        <h5 class="title">Semana 1</h5>
                        <div class="panel-group" id="accordion1" role="tablist" aria-multiselectable="true">
                            <div class="panel">
                                <div class="faq-heading">
                                    <div class="faq-title">
                                        <a class="collapsed" href="#heading1" data-bs-toggle="collapse" role="button"
                                           aria-expanded="false" aria-controls="heading1">
                                            <div class="ev-title">
                                                <div class="ev-title-thumb">
                                                    <img src="{{asset('img/member.png')}}" alt="event">
                                                    <div class="child-thumb">
                                                        <img src="{{asset('img/member.png')}}" alt="event">
                                                    </div>
                                                </div>
                                                <div class="ev-title-content">
                                                    <h6>Juan Perez
                                                    </h6>
                                                </div>
                                            </div>
                                            <span class="faq-icon pull-right">
                                                <i class="fa fa-ellipsis-h" aria-hidden="true"></i>
                                            </span>
                                        </a>
                                    </div>
                                    <div id="heading1" class="faq-collapse collapse" role="tabpanel"
                                         aria-labelledby="heading1">
                                        <div class="faq-body">
                                            <p>Lid est laborum dolo rumes fugats untras. Etharums serge quidem and
                                                rerum facilis dolores
                                                nemis
                                                omnis and fugats vitaes nemo minima rerums</p>
                                            <ul class="ev-list small text-muted">
                                                <li class="ev-li-item">
                                                    <i class="fa-brands fa-instagram"></i> JuanPerez
                                                </li>
                                                <li class="ev-li-item">
                                                    <i class="fa-brands fa-youtube"></i> Juan Perez Video Oficial
                                                </li>
                                            </ul>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="panel">
                                <div class="faq-heading">
                                    <div class="faq-title">
                                        <a class="collapsed" href="#heading1" data-bs-toggle="collapse" role="button"
                                           aria-expanded="false" aria-controls="heading1">
                                            <div class="ev-title">
                                                <div class="ev-title-thumb">
                                                    <img src="{{asset('img/member.png')}}" alt="event">
                                                    <div class="child-thumb">
                                                        <img src="{{asset('img/member.png')}}" alt="event">
                                                    </div>
                                                </div>
                                                <div class="ev-title-content">
                                                    <h6>Juan Perez
                                                    </h6>
                                                </div>
                                            </div>
                                            <span class="faq-icon pull-right">
                                                <i class="fa fa-ellipsis-h" aria-hidden="true"></i>
                                            </span>
                                        </a>
                                    </div>
                                    <div id="heading1" class="faq-collapse collapse" role="tabpanel"
                                         aria-labelledby="heading1">
                                        <div class="faq-body">
                                            <p>Lid est laborum dolo rumes fugats untras. Etharums serge quidem and
                                                rerum facilis dolores
                                                nemis
                                                omnis and fugats vitaes nemo minima rerums</p>
                                            <ul class="ev-list small text-muted">
                                                <li class="ev-li-item">
                                                    <i class="fa-brands fa-instagram"></i> JuanPerez
                                                </li>
                                                <li class="ev-li-item">
                                                    <i class="fa-brands fa-youtube"></i> Juan Perez Video Oficial
                                                </li>
                                            </ul>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="panel">
                                <div class="faq-heading">
                                    <div class="faq-title">
                                        <a class="collapsed" href="#heading1" data-bs-toggle="collapse" role="button"
                                           aria-expanded="false" aria-controls="heading1">
                                            <div class="ev-title">
                                                <div class="ev-title-thumb">
                                                    <img src="{{asset('img/member.png')}}" alt="event">
                                                    <div class="child-thumb">
                                                        <img src="{{asset('img/member.png')}}" alt="event">
                                                    </div>
                                                </div>
                                                <div class="ev-title-content">
                                                    <h6>Juan Perez
                                                    </h6>
                                                </div>
                                            </div>
                                            <span class="faq-icon pull-right">
                                                <i class="fa fa-ellipsis-h" aria-hidden="true"></i>
                                            </span>
                                        </a>
                                    </div>
                                    <div id="heading1" class="faq-collapse collapse" role="tabpanel"
                                         aria-labelledby="heading1">
                                        <div class="faq-body">
                                            <p>Lid est laborum dolo rumes fugats untras. Etharums serge quidem and
                                                rerum facilis dolores
                                                nemis
                                                omnis and fugats vitaes nemo minima rerums</p>
                                            <ul class="ev-list small text-muted">
                                                <li class="ev-li-item">
                                                    <i class="fa-brands fa-instagram"></i> JuanPerez
                                                </li>
                                                <li class="ev-li-item">
                                                    <i class="fa-brands fa-youtube"></i> Juan Perez Video Oficial
                                                </li>
                                            </ul>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="panel">
                                <div class="faq-heading">
                                    <div class="faq-title">
                                        <a class="collapsed" href="#heading1" data-bs-toggle="collapse" role="button"
                                           aria-expanded="false" aria-controls="heading1">
                                            <div class="ev-title">
                                                <div class="ev-title-thumb">
                                                    <img src="{{asset('img/member.png')}}" alt="event">
                                                    <div class="child-thumb">
                                                        <img src="{{asset('img/member.png')}}" alt="event">
                                                    </div>
                                                </div>
                                                <div class="ev-title-content">
                                                    <h6>Juan Perez
                                                    </h6>
                                                </div>
                                            </div>
                                            <span class="faq-icon pull-right">
                                                <i class="fa fa-ellipsis-h" aria-hidden="true"></i>
                                            </span>
                                        </a>
                                    </div>
                                    <div id="heading1" class="faq-collapse collapse" role="tabpanel"
                                         aria-labelledby="heading1">
                                        <div class="faq-body">
                                            <p>Lid est laborum dolo rumes fugats untras. Etharums serge quidem and
                                                rerum facilis dolores
                                                nemis
                                                omnis and fugats vitaes nemo minima rerums</p>
                                            <ul class="ev-list small text-muted">
                                                <li class="ev-li-item">
                                                    <i class="fa-brands fa-instagram"></i> JuanPerez
                                                </li>
                                                <li class="ev-li-item">
                                                    <i class="fa-brands fa-youtube"></i> Juan Perez Video Oficial
                                                </li>
                                            </ul>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="panel">
                                <div class="faq-heading">
                                    <div class="faq-title">
                                        <a class="collapsed" href="#heading1" data-bs-toggle="collapse" role="button"
                                           aria-expanded="false" aria-controls="heading1">
                                            <div class="ev-title">
                                                <div class="ev-title-thumb">
                                                    <img src="{{asset('img/member.png')}}" alt="event">
                                                    <div class="child-thumb">
                                                        <img src="{{asset('img/member.png')}}" alt="event">
                                                    </div>
                                                </div>
                                                <div class="ev-title-content">
                                                    <h6>Juan Perez
                                                    </h6>
                                                </div>
                                            </div>
                                            <span class="faq-icon pull-right">
                                                <i class="fa fa-ellipsis-h" aria-hidden="true"></i>
                                            </span>
                                        </a>
                                    </div>
                                    <div id="heading1" class="faq-collapse collapse" role="tabpanel"
                                         aria-labelledby="heading1">
                                        <div class="faq-body">
                                            <p>Lid est laborum dolo rumes fugats untras. Etharums serge quidem and
                                                rerum facilis dolores
                                                nemis
                                                omnis and fugats vitaes nemo minima rerums</p>
                                            <ul class="ev-list small text-muted">
                                                <li class="ev-li-item">
                                                    <i class="fa-brands fa-instagram"></i> JuanPerez
                                                </li>
                                                <li class="ev-li-item">
                                                    <i class="fa-brands fa-youtube"></i> Juan Perez Video Oficial
                                                </li>
                                            </ul>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="panel">
                                <div class="faq-heading">
                                    <div class="faq-title">
                                        <a class="collapsed" href="#heading1" data-bs-toggle="collapse" role="button"
                                           aria-expanded="false" aria-controls="heading1">
                                            <div class="ev-title">
                                                <div class="ev-title-thumb">
                                                    <img src="{{asset('img/member.png')}}" alt="event">
                                                    <div class="child-thumb">
                                                        <img src="{{asset('img/member.png')}}" alt="event">
                                                    </div>
                                                </div>
                                                <div class="ev-title-content">
                                                    <h6>Juan Perez
                                                    </h6>
                                                </div>
                                            </div>
                                            <span class="faq-icon pull-right">
                                                <i class="fa fa-ellipsis-h" aria-hidden="true"></i>
                                            </span>
                                        </a>
                                    </div>
                                    <div id="heading1" class="faq-collapse collapse" role="tabpanel"
                                         aria-labelledby="heading1">
                                        <div class="faq-body">
                                            <p>Lid est laborum dolo rumes fugats untras. Etharums serge quidem and
                                                rerum facilis dolores
                                                nemis
                                                omnis and fugats vitaes nemo minima rerums</p>
                                            <ul class="ev-list small text-muted">
                                                <li class="ev-li-item">
                                                    <i class="fa-brands fa-instagram"></i> JuanPerez
                                                </li>
                                                <li class="ev-li-item">
                                                    <i class="fa-brands fa-youtube"></i> Juan Perez Video Oficial
                                                </li>
                                            </ul>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="faq faq-style2 event-schedule-trigger">
                        <h5 class="title">Semana 2</h5>
                        <div class="panel-group" id="accordion1" role="tablist" aria-multiselectable="true">
                            <div class="panel">
                                <div class="faq-heading">
                                    <div class="faq-title">
                                        <a class="collapsed" href="#heading1" data-bs-toggle="collapse" role="button"
                                           aria-expanded="false" aria-controls="heading1">
                                            <div class="ev-title">
                                                <div class="ev-title-thumb">
                                                    <img src="{{asset('img/member.png')}}" alt="event">
                                                    <div class="child-thumb">
                                                        <img src="{{asset('img/member.png')}}" alt="event">
                                                    </div>
                                                </div>
                                                <div class="ev-title-content">
                                                    <h6>Juan Perez
                                                    </h6>
                                                </div>
                                            </div>
                                            <span class="faq-icon pull-right">
                                                <i class="fa fa-ellipsis-h" aria-hidden="true"></i>
                                            </span>
                                        </a>
                                    </div>
                                    <div id="heading1" class="faq-collapse collapse" role="tabpanel"
                                         aria-labelledby="heading1">
                                        <div class="faq-body">
                                            <p>Lid est laborum dolo rumes fugats untras. Etharums serge quidem and
                                                rerum facilis dolores
                                                nemis
                                                omnis and fugats vitaes nemo minima rerums</p>
                                            <ul class="ev-list small text-muted">
                                                <li class="ev-li-item">
                                                    <i class="fa-brands fa-instagram"></i> JuanPerez
                                                </li>
                                                <li class="ev-li-item">
                                                    <i class="fa-brands fa-youtube"></i> Juan Perez Video Oficial
                                                </li>
                                            </ul>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="panel">
                                <div class="faq-heading">
                                    <div class="faq-title">
                                        <a class="collapsed" href="#heading1" data-bs-toggle="collapse" role="button"
                                           aria-expanded="false" aria-controls="heading1">
                                            <div class="ev-title">
                                                <div class="ev-title-thumb">
                                                    <img src="{{asset('img/member.png')}}" alt="event">
                                                    <div class="child-thumb">
                                                        <img src="{{asset('img/member.png')}}" alt="event">
                                                    </div>
                                                </div>
                                                <div class="ev-title-content">
                                                    <h6>Juan Perez
                                                    </h6>
                                                </div>
                                            </div>
                                            <span class="faq-icon pull-right">
                                                <i class="fa fa-ellipsis-h" aria-hidden="true"></i>
                                            </span>
                                        </a>
                                    </div>
                                    <div id="heading1" class="faq-collapse collapse" role="tabpanel"
                                         aria-labelledby="heading1">
                                        <div class="faq-body">
                                            <p>Lid est laborum dolo rumes fugats untras. Etharums serge quidem and
                                                rerum facilis dolores
                                                nemis
                                                omnis and fugats vitaes nemo minima rerums</p>
                                            <ul class="ev-list small text-muted">
                                                <li class="ev-li-item">
                                                    <i class="fa-brands fa-instagram"></i> JuanPerez
                                                </li>
                                                <li class="ev-li-item">
                                                    <i class="fa-brands fa-youtube"></i> Juan Perez Video Oficial
                                                </li>
                                            </ul>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="panel">
                                <div class="faq-heading">
                                    <div class="faq-title">
                                        <a class="collapsed" href="#heading1" data-bs-toggle="collapse" role="button"
                                           aria-expanded="false" aria-controls="heading1">
                                            <div class="ev-title">
                                                <div class="ev-title-thumb">
                                                    <img src="{{asset('img/member.png')}}" alt="event">
                                                    <div class="child-thumb">
                                                        <img src="{{asset('img/member.png')}}" alt="event">
                                                    </div>
                                                </div>
                                                <div class="ev-title-content">
                                                    <h6>Juan Perez
                                                    </h6>
                                                </div>
                                            </div>
                                            <span class="faq-icon pull-right">
                                                <i class="fa fa-ellipsis-h" aria-hidden="true"></i>
                                            </span>
                                        </a>
                                    </div>
                                    <div id="heading1" class="faq-collapse collapse" role="tabpanel"
                                         aria-labelledby="heading1">
                                        <div class="faq-body">
                                            <p>Lid est laborum dolo rumes fugats untras. Etharums serge quidem and
                                                rerum facilis dolores
                                                nemis
                                                omnis and fugats vitaes nemo minima rerums</p>
                                            <ul class="ev-list small text-muted">
                                                <li class="ev-li-item">
                                                    <i class="fa-brands fa-instagram"></i> JuanPerez
                                                </li>
                                                <li class="ev-li-item">
                                                    <i class="fa-brands fa-youtube"></i> Juan Perez Video Oficial
                                                </li>
                                            </ul>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="panel">
                                <div class="faq-heading">
                                    <div class="faq-title">
                                        <a class="collapsed" href="#heading1" data-bs-toggle="collapse" role="button"
                                           aria-expanded="false" aria-controls="heading1">
                                            <div class="ev-title">
                                                <div class="ev-title-thumb">
                                                    <img src="{{asset('img/member.png')}}" alt="event">
                                                    <div class="child-thumb">
                                                        <img src="{{asset('img/member.png')}}" alt="event">
                                                    </div>
                                                </div>
                                                <div class="ev-title-content">
                                                    <h6>Juan Perez
                                                    </h6>
                                                </div>
                                            </div>
                                            <span class="faq-icon pull-right">
                                                <i class="fa fa-ellipsis-h" aria-hidden="true"></i>
                                            </span>
                                        </a>
                                    </div>
                                    <div id="heading1" class="faq-collapse collapse" role="tabpanel"
                                         aria-labelledby="heading1">
                                        <div class="faq-body">
                                            <p>Lid est laborum dolo rumes fugats untras. Etharums serge quidem and
                                                rerum facilis dolores
                                                nemis
                                                omnis and fugats vitaes nemo minima rerums</p>
                                            <ul class="ev-list small text-muted">
                                                <li class="ev-li-item">
                                                    <i class="fa-brands fa-instagram"></i> JuanPerez
                                                </li>
                                                <li class="ev-li-item">
                                                    <i class="fa-brands fa-youtube"></i> Juan Perez Video Oficial
                                                </li>
                                            </ul>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="panel">
                                <div class="faq-heading">
                                    <div class="faq-title">
                                        <a class="collapsed" href="#heading1" data-bs-toggle="collapse" role="button"
                                           aria-expanded="false" aria-controls="heading1">
                                            <div class="ev-title">
                                                <div class="ev-title-thumb">
                                                    <img src="{{asset('img/member.png')}}" alt="event">
                                                    <div class="child-thumb">
                                                        <img src="{{asset('img/member.png')}}" alt="event">
                                                    </div>
                                                </div>
                                                <div class="ev-title-content">
                                                    <h6>Juan Perez
                                                    </h6>
                                                </div>
                                            </div>
                                            <span class="faq-icon pull-right">
                                                <i class="fa fa-ellipsis-h" aria-hidden="true"></i>
                                            </span>
                                        </a>
                                    </div>
                                    <div id="heading1" class="faq-collapse collapse" role="tabpanel"
                                         aria-labelledby="heading1">
                                        <div class="faq-body">
                                            <p>Lid est laborum dolo rumes fugats untras. Etharums serge quidem and
                                                rerum facilis dolores
                                                nemis
                                                omnis and fugats vitaes nemo minima rerums</p>
                                            <ul class="ev-list small text-muted">
                                                <li class="ev-li-item">
                                                    <i class="fa-brands fa-instagram"></i> JuanPerez
                                                </li>
                                                <li class="ev-li-item">
                                                    <i class="fa-brands fa-youtube"></i> Juan Perez Video Oficial
                                                </li>
                                            </ul>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="panel">
                                <div class="faq-heading">
                                    <div class="faq-title">
                                        <a class="collapsed" href="#heading1" data-bs-toggle="collapse" role="button"
                                           aria-expanded="false" aria-controls="heading1">
                                            <div class="ev-title">
                                                <div class="ev-title-thumb">
                                                    <img src="{{asset('img/member.png')}}" alt="event">
                                                    <div class="child-thumb">
                                                        <img src="{{asset('img/member.png')}}" alt="event">
                                                    </div>
                                                </div>
                                                <div class="ev-title-content">
                                                    <h6>Juan Perez
                                                    </h6>
                                                </div>
                                            </div>
                                            <span class="faq-icon pull-right">
                                                <i class="fa fa-ellipsis-h" aria-hidden="true"></i>
                                            </span>
                                        </a>
                                    </div>
                                    <div id="heading1" class="faq-collapse collapse" role="tabpanel"
                                         aria-labelledby="heading1">
                                        <div class="faq-body">
                                            <p>Lid est laborum dolo rumes fugats untras. Etharums serge quidem and
                                                rerum facilis dolores
                                                nemis
                                                omnis and fugats vitaes nemo minima rerums</p>
                                            <ul class="ev-list small text-muted">
                                                <li class="ev-li-item">
                                                    <i class="fa-brands fa-instagram"></i> JuanPerez
                                                </li>
                                                <li class="ev-li-item">
                                                    <i class="fa-brands fa-youtube"></i> Juan Perez Video Oficial
                                                </li>
                                            </ul>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="faq faq-style2 event-schedule-trigger">
                        <h5 class="title">Semana 3</h5>
                        <div class="panel-group" id="accordion1" role="tablist" aria-multiselectable="true">
                            <div class="panel">
                                <div class="faq-heading">
                                    <div class="faq-title">
                                        <a class="collapsed" href="#heading1" data-bs-toggle="collapse" role="button"
                                           aria-expanded="false" aria-controls="heading1">
                                            <div class="ev-title">
                                                <div class="ev-title-thumb">
                                                    <img src="{{asset('img/member.png')}}" alt="event">
                                                    <div class="child-thumb">
                                                        <img src="{{asset('img/member.png')}}" alt="event">
                                                    </div>
                                                </div>
                                                <div class="ev-title-content">
                                                    <h6>Juan Perez
                                                    </h6>
                                                </div>
                                            </div>
                                            <span class="faq-icon pull-right">
                                                <i class="fa fa-ellipsis-h" aria-hidden="true"></i>
                                            </span>
                                        </a>
                                    </div>
                                    <div id="heading1" class="faq-collapse collapse" role="tabpanel"
                                         aria-labelledby="heading1">
                                        <div class="faq-body">
                                            <p>Lid est laborum dolo rumes fugats untras. Etharums serge quidem and
                                                rerum facilis dolores
                                                nemis
                                                omnis and fugats vitaes nemo minima rerums</p>
                                            <ul class="ev-list small text-muted">
                                                <li class="ev-li-item">
                                                    <i class="fa-brands fa-instagram"></i> JuanPerez
                                                </li>
                                                <li class="ev-li-item">
                                                    <i class="fa-brands fa-youtube"></i> Juan Perez Video Oficial
                                                </li>
                                            </ul>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="panel">
                                <div class="faq-heading">
                                    <div class="faq-title">
                                        <a class="collapsed" href="#heading1" data-bs-toggle="collapse" role="button"
                                           aria-expanded="false" aria-controls="heading1">
                                            <div class="ev-title">
                                                <div class="ev-title-thumb">
                                                    <img src="{{asset('img/member.png')}}" alt="event">
                                                    <div class="child-thumb">
                                                        <img src="{{asset('img/member.png')}}" alt="event">
                                                    </div>
                                                </div>
                                                <div class="ev-title-content">
                                                    <h6>Juan Perez
                                                    </h6>
                                                </div>
                                            </div>
                                            <span class="faq-icon pull-right">
                                                <i class="fa fa-ellipsis-h" aria-hidden="true"></i>
                                            </span>
                                        </a>
                                    </div>
                                    <div id="heading1" class="faq-collapse collapse" role="tabpanel"
                                         aria-labelledby="heading1">
                                        <div class="faq-body">
                                            <p>Lid est laborum dolo rumes fugats untras. Etharums serge quidem and
                                                rerum facilis dolores
                                                nemis
                                                omnis and fugats vitaes nemo minima rerums</p>
                                            <ul class="ev-list small text-muted">
                                                <li class="ev-li-item">
                                                    <i class="fa-brands fa-instagram"></i> JuanPerez
                                                </li>
                                                <li class="ev-li-item">
                                                    <i class="fa-brands fa-youtube"></i> Juan Perez Video Oficial
                                                </li>
                                            </ul>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="panel">
                                <div class="faq-heading">
                                    <div class="faq-title">
                                        <a class="collapsed" href="#heading1" data-bs-toggle="collapse" role="button"
                                           aria-expanded="false" aria-controls="heading1">
                                            <div class="ev-title">
                                                <div class="ev-title-thumb">
                                                    <img src="{{asset('img/member.png')}}" alt="event">
                                                    <div class="child-thumb">
                                                        <img src="{{asset('img/member.png')}}" alt="event">
                                                    </div>
                                                </div>
                                                <div class="ev-title-content">
                                                    <h6>Juan Perez
                                                    </h6>
                                                </div>
                                            </div>
                                            <span class="faq-icon pull-right">
                                                <i class="fa fa-ellipsis-h" aria-hidden="true"></i>
                                            </span>
                                        </a>
                                    </div>
                                    <div id="heading1" class="faq-collapse collapse" role="tabpanel"
                                         aria-labelledby="heading1">
                                        <div class="faq-body">
                                            <p>Lid est laborum dolo rumes fugats untras. Etharums serge quidem and
                                                rerum facilis dolores
                                                nemis
                                                omnis and fugats vitaes nemo minima rerums</p>
                                            <ul class="ev-list small text-muted">
                                                <li class="ev-li-item">
                                                    <i class="fa-brands fa-instagram"></i> JuanPerez
                                                </li>
                                                <li class="ev-li-item">
                                                    <i class="fa-brands fa-youtube"></i> Juan Perez Video Oficial
                                                </li>
                                            </ul>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="panel">
                                <div class="faq-heading">
                                    <div class="faq-title">
                                        <a class="collapsed" href="#heading1" data-bs-toggle="collapse" role="button"
                                           aria-expanded="false" aria-controls="heading1">
                                            <div class="ev-title">
                                                <div class="ev-title-thumb">
                                                    <img src="{{asset('img/member.png')}}" alt="event">
                                                    <div class="child-thumb">
                                                        <img src="{{asset('img/member.png')}}" alt="event">
                                                    </div>
                                                </div>
                                                <div class="ev-title-content">
                                                    <h6>Juan Perez
                                                    </h6>
                                                </div>
                                            </div>
                                            <span class="faq-icon pull-right">
                                                <i class="fa fa-ellipsis-h" aria-hidden="true"></i>
                                            </span>
                                        </a>
                                    </div>
                                    <div id="heading1" class="faq-collapse collapse" role="tabpanel"
                                         aria-labelledby="heading1">
                                        <div class="faq-body">
                                            <p>Lid est laborum dolo rumes fugats untras. Etharums serge quidem and
                                                rerum facilis dolores
                                                nemis
                                                omnis and fugats vitaes nemo minima rerums</p>
                                            <ul class="ev-list small text-muted">
                                                <li class="ev-li-item">
                                                    <i class="fa-brands fa-instagram"></i> JuanPerez
                                                </li>
                                                <li class="ev-li-item">
                                                    <i class="fa-brands fa-youtube"></i> Juan Perez Video Oficial
                                                </li>
                                            </ul>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="panel">
                                <div class="faq-heading">
                                    <div class="faq-title">
                                        <a class="collapsed" href="#heading1" data-bs-toggle="collapse" role="button"
                                           aria-expanded="false" aria-controls="heading1">
                                            <div class="ev-title">
                                                <div class="ev-title-thumb">
                                                    <img src="{{asset('img/member.png')}}" alt="event">
                                                    <div class="child-thumb">
                                                        <img src="{{asset('img/member.png')}}" alt="event">
                                                    </div>
                                                </div>
                                                <div class="ev-title-content">
                                                    <h6>Juan Perez
                                                    </h6>
                                                </div>
                                            </div>
                                            <span class="faq-icon pull-right">
                                                <i class="fa fa-ellipsis-h" aria-hidden="true"></i>
                                            </span>
                                        </a>
                                    </div>
                                    <div id="heading1" class="faq-collapse collapse" role="tabpanel"
                                         aria-labelledby="heading1">
                                        <div class="faq-body">
                                            <p>Lid est laborum dolo rumes fugats untras. Etharums serge quidem and
                                                rerum facilis dolores
                                                nemis
                                                omnis and fugats vitaes nemo minima rerums</p>
                                            <ul class="ev-list small text-muted">
                                                <li class="ev-li-item">
                                                    <i class="fa-brands fa-instagram"></i> JuanPerez
                                                </li>
                                                <li class="ev-li-item">
                                                    <i class="fa-brands fa-youtube"></i> Juan Perez Video Oficial
                                                </li>
                                            </ul>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="panel">
                                <div class="faq-heading">
                                    <div class="faq-title">
                                        <a class="collapsed" href="#heading1" data-bs-toggle="collapse" role="button"
                                           aria-expanded="false" aria-controls="heading1">
                                            <div class="ev-title">
                                                <div class="ev-title-thumb">
                                                    <img src="{{asset('img/member.png')}}" alt="event">
                                                    <div class="child-thumb">
                                                        <img src="{{asset('img/member.png')}}" alt="event">
                                                    </div>
                                                </div>
                                                <div class="ev-title-content">
                                                    <h6>Juan Perez
                                                    </h6>
                                                </div>
                                            </div>
                                            <span class="faq-icon pull-right">
                                                <i class="fa fa-ellipsis-h" aria-hidden="true"></i>
                                            </span>
                                        </a>
                                    </div>
                                    <div id="heading1" class="faq-collapse collapse" role="tabpanel"
                                         aria-labelledby="heading1">
                                        <div class="faq-body">
                                            <p>Lid est laborum dolo rumes fugats untras. Etharums serge quidem and
                                                rerum facilis dolores
                                                nemis
                                                omnis and fugats vitaes nemo minima rerums</p>
                                            <ul class="ev-list small text-muted">
                                                <li class="ev-li-item">
                                                    <i class="fa-brands fa-instagram"></i> JuanPerez
                                                </li>
                                                <li class="ev-li-item">
                                                    <i class="fa-brands fa-youtube"></i> Juan Perez Video Oficial
                                                </li>
                                            </ul>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="faq faq-style2 event-schedule-trigger">
                        <h5 class="title">Semana 4</h5>
                        <div class="panel-group" id="accordion1" role="tablist" aria-multiselectable="true">
                            <div class="panel">
                                <div class="faq-heading">
                                    <div class="faq-title">
                                        <a class="collapsed" href="#heading1" data-bs-toggle="collapse" role="button"
                                           aria-expanded="false" aria-controls="heading1">
                                            <div class="ev-title">
                                                <div class="ev-title-thumb">
                                                    <img src="{{asset('img/member.png')}}" alt="event">
                                                    <div class="child-thumb">
                                                        <img src="{{asset('img/member.png')}}" alt="event">
                                                    </div>
                                                </div>
                                                <div class="ev-title-content">
                                                    <h6>Juan Perez
                                                    </h6>
                                                </div>
                                            </div>
                                            <span class="faq-icon pull-right">
                                                <i class="fa fa-ellipsis-h" aria-hidden="true"></i>
                                            </span>
                                        </a>
                                    </div>
                                    <div id="heading1" class="faq-collapse collapse" role="tabpanel"
                                         aria-labelledby="heading1">
                                        <div class="faq-body">
                                            <p>Lid est laborum dolo rumes fugats untras. Etharums serge quidem and
                                                rerum facilis dolores
                                                nemis
                                                omnis and fugats vitaes nemo minima rerums</p>
                                            <ul class="ev-list small text-muted">
                                                <li class="ev-li-item">
                                                    <i class="fa-brands fa-instagram"></i> JuanPerez
                                                </li>
                                                <li class="ev-li-item">
                                                    <i class="fa-brands fa-youtube"></i> Juan Perez Video Oficial
                                                </li>
                                            </ul>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="panel">
                                <div class="faq-heading">
                                    <div class="faq-title">
                                        <a class="collapsed" href="#heading1" data-bs-toggle="collapse" role="button"
                                           aria-expanded="false" aria-controls="heading1">
                                            <div class="ev-title">
                                                <div class="ev-title-thumb">
                                                    <img src="{{asset('img/member.png')}}" alt="event">
                                                    <div class="child-thumb">
                                                        <img src="{{asset('img/member.png')}}" alt="event">
                                                    </div>
                                                </div>
                                                <div class="ev-title-content">
                                                    <h6>Juan Perez
                                                    </h6>
                                                </div>
                                            </div>
                                            <span class="faq-icon pull-right">
                                                <i class="fa fa-ellipsis-h" aria-hidden="true"></i>
                                            </span>
                                        </a>
                                    </div>
                                    <div id="heading1" class="faq-collapse collapse" role="tabpanel"
                                         aria-labelledby="heading1">
                                        <div class="faq-body">
                                            <p>Lid est laborum dolo rumes fugats untras. Etharums serge quidem and
                                                rerum facilis dolores
                                                nemis
                                                omnis and fugats vitaes nemo minima rerums</p>
                                            <ul class="ev-list small text-muted">
                                                <li class="ev-li-item">
                                                    <i class="fa-brands fa-instagram"></i> JuanPerez
                                                </li>
                                                <li class="ev-li-item">
                                                    <i class="fa-brands fa-youtube"></i> Juan Perez Video Oficial
                                                </li>
                                            </ul>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="panel">
                                <div class="faq-heading">
                                    <div class="faq-title">
                                        <a class="collapsed" href="#heading1" data-bs-toggle="collapse" role="button"
                                           aria-expanded="false" aria-controls="heading1">
                                            <div class="ev-title">
                                                <div class="ev-title-thumb">
                                                    <img src="{{asset('img/member.png')}}" alt="event">
                                                    <div class="child-thumb">
                                                        <img src="{{asset('img/member.png')}}" alt="event">
                                                    </div>
                                                </div>
                                                <div class="ev-title-content">
                                                    <h6>Juan Perez
                                                    </h6>
                                                </div>
                                            </div>
                                            <span class="faq-icon pull-right">
                                                <i class="fa fa-ellipsis-h" aria-hidden="true"></i>
                                            </span>
                                        </a>
                                    </div>
                                    <div id="heading1" class="faq-collapse collapse" role="tabpanel"
                                         aria-labelledby="heading1">
                                        <div class="faq-body">
                                            <p>Lid est laborum dolo rumes fugats untras. Etharums serge quidem and
                                                rerum facilis dolores
                                                nemis
                                                omnis and fugats vitaes nemo minima rerums</p>
                                            <ul class="ev-list small text-muted">
                                                <li class="ev-li-item">
                                                    <i class="fa-brands fa-instagram"></i> JuanPerez
                                                </li>
                                                <li class="ev-li-item">
                                                    <i class="fa-brands fa-youtube"></i> Juan Perez Video Oficial
                                                </li>
                                            </ul>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="panel">
                                <div class="faq-heading">
                                    <div class="faq-title">
                                        <a class="collapsed" href="#heading1" data-bs-toggle="collapse" role="button"
                                           aria-expanded="false" aria-controls="heading1">
                                            <div class="ev-title">
                                                <div class="ev-title-thumb">
                                                    <img src="{{asset('img/member.png')}}" alt="event">
                                                    <div class="child-thumb">
                                                        <img src="{{asset('img/member.png')}}" alt="event">
                                                    </div>
                                                </div>
                                                <div class="ev-title-content">
                                                    <h6>Juan Perez
                                                    </h6>
                                                </div>
                                            </div>
                                            <span class="faq-icon pull-right">
                                                <i class="fa fa-ellipsis-h" aria-hidden="true"></i>
                                            </span>
                                        </a>
                                    </div>
                                    <div id="heading1" class="faq-collapse collapse" role="tabpanel"
                                         aria-labelledby="heading1">
                                        <div class="faq-body">
                                            <p>Lid est laborum dolo rumes fugats untras. Etharums serge quidem and
                                                rerum facilis dolores
                                                nemis
                                                omnis and fugats vitaes nemo minima rerums</p>
                                            <ul class="ev-list small text-muted">
                                                <li class="ev-li-item">
                                                    <i class="fa-brands fa-instagram"></i> JuanPerez
                                                </li>
                                                <li class="ev-li-item">
                                                    <i class="fa-brands fa-youtube"></i> Juan Perez Video Oficial
                                                </li>
                                            </ul>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="panel">
                                <div class="faq-heading">
                                    <div class="faq-title">
                                        <a class="collapsed" href="#heading1" data-bs-toggle="collapse" role="button"
                                           aria-expanded="false" aria-controls="heading1">
                                            <div class="ev-title">
                                                <div class="ev-title-thumb">
                                                    <img src="{{asset('img/member.png')}}" alt="event">
                                                    <div class="child-thumb">
                                                        <img src="{{asset('img/member.png')}}" alt="event">
                                                    </div>
                                                </div>
                                                <div class="ev-title-content">
                                                    <h6>Juan Perez
                                                    </h6>
                                                </div>
                                            </div>
                                            <span class="faq-icon pull-right">
                                                <i class="fa fa-ellipsis-h" aria-hidden="true"></i>
                                            </span>
                                        </a>
                                    </div>
                                    <div id="heading1" class="faq-collapse collapse" role="tabpanel"
                                         aria-labelledby="heading1">
                                        <div class="faq-body">
                                            <p>Lid est laborum dolo rumes fugats untras. Etharums serge quidem and
                                                rerum facilis dolores
                                                nemis
                                                omnis and fugats vitaes nemo minima rerums</p>
                                            <ul class="ev-list small text-muted">
                                                <li class="ev-li-item">
                                                    <i class="fa-brands fa-instagram"></i> JuanPerez
                                                </li>
                                                <li class="ev-li-item">
                                                    <i class="fa-brands fa-youtube"></i> Juan Perez Video Oficial
                                                </li>
                                            </ul>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="panel">
                                <div class="faq-heading">
                                    <div class="faq-title">
                                        <a class="collapsed" href="#heading1" data-bs-toggle="collapse" role="button"
                                           aria-expanded="false" aria-controls="heading1">
                                            <div class="ev-title">
                                                <div class="ev-title-thumb">
                                                    <img src="{{asset('img/member.png')}}" alt="event">
                                                    <div class="child-thumb">
                                                        <img src="{{asset('img/member.png')}}" alt="event">
                                                    </div>
                                                </div>
                                                <div class="ev-title-content">
                                                    <h6>Juan Perez
                                                    </h6>
                                                </div>
                                            </div>
                                            <span class="faq-icon pull-right">
                                                <i class="fa fa-ellipsis-h" aria-hidden="true"></i>
                                            </span>
                                        </a>
                                    </div>
                                    <div id="heading1" class="faq-collapse collapse" role="tabpanel"
                                         aria-labelledby="heading1">
                                        <div class="faq-body">
                                            <p>Lid est laborum dolo rumes fugats untras. Etharums serge quidem and
                                                rerum facilis dolores
                                                nemis
                                                omnis and fugats vitaes nemo minima rerums</p>
                                            <ul class="ev-list small text-muted">
                                                <li class="ev-li-item">
                                                    <i class="fa-brands fa-instagram"></i> JuanPerez
                                                </li>
                                                <li class="ev-li-item">
                                                    <i class="fa-brands fa-youtube"></i> Juan Perez Video Oficial
                                                </li>
                                            </ul>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="faq faq-style2 event-schedule-trigger">
                        <h5 class="title">Semana 5</h5>
                        <div class="panel-group" id="accordion1" role="tablist" aria-multiselectable="true">
                            <div class="panel">
                                <div class="faq-heading">
                                    <div class="faq-title">
                                        <a class="collapsed" href="#heading1" data-bs-toggle="collapse" role="button"
                                           aria-expanded="false" aria-controls="heading1">
                                            <div class="ev-title">
                                                <div class="ev-title-thumb">
                                                    <img src="{{asset('img/member.png')}}" alt="event">
                                                    <div class="child-thumb">
                                                        <img src="{{asset('img/member.png')}}" alt="event">
                                                    </div>
                                                </div>
                                                <div class="ev-title-content">
                                                    <h6>Juan Perez
                                                    </h6>
                                                </div>
                                            </div>
                                            <span class="faq-icon pull-right">
                                                <i class="fa fa-ellipsis-h" aria-hidden="true"></i>
                                            </span>
                                        </a>
                                    </div>
                                    <div id="heading1" class="faq-collapse collapse" role="tabpanel"
                                         aria-labelledby="heading1">
                                        <div class="faq-body">
                                            <p>Lid est laborum dolo rumes fugats untras. Etharums serge quidem and
                                                rerum facilis dolores
                                                nemis
                                                omnis and fugats vitaes nemo minima rerums</p>
                                            <ul class="ev-list small text-muted">
                                                <li class="ev-li-item">
                                                    <i class="fa-brands fa-instagram"></i> JuanPerez
                                                </li>
                                                <li class="ev-li-item">
                                                    <i class="fa-brands fa-youtube"></i> Juan Perez Video Oficial
                                                </li>
                                            </ul>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="panel">
                                <div class="faq-heading">
                                    <div class="faq-title">
                                        <a class="collapsed" href="#heading1" data-bs-toggle="collapse" role="button"
                                           aria-expanded="false" aria-controls="heading1">
                                            <div class="ev-title">
                                                <div class="ev-title-thumb">
                                                    <img src="{{asset('img/member.png')}}" alt="event">
                                                    <div class="child-thumb">
                                                        <img src="{{asset('img/member.png')}}" alt="event">
                                                    </div>
                                                </div>
                                                <div class="ev-title-content">
                                                    <h6>Juan Perez
                                                    </h6>
                                                </div>
                                            </div>
                                            <span class="faq-icon pull-right">
                                                <i class="fa fa-ellipsis-h" aria-hidden="true"></i>
                                            </span>
                                        </a>
                                    </div>
                                    <div id="heading1" class="faq-collapse collapse" role="tabpanel"
                                         aria-labelledby="heading1">
                                        <div class="faq-body">
                                            <p>Lid est laborum dolo rumes fugats untras. Etharums serge quidem and
                                                rerum facilis dolores
                                                nemis
                                                omnis and fugats vitaes nemo minima rerums</p>
                                            <ul class="ev-list small text-muted">
                                                <li class="ev-li-item">
                                                    <i class="fa-brands fa-instagram"></i> JuanPerez
                                                </li>
                                                <li class="ev-li-item">
                                                    <i class="fa-brands fa-youtube"></i> Juan Perez Video Oficial
                                                </li>
                                            </ul>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="panel">
                                <div class="faq-heading">
                                    <div class="faq-title">
                                        <a class="collapsed" href="#heading1" data-bs-toggle="collapse" role="button"
                                           aria-expanded="false" aria-controls="heading1">
                                            <div class="ev-title">
                                                <div class="ev-title-thumb">
                                                    <img src="{{asset('img/member.png')}}" alt="event">
                                                    <div class="child-thumb">
                                                        <img src="{{asset('img/member.png')}}" alt="event">
                                                    </div>
                                                </div>
                                                <div class="ev-title-content">
                                                    <h6>Juan Perez
                                                    </h6>
                                                </div>
                                            </div>
                                            <span class="faq-icon pull-right">
                                                <i class="fa fa-ellipsis-h" aria-hidden="true"></i>
                                            </span>
                                        </a>
                                    </div>
                                    <div id="heading1" class="faq-collapse collapse" role="tabpanel"
                                         aria-labelledby="heading1">
                                        <div class="faq-body">
                                            <p>Lid est laborum dolo rumes fugats untras. Etharums serge quidem and
                                                rerum facilis dolores
                                                nemis
                                                omnis and fugats vitaes nemo minima rerums</p>
                                            <ul class="ev-list small text-muted">
                                                <li class="ev-li-item">
                                                    <i class="fa-brands fa-instagram"></i> JuanPerez
                                                </li>
                                                <li class="ev-li-item">
                                                    <i class="fa-brands fa-youtube"></i> Juan Perez Video Oficial
                                                </li>
                                            </ul>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="panel">
                                <div class="faq-heading">
                                    <div class="faq-title">
                                        <a class="collapsed" href="#heading1" data-bs-toggle="collapse" role="button"
                                           aria-expanded="false" aria-controls="heading1">
                                            <div class="ev-title">
                                                <div class="ev-title-thumb">
                                                    <img src="{{asset('img/member.png')}}" alt="event">
                                                    <div class="child-thumb">
                                                        <img src="{{asset('img/member.png')}}" alt="event">
                                                    </div>
                                                </div>
                                                <div class="ev-title-content">
                                                    <h6>Juan Perez
                                                    </h6>
                                                </div>
                                            </div>
                                            <span class="faq-icon pull-right">
                                                <i class="fa fa-ellipsis-h" aria-hidden="true"></i>
                                            </span>
                                        </a>
                                    </div>
                                    <div id="heading1" class="faq-collapse collapse" role="tabpanel"
                                         aria-labelledby="heading1">
                                        <div class="faq-body">
                                            <p>Lid est laborum dolo rumes fugats untras. Etharums serge quidem and
                                                rerum facilis dolores
                                                nemis
                                                omnis and fugats vitaes nemo minima rerums</p>
                                            <ul class="ev-list small text-muted">
                                                <li class="ev-li-item">
                                                    <i class="fa-brands fa-instagram"></i> JuanPerez
                                                </li>
                                                <li class="ev-li-item">
                                                    <i class="fa-brands fa-youtube"></i> Juan Perez Video Oficial
                                                </li>
                                            </ul>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="panel">
                                <div class="faq-heading">
                                    <div class="faq-title">
                                        <a class="collapsed" href="#heading1" data-bs-toggle="collapse" role="button"
                                           aria-expanded="false" aria-controls="heading1">
                                            <div class="ev-title">
                                                <div class="ev-title-thumb">
                                                    <img src="{{asset('img/member.png')}}" alt="event">
                                                    <div class="child-thumb">
                                                        <img src="{{asset('img/member.png')}}" alt="event">
                                                    </div>
                                                </div>
                                                <div class="ev-title-content">
                                                    <h6>Juan Perez
                                                    </h6>
                                                </div>
                                            </div>
                                            <span class="faq-icon pull-right">
                                                <i class="fa fa-ellipsis-h" aria-hidden="true"></i>
                                            </span>
                                        </a>
                                    </div>
                                    <div id="heading1" class="faq-collapse collapse" role="tabpanel"
                                         aria-labelledby="heading1">
                                        <div class="faq-body">
                                            <p>Lid est laborum dolo rumes fugats untras. Etharums serge quidem and
                                                rerum facilis dolores
                                                nemis
                                                omnis and fugats vitaes nemo minima rerums</p>
                                            <ul class="ev-list small text-muted">
                                                <li class="ev-li-item">
                                                    <i class="fa-brands fa-instagram"></i> JuanPerez
                                                </li>
                                                <li class="ev-li-item">
                                                    <i class="fa-brands fa-youtube"></i> Juan Perez Video Oficial
                                                </li>
                                            </ul>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="panel">
                                <div class="faq-heading">
                                    <div class="faq-title">
                                        <a class="collapsed" href="#heading1" data-bs-toggle="collapse" role="button"
                                           aria-expanded="false" aria-controls="heading1">
                                            <div class="ev-title">
                                                <div class="ev-title-thumb">
                                                    <img src="{{asset('img/member.png')}}" alt="event">
                                                    <div class="child-thumb">
                                                        <img src="{{asset('img/member.png')}}" alt="event">
                                                    </div>
                                                </div>
                                                <div class="ev-title-content">
                                                    <h6>Juan Perez
                                                    </h6>
                                                </div>
                                            </div>
                                            <span class="faq-icon pull-right">
                                                <i class="fa fa-ellipsis-h" aria-hidden="true"></i>
                                            </span>
                                        </a>
                                    </div>
                                    <div id="heading1" class="faq-collapse collapse" role="tabpanel"
                                         aria-labelledby="heading1">
                                        <div class="faq-body">
                                            <p>Lid est laborum dolo rumes fugats untras. Etharums serge quidem and
                                                rerum facilis dolores
                                                nemis
                                                omnis and fugats vitaes nemo minima rerums</p>
                                            <ul class="ev-list small text-muted">
                                                <li class="ev-li-item">
                                                    <i class="fa-brands fa-instagram"></i> JuanPerez
                                                </li>
                                                <li class="ev-li-item">
                                                    <i class="fa-brands fa-youtube"></i> Juan Perez Video Oficial
                                                </li>
                                            </ul>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="faq faq-style2 event-schedule-trigger">
                        <h5 class="title">Semana 6</h5>
                        <div class="panel-group" id="accordion1" role="tablist" aria-multiselectable="true">
                            <div class="panel">
                                <div class="faq-heading">
                                    <div class="faq-title">
                                        <a class="collapsed" href="#heading1" data-bs-toggle="collapse" role="button"
                                           aria-expanded="false" aria-controls="heading1">
                                            <div class="ev-title">
                                                <div class="ev-title-thumb">
                                                    <img src="{{asset('img/member.png')}}" alt="event">
                                                    <div class="child-thumb">
                                                        <img src="{{asset('img/member.png')}}" alt="event">
                                                    </div>
                                                </div>
                                                <div class="ev-title-content">
                                                    <h6>Juan Perez
                                                    </h6>
                                                </div>
                                            </div>
                                            <span class="faq-icon pull-right">
                                                <i class="fa fa-ellipsis-h" aria-hidden="true"></i>
                                            </span>
                                        </a>
                                    </div>
                                    <div id="heading1" class="faq-collapse collapse" role="tabpanel"
                                         aria-labelledby="heading1">
                                        <div class="faq-body">
                                            <p>Lid est laborum dolo rumes fugats untras. Etharums serge quidem and
                                                rerum facilis dolores
                                                nemis
                                                omnis and fugats vitaes nemo minima rerums</p>
                                            <ul class="ev-list small text-muted">
                                                <li class="ev-li-item">
                                                    <i class="fa-brands fa-instagram"></i> JuanPerez
                                                </li>
                                                <li class="ev-li-item">
                                                    <i class="fa-brands fa-youtube"></i> Juan Perez Video Oficial
                                                </li>
                                            </ul>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="panel">
                                <div class="faq-heading">
                                    <div class="faq-title">
                                        <a class="collapsed" href="#heading1" data-bs-toggle="collapse" role="button"
                                           aria-expanded="false" aria-controls="heading1">
                                            <div class="ev-title">
                                                <div class="ev-title-thumb">
                                                    <img src="{{asset('img/member.png')}}" alt="event">
                                                    <div class="child-thumb">
                                                        <img src="{{asset('img/member.png')}}" alt="event">
                                                    </div>
                                                </div>
                                                <div class="ev-title-content">
                                                    <h6>Juan Perez
                                                    </h6>
                                                </div>
                                            </div>
                                            <span class="faq-icon pull-right">
                                                <i class="fa fa-ellipsis-h" aria-hidden="true"></i>
                                            </span>
                                        </a>
                                    </div>
                                    <div id="heading1" class="faq-collapse collapse" role="tabpanel"
                                         aria-labelledby="heading1">
                                        <div class="faq-body">
                                            <p>Lid est laborum dolo rumes fugats untras. Etharums serge quidem and
                                                rerum facilis dolores
                                                nemis
                                                omnis and fugats vitaes nemo minima rerums</p>
                                            <ul class="ev-list small text-muted">
                                                <li class="ev-li-item">
                                                    <i class="fa-brands fa-instagram"></i> JuanPerez
                                                </li>
                                                <li class="ev-li-item">
                                                    <i class="fa-brands fa-youtube"></i> Juan Perez Video Oficial
                                                </li>
                                            </ul>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="panel">
                                <div class="faq-heading">
                                    <div class="faq-title">
                                        <a class="collapsed" href="#heading1" data-bs-toggle="collapse" role="button"
                                           aria-expanded="false" aria-controls="heading1">
                                            <div class="ev-title">
                                                <div class="ev-title-thumb">
                                                    <img src="{{asset('img/member.png')}}" alt="event">
                                                    <div class="child-thumb">
                                                        <img src="{{asset('img/member.png')}}" alt="event">
                                                    </div>
                                                </div>
                                                <div class="ev-title-content">
                                                    <h6>Juan Perez
                                                    </h6>
                                                </div>
                                            </div>
                                            <span class="faq-icon pull-right">
                                                <i class="fa fa-ellipsis-h" aria-hidden="true"></i>
                                            </span>
                                        </a>
                                    </div>
                                    <div id="heading1" class="faq-collapse collapse" role="tabpanel"
                                         aria-labelledby="heading1">
                                        <div class="faq-body">
                                            <p>Lid est laborum dolo rumes fugats untras. Etharums serge quidem and
                                                rerum facilis dolores
                                                nemis
                                                omnis and fugats vitaes nemo minima rerums</p>
                                            <ul class="ev-list small text-muted">
                                                <li class="ev-li-item">
                                                    <i class="fa-brands fa-instagram"></i> JuanPerez
                                                </li>
                                                <li class="ev-li-item">
                                                    <i class="fa-brands fa-youtube"></i> Juan Perez Video Oficial
                                                </li>
                                            </ul>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="panel">
                                <div class="faq-heading">
                                    <div class="faq-title">
                                        <a class="collapsed" href="#heading1" data-bs-toggle="collapse" role="button"
                                           aria-expanded="false" aria-controls="heading1">
                                            <div class="ev-title">
                                                <div class="ev-title-thumb">
                                                    <img src="{{asset('img/member.png')}}" alt="event">
                                                    <div class="child-thumb">
                                                        <img src="{{asset('img/member.png')}}" alt="event">
                                                    </div>
                                                </div>
                                                <div class="ev-title-content">
                                                    <h6>Juan Perez
                                                    </h6>
                                                </div>
                                            </div>
                                            <span class="faq-icon pull-right">
                                                <i class="fa fa-ellipsis-h" aria-hidden="true"></i>
                                            </span>
                                        </a>
                                    </div>
                                    <div id="heading1" class="faq-collapse collapse" role="tabpanel"
                                         aria-labelledby="heading1">
                                        <div class="faq-body">
                                            <p>Lid est laborum dolo rumes fugats untras. Etharums serge quidem and
                                                rerum facilis dolores
                                                nemis
                                                omnis and fugats vitaes nemo minima rerums</p>
                                            <ul class="ev-list small text-muted">
                                                <li class="ev-li-item">
                                                    <i class="fa-brands fa-instagram"></i> JuanPerez
                                                </li>
                                                <li class="ev-li-item">
                                                    <i class="fa-brands fa-youtube"></i> Juan Perez Video Oficial
                                                </li>
                                            </ul>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="panel">
                                <div class="faq-heading">
                                    <div class="faq-title">
                                        <a class="collapsed" href="#heading1" data-bs-toggle="collapse" role="button"
                                           aria-expanded="false" aria-controls="heading1">
                                            <div class="ev-title">
                                                <div class="ev-title-thumb">
                                                    <img src="{{asset('img/member.png')}}" alt="event">
                                                    <div class="child-thumb">
                                                        <img src="{{asset('img/member.png')}}" alt="event">
                                                    </div>
                                                </div>
                                                <div class="ev-title-content">
                                                    <h6>Juan Perez
                                                    </h6>
                                                </div>
                                            </div>
                                            <span class="faq-icon pull-right">
                                                <i class="fa fa-ellipsis-h" aria-hidden="true"></i>
                                            </span>
                                        </a>
                                    </div>
                                    <div id="heading1" class="faq-collapse collapse" role="tabpanel"
                                         aria-labelledby="heading1">
                                        <div class="faq-body">
                                            <p>Lid est laborum dolo rumes fugats untras. Etharums serge quidem and
                                                rerum facilis dolores
                                                nemis
                                                omnis and fugats vitaes nemo minima rerums</p>
                                            <ul class="ev-list small text-muted">
                                                <li class="ev-li-item">
                                                    <i class="fa-brands fa-instagram"></i> JuanPerez
                                                </li>
                                                <li class="ev-li-item">
                                                    <i class="fa-brands fa-youtube"></i> Juan Perez Video Oficial
                                                </li>
                                            </ul>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="panel">
                                <div class="faq-heading">
                                    <div class="faq-title">
                                        <a class="collapsed" href="#heading1" data-bs-toggle="collapse" role="button"
                                           aria-expanded="false" aria-controls="heading1">
                                            <div class="ev-title">
                                                <div class="ev-title-thumb">
                                                    <img src="{{asset('img/member.png')}}" alt="event">
                                                    <div class="child-thumb">
                                                        <img src="{{asset('img/member.png')}}" alt="event">
                                                    </div>
                                                </div>
                                                <div class="ev-title-content">
                                                    <h6>Juan Perez
                                                    </h6>
                                                </div>
                                            </div>
                                            <span class="faq-icon pull-right">
                                                <i class="fa fa-ellipsis-h" aria-hidden="true"></i>
                                            </span>
                                        </a>
                                    </div>
                                    <div id="heading1" class="faq-collapse collapse" role="tabpanel"
                                         aria-labelledby="heading1">
                                        <div class="faq-body">
                                            <p>Lid est laborum dolo rumes fugats untras. Etharums serge quidem and
                                                rerum facilis dolores
                                                nemis
                                                omnis and fugats vitaes nemo minima rerums</p>
                                            <ul class="ev-list small text-muted">
                                                <li class="ev-li-item">
                                                    <i class="fa-brands fa-instagram"></i> JuanPerez
                                                </li>
                                                <li class="ev-li-item">
                                                    <i class="fa-brands fa-youtube"></i> Juan Perez Video Oficial
                                                </li>
                                            </ul>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="speakers-section-14 padding-120">
        <div class="container">
            <div class="section-header">
                <h2>Jurados</h2>
                <p>Los mejores talentos dirigiendo a los nuevos talentos</p>
            </div>
            <div class="section-wrapper">
                <div class="row justify-content-center">
                    <div class="col-md-6">
                        <div class="speaker-item">
                            <div class="speaker-inner">
                                <div class="speaker-thumb">
                                    <img src="{{asset('img/panel.png')}}" alt="panel">
                                </div>
                                <div class="speaker-content">
                                    <div class="spkr-content-title">
                                        <h5>Jua Perez</h5>
                                        <p>Cantante</p>
                                    </div>
                                    <div class="spkr-content-details">
                                        <p>Completey conceplua high quality
                                            nice markes rather than long term
                                            impact human capital</p>
                                        <ul class="social-icons">
                                            <li>
                                                <a href="#"><i class="fa-brands fa-twitter"></i></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="fa-brands fa-instagram"></i></a>
                                            </li>
                                            <li><a href="#"><i class="fa-brands fa-facebook"></i></a>
                                            </li>
                                            <li><a href="#"><i class="fa-brands fa-youtube"></i></a></li>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="speaker-item">
                            <div class="speaker-inner">
                                <div class="speaker-thumb">
                                    <img src="{{asset('img/panel.png')}}" alt="panel">
                                </div>
                                <div class="speaker-content">
                                    <div class="spkr-content-title">
                                        <h5>Jua Perez</h5>
                                        <p>Cantante</p>
                                    </div>
                                    <div class="spkr-content-details">
                                        <p>Completey conceplua high quality
                                            nice markes rather than long term
                                            impact human capital</p>
                                        <ul class="social-icons">
                                            <li>
                                                <a href="#"><i class="fa-brands fa-twitter"></i></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="fa-brands fa-instagram"></i></a>
                                            </li>
                                            <li><a href="#"><i class="fa-brands fa-facebook"></i></a>
                                            </li>
                                            <li><a href="#"><i class="fa-brands fa-youtube"></i></a></li>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="sponsor padding-120">
        <div class="container">
            <div class="section-header text-center">
                <h2>Event Sponsors</h2>
                <p>Check Who Makes The Event Possible</p>
            </div>
            <div class="sponsor-item">
                <h5>Platinum Sponsors</h5>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-3">
                    <img src="{{asset('img/sponsors/sponsor_1.jpg')}}">
                </div>
            </div>
        </div>
    </section>
@endsection

@extends('layouts.app')
@section('content')
    <section id="voting-page">
        <section class="banner-14">
            <div class="container">
                <div class="banner-wrapper">
                    <div class="row">
                        <div class="col-lg-8">
                            <div class="banner-content">
                                <h1 class="pt-lg-5">@{{ week.name }}</h1>
                                <p>Desde @{{ week.startDate }} hasta @{{ week.endDate }}</p>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="banner-image">
                                <img src="{{asset('img/01.png')}}" alt="banner-img">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="about" class="speakers about about-six padding-120">
            <div class="container">
                <template v-for="round in week.rounds">
                    <div class="section-header text-center mt-5">
                        <h2>@{{ round.name }}</h2>
                        <p><em>@{{ round.startDate }} <br/> @{{ round.endDate }}</em></p>
                    </div>
                    <div class="section-wrapper row justify-content-center">
                        <div v-for="singer in round.singers" class="col-lg-3 col-md-6 col-xs-12">
                            <div class="speaker-item">
                                <div class="speaker-image">
                                    <img :src="'{{asset('img/singers')}}/'+singer.picture"
                                         alt="speaker image" class="img-responsive">
                                </div>
                                <!-- speaker-image -->
                                <div class="speaker-content cursor-pointer" v-if="round.voting" v-on:click="initVote(round,singer.id)">
                                    <span class="icon">
                                        <i class="fa-regular fa-hand-pointer"></i>
                                    </span>
                                    <div class="details">
                                        <h4>@{{ singer.name }} @{{ singer.lastname }}</h4>
                                        <span>Votar</span>
                                    </div>
                                </div>
                                <div class="speaker-content" v-else>
                                    <span class="icon">
                                        <i class="fa-solid fa-microphone-lines"></i>
                                    </span>
                                    <div class="details">
                                        <h4>@{{ singer.name }} @{{ singer.lastname }}</h4>
                                        <span>Voto no disponible</span>
                                    </div>
                                </div>
                                <!-- speaker-content -->
                            </div>
                            <!-- speaker-item -->
                        </div>
                    </div>
                </template>
            </div>
        </section>

        <div id="modalVote" class="modal fade bd-example-modal-sm" tabindex="-1" role="dialog"
             aria-labelledby="mySmallModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-sm">
                <div class="modal-content p-3">
                    <h5 class="modal-title text-dark">Emitir voto</h5>

                    <hr/>
                    <div class="form-group mb-2">
                        <label for="document">Su DNI:</label>
                        <input type="text" id="document" name="document" v-model="vote.document"
                               class="form-control-sm form-control"/>
                    </div>
                    <div class="form-group mb-2">
                        <label for="name">Nombres:</label>
                        <input type="text" id="name" name="document" v-model="vote.name"
                               class="form-control-sm form-control"/>
                    </div>
                    <div class="form-group mb-2">
                        <label for="lastname">Apellidos:</label>
                        <input type="text" id="lastname" name="document" v-model="vote.lastname"
                               class="form-control-sm form-control"/>
                    </div>
                    <button class="btn btn-block btn-primary my-3" role="button" type="button" v-on:click="saveVote"><i
                            class="fa-solid fa-check"></i> Votar
                    </button>
                    <button type="button" class="close btn btn-danger btn-sm" data-bs-dismiss="modal"
                            data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span> Cancelar
                    </button>
                </div>
            </div>
        </div>
        <div id="modalResult" class="modal fade bd-example-modal-sm" tabindex="-1" role="dialog"
             aria-labelledby="mySmallModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content p-3">
                    <h5 class="modal-title text-dark">Resultados de la ronda</h5>

                    <hr/>
                    <div class="schedule-table table-responsive">
                        <table class="table table-sm table-striped">
                            <tr>
                                <th>
                                    N°
                                </th>
                                <th>
                                    Cantante
                                </th>
                                <th>
                                    Votos
                                </th>
                            </tr>
                            <tr v-for="(item,index) in round.singers">
                                <td>@{{ index+1 }}</td>
                                <td>@{{item.name}} @{{item.lastname}}</td>
                                <td>@{{ getVotesCount(item.id) }}</td>
                            </tr>
                        </table>
                    </div>
                    <button type="button" class="close btn btn-danger btn-sm" data-bs-dismiss="modal"
                            data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span> Cerrar
                    </button>
                </div>
            </div>
        </div>
    </section>
@endsection
@section('inlineScripts')
    <script src="{{asset('js/v/i.min.js')}}"></script>
@endsection
@section('inlineStyles')
    <style>
        .speakers .speaker-item .speaker-content .icon {
            line-height: 83px !important;
        }

        .details h4 {
            white-space: nowrap;
        }

        @media (min-width: 992px) {
            .banner-14 .banner-wrapper {
                padding-top: 160px;
            }
        }

    </style>
@endsection

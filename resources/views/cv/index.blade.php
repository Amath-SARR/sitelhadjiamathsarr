@extends('base')

@section('title', 'cv')

@section('content')
    <button actio></button>
    <div class="mbr-section-head">
        <h3 class="mbr-section-title mbr-fonts-style align-center mb-0 display-2">
            <a href="#">
                <svg xmlns="http://www.w3.org/2000/svg" width="22" height="25" fill="currentColor" class="bi bi-file-fill"
                    viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M4 0h8a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2z" />
                </svg>
            </a>
            <strong>CV</strong>
        </h3>
    </div>
    <!--View-->
    <div class="row">
        <div class="col-md-12 col-lg-10 offset-2 mt-5">
            <h2>Formation</h2>
            @foreach ($formations as $cv)
                <div class="card mt-5" style="width: 80%" ;>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-12 col-lg-3">
                                <h5 class="card-title" style="color: blue">{{ $cv->dateDebut }}-{{ $cv->dateFin }}</h5>
                                <h6 class="card-subtitle mb-2 text-muted">Diplome</h6>
                                <h5 class="card-title">{{$cv->diplome}}</h5>
                            </div>
                            <div class="col-sm-12 col-lg-5 offset-2">
                                <form method="POST" action="{{ route('cv.destroy', compact('cv')) }}">
                                    @method('DELETE')
                                    @csrf
                                    <button type="submit">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="26" height="36" fill="currentColor"
                                            class="bi bi-x" viewBox="0 0 16 16">
                                            <path
                                                d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z" />
                                        </svg>
                                    </button>
                                </form>
                                <p class="card-text">{{$cv->description}}</p>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
            @auth
            <button type="button" class="btn btn-primary btn-lg btn-rounded " data-toggle="modal" data-target="#modelFormation">
                <a style="display: float">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                        class="bi bi-plus" viewBox="0 0 16 16">
                        <path
                            d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z" />
                    </svg>
                </a>
            </button>
            @endauth

        </div>

        <div class="col-md-12 col-lg-10 offset-2 mt-5">
            <h2>Experience</h2>
            @foreach ($experiences as $experience)
                <div class="card mt-5" style="width: 80%" ;>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-12 col-lg-6">
                                <h5 class="card-title" style="color: blue">{{ $experience->dateDebut/*|date: format('dd/MM/yy')*/ }} à</h5>
                                <h5 class="card-title" style="color: blue">{{ $experience->dateFin/*|date: format('dd/MM/yy')*/ }}</h5>
                                <h5 class="card-title">{{$experience->nomEntreprise}}</h5>
                                <h6 class="card-subtitle mb-2 text-muted">{{$experience->lieu}}</h6>
                                <h5 class="card-title">Poste</h5>
                                <h6 class="card-subtitle mb-2 text-muted">{{$experience->poste}}</h6>
                            </div>
                            <div class="col-sm-12 col-lg-6">
                                <form method="POST" action="{{ route('experience.destroy', compact('experience')) }}">
                                    @method('DELETE')
                                    @csrf
                                    <button type="submit">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="26" height="36" fill="currentColor"
                                            class="bi bi-x" viewBox="0 0 16 16">
                                            <path
                                                d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z" />
                                        </svg>
                                    </button>
                                </form>
                                <p class="card-text">{{ $experience->description }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
            @auth
            <button type="button" class="btn btn-primary btn-lg btn-rounded " data-toggle="modal"
                data-target="#modalExperience">
                <a style="display: float">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                        class="bi bi-plus" viewBox="0 0 16 16">
                        <path
                            d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z" />
                    </svg>
                </a>
            </button>
            @endauth

        </div>
         <div class="col-md-12 col-lg-10 offset-2 mt-5">
                <div class="card mt-5" style="width: 80%" ;>
                    <div class="card-body">
                        <h2>Compétence</h2>
                        <div class="row mt-5">
                            @foreach ($competences as $competence)
                                <div class="card mt-2" style="height: 60px " ;>
                                    <div class="card-body d-flex">
                                        <div class="col-sm-12 col-lg-8 ">
                                            <h5 class="card-title">{{$competence->nom}}</h5>
                                        </div>
                                        <div class="col-sm-12 col-lg-2 offset-2 mb-3">
                                            <form action="{{ route('competence.destroy', compact('competence')) }}"
                                                method="POST">
                                                @method('DELETE')
                                                @csrf
                                                <button type="submit">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="26" height="36"
                                                        fill="currentColor" class="bi bi-x" viewBox="0 0 16 16">
                                                        <path
                                                            d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z" />
                                                    </svg>
                                                </button>
                                            </form>
                                        </div>
                                        <div class="">

                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        <h2 class="mt-5">Langues</h2>
                        <ul>
                            <li><h6> Francais</h6> </li>
                            <li><h6> Wolof</h6></li>
                            <li><h6> Anglais</h6></li>
                        </ul>
                    </div>
                </div>
            @auth
            <button type="button" class="btn btn-primary btn-lg btn-rounded mt-5" data-toggle="modal" data-target="#modelCompetence">
                <a style="display: float">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                        class="bi bi-plus" viewBox="0 0 16 16">
                        <path
                            d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z" />
                    </svg>
                </a>
            </button>
            @endauth
        </div>
    </div>

    <!-- Les modals d'ajout -->
    <section>
        <!--Form d'ajout formation-->
        <form method="POST" action="{{ route('cv.store') }}">
            @csrf
            @method('POST')
            <div class="modal fade" id="modelFormation" tabindex="-1" role="dialog" aria-labelledby="modelTitleId"
                aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Ajouté une formation</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                    aria-hidden="true">&times;</span></button>
                        </div>
                        <div class="modal-body">
                            <div class="form-group">
                                <label for="etablissement" class="col-sm-1-12 col-formlabel">Etablissement</label>
                                <div class="col-sm-1-12">
                                    <input type="text" class="form-control" name="etablissement" id="etablissement"
                                        aria-describedby="helpId">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="dateDebut" class="col-sm-1-12 col-formlabel">dateDebut</label>
                                <input type="date" class="form-control" name="dateDebut" id="dateDebut"
                                    aria-describedby="helpId">
                            </div>
                            <div class="form-group">
                                <label for="dateFin" class="col-sm-1-12 col-formlabel">DateFin</label>
                                <input type="date" class="form-control" name="dateFin" id="dateFin"
                                    aria-describedby="helpId">
                            </div>
                            <div class="form-group">
                                <label for="diplome" class="col-sm-1-12 col-formlabel">Diplome</label>
                                <input type="text" class="form-control" name="diplome" id="diplome"
                                    aria-describedby="helpId">
                            </div>
                            <div class="form-group">
                                <label for="lieu" class="col-sm-1-12 col-formlabel">Lieu</label>
                                <input type="text" class="form-control" name="lieu" id="lieu" aria-describedby="helpId">
                            </div>
                            <div class="form-group">
                                <label for="description" class="col-sm-1-12 col-formlabel">description</label>
                                <input type="text" class="form-control" name="description" id="description"
                                    aria-describedby="helpId">
                            </div>

                            <div>
                                <div class="modal-footer">
                                    <button id="cancel" type="reset" class="btn btn-danger"
                                        data-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-primary">Enregistré</button>
                                    {{-- <button type="button" class="btn btn-secondary">Edit</button> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </section>
    <section>
        <!--Form d'ajout d'experience-->
        <form method="POST" action="{{ route('experience.store') }}">
            @csrf
            @method('POST')
            <div class="modal fade" id="modalExperience" tabindex="-1" role="dialog" aria-labelledby="modelTitleId"
                aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Ajouté une experience</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                    aria-hidden="true">&times;</span></button>
                        </div>
                        <div class="modal-body">
                            <div class="form-group">
                                <label for="etablissement" class="col-sm-1-12 col-formlabel">Entreprise</label>
                                <div class="col-sm-1-12">
                                    <input type="text" class="form-control" name="nomEntreprise" id="nomEntreprise"
                                        aria-describedby="helpId">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="dateDebut" class="col-sm-1-12 col-formlabel">Date Debut</label>
                                <input type="date" class="form-control" name="dateDebut" id="dateDebut"
                                    aria-describedby="helpId">
                            </div>
                            <div class="form-group">
                                <label for="dateFin" class="col-sm-1-12 col-formlabel">Date Fin</label>
                                <input type="date" class="form-control" name="dateFin" id="dateFin"
                                    aria-describedby="helpId">
                            </div>
                            <div class="form-group">
                                <label for="diplome" class="col-sm-1-12 col-formlabel">Poste</label>
                                <input type="text" class="form-control" name="poste" id="poste" aria-describedby="helpId">
                            </div>
                            <div class="form-group">
                                <label for="lieu" class="col-sm-1-12 col-formlabel">Lieu</label>
                                <input type="text" class="form-control" name="lieu" id="lieu" aria-describedby="helpId">
                            </div>
                            <div class="form-group">
                                <label for="description" class="col-sm-1-12 col-formlabel">Description</label>
                                <input type="text" class="form-control" name="description" id="description"
                                    aria-describedby="helpId">
                            </div>

                            <div>
                                <div class="modal-footer">
                                    <button id="cancel" type="reset" class="btn btn-danger"
                                        data-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-primary">Enregistré</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </section>
    <!--Form d'ajout  Competence-->
    <section>
        <form method="POST" action="{{ route('competence.store') }}">
            @csrf
            @method('POST')
            <div class="modal fade" id="modelCompetence" tabindex="-1" role="dialog" aria-labelledby="modelTitleId"
                aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Ajouté d'une Competence</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                    aria-hidden="true">&times;</span></button>
                        </div>
                        <div class="modal-body">
                            <div class="form-group">
                                <label for="nom" class="col-sm-1-12 col-formlabel">Nom</label>
                                <div class="col-sm-1-12">
                                    <input type="text" class="form-control" name="nom" id="nom"
                                        aria-describedby="helpId">
                                </div>
                                <div class="d-flex mt-3">
                                    <button id="cancel" type="reset" class="btn btn-danger"
                                            data-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-primary ml-2">Enregistré</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </section>

@endsection

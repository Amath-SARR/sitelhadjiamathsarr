@extends('base')
@section('title','Contact')
@section('content')
    <!--Contact-->
    <section data-bs-version="5.1" class="form5 cid-t0CBsKHic3" id="form5-q">


        <div class="container">
            <div class="mbr-section-head">
                <h3 class="mbr-section-title mbr-fonts-style align-center mb-0 display-2">
                    <a href="#">
                        <svg xmlns="http://www.w3.org/2000/svg" width="22" height="25" fill="currentColor" class="bi bi-file-fill" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M4 0h8a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2z"/>
                        </svg>
                    </a>
                    <strong>Contacts</strong>
                </h3>

            </div>
            <div class="row justify-content-center mt-4">
                <div class="col-lg-8 mx-auto mbr-form" data-form-type="formoid">
                    <form action="{{route('contact.store')}}" method="POST" class="mbr-form form-with-styler" data-form-title="Form Name">
                        @csrf
                        @method('POST')
                        <div class="dragArea row">
                            <div class="col-md col-sm-12 form-group mb-3" data-for="name">
                                <input type="text" name="prenom" placeholder="Prenom *" data-form-field="prenom" class="form-control" value="" id="prenom-form5-q">
                            </div>
                            <div class="col-md col-sm-12 form-group mb-3" data-for="nom">
                                <input type="text" name="nom" placeholder="Nom *" data-form-field="name" class="form-control" value="" id="nom-form5-q">
                            </div>
                            <div class="col-12 form-group mb-3" data-for="email">
                                <input type="email" name="email" placeholder="Email *" data-form-field="email" class="form-control" value="" id="email-form5-q">
                            </div>
                            <div class="col-12 form-group mb-3" data-for="objet">
                                <input type="text" name="objet" placeholder="Objet *" data-form-field="objet" class="form-control" value="" id="objet-form5-q">
                            </div>
                            <div class="col-12 form-group mb-3" data-for="message">
                                <textarea name="message" placeholder="Message *" data-form-field="message" class="form-control" value="" id="message-form5-q"></textarea>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 align-center mbr-section-btn">
                                <button type="submit" class="btn btn-primary display-4">Send message</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

@endsection

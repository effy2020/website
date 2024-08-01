@extends('admin.admin_master')
@section('admin')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<div class="page-content">
    <div class="container-fluid">

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">

                        <h4 class="card-title">Page À Propos</h4>

                        <form method="post" action="{{ route('update.about') }}" enctype="multipart/form-data">
                            @csrf

                            <input type="hidden" name="id" value="{{ $aboutpage->id }}">

                            <div class="row mb-3">
                                <label for="example-text-input" class="col-sm-2 col-form-label">Titre</label>
                                <div class="col-sm-10">
                                    <input name="title" class="form-control" type="text" value="{{ $aboutpage->title }}" id="example-text-input">
                                </div>
                            </div>
                            <!-- fin de la ligne -->

                            <div class="row mb-3">
                                <label for="example-text-input" class="col-sm-2 col-form-label">Sous-titre</label>
                                <div class="col-sm-10">
                                    <input name="short_title" class="form-control" type="text" value="{{ $aboutpage->short_title }}" id="example-text-input">
                                </div>
                            </div>
                            <!-- fin de la ligne -->

                            <div class="row mb-3">
                                <label for="example-text-input" class="col-sm-2 col-form-label">Description Courte</label>
                                <div class="col-sm-10">
                                    <textarea required="" name="short_description" class="form-control" rows="5">
                                        {{ $aboutpage->short_description }}
                                    </textarea>
                                </div>
                            </div>
                            <!-- fin de la ligne -->

                            <div class="row mb-3">
                                <label for="example-text-input" class="col-sm-2 col-form-label">Description Longue</label>
                                <div class="col-sm-10">
                                    <textarea id="elm1" name="long_description">
                                        {{ $aboutpage->long_description }}
                                    </textarea>
                                </div>
                            </div>
                            <!-- fin de la ligne -->

                            <div class="row mb-3">
                                <label for="example-text-input" class="col-sm-2 col-form-label">Image À Propos</label>
                                <div class="col-sm-10">
                                    <input name="about_image" class="form-control" type="file" id="image">
                                </div>
                            </div>
                            <!-- fin de la ligne -->

                            <div class="row mb-3">
                                <label for="example-text-input" class="col-sm-2 col-form-label"></label>
                                <div class="col-sm-10">
                                    <img id="showImage" class="rounded avatar-lg" src="{{ (!empty($aboutpage->about_image)) ? url($aboutpage->about_image) : url('upload/no_image.jpg') }}" alt="Aperçu de l'image">
                                </div>
                            </div>
                            <!-- fin de la ligne -->

                            <input type="submit" class="btn btn-info waves-effect waves-light" value="Mettre à jour la Page À Propos">
                        </form>

                    </div>
                </div>
            </div> <!-- fin de la colonne -->
        </div> <!-- fin de la rangée -->

    </div>
</div>

<script type="text/javascript">
    $(document).ready(function() {
        $('#image').change(function(e) {
            var reader = new FileReader();
            reader.onload = function(e) {
                $('#showImage').attr('src', e.target.result);
            }
            reader.readAsDataURL(e.target.files['0']);
        });
    });
</script>

@endsection

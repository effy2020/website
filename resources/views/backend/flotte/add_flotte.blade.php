@extends('admin.admin_master')
@section('admin')

<div class="page-content">
    <div class="container-fluid">
        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0">Ajouter un Véhicule</h4>
                </div>
            </div>
        </div>
        <!-- end page title -->

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <form action="{{ route('flotte.store') }}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="vehicle_model">Modèle</label>
                                <input type="text" name="vehicle_model" id="vehicle_model" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="vehicle_type">Type</label>
                                <input type="text" name="vehicle_type" id="vehicle_type" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="license_plate">Immatriculation</label>
                                <input type="text" name="license_plate" id="license_plate" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="vehicle_status">Statut</label>
                                <input type="text" name="vehicle_status" id="vehicle_status" class="form-control" required>
                            </div>
                            <button type="submit" class="btn btn-primary">Ajouter</button>
                        </form>
                    </div>
                </div>
            </div> <!-- end col -->
        </div> <!-- end row -->
    </div> <!-- container-fluid -->
</div>

@endsection

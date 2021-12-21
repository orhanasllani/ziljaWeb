@extends('layouts.app')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12">
            <div class="card bg-dark text-white text-center">
                <div class="card-body">
                    <h1>Shto Orar</h1>
                    <form action="/create" method="POST">
                        <div class="mb-3">
                            <label for="dita" class="form-label">Dita</label>
                            <select class="form-control" name="dita" id="dita">
                                <option value="hene">E Hene</option>
                                <option value="marte">E Marte</option>
                                <option value="merkure">E Merkure</option>
                                <option value="enjte">E Enjte</option>
                                <option value="premte">E Premte dite e shejt</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="fillon" class="form-label">Fillon</label>
                            <input class="form-control" id="fillon" name="fillon" type="time">
                        </div>
                        <div class="mb-3">
                            <label for="mbaron" class="form-label">Mbaron</label>
                            <input class="form-control" id="mbaron" name="mbaron" type="time">
                        </div>
                        <div class="mb-3">
                            <button type="submit" class="btn btn-primary btn-lg">Shto</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
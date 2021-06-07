@extends('layouts.mylayout')

@section('sectionEdit')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2>
                    Edit The Car
                </h2>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <form class="" action="{{route('update', $car -> id)}}" method="POST">

                    @csrf
                    @method('POST')

                    <div class="form-group row">
                        <label class="col-form-label" for="name">Car Name</label>
                        <input class="form-control" type="text" name="name" value="{{ $car -> name }}" required>
                    </div>

                    <div class="form-group row">
                        <label class="col-form-label" for="model">Car Model</label>
                        <input class="form-control" type="text" name="model" value="{{ $car -> model }}" required>
                    </div>

                    <div class="form-group row">
                        <label class="col-form-label" for="kw">KW</label>
                        <input class="form-control" type="number" name="kw" value="{{ $car -> kw }}" required>
                    </div>

                    <div class="form-group row">
                        <label class="col-form-label" for="brand_id">Brand</label>
                        <select id="brand_id" class="form-control" name="brand_id" required>

                            @foreach ($brands as $brand)

                                <option value="{{ $brand -> id }}"

                                @if ($car -> brand -> id == $brand -> id)
                                    selected
                                @endif

                                > {{ $brand -> name }}/{{ $brand -> nationality }} </option>

                            @endforeach

                        </select>
                    </div>


                    <div class="form-group row">
                        <label class="col-form-label" for="pilots_id[]">Pilot</label>

                        <select id="pilots_id[]" class="form-control" name="pilots_id[]" required multiple>

                            {{-- <option selected disabled>Pilots</option> --}}
                            @foreach ($pilots as $pilot)

                                <option value="{{ $pilot -> id }}"


                                    @foreach ($car -> pilots as $carPilot)
                                        @if ($carPilot -> id == $pilot -> id)
                                            selected
                                        @endif
                                    @endforeach

                                > {{ $pilot -> firstname }} {{ $pilot -> lastname }} </option>

                            @endforeach

                        </select>
                    </div>

                    <button class="btn btn-primary" type="submit" name="button">Submit</button>

                </form>
            </div>
        </div>
    </div>
@endsection

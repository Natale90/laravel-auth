@extends('layouts.mylayout')

@section('sectionHomeFree')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1>
                    Cars
                </h1>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <ul>
                    @foreach ($cars as $car)
                        <li class="border">
                            Car Name: {{ $car -> name }} <br>
                            Car Model: {{ $car -> model }} <br>
                            Car's Brand: {{ $car -> brand -> name }} <br>
                            <strong>
                                Car's Pilots:
                            </strong>
                            <ul>
                                @foreach ($car -> pilots as $pilot)
                                    <li>
                                        Name: {{ $pilot -> firstname }} {{ $pilot -> lastname }}
                                    </li>
                                @endforeach
                            </ul>
                            <a href="{{ route('edit', $car -> id) }}">
                                &#x270D;
                            </a>

                            <a href="{{ route('destroy', $car -> id) }}">
                                &#10060;
                            </a>
                        </li>
                        <br>

                    @endforeach
                </ul>
            </div>
        </div>
    </div>
@endsection

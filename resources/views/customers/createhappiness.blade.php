@extends('layouts.app')

@section('content')
<section class="masthead page-section" id="contact">
    <div class="container">
        <!-- Contact Section Heading-->
        <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Vytvoř klienta</h2>
        <!-- Icon Divider-->
            <div class="divider-custom">
                <div class="divider-custom-line"></div>
                <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                <div class="divider-custom-line"></div>
            </div>
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <div class="row justify-content-center">
                    <div class="col-lg-8 col-xl-7">
                        <form action="{{ route('store1') }}" method="POST" id="contactForm" data-sb-form-api-token="API_TOKEN">
                            {{ csrf_field() }}
                            <!-- Name input-->
                            <div class="form-floating mb-3">
                                <input class="form-control" id="name" name="name" value="{{ old('name') }}" type="text" placeholder="čislo faktury" data-sb-validations="required" />
                                <label for="name">Jmeno</label>
                                <div class="invalid-feedback" data-sb-feedback="name:required">Jmeno</div>
                            </div>
                            <div class="form-floating mb-3">
                                <input class="form-control" id="adress" name="adress" value="{{ old('adress') }}" type="text" placeholder="Enter your name..."  data-sb-validations="required" />
                                <label for="name">Adresa</label>
                                <div class="invalid-feedback" data-sb-feedback="name:required">Adresa</div>
                            </div>
                            <div class="form-floating mb-3">
                                <input class="form-control" id="zip" name="zip" value="{{ old('zip') }}" type="text" placeholder="cena faktury"  data-sb-validations="required" />
                                <label for="name">PSČ</label>
                                <div class="invalid-feedback" data-sb-feedback="name:required">PSČ</div>
                            </div>
                            <!-- Submit Button-->
                            <button type="submit" class="btn btn-primary">Vlož klienta</button>
                        </form>
                    </div>
                </div>
    </div>
</section>



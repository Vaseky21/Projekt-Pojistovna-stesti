@extends('layouts.app')

@section('content')
<section class="masthead page-section" id="contact">
    <div class="container">
        <!-- Contact Section Heading-->
        <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Pojisti si štěstí</h2>
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
                        <form action="{{ route('store') }}" method="POST" id="contactForm" data-sb-form-api-token="API_TOKEN">
                            {{ csrf_field() }}
                            <!-- Name input-->
                            
                            <div class="form-floating mb-3">
                                <select name="customer" class="form-select" aria-label="Default select example">
                                    <option selected>Vyber klienta</option>
                                    @foreach (App\Models\Customers:: all() as $time);
                                    <option value="{{ $time->id }}">{{ $time->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-floating mb-3">
                                <select name="name" class="form-select" aria-label="Default select example">
                                    <option selected>Vyber štěstí</option>
                                    <option value="V lasce">V LÁSCE</option>
                                    <option value="VE HŘE">VE HŘE</option>
                                    <option value="NA KAMARÁDY">NA KAMARÁDY</option>
                                </select>
                            </div>
                            <div class="form-floating mb-3">
                                <input class="form-control" id="date" value="{{ old('date') }}" name="date" type="date" placeholder="Datum" data-sb-validations="required" />
                                <label for="name">Datum</label>
                                <div class="invalid-feedback" data-sb-feedback="name:required">Datum</div>
                            </div>
                            <div class="form-floating mb-3">
                                <input class="form-control" id="total" name="total" value="{{ old('total') }}" type="text" placeholder="cena faktury"  data-sb-validations="required" />
                                <label for="name">Častka</label>
                                <div class="invalid-feedback" data-sb-feedback="name:required">Častka</div>
                            </div>
                            <!-- Submit Button-->
                            <button type="submit" class="btn btn-primary">Vlož štěstí</button>
                        </form>
                    </div>
                </div>
    </div>
</section>



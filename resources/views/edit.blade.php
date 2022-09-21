@extends('layouts.app')

@section('content')
<section class="masthead page-section" id="contact">
    <div class="container">
        <!-- Contact Section Heading-->
        <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Uprav si štěstí</h2>
        <!-- Icon Divider-->
            <div class="divider-custom">
                <div class="divider-custom-line"></div>
                <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                <div class="divider-custom-line"></div>
            </div>
                <div class="row justify-content-center">
                    <div class="col-lg-8 col-xl-7">
                        <form action="{{ route('update'['id'=>$invoive->id])}}" method="PUT" id="contactForm" data-sb-form-api-token="API_TOKEN">
                            {{ csrf_field() }}
                            <!-- Name input-->
                            <div class="form-floating mb-3">
                                <input class="form-control" value="{{$invoice->name}}" id="number" name="name" type="numbr" placeholder="čislo faktury" data-sb-validations="required" />
                                <label for="name">Číslo faktury</label>
                                <div class="invalid-feedback" data-sb-feedback="name:required">A name is required.</div>
                            </div>
                            <div class="form-floating mb-3">
                                <input class="form-control" value="{{$invoice->date}}"  id="date" name="date" type="date" placeholder="Enter your name..." data-sb-validations="required" />
                                <label for="name">Datum</label>
                                <div class="invalid-feedback" data-sb-feedback="name:required">A name is required.</div>
                            </div>
                            <div class="form-floating mb-3">
                                <input class="form-control" value="{{$invoice->total}}" id="total" name="total" type="text" placeholder="cena faktury" data-sb-validations="required" />
                                <label for="name">Častka</label>
                                <div class="invalid-feedback" data-sb-feedback="name:required">A name is required.</div>
                            </div>
                            <!-- Submit Button-->
                            <button type="submit" class="btn btn-primary">Uložit</button>
                        </form>
                    </div>
                </div>
    </div>
</section>



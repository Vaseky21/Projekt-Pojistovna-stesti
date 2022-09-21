@extends('layouts.app')

@section('content')
        <section class="masthead page-section portfolio" id="portfolio">
            <div class="container">
                <!-- Portfolio Section Heading-->
                <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Seznam klientů</h2>
                <!-- Icon Divider-->
                <div class="divider-custom">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                    <div class="divider-custom-line"></div>
                </div>

                @if (session()->has('message'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{session()->get('message')}}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                  </div> 
                @endif
                
                
                <table class="table table-striped">
                    <thead>
                        <tr>
                          <th scope="col">ID</th>
                          <th scope="col">Jemno klienta</th>
                          <th scope="col">Adresa</th>
                          <th scope="col">PSČ</th> 
                          <th scope="col">Akce</th>                         
                        </tr>
                      </thead>
                      <tbody>
                        @foreach ($seznam as $customer)
                            <tr>
                                <th scope="row">{{$customer ->id}}</th>
                                <td>{{$customer->name}}</td>
                                <td>{{$customer->adress}}</td>
                                <td>{{$customer->zip}}</td> 
                                <td>
                                 <form  method="POST" action="{{route('klient.destroy',['klient'=>$customer->id])}}">
                                  @csrf
                                    @method('delete')
                                    <button type="submit" class="btn btn-danger" >Vymazat</button>
                                    <a href="{{route('klient.edit',['klient'=>$customer->id])}}" class="btn btn-primary">Edituj</a>
                                    @endforeach
                                    
                                 </form>                               
                                </td> 
                            </tr>
                                   
                      </tbody>
                  </table>
            </div>
        </section>
 

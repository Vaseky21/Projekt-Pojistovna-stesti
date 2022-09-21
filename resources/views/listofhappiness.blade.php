@extends('layouts.app')

@section('content')
        <section class="masthead page-section portfolio" id="portfolio">
            <div class="container">
                <!-- Portfolio Section Heading-->
                <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Moje štěstí</h2>
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
                          <th scope="col">Jméno štastlivce</th>
                          <th scope="col">Druh štěstí</th>
                          <th scope="col">Datum</th>
                          <th scope="col">Častka</th> 
                          <th scope="col">Akce</th>                         
                        </tr>
                      </thead>
                      <tbody>
                        @foreach ($seznam as $item)
                            <tr>
                                <th>{{$item ->customer->name}}</th>
                                <td>{{$item ->name}}</td>
                                <td>{{$item ->date}}</td>
                                <td>{{$item ->total}}</td> 

                                <td>
                                 <form  method="POST" action="{{route('delete',['id'=>$item->id])}}">
                                  @csrf
                                  @method('delete')
                                  <button type="submit" class="btn btn-danger" >Vymazat</button>
                                  <a href="{{route('PDF',['id'=>$item->id])}}" class="btn btn-info">PDF </a>
                                 </form>
                                
                                </td> 
                            </tr>
                        @endforeach
                      </tbody>
                  </table>
            </div>
        </section>
 

@extends('layouts.app')

@section('content')
@php
    $user = Auth::user();
@endphp
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                {{-- <div class="card">
                    <div class="card-header">{{ __('Dashboard') }}</div>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique nobis molestiae, laboriosam libero perspiciatis ipsa ab sed officia porro architecto esse ratione dolore magni ex labore consequuntur saepe odit ipsum?</p>
                        <p>Fajar</p>
                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        {{ __('You are logged in!') }}
                    </div>
                </div> --}}

                      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                        <div class="col">
                          <div class="card shadow-sm">
                            <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"></svg>
                            <div class="card-body">
                              <p class="card-text">Game Name.</p>
                              <p class="card-text">Genre.</p>
                              <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                  <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                                    @if ($user && $user->inRole('member'))
                                        <li class="nav-item">
                                            <button type="button" class="btn btn-sm btn-outline-secondary">Add To Cart</button>
                                        </li>
                                    @endif
                                </div>
                                <small class="text-muted">Rp.1000000</small>
                            </div>
                            </div>
                          </div>
                        </div>
                        <div class="col">
                            <div class="card shadow-sm">
                              <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"></svg>
                              <div class="card-body">
                                <p class="card-text">Game Name.</p>
                                <p class="card-text">Genre.</p>
                                <div class="d-flex justify-content-between align-items-center">
                                  <div class="btn-group">
                                    <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                                      @if ($user && $user->inRole('member'))
                                          <li class="nav-item">
                                              <button type="button" class="btn btn-sm btn-outline-secondary">Add To Cart</button>
                                          </li>
                                      @endif
                                  </div>
                                  <small class="text-muted">Rp.1000000</small>
                              </div>
                              </div>
                            </div>
                          </div>
                          <div class="col">
                            <div class="card shadow-sm">
                              <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"></svg>
                              <div class="card-body">
                                <p class="card-text">Game Name.</p>
                                <p class="card-text">Genre.</p>
                                <div class="d-flex justify-content-between align-items-center">
                                  <div class="btn-group">
                                    <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                                      @if ($user && $user->inRole('member'))
                                          <li class="nav-item">
                                              <button type="button" class="btn btn-sm btn-outline-secondary">Add To Cart</button>
                                          </li>
                                      @endif
                                  </div>
                                  <small class="text-muted">Rp.1000000</small>
                              </div>
                              </div>
                            </div>
                          </div>
                          <div class="col">
                            <div class="card shadow-sm">
                              <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"></svg>
                              <div class="card-body">
                                <p class="card-text">Game Name.</p>
                                <p class="card-text">Genre.</p>
                                <div class="d-flex justify-content-between align-items-center">
                                  <div class="btn-group">
                                    <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                                      @if ($user && $user->inRole('member'))
                                          <li class="nav-item">
                                              <button type="button" class="btn btn-sm btn-outline-secondary">Add To Cart</button>
                                          </li>
                                      @endif
                                  </div>
                                  <small class="text-muted">Rp.1000000</small>
                              </div>
                              </div>
                            </div>
                          </div>
                          <div class="col">
                            <div class="card shadow-sm">
                              <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"></svg>
                              <div class="card-body">
                                <p class="card-text">Game Name.</p>
                                <p class="card-text">Genre.</p>
                                <div class="d-flex justify-content-between align-items-center">
                                  <div class="btn-group">
                                    <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                                      @if ($user && $user->inRole('member'))
                                          <li class="nav-item">
                                              <button type="button" class="btn btn-sm btn-outline-secondary">Add To Cart</button>
                                          </li>
                                      @endif
                                  </div>
                                  <small class="text-muted">Rp.1000000</small>
                              </div>
                              </div>
                            </div>
                          </div>
                          <div class="col">
                            <div class="card shadow-sm">
                              <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"></svg>
                              <div class="card-body">
                                <p class="card-text">Game Name.</p>
                                <p class="card-text">Genre.</p>
                                <div class="d-flex justify-content-between align-items-center">
                                  <div class="btn-group">
                                    <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                                      @if ($user && $user->inRole('member'))
                                          <li class="nav-item">
                                              <button type="button" class="btn btn-sm btn-outline-secondary">Add To Cart</button>
                                          </li>
                                      @endif
                                  </div>
                                  <small class="text-muted">Rp.1000000</small>
                              </div>
                              </div>
                            </div>
                          </div>
                          <div class="col">
                            <div class="card shadow-sm">
                              <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"></svg>
                              <div class="card-body">
                                <p class="card-text">Game Name.</p>
                                <p class="card-text">Genre.</p>
                                <div class="d-flex justify-content-between align-items-center">
                                  <div class="btn-group">
                                    <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                                      @if ($user && $user->inRole('member'))
                                          <li class="nav-item">
                                              <button type="button" class="btn btn-sm btn-outline-secondary">Add To Cart</button>
                                          </li>
                                      @endif
                                  </div>
                                  <small class="text-muted">Rp.1000000</small>
                              </div>
                              </div>
                            </div>
                          </div>
            </div>
        </div>
    </div>
@endsection

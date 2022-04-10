@extends('layouts.admin-layouts')
@section('title', 'Format Layout')

@push('css')
    {{-- CSS Code Here --}}
@endpush

@section('main-header', 'Format Layout')

@section('main-content')
<div class="row">
    <div class="col-4">
        <ul class="nav nav-tabs nav-tabs-vertical" role="tablist">
        <li class="nav-item">
            <a class="nav-link" id="home-tab-vertical" data-bs-toggle="tab" href="#home-2" role="tab" aria-controls="home-2" aria-selected="false">
            Home
            <i class="ti-home text-info ms-2"></i>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="profile-tab-vertical" data-bs-toggle="tab" href="#profile-2" role="tab" aria-controls="profile-2" aria-selected="false">
            Profile
            <i class="ti-user text-danger ms-2"></i>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link active" id="contact-tab-vertical" data-bs-toggle="tab" href="#contact-2" role="tab" aria-controls="contact-2" aria-selected="true">
            Reach
            <i class="ti-email text-success ms-2"></i>
            </a>
        </li>
        </ul>
    </div>
    <div class="col-8">
        <div class="tab-content tab-content-vertical">
            <div class="tab-pane fade" id="home-2" role="tabpanel" aria-labelledby="home-tab-vertical">
            <div class="text-center">
                <img class="me-3 w-25 mb-4" src="../../../../images/samples/300x300/12.jpg" alt="sample image">                            
            </div>
            <p>
                Inhabiting discretion the her dispatched decisively boisterous joy. So form were wish open 
                is able of mile of. Waiting express if prevent it we an musical. Especially reasonable travelling 
            </p>
        </div>
        <div class="tab-pane fade" id="profile-2" role="tabpanel" aria-labelledby="profile-tab-vertical">
            <div class="text-center">
                <img class="mb-3 w-25 rounded" src="../../../../images/faces/face1.jpg" alt="sample image">
                <h5 class="mt-0">Adam John</h5>
                <p class="mb-0">UX specialist</p>
                <p class="mb-0">Florida</p>
            </div>
            </div>
            <div class="tab-pane fade active show" id="contact-2" role="tabpanel" aria-labelledby="contact-tab-vertical">
                <h4>Contact us </h4>
                <p>Feel free to contact us if you have any questions!</p>
                <p><i class="ti-headphone-alt text-info"></i></p>
                <p><i class="ti-email text-success"></i> contactus@example.com</p>
            </div>
        </div>
    </div>
</div>

@endsection

@push('js')
    {{-- JS Code Here --}}
@endpush

<div class="col-md-12 col-xl-6 grid-margin stretch-card d-none d-md-flex">
    <div class="card">
      <div class="card-body">
        
      </div>
    </div>
  </div>
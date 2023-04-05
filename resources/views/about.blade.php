@extends('layouts.websiteApp')
@section('content')

<!-- Navbar warning -->
<nav class="navbar navbar-horizontal navbar-expand-lg navbar-info-light bg-info-light ">
    <div class="container">
    <a class="navbar-brand" href="/"><object data="{{asset('assets/img/brand/logo.svg')}}" width="70" height="70" > </object></a>
         <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-warning" aria-controls="navbar-warning" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbar-warning">
            <ul class="navbar-nav align-items-lg-center ml-lg-auto">
                <li class="nav-item">
                    <a class="nav-link nav-link-icon" href="/">
                        Esawad
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>




<section class="slice slice-xl bg-info-light bg-cover bg-size--cover" style="height: 80vh;">
  <!-- <span class="mask bg-primary opacity-7"></span> -->
  <div class="container py-4">
    <div class="row justify-content-center align-items-center">
      <div class="col-lg-10 text-center">
        <h3 class="display-2 font-weight-700 text-white text-uppercase"
         style="font-family: 'Oswald', sans-serif;">Better Education  Better Life</h3>
         <h5 class = "text-white h3 text-uppercase font-weight-700">cross age platform for education</h5>
      </div>
    </div>
  </div>
</section>
<section class="slice slice-xl overflow-hidden bg-gradient-dark delimiter-top delimiter-bottom">
  <div class="container position-relative zindex-100">
    <div class="text-center">
      <h6 class="text-muted">- Our mission -</h6>
      <div class="fluid-paragraph mt-4">
        <p class="lead text-white lh-180">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Iste assumenda distinctio beatae, cumque at sequi eius autem labore debitis et nihil illum laudantium maxime itaque iusto optio delectus aut repellat!</p>
      </div>
    </div>
  </div>
</section>
<section class="slice slice-lg">
  <div class="container">
    <div class="row row-grid justify-content-around align-items-center">
      <div class="col-lg-5">

        <div class="row">
          <h3 class="d-inline-block border-bottom border-info border-md">who we are</h3>
          <p class="lead mt-2 mb-5">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Architecto doloribus cupiditate, eos corrupti adipisci, itaque distinctio quibusdam fugit, aliquid quam quia? Voluptatibus dolor cumque praesentium omnis corrupti assumenda aliquid voluptatem.</p>
        </div>

        <div class="row">
          <h3 class="d-inline-block border-bottom border-info border-md">what we do</h3>
          <p class="lead mt-2 mb-5">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Architecto corporis exercitationem eligendi, consectetur assumenda doloremque repellat eos veniam placeat tempora, rerum dicta alias obcaecati maiores, hic eaque. Numquam, animi modi.</p>
        </div>
      </div>
      <div class="col-lg-6">
        <img alt="Image placeholder" src="{{asset('assets/img/website/mission-section.svg')}}" class="img-fluid img-center">
      </div>
    </div>
  </div>
</section>
<section class="slice slice-lg">
  <div class="container">
    <div class="mb-5 text-center">
      <h3 class="h1">Our Values</h3>
    </div>
    <div class="row">
      <div class="col-lg-6">
        <div class="card hover-shadow-lg hover-scale-110">
          <div class="card-body py-4">
            <div class="d-flex align-items-start">
              <div class="icon text-primary rounded-circle">
                <i class="fas fa-terminal"></i>
              </div>
              <div class="icon-text pl-4">
                <h5 class="ma-0 ">Customer Happiness</h5>
                <p class="mb-0">make a positive difference in the lives of our students. make a positive difference in the lives of our students.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-6">
        <div class="card hover-shadow-lg hover-scale-110">
          <div class="card-body py-4">
            <div class="d-flex align-items-start">
              <div class="icon text-primary rounded-circle">
                <i class="fas fa-expand"></i>
              </div>
              <div class="icon-text pl-4">
                <h5 class="ma-0 ">Innovation</h5>
                <p class="mb-0"> Reform the old education industry to the latest one and creating easy way for learning</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-6">
        <div class="card hover-shadow-lg hover-scale-110">
          <div class="card-body py-4">
            <div class="d-flex align-items-start">
              <div class="icon text-primary rounded-circle">
                <i class="fas fa-star"></i>
              </div>
              <div class="icon-text pl-4">
                <h5 class="ma-0 ">Efficiency</h5>
                <p class="mb-0">find a quick and smart solution to meet our goals. 
                  Bootstrap 4 that includes the most important components and features.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-6">
        <div class="card hover-shadow-lg hover-scale-110">
          <div class="card-body py-4">
            <div class="d-flex align-items-start">
              <div class="icon text-primary rounded-circle">
                <i class="fas fa-smile-wink"></i>
              </div>
              <div class="icon-text pl-4">
                <h5 class="ma-0 ">Empathy</h5>
                <p class="mb-0">Keep students first by putting oursleves in their shoes
                  Bootstrap 4 that includes the most important components and features.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<footer class="footer p-0 footer-dark bg-gradient-dark" id="footer-main">
  <div class="container">
    <div class="py-4">
      <div class="row align-items-md-center">
        <div class="col-md-4 mb-4 mb-md-0">
          <div class="d-flex align-items-center">
            <p class="text-sm mb-0">© Esawad 2021  All rights reserved.</p>
          </div>
        </div>
        <div class="col-sm-6 col-md-4 mb-4 mb-sm-0">
        </div>
        <div class="col-sm-6 col-md-4">
          <ul class="nav justify-content-center justify-content-md-end mt-3 mt-md-0">
            <li class="nav-item">
              <a class="nav-link" href="" target="_blank">
                <i class="fab fa-instagram"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="" target="_blank">
                <i class="fab fa-twitter"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="" target="_blank">
                <i class="fab fa-facebook"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="" target="_blank">
                <i class="fab fa-youtube"></i>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</footer>
@endsection
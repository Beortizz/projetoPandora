
<div>
    {{-- Close your eyes. Count to one. That is how long forever feels. --}}
  
  <div class="content" x-data="{ open: false }" >
    <section class="vh-100 formEnvio">
        <div class="container-fluid h-custom">
          <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-md-8 col-lg-8 col-xl-8 offset-xl-1">
              <form class="marginLeft"  x-show="!open">
                <div class="d-flex flex-row align-items-center justify-content-center justify-content-lg-center">
                  <img src="https://res.cloudinary.com/djy9oaywl/image/upload/v1665735301/img/tituloPandora-removebg-preview_zknzgp.png" width="400px" height="300px">
                </div>
                  <p class="text-center fw-bold mx-3 mb-0">Inscreva-se no nosso sorteio</p>
                <div class="divider d-flex align-items-center my-4 justify-content-center mb-10">
                  <img src="https://res.cloudinary.com/djy9oaywl/image/upload/v1665733665/img/capaComDisco_dydewj.png"
                  width="500px" height="325px"alt="Sample image" class="capaComDisco">
                </div>
                <div class="form-outline mb-4">
                    <label class="form-label" for="form3Example3">Email</label> 
                    <input type="email" id="form3Example3" class="form-control form-control-lg"
                    placeholder="Digite um email válido" wire:model="email" >  
                </div>
                <div class="form-outline mb-3">
                <label class="form-label" for="form3Example4">Nome</label>
                  <input type="text" id="form3Example4" wire:model="nome" class="form-control form-control-lg"
                    placeholder="Digite seu nome" required >  
                </div>  
                <div class="bottomLogo">
                  <img src="https://res.cloudinary.com/djy9oaywl/image/upload/v1665735492/img/quimerapandora-PhotoRoom_1_lyivrd.png"
                  width="100px" height="100px"alt="Sample image">
                </div>
                <div class="text-center text-lg-start mt-4 pt-2">
                  <button @click="open = true" type="submit" wire:click.prevent="submit()" class="btn btn-primary btn-lg"
                    style="padding-left: 2.5rem; padding-right: 2.5rem;">Enviar</button>
                </div>
              </form>
            </div>
          </div>
        </div>
    </section>

      <section class="container" role="dialog" tabindex="-1" x-on:click.away="open = false" x-show="open"
      x-transition.scale.80>
          <div class="row">
            <article class="card fl-left">
              <section class="date">
                <time datetime="23th feb">
                  <span>23</span><span>fevereiro</span>
                </time>
              </section>
              <section class="card-cont">
                <small>{{ rand(1000, 20000)}}</small>
                <h4>{{ $nome }}</h4>
                <div class="even-date">
                <i class="fa fa-calendar"></i>
                <time>
                  <span>Sexta-feira 23 fevereiro 2023</span>
                  <span>21:00 - 01:00</span>
                </time>
                </div>
                <div class="even-info">
                  <i class="fa fa-map-marker"></i>
                  <p>
                    Casa de shows de Taboao da serra
                  </p>
                </div>
                <a href="#" @click="open = false">Fechar</a>
              </section>
            </article>
          </div>
        </div>
      </section>
  </div>     
</div> 


<div>
    {{-- Close your eyes. Count to one. That is how long forever feels. --}}
    <style>
      section {
        background-image: url('img/bgPandora.png');

      }
    </style>

    <section class="vh-100 formEnvio">
        <div class="container-fluid h-custom">
          <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-md-9 col-lg-6 col-xl-5">
              <img src="{{asset('storage/img/capaPandora.png')}}" class="img-fluid">
            </div>
            <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
              <form class="marginLeft">
                <div class="d-flex flex-row align-items-center justify-content-center justify-content-lg-center">
                  <img src="{{asset('storage/img/tituloPandora.png')}}" width="400px" height="300px">
                  {{-- <button type="button" class="btn btn-primary btn-floating mx-1">
                    <i class="fab fa-facebook-f"></i>
                  </button>
      
                  <button type="button" class="btn btn-primary btn-floating mx-1">
                    <i class="fab fa-twitter"></i>
                  </button>
      
                  <button type="button" class="btn btn-primary btn-floating mx-1">
                    <i class="fab fa-instagram"></i>
                  </button> --}}
                </div>
                {{-- <div class="d-flex flex-row align-items-center justify-content-center justify-content-lg-center"> --}}
                  <p class="text-center fw-bold mx-3 mb-0">Inscreva-se no nosso sorteio</p>
                {{-- </div> --}}
                <div class="divider d-flex align-items-center my-4 justify-content-center mb-10">
                  <img src="{{asset('storage/img/capaComDisco.png')}}"
                  width="500px" height="400px"alt="Sample image">
                </div>
                <!-- Email input -->
                <div class="form-outline mb-4">
                    <label class="form-label" for="form3Example3">Email</label> 
                    <input type="email" id="form3Example3" class="form-control form-control-lg"
                    placeholder="Digite um email válido" wire:model="email" >  
                
                </div>
      
                <!-- Password input -->
                <div class="form-outline mb-3">
                <label class="form-label" for="form3Example4">Nome</label>
                  <input type="text" id="form3Example4" wire:model="nome" class="form-control form-control-lg"
                    placeholder="Digite seu nome" >  
                </div>  
                <div class="text-center text-lg-start mt-4 pt-2">
                  <button type="submit" wire:click.prevent="submit()" class="btn btn-primary btn-lg"
                    style="padding-left: 2.5rem; padding-right: 2.5rem;" >Enviar</button>
                </div>
      
              </form>
            </div>
          </div>
        </div>

      </section>
</div>

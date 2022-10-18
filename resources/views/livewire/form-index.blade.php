
<div>
    {{-- Close your eyes. Count to one. That is how long forever feels. --}}
  <style>
     .formEnvio {

   
    color: blanchedalmond;
}
.capaComDisco {
    margin-left: 25px;
}
body {
    background-color:black;
    /* background-image: url('../storage/img/bgPandora.png');
    background-repeat: repeat;
    background-size: 200px 200px;*/
 } 

.bottomLogo {
    position: relative;
    bottom: 20px;
}

@import url('https://fonts.googleapis.com/css?family=Oswald');
* {
    margin: 0;
    padding: 0;
    border: 0;
    box-sizing: border-box
}

body {
    font-family: arial
}

.fl-left {
    float: left
}

.fl-right {
    float: right
}

h1 {
    text-transform: uppercase;
    font-weight: 900;
    border-left: 10px solid #fec500;
    padding-left: 10px;
    margin-bottom: 30px
}

.row {
    overflow: hidden
}

.card {
    display: table-row;
    width: 49%;
    background-color: #fff;
    color: #989898;
    margin-bottom: 10px;
    font-family: 'Oswald', sans-serif;
    text-transform: uppercase;
    border-radius: 4px;
    position: relative
}

.card+.card {
    margin-left: 2%
}

.date {
    display: table-cell;
    width: 25%;
    position: relative;
    text-align: center;
    border-right: 2px dashed #dadde6
}

.date:before,
.date:after {
    content: "";
    display: block;
    width: 30px;
    height: 30px;
    background-color: #DADDE6;
    position: absolute;
    top: -15px;
    right: -15px;
    z-index: 1;
    border-radius: 50%
}

.date:after {
    top: auto;
    bottom: -15px
}

.date time {
    display: block;
    position: absolute;
    top: 50%;
    left: 50%;
    -webkit-transform: translate(-50%, -50%);
    -ms-transform: translate(-50%, -50%);
    transform: translate(-50%, -50%)
}

.date time span {
    display: block
}

.date time span:first-child {
    color: #2b2b2b;
    font-weight: 600;
    font-size: 250%
}

.date time span:last-child {
    text-transform: uppercase;
    font-weight: 600;
    margin-top: -10px
}

.card-cont {
    display: table-cell;
    width: 75%;
    font-size: 85%;
    padding: 10px 10px 30px 50px
}

.card-cont h3 {
    color: #3C3C3C;
    font-size: 130%
}

.row:last-child .card:last-of-type .card-cont h3 {
    text-decoration: line-through
}

.card-cont>div {
    display: table-row
}

.card-cont .even-date i,
.card-cont .even-info i,
.card-cont .even-date time,
.card-cont .even-info p {
    display: table-cell
}

.card-cont .even-date i,
.card-cont .even-info i {
    padding: 5% 5% 0 0
}

.card-cont .even-info p {
    padding: 30px 50px 0 0
}

.card-cont .even-date time span {
    display: block
}

.card-cont a {
    display: block;
    text-decoration: none;
    width: 80px;
    height: 30px;
    background-color: #D8DDE0;
    color: #fff;
    text-align: center;
    line-height: 30px;
    border-radius: 2px;
    position: absolute;
    right: 10px;
    bottom: 10px
}

.row:last-child .card:first-child .card-cont a {
    background-color: #037FDD
}

.row:last-child .card:last-child .card-cont a {
    background-color: #F8504C
}

.container {
    position: relative;
    bottom: 300px;
} 
[x-cloak] {
    display: none !important;
}

@media screen and (max-width: 860px) {
    .card {
        display: block;
        float: none;
        width: 100%;
        margin-bottom: 10px
    }
    .card+.card {
        margin-left: 0
    }
    .card-cont .even-date,
    .card-cont .even-info {
        font-size: 75%
    }
}


  </style>
  <div class="content" x-data="{ open: false }" >
    <section class="vh-100 formEnvio">
        <div class="container-fluid h-custom">
          <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-md-8 col-lg-8 col-xl-8 offset-xl-1">
              <form class="marginLeft"  x-show="!open">
                <div class="d-flex flex-row align-items-center justify-content-center justify-content-lg-center">
                  <img src="https://res.cloudinary.com/djy9oaywl/image/upload/v1666133568/img/titutuloPandoraNovo_wj6myz.png"  class="img-fluid" width="320px" height="300px">
                </div>
                  {{-- <p class="text-center fw-bold mx-3 mb-0">Inscreva-se no nosso sorteio</p> --}}
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
                <small>Seu código do sorteio: {{ rand(1000, 20000)}}</small>
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

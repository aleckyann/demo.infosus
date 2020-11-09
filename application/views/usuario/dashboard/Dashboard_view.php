<style type="text/css">
@mixin margin-auto {
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    margin: auto;
}

.main-wrapper {
  width: 90%;
  max-width: 900px;
  margin: 3em auto;
  text-align: center;
}

.badge {
  position: relative;
  margin: 2em 6.40em;
  width: 9em;
  height: 13em;
  border-radius: 25px;
  display: inline-block;
  top: 0;
  transition: all 0.4s ease;
}
.badge:before, .badge:after {
  position: absolute;
  width: inherit;
  height: inherit;
  border-radius: inherit;
  background: inherit;
  content: "";
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  margin: auto;
}
.badge:before {
  transform: rotate(60deg);
}
.badge:after {
  transform: rotate(-60deg);
}
.badge:hover {
  top: -5px;
}
.badge .circle {
  width: 80px;
  height: 80px;
  position: absolute;
  background: #fff;
  z-index: 10;
  border-radius: 50%;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  margin: auto;
}
.badge .circle i.fa {
  font-size: 4em;
  margin-top: 15px;


}
.badge .font {
  display: inline-block;
  margin-top: 1em;
}
.badge .ribbon {
  position: absolute;
  border-radius: 4px;
  padding: 5px 5px 4px;
  width: 180px;
  height: 25px;
  z-index: 11;
  color: black;
  bottom: 12px;
  left: 50%;
  margin-left: -87px;
  font-size: 12px;
  box-shadow: 0 1px 2px rgba(0, 0, 0, 0.27);
  text-shadow: 0 2px 2px rgba(0, 0, 0, 0.1);
  text-transform: uppercase;
  background: linear-gradient(to bottom right, white 0%, white 100%);
  cursor: default;
}

.yellow {
  background: linear-gradient(to bottom right, #ffeb3b 0%, #fbc02d 100%);
  color: #ffb300;
}

.orange {
  background: linear-gradient(to bottom right, #ffc107 0%, #f57c00 100%);
  color: #f68401;
}

.pink {
  background: linear-gradient(to bottom right, #F48FB1 0%, #d81b60 100%);
  color: #dc306f;
}

.red {
  background: linear-gradient(to bottom right, #f4511e 0%, #b71c1c 100%);
  color: #c62828;
}

.purple {
  background: linear-gradient(to bottom right, #ab47bc 0%, #4527a0 100%);
  color: #7127a8;
}

.teal {
  background: linear-gradient(to bottom right, #4DB6AC 0%, #00796B 100%);
  color: #34a297;
}

.blue {
  background: linear-gradient(to bottom right, #4FC3F7 0%, #2196F3 100%);
  color: #259af3;
}

.blue-dark {
  background: linear-gradient(to bottom right, #1976D2 0%, #283593 100%);
  color: #1c68c5;
}

.green {
  background: linear-gradient(to bottom right, #cddc39 0%, #8bc34a 100%);
  color: #7cb342;
}

.green-dark {
  background: linear-gradient(to bottom right, #4CAF50 0%, #1B5E20 100%);
  color: #00944a;
}

.silver {
  background: linear-gradient(to bottom right, #E0E0E0 0%, #BDBDBD 100%);
  color: #9e9e9e;
}

.gold {
  background: linear-gradient(to bottom right, #e6ce6a 0%, #b7892b 100%);
  color: #b7892b;
}



</style>



<div class="breadcrumbs">
    <div class="col-sm-4">
        <div class="page-header float-left">
            <div class="page-title">
                <h1>PRINCIPAIS AÇÕES</h1>
            </div>
        </div>
    </div>
    <div class="col-sm-8">
        <div class="page-header float-right">
            <div class="page-title">
                <ol class="breadcrumb text-right">
                    <li class="active"></li>
                </ol>
            </div>
        </div>
    </div>
</div>
<div class="main-wraper">
    <a href="regulacao">
      <div class="badge blue">
        <div class="circle"> <i class="fa fa-balance-scale"></i></div>
        <div class="ribbon">NÚCLEO DE REGULAÇÃO</div>
      </div>
    </a>
    <a href="atencao-primaria">
      <div class="badge blue">
        <div class="circle"> <i class="fa fa-heart"></i></div>
        <div class="ribbon">ATENÇÃO PRIMÁRIA</div>
      </div>
    </a>
    <a href="#">
      <div class="badge silver">
        <div class="circle"> <i class="fa fa-book"></i></div>
        <div class="ribbon">ALMOXARIFADO</div>
      </div>
    </a>
    <a href="#">
      <div class="badge silver">
        <div class="circle"> <i class="fa fa-area-chart"></i></div>
        <div class="ribbon">VIGILÂNCIA EM SAÚDE</div>
      </div>
    </a>
    <a href="#">
      <div class="badge silver">
        <div class="circle"> <i class="fa fa-heartbeat"></i></div>
        <div class="ribbon">GESTÃO DE MAC</div>
      </div>
    </a>
    <a href="#">
      <div class="badge silver">
        <div class="circle"> <i class="fa fa-flask"></i></div>
        <div class="ribbon">ASSISTÊNCIA FARMACÊUTICA</div>
      </div>
    </a>
    <a href="#">
      <div class="badge silver">
        <div class="circle"> <i class="fa fa-suitcase"></i></div>
        <div class="ribbon">NÚCLEO DE GESTÃO</div>
      </div>
    </a>
    <a href="#">
      <div class="badge silver">
        <div class="circle"> <i class="fa fa-cogs"></i></div>
        <div class="ribbon">ADMINISTRATIVO</div>
      </div>
    </a>
</div>
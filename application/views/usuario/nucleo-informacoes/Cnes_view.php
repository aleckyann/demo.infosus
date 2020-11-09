<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Seleção de lugares</title>
 

<style>


.exit {
  position: relative;
  height: 50px;
}
.exit:before, .exit:after {
  content: "EXIT";
  font-size: 14px;
  line-height: 18px;
  padding: 0px 2px;
  font-family: "Arial Narrow", Arial, sans-serif;
  display: block;
  position: absolute;
  background: green;
  color: white;
  top: 50%;
  transform: translate(0, -50%);
}
.exit:before {
  left: 0;
}
.exit:after {
  right: 0;
}

.fuselage {
  border-right: 5px solid #d8d8d8;
  border-left: 5px solid #d8d8d8;
}

ol {
  list-style: none;
  padding: 0;
  margin: 0;
}

.seats {
  display: flex;
  flex-direction: row;
  flex-wrap: nowrap;
  justify-content: flex-start;
}

.seat {
  display: flex;
  flex: 0 0 100px;
  padding: 10px;
  position: relative;
}
.seat:nth-child(0) {
  margin-right: 25%;
}
.seat input[type=checkbox] {
  position: absolute;
  opacity: 0;
}
.seat input[type=checkbox]:checked + label {
  background: green;
  -webkit-animation-name: rubberBand;
  animation-name: rubberBand;
  animation-duration: 300ms;
  animation-fill-mode: both;
}
.seat input[type=checkbox]:disabled + label {
  background: grey;
  color: grey;
  overflow: hidden;
}
.seat input[type=checkbox]:disabled + label:after {
  content: "X";
  text-indent: 0;
  position: absolute;
  top: 1px;
  left: 50%;
  transform: translate(-50%, 0%);

}
.seat input[type=checkbox]:disabled + label:hover {
  box-shadow: none;
  cursor: not-allowed;
}
.seat label {
  display: block;
  position: relative;
  width: 100%;
  text-align: center;
  font-size: 14px;
  font-weight: bold;
  line-height: 1.5rem;
  padding: 4px 0;
  background: white;
  border-radius: 5px;
  animation-duration: 100ms;
  animation-fill-mode: both;
}
.seat label:before {
  content: "";
  position: absolute;
  width: 90%;
  height: 80%;
  top: 1px;
  left: 50%;
  transform: translate(-50%, 0%);
  background: rgba(255, 255, 255, 0.4);
  border-radius: 3px;
}
.seat label:hover {
  cursor: pointer;
  box-shadow: 0 0 0px 2px #5C6AFF;
}

</style>
</head>
<body >
    <div class="row container">
        
    <img style="padding-left: 50px; padding-top: 105px" src="https://queropassagem.com.br/images/onibus_desktop_frente.png" width="200">
    <form></form> 
    <div class="col-md-8">
      <br><br><br><br><br>
        <li class="row row--1">
          <ol class="seats" type="A">
            <li class="seat">
              <input type="checkbox" id="1A" />
              <label for="1A">1A</label>
            </li>
            <li class="seat">
              <input type="checkbox" id="1B" />
              <label for="1B">1B</label>
            </li>
            <li class="seat">
              <input type="checkbox" id="1C"/>
              <label for="1C">1C</label>
            </li>
            <li class="seat">
              <input type="checkbox" id="1D"/>
              <label for="1D">1D</label>
            </li>
            <li class="seat">
              <input type="checkbox" id="1E"/>
              <label for="1E">1E</label>
            </li>
            <li class="seat">
              <input type="checkbox" id="1F"/>
              <label for="1F">1F</label>
            </li>
          </ol>
        </li>
        <li class="row row--2">
          <ol class="seats" type="A">
            <li class="seat">
              <input type="checkbox" id="2A" />
              <label for="2A">2A</label>
            </li>
            <li class="seat">
              <input type="checkbox" id="2B"/>
              <label for="2B">2B</label>
            </li>
            <li class="seat">
              <input type="checkbox" id="2C"/>
              <label for="2C">2C</label>
            </li>
            <li class="seat">
              <input type="checkbox" id="2D"/>
              <label for="2D">2D</label>
            </li>
            <li class="seat">
              <input type="checkbox" id="2E"/>
              <label for="2E">2E</label>
            </li>
            <li class="seat">
              <input type="checkbox" id="2F"/>
              <label for="2F">2F</label>
            </li>
          </ol>
        </li>
        <br><br>
        <li class="row row--3">
          <ol class="seats" type="A">
            <li class="seat">
              <input type="checkbox" id="3A"/>
              <label for="3A">3A</label>
            </li>
            <li class="seat">
              <input type="checkbox" id="3B"/>
              <label for="3B">3B</label>
            </li>
            <li class="seat">
              <input type="checkbox" id="3C"/>
              <label for="3C">3C</label>
            </li>
            <li class="seat">
              <input type="checkbox" id="3D"/>
              <label for="3D">3D</label>
            </li>
            <li class="seat">
              <input type="checkbox" id="3E"/>
              <label for="3E">3E</label>
            </li>
            <li class="seat">
              <input type="checkbox" id="3F"/>
              <label for="3F">3F</label>
            </li>
          </ol>
        </li>
        <li class="row row--4">
          <ol class="seats" type="A">
            <li class="seat">
              <input type="checkbox" id="4A"/>
              <label for="4A">4A</label>
            </li>
            <li class="seat">
              <input type="checkbox" id="4B"/>
              <label for="4B">4B</label>
            </li>
            <li class="seat">
              <input type="checkbox" id="4C"/>
              <label for="4C">4C</label>
            </li>
            <li class="seat">
              <input type="checkbox" id="4D"/>
              <label for="4D">4D</label>
            </li>
            <li class="seat">
              <input type="checkbox" id="4E"/>
              <label for="4E">4E</label>
            </li>
            <li class="seat">
              <input type="checkbox" id="4F"/>
              <label for="4F">4F</label>
            </li>
          </ol>
        </li>
        
    </div>
    
            <img style="padding-left: 50px; padding-top: 105px" src="https://queropassagem.com.br/images/onibus_desktop_traseira.png" width="105">
    
    </div>
  </body>

  </html>
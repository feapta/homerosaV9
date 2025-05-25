
    <button type="button" class="boton_verde">
        <img class="img" src="/build/img/meteorologia.png" alt="">
        <h4>Meteorología</h4>
    </button>

    <div class="desple">
        <div class="contenedor_meteo">
            <div class="conte_uno">
                <h5 id="cityName"></h5>
                <h5 id="nubes_des"></h5>
                
                <div class="parra">
                    <p>Temp:</p>
                    <p id="temp_m"></p>
                    <p>&deg;</p>
                </div>
            </div>
            
            <div class="conte_linea">
                <hr>
            </div>

            <div class="conte_dos">
                <div class="izquierda">
                    <div class="unoI">
                        <img src="/build/img/temp-max.png" alt="">
                        <p id="te_max"></p><p>&deg;</p>
                    </div>
                    <div class="dosI">
                        <img src="/build/img/temp-min.png" alt="">
                        <p id="te_min"></p><p>&deg;</p>
                    </div>
                    <div class="tresI">
                        <img src="/build/img/hume.png" alt="">
                        <p id="humi_m"></p><p>%</p>
                    </div>
                </div>

                <div class="centro">
                    <img id="wicon" src="" alt="">
                </div>

                <div class="derecha">
                    <div class="unoD">
                        <img src="/build/img/altitud.png" alt="">
                        <div class="contenido">
                            <p id="pres"></p>
                            <p>mlb</p>
                        </div>
                    </div>

                    <div class="dosD">
                        <img src="/build/img/presion.png" alt="">
                        <div class="contenido">
                            <p id="alt"></p>
                            <p>mtr</p>
                        </div>    
                    </div>
                </div>
            </div>

            <div class="conte_linea">
                <hr>
            </div>

            <div class="conte_tres">
                <h5>Vientos</h5>
                <div class="viento">
                    <p>Velocidad:</p>
                    <p id=velo_win></p>
                    <p>m/s</p>
                </div>

                <div class="viento">
                    <p>Dirección:</p>
                    <p id=dire_win></p>
                    <p>º</p>
                </div>
                <div class="viento">
                    <p>Rafagas:</p>
                    <p id=gust_win></p>
                    <p>m/s</p>
                </div>
            </div>
            
            <div class="conte_linea">
                <hr>
            </div>

            <div class="conte_aire">
                <div class="calidad">
                    <div class="izd">
                        <h5>Indice calidad del aire:</h5>
                        <p class="ica"></p>
                    </div>
                    
                    <button type="button" class="btn-leyenda">
                        <p>Leyenda</p>   
                    </button>
                </div>

                <div class="conte_leyenda ocultar">
                    <div class="conte_indi">
                        <p>Indice: <br>
                            1 = Bueno, <br> 
                            2 = Normal, <br>
                            3 = Moderado, <br>
                            4 = Bajo, <br>
                            5 = Muy bajo. 
                        </p>
                    </div>

                    <div class="conte_nobre">
                        <p>Medidas en μg/m3</p>
                        <p>CO: Monoxido de carbono</p>
                        <p>NO: Monoxido de nitrogeno</p>
                        <p>NO2: Dioxido de nitrogeno</p>
                        <p>O3: Ozono</p>
                        <p>SO2: Dioxido de azufre</p>
                        <p>PM 2.5: Particulas finas</p>
                        <p>PM 10: Particulas gruesas</p>
                        <p>NH3: Amoniaco</p>
                    </div>
                </div>
            
                    <div class="contenido_aire">
                        
                        <div class="c_uno">
                            <h5>co:</h5>
                            <p class="co"></p>
                        </div>

                        <div class="c_dos">
                            <h5>nh3:</h5>
                            <p class="nh3"></p>
                        </div>

                        <div class="c_tres">
                            <h5>no:</h5>
                            <p class="no"></p>
                        </div>

                        <div class="c_cuatro">
                            <h5>pm 2.5:</h5>
                            <p class="pm2_5"></p>
                        </div>

                        <div class="c_uno">
                            <h5>o3:</h5>
                            <p class="o3"></p>
                        </div>

                        <div class="c_dos">
                            <h5>so2:</h5>
                            <p class="so2"></p>
                        </div>

                        <div class="c_tres">
                            <h5>no2:</h5>
                            <p class="no2"></p>
                        </div>

                        <div class="c_cuatro">
                            <h5>pm 10:</h5>
                            <p class="pm10"></p>
                        </div>

                </div>



            </div>

            <div class="conte_cuatro">

    <!-- Radiacion IUV -->
        <div class="container-lg shadow p-3 mt-3 mb-3 border border-secundary bg-body rounded">
          <div class="card">

                <div class="card-header text-center">
                  <h4 class="titulo_iuv">Indice UV</h4>
                </div>

                <div class="cuerpo-iv">

                      <div class="col-1 cuadrado0">
                        <div class="row">
                          <div>0</div>
                        </div>
                        <div class="row">
                          <div>Bajo</div>
                        </div>
                      </div>

                      <div class="col-1 cuadrado1">
                        <div class="row">
                          <div>1</div>
                        </div>
                        <div class="row">
                          <div>Bajo</div>
                        </div>
                      </div>

                      <div class="col-1 cuadrado2">
                        <div class="row">
                          <div>2</div>
                        </div>
                        <div class="row">
                          <div>Bajo</div>
                        </div>
                      </div>

                      <div class="col-1 cuadrado3">
                        <div class="row">
                          <div>3</div>
                        </div>
                        <div class="row">
                          <div>Moderado</div>
                        </div>
                      </div>

                      <div class="col-1 cuadrado4">
                        <div class="row">
                          <div>4</div>
                        </div>
                        <div class="row">
                          <div>Moderado</div>
                        </div>
                      </div>

                      <div class="col-1 cuadrado5">
                        <div class="row">
                          <div>5</div>
                        </div>
                        <div class="row">
                          <div>Moderado</div>
                        </div>
                      </div>

                      <div class="col-1 cuadrado6">
                        <div class="row">
                          <div>6</div>
                        </div>
                        <div class="row">
                          <div>Alto</div>
                        </div>
                      </div>

                      <div class="col-1 cuadrado7">
                        <div class="row">
                          <div>7</div>
                        </div>
                        <div class="row">
                          <div>Muy alto</div>
                        </div>
                      </div>

                      <div class="col-1 cuadrado8">
                        <div class="row">
                          <div>8</div>
                        </div>
                        <div class="row">
                          <div>Muy alto</div>
                        </div>
                      </div>

                      <div class="col-1 cuadrado9">
                        <div class="row">
                          <div>9</div>
                        </div>
                        <div class="row">
                          <div>Muy alto</div>
                        </div>
                      </div>

                      <div class="col-1 cuadrado10">
                        <div class="row">
                          <div>10</div>
                        </div>
                        <div class="row">
                          <div>Muy alto</div>
                        </div>
                      </div>

                      <div class="col-1 cuadrado11">
                        <div class="row">
                          <div>11</div>
                        </div>
                        <div class="row">
                          <div>Extermo</div>
                        </div>
                      </div>

                  </div> <!---->
            </div>
        </div>
            
            </div>

            <div class="conte_cinco">
                <div class="horaamanece">
                    <h5>Hora amanece:</h5>
                    <h5 id="hora_ama"></h5>
                </div>

                <div class="horaanochece">
                    <h5>Hora anochece:</h5>
                    <h5 id="hora_no" ></h5>
                </div>
            </div>
    </div>
</div>
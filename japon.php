<div class="cache-selection-japon">  <!-- Div à masquer / afficher -->

        <!-- Partie comparaison entre les deux compagnies -->

            <section class="compare">

                <!-- Partie France -->

                <div class="data-fr">
                    <h1>France</h1>
                <div class="liste-data-fr">
                    <ul>
                        <li>
                            <div class="carre-fr">
                                <img src="assets/logosncf.png" alt="">
                            </div>
                            <p>Nom de la compagnie</p>
                        </li>
                        <li>
                            <div class="carre-fr" data-aos="fade-right">
                                <img src="assets/voie.png" alt="">
                            </div>
                            <div class="detail-data-fr">
                                <p>XXkm</p>
                                <p>de voies</p>
                            </div>
                        </li>
                        <li>
                            <div class="carre-fr">
                                <img src="assets/gare.png" alt="">
                            </div>
                            <div class="detail-data-fr">
                                <p>XX</p>
                                <p>de gares</p>
                            </div>
                        </li>
                        <li>
                            <div class="carre-fr">
                                <img src="assets/personnes.png" alt="">
                            </div>
                            <div class="detail-data-fr">
                                <p>XX</p>
                                <p>passagers / an</p>
                            </div>
                        </li>
                        <li>
                            <div class="carre-fr">
                                <img src="assets/habitants.png" alt="">
                            </div>
                            <div class="detail-data-fr">
                                <p>XX</p>
                                <p>nombre d'habitants</p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- Partie autre pays -->

            <div class="data-compare-autre">
            
                <h1>Japon</h1>
                <div class="liste-data-autre">
                    <ul>
                        <li>
                            <div class="carre-autre">
                                <img src="assets/logojapon.png" alt="">
                            </div>
                            <p>Nom de la compagnie</p>
                        </li>
                        <li>
                            <div class="carre-autre">
                                <img src="assets/voieblanc.png" alt="">
                            </div>
                                <div class="detail-data-fr">
                                    <p>XXkm</p>
                                    <p>de voies</p>
                                </div>
                        </li>
                        <li>
                            <div class="carre-autre">
                                <img src="assets/gareblanc.png" alt="">
                            </div>
                            <div class="detail-data-fr">
                                <p>XX</p>
                                <p>de gares</p>
                            </div>
                        </li>
                        <li>
                            <div class="carre-autre">
                                <img src="assets/personnesblanc.png" alt="">
                            </div>
                            <div class="detail-data-fr">
                                <p>XX</p>
                                <p>passagers / an</p>
                            </div>
                        </li>
                        <li>
                            <div class="carre-autre">
                                <img src="assets/habitantsblanc.png" alt="">
                            </div>
                            <div class="detail-data-fr">
                                <p>XX</p>
                                <p>nombre d'habitants</p>
                            </div>
                        </li>
                    </ul>
                </div>
        </section>

        <!-- Partie graphiques -->

        <section class="donnees">
            <h1>TGV vs Shinkansen</h1>

            <!-- Partie comparaison vitesse -->

            <div class="affichage">
                <div class="link">
                    <ul>
                        <li>
                            <a class="vitesse">Vitesse</a>
                        </li>
                        <li class="not-active">
                            <a class="effectif not-active">Effectif</a>
                        </li>
                        <li  class="not-active">
                            <a class="panne not-active">Panne</a>
                        </li>
                        <li class="not-active">
                            <a class="affluence not-active">Affluence</a>
                        </li>
                    </ul>
                </div>

                <!-- Données comparaison vitesse  -->

                <div class="ligne1">
                    <img class="img-ligne3" src="assets/shin.png" alt="">
                </div>
                <div class="ligne2">
                    <img class="img-ligne4" src="assets/tgv.png" alt="">
                </div>

                <div class="data-train">
                    <div class="data-tgv">
                        <h2>TGV</h2>
                        <ul>
                            <li>
                                <span>XXkm/h</span>
                                <p>Vitesse moyenne</p>
                            </li>
                            <li>
                                <span>XXkm/h</span>
                                <p>Record Établis</p>
                            </li>
                        </ul>
                    </div>

                    <div class="data-autre">
                        <h2>Shinkansen</h2>
                        <ul>
                            <li>
                               <span>XXkm/h</span>
                                <p>Vitesse moyenne</p>
                            </li>
                            <li>
                                <span>XXkm/h</span>
                                <p>Record Établis</p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Partie comparaison effectif -->

            <div class="affichage2 cache">
                <div class="link">
                    <ul>
                        <li class="not-active">
                            <a class="vitesse not-active">Vitesse</a>
                        </li>
                        <li>
                            <a class="effectif">Effectif</a>
                        </li>
                        <li class="not-active">
                            <a class="panne not-active">Panne</a>
                        </li>
                        <li class="not-active">
                            <a class="affluence not-active">Affluence</a>
                        </li>
                    </ul>
                </div>

                <!-- Graphique comparaison effectif -->

                <div class="graph1">
                    <canvas id="graph1"></canvas>
                </div>
            </div>

                <!-- Partie comparaison panne -->

            <div class="affichage3 cache">
                <div class="link">
                    <ul>
                        <li  class="not-active">
                            <a class="vitesse not-active">Vitesse</a>
                        </li>
                        <li class="not-active">
                            <a class="effectif not-active">Effectif</a>
                        </li>
                        <li>
                            <a class="panne">Panne</a>
                        </li>
                        <li class="not-active">
                            <a class="affluence not-active">Affluence</a>
                        </li>
                    </ul>
                </div>

                <!-- Graphique comparaison panne -->

                <div class="container-graph">
                    <div class="graph2">
                        <canvas id="graph2"></canvas>
                    </div>
                    <div class="graph2">
                        <canvas id="graph3"></canvas>
                    </div>
                </div>
            </div>

            <!-- Partie comparaison affluence -->

            <div class="affichage4 cache">
                <div class="link">
                    <ul>
                        <li class="not-active">
                            <a class="vitesse not-active">Vitesse</a>
                        </li>
                        <li class="not-active">
                            <a class="effectif not-active">Effectif</a>
                        </li>
                        <li class="not-active">
                            <a class="panne not-active">Panne</a>
                        </li>
                        <li>
                            <a class="affluence">Affluence</a>
                        </li>
                    </ul>
                </div>

                <!-- Graphique comparaison affluence -->

                <div class="graph1">
                    <canvas id="graph4"></canvas>
                </div>             
            </div>

        </section>

        </div>

        <script>
    let tgv2 = document.querySelector('.img-ligne4')
    let autre2 = document.querySelector('.img-ligne3')
    let body2 = document.querySelector('body')
    
    window.addEventListener('scroll', () => {
        let scroll = window.scrollY / (body2.clientHeight - window.innerHeight)
        let scrollPercent = scroll * 100
        console.log(scrollPercent)
        tgv2.style.marginLeft = (scrollPercent - 90) + '%'
        autre2.style.marginLeft = (scrollPercent * 10 - 940) + '%'
    })
</script>
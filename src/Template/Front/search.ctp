
<div class="" style="margin-top: 0">
    <div class="container-fluid" >
        <div class="">
            <div class="">

            </div>

            <div class="container" style="" >


                <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-12">
                        <div style="border: 1px solid #cccccc; padding: 20px; border-radius: 7px; margin: 10px 0">
                            <form action="<?= $this->Url->build(['controller'=>'Front', 'action'=>'search']) ?>" method="post">
                                <div class="row">
                                    <input type="hidden" id="csrf" value="<?= $token ?>" name="_csrfToken"/>
                                    <div class="col-lg-12 col-md-12 col-sm-12">
                                        <label for="depart">Depart</label>
                                        <select name="depart" id="depart">
                                            <option value="0">Selectionner une ville</option>
                                            <?php foreach($villes as $ville): ?>
                                                <option value="<?= $ville->id ?>"><?= $ville->name ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12">
                                        <label for="arrivee">Arrivee</label>
                                        <select name="arrivee" id="arrivee">
                                            <option value="0">Selectionner une ville</option>
                                            <?php foreach($villes as $ville): ?>
                                                <option value="<?= $ville->id ?>"><?= $ville->name ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>

                                    <div class="col-lg-12 col-md-12 col-sm-12">
                                        <label for="jour">Date</label>
                                        <input type="date" id="jour" name="jour"/>
                                    </div>

                                    <div class="col-lg-12 col-md-12 col-sm-12" style="margin-top: 35px">
                                        <button class="btn btn-sm btn-danger" type="submit"><i class="glyphicon glyphicon-search"></i>&nbsp;Rechercher </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>

                    <div class="col-md-8 col-lg-8 col-sm-12">
                        <div class="" style="border: 1px solid #cccccc; padding: 20px; border-radius: 7px; margin: 10px 0">
                            <div class="">

                                <?php if(!empty($programmes)): ?>

                                    <ul class="list-group list-unstyled" style="margin-top: 30px; font-weight: 600; font-size: 14px">
                                        <li>
                                            <?php foreach($programmes as $pr): ?>
                                                <div class="row" style="border-bottom: 1px solid #cccccc; padding: 15px 0; ">
                                                    <div class="col-lg-4 col-md-4 col-12">
                                                        <div class="cellule">
                                                            <span style="font-weight: 900; text-shadow: 1px 1px 1px #000" class="value"><i style="font-size: x-large" class="fa fa-bus"></i>&nbsp; <?= $pr->compagny->name ?></span>
                                                            <br/>
                                                            <span class="value"><i style="font-size: x-large" class="fa fa-building"></i> <?= $pr->agence?$pr->agence->name:'-' ?></span>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-3 col-md-3 col-12">
                                                        <div class="cellule">
                                                           <i class="fa fa-calendar-alt"></i> <?= $pr->jour?$pr->jour->name:'-' ?> <br/>
                                                            <i class="fa fa-calendar-times"></i>&nbsp; DEPART: <?= date_format($pr->depart,'H:i')  ?> <br/>
                                                            <i class="fa fa-calendar-times"></i>&nbsp; ARRIVEE: <?= date_format($pr->arrivee,'H:i')  ?>
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-3 col-md-3 col-12">
                                                        <div class="cellule">
                                                            <i class="fa fa-donate"></i>&nbsp; TARIF: <?= $pr->prix ." FCFA"  ?> <br/>
                                                            <?= ($pr->nbp?$pr->nbp:$pr->places) ." Places dispo"  ?> <br/>
                                                            VOYAGE: <?= $pr->vip?"VIP":"NORMAL"  ?> <br/>
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-2 col-md-2 col-12">
                                                        <div class="cellule">
                                                            <div class="col-lg-2 col-md-2 col-sm-6" style="margin-top: 35px">
                                                         <span>
                                                             <a class="btn btn-danger btn-sm" href="<?= $this->Url->build(['controller'=>'Reservations','action'=>'add', $date, $pr->id]) ?>">Reserver</a>
                                                         </span>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                            <?php endforeach; ?>

                                        </li>
                                    </ul>

                                <?php else: ?>
                                    <P>Ici nous pouvons:</P>
                                    <ul>
                                        <li>

                                            <p>
                                                Consulter les programmes de voyages en fonction de :
                                            </p>
                                            <ul>
                                                <li>des trajets</li>
                                                <li>des jours</li>
                                                <li>des compagnies</li>
                                            </ul>

                                        </li>

                                        <li>Reserver une place dans un voyage</li>
                                    </ul>
                                <?php endif; ?>




                            </div>

                        </div>
                    </div>
                </div>



            </div>


        </div>
    </div>
</div>

<!--<script src="https://maps.googleapis.com/maps/api/js?key=
AIzaSyCeIyax39S5O--tJXzXnDv-fpSbTIaXtMA
&callback=initMap" async defer></script>
<script>

    var map; function initMap() {
        map = new google.maps.Map(document.getElementById('map'), { center: {lat: 6.556056 , lng: 13.112482}, zoom: 7 }); }
</script>
<style>
   #map { height: 500px ;}
   /* Optional: Makes the sample page fill the window. */

</style>-->
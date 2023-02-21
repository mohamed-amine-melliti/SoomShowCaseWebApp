<template>
  <div>
    <!--  Made With Material Kit  -->
    <a class='made-with-mk' href='http://demos.creative-tim.com/material-kit/index.html?ref=material-bootstrap-wizard'>
      <div class='brand'>MK</div>
      <div class='made-with'>Made with <strong>Material Kit</strong></div>
    </a>


    <!--   Big container   -->
    <div class='container'>
      <div class='row'>
        <div class='col-sm-8 col-sm-offset-2'>
          <!--      Wizard container        -->
          <div class='wizard-container'>
            <div id='wizard' class='card wizard-card' data-color='blue'>
              <form action='' method=''>
                <!--        You can switch " data-color="rose" "  with one of the next bright colors: "blue", "green", "orange", "purple"        -->

                <div class='wizard-header'>
                  <h3 class='wizard-title'>
                    Ouverture d'un excercice
                  </h3>
                  <h5></h5>
                </div>
                <div class='wizard-navigation'>
                  <ul>
                    <li><a data-toggle='tab' href='#location'>Ouverture Excercice</a></li>
                  </ul>
                </div>

                <div class='tab-content'>
                  <div id='location' class='tab-pane'>
                    <div class='row'>

                      <div class='col-sm-5'>

                        <div class='input-group'>
													<span class='input-group-addon'>
													</span>
                          <div class='form-group label-floating'>
                            <label class='label-floating'>S'agit il du 1er exercice comptable de
                              {{ nom_dossier }} </label>
                            <select v-model='isItFirstExcercice' class='form-control'>
                              <option disabled='' selected=''></option>
                              <option value='oui'>oui</option>
                              <option value='non'>non</option>
                            </select>
                          </div>
                        </div>

                        <!-----------------------SI OUI------------------------------------------------------------------>
                        <!----------------------------------------------------------------------------------------------->
                        <div v-if=" isItFirstExcercice === 'oui'">
                          <!----------Forme juridique = Entreprise individuelle ou EIRL ou Autoentrepreneur ou SCI--------->
                          <div class='FjIsTrueAndYes'>
                            <div class='input-group'>
													<span class='input-group-addon'>
													</span>
                              <div class='form-group label-floating'>
                                <label class='label-floating'>Veuillez indiquez la date de création de l'entreprise
                                  : </label>
                                <input class='form-control' type='date'>
                              </div>
                            </div>


                            <div class='input-group'>
													<span class='input-group-addon'>
													</span>
                              <div class='form-group label-floating'>
                                <label class='label-floating'>Date de clôture du 1er exercice : </label>
                                <input class='form-control' type='date'>
                              </div>
                            </div>

                          </div>
                          <!----------Forme juridique # de Entreprise individuelle ou EIRL ou Autoentrepreneur ou SCI--------->

                          <div class='FjIsFlaseAndYes'>
                            <div class='input-group'>
													<span class='input-group-addon'>
													</span>
                              <div class='form-group label-floating'>
                                <label class='label-floating'>Veuillez indiquer la date de signature des statuts
                                  : </label>
                                <input class='form-control' type='date'>
                              </div>
                            </div>


                            <div class='input-group'>
													<span class='input-group-addon'>
													</span>
                              <div class='form-group label-floating'>
                                <label class='label-floating'>Veuillez indiquer la date de cloture du 1er exercice
                                  comptable
                                  (Bilan)
                                  Cela est défini dans les statuts de la société à l'article Exercice social : </label>
                                <input class='form-control' type='date'>
                              </div>
                            </div>
                          </div>

                        </div>
                        <!------------------------------------------------------------------------------------------------------------------------------------------------------->

                        <!--------------------------SI NON----------------------------------------->

                        <div v-if=" isItFirstExcercice === 'non'">


                          <div class='input-group'>
													<span class='input-group-addon'>
													</span>
                            <div class='form-group label-floating'>
                              <label class='label-floating'>Quelle est la date de fin du dernier bilan comptable déposé
                                aux
                                impôts ? : </label>
                              <input class='form-control' type='date'>
                            </div>
                          </div>

                          <!----------Forme juridique = de Entreprise individuelle ou EIRL ou Autoentrepreneur ou SCI--------->

                          <div class='input-group'>
													<span class='input-group-addon'>
													</span>
                            <div class='form-group label-floating'>
                              <label class='label-floating'>Date d'ouverture du nouvel exercice : </label>
                              <input class='form-control' type='date'>
                            </div>
                          </div>

                          <div class='input-group'>
													<span class='input-group-addon'>
													</span>
                            <div class='form-group label-floating'>
                              <label class='label-floating'>Date de clôture du nouvel exercice : </label>
                              <input class='form-control' type='date'>
                            </div>
                          </div>

                          <!----------Forme juridique # de Entreprise individuelle ou EIRL ou Autoentrepreneur ou SCI--------->
                          <div class='input-group'>
													<span class='input-group-addon'>
													</span>
                            <div class='form-group label-floating'>
                              <label class='label-floating'>Date d'ouverture du nouvel exercice : </label>
                              <input class='form-control' type='date'>
                            </div>
                          </div>

                          <div class='input-group'>
													<span class='input-group-addon'>
													</span>
                            <div class='form-group label-floating'>
                              <label class='control-label'>La date de clôture change-t-elle sur ce nouvel exercice ?
                                : </label>
                              <select class='form-control' name='type_imposition'>
                                <option disabled='' selected=''></option>
                                <option value='oui'> oui</option>
                                <option value='non'> non</option>
                              </select>
                            </div>
                          </div>

                          <div class='input-group'>
													<span class='input-group-addon'>
													</span>
                            <div class='form-group label-floating'>
                              <label class='label-floating'>Date de clôture du nouvel exercice : </label>
                              <input class='form-control' type='date'>
                            </div>
                          </div>

                          <div class='input-group'>
													<span class='input-group-addon'>
													</span>
                            <div class='form-group label-floating'>
                              <label class='label-floating'>Veuillez indiquer la date de cloture du nouvel exercice .
                                Cela est défini dans les statuts de la société à l'article Exercice social : </label>
                              <input class='form-control' type='date'>
                            </div>
                          </div>

                        </div>
                      </div>


                      <!------------------------------------------------------------------------->

                    </div>

                  </div>

                  <div id='facilities' class='tab-pane'>
                    <h4 class='info-text'>Tell us more about facilities. </h4>
                    <div class='row'>

                    </div>
                  </div>

                </div>
                <div class='wizard-footer'>
                  <div class='pull-right'>
                    <input class='btn btn-next btn-fill btn-primary btn-wd' name='next' type='button' value='Next' />
                    <input class='btn btn-finish btn-fill btn-primary btn-wd' name='finish' type='button'
                           value='Finish' />
                  </div>
                  <div class='pull-left'>
                    <input class='btn btn-previous btn-fill btn-default btn-wd' name='previous' type='button'
                           value='Previous' />
                  </div>
                  <div class='clearfix'></div>
                </div>
              </form>
            </div>
          </div> <!-- wizard container -->
        </div>
      </div> <!-- row -->
    </div> <!--  big container -->

    <div class='footer'>
      <div class='container text-center'>
        Made with <i class='fa fa-heart heart'></i> by <a href='http://www.creative-tim.com'>SOOM</a>.IO <a
        href='http://www.creative-tim.com/product/bootstrap-wizard'>here.</a>
      </div>
    </div>
  </div>
</template>

<script>


export default {
  name: 'ouvertureExcercice',

  data() {
    return {
      isItFirstExcercice: undefined

    }

  }
}
</script>

<style scoped>

</style>

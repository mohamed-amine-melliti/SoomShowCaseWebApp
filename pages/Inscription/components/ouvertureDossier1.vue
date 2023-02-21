<template>

  <div>
  <!--   Big container   -->
  <div class="image-container set-full-height">
    <div class="container">
      <div class="row">
        <div class="col-sm-8 col-sm-offset-2">
          <!--      Wizard container        -->
          <div class="wizard-container">
            <div id="wizard" class="card wizard-card" data-color="blue">
              <form action="" method="">
                <!--        You can switch " data-color="blue" "  with one of the next bright colors: "green", "orange", "red", "purple"             -->

                <div class="wizard-header">
                  <h3 class="wizard-title">
                    Ouverture Dossier
                  </h3>
                  <h5>FELICITATIONS ! VOUS AVEZ REJOINT LA COMMUNAUTE DES ABONNES DE SOOM !</h5>
                </div>

                <div class="wizard-navigation">
                  <ul>
                    <li><a data-toggle="tab" href="#details">Ouverure Dossier -Step1-</a></li>
                    <li><a data-toggle="tab" href="#captain" >Ouverure Dossier -Step2-</a></li>
                    <li><a data-toggle="tab" href="#description">Ouverture Dossier -Step3-</a></li>
                  </ul>
                </div>

                <div class="tab-content">
                  <div id="details" class="tab-pane">
                    <div class="row">
                      <div class="col-sm-12">
                        <h4 class="info-text"> Afin de commencer à utiliser SOOM , veuillez compléter les champs
                          suivants pour créer votre dossier.</h4>
                      </div>


                      <!----------------ELFORM ------------------------------------>

                      <div class="col-sm-6">
                        <div class="input-group">
                              <span class="input-group-addon">
                              </span>
                          <div class="form-group label-floating">
                            <label class="control-label">Nom du dossier </label>
                            <input v-model="nom_dossier" class="form-control" name="nom_dossier" type="text">
                          </div>
                        </div>


                        <div class="input-group">
													<span class="input-group-addon">
													</span>
                          <div class="form-group label-floating">
                            <label class="control-label">Secteur D'activité</label>
                            <select v-model="receive_method" :disabled="disabledOrNot" class="form-control"
                                    name="secteur_activite" @change="launchAlert($event)">
                              <option disabled="" selected=""></option>
                              <option value="Café Restauration">Café Restauration</option>
                              <option value="Assurance">Assurance</option>
                              <option value="BTP">BTP</option>
                              <option value="Transport de marchandises">Transport de marchandises</option>
                              <option value="Transport de personnes">Transport de personnes</option>
                              <option value="Commerçant classique">Commerçant classique</option>
                              <option value="Pharmacie">Pharmacie</option>
                              <option value="Garage">Garage</option>
                              <option value="Services">Services</option>
                              <option value="Profession Libérale">Profession Libérale</option>
                              <option value="Négoce">Négoce</option>
                              <option value="E-Commerce">E-Commerce</option>
                              <option value="Vente de produits autofabriqués">Vente de produits autofabriqués</option>
                              <option value="Agriculture Elevage">Agriculture Elevage</option>
                              <option value="Sport et Solidarité">Sport et Solidarité</option>
                              <option value="Immobilier">Immobilier</option>
                            </select>
                          </div>
                        </div>

                        <!-------------------------------------------------------------------------------------------------------------------------------------------->

                        <div class="input-group">
													<span class="input-group-addon">
													</span>
                          <div v-if="receive_method === 'Café Restauration'" class="form-group label-floating">
                            <label class="label-floating">Avec débit de tabac ?</label>
                            <select v-model="ouiNonDebitDeTabac" class="form-control"
                                    @change="checkIfYesForouiNonDebitDeTabac($event)">
                              <option disabled="" selected=""></option>
                              <option value="oui">oui</option>
                              <option value="non">non</option>
                            </select>
                          </div>
                        </div>

                        <div class="input-group">
													<span class="input-group-addon">
													</span>

                          <div v-if="receive_method === 'Transport de personnes'" class="form-group label-floating">
                            <label class="label-floating">Exercez-vous une activité de taxi sous licence ?</label>
                            <select v-model="TP_taxi" class="form-control">
                              <option disabled="" selected=""></option>
                              <option value="oui">oui</option>
                              <option value="non">non</option>
                            </select>
                          </div>
                        </div>


                        <div class="input-group">
													<span class="input-group-addon">
													</span>
                          <div v-if="TP_taxi === 'non'" class="form-group label-floating">
                            <label class="label-floating"> Exercez-vous une activité de VTC, chauffeur privé ou autre
                              transport collectif de personnes ?</label>
                            <select class="form-control" @change=" checkIfYesForouiTPVTC($event)">
                              <option disabled="" selected=""></option>
                              <option value="oui">oui</option>
                              <option value="non">non</option>
                            </select>
                          </div>
                        </div>


                        <div v-if="receive_method === 'Immobilier' " class="input-group">
													<span class="input-group-addon">
													</span>
                          <div class="form-group label-floating">
                            <label class="label-floating"> Exercez-vous une activité d'agent immobilier ? (différent
                              d'une activité de SCI) </label>
                            <select v-model="ImmobilierSCI" class="form-control"
                                    @change=" changeFormeJuridiqueToSCI($event) ">
                              <option disabled="" selected=""></option>
                              <option value="oui">oui</option>
                              <option value="non">non</option>

                            </select>
                          </div>
                        </div>

                        <div v-if=" ImmobilierSCI === 'oui' " class="input-group">
													<span class="input-group-addon">
													</span>
                          <div class="form-group label-floating">
                            <label class="label-floating"> Exercez-vous uniquement une activité d'intermédiaire de
                              vente? </label>
                            <select class="form-control" @change="checkIfImmobilierIntermediare($event)">
                              <option disabled="" selected=""></option>
                              <option value="oui">oui</option>
                              <option value="non">non</option>
                            </select>
                          </div>
                        </div>

                        <!-------------------------------------------------------------------------------------------------------------------------------------------->


                        <div class="input-group">
													<span class="input-group-addon">
													</span>
                          <div class="form-group label-floating">
                            <label class="control-label">Raison social </label>
                            <input v-model="raison_social" class="form-control" name="raison_social" type="text">
                          </div>
                        </div>


                        <div class="input-group">
													<span class="input-group-addon">
													</span>
                          <div class="form-group label-floating">
                            <label class="control-label">Forme Juridique*</label>
                            <select v-model="formeJuridique" class="form-control" name="formeJuridique"
                                    v-on:change="onChangeSite($event)">
                              <option disabled="" selected=""></option>
                              <option value="Association Loi 1901 non lucrative">Association Loi 1901 non lucrative
                              </option>
                              <option value="Association lucrative">Association lucrative</option>
                              <option value="SARL">SARL</option>
                              <option value="EURL">EURL</option>
                              <option value="SAS">SAS</option>
                              <option value="SASU">SASU</option>
                              <option value="SCI">SCI</option>
                              <option value="SELARL">SELARL</option>
                              <option value="SELAS">SELAS</option>
                              <option value="SELASU">SELASU</option>
                              <option value="Entreprise individuelle">Entreprise individuelle</option>
                              <option value="EIRL">EIRL</option>
                              <option value="Autoentrepreneur">Autoentrepreneur)</option>
                            </select>
                          </div>
                        </div>

                        <div v-if="formeJuridique==='SARL' || formeJuridique==='SAS' || formeJuridique==='SASU' || formeJuridique==='SCI' || formeJuridique==='SELARL' || formeJuridique==='SELEURL' || formeJuridique==='SELAS' || formeJuridique==='SELASU'"
                             class="input-group">
													<span class="input-group-addon">
													</span>
                          <div class="form-group label-floating">
                            <label class="control-label"> Capital social indiqué sur votre Kbis ou vos statuts </label>
                            <input v-model="capital_sociale" class="form-control" name="capital_sociale" type="text">
                          </div>
                        </div>


                        <div class="input-group">
													<span class="input-group-addon">
													</span>
                          <div v-if="formeJuridique==='SARL' || formeJuridique==='SELARL' || formeJuridique==='SAS' || formeJuridique==='SELAS' "
                               class="form-group label-floating"
                               @change="FJ_nbAssocie($event)">
                            <label v-if="formeJuridique==='SARL' || formeJuridique==='SELARL' " class="control-label">Nombre
                              d'associés</label>
                            <label v-if="formeJuridique==='SAS' || formeJuridique==='SELAS'" class="control-label">Nombre
                              d'actionnaires</label>

                            <select v-model="nb_associes" class="form-control" name="nb_associes">
                              <option disabled="" selected=""></option>
                              <option value="1">Un</option>
                              <option value="Plusieurs"> Plusieurs</option>
                            </select>
                          </div>
                        </div>


                        <div class="input-group">
													<span class="input-group-addon">
													</span>
                          <label class="control-label">Adresse du siége sociale </label>

                          <div class="form-group label-floating">
                            <input id="ship-address" class="form-control" type="text" v-model="siege_social">
                          </div>
                        </div>

                        <div class="input-group">
													<span class="input-group-addon">
													</span>
                          <div class="form-group label-floating">
                            <input id="postcode" v-model="code_postale" class="form-control" name="code_postale"
                                   placeholder="Code Postale" type="text">
                          </div>
                        </div>

                        <div class="input-group">
													<span class="input-group-addon">
                            <span class="material-icons">location_city</span>
													</span>
                          <div class="form-group label-floating">
                            <input id="locality" v-model="ville" class="form-control" name="ville" type="text">
                          </div>
                        </div>


                        <div class="input-group">
													<span class="input-group-addon">
													<span class="material-icons">phone</span>
													</span>
                          <div class="form-group label-floating">
                            <vue-tel-input v-model="phone" name="phone"></vue-tel-input>
                          </div>
                        </div>


                        <div class="input-group">
													<span class="input-group-addon">
														<i class="material-icons">email</i>
													</span>
                          <div class="form-group label-floating">
                            <label class="control-label">Votre Email</label>
                            <input v-model="email" class="form-control" name="email" type="text">
                          </div>
                        </div>

                        <div class="input-group">
													<span class="input-group-addon">
													</span>
                          <div class="form-group label-floating">
                            <label class="control-label">SIRET</label>
                            <input v-model="siret" class="form-control" name="siret" type="text">
                          </div>
                        </div>


                        <div class="input-group">
													<span class="input-group-addon">
													</span>

                          <div class="form-group label-floating">
                            <label class="control-label">Êtes-vous en franchise en base de TVA (pas de TVA)*</label>
                            <select v-model="franchise_en_base_tva" class="form-control" name="franchise_en_base_tva">
                              <option disabled="" selected=""></option>
                              <option value="oui"> oui</option>
                              <option value="non"> non</option>
                            </select>
                          </div>
                        </div>

                        <div class="input-group">
													<span class="input-group-addon">
													</span>
                          <div class="form-group label-floating">
                            <label class="control-label">Numéro de TVA intracommunautaire</label>
                            <input v-model="numero_tvaintracommunaitre" class="form-control"
                                   name="numero_tvaintracommunaitre" type="text">
                          </div>
                        </div>


                        <div class="input-group">
													<span class="input-group-addon">
													</span>
                          <div class="form-group label-floating">
                            <label class="control-label">Type d'imposition*</label>
                            <select v-model="type_imposition" class="form-control" name="type_imposition">
                              <option disabled="" selected=""></option>
                              <option value="IS"> IS</option>
                              <option value="IR"> IR</option>
                            </select>
                          </div>
                        </div>

                        <div class="input-group">
													<span class="input-group-addon">
													</span>

                          <div class="form-group label-floating">
                            <label class="control-label">Êtes-vous en régime micro ?*</label>
                            <select v-model="regime_micro" class="form-control" name="regime_micro">
                              <option disabled="" selected=""></option>
                              <option value="oui"> oui</option>
                              <option value="non"> non</option>
                            </select>
                          </div>
                        </div>


                        <div class="input-group">
													<span class="input-group-addon">
													</span>
                          <div class="form-group label-floating">
                            <label class="control-label">Catégorie d'imposition* </label>
                            <select v-model="categorie_imposition" class="form-control" name="categorie_imposition">
                              <option disabled="" selected=""></option>
                              <option value="Sans"> Sans</option>
                              <option value="BIC"> BIC</option>
                              <option value="BA"> BA</option>
                              <option value="REVENUS FONCIERS"> REVENUS FONCIER</option>
                              <option value="MICRO-BIC"> MICRO-BIC</option>
                              <option value="MICRO-BNC"> MICRO-BNC</option>
                              <option value="MICRO-BA"> MICRO-"BA"</option>
                              <option value="MICRO-FONCIER"> MICRO-FONCIER</option>
                            </select>
                          </div>
                        </div>

                        <div class="input-group" v-if="   formeJuridique==='SARL' || formeJuridique==='SCI' || formeJuridique==='SELARL' || formeJuridique==='SAS' || formeJuridique==='SASU' || formeJuridique==='SELAS' || formeJuridique==='SELASU' || formeJuridique==='Association Loi 1901 non lucrative' || formeJuridique==='Association Lucrative' || formeJuridique==='Entreprise Individuelle' || formeJuridique==='EIRL' || formeJuridique==='Autoentrepreneur'  ">
													<span class="input-group-addon">
													</span>
                          <div class="form-group label-floating">
                            <label class="control-label" v-if=" formeJuridique==='SARL' || formeJuridique==='SCI' || formeJuridique==='SELARL' ">Nom Gérant</label>
                            <label class="control-label" v-if="formeJuridique==='SAS' || formeJuridique==='SASU' || formeJuridique==='SELAS' || formeJuridique==='Association Loi 1901 non lucrative' || formeJuridique==='Association lucrative' ">Nom Président</label>
                            <label class="control-label" v-if="formeJuridique==='EIRL' || formeJuridique==='Entreprise Individuelle' || formeJuridique==='Autoentrepreneur'">Nom Entrepreneur</label>

                            <input v-model="nom_gerant" class="form-control" name="nom_gerant" type="text">
                          </div>
                        </div>


                        <div class="input-group" v-if="formeJuridique==='SAS' || formeJuridique==='SASU' || formeJuridique==='SELAS' || formeJuridique==='SELASU' || formeJuridique==='Association Loi 1901 non lucrative' || formeJuridique==='Association Lucrative' || formeJuridique==='Entreprise Individuelle' || formeJuridique==='EIRL' || formeJuridique==='Autoentrepreneur' ||  formeJuridique==='SARL' || formeJuridique==='SCI' || formeJuridique==='SELARL'  ">
													<span class="input-group-addon">
													</span>
                          <div class="form-group label-floating">
                            <label class="control-label" >Prénom Gérant</label>
                            <label class="control-label" v-if="formeJuridique==='SAS' || formeJuridique==='SASU' || formeJuridique==='SELAS' || formeJuridique==='Association Loi 1901 non lucrative' || formeJuridique==='Association lucrative' ">Prénom Président</label>
                            <label class="control-label" v-if="formeJuridique==='EIRL' || formeJuridique==='Entreprise Individuelle' || formeJuridique==='Autoentrepreneur'">Prénom Entrepreneur</label>

                            <input v-model="prenom_gerant" class="form-control" name="prenom_gerant" type="text">
                          </div>
                        </div>

                        <div class="input-group" v-if="formeJuridique==='SAS' || formeJuridique==='SASU' || formeJuridique==='SELAS' || formeJuridique==='SELASU' || formeJuridique==='Association Loi 1901 non lucrative' || formeJuridique==='Association Lucrative' || formeJuridique==='Entreprise Individuelle' || formeJuridique==='EIRL' || formeJuridique==='Autoentrepreneur'  ">
													<span class="input-group-addon">
													</span>
                          <div class="form-group label-floating">
                            <label class="control-label">Capital : </label>

                            <input v-model="capital_gerant" class="form-control" name="capital" type="text">
                          </div>
                        </div>

                        <div class="input-group">
													<span class="input-group-addon">
													</span>
                          <div v-if=" formeJuridique === 'SARL' || formeJuridique === 'SELARL' || formeJuridique === 'SCI' " class="form-group label-floating">
                            <label class="label-floating">Y a-t-il un ou plusieurs co-gérants ?</label>
                            <select  class="form-control" >
                              <option disabled="" selected=""></option>
                              <option value="oui">oui</option>
                              <option value="non">non</option>
                            </select>
                          </div>
                        </div>

                      </div>

                      <!---------------------------------------------------->

                    </div>

                  </div>
                  <!---------------SECTION 2 -------------->

                  <div  id="captain" class="tab-pane"  >
                    <div id="app">
                      <multipleCogerant msg="Example of Dynamic Input" />
                    </div>
                  </div>


                  <!--------------SECTION 3 -------------->
                  <div id="description" class="tab-pane">
                    <ouverture-dossier3/>
                  </div>
                </div>
                <div class="wizard-footer">
                  <div class="pull-right">
                    <input class='btn btn-next btn-fill btn-danger btn-wd' name='next' type='button' value='Next'   />
                    <input class='btn btn-finish btn-fill btn-danger btn-wd' name='finish' type='button'
                           value='Finish'
                           @click="createDossier()"/>
                  </div>
                  <div class="pull-left">
                    <input class='btn btn-previous btn-fill btn-default btn-wd' name='previous' type='button'
                           value='Previous'/>


                    <div class="footer-checkbox">
                      <div class="col-sm-12">
                        <div class="checkbox">
                          <label>
                            <input name="optionsCheckboxes" type="checkbox">
                          </label>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="clearfix"></div>
                </div>
              </form>
            </div>

          </div> <!-- wizard container -->
        </div>
      </div> <!-- row -->
    </div> <!--  big container -->
  </div>
  </div>

</template>

<style scoped>

@import  url("https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons");
@import  url("https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css");


@import "assets/inscription/public/assets/css/material-bootstrap-wizard.css";
@import "assets/inscription/public/assets/css/bootstrap.min.css";
@import "assets/inscription/public/assets/css/demo.css";

</style>

<script>

import multipleCogerant from "./multipleCogerant";
import OuvertureDossier3 from "./ouvertureDossier3";
import axios from 'axios';

export default {

  name: "app",
  components: {
    OuvertureDossier3,
    multipleCogerant,
  },


  data() {
    return {
      nom_dossier : undefined ,
      goToMultipleCogerant : false,
      receive_method: undefined,
      capital_social: undefined,
      nb_associes: undefined,
      code_postale: undefined,
      ville: undefined,
      numero_tel: undefined,
      adress_mail: undefined,
      siret: undefined,
      franchise_en_base_tva: undefined,
      numero_tvaintracommunaitre: undefined,
      type_imposition: undefined,
      regime_micro: undefined,
      categorie_imposition: undefined,
      nom_gerant:undefined ,
      email: undefined,
      phone : undefined,
      TP_taxi: undefined,
      ImmobilierSCI: undefined,
      formeJuridique: undefined,
      disabledOrNot: undefined,
      raison_social:undefined,
      siege_social:undefined,
      capital_gerant:undefined,
      Cogerants : [],
      dossiers : [],

      cssProps: {
        backgroundImage: 'assets/img/wizard-book.jpg'
      }
    }
  },
  methods: {


    FJ_nbAssocie(event) {
      if (event.target.value === "1" && this.formeJuridique === 'SARL') {
        this.formeJuridique = 'EURL';
      } else if (event.target.value === "1" && this.formeJuridique === 'SELARL') {
        this.formeJuridique = 'SELEURL';
      }

    },
    /********************************/
    launchAlert(event) {
      if (event.target.value === "Pharmacie") {
        this.$notify({
          title: "<b>Alerte</b>",
          text: "\"DESOLE ! NOUS NE POUVONS PAS TRAITER CETTE ACTIVITE \" ",
          duration: 5000,
          type: 'danger',
        });
      } else if (event.target.value === "Transport de marchandises") {
        this.$notify({
          title: "<b>Alerte</b>",
          text: "\"ATTENTION ! VOTRE ACTIVITE ETANT REGLEMENTEE, VOTRE COMPTABILITE NECESSITE UN COMMISSAIRE AUX COMPTES OU, A DEFAUT, UN EXPERT-COMPTABLE POUR LES CAPACITES FINANCIERES A JUSTIFIER AU DREAL\" \" ",
          duration: 5000,
          type: 'danger',
        });
      }
    },

    /********************************/
    checkIfYesForouiNonDebitDeTabac(event) {
      if (event.target.value === "oui") {
        this.$notify({
          title: "<b>Alerte</b>",
          text: "\"DESOLE ! NOUS NE POUVONS PAS TRAITER CETTE ACTIVITE \" ",
          duration: 5000,
          type: 'danger',
        });

        this.receive_method = "";
      }
    },
    /********************************/
    checkIfYesForouiTPVTC(event) {
      if (event.target.value === "non") {
        this.$notify({
          title: "<b>Alerte</b>",
          text: "\" REPONSE INCOHERENTE \"  ",
          duration: 5000,
          type: 'danger',
        });

        this.receive_method = "";
        this.TP_taxi = "";
      } else if (event.target.value === "oui") {
        this.$notify({
          title: "<b>Alerte</b>",
          text: "\" \"ATTENTION ! VOTRE ACTIVITE ETANT REGLEMENTEE, VOTRE COMPTABILITE NECESSITE UN COMMISSAIRE AUX COMPTES OU, A DEFAUT, UN EXPERT-COMPTABLE POUR LES CAPACITES FINANCIERES A JUSTIFIER AU DREAL\" \"  ",
          duration: 5000,
          type: 'danger',
        });
      }
    },
    /********************************/
    checkIfImmobilierIntermediare(event) {
      if (event.target.value === "non") {
        this.$notify({
          title: "<b>Alerte</b>",
          text: "\" \"DESOLE ! NOUS NE POUVONS PAS TRAITER CETTE ACTIVITE \" \"  ",
          duration: 5000,
          type: 'danger',
        });

        this.receive_method = "";
        this.ImmobilierSCI = "";
      }
    },
    /********************************/
    onChangeSite(event) {
      if (event.target.value === "SELEURL" || event.target.value === "SELARL" || event.target.value === "SELAS" || event.target.value === "SELASU") {
        this.receive_method = "Profession Libérale";
      }

      if (event.target.value === "Association Loi 1901 non lucrative" || event.target.value === "Association lucrative") {
        this.receive_method = "Sport et Solidarité";
        this.disabledOrNot = true;
      } else {
        this.disabledOrNot = false;
      }
    },

    changeFormeJuridiqueToSCI(event) {
      if (event.target.value === "oui") {
        this.formeJuridique = "SCI";
      }
    },

    createDossier :function (){


      let formData = new FormData();
      formData.append('capital_social', this.capital_social)
      formData.append('nb_associes', this.nb_associes)
      formData.append('code_postale', this.code_postale)
      formData.append('ville', this.ville)
      formData.append('numero_tel', this.numero_tel)
      formData.append('adress_mail', this.adress_mail)
      formData.append('siret', this.siret)
      formData.append('franchise_en_base_tva', this.franchise_en_base_tva)
      formData.append('numero_tvaintracommunaitre', this.numero_tvaintracommunaitre)
      formData.append('type_imposition', this.type_imposition)
      formData.append('regime_micro', this.regime_micro)
      formData.append('categorie_imposition', this.categorie_imposition)
      formData.append('formeJuridique', this.formeJuridique)
      formData.append('prenom_gerant', this.prenom_gerant)
      formData.append('nom_gerant', this.nom_gerant)
      formData.append('secteur_activite', this.receive_method)
      formData.append('raison_social', this.raison_social)
      formData.append('siege_social', this.siege_social)
      formData.append('capital_gerant', this.capital_gerant)



      var dossier = {};
      formData.forEach(function (value,key){
        dossier[key]=value;
      });

      axios({
        method: 'post',
        url: 'dossiers.php',

        data: formData,
        config: { headers: {'Content-Type': 'multipart/form-data' }}
      })
          .then(function (response) {
            //handle success
            console.log(response)
            this.dossiers.push(dossier)
          })
          .catch(function (response) {
            //handle error
            console.log(response)
          });
    },

    enableOrDisableMultipleCogerant(event){
      if (event.target.value){
        this.goToMultipleCogerant = true;
        //newFunction();
      }
    }
  },
  /***********************************/
  watch: {},
}

</script>


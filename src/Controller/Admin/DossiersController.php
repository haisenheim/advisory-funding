<?php
namespace App\Controller\Admin;

use App\Controller\AppController;

/**
 * Dossiers Controller
 *
 * @property \App\Model\Table\DossiersTable $Dossiers
 *
 * @method \App\Model\Entity\Dossier[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class DossiersController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Comptes', 'Autors', 'Experts']
        ];
        $dossiers = $this->paginate($this->Dossiers);

        $this->set(compact('dossiers'));
    }

    /**
     * View method
     *
     * @param string|null $id Dossier id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $dossier = $this->Dossiers->get($id, [
            'contain' => ['Owners', 'Comptes', 'Autors', 'Timmobilisations', 'Mfinancements', 'Experts', 'Produits', 'Teasers']
        ]);

        $this->set('dossier', $dossier);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $dossier = $this->Dossiers->newEntity();
        if ($this->request->is('post')) {
            $dossier = $this->Dossiers->patchEntity($dossier, $this->request->getData());
            if ($this->Dossiers->save($dossier)) {
                $this->Flash->success(__('The dossier has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The dossier could not be saved. Please, try again.'));
        }

        $comptes = $this->Dossiers->Comptes->find()->all();
        $produits = $this->Dossiers->Produits->find()->all();
        $sectors = $this->Dossiers->Produits->Sectors->find()->all();
        $this->set(compact('dossier',  'comptes',  'sectors',  'produits'));
    }

    public function saveJson(){
        if($this->request->is('ajax')){
            //debug($this->request->getData());
            //die();
            $doss = $this->request->getData('dossier');
            $produits=$this->request->getData('produits');
            $teserdata=$this->request->getData('teaser');
            $compte_expl=$this->request->getData('compte_expl');
            $grd_eq_fin=$this->request->getData('grd_eq_fin');
            $ratios = $this->request->getData('ratios');
            $analyse_diag_int=$this->request->getData('analyse_diag_int');
            $analyse_diag_ext=$this->request->getData('analyse_diag_ext');
            $segments = $this->request->getData('segments');
            $concurrents=$this->request->getData('concurrents');
            $diag_obj_strat=$this->request->getData('diag_obj_strat');
            $plan_dev_strat=$this->request->getData('plan_dev_strat');



            $answers =$this->request->getData('answers');
            $dossier = $this->Dossiers->newEntity();
           // $dossier = $this->Dossiers->patchEntity($dossier, $doss);
            $dossier->name=$doss['name'];
            $dossier->montant=$doss['montant'];
            $dossier->compte_id=$doss['compte_id'];
            $dossier->apport_associes=$doss['apport_associes'];
            $dossier->apport_personnel=$doss['apport_personnel'];
            $dossier->autor_id = $this->Auth->user()['id'];
            $dossier->created=new \DateTime();
            $dossier->ca1=$compte_expl['ca1'];
            $dossier->ca2=$compte_expl['ca2'];
            $dossier->ca3=$compte_expl['ca3'];
            $dossier->cv1=$compte_expl['cv1'];
            $dossier->cv2=$compte_expl['cv2'];
            $dossier->cv3=$compte_expl['cv3'];
            $dossier->cf1=$compte_expl['cf1'];
            $dossier->cf2=$compte_expl['cf2'];
            $dossier->cf3=$compte_expl['cf3'];
            $dossier->cfi1=$compte_expl['cfi1'];
            $dossier->cfi2=$compte_expl['cfi2'];
            $dossier->cfi3=$compte_expl['cfi3'];
            $dossier->salaires1=$compte_expl['salaires1'];
            $dossier->salaires2=$compte_expl['salaires2'];
            $dossier->salaires3=$compte_expl['salaires3'];
            $dossier->dap1=$compte_expl['dap1'];
            $dossier->dap2=$compte_expl['dap2'];
            $dossier->dap3=$compte_expl['dap3'];
            $dossier->pf1=$compte_expl['pf1'];
            $dossier->pf2=$compte_expl['pf2'];
            $dossier->pf3=$compte_expl['pf3'];
            $dossier->pe1=$compte_expl['pe1'];
            $dossier->pe2=$compte_expl['pe2'];
            $dossier->pe3=$compte_expl['pe3'];
            $dossier->ce1=$compte_expl['ce1'];
            $dossier->ce2=$compte_expl['ce2'];
            $dossier->ce3=$compte_expl['ce3'];
            $dossier->impots1=$compte_expl['impots1'];
            $dossier->impots2=$compte_expl['impots2'];
            $dossier->impots3=$compte_expl['impots3'];

            $dossier->ress_durable1=$grd_eq_fin['ress_dur1'];
            $dossier->ress_durable2=$grd_eq_fin['ress_dur2'];
            $dossier->ress_durable3=$grd_eq_fin['ress_dur3'];

            $dossier->actifs_immo1=$grd_eq_fin['actifs_immo1'];
            $dossier->actifs_immo2=$grd_eq_fin['actifs_immo2'];
            $dossier->actifs_immo3=$grd_eq_fin['actifs_immo3'];

            $dossier->creances1=$grd_eq_fin['creances1'];
            $dossier->creances2=$grd_eq_fin['creances2'];
            $dossier->creances3=$grd_eq_fin['creances3'];
            $dossier->stocks1=$grd_eq_fin['stocks1'];
            $dossier->stocks2=$grd_eq_fin['stocks2'];
            $dossier->stocks3=$grd_eq_fin['stocks3'];
            $dossier->dettes1=$grd_eq_fin['dettes1'];
            $dossier->dettes2=$grd_eq_fin['dettes2'];
            $dossier->dettes3=$grd_eq_fin['dettes3'];
            $dossier->capitaux_propres1=$ratios['capitaux_propres1'];
            $dossier->capitaux_propres2=$ratios['capitaux_propres2'];
            $dossier->capitaux_propres3=$ratios['capitaux_propres3'];
            $dossier->ratio_auto_fin1=$ratios['ratio_auto_fin1'];
            $dossier->ratio_auto_fin2=$ratios['ratio_auto_fin2'];
            $dossier->ratio_auto_fin3=$ratios['ratio_auto_fin3'];
            $dossier->ratio_endettement_net1=$ratios['ratio_endettement_net1'];
            $dossier->ratio_endettement_net2=$ratios['ratio_endettement_net2'];
            $dossier->ratio_endettement_net3=$ratios['ratio_endettement_net3'];
            $dossier->ratio_liquidite_gen1=$ratios['ratio_liquidite_gen1'];
            $dossier->ratio_liquidite_gen2=$ratios['ratio_liquidite_gen2'];
            $dossier->ratio_liquidite_gen3=$ratios['ratio_liquidite_gen3'];
            $dossier->ratio_couv_emploi_stables1=$ratios['ratio_couv_emploi_stables1'];
            $dossier->ratio_couv_emploi_stables2=$ratios['ratio_couv_emploi_stables2'];
            $dossier->ratio_couv_emploi_stables3=$ratios['ratio_couv_emploi_stables3'];
            $dossier->ratio_vetuite_immo1=$ratios['ratio_vetuite_immo1'];
            $dossier->ratio_vetuite_immo2=$ratios['ratio_vetuite_immo2'];
            $dossier->ratio_vetuite_immo3=$ratios['ratio_vetuite_immo3'];
            $dossier->delais_paie_clients1=$ratios['delais_paie_clients1'];
            $dossier->delais_paie_clients2=$ratios['delais_paie_clients2'];
            $dossier->delais_paie_clients3=$ratios['delais_paie_clients3'];
            $dossier->delais_paie_frn1=$ratios['delais_paie_frn1'];
            $dossier->delais_paie_frn2=$ratios['delais_paie_frn2'];
            $dossier->delais_paie_frn3=$ratios['delais_paie_frn3'];
            $dossier->rentabilite_capitaux_propres1=$ratios['rentabilite_capitaux_propres1'];
            $dossier->rentabilite_capitaux_propres2=$ratios['rentabilite_capitaux_propres2'];
            $dossier->rentabilite_capitaux_propres3=$ratios['rentabilite_capitaux_propres3'];

            $dossier->analyse_diag_interne= $analyse_diag_int;
            $dossier->analyse_diag_externe=$analyse_diag_ext;
            $dossier->plan_dev_strat=$plan_dev_strat;
            $dossier->synt_op=$diag_obj_strat['synop'];
            $dossier->synt_men=$diag_obj_strat['synmen'];
            $dossier->synt_forces=$diag_obj_strat['synfor'];
            $dossier->synt_faibl=$diag_obj_strat['synfaib'];
            $dossier->def_obj_strat=$diag_obj_strat['def_obj_strat'];

            // $dossier->client_id = $this->Auth
            //debug($answers); die();
            if($dossier = $this->Dossiers->save($dossier)){
                $this->loadModel('DossiersProduits');
               // $this->loadModel('DossiersTimmobilisations');
               // $this->loadModel('ActifsDossiers');
               // $this->loadModel('DossiersMfinancements');
                $this->loadModel('Produits');
                $this->loadModel('Teasers');
                $teaser = $this->Teasers->newEntity();
                $teaser->dossier_id=$dossier->id;
                $teaser->name=$dossier->name ."TEA";
                $teaser->contexte=$teserdata['contexte'];
                $teaser->problematique=$teserdata['problematique'];
                $teaser->marche=$teserdata['marche'];
                $teaser->strategie=$teserdata['strategie'];
                $teaser->chiffres=$teserdata['chiffres'];
                $teaser->focus_realisations = $teserdata['focus_realisations'];
                $teaser->body=$teserdata['body'];
                $teaser = $this->Teasers->save($teaser);
                /*$this->loadModel('Mois');
                $mois = new \DateTime();
                $mois=date_format($mois,'m');

                $moi = $this->Mois->get($mois);
                $moi->realisation_dossier=$moi->realisation_dossier+1;
                $moi=$this->Mois->save($moi);*/


                //$this->loadModel('MoisSectors');
                for($i = 0; $i<count($produits);$i++){
                    $dp = $this->DossiersProduits->newEntity();
                    $dp->produit_id = $produits[$i];
                    $dp->dossier_id = $dossier->id;
                    $this->DossiersProduits->save($dp);

                   /* $mois = new \DateTime();
                    $mois=date_format($mois,'m');
                    $produit=$this->Produits->get($produits[$i]);
                    $ms=$this->MoisSectors->find()->where(['moi_id'=>$mois,'sector_id'=>$produit->sector_id])->first();
                    $ms->p_realisation=$ms->p_realisation+1;
                    $ms=$this->MoisSectors->save($ms);*/
                }

                $this->loadModel('Concurrents');
                for($i=0; $i<count($concurrents); $i++){
                    $concurrent = $this->Concurrents->newEntity();
                    $concurrent->name=$concurrents[$i]['qui'];
                    $concurrent->quoi=$concurrents[$i]['quoi'];
                    $concurrent->quand=$concurrents[$i]['quand'];
                    $concurrent->ou=$concurrents[$i]['ou'];
                    $concurrent->combien=$concurrents[$i]['combien'];
                    $concurrent->pourquoi=$concurrents[$i]['pourquoi'];
                    $concurrent->ca=$concurrents[$i]['ca'];
                    $concurrent->salaires=$concurrents[$i]['sal'];
                    $concurrent->ebe=$concurrents[$i]['ebe'];
                    $concurrent->va=$concurrents[$i]['va'];
                    $concurrent->cv=$concurrents[$i]['cv'];
                    $concurrent->cf=$concurrents[$i]['cf'];
                    $concurrent->marge_brute=$concurrents[$i]['mb'];
                    $concurrent = $this->Concurrents->save($concurrent);
                }

                $this->loadModel('Segments');
                for($i=0; $i<count($segments); $i++){
                    $concurrent = $this->Segments->newEntity();
                    $concurrent->name=$segments[$i]['qui'];
                    $concurrent->quoi=$segments[$i]['quoi'];
                    $concurrent->quand=$segments[$i]['quand'];
                    $concurrent->ou=$segments[$i]['ou'];
                    $concurrent->combien=$segments[$i]['combien'];
                    $concurrent->pourquoi=$segments[$i]['pourquoi'];
                    $segment = $this->Segments->save($concurrent);
                }

               /* for($i = 0; $i<count($timmobilisations);$i++){
                    $dp = $this->DossiersTimmobilisations->newEntity();
                    $dp->timmobilisation_id = $timmobilisations[$i];
                    $dp->dossier_id = $dossier->id;
                    $this->DossiersTimmobilisations->save($dp);
                }*/

               /* for($i = 0; $i<count($mfinancements);$i++){
                    $dp = $this->DossiersMfinancements->newEntity();
                    $dp->mfinancement_id = $mfinancements[$i];
                    $dp->dossier_id = $dossier->id;
                    $this->DossiersMfinancements->save($dp);
                }*/

                /*for($i = 0; $i<count($actifs);$i++){
                    $dp = $this->ActifsDossiers->newEntity();
                    $dp->actif_id = $actifs[$i];
                    $dp->dossier_id = $dossier->id;
                    $this->ActifsDossiers->save($dp);
                }*/

                $this->loadModel('ChoicesDossiers');
                foreach($answers as $answer){
                    $an=$this->ChoicesDossiers->newEntity();
                    $an->choice_id=$answer['choice_id'];
                    $an->dossier_id=$dossier->id;
                    $an=$this->ChoicesDossiers->save($an);
                }

            }
            $id=$dossier->id;
            $this->set(compact('dossier'));
            $this->set('_serialize','dossier');
        }
    }

    /**
     * Edit method
     *
     * @param string|null $id Dossier id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $dossier = $this->Dossiers->get($id, [
            'contain' => ['Produits']
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $dossier = $this->Dossiers->patchEntity($dossier, $this->request->getData());
            if ($this->Dossiers->save($dossier)) {
                $this->Flash->success(__('The dossier has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The dossier could not be saved. Please, try again.'));
        }
        $owners = $this->Dossiers->Owners->find('list', ['limit' => 200]);
        $clients = $this->Dossiers->Clients->find('list', ['limit' => 200]);
        $autors = $this->Dossiers->Autors->find('list', ['limit' => 200]);
        $timmobilisations = $this->Dossiers->Timmobilisations->find('list', ['limit' => 200]);
        $mfinancements = $this->Dossiers->Mfinancements->find('list', ['limit' => 200]);
        $experts = $this->Dossiers->Experts->find('list', ['limit' => 200]);
        $produits = $this->Dossiers->Produits->find('list', ['limit' => 200]);
        $this->set(compact('dossier', 'owners', 'clients', 'autors', 'timmobilisations', 'mfinancements', 'experts', 'produits'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Dossier id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $dossier = $this->Dossiers->get($id);
        if ($this->Dossiers->delete($dossier)) {
            $this->Flash->success(__('The dossier has been deleted.'));
        } else {
            $this->Flash->error(__('The dossier could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}

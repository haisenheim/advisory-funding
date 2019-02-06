<?php
namespace App\Controller;
use Cake\Event\Event;


/**
 * Slides Controller
 *
 * @property \App\Model\Table\SlidesTable $Slides
 */
class FrontController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */

/*
   public function beforeFilter(Event $event){
       parent::beforeRender($event);
       $this->Auth->allow(['view', 'index','Search']);
   }*/

    public function beforeFilter(Event $event){
        $this->Auth->allow(['index']);
    }

    public function index()
    {



    }

    ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////




/*


    public function search(){

        $this->loadModel('Villes');
        $villes = $this->Villes->find()->all();
        $this->set(compact('villes'));

        if($this->request->is('Post')){

            $this->loadModel('Programmes');
            $debut= $this->request->getData('depart');
            $arrivee = $this->request->getData('arrivee');
            $jour = $this->request->getData('jour');
            $date = $jour;
            $jour = date_create($jour);



            $jour = date_format($jour,'w');

            $jour=$jour==0?7:$jour;

           // debug($jour); die();

            $programmes = $this->Programmes->find()->where(['initial_id'=>$debut, 'final_id'=>$arrivee,'jour_id'=>$jour])->orWhere (['initial_id'=>$debut, 'final_id'=>$arrivee,'jour_id'=>8])->contain(['Debuts','Fins',
                'Jours','Compagnies','Agences'])->all();
            $this->set(compact('programmes', 'date'));

        }
    }*/


    public function login(){

    }


}

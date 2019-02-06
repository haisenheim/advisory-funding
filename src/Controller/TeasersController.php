<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Teasers Controller
 *
 * @property \App\Model\Table\TeasersTable $Teasers
 *
 * @method \App\Model\Entity\Teaser[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class TeasersController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Dossiers']
        ];
        $teasers = $this->paginate($this->Teasers);

        $this->set(compact('teasers'));
    }

    /**
     * View method
     *
     * @param string|null $id Teaser id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $teaser = $this->Teasers->get($id, [
            'contain' => ['Dossiers']
        ]);

        $this->set('teaser', $teaser);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $teaser = $this->Teasers->newEntity();
        if ($this->request->is('post')) {
            $teaser = $this->Teasers->patchEntity($teaser, $this->request->getData());
            if ($this->Teasers->save($teaser)) {
                $this->Flash->success(__('The teaser has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The teaser could not be saved. Please, try again.'));
        }
        $dossiers = $this->Teasers->Dossiers->find('list', ['limit' => 200]);
        $this->set(compact('teaser', 'dossiers'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Teaser id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $teaser = $this->Teasers->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $teaser = $this->Teasers->patchEntity($teaser, $this->request->getData());
            if ($this->Teasers->save($teaser)) {
                $this->Flash->success(__('The teaser has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The teaser could not be saved. Please, try again.'));
        }
        $dossiers = $this->Teasers->Dossiers->find('list', ['limit' => 200]);
        $this->set(compact('teaser', 'dossiers'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Teaser id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $teaser = $this->Teasers->get($id);
        if ($this->Teasers->delete($teaser)) {
            $this->Flash->success(__('The teaser has been deleted.'));
        } else {
            $this->Flash->error(__('The teaser could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}

<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Concurrents Controller
 *
 * @property \App\Model\Table\ConcurrentsTable $Concurrents
 *
 * @method \App\Model\Entity\Concurrent[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ConcurrentsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $concurrents = $this->paginate($this->Concurrents);

        $this->set(compact('concurrents'));
    }

    /**
     * View method
     *
     * @param string|null $id Concurrent id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $concurrent = $this->Concurrents->get($id, [
            'contain' => []
        ]);

        $this->set('concurrent', $concurrent);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $concurrent = $this->Concurrents->newEntity();
        if ($this->request->is('post')) {
            $concurrent = $this->Concurrents->patchEntity($concurrent, $this->request->getData());
            if ($this->Concurrents->save($concurrent)) {
                $this->Flash->success(__('The concurrent has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The concurrent could not be saved. Please, try again.'));
        }
        $this->set(compact('concurrent'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Concurrent id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $concurrent = $this->Concurrents->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $concurrent = $this->Concurrents->patchEntity($concurrent, $this->request->getData());
            if ($this->Concurrents->save($concurrent)) {
                $this->Flash->success(__('The concurrent has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The concurrent could not be saved. Please, try again.'));
        }
        $this->set(compact('concurrent'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Concurrent id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $concurrent = $this->Concurrents->get($id);
        if ($this->Concurrents->delete($concurrent)) {
            $this->Flash->success(__('The concurrent has been deleted.'));
        } else {
            $this->Flash->error(__('The concurrent could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}

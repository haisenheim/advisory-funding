<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Segments Controller
 *
 * @property \App\Model\Table\SegmentsTable $Segments
 *
 * @method \App\Model\Entity\Segment[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class SegmentsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $segments = $this->paginate($this->Segments);

        $this->set(compact('segments'));
    }

    /**
     * View method
     *
     * @param string|null $id Segment id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $segment = $this->Segments->get($id, [
            'contain' => []
        ]);

        $this->set('segment', $segment);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $segment = $this->Segments->newEntity();
        if ($this->request->is('post')) {
            $segment = $this->Segments->patchEntity($segment, $this->request->getData());
            if ($this->Segments->save($segment)) {
                $this->Flash->success(__('The segment has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The segment could not be saved. Please, try again.'));
        }
        $this->set(compact('segment'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Segment id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $segment = $this->Segments->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $segment = $this->Segments->patchEntity($segment, $this->request->getData());
            if ($this->Segments->save($segment)) {
                $this->Flash->success(__('The segment has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The segment could not be saved. Please, try again.'));
        }
        $this->set(compact('segment'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Segment id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $segment = $this->Segments->get($id);
        if ($this->Segments->delete($segment)) {
            $this->Flash->success(__('The segment has been deleted.'));
        } else {
            $this->Flash->error(__('The segment could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}

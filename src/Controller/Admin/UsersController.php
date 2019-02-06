<?php
namespace App\Controller\Admin;

use App\Controller\AppController;

/**
 * Users Controller
 *
 * @property \App\Model\Table\UsersTable $Users
 *
 * @method \App\Model\Entity\User[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class UsersController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Roles', 'Comptes']
        ];
        $users = $this->paginate($this->Users);

        $this->set(compact('users'));
    }

    /**
     * View method
     *
     * @param string|null $id User id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $user = $this->Users->get($id, [
            'contain' => ['Roles', 'Comptes']
        ]);

        $this->set('user', $user);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $user = $this->Users->newEntity();
        if ($this->request->is('post')) {
            $user = $this->Users->patchEntity($user, $this->request->getData());
            if ($this->Users->save($user)) {
                $this->Flash->success(__('The user has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The user could not be saved. Please, try again.'));
        }
        $roles = $this->Users->Roles->find('list', ['limit' => 200]);
        $clients = $this->Users->Clients->find('list', ['limit' => 200]);
        $nations = $this->Users->Nations->find('list', ['limit' => 200]);
        $sectors = $this->Users->Sectors->find('list', ['limit' => 200]);
        $this->set(compact('user', 'roles', 'clients', 'nations', 'sectors'));
    }

    /**
     * Edit method
     *
     * @param string|null $id User id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $user = $this->Users->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $user = $this->Users->patchEntity($user, $this->request->getData());
            if ($this->Users->save($user)) {
                $this->Flash->success(__('The user has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The user could not be saved. Please, try again.'));
        }
        $roles = $this->Users->Roles->find('list', ['limit' => 200]);
        $clients = $this->Users->Clients->find('list', ['limit' => 200]);
        $nations = $this->Users->Nations->find('list', ['limit' => 200]);
        $sectors = $this->Users->Sectors->find('list', ['limit' => 200]);
        $this->set(compact('user', 'roles', 'clients', 'nations', 'sectors'));
    }

    /**
     * Delete method
     *
     * @param string|null $id User id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $user = $this->Users->get($id);
        if ($this->Users->delete($user)) {
            $this->Flash->success(__('The user has been deleted.'));
        } else {
            $this->Flash->error(__('The user could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }


    public function login()
    {
        $this->viewBuilder()->setLayout(false);
        // $passwordHasher = new DefaultPasswordHasher();
        // echo $passwordHasher->hash('admin');
        // $this->loadComponent('Auth');

        if ($this->request->is('post')) {
            $user = $this->Auth->identify();

            //debug($user); die();

            if ($user) {

                $u = $this->Users->newEntity();
                $u->id = $user['id'];
                $u->login_count = $user['login_count'] + 1;
                $u->login_last = date('Y-m-d H:i:s');
                $this->Users->save($u);

                $this->Auth->setUser($user);

                if ($user['role_id'] == 1) {
                    return $this->redirect([
                        'controller' => 'users',
                        'action' => 'index',
                        'prefix' => 'admin',
                    ]);
                }

            } else {
                $this->Flash->error('Nom d\'utilisateur ou mot de passe incorrect', 'default', [], 'auth');
            }
        }
    }
}

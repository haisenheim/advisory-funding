<?php
/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link      https://cakephp.org CakePHP(tm) Project
 * @since     0.2.9
 * @license   https://opensource.org/licenses/mit-license.php MIT License
 */
namespace App\Controller;

use Cake\Controller\Controller;
use Cake\Event\Event;

/**
 * Application Controller
 *
 * Add your application-wide methods in the class below, your controllers
 * will inherit them.
 *
 * @link https://book.cakephp.org/3.0/en/controllers.html#the-app-controller
 */
class AppController extends Controller
{

    /**
     * Initialization hook method.
     *
     * Use this method to add common initialization code like loading components.
     *
     * e.g. `$this->loadComponent('Security');`
     *
     * @return void
     */
    public function initialize()
    {
        parent::initialize();

        $this->loadComponent('RequestHandler', [
            'enableBeforeRedirect' => false,
        ]);
        $this->loadComponent('Flash');

        /*
         * Enable the following component for recommended CakePHP security settings.
         * see https://book.cakephp.org/3.0/en/controllers/components/security.html
         */
        //$this->loadComponent('Security');
        $this->loadComponent('Auth', [
            'loginAction' => [
                'controller' => 'users',
                'action' => 'login',
                'prefix' => false,
            ],
            'authError' => 'Acces non autorise',
            'unauthorizedRedirect' => [
                'controller' => 'Front',
                'action' => 'index',
                'prefix'=>false
            ],
            'authenticate' => [
                'Form' => [
                    'fields' => ['username' => 'email'],
                    'scope' => ['Users.active' => 1],
                ]
            ],
            'authorize' => ['Controller']
        ]);
    }



    public function beforeRender(Event $event)
    {
        if (!array_key_exists('_serialize', $this->viewVars) &&
            in_array($this->response->getType(), ['application/json', 'application/xml'])
        ) {
            $this->set('_serialize', true);
        }

        // $this->Auth->allow(['index','view']);

        if(!empty($this->Auth)){
            /*if($this->request->getParam('controller')=='Front'){
                $this->viewBuilder()->setLayout('front');
                $this->Auth->allow(['index']);
            }*/

            if($this->Auth->user()['role_id']==1){
                $this->viewBuilder()->setLayout('admin');
                $this->set(['usr'=>$this->Auth->user()]);
            }

        }


        $token = $this->request->getParam('_csrfToken');
        $this->set(compact('token'));
    }

    public function beforeFilter(Event $event){
      if($this->request->getParam('controller') =='Front'){
          $this->viewBuilder()->setLayout('front');
      }
        $authuser = $this->Auth->user();
        $this->set(compact('authuser'));

        if( $this->request->getParam('prefix') == 'admin') {
            $this->viewBuilder()->setLayout('admin');
        }
    }


    public function isAuthorized($user)
    {

        if (($this->request->getParam('prefix') === 'admin') && ($user['role_id'] != 1)) {
            echo '<a href="/users/logout">Logout</a><br />';
            die('Invalid request for '. $user['role_id'] . ' user.');
        }
        if (($this->request->getParam('prefix') === 'cmp') && ($user['role_id'] != 2)) {
            echo '<a href="/users/logout">Logout</a><br />';
            die('Invalid request for '. $user['role_id'] . ' user.');
        }

        return true;
    }
}

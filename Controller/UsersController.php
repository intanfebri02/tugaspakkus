<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Users Controller
 *
 * @property \App\Model\Table\UsersTable $Users
 */
class UsersController extends AppController
{
    public function beforeFilter(\Cake\Event\EventInterface $event)
{
    parent::beforeFilter($event);
    // Configure the login action to not require authentication, preventing
    // the infinite redirect loop issue
    $this->Authentication->addUnauthenticatedActions(['login','register']);
}

public function login()
{
    $this->request->allowMethod(['get', 'post']);
    $result = $this->Authentication->getResult();
    // regardless of POST or GET, redirect if user is logged in
    if ($result && $result->isValid()) {
        // redirect to /articles after login success
        $redirect = $this->request->getQuery('redirect', [
            'controller' => 'Savings',
            'action' => 'index',
        ]);

        return $this->redirect($redirect);
    }
    // display error if user submitted and authentication failed
    if ($this->request->is('post') && !$result->isValid()) {
        $this->Flash->error(__('Invalid username or password'));
    }
}

public function register()
{
    $user = $this->Users->newEmptyEntity();
    if ($this->request->is('post')) {
        $datas = $this->request->getData();
        $user = $this->Users->patchEntity($user, $datas);
        if ($this->Users->save($user)) {
            $this->Flash->success(__('Pendaftaran Berhasil'));

            return $this->redirect(['action' => 'Login']);
        }
        $this->Flash->error(__('Pendaftaran gagal'));
    }
    $groups = $this->Users->Groups->find('list', ['limit' => 200])->all();

    $this->set(compact('user', 'groups'));
}
public function logout()
{
    $result = $this->Authentication->getResult();
    // regardless of POST or GET, redirect if user is logged in
    if ($result && $result->isValid()) {
        $this->Authentication->logout();

        return $this->redirect(['controller' => 'Users', 'action' => 'login']);
    }
}

    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $query = $this->Users->find()
            ->contain(['Groups']);
        $users = $this->paginate($query);

        $this->set(compact('users'));
    }

    /**
     * View method
     *
     * @param string|null $id User id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $user = $this->Users->get($id, ['contain' => ['Groups', 'Savings']]);
        $this->set(compact('user'));
    }

    public function profile($id = null)
    {
        $user = $this->Users->get($id, ['contain' => ['Groups', 'Savings']]);
        $this->set(compact('user'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $user = $this->Users->newEmptyEntity();
        if ($this->request->is('post')) {
            $datas = $this->request->getData();
            $nm = explode(".", $datas['photo']->getClientFileName());
            $filetype = ['image/png', 'image/jpg', 'image/jpeg'];
            if (in_array($datas['photo']->getClientMediaType(), $filetype)) {
                $file = $datas['photo']->getClientFileName();
                $filename = "user_".date("ymdhis")."_"
                .str_replace(" ", "_", strtolower($datas['name'])) . "." . $nm[count($nm)-1];
                $pathfile = WWW_ROOT . "img/users/" . $filename;
                $datas['photo']->moveTo($pathfile);
                $datas['photo'] = $filename;
            }
            $user = $this->Users->patchEntity($user, $datas);
            if ($this->Users->save($user)) {
                $this->Flash->success(__('The user has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The user could not be saved. Please, try again.'));
        }
        $groups = $this->Users->Groups->find('list', ['limit' => 200])->all();

        $this->set(compact('user', 'groups'));
    }

    /**
     * Edit method
     *
     * @param string|null $id User id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $user = $this->Users->get($id, ['contain'=> []]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $datas = $this->request->getData();
            $nm = explode(".", $datas['photo']->getClientFileName());
            $filetype = ['image/png', 'image/jpg', 'image/jpeg'];
            $terubah = false;
            $photolama = $user->photo;
            if (!empty($datas['photo']->getClientFilename())) {
                if (in_array($datas['photo']->getClientMediaType(), $filetype)) {
                    $file = $datas['photo']->getClientFileName();
                    $filename = "user_".date("ymdhis")."_"
                    .str_replace(" ", "_", strtolower($datas['name'])) . "." . $nm[count($nm)-1];
                    $pathfile = WWW_ROOT . "img/users/" . $filename;

                    $datas['photo']->moveTo($pathfile);
                    $datas['photo'] = $filename;
                    $terubah = true;
                }
            } else {
                $datas['photo'] = $user->photo;
            }

            $user = $this->Users->patchEntity($user, $datas);
            if ($this->Users->save($user)) {
                if ($terubah) {
                    unlink(WWW_ROOT . "img/users/" . $photolama);
                }
                $this->Flash->success(__('The user has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The user could not be saved. Please, try again.'));
        }
        $groups = $this->Users->Groups->find('list', ['limit' => 200])->all();

        $this->set(compact('user', 'groups'));
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

    public function active($id = null, $isActive = null)
    {
        $this->request->allowMethod(['get']);
        $user = $this->Users->get($id);
        $datas['is_active'] = $isActive;
        $user = $this->Users->patchEntity($user, $datas);
        if ($this->Users->save($user)) {
            $info = 'Siswa ' . $user['name'].' berhasil'
                    .($isActive ? ' Diaktifkan' : ' Di non aktikan');

            $this->Flash->success(__($info));

            return $this->redirect(['action'=>'index']);
        } else {
            $this->Flash->error(__('GAGAL! eksekusi tidak dapat diselesaikan'));

            return $this->redirect(['action'=>'index']);
        }
    }

}
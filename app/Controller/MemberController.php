<?php
class MemberController extends AppController
{
    public $helpers = array('Html', 'Form', 'Flash');
    public $components = ['Session'];
    public function index()
    {
        $movies = $this->Member->find('all');
        $this->set('Members', $movies);
    }

    public function add()
    {
        if ($this->request->is('post')) {
            $this->Member->create();
            if ($this->Member->save($this->request->data)) {
                $this->Flash->success(__('Your post has been saved.'));
                return $this->redirect(array('action' => 'index'));
            }
            $this->Flash->error(__('Unable to add your post.'));
        }
    }


    public function edit($id = null)
    {
        if (!$id) {
            throw new NotFoundException(__('Invalid post'));
        }

        $post = $this->Member->findById($id);
        if (!$post) {
            throw new NotFoundException(__('Invalid post'));
        }

        if ($this->request->is(array('post', 'put'))) {
            $this->Member->id = $id;
            if ($this->Member->save($this->request->data)) {
                $this->Flash->success(__('Your post has been updated.'));
                return $this->redirect(array('action' => 'index'));
            }
            $this->Flash->error(__('Unable to update your post.'));
        }

        if (!$this->request->data) {
            $this->request->data = $post;
        }
    }

    public function delete($id)
    {
        if ($this->request->is('get')) {
            throw new MethodNotAllowedException();
        }

        if ($this->Member->delete($id)) {
            $this->Flash->success(
                __(
                    'The post with id: %s has been deleted.',
                    h($id)
                )
            );
        } else {
            $this->Flash->error(
                __('The post with id: %s could not be deleted.', h($id))
            );
        }

        return $this->redirect(array('action' => 'index'));
    }



    function view($id = null)
    {
        if (!$id) {
            $this->Session->setFlash('Invalid movie');
            $this->redirect(['action' => 'index']);
        }
        $this->set('movie', $this->Member->findById($id));
    }
}

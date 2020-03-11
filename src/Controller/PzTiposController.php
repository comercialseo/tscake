<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * PzTipos Controller
 *
 * @property \App\Model\Table\PzTiposTable $PzTipos
 *
 * @method \App\Model\Entity\PzTipo[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class PzTiposController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $pzTipos = $this->paginate($this->PzTipos);

        $this->set(compact('pzTipos'));
    }

    /**
     * View method
     *
     * @param string|null $id Pz Tipo id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $pzTipo = $this->PzTipos->get($id, [
            'contain' => ['Piezas'],
        ]);

        $this->set('pzTipo', $pzTipo);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function nuevo()
    {
        $pzTipo = $this->PzTipos->newEmptyEntity();
        if ($this->request->is('post')) {
            $pzTipo = $this->PzTipos->patchEntity($pzTipo, $this->request->getData());
            if ($this->PzTipos->save($pzTipo)) {
                $this->Flash->success(__('The pz tipo has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The pz tipo could not be saved. Please, try again.'));
        }
        $this->set(compact('pzTipo'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Pz Tipo id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function editar($id = null)
    {
        $pzTipo = $this->PzTipos->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $pzTipo = $this->PzTipos->patchEntity($pzTipo, $this->request->getData());
            if ($this->PzTipos->save($pzTipo)) {
                $this->Flash->success(__('The pz tipo has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The pz tipo could not be saved. Please, try again.'));
        }
        $this->set(compact('pzTipo'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Pz Tipo id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function borrar($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $pzTipo = $this->PzTipos->get($id);
        if ($this->PzTipos->delete($pzTipo)) {
            $this->Flash->success(__('The pz tipo has been deleted.'));
        } else {
            $this->Flash->error(__('The pz tipo could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}

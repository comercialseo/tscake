<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * PzMarcas Controller
 *
 * @property \App\Model\Table\PzMarcasTable $PzMarcas
 *
 * @method \App\Model\Entity\PzMarca[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class PzMarcasController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $pzMarcas = $this->paginate($this->PzMarcas);

        $this->set(compact('pzMarcas'));
    }

    /**
     * View method
     *
     * @param string|null $id Pz Marca id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function ver($id = null)
    {
        $pzMarca = $this->PzMarcas->get($id, [
            'contain' => ['Piezas'],
        ]);

        $this->set('pzMarca', $pzMarca);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function nuevo()
    {
        $pzMarca = $this->PzMarcas->newEmptyEntity();
        if ($this->request->is('post')) {
            $pzMarca = $this->PzMarcas->patchEntity($pzMarca, $this->request->getData());
            if ($this->PzMarcas->save($pzMarca)) {
                $this->Flash->success(__('The pz marca has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The pz marca could not be saved. Please, try again.'));
        }
        $this->set(compact('pzMarca'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Pz Marca id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function editar($id = null)
    {
        $pzMarca = $this->PzMarcas->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $pzMarca = $this->PzMarcas->patchEntity($pzMarca, $this->request->getData());
            if ($this->PzMarcas->save($pzMarca)) {
                $this->Flash->success(__('The pz marca has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The pz marca could not be saved. Please, try again.'));
        }
        $this->set(compact('pzMarca'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Pz Marca id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function borrar($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $pzMarca = $this->PzMarcas->get($id);
        if ($this->PzMarcas->delete($pzMarca)) {
            $this->Flash->success(__('The pz marca has been deleted.'));
        } else {
            $this->Flash->error(__('The pz marca could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}

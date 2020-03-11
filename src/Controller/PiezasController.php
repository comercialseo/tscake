<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Piezas Controller
 *
 * @property \App\Model\Table\PiezasTable $Piezas
 *
 * @method \App\Model\Entity\Pieza[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class PiezasController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['PzTipos', 'PzMarcas'],
        ];
        $piezas = $this->paginate($this->Piezas);

        $this->set(compact('piezas'));
    }

    /**
     * View method
     *
     * @param string|null $id Pieza id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $pieza = $this->Piezas->get($id, [
            'contain' => ['PzTipos', 'PzMarcas'],
        ]);

        $this->set('pieza', $pieza);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $pieza = $this->Piezas->newEmptyEntity();
        if ($this->request->is('post')) {
            $pieza = $this->Piezas->patchEntity($pieza, $this->request->getData());
            if ($this->Piezas->save($pieza)) {
                $this->Flash->success(__('The pieza has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The pieza could not be saved. Please, try again.'));
        }
        $pzTipos = $this->Piezas->PzTipos->find('list', ['limit' => 200]);
        $pzMarcas = $this->Piezas->PzMarcas->find('list', ['limit' => 200]);
        $this->set(compact('pieza', 'pzTipos', 'pzMarcas'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Pieza id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $pieza = $this->Piezas->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $pieza = $this->Piezas->patchEntity($pieza, $this->request->getData());
            if ($this->Piezas->save($pieza)) {
                $this->Flash->success(__('The pieza has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The pieza could not be saved. Please, try again.'));
        }
        $pzTipos = $this->Piezas->PzTipos->find('list', ['limit' => 200]);
        $pzMarcas = $this->Piezas->PzMarcas->find('list', ['limit' => 200]);
        $this->set(compact('pieza', 'pzTipos', 'pzMarcas'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Pieza id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $pieza = $this->Piezas->get($id);
        if ($this->Piezas->delete($pieza)) {
            $this->Flash->success(__('The pieza has been deleted.'));
        } else {
            $this->Flash->error(__('The pieza could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}

<?php
namespace App\Controllers;
use App\Models\BukuModel;

class Buku extends BaseController
{
    public function index()
    {
        $model = new BukuModel();
        $keyword = $this->request->getVar('keyword');
        if ($keyword) {
            $data['buku'] = $model->like('judul', $keyword)->paginate(5);
        } else {
            $data['buku'] = $model->paginate(5);
        }
        $data['pager'] = $model->pager;
        return view('buku/index', $data);
    }

    public function create()
    {
        return view('buku/create');
    }

    public function store()
    {
        $model = new BukuModel();
        $model->save([
            'judul' => $this->request->getPost('judul'),
            'penulis' => $this->request->getPost('penulis'),
            'tahun_terbit' => $this->request->getPost('tahun_terbit')
        ]);
        return redirect()->to('/buku');
    }

    public function edit($id)
    {
        $model = new BukuModel();
        $data['buku'] = $model->find($id);
        return view('buku/edit', $data);
    }

    public function update($id)
    {
        $model = new BukuModel();
        $model->update($id, [
            'judul' => $this->request->getPost('judul'),
            'penulis' => $this->request->getPost('penulis'),
            'tahun_terbit' => $this->request->getPost('tahun_terbit')
        ]);
        return redirect()->to('/buku');
    }

    public function delete($id)
    {
        $model = new BukuModel();
        $model->delete($id);
        return redirect()->to('/buku');
    }
}

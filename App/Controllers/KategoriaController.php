<?php

namespace App\Controllers;

use App\Models\Kategoria;
use Framework\Core\BaseController;
use Framework\Http\HttpException;
use Framework\Http\Request;
use Framework\Http\Responses\Response;

class KategoriaController extends BaseController
{
    public function index(Request $request): Response
    {
        return $this->html(['kategorie' => Kategoria::getAll()]);
    }

    public function add(Request $request): Response
    {
        return $this->html(['kategoria' => new Kategoria()]);
    }

    public function edit(Request $request): Response
    {
        return $this->html(['kategoria' => $this->findKategoria($request)]);
    }

    public function save(Request $request): Response
    {
        $kategoria = (int)$request->value('id') > 0 ? $this->findKategoria($request) : new Kategoria();
        $kategoria->setFromRequest($request);
        $kategoria->save();

        return $this->redirect($this->url('kategoria.index'));
    }

    public function delete(Request $request): Response
    {
        if (!$request->isPost()) {
            throw new HttpException(405);
        }
        $this->findKategoria($request)->delete();

        return $this->redirect($this->url('kategoria.index'));
    }

    private function findKategoria(Request $request): Kategoria
    {
        $kategoria = Kategoria::getOne((int)$request->value('id'));
        if ($kategoria === null) {
            throw new HttpException(404, 'Kategória neexistuje.');
        }
        return $kategoria;
    }
}
<?php

namespace App\Controllers;

use App\Models\Komponent;
use Framework\Core\BaseController;
use Framework\Http\HttpException;
use Framework\Http\Request;
use Framework\Http\Responses\Response;

/**
 * Class KomponentController
 *
 * @package App\Controllers
 */
class KomponentController extends BaseController
{
    public function index(Request $request): Response
    {
        return $this->html(['komponenty' => Komponent::getAll()]);
    }

    public function add(Request $request): Response
    {
        return $this->html(['komponent' => new Komponent()]);
    }

    public function edit(Request $request): Response
    {
        return $this->html(['komponent' => $this->findKomponent($request)]);
    }

    public function save(Request $request): Response
    {
        $komponent = (int)$request->value('id') > 0 ? $this->findKomponent($request) : new Komponent();
        $komponent->setFromRequest($request);
        $komponent->save();

        return $this->redirect($this->url('komponent.index'));
    }

    public function delete(Request $request): Response
    {
        if (!$request->isPost()) {
            throw new HttpException(405);
        }
        $this->findKomponent($request)->delete();

        return $this->redirect($this->url('komponent.index'));
    }

    private function findKomponent(Request $request): Komponent
    {
        $komponent = Komponent::getOne((int)$request->value('id'));
        if ($komponent === null) {
            throw new HttpException(404, 'Komponent neexistuje.');
        }
        return $komponent;
    }
}

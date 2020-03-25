<?php
namespace App\Controllers;

use Psr\Http\Message\ServerRequestInterface;
use Psr\Http\Message\ResponseInterface;

use App\Models\Compra;

class ComprasController extends Controlle
{


  public function index(ServerRequestInterface $request, ResponseInterface $response)
  {
    $compras = Compra::all();

    $this->compras = $compras;

    return $this->view('compras/index',$response);
  }

  public function adicionar(ServerRequestInterface $request, ResponseInterface $response)
  {


    return $this->view('compras/create',$response);
  }

  public function salvar(ServerRequestInterface $request, ResponseInterface $response)
  {
    var_dump($request->getParsedBody());exit;




  }


}

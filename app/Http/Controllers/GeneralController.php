<?php
namespace App\Http\Controllers;
use App\Models\Producto;
use App\Models\Categoria;
use App\Models\User;
use Illuminate\Http\Request;
class GeneralController extends Controller
{
    public function index() {
        $productos = Producto::paginate();
        $categorias = Categoria::paginate();
        $usuarios = User::paginate();
        return view('welcome', compact(
            'productos',
            'categorias',
            'usuarios'
        ));
    }
    public function contact()
    {
        return view('Templates.contact');
    }
    public function store()
    {
        return view('Templates.store');
    }
    public function checkout()
    {
        return view('Templates.checkout');
    }
}

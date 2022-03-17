<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Car;
use App\Models\Categories;
use App\Models\Post;
use App\Models\Property;
use App\Models\User;
use Artesaos\SEOTools\Facades\SEOMeta;
use Artesaos\SEOTools\Facades\OpenGraph;
use Artesaos\SEOTools\Facades\SEOTools;
use Artesaos\SEOTools\Facades\TwitterCard;
use Artesaos\SEOTools\Facades\JsonLd;
use Illuminate\Http\Request;
use function PHPUnit\Framework\isNull;

class WebsiteController extends Controller
{

    public function home()
    {
        return view('web.index');
    }

    public function index()
    {
        $cars = Car::with('cover')->take(9)->inRandomOrder()->get();
        $footerCars = $this->footerCars();

        return view('web.inicio', compact('cars', 'footerCars'));
    }

    public function about()
    {
        $footerCars = $this->footerCars();
        return view('web.sobre', compact('footerCars'));
    }

    public function units()
    {
        $footerCars = $this->footerCars();
        return view('web.unidades', compact('footerCars'));
    }

    public function stock(Request $request)
    {
        $category = ($request->category ? $request->category : '');
        $min = ($request->min ? $request->min : '');
        $max = ($request->max ? $request->max : '');

        $cars = Car::with('cover')
            ->when($request->category, function($query, $category){
                $query->where('categoryslug', $category);
            })
            ->when($request->min, function($query, $min){
                $query->where('preco', '>', $min);
            })
            ->when($request->max, function($query, $max){
                $query->where('preco', '<', $max);
            })
            ->latest()->paginate(12);

        $categories = Car::distinct('marca')->orderBy('marca')->pluck('marca')->toArray();

        $footerCars = $this->footerCars();

        return view('web.veiculos', compact(['cars','categories','footerCars']));
    }

    public function stockOpen(Request $request)
    {
        $car = Car::with('img')->where('slug', $request->slug)->first();

        $opcinals = array_slice(explode(',', $car->opcionais), 0, -1);

        $complements = array_slice(explode(',', $car->complementos), 0, -1);

        $title = "$car->marca $car->modelo à venda em Santos e Praia Grande";

        SEOTools::setTitle($title);
        SEOTools::setDescription($car->opcionais);
//        SEOTools::opengraph()->setUrl('http://current.url.com');
        SEOTools::opengraph()->addProperty('type', 'article');
        SEOTools::jsonLd()->addImage($car->cover->url);

        OpenGraph::addProperty('locale', 'pt-br');
        OpenGraph::addImage($car->cover->url);

        $footerCars = $this->footerCars();

        return view('web.veiculo', compact('car', 'opcinals', 'complements','footerCars'));
    }

    public function stockPrint(Request $request)
    {
        $car = Car::with('img')->where('slug', $request->slug)->first();

        $opcinals = array_slice(explode(',', $car->opcionais), 0, -1);

        $complements = array_slice(explode(',', $car->complementos), 0, -1);

        $footerCars = $this->footerCars();

        return view('web.impressao', compact('car', 'opcinals', 'complements', 'footerCars'));
    }

    public function contact()
    {
        $footerCars = $this->footerCars();

        return view('web.contato', compact('footerCars'));
    }

    public function footerCars()
    {
        return Car::with('cover')->take(3)->orderBy('preco')->get();
    }
}

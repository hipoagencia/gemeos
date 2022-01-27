<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Car;
use App\Models\Categories;
use App\Models\Post;
use App\Models\Property;
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
        $cars = Car::with('cover')->take(10)->inRandomOrder()->get();
        return view('web.home', compact('cars'));
    }

    public function stock(Request $request)
    {
        $category = ($request->category ? $request->category : '');

        $cars = Car::with('cover')
                ->when($request->category, function($query, $category){
                    $query->where('categoryslug', $category);
                })
                ->latest()->paginate(12);
        $categories = Car::distinct('marca')->orderBy('marca')->pluck('marca')->toArray();

        return view('web.veiculos', compact(['cars','categories']));
    }

    public function stockOpen(Request $request)
    {
        $car = Car::with('img')->where('slug', $request->slug)->first();

        $opcinals = array_slice(explode(',', $car->opcionais), 0, -1);

        $complements = array_slice(explode(',', $car->complementos), 0, -1);

        $title = "$car->marca $car->modelo à venda em Santos, São vicente e Praia Grande";

        SEOTools::setTitle($title);
        SEOTools::setDescription($car->opcionais);
//        SEOTools::opengraph()->setUrl('http://current.url.com');
        SEOTools::opengraph()->addProperty('type', 'article');
        SEOTools::jsonLd()->addImage($car->cover->url);

        OpenGraph::addProperty('locale', 'pt-br');
        OpenGraph::addImage($car->cover->url);

        return view('web.veiculo', compact('car', 'opcinals', 'complements'));
    }

    public function contact()
    {
        return view('web.contato');
    }
}

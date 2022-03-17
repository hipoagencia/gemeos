<?php

// @formatter:off
/**
 * A helper file for your Eloquent Models
 * Copy the phpDocs from this file to the correct Model,
 * And remove them from this file, to prevent double declarations.
 *
 * @author Barry vd. Heuvel <barryvdh@gmail.com>
 */


namespace App\Models{
/**
 * App\Models\Car
 *
 * @property int $id
 * @property string $idStock
 * @property string $tipoveiculo
 * @property int $zerokm
 * @property string $placa
 * @property string $marca
 * @property string $modelo
 * @property string $versao
 * @property string $tipomotor
 * @property string $anofabricacao
 * @property string $anomodelo
 * @property string $cambio
 * @property int $km
 * @property int $portas
 * @property string $cor
 * @property string $combustivel
 * @property string $carroceria
 * @property string $preco
 * @property string $observacao
 * @property string $complementos
 * @property string $opcionais
 * @property string $acessorios
 * @property string $urlVideo
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string|null $slug
 * @property string|null $categoryslug
 * @property-read \App\Models\CarImages|null $cover
 * @property-read mixed $preco_venda
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\CarImages[] $img
 * @property-read int|null $img_count
 * @property-write mixed $category_slug
 * @method static \Illuminate\Database\Eloquent\Builder|Car newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Car newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Car query()
 * @method static \Illuminate\Database\Eloquent\Builder|Car whereAcessorios($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Car whereAnofabricacao($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Car whereAnomodelo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Car whereCambio($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Car whereCarroceria($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Car whereCategoryslug($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Car whereCombustivel($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Car whereComplementos($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Car whereCor($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Car whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Car whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Car whereIdStock($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Car whereKm($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Car whereMarca($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Car whereModelo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Car whereObservacao($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Car whereOpcionais($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Car wherePlaca($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Car wherePortas($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Car wherePreco($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Car whereSlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Car whereTipomotor($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Car whereTipoveiculo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Car whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Car whereUrlVideo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Car whereVersao($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Car whereZerokm($value)
 */
	class Car extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\CarImages
 *
 * @property int $id
 * @property \App\Models\Car|null $car
 * @property string $url
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|CarImages newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|CarImages newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|CarImages query()
 * @method static \Illuminate\Database\Eloquent\Builder|CarImages whereCar($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CarImages whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CarImages whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CarImages whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CarImages whereUrl($value)
 */
	class CarImages extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Categories
 *
 * @property int $id
 * @property string $name
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string|null $slug
 * @property-read \Illuminate\Database\Eloquent\Collection|\Spatie\Activitylog\Models\Activity[] $activities
 * @property-read int|null $activities_count
 * @method static \Illuminate\Database\Eloquent\Builder|Categories newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Categories newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Categories query()
 * @method static \Illuminate\Database\Eloquent\Builder|Categories whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Categories whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Categories whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Categories whereSlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Categories whereUpdatedAt($value)
 */
	class Categories extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Content
 *
 * @property int $id
 * @property string $name
 * @property string $description
 * @property int $status
 * @property string|null $title
 * @property string|null $slug
 * @property string|null $headline
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\Spatie\Activitylog\Models\Activity[] $activities
 * @property-read int|null $activities_count
 * @method static \Illuminate\Database\Eloquent\Builder|Content newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Content newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Content query()
 * @method static \Illuminate\Database\Eloquent\Builder|Content whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Content whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Content whereHeadline($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Content whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Content whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Content whereSlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Content whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Content whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Content whereUpdatedAt($value)
 */
	class Content extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\EadContent
 *
 * @property int $id
 * @property int $module_id
 * @property string $name
 * @property string $cover
 * @property string $description
 * @property string $title
 * @property string $slug
 * @property string $headline
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\Spatie\Activitylog\Models\Activity[] $activities
 * @property-read int|null $activities_count
 * @property-read \App\Models\EadModule $module
 * @method static \Illuminate\Database\Eloquent\Builder|EadContent newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|EadContent newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|EadContent query()
 * @method static \Illuminate\Database\Eloquent\Builder|EadContent whereCover($value)
 * @method static \Illuminate\Database\Eloquent\Builder|EadContent whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|EadContent whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|EadContent whereHeadline($value)
 * @method static \Illuminate\Database\Eloquent\Builder|EadContent whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|EadContent whereModuleId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|EadContent whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|EadContent whereSlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder|EadContent whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|EadContent whereUpdatedAt($value)
 */
	class EadContent extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\EadModule
 *
 * @property int $id
 * @property int $user_id
 * @property string $name
 * @property string $cover
 * @property string $description
 * @property string $title
 * @property string $slug
 * @property string $headline
 * @property int $premium
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\Spatie\Activitylog\Models\Activity[] $activities
 * @property-read int|null $activities_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Categories[] $categories
 * @property-read int|null $categories_count
 * @method static \Illuminate\Database\Eloquent\Builder|EadModule newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|EadModule newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|EadModule query()
 * @method static \Illuminate\Database\Eloquent\Builder|EadModule whereCover($value)
 * @method static \Illuminate\Database\Eloquent\Builder|EadModule whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|EadModule whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|EadModule whereHeadline($value)
 * @method static \Illuminate\Database\Eloquent\Builder|EadModule whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|EadModule whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|EadModule wherePremium($value)
 * @method static \Illuminate\Database\Eloquent\Builder|EadModule whereSlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder|EadModule whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|EadModule whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|EadModule whereUserId($value)
 */
	class EadModule extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Gallery
 *
 * @property int $id
 * @property string $name
 * @property string $description
 * @property int $status
 * @property string|null $title
 * @property string|null $slug
 * @property string|null $headline
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\Spatie\Activitylog\Models\Activity[] $activities
 * @property-read int|null $activities_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\GalleryImages[] $images
 * @property-read int|null $images_count
 * @method static \Illuminate\Database\Eloquent\Builder|Gallery newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Gallery newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Gallery query()
 * @method static \Illuminate\Database\Eloquent\Builder|Gallery whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Gallery whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Gallery whereHeadline($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Gallery whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Gallery whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Gallery whereSlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Gallery whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Gallery whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Gallery whereUpdatedAt($value)
 */
	class Gallery extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\GalleryImages
 *
 * @property int $id
 * @property int $gallery
 * @property string $path
 * @property int|null $cover
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property int|null $order
 * @method static \Illuminate\Database\Eloquent\Builder|GalleryImages newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|GalleryImages newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|GalleryImages query()
 * @method static \Illuminate\Database\Eloquent\Builder|GalleryImages whereCover($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GalleryImages whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GalleryImages whereGallery($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GalleryImages whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GalleryImages whereOrder($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GalleryImages wherePath($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GalleryImages whereUpdatedAt($value)
 */
	class GalleryImages extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Group
 *
 * @property int $id
 * @property string $name
 * @property int $shareInitial
 * @property int $shareFinal
 * @property string $description
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\Spatie\Activitylog\Models\Activity[] $activities
 * @property-read int|null $activities_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\User[] $users
 * @property-read int|null $users_count
 * @method static \Illuminate\Database\Eloquent\Builder|Group newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Group newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Group query()
 * @method static \Illuminate\Database\Eloquent\Builder|Group whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Group whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Group whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Group whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Group whereShareFinal($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Group whereShareInitial($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Group whereUpdatedAt($value)
 */
	class Group extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Lead
 *
 * @property-read \Illuminate\Database\Eloquent\Collection|\Spatie\Activitylog\Models\Activity[] $activities
 * @property-read int|null $activities_count
 * @property-read mixed $created_at
 * @property mixed $date_of_birth
 * @property-read \App\Models\Product|null $product
 * @property-read \App\Models\LeadSource|null $source
 * @property-read \App\Models\User $user
 * @method static \Illuminate\Database\Eloquent\Builder|Lead newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Lead newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Lead query()
 */
	class Lead extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\LeadSource
 *
 * @property-read \Illuminate\Database\Eloquent\Collection|\Spatie\Activitylog\Models\Activity[] $activities
 * @property-read int|null $activities_count
 * @method static \Illuminate\Database\Eloquent\Builder|LeadSource newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|LeadSource newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|LeadSource query()
 */
	class LeadSource extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Order
 *
 * @property int $id
 * @property int $user_id
 * @property string $total
 * @property string|null $status
 * @property string|null $code
 * @property string|null $reference
 * @property string|null $observation
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string|null $payment_date
 * @property string|null $type
 * @property string|null $link_boleto
 * @property-read \Illuminate\Database\Eloquent\Collection|\Spatie\Activitylog\Models\Activity[] $activities
 * @property-read int|null $activities_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\OrderProducts[] $products
 * @property-read int|null $products_count
 * @property-read \App\Models\User $user
 * @method static \Illuminate\Database\Eloquent\Builder|Order newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Order newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Order query()
 * @method static \Illuminate\Database\Eloquent\Builder|Order whereCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Order whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Order whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Order whereLinkBoleto($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Order whereObservation($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Order wherePaymentDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Order whereReference($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Order whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Order whereTotal($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Order whereType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Order whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Order whereUserId($value)
 */
	class Order extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\OrderProducts
 *
 * @property int $id
 * @property \App\Models\Order $order
 * @property int $product
 * @property int $product_amount
 * @property float $price
 * @property float $price_total
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Product $produc
 * @method static \Illuminate\Database\Eloquent\Builder|OrderProducts newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|OrderProducts newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|OrderProducts query()
 * @method static \Illuminate\Database\Eloquent\Builder|OrderProducts whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OrderProducts whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OrderProducts whereOrder($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OrderProducts wherePrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OrderProducts wherePriceTotal($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OrderProducts whereProduct($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OrderProducts whereProductAmount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OrderProducts whereUpdatedAt($value)
 */
	class OrderProducts extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Post
 *
 * @property int $id
 * @property string $name
 * @property string $cover
 * @property int $user_id
 * @property string $description
 * @property string $title
 * @property string $slug
 * @property string $headline
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\Spatie\Activitylog\Models\Activity[] $activities
 * @property-read int|null $activities_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Categories[] $categories
 * @property-read int|null $categories_count
 * @property-read \App\Models\User $user
 * @method static \Illuminate\Database\Eloquent\Builder|Post newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Post newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Post query()
 * @method static \Illuminate\Database\Eloquent\Builder|Post whereCover($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Post whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Post whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Post whereHeadline($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Post whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Post whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Post whereSlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Post whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Post whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Post whereUserId($value)
 */
	class Post extends \Eloquent implements \Spatie\Searchable\Searchable {}
}

namespace App\Models{
/**
 * App\Models\Product
 *
 * @property int $id
 * @property string $name
 * @property string $description
 * @property float $price
 * @property int $status
 * @property string|null $title
 * @property string|null $slug
 * @property string|null $headline
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\Spatie\Activitylog\Models\Activity[] $activities
 * @property-read int|null $activities_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Categories[] $categories
 * @property-read int|null $categories_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\ProductImages[] $images
 * @property-read int|null $images_count
 * @method static \Illuminate\Database\Eloquent\Builder|Product newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Product newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Product query()
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereHeadline($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product wherePrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereSlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereUpdatedAt($value)
 */
	class Product extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\ProductImages
 *
 * @property int $id
 * @property int $product
 * @property string $path
 * @property int|null $cover
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property int $order
 * @method static \Illuminate\Database\Eloquent\Builder|ProductImages newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ProductImages newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ProductImages query()
 * @method static \Illuminate\Database\Eloquent\Builder|ProductImages whereCover($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductImages whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductImages whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductImages whereOrder($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductImages wherePath($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductImages whereProduct($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductImages whereUpdatedAt($value)
 */
	class ProductImages extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Property
 *
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\PropertyImages[] $cover
 * @property-read int|null $cover_count
 * @property-read mixed $preco_venda
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\PropertyImages[] $img
 * @property-read int|null $img_count
 * @method static \Illuminate\Database\Eloquent\Builder|Property newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Property newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Property query()
 */
	class Property extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\PropertyImages
 *
 * @property-read \App\Models\Property|null $property
 * @method static \Illuminate\Database\Eloquent\Builder|PropertyImages newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PropertyImages newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PropertyImages query()
 */
	class PropertyImages extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\User
 *
 * @property int $id
 * @property string $name
 * @property string $email
 * @property \Illuminate\Support\Carbon|null $email_verified_at
 * @property string $password
 * @property string|null $remember_token
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property int|null $is_admin
 * @property string|null $last_login_at
 * @property string|null $last_login_ip
 * @property string|null $genre
 * @property string|null $document
 * @property string|null $date_of_birth
 * @property string|null $cover
 * @property string|null $zipcode
 * @property string|null $street
 * @property string|null $number
 * @property string|null $complement
 * @property string|null $neighborhood
 * @property string|null $state
 * @property string|null $city
 * @property string|null $telephone
 * @property string|null $cell
 * @property string|null $last_name
 * @property string|null $email_verified_token
 * @property int|null $asaasId
 * @property int|null $group_id
 * @property-read \Illuminate\Database\Eloquent\Collection|\Spatie\Activitylog\Models\Activity[] $activities
 * @property-read int|null $activities_count
 * @property-read mixed $url_cover
 * @property-read \App\Models\Group|null $group
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection|\Illuminate\Notifications\DatabaseNotification[] $notifications
 * @property-read int|null $notifications_count
 * @property-read \App\Models\Order|null $orders
 * @property-read \Illuminate\Database\Eloquent\Collection|\Spatie\Permission\Models\Permission[] $permissions
 * @property-read int|null $permissions_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\Spatie\Permission\Models\Role[] $roles
 * @property-read int|null $roles_count
 * @method static \Database\Factories\UserFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|User newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User permission($permissions)
 * @method static \Illuminate\Database\Eloquent\Builder|User query()
 * @method static \Illuminate\Database\Eloquent\Builder|User role($roles, $guard = null)
 * @method static \Illuminate\Database\Eloquent\Builder|User users()
 * @method static \Illuminate\Database\Eloquent\Builder|User whereAsaasId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereCell($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereCity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereComplement($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereCover($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereDateOfBirth($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereDocument($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereEmailVerifiedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereEmailVerifiedToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereGenre($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereGroupId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereIsAdmin($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereLastLoginAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereLastLoginIp($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereLastName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereNeighborhood($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereNumber($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereRememberToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereState($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereStreet($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereTelephone($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereZipcode($value)
 */
	class User extends \Eloquent {}
}


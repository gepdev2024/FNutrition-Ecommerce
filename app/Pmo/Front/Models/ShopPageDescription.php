<?php
#s-pmo/Core/Front/Models/ShopPageDescription.php
namespace App\Pmo\Front\Models;

use Illuminate\Database\Eloquent\Model;

class ShopPageDescription extends Model
{
    use \App\Pmo\Front\Models\ModelTrait;
    
    protected $primaryKey = ['lang', 'page_id'];
    public $incrementing  = false;
    protected $guarded    = [];
    public $timestamps    = false;
    public $table = SC_DB_PREFIX.'shop_page_description';
    protected $connection = SC_CONNECTION;
}
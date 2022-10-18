<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = [
        'mainDepartment_id',
        'subDepartment_id',
        'Product_Name',
        'Product_NameAr',
        'Long_Description',
        'Short_Description',
        'Supplier_Source',
        'Variation_Name1',
        'Option_for_Variation1',
        'Variation_Name2',
        'Option_for_Variation2',
        'Variation_Name3',
        'Option_for_Variation3',
        'Price',
        'Currency',
        'Stock',
        'SKU',
        'Weight',
        'Length',
        'Width',
        'Height',
        'Item_image1',
        'Item_image2',
        'Item_image3',
        'Item_image4',
        'Item_image5',
        'Item_image6',
        'Item_image7',
        'Item_image8',
        'Item_image9',
    ];
    public function main_departments()
    {
        return $this->belongsTo(MainDePartment::class, 'mainDepartment_id', 'id');
    }
    public function sub_departments()
    {
        return $this->belongsTo(SubDepartment::class, 'subDepartment_id', 'id');
    }
}

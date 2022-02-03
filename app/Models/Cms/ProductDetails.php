<?php

namespace App\Models\Cms;

use CodeIgniter\Model;

class ProductDetails extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'products_details';
    protected $useAutoIncrement = false;
    protected $insertID         = 0;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = [
        'pro_id',
        'benefits_image',
        'sub_cat_id',
        'category_id',
        'category_alias_name',
        'category_name',
        'sub_category_alias_name',
        'sub_category_name',
        'product_base_price',
        'product_sell_price',
        'model_id',
        'brand_machine_name',
        'brand_name',
        'brand_thumbnail_image',
        'brand_year',
        'brand_added_by',
        'brand_action_by',
        'brand_id',
        'model_machine_name',
        'name',
        'thumbnail',
        'model_year',
        'city_id',
        'city_country',
        'city_state',
        'city_name',
        'car_name',
        'city_image_thumbnail',
        'specification_id',
        'mileage',
        'engine',
        'max_power',
        'torque',
        'wheel_size',
        'seats',
        'color',
        'overview_id',
        'make_year',
        'registraion_year',
        'fuel',
        'kms_driven',
        'engine_displacenent',
        'no_of_owner',
        'rto',
        'insurance_type',
        'transmission',
        'product_create_time',
        'product_alias_name',
        'product_name',
        'product_category',
        'product_thumbnail',
        'added_by',
        'action_by',
        'benefits_name',
        'benefits_icon'
    ];

    public function getAllProduct($brand = null, $minYear = null, $maxYear = null, $fuels = null, $price = null, $vehicleTypes = null, $ownerTypes = null, $transmissions = null, $kiloMeter = null)
    {
        $query = 'SELECT * FROM product_details ';

        $query .= 'WHERE category_id = 1 ';
        if ($brand) {
            $brandString = trim(json_encode($brand), '[]');
            $query .= 'AND brand_name IN (' .  $brandString . ') ';
        }

        if ($minYear && $maxYear) {
            $query .= 'AND brand_year BETWEEN ' . $minYear .' AND ' . $maxYear . ' ';
        }

        if ($fuels) {
            $fuelString = trim(json_encode($fuels), '[]');
            $query .= 'AND fuel IN (' .  $fuelString . ') ';
        }

        if ($price) {
            $t = explode('-', $price);
            $query .= 'AND product_sell_price BETWEEN ' . trim($t[0], ' ') .' AND ' . trim($t[1], ' ') . ' ';
        }

        if ($vehicleTypes) {
            $vehicleTypeString = trim(json_encode($vehicleTypes), '[]');
            $query .= 'AND sub_category_name IN (' .  $vehicleTypeString . ') ';
        }

        if ($ownerTypes) {
            $ownerTypeString = trim(json_encode($ownerTypes), '[]');
            $query .= 'AND no_of_owner IN (' .  $ownerTypeString . ') ';
        }

        if ($transmissions) {
            $transmissionsString = trim(json_encode($transmissions), '[]');
            $query .= 'AND transmission IN (' .  $transmissionsString . ') ';
        }

        if ($kiloMeter) {
            $t = explode('-', $kiloMeter);
            $query .= 'AND kms_driven BETWEEN ' . trim($t[0], ' ') .' AND ' . trim($t[1], ' ') . ' ';
        }
       
        return $this->db->query($query)->getResultObject();
    }

}

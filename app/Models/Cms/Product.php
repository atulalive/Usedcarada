<?php

namespace App\Models\Cms;

use CodeIgniter\Model;

class Product extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'products';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $insertID         = 0;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['pro_id', 'created_datetime', 'updated_datetime', 'product_alias_name', 
                                    'product_name', 'product_category', 'product_thumbnail', 'added_by', 'action_by', 'deleted'];

    // Dates
    protected $useTimestamps = false;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_datetime';
    protected $updatedField  = 'updated_datetime';
    protected $deletedField  = 'deleted_at';

    // Validation
    protected $validationRules      = [];
    protected $validationMessages   = [];
    protected $skipValidation       = false;
    protected $cleanValidationRules = true;

    // Callbacks
    protected $allowCallbacks = true;
    protected $beforeInsert   = [];
    protected $afterInsert    = [];
    protected $beforeUpdate   = [];
    protected $afterUpdate    = [];
    protected $beforeFind     = [];
    protected $afterFind      = [];
    protected $beforeDelete   = [];
    protected $afterDelete    = [];

    function product_list($data=null)
    {   
        if ($data['print']) {
            echo "<pre></br>";
            print_r( $this->db->lastQuery); die;
            echo "</pre>";
        }
        if(session()->get('user_type') == 1){
            $query = $this->db->query("SELECT products.pro_id, products.created_datetime,  products.product_name, products.product_alias_name, products.product_category, products.product_thumbnail, products_price.product_base_price, products_price.product_sell_price, product_brand.brand_name, product_model.name as model_name 
                                    FROM products AS products 
                                    INNER JOIN products_price AS products_price ON products_price.pro_id = products.pro_id AND products_price.deleted = 0 
                                    INNER JOIN product_brand_model_mapping ON product_brand_model_mapping.products_id = products.pro_id 
                                    INNER JOIN product_brand ON product_brand.id = product_brand_model_mapping.brand_id 
                                    INNER JOIN product_model ON product_model.id = product_brand_model_mapping.model_id 
                                    WHERE products.deleted = 0 ORDER BY ".$data['sorting_column']." ".$data['sort']." ");  
        }else if(session()->get('user_type') == 3){
            $query = $this->db->query("SELECT products.pro_id, products.created_datetime, products.product_name, products.product_alias_name, products.product_category, products.product_thumbnail, products_price.product_base_price, products_price.product_sell_price, product_brand.brand_name, product_model.name as model_name 
                                    FROM products AS products 
                                    INNER JOIN products_price AS products_price ON products_price.pro_id = products.pro_id AND products_price.deleted = 0 
                                    INNER JOIN product_brand_model_mapping ON product_brand_model_mapping.products_id = products.pro_id 
                                    INNER JOIN product_brand ON product_brand.id = product_brand_model_mapping.brand_id 
                                    INNER JOIN product_model ON product_model.id = product_brand_model_mapping.model_id 
                                    WHERE products.deleted = 0 AND products.added_by = ". session()->get('id') ."
                                    ORDER BY ".$data['sorting_column']." ".$data['sort']." ");  
        }else {
            $query = $this->db->query("SELECT products.pro_id, products.created_datetime, products.product_name, products.product_alias_name, products.product_category, products.product_thumbnail, products_price.product_base_price, products_price.product_sell_price, product_brand.brand_name, product_model.name as model_name 
                                    FROM products AS products 
                                    INNER JOIN products_price AS products_price ON products_price.pro_id = products.pro_id AND products_price.deleted = 0 
                                    INNER JOIN product_brand_model_mapping ON product_brand_model_mapping.products_id = products.pro_id 
                                    INNER JOIN product_brand ON product_brand.id = product_brand_model_mapping.brand_id 
                                    INNER JOIN product_model ON product_model.id = product_brand_model_mapping.model_id 
                                    WHERE products.deleted = 0  
                                    ORDER BY ".$data['sorting_column']." ".$data['sort']." ");  
        }      
        return $query->getResultArray();
    }

     ###########################
    ### PRoduct Image #########
    ###########################

    function product_image($data=null)
    {
        if ($data['print']) {
            echo "<pre></br>";
            print_r( $this->db->lastQuery); die;
            echo "</pre>";
        }

        if (!empty($data) && is_array($data)) {
            $query = $this->db->query("SELECT products_image.product_image_thumbnail, products_image.product_image 
                                    FROM products_image AS products_image 
                                    INNER JOIN products AS products ON products.pro_id = products_image.pro_id AND products.deleted = 0 
                                    WHERE products_image.deleted = 0 AND products_image.pro_id= " . $data['pro_id'] . " AND products.product_alias_name = '" . $data['product_alias_name'] . "'");
            return $query->getResultArray();
        }
    }
}

<?php

namespace App\Models;

use CodeIgniter\Model;

class Products extends Model
{
    protected $DBGroup = 'default';

    protected $table = 'products';
    protected $primaryKey = 'pro_id';
    protected $returnType = 'array';
    protected $useTimestamps = true;
    protected $allowedFields = ['product_name', 'created_date', 'updated_date', 'deleted'];
    protected $createdField = 'created_date';
    protected $updatedField = 'updated_date';

    ###########################
    ### PRoduct Info ##########
    ###########################

    function product_detail($data)
    {   
        if ($data['print']) {
            echo "<pre></br>";
            print_r( $this->db->lastQuery); die;
            echo "</pre>";
        }

        if (!empty($data['id'])) {
            $query = $this->db->query("SELECT products.pro_id, products.product_name, products.product_alias_name, products.product_category, products.product_thumbnail, products_price.product_base_price, products_price.product_sell_price 
                                        FROM products AS products 
                                        INNER JOIN products_price AS products_price ON products_price.pro_id = products.pro_id AND products_price.deleted = 0 
                                        WHERE products.deleted = 0 AND products.product_alias_name = '" . $data['id'] . "' ORDER BY products.pro_id  DESC ");            
        } else if (!empty($data['product_sell_price'])) {
            $query = $this->db->query("SELECT products.pro_id, products.product_name, products.product_alias_name, products.product_category, products.product_thumbnail, products_price.product_base_price, products_price.product_sell_price 
                                        FROM products AS products 
                                        INNER JOIN products_price AS products_price ON products_price.pro_id = products.pro_id AND products_price.deleted = 0 AND products_price.product_sell_price = '" . $data['product_sell_price'] . "' 
                                        WHERE products.deleted = 0");            
        } else if (!empty($data['sort'])) {
            $query = $this->db->query("SELECT products.pro_id, products.product_name, products.product_alias_name, products.product_category, products.product_thumbnail, products_price.product_base_price, products_price.product_sell_price 
                                        FROM products AS products 
                                        INNER JOIN products_price AS products_price ON products_price.pro_id = products.pro_id AND products_price.deleted = 0 
                                        WHERE products.deleted = 0 ORDER BY ".$data['sorting_column']." ".$data['sort']." ");  
        } else if (!empty($data['product_sell_max_price']) && !empty($data['product_sell_min_price'])) {
            $query = $this->db->query("SELECT products.pro_id, products.product_name, products.product_alias_name, products.product_category, products.product_thumbnail, products_price.product_base_price, products_price.product_sell_price 
                                        FROM products AS products 
                                        INNER JOIN products_price AS products_price ON products_price.pro_id = products.pro_id AND products_price.deleted = 0 
                                        WHERE products.deleted = 0 AND products_price.product_sell_price BETWEEN " . $data['product_sell_min_price'] . " AND  " . $data['product_sell_max_price'] . " 
                                        ORDER BY products_price.product_sell_price  ASC");            
        } else{
            $query = $this->db->query("SELECT products.pro_id, products.product_name, products.product_alias_name, products.product_category, products.product_thumbnail, products_price.product_base_price, products_price.product_sell_price 
                                        FROM products AS products 
                                        INNER JOIN products_price AS products_price ON products_price.pro_id = products.pro_id AND products_price.deleted = 0 
                                        WHERE products.deleted = 0 ");  
        }
        return $query->getResultArray();
    }

    ###########################
    ### PRoduct Image #########
    ###########################

    function product_image($data)
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

    ###########################
    ### PRoduct Category ######
    ###########################

    function get_product_category($data)
    {
        if ($data['print']) {
            echo "<pre></br>";
            print_r( $this->db->lastQuery); die;
            echo "</pre>";
        }

        if (!empty($data)) {
            $query = $this->db->query("SELECT products_category.id, products_category.category_alias_name, products_category.category_name, products_category.deleted 
                                    FROM products_category AS products_category 
                                    WHERE products_category.deleted = 0 AND products_category.id= " . $data['id'] . " ");
            return $query->getResultArray();
        }else{
            $query = $this->db->query("SELECT products_category.id, products_category.category_alias_name, products_category.category_name, products_category.deleted 
                                    FROM products_category AS products_category 
                                    WHERE products_category.deleted = 0 ");
            return $query->getResultArray();
        }
    }
    
    ###########################
    ## PRoduct Category / SUB #
    ###########################

    function get_product_sub_category($data)
    {
        if ($data['print']) {
            echo "<pre></br>";
            print_r( $this->db->lastQuery); die;
            echo "</pre>";
        }

        if (!empty($data['id'])) {
            $query = $this->db->query("SELECT products_sub_category.id AS sub_cat_id, products_sub_category.sub_category_alias_name, products_sub_category.sub_category_name, products_sub_category.deleted
                                    FROM products_sub_category AS products_sub_category
                                    LEFT JOIN products_category AS products_category 
                                    ON products_category.id = products_sub_category.cat_id AND products_category.deleted = 0
                                    WHERE products_sub_category.deleted = 0 AND products_category.category_alias_name = '".$data['category']."' AND products_sub_category.id=". $data['id']);
            return $query->getResultArray();
        }else{
            $query = $this->db->query("SELECT products_sub_category.id AS sub_cat_id, products_sub_category.sub_category_alias_name, products_sub_category.sub_category_name, products_sub_category.deleted
                                    FROM products_sub_category AS products_sub_category
                                    LEFT JOIN products_category AS products_category 
                                    ON products_category.id = products_sub_category.cat_id AND products_category.deleted = 0
                                    WHERE products_sub_category.deleted = 0 AND products_category.category_alias_name = '".$data['category']."'");
            return $query->getResultArray();
        }
    }

    ###########################
    ### PRoduct SUB Category ##
    ###########################

    function get_sub_category_product_list($data)
    {
        if ($data['print']) {
            echo "<pre></br>";
            print_r( $this->db->lastQuery); die;
            echo "</pre>";
        }

        if (!empty($data['sub_cat_id'])) {
            // print_r($data);
            $query = $this->db->query("SELECT products.pro_id, products.product_name, products.product_alias_name, products.product_category, products.product_thumbnail, products_price.product_base_price, products_price.product_sell_price 
                                    FROM products AS products 
                                    INNER JOIN products_price AS products_price ON products_price.pro_id = products.pro_id AND products_price.deleted = 0 
                                    INNER JOIN products_category_mapping AS products_category_mapping ON products_category_mapping.pro_id = products.pro_id AND products_category_mapping.cat_id = 1 AND products_category_mapping.sub_cat_id = ".$data['sub_cat_id']." 
                                    WHERE products.deleted = 0");
        }else{
            $query = $this->db->query("SELECT products.pro_id, products.product_name, products.product_alias_name, products.product_category, products.product_thumbnail, products_price.product_base_price, products_price.product_sell_price 
                                    FROM products AS products 
                                    INNER JOIN products_price AS products_price ON products_price.pro_id = products.pro_id AND products_price.deleted = 0 
                                    INNER JOIN products_category_mapping AS products_category_mapping ON products_category_mapping.pro_id = products.pro_id AND products_category_mapping.cat_id = 1 
                                    WHERE products.deleted = 0");
        }
        return $query->getResultArray();
    }

    ###########################
    ### PRoduct Price Range ###
    ###########################

    function getBudegetPriceRange($data)
    {
        if ($data['print']) {
            echo "<pre></br>";
            print_r( $this->db->lastQuery); die;
            echo "</pre>";
        }

        if (!empty($data['product_max_price'])) {
            $query = $this->db->query("SELECT `id`, `display_price_range`, `product_price`, CONVERT(SUBSTRING_INDEX(product_price,'-',1),UNSIGNED INTEGER) AS min_price, CONVERT(SUBSTRING_INDEX(product_price,'-',-1),UNSIGNED INTEGER) AS max_price, `deleted` 
                                FROM `products_price_range` 
                                WHERE `deleted` = 0 
                                AND product_price BETWEEN 0 AND ".$data['product_max_price']." ORDER BY display_price_range");
        }else{
            $query = $this->db->query("SELECT `id`, `display_price_range`, `product_price`, CONVERT(SUBSTRING_INDEX(product_price,'-',1),UNSIGNED INTEGER) AS min_price, CONVERT(SUBSTRING_INDEX(product_price,'-',-1),UNSIGNED INTEGER) AS max_price, `deleted` 
                                FROM `products_price_range` 
                                WHERE `deleted` = 0 ");
        }
        return $query->getResultArray();
    }

    ###########################
    ### PRoduct Overview ######
    ###########################

    function getProductOverview($data)
    {
        if ($data['print']) {
            echo "<pre></br>";
            print_r( $this->db->lastQuery); die;
            echo "</pre>";
        }

        if (!empty($data['product_id'])) {
            $query = $this->db->query("SELECT `id`, `pro_id`, `make_year`, `registraion_year`, `fuel`, `kms_driven`, `engine_displacenent`, `no_of_owner`, `rto`, `transmission`, `insurance_type`, `deleted` 
                                    FROM `product_overview` 
                                    WHERE `deleted` = 0 AND `pro_id` = ".$data['product_id']." LIMIT 1");
        } else {
            $query = $this->db->query("SELECT `id`, `pro_id`, `make_year`, `registraion_year`, `fuel`, `kms_driven`, `engine_displacenent`, `no_of_owner`, `rto`, `transmission`, `insurance_type`, `deleted` 
                                    FROM `product_overview` 
                                    WHERE `deleted` = 0");
        }
        if ($data['single']) {
            return $query->getFirstRow();
        }else {
            return $query->getResultArray();
        }
    }
}

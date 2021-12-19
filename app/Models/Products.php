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

    function product_detail($data=null)
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

    ###########################
    ### PRoduct Category ######
    ###########################

    function get_product_category($data=null)
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

    function get_product_sub_category($data=null)
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

    function get_sub_category_product_list($data=null)
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

    function getBudegetPriceRange($data=null)
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
        }else if (!empty($data['price_id'])) {
            $query = $this->db->query("SELECT `id`, `display_price_range`, `product_price`, CONVERT(SUBSTRING_INDEX(product_price,'-',1),UNSIGNED INTEGER) AS min_price, CONVERT(SUBSTRING_INDEX(product_price,'-',-1),UNSIGNED INTEGER) AS max_price, `deleted` 
                                FROM `products_price_range` 
                                WHERE `deleted` = 0 AND `id`=".$data['price_id']);
        }else{
            $query = $this->db->query("SELECT `id`, `display_price_range`, `product_price`, CONVERT(SUBSTRING_INDEX(product_price,'-',1),UNSIGNED INTEGER) AS min_price, CONVERT(SUBSTRING_INDEX(product_price,'-',-1),UNSIGNED INTEGER) AS max_price, `deleted` 
                                FROM `products_price_range` 
                                WHERE `deleted` = 0 ");
        }
        if ($data['single']) {
            return $query->getFirstRow();
        }else {
            return $query->getResultArray();
        }
    }

    ###########################
    ### PRoduct Overview ######
    ###########################

    function getProductOverview($data=null)
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
    ###########################
    ## PRoduct Specifications #
    ###########################

    function getProductspecifications($data=null)
    {
        if ($data['print']) {
            echo "<pre></br>";
            print_r( $this->db->lastQuery); die;
            echo "</pre>";
        }

        if (!empty($data['product_id'])) {
            $query = $this->db->query("SELECT `id`, `pro_id`, `mileage`, `engine`, `max_power`, `torque`, `wheel_size`, `seats`, `color`, `deleted` 
                                    FROM `product_specifications` 
                                    WHERE `deleted` = 0 AND `pro_id` = ".$data['product_id']." LIMIT 1");
        } else {
            $query = $this->db->query("SELECT `id`, `pro_id`, `mileage`, `engine`, `max_power`, `torque`, `wheel_size`, `seats`, `color`, `deleted`
                                    FROM `product_specifications` 
                                    WHERE `deleted` = 0");
        }
        if ($data['single']) {
            return $query->getFirstRow();
        }else {
            return $query->getResultArray();
        }
    }

    ###########################
    ### Popular Brands ########
    ###########################

    function get_product_brands($data=null)

    {
        if ($data['print']) {
            echo "<pre></br>";
            print_r( $this->db->lastQuery); die;
            echo "</pre>";
        }

        if (!empty($data['brand_id'])) {
            $query = $this->db->query("SELECT `id`, `machine_name`, `brand_name`, `brand_thumbnail_image`, `deleted` 
                                    FROM `product_brand` 
                                    WHERE `deleted` = 0 AND `id` = ".$data['brand_id']." LIMIT 1");
        } else if (!empty($data['brand_machine_name'])) {
            $query = $this->db->query("SELECT `id`, `machine_name`, `brand_name`, `brand_thumbnail_image`, `deleted` 
                                    FROM `product_brand` 
                                    WHERE `deleted` = 0 AND `machine_name` = '".$data['brand_machine_name']."' LIMIT 1");
        } else if ($data['is_brand']) {
            $query = $this->db->query("SELECT DISTINCT product_brand.`id`, product_brand.`machine_name`, product_brand.`brand_name`, product_brand.`brand_thumbnail_image`, product_brand.`deleted` 
                                    FROM product_brand 
                                    INNER JOIN `product_model` ON `product_model`.`brand_id` = product_brand.id AND product_brand.deleted = 0 
                                    WHERE product_brand.deleted = 0 
                                    ORDER BY product_brand.id ASC ");
        } else {
            $query = $this->db->query("SELECT `id`, `machine_name`, `brand_name`, `brand_thumbnail_image`, `deleted` 
                                    FROM `product_brand` 
                                    WHERE `deleted` = 0");
        }

        if ($data['single']) {
            return $query->getFirstRow();
        }else {
            return $query->getResultArray();
        }
    }    

    ###########################
    ### Product Model #########
    ###########################

    function get_product_model($data=null)
    {
        if ($data['print']) {
            echo "<pre></br>";
            print_r( $this->db->lastQuery); die;
            echo "</pre>";
        }
        if (!empty($data['brand_id'])) {
            $query = $this->db->query("SELECT `id`,  `brand_id`, `machine_name`, `name`, `thumbnail`, `year`, `deleted` 
                                    FROM `product_model` 
                                    WHERE `deleted` = 0 AND `brand_id` = ".$data['brand_id']);
        } else {
            $query = $this->db->query("SELECT `id`,  `brand_id`, `machine_name`, `name`, `thumbnail`, `year`, `deleted` 
                                    FROM `product_model` 
                                    WHERE `deleted` = 0");
        }


        if ($data['single']) {
            return $query->getFirstRow();
        }else {
            return $query->getResultArray();
        }
    }

    ###########################
    ### Search by Budget ######
    ###########################

    function get_search_budget_model($data=null)
    {
        if ($data['print']) {
            echo "<pre></br>";
            print_r( $this->db->lastQuery); die;
            echo "</pre>";
        }
        // print_r($data);
        if (!empty($data['type'])) {
            if ($data['type'] == 'budget') {
                $getBudegetPriceRange = $this->getBudegetPriceRange(['price_id'=>$data['first'], 'single'=>true]);
                $query = $this->db->query("SELECT DISTINCT products.pro_id, products.product_alias_name, products.product_name, products.product_category, products.product_thumbnail, product_overview.`make_year`, `registraion_year`, `fuel`, `kms_driven`, `engine_displacenent`, `no_of_owner`, `rto`, `transmission`, `insurance_type`,
                                    product_brand.machine_name AS brand_machine_name, `name` AS brand_name, product_model.machine_name AS model_machine_name, `name` AS model_name, product_model.`year` AS model_year, products_price.`id`, `product_sell_price`, '".$getBudegetPriceRange->display_price_range."' AS display_price_range
                                    FROM products 
                                    INNER JOIN product_overview ON product_overview.pro_id = products.pro_id AND product_overview.deleted = 0
                                    INNER JOIN products_price ON products_price.pro_id = products.pro_id AND products_price.deleted = 0
                                    INNER JOIN product_brand_model_mapping ON product_brand_model_mapping.products_id = products.pro_id AND product_brand_model_mapping.deleted = 0
                                    INNER JOIN product_brand ON product_brand.id = product_brand_model_mapping.brand_id AND product_brand.deleted = 0 #AND product_brand.machine_name = 'maruti'
                                    INNER JOIN product_model ON product_model.id = product_brand_model_mapping.model_id AND product_model.deleted = 0 #AND product_model.machine_name = 'celerio'
                                    INNER JOIN products_category_mapping ON products_category_mapping.pro_id = products.pro_id AND products_category_mapping.deleted = 0
                                    INNER JOIN products_sub_category ON products_sub_category.id = products_category_mapping.sub_cat_id AND products_sub_category.deleted = 0 AND products_sub_category.sub_category_alias_name = '".$data['second']."'
                                    WHERE products.deleted = 0 AND products_price.product_sell_price BETWEEN ".$getBudegetPriceRange->min_price." AND ".$getBudegetPriceRange->max_price." 
                                    ORDER BY products.pro_id DESC");
            }else if ($data['type'] == 'model') {
                $query = $this->db->query("SELECT DISTINCT products.pro_id, products.product_alias_name, products.product_name, products.product_category, products.product_thumbnail, product_overview.`make_year`, `registraion_year`, `fuel`, `kms_driven`, `engine_displacenent`, `no_of_owner`, `rto`, `transmission`, `insurance_type`,
                                    product_brand.machine_name AS brand_machine_name, `name` AS brand_name, product_model.machine_name AS model_machine_name, `name` AS model_name, product_model.`year` AS model_year, products_price.`id`, `product_sell_price`
                                    FROM products 
                                    INNER JOIN product_overview ON product_overview.pro_id = products.pro_id AND product_overview.deleted = 0
                                    INNER JOIN products_price ON products_price.pro_id = products.pro_id AND products_price.deleted = 0
                                    INNER JOIN product_brand_model_mapping ON product_brand_model_mapping.products_id = products.pro_id AND product_brand_model_mapping.deleted = 0
                                    INNER JOIN product_brand ON product_brand.id = product_brand_model_mapping.brand_id AND product_brand.deleted = 0 AND product_brand.machine_name = '".$data['first']."'
                                    INNER JOIN product_model ON product_model.id = product_brand_model_mapping.model_id AND product_model.deleted = 0 AND product_model.machine_name = '".$data['second']."'
                                    WHERE products.deleted = 0 
                                    ORDER BY products.pro_id DESC");
            }else if ($data['type'] == 'brand') {
                $getbrandID = $this->get_product_brands(['brand_machine_name'=>$data['second']]);
                $query = $this->db->query("SELECT DISTINCT products.pro_id, products.product_alias_name, products.product_name, products.product_category, products.product_thumbnail, product_overview.`make_year`, `registraion_year`, `fuel`, `kms_driven`, `engine_displacenent`, `no_of_owner`, `rto`, `transmission`, `insurance_type`,
                                    product_brand.machine_name AS brand_machine_name, `name` AS brand_name, product_model.machine_name AS model_machine_name, `name` AS model_name, product_model.`year` AS model_year, products_price.`id`, `product_sell_price`
                                    FROM products 
                                    INNER JOIN product_overview ON product_overview.pro_id = products.pro_id AND product_overview.deleted = 0
                                    INNER JOIN products_price ON products_price.pro_id = products.pro_id AND products_price.deleted = 0
                                    INNER JOIN product_brand_model_mapping ON product_brand_model_mapping.products_id = products.pro_id AND product_brand_model_mapping.deleted = 0
                                    INNER JOIN product_brand ON product_brand.id = product_brand_model_mapping.brand_id AND product_brand.deleted = 0 AND product_brand.machine_name = '".$data['first']."'
                                    INNER JOIN product_model ON product_model.id = product_brand_model_mapping.model_id AND product_model.deleted = 0 
                                    WHERE products.deleted = 0 
                                    ORDER BY products.pro_id DESC");
            }
            }else if ($data['type'] == 'top_cities') {
            $getbrandID = $this->get_product_top_cities(['top_cities_city_state'=>$data['third']]);
        
            $query = $this->db->query("SELECT DISTINCT products.pro_id, products.product_alias_name, products.product_name, products.product_category, products.product_thumbnail, product_overview.`make_year`, `registraion_year`, `fuel`, `kms_driven`, `engine_displacenent`, `no_of_owner`, `rto`, `transmission`, `insurance_type`,
                               top_cities_city_state AS top_cities_city_state, `name` AS city_name, top_cities.city_state AS model_machine_name, `name` AS model_name, product_model.`year` AS model_year, products_price.`id`, `product_sell_price`
                                FROM products 
                                INNER JOIN product_overview ON product_overview.pro_id = products.pro_id AND product_overview.deleted = 0
                                INNER JOIN products_price ON products_price.pro_id = products.pro_id AND products_price.deleted = 0
                                INNER JOIN product_cities_mapping ON product_cities_mapping.products_id = products.pro_id AND product_cities_mapping.deleted = 0
                                INNER JOIN top_cities ON top_cities_city_id = product_cities_mapping.city_id AND top_cities.deleted = 0 AND top_cities.city_state = '".$data['first']."'
                                INNER JOIN top_cities ON top_cities_product.id = product_cities_mapping.product_id AND top_cities.deleted = 0 
                                WHERE top_cities.deleted = 0 
                                ORDER BY products.pro_id DESC");
                                
        }
        
            
        

        if ($data['single']) {
            return $query->getFirstRow();
        }else {
            return $query->getResultArray();
        }
    }
  ###########################
    ### Top city ########
    ###########################

    function get_top_cities($data=null)

    {
        if ($data['print']) {
            echo "<pre></br>";
            print_r( $this->db->lastQuery); die;
            echo "</pre>";
        }

        if (!empty($data['top_cities_id'])) {
            $query = $this->db->query("SELECT `id`, `city_country`, `city_state`, `city_name`,`car_name`,`city_image_thumbnail`, `deleted` 
                                    FROM `top_cities` 
                                    WHERE `deleted` = 0 AND `id` = ".$data['id']." LIMIT 1");
        } else if (!empty($data['top_cities_city_country'])) {
            $query = $this->db->query("SELECT `id`, `city_country`, `city_state`, `city_name`,`car_name`,`city_image_thumbnail`, `deleted`  
                                    FROM `top_cities` 
                                    WHERE `deleted` = 0 AND `city_country` = '".$data['top_cities_city_country']."' LIMIT 1");
       } else if ($data['is_top_cities']) {
        $query = $this->db->query("SELECT DISTINCT top_cities.`id`, top_cities.`city_country`, top_cities.`city_state`, top_cities.`city_name`,top_cities.`car_name`top_cities.`city_image_thumbnail`  top_cities.`deleted` 
                                FROM top_cities
                                INNER JOIN `product_cities_mapping` ON `product_cities_mapping`.`city_id` = product_id AND top_cities.deleted = 0 
                                WHERE top_cities.deleted = 0 
                                ORDER BY top_cities.id ASC ");
    } else {
        $query = $this->db->query("SELECT `id`, `city_country`, `city_state`, `city_name`,`car_name`,`city_image_thumbnail`,`deleted` 
                                FROM `top_cities` 
                                WHERE `deleted` = 0");
    }

        if ($data['single']) {
            return $query->getFirstRow();
        }else {
            return $query->getResultArray(); 
        }
    }    

}

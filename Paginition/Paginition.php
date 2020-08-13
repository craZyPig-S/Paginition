<?php

/*
=================== Devlope By Qrolic Technology                ===================
=================== Created Date :- 13-08-2020                  ===================
=================== Latest Upload :- Currently Under Creation   ===================
*/

// This Library Is Use For Customise paginition 

class Paginition
{
    private $data = array(
        'url'                       => '',
        'total_rows'                => 0,
        'page_items'                => 10,
        'f_page'                    => 1,
        'first_link_text'           => '&lsaquo; First',
        'next_link_text'            => '&gt; Next',
        'previous_link_text'        => '&lt; Previous',
        'last_link_text'            => 'Last &rsaquo;',
        'full_tag_name'             => 'ul',
        'first_tag_name'            => 'li',
        'last_tag_name'             => 'li',
        'cur_tag_names'             => array('strong'),
        'next_tag_name'             => array('strong'),
        'prev_tag_name'             => array('strong'),
    );
    private $data_class = array(
        'full_tag_class'    => array(),
        'first_tag_class'   => array(),
        'last_tag_class'    => array(),
        'cur_tag_class'     => array(),
        'next_tag_class'    => array(),
        'prev_tag_class'    => array(),
        'attribute_class'   => array(),
    );
    private $paginition_query_string = '';

    public function __construct($array = array(), $array_class = array())
    {
        if (!empty($array['url'])) {
            $this->set_url($array['url']);
        }
        if (!empty($array['total_rows'])) {
            $this->set_total_rows($array['total_rows']);
        }
        if (!empty($array['page_items'])) {
            $this->set_page_items($array['page_items']);
        }
        if (!empty($array['f_page'])) {
            $this->set_f_page($array['f_page']);
        }
        if (!empty($array['first_link_text'])) {
            $this->set_first_link_text($array['first_link_text']);
        }
        if (!empty($array['next_link_text'])) {
            $this->set_next_link_text($array['next_link_text']);
        }
        if (!empty($array['previous_link_text'])) {
            $this->set_previous_link_text($array['previous_link_text']);
        }
        if (!empty($array['last_link_text'])) {
            $this->set_last_link_text($array['last_link_text']);
        }
        if (!empty($array['full_tag_name'])) {
            $this->set_full_tag_name($array['full_tag_name']);
        }
        if (!empty($array['first_tag_name'])) {
            $this->set_first_tag_name($array['first_tag_name']);
        }
        if (!empty($array['last_tag_name'])) {
            $this->set_last_tag_name($array['last_tag_name']);
        }
        if (!empty($array['cur_tag_names'])) {
            $this->set_cur_tag_names($array['cur_tag_names']);
        }
        if (!empty($array['next_tag_name'])) {
            $this->set_next_tag_name($array['next_tag_name']);
        }
        if (!empty($array['prev_tag_name'])) {
            $this->set_full_tag_class($array['prev_tag_name']);
        }
        if (!empty($array_class['full_tag_class'])) {
            $this->set_full_tag_class($array_class['full_tag_class']);
        }
        if (!empty($array_class['first_tag_class'])) {
            $this->set_prev_tag_name($array_class['first_tag_class']);
        }
        if (!empty($array_class['last_tag_class'])) {
            $this->set_last_tag_class($array_class['last_tag_class']);
        }
        if (!empty($array_class['cur_tag_class'])) {
            $this->set_cur_tag_class($array_class['cur_tag_class']);
        }
        if (!empty($array_class['next_tag_class'])) {
            $this->set_next_tag_class($array_class['next_tag_class']);
        }
        if (!empty($array_class['prev_tag_class'])) {
            $this->set_prev_tag_class($array_class['prev_tag_class']);
        }
        if (!empty($array_class['attribute_class'])) {
            $this->set_prev_tag_class($array_class['attribute_class']);
        }
        return $this->init();
    }
    private function init()
    {
        if($this->get_total_rows() / $this->get_page_items() > 1){
            $page = $this->get_total_rows() / $this->get_page_items();
            if(!empty($main = $this->get_full_tag_name())){       
                $this->paginition_query_string = '<'.$main.' {class}> {data} </'.$main.'>';
            } else {
                echo "full Tag Is Not Defind.";die;
            }
            if(!empty($class = $this->get_full_tag_class())){
                $this->paginition_query_string = str_replace('{class}','class="'.implode(' ',$class).'"',$this->paginition_query_string);
            } else {
                $this->paginition_query_string = str_replace('{class}','',$this->paginition_query_string);
            }
            $data_page_number = '';
            for ($i=0; $i < $page; $i++) { 
                if(!empty($first_tag = $this->get_first_tag_name())){
                    $data_page_number .= '<'.$first_tag.' {class}>{data}</'.$first_tag.'>';
                }
                if(!empty($class = $this->get_first_tag_class())){
                    $data_page_number = str_replace('{class}','class="'.implode(' ',$class).'"',$data_page_number);
                } else {
                    $data_page_number = str_replace('{class}','',$data_page_number);
                }

            }

            $this->paginition_query_string = str_replace('{data}',$data_page_number,$this->paginition_query_string);
        }
        return $this->get_paginition_query_string();
    }
    public function set_url($url)
    {
        $this->data['url'] = $url;
    }
    public function get_url()
    {
        return $this->data['url'];
    }
    public function get_total_rows()
    {
        return $this->data['total_rows'];
    }
    public function set_total_rows($totalRows)
    {
        $this->data['total_rows'] = $totalRows;
    }
    public function get_page_items()
    {
        return $this->data['page_items'];
    }
    public function set_page_items($pageItems)
    {
        $this->data['page_items'] = $pageItems;
    }
    public function get_f_page()
    {
        return $this->data['f_page'];
    }
    public function set_f_page($fPage)
    {
        $this->data['f_page'] = $fPage;
    }
    public function get_first_link_text()
    {
        return $this->data['first_link_text'];
    }
    public function set_first_link_text($firstLinkText)
    {
        $this->data['first_link_text'] = $firstLinkText;
    }
    public function get_next_link_text()
    {
        return $this->data['next_link_text'];
    }
    public function set_next_link_text($nextLinkText)
    {
        $this->data['next_link_text'] = $nextLinkText;
    }
    public function get_previous_link_text()
    {
        return $this->data['previous_link_text'];
    }
    public function set_previous_link_text($previousLinkText)
    {
        $this->data['previous_link_text'] = $previousLinkText;
    }
    public function get_last_link_text()
    {
        return $this->data['last_link_text'];
    }
    public function set_last_link_text($lastLinkText)
    {
        $this->data['last_link_text'] = $lastLinkText;
    }
    public function get_full_tag_name()
    {
        return $this->data['full_tag_name'];
    }
    public function set_full_tag_name($fullTagName)
    {
        $this->data['full_tag_name'] = $fullTagName;
    }
    public function get_first_tag_name()
    {
        return $this->data['first_tag_name'];
    }
    public function set_first_tag_name($firstTagName)
    {
        $this->data['firstTagName'] = $firstTagName;
    }
    public function get_last_tag_name()
    {
        return $this->data['last_tag_name'];
    }
    public function set_last_tag_name($lastTagName)
    {
        $this->data['last_tag_name'] = $lastTagName;
    }
    public function get_cur_tag_names()
    {
        return $this->data['cur_tag_names'];
    }
    public function set_cur_tag_names($curTagNames)
    {
        $this->data['cur_tag_names'] = $curTagNames;
    }
    public function get_next_tag_name()
    {
        return $this->data['next_tag_name'];
    }
    public function set_next_tag_name($nextTagName)
    {
        $this->data['next_tag_name'] = $nextTagName;
    }
    public function get_prev_tag_name()
    {
        return $this->data['prev_tag_name'];
    }
    public function set_prev_tag_name($prevTagName)
    {
        $this->data['prev_tag_name'] = $prevTagName;
    }
    public function get_paginition_query_string()
    {
        return $this->paginition_query_string;
    }
    public function get_full_tag_class()
    {
        return $this->data_class['full_tag_class'];
    }
    public function set_full_tag_class($fullTagClass)
    {
        $this->data_class['full_tag_class'] = $fullTagClass;
    }
    public function get_first_tag_class()
    {
        $this->data_class['first_tag_class'];
    }
    public function set_first_tag_class($firstTagClass)
    {
        $this->data_class['first_tag_class'] = $firstTagClass;
    }
    public function get_last_tag_class()
    {
        return $this->data_class['last_tag_class'];
    }
    public function set_last_tag_class($lastTagClass)
    {
        $this->data_class['last_tag_class'] = $lastTagClass;
    }
    public function get_cur_tag_class()
    {
        return $this->data_class['cur_tag_class'];
    }
    public function set_cur_tag_class($curTagClass)
    {
        $this->data_class['cur_tag_class'] = $curTagClass;
    }
    public function get_next_tag_class()
    {
        $this->data_class['next_tag_class'];
    }
    public function set_next_tag_class($nextTagClass)
    {
        $this->data_class['next_tag_class'] = $nextTagClass;
    }
    public function get_prev_tag_class()
    {
        return $this->data_class['prev_tag_class'];
    }
    public function set_prev_tag_class($prevTagClass)
    {
        $this->data_class['prev_tag_class'] = $prevTagClass;
    }
    public function get_attribute_class()
    {
        return $this->data_class['attribute_class'];
    }
    public function set_attribute_class($attribute_class)
    {
        $this->data_class['attribute_class'] = $attribute_class;
    }
}

<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
    class Menu
    {
        private $arr_menu;
        public function __construct($arr)
        {
            $this->arr_menu = $arr;
        }
        public function construir_menu()
        {
            $ret_menu = "<nav><ul>";
            foreach($this->arr_menu as $opcion){
                $ret_menu .= "<li>" . $opcion . "</li>";
            }
            $ret_menu .= "</ul></nav>";
            return $ret_menu ;
        }
    }
 
/* End of file menu.php */
/* Location: ./application/libraries/menu.php */
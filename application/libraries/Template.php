<?php  

class Template {

        protected $CI;

        // We'll use a constructor, as you can't directly call a function
        // from a property definition.
        public function __construct()
        {
                // Assign the CodeIgniter super-object
                $this->CI =& get_instance();
        }

        public function view($data = null)
        {
                if (!isset($data['title']))
                        $data['title'] = null;
                if (!isset($data['url']))
                        $data['url'] = null;
                if (!isset($data['data']))
                        $data['data'] = null;
                $this->CI->load->view('admin/components/v_menu',
                        [
                                'title' => $data['title']
                        ]
                );
                if (!isset($data['content'])) {
                        $this->CI->load->view('admin/v_blank');
                } else if(isset($data['content'])) {
                        $this->CI->load->view($data['content'],$data['data']);
                }
                $this->CI->load->view('admin/components/v_footer');
        }


}
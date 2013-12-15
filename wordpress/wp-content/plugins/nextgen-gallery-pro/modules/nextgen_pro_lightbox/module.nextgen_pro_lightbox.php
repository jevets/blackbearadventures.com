<?php
/*
{
	Module: photocrati-nextgen_pro_lightbox,
    Depends: { photocrati-lightbox }
}
 */

define('NEXTGEN_PRO_LIGHTBOX_MODULE_NAME', 'photocrati-nextgen_pro_lightbox');

class M_NextGen_Pro_Lightbox extends C_Base_Module
{
	function define($context=FALSE)
	{
		parent::define(
			NEXTGEN_PRO_LIGHTBOX_MODULE_NAME,
			'NextGEN Pro Lightbox',
			'Provides a lightbox with integrated commenting, social sharing, and e-commerce functionality',
            '0.6',
			'http://www.photocrati.com',
			'Photocrati Media',
			'http://www.photocrati.com',
			$context
		);

		include_once('class.nextgen_pro_lightbox_installer.php');
		C_Photocrati_Installer::add_handler($this->module_id, 'C_NextGen_Pro_Lightbox_Installer');
	}

	function _register_adapters()
	{
        // controllers & their helpers
        $this->get_registry()->add_adapter('I_Display_Type_Controller', 'A_NextGen_Pro_Lightbox_Effect_Code');
        $this->get_registry()->add_adapter('I_Display_Type_Controller', 'A_NextGen_Pro_Lightbox_Resources');
		$this->get_registry()->add_adapter('I_Display_Type_Controller', 'A_NextGen_Pro_Lightbox_Triggers_Resources');
//		$this->get_registry()->add_adapter('I_Display_Type_Controller', 'A_NextGen_Pro_Lightbox_Transient_Creator');
		$this->get_registry()->add_adapter('I_MVC_View', 'A_NextGen_Pro_Lightbox_Triggers_Element');
		$this->get_registry()->add_adapter('I_Lightbox_Library_Mapper', 'A_Pro_Lightbox_Mapper');

        // routes & rewrites
        $this->get_registry()->add_adapter('I_Router', 'A_NextGen_Pro_Lightbox_Routes');

        if (is_admin()) {
            // settings forms
            $this->get_registry()->add_adapter('I_Display_Type_Form', 'A_NextGen_Pro_Lightbox_Triggers_Form');
            $this->get_registry()->add_adapter('I_Form', 'A_NextGen_Pro_Lightbox_Form', NEXTGEN_PRO_LIGHTBOX_MODULE_NAME . '_basic');
            $this->get_registry()->add_adapter('I_Form_Manager', 'A_NextGen_Pro_Lightbox_Forms');
        }
	}

    function _register_utilities()
    {
        // The second controller is for handling lightbox display
        $this->get_registry()->add_utility('I_NextGen_Pro_Lightbox_Controller', 'C_NextGen_Pro_Lightbox_Controller');
        $this->get_registry()->add_utility('I_NextGen_Pro_Lightbox_Trigger_Manager', 'C_NextGen_Pro_Lightbox_Trigger_Manager');
        $this->get_registry()->add_utility('I_OpenGraph_Controller', 'C_OpenGraph_Controller');
    }

    function _register_hooks()
    {
        add_action('wp_enqueue_scripts', array(
            $this->get_registry()->get_utility('I_Display_Type_Controller'),
            'enqueue_pro_lightbox_resources'
        ));

		add_action('init', array(&$this, 'serve_fontawesome'));
    }

    /**
     * Registers FontAwesome CSS
     *
     * To reduce code reuse this is its own function. This is a special case as
     * IIS will serve 404 responses for woff files.
     */
    static function enqueue_fontawesome_css()
    {
        if (wp_style_is('fontawesome', 'registered'))
        {
            wp_enqueue_style('fontawesome');
        } else if (strpos(strtolower($_SERVER['SERVER_SOFTWARE']), 'microsoft-iis') !== FALSE) {
            wp_enqueue_style('fontawesome', site_url('/?ngg_serve_fontawesome_css=1'));
        }
        else {
            $router = C_Component_Registry::get_instance()->get_utility('I_Router');
            wp_enqueue_style('fontawesome', $router->get_static_url('photocrati-nextgen_pro_lightbox#icons/font-awesome.css'));
        }
    }


	function serve_fontawesome()
	{
		if (isset($_REQUEST['ngg_serve_fontawesome_woff'])) {
			$fs = C_Fs::get_instance();
			$abspath = $fs->find_static_abspath('photocrati-nextgen_pro_lightbox#icons/font/fontawesome-webfont.woff');
			if ($abspath) {
				header("Content-Type: application/x-font-woff");
				readfile($abspath);
				throw new E_Clean_Exit();
			}
		}
		elseif (isset($_REQUEST['ngg_serve_fontawesome_css'])) {
			$fs = C_Fs::get_instance();
			$abspath = $fs->find_static_abspath('photocrati-nextgen_pro_lightbox#icons/font-awesome.css');
			if ($abspath) {
				header('Content-Type: text/css');
				echo str_replace('font/fontawesome-webfont.woff', site_url('/?ngg_serve_fontawesome_woff=1'), file_get_contents($abspath));
				throw new E_Clean_Exit();
			}
		}
	}

    function get_type_list()
    {
        return array(
			'A_NextGen_Pro_Lightbox_Transient_Creator'	=> 'adapter.nextgen_pro_lightbox_transient_creator.php',
            'A_Nextgen_Pro_Lightbox_Effect_Code' => 'adapter.nextgen_pro_lightbox_effect_code.php',
            'A_Nextgen_Pro_Lightbox_Form' => 'adapter.nextgen_pro_lightbox_form.php',
            'A_Nextgen_Pro_Lightbox_Forms' => 'adapter.nextgen_pro_lightbox_forms.php',
			'A_Pro_Lightbox_Mapper'		=>	'adapter.pro_lightbox_mapper.php',
            'C_NextGen_Pro_Lightbox_Installer' => 'class.nextgen_pro_lightbox_installer.php',
            'A_Nextgen_Pro_Lightbox_Triggers_Element' => 'adapter.nextgen_pro_lightbox_triggers_element.php',
            'A_Nextgen_Pro_Lightbox_Triggers_Form' => 'adapter.nextgen_pro_lightbox_triggers_form.php',
            'A_Nextgen_Pro_Lightbox_Resources' => 'adapter.nextgen_pro_lightbox_resources.php',
            'A_Nextgen_Pro_Lightbox_Routes' => 'adapter.nextgen_pro_lightbox_routes.php',
            'A_Nextgen_Pro_Lightbox_Triggers_Resources' => 'adapter.nextgen_pro_lightbox_triggers_resources.php',
            'C_Nextgen_Pro_Lightbox_Controller' => 'class.nextgen_pro_lightbox_controller.php',
            'C_Opengraph_Controller' => 'class.opengraph_controller.php',
            'C_Nextgen_Pro_Lightbox_Trigger' => 'class.nextgen_pro_lightbox_trigger.php',
            'C_Nextgen_Pro_Lightbox_Trigger_Manager' => 'class.nextgen_pro_lightbox_trigger_manager.php',
            'I_Nextgen_Pro_Lightbox_Controller' => 'interface.nextgen_pro_lightbox_controller.php',
            'I_Nextgen_Pro_Lightbox_Trigger_Manager' => 'interface.nextgen_pro_lightbox_trigger_manager.php',
            'I_Opengraph_Controller' => 'interface.opengraph_controller.php',
            'M_Nextgen_Pro_Lightbox' => 'module.nextgen_pro_lightbox.php'
        );
    }
}

new M_NextGen_Pro_Lightbox;

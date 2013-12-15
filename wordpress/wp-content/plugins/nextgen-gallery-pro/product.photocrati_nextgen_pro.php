<?php

/***
	{
		Product: photocrati-nextgen-pro,
		Depends: { photocrati-nextgen }
	}
***/

class P_Photocrati_NextGen_Pro extends C_Base_Product
{
	static $modules = array();

    function define_modules()
    {
        $modules = array();

        if (is_admin()) {
            $modules = array_merge($modules, array(
                'photocrati-auto_update',
                'photocrati-auto_update-admin'
            ));
        }

        $modules = array_merge($modules, array(
            'photocrati-comments',
            'photocrati-galleria',
            'photocrati-nextgen_pro_slideshow',
            'photocrati-nextgen_pro_horizontal_filmstrip',
            'photocrati-nextgen_pro_lightbox',
            'photocrati-nextgen_pro_thumbnail_grid',
            'photocrati-nextgen_pro_blog_gallery',
            'photocrati-nextgen_pro_film',
            'photocrati-nextgen_pro_masonry',
            'photocrati-nextgen_pro_albums'
        ));

        self::$modules = $modules;
    }

	function define()
	{
		parent::define(
			'photocrati-nextgen-pro',
			'Photocrati NextGEN Pro',
			'Photocrati NextGEN Pro',
			NEXTGEN_GALLERY_PRO_VERSION,
			'http://www.nextgen-gallery.com',
			'Photocrati Media',
			'http://www.photocrati.com'
		);

        $this->define_modules();
		$module_path = path_join(dirname(__FILE__), 'modules');
		$registry = $this->get_registry();
		$registry->set_product_module_path($this->module_id, $module_path);
		$registry->add_module_path($module_path, TRUE, FALSE);

		foreach (self::$modules as $module_name) $registry->load_module($module_name);

		include_once('class.nextgen_pro_installer.php');
		C_Photocrati_Installer::add_handler($this->module_id, 'C_NextGen_Pro_Installer');
	}
}

new P_Photocrati_NextGen_Pro();

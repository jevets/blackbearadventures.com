<?php

class A_NextGen_Pro_Album_Routes extends Mixin
{
	function initialize()
	{
		$this->object->add_pre_hook(
			'render',
			get_class(),
			get_class(),
			'rewrite_nextgen_pro_album_urls'
		);
	}

	function rewrite_nextgen_pro_album_urls($displayed_gallery)
	{
		$album_types = array(
			NEXTGEN_PRO_ALBUMS_MODULE_NAME,
			NEXTGEN_PRO_LIST_ALBUM,
			NEXTGEN_PRO_GRID_ALBUM
		);
        $router = $this->get_registry()->get_utility('I_Router');
		$app = $router->get_routed_app();
		$slug = '/'.C_NextGen_Settings::get_instance()->router_param_slug;

		// Get the original display type
		$original_display_type = isset($displayed_gallery->display_settings['original_display_type']) ?
			$displayed_gallery->display_settings['original_display_type'] : '';

		if (in_array($displayed_gallery->display_type, $album_types)) {
			$app->rewrite('{*}'.$slug.'/page/{\d}{*}',			'{1}'.$slug.'/page--{2}{3}', FALSE, TRUE);
			$app->rewrite('{*}'.$slug.'/page--{*}',				'{1}'.$slug.'/page--{2}', FALSE, TRUE);
			$app->rewrite('{*}'.$slug.'/{\w}',					'{1}'.$slug.'/album--{2}');
			$app->rewrite('{*}'.$slug.'/{\w}/{\w}',				'{1}'.$slug.'/album--{2}/gallery--{3}');
			$app->rewrite('{*}'.$slug.'/{\w}/{\w}/{\w}{*}',		'{1}'.$slug.'/album--{2}/gallery--{3}/{4}{5}');
		}
		elseif(in_array($original_display_type, $album_types)) {
			$app->rewrite("{*}{$slug}/album--{\\w}",                    "{1}{$slug}/{2}");
			$app->rewrite("{*}{$slug}/album--{\\w}/gallery--{\\w}",     "{1}{$slug}/{2}/{3}");
			$app->rewrite("{*}{$slug}/album--{\\w}/gallery--{\\w}/{*}", "{1}{$slug}/{2}/{3}/{4}");
		}
		$app->do_rewrites();
	}
}
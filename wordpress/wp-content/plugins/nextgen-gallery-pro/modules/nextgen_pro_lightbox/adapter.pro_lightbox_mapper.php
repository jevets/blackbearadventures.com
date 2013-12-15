<?php

class A_Pro_Lightbox_Mapper extends Mixin
{
	function initialize()
	{
		$this->object->add_post_hook(
			'set_defaults',
			get_class(),
			get_class(),
			'set_nextgen_pro_lightbox_defaults'
		);
	}

	function set_nextgen_pro_lightbox_defaults($entity)
	{
		if ($entity->name == NEXTGEN_PRO_LIGHTBOX_MODULE_NAME)
		{
			$this->object->_set_default_value($entity, 'display_settings', 'background_color', '');
			$this->object->_set_default_value($entity, 'display_settings', 'enable_routing', 1);
			$this->object->_set_default_value($entity, 'display_settings', 'icon_color', '');
			$this->object->_set_default_value($entity, 'display_settings', 'router_slug', 'gallery');
            $this->object->_set_default_value($entity, 'display_settings', 'carousel_background_color', '');
            $this->object->_set_default_value($entity, 'display_settings', 'carousel_text_color', '');
            $this->object->_set_default_value($entity, 'display_settings', 'enable_comments', 1);
            $this->object->_set_default_value($entity, 'display_settings', 'fullscreen_double_tap', 0);
            $this->object->_set_default_value($entity, 'display_settings', 'image_crop', 0);
            $this->object->_set_default_value($entity, 'display_settings', 'image_pan', 0);
            $this->object->_set_default_value($entity, 'display_settings', 'interaction_pause', 1);
            $this->object->_set_default_value($entity, 'display_settings', 'sidebar_background_color', '');
            $this->object->_set_default_value($entity, 'display_settings', 'slideshow_speed', '5');
            $this->object->_set_default_value($entity, 'display_settings', 'style', '');
            $this->object->_set_default_value($entity, 'display_settings', 'touch_transition_effect', 'slide');
            $this->object->_set_default_value($entity, 'display_settings', 'transition_effect', 'slide');
            $this->object->_set_default_value($entity, 'display_settings', 'transition_speed', '0.4');
		}
	}
}

<?php

class A_NextGen_Pro_Lightbox_Routes extends Mixin
{
    function initialize()
    {
        $this->object->add_pre_hook(
            'serve_request',
            'Add route for lightbox iframe targets',
            get_class(),
            'add_nextgen_pro_lightbox_routes'
        );
    }

    function add_nextgen_pro_lightbox_routes()
    {
        $app = $this->create_app('/nextgen-pro-lightbox-gallery');
        $app->rewrite("/{id}", "/id--{id}");
        $app->route('/', 'I_NextGen_Pro_Lightbox_Controller#index');

        $app = $this->create_app('/nextgen-pro-lightbox-load-images');
        $app->rewrite("/{id}", "/id--{id}");
        $app->route('/', 'I_NextGen_Pro_Lightbox_Controller#load_images');

        $app = $this->create_app('/nextgen-share');
		$app->rewrite('/{displayed_gallery_id}/{image_id}/{named_size}', '/displayed_gallery_id--{displayed_gallery_id}/image_id--{image_id}/named_size--{named_size}', FALSE, TRUE);
        $app->rewrite("/{displayed_gallery_id}/{image_id}", '/displayed_gallery_id--{displayed_gallery_id}/image_id--{image_id}/named_size--thumb');
        $app->route('/', 'I_OpenGraph_Controller#index');
    }
}

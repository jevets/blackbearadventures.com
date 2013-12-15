<?php

class A_Comment_Controller extends Mixin
{
    function get_comments_action()
    {
        ob_start();

        $mapper = $this->object->get_registry()->get_utility('I_Comment_Mapper');
        $response = array('responses' => array());

        add_filter('comments_template', array(&$this, 'comments_template'));

        $ids  = explode(',', $this->object->param('id'));

        $page = $this->object->param('page', NULL, 0);
        $type = $this->object->param('type');

        foreach ($ids as $id) {
            $post = $mapper->find_or_create($type, $id, $this->object->param('from'));
            $comments_data = $post->get_comments_data($page);
            $response['responses'][$id] = $comments_data;
        }

        ob_end_clean();

        return $response;
    }

    function comments_template($template)
    {
        $fs = $this->get_registry()->get_utility('I_Fs');
        if (strpos($template, 'ngg_comments') !== FALSE)
            $template = $fs->find_abspath('photocrati-comments#templates/comments.php');
        return $template;
    }
}

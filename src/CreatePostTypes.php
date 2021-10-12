<?php

namespace MCPT;

class CreatePostTypes
{
    /**
     * The displayed post name
     *
     * @var string
     */
    public $postName;

    /**
     * Arguments array that shall be passe to 
     * register custom post type in newPostType method
     *
     * @var array
     */
    public $args;

    /**
     * Constructor, injects the args array as dependency
     *
     * @param array $args
     */
    public function __construct($postName)
    {
        $this->postName = $postName;
        $this->args = $this->postsFileArgs($postName);
    }
    
    /**
     * This methods fetches the file with all required args
     *
     * @param array $postName
     * @return array
     */
    public function postsFileArgs($postName){
        $path = plugin_dir_path(__FILE__);
        require_once $path . 'theposttypes/' . $postName . '.php';
        return $args;
    }

    /**
     * Abstraction above register_custom_post_type
     *
     * @return void
     */
    public function newPostType()
    {
        add_action( 'init', function(){
            register_post_type( $this->postName, $this->args );
        });
    }
}

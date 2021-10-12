<?php 

namespace MCPT;

defined('ABSPATH') || exit;

use MCPT\CreatePostTypes;

class MyCustomPostTypes
{
    public function __construct()
    {
        $this->seekThePostTypes();
    }

    /**
     * Search the folder theposttypes for the cpts infos
     *
     * @return void
     */
    public function seekThePostTypes()
    {
        $filesRepresentingCPTs = scandir(plugin_dir_path( __FILE__ ) . 'theposttypes');
        
        foreach($filesRepresentingCPTs as $theCPTFilename){

            if($theCPTFilename === '.' || $theCPTFilename === '..'){
                continue;
            }
            $theCPTName = str_replace('.php', '', $theCPTFilename);
            $registerPostType = new CreatePostTypes($theCPTName);
            $registerPostType->newPostType();
        }
    }
}

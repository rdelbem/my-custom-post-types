<?php 

namespace MCPT;

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

            $theCPTName = explode('.', $theCPTFilename);
            $theCPTName = $theCPTName[0]; //the name is at zero

            $registerPostType = new CreatePostTypes($theCPTName);
            $registerPostType->newPostType();
        }
    }
}

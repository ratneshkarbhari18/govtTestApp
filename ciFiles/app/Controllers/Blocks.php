<?php

namespace App\Controllers;

use App\Controllers\PageLoader;
use App\Models\AuthModel;
use App\Models\BlockModel;


class Blocks extends BaseController
{

    public function create(){

        $objToInsert = array(
            "title" => $this->request->getPost("title"),
            "slug" => uniqid(),
            "incharge" => $this->request->getPost("incharge")
        );

        $blockModel = new BlockModel();

        $inserted = $blockModel->insert($objToInsert);

        $pageLoader = new PageLoader();

        if ($inserted) {
            $pageLoader->add_block("Block Added","");
        } else {
            $pageLoader->add_block("","Block Not Added");
        }

        
        

    }

    public function delete(){

        $blockId = $this->request->getPost("id");

        $blockModel = new BlockModel();

        $deleted = $blockModel->delete($blockId);

        $pageLoader = new PageLoader();

        if ($deleted) {
            $pageLoader->blocks("Block deleted","");
        } else {
            $pageLoader->blocks("","Block Not deleted");
        }

    }

}
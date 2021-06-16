<?php

namespace App\Controllers;

use App\Models\AuthModel;
use App\Models\BlockModel;
use App\Models\DistrictModel;
use App\Models\ReportsModel;

class Reports extends BaseController{

    public function create_report(){

        $report = $this->request->getFile('reportPDF');
    
        $reportRandomName = $report->getRandomName();

        $report->move('assets/reports', $reportRandomName);

        $session = session();

        $dataToInsert = array(
            "title" => $this->request->getPost("title"),
            "slug" => uniqid(),
            "fileName" => $reportRandomName,
            "date" => date("d-m-Y"),
            "sender" => $session->user_id,
            "reciever" => $this->request->getPost("reciever")
        );

        $reportsModel = new ReportsModel();

        $sent = $reportsModel->insert($dataToInsert);

        $pageLoader = new PageLoader();

        if ($sent) {
            $pageLoader->report_to_cm("Report Sent","");
        } else {
            $pageLoader->report_to_cm("","Report not sent");
        }
        

    }

}
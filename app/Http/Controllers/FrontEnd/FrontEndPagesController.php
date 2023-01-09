<?php

namespace App\Http\Controllers\FrontEnd;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FrontEndPagesController extends Controller
{



    // payments page default
    public function trainings(){

        return view("frontend.pages_frontend.trainings.index");
    }

    // facility management
    
    public function facility_management(){

        return ""facility management"";
    }

    
    //expat orienttion
    public function expat_orientaion(){

        return ""expert management"";
    }
    // consulting_services_management
    public function consulting_services_management(){

        return ""consulting_services_management"";
    }

    //qhse_services
    public function qhse_services(){

        return ""qhse_services"";
    }


    //niche_supplies
    public function niche_supplies(){

        return ""niche_supplies"";
    }



    //procurement_buy_house
    public function procurement_buy_house(){

        return ""procurement_buy_house"";
    }

    //bespoke_workspace_adaptations
    public function bespoke_workspace_adaptations(){

        return ""bespoke_workspace_adaptations"";
    }
   

}

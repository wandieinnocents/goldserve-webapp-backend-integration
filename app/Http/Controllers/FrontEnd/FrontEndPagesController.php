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

        return view("frontend.pages_frontend.facility_management.index");
    }

    
    //expat orienttion
    public function expat_orientaion(){

        return view("frontend.pages_frontend.expat_orientaion.index");
    }
    // consulting_services_management
    public function consulting_services_management(){

        return view("frontend.pages_frontend.consulting_services_management.index");
    }

    //qhse_services
    public function qhse_services(){

        return view("frontend.pages_frontend.qhse_services.index");
    }


    //niche_supplies
    public function niche_supplies(){

        return view("frontend.pages_frontend.niche_supplies.index");
    }



    //procurement_buy_house
    public function procurement_buy_house(){

        return view("frontend.pages_frontend.procurement_buy_house.index");
    }

    //bespoke_workspace_adaptations
    public function bespoke_workspace_adaptations(){

        return view("frontend.pages_frontend.bespoke_workspace_adaptations.index");
    }

    //techncal_mpower
    public function techncal_mpower(){

        return view("frontend.pages_frontend.techncal_mpower.index");
    }
   
   

}

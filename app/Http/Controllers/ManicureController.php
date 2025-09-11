<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class ManicureController extends Controller
{
    public function index(): View{
        return view('manicure.manicure');
    }
    public function basicIdealCombined(): View{
        return view('manicure.basicIdealCombined');
    }
    public function intensiveCombinedWithAparat(): View{
        return view('manicure.intensiveCombinedWithAparat');
    }
    public function basicManicurePedicure(): View{
        return view('manicure.basicManicurePedicure');
    }
    public function intensiveManicurePedicure(): View{
        return view('manicure.intensiveManicurePedicure');
    }
    public function courseThreeInOneNailStylist(): View{
        return view('manicure.courseThreeInOneNailStylist');
    }
    public function advancedJapaneseEcoGloss(): View{
        return view('manicure.advancedJapaneseEcoGloss');
    }
    public function aestheticPedicureAparat(): View{
        return view('manicure.aestheticPedicureAparat');
    }
    public function advancedAparatCombinedArchitecture(): View{
        return view('manicure.advancedAparatCombinedArchitecture');
    }
    public function nailModelingUpperForms(): View{
        return view('manicure.nailModelingUpperForms');
    }
}

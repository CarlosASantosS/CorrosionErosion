<?php

namespace App\Http\Controllers;

use App\Models\apirp14e;
use App\Models\corrosion;
use App\Models\dnv0501;
use App\Models\salama;
use App\Models\salamaandvenkatesh;
use Illuminate\Http\Request;

class CalculatorController extends Controller
{
    public function apirp14e(){
        return view("calculators.apirp14e");
    }
    public function storeapirp14e(Request $request){
        $apirp14e = new apirp14e();
        $apirp14e->a = $request->a;
        $apirp14e->b = $request->b;
        $apirp14e->c = $request->c;
        $apirp14e->g = $request->g;
        $apirp14e->h = $request->h;
        $apirp14e->i = $request->i;
        $apirp14e->j = $request->j;
        $apirp14e->k = $request->k;
        $apirp14e->l = $request->l;
        $apirp14e->m = $request->m;
        $apirp14e->n = $request->n;
        $apirp14e->o = $request->o;
        $apirp14e->sf = $request->sf;
        $apirp14e->p = $request->j*1000000/$request->i;
        $apirp14e->q = $request->j*1000000/($request->i+$request->k);
        $apirp14e->r = $request->m-2*$request->n;
        $apirp14e->s = 3.1416*pow($apirp14e->r,2)/4;
        $apirp14e->t = 141.5/($request->l+131.5);
        $apirp14e->u = ($apirp14e->t*$request->i+$request->k)/($request->k+$request->i);
        $apirp14e->v = $request->g+14.7;
        $apirp14e->w = $request->h+460;
        $apirp14e->x = 94.45+6*$request->o;
        $apirp14e->y = 48.263-0.115*$request->o;
        $apirp14e->z = $apirp14e->w/1.8/$apirp14e->x;
        $apirp14e->ag = 8.31434;
        $apirp14e->aa = $apirp14e->v/14.5038/$apirp14e->y;
        $apirp14e->ab = 1-(0.3725*$apirp14e->aa)/pow($apirp14e->z,3.33);
        $apirp14e->ac = (4.2748*pow($apirp14e->ag,2)*pow($apirp14e->x,2.5))/($apirp14e->y*pow($request->o,2));
        $apirp14e->ad = 0.0008664*$apirp14e->ag*$apirp14e->x/$apirp14e->y/$request->o;
        $apirp14e->ae = $apirp14e->ac*pow($request->o,2)*$apirp14e->v/14.5038/(10*pow($apirp14e->ag,2)*pow(($apirp14e->w/1.8),2.5));
        $apirp14e->af = 100*$apirp14e->v/14.5038*$apirp14e->ad*$request->o/($apirp14e->ag*$apirp14e->w/1.8);
        $apirp14e->ah = $apirp14e->ae-pow($apirp14e->af,2)-$apirp14e->af; 
        $apirp14e->ai = $apirp14e->ae*$apirp14e->af;
        $apirp14e->aj = $apirp14e->ab-(pow($apirp14e->ab,3)-pow($apirp14e->ab,2)+$apirp14e->ab*$apirp14e->ah-$apirp14e->ai)/(3*pow($apirp14e->ab,2)-2*$apirp14e->ab+$apirp14e->ah);
        $apirp14e->ak = $apirp14e->aj-(pow($apirp14e->aj,3)-pow($apirp14e->aj,2)+$apirp14e->aj*$apirp14e->ah-$apirp14e->ai)/(3*pow($apirp14e->aj,2)-2*$apirp14e->aj+$apirp14e->ah);
        $apirp14e->al = $apirp14e->ak-(pow($apirp14e->ak,3)-pow($apirp14e->ak,2)+$apirp14e->ak*$apirp14e->ah-$apirp14e->ai)/(3*pow($apirp14e->ak,2)-2*$apirp14e->ak+$apirp14e->ah);
        $apirp14e->am = 141.5/($request->l+131.5);
        $apirp14e->an = ($apirp14e->am*$request->i+$request->k)/($request->k+$request->i);
        $apirp14e->ao = 24.5/29;
        $apirp14e->ap = ((12409*(((141.5/($request->l+131.5))*$request->i+$request->k)/($request->i+$request->k))*($request->g+14.7))+(2.7*($request->j*1000000/($request->i+$request->k))*$request->o/29*($request->g+14.7)))/((198.7*($request->g+14.7))+(($request->j*1000000/($request->i+$request->k))*($request->h+460)*$apirp14e->al));
        $apirp14e->az = ($request->i+$request->k)*((9.35+($apirp14e->al*$apirp14e->q*$apirp14e->w/(21.25*$apirp14e->v)))/(1000*$apirp14e->s));
        $apirp14e->ba = 200/sqrt($apirp14e->ap);
        $apirp14e->bc = $apirp14e->az/$apirp14e->ba*100;
        $apirp14e->be = ($apirp14e->ap*454*pow(100,3))/((pow(30.48,3))*1000);
        $apirp14e->bf = ($apirp14e->az*$apirp14e->s*30.48*(pow(2.54,2))/pow(100,3));
        $apirp14e->bg = 0.0624;
        $apirp14e->bh = 0.06*(pow($apirp14e->be,0.75))*(pow($apirp14e->bf,1.75))*(((pow($apirp14e->r*2.54/100,-3.75))*(pow($apirp14e->bg/1000,0.25))));
        $apirp14e->bi = $apirp14e->az*0.3048;
        $apirp14e->er = (1.86*pow(10,5)*($request->sf*pow($apirp14e->ba,2)/155000*pow($apirp14e->r,2)))/39.37;
        $apirp14e->save();
        return view("stores.apirp14estore",['a'=>$request->a,'b'=>$request->b,'g'=>$request->g,'h'=>$request->h,'i'=>$request->i,'j'=>$request->j,'k'=>$request->k,'l'=>$request->l,'m'=>$request->m,'n'=>$request->n,'o'=>$request->o,'sf'=>$request->sf],['c'=>$request->c,'p'=>$apirp14e->p,'q'=>$apirp14e->q,'r'=>$apirp14e->r,'s'=>$apirp14e->s,'t'=>$apirp14e->t,'u'=>$apirp14e->u,'v'=>$apirp14e->v,'w'=>$apirp14e->w,'x'=>$apirp14e->x,'y'=>$apirp14e->y,'z'=>$apirp14e->z,'aa'=>$apirp14e->aa,'ab'=>$apirp14e->ab,'ac'=>$apirp14e->ac,'ad'=>$apirp14e->ad,'ae'=>$apirp14e->ae,'af'=>$apirp14e->af,'ah'=>$apirp14e->ah,'ai'=>$apirp14e->ai,'aj'=>$apirp14e->aj,'ak'=>$apirp14e->ak,'al'=>$apirp14e->al,'am'=>$apirp14e->am,'an'=>$apirp14e->an,'ao'=>$apirp14e->ao,'ap'=>$apirp14e->ap,'az'=>$apirp14e->az,'ba'=>$apirp14e->ba,'bc'=>$apirp14e->bc,'be'=>$apirp14e->be,'bf'=>$apirp14e->bf,'bg'=>$apirp14e->bg,'bh'=>$apirp14e->bh,'bi'=>$apirp14e->bi, 'er'=>$apirp14e->er]);     
    }
    public function apirp14eregistry(){
        $table = apirp14e::paginate(10);
        return view("registry.apirp14eregistry",compact('table'));
    }
    public function apirp14eregistryone(){
        $table = apirp14e::paginate(10);
        return view("registry.apirp14eregistryone",compact('table'));
    }
    public function corrosion(){
        return view("calculators.corrosion");
    }
    public function storecorrosion(Request $request){
        $corrosion = new corrosion();
        $corrosion->c4 = $request->c4;
        $corrosion->c5 = $request->c5;
        $corrosion->c7 = $request->c7;
        $corrosion->c9 = $request->c9;
        $corrosion->c11 = $request->c11;
        $corrosion->c17 = $request->c17;
        $corrosion->c18 = $request->c18;
        $corrosion->c26 = $request->c26;
        $corrosion->f4 = $request->f4;
        $corrosion->f20 = $request->f20;
        $corrosion->c6 = 141.5/($request->c4+131.5);
        $corrosion->c8 = (($corrosion->c6*$request->c7)*(1-($request->c5/100))+($request->c7*($request->c5/100)));
        $corrosion->c10 = $request->c9*0.3048;
        $corrosion->c12 = ($corrosion->c8*$corrosion->c10)/102;
        $corrosion->c13 = $corrosion->c12*0.145038;
        $corrosion->c19 = $request->c17/100;
        $corrosion->c20 = $request->c18*$corrosion->c19;
        $corrosion->c21 = $corrosion->c13;
        $corrosion->c22 = $corrosion->c21*$corrosion->c19;
        $corrosion->c27 = 0.0454*(1.6616-(5.736*pow(10,-2)*$request->c26)+(1.031*pow(10,-3)*pow($request->c26,2))-(9.68*pow(10,-6)*pow($request->c26,3))+(4.471*pow(10,-8)*pow($request->c26,4))-7.912*pow(10,-11)*pow($request->c26,5));
        $corrosion->c28 = $corrosion->c22;
        $corrosion->c29 = 0.068046*$corrosion->c28;
        $corrosion->c30 = $corrosion->c29*$corrosion->c27;
        $corrosion->c31 = $corrosion->c30*44.01;
        $corrosion->c32 = $corrosion->c31*1000;
        $corrosion->c33 = 4.08+log((1/sqrt($corrosion->c31)),10);
        $corrosion->f5 = 0.0454*(1.6616-(5.736*pow(10,-2)*$request->f4)+(1.031*pow(10,-3)*pow($request->f4,2))-(9.68*pow(10,-6)*pow($request->f4,3))+(4.471*pow(10,-8)*pow($request->f4,4))-7.912*pow(10,-11)*pow($request->f4,5));
        $corrosion->f6 = $corrosion->c20;
        $corrosion->f7 = 0.068046*$corrosion->f6;
        $corrosion->f8 = $corrosion->f7*$corrosion->f5;
        $corrosion->f9 = $corrosion->f8*44.01;
        $corrosion->f10 = $corrosion->f9*1000;
        $corrosion->f11 = 4.08+LOG(1/SQRT($corrosion->f9),10);
        $corrosion->f15 = $request->f4+273.15;
        $corrosion->f16 = EXP(-9255/$corrosion->f15)*pow(10,-($corrosion->f11))*2.302*pow(10,19);
        $corrosion->f17 = $request->c26+273.15;
        $corrosion->f18 = EXP(-9255/$corrosion->f17)*pow(10,-($corrosion->c33))*2.302*pow(10,19);
        $corrosion->f19 = -0.0166*$request->c4+0.83;
        $corrosion->f21 = 0.071*(($request->c5/100)/$corrosion->f19)*$request->f20;
        $corrosion->f22 = $corrosion->f21*$corrosion->f16;
        $corrosion->f23 = $corrosion->f18*$corrosion->f21;
        $corrosion->save();
        return view("stores.corrosionstore",['c4'=>$request->c4,'c5'=>$request->c5,'c7'=>$request->c7,'c9'=>$request->c9,'c11'=>$request->c11,'c17'=>$request->c17,'c18'=>$request->c18,'c26'=>$request->c26,'f4'=>$request->f4,'f20'=>$request->f20],['c6'=>$corrosion->c6,'c8'=>$corrosion->c8 ,'c10'=>$corrosion->c10 ,'c12'=>$corrosion->c12 ,'c13'=>$corrosion->c13 ,'c19'=>$corrosion->c19 ,'c20'=>$corrosion->c20 ,'c21'=>$corrosion->c21 ,'c22'=>$corrosion->c22 ,'c27'=>$corrosion->c27 ,'c28'=>$corrosion->c28 ,'c29'=>$corrosion->c29 ,'c30'=>$corrosion->c30 ,'c31'=>$corrosion->c31 ,'c32'=>$corrosion->c32 ,'c33'=>$corrosion->c33 ,'f5'=>$corrosion->f5 ,'f6'=>$corrosion->f6 ,'f7'=>$corrosion->f7 ,'f8'=>$corrosion->f8 ,'f9'=>$corrosion->f9 ,'f10'=>$corrosion->f10 ,'f11'=>$corrosion->f11 ,'f15'=>$corrosion->f15 ,'f16'=>$corrosion->f16 ,'f17'=>$corrosion->f17 ,'f18'=>$corrosion->f18 ,'f19'=>$corrosion->f19 ,'f21'=>$corrosion->f21 ,'f22'=>$corrosion->f22 ,'f23'=>$corrosion->f23]);     
    }
    public function dnv0501(){
        return view("calculators.dnv0501");
    }
    public function storednv0501(Request $request){
        $dnv0501 = new dnv0501();
        $dnv0501->a = $request->a;
        $dnv0501->b = $request->b;
        $dnv0501->c = $request->c;
        $dnv0501->g = $request->g;
        $dnv0501->h = $request->h;
        $dnv0501->i = $request->i;
        $dnv0501->j = $request->j;
        $dnv0501->k = $request->k;
        $dnv0501->l = $request->l;
        $dnv0501->m = $request->m;
        $dnv0501->n = $request->n;
        $dnv0501->o = $request->o;
        $dnv0501->p = $request->j*1000000/$request->i;
        $dnv0501->q = $request->j*1000000/($request->i+$request->k);
        $dnv0501->r = $request->m-2*$request->n;
        $dnv0501->s = 3.1416*pow($dnv0501->r,2)/4;
        $dnv0501->t = 141.5/($request->l+131.5);
        $dnv0501->u = ($dnv0501->t*$request->i+$request->k)/($request->k+$request->i);
        $dnv0501->v = $request->g+14.7;
        $dnv0501->w = $request->h+460;
        $dnv0501->x = 94.45+6*$request->o;
        $dnv0501->y = 48.263-0.115*$request->o;
        $dnv0501->z = $dnv0501->w/1.8/$dnv0501->x;
        $dnv0501->ag = 8.31434;
        $dnv0501->as = 62.43;         
        $dnv0501->aa = $dnv0501->v/14.5038/$dnv0501->y;
        $dnv0501->ab = 1-(0.3725*$dnv0501->aa)/pow($dnv0501->z,3.33);
        $dnv0501->ac = (4.2748*pow($dnv0501->ag,2)*pow($dnv0501->x,2.5))/($dnv0501->y*pow($request->o,2));
        $dnv0501->ad = 0.0008664*$dnv0501->ag*$dnv0501->x/$dnv0501->y/$request->o;
        $dnv0501->ae = $dnv0501->ac*pow($request->o,2)*$dnv0501->v/14.5038/(10*pow($dnv0501->ag,2)*pow(($dnv0501->w/1.8),2.5));
        $dnv0501->af = 100*$dnv0501->v/14.5038*$dnv0501->ad*$request->o/($dnv0501->ag*$dnv0501->w/1.8);
        $dnv0501->ah = $dnv0501->ae-pow($dnv0501->af,2)-$dnv0501->af; 
        $dnv0501->ai = $dnv0501->ae*$dnv0501->af;
        $dnv0501->aj = $dnv0501->ab-(pow($dnv0501->ab,3)-pow($dnv0501->ab,2)+$dnv0501->ab*$dnv0501->ah-$dnv0501->ai)/(3*pow($dnv0501->ab,2)-2*$dnv0501->ab+$dnv0501->ah);
        $dnv0501->ak = $dnv0501->aj-(pow($dnv0501->aj,3)-pow($dnv0501->aj,2)+$dnv0501->aj*$dnv0501->ah-$dnv0501->ai)/(3*pow($dnv0501->aj,2)-2*$dnv0501->aj+$dnv0501->ah);
        $dnv0501->al = $dnv0501->ak-(pow($dnv0501->ak,3)-pow($dnv0501->ak,2)+$dnv0501->ak*$dnv0501->ah-$dnv0501->ai)/(3*pow($dnv0501->ak,2)-2*$dnv0501->ak+$dnv0501->ah);
        $dnv0501->am = 141.5/($request->l+131.5);
        $dnv0501->an = ($dnv0501->am*$request->i+$request->k)/($request->k+$request->i);
        $dnv0501->ao = 24.5/29;
        $dnv0501->ar = $dnv0501->am*$dnv0501->as;
        $dnv0501->at = (($dnv0501->ar*$request->i)+($dnv0501->as*$request->k))/($request->i+$request->k);
        $dnv0501->au = ($request->i*(0.0000649))/($dnv0501->s*0.01);
        $dnv0501->av = ($request->k*(0.0000649))/($dnv0501->s*0.01);
        $dnv0501->aw = $dnv0501->au+$dnv0501->av;
        $dnv0501->ax = $dnv0501->ao*0.075;
        $dnv0501->ay = 0.002122*(14.7/288.29)*(($dnv0501->al*$dnv0501->w)/$dnv0501->v)*(($request->j*1000000)/($dnv0501->r*$dnv0501->r));
        $dnv0501->aq = (($dnv0501->at*$dnv0501->aw)+($dnv0501->ax*$dnv0501->ay))/($dnv0501->aw+$dnv0501->ay);
        $az = ($request->i+$request->k)*((9.35+($dnv0501->al*$dnv0501->q*$dnv0501->w/(21.25*$dnv0501->v)))/(1000*$dnv0501->s));
        $dnv0501->bb = 200/sqrt($dnv0501->aq);
        $dnv0501->bd = $az/$dnv0501->bb*100;
        $dnv0501->save();
        $bf = ($az*$dnv0501->s*30.48*(pow(2.54,2))/pow(100,3));
        $bg = 0.0624;
        $bi = $az*0.3048;
        return view("stores.dnv0501store",['a'=>$request->a,'b'=>$request->b,'g'=>$request->g,'h'=>$request->h,'i'=>$request->i,'j'=>$request->j,'k'=>$request->k,'l'=>$request->l,'m'=>$request->m,'n'=>$request->n,'o'=>$request->o],['c'=>$request->c,'p'=>$dnv0501->p,'q'=>$dnv0501->q,'r'=>$dnv0501->r,'s'=>$dnv0501->s,'t'=>$dnv0501->t,'u'=>$dnv0501->u,'v'=>$dnv0501->v,'w'=>$dnv0501->w,'x'=>$dnv0501->x,'y'=>$dnv0501->y,'z'=>$dnv0501->z,'aa'=>$dnv0501->aa,'ab'=>$dnv0501->ab,'ac'=>$dnv0501->ac,'ad'=>$dnv0501->ad,'ae'=>$dnv0501->ae,'af'=>$dnv0501->af,'ah'=>$dnv0501->ah,'ai'=>$dnv0501->ai,'aj'=>$dnv0501->aj,'ak'=>$dnv0501->ak,'al'=>$dnv0501->al,'am'=>$dnv0501->am,'an'=>$dnv0501->an,'ao'=>$dnv0501->ao,'aq'=>$dnv0501->aq,'ar'=>$dnv0501->ar,'as'=>$dnv0501->as,'at'=>$dnv0501->at,'au'=>$dnv0501->au,'av'=>$dnv0501->v,'aw'=>$dnv0501->aw,'ax'=>$dnv0501->ax,'ay'=>$dnv0501->ay,'bb'=>$dnv0501->bb,'bd'=>$dnv0501->bd]);
    }
    public function dnv0501registry(){
        $table = dnv0501::paginate(10);
        return view("registry.dnv0501registry",compact('table'));
    }
    public function dnv0501registryone(){
        $table = dnv0501::paginate(10);
        return view("registry.dnv0501registryone",compact('table'));
    }
    public function salama(){
        return view("calculators.salama");
    }
    public function storesalama(Request $request){
        $salama = new salama();
        $salama->a = $request->a;
        $salama->b = $request->b;
        $salama->c = $request->c;
        $salama->c15 = $request->c15;
        $salama->c16 = $request->c16;
        $salama->c18 = $request->c18;
        $salama->c22 = $request->c22;
        $salama->c23 = $request->c23;
        $salama->c25 = $request->c25;
        $salama->c26 = $request->c26;
        $salama->sm = $request->sm;
        switch($request->sm)
        {
            case "elbow": 
                $request->sm=5.5;
                $request->sp=2000;
                $request->s=0.05;
            break;
            case "seamless":
                $request->sm=33;
                $request->sp=12000;
                $request->s=2.2;
            break;
            case "Teesgl":
                $request->sm=68;
                $request->sp=25000;
                $request->s=3.2;
            break;
            case "Teesg":
                $request->sm=1379;
                $request->sp=500000;
                $request->s=14;
            break;
        }
        $salama->c17 = $request->c15 + $request->c16;
        $salama->c19 = ($request->c15/3600)/(3.1416*(pow($request->c18*0.0254/2,2)));
        $salama->c20 = ($request->c16/3600)/(3.1416*(pow($request->c18*0.0254/2,2)));
        $salama->c21 = $salama->c19 + $salama->c20;
        $salama->c24 = (($request->c22*$salama->c19)+($request->c23*$salama->c20))/$salama->c21;
        $salama->c28 = (1/$request->sm)*($request->c25*pow($salama->c21,2)*$request->c26/(pow(($request->c18*25.4),2)*$salama->c24));
        $salama->f28 = (1/$request->sp)*((pow($salama->c21,2)*$request->c26)/(pow($request->c18,2)*$salama->c24));
        $salama->c70 = $request->s*($request->c18*sqrt($salama->c24)/sqrt($request->c25));
        $salama->save();
        return view("stores.salamastore",['a'=>$request->a,'b'=>$request->b,'c'=>$request->c,'c15'=>$request->c15,'c16'=>$request->c16,'c18'=>$request->c18,'c22'=>$request->c22,'c23'=>$request->c23,'c25'=>$request->c25,'c26'=>$request->c26,'sm'=>$request->sm,'c17'=>$salama->c17,'c19'=>$salama->c19,'c20'=>$salama->c20,'c21'=>$salama->c21,'c24'=>$salama->c24,'c28'=>$salama->c28,'f28'=>$salama->f28,'c70'=>$salama->c70]);
    }
    public function salamaregistry(){
        $table = salama::paginate(10);
        return view("registry.salamaregistry",compact('table'));
    }
    public function salamaregistryone(){
        $table = salama::paginate(10);
        return view("registry.salamaregistryone",compact('table'));
    }
    public function salamaandvenkatesh(){
        return view("calculators.salamaandvenkatesh");
    }
    public function storesalamaandvenkatesh(Request $request){
        $salamaandvenkatesh = new salamaandvenkatesh();
        $salamaandvenkatesh->a = $request->a;
        $salamaandvenkatesh->b = $request->b;
        $salamaandvenkatesh->c = $request->c;
        $salamaandvenkatesh->w = $request->w;
        $salamaandvenkatesh->v = $request->v;
        $salamaandvenkatesh->d = $request->d;
        $salamaandvenkatesh->sm = $request->sm;
        switch($request->sm)
        {
            case "elbow": 
                $request->sm=0.038;
            break;
            case "tees":
                $request->sm=0.019;
            break;
        }
        $salamaandvenkatesh->er = $request->sm*(($request->w*pow($request->v,2))/pow($request->d,2));
        $salamaandvenkatesh->save();
        return view("stores.salamaandvenkateshstore",['a'=>$request->a,'b'=>$request->b,'c'=>$request->c,'w'=>$request->w,'v'=>$request->v,'d'=>$request->d,'sm'=>$request->sm,'er'=>$salamaandvenkatesh->er]);
    }
    public function salamaandvenkateshregistry(){
        $table = salamaandvenkatesh::paginate(10);
        return view("registry.salamaandvenkateshregistry",compact('table'));
    }
}

<?php
use App\Http\Controllers\Func_controller;
use Jenssegers\Agent\Agent;
// use Func;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
 */

Route::get('/', function () {
	$chkie = new Func_controller;
	$agent = new Agent();
	$data['chkie'] = $chkie->chk();
	$data['des'] = 'Thai Polyester Company. We are full integration of fiber polyester manufacturer with total capacity 316,800 tons a years achieved thereby of the innovative technology in globe.';
	$data['key'] = 'thai polyester, Polyester Staple Fiber,yarn manufacturer in thailand, Cheap polyester fiber,Good quality polyester fiber,  Yarn manufacturers';
	$data['title'] = 'Thai Polyester CO., LTD';
	$data['active_home'] = 'activemenu';
	$data['chkmobile'] = $agent->isMobile() ? $agent->isMobile() : ($agent->isTablet() ? $agent->isTablet() : false);
	$data['our_customers'] = ['Albania', 'Argentina', 'Australia', 'Bangladesh', 'Belarus', 'Belgium', 'Brazil', 'Cambodia', 'Chille', 'Colombia', 'Croatia', 'Cuba', 'Cyprus', 'Denmark', 'Ecuador', 'Egypt', 'El Salvador', 'Ethiopia', 'Fiji', 'Finland', 'France', 'Germany', 'Ghana', 'Greece', 'Guatemala', 'Honduras', 'India', 'Indonesia', 'Iraq', 'Israel', 'Italy', 'Jamaica', 'Japan', 'Jordan', 'Kenya', 'Korea', 'Lao', 'Malaysia', 'Mexico', 'Morocco', 'Myanmar', 'Nepal', 'New Zealand', 'Nigeria', 'Norway', 'Oman', 'Parkistan', 'Peru', 'Philippines', 'Poland', 'Portugal', 'Qatar', 'Romania', 'Russia', 'Saudi Arabia', 'South Africa', 'Spain', 'Sri Lanka', 'Sudan', 'Sweden', 'Switzerland', 'Taiwan', 'Tanzania', 'Tonga', 'Tunisia', 'Turkey', 'UAE', 'Ukraine', 'USA/Canada', 'Uzbekistan', 'Vietnam', 'Yemen'];
	return view('index', $data);
});

Route::get('/home', function () {
	$chkie = new Func_controller;
	$agent = new Agent();
	$data['chkie'] = $chkie->chk();
	$data['des'] = 'Thai Polyester Company. We are full integration of fiber polyester manufacturer with total capacity 316,800 tons a years achieved thereby of the innovative technology in globe.';
	$data['key'] = 'thai polyester, Polyester Staple Fiber,yarn manufacturer in thailand, Cheap polyester fiber,Good quality polyester fiber,  Yarn manufacturers';
	$data['title'] = 'Thai Polyester CO., LTD';
	$data['active_home'] = 'activemenu';
	$data['chkmobile'] = $agent->isMobile() ? $agent->isMobile() : ($agent->isTablet() ? $agent->isTablet() : false);
	$data['our_customers'] = ['Albania', 'Argentina', 'Australia', 'Bangladesh', 'Belarus', 'Belgium', 'Brazil', 'Cambodia', 'Chille', 'Colombia', 'Croatia', 'Cuba', 'Cyprus', 'Denmark', 'Ecuador', 'Egypt', 'El Salvador', 'Ethiopia', 'Fiji', 'Finland', 'France', 'Germany', 'Ghana', 'Greece', 'Guatemala', 'Honduras', 'India', 'Indonesia', 'Iraq', 'Israel', 'Italy', 'Jamaica', 'Japan', 'Jordan', 'Kenya', 'Korea', 'Lao', 'Malaysia', 'Mexico', 'Morocco', 'Myanmar', 'Nepal', 'New Zealand', 'Nigeria', 'Norway', 'Oman', 'Parkistan', 'Peru', 'Philippines', 'Poland', 'Portugal', 'Qatar', 'Romania', 'Russia', 'Saudi Arabia', 'South Africa', 'Spain', 'Sri Lanka', 'Sudan', 'Sweden', 'Switzerland', 'Taiwan', 'Tanzania', 'Tonga', 'Tunisia', 'Turkey', 'UAE', 'Ukraine', 'USA/Canada', 'Uzbekistan', 'Vietnam', 'Yemen'];
	return view('index', $data);
});
Route::get('/about', function () {
	$chkie = new Func_controller;
	$agent = new Agent();
	$data['chkie'] = $chkie->chk();
	$data['des'] = 'Thai polyester is a registered company specializing in polyester yarn both fiber and filament. We offer a wide range of recycled product, virgin and also dope dye in order to respond to customer in different industry';
	$data['key'] = 'polyester, Yarn factory, thai polyester, Produce yarn, Best fully drawn yarn, Yarn manufacturers';
	$data['title'] = 'About us | Thai Polyester CO., LTD';
	$data['active_about'] = 'activemenu';
	$m = 0;
	if ($agent->isPhone()) {
		$m = 1;
	} elseif ($agent->isAndroidOS()) {
		$m = 1;
	} elseif ($agent->isNexus()) {
		$m = 1;

	} elseif ($agent->is('iPhone')) {
		$m = 1;

	} elseif ($agent->isMobile()) {
		$m = 1;
	} elseif ($agent->isTablet()) {
		$m = 1;
	}
	$data['m'] = $m;
	return view('about-us', $data);
	// return view('page404');
});
Route::get('/about-test', function () {
	$chkie = new Func_controller;
	$agent = new Agent();
	$data['chkie'] = $chkie->chk();
	$data['des'] = 'Thai polyester is a registered company specializing in polyester yarn both fiber and filament. We offer a wide range of recycled product, virgin and also dope dye in order to respond to customer in different industry';
	$data['key'] = 'polyester, Yarn factory, thai polyester, Produce yarn, Best fully drawn yarn, Yarn manufacturers';
	$data['title'] = 'About us | Thai Polyester CO., LTD';
	$data['active_about'] = 'activemenu';
	$m = 0;
	if ($agent->isPhone()) {
		$m = 1;
	} elseif ($agent->isAndroidOS()) {
		$m = 1;
	} elseif ($agent->isNexus()) {
		$m = 1;

	} elseif ($agent->is('iPhone')) {
		$m = 1;

	} elseif ($agent->isMobile()) {
		$m = 1;
	} elseif ($agent->isTablet()) {
		$m = 1;
	}
	$data['m'] = $m;
	return view('about-us-test', $data);
	// return view('page404');
});
Route::get('/contact', 'ContactNewController@index');
Route::get('/recycling', function () {
	$chkie = new Func_controller;
	$data['chkie'] = $chkie->chk();
	$data['des'] = 'we assure that our organization commits with environmental friendly sustainable operation and products. Our current priority is to take responsibility to sustain our planet focusing on recycling, reusing and reducing. We have used 100% recycled polyester';
	$data['key'] = 'recycling, recycle, recycled, Environmentally friendly products, 100% recycled polyester, ECOTPC';
	$data['title'] = 'recycling | Thai Polyester CO., LTD';
	$data['active_recycle'] = 'activemenu';
	return view('recycling', $data);
	// return view('page404');
});

// สินค้า polyester
Route::get('/polyester-products', function () {
	$chkie = new Func_controller;
	$agent = new Agent();
	$data['chkie'] = $chkie->chk();
	$data['des'] = '';
	$data['key'] = 'Polyester Staple Fiber,Draw Textured Yarn,  Fully Drawn Yarn, Monofilament, Open End, Ring Spun, Twist Yarn, Dope dyed';
	$data['title'] = 'All Polyester Products | Thai Polyester CO., LTD';
	$data['active_product'] = 'activemenu';
	$data['chkmobile'] = $agent->isMobile() ? $agent->isMobile() : ($agent->isTablet() ? $agent->isTablet() : false);
	return view('products.product-polyester-new', $data);
});
Route::get('/dope-dyed', function () {
	$chkie = new Func_controller;
	$data['chkie'] = $chkie->chk();
	$data['des'] = 'Dope dyed yarns are created by adding a masterbatch colorant to the polymer melt in spinning or extrusion This results in fibers and filaments that are fully impregnated with pigment coming out of the spinnerets in a one step process.';
	$data['key'] = 'Dope dyed, Standard Dope dyed, best Dope dyed, Produce cheap Dope dyed';
	$data['title'] = 'Dope dyed | Thai Polyester CO., LTD';
	$data['active_product'] = 'activemenu';
	return view('dope-dyed', $data);
});
// end สินค้า polyester

Route::get('/page404', function () {
	return view('page404');
});

// สินค้า Recycled
Route::get('/recycled-products', function () {
	$chkie = new Func_controller;
	$data['chkie'] = $chkie->chk();
	$data['des'] = 'Nowadays, we are surrounded by millions of plastic waste. one of the things that all of us can do to protect the environment is "recycling" EcoTPC is the Thai sustainable brand that We concern about plastic pollution. Our Recycled products come from 2 sources which are PET post consumer bottle and fabric waste and yarn. All of our recycled product are 100% Recycled polyester with GRS certificate.';
	$data['key'] = 'Staple Fiber (PSF), Filament Yarn (PFY), Partially Oriented Yarn (POY), Drawn Textures Yarn (DTY), Fully Drawn Yarn (FDY)';
	$data['title'] = 'Recycled Polyester Yarn Manufacturer';
	$data['active_product'] = 'activemenu';
	return view('products.product-recycled', $data);
	// return view('page404');
});
// end สินค้า Recycled

Route::get('/thank-you', function () {
    $chkie = new Func_controller;
    $agent = new Agent();
    $data = [
        'chkie' => $chkie->chk(),
        'title' => "Thank you!",
        'des' => "Your submission has been received.",
        'key' => "High-Quality Polyester Yarn and Fiber,Competitive price,Get FREE Sample",
        'chkmo' => $data['chkmobile'] = $agent->isMobile() ? $agent->isMobile() : ($agent->isTablet() ? $agent->isTablet() : false),
    ];
    return view('thank-you.thank1',$data);
});
Route::group(['prefix' => 'blog', 'as' => 'blog.'], function () {
	Route::get('/', 'frontend\blog\blogController@index');
	Route::get('/columns&news/columns', 'frontend\blog\blogController@columns')->name('columns');
	Route::get('/columns&news/news', 'frontend\blog\blogController@news')->name('news');
	Route::get('/{slug}', 'frontend\blog\blogController@blog');
});
Route::group(['prefix' => 'product', 'as' => 'product.'], function () {
	Route::get('/polyester-staple-fiber', function () {
		$chkie = new Func_controller;
		$agent = new Agent();
		$data['chkie'] = $chkie->chk();
		$data['des'] = 'Polyester staple fiber is a material produced from synthetic chemical compounds with a variety of uses in the textile, automotive and furniture industries';
		$data['key'] = 'Polyester Staple Fiber, PSF, Standard Polyester Staple Fiber, Best Standard Polyester Staple Fiber, Produce cheap Polyester Staple Fiber';
		$data['title'] = 'PSF (Polyester Staple Fiber) | Thai Polyester CO., LTD';
		$data['active_product'] = 'activemenu';
		$data['chkmobile'] = $agent->isMobile() ? $agent->isMobile() : ($agent->isTablet() ? $agent->isTablet() : false);
		return view('products.psf', $data);
	})->name('psf');
	Route::get('/spun-yarn', function () {
		$chkie = new Func_controller;
		$agent = new Agent();
		$data['chkie'] = $chkie->chk();
		$data['des'] = 'Thai Polyester Co., Ltd is a biggest polyester spun yarn manufacturer in Thailand which provides numerous quantities of polyester ring spun yarn, polyester OE spun yarn and recycled polyester spun yarn.';
		$data['key'] = 'spun yarn, polyester ring spun yarn, polyester OE spun yarn, recycled polyester spun yarn';
		$data['title'] = 'Spun yarn | Thai Polyester CO., LTD';
		$data['active_product'] = 'activemenu';
		$data['chkmobile'] = $agent->isMobile() ? $agent->isMobile() : ($agent->isTablet() ? $agent->isTablet() : false);
		return view('products.spun-yarn', $data);
	})->name('spun-yarn');
	Route::get('/filament', function () {
		$chkie = new Func_controller;
		$agent = new Agent();
		$data['chkie'] = $chkie->chk();
		$data['des'] = 'Thai Ployester Co., Ltd. has produced variety types of polyester filament yarn which are Pre-Oriented Yarn (POY), Fully Drawn Yarn (FDY), Drawn Textured Yarn (DTY) and Twisted yarn.';
		$data['key'] = 'polyester filament yarn,Pre-Oriented Yarn (POY),Fully Drawn Yarn (FDY),Drawn Textured Yarn (DTY),Twisted yarn';
		$data['title'] = 'Filament | Thai Polyester CO., LTD';
		$data['active_product'] = 'activemenu';
		$data['chkmobile'] = $agent->isMobile() ? $agent->isMobile() : ($agent->isTablet() ? $agent->isTablet() : false);
		return view('products.filament', $data);
	})->name('filament');
	Route::get('/draw-textured-yarn', function () {
		$chkie = new Func_controller;
		$agent = new Agent();
		$data['chkie'] = $chkie->chk();
		$data['des'] = 'Draw Textured Yarn is a multifilament yarn with soft crimp, high bulk and texture creating natural feel, high durability and. retention properties';
		$data['key'] = 'Draw Textured Yarn, DTY, Standard Draw Textured Yarn, best Draw Textured Yarn, Produce cheap Draw Textured Yarn';
		$data['title'] = 'DTY (Draw Textured Yarn) | Thai Polyester CO., LTD';
		$data['active_product'] = 'activemenu';
		$data['chkmobile'] = $agent->isMobile() ? $agent->isMobile() : ($agent->isTablet() ? $agent->isTablet() : false);
		return view('products.dty', $data);
	})->name('dty');
	Route::get('/partially-oriented-yarn', function () {
		$chkie = new Func_controller;
		$agent = new Agent();
		$data['chkie'] = $chkie->chk();
		$data['des'] = 'Thai Polyester Co., Ltd is a supplier of both POY and recycled POY which export to customer around the word.';
		$data['key'] = 'Partially Oriented Yarn, POY, recycled POY, supplier of POY, supplier of recycled POY';
		$data['title'] = 'POY (Partially Oriented Yarn) | Thai Polyester CO., LTD';
		$data['active_product'] = 'activemenu';
		$data['chkmobile'] = $agent->isMobile() ? $agent->isMobile() : ($agent->isTablet() ? $agent->isTablet() : false);
		return view('products.poy', $data);
	})->name('poy');
	Route::get('/fully-drawn-yarn', function () {
		$chkie = new Func_controller;
		$agent = new Agent();
		$data['chkie'] = $chkie->chk();
		$data['des'] = 'FDY of Thai Polyester Co., Ltd are able to support very best in both weaving and knitting textile manufacturers as Thai Polyester is a leading supplier of FDY yarn to worldwide.';
		$data['key'] = 'Fully Drawn Yarn, FDY, Standard Fully Drawn Yarn, best Fully Drawn Yarn, Produce cheap Fully Drawn Yarn';
		$data['title'] = 'FDY(Fully Drawn Yarn) | Thai Polyester CO., LTD';
		$data['active_product'] = 'activemenu';
		$data['chkmobile'] = $agent->isMobile() ? $agent->isMobile() : ($agent->isTablet() ? $agent->isTablet() : false);
		return view('products.fdy', $data);
	})->name('fdy');
	Route::get('/twisted-yarn', function () {
		$chkie = new Func_controller;
		$data['chkie'] = $chkie->chk();
		$agent = new Agent();
		$data['des'] = '- Twist is the spiral arrangement of the fibres around the axis of the yarn. The twist binds the fibres together and also contributes to the strength of the yarn. ';
		$data['key'] = 'Twist Yarn, Standard Twist Yarn, best Twist Yarn, Produce cheap Twist Yarn';
		$data['title'] = 'Twisted Yarn | Thai Polyester CO., LTD';
		$data['active_product'] = 'activemenu';
		$data['chkmobile'] = $agent->isMobile() ? $agent->isMobile() : ($agent->isTablet() ? $agent->isTablet() : false);
		return view('products.twisted-yarn', $data);
	})->name('twisted-yarn');
	Route::get('/monofilament', 'MonofilamentController@index')->name('monofilament');
    Route::get('/ring-spun',function(){
        $chkie = new Func_controller;
		$data['chkie'] = $chkie->chk();
		$agent = new Agent();
        $data['des'] = 'Ring spun yarn is made by twisting and thinning the polyester strands to make a very fine, strong, soft rope of polyester fibers';
		$data['key'] = 'Ring Spun, Standard Ring Spun, best Ring Spun, Produce cheap Ring Spun';
		$data['title'] = 'Ring Spun | Thai Polyester CO., LTD';
		$data['active_product'] = 'activemenu';
		$data['chkmobile'] = $agent->isMobile() ? $agent->isMobile() : ($agent->isTablet() ? $agent->isTablet() : false);
		return view('products.ring-spun', $data);
    })->name('ring-spun');
    Route::get('/open-end-or-oe-spun',function(){
        $chkie = new Func_controller;
		$data['chkie'] = $chkie->chk();
		$agent = new Agent();
        $data['des'] = 'the fiber sliver is separated into single fibers and in which the separated fiber material is brought by an air stream to a collecting surface from which it is drawn off while being twisted';
		$data['key'] = 'Open End, OE, Standard Open End, best Open End, Produce cheap Open End';
		$data['title'] = 'Open End | Thai Polyester CO., LTD';
		$data['active_product'] = 'activemenu';
		$data['chkmobile'] = $agent->isMobile() ? $agent->isMobile() : ($agent->isTablet() ? $agent->isTablet() : false);
		return view('products.open-end', $data);
    })->name('open-end');
});

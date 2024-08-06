<?php

use App\Http\Requests\CareerRequest;
use App\Models\Blog;
use App\Models\Career;
use App\Models\CareerInformation;
use App\Models\Category;
use App\Models\CompanyStrategy;
use App\Models\ContactUs;
use App\Models\Member;
use App\Models\Mission;
use App\Models\OurStrategicStrength;
use App\Models\OurValue;
use App\Models\Partner;
use App\Models\Pharmacovigilance;
use App\Models\Product;
use App\Models\Suggestion;
use App\Models\Vision;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    $sliders = Blog::where("type", 'slider')->get();
    $blogs = Blog::query()->whereIn("type", ['news', 'video'])->orderBy('sort', "asc")->limit(3)->get();
    $partner = Partner::query()->first();
    $products = Product::query()->take(8)->get();
    $teamMembers = Member::query()->take(5)->orderBy('sort', 'ASC')->get();
    return view('website.home', [
        'sliders' => $sliders,
        'partner' => $partner,
        'products' => $products,
        'teamMembers' => $teamMembers,
        'blogs' => $blogs,
    ]);
})->name('home');


Route::get('/our-company', function () {
    $vision = Vision::query()->first();
    $mission = Mission::query()->first();
    $ourValue = OurValue::query()->first();
    $companyStrategy = CompanyStrategy::query()->first();
    $ourStrategicStrength = OurStrategicStrength::query()->first();
    return view('website.our-company', [
        'vision' => $vision,
        'mission' => $mission,
        'ourValue' => $ourValue,
        'ourStrategicStrength' => $ourStrategicStrength,
        'companyStrategy' => $companyStrategy,
    ]);
})->name('our-company');


Route::get('/our-board', function () {
    $teamMembers = Member::query()->orderBy('sort', 'ASC')->get();

    return view('website.our-board', [
        'teamMembers' => $teamMembers,
    ]);
})->name('our-board');


Route::get('/reporting', function () {
    $reports = Pharmacovigilance::query()->get();

    return view('website.reports', [
        'reports' => $reports,
    ]);
})->name('reporting');


Route::get('/career', function () {
    $career = CareerInformation::query()->first();

    return view('website.career', [
        'career' => $career,
    ]);
})->name('career');


Route::post('/career', function (CareerRequest $request) {

    $career = Career::query()->create($request->except('attachment'));

    $career->refresh()->addMedia($request->file('attachment'))->toMediaCollection('attachment');

    alert()->success('Your Cv Sent Successfully', 'we will contact you soon.')->showConfirmButton('Confirm', '#3085d6');
    return redirect()->back();
})->name('career.store');


Route::get('/contact-us', function () {
    $contact = ContactUs::query()->first();
    return view('website.contact-us', ['contact' => $contact]);

})->name('suggestion');


Route::post('/contact-us', function () {
    Suggestion::query()->create(request()->all());

    alert()->success('Your Message Sent Successfully', 'we will contact you soon.')->showConfirmButton('Confirm', '#3085d6');

    return redirect()->back();

})->name('suggestion.store');


Route::get('/therapeutic-area/{id}', function ($id) {
    $products = Product::query()->where('therapeutic_area_id', $id)->with('category')
        ->when(request('category') && request('category') != 'all',function ($query){
           $query->where('category_id', request('category'));
        })
        ->get();
    $categories = Category::query()->get();
    $therapeutic_area = \App\Models\TherapeuticArea::find($id);

    return view('website.products', ['products' => $products, 'categories' => $categories, 'therapeutic_area' => $therapeutic_area]);


})->name('therapeutic-area.show');


Route::get('/product/{id}', function ($id) {
    $product = Product::query()->where('id', $id)->first();
    return view('website.product-details', ['product' => $product]);


})->name('product.show');

Route::get('/blog/{id}', function ($id) {
    $blog = Blog::query()->where('id', $id)->first();
    return view('website.blog-details', ['blog' => $blog]);

})->name('blog.show');

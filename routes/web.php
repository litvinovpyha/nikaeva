<?php

use App\Http\Controllers\CallbackController;
use App\Http\Controllers\ColoristController;
use App\Http\Controllers\ColoristikaController;
use App\Http\Controllers\ConsoleController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\FreeCoursesController;
use App\Http\Controllers\MyCoursesController;
use App\Http\Controllers\MyLessonController;
use App\Http\Controllers\OnlineManicureController;
use App\Http\Controllers\LaminationController;
use App\Http\Controllers\HairstylistController;
use App\Http\Controllers\HairstylistUpController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\LessonContentController;
use App\Http\Controllers\LessonsController;
use App\Http\Controllers\ManicureController;
use App\Http\Controllers\OnlineTrainingController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\WoomanHairstylistController;
use App\Http\Controllers\WoomanStylistController;
use App\Http\Middleware\IsAdmin;
use Illuminate\Support\Facades\Route;

Route::get('/', [IndexController::class, 'index'])->name('home');
Route::get('/obratnyi-zvonok', [CallbackController::class, 'show'])->name('callback');
Route::post('/obratnyi-zvonok', [CallbackController::class, 'store'])->name('callback.submit');
Route::get('/politika-konfidencialnosti', function () {
    return view('privacy');
});
Route::get('/offer', function () {
    return view('offer');
});
Route::prefix('/kursy')->group(function () {
    //  онлайн курсы
    Route::get('/online-kursy', [OnlineTrainingController::class, 'show'])->name('courses.online');
    //    парикмахер
    Route::get('/parikmaher', [HairstylistController::class, 'index'])->name('courses.hairstylist');
    Route::get('/povyshayushchiy-kurs-po-strizhkam', [HairstylistController::class, 'hairstylistup'])->name('courses.hairstylistup');
    Route::get('/zhenskie-strizhki-koloristika', [HairstylistController::class, 'woomanstylist'])->name('courses.woomanstylist');
    Route::get('/koloristika-baza-povyshenie', [HairstylistController::class, 'coloristika'])->name('courses.coloristika');
    Route::get('/zhenskiy-master-kolorist', [HairstylistController::class, 'womanhairstylist'])->name('courses.womanhairstylist');
    //    маникюр
    Route::get('/manikyur', [ManicureController::class, 'index'])->name('courses.manicure');
    Route::get('/manikyur-idealnyj-kombinirovannyj', [ManicureController::class, 'basicIdealCombined'])->name('courses.basic_ideal_combined');
    Route::get('/manikyur-idealnyj-kombinirovannyj-apparatnyj', [ManicureController::class, 'intensiveCombinedWithAparat'])->name('courses.intensive_combined_apparat');
    Route::get('/bazovyj-kurs-manikyura-pedikyura', [ManicureController::class, 'basicManicurePedicure'])->name('courses.basic_manicure_pedicure');
    Route::get('/intensivnyj-kurs-manikyura-pedikyura', [ManicureController::class, 'intensiveManicurePedicure'])->name('courses.intensive_manicure_pedicyure');
    Route::get('/kurs-3-v-1-nail-stylist', [ManicureController::class, 'courseThreeInOneNailStylist'])->name('courses.nail_stylist_3in1');
    Route::get('/povyshayushchij-kurs-japonskij-manikyur', [ManicureController::class, 'advancedJapaneseEcoGloss'])->name('courses.advanced_japanese_eco_gloss');
    Route::get('/pedikyur-apparatnaya-tehnika', [ManicureController::class, 'aestheticPedicureAparat'])->name('courses.aesthetic_pedicure_apparat');
    Route::get('/povyshayushchij-apparatnyj-kombinirovannyj', [ManicureController::class, 'advancedAparatCombinedArchitecture'])->name('courses.advanced_aparat_combined_arch');
    Route::get('/kurs-modelirovaniya-nogtej-verhnie-formy', [ManicureController::class, 'nailModelingUpperForms'])->name('courses.nail_modeling_upper_forms');
    //   лами
    Route::get('/laminirovanie', [LaminationController::class, 'index'])->name('courses.lamination');
    // онлайн маникюр
    Route::get('/onlayn-manikyur', [OnlineManicureController::class, 'index'])->name('courses.onlinemanicure');
    //  бесплатные курсы
    Route::get('/besplatnyy-kurs-manikyura', [FreeCoursesController::class, 'manicure'])->name('courses.free.manicure');
    Route::get('/besplatnyy-kurs-hairstylist', [FreeCoursesController::class, 'hairstylist'])->name('courses.free.hairstylist');
    Route::get('/besplatnyy-simple-start', [FreeCoursesController::class, 'simplestart'])->name('courses.free.simplestart');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/mycourses', [MyCoursesController::class, 'index'])->name('mycourses.index');
    Route::get('/mycourses/{id}', [MyCoursesController::class, 'show'])->name('mycourses.show');
    Route::get('/mycourses/{id}/{lesson_id}', [MyLessonController::class, 'show'])->name('lesson.show');
    Route::post('/mycourses/{id}/{lesson_id}/complete', [MyLessonController::class, 'complete'])->name('lesson.complete');
});


Route::get('/log-in', function () {
    return redirect()->route('login', [], 301);
});

Route::middleware([IsAdmin::class])->prefix('console')->group(function () {
    Route::get('/', [ConsoleController::class, 'show'])->name('console');
    Route::resource('courses', CourseController::class);
    Route::resource('lessons', LessonsController::class);
    Route::resource('user', UserController::class);
    Route::post('/admin/users/{user}/courses/{course}/assign', [UserController::class, 'assignSingleCourse'])->name('user.assignSingleCourse');
    Route::delete('/admin/users/{user}/revoke-course/{course}', [UserController::class, 'revokeCourse'])->name('user.revokeCourse');
    Route::delete('/lesson-contents/{content}', [LessonContentController::class, 'destroy'])->name('lesson-contents.destroy');
});

Route::get('/tintly/api/1.1/appconfig/version', function () {
    return response()->json([
        'version' => env('TINTLYVERSION', '1.0.0'),
    ]);
});

Route::get('/tintly', function () {
    return view('tintly.tintly');
})->name('tintlyhome');

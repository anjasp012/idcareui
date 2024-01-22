<?php

use App\Http\Controllers\Admin\Pages\KontakController;
use App\Models\Post;
use App\Models\Risetlaporan;
use Illuminate\Support\Facades\Route;
use Spatie\Sitemap\Sitemap;
use Spatie\Sitemap\Tags\Url;

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



Route::get('/', [App\Http\Controllers\GuestController::class, 'index'])->name('beranda');
Route::get('/sekilas-idcare', [App\Http\Controllers\GuestController::class, 'sekilas'])->name('sekilas');
Route::get('/pendahuluan', [App\Http\Controllers\GuestController::class, 'pendahuluan'])->name('pendahuluan');
Route::get('/sambutan-pimpinan', [App\Http\Controllers\GuestController::class, 'sambutan_pimpinan'])->name('sambutan_pimpinan');
Route::get('/message-from-jica', [App\Http\Controllers\GuestController::class, 'message_from_jica'])->name('message_from_jica');
Route::get('/kontak', [App\Http\Controllers\GuestController::class, 'kontak'])->name('kontak');
Route::get('/berita', [App\Http\Controllers\GuestController::class, 'berita'])->name('berita');
Route::get('/detail-berita/{slug}', [App\Http\Controllers\GuestController::class, 'detailBerita'])->name('detailBerita');
Route::get('/report', [App\Http\Controllers\GuestController::class, 'acara'])->name('acara');
Route::get('/detail-acara/{slug}', [App\Http\Controllers\GuestController::class, 'detailAcara'])->name('detailAcara');
Route::get('/class', [App\Http\Controllers\GuestController::class, 'class'])->name('class');
Route::get('/class/{slug}', [App\Http\Controllers\GuestController::class, 'detailClass'])->name('detailClass');
Route::get('/klaster', [App\Http\Controllers\GuestController::class, 'klaster'])->name('klaster');
Route::get('/camp', [App\Http\Controllers\GuestController::class, 'camp'])->name('camp');
Route::get('/subjects', [App\Http\Controllers\GuestController::class, 'mataKuliah'])->name('mataKuliah');
Route::get('/certificate', [App\Http\Controllers\GuestController::class, 'sertifikat'])->name('sertifikat');
Route::get('/how-to-apply', [App\Http\Controllers\GuestController::class, 'caraRegistrasi'])->name('cara-registrasi');
Route::get('/kelas', [App\Http\Controllers\GuestController::class, 'kelas'])->name('kelas');
Route::get('/research-paper-id', [App\Http\Controllers\GuestController::class, 'riset'])->name('riset');
Route::get('/research-paper-id/{slug}', [App\Http\Controllers\GuestController::class, 'detailRiset'])->name('detailRiset');
Route::get('/research-paper-id', [App\Http\Controllers\GuestController::class, 'riset'])->name('riset');
Route::get('/open-courseware', [App\Http\Controllers\GuestController::class, 'openCourseware'])->name('openCourseware');
Route::get('/open-courseware/{slug}', [App\Http\Controllers\GuestController::class, 'detailOpenCourseware'])->name('detailOpenCourseware');

Auth::routes();

Route::middleware(['auth'])->prefix('admin')->name('admin.')->group(function () {
    Route::get('/', App\Http\Controllers\Admin\DashboardController::class)->name('dashboard');
    Route::resource('klaster', App\Http\Controllers\Admin\KlasterController::class);
    Route::resource('class', App\Http\Controllers\Admin\ClassController::class);
    Route::prefix('pages')->name('pages.')->group(function () {
        Route::resource('acara', App\Http\Controllers\Admin\Pages\AcaraController::class);
        Route::resource('berita', App\Http\Controllers\Admin\Pages\BeritaController::class);
        Route::resource('opencourseware', App\Http\Controllers\Admin\Pages\OpenCoursewareController::class);
        Route::resource('riset-laporan', App\Http\Controllers\Admin\Pages\RisetLaporanController::class);
        Route::get('sekilas-idcare-ui', [App\Http\Controllers\Admin\Pages\SekilasIdCareUiController::class, 'index'])->name('sekilas-idcare-ui.index');
        Route::get('sekilas-idcare-ui/edit', [App\Http\Controllers\Admin\Pages\SekilasIdCareUiController::class, 'edit'])->name('sekilas-idcare-ui.edit');
        Route::put('sekilas-idcare-ui/update', [App\Http\Controllers\Admin\Pages\SekilasIdCareUiController::class, 'update'])->name('sekilas-idcare-ui.update');
        Route::put('sekilas-idcare-ui/updateBg', [App\Http\Controllers\Admin\Pages\SekilasIdCareUiController::class, 'updateBg'])->name('sekilas-idcare-ui.updateBg');
        Route::get('pendahuluan', [App\Http\Controllers\Admin\Pages\PendahuluanController::class, 'index'])->name('pendahuluan.index');
        Route::get('pendahuluan/edit', [App\Http\Controllers\Admin\Pages\PendahuluanController::class, 'edit'])->name('pendahuluan.edit');
        Route::put('pendahuluan/update', [App\Http\Controllers\Admin\Pages\PendahuluanController::class, 'update'])->name('pendahuluan.update');
        Route::put('pendahuluan/updateBg', [App\Http\Controllers\Admin\Pages\PendahuluanController::class, 'updateBg'])->name('pendahuluan.updateBg');
        Route::get('sambutan-pimpinan', [App\Http\Controllers\Admin\Pages\SambutanPimpinanController::class, 'index'])->name('sambutan-pimpinan.index');
        Route::get('sambutan-pimpinan/edit', [App\Http\Controllers\Admin\Pages\SambutanPimpinanController::class, 'edit'])->name('sambutan-pimpinan.edit');
        Route::put('sambutan-pimpinan/update', [App\Http\Controllers\Admin\Pages\SambutanPimpinanController::class, 'update'])->name('sambutan-pimpinan.update');
        Route::put('sambutan-pimpinan/updateBg', [App\Http\Controllers\Admin\Pages\SambutanPimpinanController::class, 'updateBg'])->name('sambutan-pimpinan.updateBg');
        Route::get('klaster', [App\Http\Controllers\Admin\Pages\KlasterController::class, 'index'])->name('klaster.index');
        Route::get('klaster/edit', [App\Http\Controllers\Admin\Pages\KlasterController::class, 'edit'])->name('klaster.edit');
        Route::put('klaster/update', [App\Http\Controllers\Admin\Pages\KlasterController::class, 'update'])->name('klaster.update');
        Route::put('klaster/updateBg', [App\Http\Controllers\Admin\Pages\KlasterController::class, 'updateBg'])->name('klaster.updateBg');
        Route::get('jica-sebagai-partner', [App\Http\Controllers\Admin\Pages\MessageFromJicaController::class, 'index'])->name('message-from-jica.index');
        Route::get('jica-sebagai-partner/edit', [App\Http\Controllers\Admin\Pages\MessageFromJicaController::class, 'edit'])->name('message-from-jica.edit');
        Route::put('jica-sebagai-partner/update', [App\Http\Controllers\Admin\Pages\MessageFromJicaController::class, 'update'])->name('message-from-jica.update');
        Route::put('jica-sebagai-partner/updateBg', [App\Http\Controllers\Admin\Pages\MessageFromJicaController::class, 'updateBg'])->name('message-from-jica.updateBg');
        Route::get('subject-pelatihan', [App\Http\Controllers\Admin\Pages\MataKuliahController::class, 'index'])->name('subject-pelatihan.index');
        Route::get('subject-pelatihan/edit', [App\Http\Controllers\Admin\Pages\MataKuliahController::class, 'edit'])->name('subject-pelatihan.edit');
        Route::put('subject-pelatihan/update', [App\Http\Controllers\Admin\Pages\MataKuliahController::class, 'update'])->name('subject-pelatihan.update');
        Route::put('subject-pelatihan/updateBg', [App\Http\Controllers\Admin\Pages\MataKuliahController::class, 'updateBg'])->name('subject-pelatihan.updateBg');
        Route::get('sertifikat', [App\Http\Controllers\Admin\Pages\SertifikatController::class, 'index'])->name('sertifikat.index');
        Route::get('sertifikat/edit', [App\Http\Controllers\Admin\Pages\SertifikatController::class, 'edit'])->name('sertifikat.edit');
        Route::put('sertifikat/update', [App\Http\Controllers\Admin\Pages\SertifikatController::class, 'update'])->name('sertifikat.update');
        Route::put('sertifikat/updateBg', [App\Http\Controllers\Admin\Pages\SertifikatController::class, 'updateBg'])->name('sertifikat.updateBg');
        Route::get('cara-registrasi', [App\Http\Controllers\Admin\Pages\CaraRegistrasiController::class, 'index'])->name('cara-registrasi.index');
        Route::get('cara-registrasi/edit', [App\Http\Controllers\Admin\Pages\CaraRegistrasiController::class, 'edit'])->name('cara-registrasi.edit');
        Route::put('cara-registrasi/update', [App\Http\Controllers\Admin\Pages\CaraRegistrasiController::class, 'update'])->name('cara-registrasi.update');
        Route::put('cara-registrasi/updateBg', [App\Http\Controllers\Admin\Pages\CaraRegistrasiController::class, 'updateBg'])->name('cara-registrasi.updateBg');
        Route::get('kelas', [App\Http\Controllers\Admin\Pages\KelasController::class, 'index'])->name('kelas.index');
        Route::get('kelas/edit', [App\Http\Controllers\Admin\Pages\KelasController::class, 'edit'])->name('kelas.edit');
        Route::put('kelas/update', [App\Http\Controllers\Admin\Pages\KelasController::class, 'update'])->name('kelas.update');
        Route::put('kelas/updateBg', [App\Http\Controllers\Admin\Pages\KelasController::class, 'updateBg'])->name('kelas.updateBg');
        Route::get('camp', [App\Http\Controllers\Admin\Pages\CampController::class, 'index'])->name('camp.index');
        Route::get('camp/edit', [App\Http\Controllers\Admin\Pages\CampController::class, 'edit'])->name('camp.edit');
        Route::put('camp/update', [App\Http\Controllers\Admin\Pages\CampController::class, 'update'])->name('camp.update');
        Route::put('camp/updateBg', [App\Http\Controllers\Admin\Pages\CampController::class, 'updateBg'])->name('camp.updateBg');
        Route::get('kontak', [App\Http\Controllers\Admin\Pages\KontakController::class, 'index'])->name('kontak.index');
        Route::get('kontak/edit', [App\Http\Controllers\Admin\Pages\KontakController::class, 'edit'])->name('kontak.edit');
        Route::put('kontak/update', [App\Http\Controllers\Admin\Pages\KontakController::class, 'update'])->name('kontak.update');
        Route::put('kontak/updateBg', [App\Http\Controllers\Admin\Pages\KontakController::class, 'updateBg'])->name('kontak.updateBg');
    });
});

Route::group(['prefix' => 'filemanager', 'middleware' => ['web', 'auth']], function () {
    \UniSharp\LaravelFilemanager\Lfm::routes();
});

Route::get('/sitemap', function () {
    $sitemap = Sitemap::create()
        ->add(Url::create('/about-us'))
        ->add(Url::create('/contact_us'));

    $berita = Post::where('category', 'news')->orderBy('created_at', 'desc')->whereStatus('publish')->get();
    foreach ($berita as $post) {
        $sitemap->add(Url::create(route('detailBerita', $post->slug)));
    }
    $acara = Post::where('category', 'articles')->orderBy('created_at', 'desc')->whereStatus('publish')->get();
    foreach ($acara as $post) {
        $sitemap->add(Url::create(route('detailAcara', $post->slug)));
    }
    $course = Post::where('category', 'videos')->orderBy('created_at', 'desc')->whereStatus('publish')->get();
    foreach ($course as $post) {
        $sitemap->add(Url::create(route('detailOpenCourseware', $post->slug)));
    }
    $class = Post::where('category', 'class')->orderBy('created_at', 'desc')->whereStatus('publish')->get();
    foreach ($class as $post) {
        $sitemap->add(Url::create(route('detailClass', $post->slug)));
    }
    $riset = Risetlaporan::all();
    foreach ($riset as $post) {
        $sitemap->add(Url::create(route('detailRiset', $post->slug)));
    }
    $sitemap->writeToFile(public_path('sitemap.xml'));
});

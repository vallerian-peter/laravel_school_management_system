<?php

use App\Http\Controllers\LectureAuth;
use App\Http\Controllers\StudentAuth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentProfile;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\PdfDowloadController;
use App\Http\Controllers\LecturePageController;
use App\Http\Controllers\StudentPageController;
use App\Http\Controllers\StudentResultController;
use App\Http\Controllers\LectureProfileController;
use App\Http\Controllers\LectureResultsController;

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

// first welcome / landing page
Route::get('/', function () {
    return view('index');
});

// download Transcript
Route::get('index', [StudentPageController::class,'download']);

// select page
Route::get('select', function() {
    return view('select');
});

// view student login page
Route::get('studentLogin', function() {
    return view('student.studentLogin');
});


Route::get('studentRegister', [StudentAuth::class,'studentRegform'])->name('student.register.form');
Route::get('studentLogout', [StudentAuth::class,'studentLogout'])->name('student.Logout');
Route::post('Registerstudent', [StudentAuth::class,'registerStudent'])->name('student.register');
Route::post('Loginstudent', [StudentAuth::class,'studentlogin'])->name('student.login');


// student middleware
Route::middleware(['studentAuth'])->group(function () {
    Route::get('studentDashboard', [StudentPageController::class,'studentdashboard'])->name('student.dashboard');

    // profile
    Route::get('studentProfile', [StudentPageController::class,'studentprofile'])->name('student.profile');
    Route::get('studentCourseModules', [StudentPageController::class,'studentcoursemodules'])->name('student.course.modules');
    Route::get('studentAcademicRecords', [StudentPageController::class,'academicrecords'])->name('student.academic.records');

    // student filter module
    Route::get('filter', [StudentPageController::class,'filtermodule'])->name('filter');

    // student display 
    Route::get('studentResult{resultId}year', [StudentResultController::class,'studentresultsdisplay'])->name('student.results.display');

    // student Trascript trascriptDownload
    Route::get('studentTranscript', [StudentPageController::class,'studenttranscript'])->name('student.transcript');
    Route::get('trascriptDownload', [PdfDowloadController::class,'studentdownloadtranscript'])->name('student.download.transcript');

    // post update profile
    Route::post('studentUpdateAvatar', [StudentProfile::class,'updateavatar'])->name('student.update.avatar');
    Route::post('updateDetails', [StudentProfile::class,'updatedetails'])->name('student.update.details');
    Route::post('updateGender', [StudentProfile::class,'updategender'])->name('student.update.gender');
    Route::post('updateCourse', [StudentProfile::class,'updatecourse'])->name('student.update.course');
    Route::post('updatePassword', [StudentProfile::class,'updatepassword'])->name('student.update.password');
});


// lecture login
Route::get('lectureLogin', function() {
    return view('lecture.lectureLogin');
});

// lecture register
Route::get('lectureRegister', [LectureAuth::class, 'lectureRegister'])->name('lecture.register.form');

// lecture - post  
Route::post('registerLecture', [LectureAuth::class, 'registerLecture'])->name('register.lecture');
Route::post('loginLecture', [LectureAuth::class, 'loginLecture'])->name('login.lecture');


// lecture Middleware
Route::middleware(['lectureAuth'])->group(function () {

    // lecture dashboard 
    Route::get('lectureDashboard', [LecturePageController::class,'lecturedashboard'])->name('lecture.dashboard');
    Route::get('lectureProfile', [LecturePageController::class,'lectureprofile'])->name('lecture.profile');
    Route::get('lectureAllStudents', [LecturePageController::class,'lectureallstudents'])->name('lecture.all.students');
    Route::get('lectureAllResults', [LecturePageController::class,'lectureallresults'])->name('lecture.all.results');

    // post update
    Route::post('lectureUpdateAvatar', [LectureProfileController::class,'updateavatar'])->name('lecture.update.avatar');
    Route::post('lectureUpdateDetails', [LectureProfileController::class,'updatedetails'])->name('lecture.update.details');
    Route::post('lectureUpdateModule', [LectureProfileController::class,'updatemodule'])->name('lecture.update.module');
    Route::post('lectureUpdatePassword', [LectureProfileController::class,'updatepassword'])->name('lecture.update.password');
 
    // lecture results
    Route::post('lectureAddResults', [LectureResultsController::class,'lectureaddresult'])->name('lecture.add.result');
    Route::post('lectureUpdateResults', [LectureResultsController::class,'lectureupdateresult'])->name('lecture.update.result');
    
    // lecture delete result
    Route::get('/deleteResult/{studentId}', [LectureResultsController::class, 'deleteresult'])->name('lecture.delete.result');

    // lecture - Add Result - EXCEL
    Route::post('AddCsvResult', [LectureResultsController::class, 'exceladdresult']);

    // search results
    Route::get('searchResult', [LectureResultsController::class,'searchResult'])->name('searchResult');

    // lecture Logout
    Route::get('lectureLogout', [LectureAuth::class, 'lecturelogout'])->name('lecture.logout');

});


// admin Middleware
Route::middleware(['adminAuth'])->group(function () {

    // admin pages
    Route::get('adminDashboard', [AdminController::class, 'admindashboard'])->name('admin.dashboard');
    Route::get('adminAllModules', [AdminController::class, 'adminallmodules'])->name('admin.all.modules');
    Route::get('adminAllCourses', [AdminController::class, 'adminallcourses'])->name('admin.all.courses');
    Route::get('adminAllStudents', [AdminController::class, 'adminallstudents'])->name('admin.all.students');
    Route::get('adminAllDepartments', [AdminController::class, 'adminalldepartments'])->name('admin.all.departments');
    Route::get('adminAllLectures', [AdminController::class, 'adminalllectures'])->name('admin.all.lectures');
    Route::get('adminAllResults', [AdminController::class, 'adminallresults'])->name('admin.all.results');

    // admin posts
    Route::post('AdminAddModule', [AdminController::class,'adminaddmodule'])->name('admin.add.module');
    Route::post('AdminAddCourse', [AdminController::class,'adminaddcourse'])->name('admin.add.course');
    Route::post('AdminAddStudent', [AdminController::class,'registerStudent'])->name('admin.add.student');
    Route::post('AdminAddDepartment', [AdminController::class,'addDepartment'])->name('admin.add.department');

    // admin - excel
    Route::post('excelAddStudent', [AdminController::class,'exceladdstudent'])->name('excel.add.student');

    // admin - updates
    Route::post('AdminUpdateCourse', [AdminController::class,'adminupdatecourse'])->name('admin.update.course');
    Route::post('AdminUpdateDepartment', [AdminController::class,'adminupdatedepartment'])->name('admin.update.department');
    
    // search - student
    Route::get('searchStudent', [AdminController::class,'searchStudent'])->name('searchStudent');

    // Admin - deletes
    Route::get('adminDeleteStudent{id}', [AdminController::class,'admindeletestudent'])->name('admin.delete.student');
    Route::get('adminDeleteModule{id}', [AdminController::class,'admindeletemodule'])->name('admin.delete.module');
    Route::get('adminDeleteCourse{id}', [AdminController::class,'admindeletecourse'])->name('admin.delete.course');
    Route::get('adminDeleteDepartment{id}', [AdminController::class,'admindeletedepartment'])->name('admin.delete.department');
    Route::get('adminDeleteLecture{id}', [AdminController::class,'admindeletelecture'])->name('admin.delete.lecture');
    Route::get('adminDeleteResult{id}', [AdminController::class,'admindeleteresult'])->name('admin.delete.result');

    //admin - logout
    Route::get('adminLogout', [AdminController::class,'adminlogout'])->name('admin.logout');
});


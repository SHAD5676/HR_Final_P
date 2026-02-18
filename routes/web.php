<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\DesignationController;
use App\Http\Controllers\LeaveController;
use App\Http\Controllers\AttendanceController;
use App\Http\Controllers\HolidayController; 
use App\Http\Controllers\PayrollController; 
use App\Http\Controllers\NoticeController;  
use App\Http\Controllers\SettingController; 
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\Auth\LoginController as UserLoginController;
use App\Http\Controllers\Auth\Admin\LoginController as AdminLoginController;
use App\Http\Controllers\Auth\Employee\LoginController as EmployeeLoginController;


Route::get('/', [FrontendController::class, 'index'])->name('home');
Route::get('/contact', [FrontendController::class, 'contact'])->name('contact');
Route::get('/about', [FrontendController::class, 'about'])->name('about');

/* ================= USER (WEB) ROUTES ================= */
Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/dashboard', function () {
        return view('backend.dashboard');
    })->name('dashboard');

    Route::prefix('profile')->name('profile.')->group(function () {
        Route::get('/', [ProfileController::class, 'edit'])->name('edit');
        Route::patch('/', [ProfileController::class, 'update'])->name('update');
        Route::delete('/', [ProfileController::class, 'destroy'])->name('destroy');
    });
});

/* ================= ADMIN ROUTES ================= */
Route::prefix('admin')->name('admin.')->group(function () {

    // Guest routes (Login)
    Route::middleware('guest:admin')->group(function () {
        Route::get('login', [AdminLoginController::class, 'create'])->name('login');
        Route::post('login', [AdminLoginController::class, 'store']);
    });

    // Dashboard & CRUD
    Route::middleware('auth:admin')->group(function () {
        Route::post('logout', [AdminLoginController::class, 'destroy'])->name('logout');

        Route::get('dashboard', function () {
            return view('backend.admin_dashboard');
        })->name('dashboard');

        //  HOLIDAYS / CALENDAR
        Route::resource('holidays', HolidayController::class);

        //  PAYROLL SYSTEM
        Route::resource('payroll', PayrollController::class);

        //  NOTICE BOARD
        Route::resource('notices', NoticeController::class);

        //   ATTENDANCE (FIXED: Added the Admin Routes HERE)
        Route::get('attendance', [AttendanceController::class, 'adminIndex'])->name('attendance.index');
        Route::get('attendance/create', [AttendanceController::class, 'create'])->name('attendance.create');
        Route::post('attendance', [AttendanceController::class, 'store'])->name('attendance.store');
        Route::delete('attendance/{id}', [AttendanceController::class, 'destroy'])->name('attendance.destroy');

        //  LEAVE MANAGEMENT
        Route::get('leaves', [LeaveController::class, 'index'])->name('leaves.index');
        Route::post('leaves/status/{id}', [LeaveController::class, 'updateStatus'])->name('leaves.status');

        // --- CRUD RESOURCES ---
        Route::resource('departments', DepartmentController::class);
        Route::resource('employees', EmployeeController::class);
        Route::resource('designations', DesignationController::class);

        // GENERAL SETTINGS
        Route::get('settings', [SettingController::class, 'index'])->name('settings.index');
        Route::post('settings', [SettingController::class, 'update'])->name('settings.update');
    });
});



/* ================= EMPLOYEE ROUTES ================= */
Route::prefix('employee')->name('employee.')->group(function () {

    // Guest (Login)
    Route::middleware('guest:employee')->group(function () {
        Route::get('login', [EmployeeLoginController::class, 'create'])->name('login');
        Route::post('login', [EmployeeLoginController::class, 'store']);
    });

    // Protected Routes (Dashboard, Leaves, Attendance, Profile)
    Route::middleware('auth:employee')->group(function () {
        Route::post('logout', [EmployeeLoginController::class, 'destroy'])->name('logout');

        Route::get('dashboard', function () {
            return view('backend.employee_dashboard');
        })->name('dashboard');
        
        // NOTICES 
        Route::get('notices', [NoticeController::class, 'employeeIndex'])->name('notices.index');

        // LEAVE ROUTES
        Route::get('leaves/apply', [LeaveController::class, 'create'])->name('leaves.create');
        Route::post('leaves/store', [LeaveController::class, 'store'])->name('leaves.store');

        // ATTENDANCE ROUTES (Only Clock In/Out & History here)
        Route::post('clock-in', [AttendanceController::class, 'clockIn'])->name('attendance.clock_in');
        Route::post('clock-out', [AttendanceController::class, 'clockOut'])->name('attendance.clock_out');
        Route::get('attendance-history', [AttendanceController::class, 'employeeHistory'])->name('attendance.history');

        // MY PAYROLL / SALARY SLIPS
        Route::get('my-payroll', [PayrollController::class, 'employeeIndex'])->name('payroll.index');
        Route::get('my-payroll/invoice/{id}', [PayrollController::class, 'employeeShow'])->name('payroll.show');

        // HOLIDAY CALENDAR
        Route::get('holidays', [HolidayController::class, 'employeeIndex'])->name('holidays.index');

        // PROFILE SETTINGS
        Route::get('profile', [EmployeeController::class, 'profile'])->name('profile');
        Route::post('profile', [EmployeeController::class, 'updateProfile'])->name('profile.update');
    });
});

require __DIR__ . '/auth.php';
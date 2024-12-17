<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use App\Models\Doctor;
use App\Models\Enquiry;
use App\Models\GoogleAnalyticsTopDevice;
use App\Models\GoogleAnalyticsTopLandingPage;
use App\Models\GoogleAnalyticsTopReferrer;
use App\Models\GoogleAnalyticsVisitor;
use App\Models\Service;
use Vormkracht10\Analytics\Facades\Analytics;
use Vormkracht10\Analytics\Period;
use Carbon\Carbon;


class DashboardController extends Controller
{
    public function index()
    {
        $totalAppointments              = Appointment::count();
        $pendingAttendedAppointments    = Appointment::where('status', 0)->count();
        $attendedAppointments           = Appointment::where('status', 1)->count();
        $totalEnquiries                 = Enquiry::count();
        $pendingAttendedEnquiries       = Appointment::where('status', 0)->count();
        $attendedEnquiries              = Appointment::where('status', 1)->count();
        $totalServices                  = Service::count();
        $totalDoctors                   = Doctor::count();
        // Google Analytics

        $totalViews  = Analytics::sessions(Period::months(100));
        $last30DaysVisitors = GoogleAnalyticsVisitor::orderby('date', 'asc')->get();

        $topDevices = GoogleAnalyticsTopDevice::all();
        $topReferrers = GoogleAnalyticsTopReferrer::all();
        $topLandingPages = GoogleAnalyticsTopLandingPage::all();
        return view('admin.dashboard.index', 
               compact('totalAppointments', 'pendingAttendedAppointments', 'attendedAppointments', 
                        'totalEnquiries', 'pendingAttendedEnquiries', 'attendedEnquiries', 
                        'totalServices', 'totalDoctors', 'topDevices', 'topReferrers', 
                        'last30DaysVisitors', 'topLandingPages','totalViews'));
    }
}

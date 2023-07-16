<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class NotificationController extends Controller
{
    public function notifications()
    {
        $notifications = auth()->user()->unreadNotifications;

        return view('admin.notifications.index', [
            'notifications' => $notifications
        ]);
    }
}

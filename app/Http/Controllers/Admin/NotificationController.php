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

    public function readOne($codeNotification)
    {
        $notification = auth()->user()->notifications()->find($codeNotification);
        $notification->markAsRead();

        flash('Notificação marcada como lida.');
        return redirect()->back();
    }

    public function readAll()
    {
        $unreadNotifications = auth()->user()->unreadNotifications;

        $unreadNotifications->each(function ($notification) {
            $notification->markAsRead();
        });

        flash('Notificações marcadas como lidas.');
        return redirect()->back();
    }
}

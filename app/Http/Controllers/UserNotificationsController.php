<?php

namespace App\Http\Controllers;

class UserNotificationsController extends Controller
{
    protected $user;

    public function __construct()
    {
        $this->middleware('auth');
       
    }

    public function index()
    { 
        $user = auth()->user();
        return $user->unreadNotifications;
    }

    public function destroy($user, $notificationId)
    {
        $user = auth()->user();
        $user->notifications()->findOrFail($notificationId)->markAsRead();
    }
}
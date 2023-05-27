<?php

namespace App\Services;

class AlertService
{
    public function alert($type, $message)
    {
        session()->flash('alert', [
            'type' => $type,
            'message' => $message
        ]);
    }
}

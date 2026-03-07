<?php
namespace App\Http\Controllers\Api;
use App\Http\Controllers\Controller;
use App\Services\TimeService;
class TimeController extends Controller
{
    protected $timeService;
    public function __construct(TimeService $timeService) {
        $this->timeService = $timeService;
    }
    public function index() {
        return response()->json(['current_time' => $this->timeService->getCurrentTime()]);
    }
}

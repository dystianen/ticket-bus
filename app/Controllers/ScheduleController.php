<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ScheduleModel;

class ScheduleController extends BaseController
{
    public function searchTicket()
    {
        $from = $this->request->getGet('from_terminal_id');
        $to = $this->request->getGet('destination_id');
        $date = $this->request->getGet('date');

        $scheduleModel = new ScheduleModel();
        $scheduleModel->select('
            schedules.*,
            destinations.estimated_time,
            buses.bus_name, buses.bus_type,
            tf.name as from_terminal,
            tt.name as to_terminal
        ');
        $scheduleModel->join('destinations', 'schedules.destination_id = destinations.id');
        $scheduleModel->join('buses', 'schedules.bus_id = buses.id');
        $scheduleModel->join('terminals tf', 'destinations.origin_terminal_id = tf.id');
        $scheduleModel->join('terminals tt', 'destinations.destination_terminal_id = tt.id');
        $scheduleModel->where('destinations.origin_terminal_id', $from);
        $scheduleModel->where('destinations.destination_terminal_id', $to);
        $scheduleModel->where('schedules.departure_date', $date);
        $scheduleModel->where('schedules.available_seats >', 0);
        $query = $scheduleModel->get();

        $data['schedules'] = $query->getResultArray();
        return view('customer/v_search_result', $data);
    }
}

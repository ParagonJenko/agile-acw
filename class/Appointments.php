<?php 
namespace appointmentSystem;

class Appointments {
    static function viewAllMyAppointments(){
        // Search DB for appointment

        $appointments = [
            ["Health & Wellbeing", "15th March 2020 12:00", "Students Union - Room 1"],
            ["Academic Support Tutor", "20th March 2020 11:00", "Robert Blackburn - Room 211"],
        ];

        return $appointments;
    }

    public function addAppointment($appointment_id, $start_time, $end_time, $for, $with) {

    }

    public function cancelAppointment($appointment_id) {

    }

    public function addNoteToAppointment($appointment_id, $added_note) {

    }

    public function acceptAppointment($appointment_id) {

    }

    public function requestTimeChangeForAppointment($appointment_id, $time_change) {

    }

    public function checkForOverlappingAppointments($appointment_1, $appointment_2) {
        if($appointment_1 == $appointment_2){
            return true;
        }
    }

    public function referAppointmentToOtherStaff($appointment_id, $staff_to_refer) {

    }

    public function countCancelledAppointments() {
        // loop through all appointments, count cancelled
    }
}

?>
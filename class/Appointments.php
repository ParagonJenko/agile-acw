<?php 
namespace appointmentSystem;

/*
Appointments DB

Table Name: appointments
id - int, pk
date - date
start_time - time
for - int fk
with - int fk
cancelled - bool

Table Name: appointment_notes
id - int, pk
appointment_id - int, fk
note - text

*/

class Appointments {
    static function viewAllMyAppointments($user_id){
        // SELECT * FROM appointments WHERE for_id = ?

        $appointments = [
            ["Health & Wellbeing", "15th March 2020 12:00", "Students Union - Room 1"],
            ["Academic Support Tutor", "20th March 2020 11:00", "Robert Blackburn - Room 211"],
        ];

        return $appointments;
    }

    public function addAppointment($date, $start_time, $for, $with) {
        if(!$this->checkForOverlappingAppointments($start_time)){
            //INSERT INTO appointments (date, start_time, for, with) VALUES (?, ?, ?, ?)
        }
        else {
            return false;
        }
    }

    public function cancelAppointment($appointment_id) {
        // UPDATE appointments SET cancelled = true WHERE appointment_id = ?
    }

    public function addNoteToAppointment($appointment_id, $added_note) {
        // INSERT INTO appointment_notes (appointment_id, note) VALUES (?, ?)
    }

    public function acceptAppointment($appointment_id) {
        // UPDATE appointments SET accepted = true WHERE appointment_id = ?
    }

    public function requestTimeChangeForAppointment($time_change, $appointment_id) {
        // UPDATE appointments SET start_time = ? WHERE id = ?
    }

    public function checkForOverlappingAppointments($appointment_1, $appointment_2 = null) {
        if($appointment_1 == $appointment_2 && $appointment_2 != null){
            return true;
        }
        
        // SELECT * FROM appointments WHERE for = ?

        // TODO: Check all appointments for user
        // Loop through and check start time for both

        return false;
    }

    public function referAppointmentToOtherStaff($staff_to_refer, $appointment_id) {
        // UPDATE appointments SET with = ? WHERE id = ?
    }

    public function countCancelledAppointments() {
        // loop through all appointments, count cancelled
        // SELECT id FROM appointments WHERE cancelled = true;

        // COUNT
    }
}

?>
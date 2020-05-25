<?php 
namespace appointmentSystem;

class Appointments {
    public function addAppointment();

    public function cancelAppointment();

    public function addNoteToAppointment();

    public function acceptAppointment();

    public function requestTimeChangeForAppointment();

    public function checkForOverlappingAppointments();

    public function referAppointmentToOtherStaff();

    public function countCancelledAppointments();
}

?>
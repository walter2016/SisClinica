<?php

namespace App\Policies;

use App\User;
use App\Appointment;
use Illuminate\Auth\Access\HandlesAuthorization;

class AppointmentPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view the appointment.
     *
     * @param  \App\User  $user
     * @param  \App\Appointment  $appointment
     * @return mixed
     */
    public function view(User $user, Appointment $appointment)
    {
        //
    }

    /**
     * Determine whether the user can create appointments.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        //
    }

    /**
     * Determine whether the user can update the appointment.
     *
     * @param  \App\User  $user
     * @param  \App\Appointment  $appointment
     * @return mixed
     */
    public function update(User $user, Appointment $appointment)
    {
        //
    }

    /**
     * Determine whether the user can delete the appointment.
     *
     * @param  \App\User  $user
     * @param  \App\Appointment  $appointment
     * @return mixed
     */
    public function delete(User $user, Appointment $appointment)
    {
        //
    }

    /**
     * Determine whether the user can restore the appointment.
     *
     * @param  \App\User  $user
     * @param  \App\Appointment  $appointment
     * @return mixed
     */
    public function restore(User $user, Appointment $appointment)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the appointment.
     *
     * @param  \App\User  $user
     * @param  \App\Appointment  $appointment
     * @return mixed
     */
    public function forceDelete(User $user, Appointment $appointment)
    {
        //
    }

    public function edit_back_appointment(User $user, Appointment $appointment)
    {
        if($user->has_role(config('app.doctor_role'))){
            return  $user->id == $appointment->doctor()->id;
        }else{
            return true;
        }
    }


}

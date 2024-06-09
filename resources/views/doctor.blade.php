@extends('layout.app')

@section('content')

@props(['doctors'])


{{-- @dd($doctor->practiceSchedules) --}}


<div class="doctor-detail">
    <div class="button-container">
        <a href="/home" class="back-button">
            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-arrow-left-short btn-back-icon btn-primary" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M12 8a.5.5 0 0 1-.5.5H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5a.5.5 0 0 1 .5.5z"></path>
            </svg>
        </a>
    </div>
    <div class="doctor-header">
        <img src="{{ $doctor->image }}" alt="{{ $doctor->name }}">
        <div class="doctor-info">
            <h3>{{ $doctor->name }}</h3>
            <p>No STR: {{ $doctor->str_number }}</p>
            <p class="experience-year">{{ $doctor->first_practice_year }}</p>
        </div>
    </div>
    <div class="doctor-detail-container">
        <div class="doctor-details">
            <div class="detail-item">
                <h3>Clinical Interest</h3>
                <p>{{ $doctor->clinical_interest }}</p>
            </div>
            <div class="detail-item">
                <h3>Pendidikan</h3>
                <p>{{ $doctor->education }}</p>
            </div>
        </div>
        <div class="clinic-location">
            <h3>Lokasi Klinik</h3>
            <div class="select-container">
                <select id="clinic-location-select">
                    @foreach ($doctor->clinicLocations as $location)
                        <option value="{{ $location->id }}">{{ $location->location_name }}</option>
                    @endforeach
                </select>
            </div>
            <table class="schedule-table">
                
                <tbody id="schedule-body">
                    @foreach ($doctor->clinicLocations->first()->practiceSchedules as $schedule)
                        <tr>
                            <td class="day">{{ $schedule->day }}</td>
                            <td><span class="time">{{ $schedule->start_time ? str_replace(':00', '', $schedule->start_time) . ' - ' . str_replace(':00', '', $schedule->end_time) : '-' }}</span></td>       
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>  

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const clinicLocationSelect = document.getElementById('clinic-location-select');
        const scheduleBody = document.getElementById('schedule-body');
        const clinicLocations = @json($doctor->clinicLocations);

        function formatTime(time) {
            if (!time) return '-';
            return time.replace(':00', '');
        }

        clinicLocationSelect.addEventListener('change', function () {
            const selectedLocationId = this.value;
            const selectedLocation = clinicLocations.find(location => location.id == selectedLocationId);

            scheduleBody.innerHTML = '';

            if (selectedLocation && selectedLocation.practice_schedules) {
                selectedLocation.practice_schedules.forEach(schedule => {
                    const row = document.createElement('tr');
                    const dayCell = document.createElement('td');
                    const timeCell = document.createElement('td');

                    dayCell.textContent = schedule.day;
                    timeCell.innerHTML = schedule.start_time ? `<span class="time">${formatTime(schedule.start_time)} - ${formatTime(schedule.end_time)}</span>` : '-';

                    row.appendChild(dayCell);
                    row.appendChild(timeCell);
                    scheduleBody.appendChild(row);
                });
            } else {
                const row = document.createElement('tr');
                const noDataCell = document.createElement('td');
                noDataCell.textContent = 'No schedule available';
                noDataCell.colSpan = 2;
                row.appendChild(noDataCell);
                scheduleBody.appendChild(row);
            }
        });

        clinicLocationSelect.dispatchEvent(new Event('change'));
    });
</script>

 @endsection   
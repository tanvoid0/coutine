@extends('app')
<div class="row mx-auto" style="width: 400px;">
    <div class="col-sm-12" >

        <form action="{{route('classroom.store')}}" method="POST">
            {{ csrf_field() }}

            <div class="form-group">
                <label for="room_id">Room Number</label>
                @foreach($rooms as $room)
                    <select class="form-control" id="room_id" name="room_id" required>
                        <option value="{{ $room->id }}">{{$room->number}}</option>
                    </select>
                @endforeach
            </div>
            <div class="form-group">
                <label for="weekday_id">Weekday</label>
                @foreach($weekdays as $weekday)
                    <select class="form-control" id="weekday_id" name="weekday_id" required>
                        <option value="{{ $weekday->id }}">{{$weekday->name}}</option>
                    </select>
                @endforeach
            </div>
            <div class="container">

                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="start">Start Time</label>
                            <div class="input-group date" id="start" data-target-input="nearest">
                                <input type="text" class="form-control datetimepicker-input" data-target="#start"  name="start"/>
                                <div class="input-group-append" data-target="#start" data-toggle="datetimepicker">
                                    <div class="input-group-text"><i class="fa fa-clock"></i></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="end">End Time</label>
                            <div class="input-group date" id="end" data-target-input="nearest">
                                <input type="text" class="form-control datetimepicker-input" data-target="#end"  name="end"/>
                                <div class="input-group-append" data-target="#end" data-toggle="datetimepicker">
                                    <div class="input-group-text"><i class="fa fa-clock"></i></div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="form-group">
                <label for="subject_id">Subject</label>
                @foreach($subjects as $subject)
                    <select class="form-control" id="subject_id" name="subject_id" required>
                        <option value="{{ $subject->id }}">{{$subject->code}} {{$subject->name}}</option>
                    </select>
                @endforeach
            </div>
            <div class="form-group">
                <label for="section">Section</label>
                @for($i = a; $i<=z; $i++)
                    <select class="form-control" id="section" name="section" required>
                        <option value="{{$i}}">$i</option>
                    </select>
                @endforeach
            </div>
            <div class="form-group">
                <label for="teacher_id">Teacher</label>
                @foreach($teachers as $teacher)
                    <select class="form-control" id="teacher_id" name="teacher_id" required>
                        <option value="{{ $teacher->id }}">{{$teacher->initial}} {{$teacher->name}}</option>
                    </select>
                @endforeach
            </div>


            <button type="submit" class="btn btn-primary btn-">Submit</button>
        </form>
    </div>
</div>

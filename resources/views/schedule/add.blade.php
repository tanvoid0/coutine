@extends('app')
<div class="row mx-auto" style="width: 400px;">
    <div class="col-sm-12" >

        <form action="{{route('schedule.store')}}" method="POST">
        {{ csrf_field() }}

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
            <button type="submit" class="btn btn-primary btn-">Submit</button>
        </form>
    </div>
</div>

@extends('app')
<div class="row mx-auto" style="width: 400px;">
    <div class="col-sm-12" >

        <form action="{{route('weekday.store')}}" method="POST">
        {{ csrf_field() }}

                <div class="form-group">
                    <label for="name">Weekday Name</label>
                    <input type="text" class="form-control" id="name" placeholder="Saturday/Sunday" name="name">
                </div>
                <button type="submit" class="btn btn-primary btn-">Submit</button>
        </form>
    </div>
</div>

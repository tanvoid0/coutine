@extends('app')
<div class="row mx-auto" style="width: 400px;">
    <div class="col-sm-12" >

        <form action="{{route('room.store')}}" method="POST">
            {{ csrf_field() }}

            <div class="form-group">
                <label for="name">Room Name</label>
                <input type="text" class="form-control" id="name" placeholder="Example input" name="name">
            </div>
            <div class="form-group">
                <label for="number">Room Number</label>
                <input type="number" class="form-control" id="number" placeholder="Example input" name="number" required>
            </div>
            <div class="form-group">
                <label for="building">Building</label>
                <input type="text" class="form-control" id="building" placeholder="Example input" name="building" required>
            </div>
            <div class="form-group">
                <label for="category">Example select</label>
                <select class="form-control" id="category" name="category" required>
                    <option>Regular</option>
                    <option>Lab</option>
                    <option>Auditorium</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary btn-">Submit</button>
        </form>
    </div>
</div>

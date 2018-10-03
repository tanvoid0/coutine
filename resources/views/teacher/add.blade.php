@extends('app')
<div class="row mx-auto" style="width: 400px;">
    <div class="col-sm-12" >

        <form action="{{route('teacher.store')}}" method="POST">
        {{ csrf_field() }}

            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control" id="name" placeholder="Name" name="name" required>
            </div>
            <div class="form-group">
                <label for="initial">Initial</label>
                <input type="text" class="form-control" id="initial" placeholder="Initial" name="initial">
            </div>
            <div class="form-group">
                <label for="room">Room number</label>
                <input type="text" class="form-control" id="room" placeholder="Room number" name="room">
            </div>
            <div class="form-group">
                <label for="contact">Contact</label>
                <input type="text" class="form-control" id="contact" placeholder="Contact" name="contact">
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="text" class="form-control" id="email" placeholder="Email" name="email">
            </div>
                <button type="submit" class="btn btn-primary btn-">Submit</button>
        </form>
    </div>
</div>

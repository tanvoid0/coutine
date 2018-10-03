@extends('app')
<div class="row mx-auto" style="width: 400px;">
    <div class="col-sm-12" >

        <form action="{{route('teacher.store')}}" method="POST">
            {{ csrf_field() }}

            <div class="form-group">
                <label for="name">Course Title</label>
                <input type="text" class="form-control" id="name" placeholder="Name" name="name" required>
            </div>
            <div class="form-group">
                <label for="code">Course Code</label>
                <input type="text" class="form-control" id="code" placeholder="Course Code" name="code">
            </div>
            <div class="form-group">
                <label for="section">Section upto</label>
                <input type="text" class="form-control" id="section" placeholder="Section upto" name="section">
            </div>

            <button type="submit" class="btn btn-primary btn-">Submit</button>
        </form>
    </div>
</div>

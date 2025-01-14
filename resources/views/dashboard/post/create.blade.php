@extends('dashboard.master')

@section('contect')
    <form action="" method="post">

        <label for="">Title</label>
        <input type="text" name="title">

        <label for="">Slug</label>
        <input type="text" name="slug">

        <label for="">Content</label>
        <textarea name="content"></textarea>

        <label for="">Category</label>
        <select name="category_id">

        </select>

        <label for="">Description</label>
        <textarea name="description"></textarea>

        <label for="">Posted</label>
        <select name="posted">
            <option value="yes">Yes</option>
            <option value="not">Not</option>
        </select>

        <button type="submit">Send</button>
    </form>
@endsection
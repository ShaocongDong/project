@extends('layouts.main')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">New Post For You :-)</div>
                    <div class="panel-body">
                        <form class="form-horizontal" method="POST" action="{{ route('newPostSubmit') }}">
                            {{ csrf_field() }}

                            <div class="form-group{{ $errors->has('username') ? ' has-error' : '' }}">
                                <label for="Item" class="col-md-4 control-label"> Item </label>

								<div class="form-group{{ $db->query('select i.itemid from items as i')->has('Item') ? 'has-error' : '' }}">
									<div class="col-md-6">
										<input id="Item" type="text" class="form-control" name="Item" value="{{ old('Item') }}" required autofocus>
									</div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="Title" class="col-md-4 control-label">Title</label>

                                <div class="col-md-12">
                                    <input id="Title" type="textarea" class="form-control" name="Title" required>
                                </div>
                            </div>
							
                            <div class="form-group">
                                <label for="Location" class="col-md-4 control-label">Location</label>

                                <div class="col-md-12">
                                    <input id="Location" type="textarea" class="form-control" name="Location" required>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="Description" class="col-md-4 control-label">Description</label>

                                <div class="col-md-12">
                                    <input id="Description" type="textarea" class="form-control" name="Description" required>
                                </div>
                            </div>
							
                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-4">
                                    <button type="submit" class="btn btn-primary">
                                        Submit
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
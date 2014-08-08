@extends('frontend/layouts/account')

{{-- Page title --}}
@section('title')
My Profile
@stop

{{-- Account page content --}}
@section('account-content')
<h3 class="page-title">My Profile</h3>

<div class="row-fluid">
	<div class="span12">
		<div class="tabbable tabbable-custom tabs-left">
			<!-- Only required for left/right tabs -->
			<ul class="nav nav-tabs tabs-left">
				<li class="active"><a href="#tab_profile" data-toggle="tab">Profile</a></li>
				<li class=""><a href="#tab_email" data-toggle="tab">Email</a></li>
				<li class=""><a href="#tab_password" data-toggle="tab">Password</a></li>
			</ul>
			<div class="tab-content">
				<div class="tab-pane active" id="tab_profile">

					<form method="post" action="" class="form-vertical" autocomplete="off">
						<!-- CSRF Token -->
						<input type="hidden" name="_token" value="{{ csrf_token() }}" />

						<!-- First Name -->
						<div class="control-group{{ $errors->first('first_name', ' error') }}">
							<label class="control-label" for="first_name">First Name</label>
							<div class="controls">
								<input class="span4" type="text" name="first_name" id="first_name" value="{{ Input::old('first_name', $user->first_name) }}" />
								{{ $errors->first('first_name', '<span class="help-block">:message</span>') }}
							</div>
						</div>

						<!-- Last Name -->
						<div class="control-group{{ $errors->first('last_name', ' error') }}">
							<label class="control-label" for="last_name">Last Name</label>
							<div class="controls">
								<input class="span4" type="text" name="last_name" id="last_name" value="{{ Input::old('last_name', $user->last_name) }}" />
								{{ $errors->first('last_name', '<span class="help-block">:message</span>') }}
							</div>
						</div>

						<!-- Website URL -->
						<div class="control-group{{ $errors->first('website', ' error') }}">
							<label class="control-label" for="website">Website URL</label>
							<div class="controls">
								<input class="span4" type="text" name="website" id="website" value="{{ Input::old('website', $user->website) }}" />
								{{ $errors->first('website', '<span class="help-block">:message</span>') }}
							</div>
						</div>

						<!-- Country -->
						<div class="control-group{{ $errors->first('country', ' error') }}">
							<label class="control-label" for="country">Country</label>
							<div class="controls">
								<input class="span4" type="text" name="country" id="country" value="{{ Input::old('country', $user->country) }}" />
								{{ $errors->first('country', '<span class="help-block">:message</span>') }}
							</div>
						</div>

						<!-- Gravatar Email -->
						<div class="control-group{{ $errors->first('gravatar', ' error') }}">
							<label class="control-label" for="gravatar">Gravatar Email <small>(Private)</small></label>
							<div class="controls">
								<input class="span4" type="text" name="gravatar" id="gravatar" value="{{ Input::old('gravatar', $user->gravatar) }}" />
								{{ $errors->first('gravatar', '<span class="help-block">:message</span>') }}
							</div>

							<p>
								<img src="//secure.gravatar.com/avatar/{{ md5(strtolower(trim($user->gravatar))) }}" width="30" height="30" />
								<a href="http://gravatar.com">Change your avatar at Gravatar.com</a>.
							</p>
						</div>

						<hr>

						<!-- Form actions -->
						<div class="control-group">
							<div class="controls">
								<button type="submit" class="btn">Update your Profile</button>
							</div>
						</div>
					</form>

				</div>
				<div class="tab-pane" id="tab_email">

					<form method="post" action="{{ URL::route('change-email') }}" class="form-horizontal" autocomplete="off">
						<!-- CSRF Token -->
						<input type="hidden" name="_token" value="{{ csrf_token() }}" />

						<!-- Form type -->
						<input type="hidden" name="formType" value="change-email" />

						<!-- New Email -->
						<div class="control-group{{ $errors->first('email', ' error') }}">
							<label class="control-label" for="email">New Email</label>
							<div class="controls">
								<input type="text" name="email" id="email" value="" />
								{{ $errors->first('email', '<span class="help-block">:message</span>') }}
							</div>
						</div>

						<!-- Confirm New Email -->
						<div class="control-group{{ $errors->first('email_confirm', ' error') }}">
							<label class="control-label" for="email_confirm">Confirm New Email</label>
							<div class="controls">
								<input type="text" name="email_confirm" id="email_confirm" value="" />
								{{ $errors->first('email_confirm', '<span class="help-block">:message</span>') }}
							</div>
						</div>

						<!-- Current Password -->
						<div class="control-group{{ $errors->first('current_password', ' error') }}">
							<label class="control-label" for="current_password">Current Password</label>
							<div class="controls">
								<input type="password" name="current_password" id="current_password" value="" />
								{{ $errors->first('current_password', '<span class="help-block">:message</span>') }}
							</div>
						</div>

						<hr>

						<!-- Form actions -->
						<div class="control-group">
							<div class="controls">
								<button type="submit" class="btn">Update Email</button>

								<a href="{{ route('forgot-password') }}" class="btn btn-link">I forgot my password</a>
							</div>
						</div>
					</form>

				</div>
				<div class="tab-pane" id="tab_password">
					
					<form method="post" action="{{ URL::route('change-password') }}" class="form-horizontal" autocomplete="off">
						<!-- CSRF Token -->
						<input type="hidden" name="_token" value="{{ csrf_token() }}" />

						<!-- Old Password -->
						<div class="control-group{{ $errors->first('old_password', ' error') }}">
							<label class="control-label" for="old_password">Old Password</label>
							<div class="controls">
								<input type="password" name="old_password" id="old_password" value="" />
								{{ $errors->first('old_password', '<span class="help-block">:message</span>') }}
							</div>
						</div>

						<!-- New Password -->
						<div class="control-group{{ $errors->first('password', ' error') }}">
							<label class="control-label" for="password">New Password</label>
							<div class="controls">
								<input type="password" name="password" id="password" value="" />
								{{ $errors->first('password', '<span class="help-block">:message</span>') }}
							</div>
						</div>

						<!-- Confirm New Password  -->
						<div class="control-group{{ $errors->first('password_confirm', ' error') }}">
							<label class="control-label" for="password_confirm">Confirm New Password</label>
							<div class="controls">
								<input type="password" name="password_confirm" id="password_confirm" value="" />
								{{ $errors->first('password_confirm', '<span class="help-block">:message</span>') }}
							</div>
						</div>

						<hr>

						<!-- Form actions -->
						<div class="control-group">
							<div class="controls">
								<button type="submit" class="btn">Update Password</button>

								<a href="{{ route('forgot-password') }}" class="btn btn-link">I forgot my password</a>
							</div>
						</div>
					</form>

				</div>
			</div>
		</div>
	</div>
</div>


@stop

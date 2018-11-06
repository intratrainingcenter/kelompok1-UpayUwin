<div id="profile" class="profile-edit tab-pane fade in active">
								@if($message = Session::get('warning'))
								<div class="alert alert-danger fade in">
									<strong>Oh snap!</strong> {{$message}}
								</div>
								@endif
								@if($message = Session::get('success'))
								<div class="alert alert-success fade in">
									<strong>Well done!</strong> {{$message}}
								</div>
								@endif

									<h2 class="heading-md">User information</h2>
									<p>Below are the name and email addresses on file for your account.</p>
									<br>
									<dl class="dl-horizontal">
										<dt><strong>Your name </strong></dt>
										<dd>
										{{ Auth::user()->name }}
											<span>
												<a class="pull-right" href="#">
													<i class="fa fa-pencil"></i>
												</a>
											</span>
										</dd>
										<hr>
										<dt><strong>Your ID </strong></dt>
										<dd>
										{{ Auth::user()->id }}
											<span>
												<a class="pull-right" href="#">
													<i class="fa fa-pencil"></i>
												</a>
											</span>
										</dd>
										<hr>
										<dt><strong>Primary Email Address </strong></dt>
										<dd>
										{{ Auth::user()->email }}
											<span>
												<a class="pull-right" href="#">
													<i class="fa fa-pencil"></i>
												</a>
											</span>
										</dd>
										
										<hr>
									</dl>
								</div>
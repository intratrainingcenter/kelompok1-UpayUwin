<div id="edit" class="profile-edit tab-pane fade">
									<h2 class="heading-md">Manage your Profile</h2>
									<p>Change your User Information</p>
									<br>
									<form class="sky-form" id="sky-form4" action="{{route('settinguser', Auth::user()->id)}}" method="POST">
										@csrf
										<dl class="dl-horizontal">
											<dt>Username</dt>
											<dd>
												<section>
													<label class="input">
														<i class="icon-append fa fa-user"></i>
														<input type="text" placeholder="Username" name="username" value="{{ Auth::user()->name }}" required autocomplete="off">
														<b class="tooltip tooltip-bottom-right">Needed to enter the website</b>
													</label>
												</section>
											</dd>
											<dt>Email address</dt>
											<dd>
												<section>
													<label class="input">
														<i class="icon-append fa fa-envelope"></i>
														<input type="email" placeholder="Email address" name="email" value="{{ Auth::user()->email }}" required autocomplete="off">
														<b class="tooltip tooltip-bottom-right">Needed to verify your account</b>
													</label>
												</section>
											</dd>
											<dt>Enter your password</dt>
											<dd>
												<section>
													<label class="input">
														<i class="icon-append fa fa-lock"></i>
														<input type="password" id="password" name="password" placeholder="Password" required autocomplete="off">
														<b class="tooltip tooltip-bottom-right">Don't forget your password</b>
													</label>
												</section>
											</dd>
										</dl>
										<button class="btn-u" type="submit">Save Changes</button>
									</form>
								</div>
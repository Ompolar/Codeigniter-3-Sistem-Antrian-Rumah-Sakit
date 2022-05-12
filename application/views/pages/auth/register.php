</head>

<body class="bg-gradient-primary">

	<div class="container">

		<div class="card o-hidden border-0 shadow-lg my-5">
			<div class="card-body p-0">
				<!-- Nested Row within Card Body -->
				<div class="row justify-content-center">
					<div class="col-lg-7">
						<div class="p-5">
							<div class="text-center">
								<h1 class="h4 text-gray-900 mb-4">Register</h1>
							</div>
							<form class="user">
								<div class="form-group">
									<input type="text" class="form-control form-control-user" id="exampleName"
										placeholder="Nama Anda">
								</div>
								<div class="form-group">
									<input type="email" class="form-control form-control-user" id="exampleInputEmail"
										placeholder="Email Anda">
								</div>
								<div class="form-group">
									<input type="date" class="form-control form-control-user" id="exampleInputEmail"
										placeholder="Tanggal Lahir">
								</div>
								<div class="form-group">
									<label for="">Jenis Kelamin</label>
									<br>
									<input type="radio">Laki-laki
									<input type="radio">Perempuan
								</div>
								<div class="form-group">
									<input type="password" class="form-control form-control-user"
										id="exampleInputPassword" placeholder="Password">
								</div>
								<a href="login.html" class="btn btn-primary btn-user btn-block">
									Register Account
								</a>
								
							</form>
							<hr>
							
							<div class="text-center">
								<a class="small" href="<?php echo base_url();?>login">Sudah Punya Akun? Login!</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

	</div>

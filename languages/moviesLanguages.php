<?php
session_start();
$_SESSION['isConnected']=false;
require_once __DIR__ .'/../bdd/pdo.php';
require_once __DIR__ .'/../layout/header.php';
require_once '/../layout/navbar.php';

?>
<!-- //TODO. 制作一个button按钮 -->
<section class="vh-100 bg-image"
  style="background-image: url('https://mdbcdn.b-cdn.net/img/Photos/new-templates/search-box/img4.webp');">
  <div class="mask d-flex align-items-center h-100 gradient-custom-3">
    <div class="container h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-12 col-md-9 col-lg-7 col-xl-6">
          <div class="card" style="border-radius: 15px;">
            <div class="card-body p-5">
              <h2 class="text-uppercase text-center mb-5">Create an account</h2>

			  <form method="post" action="signup-process.php" enctype="multipart/form-data">

                <div class="form-outline mb-4">
                  <input type="text" id="form3Example1cg" class="form-control form-control-lg"  name="englishTitle" placeholder="englishTitle" required />
                  <label class="form-label" for="form3Example1cg">English Title</label>
                </div>

                <div class="form-outline mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label" name="englishDescription">Description</label>
                    <textarea class="form-control form-control-lg" id="exampleFormControlTextarea1" rows="3"></textarea>
                </div>

				<div class="form-outline mb-4">
				    <label class="form-label">Profile Pictures. Max file size 50 MB </label>
					<input class="form-control form-control-lg" id="formFileLg" type="file" name="photo" />
					<!-- <div class="small text-muted mt-2">Upload your photo. Max file size 50 MB</div> -->

				</div>
                <div class="form-outline mb-4">
                  <input type="text" id="form3Example1cg" class="form-control form-control-lg"  name="englishTitle" placeholder="englishTitle" required />
                  <label class="form-label" for="form3Example1cg">French Title</label>
                </div>

                <div class="form-outline mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label" name="frenchDescription">Description</label>
                    <textarea class="form-control form-control-lg" id="exampleFormControlTextarea1" rows="3"></textarea>
                </div>

				<div class="form-outline mb-4">
				    <label class="form-label">Profile Pictures. Max file size 50 MB </label>
					<input class="form-control form-control-lg" id="formFileLg" type="file" name="photo" />
					<!-- <div class="small text-muted mt-2">Upload your photo. Max file size 50 MB</div> -->

				</div>
                <div class="form-outline mb-4">
                  <input type="text" id="form3Example1cg" class="form-control form-control-lg"  name="englishTitle" placeholder="englishTitle" required />
                  <label class="form-label" for="form3Example1cg">Chinese Title</label>
                </div>

                <div class="form-outline mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label" name="chineseDescription">Description</label>
                    <textarea class="form-control form-control-lg" id="exampleFormControlTextarea1" rows="3"></textarea>
                </div>

				<div class="form-outline mb-4">
				    <label class="form-label">Profile Pictures. Max file size 50 MB </label>
					<input class="form-control form-control-lg" id="formFileLg" type="file" name="photo" />
					<!-- <div class="small text-muted mt-2">Upload your photo. Max file size 50 MB</div> -->

				</div>


              </form>

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

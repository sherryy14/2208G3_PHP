<?php
include 'header.php';
?>
  <main>
<!-- section -->
  <div class="mt-4">
    <div class="container">
      <div class="row ">
        <div class="col-12">
          <!-- breadcrumb -->
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb mb-0">
              <li class="breadcrumb-item"><a href="#!">Home</a></li>
              <li class="breadcrumb-item"><a href="#!">Blog</a></li>
              <li class="breadcrumb-item active" aria-current="page">Blog Single</li>
            </ol>
          </nav>
        </div>
      </div>
    </div>
  </div>
  <!-- section -->
  <section class="my-lg-14 my-8">
    <div class="container">
      <div class="row">

      <?php 
                                $blogsingle= "SELECT * FROM  `blog_single` ";
                                $resultblogsingle = mysqli_query($conn,$blogsingle);

                                while($bsrow = mysqli_fetch_array($resultblogsingle)){

                               
                                ?>
        <div class="col-md-8 offset-md-2">
          <!-- text -->
          <div class="mb-5">
            <div class="mb-3 text-center"><a href="#!">Recipes</a></div>
            <h1 class="fw-bold text-center"><?php echo $bsrow['Title'] ?></h1>
            <div class="d-flex justify-content-center text-muted mt-4"><span class="me-2"><small><?php echo $bsrow['Date'] ?></small></span><span><small>Read time: <span class="text-dark fw-bold"><?php echo $bsrow['Time'] ?></span></small></span>
            </div>
          </div>
          <!-- img -->
          <div class="mb-8"> <img src="./assets/images/blog/<?php echo $bsrow['Blog_Image'] ?>" alt="" class="img-fluid rounded"></div>

          <div>
            <!-- text -->
            <div class="mb-4">
              <p><?php echo $bsrow['Description1'] ?></p>
              <p><?php echo $bsrow['Description2'] ?></p>
              <p><?php echo $bsrow['Description3'] ?></p>
              <p><?php echo $bsrow['Description4'] ?></p>
              <p><?php echo $bsrow['Description5'] ?></p>
            </div>
            <hr class="mt-lg-10 mb-lg-6 my-md-6">
            <!-- blockquote -->
            <blockquote class="blockquote text-center ">
              <p class="text-primary fst-italic fw-semi-bold lh-base h1 px-2 px-lg-14">
                "Failure will never overtake me if my determination to succeed is strong enough."</p>
              <footer class="blockquote-footer mt-3 text-muted">
                <cite title="Source Title">Og Mandino</cite>
              </footer>
            </blockquote>
            <hr class="mt-lg-6 mb-lg-10 my-md-6">
            <div class="mb-4">
              <p>
                Condimentum leo utipsum euismod feugiatn elntum <strong>sapiennonser variusmi elementum </strong>
                necunc elem entum velitnon tortor convallis
                variusa placerat nequhse. Quis eu Lorem irure magna. Ex
                labore reprehenderit veniam irure id nostrud velit. Minim
                aliquip cillum laborum qui Lorem eu.
              </p>
              <p>
                Sint officia nulla deserunt voluptate non amet consequat ipsum
                tempor. Nulla id cupidatat ipsum occaecat. Aute ad et fugiat
                velit sunt qui veniam labore elit ipsum commodo proident. Sit
                tempor consectetur commodo laborum mollit. Enim sint nostrud
                nisi in ad aliqua laboris ad non.
              </p>
            </div>
            <!-- List unstyled -->
            <div class="mb-5">
              <h3 class="mb-3">Unordered Lists (Nested)</h3>
              <ul>
                <li>Lorem ipsum dolor sit amet</li>
                <li>Consectetur adipiscing elit</li>
                <li>Integer molestie lorem at massa</li>
                <li>Facilisis in pretium nisl aliquet</li>
                <li>
                  Nulla volutpat aliquam velit
                  <ul>
                    <li>Phasellus iaculis neque</li>
                    <li>Purus sodales ultricies</li>
                    <li>Vestibulum laoreet porttitor sem</li>
                    <li>Ac tristique libero volutpat at</li>
                  </ul>
                </li>
                <li>Faucibus porta lacus fringilla vel</li>
                <li>Aenean sit amet erat nunc</li>
                <li>Eget porttitor lorem</li>
              </ul>
            </div>
            <div class="mb-5">
              <h3 class="mb-3">Ordered List (Nested)</h3>
              <ol>
                <li>Lorem ipsum dolor sit amet</li>
                <li>Consectetur adipiscing elit</li>
                <li>Integer molestie lorem at massa</li>
                <li>Facilisis in pretium nisl aliquet</li>
                <li>
                  Nulla volutpat aliquam velit
                  <ol>
                    <li>Phasellus iaculis neque</li>
                    <li>Purus sodales ultricies</li>
                    <li>Vestibulum laoreet porttitor sem</li>
                    <li>Ac tristique libero volutpat at</li>
                  </ol>
                </li>
                <li>Faucibus porta lacus fringilla vel</li>
                <li>Aenean sit amet erat nunc</li>
                <li>Eget porttitor lorem</li>
              </ol>
            </div>
           <!-- Img alignment -->
           <div class="mb-5">
              <h2 class="mb-2">Image Alignment</h2>
              <p>
                Welcome to image alignment! The best way to demonstrate the ebb
                and flow of the various image positioning options is to nestle
                them snuggly among an ocean of words. Grab a paddle and let’s
                get started.
              </p>

              <div class="d-flex align-items-start mt-4">
                <!-- Img  -->
                <img src="./assets/images/blog/left-img.jpg" alt=""
                  class="img-fluid me-4 d-none d-lg-block d-md-block rounded">
                <div>
                  <p>
                    The rest of this paragraph is filler for the sake of seeing
                    the text wrap around the 150×150 image, which is left
                    aligned.
                  </p>
                  <p>
                    As you can see the should be some space above, below, and to
                    the right of the image. The text should not be creeping on
                    the image. Creeping is just not right. Images need breathing
                    room too.
                  </p>
                </div>
              </div>
            </div>
            <div class="mb-4">
              <p>
                Let them speak like you words. Let them do their jobs without
                any hassle from the text. In about one more sentence here, we’ll
                see that the text moves from the right of the image down below
                the image in seamless transition. Again, letting the do it’s
                thang. Mission accomplished!
              </p>
            </div>
            <div class="mb-4">
              <div class="d-flex align-items-start">
                <div>
                  <p>
                    The rest of this paragraph is filler for the sake of seeing
                    the text wrap around the 150×150 image, which is right
                    aligned.
                  </p>
                  <p>
                    And now we’re going to shift things to the right align.
                    Again, there should be plenty of room above, below, and to
                    the left of the image. Just look at him there… Hey guy! Way
                    to rock that right side. I don’t care what the left aligned
                    image says, you look great. Don’t let anyone else tell you
                    differently.
                  </p>
                </div>
                <img src="./assets/images/blog/right-img.jpg" alt=" "
                  class="img-fluid ms-4  d-none d-lg-block d-md-block rounded">
              </div>
            </div>
            <div class="mb-4 ">
              <p class="mb-0">
                And that’s a wrap, yo! You survived the tumultuous waters of
                alignment. Image alignment achievement unlocked!
              </p>
            </div>
          </div>
          <hr class="mt-8 mb-5">
          <div class="d-flex justify-content-between align-items-center mb-5">
            <div class="d-flex align-items-center">
              <img src="./assets/images/avatar/avatar-4.jpg" alt="" class="rounded-circle avatar-md">
              <div class="ms-2 lh-1">
                <h5 class="mb-0 ">Dustin Warren</h5>
                <span class="text-primary small">Marketing Manager</span>
              </div>
            </div>
            <div>
              <!-- social -->
              <span class="ms-2 text-muted">Share</span>
              <a href="#" class="ms-2 text-muted"><i class="bi bi-facebook fs-6"></i></a>
              <a href="#" class="ms-2 text-muted"><i class="bi bi-twitter fs-6"></i></a>
              <a href="#" class="ms-2 text-muted "><i class="bi bi-linkedin fs-6"></i></a>
            </div>
          </div>
        </div>

        <?php } ?>
      </div>
    </div>
  </section>

</main>





   <!-- Footer -->
 <?php
 include 'footer.php';
 ?>
  <!-- Javascript-->
  <!-- Libs JS -->
<script src="../assets/libs/jquery/dist/jquery.min.js"></script>
<script src="../assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
<script src="../assets/libs/simplebar/dist/simplebar.min.js"></script>

<!-- Theme JS -->
<script src="../assets/js/theme.min.js"></script>




</body>


<!-- Mirrored from freshcart.codescandy.com/pages/blog-single.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 31 Mar 2023 10:10:37 GMT -->
</html>
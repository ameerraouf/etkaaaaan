
      <!-- main page content-->
    <footer>
      <div class="main-footer">
        <div class="container">
          <div class="row text-white">
          
            <div class="col-lg-2 col-md-3 col-6 minister  mt-4 mb-3">
              <img class="etqan-footer-img" src="<?php echo e(asset('assets/images/gam3yah.png')); ?>" alt="">

































            </div>
            <div class="col-lg-2 col-md-3 col-6  mt-4 mb-3">
              <h5 class="font-weigh-bold">الخدمات الإلكترونية</h5>
              <div class=" links">
                  <ul class="list-unstyled text-right pr-3">
                    <li><a href="" class="text-white"><i class="fas footer-yellow  fa-chevron-circle-left"></i> <small>التسجيل فى الحلقات </small></a></li>
                    <li><a href="" class="text-white"><i class="fas footer-yellow  fa-chevron-circle-left"></i> <small> طلب فتح حلقة </small></a></li>
                    <li><a href="" class="text-white"><i class="fas footer-yellow  fa-chevron-circle-left"></i> <small> وظائف شاغة </small></a></li>
                    <li><a href="" class="text-white"><i class="fas footer-yellow  fa-chevron-circle-left"></i> <small> شكاوى واستفسار </small></a></li>
                    <li><a href="" class="text-white"><i class="fas footer-yellow  fa-chevron-circle-left"></i> <small>مقترح تطويرى </small></a></li>
                  </ul>
              </div>
            </div>
            <div class="col-lg-2 col-md-3 col-6  mt-4 mb-3">
              <h5 class="font-weigh-bold"> اعلامنا</h5>
              <div class=" links">
                <ul class="list-unstyled text-right pr-3">
                  <li><a href="" class="text-white"><i class="fas footer-yellow  fa-chevron-circle-left"></i> <small> الاخبار</small></a></li>
                  <li><a href="" class="text-white"><i class="fas footer-yellow  fa-chevron-circle-left"></i> <small> البوم صور </small></a></li>
                  <li><a href="" class="text-white"><i class="fas footer-yellow  fa-chevron-circle-left"></i> <small> معرض الفيديو </small></a></li>
                  <li><a href="" class="text-white"><i class="fas footer-yellow  fa-chevron-circle-left"></i> <small>التقارير والإنجازات </small></a></li>
                </ul>
              </div>
            </div>
            <div class="col-lg-2 col-md-3 col-6 mt-4 mb-3">
              <h5 class="font-weigh-bold text-center">تواصل معنا</h5>
              <ul class="list-unstyled plus-info p-0 text-left">
                <li><small><a class="text-white" href="" > <span class="ph-n"><bdo
                        dir="rtl"><?php echo e(@App\Setting::all()->first()->fax); ?></bdo></span> <span class="footer-link"> <i
                        class="fas footer-yellow  fa-phone-alt"></i></span></a></small></li>
                <li><small><a class="text-white" href=""> <span class="ph-n"><bdo
                        dir="rtl"><?php echo e(@App\Setting::all()->first()->mobile2); ?></bdo></span> <span class="footer-link"> <i
                        class="fas footer-yellow  fa-mobile-alt"></i></span></a></small></li>
                <li><small><a class="text-white" href="" > <?php echo e(@App\Setting::all()->first()->sitemail); ?> <span class="footer-link"> <i
                        class="fas footer-yellow  fa-envelope"></i></span></a></small></li>
                <li><small><a class="text-white" href=""> <?php echo e(@App\Setting::all()->first()->siteurl); ?> <span class="footer-link"> <i
                        class="fas footer-yellow  fa-globe"></i></span></a></small></li>
              </ul>
              <ul class="list-unstyled p-0 social-links text-left mb-0">
                <li class="nav-item">
                  <a class=" d-inline-block " href="#"><i class="fab fa-facebook-f"></i></a>
                  <a class=" d-inline-block " href="#"><i class="fab fa-twitter"></i></a>
                  <a class=" d-inline-block " href="#"><i class="fab fa-whatsapp"></i></a>
                  <a class=" d-inline-block " href="#"><i class="fab fa-instagram"></i></a>
  
                </li>
              </ul>
            </div>
            <div class="col mt-4 mb-3 d-flex justify-content-end">
              <div class="footerIn10">
                <div class="bn1 mailBnNewN1"></div>
                <input type="text" class="bn2 mailInput1" name="key" placeholder="أدخل جوالك لتصلك رسائل قصيرة" onblur="clearText(this)" onfocus="clearText(this)" maxlength="12">
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="bg-light-color">
        <div class="last-footer container-fluid">
          <div class="copy-rights d-flex align-items-center">
            <a
              href="https://www.const-tech.com.sa/"
              target="_black"
              class="text-white mb-0 tech"
              >جميع الحقوق محفوظة © لـ جمعية تحفيظ القرآن بالقويعية 2020 م
            </a>
          </div>
          <div>
            <a href="https://www.const-tech.com.sa/" target="_black"
              ><img class="c-logo" src="<?php echo e(asset('assets/images/company-logo.svg')); ?>" alt="" />
            </a>
          </div>
        </div>
      </div>
    </footer>
    <!-- [Footer ] -->

    <script src="<?php echo e(asset('assets/js/jquery-3.3.1.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/popper.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/bootstrap.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/crawler.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/owl.carousel.min.js')); ?>"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.min.js"></script>
    <script src="https://cdn.jsdelivr.net/picturefill/2.3.1/picturefill.min.js"></script>
      <script src="<?php echo e(asset('assets/js/lightgallery-all.min.js')); ?>"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-mousewheel/3.1.13/jquery.mousewheel.min.js"  crossorigin="anonymous"></script>
    <script type="text/javascript">
        $(document).ready(function(){
          $("#lightgallery").lightGallery( {
            selector: '.item'
          });
        });
    </script>
    <script src="<?php echo e(asset('assets/js/main.js')); ?>"></script>
    </body>
</html>
<?php 
include "Ust.php";
?>

        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Ayarlar</h3>
              </div>

             
            </div>
            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Ayarlar </h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                        <ul class="dropdown-menu" role="menu">
                          <li><a href="#">Settings 1</a>
                          </li>
                          <li><a href="#">Settings 2</a>
                          </li>
                        </ul>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">

                    <form class="form-horizontal form-label-left" novalidate>

                      <p>Web sayfanızın ayarları düzenleyebileceğiniz sayfadır.
                      </p>
                      <span class="section">Genel Ayarlar</span>

                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="ayar_baslik">Sitenin Başılığı <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="ayar_baslik" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="2" name="ayar_baslik" placeholder="Buraya sitenin başığlığını giriniz." required="required" type="text">
                        </div>
                      </div>

                      
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="ayar_desciription">Sitenin Açıklaması <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="ayar_desciription" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="2" name="ayar_desciription" placeholder="Buraya sitenin açıklaması giriniz." required="required" type="text">
                        </div>
                      </div>

                      
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="ayar_keywords">Anahtar Kelimeler <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="ayar_keywords" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="2" name="ayar_keywords" placeholder="Buraya sitenin anahtar kelimlerini giriniz." required="required" type="text">
                        </div>
                      </div>
                 

                      <span class="section">Sosyal Medya Hesapları</span>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="ayar_instagram">Instagram 
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="ayar_instagram" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="2" name="ayar_instagram" placeholder="İnstagram hesabını giriniz."  type="text">
                        </div>
                      </div>

                      
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="ayar_twitter">Twitter
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="ayar_twitter" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="2" name="ayar_twitter" placeholder="Twitter hesabını giriniz."  type="text">
                        </div>
                      </div>

                      
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="ayar_youtube">Youtube
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="ayar_youtube" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="2" name="ayar_youtube" placeholder="Youtube hesabını  giriniz." type="text">
                        </div>
                      </div>
                 

                      <span class="section">Mail Ayarlar</span>

                      
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="ayar_msunucu">Mail Sunucu <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="ayar_msunucu" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="2" name="ayar_msunucu" placeholder="Buraya mail sunucu adresini giriniz."  required="required" type="text">
                        </div>
                      </div>

                      
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="ayar_mport">Port Numarası <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="ayar_mport" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="2" name="ayar_mport" placeholder="Buraya port numarasını giriniz."required="required"  type="text">
                        </div>
                      </div>

                      
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="ayar_mkadi">Mail Adresi <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="ayar_mkadi" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="2" name="ayar_mkadi" placeholder="Buraya mail adresini giriniz." required="required" type="text">
                        </div>
                      </div>
                       
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="ayar_msifre">Mail Şifresi <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="ayar_msifre" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="2" name="ayar_msifre" placeholder="Buraya mail şifresini giriniz." required="required" type="text">
                        </div>
                      </div>
                 
                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-md-offset-3">
                          <button id="send" type="submit" class="btn btn-success">Güncelle</button>
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /page content -->
        <?php 
include "Alt.php";
?>
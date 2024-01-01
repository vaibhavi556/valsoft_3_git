<footer id="footer">
  <?php $footer = get_field('footer', 'option'); ?>
          <div class="top_row">
            <div class="container">
              <div class="vc_row">
                <div class="vc_col-sm-6 vc_col-md-3">
                  <h3><?php echo $footer['about_title']; ?></h3>
                  <div class="about-content">
                    <p>
                    <?php echo $footer['about_content']; ?>
                    </p>
                  </div>
                  <div class="brochure">
                    <a
                      class="button"
                      href=" <?php echo $footer['broucher_btn']['url']; ?>"
                      onclick="ga('send', 'event', 'Brochure', 'Footer');"
                      target="_blank"
                      ><?php echo $footer['broucher_btn']['title']; ?></a
                    >
                  </div>
                  <?php $image_repeater = $footer['image_repeater']; ?>

                  <div class="badges">
                    <ul class="ul-default">
                      <?php foreach($image_repeater as $image_rep){ ?>
                      <li class="bwp-badge" style="">
                        <noscript
                          ><img
                            src="<?php echo $image_rep['image']['url']; ?>"
                            alt="Badge Best Workplaces in Quebec" /></noscript
                        ><img
                          class="lazyload"
                          src="data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20viewBox=%220%200%20210%20140%22%3E%3C/svg%3E"
                          data-src="<?php echo $image_rep['image']['url']; ?>"
                          alt="Badge Best Workplaces in Quebec"
                        />
                      </li>
                      <?php } ?>
                    </ul>
                  </div>
                </div>
                <?php $useful = $footer['useful']; ?>
                <div class="vc_col-sm-6 vc_col-md-3">
                  <h3 class="xs-mt-35"><?php echo $useful['useful_title']; ?></h3>
                  
                  <?php $useful_repeater = $useful['useful_repeater']; ?>
                
                  
                  <div class="useful-links">
                   
                    <ul class="ul-default">
                    <?php foreach($useful_repeater as $useful_rep){ ?>
                      <li><a href="<?php echo $useful_rep['useful_link']['url']; ?>"><?php echo $useful_rep['useful_link']['title']; ?></a></li>
                      <?php } ?>
                    </ul>
                  </div>
                </div>
               
                <div class="clearfix mb-50 visible-sm"></div>
                <div class="vc_col-sm-6 vc_col-md-3">
                  <?php $recent_title_group = $footer['recent_title_group']; ?>
                  <h3 class="xs-mt-20"><?php echo $recent_title_group['recent_title_post']; ?></h3>
                  <?php $recent_post = $footer['recent_post']; ?>
                  <?php foreach($recent_post as $recent){ ?>
                  <div class="recent-post">
                    <h4>
                      <a
                        href="<?php echo $recent['post_link']['url']; ?>"
                        >"<?php echo $recent['post_link']['title']; ?></a
                      >
                    </h4>
                    <div class="date"><?php echo $recent['post_date']; ?></div>
                  </div>
                  <?php } ?>
                </div>
                <?php $location_info = $footer['location_info']; ?>
                <div class="vc_col-sm-6 vc_col-md-3">
                  <div class="footer-logo xs-mt-50">
                    <a href="https://www.valsoftcorp.com/">
                      <noscript
                        ><img
                          src="<?php echo $location_info['logo']['url']; ?>"
                          alt="Valsoft Corporation - Acquirers and Builders of Vertical Market Software" /></noscript
                      ><img
                        class="lazyload"
                        src="data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20viewBox=%220%200%20210%20140%22%3E%3C/svg%3E"
                        data-src="https://www.valsoftcorp.com/wp-content/themes/valsoft/assets/images/valsoft-logo.svg"
                        alt="Valsoft Corporation - Acquirers and Builders of Vertical Market Software"
                      />
                    </a>
                  </div>
                  <div class="address">
                    <ul class="ul-default">
                      <li class="location">
                      <?php echo $location_info['address']; ?>
                      </li>
                      <li class="phone">
                      <a href="<?php echo $location_info['number']['url']; ?>">
                      <?php echo $location_info['number']['title']; ?></a>
                      </li>
                      <li class="email">
                        <a href="<?php echo $location_info['email']['url']; ?>"
                          ><?php echo $location_info['email']['title']; ?></a
                        >
                      </li>
                      <li class="deloitte-badge">
                        <noscript
                          ><img
                            src="<?php echo $location_info['image_1']['url']; ?>"
                            alt="Deloitte 2022 Technology Fast 50 Winner" /></noscript
                        ><img
                          class="lazyload"
                          src="data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20viewBox=%220%200%20210%20140%22%3E%3C/svg%3E"
                          data-src="<?php echo $location_info['image_1']['url']; ?>"
                          alt="Deloitte 2022 Technology Fast 50 Winner"
                        />
                      </li>
                      <li class="ctgc-badge">
                        <noscript
                          ><img
                            src="<?php echo $location_info['image_2']['url']; ?>"
                            alt="2022 Report on Business ranking of Canada's Top Growing Companies" /></noscript
                        ><img
                          class="lazyload"
                          src="data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20viewBox=%220%200%20210%20140%22%3E%3C/svg%3E"
                          data-src="https://www.valsoftcorp.com/wp-content/uploads/2022/09/4400_GAM_CTGC_Winners_Logo_CLR_001-WHITE.png"
                          alt="2022 Report on Business ranking of Canada's Top Growing Companies"
                        />
                      </li>
                      <li class="gptw-badge">
                        <noscript
                          ><img
                            src="<?php echo $location_info['image_3']['url']; ?>"
                            alt="Great Place to Work" /></noscript
                        ><img
                          class="lazyload"
                          src="data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20viewBox=%220%200%20210%20140%22%3E%3C/svg%3E"
                          data-src="https://www.valsoftcorp.com/wp-content/uploads/2022/09/Certification-Badge_July-2022.png"
                          alt="Great Place to Work"
                        />
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="copyright_row">
            <div class="container">
              <div class="copyright_row_wr">
                <div class="socials">
                  <ul>
                    <li>
                      <a
                        href="https://www.facebook.com/ValsoftCorp/"
                        target="_blank"
                        class="social-facebook"
                        ><i class="fa fa-facebook"></i
                      ></a>
                    </li>
                    <li>
                      <a
                        href="https://twitter.com/valsoftcorp/"
                        target="_blank"
                        class="social-twitter"
                        ><i class="fa-brands fa-x-twitter"></i
                      ></a>
                    </li>
                    <li>
                      <a
                        href="https://www.linkedin.com/company/valsoft-corporation/"
                        target="_blank"
                        class="social-linkedin"
                        ><i class="fa fa-linkedin"></i
                      ></a>
                    </li>
                  </ul>
                </div>
                <div class="copyright">
                  Copyright © 2023 Valsoft. All rights reserved. Part of the
                  <a href="https://www.valsefgroup.com/" target="_blank"
                    >Valsef Group</a
                  >
                </div>
              </div>
            </div>
          </div>
        </footer>
      </div>
      <div id="loading_wr"></div>
    </div>
    <script type="text/html" id="wpb-modifications">
      window.wpbCustomElement = 1;
    </script>
    <noscript
      ><style>
        .lazyload {
          display: none;
        }
      </style></noscript
    >
    <script data-noptimize="1">
      window.lazySizesConfig = window.lazySizesConfig || {};
      window.lazySizesConfig.loadMode = 1;
    </script>
    <script
      async=""
      data-noptimize="1"
     
    ></script>
    <script type="text/javascript" id="edsanimate-site-script-js-extra">
      var edsanimate_options = {
        offset: "75",
        hide_hz_scrollbar: "1",
        hide_vl_scrollbar: "0",
      };
    </script>
    <script type="text/javascript" id="contact-form-7-js-extra">
      var wpcf7 = {
        api: {
          root: "https:\/\/www.valsoftcorp.com\/wp-json\/",
          namespace: "contact-form-7\/v1",
        },
      };
    </script>
    <script
      type="text/javascript"
      
      id="google-recaptcha-js"
    ></script>
    <script
      type="text/javascript"

      id="wp-polyfill-inert-js"
    ></script>
    <script
      type="text/javascript"

      id="regenerator-runtime-js"
    ></script>
    <script
      type="text/javascript"
   
      id="wp-polyfill-js"
    ></script>
    <script type="text/javascript" id="wpcf7-recaptcha-js-extra">
      var wpcf7_recaptcha = {
        sitekey: "6Lfwq4EUAAAAAAKyn1Ro75QlPZHb9U7uvL-bUQUa",
        actions: { homepage: "homepage", contactform: "contactform" },
      };
    </script>
    <script></script>
    <script type="text/javascript">
      window.addEventListener("load", function (event) {
        jQuery(
          ".cfx_form_main,.wpcf7-form,.wpforms-form,.gform_wrapper form"
        ).each(function () {
          var form = jQuery(this);
          var screen_width = "";
          var screen_height = "";
          if (screen_width == "") {
            if (screen) {
              screen_width = screen.width;
            } else {
              screen_width = jQuery(window).width();
            }
          }
          if (screen_height == "") {
            if (screen) {
              screen_height = screen.height;
            } else {
              screen_height = jQuery(window).height();
            }
          }
          form.append(
            '<input type="hidden" name="vx_width" value="' + screen_width + '">'
          );
          form.append(
            '<input type="hidden" name="vx_height" value="' +
              screen_height +
              '">'
          );
          form.append(
            '<input type="hidden" name="vx_url" value="' +
              window.location.href +
              '">'
          );
        });
      });
    </script>
    <div
      class="modal fade generic-modal-layout"
      id="drop-us-line-modal"
      tabindex="-1"
      role="dialog"
    >
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-body">
            <a href="#" class="modal-close-button" data-dismiss="modal"></a>
            <div class="content">
              <div class="wpcf7 js" id="wpcf7-f1539-o2" lang="en-US" dir="ltr">
                <div class="screen-reader-response">
                  <p role="status" aria-live="polite" aria-atomic="true"></p>
                  <ul></ul>
                </div>
                <form
                  action="/#wpcf7-f1539-o2"
                  method="post"
                  class="wpcf7-form init"
                  aria-label="Contact form"
                  novalidate="novalidate"
                  data-status="init"
                >
                  <div style="display: none">
                    <input type="hidden" name="_wpcf7" value="1539" />
                    <input type="hidden" name="_wpcf7_version" value="5.8.4" />
                    <input type="hidden" name="_wpcf7_locale" value="en_US" />
                    <input
                      type="hidden"
                      name="_wpcf7_unit_tag"
                      value="wpcf7-f1539-o2"
                    />
                    <input
                      type="hidden"
                      name="_wpcf7_container_post"
                      value="0"
                    />
                    <input
                      type="hidden"
                      name="_wpcf7_posted_data_hash"
                      value=""
                    />
                    <input
                      type="hidden"
                      name="_wpcf7_recaptcha_response"
                      value="03AFcWeA7Dur6U8tAA9uPZmVAO5eZ6kDIZiZ1uJ4X_bpyrUeg-2t4piwmnYiXiVWSD-O6TNSYANkrkPwjvbdJ-5RBlitWGLk0xKISekyCpb0cs1q9T9sCSPGaw00bfWTXO8SrlzUDahQb28JBMMO0RKt_CvJPwxHPU3e6dQE71DpIyliWnO23BNtZD03AyJWr0a_b7b4ZgQ0-2rL9wX7x387K9fRwFWpmPKn6S2fefvAKlZadjNnaknM-Jo651ZyU8zlPvcRCp6wmw8HMZ2PWPZJIa6siA7p4h6PLBpc71ElMpTrIv_SfA4OvpbWRkKA-OSnSqnmNY89vCmLeDFj0s7LygFo8ufYyxDcDtsSpo10WAMEDw33oifVnAK2LgAL_7NDptzKX3ylogLMABx45r-uIXSBhSOFIZXT1Vuw4uUGfznd_Su-myBKscOKR8TfMew1NwfpkCedos6F2kNMWNOy4ilRVIC1gIeAO8yjYnyVi55Iz_qSqpCjlbX4ckqW3WNaEyzDMoTwvEqc_BvYST8Dl0wSMmdaOaWC0hzuAtp3UJsbcTxmjGcvRR1IF_TC-JjClBkXHKlKRLqkW6_NLjxr7aLLCHKbOAbV2ezCwf3Gc_8Z9YLucyPcoij5BGechgBh8qMCIr1JJ1"
                    />
                  </div>
                  <h2>Contact Us</h2>
                  <div class="input-group">
                    <p>
                      <span
                        class="wpcf7-form-control-wrap"
                        data-name="your-name"
                        ><input
                          size="40"
                          class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required"
                          aria-required="true"
                          aria-invalid="false"
                          placeholder="Name"
                          type="text"
                          name="your-name"
                      /></span>
                    </p>
                  </div>
                  <div class="input-group">
                    <p>
                      <span
                        class="wpcf7-form-control-wrap"
                        data-name="your-email"
                        ><input
                          size="40"
                          class="wpcf7-form-control wpcf7-email wpcf7-validates-as-required wpcf7-text wpcf7-validates-as-email"
                          aria-required="true"
                          aria-invalid="false"
                          placeholder="Email"
                          type="email"
                          name="your-email"
                      /></span>
                    </p>
                  </div>
                  <div class="input-group">
                    <p>
                      <span
                        class="wpcf7-form-control-wrap"
                        data-name="your-company"
                        ><input
                          size="40"
                          class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required"
                          aria-required="true"
                          aria-invalid="false"
                          placeholder="Company"
                          type="text"
                          name="your-company"
                      /></span>
                    </p>
                  </div>
                  <div class="input-group">
                    <p>
                      <span
                        class="wpcf7-form-control-wrap"
                        data-name="your-message"
                      >
                        <textarea
                          cols="40"
                          rows="10"
                          class="wpcf7-form-control wpcf7-textarea wpcf7-validates-as-required"
                          aria-required="true"
                          aria-invalid="false"
                          placeholder="Message"
                          name="your-message"
                        ></textarea>
                      </span>
                    </p>
                  </div>
                  <div class="input-group submit-group">
                    <div class="button-container">
                      <p>
                        <input
                          class="wpcf7-form-control wpcf7-submit has-spinner button size-sm fullwidth white-text"
                          type="submit"
                          value="Submit"
                        /><span class="wpcf7-spinner"></span>
                      </p>
                    </div>
                  </div>
                  <div class="clearfix"></div>
                  <div class="recaptcha-privacy-terms">
                    <p>
                      This site is protected by reCAPTCHA and the Google
                      <a
                        href="https://policies.google.com/privacy"
                        target="_blank"
                        >Privacy Policy</a
                      >
                      and
                      <a
                        href="https://policies.google.com/terms"
                        target="_blank"
                        >Terms of Service</a
                      >
                      apply.
                    </p>
                  </div>
                  <div class="wpcf7-response-output" aria-hidden="true"></div>
                  <input type="hidden" name="vx_width" value="1680" /><input
                    type="hidden"
                    name="vx_height"
                    value="1050"
                  /><input
                    type="hidden"
                    name="vx_url"
                    value="https://www.valsoftcorp.com/"
                  />
                </form>
              </div>
              <div class="clearfix"></div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div
      class="modal fade generic-modal-layout"
      id="click-talk-modal"
      tabindex="-1"
      role="dialog"
    >
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-body">
            <a href="#" class="modal-close-button" data-dismiss="modal"></a>
            <div class="content">
              <div class="wpcf7 js" id="wpcf7-f1545-o3" lang="en-US" dir="ltr">
                <div class="screen-reader-response">
                  <p role="status" aria-live="polite" aria-atomic="true"></p>
                  <ul></ul>
                </div>
                <form
                  action="/#wpcf7-f1545-o3"
                  method="post"
                  class="wpcf7-form init"
                  aria-label="Contact form"
                  novalidate="novalidate"
                  data-status="init"
                >
                  <div style="display: none">
                    <input type="hidden" name="_wpcf7" value="1545" />
                    <input type="hidden" name="_wpcf7_version" value="5.8.4" />
                    <input type="hidden" name="_wpcf7_locale" value="en_US" />
                    <input
                      type="hidden"
                      name="_wpcf7_unit_tag"
                      value="wpcf7-f1545-o3"
                    />
                    <input
                      type="hidden"
                      name="_wpcf7_container_post"
                      value="0"
                    />
                    <input
                      type="hidden"
                      name="_wpcf7_posted_data_hash"
                      value=""
                    />
                    <input
                      type="hidden"
                      name="_wpcf7_recaptcha_response"
                      value="03AFcWeA7Dur6U8tAA9uPZmVAO5eZ6kDIZiZ1uJ4X_bpyrUeg-2t4piwmnYiXiVWSD-O6TNSYANkrkPwjvbdJ-5RBlitWGLk0xKISekyCpb0cs1q9T9sCSPGaw00bfWTXO8SrlzUDahQb28JBMMO0RKt_CvJPwxHPU3e6dQE71DpIyliWnO23BNtZD03AyJWr0a_b7b4ZgQ0-2rL9wX7x387K9fRwFWpmPKn6S2fefvAKlZadjNnaknM-Jo651ZyU8zlPvcRCp6wmw8HMZ2PWPZJIa6siA7p4h6PLBpc71ElMpTrIv_SfA4OvpbWRkKA-OSnSqnmNY89vCmLeDFj0s7LygFo8ufYyxDcDtsSpo10WAMEDw33oifVnAK2LgAL_7NDptzKX3ylogLMABx45r-uIXSBhSOFIZXT1Vuw4uUGfznd_Su-myBKscOKR8TfMew1NwfpkCedos6F2kNMWNOy4ilRVIC1gIeAO8yjYnyVi55Iz_qSqpCjlbX4ckqW3WNaEyzDMoTwvEqc_BvYST8Dl0wSMmdaOaWC0hzuAtp3UJsbcTxmjGcvRR1IF_TC-JjClBkXHKlKRLqkW6_NLjxr7aLLCHKbOAbV2ezCwf3Gc_8Z9YLucyPcoij5BGechgBh8qMCIr1JJ1"
                    />
                  </div>
                  <h2>Reach Out to Us</h2>
                  <div class="input-group">
                    <p>
                      <span
                        class="wpcf7-form-control-wrap"
                        data-name="your-name"
                        ><input
                          size="40"
                          class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required"
                          aria-required="true"
                          aria-invalid="false"
                          placeholder="Name"
                          type="text"
                          name="your-name"
                      /></span>
                    </p>
                  </div>
                  <div class="input-group">
                    <p>
                      <span
                        class="wpcf7-form-control-wrap"
                        data-name="your-email"
                        ><input
                          size="40"
                          class="wpcf7-form-control wpcf7-email wpcf7-validates-as-required wpcf7-text wpcf7-validates-as-email"
                          aria-required="true"
                          aria-invalid="false"
                          placeholder="Email"
                          type="email"
                          name="your-email"
                      /></span>
                    </p>
                  </div>
                  <div class="input-group">
                    <p>
                      <span
                        class="wpcf7-form-control-wrap"
                        data-name="your-company"
                        ><input
                          size="40"
                          class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required"
                          aria-required="true"
                          aria-invalid="false"
                          placeholder="Company"
                          type="text"
                          name="your-company"
                      /></span>
                    </p>
                  </div>
                  <div class="input-group">
                    <p>
                      <span
                        class="wpcf7-form-control-wrap"
                        data-name="your-message"
                      >
                        <textarea
                          cols="40"
                          rows="10"
                          class="wpcf7-form-control wpcf7-textarea wpcf7-validates-as-required"
                          aria-required="true"
                          aria-invalid="false"
                          placeholder="Message"
                          name="your-message"
                        ></textarea>
                      </span>
                    </p>
                  </div>
                  <div class="input-group submit-group">
                    <div class="button-container">
                      <p>
                        <input
                          class="wpcf7-form-control wpcf7-submit has-spinner button size-sm fullwidth white-text"
                          type="submit"
                          value="Submit"
                        /><span class="wpcf7-spinner"></span>
                      </p>
                    </div>
                  </div>
                  <div class="clearfix"></div>
                  <div class="recaptcha-privacy-terms">
                    <p>
                      This site is protected by reCAPTCHA and the Google
                      <a
                        href="https://policies.google.com/privacy"
                        target="_blank"
                        >Privacy Policy</a
                      >
                      and
                      <a
                        href="https://policies.google.com/terms"
                        target="_blank"
                        >Terms of Service</a
                      >
                      apply.
                    </p>
                  </div>
                  <div class="wpcf7-response-output" aria-hidden="true"></div>
                  <input type="hidden" name="vx_width" value="1680" /><input
                    type="hidden"
                    name="vx_height"
                    value="1050"
                  /><input
                    type="hidden"
                    name="vx_url"
                    value="https://www.valsoftcorp.com/"
                  />
                </form>
              </div>
              <div class="clearfix"></div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div
      class="modal fade generic-modal-layout"
      id="send-message-modal"
      tabindex="-1"
      role="dialog"
    >
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-body">
            <a href="#" class="modal-close-button" data-dismiss="modal"></a>
            <div class="content">
              <div class="wpcf7 js" id="wpcf7-f1546-o4" lang="en-US" dir="ltr">
                <div class="screen-reader-response">
                  <p role="status" aria-live="polite" aria-atomic="true"></p>
                  <ul></ul>
                </div>
                <form
                  action="/#wpcf7-f1546-o4"
                  method="post"
                  class="wpcf7-form init"
                  aria-label="Contact form"
                  novalidate="novalidate"
                  data-status="init"
                >
                  <div style="display: none">
                    <input type="hidden" name="_wpcf7" value="1546" />
                    <input type="hidden" name="_wpcf7_version" value="5.8.4" />
                    <input type="hidden" name="_wpcf7_locale" value="en_US" />
                    <input
                      type="hidden"
                      name="_wpcf7_unit_tag"
                      value="wpcf7-f1546-o4"
                    />
                    <input
                      type="hidden"
                      name="_wpcf7_container_post"
                      value="0"
                    />
                    <input
                      type="hidden"
                      name="_wpcf7_posted_data_hash"
                      value=""
                    />
                    <input
                      type="hidden"
                      name="_wpcf7_recaptcha_response"
                      value="03AFcWeA7Dur6U8tAA9uPZmVAO5eZ6kDIZiZ1uJ4X_bpyrUeg-2t4piwmnYiXiVWSD-O6TNSYANkrkPwjvbdJ-5RBlitWGLk0xKISekyCpb0cs1q9T9sCSPGaw00bfWTXO8SrlzUDahQb28JBMMO0RKt_CvJPwxHPU3e6dQE71DpIyliWnO23BNtZD03AyJWr0a_b7b4ZgQ0-2rL9wX7x387K9fRwFWpmPKn6S2fefvAKlZadjNnaknM-Jo651ZyU8zlPvcRCp6wmw8HMZ2PWPZJIa6siA7p4h6PLBpc71ElMpTrIv_SfA4OvpbWRkKA-OSnSqnmNY89vCmLeDFj0s7LygFo8ufYyxDcDtsSpo10WAMEDw33oifVnAK2LgAL_7NDptzKX3ylogLMABx45r-uIXSBhSOFIZXT1Vuw4uUGfznd_Su-myBKscOKR8TfMew1NwfpkCedos6F2kNMWNOy4ilRVIC1gIeAO8yjYnyVi55Iz_qSqpCjlbX4ckqW3WNaEyzDMoTwvEqc_BvYST8Dl0wSMmdaOaWC0hzuAtp3UJsbcTxmjGcvRR1IF_TC-JjClBkXHKlKRLqkW6_NLjxr7aLLCHKbOAbV2ezCwf3Gc_8Z9YLucyPcoij5BGechgBh8qMCIr1JJ1"
                    />
                  </div>
                  <h2>Send Us a Message</h2>
                  <div class="input-group">
                    <p>
                      <span
                        class="wpcf7-form-control-wrap"
                        data-name="your-name"
                        ><input
                          size="40"
                          class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required"
                          aria-required="true"
                          aria-invalid="false"
                          placeholder="Name"
                          type="text"
                          name="your-name"
                      /></span>
                    </p>
                  </div>
                  <div class="input-group">
                    <p>
                      <span
                        class="wpcf7-form-control-wrap"
                        data-name="your-email"
                        ><input
                          size="40"
                          class="wpcf7-form-control wpcf7-email wpcf7-validates-as-required wpcf7-text wpcf7-validates-as-email"
                          aria-required="true"
                          aria-invalid="false"
                          placeholder="Email"
                          type="email"
                          name="your-email"
                      /></span>
                    </p>
                  </div>
                  <div class="input-group">
                    <p>
                      <span
                        class="wpcf7-form-control-wrap"
                        data-name="your-company"
                        ><input
                          size="40"
                          class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required"
                          aria-required="true"
                          aria-invalid="false"
                          placeholder="Company"
                          type="text"
                          name="your-company"
                      /></span>
                    </p>
                  </div>
                  <div class="input-group">
                    <p>
                      <span
                        class="wpcf7-form-control-wrap"
                        data-name="your-message"
                      >
                        <textarea
                          cols="40"
                          rows="10"
                          class="wpcf7-form-control wpcf7-textarea wpcf7-validates-as-required"
                          aria-required="true"
                          aria-invalid="false"
                          placeholder="Message"
                          name="your-message"
                        ></textarea>
                      </span>
                    </p>
                  </div>
                  <div class="input-group submit-group">
                    <div class="button-container">
                      <p>
                        <input
                          class="wpcf7-form-control wpcf7-submit has-spinner button size-sm fullwidth white-text"
                          type="submit"
                          value="Submit"
                        /><span class="wpcf7-spinner"></span>
                      </p>
                    </div>
                  </div>
                  <div class="clearfix"></div>
                  <div class="recaptcha-privacy-terms">
                    <p>
                      This site is protected by reCAPTCHA and the Google
                      <a
                        href="https://policies.google.com/privacy"
                        target="_blank"
                        >Privacy Policy</a
                      >
                      and
                      <a
                        href="https://policies.google.com/terms"
                        target="_blank"
                        >Terms of Service</a
                      >
                      apply.
                    </p>
                  </div>
                  <div class="wpcf7-response-output" aria-hidden="true"></div>
                  <input type="hidden" name="vx_width" value="1680" /><input
                    type="hidden"
                    name="vx_height"
                    value="1050"
                  /><input
                    type="hidden"
                    name="vx_url"
                    value="https://www.valsoftcorp.com/"
                  />
                </form>
              </div>
              <div class="clearfix"></div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div
      class="modal fade generic-modal-layout"
      id="cta-modal"
      tabindex="-1"
      role="dialog"
    >
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-body">
            <a href="#" class="modal-close-button" data-dismiss="modal"></a>
            <div class="content">
              <div class="wpcf7 js" id="wpcf7-f3976-o5" lang="en-US" dir="ltr">
                <div class="screen-reader-response">
                  <p role="status" aria-live="polite" aria-atomic="true"></p>
                  <ul></ul>
                </div>
                <form
                  action="/#wpcf7-f3976-o5"
                  method="post"
                  class="wpcf7-form init"
                  aria-label="Contact form"
                  novalidate="novalidate"
                  data-status="init"
                >
                  <div style="display: none">
                    <input type="hidden" name="_wpcf7" value="3976" />
                    <input type="hidden" name="_wpcf7_version" value="5.8.4" />
                    <input type="hidden" name="_wpcf7_locale" value="en_US" />
                    <input
                      type="hidden"
                      name="_wpcf7_unit_tag"
                      value="wpcf7-f3976-o5"
                    />
                    <input
                      type="hidden"
                      name="_wpcf7_container_post"
                      value="0"
                    />
                    <input
                      type="hidden"
                      name="_wpcf7_posted_data_hash"
                      value=""
                    />
                    <input
                      type="hidden"
                      name="_wpcf7_recaptcha_response"
                      value="03AFcWeA7Dur6U8tAA9uPZmVAO5eZ6kDIZiZ1uJ4X_bpyrUeg-2t4piwmnYiXiVWSD-O6TNSYANkrkPwjvbdJ-5RBlitWGLk0xKISekyCpb0cs1q9T9sCSPGaw00bfWTXO8SrlzUDahQb28JBMMO0RKt_CvJPwxHPU3e6dQE71DpIyliWnO23BNtZD03AyJWr0a_b7b4ZgQ0-2rL9wX7x387K9fRwFWpmPKn6S2fefvAKlZadjNnaknM-Jo651ZyU8zlPvcRCp6wmw8HMZ2PWPZJIa6siA7p4h6PLBpc71ElMpTrIv_SfA4OvpbWRkKA-OSnSqnmNY89vCmLeDFj0s7LygFo8ufYyxDcDtsSpo10WAMEDw33oifVnAK2LgAL_7NDptzKX3ylogLMABx45r-uIXSBhSOFIZXT1Vuw4uUGfznd_Su-myBKscOKR8TfMew1NwfpkCedos6F2kNMWNOy4ilRVIC1gIeAO8yjYnyVi55Iz_qSqpCjlbX4ckqW3WNaEyzDMoTwvEqc_BvYST8Dl0wSMmdaOaWC0hzuAtp3UJsbcTxmjGcvRR1IF_TC-JjClBkXHKlKRLqkW6_NLjxr7aLLCHKbOAbV2ezCwf3Gc_8Z9YLucyPcoij5BGechgBh8qMCIr1JJ1"
                    />
                  </div>
                  <h2>Is it time to sell your software company?</h2>
                  <div class="input-group">
                    <p>
                      <span
                        class="wpcf7-form-control-wrap"
                        data-name="your-name"
                        ><input
                          size="40"
                          class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required"
                          aria-required="true"
                          aria-invalid="false"
                          placeholder="Name"
                          type="text"
                          name="your-name"
                      /></span>
                    </p>
                  </div>
                  <div class="input-group">
                    <p>
                      <span
                        class="wpcf7-form-control-wrap"
                        data-name="your-email"
                        ><input
                          size="40"
                          class="wpcf7-form-control wpcf7-email wpcf7-validates-as-required wpcf7-text wpcf7-validates-as-email"
                          aria-required="true"
                          aria-invalid="false"
                          placeholder="Email"
                          type="email"
                          name="your-email"
                      /></span>
                    </p>
                  </div>
                  <div class="input-group">
                    <p>
                      <span
                        class="wpcf7-form-control-wrap"
                        data-name="your-company"
                        ><input
                          size="40"
                          class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required"
                          aria-required="true"
                          aria-invalid="false"
                          placeholder="Company"
                          type="text"
                          name="your-company"
                      /></span>
                    </p>
                  </div>
                  <div class="input-group">
                    <p>
                      <span
                        class="wpcf7-form-control-wrap"
                        data-name="your-message"
                      >
                        <textarea
                          cols="40"
                          rows="10"
                          class="wpcf7-form-control wpcf7-textarea wpcf7-validates-as-required"
                          aria-required="true"
                          aria-invalid="false"
                          placeholder="Message"
                          name="your-message"
                        ></textarea>
                      </span>
                    </p>
                  </div>
                  <div class="input-group submit-group">
                    <div class="button-container">
                      <p>
                        <input
                          class="wpcf7-form-control wpcf7-submit has-spinner button size-sm fullwidth white-text"
                          type="submit"
                          value="Submit"
                        /><span class="wpcf7-spinner"></span>
                      </p>
                    </div>
                  </div>
                  <div class="clearfix"></div>
                  <div class="recaptcha-privacy-terms">
                    <p>
                      This site is protected by reCAPTCHA and the Google
                      <a
                        href="https://policies.google.com/privacy"
                        target="_blank"
                        >Privacy Policy</a
                      >
                      and
                      <a
                        href="https://policies.google.com/terms"
                        target="_blank"
                        >Terms of Service</a
                      >
                      apply.
                    </p>
                  </div>
                  <div class="wpcf7-response-output" aria-hidden="true"></div>
                  <input type="hidden" name="vx_width" value="1680" /><input
                    type="hidden"
                    name="vx_height"
                    value="1050"
                  /><input
                    type="hidden"
                    name="vx_url"
                    value="https://www.valsoftcorp.com/"
                  />
                </form>
              </div>
              <div class="clearfix"></div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="modal fade" id="video-modal" tabindex="-1" role="dialog">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-body">
            <a href="#" class="modal-close-button" data-dismiss="modal"></a>
            <section><div></div></section>
          </div>
        </div>
      </div>
    </div>
 


    
    <script type="text/javascript">
      var mapDiv;

      function initMap() {
        mapDiv = document.getElementById("map");
        const centerOrign = {
          lat: 21.5218,
          lng: -77.7812,
          zoom: 3,
        };

        var map = new google.maps.Map(mapDiv, {
          center: new google.maps.LatLng(centerOrign.lat, centerOrign.lng),
          zoom: centerOrign.zoom,
          mapTypeId: google.maps.MapTypeId.ROADMAP,
          //https://developers.google.com/maps/documentation/javascript/style-reference
          styles: [
            {
              featureType: "administrative", //must have
              elementType: "geometry",
              stylers: [
                {
                  visibility: "off",
                },
              ],
            },
            {
              featureType: "administrative.country", //country borders
              elementType: "geometry.stroke",
              stylers: [
                {
                  visibility: "on",
                },
                {
                  color: "#ffffff",
                },
              ],
            },
            {
              featureType: "administrative", //country text
              elementType: "labels.text.fill",
              stylers: [
                {
                  visibility: "on",
                },
                {
                  color: "#848ea4",
                },
              ],
            },
            {
              featureType: "administrative.province", //states/provinces borders
              elementType: "geometry.stroke",
              stylers: [
                {
                  visibility: "on",
                },
                {
                  color: "#ffffff",
                },
              ],
            },
            {
              featureType: "landscape", //continents
              elementType: "geometry",
              stylers: [
                {
                  visibility: "on",
                },
                {
                  color: "#cccccc",
                },
              ],
            },
            {
              featureType: "poi",
              elementType: "all",
              stylers: [
                {
                  visibility: "off",
                },
              ],
            },
            {
              featureType: "road", //roads
              elementType: "all",
              stylers: [
                {
                  visibility: "off",
                },
              ],
            },
            {
              featureType: "transit", //transit
              elementType: "all",
              stylers: [
                {
                  visibility: "off",
                },
              ],
            },
            {
              featureType: "water", //oceans
              elementType: "geometry",
              stylers: [
                {
                  color: "#ffffff",
                },
              ],
            },
            {
              featureType: "water", //ocean names
              elementType: "labels",
              stylers: [
                {
                  visibility: "off",
                },
              ],
            },
          ],
        });

        var markerCoords = [
          [
            '<div class="info-window"><a href="https://www.valsoftcorp.com/"><img src="https://www.valsoftcorp.com/wp-content/uploads/2021/11/valsoft-logo.svg" alt="Valsoft Corporation"></a></div>',
            45.489884,
            -73.709121,
          ],
          [
            '<div class="info-window"><a href="https://www.valsoftcorp.com/our-companies/industrial/#aldata-software"><img src="https://www.valsoftcorp.com/wp-content/uploads/2017/10/aldata-logo.svg" alt="Aldata Software"></a></div>',
            53.398204,
            -117.591178,
          ],
          [
            '<div class="info-window"><a href="https://www.valsoftcorp.com/our-companies/education/#sars-software"><img src="https://www.valsoftcorp.com/wp-content/uploads/2018/12/SARS-Logo.svg" alt="SARS Software"></a></div>',
            37.946151,
            -122.484418,
          ],
          [
            '<div class="info-window"><a href="https://www.valsoftcorp.com/our-companies/travel-leisure/#welcome-systems"><img src="https://www.valsoftcorp.com/wp-content/uploads/2020/01/welcome-anywhere.svg" alt="Welcome Systems"></a></div>',
            52.276816,
            -0.881756,
          ],
          [
            '<div class="info-window"><a href="https://www.valsoftcorp.com/our-companies/travel-leisure/#cms-hospitality"><img src="https://www.valsoftcorp.com/wp-content/uploads/2018/12/CMS-Hospitality-Logo.svg" alt="CMS Hospitality"></a></div>',
            -33.750061,
            151.145516,
          ],
          [
            '<div class="info-window"><a href="https://www.valsoftcorp.com/our-companies/industrial/#creative-information-systems"><img src="https://www.valsoftcorp.com/wp-content/uploads/2017/10/creative-information-systems-logo.svg" alt="Creative Information Systems"></a></div>',
            42.992437,
            -71.462687,
          ],
          [
            '<div class="info-window"><a href="https://www.valsoftcorp.com/our-companies/recreation/#dockmaster"><img src="https://www.valsoftcorp.com/wp-content/uploads/2017/10/dockmaster-logo.svg" alt="DockMaster"></a></div>',
            26.715221,
            -80.091598,
          ],
          [
            '<div class="info-window"><a href="https://www.valsoftcorp.com/our-companies/car-rental/#bluebird"><img src="https://www.valsoftcorp.com/wp-content/uploads/2019/06/bluebird-logo-new.svg" alt="Bluebird"></a></div>',
            40.906537,
            -74.544645,
          ],
          [
            '<div class="info-window"><a href="https://www.valsoftcorp.com/our-companies/transportation-logistics/#hudson-software"><img src="https://www.valsoftcorp.com/wp-content/uploads/2019/11/hudson-software.svg" alt="Hudson Software"></a></div>',
            42.703731,
            -71.143352,
          ],
          [
            '<div class="info-window"><a href="https://www.valsoftcorp.com/our-companies/car-rental/#thermeon"><img src="https://www.valsoftcorp.com/wp-content/uploads/2018/11/thermeon-logo.svg" alt="Thermeon"></a></div>',
            51.236077,
            -0.127602,
          ],
          [
            '<div class="info-window"><a href="https://www.valsoftcorp.com/our-companies/travel-leisure/#innquest"><img src="https://www.valsoftcorp.com/wp-content/uploads/2017/10/innquest-logo.svg" alt="InnQuest"></a></div>',
            27.949146,
            -82.524461,
          ],
          [
            '<div class="info-window"><a href="https://www.valsoftcorp.com/our-companies/local-government/#cascade-software"><img src="https://www.valsoftcorp.com/wp-content/uploads/2019/04/cascade-logo.svg" alt="Cascade Software"></a></div>',
            44.066021,
            -123.095388,
          ],
          [
            '<div class="info-window"><a href="https://www.valsoftcorp.com/our-companies/financial-services/#credex-systems"><img src="https://www.valsoftcorp.com/wp-content/uploads/2019/05/Credex-logo.svg" alt="Credex Systems"></a></div>',
            33.587195,
            -86.680584,
          ],
          [
            '<div class="info-window"><a href="https://www.valsoftcorp.com/our-companies/health-dental/#xldent"><img src="https://www.valsoftcorp.com/wp-content/uploads/2019/04/XLDent-logo.svg" alt="XLDent"></a></div>',
            45.055555,
            -93.634699,
          ],
          [
            '<div class="info-window"><a href="https://www.valsoftcorp.com/our-companies/aviation/#commsoft-oases"><img src="https://www.valsoftcorp.com/wp-content/uploads/2022/09/commsoft-oases-logo.svg.svg" alt="Commsoft OASES"></a></div>',
            51.810636,
            0.751222,
          ],
          [
            '<div class="info-window"><a href="https://www.valsoftcorp.com/our-companies/travel-leisure/#h-and-l"><img src="https://www.valsoftcorp.com/wp-content/uploads/2019/10/h-and-l-logo.svg" alt="H&L"></a></div>',
            -34.970814,
            138.609391,
          ],
          [
            '<div class="info-window"><a href="https://www.valsoftcorp.com/our-companies/public-safety/#innovative-business-software"><img src="https://www.valsoftcorp.com/wp-content/uploads/2020/01/Innovative-logo.svg" alt="Innovative Business Software"></a></div>',
            55.682389,
            12.5773,
          ],
          [
            '<div class="info-window"><a href="https://www.valsoftcorp.com/our-companies/transportation-logistics/#navitrans"><img src="https://www.valsoftcorp.com/wp-content/uploads/2020/02/navitrans-logo.svg" alt="Navitrans"></a></div>',
            50.829545,
            3.302385,
          ],
          [
            '<div class="info-window"><a href="https://www.valsoftcorp.com/our-companies/quality-safety-health-environment/#visiumkms"><img src="https://www.valsoftcorp.com/wp-content/uploads/2020/02/visiumkms-logo-new.svg" alt="VisiumKMS"></a></div>',
            29.738974,
            -95.464348,
          ],
          [
            '<div class="info-window"><a href="https://www.valsoftcorp.com/our-companies/health-dental/#macpractice"><img src="https://www.valsoftcorp.com/wp-content/uploads/2020/04/MacPractice-logo.svg" alt="MacPractice"></a></div>',
            40.815646,
            -96.710123,
          ],
          [
            '<div class="info-window"><a href="https://www.valsoftcorp.com/our-companies/financial-services/#alltrust-networks"><img src="https://www.valsoftcorp.com/wp-content/uploads/2020/07/alltrust-logo.svg" alt="AllTrust Networks"></a></div>',
            38.955727,
            -77.383626,
          ],
          [
            '<div class="info-window"><a href="https://www.valsoftcorp.com/our-companies/process-control/#dsl-systems"><img src="https://www.valsoftcorp.com/wp-content/uploads/2020/12/DSL-Systems-logo.svg" alt="DSL Systems"></a></div>',
            52.939758,
            -1.1087,
          ],
          [
            '<div class="info-window"><a href="https://www.valsoftcorp.com/our-companies/animal-health/#asteris"><img src="https://www.valsoftcorp.com/wp-content/uploads/2020/12/asteris-logo.svg" alt="Asteris"></a></div>',
            39.099422,
            -104.833788,
          ],
          [
            '<div class="info-window"><a href="https://www.valsoftcorp.com/our-companies/warehouse-management/#wisys"><img src="https://www.valsoftcorp.com/wp-content/uploads/2021/01/WiSys-logo.svg" alt="WiSys"></a></div>',
            34.01173,
            -84.493618,
          ],
          [
            '<div class="info-window"><a href="https://www.valsoftcorp.com/our-companies/workforce-management/#softbrick"><img src="https://www.valsoftcorp.com/wp-content/uploads/2021/01/softbrick-logo.svg" alt="Softbrick"></a></div>',
            51.864531,
            5.31072,
          ],
          [
            '<div class="info-window"><a href="https://www.valsoftcorp.com/our-companies/car-rental/#navotar"><img src="https://www.valsoftcorp.com/wp-content/uploads/2021/02/navotar-logo.svg" alt="Navotar"></a></div>',
            43.634779,
            -79.645079,
          ],
          [
            '<div class="info-window"><a href="https://www.valsoftcorp.com/our-companies/process-control/#datastor-systems"><img src="https://www.valsoftcorp.com/wp-content/uploads/2021/03/datastor-logo.svg" alt="Datastor Systems"></a></div>',
            53.177899,
            -2.210238,
          ],
          [
            '<div class="info-window"><a href="https://www.valsoftcorp.com/our-companies/industrial/#vertical-software"><img src="https://www.valsoftcorp.com/wp-content/uploads/2021/03/vertical-software.svg" alt="Vertical Software"></a></div>',
            40.648873,
            -89.651087,
          ],
          [
            '<div class="info-window"><a href="https://www.valsoftcorp.com/our-companies/travel-leisure/#nfs"><img src="https://www.valsoftcorp.com/wp-content/uploads/2021/11/nfs-technology.svg" alt="NFS"></a></div>',
            51.823314,
            0.047863,
          ],
          [
            '<div class="info-window"><a href="https://www.valsoftcorp.com/our-companies/public-safety/#fsm"><img src="https://www.valsoftcorp.com/wp-content/uploads/2021/03/fsm-logo.svg" alt="FSM"></a></div>',
            60.293435,
            24.993133,
          ],
          [
            '<div class="info-window"><a href="https://www.valsoftcorp.com/our-companies/wealth-management/#finartis"><img src="https://www.valsoftcorp.com/wp-content/uploads/2021/05/logo-finartis.svg" alt="Finartis"></a></div>',
            46.50492,
            6.481722,
          ],
          [
            '<div class="info-window"><a href="https://www.valsoftcorp.com/our-companies/education/#scholarchip"><img src="https://www.valsoftcorp.com/wp-content/uploads/2021/05/logo-scholarchip.svg" alt="ScholarChip"></a></div>',
            40.760801,
            -73.508519,
          ],
          [
            '<div class="info-window"><a href="https://www.valsoftcorp.com/our-companies/automotive/#ase-automotive-solutions"><img src="https://www.valsoftcorp.com/wp-content/uploads/2021/05/logo-ase.svg" alt="ASE Automotive Solutions"></a></div>',
            53.372411,
            -2.252704,
          ],
          [
            '<div class="info-window"><a href="https://www.valsoftcorp.com/our-companies/construction/#telematel"><img src="https://www.valsoftcorp.com/wp-content/uploads/2021/06/telematel-logo.svg" alt="Telematel"></a></div>',
            41.397493,
            2.180882,
          ],
          [
            '<div class="info-window"><a href="https://www.valsoftcorp.com/our-companies/public-safety/#bold-communications"><img src="https://www.valsoftcorp.com/wp-content/uploads/2021/11/bold-communications-logo.svg" alt="Bold Communications"></a></div>',
            50.731121,
            -3.400385,
          ],
          [
            '<div class="info-window"><a href="https://www.valsoftcorp.com/our-companies/broadcast-media-entertainment/#video-stream-networks-software"><img src="https://www.valsoftcorp.com/wp-content/uploads/2023/05/VSN-main-logo-Gradient.svg" alt="Video Stream Networks Software"></a></div>',
            41.594026,
            2.007533,
          ],
          [
            '<div class="info-window"><a href="https://www.valsoftcorp.com/our-companies/workforce-management/#manus-software"><img src="https://www.valsoftcorp.com/wp-content/uploads/2021/09/logo-manusplus.svg" alt="Manus Software"></a></div>',
            51.833668,
            4.61716,
          ],
          [
            '<div class="info-window"><a href="https://www.valsoftcorp.com/our-companies/grant-management/#fluent-technology"><img src="https://www.valsoftcorp.com/wp-content/uploads/2021/10/fluent-technology-dark-logo.svg" alt="Fluent Technology"></a></div>',
            54.551396,
            -5.917156,
          ],
          [
            '<div class="info-window"><a href="https://www.valsoftcorp.com/our-companies/workforce-management/#vocantas"><img src="https://www.valsoftcorp.com/wp-content/uploads/2021/11/vocantas-logo.svg" alt="Vocantas"></a></div>',
            45.335747,
            -75.797521,
          ],
          [
            '<div class="info-window"><a href="https://www.valsoftcorp.com/our-companies/industrial/#advanced-weighing-systems"><img src="https://www.valsoftcorp.com/wp-content/uploads/2022/02/aws-logo.svg" alt="Advanced Weighing Systems"></a></div>',
            44.937953,
            -91.356494,
          ],
          [
            '<div class="info-window"><a href="https://www.valsoftcorp.com/our-companies/transportation-logistics/#cadis"><img src="https://www.valsoftcorp.com/wp-content/uploads/2022/02/cadis-logo.svg" alt="CADIS"></a></div>',
            48.287539,
            11.564353,
          ],
          [
            '<div class="info-window"><a href="https://www.valsoftcorp.com/our-companies/automotive/#aim-computer-solutions"><img src="https://www.valsoftcorp.comassets/images/aim-logo.svg" alt="AIM Computer Solutions"></a></div>',
            42.552476,
            -82.938854,
          ],
          [
            '<div class="info-window"><a href="https://www.valsoftcorp.com/our-companies/broadcast-media-entertainment/#m-and-i"><img src="https://www.valsoftcorp.com/wp-content/uploads/2023/07/MI-Broadcast-Services-Radio-Automation-and-Newsroom-Software.svg" alt="M&I Broadcast Services"></a></div>',
            52.221257,
            5.180445,
          ],
          [
            '<div class="info-window"><a href="https://www.valsoftcorp.com/our-companies/manufacturing/#idhammar-systems"><img src="https://www.valsoftcorp.com/wp-content/uploads/2022/06/idhammar-systems-logo.svg" alt="Idhammar Systems"></a></div>',
            51.450809,
            -2.591342,
          ],
          [
            '<div class="info-window"><a href="https://www.valsoftcorp.com/our-companies/energy/#inatech"><img src="https://www.valsoftcorp.com/wp-content/uploads/2022/06/inatech-logo-darkgrey.svg" alt="Inatech"></a></div>',
            12.977453,
            80.251968,
          ],
          [
            '<div class="info-window"><a href="https://www.valsoftcorp.com/our-companies/construction/#ingenieria-informatica-interactiva"><img src="https://www.valsoftcorp.com/wp-content/uploads/2022/06/iii-logo-web.svg" alt="Ingeniería Informática Interactiva"></a></div>',
            41.548151,
            2.202907,
          ],
          [
            '<div class="info-window"><a href="https://www.valsoftcorp.com/our-companies/broadcast-media-entertainment/#woody_technologies_sas"><img src="https://www.valsoftcorp.com/wp-content/uploads/2022/07/woody-technology-pink-logo.svg" alt="Media & Broadcast workflow software optimization"></a></div>',
            48.864716,
            2.349014,
          ],
          [
            '<div class="info-window"><a href="https://www.valsoftcorp.com/our-companies/document-management/#work_dynamics_technologies"><img src="https://www.valsoftcorp.com/wp-content/uploads/2022/08/WorkDynamics-Logo-Horizontal-Light.svg" alt="Workflow and document management software"></a></div>',
            45.344361,
            -75.921353,
          ],
          [
            '<div class="info-window"><a href="https://www.valsoftcorp.com/our-companies/energy/#azility"><img src="https://www.valsoftcorp.com/wp-content/uploads/2022/08/Azility-Energy-Management-Solutions-2.svg" alt="Energy management software, powering energy, water and emissions savings"></a></div>',
            -34.404108,
            150.899899,
          ],
          [
            '<div class="info-window"><a href="https://www.valsoftcorp.com/our-companies/transportation-logistics/#inplan"><img src="https://www.valsoftcorp.com/wp-content/uploads/2022/10/Inplan_logo.svg" alt="Inplan software for logistics"></a></div>',
            51.43549098759832,
            6.8817254558804075,
          ],
          [
            '<div class="info-window"><a href="https://www.valsoftcorp.com/our-companies/managed-print-services/#mps"><img src="https://www.valsoftcorp.com/wp-content/uploads/2022/10/logo_mpsmonitor-printer-monitoring-in-the-cloud-def.svg" alt="Monitoring and management of printers through a cloud-based SaaS platform."></a></div>',
            45.52525290796549,
            10.211961305061603,
          ],
          [
            '<div class="info-window"><a href="https://www.valsoftcorp.com/our-companies/managed-print-services/#euroform"><img src="https://www.valsoftcorp.com/wp-content/uploads/2022/10/EuroForm-rgba-wide-for-ligth-bg-1.svg" alt="Providing managed print services for large format and thermal printer fleets."></a></div>',
            55.7243111207542,
            12.379625711830045,
          ],
          [
            '<div class="info-window"><a href="https://www.valsoftcorp.com/our-companies/car-rental/#enrich"><img src="https://www.valsoftcorp.com/wp-content/uploads/2022/11/Enrich_logo.svg" alt="Software for the Full-Service Truck Leasing Industry and a leader in Asset Management and Maintenance software solutions for professional Fleet Management"></a></div>',
            51.0104975699878,
            -114.12609912773341,
          ],
          [
            '<div class="info-window"><a href="https://www.valsoftcorp.com/our-companies/print-and-publishing/#mwm-group"><img src="https://www.valsoftcorp.com/wp-content/uploads/2022/11/MWM_Group_large.svg" alt="Systems and consulting services for printing companies, publishers, and financial companies."></a></div>',
            59.30889450588123,
            18.02347107373854,
          ],
          [
            '<div class="info-window"><a href="https://www.valsoftcorp.com/our-companies/service-and-repair-management/#service-central"><img src="https://www.valsoftcorp.com/wp-content/uploads/2022/11/ServiceCentralTecnologies-Logo.svg" alt="Systems and consulting services for printing companies, publishers, and financial companies."></a></div>',
            33.89072135582718,
            -84.46950975322451,
          ],
          [
            '<div class="info-window"><a href="https://www.valsoftcorp.com/our-companies/manufacturing/#dpsi"><img src="https://www.valsoftcorp.com/wp-content/uploads/2022/12/DPSI_Logo.svg" alt="Computerized Maintenance Management Software (CMMS)/Enterprise Asset Management (EAM) software provider."></a></div>',
            36.05061815441168,
            -79.88901363033447,
          ],
          [
            '<div class="info-window"><a href="https://www.valsoftcorp.com/our-companies/manufacturing/#komexo"><img src="https://www.valsoftcorp.com/wp-content/uploads/2023/01/Komexo.svg" alt="Computerized Maintenance Management Software (CMMS)/Enterprise Asset Management (EAM) software provider."></a></div>',
            51.89053172383941,
            5.307317732262803,
          ],
          [
            '<div class="info-window"><a href="https://www.valsoftcorp.com/our-companies/transportation-logistics/#apero"><img src="https://www.valsoftcorp.com/wp-content/uploads/2023/01/Apero-Solutions-SVG.svg" alt="Leading North American Enterprise Resource Planning (ERP) and Warehouse Management System (WMS) software provider"></a></div>',
            53.496195549110574,
            -113.41637085976106,
          ],
          [
            '<div class="info-window"><a href="https://www.valsoftcorp.com/our-companies/workforce-management/#monaco"><img src="https://www.valsoftcorp.com/wp-content/uploads/2023/01/Monaco-Asset-1.svg" alt="Workforce management software company"></a></div>',
            51.581611785307885,
            4.80763458487565,
          ],
          [
            '<div class="info-window"><a href="https://www.valsoftcorp.com/our-companies/club-management/#t-innova"><img src="https://www.valsoftcorp.com/wp-content/uploads/2023/01/T-Innova-logo-SVG.svg" alt="Workforce Management"></a></div>',
            41.279540882885634,
            1.9875454134594202,
          ],
          [
            '<div class="info-window"><a href="https://www.valsoftcorp.com/our-companies/automotive/#freicon"><img src="https://www.valsoftcorp.com/wp-content/uploads/2023/02/Filaks.Plus_Logo_Original.svg" alt="DMS business solutions to automotive retailers and manufacturers"></a></div>',
            47.986550377575185,
            7.782002640605331,
          ],
          [
            '<div class="info-window"><a href="https://www.valsoftcorp.com/our-companies/service-and-repair-management/#futura-si"><img src="https://www.valsoftcorp.com/wp-content/uploads/2023/01/Logo-FuturaSI-Orizzontale.svg" alt="Cloud management software for heating maintenance companies"></a></div>',
            45.7956255668309,
            12.501879313563274,
          ],
          [
            '<div class="info-window"><a href="https://www.valsoftcorp.com/our-companies/retail-pos/#octave"><img src="https://www.valsoftcorp.com/wp-content/uploads/2023/01/Octave-Logo-black-Big.svg" alt="POS Software and end-to-end omnichannel solution"></a></div>',
            47.47063327874461,
            -0.6065639017369382,
          ],
          [
            '<div class="info-window"><a href="https://www.valsoftcorp.com/our-companies/process-and-manufacturing/#pimsoft"><img src="https://valsoftcorp.wpenginepowered.com/wp-content/uploads/2023/01/Pimsoft-logo-tagline.svg" alt="Enterprise-wide software platform that improves and sustains data quality for process and manufacturing industries"></a></div>',
            29.77685852747586,
            -95.61939285791976,
          ],
          [
            '<div class="info-window"><a href="https://www.valsoftcorp.com/our-companies/education/#kivuto"><img src="https://www.valsoftcorp.com/wp-content/uploads/2023/02/Kivuto-logo.svg" alt="Higher Education Software"></a></div>',
            45.3893387062121,
            -75.76152216992016,
          ],
          [
            '<div class="info-window"><a href="https://www.valsoftcorp.com/our-companies/travel-leisure/#tigertms"><img src="https://www.valsoftcorp.com/wp-content/uploads/2023/05/Tiger-TMS.svg" alt="Hospitality Solutions"></a></div>',
            50.85915443591307,
            -1.7863104612834657,
          ],
          [
            '<div class="info-window"><a href="https://www.valsoftcorp.com/our-companies/transportation-logistics/#datatract"><img src="https://www.valsoftcorp.com/wp-content/uploads/2023/05/Datatrac.svg" alt="Efficient technology providing a best-in-class experience and superior performance for its customers."></a></div>',
            34.03979702617455,
            -84.291768901898857,
          ],
          [
            '<div class="info-window"><a href="https://www.valsoftcorp.com/our-companies/transportation-logistics/#bdk"><img src="https://www.valsoftcorp.com/wp-content/uploads/2023/05/BDK.svg" alt="Software for transport, logistics and communication."></a></div>',
            47.64307522766401,
            9.201877254985062,
          ],
          [
            '<div class="info-window"><a href="https://www.valsoftcorp.com/our-companies/local-government/#irosoft"><img src="https://www.valsoftcorp.com/wp-content/uploads/2023/05/Logo_Irosoft-bleu.svg" alt="Top provider of technology and services that excel in handling structured and unstructured data."></a></div>',
            45.498056675278946,
            -73.70225120277358,
          ],
          [
            '<div class="info-window"><a href="https://www.valsoftcorp.com/our-companies/print-and-publishing/#nexera"><img src="https://www.valsoftcorp.com/wp-content/uploads/2023/05/Nexera.svg" alt="Providing customers with the most accurate, comparative copier/printer device data and benchmarks."></a></div>',
            44.523037372207106,
            -109.05723977208278,
          ],
        ];

        var icon = {
          url: "https://www.valsoftcorp.comassets/images/marker.svg",
          scaledSize: new google.maps.Size(30, 30),
          origin: new google.maps.Point(0, 0),
        };

        var infowindow = new google.maps.InfoWindow();

        var markers = [];
        var marker, i;

        for (var i = 0, len = markerCoords.length; i < len; i++) {
          marker = new google.maps.Marker({
            position: new google.maps.LatLng(
              markerCoords[i][1],
              markerCoords[i][2]
            ),
            icon: icon,
            optimized: false,
          });
          markers.push(marker);

          google.maps.event.addListener(
            marker,
            "click",
            (function (marker, i) {
              return function () {
                infowindow.setContent(markerCoords[i][0]);
                infowindow.open(map, marker);
              };
            })(marker, i)
          );
        }

        var marker_wrapper = new google.maps.OverlayView();
        marker_wrapper.draw = function () {
          this.getPanes().markerLayer.id = "marker-wrapper";
        };
        marker_wrapper.setMap(map);

        var markerCluster = new MarkerClusterer(map, markers, {
          styles: [
            {
              url: "https://www.valsoftcorp.comassets/images/cluster.svg",
              height: 34,
              width: 34,
              textColor: "white",
            },
          ],
        });

        //Search by country in the map
        const select = document.querySelector("#country");
        select.onchange = function () {
          let selectedI = this.selectedIndex;
          const lat = parseFloat(this.options[selectedI].dataset.latitude);
          const lng = parseFloat(this.options[selectedI].dataset.longitude);
          const newPositionInMap = {
            lat: lat || centerOrign.lat,
            lng: lng || centerOrign.lng,
          };
          map.setCenter(newPositionInMap);
          map.setZoom(selectedI == 0 ? centerOrign.zoom : 4);
        };
      }
      //google.maps.event.addDomListener(window, 'load', initialize);
    </script>
    <script>
      //if url has hash
      jQuery(document).ready(function ($) {
        if (window.location.hash) {
          var hash = window.location.hash;
          if ($(hash).length) {
            $("html, body").animate(
              {
                scrollTop: $(hash).offset().top - 88,
              },
              0
            );
          }
        }
      });
    </script>
    <script
      defer="defer"

    ></script>
    <div style="display: none; visibility: hidden">
 
    </div>
    <div>
      <div
        class="grecaptcha-badge"
        data-style="bottomright"
        style="
          width: 256px;
          height: 60px;
          display: block;
          transition: right 0.3s ease 0s;
          position: fixed;
          bottom: 14px;
          right: -186px;
          box-shadow: gray 0px 0px 5px;
          border-radius: 2px;
          overflow: hidden;
        "
      >
        <div class="grecaptcha-logo">
          <iframe
            title="reCAPTCHA"
            width="256"
            height="60"
            role="presentation"
            name="a-udsj29amtbeu"
            frameborder="0"
            scrolling="no"
            sandbox="allow-forms allow-popups allow-same-origin allow-scripts allow-top-navigation allow-modals allow-popups-to-escape-sandbox allow-storage-access-by-user-activation"
            src="<?php echo get_template_directory_uri();?>/assets/anchor.htm"
          ></iframe>
        </div>
        <div class="grecaptcha-error"></div>
        <textarea
          id="g-recaptcha-response-100000"
          name="g-recaptcha-response"
          class="g-recaptcha-response"
          style="
            width: 250px;
            height: 40px;
            border: 1px solid rgb(193, 193, 193);
            margin: 10px 25px;
            padding: 0px;
            resize: none;
            display: none;
          "
        >
03AFcWeA7Dur6U8tAA9uPZmVAO5eZ6kDIZiZ1uJ4X_bpyrUeg-2t4piwmnYiXiVWSD-O6TNSYANkrkPwjvbdJ-5RBlitWGLk0xKISekyCpb0cs1q9T9sCSPGaw00bfWTXO8SrlzUDahQb28JBMMO0RKt_CvJPwxHPU3e6dQE71DpIyliWnO23BNtZD03AyJWr0a_b7b4ZgQ0-2rL9wX7x387K9fRwFWpmPKn6S2fefvAKlZadjNnaknM-Jo651ZyU8zlPvcRCp6wmw8HMZ2PWPZJIa6siA7p4h6PLBpc71ElMpTrIv_SfA4OvpbWRkKA-OSnSqnmNY89vCmLeDFj0s7LygFo8ufYyxDcDtsSpo10WAMEDw33oifVnAK2LgAL_7NDptzKX3ylogLMABx45r-uIXSBhSOFIZXT1Vuw4uUGfznd_Su-myBKscOKR8TfMew1NwfpkCedos6F2kNMWNOy4ilRVIC1gIeAO8yjYnyVi55Iz_qSqpCjlbX4ckqW3WNaEyzDMoTwvEqc_BvYST8Dl0wSMmdaOaWC0hzuAtp3UJsbcTxmjGcvRR1IF_TC-JjClBkXHKlKRLqkW6_NLjxr7aLLCHKbOAbV2ezCwf3Gc_8Z9YLucyPcoij5BGechgBh8qMCIr1JJ1</textarea
        >
      </div>
      <iframe style="display: none"></iframe>
    </div>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js"></script>
    <script>
     
    $('.slider-activation').slick({
  autoplay: true,
    //adaptiveHeight: true,
    autoplaySpeed: 10000,
    speed: 750,
    arrows: false,
    dots: true,
slidesToShow: 1,
slidesToScroll: 1
});
$('.slider-activation-two').slick({
  autoplay: true,
    //adaptiveHeight: true,
    autoplaySpeed: 10000,
    speed: 750,
    arrows: false,
    dots: true,
slidesToShow: 1,
slidesToScroll: 1
});
</script>
  </body>
</html>

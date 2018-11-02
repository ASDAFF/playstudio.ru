<section class="prefooter">
  <div class="container">
    <div class="row">
      <div class="col-md-7 col-sm-8">
        <div class="row">
          <h3>Остались вопросы?</h3>
          <p>
            Это Андрей, профессиональный звукоинженер с профильным образованием.
            Руководит разработкой изготовлением аудиоматериалов любой сложности: 
            от минусовок и фонограмм до сложных проектов звукозаписи, аранжировки, 
            мастеринга и сведения.
          </p>
          <p>
            Андрей выполнил более 200 работ для клиентов нашей студии звукозаписи.
          </p>
          <p class="head">
            Свяжитесь с Андреем для консультации по вопросам звукозаписи
          </p>
          <?$APPLICATION->IncludeComponent(
           "demo:main.feedback", 
           "main_tpl", 
           array(
            "USE_CAPTCHA" => "N",
            "OK_TEXT" => "Спасибо, ваше сообщение принято.",
            "EXT_FIELDS" => array(
             0 => "PHONE",
             ),
            "EMAIL_TO" => "info@propov.net",
            "REQUIRED_FIELDS" => array(
             0 => "PHONE",
             ),
            "EVENT_MESSAGE_ID" => array(
             0 => "8",
             )
            ),
           false
           );?>
           <div class="row">
            <ul class="contacts">
              <li>
                <i class="fa fa-phone" aria-hidden="true"></i>
                <span>По телефону:</span>
                <p><a href="tel:+74959726944">+7(495)972-69-44</a></p>
              </li>
              <li>
                <i class="fa fa-mobile" aria-hidden="true"></i>
                <span>На мобильный:</span>
                <p><a href="tel:+79099172653">+7(909)917-26-53</a></p>
              </li>
              <li>
                <i class="fa fa-envelope" aria-hidden="true"></i>
                <span>По email:</span>
                <p><a href="mailto:info@playstudio.ru">info@playstudio.ru</a></p>
              </li>
            </ul>
          </div>
        </div>
      </div>
      <div class="col-md-4 col-md-offset-1 col-sm-4">
        <!-- <img src="<?=SITE_TEMPLATE_PATH?>/img/man.png" alt="" class="img-responsive"> -->
      </div>
    </div>
  </div>
</section>
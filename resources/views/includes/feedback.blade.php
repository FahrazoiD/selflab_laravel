<section class="feedback-section">
  <img class="extra-element-bottom" id="extra1" src="./images/extra-element1.svg">
  <img class="extra-element-bottom" id="extra2" src="./images/extra-element2.svg">
  <img class="extra-element-top" id="extra1" src="./images/extra-element4.svg">
  <img class="extra-element-top" id="extra2" src="./images/extra-element3.svg">
  <div class="container">
    <div class="contact-wrap">
      <h2 class="footer-title">
        Свяжитесь с нами
      </h2>
      <div class="contact-form">
        <form action="{{ route('sendemail') }}" id="msgform" method="post">
          <input type="text" name="name" placeholder="Имя" required >
          <input type="email" name="email" placeholder="Email" required >
          <textarea name="message" cols="30" rows="6" placeholder="Сообщение" required ></textarea>
          <input type="hidden" name="_token" value="{{ Session::token() }}">
          <input type="submit" value="Отправить">
        </form>
      </div>
      <div class="contacts">
        <ul class="contact-info">
          <li><i class="fa fa-envelope-o"></i> info@selflaboratory.ru</li>
          <li><i class="fa fa-whatsapp"></i> +7 (926) 625-75-71</li>
        </ul>
      </div>
    </div>
  </div>
</section>
<?php

echo "

<!--==========================
      Contact Section
    ============================-->
    <section id='contact' class='section-bg wow fadeInUp'>
      <div class='container'>

        <div class='section-header'>
          <h3>Contatos</h3>
          <p>Mais informações sobre nós, entre em contato conosco:</p>
        </div>

        <div class='row contact-info'>

          <div class='col-md-4'>
            <div class='contact-address'>
              <i class='ion-ios-location-outline'></i>
              <h3>Endereço</h3>
              <address>Sítio Escuro, Ce-371, Acopiara Ceará</address>
            </div>
          </div>

          <div class='col-md-4'>
            <div class='contact-phone'>
              <i class='ion-ios-telephone-outline'></i>
              <h3>Numero de Telefone</h3>
              <p><a href='tel:+155895548855'>+55 88 99265-2555</a></p>
            </div>
          </div>

         
          </div>

        </div>

        <div class='form'>
          <div id='sendmessage'>Your message has been sent. Thank you!</div>
          <div id='errormessage'></div>
          <form action='' method='post' role='form' class='contactForm'>
            <div class='form-row'>
              <div class='form-group col-md-6'>
                <input type='text' name='name' class='form-control' id='name' placeholder='Seu nome' data-rule='minlen:4' data-msg='Please enter at least 4 chars' />
                <div class='validation'></div>
              </div>
              <div class='form-group col-md-6'>
                <input type='email' class='form-control' name='email' id='email' placeholder='seu E-mail' data-rule='email' data-msg='Please enter a valid email' />
                <div class='validation'></div>
              </div>
            </div>
            <div class='form-group'>
              <input type='text' class='form-control' name='subject' id='subject' placeholder='Sujeito' data-rule='minlen:4' data-msg='Please enter at least 8 chars of subject' />
              <div class='validation'></div>
            </div>
            <div class='form-group'>
              <textarea class='form-control' name='message' rows='5' data-rule='required' data-msg='Please write something for us' placeholder='Mensagem'></textarea>
              <div class='validation'></div>
            </div>
            <div class='text-center'><button type='submit'>Enviar Mensagem</button></div>
          </form>
        </div>

      </div>
    </section><!-- #contact -->

";
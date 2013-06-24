<?php if(!class_exists('raintpl')){exit;}?><!doctype html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="es" xml:lang="es" >
<head>
   <title><?php echo $fsc->title;?></title>
   <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
   <meta name="description" content="<?php echo $fsc->get_description();?>" />
   <meta name="Robots" content="all" />
   <link type="text/css" href="<?php echo $path;?>/view/desktop/desktop.css" rel="stylesheet" />
   <script src="<?php echo $path;?>/view/js/jquery.js"></script>
</head>
<body>
   <div id="fb-root"></div>
   
   <div class="comments">
      <table width="100%">
         <tr>
            <td>
               <img class="face" src="<?php echo $path;?>/view/img/me_gusta.png" alt="wooow"/>
            </td>
            <td>
               <h1>¿Te gusto?</h1>
            </td>
            <td width="80" align="right" valign="top">
               <a href="https://twitter.com/share" class="twitter-share-button" data-lang="es" data-count="vertical" data-related="neorazorx" data-url="<?php echo $fsc->domain();?>">Tweet</a>
               <script>
                  !function(d,s,id){
                     var js,fjs=d.getElementsByTagName(s)[0];
                     if(!d.getElementById(id)){
                        js=d.createElement(s);
                        js.id=id;
                        js.src="https://platform.twitter.com/widgets.js";
                        fjs.parentNode.insertBefore(js,fjs);
                     }
                  }(document,"script","twitter-wjs");
               </script>
            </td>
            <td width="80" align="center" valign="top">
               <div class="g-plusone" data-size="tall" data-href="<?php echo $fsc->domain();?>"></div>
               <script type="text/javascript">
                  window.___gcfg = {lang: 'es'};
                  (function() {
                     var po = document.createElement('script');
                     po.type = 'text/javascript';
                     po.async = true;
                     po.src = 'https://apis.google.com/js/plusone.js';
                     var s = document.getElementsByTagName('script')[0];
                     s.parentNode.insertBefore(po, s);
                  })();
               </script>
            </td>
            <td width="80" valign="top">
               <div class="fb-like" data-href="<?php echo $fsc->domain();?>" data-layout="box_count" data-width="90" data-show-faces="false"></div>
               <script>
                  (function(d, s, id) {
                     var js, fjs = d.getElementsByTagName(s)[0];
                     if (d.getElementById(id)) return;
                     js = d.createElement(s);
                     js.id = id;
                     js.src = "//connect.facebook.net/es_ES/all.js#xfbml=1";
                     fjs.parentNode.insertBefore(js, fjs);
                  }(document, 'script', 'facebook-jssdk'));
               </script>
            </td>
         </tr>
      </table>
      
      <br/>
      <hr/>
      <br/>
      
      <!-- begin htmlcommentbox.com -->
      <div id="HCB_comment_box">Cargando...</div>
      <script type="text/javascript" language="javascript" id="hcb">
         /*<!--*/
         hcb_user = {
            //L10N
            comments_header : 'Deja tus comentarios o sugerencias:',
            name_label : 'Nombre',
            content_label: 'Escribe tu comentario aquí',
            submit : 'Enviar',
            logout_link : '<img title="log out" src="//www.htmlcommentbox.com/static/images/door_out.png" alt="[logout]" class="hcb-icon"/>',
            admin_link : '<img src="//www.htmlcommentbox.com/static/images/door_in.png" alt="[login]" class="hcb-icon"/>',
            no_comments_msg: 'Parece que hay un silencio tenso ... ¡Di algo!',
            add:' Haz tu comentario',
            again: 'Escribe otro comentario ¡Es gratis!',
            rss: '',
            said: 'dice:',
            prev_page: '<img src="//www.htmlcommentbox.com/static/images/arrow_left.png" class="hcb-icon" title="anteriores" alt="[prev]"/>',
            next_page: '<img src="//www.htmlcommentbox.com/static/images/arrow_right.png" class="hcb-icon" title="siguientes" alt="[next]"/>',
            showing: 'Mostrando',
            to: 'a',
            website_label: 'website (opcional)',
            email_label: 'email',
            anonymous: 'Anónimo',
            mod_label: '(mod)',
            subscribe: 'envíame las respuestas por',
            are_you_sure: '¿Quieres marcar este comentario como inapropiado?',
            
            reply: '<img src="//www.htmlcommentbox.com/static/images/reply.png"/> responder',
            flag: '<img src="//www.htmlcommentbox.com/static/images/flag.png"/> marcar',
            like: '<img src="//www.htmlcommentbox.com/static/images/like.png"/> me gusta',
            
            //dates
            days_ago: 'días antes',
            hours_ago: 'horas antes',
            minutes_ago: 'minutos antes',
            within_the_last_minute: 'en el último minuto',
            
            msg_thankyou: '¡Gracias por comentar!',
            msg_approval: '(este comentario no se publicará hasta ser aprobado)',
            msg_approval_required: '¡Gracias por comentar! Tu comentario aparecerá cuando el moderador lo acepte.',
            
            err_bad_html: 'Tu comentario contiene errores en el html.',
            err_bad_email: 'Por favor, esribe un email válido.',
            err_too_frequent: 'Debes esperar unos segundos entre comentarios.',
            err_comment_empty: '¡Tu comentario no se ha publicado porque estaba vacío!',
            err_denied: 'Tu comentario no ha sido aceptado.',
            
            //SETTINGS
            MAX_CHARS: 2048,
            PAGE: '', // ID of the webpage to show comments for. defaults to the webpage the user is currently visiting.
            RELATIVE_DATES: true // show dates in the form "X hours ago." etc.
         };
         if(!window.hcb_user){hcb_user={};}
         (function(){
            var s=document.createElement("script"), l=(""+window.location || hcb_user.PAGE), h="//www.htmlcommentbox.com";
            s.setAttribute("type","text/javascript");
            s.setAttribute("src", h+"/jread?page="+escape(l).replace("+","%2B")+"&opts=16862&num=10");
            if (typeof s!="undefined") document.getElementsByTagName("head")[0].appendChild(s);
         })();
         /*-->*/
      </script>
      <!-- end htmlcommentbox.com -->
   </div>
</body>
</html>
$(document).ready(function() {



  $("#fileuploader").uploadFile({
     url: "messages/upload",
     headers: {
      'X-CSRF-TOKEN': "{{csrf_token()}}"
     },
     returnType: "html",
     sequentialCount:10,
     multiple:true,
     dragDrop:true,
     fileName: "file",
     onLoad: function(obj) {
      $(".ajax-file-upload-container").hide()
     },
     onSubmit: function(files) {
      $(".ajax-file-upload-container").hide()
      $('#chat-wait').show()

     },
     onSuccess: function(files, data, xhr, pd) {
      $('#chat-wait').hide()

      sendchat(JSON.parse(data))

     },
     afterUploadAll: function(obj) {;


     },
     onError: function(files, status, errMsg, pd) {

     },
     onCancel: function(files, pd) {

     }
  });
    //click para abrir file btn -chat que está escondido
  $("#chat-attachment").click(function(event) {

      $(".ajax-file-upload :input[type='file']").trigger( "click" );
      // var panel= $("#fileuploader");
      // var inputs = panel.find("input").trigger( "click" );
  });

     
  // Click enviando chat
  $("#send-chat").click(function(event) {
    event.preventDefault();

    sendchat("")
    
  });

  //Enviando chat data via ajax
  function sendchat(file){

    if($("#message").val() !== "" || file !== null){
        var data = $('#chat-form').serialize();

        var thread_id = $("#thread_id").val()
        var url = "";
        var typeSend= "";
        if (thread_id == "") {
          //Criando novo post
          url = "{{ url('/') }}" +"/messages/";
          typeSend = 'POST';
        }else{
          //Atualizando
          url = "{{ url('/') }}" +"/messages/"+ thread_id;
          typeSend = 'PUT';
        }


        $.ajax({
          url: url,
          headers: {'X-CSRF-TOKEN': "{{csrf_token()}}"},
          type: typeSend,
          dataType: 'json',
          data: data+ "&path=" + file.path+ "&type=" + file.type+ "&name=" + file.name+ "&mimetype=" + file.mimetype,
        })
        .done(function(data) {

            $("#message").val("");

           // Mensagens
            var Auth_id = {{ Auth::id() }};

           //recebendo valor 
           $.each(data.chat, function(index, val) {   

            var html = "";
              var participant = removeItemArray(val.participante,Auth_id)+"";
              // Se é Atualização
              if(typeSend == 'PUT'){
                //Se é update mostra esta resposta
                html += '  <div class="nano scroll-bottom">';
                html += '    <div class="nano-content">';
                html += '      <div class="date"></div>';
                $.each(val.conversas, function(index, val) {
                  var userData = findUser(val.user_id,data.users)
                  if (val.user_id == Auth_id) {
                        html += '      <div class="from-me">';
                        html += '       '+val.body+'<h6 class="right-align"><small>'+val.updated_at+'</small></h6>';  
                        html += '      </div>';
                        html += '      <div class="clear"></div>';

                  } else {
                        html += '      <div class="from-them">';
                        html += '        <img  src="'+userData.path_foto+'" alt="'+userData.nome+'" class="circle photo " >'+val.body+'<h6 class="left-align"><small>'+val.updated_at+'</small></h6>';
                        html += '      </div>';
                        html += '      <div class="clear"></div>';
                  }

                });

                html += '    </div>';
                html += '  </div>';
            $("[data-thread_id="+val.thread_id+"]").html(html) 
            }else if(typeSend == 'POST'){
            // se está criando mostra esta resposta

           
                  
                  html += '  <div class="nano scroll-bottom">';
                  html += '    <div class="nano-content">';
                  html += '      <div class="date"></div>';
                  $.each(val.conversas, function(index, val) {
                    var userData = findUser(val.user_id,data.users)
                    if (val.user_id == Auth_id) {
                          html += '      <div class="from-me">';
                          html += '       '+val.body+'<h6 class="right-align"><small>'+val.updated_at+'</small></h6>';  
                          html += '      </div>';
                          html += '      <div class="clear"></div>';

                    } else {
                          html += '      <div class="from-them">';
                          html += '        <img  src="'+userData.path_foto+'" alt="'+userData.nome+'" class="circle photo " >'+val.body+'<h6 class="left-align"><small>'+val.updated_at+'</small></h6>';
                          html += '      </div>';
                          html += '      <div class="clear"></div>';
                    }

                  });

                  html += '    </div>';
                  html += '  </div>';

                  //atualizando data-thread id
                  $("#chat_with_user_"+participant).attr('data-thread_id', val.thread_id);
                  // Preenchendo html
                  $("#chat_with_user_"+participant).html(html)



            }
             
          //fim do each

           });


             

              // 

            })
            .fail(function() {
              console.log("error");
            })
            .always(function() {
              console.log("complete");
            });


        }
    
  }

  // Buscando usuario em array
  function findUser(user_id,users){

    var obj = new Object();
    $.each(users, function(index, val) {
      
      if (val.id == user_id) {
          obj.nome = val.nome;
          obj.path_foto = val.path_foto;
        //  console.log(val.nome)
      }

    });

   return obj;
  }

  // Remover item de array
  function removeItemArray(array,itemRemove){
      // Remove item  from array
      var filteredAry = array.filter(function(e) { return e !== itemRemove })
      return filteredAry
  }

  //chamando ajax menssages ao abrir a página
  getMessages()

  //atualizando mensagens em ajax
  function callChat(){
    getMessages()
   }
  //A cada 10s as mensagens são atualizadas... 
  setInterval(function () {
  
    if($('.chat').hasClass('layer-opened') == false){
         getMessages()
     }
  }, 10000);

  //Verificando se está com
  $('.chat-toggle').on('click', function() {

     if($('.chat').hasClass('layer-opened') == false){
         getMessages()
     }
  });




  //Buscando mensagens no servidor
  function getMessages(){

   $.get("{{ url('messages/list') }}", function(data) {
    
      console.log(data)


      
      $("#online_users").html("")
      $("#offline_users").html("")
      

      var Auth_id = {{ Auth::id() }};
     // console.log(data);

      //Usuários
      $.each(data.users, function(index, val) {     

          var html ="";

          if (val.status == "online" && val.id !== Auth_id ) {

            html += ' <div class="user" id="userId_'+val.id+'">';
            html += '    <img id="userIdFoto_'+val.id+'" src="'+val.path_foto+'" alt="'+val.nome+'" class="circle photo">';
            html += '    <div id="userIdNome_'+val.id+'" class="name">'+val.nome+'</div>';
            html += '    <div class="status">Online</div>';
            html += '    <div class="online"><i class="green-text fa fa-circle"></i>';
            html += '    </div>';
            html += '  </div>';

            $("#online_users").append(html)

          } else if(val.id !== Auth_id) {

            html += ' <div class="user" id="userId_'+val.id+'">';
            html += '    <img id="userIdFoto_'+val.id+'" src="'+val.path_foto+'" alt="'+val.nome+'" class="circle photo">';
            html += '    <div  id="userIdNome_'+val.id+'" class="name">'+val.nome+'</div>';
            html += '    <div class="status">Offline</div>';
            html += '    </div>';
            html += '  </div>';

            $("#offline_users").append(html)

          }      
        
      });
      

      // Mensagens
       $.each(data.chat, function(index, val) {
        var html = "";
        var participant = removeItemArray(val.participante,Auth_id)+"";
          html += '<div class="list list_mensagem" style="display: none;" data-thread_id="'+val.thread_id+'" id="chat_with_user_'+participant.replace(/,/g, '_')+'">';
          html += '  <div class="nano scroll-bottom">';
          html += '    <div class="nano-content">';

          html += '      <div class="date"></div>';
          
          $.each(val.conversas, function(index, val) {
            var userData = findUser(val.user_id,data.users)

            if (val.user_id == Auth_id) {
                  html += '      <div class="from-me">';
                  html += '       '+val.body+'<h6 class="right-align"><small>'+val.updated_at+'</small></h6>';  
                  html += '      </div>';
                  html += '      <div class="clear"></div>';

            } else {
                  html += '      <div class="from-them">';
                  html += '        <img  src="'+userData.path_foto+'" alt="'+userData.nome+'" class="circle photo " >'+val.body+'<h6 class="left-align"><small>'+val.updated_at+'</small></h6>';
                  html += '      </div>';
                  html += '      <div class="clear"></div>';
            }

          });

          html += '    </div>';
          html += '  </div>';
         html += ' </div>';
         //console.log(html)

         $("#chat_mensages").append(html)

     
       });

 // notificação de novas mensagens
      windowNotification(data)

      });
  }

// chamar quando tiver foco e notificar as novas mensagens... passar por parametro se tem uma nova mensagem ou so chamar quando tiver essa nova mensagem.
// icone de nova mensagem nas mensagens e no btn chat....
//

setInterval(function(){ windowNotification(); }, 3000);


function windowNotification(data) {
 

    // numero das novas mensagens
    num_new = Object.keys(data.new).length
    if(num_new !== 0){

      $.each(data.new, function(index, val) {
         /* iterate through array or object */
       //  console.log("id" + val.id)
  

         var userID  = $("[data-thread_id="+val.id+"]").attr('id').split("_").pop(-1);
         
         

         if ($("#userId_"+userID+" >.online").length ) {
            // Do something
            $("#userId_"+userID+" >.online").prepend('<span class="new badge"></span>')
        }else{
          $("#userId_"+userID).prepend('<span class="new badge"></span>')
        }

      });

        if(document.hidden !== false){

          // Notificar se a hora for igual  e colocar uma variavel pra ver se já notificou
        
             //usuario em outra aba, chamar notificação https://davidwalsh.name/page-visibility

                // Let's check if the browser supports notifications
              if (!("Notification" in window)) {
                //alert("This browser does not support desktop notification");
                }

              // Let's check whether notification permissions have already been granted
                else if (Notification.permission === "granted") {
                // If it's okay let's create a notification
                        var notification = new Notification("titulo", {
                        tag: "tag",
                        body: "body",
                        iconUrl: "http://google.com/x.ico",
                        icon: "icon"
                      });
              }

              // Otherwise, we need to ask the user for permission
              else if (Notification.permission !== 'denied') {
                Notification.requestPermission(function (permission) {
                  // If the user accepts, let's create a notification
                  if (permission === "granted") {
                    var notification = new Notification("titulo", {
                        tag: "tag",
                        body: "body",
                        iconUrl: "http://google.com/x.ico",
                        icon: "icon"
                      });



                  }
                });
              }


        } 
    }


}
  //Pesquisa pessoas
  $("#search-chat-input").keyup(function(){
 
        // Retrieve the input field text and reset the count to zero
        var filter = $(this).val(), count = 0;
 
        // Loop through the comment list
        $(".nano-content div").each(function(){
             // If the list item does not contain the text phrase fade it out
            if ($(this).text().search(new RegExp(filter, 'i')) < 0) {
                $(this).fadeOut();
            // Show the list item if the phrase matches and increase the count by 1
            } else {
                $(this).show();
                count++;
            }
        });
 
  
      
    });

   //Pesquisa mensagens
    $("#search-chat-input-messages").keyup(function(){

   
        // Retrieve the input field text and reset the count to zero
        var filter = $(this).val(), count = 0;
 
        // Loop through the comment list
        $(".nano-content div").each(function(){
             // If the list item does not contain the text phrase fade it out
            if ($(this).text().search(new RegExp(filter, 'i')) < 0) {
                $(this).fadeOut();
            // Show the list item if the phrase matches and increase the count by 1
            } else {
                $(this).show();
                count++;
            }
        });
 
  
      
    });




});

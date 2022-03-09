 //Configurando o arquivo que vai receber a imagem
            webcam.set_api_url('upload.php');

            //Setando a qualidade da imagem (1 - 100)
            webcam.set_quality(90);

            //Habilitando o som de click
            webcam.set_shutter_sound(true);

            //Definindo a função que será chamada após o termino do processo
            webcam.set_hook('onComplete', 'my_completion_handler');

            //Função para tirar snapshot
            function take_snapshot() {
                document.getElementById('upload_results').innerHTML = '<h1>Uploading...</h1>';
                webcam.snap();
            }

            //Função callback que será chamada após o final do processo
            function my_completion_handler(msg) {
                if (msg.match(/(http\:\/\/\S+)/)) {
                    var htmlResult = '<h1>Upload Successful!</h1>';
                    htmlResult += '<img id="camera" src="'+msg+'" />';
                    document.getElementById('upload_results').innerHTML = htmlResult;
                    webcam.reset();
                }
                else {
                    alert("PHP Erro: " + msg);
                }
            }
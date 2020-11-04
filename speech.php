<!DOCTYPE html>
<html>
	<head>
		<title>Speech to text converter in JS</title>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<style type="text/css">
			body{
				font-family: verdana;
			}
			/*#result{
				height: 35px;
				width: 300px;
				border: 1px solid #5F9EA0;
				font-size: 16px;
				padding: 5px 5px;
				background-color: #5F9EA0;
				margin-bottom: 20px;
				margin-left: -10%;
			}*/
				#result{
				height: 45px;
				width: 300px;
				border: 1px solid #ccc;
				padding: 10px;
				box-shadow: 0 0 10px 0 #bbb;
				margin-left: 40%;
				font-size: 20px;
				background-color: white;
				color: black;
				/*line-height: 25px;*/
			}
			button{
				padding-bottom: 5px;
				font-size: 25px;
				float: left;
				color: black;
				background-color: transparent;
				border: none;
			}
		</style>
	</head>
	<body>
		
		<button onclick="startInstructions()" accesskey="i"><i class="fa fa-info-circle" style="color: white"></i></button>
		<div id="result">
			<button onclick="startConverting()" accesskey="r"><i class="fa fa-microphone"></i></button>
		</div>

	<script type="text/javascript">

      function startInstructions () {
      	var msg = new SpeechSynthesisUtterance('Welcome to Visual-Eyes.');
        window.speechSynthesis.speak(msg);
        var msg = new SpeechSynthesisUtterance('Type alt plus R, to start recording.');
        window.speechSynthesis.speak(msg);
        var msg = new SpeechSynthesisUtterance('Say "instructions", to learn about more keyboard shortcuts.');
        window.speechSynthesis.speak(msg);
        var msg = new SpeechSynthesisUtterance('Say "book", to book an appointment.');
        window.speechSynthesis.speak(msg);
        var msg = new SpeechSynthesisUtterance('Say "sentiment", to analyze facial sentiments.');
        window.speechSynthesis.speak(msg);
        var msg = new SpeechSynthesisUtterance('Say "about", to know more about us.');
        window.speechSynthesis.speak(msg);

        if('webkitSpeechRecognition' in window){
          var speechRecognizer = new webkitSpeechRecognition();
          speechRecognizer.continuous = true;
          speechRecognizer.interimResults = true;
          speechRecognizer.lang = 'en-IN';
          speechRecognizer.start();

          speechRecognizer.onerror = function (event) {
          };
        }else{
          r.innerHTML = 'Your browser is not supported. If google chrome, please upgrade!';
        }
      }

    </script>

		<script type="text/javascript">

			var r = document.getElementById('result');

			function startConverting () {

				if('webkitSpeechRecognition' in window){
					var speechRecognizer = new webkitSpeechRecognition();
					speechRecognizer.continuous = true;
					speechRecognizer.interimResults = true;
					speechRecognizer.lang = 'en-IN';
					speechRecognizer.start();

					var finalTranscripts = '';

					speechRecognizer.onresult = function(event){
						var interimTranscripts = '';
						for(var i = event.resultIndex; i < event.results.length; i++){
							var transcript = event.results[i][0].transcript;
							transcript.replace("\n", "<br>");
							if(event.results[i].isFinal){
								finalTranscripts += transcript; 
								if (finalTranscripts.includes('home'))
								{
									window.location.replace("http://localhost/proj/proj3/#");
								}
								if(finalTranscripts.includes('book') || finalTranscripts.includes('book appointment'))
								{
									window.location.replace("http://localhost/proj/proj3/aid/book.php#");
								}
								if(finalTranscripts.includes('sentiment') || finalTranscripts.includes('sentiment analysis'))
								{
									window.location.replace("http://127.0.0.1:5500/index.html");
								}
								if(finalTranscripts.includes('about') || finalTranscripts.includes('about us'))
								{
									window.location.replace("http://localhost/proj/proj3/aboutus.php");
								}
								if(finalTranscripts.includes('help') || finalTranscripts.includes('instructions'))
								{
									window.location.replace("http://localhost/proj/proj3/help.php");
								}

																
							}
							else{
								interimTranscripts += transcript;
							}
						}
						r.innerHTML = finalTranscripts + '<span style="color:#999">' + interimTranscripts + '</span>';
					};
					speechRecognizer.onerror = function (event) {
					};
				}else{
					r.innerHTML = 'Your browser is not supported. If google chrome, please upgrade!';
				}
			}

			

		</script>
	</body>
</html>
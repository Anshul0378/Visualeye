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
      	var msg = new SpeechSynthesisUtterance('Learn more about us.');
        window.speechSynthesis.speak(msg);
        var msg = new SpeechSynthesisUtterance('Our motivation was to create an app that assists visually challenged people in society. Although there are many tools available, most of them require us to purchase extra equipment, which is not possible due to various constraints. Vision related problems include diabetic retinopathy, macular degeneration, corneal clouding, childhood blindness, and a number of infections. Hence, we aim to create a solution that is accessible to all.');
        window.speechSynthesis.speak(msg);
        var msg = new SpeechSynthesisUtterance('This website provides various benefits like:');
        window.speechSynthesis.speak(msg);
        var msg = new SpeechSynthesisUtterance('Voice API: The user can book appointments by verbally dictating text. Furthermore, the website can be browsed by means of voice navigation.');
        window.speechSynthesis.speak(msg);
        var msg = new SpeechSynthesisUtterance('E-Reader: A verbal guide of the website can be given to the visually impaired user in order to have an understanding about the context of the page.');
        window.speechSynthesis.speak(msg);
        var msg = new SpeechSynthesisUtterance('Sentiment Analysis: Various face emotions of a person can be captured. This would indicate their mood to the user.');
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
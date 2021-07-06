<html>
  <head>
    <title>Access Video and Microphone using Javascript</title> 
  </head>
  <body>  
    <video id="videoDiv" autoplay>
  </body>

  <script type="text/javascript">
    navigator.mediaDevices.getUserMedia({
     audio: true,
      video:{ 
        height:520
      }
    })
    .then(stream => {
      document.getElementById("videoDiv").srcObject = stream;
    })
  </script>
</video>
</html>

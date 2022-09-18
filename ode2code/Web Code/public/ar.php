
<html>
<head>
<script src="https://ar-code.com/ar-view-aframe/dist/aframe-v1.2.0.min.js"></script>
<script src="https://ar-code.com/ar-view-webar/aframe/build/aframe-ar.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>
    document.addEventListener('click', evt => {
    if (document.querySelector("#video").paused)
    document.querySelector("#video").play();
  	else
    document.querySelector("#video").pause();
	});
    </script>
</head>
<body id="body" style="background-color:#000000;margin: 0px;overflow: hidden;">
<a-scene embedded arjs="trackingMethod: best; sourceType: webcam" device-orientation-permission-ui="enabled: false" loading-screen="enabled: false" vr-mode-ui="enabled: false">
<a-assets>
<video id="video" src="store/uploads/products/video/53b5251363234c6e659ee4d8e6be3b6b_videoplayback.mp4" preload="auto" response-type="arraybuffer" crossorigin webkit-playsinline autoplay playsinline></video>
</a-assets>
<a-marker preset="hiro" videohandler smooth="true" smoothCount="2" smoothTolerance="0.01" smoothThreshold="2">
<a-video src="#video" width="6" height="3.6" scale="1 1 1" position="0 0 -1.7" rotation="-90 0 0"></a-video>
</a-marker>
<a-entity camera></a-entity>
</a-scene>
<div style="position: fixed; bottom: 10px; right: 10px; max-width:150px; text-align: center; z-index: 1;color: #fff; font-family: Arial, Helvetica, sans-serif;"><b>Give camera permission, point your device's camera at the QR Code. And click on screen.</b></div>
<div style="position: fixed; bottom: 10px; right: 10px; max-width:150px; text-align: center; z-index: 1;color: #fff; font-family: Arial, Helvetica, sans-serif;"><a href="index.php"><b>GO BACK</b></a></div>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ARJS Test</title>
    
    <script src="https://aframe.io/releases/0.8.0/aframe.min.js"></script>
    <script src="https://cdn.rawgit.com/jeromeetienne/AR.js/1.6.0/aframe/build/aframe-ar.js"></script>
</head>
<body style='margin : 0px; overflow: hidden;'>
	<a-scene embedded arjs='sourceType: webcam;'>
		<a-box position='0 0 0' material='opacity: 0.5;'></a-box>
		<a-marker preset="custom" type='pattern' url="assets/patterns/pattern-banane.patt">
            <a-entity obj-model="obj: url(assets/fish/fish.obj); mtl: url(assets/fish/fish.mtl)"></a-entity>
        </a-marker>
	</a-scene>
</body>
</html>
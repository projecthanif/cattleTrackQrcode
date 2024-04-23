<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Document</title>
</head>
<body>

<div class="container text-center">
    <div class="row">
        <div class="col-md-2">
            <p class="mb-0">Simple</p>
            <a href="" id="my-svg">{{$qrCode}}</a><br/>
        </div>
    </div>
</div>

<script>
    function convertSVGToPNG(svgElement, callback) {
        const svgData = new XMLSerializer().serializeToString(svgElement);
        const canvas = document.createElement("canvas");
        const ctx = canvas.getContext("2d");

        canvg(canvas, svgData, {
            ignoreClear: true, // Prevent clearing canvas (optional)
            scaleWidth: svgElement.clientWidth, // Optional: Set canvas width to SVG width
            scaleHeight: svgElement.clientHeight, // Optional: Set canvas height to SVG height
            renderCallback: callback // Optional: Callback function after rendering
        });

        const pngDataURL = canvas.toDataURL("image/png");
        return pngDataURL;
    }

    // Example usage:
    const svg = document.querySelector('#my-svg');

    const pngData = convertSVGToPNG(svg, (svg) => {
        console.log("SVG successfully rendered onto canvas!");
    });

    console.log("Converted PNG data URL:", pngData);

    // Use pngData for further processing or download the image (see previous example)

</script>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/canvg@3.0.5/dist/canvg.min.js"></script>
</body>
</html>

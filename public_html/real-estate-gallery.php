<!DOCTYPE html>
<html>
<head>
  

  <!-- Filepond stylesheet -->
   <link href="https://fonts.googleapis.com/css?family=Krub" rel="stylesheet"> 
    <script src="https://unpkg.com/filepond-plugin-file-validate-type/dist/filepond-plugin-file-validate-type.js"></script>

    <script src="https://unpkg.com/filepond-plugin-image-exif-orientation/dist/filepond-plugin-image-exif-orientation.js"></script>

  <script src="https://unpkg.com/filepond-plugin-image-crop/dist/filepond-plugin-image-crop.js"></script>

<link href="https://unpkg.com/filepond-plugin-image-edit/dist/filepond-plugin-image-edit.css" rel="stylesheet">


<script src="https://unpkg.com/filepond-plugin-image-edit/dist/filepond-plugin-image-edit.js"></script>

<script src="https://unpkg.com/filepond/dist/filepond.min.js"></script>
<script src="https://unpkg.com/filepond-plugin-image-validate-size/dist/filepond-plugin-image-validate-size.js"></script>
<script src="https://unpkg.com/filepond-plugin-image-transform/dist/filepond-plugin-image-transform.js"></script>
<script src="https://unpkg.com/jquery-filepond/filepond.jquery.js"></script>
<link href="https://unpkg.com/filepond-plugin-file-poster/dist/filepond-plugin-file-poster.css" rel="stylesheet">

<script src="https://unpkg.com/filepond-plugin-file-metadata/dist/filepond-plugin-file-poster.js"></script>

<link href="https://unpkg.com/filepond-plugin-image-preview/dist/filepond-plugin-image-preview.css" rel="stylesheet">
<script src="https://unpkg.com/filepond-plugin-file-encode/dist/filepond-plugin-file-encode.js"></script>

<script src="https://unpkg.com/filepond-plugin-image-preview/dist/filepond-plugin-image-preview.js"></script>
<script src="https://unpkg.com/filepond/dist/filepond.js"></script>
    
    

</head>
<body>

  <!-- We'll transform this input into a pond -->
 <input type="file" 
             class="filepond"
       name="filepond"
       accept="image/png, image/jpeg, image/gif"/>

  <!-- Load FilePond library -->
  <script src="https://unpkg.com/filepond/dist/filepond.js"></script>

  <!-- Turn all file input elements into ponds -->
  <script>
  FilePond.parse(document.body);
  FilePond.registerPlugin(
	// encodes the file as base64 data
  FilePondPluginFileEncode,
	
	// validates files based on input type
  FilePondPluginFileValidateType,
	
	// corrects mobile image orientation
  FilePondPluginImageExifOrientation,
	
	// previews the image
  FilePondPluginImagePreview,
	
	// crops the image to a certain aspect ratio
  FilePondPluginImageCrop,
	
	// resizes the image to fit a certain size
  FilePondPluginImageResize,
	
	// applies crop and resize information on the client
  FilePondPluginImageTransform
);

// Select the file input and use create() to turn it into a pond
// in this example we pass properties along with the create method
// we could have also put these on the file input element itself
FilePond.create(
	document.querySelector('input'),
	{
		labelIdle: `Drag & Drop your picture or <span class="filepond--label-action">Browse</span>`,
    imagePreviewHeight: 170,
    imageCropAspectRatio: '1:1',
    imageResizeTargetWidth: 200,
    imageResizeTargetHeight: 200,
    stylePanelLayout: 'compact circle',
    styleLoadIndicatorPosition: 'center bottom',
    styleButtonRemoveItemPosition: 'center bottom'
	}
);
  </script>

</body>
</html>
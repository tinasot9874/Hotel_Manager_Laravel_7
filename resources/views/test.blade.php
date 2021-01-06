<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset=UTF-8>
    <title>Document</title>
</head>
<body>
<textarea name=text id="description" cols="30" rows="10"></textarea>










<script src="{{asset('vendor/ckeditor4/ckeditor.js')}}"></script>

<script>
    CKFinder.start();
    CKEDITOR.replace('description');
</script>
</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>CKEditor 5 - Classic editor</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.ckeditor.com/4.15.1/standard/ckeditor.js"></script>
</head>

<body> 
    <fieldset>
        <div class="control-group">
            <label class="control-label" for="username"><i class="icon-user"></i>Service Description: </label>
            <div class="controls">
                <textarea name="description" style="width: 80%;" name="description" id="description">
						</textarea>
                <script>
                    CKEDITOR.replace('description');
                    CKEDITOR.config.width = 730;
                </script>
            </div>
        </div>
        <div class="user_msg" style="padding: 20px;float: right;font-size: 20px;font-family: arial;"></div>
        <div class="form-actions">
            <button onclick="myFunction()">Click me</button>
            <span id="message"></span>
        </div>
    </fieldset>

    <script>
        async function myFunction() {
            alert('ok');
            var Content = CKEDITOR.instances['description'].getData();
            console.log(Content);
        }
    </script>
</body>
</html>
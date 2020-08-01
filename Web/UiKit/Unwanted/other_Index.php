<!DOCTYPE html>
<html>
    <head>
        <title>Family Report</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="uikit/css/uikit.min.css" />
        <script src="uikit/js/uikit.min.js"></script>
        <script src="uikit/js/uikit-icons.min.js"></script>
        <script src="js/index.js"></script>
    </head>

    <body>

        <div class=" uk-height-max-large uk-background-cover " data-src="images\2.jpg"  uk-height-viewport uk-img>
            <!-- data-src="https://source.unsplash.com/1024x1024?nature"  https://source.unsplash.com/1024x1024?virus  data-src="" -->
            <div class="uk-cover-container uk-position-center">
                <div class="uk-card uk-felx uk-align-center uk-card-default uk-card-large uk-card-body uk-padding-large uk-width-large uk-width-3@m uk-height-max-auto" style="border-radius: 25% 10%; opacity: 0.8;">
                    <h1 class="uk-text-center">Login</h1>
                        <br>
                        <form action="post" action="">
                            <input class="uk-input" placeholder="User ID" name="uid" type="text" value="1754862" style="border-radius: 10% 25%;" required>
                            <br><br>
                            <input class="uk-input" placeholder="Password" name="password" type="password" style="border-radius: 10% 25%;" required>
                            <br><br>
                            <input type="hidden" name="sub" value="">
                        </form>    
                        <button class="uk-button uk-button-primary uk-align-center" onclick="validateCredentials()" style="border-radius: 10% 25%;">Submit</button>
                </div>
            </div>
        </div>
        
    </body>
</html>
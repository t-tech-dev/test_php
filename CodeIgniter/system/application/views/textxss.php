<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>test xss</title>
        <style>
            h1, h2, h3, h4 {margin: 0 0 10px 0;}
            .test_result {
                background: #f5f5f5;
                border:1px dotted #ccc;
                margin: 0 0 50px 0;
                min-height: 50px;
            }
        </style>
    </head>
    <body>
        <h1>test xss</h1>
        <p><a href="http://ha.ckers.org/xss.html" target="_testsheet">test sheet</a></p>
        <h3>method post</h3>
        <?php echo form_open($this->uri->uri_string()."?method=post"); ?> 
            <textarea name="inputpost" cols="50" rows="10"><?php echo (isset($inputpost) ? $inputpost : ""); ?></textarea>
            <input type="submit" value="submit" /> <input type="reset" value="reset" />
        <?php echo form_close("\n"); ?>
        <div class="test_result">
            <h4>test result:</h4>
            <div>
                <?php echo (isset($resultpost) ? $resultpost : ""); ?> 
            </div>
        </div>
         
         
        <hr />
         
         
        <h3>method get</h3>
        <?php echo form_open($this->uri->uri_string()."?method=post", array("method" => "get")); ?> 
            <textarea name="inputget" cols="50" rows="10"><?php echo (isset($inputget) ? $inputget : ""); ?></textarea>
            <input type="submit" value="submit" /> <input type="reset" value="reset" />
        <?php echo form_close("\n"); ?>
        <div class="test_result">
            <h4>test result:</h4>
            <div>
                <?php echo (isset($resultget) ? $resultget : ""); ?> 
            </div>
        </div>
         
         
    </body>
</html>